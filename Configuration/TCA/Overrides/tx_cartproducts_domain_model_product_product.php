<?php

declare(strict_types=1);

defined('TYPO3_MODE') or die();

call_user_func(function () {
    $GLOBALS['TCA']['tx_cartproducts_domain_model_product_product']['columns']['service_attribute3']['label'] = 'Pick Up Only';
    $GLOBALS['TCA']['tx_cartproducts_domain_model_product_product']['columns']['service_attribute3']['config']['type'] = 'check';

});
