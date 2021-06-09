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
 * @copyright Shopgate GmbH
 * @license   http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */

class Retailred_Storefront_Model_Config
{
    const XML_PATH_API_APIKEY = 'retailred_storefront/api/apiKey';
    const XML_PATH_API_API_STAGE = 'retailred_storefront/api/apiStage';
    const XML_PATH_API_UNIT_SYSTEM = 'retailred_storefront/api/unitSystem';
    const XML_PATH_API_COUNTRIES = 'retailred_storefront/api/countries';
    const XML_PATH_API_PRODUCT_CODE_MAPPING = 'retailred_storefront/api/productCodeMapping';
    const XML_PATH_API_BROWSER_HISTORY = 'retailred_storefront/api/browserHistory';
    const XML_PATH_API_USE_GEOLOCATION_IMMEDIATELY = 'retailred_storefront/api/useGeolocationImmediately';
    const XML_PATH_API_TEST_MODE = 'retailred_storefront/api/testMode';

    const XML_PATH_GENERAL_RENDER = 'retailred_storefront/general/render';
    const XML_PATH_GENERAL_RENDER_MODE = 'retailred_storefront/general/renderMode';
    const XML_PATH_GENERAL_INVENTORY_HIDE_NUMBER = 'retailred_storefront/general/inventoryHideNumber';
    const XML_PATH_GENERAL_INVENTORY_SHOW_EXACT_UNTIL = 'retailred_storefront/general/inventoryShowExactUntil';
    const XML_PATH_GENERAL_INVENTORY_SHOW_LOW_UNTIL = 'retailred_storefront/general/inventoryShowLowUntil';
    const XML_PATH_GENERAL_TERMS_LINK = 'retailred_storefront/general/termsLink';
    const XML_PATH_GENERAL_PRIVACY_LINK = 'retailred_storefront/general/privacyLink';

    const XML_PATH_DESIGN_COLORS = 'retailred_storefront/design/colors';
    const XML_PATH_DESIGN_TRANSLATIONS = 'retailred_storefront/design/translations';

    const RENDER_DISABLED = 'disabled';
    const RENDER_RESERVE_BUTTON = 'reserveButton';
    const RENDER_LIVE_INVENTORY = 'liveInventory';

    const RENDER_MODE_MODAL = 'modal';
    const RENDER_MODE_LIST = 'list';
}
