<?php

class PluginNewwebcode_ModuleWebcode extends Module {

	public function Init(){
	}

	public function Code($name, $value = null){
		if(!$name)
			return false;
		if(!$value)
			return CE::GetMyData ($this, $name);
		return CE::SaveMyData($this, $name, $value);
	}

	public function Submit(){
		$val['html_head_end'] = getRequest('html_head_end');
		$val['body_begin'] = getRequest('body_begin');
		$val['body_end'] = getRequest('body_end');
		foreach($val as $k=>$v)
			CE::SaveMyData($this, $k, $v);
		Router::Location(Router::GetPath('webcode'));
	}
}