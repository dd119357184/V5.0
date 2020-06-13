<!DOCTYPE html>
<html mip="#">
 <head>
  <meta charset="utf-8" />
  <meta name="applicable-device" content="pc,mobile" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0" />
  <link rel="shortcut icon" href="http://db577.cn/favicon.ico" type="image/x-icon" />
  <title>小说免费阅读-最好看的小说排行榜-最热门的免费小说-中青创小说快搜</title>
  <meta name="keywords" content="小说网,免费小说,网络小说,最好看的小说推荐" />
  <meta name="description" content="中青创小说大全，最热门的免费小说排行，提供玄幻小说、网游小说、言情小说、穿越小说、都市小说等免费小说人气阅读榜单。最火小说榜每日更新。" />
  <link rel="stylesheet" type="text/css" href="https://mipcache.bdstatic.com/static/v1/mip.css">
  <link rel="stylesheet" type="text/css" href="http://db577.cn/style/css/style.css" />
  <style mip-custom="#"> .s043cda { font-weight: bold; } .s3df0a3 { display: inline; } .mip-carousle-subtitle { display: none; } .pagination .active span{ border: 1px #efefef solid; min-width: 32px; height: 32px; display: inline-block; vertical-align: middle; line-height: 32px; cursor: pointer; margin: 3px; font-size: 12px; padding: 0 8px; background-color: #004FCB; border-color: #004FCB; color: #fff; } mip-vd-tabs .mip-vd-tabs-scroll-touch { padding-bottom: 28px; margin-top: -32px; } ul li.inlinb, li.page-item { display: inline-block; } </style>
  <link rel="canonical" href="http://db577.cn/novel/" />
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
	   <a target="_blank" href="#" rel="bookmark" class="thumbs" title="小说榜单">
          <mip-img layout="container" src="http://db577.cn/style/images/s1.jpg"></mip-img></a>
		  <h2><strong>最新小说榜单</strong></h2>
         <div class="excerpt">
        中青创头条小说榜单频道，包含各类小说排行榜，小说排行榜上都是受用户欢迎的小说作品。
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
	     $topkey = huoduan_get_baidu_top($huoduan['hotcachetime'],7);
		 for($i=0;$i<30;$i++){
			 if(strlen($topkey[$i])>0){
			echo ' <li><span class="num'.$numclass.'"></span><a target="_blank" href="'.huoduansourl($topkey[$i]).'">'.$topkey[$i].'</a></li>'; 	} 
		 }
	 ?></ul>
       </article></li>
      <li class="layout_li">
       <article class="topic_main">
	   <section class="topic_post">
	   <a target="_blank" href="#" rel="bookmark" class="thumbs" title="玄幻奇幻">
          <mip-img layout="container" src="http://db577.cn/style/images/s2.jpg"></mip-img></a>
		  <h2><strong>最新玄幻奇幻</strong></h2>
         <div class="excerpt">
        中青创头条玄幻奇幻频道，玄幻则是奇幻中在东方神话方面再创新或融入其他奇幻题材的一类小说题材。
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
	     $topkey = huoduan_get_baidu_top($huoduan['hotcachetime'],353);
		 for($i=0;$i<30;$i++){
			 if(strlen($topkey[$i])>0){
			echo ' <li><span class="num'.$numclass.'"></span><a target="_blank" href="'.huoduansourl($topkey[$i]).'">'.$topkey[$i].'</a></li>'; 	} 
		 }
	 ?></ul>
       </article></li>
      <li class="layout_li">
       <article class="topic_main">
	   <section class="topic_post">
	   <a target="_blank" href="#" rel="bookmark" class="thumbs" title="都市言情">
          <mip-img layout="container" src="http://db577.cn/style/images/s3.jpg"></mip-img></a>
		  <h2><strong>最新都市言情</strong></h2>
         <div class="excerpt">
        中青创头条都市言情频道，最新最全最好看的都市言情连载小说在线排行榜，希望你们都喜欢看。
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
	     $topkey = huoduan_get_baidu_top($huoduan['hotcachetime'],355);
		 for($i=0;$i<30;$i++){
			 if(strlen($topkey[$i])>0){
			echo ' <li><span class="num'.$numclass.'"></span><a target="_blank" href="'.huoduansourl($topkey[$i]).'">'.$topkey[$i].'</a></li>'; 	} 
		 }
	 ?></ul>
       </article></li>
      <li class="layout_li">
       <article class="topic_main">
	   <section class="topic_post">
	   <a target="_blank" href="#" rel="bookmark" class="thumbs" title="武侠仙侠">
          <mip-img layout="container" src="http://db577.cn/style/images/s4.jpg"></mip-img></a>
		  <h2><strong>最新武侠仙侠</strong></h2>
         <div class="excerpt">
        中青创头条武侠仙侠频道，当前最好看的武侠仙侠排行榜，是广大武侠仙侠爱好者必看的小说精选。
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
	     $topkey = huoduan_get_baidu_top($huoduan['hotcachetime'],354);
		 for($i=0;$i<30;$i++){
			 if(strlen($topkey[$i])>0){
			echo ' <li><span class="num'.$numclass.'"></span><a target="_blank" href="'.huoduansourl($topkey[$i]).'">'.$topkey[$i].'</a></li>'; 	} 
		 }
	 ?></ul>
       </article></li>
	   	         <li class="layout_li">
       <article class="topic_main">
	   <section class="topic_post">
	   <a target="_blank" href="#" rel="bookmark" class="thumbs" title="青春校园">
          <mip-img layout="container" src="http://db577.cn/style/images/s5.jpg"></mip-img></a>
		  <h2><strong>最新青春校园</strong></h2>
         <div class="excerpt">
        中青创头条青春校园频道，爱看小说的朋友都知道今年是校园文井喷的一年，很喜欢那种青春快乐的小说。
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
	     $topkey = huoduan_get_baidu_top($huoduan['hotcachetime'],1508);
		 for($i=0;$i<30;$i++){
			 if(strlen($topkey[$i])>0){
			echo ' <li><span class="num'.$numclass.'"></span><a target="_blank" href="'.huoduansourl($topkey[$i]).'">'.$topkey[$i].'</a></li>'; 	} 
		 }
	 ?></ul>
       </article></li>
      <li class="layout_li">
       <article class="topic_main">
	   <section class="topic_post">
	   <a target="_blank" href="#" rel="bookmark" class="thumbs" title="穿越架空">
          <mip-img layout="container" src="http://db577.cn/style/images/s6.jpg"></mip-img></a>
		  <h2><strong>最新穿越架空</strong></h2>
         <div class="excerpt">
        中青创头条穿越架空频道，脑洞大开的故事情节，加上更加自由的写作宽度，许多作者也喜欢选架空作为题材。
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
	     $topkey = huoduan_get_baidu_top($huoduan['hotcachetime'],1509);
		 for($i=0;$i<30;$i++){
			 if(strlen($topkey[$i])>0){
			echo ' <li><span class="num'.$numclass.'"></span><a target="_blank" href="'.huoduansourl($topkey[$i]).'">'.$topkey[$i].'</a></li>'; 	} 
		 }
	 ?></ul>
       </article></li>
      <li class="layout_li">
       <article class="topic_main">
	   <section class="topic_post">
	   <a target="_blank" href="#" rel="bookmark" class="thumbs" title="惊悚悬疑">
          <mip-img layout="container" src="http://db577.cn/style/images/s7.jpg"></mip-img></a>
		  <h2><strong>最新惊悚悬疑</strong></h2>
         <div class="excerpt">
        中青创头条惊悚悬疑频道，读一本好看的恐怖惊悚小说，就像是在看一部经典的恐怖片一样，让人回味无穷。
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
	     $topkey = huoduan_get_baidu_top($huoduan['hotcachetime'],356);
		 for($i=0;$i<30;$i++){
			 if(strlen($topkey[$i])>0){
			echo ' <li><span class="num'.$numclass.'"></span><a target="_blank" href="'.huoduansourl($topkey[$i]).'">'.$topkey[$i].'</a></li>'; 	} 
		 }
	 ?></ul>
       </article></li>
      <li class="layout_li">
       <article class="topic_main">
	   <section class="topic_post">
	   <a target="_blank" href="#" rel="bookmark" class="thumbs" title="历史军事">
          <mip-img layout="container" src="http://db577.cn/style/images/s8.jpg"></mip-img></a>
		  <h2><strong>最新历史军事</strong></h2>
         <div class="excerpt">
        中青创头条历史军事频道，历史迷又是军事迷的朋友们，你们一定会喜欢历史军事小说。
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
	     $topkey = huoduan_get_baidu_top($huoduan['hotcachetime'],459);
		 for($i=0;$i<30;$i++){
			 if(strlen($topkey[$i])>0){
			echo ' <li><span class="num'.$numclass.'"></span><a target="_blank" href="'.huoduansourl($topkey[$i]).'">'.$topkey[$i].'</a></li>'; 	} 
		 }
	 ?></ul>
       </article></li>
	         <li class="layout_li">
       <article class="topic_main">
	   <section class="topic_post">
	   <a target="_blank" href="#" rel="bookmark" class="thumbs" title="游戏竞技">
          <mip-img layout="container" src="http://db577.cn/style/images/s9.jpg"></mip-img></a>
		  <h2><strong>最新游戏竞技</strong></h2>
         <div class="excerpt">
        中青创头条游戏竞技频道，游戏竞技小说,带你走进男女主的竞技世界，每天更新游戏竞技小说排行榜。
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
	     $topkey = huoduan_get_baidu_top($huoduan['hotcachetime'],1512);
		 for($i=0;$i<30;$i++){
			 if(strlen($topkey[$i])>0){
			echo ' <li><span class="num'.$numclass.'"></span><a target="_blank" href="'.huoduansourl($topkey[$i]).'">'.$topkey[$i].'</a></li>'; 	} 
		 }
	 ?></ul>
       </article></li>
	         <li class="layout_li">
       <article class="topic_main">
	   <section class="topic_post">
	   <a target="_blank" href="#" rel="bookmark" class="thumbs" title="耽美同人">
          <mip-img layout="container" src="http://db577.cn/style/images/s10.jpg"></mip-img></a>
		  <h2><strong>最新耽美同人</strong></h2>
         <div class="excerpt">
        中青创头条耽美同人频道，最初指无法到达的终点，随着小说的发展，比如说耽美这一词代表小说分类。
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
	     $topkey = huoduan_get_baidu_top($huoduan['hotcachetime'],1510);
		 for($i=0;$i<30;$i++){
			 if(strlen($topkey[$i])>0){
			echo ' <li><span class="num'.$numclass.'"></span><a target="_blank" href="'.huoduansourl($topkey[$i]).'">'.$topkey[$i].'</a></li>'; 	} 
		 }
	 ?></ul>
       </article></li>
	         <li class="layout_li">
       <article class="topic_main">
	   <section class="topic_post">
	   <a target="_blank" href="#" rel="bookmark" class="thumbs" title="文学经典">
          <mip-img layout="container" src="http://db577.cn/style/images/s11.jpg"></mip-img></a>
		  <h2><strong>最新文学经典</strong></h2>
         <div class="excerpt">
        中青创头条文学经典频道，经典文学作品指最能代表这一个时代的文学作品，经典不会突然消失。
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
	     $topkey = huoduan_get_baidu_top($huoduan['hotcachetime'],1513);
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