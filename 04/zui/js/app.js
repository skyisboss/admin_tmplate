//页面收起
$('.full-btn').on('click',function(){
	console.log($(this).hasClass('open'));
	if (true === $(this).hasClass('open')) {
		//还原
		$('body').removeClass('full-page');
	}else{
		//缩小
		$('body').addClass('full-page');
	}

})


