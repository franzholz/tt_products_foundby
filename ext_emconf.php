<?php

/*************************************************************************
 * Extension Manager/Repository config file for ext "tt_products_foundby ".
 *************************************************************************/

$EM_CONF[$_EXTKEY] = [
	'title' => 'Foundby Selector Texts for Shop System',
	'description' => 'Modified foundby select box entries for tt_products',
	'category' => 'plugin',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'clearCacheOnLoad' => 1,
	'author' => 'Franz Holzinger',
	'author_email' => 'franz@ttproducts.de',
	'author_company' => 'jambage.com',
	'version' => '0.1.4',
	'constraints' => [
		'depends' => [
			'typo3' => '6.2.0-11.5.99',
			'tt_products' => '2.9.10-0.0.0'
		],
	], 
];
