<?php

$EM_CONF['cart_pick_up_only'] = [
    'title' => 'Cart - Pick Up Only',
    'description' => 'Shopping Cart(s) for TYPO3 - Pick Up Only',
    'category' => 'plugin',
    'shy' => false,
    'version' => '0.1.0',
    'dependencies' => '',
    'conflicts' => '',
    'priority' => '',
    'loadOrder' => '',
    'module' => '',
    'state' => 'beta',
    'uploadfolder' => false,
    'createDirs' => '',
    'modify_tables' => '',
    'clearcacheonload' => true,
    'lockType' => '',
    'author' => 'Daniel Gohlke',
    'author_email' => 'ext.cart@extco.de',
    'author_company' => 'extco.de UG (haftungsbeschränkt)',
    'CGLcompliance' => null,
    'CGLcompliance_note' => null,
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-9.5.99',
            'cart' => '6.9.0',
            'cart_products' => '2.5.0'
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
