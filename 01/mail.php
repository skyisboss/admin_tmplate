<?php include_once 'header.php';?>

	<div class="main">
		<div class="page-title">
			<i class="glyphicon glyphicon-tint"></i>
			<h3>设置</h3>
		</div>

		<div class="boxs">
			<div class="col-md-12">
				<div class="alert alert-warning">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
				<span>Mail Settings Updated Successfully!</span>
			</div>
			<div class="panel">
			  <div class="panel-heading"><h4>邮件配置</h4></div>
			  <div class="panel-body">
			    <div class="col-lg-6 col-lg-offset-3 col-md-12">
			    	<h3>邮件配置</h3><br>
			    	<form class="form-horizontal ">
			    	  <div class="form-group">
			    	    <label for="inputEmail3" class="col-sm-3 control-label">类型</label>
			    	    <div class="col-sm-8">
			    	      	  <select class="form-control">
			    	      	    <option>SMTP服务器</option>
			    	      	  </select>
			    	    </div>
			    	  </div>
			    	  <div class="form-group">
			    	    <label for="inputEmail3" class="col-sm-3 control-label">SMTP地址</label>
			    	    <div class="col-sm-8">
			    	      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
			    	    </div>
			    	  </div>
			    	  <div class="form-group">
			    	    <label for="inputEmail3" class="col-sm-3 control-label">SMTP端口</label>
			    	    <div class="col-sm-8">
			    	      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
			    	    </div>
			    	  </div>
			    	  <div class="form-group">
			    	    <label for="inputEmail3" class="col-sm-3 control-label">SMTP前缀</label>
			    	    <div class="col-sm-8">
			    	      <select class="form-control">
			    	        <option>默认</option>
			    	      </select>
			    	    </div>
			    	  </div>


			    	</form>
			    </div>
			  </div>
			  <div class="panel-footer">
			  		<div class="pull-right">
			  				<input type="submit" name="submit_mail" value="保存" class="btn btn-success btn-cons">
			  				<a href="index.php" class="btn btn-white btn-cons">取消</a>
			  		</div>
			  </div>
			</div>
		</div>
	</div>
<?php include_once 'footer.php';?>