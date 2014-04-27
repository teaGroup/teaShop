// JavaScript Document
/*新品Tab*/
(function($){
	$.fn.rTabs = function(options){
		
		var defaultVal = {
		btnClass:'.j-tab-nav',	
		conClass:'.j-tab-con',
		bind:'hover',	/* click,hover*/
		animation:'0',	/* left,up,fadein,0*/
		speed:300, 
		delay:200,	
		auto:true,	
		};
		
		var obj = $.extend(defaultVal, options),
		evt = obj.bind,
		btn = $(this).find(obj.btnClass),
		con = $(this).find(obj.conClass),
		anim = obj.animation,
		conWidth = con.width(),
		conHeight = con.height(),
		len = con.children().length,
		sw = len * conWidth,
		sh = len * conHeight,
		i = 0,
		len,t,timer;
		return this.each(function(){
		
		function judgeAnim(){
			var w = i * conWidth,
			h = i * conHeight;
		btn.children().removeClass('current').eq(i).addClass('current');
			switch(anim){
			case '0':
			con.children().hide().eq(i).show();
			break;
			case 'left':
			con.css({position:'absolute',width:sw}).children().css({float:'left',display:'block'}).end().stop().animate({left:-w},obj.speed);
			break;
			case 'up':
			con.css({position:'absolute',height:sh}).children().css({display:'block'}).end().stop().animate({top:-h},obj.speed);
			break;
			case 'fadein':
			con.children().hide().eq(i).fadeIn();
			break;
			}
		}
		
		if(evt == "hover"){
			btn.children().hover(function(){
				var j = $(this).index();
				function s(){
				i = j;
				judgeAnim();
				}
				timer=setTimeout(s,obj.delay);
				}, function(){
					clearTimeout(timer);
				})
			}else{
				btn.children().bind(evt,function(){
					i = $(this).index();
					judgeAnim();
				})
			}

		})
	}

$(function() {
	$("#tab").rTabs();
})

	$.fn.rTabs2 = function(options){
		
		var defaultVal = {
		btnClass:'.j2-tab-nav',	
		conClass:'.j2-tab-con',
		bind:'hover',	/* click,hover*/
		animation:'0',	/* left,up,fadein,0*/
		speed:300, 
		delay:200,	
		auto:true,	
		};
		
		var obj = $.extend(defaultVal, options),
		evt = obj.bind,
		btn = $(this).find(obj.btnClass),
		con = $(this).find(obj.conClass),
		anim = obj.animation,
		conWidth = con.width(),
		conHeight = con.height(),
		len = con.children().length,
		sw = len * conWidth,
		sh = len * conHeight,
		i = 0,
		len,t,timer;
		return this.each(function(){
		
		function judgeAnim(){
			var w = i * conWidth,
			h = i * conHeight;
		btn.children().removeClass('current').eq(i).addClass('current');
			switch(anim){
			case '0':
			con.children().hide().eq(i).show();
			break;
			case 'left':
			con.css({position:'absolute',width:sw}).children().css({float:'left',display:'block'}).end().stop().animate({left:-w},obj.speed);
			break;
			case 'up':
			con.css({position:'absolute',height:sh}).children().css({display:'block'}).end().stop().animate({top:-h},obj.speed);
			break;
			case 'fadein':
			con.children().hide().eq(i).fadeIn();
			break;
			}
		}
		
		if(evt == "hover"){
			btn.children().hover(function(){
				var j = $(this).index();
				function s(){
				i = j;
				judgeAnim();
				}
				timer=setTimeout(s,obj.delay);
				}, function(){
					clearTimeout(timer);
				})
			}else{
				btn.children().bind(evt,function(){
					i = $(this).index();
					judgeAnim();
				})
			}

		})
	}
})(jQuery);

$(function() {
	$("#tab2").rTabs2();
})
/*排行榜Tab*/
$(document).ready(function () {
   var target= $("#numtext > ul > li");
	target.mouseover(function(){
		$("#numtext li").removeClass("first");
		$("#numtext li img,#numtext li span").hide();
		$(this).addClass("first");
		$(this).find("img").show();
		$(this).find("span").show();
	});
	
	var target1= $(".leftmenu > ul > li:has('.submenu_show') > .menutext");
	target1.hover(function(){
		$(this).parent().find(".submenu_show").hide();
		$(this).parent().find(".menutext").removeClass("menutext_show");
		$(this).parent().find(".submenu_show").show();
		$(this).parent().find(".menutext").addClass("menutext_show");
	},function(){
		$(this).parent().find(".submenu_show").hide();
		$(this).parent().find(".menutext").removeClass("menutext_show");
	}
	); 
   });

/**********************幻灯片*********************************/
(function ($) {
$.fn.sGallery = function (o) {
    return  new $sG(this, o);
			//alert('do');
    };

	var settings = {
		thumbObj:null,//预览对象
		thumbNowClass:'now',//预览对象当前的class,默认为now
		slideTime:0,//平滑过渡时间
		autoChange:true,//是否自动切换
		changeTime:5000,//自动切换时间
		delayTime:100//鼠标经过时反应的延迟时间
	};

 $.sGalleryLong = function(e, o) {
    this.options = $.extend({}, settings, o || {});
	var _self = $(e);
	var set = this.options;
	var thumb;
	var size = _self.size();
	var nowIndex = 0; //定义全局指针
	var index;//定义全局指针
	var startRun;//预定义自动运行参数
	var delayRun;//预定义延迟运行参数

//初始化
	_self.eq(0).show();

//主切换函数
function fadeAB () {
	if (nowIndex != index) {
		if (set.thumbObj!=null) {
		$(set.thumbObj).removeClass().eq(index).addClass(set.thumbNowClass);}
		_self.eq(nowIndex).stop(false,true).fadeOut(set.slideTime);
		_self.eq(index).stop(true,true).fadeIn(set.slideTime);
		
		nowIndex = index;
		if (set.autoChange==true) {
		clearInterval(startRun);//重置自动切换函数
		startRun = setInterval(runNext,set.changeTime);}
		}
}

//切换到下一个
function runNext() {
	index =  (nowIndex+1)%size;
	fadeAB();
}

//点击任一图片
	if (set.thumbObj!=null) {
	thumb = $(set.thumbObj);
//初始化
	thumb.eq(0).addClass(set.thumbNowClass);
		thumb.bind("mousemove",function(event){
			index = thumb.index($(this));
			fadeAB();
			delayRun = setTimeout(fadeAB,set.delayTime);
			clearTimeout(delayRun);
			event.stopPropagation();
		})
	}

//自动运行
	if (set.autoChange==true) {
	startRun = setInterval(runNext,set.changeTime);
	}

}

var $sG = $.sGalleryLong;

})(jQuery);

function slide(Name,Class,Width,Height,fun){
	$(Name).width(Width);
	$(Name).height(Height);
	
	if(fun == true){
		$(Name).append('<div class="change"></div>')
		var atr = $(Name+' div.changeDiv a');
		var sum = atr.length;
		for(i=1;i<=sum;i++){
			$(Name+' .change').append('<i>'+i+'</i>');
		}
		$(Name+' .change i').eq(0).addClass('cur');
	}
	$(Name+' div.changeDiv a').sGallery({//对象指向层，层内包含图片及标题
		titleObj:Name+' div.a',
		thumbObj:Name+' .change i',
		thumbNowClass:Class
	});
	
}