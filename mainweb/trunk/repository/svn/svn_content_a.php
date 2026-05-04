<!-- content_a -->

<div id="content_a">
  <div class="t">
    <div class="b">
      <div class="l">
        <div class="r">
          <div class="tl">
            <div class="tr">
              <div style="border:none">
                <div id="main-content">
                  <div id="featured-article" class="clearfix">
                    <div class="headline catName">
                      <h1 style="width:auto; float:none">SVN库</h1>
                    </div>
                    <!--/end headline-->
                  </div>
                  <!--featured-article -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="b" style="background-color:#fff">
    <div class="l">
      <div class="r">
        <div class="bl">
          <div class="br">
            <div id="cat-lower">
              <div class="feeds"><img src="<?php echo WEB_PATH; ?>/assets/img/global_elements/latestnews_rss.jpg" alt="RSS icon" style="margin-top:2px" />&nbsp; <a href="<?php echo RSS_SVN;?>">SVN库 RSS</a> &nbsp;|&nbsp; <a href="#">所有RSS</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br class="clearfix"/>
  <div class="section_a">
    <div id="cat-main">
      <ul>
       <?php
       
        include WEB_ROOT.'/include/extension/lastRSS.php';
        
        
        $rss = new lastRSS;
        
        $rss->cache_dir = 'cache';
        $rss->cache_time = 1200;
        
        if ($rs = $rss->get(RSS_SVN)) {
        	
//      显示网站的LOGO
		if ($rs[image_url] != '') {
        	echo "<a href=\"$rs[image_link]\"><img src=\"$rs[image_url]\" alt=\"$rs[image_title]\" vspace=\"1\" border=\"0\" /></a><br />\n";
		}
		
//		显示可单击网站标题
//		echo "<big><b><a href=\"$rs[link]\">$rs[title]</a></b></big><br />\n";

//		显示网站描述
//		echo "$rs[description]<br />\n";

//		显示最后发布的文章 (标题, 连接, 描述)
//		echo "<ul>\n";
$i = 0;
		foreach($rs['items'] as $item) {
//        	echo "\t<p><a href=\"$item[link]\" target=\"_blank\">".$item['title']."</a><br />"."(".date('Y-m-d H:i:s', strtotime($item['pubDate'])).")</p>\n";
?>
<li class="fix_floats">

          <a href="<?php echo $item[link];?>" target="_blank"><?php echo $item['title'];?></a><br />
          <?php echo date('Y-m-d H:i:s', strtotime($item['pubDate']));?><p/>
          <?php echo $item['description'];?>
         
          
</li>
<?php

if($i++ == 5){
	break;
}
			}
//			echo "</ul>\n";
        }
        else {
        	echo "错误：不能正确读取RSS源。\n";
        }

        ?>
        
      </ul>
    </div>
    <br class="clearfix"/>
    <br class="clearboth"/>
    <!-- // rd-corners-div -->
  </div>
  <br class="clearfix"/>
  <br class="clearfix"/>
  
  <!-- // rounded corners - news from our partners -->
  <br class="clearfix"/>
  <br/>
  
  <!-- // rounded corners - ad spot -->
</div>
<!-- content_a END -->
