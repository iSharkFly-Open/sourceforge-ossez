<img src="plugins/MultiSites/images/arrow_desc.gif" style="display: none" />
<img src="plugins/MultiSites/images/arrow_asc.gif" style="display: none" />
{assign var=showSitesSelection value=false}
{assign var=showPeriodSelection value=true}
{include file="CoreHome/templates/header.tpl"}

<script type="text/javascript" src="plugins/MultiSites/templates/common.js"></script>
<style>
{fetch file="plugins/MultiSites/templates/styles.css"}
</style>

<div id="multisites" style="margin: auto">
<div id="main">
{include file="MultiSites/templates/row.tpl" assign="row"}
<script type="text/javascript">
	var allSites = new Array();
	var params = new Array();
	{foreach from=$mySites key=i item=site}
		allSites[{$i}] = new setRowData({$site.idsite}, {$site.visits}, {$site.actions}, {$site.unique}, '{$site.name|escape:"quotes"}', '{$site.main_url}', '{$site.visitsSummaryValue|replace:",":"."}', '{$site.actionsSummaryValue|replace:",":"."}', '{$site.uniqueSummaryValue|replace:",":"."}');
	{/foreach}
	params['period'] = '{$period}';
	params['date'] = '{$date}';
	params['dateToStr'] = '{$dateToStr}';
	params['evolutionBy'] = '{$evolutionBy}';
	params['mOrderBy'] = '{$orderBy}';
	params['order'] = '{$order}';
	params['site'] = '{$site}';
	params['limit'] = '{$limit}';
	params['page'] = 1;
	params['prev'] = "{'General_Previous'|translate}";
	params['next'] = "{'General_Next'|translate}";
	params['row'] = '{$row|escape:"javascript"}';
</script>

{postEvent name="template_headerMultiSites"}
<div align="center">
<table id="mt" class="dataTable" cellspacing="0" style="width:850px;">
	<thead>
		<th id="names" class="label" style="text-align:center">
			<span style="cursor:pointer;" onClick="params = setOrderBy(this,allSites, params, 'names');">{'General_Website'|translate}</span>
			<span class="arrow multisites_desc"></span>
		</th>
		<th id="visits" class="multisites-column" style="width: 100px">
			<span style="cursor:pointer;" onClick="params = setOrderBy(this,allSites, params, 'visits');">{'General_ColumnNbVisits'|translate}</span>
			<span class="arrow"></span>
		</th>
		<th id="actions" class="multisites-column" style="width: 110px">
			<span style="cursor:pointer;" onClick="params = setOrderBy(this,allSites, params, 'actions');">{'General_ColumnPageviews'|translate}</span>
			<span class="arrow"></span>
		</th>
		<th id="unique" class="multisites-column" style="width: 120px">
			<span style="cursor:pointer;" onClick="params = setOrderBy(this,allSites, params, 'unique');">{'General_ColumnNbUniqVisitors'|translate}</span>
			<span class="arrow"></span>
		</th>
		<th id="evolution" style="text-align:center; width:350px" colspan="2">
		<span class="arrow "></span>
			<span class="evolution" style="cursor:pointer;" onClick="params = setOrderBy(this,allSites, params, $('#evolution_selector').val() + 'Summary');"> {'MultiSites_Evolution'|translate}</span>
			<select class="selector" id="evolution_selector" onchange="params['evolutionBy'] = $('#evolution_selector').val(); switchEvolution(params);">
				<option value="visits" {if $evolutionBy eq 'visits'} selected {/if}>{'General_ColumnNbVisits'|translate}</option>
				<option value="actions" {if $evolutionBy eq 'actions'} selected {/if}>{'General_ColumnPageviews'|translate}</option>
				<option value="unique"{if $evolutionBy eq 'unique'} selected {/if}>{'General_ColumnNbUniqVisitors'|translate}</option>
			</select>
		</th>
	</thead>

	<tbody id="tb">
	</tbody>

	<tfoot>
	<tr row_id="last" >
		<td colspan="8" class="clean" style="padding: 20px">
		<span id="prev" class="pager"  style="padding-right: 20px;"></span>
		<span id="dataTablePages">
			<span id="counter">
		</span>
		</span>
		<span id="next" class="clean" style="padding-left: 20px;"></span>
	</td>
	</tr>
	</tfoot>
</table>
</div>
<script type="text/javascript">
prepareRows(allSites, params, '{$orderBy}');

{if $autoRefreshTodayReport}
{literal}
function refreshAfter(timeoutPeriod) {
	setTimeout("location.reload(true);",timeoutPeriod);
}
refreshAfter(5*60*1000);
{/literal}
{/if}
</script>
</div>
</div>

{literal}
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-13048050-1']);
  _gaq.push(['_setDomainName', '.hawebs.net']);
  _gaq.push(['_setLocalRemoteServerMode']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<!-- Piwik -->
<script type="text/javascript">
var pkBaseURL = (("https:" == document.location.protocol) ? "https://wa.hawebs.net/" : "http://wa.hawebs.net/");
document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
</script><script type="text/javascript">
try {
var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 7);
piwikTracker.trackPageView();
piwikTracker.enableLinkTracking();
} catch( err ) {}
</script><noscript><p><img src="http://wa.hawebs.net/piwik.php?idsite=7" style="border:0" alt="" /></p></noscript>
<!-- End Piwik Tag -->

{/literal}

</body>
</html>
