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

class PluginNewwebcode_HookWebcode extends Hook {
	public function RegisterHook() {	
		$this->AddHook('template_html_head_end','html_head_end');
		$this->AddHook('template_body_begin','body_begin');
		$this->AddHook('template_body_end','body_end');
		$this->AddHook('template_main_menu_item','menu_admin');
	}
	
	public function html_head_end(){
		return $this->PluginNewwebcode_Webcode_Code("html_head_end");
	}
	
	public function body_begin(){
		return $this->PluginNewwebcode_Webcode_Code("body_begin");
	}
	
	public function body_end(){
		return $this->PluginNewwebcode_Webcode_Code("body_end");
	}
	
	public function menu_admin(){
		return $this->Viewer_Fetch(Plugin::GetTemplatePath(__CLASS__).'menu_admin.tpl');
	}
}