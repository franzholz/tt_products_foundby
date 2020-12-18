<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "tt_products".
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
	'title' => 'Shop System',
	'description' => 'Modified foundby select box entries for tt_products',
	'category' => 'plugin',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'clearCacheOnLoad' => 1,
	'author' => 'Franz Holzinger',
	'author_email' => 'franz@ttproducts.de',
	'author_company' => 'jambage.com',
	'version' => '0.1.3',
	'constraints' => [
		'depends' => [
			'php' => '5.5.0-7.99.99',
			'typo3' => '6.2.0-10.4.99',
			'tt_products' => '2.9.10-0.0.0'
		],
	], 
];