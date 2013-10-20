<?php
if (! class_exists ( 'Plugin' )) {
	die ( 'Hacking attemp!' );
}

class PluginWebcode extends Plugin {
	public function Activate() {
		if (! $this->isTableExists ( 'prefix_webcode' )) {
			$this->ExportSQL ( dirname ( __FILE__ ) . '/install.sql' );
		}
		return true;
	}
	
	public function Deactivate() {
		if (Config::Get ( 'plugin.webcode.dropuninstall' ) == true) {
			if ($this->isTableExists ( 'prefix_webcode' )) {
				$this->ExportSQL ( dirname ( __FILE__ ) . '/uninstall.sql' );
			}
		}
		return true;
	}
	
	public function Init() {

	}
}