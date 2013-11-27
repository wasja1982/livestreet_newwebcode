{include file="header.tpl"}
<div class="webcode">
	<h1>{$aLang.plugin.newwebcode.webcode_admin_menu}</h1>
	<form action="{router page='webcode'}" method="post">
		{foreach $aEntities as $oEntity}
		<p>
			<label for="{$oEntity->getName()}">{$oEntity->getTitle()}:</label>
			<textarea name="{$oEntity->getName()}" class="input-text input-width-full" rows="5">{$oEntity->getCode()}</textarea>
			<span class="note">{$oEntity->getNote()}</span>
		</p>
		{/foreach}
		<p class="buttons">
			<div class="button2">
			<em></em><span></span>
			<input type="submit" class="button" name="submit_webcode" value="{$aLang.plugin.newwebcode.webcode_save}" />
			</div>
		</p>
		<input type="hidden" name="webcode" value="1"/>
	</form>
</div>
<div>Плагин использует хранилище <a href="http://livestreetcms.com/addons/view/380/">ConfigEngine</a> от <a href="http://psnet.lookformp3.net/">PSNet</a>.</div>
{include file="footer.tpl"}
