<?php
if (!defined('TYPO3')) {
	die('Access denied.');
}

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

// Add static template configuration
ExtensionManagementUtility::addStaticFile(
	'pb_news_jobs',
	'Configuration/TypoScript',
	'News Jobs'
);
