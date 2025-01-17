<?php

/**
 * @Project NUKEVIET 4.x
 * @Author VINADES.,JSC <contact@vinades.vn>
 * @Copyright (C) 2014 VINADES.,JSC. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate 05/07/2010 09:47
 */

if (!defined('NV_ADMIN') or !defined('NV_MAINFILE')) {
    die('Stop!!!');
}

$module_version = array(
    'name' => 'Download',
    'modfuncs' => 'main,viewcat,viewfile,down,upload,report,search,tag',
    'change_alias' => 'upload, search',
    'submenu' => 'main,upload,search',
    'is_sysmod' => (defined('SYS_DOWNLOAD_TABLE')) ? 1 : 0,
    'virtual' => (defined('SYS_DOWNLOAD_TABLE')) ? 0 : 1,
    'version' => '4.5.00',
    'date' => 'Wednesday, July 31, 2021 15:00:00 AM GMT+07:00',
    'author' => 'VINADES <contact@vinades.vn>',
    'note' => '',
    'uploads_dir' => array(
        $module_upload,
        $module_upload . '/temp',
        $module_upload . '/import'
    )
);
