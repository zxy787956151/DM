<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>404 - 抱歉，找不到页面</title>

<style>
html,body
{
	width:100%;
	height:100%;
	margin:0;
	padding:0;
}
.text
{
	line-height:28px;
	font-family: microsoft yahei,microsoft jhenghei,verdana,tahoma;
	font-size:14px;
	color:#62261c;
	float:right;
	padding-top:10px;
	margin-right:150px;
}
.text a,.text a:link
{
	color:#66261c;
	text-decoration:underline;
	font-weight:bold;
}
.text a:hover
{
	text-decoration:none;
}
img {
	border: none;
	margin: 0;
	padding:0;
	display: block;
}
</style>
</head>
<body>
	<div style="width:100%; height:100%;">
		<div style="width:560px; height:240px; padding-top:180px; line-height:240px;  margin:0 auto;">
			<img src="http://www.damicms.com/404/nu.gif" style="display:block; float:left; margin:20px 0px; 10px 50px">
		    <div style="padding-top:20px;">
		        <img src="http://www.damicms.com/404/err_404.gif">
		        <div class="text">莫有办法,找不到这个页面<br>回到 <a href="__ROOT__/"><?php echo ($config["sitetitle"]); ?>首页</a></div>
		    </div>
		</div>
	</div>

</body></html>