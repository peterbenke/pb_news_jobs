<?php

$EM_CONF[$_EXTKEY] = array (
	'title' => 'News Jobs',
	'description' => 'Extends the Extension news with additional fields for jobs offers.',
	'category' => 'fe',
	'version' => '3.0.0',
	'state' => 'stable',
	'author' => 'Peter Benke',
	'author_email' => 'info@typomotor.de',
	'author_company' => '',
	'constraints' =>[
		'depends' => [
			'typo3' => '9.5.0-9.5.99',
			'php' => '7.2',
			'news' => '7.0.6-7.3.99',
		],
	],
);
