<?php
/**
 * New Webcode - плагин для простого добавления счетчиков
 *
 * Версия:	1.0.1
 * Автор:	Александр Вереник
 * Профиль:	http://livestreet.ru/profile/Wasja/
 * GitHub:	https://github.com/wasja1982/livestreet_newsocialcomments
 *
 * Основан на плагине "Webcode" (автор: Артем Сошников) - https://catalog.livestreetcms.com/addon/view/171/
 *
 * Плагин использует хранилище ConfigEngine (http://livestreetcms.com/addons/view/380/) от PSNet (http://psnet.lookformp3.net/).
 *
 **/

class PluginNewwebcode_ActionWebcode extends ActionPlugin{
	protected $sMenuHeadItemSelect = 'webcode';
	protected $sCurrentEvent;
	public function Init(){
		$oUserCurrent = $this->User_GetUserCurrent();
		if (!isset($oUserCurrent) || !$oUserCurrent->isAdministrator())
			Router::Action('error');
		else {
			$this->Viewer_Assign('html_head_end',$this->PluginNewwebcode_Webcode_Code("html_head_end"));
			$this->Viewer_Assign('body_begin',$this->PluginNewwebcode_Webcode_Code("body_begin"));
			$this->Viewer_Assign('body_end',$this->PluginNewwebcode_Webcode_Code("body_end"));
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