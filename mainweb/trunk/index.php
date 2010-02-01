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

require_once 'include/common.php';
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
<title><?php echo $sitetitle;?></title>

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
  <?php require_once 'include/incs/top_menu.php';?>
  
  <!-- top_category -->
  <?php require_once 'include/incs/top_category.php';?>
  

  
  <br />
  <br class="clearboth" />
  <div style="background:url(/assets/img/interface/new_undershadow.gif) left top repeat-x #e4e0dd;"> <br class="clearboth" />
    <div id="nav-more" class="clearfix">
      <div class="t">
        <div class="b">
          <div class="l">
            <div class="r">
              <div class="bl">
                <div class="br" style="margin:0">
                  <div class="tl">
                    <div class="tr" style="height:15px">
                      <h2 style="text-transform:none;font-size:1em;float:left;padding:0;width:100%;" class="fix_floats">
                        <div class="clearboth float_right"><img src="/assets/img/global_elements/latestnews_rss.jpg" alt="Rss" width="12" height="12" style="margin-bottom:-2px" /> <a href="/page.cfm?section=rss" title="RSS" style="color:#6c655f" rel="nofollow" onClick="s.linkTrackVars='prop6'; s.prop6='Header'; s.tl(true,'o','Header');">RSS Feeds</a> &nbsp; <img src="/assets/img/interface/articleEnvelope.gif" alt="Newsletter Signup" width="13" height="12" style="margin-bottom:-2px" /> <a href="/page.cfm?section=newslettersignup&amp;OriginCode=20080430nav" rel="nofollow" title="Newsletter Signup" style="color:#6c655f" onClick="s.linkTrackVars='prop6'; s.prop6='Header'; s.tl(true,'o','Header');">Newsletters</a> &nbsp; <img src="/assets/img/interface/bookmark.gif" alt="Bookmark" width="13" height="12" style="margin-bottom:-2px" /> <a href="javascript:bookmarkpage();" rel="nofollow" title="Bookmark" style="color:#6c655f" onClick="s.linkTrackVars='prop6'; s.prop6='Header'; s.tl(true,'o','Header');">Bookmark</a></div>
                        <div class="float_left" style="width:625px"><a href="http://www.scientificamerican.com">ScientificAmerican.com</a> &nbsp; &gt; &nbsp; Science Jobs</div>
                      </h2>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- // rounded corners - breadcrumbs -->
    </div>
    <!--/end nav more options-->
  </div>
  <div class="clearfix" id="main" style="font-family:Georgia, 'Times New Roman', Times, serif">
    <div id="content_a">
      <div class="t">
        <div class="b">
          <div class="l">
            <div class="r">
              <div class="bl">
                <div class="br">
                  <div class="tl">
                    <div class="tr">
                      <div class="fix_floats">
                        <h1>Science Jobs</h1>
                        <span class="horizontallines notopmargin">&nbsp;</span>
                        <div id="aboutus">
                          <p><b>Coming soon:</b><br />
                            <br />
                            Scientific American Jobs powered by <a href="http://www.nature.com/naturejobs/" title="to Naturejobs" target="_blank" style="font-style:italic">NatureJobs</a><br />
                            January 2010</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="content_b">
      <div class="rightNav section_b">
        <div>
          <h2>Subscription Center</h2>
        </div>
        <div class="b">
          <div class="l">
            <div class="r">
              <div class="bl">
                <div class="br" style="padding: 0 10px 0 10px; margin:0">
                  <div id="subcenter"> <img src="/media/cover/cvrFan-sciam.jpg" alt="Scientific American - cover" width="130" height="130" class="float_left" />
                    <ul>
                      <li><a href="https://w1.buysub.com/loc/SCA/IASBSA7" onclick="var s=s_gi('sciamcom'); s.linkTrackVars='prop6'; s.prop6='SC-Sciam-Free'; s.tl(this,'o','Subscription Center');" target="_blank">Risk-Free Issue</a></li>
                      <li><a href="http://www.sciamdigital.com/index.cfm?fa=Account.ViewDynamicPromo&amp;CMPGN=subscribe&amp;sc=I7SDG01" onclick="var s=s_gi('sciamcom'); s.linkTrackVars='prop6'; s.prop6='SC-Sciam-Digital'; s.tl(this,'o','Subscription Center');" target="_blank">Digital Subscriptions</a></li>
                      <li><a href="https://w1.buysub.com/loc/SCA/IASBSG0" onclick="var s=s_gi('sciamcom'); s.linkTrackVars='prop6'; s.prop6='SC-Sciam-Gift'; s.tl(this,'o','Subscription Center');" target="_blank">Give A Gift</a></li>
                      <li><a href="https://w1.buysub.com/pubs/SC/SCA/login_multimag_CAPTCHA.jsp?cds_page_id=67550&cds_mag_code=SCA&id=1257531264524&lsid=93101201206016766&vid=3" onclick="var s=s_gi('sciamcom'); s.linkTrackVars='prop6'; s.prop6='SC-Sciam-Service'; s.tl(this,'o','Subscription Center');" target="_blank">Customer Service</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script type="text/javascript">
		  // var SCALinks=new Array();
		  // SCALinks[0]="https://w1.buysub.com/loc/SCA/IASBSR7";
		  // SCALinks[1]="https://w1.buysub.com/loc/SCA/IASBSA7";
		  // SCALink = SCALinks[Math.floor(Math.random()*(SCALinks.length))];
		  SCALink ="https://w1.buysub.com/loc/SCA/IASBSA7";

		  var SCAGift ="https://w1.buysub.com/loc/SCA/IASBSG1";

		  var MNDLinks=new Array();
		  MNDLinks[0]="https://w1.buysub.com/loc/MND/IAMBSR8";
		  //MNDLinks[1]="https://w1.buysub.com/loc/MND/IAMBSR3";
		  MNDLink = MNDLinks[Math.floor(Math.random()*(MNDLinks.length))];

		  var MNDGift ="https://w1.buysub.com/loc/MND/IAMBSG1";
	</script>
      <br class="clearboth"/>
      <div class="advertise" align="center"> Advertisement
        <script type="text/javascript">OAS_AD("Right1");</script>
      </div>
      <br class="clearboth" />
      <br class="clearboth"/>
      <div class="rightNav section_b">
        <div>
          <h2>Editor's Pick</h2>
        </div>
        <div class="b">
          <div class="l">
            <div class="r">
              <div class="bl">
                <div class="br" style="padding: 0 10px 0 10px; margin:0">
                  <ul class="fix_floats">
                    <li class="idr"> <img src="/media/inline/time-to-ban-production-of-nuclear-weapons-material_1.jpg" alt="nuclear-material" height="75" width="75" class="fixIEfloats"/> <a href="http://www.scientificamerican.com/article.cfm?id=time-to-ban-production-of-nuclear-weapons-material" class="headline">Time to Ban Production of Nuclear Weapons Material</a>A new global treaty that cuts off production of plutonium and highly enriched uranium for nuclear weapons could jump-start nuclear disarmament and help prevent proliferation </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br class="clearboth" />
      <div class="n_letter section_b">
        <div class="t">
          <div class="b">
            <div class="l">
              <div class="r">
                <div class="bl">
                  <div class="br">
                    <div class="tl">
                      <div class="tr"> <img src="http://www.scientificamerican.com/assets/img/interface/icon_Nwsltrs.gif" alt="Newsletter" width="30" height="30" class="float_left" />
                        <h2>Weekly Review Newsletter</h2>
                        <span>Get weekly coverage delivered to your inbox</span><br />
                        <br />
                        <form action="http://www.scientificamerican.com/page.cfm?section=newslettersignup" method="post" class="fix_floats" style="padding-bottom:8px">
                          <input type="text" name="email" value="Enter your e-mail address" onfocus="this.value='';" class="emailupdate_input float_left"/>
                          <input type="hidden" name="wrn" value="y" />
                          <input name="submit" type="image" value="submit" src="http://www.scientificamerican.com/assets/img/interface/n_letterSignUp.png" class="emailupdate_submit float_left" />
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br class="clearboth" />
      <div id="Video" class="rightNav section_b">
        <div>
          <h2><span class="Video">&nbsp;</span>Video</h2>
        </div>
        <div class="b">
          <div class="l">
            <div class="r">
              <div class="bl">
                <div class="br" style="padding: 0 10px 6px 10px">
                  <ul class="fix_floats">
                    <li class="video"><a href="http://www.scientificamerican.com/video.cfm?id=62872619001" title="China-U.S. Google row escalates"> <img src="http://brightcove.vo.llnwd.net/d9/unsecured/media/1399189305/1399189305_62873716001_2010-01-22T130659Z-1-LOVE60L10FMR9-RTRMADP-3-CHINA-INTERNET.jpg?pubId=139918_lg.jpg" alt="China-U.S. Google row escalates" height="65" width="80" class="fixIEfloats"/> </a><a href="http://www.scientificamerican.com/video.cfm?id=62872619001" title="China-U.S. Google row escalates">China-U.S. Google row escalates</a></li>
                    <li class="video" style="padding-left:8px"><a href="http://www.scientificamerican.com/video.cfm?id=62872617001" title="Leaders scorned for climate impasse"> <img src="http://brightcove.vo.llnwd.net/d9/unsecured/media/1399189305/1399189305_62871387001_2010-01-22T125614Z-1-LOVE60L0ZXPT0-RTRMADP-3-THAILAND-CLIMATE-PROTEST.jpg?pubId=139918_lg.jpg" alt="Leaders scorned for climate impasse" height="65" width="80" class="fixIEfloats"/> </a><a href="http://www.scientificamerican.com/video.cfm?id=62872617001" title="Leaders scorned for climate impasse">Leaders scorned for climate impasse</a></li>
                    <li class="video" style="padding-left:8px"><a href="http://www.scientificamerican.com/video.cfm?id=62748118001" title="Clinton condemns cyber attacks"> <img src="http://brightcove.vo.llnwd.net/d9/unsecured/media/1399189305/1399189305_62749549001_2010-01-21T192125Z-2-LOVE60K1HROR6-RTRMADP-3-USA-CLINTON-INTERNET-62765786001.jpg?pubId=139918_lg.jpg" alt="Clinton condemns cyber attacks" height="65" width="80" class="fixIEfloats"/> </a><a href="http://www.scientificamerican.com/video.cfm?id=62748118001" title="Clinton condemns cyber attacks">Clinton condemns cyber attacks</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- // rounded corners - video -->
      </div>
      <div id="Podcasts" class="rightNav section_b">
        <div>
          <h2><span class="Podcasts">&nbsp;</span>Podcasts</h2>
        </div>
        <div class="b">
          <div class="l">
            <div class="r">
              <div class="bl">
                <div class="br" style="padding: 0 10px 6px 10px">
                  <ul class="fix_floats">
                    <li class="podcasts" style="padding-bottom:10px"> <span><a href="/podcast/podcasts.cfm?type=60-second-science">60-Second Science</a></span> &nbsp;&nbsp;&nbsp; <a href="http://rss.sciam.com/sciam/60secsciencepodcast" class="rss" onclick="s.linkTrackVars='eVar5';s.eVar5='RSS';s.tl(true,'o','RSS Subscribe');">RSS</a> &nbsp;&middot; <a href="http://phobos.apple.com/WebObjects/MZStore.woa/wa/viewPodcast?id=189330872" class="rss" onclick="s.linkTrackVars='eVar9'; s.eVar9='Podcast'; s.tl(true,'o','Podcast Subscribe');">iTunes</a> <a href="http://www.scientificamerican.com/podcast/episode.cfm?id=cleopatras-eyeliner-peeper-health-k-10-01-22" title="Cleopatra's Eyeliner: Peeper Health Keeper " style="padding-bottom:5px">Cleopatra's Eyeliner: Peeper Health Keeper </a>
                      <div id="player_563DAECB-954C-A1CE-D19FF19F0BB11632_bb" class="float_left">click to enable</div>
                      <p class="float_left" style="padding-left:5px"><a href="http://www.scientificamerican.com/podcast/podcast.mp3?e_id=563DAECB-954C-A1CE-D19FF19F0BB11632">Download</a></p>
                      <script type="text/javascript">
	   // <![CDATA[
	   var flashObject = new FlashObject("http://www.scientificamerican.com/assets/flash/mp3player/xspf_jukebox.swf?track_url=http://www.scientificamerican.com/podcast/podcast.mp3?e_id=563DAECB-954C-A1CE-D19FF19F0BB11632","xspf_jukebox","150","25","7","","","","","");
	   flashObject.addParam("wmode", "transparent");
	   flashObject.addVariable("mainurl","/podcast/");
	   flashObject.addVariable("skin_url","http://www.scientificamerican.com/assets/flash/mp3player/skin_2009/");
	   flashObject.addVariable("buffer","5");
	   flashObject.addVariable("repeat_playlist","false");
	   flashObject.addVariable("timedisplay","2");
	   flashObject.addVariable("autoplay","false");
	   flashObject.addVariable("duration","74000");
	   flashObject.write("player_563DAECB-954C-A1CE-D19FF19F0BB11632_bb");
	   // ]]>
	   // xspf_jukebox.focus();
	</script>
                    </li>
                    <li class="podcasts" style="padding-bottom:10px"> <span><a href="/podcast/podcasts.cfm?type=science-talk">Science Talk</a></span> &nbsp;&nbsp;&nbsp; <a href="http://rss.sciam.com/sciam/science-talk" class="rss" onclick="s.linkTrackVars='eVar5';s.eVar5='RSS';s.tl(true,'o','RSS Subscribe');">RSS</a> &nbsp;&middot; <a href="http://phobos.apple.com/WebObjects/MZStore.woa/wa/viewPodcast?id=122384595&s=143441" class="rss" onclick="s.linkTrackVars='eVar9'; s.eVar9='Podcast'; s.tl(true,'o','Podcast Subscribe');">iTunes</a> <a href="http://www.scientificamerican.com/podcast/episode.cfm?id=creating-darwins-biopic-and-consume-10-01-23" title="Creating Darwin's Biopic; and Consumer Electronics" style="padding-bottom:5px">Creating Darwin's Biopic; and Consumer Electronics</a>
                      <div id="player_5D04EF61-AAC4-2005-544B2D4C10D1E0C6_bb" class="float_left">click to enable</div>
                      <p class="float_left" style="padding-left:5px"><a href="http://www.scientificamerican.com/podcast/podcast.mp3?e_id=5D04EF61-AAC4-2005-544B2D4C10D1E0C6">Download</a></p>
                      <script type="text/javascript">
	   // <![CDATA[
	   var flashObject = new FlashObject("http://www.scientificamerican.com/assets/flash/mp3player/xspf_jukebox.swf?track_url=http://www.scientificamerican.com/podcast/podcast.mp3?e_id=5D04EF61-AAC4-2005-544B2D4C10D1E0C6","xspf_jukebox","150","25","7","","","","","");
	   flashObject.addParam("wmode", "transparent");
	   flashObject.addVariable("mainurl","/podcast/");
	   flashObject.addVariable("skin_url","http://www.scientificamerican.com/assets/flash/mp3player/skin_2009/");
	   flashObject.addVariable("buffer","5");
	   flashObject.addVariable("repeat_playlist","false");
	   flashObject.addVariable("timedisplay","2");
	   flashObject.addVariable("autoplay","false");
	   flashObject.addVariable("duration","1267000");
	   flashObject.write("player_5D04EF61-AAC4-2005-544B2D4C10D1E0C6_bb");
	   // ]]>
	   // xspf_jukebox.focus();
	</script>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- // rounded corners - podcast -->
      </div>
      <div id="Slideshows" class="rightNav section_b">
        <div>
          <h2><span class="Slideshows">&nbsp;</span>Slideshows</h2>
        </div>
        <div class="b">
          <div class="l">
            <div class="r">
              <div class="bl">
                <div class="br" style="padding: 0 10px 6px 10px">
                  <ul class="fix_floats">
                    <li class="slideshows"><a href="http://www.scientificamerican.com/slideshow.cfm?id=samso-attempts-100-percent-renewable-power" title="100 Percent Renewable? One Danish Island Experiments with Clean Power [Slide Show]"> <img src="/media/inline/samso-attempts-100-percent-renewable-power_1_thumb.jpg" alt="samso-wind-turbines" height="75" width="75" class="fixIEfloats"/> </a><a href="http://www.scientificamerican.com/slideshow.cfm?id=samso-attempts-100-percent-renewable-power" title="100 Percent Renewable? One Danish Island Experiments with Clean Power [Slide Show]">100 Percent Renewable? One Danish Island Experiments with Clean Power [Slide Show]</a></li>
                    <li class="slideshows" style="padding-left:10px"><a href="http://www.scientificamerican.com/slideshow.cfm?id=could-re-wilding-avert-6th-great-extinction" title="Could Re-Wilding Avert the 6th Great Extinction? [Slide Show]"> <img src="/media/inline/could-re-wilding-avert-6th-great-extinction_1_thumb.jpg" alt="grevy's zebra" height="75" width="75" class="fixIEfloats"/> </a><a href="http://www.scientificamerican.com/slideshow.cfm?id=could-re-wilding-avert-6th-great-extinction" title="Could Re-Wilding Avert the 6th Great Extinction? [Slide Show]">Could Re-Wilding Avert the 6th Great Extinction? [Slide Show]</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- // rounded corners - slideshows -->
      </div>
      <script type="text/javascript" charset="utf-8">
		$(function () {
			var tabContainers = $('div.tabs > div');
			tabContainers.hide().filter(':first').show();
			
			$('div.tabs ul.tabNavigation a').click(function () {
				tabContainers.hide();
				tabContainers.filter(this.hash).show();
				$('div.tabs ul.tabNavigation a').removeClass('selected');
				$(this).addClass('selected');
				return false;
			}).filter(':first').click();
		});
	</script>
      <div id="pop_news" class="tabs">
        <ul class="tabNavigation">
          <li><a href="#mostpop" style="padding: 3px 15px;*padding: 3px 9px;">Most Popular</a></li>
          <li><a href="#latest" style="padding: 3px 14px;*padding: 3px 8px;">Latest Stories</a></li>
        </ul>
        <div id="mostpop" style="background-color:#fff">
          <p class=""><a href="http://www.scientificamerican.com/blog/post.cfm?id=what-we-can-learn-from-slime-mold-h-2010-01-21">Slime mold validates efficiency of Tokyo rail network</a></p>
          <p class="even"><a href="http://www.scientificamerican.com/article.cfm?id=nasa-one-man-stealth-plane">Electric Icarus: NASA Designs a One-Man Stealth Plane</a></p>
          <p class=""><a href="http://www.scientificamerican.com/blog/post.cfm?id=environmental-ills-its-consumerism-2010-01-22">Environmental ills? It's consumerism, stupid</a></p>
          <p class="even"><a href="http://www.scientificamerican.com/article.cfm?id=early-human-population-size-genetic-diversity">Endangered Species: Humans Might Have Faced Extinction 1 Million Years Ago</a></p>
          <p class=" last"><a href="http://www.scientificamerican.com/article.cfm?id=the-naked-truth-why-humans-have-no-fur">The Naked Truth: Why Humans Have No Fur</a></p>
        </div>
        <div id="latest" style="background-color:#fff">
          <p class=""><a href="http://www.scientificamerican.com/blog/post.cfm?id=new-report-warns-against-smaller-ne-2010-01-22">Report says scientists lack funds to meet Congressional goal for finding smaller 'near-Earth asteroids'</a></p>
          <p class="even"><a href="http://www.scientificamerican.com/article.cfm?id=stratos-baumgartner">Gettin' Down: Planned Record-Breaking Skydive This Year Will Include First Supersonic Free Fall</a></p>
          <p class=""><a href="http://www.scientificamerican.com/article.cfm?id=algae-biofuel-growth-environmental-impact">Is Algae Worse than Corn for Biofuels?</a></p>
          <p class="even"><a href="http://www.scientificamerican.com/blog/post.cfm?id=marshall-nirenberg-forgotten-father-2010-01-22">Marshall Nirenberg, Forgotten Father of the Genetic Code, Dies</a></p>
          <p class="last"><a href="http://www.scientificamerican.com/article.cfm?id=ptsd-diagnosis-brain-imaging-meg-neural-communications">Brain Scan Offers First Biological Test in Diagnosis of Post-Traumatic Stress Disorder</a></p>
        </div>
      </div>
      <br class="clearboth" />
      <div class="advertise" align="center"> Advertisement
        <script type="text/javascript">OAS_AD("Right2");</script>
      </div>
      <!--/end advertise-->
      <br class="clearboth" />
      <div id="NewsfromOurPartners" class="rightNav section_b">
        <div>
          <h2><span class="viewall"><a href="/section.cfm?id=partnernews">VIEW ALL</a></span>News from Our Partners</h2>
        </div>
        <div class="b">
          <div class="l">
            <div class="r">
              <div class="bl">
                <div class="br" style="padding: 8px 10px 18px 10px;*padding-bottom:0;_padding-bottom:0"> <a href="http://www.reuters.com/" title="to Reuters" rel="nofollow"><img src="/assets/img/global_elements/reuters-115x15.gif" border="0" alt="Reuters" width="115" height="15"/></a>
                  <ul>
                    <li><a href="http://www.scientificamerican.com/article.cfm?id=un-climate-chief-rejects" title="U.N. climate chief rejects resigning over glacier gaffe">U.N. climate chief rejects resigning over glacier gaffe</a></li>
                    <li><a href="http://www.scientificamerican.com/article.cfm?id=un-climate-chief-rejects" title="UN climate chief rejects resigning over glacier gaffe">UN climate chief rejects resigning over glacier gaffe</a></li>
                    <li><a href="http://www.scientificamerican.com/article.cfm?id=sea-ice-pack-grows-in-nor" title="Sea ice pack grows in north China; oil threatened">Sea ice pack grows in north China; oil threatened</a></li>
                  </ul>
                  <a href="http://www.esa.int/esaCP/index.html" title="to ESA" rel="nofollow"><img src="/assets/img/global_elements/esa-115x15.gif" border="0" alt="ESA" width="115" height="15"/></a>
                  <ul>
                    <li><a href="http://www.scientificamerican.com/article.cfm?id=herschel-readies-itself-for-the-ori" title="Herschel readies itself for the Orion Nebula">Herschel readies itself for the Orion Nebula</a></li>
                    <li><a href="http://www.scientificamerican.com/article.cfm?id=tooling-up-exomars" title="Tooling up ExoMars">Tooling up ExoMars</a></li>
                    <li><a href="http://www.scientificamerican.com/article.cfm?id=new-satellite-maps-of-haiti-coming" title="New satellite maps of Haiti coming in">New satellite maps of Haiti coming in</a></li>
                  </ul>
                  <a href="http://www.nature.com/news" title="to Nature News" rel="nofollow"><img src="/assets/img/global_elements/natnews-115x15.gif" border="0" alt="Nature News" width="115" height="15"/></a>
                  <ul style="padding-bottom:0">
                    <li><a href="http://www.scientificamerican.com/article.cfm?id=http://www.nature.com/news/2010/100113/full/news.2010.10.html" title="The Haiti earthquake in depth">The Haiti earthquake in depth</a></li>
                    <li><a href="http://www.scientificamerican.com/article.cfm?id=http://www.nature.com/news/2010/100113/full/463154a.html" title="Neuroscience: The most vulnerable brains">Neuroscience: The most vulnerable brains</a></li>
                    <li><a href="http://www.scientificamerican.com/article.cfm?id=http://www.nature.com/news/2010/100113/full/463149a.html" title="The fickle Y chromosome">The fickle Y chromosome</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- // rounded corners - partners -->
      </div>
      <br class="clearboth" />
      <br class="clearboth" />
      <div style="color:#ccc; text-align:center; width:auto">ADVERTISEMENT</div>
      <div class="t">
        <div class="b">
          <div class="l">
            <div class="r">
              <div class="bl">
                <div class="br" style="margin:0">
                  <div class="tl">
                    <div class="tr" style="height:275px; margin:0">
                      <table width="100%" border="0" cellspacing="0" cellpadding="0" style="text-align:center">
                        <tr style="vertical-align:middle">
                          <td width="120" style="background-color:#e4e0dd;"><script type="text/javascript">OAS_AD("x40");</script></td>
                          <td height="90">&nbsp;</td>
                          <td width="120" style="background-color:#e4e0dd;"><script type="text/javascript">OAS_AD("x41");</script></td>
                        </tr>
                        <tr>
                          <td colspan="3">&nbsp;</td>
                        </tr>
                        <tr style="vertical-align:middle">
                          <td colspan="3" style="font-size:1.3em" height="138"><script type="text/javascript">OAS_AD("x42");</script></td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br class="clearboth" />
      <div class="advertise" align="center">
        <div style="background-color:#fff; width:310px; padding-top: 5px">
          <script type="text/javascript">
			var _sciAm_feedUrl = escape('http://www.scientificamerican.com/xml/widget.cfm?type=qotd');
			var _sciAm_widgetSize = "large_new";
		</script>
          <script type="text/javascript" src="http://www.scientificamerican.com/widgets/sciam_widgets/js/contentWidget.js"></script>
        </div>
      </div>
      <!--/end advertise-->
    </div>
  </div>
  <br/>
  <div id="footer">
  
  <?php
  require_once WEB_ROOT.'/include/incs/foot.php';

//writevisitlog();
?>

</div>

</body>
</html>
