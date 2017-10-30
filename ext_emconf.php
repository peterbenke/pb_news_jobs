<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "pb_news_jobs".
 *
 * Auto generated 15-05-2015 21:08
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
	'title' => 'News Jobs',
	'description' => 'Extends the Extension news with additional fields for jobs offers.',
	'category' => 'fe',
	'version' => '2.1.0',
	'state' => 'stable',
	'uploadfolder' => true,
	'createDirs' => '',
	'clearcacheonload' => true,
	'author' => 'Peter Benke',
	'author_email' => 'info@typomotor.de',
	'author_company' => '',
	'constraints' => 
	array (
		'depends' => 
		array (
			'typo3' => '7.6.0-8.7.99',
			'news' => '5.0.0-6.9.99',
		),
		'conflicts' => 
		array (
		),
		'suggests' => 
		array (
		),
	),
);

