<?php
return [
	'adminEmail' => 'admin@example.com',
	'supportEmail' => 'support@example.com',
	'user.passwordResetTokenExpire' => 3600,

	'p2made' => [
		'useStatic' => true, // false or not set to use published assets
		'assetsEnd' => [
			'basePath' => '@assets',
			'baseUrl' => '@assetsUrl',
		],
		'reverseDomain' => 'dev.a6e-dev', // customise for your host configuration
	],
];
