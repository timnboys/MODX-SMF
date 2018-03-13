<?php

if (!class_exists('modUserActivateMultipleProcessor')) {
	require MODX_CORE_PATH . 'model/modx/processors/security/user/activatemultiple.class.php';
}

class blestaUserActivateMultipleProcessor extends modUserActivateMultipleProcessor {

	/**
	 * @return bool
	 */
	public function checkPermissions() {
		return defined('Blesta');
	}

}

return 'blestaUserActivateMultipleProcessor';
