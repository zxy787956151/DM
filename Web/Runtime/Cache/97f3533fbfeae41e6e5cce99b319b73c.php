<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo ($config["sitetitle"]); ?>|<?php echo ($config["sitetitle2"]); ?></title>
</head>
<body >
<link rel="stylesheet" href="__TMPL__/jmobile/jquery.mobile-1.3.0.min.css" />
<script src="__TMPL__/jmobile/jquery.min.js"></script>
<script src="__TMPL__/jmobile/jquery.mobile-1.3.0.min.js"></script>
<script src="__TMPL__/jmobile/jquery.nicescroll.js"></script>
<style>
.ui-body-c{
background: none; 
}
</style>
<script>
$(document).bind("mobileinit", function() {
			// disable ajax nav
			$.mobile.ajaxEnabled=false
		});
  $(document).ready(function() {
    $("html").niceScroll({  cursorwidth:4 });  // The document page (html)
  });
</script>
<?php $icon = array('','contact.png','news.png','events.png','athletics.png','maps.png','jinrong.png'); ?>
<!-- Home -->
<div data-role="page" class="home" style="background: transparent url(__TMPL__/images/01.png);">
<div data-role="content">	
<div data-role="panel" id="rightpanel1" data-position="right" data-display="overlay" data-theme="b"> 
<p><ul>
<?php if(($_SESSION['dami_uid']) == ""): ?><li><a href="<?php echo U('Member/login');?>" data-role="button" data-icon="user" id="userlogin">用户登陆</a></li>
<li><a href="<?php echo U('Member/gobuy',array('iscart'=>'1'));?>" data-role="button" data-icon="grid" data-ajax="false">我的购物车</a></li>
<li><a href="tel:15982072714" data-role="button" data-icon="star">致电我们</a></li>
<li><a href="sms:15982072714?body=哇，再不用大米CMS，您就错过移动APP时代了！http://www.damicms.com" data-role="button" data-icon="info">短信分享</a></li>
<?php else: ?>
<?php $m=new Model("dami_member_menu",NULL);$ret=$m->Distinct()->field("")->where("is_show=1")->group("")->order("drand asc")->limit("")->select();if(is_array($ret)):$k = 0;foreach($ret as $key=>$vo):++$k; if(($k) == "4"): ?><li><a href="<?php echo U('Member/gobuy',array('iscart'=>1));?>" data-role="button" data-icon="grid" data-ajax="false">我的购物车</a></li><?php endif; ?>
<li><a href="__ROOT__<?php echo ($vo["url"]); ?>" data-role="button"><?php echo ($vo["name"]); ?></a></li><?php endforeach;endif; ?>

<li><a href="<?php echo U('Member/dologout');?>" data-role="button" data-ajax="false">注销登陆</a></li><?php endif; ?>
<li><a href="#demo-links" data-rel="close" data-role="button" data-icon="delete">关闭菜单</a></li>
</ul></p>       
</div><!-- /rightpanel1 -->


<div style="color:#fff; font-size:38px; font-weight:bold;color:#03220C"><a href="#rightpanel1" data-ajax="false" style="float:right;margin-right:10px;"  class="ui-btn ui-shadow ui-corner-all ui-icon-grid ui-btn-icon-notext ui-btn-right"></a><?php echo ($usercode); ?>的微博</div>
		<ul data-role="listview"  data-inset="true" >
       <!-- 特殊处理下单页关于我们-->
        <!-- <li><a href="<?php echo url(lists,14);?>"><img src="__TMPL__/images/icon/contact.png" alt="News" class="ui-li-icon">关于我们</a></li> -->
		<?php if(is_array($menu)): $k = 0; $__LIST__ = array_slice($menu,1,7,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><li><a href="<?php if(($vo["url"]) == ""): echo (url(lists,$vo["typeid"])); else: ?>__ROOT__<?php echo ($vo["url"]); endif; ?>" rel="external" data-transition="slidedown" <?php if(($vo["typeid"]) == "26"): ?>data-ajax="false"<?php endif; ?>>
			<?php if(($icon[$k+1]) != ""): ?><img src="__TMPL__/images/icon/<?php echo ($icon[$k+1]); ?>" alt="News" class="ui-li-icon"><?php endif; echo ($vo["typename"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
			<!-- <li><a href="#links" data-transition="slidedown"><img src="__TMPL__/images/icon/links.png" alt="Links" class="ui-li-icon">友情链接</a></li>	 -->	
           			
		</ul>
</div><!-- end content -->
</div>
</div><!-- end page -->
<div data-role="page" id="links">
	<div data-role="header"> 
		<h1>友情链接</h1>
		<a href="./" data-icon="home" data-iconpos="left" data-direction="reverse" class="ui-btn-right" data-ajax="false">主页</a>
	</div><!-- /header -->
	<div >	
		<ul data-role="listview" data-inset="true">
		<?php $m=new Model("dami_link",NULL);$ret=$m->Distinct()->field("")->where("status=1")->group("")->order("rank asc")->limit("")->select();if(is_array($ret)):$i = 0;foreach($ret as $key=>$vo):++$i;?><li><a href='<?php echo ($vo["url"]); ?>'><?php echo ($vo["title"]); ?></a></li><?php endforeach;endif; ?>
		</ul>
	</div><!-- /content -->
</div>
</body>
</html>