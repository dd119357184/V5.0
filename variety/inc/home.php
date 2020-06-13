<!DOCTYPE html>
<html mip="#">
 <head>
  <meta charset="utf-8" />
  <meta name="applicable-device" content="pc,mobile" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0" />
  <link rel="shortcut icon" href="http://db577.cn/favicon.ico" type="image/x-icon" />
  <title>热门综艺频道-综艺大热门-综艺节目大全-中青创最新综艺快搜</title>
  <meta name="keywords" content="综艺节目大全,好看的综艺节目排行榜,中青创综艺节目,综艺大热门,台湾综艺,综艺秀" />
  <meta name="description" content="中青创综艺节目大全，拥有全网的热门综艺资源，综艺节目排行榜，热播的综艺节目排行榜，包含内地综艺，台湾综艺，韩国综艺，日本综艺，香港综艺等。" />
  <link rel="stylesheet" type="text/css" href="https://mipcache.bdstatic.com/static/v1/mip.css">
  <link rel="stylesheet" type="text/css" href="http://db577.cn/style/css/style.css" />
  <style mip-custom="#"> .s043cda { font-weight: bold; } .s3df0a3 { display: inline; } .mip-carousle-subtitle { display: none; } .pagination .active span{ border: 1px #efefef solid; min-width: 32px; height: 32px; display: inline-block; vertical-align: middle; line-height: 32px; cursor: pointer; margin: 3px; font-size: 12px; padding: 0 8px; background-color: #004FCB; border-color: #004FCB; color: #fff; } mip-vd-tabs .mip-vd-tabs-scroll-touch { padding-bottom: 28px; margin-top: -32px; } ul li.inlinb, li.page-item { display: inline-block; } </style>
  <link rel="canonical" href="http://db577.cn/variety/" />
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
	   <a target="_blank" href="#" rel="bookmark" class="thumbs" title="综艺榜单">
          <mip-img layout="container" src="http://db577.cn/style/images/z1.jpg"></mip-img></a>
		  <h2><strong>最新综艺榜单</strong></h2>
         <div class="excerpt">
        中青创头条综艺榜单频道，为您提供国内外最新最火爆的综艺视频，包括访谈节目，脱口秀节目视频等。
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
	     $topkey = huoduan_get_baidu_top($huoduan['hotcachetime'],19);
		 for($i=0;$i<42;$i++){
			 if(strlen($topkey[$i])>0){
			echo ' <li><span class="num'.$numclass.'"></span><a target="_blank" href="'.huoduansourl($topkey[$i]).'">'.$topkey[$i].'</a></li>'; 	} 
		 }
	 ?></ul>
       </article></li>
      <li class="layout_li">
       <article class="topic_main">
	   <section class="topic_post">
	   <a target="_blank" href="#" rel="bookmark" class="thumbs" title="访谈综艺">
          <mip-img layout="container" src="http://db577.cn/style/images/z2.jpg"></mip-img></a>
		  <h2><strong>最新访谈综艺</strong></h2>
         <div class="excerpt">
        中青创头条访谈综艺频道，采取主持人与嘉宾对话的形式，以音视频、文字、图片等多媒体手段，与网友在线交流。
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
	     $topkey = huoduan_get_baidu_top($huoduan['hotcachetime'],439);
		 for($i=0;$i<42;$i++){
			 if(strlen($topkey[$i])>0){
			echo ' <li><span class="num'.$numclass.'"></span><a target="_blank" href="'.huoduansourl($topkey[$i]).'">'.$topkey[$i].'</a></li>'; 	} 
		 }
	 ?></ul>
       </article></li>
      <li class="layout_li">
       <article class="topic_main">
	   <section class="topic_post">
	   <a target="_blank" href="#" rel="bookmark" class="thumbs" title="情感综艺">
          <mip-img layout="container" src="http://db577.cn/style/images/z3.jpg"></mip-img></a>
		  <h2><strong>最新情感综艺</strong></h2>
         <div class="excerpt">
        中青创头条情感综艺频道，通过展现嘉宾较为真实的相处模式，在一定程度上也满足了观众内心深处的窥私欲。
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
	     $topkey = huoduan_get_baidu_top($huoduan['hotcachetime'],440);
		 for($i=0;$i<42;$i++){
			 if(strlen($topkey[$i])>0){
			echo ' <li><span class="num'.$numclass.'"></span><a target="_blank" href="'.huoduansourl($topkey[$i]).'">'.$topkey[$i].'</a></li>'; 	} 
		 }
	 ?></ul>
       </article></li>
      <li class="layout_li">
       <article class="topic_main">
	   <section class="topic_post">
	   <a target="_blank" href="#" rel="bookmark" class="thumbs" title="选秀综艺">
          <mip-img layout="container" src="http://db577.cn/style/images/z4.jpg"></mip-img></a>
		  <h2><strong>最新选秀综艺</strong></h2>
         <div class="excerpt">
        中青创头条选秀综艺频道，选拔在某方面表现优秀的人，中国自古就有，古代选秀一般是宫廷选秀。
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
	     $topkey = huoduan_get_baidu_top($huoduan['hotcachetime'],441);
		 for($i=0;$i<42;$i++){
			 if(strlen($topkey[$i])>0){
			echo ' <li><span class="num'.$numclass.'"></span><a target="_blank" href="'.huoduansourl($topkey[$i]).'">'.$topkey[$i].'</a></li>'; 	} 
		 }
	 ?></ul>
       </article></li>
	   	         <li class="layout_li">
       <article class="topic_main">
	   <section class="topic_post">
	   <a target="_blank" href="#" rel="bookmark" class="thumbs" title="内地综艺">
          <mip-img layout="container" src="http://db577.cn/style/images/z5.jpg"></mip-img></a>
		  <h2><strong>最新内地综艺</strong></h2>
         <div class="excerpt">
        中青创头条内地综艺频道，精选最好的内地综艺节目排行榜，喜欢内地综艺节目的要分享给好友噢。
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
	     $topkey = huoduan_get_baidu_top($huoduan['hotcachetime'],368);
		 for($i=0;$i<42;$i++){
			 if(strlen($topkey[$i])>0){
			echo ' <li><span class="num'.$numclass.'"></span><a target="_blank" href="'.huoduansourl($topkey[$i]).'">'.$topkey[$i].'</a></li>'; 	} 
		 }
	 ?></ul>
       </article></li>
      <li class="layout_li">
       <article class="topic_main">
	   <section class="topic_post">
	   <a target="_blank" href="#" rel="bookmark" class="thumbs" title="港台综艺">
          <mip-img layout="container" src="http://db577.cn/style/images/z6.jpg"></mip-img></a>
		  <h2><strong>最新港台综艺</strong></h2>
         <div class="excerpt">
        中青创头条港台综艺频道，最新最全台湾综艺节目信息，您可以查看各台湾综艺节目播出的日期，节目来宾嘉宾等内容。
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
	     $topkey = huoduan_get_baidu_top($huoduan['hotcachetime'],369);
		 for($i=0;$i<42;$i++){
			 if(strlen($topkey[$i])>0){
			echo ' <li><span class="num'.$numclass.'"></span><a target="_blank" href="'.huoduansourl($topkey[$i]).'">'.$topkey[$i].'</a></li>'; 	} 
		 }
	 ?></ul>
       </article></li>
	         <li class="layout_li">
       <article class="topic_main">
	   <section class="topic_post">
	   <a target="_blank" href="#" rel="bookmark" class="thumbs" title="脱口秀">
          <mip-img layout="container" src="http://db577.cn/style/images/z7.jpg"></mip-img></a>
		  <h2><strong>最新脱口秀</strong></h2>
         <div class="excerpt">
        中青创头条脱口秀频道，由观众聚集在一起讨论主持人提出的话题的广播或电视节目，脱口秀有松散性和幽默性等特点。
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
	     $topkey = huoduan_get_baidu_top($huoduan['hotcachetime'],1587);
		 for($i=0;$i<42;$i++){
			 if(strlen($topkey[$i])>0){
			echo ' <li><span class="num'.$numclass.'"></span><a target="_blank" href="'.huoduansourl($topkey[$i]).'">'.$topkey[$i].'</a></li>'; 	} 
		 }
	 ?></ul>
       </article></li>
     </ul>
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