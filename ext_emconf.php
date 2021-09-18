<?php

$EM_CONF[$_EXTKEY] = array (
	'title' => 'News Jobs',
	'description' => 'Extends the Extension news with additional fields for jobs offers.',
	'category' => 'fe',
	'version' => '10.4.0',
	'state' => 'stable',
	'author' => 'Peter Benke',
	'author_email' => 'info@typomotor.de',
	'author_company' => '',
	'constraints' =>[
		'depends' => [
			'typo3' => '10.4.0-10.4.99',
			'news' => '8.0.0-8.9.99',
		],
	],
);
