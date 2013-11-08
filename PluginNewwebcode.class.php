<?php
if (! class_exists ( 'Plugin' )) {
	die ( 'Hacking attemp!' );
}

class PluginNewwebcode extends Plugin {
	public function Activate() {
		return true;
	}
	
	public function Deactivate() {
		if (Config::Get ('plugin.newwebcode.dropuninstall') == true) {
			CE::DeleteMyData($this, 'html_head_end');
			CE::DeleteMyData($this, 'body_begin');
			CE::DeleteMyData($this, 'body_end');
		}
		return true;
	}
	
	public function Init() {

	}
}