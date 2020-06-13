<?php

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>云看看-聚合精选热点文章-唯美文字阅读-爱上阅读就上云看看</title>
<meta name="keywords" content="最新热点资讯,时事热点事件,心灵鸡汤美文,说说语录大全,微小说,大聚合阅读" />
<meta name="description" content="云看看专注于聚合分享精选的优质热点文章阅读，品读文字，品味沧桑，爱上阅读，爱上云看看，欢迎阅读分享！" />
<link rel="stylesheet" href="/images/style1.css" />
</head>
<body>
<header>
<div class="clear"></div>
<div class="logo">
<a href="/"><img src="/images/logo.jpg" width="100" alt="云看看" /></a>
<h2><a href="/">云看看--爱上阅读就上云看看</a></h2></div>
</header>
<div class="search">
<form action="/plus/search.php" method="get" target="_blank">
<p><input type="text" name="q" id="s" class="search-input" placeholder="输入您要搜索的内容"></p>
<input type="submit" class="sub" value="搜索">
</form></div>
<?php
if($huoduan['close_hotlist']!=1){ 
?>
<div class="wrap index">
<div class="list">
<div class="title">
<b>热门搜索</b></div>
<div class="tag-clouds">
     <?php 
	     $topkey = huoduan_get_baidu_top($huoduan['hotcachetime'],1);
		 for($i=0;$i<48;$i++){

			 if(strlen($topkey[$i])>0){
			echo '<strong><span class="num'.$numclass.'"></span><a target="_blank" href="'.huoduansourl($topkey[$i]).'">'.$topkey[$i].'</a></strong>'; 	} 
		 }
	 ?>
</div></div></div>
<?php
}
?>
<footer>
<a href="http://www.beian.miit.gov.cn" rel="nofollow" target="_blank">鄂ICP备18019355号</a> | <a href='http://www.yunkankan.cn/sitemap/' target='_blank'>XML</a>
</footer>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?4c8e67ec224ee2107ce1945d39ccb678";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
</body>
</html>
