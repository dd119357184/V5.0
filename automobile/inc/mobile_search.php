<?php
if(isset($_GET['more'])){
	include(ROOT_PATH.'/inc/more.php');exit;
}
$pcurl = huoduansourl($q,$p,PCDOMAIN);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>最新关于<?php echo $q?>的相关聚合文章-云看看阅读网-你会爱上它</title>
<meta name="keywords" content="<?php echo $q?>" />
<meta name="description" content="爱上阅读就上云看看，小云云今天给大家整理更新了一篇关于<?php echo $q?>的优质聚合文章阅读列表，精彩纷呈不容错过，品读文字领悟人生，欢迎阅读分享！" />
<link rel="stylesheet" href="/images/style.css" />
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
<div class="wrap index">
<div class="list">
<div class="title">
<h1>最新关于<?php echo $q?>的相关聚合文章</h1></div>
<p style="font-size:20px"><strong><small>时间：</small><?php echo date("Y-m-d H:i",time()); ?> <small>来源：</small>云看看 <small>作者：</small>小云</strong></p>
<strong><p style="word-break:break-all;">　　爱上阅读就上云看看，小云今天给大家整理更新了一篇关于<?php echo $q?>的优质聚合文章阅读列表，精彩纷呈，不容错过，欢迎阅读分享！</p></strong>
<div align="center"><img alt="<?php echo $q?>" src="/images/ykk.jpg" style="max-width:100%;"/></div>
<strong><p>　　最新关于<?php echo $q?>的简短描述：<?php echo $description?>更多详细内容，欢迎点击下方阅读，获取更多最新信息！</p></strong>
<?php
if($listcount>1&& $kill!=1){
  echo '<div id="result">';
  include(ROOT_PATH.'/inc/plus.php');
  for($i=0;$i<$listcount;$i++){
	$ii = $i;
	$ni = $i;
	if($listcount==10){
		$sort = explode(',',$huoduan['sort']);
		$ni = $sort[$i]-1;
	}
	$blink = $list['data'][$ni]['blink'];
	include(ROOT_PATH.'/inc/seturl.php');
	
	$gourl = qencode($list['data'][$ni]['link']);
		$gotitle = qencode(strip_tags($list['data'][$ni]['title']));
		$gokey = qencode($q);
	 if($huoduan['link_open']==0){
		 $sourl = $list['data'][$ni]['link'];
	 }else{
		 $sourl = SYSPATH.'?a=url&k='.substr(a($gourl.$gotitle.$gokey),0,8).'&u='.$gourl.'&t='.$gotitle.'&s='.$gokey;
	 }
	if(is_array($plusnum)){
	   foreach($plusnum as $k=>$v){
			if($pluscontent[$k]!='' && ($ii+1)==$v && ($plususer[$k]==3 || $plususer[$k]==1)){
				echo $pluscontent[$k];
			}
		}
	}
	$yurl = $list['data'][$ni]['blink'];
	  $kurl=0;
	   if(is_file(ROOT_PATH.'/data/huoduan.killurls.txt')){
		  $killurls = file_get_contents(ROOT_PATH.'/data/huoduan.killurls.txt');
		  if(strpos($killurls,"\r\n")>-1){
			$killurls = trim($killurls,"\r\n");
			$killurlslist = explode("\r\n",$killurls);
		  }else{
			   $killurls = trim($killurls,"\n");
			   $killurlslist = explode("\n",$killurls);
		  }
		 
		  foreach($killurlslist as $k=>$v){
		
			  if(substr($v,0,1)=='|'){
				  $v = ltrim($v,'|');
				  if(clear_url($yurl) == clear_url($v)){
					  $kurl=1;
					  break;
				  }
			  }else if(strlen($v)>2){
				  if(strpos(clear_url($yurl),clear_url($v))>-1 || clear_url($yurl) == clear_url($v)){
					  $kurl=1;
					  break;
				  }
			  }
		  }
	   }
	  if($kurl!=1 && strlen($list['data'][$ni]['title'])>0){
	?>
<ul><li><strong><?php if($huoduan['listnum']==1){?><?php echo $listnum[$ii]?><?php }?><h3><a href="<?php echo $sourl?>" target="_blank" rel="nofollow">点击阅读-<?php echo $list['data'][$ni]['title']?></a></h3></strong></li></ul>
    <?php	
	  }
  }
  echo '</div>';
}else{
	if($kill==1){
		echo '<div id="result"><div style="padding:30px 10px; text-align:center; color:#F00; font-size:16px;">该关键词已被屏蔽，请更换关键词搜索</div></div>';
	}else{
	    echo '<div id="result"><div style="padding:30px 10px; text-align:center; color:#F00; font-size:16px;">对不起，没有找到相关内容！请更换关键词搜索，或刷新本页重试。</div></div>';
	}
}
$nq = $q;
if($kill!=1){
?>
<?php }?>
<strong><p>　　<?php echo $list['data'][$ni]['des']?>-更多优质文章，欢迎使用站长搜索，查找您想看的内容。</p></strong>
<strong><p style="word-break:break-all;">　　转载请注明文章出处：http://www.yunkankan.cn/<?php echo $q?>.html</p></strong>
   <?php
    if($huoduan['xg_open']==1 && $kill!=1){
	   if(is_array($list['xgdata'])){
		   $xgdata = $list['xgdata'];
	   }else{
		  $xgdata = huoduan_get_haosou_xg($q,$huoduan['cachetime']); 
	   }
	   if(is_array($xgdata)){
		   echo '<strong>　　文章TAG标签</strong>';
		   foreach($xgdata as $v){
			   $v = trim($v);
			    if(strlen($v)<20){
			   echo '<strong><a href="'.huoduansourl($v).'">-'.$v.'</a></strong>';
				}
		   }
		   echo '';
	   }
   }
   ?>
</div>
</div>
<footer>
☆￣(＞。☆)爱上阅读(ง •_•)ง,云看看 | <a href='http://www.yunkankan.cn/sitemap/' target='_blank'>XML</a><br/><p style="word-break:break-all;">
<?php
$urls = array(
    'http://www.yunkankan.cn/<?php echo $q?>.html',
);
$api = 'http://data.zz.baidu.com/urls?appid=1635206661851224&token=lGrvHAtJyr4V0RZR&type=batch';
$ch = curl_init();
$options =  array(
    CURLOPT_URL => $api,
    CURLOPT_POST => true,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POSTFIELDS => implode("\n", $urls),
    CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
);
curl_setopt_array($ch, $options);
$result = curl_exec($ch);
echo $result;
	?><br/>
  <?php
$urls = array(
    'http://www.yunkankan.cn/<?php echo $q?>.html',
);
$api = 'http://data.zz.baidu.com/urls?site=www.yunkankan.cn&token=kZD3n6gqSTdf32IB';
$ch = curl_init();
$options =  array(
    CURLOPT_URL => $api,
    CURLOPT_POST => true,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POSTFIELDS => implode("\n", $urls),
    CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
);
curl_setopt_array($ch, $options);
$result = curl_exec($ch);
echo $result;
	?><br/>
	<?php
$urls = array(
    'http://www.yunkankan.cn/<?php echo $q?>.html',
);
$api = 'http://data.zz.baidu.com/urls?appid=1635206661851224&token=lGrvHAtJyr4V0RZR&type=realtime';
$ch = curl_init();
$options =  array(
    CURLOPT_URL => $api,
    CURLOPT_POST => true,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POSTFIELDS => implode("\n", $urls),
    CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
);
curl_setopt_array($ch, $options);
$result = curl_exec($ch);
echo $result;
	?></p>
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