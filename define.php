<?php


defined('AREXE') or die;

// HTTP
define('HTTP_SERVER', 'http://' . $_SERVER['HTTP_HOST'] . rtrim(dirname($_SERVER['SCRIPT_NAME']), '/.\\') . '/');
define('HTTP_IMAGE', 'http://' . $_SERVER['HTTP_HOST'] . rtrim(dirname($_SERVER['SCRIPT_NAME']), '/.\\') . '/image/');
define('HTTP_ADMIN', 'http://' . $_SERVER['HTTP_HOST'] . rtrim(dirname($_SERVER['SCRIPT_NAME']), '/.\\') . '/admin/');

// HTTPS
define('HTTPS_SERVER', (!empty($_SERVER['HTTPS']) ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . rtrim(dirname($_SERVER['SCRIPT_NAME']), '/.\\') . '/');
define('HTTPS_IMAGE', (!empty($_SERVER['HTTPS']) ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . rtrim(dirname($_SERVER['SCRIPT_NAME']), '/.\\') . '/image/');
define('HTTPS_ADMIN', (!empty($_SERVER['HTTPS']) ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . rtrim(dirname($_SERVER['SCRIPT_NAME']), '/.\\') . '/admin/');

// Variables
define('IS_ADMIN', false);

// Directories
$base = __DIR__;

define('DIR_BASE', $base . '/');
define('DIR_ROOT', $base . '/');
define('DIR_CLI', DIR_ROOT . 'cli/');
define('DIR_INSTALL', DIR_ROOT . 'install/');
define('DIR_SYSTEM', DIR_ROOT . 'system/');
define('DIR_ADMIN', DIR_ROOT . 'admin/');
define('DIR_CATALOG', DIR_ROOT . 'catalog/');
define('DIR_VQMOD', DIR_ROOT . 'vqmod/');
define('DIR_IMAGE', DIR_ROOT . 'image/');
define('DIR_DOWNLOAD', DIR_ROOT . 'download/');
define('DIR_UPLOAD', DIR_ROOT . 'upload/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_SYSTEM . 'cache/');
define('DIR_MODIFICATION', DIR_SYSTEM . 'modification/');
define('DIR_LOG', DIR_SYSTEM . 'log/');
define('DIR_LANGUAGE', DIR_CATALOG . 'language/');
define('DIR_TEMPLATE', DIR_CATALOG . 'view/theme/');

define('DIR_APPLICATION', DIR_CATALOG); // depreciated due to app instances, use DIR_CATALOG
define('DIR_LOGS', DIR_LOG); // depreciated due to plural usage, use DIR_LOG
