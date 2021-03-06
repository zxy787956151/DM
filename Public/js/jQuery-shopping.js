(function($){
	$.extend($.fn,{
		shoping:function(options){
			var self=this,
				$shop=$('.J-shoping'),
				$title=$('.J-shoping-title'),
				$body=$('.J-shoping-body'),
				$num=$('.J-shoping-num'),
				$close=$('.J-shoping-close');				
			var S={
				init:function(){
					$title.bind('click',this.clickOnTitle);
					$close.live('click',this.removeList);
					$(self).data('click',true).live('click',this.addShoping);
					$(document).bind('click',S.slideBoxMini);
					$body.bind('click',this.clickOnBody);
					
				},
				clickOnBody:function(e){
					if(!$(e.target).hasClass('J-shoping-close')){
						e.stopPropagation(); //阻止冒泡	
					};
				},
				addShoping:function(e){
					e.stopPropagation();
					var $target=$(e.target),
						id=$target.attr('id'),
						dis=$target.data('click'),
					    x = $target.offset().left + 30,
						y = $target.offset().top + 10,
						X = $shop.offset().left+$shop.width()/2-$target.width()/2+10,
						Y = $shop.offset().top;
					if(dis){
						if ($('#floatOrder').length <= 0) {							
							$('body').append('<div id="floatOrder"><img src="' + $('#product_pic').attr('src') + '" width="50" height="50" /></div');
						};
						var $obj=$('#floatOrder');
						if(!$obj.is(':animated')){
							$obj.css({'left': x,'top': y}).animate({'left': X,'top': Y-80},500,function() {
								$obj.stop(false, false).animate({'top': Y-20,'opacity':0},500,function(){
									$obj.fadeOut(300,function(){
										$obj.remove();	
										$target.data('click',false).addClass('dis-click');
var l=$('.J-shoping-list').length;		
num=Number($num.text());
//追加的内容
var id = $('#gid').val();
var gtype= $('#servial').val();
var is_add =true;
$('.J-shoping-list').each(function() {			   
if(id == $(this).attr("data-id") && gtype == $(this).attr("data-type")){alert('购物车中已有该物品，请删除才能再加入购物车');is_add=false;};
});
var name=$('#gname').val();
var qty= $('#gnum').val();
var price= $('#gprice').val();
var pic = $('#product_pic').attr('src');
if(is_add){
											$.post(url_root + "/index.php?m=Public&a=ajax_insert_cart",{id:id,name:name,qty:qty,price:price,gtype:gtype,pic:pic},function(result){ });
											
											$body.prepend('<div class="J-shoping-list" data-id="'+id+'" data-type="' + gtype + '"><a href="#"title=""><img src="' + pic + '" width="50"height="50"/></a><div class="J-shoping-list-a"><p>'+ name + '【' + qty + '件】</p><p><span class="shop_left">' + gtype + '</span><span class="shop_right"><em>' + price + '</em>元</span></p></div><div class="baseBg J-shoping-close"></div></div>');
										    $num.text(num+1);
}
									});
								});
							});	
						};
					};
				},
				clickOnTitle:function(e){
					e.stopPropagation();
					var length=$('.J-shoping-list').length;	
					if(length>0){
						if(!$shop.hasClass('J-shoping-small')){
							$body.slideToggle();	
						}else{
							$('.J-shoping-mx').hide();
							$('.J-shoping-px').show();
							$shop.animate({'width':289},100,function(){
								$shop.removeClass('J-shoping-small');
								$body.slideDown();
							});
						};
					};
				},
				slideBoxMini:function(){
					$('.J-shoping-px,.J-shoping-body').hide();
					$('.J-shoping-mx').show();
					$shop.animate({'width':119},100,function(){
						$shop.addClass('J-shoping-small');
					});	
				},
				removeList:function(e){
					e.stopPropagation();
					var $target=$(e.target),
						$parent=$target.parents('.J-shoping-list'),
						id=$parent.attr('data-bid');
//alert(url_root+ ' ' + id);
$.post(url_root + "/index.php?m=Public&a=ajax_del_cart",{id:id},function(result){});
						
					$parent.addClass('J-shoping-list-remove').fadeOut(300,function(){
						$('#'+id).data('click',true).removeClass('dis-click');
						$parent.remove();
						S.hideBody();
						if(options&&options.callback){
							options.callback($(self));	
						};	
					});	
				},
				hideBody:function(){
					var length=$('.J-shoping-list').length;	
					$num.text(length);
					if(length==0){
						$('.J-shoping-px,.J-shoping-body').hide();
						$('.J-shoping-mx').show();
						$shop.animate({'width':119},100,function(){
							$shop.addClass('J-shoping-small');
						});	
					};
				}
			};
			S.init(); 
		}
	});	
})(jQuery);