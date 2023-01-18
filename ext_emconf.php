<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Form challenge/response spam shield',
    'description' => 'Challenge/response spam protection for ext:form',
    'category' => 'fe',
    'author' => 'Torben Hansen',
    'author_email' => 'derhansen@gmail.com',
    'state' => 'beta',
    'uploadfolder' => '0',
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'version' => '1.2.2',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.31-11.5.99',
            'php' => '7.2.0-8.1.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
