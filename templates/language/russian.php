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

return array(
    'webcode_admin_menu'=>'Счетчики',
    'webcode_settings'=>'Настройка счетчиков',
    'webcode_save'=>'Сохранить',
    'html_head_end'=>'В конце тега <b>head</b>',
    'html_head_end_note'=>'Рекомендуется использовать для подключения дополнительный JS, CSS, метатегов',
    'body_begin'=>'В начале тега <b>body</b>',
    'body_begin_note'=>'Вывод текста в начале страницы',
    'body_end'=>'В конце тега <b>body</b>',
    'body_end_note'=>'Вывод текста в конце страницы',
    'unknown_hook'=>'По хуку <b>template_%%HOOK%%</b>',
    'unknown_hook_note'=>'Содержимое поля будет выведено в момент срабатывания хука "template_%%HOOK%%"',
);