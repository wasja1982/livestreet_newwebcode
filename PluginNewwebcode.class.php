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

if (! class_exists ( 'Plugin' )) {
    die ( 'Hacking attemp!' );
}

class PluginNewwebcode extends Plugin {
    public function Activate() {
        return true;
    }

    public function Deactivate() {
        if (Config::Get ('plugin.newwebcode.dropuninstall') == true) {
            CE::DeleteMyData($this, 'html_head_end');
            CE::DeleteMyData($this, 'body_begin');
            CE::DeleteMyData($this, 'body_end');
        }
        return true;
    }

    public function Init() {

    }
}