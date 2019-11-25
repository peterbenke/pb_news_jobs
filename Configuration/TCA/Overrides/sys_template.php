<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

// Add static template configuration
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
	'pb_news_jobs',
	'Configuration/TypoScript',
	'News Jobs'
);
