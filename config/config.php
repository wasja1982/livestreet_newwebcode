<?php
$config = array();

// Очищать данные при деактивации
$config['dropuninstall'] = true; 

// Показывать пункт меню
$config['show_menu'] = true;

Config::Set('router.page.webcode', 'PluginNewwebcode_ActionWebcode');

return $config;