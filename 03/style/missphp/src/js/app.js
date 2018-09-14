// 左边栏 菜单展开手风琴效果
$('.sidebar-element>li').on('click',function(){
	var that = $(this),
		has_parent = that.hasClass('parent'),
		is_open = that.hasClass('open');
	if (has_parent) {
		that.find('.sub-menu').slideToggle(180,function(){
			if (is_open) {
				that.removeClass('open');
			}else{
				that.addClass('open');
			}
		})
	}
})

//自定义滚动条
if ($('.fixed-sidebar').length >0) {
	var ps = new PerfectScrollbar('.sidebar-scroll');
}
if ($('.boxed-layout').length >0) {
	$('body').css('height','100%');
}


// 右边栏 展开
$('.right-tool').on('click',function(){
	if ($('body').hasClass('show-right-sidebar')) {

		$('body').removeClass('show-right-sidebar');
	}else{

		$('body').addClass('missphp-animate show-right-sidebar');
	}
})