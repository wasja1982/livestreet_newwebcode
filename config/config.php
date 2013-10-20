<?php
$config = array();
//Удалять базу при деактивации
$config['dropuninstall'] = true; 

$config['table'] = '___db.table.prefix___webcode';
Config::Set('router.page.webcode', 'PluginWebcode_ActionWebcode');

return $config;