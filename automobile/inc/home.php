<!DOCTYPE html>
<html mip="#">
 <head>
  <meta charset="utf-8" />
  <meta name="applicable-device" content="pc,mobile" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0" />
  <link rel="shortcut icon" href="http://db577.cn/favicon.ico" type="image/x-icon" />
  <title>汽车销量排行榜-权威汽车销量排行-家用汽车排行榜-中青创热门汽车快搜</title>
  <meta name="keywords" content="汽车排行大全,汽车排行榜,口碑排名前十的车,suv汽车大全,汽车销量排行榜" />
  <meta name="description" content="中青创汽车大全，现在随着生活水平的提高，越来越多的人开始选择自己喜欢的代步汽车，实时数据及车友的真实点评，是您决策的权威指南。" />
  <link rel="stylesheet" type="text/css" href="https://mipcache.bdstatic.com/static/v1/mip.css">
  <link rel="stylesheet" type="text/css" href="http://db577.cn/style/css/style.css" />
  <style mip-custom="#"> .s043cda { font-weight: bold; } .s3df0a3 { display: inline; } .mip-carousle-subtitle { display: none; } .pagination .active span{ border: 1px #efefef solid; min-width: 32px; height: 32px; display: inline-block; vertical-align: middle; line-height: 32px; cursor: pointer; margin: 3px; font-size: 12px; padding: 0 8px; background-color: #004FCB; border-color: #004FCB; color: #fff; } mip-vd-tabs .mip-vd-tabs-scroll-touch { padding-bottom: 28px; margin-top: -32px; } ul li.inlinb, li.page-item { display: inline-block; } </style>
  <link rel="canonical" href="http://db577.cn/automobile/" />
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
	   <a target="_blank" href="#" rel="bookmark" class="thumbs" title="汽车月榜">
          <mip-img layout="container" src="http://db577.cn/style/images/q1.jpg"></mip-img></a>
		  <h2><strong>最新汽车月榜</strong></h2>
         <div class="excerpt">
        中青创头条汽车月榜频道，为广大车迷奉献最新，最全面的每月汽车销量汽排行榜数据。
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
	     $topkey = huoduan_get_baidu_top($huoduan['hotcachetime'],1564);
		 for($i=0;$i<30;$i++){
			 if(strlen($topkey[$i])>0){
			echo ' <li><span class="num'.$numclass.'"></span><a target="_blank" href="'.huoduansourl($topkey[$i]).'">'.$topkey[$i].'</a></li>'; 	} 
		 }
	 ?></ul>
       </article></li>
      <li class="layout_li">
       <article class="topic_main">
	   <section class="topic_post">
	   <a target="_blank" href="#" rel="bookmark" class="thumbs" title="热搜汽车">
          <mip-img layout="container" src="http://db577.cn/style/images/q2.jpg"></mip-img></a>
		  <h2><strong>最新热搜汽车</strong></h2>
         <div class="excerpt">
        中青创头条热搜汽车频道，汇总并综合计算各品牌汇总词的总体搜索指数，并以此得出汽车热搜排行榜。
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
	     $topkey = huoduan_get_baidu_top($huoduan['hotcachetime'],1540);
		 for($i=0;$i<30;$i++){
			 if(strlen($topkey[$i])>0){
			echo ' <li><span class="num'.$numclass.'"></span><a target="_blank" href="'.huoduansourl($topkey[$i]).'">'.$topkey[$i].'</a></li>'; 	} 
		 }
	 ?></ul>
       </article></li>
      <li class="layout_li">
       <article class="topic_main">
	   <section class="topic_post">
	   <a target="_blank" href="#" rel="bookmark" class="thumbs" title="电动汽车">
          <mip-img layout="container" src="http://db577.cn/style/images/q3.jpg"></mip-img></a>
		  <h2><strong>最新电动汽车</strong></h2>
         <div class="excerpt">
        中青创头条电动汽车频道，丰富的新能源电动汽车产业链企业库、产品库、车型库等。
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
	     $topkey = huoduan_get_baidu_top($huoduan['hotcachetime'],1676);
		 for($i=0;$i<30;$i++){
			 if(strlen($topkey[$i])>0){
			echo ' <li><span class="num'.$numclass.'"></span><a target="_blank" href="'.huoduansourl($topkey[$i]).'">'.$topkey[$i].'</a></li>'; 	} 
		 }
	 ?></ul>
       </article></li>
      <li class="layout_li">
       <article class="topic_main">
	   <section class="topic_post">
	   <a target="_blank" href="#" rel="bookmark" class="thumbs" title="微型车">
          <mip-img layout="container" src="http://db577.cn/style/images/q4.jpg"></mip-img></a>
		  <h2><strong>最新微型车</strong></h2>
         <div class="excerpt">
        中青创头条微型车频道，涵盖微型车汽车大全，结合微型车销量和微型车排行榜让您对微型车有更加了解。
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
	     $topkey = huoduan_get_baidu_top($huoduan['hotcachetime'],1543);
		 for($i=0;$i<30;$i++){
			 if(strlen($topkey[$i])>0){
			echo ' <li><span class="num'.$numclass.'"></span><a target="_blank" href="'.huoduansourl($topkey[$i]).'">'.$topkey[$i].'</a></li>'; 	} 
		 }
	 ?></ul>
       </article></li>
	   	         <li class="layout_li">
       <article class="topic_main">
	   <section class="topic_post">
	   <a target="_blank" href="#" rel="bookmark" class="thumbs" title="小型车">
          <mip-img layout="container" src="http://db577.cn/style/images/q5.jpg"></mip-img></a>
		  <h2><strong>最新小型车</strong></h2>
         <div class="excerpt">
        中青创头条小型车频道，品牌筛选快速找到合适的小型车，最新小型车排行榜，购车参考必看。
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
	     $topkey = huoduan_get_baidu_top($huoduan['hotcachetime'],1544);
		 for($i=0;$i<30;$i++){
			 if(strlen($topkey[$i])>0){
			echo ' <li><span class="num'.$numclass.'"></span><a target="_blank" href="'.huoduansourl($topkey[$i]).'">'.$topkey[$i].'</a></li>'; 	} 
		 }
	 ?></ul>
       </article></li>
      <li class="layout_li">
       <article class="topic_main">
	   <section class="topic_post">
	   <a target="_blank" href="#" rel="bookmark" class="thumbs" title="紧凑型车">
          <mip-img layout="container" src="http://db577.cn/style/images/q6.jpg"></mip-img></a>
		  <h2><strong>最新紧凑型车</strong></h2>
         <div class="excerpt">
        中青创头条紧凑型车频道，紧凑型家轿可以说是选择人群最多的车型，此类车型一般都比较有性价比。
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
	     $topkey = huoduan_get_baidu_top($huoduan['hotcachetime'],1541);
		 for($i=0;$i<30;$i++){
			 if(strlen($topkey[$i])>0){
			echo ' <li><span class="num'.$numclass.'"></span><a target="_blank" href="'.huoduansourl($topkey[$i]).'">'.$topkey[$i].'</a></li>'; 	} 
		 }
	 ?></ul>
       </article></li>
      <li class="layout_li">
       <article class="topic_main">
	   <section class="topic_post">
	   <a target="_blank" href="#" rel="bookmark" class="thumbs" title="中级车">
          <mip-img layout="container" src="http://db577.cn/style/images/q7.jpg"></mip-img></a>
		  <h2><strong>最新中级车</strong></h2>
         <div class="excerpt">
        中青创头条中级车频道，轴距一般是2.8米至3.0米,发动机排量一般都在2.0升到3.0升的一类车。
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
	     $topkey = huoduan_get_baidu_top($huoduan['hotcachetime'],1545);
		 for($i=0;$i<30;$i++){
			 if(strlen($topkey[$i])>0){
			echo ' <li><span class="num'.$numclass.'"></span><a target="_blank" href="'.huoduansourl($topkey[$i]).'">'.$topkey[$i].'</a></li>'; 	} 
		 }
	 ?></ul>
       </article></li>
      <li class="layout_li">
       <article class="topic_main">
	   <section class="topic_post">
	   <a target="_blank" href="#" rel="bookmark" class="thumbs" title="中高级车">
          <mip-img layout="container" src="http://db577.cn/style/images/q8.jpg"></mip-img></a>
		  <h2><strong>最新中高级车</strong></h2>
         <div class="excerpt">
        中青创头条中高级车频道，为新生代中产家庭带来更优雅，更轻盈，更宽敞，更智能的崭新驾乘体验。
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
	     $topkey = huoduan_get_baidu_top($huoduan['hotcachetime'],1546);
		 for($i=0;$i<30;$i++){
			 if(strlen($topkey[$i])>0){
			echo ' <li><span class="num'.$numclass.'"></span><a target="_blank" href="'.huoduansourl($topkey[$i]).'">'.$topkey[$i].'</a></li>'; 	} 
		 }
	 ?></ul>
       </article></li>
	         <li class="layout_li">
       <article class="topic_main">
	   <section class="topic_post">
	   <a target="_blank" href="#" rel="bookmark" class="thumbs" title="豪华车">
          <mip-img layout="container" src="http://db577.cn/style/images/q9.jpg"></mip-img></a>
		  <h2><strong>最新豪华车</strong></h2>
         <div class="excerpt">
        中青创头条豪华车频道，豪华行政级座舱，革新的智能驾驶科技，助您解放双手，开启尊贵的感官之境。
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
	     $topkey = huoduan_get_baidu_top($huoduan['hotcachetime'],1548);
		 for($i=0;$i<30;$i++){
			 if(strlen($topkey[$i])>0){
			echo ' <li><span class="num'.$numclass.'"></span><a target="_blank" href="'.huoduansourl($topkey[$i]).'">'.$topkey[$i].'</a></li>'; 	} 
		 }
	 ?></ul>
       </article></li>
	         <li class="layout_li">
       <article class="topic_main">
	   <section class="topic_post">
	   <a target="_blank" href="#" rel="bookmark" class="thumbs" title="SUV">
          <mip-img layout="container" src="http://db577.cn/style/images/q10.jpg"></mip-img></a>
		  <h2><strong>最新SUV</strong></h2>
         <div class="excerpt">
        中青创头条SUV频道，SUV市场发展的黄金时期，许多朋友在买车时，首要考虑的汽车产品大都是SUV车型。
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
	     $topkey = huoduan_get_baidu_top($huoduan['hotcachetime'],1542);
		 for($i=0;$i<30;$i++){
			 if(strlen($topkey[$i])>0){
			echo ' <li><span class="num'.$numclass.'"></span><a target="_blank" href="'.huoduansourl($topkey[$i]).'">'.$topkey[$i].'</a></li>'; 	} 
		 }
	 ?></ul>
       </article></li>
	         <li class="layout_li">
       <article class="topic_main">
	   <section class="topic_post">
	   <a target="_blank" href="#" rel="bookmark" class="thumbs" title="MPV">
          <mip-img layout="container" src="http://db577.cn/style/images/q11.jpg"></mip-img></a>
		  <h2><strong>最新MPV</strong></h2>
         <div class="excerpt">
        中青创头条MPV频道，从旅行轿车演变而来，它集旅行车宽大乘员空间，轿车的舒适性功能于一身。
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
	     $topkey = huoduan_get_baidu_top($huoduan['hotcachetime'],1549);
		 for($i=0;$i<30;$i++){
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