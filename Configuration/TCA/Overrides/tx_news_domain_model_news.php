<?php
if (!defined('TYPO3')) {
	die ('Access denied.');
}

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

$tempColumns = [
	'tx_pbnewsjobs_entrydate' => [
		'exclude' => 1,
		'label' => 'LLL:EXT:pb_news_jobs/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.tx_pbnewsjobs_entrydate',
		'config' => [
			'type' => 'input',
			'size' => '30',
			'eval' => 'trim',
		]
	],
	'tx_pbnewsjobs_location' => [
		'exclude' => 1,
		'label' => 'LLL:EXT:pb_news_jobs/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.tx_pbnewsjobs_location',
		'config' => [
			'type' => 'input',
			'size' => '30',
			'eval' => 'trim',
		]
	],
	'tx_pbnewsjobs_area' => [
		'exclude' => 1,
		'label' => 'LLL:EXT:pb_news_jobs/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.tx_pbnewsjobs_area',
		'config' => [
			'type' => 'input',
			'size' => '30',
			'eval' => 'trim',
		]
	],
	'tx_pbnewsjobs_position' => [
		'exclude' => 1,
		'label' => 'LLL:EXT:pb_news_jobs/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.tx_pbnewsjobs_position',
		'config' => [
			'type' => 'input',
			'size' => '30',
			'eval' => 'trim',
		]
	],
	'tx_pbnewsjobs_jobnumber' => [
		'exclude' => 1,
		'label' => 'LLL:EXT:pb_news_jobs/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.tx_pbnewsjobs_jobnumber',
		'config' => [
			'type' => 'input',
			'size' => '30',
			'eval' => 'trim',
		]
	],
	'tx_pbnewsjobs_payment' => [
		'exclude' => 1,
		'label' => 'LLL:EXT:pb_news_jobs/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.tx_pbnewsjobs_payment',
		'config' => [
			'type' => 'text',
			'cols' => '30',
			'rows' => '5',
			'enableRichtext' => true,
		]
	],
	'tx_pbnewsjobs_tasks' => [
		'exclude' => 1,
		'label' => 'LLL:EXT:pb_news_jobs/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.tx_pbnewsjobs_tasks',
		'config' => [
			'type' => 'text',
			'cols' => '30',
			'rows' => '5',
			'enableRichtext' => true,
		]
	],
	'tx_pbnewsjobs_requirements' => [
		'exclude' => 1,
		'label' => 'LLL:EXT:pb_news_jobs/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.tx_pbnewsjobs_requirements',
		'config' => [
			'type' => 'text',
			'cols' => '30',
			'rows' => '5',
			'enableRichtext' => true,
		]
	],
	'tx_pbnewsjobs_contact' => [
		'exclude' => 1,
		'label' => 'LLL:EXT:pb_news_jobs/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.tx_pbnewsjobs_contact',
		'config' => [
			'type' => 'text',
			'cols' => '30',
			'rows' => '5',
			'enableRichtext' => true,
		]
	],
];

ExtensionManagementUtility::addTCAcolumns('tx_news_domain_model_news', $tempColumns);
ExtensionManagementUtility::addToAllTCAtypes('tx_news_domain_model_news','tx_pbnewsjobs_entrydate;;;;1-1-1, tx_pbnewsjobs_location, tx_pbnewsjobs_area, tx_pbnewsjobs_position, tx_pbnewsjobs_jobnumber, tx_pbnewsjobs_payment;;;richtext[]:rte_transform[mode=ts_css|imgpath=uploads/tx_pbnewsjobs/rte/], tx_pbnewsjobs_tasks;;;richtext[]:rte_transform[mode=ts_css|imgpath=uploads/tx_pbnewsjobs/rte/], tx_pbnewsjobs_requirements;;;richtext[]:rte_transform[mode=ts_css|imgpath=uploads/tx_pbnewsjobs/rte/], tx_pbnewsjobs_contact;;;richtext[]:rte_transform[mode=ts_css|imgpath=uploads/tx_pbnewsjobs/rte/]');
