<?php
// HTTP
define('HTTP_SERVER', 'http://myopencart.openranger.com/admin/');
define('HTTP_CATALOG', 'http://myopencart.openranger.com/');
// HTTPS
define('HTTPS_SERVER', 'https://myopencart.openranger.com/admin/');
define('HTTPS_CATALOG', 'https://myopencart.openranger.com/');
// DIR
define('DIR_APPLICATION', '/opt/bitnami/opencart/admin/');
define('DIR_SYSTEM', '/opt/bitnami/opencart/system/');
define('DIR_IMAGE', '/opt/bitnami/opencart/image/');
define('DIR_STORAGE', '/bitnami/opencart_storage/');
define('DIR_CATALOG', '/opt/bitnami/opencart/catalog/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/template/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'mariadb');
define('DB_USERNAME', 'bn_opencart');
define('DB_PASSWORD', 'Welcome123');
define('DB_DATABASE', 'bitnami_opencart');
define('DB_PREFIX', 'oc_');
define('DB_PORT', '3306');
// OpenCart API
define('OPENCART_SERVER', 'https://www.opencart.com/');
