<?php

$lllPath = 'LLL:EXT:typo3_forum/Resources/Private/Language/locallang_db.xml:tx_typo3forum_domain_model_user_notification.';

return [
	'ctrl' => [
		'title' => 'LLL:EXT:typo3_forum/Resources/Private/Language/locallang_db.xml:tx_typo3forum_domain_model_user_notification',
		'label' => 'uid',
		'label_alt' => 'feuser,crdate',
		'label_alt_force' => true,
		'type' => 'type',
		'crdate' => 'crdate',
		'delete' => 'deleted',
		'sortby' => 'crdate DESC',
		'hideTable' => TRUE,
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('typo3_forum') . 'Resources/Public/Icons/User/notification.png',
	],
	'interface' => [
		'showRecordFieldList' => 'feuser,post,tag,user_read,type,crdate',
	],
	'types' => [
		'1' => ['showitem' => 'feuser,post,tag,user_read,type,crdate'],
		'\Mittwald\Typo3Forum\Domain\Model\Forum\Post' => ['showitem' => 'feuser,post,user_read,type,crdate'],
		'\Mittwald\Typo3Forum\Domain\Model\Forum\Tag' => ['showitem' => 'feuser,post,tag,user_read,type,crdate'],
	],
	'columns' => [
		'crdate' => [
			'exclude' => 1,
			'label' => $lllPath . 'crdate',
			'config' => [
				'type' => 'none',
				'format' => 'date',
				'eval' => 'date',
			],
		],
		'feuser' => [
			'label' => $lllPath . 'feuser',
			'config' => [
				'type' => 'select',
				'foreign_table' => 'fe_users',
				'foreign_class' => '\Mittwald\Typo3Forum\Domain\Model\User\FrontendUser',
				'maxitems' => 1,
			],
		],
		'user_read' => [
			'label' => $lllPath . 'user_read',
			'config' => [
				'type' => 'check'
			],
		],
		'post' => [
			'exclude' => 1,
			'label' => $lllPath . 'post',
			'config' => [
				'type' => 'select',
				'foreign_table' => 'tx_typo3forum_domain_model_forum_post',
				'foreign_class' => '\Mittwald\Typo3Forum\Domain\Model\Forum\Post',
				'maxitems' => 1,
			],
		],
		'tag' => [
			'exclude' => 1,
			'label' => $lllPath . 'tag',
			'config' => [
				'type' => 'select',
				'foreign_table' => 'tx_typo3forum_domain_model_forum_tag',
				'foreign_class' => '\Mittwald\Typo3Forum\Domain\Model\Forum\Tag',
				'maxitems' => 1,
			],
		],
		'type' => [
			'exclude' => 1,
			'label' => $lllPath . 'type',
			'config' => [
				'type' => 'select',
				'items' => [
					['LLL:EXT:typo3_forum/Resources/Private/Language/locallang_db.xml:tx_typo3forum_domain_model_forum_post', '\Mittwald\Typo3Forum\Domain\Model\Forum\Post'],
					[$lllPath . 'tag', '\Mittwald\Typo3Forum\Domain\Model\Forum\Tag'],
				],
			],
		],
	],
];
