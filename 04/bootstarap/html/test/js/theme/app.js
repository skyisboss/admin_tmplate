//ajax加载头部导航
$('#nav-top').load('nav-top.html');

//显示隐藏 七牛
$('#file input[type="radio"]').click(function(){
	if ($(this).val()==0) {
		$('.qiniu').css('display','none');
	}else{
		$('.qiniu').css('display','black');
	}
})




// 表格全选
$('.check-on').click(function(){                           
    if (!$('.check-on').hasClass("checked")) {
        $('.check-on').addClass('checked');$('.table').find('input:checkbox').prop("checked", true);
    } else{
        $('.check-on').removeClass('checked');$('.table').find('input:checkbox').prop("checked", false);
    }
});



$('.dialog').click(function(){
	$('body').append(dialog_html());
	$('#myModal').modal('show');
	$('#myModal').on('hidden.bs.modal',function() {
		//关闭时删除自身
	    $("#myModal").remove();
	})
})

//弹出层html
function dialog_html(){
	var confirm_html = '<div id="myModal" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">'+
	  '<div class="modal-dialog modal-sm" role="document">'+
	    '<div class="modal-content">'+
	    	'<div class="modal-header">'+
		      '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>'+
				'<h4 class="modal-title" id="myModalLabel"><i class="fa fa-exclamation-circle"></i> 提示</h4>'+
		    '</div>'+
		    '<div class="modal-body">确定删除吗</div>'+
			'<div class="modal-footer">'+
				'<button type="button" class="btn btn-default" data-dismiss="modal">取消</button>'+
				'<button type="button" class="btn btn-primary">确定</button>'+
			'</div>'+
	    '</div>'+
	  '</div>'+
	'</div>';
	return confirm_html;

}

