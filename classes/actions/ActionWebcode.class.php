<?php

class PluginWebcode_ActionWebcode extends ActionPlugin{
	public $sMenuItemSelect = 'webcode';
	protected $sCurrentEvent;
	public function Init(){
		if(!$this->User_GetUserCurrent()->isAdministrator())
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