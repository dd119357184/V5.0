<?php
$q=$_GET['q']?urlencode($_GET['q']):'';
$url_str="http://www.yunkankan.cn/$q.html";
header("Location: $url_str");