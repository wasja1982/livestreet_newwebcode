<?php
/**
 * New Webcode - плагин для простого добавления счетчиков
 *
 * Версия:	1.0.2
 * Автор:	Александр Вереник
 * Профиль:	http://livestreet.ru/profile/Wasja/
 * GitHub:	https://github.com/wasja1982/livestreet_newsocialcomments
 *
 * Основан на плагине "Webcode" (автор: Артем Сошников) - https://catalog.livestreetcms.com/addon/view/171/
 *
 * Плагин использует хранилище ConfigEngine (http://livestreetcms.com/addons/view/380/) от PSNet (http://psnet.lookformp3.net/).
 *
 **/

class PluginNewwebcode_ModuleWebcode_EntityCode extends Entity
{
    public function getName() {
        return $this->_getDataOne('name');
    }

    public function getCode() {
        return CE::GetMyData($this, $this->getName());
    }

    public function setCode($value) {
        CE::SaveMyData($this, $this->getName(), $value);
    }

    public function getTitle() {
        $name = $this->getName();
        $sTitle = $this->Lang_Get('plugin.newwebcode.' . $name);
        if (empty($sTitle) || $sTitle == 'NOT_FOUND_LANG_TEXT') $sTitle = $this->Lang_Get('plugin.newwebcode.unknown_hook', array('HOOK' => $name));
        return $sTitle;
    }

    public function getNote() {
        $name = $this->getName();
        $sNote = $this->Lang_Get('plugin.newwebcode.' . $name . '_note');
        if (empty($sNote) || $sNote == 'NOT_FOUND_LANG_TEXT') $sNote = $this->Lang_Get('plugin.newwebcode.unknown_hook_note', array('HOOK' => $name));
        return $sNote;
    }
}
?>