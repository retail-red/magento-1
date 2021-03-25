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
 *
 * @copyright Shopgate GmbH
 * @license   http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */

class Retailred_Storefront_Model_Source_Rendermode
{
    /**
     * @return array
     */
    public function toOptionArray()
    {
        return [
            [
                'value' => Retailred_Storefront_Model_Config::RENDER_MODE_MODAL,
                'label' => Mage::helper('retailred_storefront')->__('Modal')
            ],
            [
                'value' => Retailred_Storefront_Model_Config::RENDER_MODE_LIST,
                'label' => Mage::helper('retailred_storefront')->__('Dropdown')
            ]
        ];
    }
}
