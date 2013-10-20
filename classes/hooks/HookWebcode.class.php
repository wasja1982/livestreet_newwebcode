<?php
class PluginNewwebcode_HookWebcode extends Hook {
	public function RegisterHook() {	
		$this->AddHook('template_html_head_end','html_head_end');
		$this->AddHook('template_body_begin','body_begin');
		$this->AddHook('template_body_end','body_end');
		$this->AddHook('template_menu_admin','menu_admin');
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