<!DOCTYPE html>
<html mip="#">
 <head>
  <meta charset="utf-8" />
  <meta name="applicable-device" content="pc,mobile" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0" />
  <link rel="shortcut icon" href="http://db577.cn/favicon.ico" type="image/x-icon" />
  <title>热门网页游戏-网页游戏大全-页游排行榜-好玩游戏大全-中青创头条游戏热搜</title>
  <meta name="keywords" content="最受欢迎的游戏排行榜,适合长期玩的手游,网游手游排行榜第一名,十大耐玩的手机游戏,腾讯游戏排行,游戏排行单机" />
  <meta name="description" content="中青创头条游戏热搜频道您可以在这里获得最专业的游戏新闻资讯，找到您所喜爱的新游戏，完善的游戏攻略，最专业、最权威的游戏评测排行榜，欢迎了解试玩。" />
  <link rel="stylesheet" type="text/css" href="https://mipcache.bdstatic.com/static/v1/mip.css">
  <link rel="stylesheet" type="text/css" href="http://db577.cn/style/css/style.css" />
  <style mip-custom="#"> .s043cda { font-weight: bold; } .s3df0a3 { display: inline; } .mip-carousle-subtitle { display: none; } .pagination .active span{ border: 1px #efefef solid; min-width: 32px; height: 32px; display: inline-block; vertical-align: middle; line-height: 32px; cursor: pointer; margin: 3px; font-size: 12px; padding: 0 8px; background-color: #004FCB; border-color: #004FCB; color: #fff; } mip-vd-tabs .mip-vd-tabs-scroll-touch { padding-bottom: 28px; margin-top: -32px; } ul li.inlinb, li.page-item { display: inline-block; } </style>
  <link rel="canonical" href="http://db577.cn/game/" />
 </head>
 <body>
  <header class="header">
   <section id="header_main" class="header_main">
    <section class="wrapper">
     <nav class="header_menu">
      <ul class="menu">
       <li class="current-menu-item"><a href="http://db577.cn/" data-type="mip" data- title="首页">首页</a></li>
       <li><a href="http://db577.cn/movie/" data-type="mip" data-title="电影推荐" title="电影推荐">电影推荐</a></li>
       <li><a href="http://db577.cn/tv/" data-type="mip" data-title="电视热剧" title="电视热剧">电视热剧</a></li>
       <li><a href="http://db577.cn/variety/" data-type="mip" data-title="综艺节目" title="综艺节目">综艺节目</a></li>
       <li><a href="http://db577.cn/comic/" data-type="mip" data-title="必看动漫" title="必看动漫">必看动漫</a></li>
       <li><a href="http://db577.cn/novel/" data-type="mip" data-title="小说推荐" title="小说推荐">小说推荐</a></li>
       <li><a href="http://db577.cn/game/" data-type="mip" data-title="游戏达人" title="游戏达人">游戏达人</a></li>
       <li><a href="http://db577.cn/character/" data-type="mip" data-title="公众人物" title="公众人物">公众人物</a></li>
       <li><a href="http://db577.cn/automobile/" data-type="mip" data-title="汽车盘点" title="汽车盘点">汽车盘点</a></li>
       <li><a href="http://db577.cn/life/" data-type="mip" data-title="品味生活" title="品味生活">品味生活</a></li>
       <li><a href="http://db577.cn/science/" data-type="mip" data-title="最新科技" title="最新科技">最新科技</a></li>
       <li><a href="http://db577.cn/tourism/" data-type="mip" data-title="旅游时光" title="旅游时光">旅游时光</a></li>
       <li></li>
      </ul>
     </nav>
     <div class="header_menu header_btn">
      <ul class="menu">
       <li class="search"><button on="tap:search.toggle" id="btn-open" role="button" tabindex="0"><i class="icon icon-search-1"></i></button></li>
      </ul>
     </div>
     <button on="tap:menu.toggle" id="btn-open" role="button" tabindex="0" class="btn menu"><i class="icon icon-th-large-outline"></i></button>
     <a href="http://db577.cn/" class="btn login"><i class="icon icon-user-o"></i></a>
    </section>
   </section>
  </header>
  <main class="container">
   <div class="wrapper">
    <section class="topic_list">
     <ul class="layout_ul">
      <li class="layout_li">
       <article class="topic_main">
	   <section class="topic_post">
	   <a target="_blank" href="#" rel="bookmark" class="thumbs" title="网页游戏">
          <mip-img layout="container" src="http://db577.cn/style/images/y1.jpg"></mip-img></a>
		  <h2><strong>最新网页游戏</strong></h2>
         <div class="excerpt">
        中青创头条网页游戏频道，网页游戏大全、网页游戏排行榜，更多精彩攻，精品好玩的网页游戏。
         </div>
         <div class="postinfo">
          <div class="left">
           <span class="author"><a href="#" ><i class="icon icon-user-1"></i>中青创小编</a></span>
           <span class="date"><i class="icon icon-calendar-1"></i><b><?php echo date("Y-m-d H:i",time()); ?></b></span>
          </div>
          <div class="right">
           <span class="view"><i class="icon icon-eye-1"></i><b>760630</b></span>
          </div>
         </div>
        </section>
		   <ul class="middle-text1"> <?php 
	     $topkey = huoduan_get_baidu_top($huoduan['hotcachetime'],173);
		 for($i=0;$i<45;$i++){
			 if(strlen($topkey[$i])>0){
			echo ' <li><span class="num'.$numclass.'"></span><a target="_blank" href="'.huoduansourl($topkey[$i]).'">'.$topkey[$i].'</a></li>'; 	} 
		 }
	 ?></ul>
       </article></li>
      <li class="layout_li">
       <article class="topic_main">
	   <section class="topic_post">
	   <a target="_blank" href="#" rel="bookmark" class="thumbs" title="网络游戏">
          <mip-img layout="container" src="http://db577.cn/style/images/y2.jpg"></mip-img></a>
		  <h2><strong>最新网络游戏</strong></h2>
         <div class="excerpt">
        中青创头条网络游戏频道，精选人气超高的网页游戏，玩就玩，超多人，超热闹，超精彩的网页游戏。
         </div>
         <div class="postinfo">
          <div class="left">
           <span class="author"><a href="#" ><i class="icon icon-user-1"></i>中青创小编</a></span>
           <span class="date"><i class="icon icon-calendar-1"></i><b><?php echo date("Y-m-d H:i",time()); ?></b></span>
          </div>
          <div class="right">
           <span class="view"><i class="icon icon-eye-1"></i><b>954687</b></span>
          </div>
         </div>
        </section>
		    <ul class="middle-text1"> <?php 
	     $topkey = huoduan_get_baidu_top($huoduan['hotcachetime'],62);
		 for($i=0;$i<45;$i++){
			 if(strlen($topkey[$i])>0){
			echo ' <li><span class="num'.$numclass.'"></span><a target="_blank" href="'.huoduansourl($topkey[$i]).'">'.$topkey[$i].'</a></li>'; 	} 
		 }
	 ?></ul>
       </article></li>
      <li class="layout_li">
       <article class="topic_main">
	   <section class="topic_post">
	   <a target="_blank" href="#" rel="bookmark" class="thumbs" title="手机游戏">
          <mip-img layout="container" src="http://db577.cn/style/images/y3.jpg"></mip-img></a>
		  <h2><strong>最新手机游戏</strong></h2>
         <div class="excerpt">
        中青创头条手机游戏频道，分享好游戏，为玩家推荐新款手机游戏，热门的手游排行榜。
         </div>
         <div class="postinfo">
          <div class="left">
           <span class="author"><a href="#" ><i class="icon icon-user-1"></i>中青创小编</a></span>
           <span class="date"><i class="icon icon-calendar-1"></i><b><?php echo date("Y-m-d H:i",time()); ?></b></span>
          </div>
          <div class="right">
           <span class="view"><i class="icon icon-eye-1"></i><b>453890</b></span>
          </div>
         </div>
        </section>
		    <ul class="middle-text1"> <?php 
	     $topkey = huoduan_get_baidu_top($huoduan['hotcachetime'],524);
		 for($i=0;$i<45;$i++){
			 if(strlen($topkey[$i])>0){
			echo ' <li><span class="num'.$numclass.'"></span><a target="_blank" href="'.huoduansourl($topkey[$i]).'">'.$topkey[$i].'</a></li>'; 	} 
		 }
	 ?></ul>
       </article></li>
      <li class="layout_li">
       <article class="topic_main">
	   <section class="topic_post">
	   <a target="_blank" href="#" rel="bookmark" class="thumbs" title="单机游戏">
          <mip-img layout="container" src="http://db577.cn/style/images/y4.jpg"></mip-img></a>
		  <h2><strong>最新单机游戏</strong></h2>
         <div class="excerpt">
        中青创头条单机游戏频道，提供最新最好玩的单机游戏下载,单机游戏下载大全中文版下载。
         </div>
         <div class="postinfo">
          <div class="left">
           <span class="author"><a href="#" ><i class="icon icon-user-1"></i>中青创小编</a></span>
           <span class="date"><i class="icon icon-calendar-1"></i><b><?php echo date("Y-m-d H:i",time()); ?></b></span>
          </div>
          <div class="right">
           <span class="view"><i class="icon icon-eye-1"></i><b>731028</b></span>
          </div>
         </div>
        </section>
		    <ul class="middle-text1"> <?php 
	     $topkey = huoduan_get_baidu_top($huoduan['hotcachetime'],451);
		 for($i=0;$i<45;$i++){
			 if(strlen($topkey[$i])>0){
			echo ' <li><span class="num'.$numclass.'"></span><a target="_blank" href="'.huoduansourl($topkey[$i]).'">'.$topkey[$i].'</a></li>'; 	} 
		 }
	 ?></ul>
       </article></li>
     </ul>
    </section>
    <section class="video_list ">
	 
    </section>
   </div>
  </main><p class="middle-text">
     &copy; 2019-2022 中青创头条 版权所有 <a data-type="mip" href="http://www.beian.miit.gov.cn" rel="nofollow" target="_blank" data-title="京ICP备11016050号-1">京ICP备11016050号-1</a> <a data-type="mip" href="http://db577.cn/sitemap/" data-title="xml地图">XML</a>
</p>
  <mip-lightbox id="menu" layout="nodisplay" class="mip-hidden">
   <div class="lightbox">
    <nav class="m_menu">
     <ul class="menu">
       <li class="current-menu-item"><a href="http://db577.cn/" data-type="mip" data- title="首页">首页</a></li>
       <li><a href="http://db577.cn/movie/" data-type="mip" data-title="电影推荐" title="电影推荐">电影推荐</a></li>
       <li><a href="http://db577.cn/tv/" data-type="mip" data-title="电视热剧" title="电视热剧">电视热剧</a></li>
       <li><a href="http://db577.cn/variety/" data-type="mip" data-title="综艺节目" title="综艺节目">综艺节目</a></li>
       <li><a href="http://db577.cn/comic/" data-type="mip" data-title="必看动漫" title="必看动漫">必看动漫</a></li>
       <li><a href="http://db577.cn/novel/" data-type="mip" data-title="小说推荐" title="小说推荐">小说推荐</a></li>
       <li><a href="http://db577.cn/game/" data-type="mip" data-title="游戏达人" title="游戏达人">游戏达人</a></li>
       <li><a href="http://db577.cn/character/" data-type="mip" data-title="公众人物" title="公众人物">公众人物</a></li>
       <li><a href="http://db577.cn/automobile/" data-type="mip" data-title="汽车盘点" title="汽车盘点">汽车盘点</a></li>
       <li><a href="http://db577.cn/life/" data-type="mip" data-title="品味生活" title="品味生活">品味生活</a></li>
       <li><a href="http://db577.cn/science/" data-type="mip" data-title="最新科技" title="最新科技">最新科技</a></li>
       <li><a href="http://db577.cn/tourism/" data-type="mip" data-title="旅游时光" title="旅游时光">旅游时光</a></li>
       <li></li>
     </ul>
    </nav>
    <span on="tap:menu.toggle" class="close lightbox-close">×</span>
   </div>
  </mip-lightbox>
  <mip-lightbox id="search" layout="nodisplay" class="mip-hidden">
   <div class="lightbox">
    <article class="search popup">
     <section class="popup_main">
      <mip-form method="get" class="search_form" url="http://db577.cn/plus/search.php" action="http://db577.cn/plus/search.php">
       <input name="q" type="text" class="text_input" placeholder="输入关键字…" />
       <input type="submit" class="search_btn" value="搜索" />
      </mip-form>
      <span on="tap:search.toggle" class="close lightbox-close">×</span>
     </section>
    </article>
   </div>
  </mip-lightbox>
  <script src="https://c.mipcdn.com/static/v1/mip.js"></script>
  <script src="https://c.mipcdn.com/static/v1/mip-stats-baidu/mip-stats-baidu.js"></script>
  <mip-stats-baidu token="d457b82f8420e8581b24c8b0cc14ee1c"></mip-stats-baidu>
  <script src="https://c.mipcdn.com/static/v1/mip-gototop/mip-gototop.js" type="text/javascript" charset="utf-8"></script>
  <script src="https://c.mipcdn.com/static/v1/mip-fixed/mip-fixed.js" type="text/javascript" charset="utf-8"></script>
  <script src="https://c.mipcdn.com/extensions/platform/v1/mip-cambrian/mip-cambrian.js"></script>
  <script src="https://c.mipcdn.com/static/v1/mip-lightbox/mip-lightbox.js"></script>
  <script src="https://c.mipcdn.com/static/v1/mip-share/mip-share.js"></script>
  <script src="https://c.mipcdn.com/static/v1/mip-vd-tabs/mip-vd-tabs.js"></script>
  <script src="https://c.mipcdn.com/static/v1/mip-form/mip-form.js"></script>
 </body>
</html>