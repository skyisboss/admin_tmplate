$(function(){
	//文字提醒
	$('[data-toggle="tooltip"]').tooltip()
	// 点击全屏
	$('.btn-to-full').on('click',function(){
		if ($('#app').hasClass('full')) {
			$('#app').removeClass('full');
			//$('.header-menu-ul').addClass('open')
		}else{
			$('#app').addClass('animated bouncelnRight full')
			$('.header-menu-ul').removeClass('open').find('li.open').removeClass('open').find('span.open').removeClass('open')
		}
	})
    var viewFullScreen = document.getElementById("view-fullscreen");
    if (viewFullScreen) {
        viewFullScreen.addEventListener("click", function () {
            var docElm = document.documentElement;
            if (docElm.requestFullscreen) {
                docElm.requestFullscreen();
            }
            else if (docElm.msRequestFullscreen) {
                docElm = document.body; //overwrite the element (for IE)
                docElm.msRequestFullscreen();
            }
            else if (docElm.mozRequestFullScreen) {
                docElm.mozRequestFullScreen();
            }
            else if (docElm.webkitRequestFullScreen) {
                docElm.webkitRequestFullScreen();
            }
        }, false);
    }
    var cancelFullScreen = document.getElementById("cancel-fullscreen");
   if (cancelFullScreen) {
       cancelFullScreen.addEventListener("click", function () {
           if (document.exitFullscreen) {
               document.exitFullscreen();
           }
           else if (document.msExitFullscreen) {
               document.msExitFullscreen();
           }
           else if (document.mozCancelFullScreen) {
               document.mozCancelFullScreen();
           }
           else if (document.webkitCancelFullScreen) {
               document.webkitCancelFullScreen();
           }
       }, false);
   }
   //点击菜单
   $('.header-menu-ul>li>a').on('click',function(){
   	if ( $(this).parent('li').hasClass('open') ) {
   		$('.header-menu-ul').removeClass('open')
   		$(this).parent('li').removeClass('open')
   		$(this).find('.arrow').removeClass('open')
   	}else{
   		$('.open').removeClass('open')
   		$('.header-menu-ul').addClass('open');
   		$(this).parent('li').addClass('open')
   		$(this).find('.arrow').addClass('open')
   	}
   })
   $('.sub li a').on('click',function(){
   	if ( $(this).parent('li').hasClass('open') ) {
   		$(this).parent('li').removeClass('open');
   		$(this).find('.arrow').removeClass('open')
   	}else{
   		$(this).parent('li').addClass('open')
   		$(this).find('.arrow').addClass('open')
   	}
   })

   // 下拉框
  $('#template').selectpicker();
  $('#language').selectpicker();
  //$('select').selectpicker();
$("#UserInfo").on("hidden.bs.modal", function() {  
    $(this).removeData("bs.modal");  
});  
     

})
