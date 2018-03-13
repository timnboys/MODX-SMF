<?php

if (!class_exists('modUserDeleteProcessor')) {
	require MODX_CORE_PATH . 'model/modx/processors/security/user/delete.class.php';
}

class blestaUserDeleteProcessor extends modUserDeleteProcessor {

	/**
	 * @return bool
	 */
	public function checkPermissions() {
		return defined('Blesta');
	}

}

return 'blestaUserDeleteProcessor';
