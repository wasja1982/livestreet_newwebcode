{include file="header.tpl"}
<div class="webcode">
	<h1>{$aLang.plugin.newwebcode.webcode_admin_menu}</h1>
	<form action="{router page='webcode'}" method="post">
		<p>
			<label for="html_head_end">{$aLang.plugin.newwebcode.html_head_end}</label>
			<textarea name="html_head_end" class="input-text input-width-full" rows="5">{$html_head_end}</textarea>
			<span class="note">{$aLang.plugin.newwebcode.html_head_end_note}</span>
		</p>
		<p>
			<label for="body_begin">{$aLang.plugin.newwebcode.body_begin}</label>
			<textarea name="body_begin" class="input-text input-width-full" rows="5">{$body_begin}</textarea>
			<span class="note">{$aLang.plugin.newwebcode.body_begin_note}</span>
		</p>
		<p>
			<label for="body_end">{$aLang.plugin.newwebcode.body_end}</label>
			<textarea name="body_end" class="input-text input-width-full" rows="5">{$body_end}</textarea>
			<span class="note">{$aLang.plugin.newwebcode.body_end_note}</span>
		</p>
		<p class="buttons">
			<div class="button2">
            <em></em><span></span>
			<input type="submit" class="button" name="submit_webcode" value="{$aLang.plugin.newwebcode.webcode_save}" />
			</div>
		</p>
		<input type="hidden" name="webcode" value="1"/>
	</form>
</div>
{include file="footer.tpl"}
