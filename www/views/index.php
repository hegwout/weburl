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
							<div class="form-group input-group">
								<div class="col-lg-4">
									<select id="search_site" autocomplete="off" class="form-control">
										<option value="google">google(tmd123.com)</option>
										<option value="baidu">baidu</option>
										<option value="baigoogledu">baigoogledu</option>
									</select>
								</div>
								<div class="col-lg-6">
									<input type="text" autocomplete="off" class="form-control" id="search_keyword" />
								</div>
								<div class="col-lg-2 ">
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
					<iframe src="glype-1.4.9/" frameborder="0" width="100%"
						srollbar="no" height="91"></iframe>
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
						<span class="col-md-2"><a href="<?php echo $v['url'];?>"
							target="_blank"><?php echo $v['name'];?></a></span>
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
						<span class="col-md-2"><a href="<?php echo $v['url'];?>"
							target="_blank"><?php echo $v['name'];?></a></span>
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
					<?php /*
					<ul class="nav nav-tabs" id="download_tab">
						<li class="active"><a href="javascript:;" data-toggle="tab">Windows</a></li>
						
					</ul>
					*/?>
					<div class="tab-content">
						<div class="tab-pane active" id="tab1">
							<table class="table table-bordered table-striped">
								<tbody>
									<tr>
										<td width="100"><span class="label label-primary">集成开发工具</span></td>
										<td>
										<?php foreach($windows[4] as $k => $v){?>
											<?php if( $k > 0 ) echo ' | '; ?> 
											<a href="<?php echo $v['url'];?>" target="_blank"><?php echo $v['name'];?></a> 
										<?php }?>
										</td>
									</tr>
									<tr>
										<td><span class="label label-primary">编辑器</span></td>
										<td><?php foreach($windows[5] as $k => $v){?>
											<?php if( $k > 0 ) echo ' | '; ?> 
											<a href="<?php echo $v['url'];?>" target="_blank"><?php echo $v['name'];?></a> 
										<?php }?></td>
									</tr>
									<tr>
										<td><span class="label label-primary">网络工具</span></td>
										<td><?php foreach($windows[6] as $k => $v){?>
											<?php if( $k > 0 ) echo ' | '; ?> 
											<a href="<?php echo $v['url'];?>" target="_blank"><?php echo $v['name'];?></a> 
										<?php }?></td>
									</tr>
									<tr>
										<td><span class="label label-primary">工具效率</span></td>
										<td><?php foreach($windows[7] as $k => $v){?>
											<?php if( $k > 0 ) echo ' | '; ?> 
											<a href="<?php echo $v['url'];?>" target="_blank"><?php echo $v['name'];?></a> 
										<?php }?></td>
									</tr>
								</tbody>
							</table>
						</div>
						<?php /*
						<div class="tab-pane" id="tab2">
						<table class="table table-bordered table-striped">
								<tbody>
									<tr>
										<td width="100"><span class="label label-primary">集成开发工具</span></td>
										<td>
										<?php foreach($mac[4] as $k => $v){?>
											<?php if( $k > 0 ) echo ' | '; ?> 
											<a href="<?php echo $v['url'];?>" target="_blank"><?php echo $v['name'];?></a> 
										<?php }?>
										</td>
									</tr>
									<tr>
										<td><span class="label label-primary">编辑器</span></td>
										<td><?php foreach($mac[5] as $k => $v){?>
											<?php if( $k > 0 ) echo ' | '; ?> 
											<a href="<?php echo $v['url'];?>" target="_blank"><?php echo $v['name'];?></a> 
										<?php }?></td>
									</tr>
									<tr>
										<td><span class="label label-primary">网络工具</span></td>
										<td><?php foreach($mac[6] as $k => $v){?>
											<?php if( $k > 0 ) echo ' | '; ?> 
											<a href="<?php echo $v['url'];?>" target="_blank"><?php echo $v['name'];?></a> 
										<?php }?></td>
									</tr>
									<tr>
										<td><span class="label label-primary">工具效率</span></td>
										<td><?php foreach($mac[7] as $k => $v){?>
											<?php if( $k > 0 ) echo ' | '; ?> 
											<a href="<?php echo $v['url'];?>" target="_blank"><?php echo $v['name'];?></a> 
										<?php }?></td>
									</tr>
								</tbody>
							</table>
						</div>
*/?>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
<!--/.container-->
<?php include 'footer.php'?>
	