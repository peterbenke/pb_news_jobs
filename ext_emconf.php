<?php

$EM_CONF[$_EXTKEY] = [
	'title' => 'News Jobs',
	'description' => 'Extends the Extension news with additional fields for jobs offers.',
	'category' => 'fe',
	'version' => '13.4.0',
	'state' => 'stable',
	'author' => 'Peter Benke',
	'author_email' => 'info@typomotor.de',
	'author_company' => '',
	'constraints' =>[
		'depends' => [
            'news' => '12.0.0-14.9.99',
            'typo3' => '13.4.0-13.4.99',
		],
	],
];
