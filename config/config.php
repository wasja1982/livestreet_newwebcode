<?php
/**
 * New Webcode - плагин для простого добавления счетчиков
 *
 * Версия:	1.0.2
 * Автор:	Александр Вереник
 * Профиль:	http://livestreet.ru/profile/Wasja/
 * GitHub:	https://github.com/wasja1982/livestreet_newsocialcomments
 *
 * Основан на плагине "Webcode" (автор: Артем Сошников) - https://catalog.livestreetcms.com/addon/view/171/
 *
 * Плагин использует хранилище ConfigEngine (http://livestreetcms.com/addons/view/380/) от PSNet (http://psnet.lookformp3.net/).
 *
 **/

$config = array();

// Очищать данные при деактивации
$config['dropuninstall'] = true;

// Показывать пункт меню
$config['show_menu'] = true;

// Список хуков (допустимы только шаблонные)
$config['hooks'] = array(
    'html_head_end',
    'body_begin',
    'body_end',
);

Config::Set('router.page.webcode', 'PluginNewwebcode_ActionWebcode');

return $config;