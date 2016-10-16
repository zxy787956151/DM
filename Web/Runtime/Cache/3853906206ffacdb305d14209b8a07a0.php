<?php if (!defined('THINK_PATH')) exit(); echo '<?'; ?>
xml version="1.0" encoding="utf-8"?>
<data page="<?php echo ($nowpage); ?>" P_Nums="<?php echo ($pages); ?>" A_Nums="<?php echo ($allnum); ?>" D_Nums="<?php echo ($lastnum); ?>">
<?php if(is_array($list)): $k = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><NoI><?php echo ($vo["num"]); ?></NoI> 
<Title><![CDATA[<?php echo ($vo["title"]); ?>]]></Title>
<Author PostTime="<?php echo ($vo["addtime"]); ?>"><![CDATA[<?php echo ($vo["author"]); ?>]]></Author>
<Content><![CDATA[<?php echo ($vo["content"]); ?>]]></Content>
<reContent><![CDATA[<?php echo ($vo["recontent"]); ?>]]></reContent><?php endforeach; endif; else: echo "" ;endif; ?>
</data>