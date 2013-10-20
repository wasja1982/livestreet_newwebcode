{include file="header.tpl"}
<div class="webcode">
	<h1>{$aLang.webcode_admin_menu}</h1>
	<form action="{router page='webcode'}" method="post">
		<p>
			<label for="html_head_end">{$aLang.html_head_end}</label>
			<textarea name="html_head_end" class="input-wide" rows="5">{$html_head_end}</textarea>
			<span class="note">{$html_head_end_note}</span>
		</p>
		<p>
			<label for="body_begin">{$aLang.body_begin}</label>
			<textarea name="body_begin" class="input-wide" rows="5">{$body_begin}</textarea>
			<span class="note">{$body_begin_note}</span>
		</p>
		<p>
			<label for="body_end">{$aLang.body_end}</label>
			<textarea name="body_end" class="input-wide" rows="5">{$body_end}</textarea>
			<span class="note">{$body_end_note}</span>
		</p>
		<p class="buttons">
			<div class="button2">
            <em></em><span></span>
			<input type="submit" name="submit_webcode" value="{$aLang.webcode_save}" />
			</div>
		</p>
		<input type="hidden" name="webcode" value="1"/>
	</form>
</div>
{include file="footer.tpl"}
