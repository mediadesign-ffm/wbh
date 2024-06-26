<?php

/**********************************************************************
 * Extension Manager/Repository config file for Sitepackage ext "WBH".
 *********************************************************************/

/** @var string $_EXTKEY */
$EM_CONF[$_EXTKEY] = [
    'title'            => 'wbh - Basic Installation',
    'description'      => 'wbh - Distribution.',
    'version'          => '11.0.0',
    'state'            => 'alpha',
    'category'         => 'templates',
    'author'           => 'Michael Lang',
    'author_email'     => 'info@mediadesign-ffm.de',
    'author_company'   => 'mediadesign',
    'uploadfolder'     => false,
    'createDirs'       => '',
    'clearCacheOnLoad' => true,
    'constraints'      => [
        'depends'   => [
            'typo3'            => '11.5.0-',
        ],
        'conflicts' => [],
        'suggests'  => [],
    ],
];