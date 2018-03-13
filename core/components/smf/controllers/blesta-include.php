<?php

/** @var modX $modx */
/** @var MODX_SMF $MODX_SMF */
if (defined('MODX_API_MODE')) {
	return;
}
$basePath = dirname(dirname(dirname(dirname(dirname(__FILE__)))));
global $modx, $MODX_BLESTA;

define('MODX_API_MODE', true);
require $basePath . '/index.php';

$modx->getService('error', 'error.modError');
$modx->setLogLevel(modX::LOG_LEVEL_ERROR);
$modx->setLogTarget('FILE');

$MODX_BLESTA = $modx->getService('modx_blesta', 'MODX_BLESTA', $modx->getOption('blesta_core_path', null, $modx->getOption('core_path') . 'components/blesta/') . 'model/');


// integrate_profile_save hack for 2.0
if (!empty($_GET['action']) && preg_match('#^profile;area=account;u=(\d+);save#', $_GET['action'], $matches) && !empty($_POST['u'])) {
	global $modSettings, $user_info;
	loadUserSettings();

	if ($user_info['id'] == $matches[1] && $user_info['id'] == $_POST['u']) {
		$data = array(
			'name' => 'real_name',
			'email' => 'email_address',
		);
		foreach ($data as $k => $v) {
			if (isset($_POST[$v]) && $user_info[$k] != $_POST[$v]) {
				$MODX_BLESTA::blestaOnUserUpdate(array($user_info['username']), $v, $_POST[$v]);
			}
		}
	}
}

