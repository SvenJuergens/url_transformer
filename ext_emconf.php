<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "miniredirect"
 *
 * Auto generated by Extension Builder 2019-04-30
 *
 * Manual updates:
 * Only the data in the array - anything else is removed by next write.
 * "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
    'title' => 'MiniRedirect',
    'description' => 'A url with uppercase letters or umlauts is forwarded to the lowercase URL with ae, oe, ue replacements',
    'category' => 'plugin',
    'author' => 'Sven Juergens',
    'author_email' => 'sj@nordsonne.de',
    'state' => 'beta',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '2.1.3',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-9.5.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
