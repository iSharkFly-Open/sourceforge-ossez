{if $piwikUrl == 'http://piwik.org/demo/' || $debugTrackVisitsInsidePiwikUI}
<div style="clear:both;"></div>
{literal}
<!-- Piwik -->
<script src="piwik.js" type="text/javascript"></script>
<script type="text/javascript">
try {
 var piwikTracker = Piwik.getTracker("piwik.php", 1);
 piwikTracker.setCustomData({ 'video_play':1, 'video_finished':0 });
 piwikTracker.trackPageView();
 piwikTracker.enableLinkTracking();
} catch(err) {}
</script>
<!-- End Piwik Tag -->

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
{/if}
