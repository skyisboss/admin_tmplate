<?php include_once 'header.php';?>

	<div class="main">
		<div class="page-title">
			<i class="glyphicon glyphicon-tint"></i>
			<h3>设置</h3>
			<div class="boxs">
				<div class="panel">
					<div class="panel-heading"><h4>基本设置</h4></div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-6">
								<div class="col-md-12">
									<h3>网站设置</h3>
								<br>
									<form class="form-horizontal">
									  <div class="form-group">
									    <label for="inputEmail3" class="col-sm-2 control-label">网站名称</label>
									    <div class="col-sm-10">
									      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
									    </div>
									  </div>
									  <div class="form-group">
									    <label for="inputEmail3" class="col-sm-2 control-label">网站副标题</label>
									    <div class="col-sm-10">
									      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
									    </div>
									  </div>
									  <div class="form-group">
									    <label for="inputEmail3" class="col-sm-2 control-label">网站关键词</label>
									    <div class="col-sm-10">
									      <textarea class="form-control" rows="3"></textarea>
									    </div>
									  </div>
									  <div class="form-group">
									    <label for="inputEmail3" class="col-sm-2 control-label">网站描述</label>
									    <div class="col-sm-10">
									      <textarea class="form-control" rows="5"></textarea>
									    </div>
									  </div>
									  <div class="form-group">
									    <label for="inputEmail3" class="col-sm-2 control-label">网站模板</label>
									    <div class="col-sm-10 select-warp">
									      <select class="form-control" id="template" data-live-search="true">
									        <option>1</option>
									        <option>2</option>
									        <option>3</option>
									        <option>4</option>
									        <option>5</option>
									      </select>
									    </div>
									  </div>

									  <div class="form-group">
									    <label for="inputEmail3" class="col-sm-2 control-label">默认语言</label>
									    <div class="col-sm-10 select-warp">
									      <select class="form-control" id="language" data-live-search="true">
									        <option value="en_US">English</option>
									        <option value="fr_FR">Français</option>
									        <option value="de_DE">Deutsch</option>
									        <option value="nl_NL">Dutch</option>
									        <option value="es_ES">Español</option>
									        <option value="it_IT">Italiano</option>
									        <option value="pt_PT">Português</option>
									        <option value="pt_BR">Português</option>
									        <option value="ru_RU">русский</option>
									        <option value="sa_SA">العربية</option>
									        <option value="he_IL">עִבְרִית</option>
									        <option value="jp_JP">日本語</option>
									        <option value="cn_CS" selected="selected">中文简体</option>
									        <option value="cn_CT">中文 繁體</option>
									        <option value="tr_TR">Türkçe</option>
									        <option value="dk_DK">Dansk</option>
									        <option value="no_NO">Norsk</option>
									        <option value="cz_CZ">Český</option>
									        <option value="bn_BD">বাংলা</option>
									        <option value="ro_RO">Română</option>
									        <option value="pl_PL">Polski</option>
									        <option value="hu_HU">Magyar</option>
									        <option value="ba_BA">Bosanski</option>
									        <option value="hr_HR">Hrvatski</option>
									        <option value="rs_RS">Srpski</option>
									        <option value="si_SI">Slovenski</option>
									      </select>
									    </div>
									  </div>

									  <br>
									  <table class="table">
											<tr>
												<td class="v-align-middle no-border" style="width:70%;">
													多语言
												</td>
												<td class="v-align-middle no-border" style="width:15%;">
													<label class="radio-inline">
													  <input type="radio" class="radio-dange" name="radioOptionsExample"> 单选框 1
													</label>
												</td>
												<td class="v-align-middle no-border" style="width:15%;">
													<label class="radio-inline dange">
													  <input type="radio" class="dange" name="radioOptionsExample"> 单选框 1
													</label>
												</td>
											</tr>
									  </table>


									</form>
								</div>
							</div>
							<div class="col-md-6">
								<div class="col-md-12">
									<h3>内容显示</h3><br>
									<div class="col-md-10 col-md-offset-2">
										<form class="form-horizontal">
										  <div class="form-group">
										    <label for="inputEmail3" class="col-sm-3 control-label">视频每页显示</label>
										    <div class="col-sm-9">
										      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
										    </div>
										  </div>
										  <div class="form-group">
										    <label for="inputEmail3" class="col-sm-3 control-label">图片每页显示</label>
										    <div class="col-sm-9">
										      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
										    </div>
										  </div>
										  <div class="form-group">
										    <label for="inputEmail3" class="col-sm-3 control-label">小说每页显示</label>
										    <div class="col-sm-9">
										      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
										    </div>
										  </div>
										  <div class="form-group">
										    <label for="inputEmail3" class="col-sm-3 control-label">下载每页显示</label>
										    <div class="col-sm-9">
										      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
										    </div>
										  </div>
										  <div class="form-group">
										    <label for="inputEmail3" class="col-sm-3 control-label">信息每页显示</label>
										    <div class="col-sm-9">
										      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
										    </div>
										  </div>

										</form>
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


