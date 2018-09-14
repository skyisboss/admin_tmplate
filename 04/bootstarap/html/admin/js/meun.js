

$('[data-toggle="active"]').click(function(){
	$('.header').nextAll().removeClass('active');
	$(this).addClass('active');
	$('#content_page').load($(this).children("a").attr('data-page')+'.html');
})

function add_user(){	
	show_d(); 
}

$('.ajax-get').click(function(){
	show_d(); 
})

function del(){
	layui.use('layer', function(){
		layer.confirm('确定删除该用户吗', {
		  title: '提示',
		  btn: ['确定','取消'] //按钮
		}, function(){
		  layer.msg('的确很重要', {icon: 1});
		});
	})
}


