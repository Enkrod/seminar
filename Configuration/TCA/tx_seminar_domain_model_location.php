<?php
return [
    'ctrl' => [
        'title'	=> 'LLL:EXT:seminar/Resources/Private/Language/locallang_db.xlf:tx_seminar_domain_model_location',
        'label' => 'title',
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
		'searchFields' => 'title,name,street,postal_code,locality,description',
        'iconfile' => 'EXT:seminar/Resources/Public/Icons/tx_seminar_domain_model_location.gif'
    ],
    'interface' => [
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, name, street, postal_code, locality, description',
    ],
    'types' => [
		'1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, name, street, postal_code, locality, description, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
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
                'foreign_table' => 'tx_seminar_domain_model_location',
                'foreign_table_where' => 'AND tx_seminar_domain_model_location.pid=###CURRENT_PID### AND tx_seminar_domain_model_location.sys_language_uid IN (-1,0)',
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
            ]
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
	        'label' => 'LLL:EXT:seminar/Resources/Private/Language/locallang_db.xlf:tx_seminar_domain_model_location.title',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'name' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:seminar/Resources/Private/Language/locallang_db.xlf:tx_seminar_domain_model_location.name',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'street' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:seminar/Resources/Private/Language/locallang_db.xlf:tx_seminar_domain_model_location.street',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'postal_code' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:seminar/Resources/Private/Language/locallang_db.xlf:tx_seminar_domain_model_location.postal_code',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'locality' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:seminar/Resources/Private/Language/locallang_db.xlf:tx_seminar_domain_model_location.locality',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'description' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:seminar/Resources/Private/Language/locallang_db.xlf:tx_seminar_domain_model_location.description',
	        'config' => [
			    'type' => 'text',
			    'eval' => 'trim',
		        'enableRichtext' => true,
			],
	    ],
    ],
];
