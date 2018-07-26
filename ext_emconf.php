<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Column Layout Arndtteunissen',
    'description' => 'Adds arndtteunissens column configuration to ext:column_layout',
    'version' => '0.1.0',
    'category' => 'fe',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-9.4.99'
        ]
    ],
    'state' => 'beta',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => true,
    'author' => 'Arndtteunissen',
    'author_email' => 'dev@arndtteunissen.de',
    'author_company' => 'Arndtteunissen',
    'autoload' =>[
        'psr-4' =>[
            'Arndtteunissen\\ColumnLayoutArndtteunissen\\' => 'Classes/'
        ]
    ]
];
