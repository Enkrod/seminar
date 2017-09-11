<?php
return [
    'ctrl' => [
        'title'	=> 'LLL:EXT:seminar/Resources/Private/Language/locallang_db.xlf:tx_seminar_domain_model_event',
        'label' => 'date',
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
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
		'searchFields' => 'date,title,price,amount,location,comment',
        'iconfile' => 'EXT:seminar/Resources/Public/Icons/tx_seminar_domain_model_event.gif'
    ],
    'interface' => [
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, date, comment, price, amount, location',
    ],
    'types' => [
		'1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, date, comment, price, amount, location, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
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
                'foreign_table' => 'tx_seminar_domain_model_event',
                'foreign_table_where' => 'AND tx_seminar_domain_model_event.pid=###CURRENT_PID### AND tx_seminar_domain_model_event.sys_language_uid IN (-1,0)',
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
		'starttime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
            'config' => [
            	'behaviour'=> [
            		'allowLanguageSynchronization' => true
	            ],
                'type' => 'input',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
	            'renderType' => 'inputDateTime',
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
            'config' => [
	            'behaviour'=> [
		            'allowLanguageSynchronization' => true
	            ],
                'type' => 'input',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
	            'renderType' => 'inputDateTime',
            ],
        ],
		'title' => [
			'exclude' => true,
			'label' => 'LLL:EXT:seminar/Resources/Private/Language/locallang_db.xlf:tx_seminar_domain_model_event.title',
			'config' => [
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			],
		],
		'date' => [
			'exclude' => true,
			'label' => 'LLL:EXT:seminar/Resources/Private/Language/locallang_db.xlf:tx_seminar_domain_model_event.date',
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
		'comment' => [
			'exclude' => true,
			'label' => 'LLL:EXT:seminar/Resources/Private/Language/locallang_db.xlf:tx_seminar_domain_model_event.comment',
			'config' => [
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			],
		],
		'price'    => [
			'exclude' => true,
			'label'   => 'LLL:EXT:seminar/Resources/Private/Language/locallang_db.xlf:tx_seminar_domain_model_seminar.std_price',
			'config'  => [
				'type' => 'text',
				'rows' => 2,
				'eval' => 'trim',
				'enableRichtext' => true,
			]
		],
		'amount'   => [
			'exclude' => true,
			'label'   => 'LLL:EXT:seminar/Resources/Private/Language/locallang_db.xlf:tx_seminar_domain_model_seminar.std_amount',
			'config'  => [
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			],
		],
	    'location' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:seminar/Resources/Private/Language/locallang_db.xlf:tx_seminar_domain_model_event.location',
	        'config' => [
			    'type' => 'select',
			    'renderType' => 'selectSingle',
			    'foreign_table' => 'tx_seminar_domain_model_location',
			    'minitems' => 0,
			    'maxitems' => 1,
			],
	    ],

		'series' => [
			'exclude' => true,
			'label' => 'LLL:EXT:series/Resources/Private/Language/locallang_db.xlf:tx_series_domain_model_series',
			'config' => [
				'type' => 'select',
				'renderType' => 'selectSingle',
				'foreign_table' => 'tx_series_domain_model_series',
				'minitems' => 0,
				'maxitems' => 1,
			],
		],

		/*'seminar' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
		*/
    ],
];
