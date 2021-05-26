<?php
/**
 * Copyright Shopgate GmbH.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @copyright 2021 Shopgate GmbH
 * @license   http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */

class Retailred_Storefront_Block_Product extends Mage_Core_Block_Template
{
    /** @var Retailred_Storefront_Helper_Data */
    private $dataHelper;

    protected function _construct()
    {
        parent::_construct();
        $this->dataHelper = Mage::helper('retailred_storefront');
    }


    public function getProductsData()
    {
        $productCode = $this->dataHelper->getConfig(Retailred_Storefront_Model_Config::XML_PATH_API_PRODUCT_CODE_MAPPING);
        $product = Mage::registry('current_product');

        $products = [
            $product->getEntityId() => $productCode === Retailred_Storefront_Model_Source_Productcodemapping::ID
            ? $product->getEntityId()
            : $product->getSku()
        ];

        if ($product->getTypeId() === 'configurable') {
            $childProducts = Mage::getModel('catalog/product_type_configurable')->getUsedProducts(null,$product);
            foreach ($childProducts as $child) {
                $products[$child->getEntityId()] = $productCode === Retailred_Storefront_Model_Source_Productcodemapping::ID
                    ? $child->getEntityId()
                    : $child->getSku();
            }
        }

        return $products;
    }
}
