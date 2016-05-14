<?php

$databases = array();

$config_directories = array();
$config_directories[CONFIG_SYNC_DIRECTORY] = 'sites/default/sync';

$settings['install_profile'] = 'nonscolog';

$settings['hash_salt'] = 'Bn7d9YVL-qIppbI-Xq5VDxYRCF4DdE4R4PGlrRuM1hj_tR08kRIZ1nlxLT02vyJfJwfbr76TRw';

$settings['update_free_access'] = FALSE;

$settings['allow_authorize_operations'] = FALSE;

$settings['file_public_path'] = 'sites/default/files';
$settings['file_private_path'] = 'sites/default/private';

$settings['container_yamls'][] = __DIR__ . '/services.yml';

$databases['default']['default'] = array (
  'database' => getenv('MYSQL_DATABASE'),
  'username' => getenv('MYSQL_USER'),
  'password' => getenv('MYSQL_PASSWORD'),
  'prefix' => '',
  'host' => 'mysql',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);

if (file_exists(__DIR__ . '/settings.local.php')) {
  include __DIR__ . '/settings.local.php';
}
