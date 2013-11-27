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

class PluginNewwebcode_ActionWebcode extends ActionPlugin {
    protected $sMenuHeadItemSelect = 'webcode';
    protected $sCurrentEvent;
    public function Init(){
        $oUserCurrent = $this->User_GetUserCurrent();
        if (!isset($oUserCurrent) || !$oUserCurrent->isAdministrator())
        Router::Action('error');
        else {
            $aEntities = array();
            $aHooks = Config::Get('plugin.newwebcode.hooks');
            if ($aHooks && is_array($aHooks)) {
                foreach (array_unique($aHooks) as $sHook) {
                    if ($sHook) {
                        $aEntities[] = new PluginNewwebcode_ModuleWebcode_EntityCode(array('name' => $sHook));
                    }
                }
            }
            $this->Viewer_Assign('aEntities', $aEntities);
            $this->setDefaultEvent('default');
        }
    }

    public function RegisterEvent(){
        $this->AddEvent('default','EventDefault');
    }

    public function EventDefault(){
        if(isset($_POST['webcode']))
        $this->PluginNewwebcode_Webcode_Submit();
    }
    public function EventShutdown() {
        $this->Viewer_Assign('sMenuHeadItemSelect',$this->sMenuHeadItemSelect);
    }
}