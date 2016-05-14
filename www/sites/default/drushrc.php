<?php

$options['uri'] = getenv('DRUPAL_URI');
$options['sites-subdir'] = 'default';

$options['variables']['language_default'] = (object) array(
  'language' => 'en',
  'name' => 'English',
  'native' => 'English',
  'direction' => '0',
  'enabled' => '1',
  'prefix' => 'en',
);
