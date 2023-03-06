<?php

$EM_CONF[$_EXTKEY] = array (
	'title' => 'News Jobs',
	'description' => 'Extends the Extension news with additional fields for jobs offers.',
	'category' => 'fe',
	'version' => '11.5.1',
	'state' => 'stable',
	'author' => 'Peter Benke',
	'author_email' => 'info@typomotor.de',
	'author_company' => '',
	'constraints' =>[
		'depends' => [
			'typo3' => '11.5.0-11.5.99',
			'news' => '10.0.0-10.9.99',
		],
	],
);
