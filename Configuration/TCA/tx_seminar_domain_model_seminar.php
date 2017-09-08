<?php
return [
	'ctrl'      => [
		'title'                    => 'LLL:EXT:seminar/Resources/Private/Language/locallang_db.xlf:tx_seminar_domain_model_seminar',
		'label'                    => 'title',
		'tstamp'                   => 'tstamp',
		'crdate'                   => 'crdate',
		'cruser_id'                => 'cruser_id',
		'versioningWS'             => true,
		'languageField'            => 'sys_language_uid',
		'transOrigPointerField'    => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete'                   => 'deleted',
		'enablecolumns'            => [
			'disabled'  => 'hidden',
			'starttime' => 'starttime',
			'endtime'   => 'endtime',
		],
		'searchFields'             => 'title,subtitle,teaser,description,contents,methods,instructor,audience,educational_credential_awarded,std_price,std_amount,type,section,category,std_location',
		'iconfile'                 => 'EXT:seminar/Resources/Public/Icons/tx_seminar_domain_model_seminar.gif'
	],
	'interface' => [
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, subtitle, type, section, category, std_price, std_amount, std_location, form, series, contents, methods, instructor, audience, educational_credential_awarded, teaser, description',
	],
	'types'     => [
		'1' => [
			'showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, subtitle, type, section, category, contents, methods, instructor, audience, educational_credential_awarded, std_price, std_amount, std_location, form, teaser, description, --div--;LLL:EXT:seminar/Resources/Private/Language/locallang.xlf:tx_seminar_domain_model_seminar.events, series, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime',
			'columnsOverrides' => [
				'contents' => [
					'config' => [
						'enableRichtext' => true,
						'richtextConfiguration' => 'default'
					]
				]
			]
		],
	],
	'columns'   => [
		'sys_language_uid'             => [
			'exclude' => true,
			'label'   => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config'  => [
				'type'       => 'select',
				'renderType' => 'selectSingle',
				'special'    => 'languages',
				'items'      => [
					[
						'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
						-1,
						'flags-multiple'
					]
				],
				'default'    => 0,
			],
		],
		'l10n_parent'                  => [
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude'     => true,
			'label'       => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
			'config'      => [
				'type'                => 'select',
				'renderType'          => 'selectSingle',
				'items'               => [
					['', 0],
				],
				'foreign_table'       => 'tx_seminar_domain_model_seminar',
				'foreign_table_where' => 'AND tx_seminar_domain_model_seminar.pid=###CURRENT_PID### AND tx_seminar_domain_model_seminar.sys_language_uid IN (-1,0)',
			],
		],
		'l10n_diffsource'              => [
			'config' => [
				'type' => 'passthrough',
			],
		],
		't3ver_label'                  => [
			'label'  => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
			'config' => [
				'type' => 'input',
				'size' => 30,
				'max'  => 255,
			],
		],
		'hidden'                       => [
			'exclude' => true,
			'label'   => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
			'config'  => [
				'type'  => 'check',
				'items' => [
					'1' => [
						'0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
					]
				],
			],
		],
		'starttime'                    => [
			'exclude'   => true,
			'label'     => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
			'config'    => [
				'behaviour'=> [
					'allowLanguageSynchronization' => true
				],
				'type'    => 'input',
				'size'    => 13,
				'eval'    => 'datetime',
				'default' => 0,
				'renderType' => 'inputDateTime',
			]
		],
		'endtime'                      => [
			'exclude'   => true,
			'label'     => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
			'config'    => [
				'behaviour'=> [
					'allowLanguageSynchronization' => true
				],
				'type'    => 'input',
				'size'    => 13,
				'eval'    => 'datetime',
				'default' => 0,
				'range'   => [
					'upper' => mktime(0, 0, 0, 1, 1, 2038)
				],
				'renderType' => 'inputDateTime',
			],
		],
		'title'                        => [
			'exclude' => true,
			'label'   => 'LLL:EXT:seminar/Resources/Private/Language/locallang_db.xlf:tx_seminar_domain_model_seminar.title',
			'config'  => [
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			],
		],
		'subtitle'                     => [
			'exclude' => true,
			'label'   => 'LLL:EXT:seminar/Resources/Private/Language/locallang_db.xlf:tx_seminar_domain_model_seminar.subtitle',
			'config'  => [
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			],
		],
		'teaser'                       => [
			'exclude'       => true,
			'label'         => 'LLL:EXT:seminar/Resources/Private/Language/locallang_db.xlf:tx_seminar_domain_model_seminar.teaser',
			'config'        => [
				'type' => 'text',
				'rows' => 5,
				'eval' => 'trim',
				'enableRichtext' => true,
			],
		],
		'description'                  => [
			'exclude'       => true,
			'label'         => 'LLL:EXT:seminar/Resources/Private/Language/locallang_db.xlf:tx_seminar_domain_model_seminar.description',
			'config'        => [
				'type' => 'text',
				'rows' => 3,
				'eval' => 'trim',
				'enableRichtext' => true,
			],
		],

		'contents'                     => [
			'exclude' => true,
			'label'   => 'LLL:EXT:seminar/Resources/Private/Language/locallang_db.xlf:tx_seminar_domain_model_seminar.contents',
			'config'        => [
				'type' => 'text',
				'enableRichtext' => true,
				'rows' => 3,
				'eval' => 'trim',
			],
		],
		'methods'                      => [
			'exclude'       => true,
			'label'         => 'LLL:EXT:seminar/Resources/Private/Language/locallang_db.xlf:tx_seminar_domain_model_seminar.methods',
			'config'        => [
				'type' => 'text',
				'enableRichtext' => true,
				'rows' => 3,
				'eval' => 'trim',
			],
		],
		'instructor'                   => [
			'exclude'       => true,
			'label'         => 'LLL:EXT:seminar/Resources/Private/Language/locallang_db.xlf:tx_seminar_domain_model_seminar.instructor',
			'config'        => [
				'type' => 'text',
				'rows' => 2,
				'eval' => 'trim',
				'enableRichtext' => true,
			],
		],
		'audience'                     => [
			'exclude'       => true,
			'label'         => 'LLL:EXT:seminar/Resources/Private/Language/locallang_db.xlf:tx_seminar_domain_model_seminar.audience',
			'config'        => [
				'type' => 'text',
				'rows' => 2,
				'eval' => 'trim',
				'enableRichtext' => true,
			],
		],
		'educational_credential_awarded' => [
			'exclude'       => true,
			'label'         => 'LLL:EXT:seminar/Resources/Private/Language/locallang_db.xlf:tx_seminar_domain_model_seminar.educational_credential_awarded',
			'config'        => [
				'type' => 'text',
				'rows' => 2,
				'eval' => 'trim',
				'enableRichtext' => true,
			],
		],

		'std_price'    => [
			'exclude' => true,
			'label'   => 'LLL:EXT:seminar/Resources/Private/Language/locallang_db.xlf:tx_seminar_domain_model_seminar.std_price',
			'config'  => [
				'type' => 'text',
				'rows' => 2,
				'eval' => 'trim',
				'enableRichtext' => true,
			]
		],
		'std_amount'   => [
			'exclude' => true,
			'label'   => 'LLL:EXT:seminar/Resources/Private/Language/locallang_db.xlf:tx_seminar_domain_model_seminar.std_amount',
			'config'  => [
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			],
		],
		'type'         => [
			'exclude' => true,
			'label'   => 'LLL:EXT:seminar/Resources/Private/Language/locallang_db.xlf:tx_seminar_domain_model_seminar.type',
			'config'  => [
				'type'          => 'select',
				'renderType'    => 'selectSingle',
				'foreign_table' => 'tx_seminar_domain_model_type',
				'minitems'      => 0,
				'maxitems'      => 1,
			],
		],
		'section'      => [
			'exclude' => true,
			'label'   => 'LLL:EXT:seminar/Resources/Private/Language/locallang_db.xlf:tx_seminar_domain_model_seminar.section',
			'config'  => [
				'type'          => 'select',
				'renderType'    => 'selectSingle',
				'foreign_table' => 'tx_seminar_domain_model_section',
				'minitems'      => 0,
				'maxitems'      => 1,
			],
		],
		'category'     => [
			'exclude' => true,
			'label'   => 'LLL:EXT:seminar/Resources/Private/Language/locallang_db.xlf:tx_seminar_domain_model_seminar.category',
			'config'  => [
				'type'          => 'select',
				'renderType'    => 'selectSingle',
				'foreign_table' => 'tx_seminar_domain_model_category',
				'minitems'      => 0,
				'maxitems'      => 1,
			],
		],
		'series'       => [
			'exclude' => true,
			'label'   => 'LLL:EXT:seminar/Resources/Private/Language/locallang_db.xlf:tx_seminar_domain_model_seminar.series',
			'config'  => [
				'type'          => 'inline',
				'foreign_table' => 'tx_seminar_domain_model_series',
				'foreign_field' => 'seminar',

				'maxitems'   => 9999,
				'appearance' => [
					'collapseAll'                     => 1,
					'useSortable'                     => 1,
					'enabledControls'                 => array('dragdrop' => 1, 'sort' => 1),
					'levelLinksPosition'              => 'bottom',
					'newRecordLinkAddTitle'           => 1,
					'showSynchronizationLink'         => 1,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink'         => 1
				],
			],
		],
		'std_location' => [
			'exclude' => true,
			'label'   => 'LLL:EXT:seminar/Resources/Private/Language/locallang_db.xlf:tx_seminar_domain_model_seminar.std_location',
			'config'  => [
				'type'          => 'select',
				'renderType'    => 'selectSingle',
				'foreign_table' => 'tx_seminar_domain_model_location',
				'minitems'      => 0,
				'maxitems'      => 1,
			],
		],
		'form'         => [
			'exclude' => true,
			'label'   => 'LLL:EXT:seminar/Resources/Private/Language/locallang_db.xlf:tx_seminar_domain_model_seminar.form',
			'config'  => [
				'type'          => 'select',
				'renderType'    => 'selectSingle',
				'foreign_table' => 'tx_seminar_domain_model_form',
				'minitems'      => 0,
				'maxitems'      => 1,
			],
		],
	],
];
