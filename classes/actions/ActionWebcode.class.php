<?php

class PluginNewwebcode_ActionWebcode extends ActionPlugin{
	public $sMenuItemSelect = 'new_webcode';
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
}