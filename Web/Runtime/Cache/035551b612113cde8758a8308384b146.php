<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo ($config["sitetitle"]); ?>|<?php echo ($config["sitetitle2"]); ?></title>
<link rel="stylesheet" href="__TMPL__/jmobile/jquery.mobile-1.3.0.min.css" />
<script src="__TMPL__/jmobile/jquery.min.js"></script>
<script src="__TMPL__/jmobile/jquery.mobile-1.3.0.min.js"></script>
<script src="__TMPL__/jmobile/jquery.nicescroll.js"></script>
<script src="__TMPL__/jmobile/ajaxly.js"></script>
<style>
#MultiPage a{
text-decoration:none;
display:block; float:left;
padding:0px 5px 0px 5px;
/*border:1px solid #ccc;*/
color:#000000;
margin-left:2px;
margin-right:2px;
}
</style>
<script>
  $(document).ready(function() {
    $("html").niceScroll({  cursorwidth:4 });  // The document page (html)
	showre(1);
  });
   $(document).on("pageinit", function() {      

});
</script>
</head>
<body>
<!-- Home -->
<div data-role="page" >
<div data-role="header"><a href="#"  data-transition="slidefade" class="ui-btn-right ui-btn ui-shadow ui-corner-all ui-icon-back ui-btn-icon-notext" data-theme="a" data-rel="back"></a><h1>博文</h1>
<a href="__ROOT__/"  data-direction="reverse" class="ui-btn-left ui-btn ui-shadow ui-corner-all ui-icon-home ui-btn-icon-notext" data-ajax="false"></a></div>
<div data-role="content">
<div style=" margin-top:-15px;margin-bottom:20px;"><a href="#links" data-role="button" data-theme="b" >发微博</a></div>
<ul data-role="listview" data-theme="d" data-divider-theme="d" id="list">
</ul>
<div id="MultiPage"></div><!--留言分页 -->
<div id="pinglunother">
<div id="pinglunym"></div><!--留言分页信息 -->
</div>

		
</div><!-- end content -->
</div><!-- end page -->
<div data-role="page" id="links">
	<div data-role="header"> 
	<a href="#"  data-transition="slidefade" class="ui-btn-right ui-btn ui-shadow ui-corner-all ui-icon-back ui-btn-icon-notext" data-theme="a" data-rel="back"></a>
		<h1>发表留言</h1>
		<a href="__ROOT__/"  data-direction="reverse" class="ui-btn-left ui-btn ui-shadow ui-corner-all ui-icon-home ui-btn-icon-notext" data-ajax="false"></a>
	</div><!-- /header -->
	<div data-role="content">	
<form name="form1" method="post" action="" autocomplete="off">
<input type="text" name="title" id="title" placeholder="请输入您的标题" /><textarea name="content" id="plContent" placeholder="请输入留言内容"></textarea><input data-role="button" type="button" value="提交留言" data-theme="b" onClick="AddNew()"/>
</form>
	</div><!-- /content -->
</div>
</body>
</html>