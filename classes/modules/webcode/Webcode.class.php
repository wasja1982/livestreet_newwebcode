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