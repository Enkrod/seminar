<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
	{

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Streit.Seminar',
            'Seminars',
            [
                'Seminar' => 'list, show',
            ],
            // non-cacheable actions
            [
	            'Seminar' => 'list, show',
            ]
        );
		\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
			'Streit.Seminar',
			'Series',
			[
				'Series' => 'list',
			],
			// non-cacheable actions
			[
				'Series' => 'list',
			]
		);
		\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
			'Streit.Seminar',
			'Locations',
			[
				'Location' => 'list, show',
			],
			// non-cacheable actions
			[
				'Location' => 'list, show',
			]
		);

	// wizards
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
		'mod {
			wizards.newContentElement.wizardItems.plugins {
				elements {
					seminars {
						icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($extKey) . 'Resources/Public/Icons/user_plugin_seminars.svg
						title = LLL:EXT:seminar/Resources/Private/Language/locallang_db.xlf:tx_seminar_domain_model_seminars
						description = LLL:EXT:seminar/Resources/Private/Language/locallang_db.xlf:tx_seminar_domain_model_seminars.description
						tt_content_defValues {
							CType = list
							list_type = seminar_seminars
						}
					}
				}
				show = *
			}
	   }'
	);
    },
    $_EXTKEY
);
