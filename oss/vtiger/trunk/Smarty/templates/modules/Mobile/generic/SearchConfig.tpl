{include file="modules/Mobile/generic/Header.tpl"}

<body>

<table width=100% cellpadding=0 cellspacing=0 border=0>
<tr class="toolbar">
	<td><a class="link" href="?action=List&module={$_MODULE->name}&mode=search"><img src="resources/images/iconza/royalblue/left_arrow_24x24.png" border="0"></a></td>
	<td width="100%">
		<h1 class='page_title'>
		Search {$_MODULE->label}
		</h1>
	</td>
	<td align="right" style="padding-right: 5px;"><button onclick="$('_searchconfig_form_').submit();">Save</button></td>
</tr>
	
<tr>
	<td colspan="3">	
	
		<form method="POST" action="?action=SearchConfig&mode=update&module={$_MODULE->name}" id="_searchconfig_form_">
	
		<table width=100% cellpadding=8 cellspacing=0 border=0 class="table_detail">
			{foreach item=_FIELDNAMES key=_BLOCKLABEL from=$_MODULE->fieldsGroup()}	
			
			<tr>
				<td colspan=2 class="hdrlabel">{$_BLOCKLABEL}</td>
			</tr>
			
			{foreach item=_FIELDNAME from=$_FIELDNAMES}
			<tr>
				<th align="right" class="label2" nowrap="nowrap" width="10%">{$_MODULE->fieldLabel($_FIELDNAME)}</th>
				<td width="100%">
				
				<table cellpadding=0 cellspacing=0 border=0 class="table_checkbox">
				<tr>
					<td>
					
					{assign var=_checkbox_on_checked value='false'}
					{assign var=_checkbox_off_checked value='true'}
					
					{assign var=_checkbox_on_class value='on'}
					{assign var=_checkbox_off_class value='off hide'}
					
					{if in_array($_FIELDNAME, $_SEARCHIN) }
						{assign var=_checkbox_on_checked value='true'}
						{assign var=_checkbox_off_checked value='false'}
						
						{assign var=_checkbox_on_class value='on hide'}
						{assign var=_checkbox_off_class value='off'}
					{/if}
					
					<div class='{$_checkbox_on_class}'>
					<a href='javascript:void(0);' id='_checkbox_{$_FIELDNAME}_on' onclick="$fnCheckboxOn('_checkbox_{$_FIELDNAME}');$('include_{$_FIELDNAME}').checked=true;">ON</a>
					</div>
					
					<div class='{$_checkbox_off_class}'>
					<a href='javascript:void(0);' id='_checkbox_{$_FIELDNAME}_off' onclick="$fnCheckboxOff('_checkbox_{$_FIELDNAME}');$('include_{$_FIELDNAME}').checked=false;">OFF</a>
					</div>
					
					</td>
				</tr>
				</table>
				
				<input id='include_{$_FIELDNAME}' name="field_{$_FIELDNAME}" type="checkbox" class="input_checkbox" style="display: none;" {if $_checkbox_on_checked eq 'true'}checked=true{/if}>
				
				</td>
			</tr>
			{/foreach}
			
			{/foreach}
		</table>
		
		</form>
	
	</td>
</tr>
</table>


</body>

{include file="modules/Mobile/generic/Footer.tpl"}
