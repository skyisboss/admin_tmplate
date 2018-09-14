function login() {
	var username = $('[name=username]').val();
	var password = $('[name=password]').val();
	var chack = $('[name=chack]').val();
	if (username=='' || password=='' || chack=='') {
		showmsg('请填写完整登录信息','danger');
		rerurn;
	}
	location.href="admin.html";

}
var show_msg='';
var show_type='';
function showmsg(show_msg,show_type){
	new $.zui.Messager(show_msg, {
        placement: 'top', // 定义显示位置
        type: show_type
    }).show();
}