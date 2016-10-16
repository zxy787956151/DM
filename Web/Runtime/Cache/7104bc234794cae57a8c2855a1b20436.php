<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo ($config["sitetitle"]); ?>|<?php echo ($config["sitetitle2"]); ?></title>
<link rel="stylesheet" href="__TMPL__/jmobile/jquery.mobile-1.3.0.min.css" />
<script src="__TMPL__/jmobile/jquery.min.js"></script>
<script src="__TMPL__/jmobile/jquery.mobile-1.3.0.min.js"></script>
<script src="__TMPL__/jmobile/jquery.nicescroll.js"></script>
<!-- <script src="__TMPL__/jmobile/ajaxly.js"></script> -->
</head>
<body>
	<div data-role="header"> 
	<a href="#"  data-transition="slidefade" class="ui-btn-right ui-btn ui-shadow ui-corner-all ui-icon-back ui-btn-icon-notext" data-theme="a" data-rel="back"></a>
		<h1>修改留言</h1>
		<a href="__ROOT__/"  data-direction="reverse" class="ui-btn-left ui-btn ui-shadow ui-corner-all ui-icon-home ui-btn-icon-notext" data-ajax="false"></a>
	</div><!-- /header -->
	<div data-role="content">	
<form method="post" action="<?php echo U('Guestbook/run_com',array('id'=>$_GET['id']));?>" data-ajax="false">
	<input type="text" name="title" id="b" placeholder="请输入您的标题" />
	<textarea name="content" id="plContent" placeholder="请输入留言内容"></textarea>
	<input type="submit" value="修改留言" data-theme="b" data-ajax="false"/>
</form>
	</div><!-- /content -->
</body>
</html>