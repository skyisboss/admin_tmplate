<?php include_once 'header.php';?>

	<div class="main">
		<div class="page-title">
			<i class="glyphicon glyphicon-tint"></i>
			<h3>用户 - <b>用户列表</b></h3>
		</div>
		<div class="boxs">
			<div class="show_msg"></div>
			<div class="panel">
			  <div class="panel-heading"><h4>搜索</h4></div>
			  <div class="panel-body">
			  		<!-- 搜索框 -->
			  		<form class="form-horizontal">
			  			<div class="col-md-4">
			  				<div class="form-group">
			  				    <div class="col-sm-12">
			  				      <input type="text" class="form-control" id="inputEmail3" placeholder="用户名 / 账号">
			  				    </div>
			  				</div>
			  			</div>
			  			<div class="col-md-4">
			  				<div class="form-group">
			  				    <div class="col-sm-12">
			  				      <input type="text" class="form-control" id="inputEmail3" placeholder="Email / 邮箱">
			  				    </div>
			  				</div>
			  			</div>
			  			<div class="col-md-4">
			  				<div class="form-group">
			  				    <div class="col-sm-12">
			  				    	<select class="form-control">
					    	      	    <option>会员等级</option>
					    	      	    <option>普通会员</option>
					    	      	    <option>付费会员</option>
					    	      	 </select>
			  				    </div>
			  				</div>
			  			</div>
			  			<div class="col-md-4">
			  				<div class="form-group">
			  				    <div class="col-sm-12">
			  				    	<select class="form-control">
					    	      	    <option>性别</option>
					    	      	    <option>男</option>
					    	      	    <option>女</option>
					    	      	 </select>
			  				    </div>
			  				</div>
			  			</div>
			  			<div class="col-md-4">
			  				<div class="form-group">
			  				    <div class="col-sm-12">
			  				    	<select class="form-control">
					    	      	    <option>验证邮箱</option>
					    	      	    <option>已验证</option>
					    	      	    <option>未验证</option>
					    	      	 </select>
			  				    </div>
			  				</div>
			  			</div>
			  			<div class="col-md-4">
			  				<div class="form-group">
			  				    <div class="col-sm-12">
			  				    	<select class="form-control">
					    	      	    <option>用户状态</option>
					    	      	    <option>正常</option>
					    	      	    <option>禁用</option>
					    	      	 </select>
			  				    </div>
			  				</div>
			  			</div>
  			  			<div class="col-md-12">
  			  				<div class="form-group">
  			  					<!-- Single button -->
  			  				    <div class="col-sm-8">
									<div class="btn-group">
								      <button type="button" class="btn btn-dropdown dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ID排序 <span class="caret"></span></button>
								      <ul class="dropdown-menu">
								        <li><a href="#">Action</a></li>
								        <li><a href="#">Another action</a></li>
								        <li><a href="#">Something else here</a></li>
								        <li role="separator" class="divider"></li>
								        <li><a href="#">Separated link</a></li>
								      </ul>
								    </div>
								    <div class="btn-group">
								      <button type="button" class="btn btn-dropdown dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">降序 <span class="caret"></span></button>
								      <ul class="dropdown-menu">
								        <li><a href="#">Action</a></li>
								        <li><a href="#">Another action</a></li>
								        <li><a href="#">Something else here</a></li>
								        <li role="separator" class="divider"></li>
								        <li><a href="#">Separated link</a></li>
								      </ul>
								    </div>
								    <div class="btn-group">
								      <button type="button" class="btn btn-dropdown dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">100 <span class="caret"></span></button>
								      <ul class="dropdown-menu">
								        <li><a href="#">Action</a></li>
								        <li><a href="#">Another action</a></li>
								        <li><a href="#">Something else here</a></li>
								        <li role="separator" class="divider"></li>
								        <li><a href="#">Separated link</a></li>
								      </ul>
								    </div>
  			  				    </div>

  			  				    <div class="col-sm-4">
									<div class="pull-right"><button type="submit" name="search_users" class="btn btn-success btn-submit"><i class="fa fa-search"></i> 搜索</button></div>
  			  				    </div>
  			  				</div>
  			  			</div>
			  		</form>
			  		<div class="clear"></div><hr>

			  		<!-- 内容bar -->
			  		<div class="col-md-12">
						<div class="btn-action">
							<button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i> 删除</button>
							<button class="btn btn-warning" type="submit"><i class="fa fa-ban"></i> 禁用</button>
							<button class="btn btn-info" type="submit"><i class="fa fa-check-circle"></i> 启用</button>
						</div>
						<br>
			  		</div>
			  		<!-- 内容列表 -->
			  		<div class="col-md-12">
						<div class="content-list table-responsive123">
			  				<table class="table content-table">
			  					<thead>
								    <tr>
								    <th colspan="9">
								    	<label class="checkbox-inline">
								    	  <input type="checkbox" id="checkbox-all" value="option1"><span>选择全部</span>
								    	</label>
								    	<span class="total-all pull-right">总数：5000000</span>
								    </th>

								    </tr>
								 </thead>
		  				      <tbody>

		  				        <tr class="item-tr">
		  				          <td class="item-checkbox p-r-0">
		  				          		<input class="check-input" id="cb-select-all-1" type="checkbox">
		  				          </td>
		  				          <th class="item-thumb"  width="20">
										<div class="userpic" data-toggle="modal" data-remote="data/userinfo.html" data-target="#UserInfo">
											<a href="#"><img src="http://127.0.0.21/user_avatar/nopic-m.gif"></a>
											<!-- <div class="userflag"><img src="http://www.avs.com/templates/backend/default/assets/img/flags/China.png"></div> -->
											<div class="userid"><span>ID </span>3</div>
										</div>
		  				          </th>
		  				          <td class="item-username">
		  				          		<div class="username text-info">
		  				          			<a href="#" data-toggle="modal" data-remote="data/userinfo.html" data-target="#UserInfo">pkmp4</a>
		  				          		</div>
		  				          		<div class="ftips">状态</div>
		  				          		<div class="userstatus text-green">正常</div>
		  				          		<div class="usergroup">
		  				          			<span class="label label-info">付费剩余 22天 (2017/10/10 - 2017/10/10 )</span>
		  				          		</div>
		  				          </td>
		  				          <td class="item-regtime">
		  				          		<div class="ftips">注册时间</div>
		  				          		<div class="regtime">2017-10-31 21:02:50</div>
		  				          </td>
		  				          <td class="item-logintime">
		  				          		<div class="ftips">最后登录时间</div>
		  				          		<div class="logintime">2017-10-31 21:02:50</div>
		  				          </td>
		  				          <td class="item-loginip">
		  				          		<div class="ftips">最后登录地址</div>
		  				          		<div class="logintime">119.137.3.174 <span class="ftips">广东省 深圳市 电信</span></div>
      		  				          <div class="item-action">
      		  				          		<div class="action-group">
      		  				          			<div class="btn-group dropup">
      											      <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-trash-o"></i>删除
      											      </button>
      											      <ul class="dropdown-menu do-action">
      											        <li><a href="#">确认删除</a></li>
      											      </ul>
      											</div>
      											<div class="btn-group dropup">
      											      <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ban"></i>禁用
      											      </button>
      											      <ul class="dropdown-menu do-action">
      											        <li><a href="#">确认禁用</a></li>
      											      </ul>
      											</div>
      		  				          			<button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-remote="data/useredit.html" data-target="#UserInfo"><i class="fa fa-pencil"></i>编辑</button>
      		  				          			<button type="button" class="btn btn-primary btn-xs"><i class="fa fa-picture-o"></i>头像</button>
      		  				          		</div>
      		  				          </div>
		  				          </td>
		  				          <td class="item-item">
			  				          	<div class="ftips"><i class="fa fa-comments"></i> 互动</div>
			  				          	<div class="comt">22</div>
		  				          </td>
		  				          <td class="item-item">
			  				          	<div class="ftips"><i class="fa fa-video-camera"></i> 视频</div>
			  				          	<div class="comt">22</div>
		  				          </td>
		  				          <td class="item-item">
		  				          		<div class="ftips"><i class="fa fa-eye"></i> 访客</div>
		  				          		<div class="comt">22</div>
		  				          </td>
		  				        </tr>
		  				        <tr class="item-tr">
		  				          <td class="item-checkbox p-r-0">
		  				          		<input class="check-input" id="cb-select-all-1" type="checkbox">
		  				          </td>
		  				          <th class="item-thumb"  width="20">
										<div class="userpic" data-toggle="modal" data-remote="data/userinfo.html" data-target="#UserInfo">
											<a href="#"><img src="http://127.0.0.21/user_avatar/nopic-m.gif"></a>
											<!-- <div class="userflag"><img src="http://www.avs.com/templates/backend/default/assets/img/flags/China.png"></div> -->
											<div class="userid"><span>ID </span>3</div>
										</div>
		  				          </th>
		  				          <td class="item-username">
		  				          		<div class="username text-info">
		  				          			<a href="#" data-toggle="modal" data-remote="data/userinfo.html" data-target="#UserInfo">pkmp4</a>
		  				          		</div>
		  				          		<div class="ftips">状态</div>
		  				          		<div class="userstatus text-green">正常</div>
		  				          		<div class="usergroup">
		  				          			<span class="label label-info">付费剩余 22天 (2017/10/10 - 2017/10/10 )</span>
		  				          		</div>
		  				          </td>
		  				          <td class="item-regtime">
		  				          		<div class="ftips">注册时间</div>
		  				          		<div class="regtime">2017-10-31 21:02:50</div>
		  				          </td>
		  				          <td class="item-logintime">
		  				          		<div class="ftips">最后登录时间</div>
		  				          		<div class="logintime">2017-10-31 21:02:50</div>
		  				          </td>
		  				          <td class="item-loginip">
		  				          		<div class="ftips">最后登录地址</div>
		  				          		<div class="logintime">119.137.3.174 <span class="ftips">广东省 深圳市 电信</span></div>
      		  				          <div class="item-action">
      		  				          		<div class="action-group">
      		  				          			<div class="btn-group dropup">
      											      <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-trash-o"></i>删除
      											      </button>
      											      <ul class="dropdown-menu do-action">
      											        <li><a href="#">确认删除</a></li>
      											      </ul>
      											</div>
      											<div class="btn-group dropup">
      											      <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ban"></i>禁用
      											      </button>
      											      <ul class="dropdown-menu do-action">
      											        <li><a href="#">确认禁用</a></li>
      											      </ul>
      											</div>
      		  				          			<button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-remote="data/useredit.html" data-target="#UserInfo"><i class="fa fa-pencil"></i>编辑</button>
      		  				          			<button type="button" class="btn btn-primary btn-xs"><i class="fa fa-picture-o"></i>头像</button>
      		  				          		</div>
      		  				          </div>
		  				          </td>
		  				          <td class="item-item">
			  				          	<div class="ftips"><i class="fa fa-comments"></i> 互动</div>
			  				          	<div class="comt">22</div>
		  				          </td>
		  				          <td class="item-item">
			  				          	<div class="ftips"><i class="fa fa-video-camera"></i> 视频</div>
			  				          	<div class="comt">22</div>
		  				          </td>
		  				          <td class="item-item">
		  				          		<div class="ftips"><i class="fa fa-eye"></i> 访客</div>
		  				          		<div class="comt">22</div>
		  				          </td>
		  				        </tr>
		  				      </tbody>
		  				    </table>
			  			</div>
			  		</div>

			  </div>
		</div>
	</div>


<script type="text/javascript">
window.onload = function(){
	$('.check-input').on('change',function(){
		if ($(this).is(":checked")) {
			$(this).parents('tr.item-tr').addClass('tr-bg');
		}else{
			$(this).parents('tr.item-tr').removeClass('tr-bg');
		}
	})
	$('#checkbox-all').on('change',function(){
		if ($(this).is(":checked")) {
			$(this).parents('table')
			.find('tbody>tr.item-tr')
			.addClass('tr-bg')
			.find('.check-input')
			.prop("checked",true);

		}else{
			$(this).parents('table')
			.find('tbody>tr.item-tr')
			.removeClass('tr-bg')
			.find('.check-input')
			.prop("checked",false);
		}
	})
}
</script>

<?php include_once 'footer.php';?>
<div id="UserInfo" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    </div>
  </div>
</div>