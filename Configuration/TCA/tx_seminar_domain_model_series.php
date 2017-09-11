<?php
return [
    'ctrl' => [
        'title'	=> 'LLL:EXT:seminar/Resources/Private/Language/locallang_db.xlf:tx_seminar_domain_model_series',
        'label' => 'registration_date',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
		'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => [
            'disabled' => 'hidden',
        ],
		'searchFields' => 'registration_date',
        'iconfile' => 'EXT:seminar/Resources/Public/Icons/tx_seminar_domain_model_series.gif'
    ],
    'interface' => [
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, registration_date, events',
    ],
    'types' => [
		'1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, registration_date, events'],
    ],
    'columns' => [
		'sys_language_uid' => [
			'exclude' => true,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => [
				'type' => 'select',
				'renderType' => 'selectSingle',
				'special' => 'languages',
				'items' => [
					[
						'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
						-1,
						'flags-multiple'
					]
				],
				'default' => 0,
			],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_seminar_domain_model_series',
                'foreign_table_where' => 'AND tx_seminar_domain_model_series.pid=###CURRENT_PID### AND tx_seminar_domain_model_series.sys_language_uid IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
		't3ver_label' => [
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
		'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
            ],
        ],
		'registration_date' => [
			'exclude' => true,
			'label' => 'LLL:EXT:seminar/Resources/Private/Language/locallang_db.xlf:tx_seminar_domain_model_series.registration_date',
			'config' => [
				'type' => 'input',
				'size' => 13,
				'eval' => 'datetime',
				'default' => '0',
				'range' => [
					'upper' => mktime(0, 0, 0, 1, 1, 2038)
				],
				'renderType' => 'inputDateTime',
			],
		],
		'seminar' => [
			'exclude' => true,
			'label' => 'LLL:EXT:seminar/Resources/Private/Language/locallang_db.xlf:tx_seminar_domain_model_seminar',
			'config' => [
				'type' => 'select',
				'renderType' => 'selectSingle',
				'foreign_table' => 'tx_seminar_domain_model_seminar',
				'minitems' => 0,
				'maxitems' => 1,
			],
		],
		'events'       => [
			'exclude' => true,
			'label'   => 'LLL:EXT:seminar/Resources/Private/Language/locallang_db.xlf:tx_seminar_domain_model_seminar.events',
			'config'  => [
				'type'          => 'inline',
				'foreign_table' => 'tx_seminar_domain_model_event',
				'foreign_field' => 'series',

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
    ],
];
