<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title><!--[site_name]--></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<link rel="stylesheet" media="screen"
	href="../../static/css/bootstrap.min.css">
<link rel="stylesheet" media="screen"
	href="../../static/css/bootstrap-theme.min.css">

<?=injectionJS();?>
</head>
<body>
	<div class="container">
		<div class="row">
			<form class="form-inline" action="includes/process.php?action=update"
				method="post" onsubmit="return updateLocationFrame(this);"
				role="form">
				<div class="form-group">
					<div class="col-lg-6">
						<div class="input-group">
							<input type="text" name="u" placeholder="http://www.some.com"
								id="input" class="form-control"> <span class="input-group-btn">
								<button class="btn btn-default" type="submit">Go!</button>
							</span>
						</div>
						<!-- /input-group -->
					</div>
					<!-- /.col-lg-6 -->
				</div>
				<div class="form-group">

					<div class="col-lg-12">
						<b>选项:</b> <input type="checkbox" checked="checked" id="encodeURL"
							name="encodeURL"> <label for="encodeURL">编码URL</label> <input
							type="checkbox" id="encodePage" name="encodePage"> <label
							for="encodePage">加密页面</label> <input type="checkbox"
							checked="checked" id="allowCookies" name="allowCookies"> <label
							for="allowCookies">允许Cookie</label> <input type="checkbox"
							checked="checked" id="stripJS" name="stripJS"> <label
							for="stripJS">禁用脚本</label> <input type="checkbox"
							checked="checked" id="stripObjects" name="stripObjects"> <label
							for="stripObjects">禁用对象</label>
					</div>

				</div>

			</form>
			<p class="center hide">
				<a href="http://www.glype.com/" target="_blank">Glype</a>&reg;
				<!--[version]-->
				.
			</p>
		</div>
	</div>
</body>
</html>