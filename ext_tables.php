<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Streit.Seminar',
            'Seminars',
            'Seminars'
        );

	    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
		    'Streit.Seminar',
		    'Events',
		    'Eventlist'
	    );

	    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
		    'Streit.Seminar',
		    'Series',
		    'Serieslist'
	    );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_seminar_domain_model_seminar', 'EXT:seminar/Resources/Private/Language/locallang_csh_tx_seminar_domain_model_seminar.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_seminar_domain_model_seminar');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_seminar_domain_model_event', 'EXT:seminar/Resources/Private/Language/locallang_csh_tx_seminar_domain_model_event.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_seminar_domain_model_event');

	    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_seminar_domain_model_series', 'EXT:seminar/Resources/Private/Language/locallang_csh_tx_seminar_domain_model_series.xlf');
	    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_seminar_domain_model_series');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_seminar_domain_model_type', 'EXT:seminar/Resources/Private/Language/locallang_csh_tx_seminar_domain_model_type.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_seminar_domain_model_type');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_seminar_domain_model_section', 'EXT:seminar/Resources/Private/Language/locallang_csh_tx_seminar_domain_model_section.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_seminar_domain_model_section');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_seminar_domain_model_category', 'EXT:seminar/Resources/Private/Language/locallang_csh_tx_seminar_domain_model_category.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_seminar_domain_model_category');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_seminar_domain_model_location', 'EXT:seminar/Resources/Private/Language/locallang_csh_tx_seminar_domain_model_location.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_seminar_domain_model_location');

	    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_seminar_domain_model_form', 'EXT:seminar/Resources/Private/Language/locallang_csh_tx_seminar_domain_model_form.xlf');
	    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_seminar_domain_model_form');
    },
    $_EXTKEY
);
