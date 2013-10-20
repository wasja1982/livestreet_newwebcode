<?php

class PluginWebcode_ActionWebcode extends ActionPlugin{
	public $sMenuItemSelect = 'webcode';
	protected $sCurrentEvent;
	public function Init(){
		$oUserCurrent = $this->User_GetUserCurrent();
		if (!isset($oUserCurrent) || !$oUserCurrent->isAdministrator())
			Router::Action('error');
		else
			$this->setDefaultEvent('default');
	}

	public function RegisterEvent(){
		$this->AddEvent('default','EventDefault');
	}

	public function EventDefault(){
		if(isset($_POST['webcode']))
			$this->PluginWebcode_Webcode_Submit();
	}
}