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
                'Seminar' => '',
                'Event' => '',
                'Type' => '',
                'Location' => ''
            ]
        );
		\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
			'Streit.Seminar',
			'Events',
			[
				'Event' => 'list',
				'Series' => 'list',
				'Seminar' => 'list, show',
				'Type' => 'list, show',
				'Section' => 'list, show',
				'Category' => 'list, show',
				'Location' => 'list, show'
			],
			// non-cacheable actions
			[
				'Event' => '',
				'Seminar' => '',
				'Type' => '',
				'Location' => ''
			]
		);
		\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
			'Streit.Seminar',
			'Series',
			[
				'Series' => 'list',
				'Seminar' => 'list, show',
			],
			// non-cacheable actions
			[
				'Event' => '',
				'Seminar' => '',
				'Type' => '',
				'Location' => ''
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
