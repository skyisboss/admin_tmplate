<?php include_once 'header.php';?>

	<div class="main">
		<div class="page-title">
			<i class="glyphicon glyphicon-tint"></i>
			<h3>分类 - <b>图片分类</b></h3>
		</div>
		<div class="boxs">
			<div class="panel">
			  <div class="panel-heading"><h4>图片分类</h4></div>
			  <div class="panel-body">
		    		<div class="row">
		    			<div class="col-md-12">
			    			<div class="col-md-12" style="background-color: #e5e9ec; padding: 15px;padding-bottom: 0;margin-bottom: 20px;">
				    			<form class="form-horizontal">
						    	    <div class="filter col-md-3">
						    	    	<div class="form-group">
						    	      <input type="email" class="form-control" id="inputEmail3" placeholder="分类名称">
							    	    </div>
						    	    </div>
						    	    <div class="filter col-md-3">
						    	    	<div class="form-group">
						    	      <input type="email" class="form-control" id="inputEmail3" placeholder="分类别名">
							    	    </div>
							    	</div>

							    	<div class="filter col-md-3">
						    	    	<div class="form-group">
						    	      		<select class="form-control">
							    	      	    <option>会员等级</option>
							    	      	    <option>普通会员</option>
							    	      	    <option>付费会员1</option>
							    	      	 </select>
							    	    </div>
							    	</div>
							    	<div class="filter col-md-3">
							    		<div class="form-group">
							    			<button type="submit" name="search_users" class="btn btn-success btn-cons btn-icon pull-right">增加</button>
										</div>
							    	</div>
							    </form>
			    			</div>

						    <form class="form-horizontal">
						    	<!-- Single button -->

						    	<div class="filter col-md-12">
						    		<div class="form-group pull-left">
						    	    	<div class="btn-group">
								    	  <button type="button" class="btn btn-dropdown dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								    	    ID排序 <span class="caret"></span>
								    	  </button>
								    	  <ul class="dropdown-menu">
								    	    <li><a href="#">Action</a></li>
								    	    <li><a href="#">Another action</a></li>
								    	    <li><a href="#">Something else here</a></li>
								    	    <li role="separator" class="divider"></li>
								    	    <li><a href="#">Separated link</a></li>
								    	  </ul>
								    	</div>
								    	<div class="btn-group">
								    	  <button type="button" class="btn btn-dropdown dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								    	    姜旭 <span class="caret"></span>
								    	  </button>
								    	  <ul class="dropdown-menu">
								    	    <li><a href="#">Action</a></li>
								    	    <li><a href="#">Another action</a></li>
								    	    <li><a href="#">Something else here</a></li>
								    	    <li role="separator" class="divider"></li>
								    	    <li><a href="#">Separated link</a></li>
								    	  </ul>
								    	</div>
							    	</div>
							    	<div class="pull-right">
							    		<button type="button" id="reset_search" name="reset_search" class="btn btn-white btn-cons btn-icon"><i class="fa fa-times"></i></button>
							    		<button type="submit" name="search_users" class="btn btn-success btn-cons btn-icon m-r-0"><i class="fa fa-search"></i></button>
							    	</div>
							    </div>
					    	</form>
		    			</div>
		    		</div>
		    		<hr>
		    		<div class="row">
						<div class="col-md-12">
							<div class="item-warp">
								<div id="item-3" class="item-main-container small-thumb">
								  <div class="item-col-left">
								    <div class="item-main">
								      <div class="item-select" unselectable="on" onselectstart="return false;" onmousedown="return false;">
								        <div class="checkbox check-default">
								          <input name="user_id_checkbox_3" id="user_checkbox_3" type="checkbox" class="select-multiple">
								          <label for="user_checkbox_3" style="margin: 0 0 15px 0 !important;"></label>
								        </div>
								      </div>
								      <div class="item-thumb">
								        <div class="thumb-overlay">
								          <a id="view_user_3" href="#" data-toggle="modal" data-remote="data/userinfo.html" data-target="#UserInfo">
								            <img id="thumb-3" src="http://www.avs.com/media/categories/album/1.jpg" class="img-responsive"></a>
								          <div class="item-id">
								            <b>ID</b>3</div>
								          <div class="item-flag">
								            <img id="flag-3" src="http://www.avs.com/templates/backend/default/assets/img/flags/NoCountry.png">
								          </div>
								          <div id="premium-3"></div>
								          <div id="photos-loading-3" class="thumbnails-loading" style="display: none">
								            <i class="loader"></i>
								          </div>
								        </div>
								      </div>
								    </div>
								  </div>
								  <div class="item-col-right">
								    <div class="item-details">
								      <div class="item-title">
								        <a data-toggle="modal" href="data/userinfo.html" data-target="#UserInfo">pkmp4</a></div>
								      <div class="row">
								        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
								          <div class="d-label">状态</div>
								          <span id="status-3">
								            <span class="text-green" alt="Active" title="Active">启用</span></span>
								        </div>
								        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
								          <div class="d-label">注册时间</div>Oct 26, 2017</div>
								        <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
								          <div class="d-label">最后登录</div>Oct 27, 2017</div>
								        <div class="col-xs-4 col-sm-4 col-md-1 col-lg-1">
								          <div class="d-label">
								            <i class="fa fa-comments" title="Wall Comments"></i>
								          </div>
								          <span class="text-muted">0</span></div>
								        <div class="col-xs-4 col-sm-4 col-md-1 col-lg-1">
								          <div class="d-label">
								            <i class="fa fa-eye" title="Profile Views"></i>
								          </div>
								          <span id="views-3">18</span></div>
								        <div class="col-xs-4 col-sm-4 col-md-1 col-lg-1">
								          <div class="d-label">
								            <i class="fa fa-video-camera" title="Owned Videos"></i>
								          </div>
								          <span class="text-muted">0</span></div>
								      </div>
								    </div>
								  </div>
								  <div class="clearfix"></div>
								  <div class="item-actions">
								    <div class="btn-group">
								      <div class="btn-group">
								        <a id="delete__user_3" class="btn btn-success" data-toggle="dropdown" href="#" alt="Delete" title="Delete">
								          <i class="fa fa-trash-o"></i>
								        </a>
								        <ul class="dropdown-menu">
								          <li>
								            <a id="delete_user_3" href="#">删除</a></li>
								        </ul>
								      </div>
								      <a id="edit_user_3" class="btn btn-success" data-toggle="modal" href="data/useredit.html" data-target="#UserInfo" alt="编辑" title="编辑">
								        <i class="fa fa-pencil"></i>
								      </a>
								      <a id="thumb_user_3" class="btn btn-success" href="#" alt="头像" title="头像">
								        <i class="fa fa-picture-o"></i>
								      </a>
								      <a id="status_user_3" class="btn btn-success" href="#" alt="禁用" title="禁用" data-processing="0" data-status="1">
								        <i class="fa fa-times"></i>
								      </a>
								    </div>
								  </div>
								</div>
								<div id="item-3" class="item-main-container small-thumb">
								  <div class="item-col-left">
								    <div class="item-main">
								      <div class="item-select" unselectable="on" onselectstart="return false;" onmousedown="return false;">
								        <div class="checkbox check-default">
								          <input name="user_id_checkbox_3" id="user_checkbox_3" type="checkbox" class="select-multiple">
								          <label for="user_checkbox_3" style="margin: 0 0 15px 0 !important;"></label>
								        </div>
								      </div>
								      <div class="item-thumb">
								        <div class="thumb-overlay">
								          <a id="view_user_3" href="#">
								            <img id="thumb-3" src="http://www.avs.com/media/users/nopic-Male.gif" class="img-responsive"></a>
								          <div class="item-id">
								            <b>ID</b>3</div>
								          <div class="item-flag">
								            <img id="flag-3" src="http://www.avs.com/templates/backend/default/assets/img/flags/NoCountry.png"></div>
								          <div id="premium-3"></div>
								          <div id="photos-loading-3" class="thumbnails-loading" style="display: none">
								            <i class="loader"></i>
								          </div>
								        </div>
								      </div>
								    </div>
								  </div>
								  <div class="item-col-right">
								    <div class="item-details">
								      <div class="item-title">
								        <a id="view_user_3_" href="#" class="text-info">pkmp4</a></div>
								      <div class="row">
								        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
								          <div class="d-label">状态</div>
								          <span id="status-3">
								            <span class="text-green" alt="Active" title="Active">启用</span></span>
								        </div>
								        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
								          <div class="d-label">注册时间</div>Oct 26, 2017</div>
								        <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
								          <div class="d-label">最后登录</div>Oct 27, 2017</div>
								        <div class="col-xs-4 col-sm-4 col-md-1 col-lg-1">
								          <div class="d-label">
								            <i class="fa fa-comments" title="Wall Comments"></i>
								          </div>
								          <span class="text-muted">0</span></div>
								        <div class="col-xs-4 col-sm-4 col-md-1 col-lg-1">
								          <div class="d-label">
								            <i class="fa fa-eye" title="Profile Views"></i>
								          </div>
								          <span id="views-3">18</span></div>
								        <div class="col-xs-4 col-sm-4 col-md-1 col-lg-1">
								          <div class="d-label">
								            <i class="fa fa-video-camera" title="Owned Videos"></i>
								          </div>
								          <span class="text-muted">0</span></div>
								      </div>
								    </div>
								  </div>
								  <div class="clearfix"></div>
								  <div class="item-actions">
								    <div class="btn-group">
								      <div class="btn-group">
								        <a id="delete__user_3" class="btn btn-success" data-toggle="dropdown" href="#" alt="Delete" title="Delete">
								          <i class="fa fa-trash-o"></i>
								        </a>
								        <ul class="dropdown-menu">
								          <li>
								            <a id="delete_user_3" href="#">删除</a></li>
								        </ul>
								      </div>
								      <a id="edit_user_3" class="btn btn-success" href="#" alt="Edit" title="Edit">
								        <i class="fa fa-pencil"></i>
								      </a>
								      <a id="thumb_user_3" class="btn btn-success" href="#" alt="Thumbnail" title="Thumbnail">
								        <i class="fa fa-picture-o"></i>
								      </a>
								      <a id="status_user_3" class="btn btn-success" href="#" alt="Suspend" title="Suspend" data-processing="0" data-status="1">
								        <i class="fa fa-times"></i>
								      </a>
								    </div>
								  </div>
								</div>

							</div>
						</div>
		    		</div>
			  </div>
			</div>
		</div>
	</div>


<?php include_once 'footer.php';?>
<div id="UserInfo" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    </div>
  </div>
</div>