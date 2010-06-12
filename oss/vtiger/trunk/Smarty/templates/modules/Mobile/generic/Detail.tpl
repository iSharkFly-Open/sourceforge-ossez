{include file="modules/Mobile/generic/Header.tpl"}

<body>

<table width=100% cellpadding=0 cellspacing=0 border=0>
<tr class="toolbar">
	<td width="5%">
		<a class="link" href="javascript:history.back();"><img src="resources/images/iconza/royalblue/left_arrow_16x16.png" border="0"></a>
	</td>
	<td width="90%" align="left"><h1 class='page_title'>{$_MODULE->label}</h1></td>	
	<td width="5%" align="right" nowrap="nowrap">
		<!-- a class="link" href="javascript:void(0);"><img src="resources/images/iconza/royalblue/edit_24x24.png" border="0"></a -->
		<!--  a class="link" href="javascript:confirm('Delete Record');"><img src="resources/images/iconza/yellow/delete_24x24.png" border="0"></a -->		
	</td>
</tr>
<tr>
	<td colspan="3">	
	
		<table width=100% cellpadding=5 cellspacing=0 border=0 class="table_detail">
			{foreach item=_FIELDNAMES key=_BLOCKLABEL from=$_MODULE->fieldsGroup()}	
			
			{if !$_RECORD->isBlockEmpty($_BLOCKLABEL)}
			<tr>
				<td colspan=2 class="hdrlabel">{$_BLOCKLABEL}</td>
			</tr>
			{/if}
			
			{foreach item=_FIELDNAME from=$_FIELDNAMES}		
			{assign var=_FIELDVALUE value=$_RECORD->fieldValue($_FIELDNAME)}
			{if $_FIELDVALUE neq ''}
			<tr>
				<th class="label" nowrap="nowrap" width="10%" valign="top">{$_MODULE->fieldLabel($_FIELDNAME)}</th>
				<td class="data">{$_FIELDVALUE}</td>
			</tr>
			{/if}
			{/foreach}
			
			{/foreach}
		</table>
	
	</td>
</tr>
</table>

</body>

{include file="modules/Mobile/generic/Footer.tpl"}