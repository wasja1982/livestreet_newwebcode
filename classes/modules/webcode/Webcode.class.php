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

class PluginNewwebcode_ModuleWebcode extends Module {

    public function Init(){
    }

    public function Submit(){
        $aHooks = Config::Get('plugin.newwebcode.hooks');
        if ($aHooks && is_array($aHooks)) {
            foreach (array_unique($aHooks) as $sHook) {
                if ($sHook) {
                    $oCode = new PluginNewwebcode_ModuleWebcode_EntityCode(array('name' => $sHook));
                    $oCode->setCode(getRequest($sHook));
                }
            }
        }
        Router::Location(Router::GetPath('webcode'));
    }
}