<?php

$EM_CONF[$_EXTKEY] = array (
	'title' => 'News Jobs',
	'description' => 'Extends the Extension news with additional fields for jobs offers.',
	'category' => 'fe',
	'version' => '12.4.1',
	'state' => 'stable',
	'author' => 'Peter Benke',
	'author_email' => 'info@typomotor.de',
	'author_company' => '',
	'constraints' =>[
		'depends' => [
            'typo3' => '12.4.0-12.4.99',
		],
	],
);
