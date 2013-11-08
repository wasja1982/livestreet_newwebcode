<?php
$config = array();

// Удалять таблицу при деактивации
$config['dropuninstall'] = true; 

// Название таблицы БД
$config['table'] = '___db.table.prefix___webcode';

// Показывать пункт меню
$config['show_menu'] = true;

Config::Set('router.page.webcode', 'PluginNewwebcode_ActionWebcode');

return $config;