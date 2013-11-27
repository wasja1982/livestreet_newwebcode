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

class PluginNewwebcode_HookWebcode extends Hook {
    public function RegisterHook() {
        $aHooks = Config::Get('plugin.newwebcode.hooks');
        if ($aHooks && is_array($aHooks)) {
            foreach (array_unique($aHooks) as $sHook) {
                if ($sHook) {
                    $this->AddHook('template_' . $sHook, $sHook);
                }
            }
        }
        $this->AddHook('template_main_menu_item','menu_admin');
    }

    public function menu_admin(){
        return $this->Viewer_Fetch(Plugin::GetTemplatePath(__CLASS__).'menu_admin.tpl');
    }

    public function __call($name, $arguments) {
        try {
            $aHooks = Config::Get('plugin.newwebcode.hooks');
            if (in_array($name, $aHooks)) {
                $oCode = new PluginNewwebcode_ModuleWebcode_EntityCode(array('name' => $name));
                return $oCode->getCode();
            } else {
                return parent::__call($name, $arguments);
            }
        } catch (Exception $e) {
            error_log($e->getMessage());
        }
        return;
    }
}