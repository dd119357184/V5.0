<!DOCTYPE html>
<html mip="#">
 <head>
  <meta charset="utf-8" />
  <meta name="applicable-device" content="pc,mobile" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0" />
  <link rel="shortcut icon" href="http://db577.cn/favicon.ico" type="image/x-icon" />
  <title>热搜电影大全-热门电影-电影排行榜-中青创电影快搜</title>
  <meta name="keywords" content="电影排行榜,电视剧排行榜,热搜电影有哪些,影视快搜,电影大全排行总榜,电影热搜榜排名榜" />
  <meta name="description" content="中青创电影大全分享提供当下热门的电影大片排行，同步更新全网热映动态，向网友提供丰富多彩的好莱坞电影，华语电影等经典电影在线推荐服务。" />
  <link rel="stylesheet" type="text/css" href="https://mipcache.bdstatic.com/static/v1/mip.css">
  <link rel="stylesheet" type="text/css" href="http://db577.cn/style/css/style.css" />
  <style mip-custom="#"> .s043cda { font-weight: bold; } .s3df0a3 { display: inline; } .mip-carousle-subtitle { display: none; } .pagination .active span{ border: 1px #efefef solid; min-width: 32px; height: 32px; display: inline-block; vertical-align: middle; line-height: 32px; cursor: pointer; margin: 3px; font-size: 12px; padding: 0 8px; background-color: #004FCB; border-color: #004FCB; color: #fff; } mip-vd-tabs .mip-vd-tabs-scroll-touch { padding-bottom: 28px; margin-top: -32px; } ul li.inlinb, li.page-item { display: inline-block; } </style>
  <link rel="canonical" href="http://db577.cn/movie/" />
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
	   <a target="_blank" href="#" rel="bookmark" class="thumbs" title="全部电影">
          <mip-img layout="container" src="http://db577.cn/style/images/d1.jpg"></mip-img></a>
		  <h2><strong>最新全部电影</strong></h2>
         <div class="excerpt">
        中青创头条全部电影频道，热门好看的影视资料库，提供热门高清的电影，好莱坞大片等网络视频一站式在线排行榜。
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
	     $topkey = huoduan_get_baidu_top($huoduan['hotcachetime'],26);
		 for($i=0;$i<42;$i++){
			 if(strlen($topkey[$i])>0){
			echo ' <li><span class="num'.$numclass.'"></span><a target="_blank" href="'.huoduansourl($topkey[$i]).'">'.$topkey[$i].'</a></li>'; 	} 
		 }
	 ?></ul>
       </article></li>
      <li class="layout_li">
       <article class="topic_main">
	   <section class="topic_post">
	   <a target="_blank" href="#" rel="bookmark" class="thumbs" title="爱情电影">
          <mip-img layout="container" src="http://db577.cn/style/images/d2.jpg"></mip-img></a>
		  <h2><strong>最新爱情电影</strong></h2>
         <div class="excerpt">
        中青创头条爱情电影频道，小清新淡淡的甜，青春永远是一个美而永恒不变的主题，这些爱情电影的画面都太美好。
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
	     $topkey = huoduan_get_baidu_top($huoduan['hotcachetime'],338);
		 for($i=0;$i<42;$i++){
			 if(strlen($topkey[$i])>0){
			echo ' <li><span class="num'.$numclass.'"></span><a target="_blank" href="'.huoduansourl($topkey[$i]).'">'.$topkey[$i].'</a></li>'; 	} 
		 }
	 ?></ul>
       </article></li>
      <li class="layout_li">
       <article class="topic_main">
	   <section class="topic_post">
	   <a target="_blank" href="#" rel="bookmark" class="thumbs" title="喜剧电影">
          <mip-img layout="container" src="http://db577.cn/style/images/d3.jpg"></mip-img></a>
		  <h2><strong>最新喜剧电影</strong></h2>
         <div class="excerpt">
        中青创头条喜剧电影频道，快乐的笑，悲惨的笑，神经质的笑，歇斯底里的笑，喜剧电影指以笑激发观众的影片。
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
	     $topkey = huoduan_get_baidu_top($huoduan['hotcachetime'],340);
		 for($i=0;$i<42;$i++){
			 if(strlen($topkey[$i])>0){
			echo ' <li><span class="num'.$numclass.'"></span><a target="_blank" href="'.huoduansourl($topkey[$i]).'">'.$topkey[$i].'</a></li>'; 	} 
		 }
	 ?></ul>
       </article></li>
      <li class="layout_li">
       <article class="topic_main">
	   <section class="topic_post">
	   <a target="_blank" href="#" rel="bookmark" class="thumbs" title="惊悚电影">
          <mip-img layout="container" src="http://db577.cn/style/images/d4.jpg"></mip-img></a>
		  <h2><strong>最新惊悚电影</strong></h2>
         <div class="excerpt">
        中青创头条惊悚电影频道，疑惊悚类电影一直是很多电影迷的最爱，喜欢悬疑类电影的朋友这些影片一定要看啊。
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
	     $topkey = huoduan_get_baidu_top($huoduan['hotcachetime'],339);
		 for($i=0;$i<42;$i++){
			 if(strlen($topkey[$i])>0){
			echo ' <li><span class="num'.$numclass.'"></span><a target="_blank" href="'.huoduansourl($topkey[$i]).'">'.$topkey[$i].'</a></li>'; 	} 
		 }
	 ?></ul>
       </article></li>
      <li class="layout_li">
       <article class="topic_main">
	   <section class="topic_post">
	   <a target="_blank" href="#" rel="bookmark" class="thumbs" title="科幻电影">
          <mip-img layout="container" src="http://db577.cn/style/images/d5.jpg"></mip-img></a>
		  <h2><strong>最新科幻电影</strong></h2>
         <div class="excerpt">
        中青创头条科幻电影频道，科幻电影以新奇大胆的创意，人类对未来或未知的孜孜探索精神，深受影迷喜爱。
         </div>
         <div class="postinfo">
          <div class="left">
           <span class="author"><a href="#" ><i class="icon icon-user-1"></i>中青创小编</a></span>
           <span class="date"><i class="icon icon-calendar-1"></i><b><?php echo date("Y-m-d H:i",time()); ?></b></span>
          </div>
          <div class="right">
           <span class="view"><i class="icon icon-eye-1"></i><b>834609</b></span>
          </div>
         </div>
        </section>
		    <ul class="middle-text1"> <?php 
	     $topkey = huoduan_get_baidu_top($huoduan['hotcachetime'],437);
		 for($i=0;$i<42;$i++){
			 if(strlen($topkey[$i])>0){
			echo ' <li><span class="num'.$numclass.'"></span><a target="_blank" href="'.huoduansourl($topkey[$i]).'">'.$topkey[$i].'</a></li>'; 	} 
		 }
	 ?></ul>
       </article></li>
      <li class="layout_li">
       <article class="topic_main">
	   <section class="topic_post">
	   <a target="_blank" href="#" rel="bookmark" class="thumbs" title="剧情电影">
          <mip-img layout="container" src="http://db577.cn/style/images/d6.jpg"></mip-img></a>
		  <h2><strong>最新剧情电影</strong></h2>
         <div class="excerpt">
        中青创头条剧情电影频道，无论是一部作品、一个人，还是一件事，都往往可以衍生出许多不同的话题，耐人寻味。
         </div>
         <div class="postinfo">
          <div class="left">
           <span class="author"><a href="#" ><i class="icon icon-user-1"></i>中青创小编</a></span>
           <span class="date"><i class="icon icon-calendar-1"></i><b><?php echo date("Y-m-d H:i",time()); ?></b></span>
          </div>
          <div class="right">
           <span class="view"><i class="icon icon-eye-1"></i><b>638286</b></span>
          </div>
         </div>
        </section>
		    <ul class="middle-text1"> <?php 
	     $topkey = huoduan_get_baidu_top($huoduan['hotcachetime'],337);
		 for($i=0;$i<42;$i++){
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