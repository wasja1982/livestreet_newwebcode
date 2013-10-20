<?php
class PluginWebcode_ModuleWebcode_MapperWebcode extends Mapper {
	protected $code=array();
	public function get($name){
		//$aReturn = $this->oDb->selectCol("SELECT $name FROM ".Config::Get('plugin.webcode.table'));
		//return $aReturn[0];
		return $this->code[$name];
	}
	
	public function set($name,$value){
		$this->oDb->query("UPDATE ".Config::Get('plugin.webcode.table')." SET ".$name." = ?",$value);
	}
	
	public function getAll(){
		return $this->code = $this->oDb->selectRow("SELECT * FROM ".Config::Get('plugin.webcode.table'));
	}
}