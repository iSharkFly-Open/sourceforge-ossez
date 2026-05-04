<?php
/**
 * Copyright (C) 2006-2010 YUCHENG HU
 *
 * ----------------------------------------------------------------------------------
 * HA WEBSYSTEMS
 * http://www.hawebs.net
 * http://www.tcivis.com
 *
 * Contact
 * huyuchengus@gmail.com / yuchenghu@hawebs.net
 * 
 * ----------------------------------------------------------------------------------
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>
 *
 * GNU GENERAL PUBLIC LICENSE
 *
 * ----------------------------------------------------------------------------------
 */

require_once '../../include/common.php';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<!-----------------------------------------
 + YUCHENG HU (C) [http://www.hawebs.net] +
 +                                        +
 + [huyuchengus@gmail.com]                +
 + [yuchenghu@hawebs.net]                 +
 ----------------------------------------->
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<!-- For Search Engine  -->
<meta name="google-site-verification" content="xnbbtqBfGxy34Re-pBf6A5wE_za4JA2VwbSDtuHm4uI" />
<meta name="keywords" content="<?php echo MATE_KEYWORDS?>" />
<meta name="description" content="<?php echo MATE_DESCRIPTION?>" />
<meta name="author" content="<?php echo MATE_AUTHOR?> />
<meta name="generator" content="<?php echo MATE_GENERATOR?>" />
<title><?php echo SITE_TITLE;?></title>

<?php require_once WEB_ROOT.'/include/incs/css.php';?>
</head>
<!-- Flash START-->
<script src="scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<!-- Flash END-->
<!-- Spry START -->
<script src="extensions/SpryAssets/SpryCollapsiblePanel.js" type="text/javascript"></script>
<script src="extensions/SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<script src="extensions/SpryAssets/SprySlidingPanels.js" type="text/javascript"></script>
<script src="extensions/SpryAssets/swfobject.js" type="text/javascript" ></script>
<!-- Spry END -->
<!-- Customize START -->
<script type="text/javascript" src="http://www.scientificamerican.com/assets/js/swfobject.js"></script>
<script type="text/javascript" src="http://www.scientificamerican.com/assets/js/global.js"></script>
<script type="text/javascript" src="http://www.scientificamerican.com/assets/js/jquery-1.3.1.min.js"></script>
<script type="text/javascript">
		OAS_sitepage = "sciam.com";
		sitepage = "sciam.com";
		OAS_query = "";
		OAS_listpos = "Top,Right1,x40,x41,Top2";
	</script>
<!-- begin OAS browser test -->
<script type="text/javascript" language="JavaScript1.1">
	<!--
	OAS_version = 11;
	if (navigator.userAgent.indexOf('Mozilla/3') != -1 || navigator.userAgent.indexOf('Mozilla/4.0 WebTV') != -1)
	  OAS_version = 10;
	if (OAS_version >= 11)
	  document.write('<SCR' + 'IPT LANGUAGE=JavaScript1.1 SRC="' + OAS_url + 'adstream_mjx.ads/' + OAS_sitepage + '/1' + OAS_rns + '@' + OAS_listpos + '?' + OAS_query + '"><\/SCRIPT>');//-->
	</script>
<script type="text/javascript" language="JavaScript">
	<!--
	document.write('');
	function OAS_AD(pos) {
	  if (OAS_version >= 11)
		OAS_RICH(pos);
	  else
		OAS_NORMAL(pos);
	}//-->
	</script>
<body>
<div id="wrapper">
  <div id="header">
    <div id="header_a">
      <ul>
        <li><a href="http://www.hawebs.net" title="HA WEBS">HA WEBS</a></li>
      </ul>
    </div>
    <div id="header_b">
      <ul>
        <li>
          <script type="text/javascript">OAS_AD("Top");</script>
        </li>
      </ul>
    </div>
  </div>
  
  <!-- top_menu -->
  <?php require_once WEB_ROOT.'/include/incs/top_menu.php';?>
  
  <!-- top_category -->
  <?php require_once WEB_ROOT.'/include/incs/top_category.php';?>
 
  
  <br />
  <br class="clearboth" />
  <?php require_once 'svn_nav.php';?>
  
  <div class="clearfix" id="main" style="font-family:Georgia, 'Times New Roman', Times, serif">
    <?php require_once 'svn_content_a.php';?>
    <?php require_once 'svn_content_b.php';?>
    
  </div>
  <br/>
  <div id="footer">
    <div id="footer_information">
      <h1>Information</h1>
      <ul>
        <li><a href="http://www.scientificamerican.com/page.cfm?section=aboutus" rel="nofollow" onclick="s.linkTrackVars='prop6'; s.prop6='Footer'; s.tl(true,'o','Footer');">About Us</a></li>
        <li><a href="http://www.scientificamerican.com/mediakit/" rel="nofollow" target="_blank" onclick="s.linkTrackVars='prop6'; s.prop6='Footer'; s.tl(true,'o','Footer');">Advertising</a></li>
        <li><a href="http://www.scientificamerican.com/page.cfm?section=privacy" rel="nofollow" onclick="s.linkTrackVars='prop6'; s.prop6='Footer'; s.tl(true,'o','Footer');">Privacy Policy</a></li>
        <li><a href="http://www.scientificamerican.com/page.cfm?section=termsofuse" rel="nofollow" onclick="s.linkTrackVars='prop6'; s.prop6='Footer'; s.tl(true,'o','Footer');">Terms of Use</a></li>
        <li><a href="http://www.scientificamerican.com/ad-sections" rel="nofollow" target="_blank" onclick="s.linkTrackVars='prop6'; s.prop6='Footer'; s.tl(true,'o','Footer');">Special Ad Sections</a></li>
      </ul>
      <ul>
        <!--<li><a href="http://alwayson.goingon.com/cart/add/25335" rel="nofollow">GoingGreen Conference</a></li>-->
        <li><a href="http://www.scientificamerican.com/sitemap.cfm" onclick="s.linkTrackVars='prop6'; s.prop6='Footer'; s.tl(true,'o','Footer');">Site Map</a></li>
        <li><a href="http://www.scientificamerican.com/page.cfm?section=contactus" rel="nofollow" onclick="s.linkTrackVars='prop6'; s.prop6='Footer'; s.tl(true,'o','Footer');">Contact Us</a></li>
        <li><a href="http://www.scientificamerican.com/page.cfm?section=products-and-services" rel="nofollow" onclick="s.linkTrackVars='prop6'; s.prop6='Footer'; s.tl(true,'o','Footer');">Products &amp; Services</a></li>
        <li><a href="http://www.scientificamerican.com/partners/" rel="nofollow" onclick="s.linkTrackVars='prop6'; s.prop6='Footer'; s.tl(true,'o','Footer');">Partner Network</a></li>
      </ul>
    </div>
    <div id="footer_publications">
      <h1>Publications</h1>
      <ul>
        <li><a href="http://www.scientificamerican.com/sciammag/" onclick="s.linkTrackVars='prop6'; s.prop6='Footer'; s.tl(true,'o','Footer');"><em>Scientific American</em></a></li>
        <li><a href="http://www.scientificamerican.com/sciammind/" onclick="s.linkTrackVars='prop6'; s.prop6='Footer'; s.tl(true,'o','Footer');"><em>Scientific American</em> Mind</a></li>
        <li><a href="http://www.sciamdigital.com/index.cfm" onclick="s.linkTrackVars='prop6'; s.prop6='Footer'; s.tl(true,'o','Footer');"><em>Scientific American</em> Digital</a></li>
        <li><a href="http://www.scientificamerican.com/special" rel="nofollow" onclick="s.linkTrackVars='prop6'; s.prop6='Footer'; s.tl(true,'o','Footer');">Special Editions and Reports</a></li>
        <li><a href="http://www.scientificamerican.com/page.cfm?section=international" rel="nofollow" onclick="s.linkTrackVars='prop6'; s.prop6='Footer'; s.tl(true,'o','Footer');">International Editions</a></li>
      </ul>
    </div>
    <script type="text/javascript">
			  // var theSublinks=new Array();
			  // theSublinks[0]="https://w1.buysub.com/loc/SCA/IASBFR8";
			  // theSublinks[1]="https://w1.buysub.com/loc/SCA/IASBFA8";
			  // subLink = theSublinks[Math.floor(Math.random()*(theSublinks.length))];
			  subLink = "https://w1.buysub.com/loc/SCA/IASBFA8";
		</script>
    <div id="footer_services">
      <h1>Services</h1>
      <ul>
        <li><a href="/subscribe/subscribe_mainnav.cfm?opt=b" rel="nofollow" target="_blank" onclick="s.linkTrackVars='prop6'; s.prop6='Footer'; s.tl(true,'o','Footer');">Subscribe</a></li>
        <li><a href="https://w1.buysub.com/pubs/SC/SCA/login_multimag_CAPTCHA.jsp?cds_page_id=67550&cds_mag_code=SCA&id=1257531264524&lsid=93101201206016766&vid=3" rel="nofollow" target="_blank" onclick="s.linkTrackVars='prop6'; s.prop6='Footer'; s.tl(true,'o','Footer');">Renew</a></li>
        <li><a href="https://w1.buysub.com/pubs/SC/SCA/login_multimag_CAPTCHA.jsp?cds_page_id=67550&cds_mag_code=SCA&id=1257531264524&lsid=93101201206016766&vid=3" rel="nofollow" onclick="s.linkTrackVars='prop6'; s.prop6='Footer'; s.tl(true,'o','Footer');">Subscriber Service</a></li>
        <li><a href="https://w1.buysub.com/loc/SCA/IASBFG1" rel="nofollow" onclick="s.linkTrackVars='prop6'; s.prop6='Footer'; s.tl(true,'o','Footer');" name="gift" target="_blank">Gift Subscriptions</a></li>
        <li><a href="http://m1.buysub.com/webapp/wcs/stores/servlet/StoreCatalogDisplay?catalogId=11001&amp;storeId=11001" rel="nofollow" onclick="s.linkTrackVars='prop6'; s.prop6='Footer'; s.tl(true,'o','Footer');">Order Back Issues</a></li>
      </ul>
    </div>
    <div id="footer_newsletters">
      <h1>Follow Us Via...</h1>
      <ul class="float_left">
        <li><a href="http://www.scientificamerican.com/page.cfm?section=rss" title="RSS Feeds"><img src="http://www.scientificamerican.com/assets/img/interface/icon_RSS.gif" alt="RSS Feeds" width="30" height="30" />RSS Feeds</a></li>
        <li><a href="http://www.scientificamerican.com/page.cfm?section=newslettersignup" title="E-mail Newsletters"><img src="http://www.scientificamerican.com/assets/img/interface/icon_Nwsltrs.gif" alt="E-mail Newsletters" width="30" height="30" />E-mail Newsletters</a></li>
        <li><a href="http://www.scientificamerican.com/blog/observations/" title="Blog"><img src="http://www.scientificamerican.com/assets/img/interface/blog.gif" alt="Blog" width="30" height="30" />Blog</a></li>
      </ul>
      <ul class="float_right" style="clear: right;">
        <li><a href="http://www.scientificamerican.com/podcast/" title="Podcasts"><img src="http://www.scientificamerican.com/assets/img/interface/icon_Pods.gif" alt="Podcasts" width="30" height="30" />Podcasts</a></li>
        <li><a href="http://www.scientificamerican.com/page.cfm?section=mobile" title="Mobile"><img src="http://www.scientificamerican.com/assets/img/interface/icon_Mobile.gif" alt="Mobile" width="30" height="30" />Mobile</a></li>
        <li><a href="http://www.scientificamerican.com/page.cfm?section=widgets" title="Widgets"><img src="http://www.scientificamerican.com/assets/img/interface/icon_Widgets.gif" alt="Widgets" width="30" height="30" />Widgets</a></li>
      </ul>
    </div>
    <br />
  </div>
  <div id="credits">&copy; 2010 Scientific American, a division of Nature America, Inc. All Rights Reserved.</div>
  <div style="height:158px; text-align:center; margin-top:17px; border-top:#ccc 1px solid; padding-top:10px; color:#ccc" class="clearfix"> ADVERTISEMENT<br />
    <script type="text/javascript">OAS_AD("Top2");</script>
  </div>
</div>
<!-- SiteCatalyst code version: H.11. Copyright 1997-2007 Omniture, Inc. More info available at http://www.omniture.com -->
<script language="JavaScript" src="http://www.scientificamerican.com/assets/js/s_code.js" type="text/javascript"></script>
<script language="JavaScript" type="text/javascript"><!--
s.pageName=document.title
s.channel="Sciam" 
s.pageType="" 
s.prop1="-" 
s.prop2="Page" 
s.prop3="" 
s.prop4="" 
s.prop5="" 
s.prop6="" 
s.prop7="" 

s.prop9="" 
s.prop10="" 
s.prop11="" 
s.prop12="" 
s.prop19="" 
s.prop21="" 
							
s.events="event4"



s.eVar4="" 
s.eVar5="" 
s.eVar6="" 
s.eVar7="" 
s.eVar8="" 
s.eVar9="" 
s.hier1="SciAm|-|" 		
/************* DO NOT ALTER ANYTHING BELOW THIS LINE ! **************/
var s_code=s.t();if(s_code)document.write(s_code)//--></script>
<script language="JavaScript"><!--
if(navigator.appVersion.indexOf('MSIE')>=0)document.write(unescape('%3C')+'\!-'+'-')
//--></script>
<!--/DO NOT REMOVE/-->
<!-- End SiteCatalyst code version: H.11. -->
<!-- Start Quantcast tag -->
<script type="text/javascript" src="http://edge.quantserve.com/quant.js"></script>
<script type="text/javascript">_qacct="p-8dwHOLIwK6auU";quantserve();</script>
<noscript>
<a href="http://www.quantcast.com/p-8dwHOLIwK6auU" target="_blank"><img src="http://pixel.quantserve.com/pixel/p-8dwHOLIwK6auU.gif" style="display: none;" border="0" height="1" width="1" alt="Quantcast"/></a>
</noscript>
<!-- End Quantcast tag -->
</body>
<?php
require_once WEB_ROOT.'./include/incs/foot.php';
//writevisitlog();
?>
</body>
</html>
