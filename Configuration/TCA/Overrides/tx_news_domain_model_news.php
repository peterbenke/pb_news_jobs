<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}
$tempColumns = array(
	'tx_pbnewsjobs_entrydate' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:pb_news_jobs/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.tx_pbnewsjobs_entrydate',
		'config' => array(
			'type' => 'input',
			'size' => '30',
			'eval' => 'trim',
		)
	),
	'tx_pbnewsjobs_location' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:pb_news_jobs/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.tx_pbnewsjobs_location',
		'config' => array(
			'type' => 'input',
			'size' => '30',
			'eval' => 'trim',
		)
	),
	'tx_pbnewsjobs_area' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:pb_news_jobs/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.tx_pbnewsjobs_area',
		'config' => array(
			'type' => 'input',
			'size' => '30',
			'eval' => 'trim',
		)
	),
	'tx_pbnewsjobs_position' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:pb_news_jobs/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.tx_pbnewsjobs_position',
		'config' => array(
			'type' => 'input',
			'size' => '30',
			'eval' => 'trim',
		)
	),
	'tx_pbnewsjobs_jobnumber' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:pb_news_jobs/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.tx_pbnewsjobs_jobnumber',
		'config' => array(
			'type' => 'input',
			'size' => '30',
			'eval' => 'trim',
		)
	),
	'tx_pbnewsjobs_payment' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:pb_news_jobs/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.tx_pbnewsjobs_payment',
		'config' => array(
			'type' => 'text',
			'cols' => '30',
			'rows' => '5',
			'enableRichtext' => true,
		)
	),
	'tx_pbnewsjobs_tasks' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:pb_news_jobs/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.tx_pbnewsjobs_tasks',
		'config' => array(
			'type' => 'text',
			'cols' => '30',
			'rows' => '5',
			'enableRichtext' => true,
		)
	),
	'tx_pbnewsjobs_requirements' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:pb_news_jobs/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.tx_pbnewsjobs_requirements',
		'config' => array(
			'type' => 'text',
			'cols' => '30',
			'rows' => '5',
			'enableRichtext' => true,
		)
	),
	'tx_pbnewsjobs_contact' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:pb_news_jobs/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.tx_pbnewsjobs_contact',
		'config' => array(
			'type' => 'text',
			'cols' => '30',
			'rows' => '5',
			'enableRichtext' => true,
		)
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_news_domain_model_news', $tempColumns, true);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tx_news_domain_model_news','tx_pbnewsjobs_entrydate;;;;1-1-1, tx_pbnewsjobs_location, tx_pbnewsjobs_area, tx_pbnewsjobs_position, tx_pbnewsjobs_jobnumber, tx_pbnewsjobs_payment;;;richtext[]:rte_transform[mode=ts_css|imgpath=uploads/tx_pbnewsjobs/rte/], tx_pbnewsjobs_tasks;;;richtext[]:rte_transform[mode=ts_css|imgpath=uploads/tx_pbnewsjobs/rte/], tx_pbnewsjobs_requirements;;;richtext[]:rte_transform[mode=ts_css|imgpath=uploads/tx_pbnewsjobs/rte/], tx_pbnewsjobs_contact;;;richtext[]:rte_transform[mode=ts_css|imgpath=uploads/tx_pbnewsjobs/rte/]');
