<?php include 'header.php'?>
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="text-muted bootstrap-admin-box-title">搜索</div>
				</div>
				<div class="bootstrap-admin-panel-content">
					<form role="form" id="form_search" name="form_search"
						target="_blank" class="form-horizontal">
						<fieldset>
							<div class="form-group">
								<div class="col-lg-4">
									<select id="search_site" class="form-control">
										<option value="google">google(tmd123.com)</option>
										<option value="baidu">baidu</option>
										<option value="baigoogledu">baigoogledu</option>
									</select>
								</div>
								<div class="col-lg-6">
									<input type="text" class="form-control" id="search_keyword" />
								</div>
								<div class="col-lg-2">
									<button class="btn btn-default">搜索</button>
								</div>

							</div>

							<div class="form-group">
								<div class="col-lg-4" style="height: 33px;">&nbsp;</div>
							</div>

						</fieldset>
					</form>
				</div>
			</div>
		</div>

		<div class="col-md-6">
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="text-muted bootstrap-admin-box-title">代理访问</div>
				</div>
				<div class="bootstrap-admin-panel-content">
					<iframe src="glype-1.4.9/" frameborder="0" width="100%" srollbar="no" height="90"></iframe>
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="text-muted bootstrap-admin-box-title">在线工具</div>
				</div>
				<div class="bootstrap-admin-panel-content">
					<div class="row">
					<?php foreach($tools as $k => $v){?>
						<span class="col-md-2"><a href="<?php echo $v['url'];?>" target="_blank"><?php echo $v['name'];?></a></span>
					<?php }?>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="text-muted bootstrap-admin-box-title">常用网址</div>
				</div>
				<div class="bootstrap-admin-panel-content">
					<div class="row">
					<?php foreach($links as $k => $v){?>
						<span class="col-md-2"><a href="<?php echo $v['url'];?>" target="_blank"><?php echo $v['name'];?></a></span>
					<?php }?>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="text-muted bootstrap-admin-box-title">软件下载</div>
				</div>
				<div class="bootstrap-admin-panel-content">

					<ul class="nav nav-tabs" id="download_tab">
						<li class="active"><a href="#tab1" data-toggle="tab">Windows</a></li>
						<li><a href="#tab2" data-toggle="tab">Mac</a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="tab1">
							<table class="table table-bordered table-striped">
								<tbody>
									<tr>
										<td width="100"><span class="label label-primary">集成开发工具</span></td>
										<td><a href="http://www.eclipse.org/downloads/"
											target="_blank">Eclipse</a> | <a
											href="http://www.netbeans.org/downloads/" target="_blank">NetBeans</a>
											| <a
											href="http://www.visualstudio.com/downloads/download-visual-studio-vs#d-express-web"
											target="_blank">Visual Studio Express</a> dev-c++ | intellij
											idea | adt</td>
									</tr>
									<tr>
										<td><span class="label label-primary">编辑器</span></td>
										<td><a href="http://www.sublimetext.com/2" target="_blank">Sublime</a>
											| <a href="http://www.sublimetext.com/2" target="_blank">Notepad++</a>
											|</td>
									</tr>
									<tr>
										<td><span class="label label-primary">网络工具</span></td>
										<td>Filezilla | XShell |</td>
									</tr>
									<tr>
										<td><span class="label label-primary">工具效率</span></td>
										<td>Evernote | Noteone | WPS | OpenOffice</td>
									</tr>
									<tr>
										<td><span class="label label-primary">WEB相关</span></td>
										<td>Nginx | MySQL | Redis | Memcache</td>
									</tr>


								</tbody>
							</table>
						</div>
						<div class="tab-pane" id="tab2">tab2</div>

					</div>
				</div>
			</div>
		</div>
	</div>

</div>
<!--/.container-->
<?php include 'footer.php'?>
	