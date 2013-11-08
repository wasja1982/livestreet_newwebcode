{if $oUserCurrent and $oUserCurrent->isAdministrator() and $oConfig->GetValue('plugin.newwebcode.show_menu')}
<li {if $sMenuHeadItemSelect=='webcode'}class="active"{/if}><a href="{router page="webcode"}">{$aLang.plugin.newwebcode.webcode_admin_menu}</a> <i></i></li>
{/if}