<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="favicon.ico">

<title>程序员网址导航</title>

<!-- Bootstrap core CSS -->
<link href="../static/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="../static/js/offcanvas.css" rel="stylesheet">

<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
<script src="../static/js/ie-emulation-modes-warning.js"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../static/js/ie10-viewport-bug-workaround.js"></script>

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
	<div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed"
					data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">程序员网址导航</a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<?php
					/*
					 * <li class="active"><a href="#">Home</a></li> <li><a href="#about">About</a></li> <li><a href="#contact">Contact</a></li>
					 */
					?>
				</ul>
			</div>
			<!-- /.nav-collapse -->
		</div>
		<!-- /.container -->
	</div>
	<!-- /.navbar -->

	<div class="container">

		<div class="row row-offcanvas row-offcanvas-right">

			<div class="col-xs-12 col-sm-9">
				<p class="pull-right visible-xs">
					<button type="button" class="btn btn-primary btn-xs"
						data-toggle="offcanvas">Toggle nav</button>
				</p>
				<div class="row">
					<div class="col-12 col-sm-12">
						<form role="form" id="form_search" name="form_search" target="_blank">

							<select id="search_site">
								<option value="baidu">baidu</option>
								<option value="google">google</option>
								<option value="baigoogledu">baigoogledu</option>
							</select> 
							<input type="text" id="search_keyword" /> 
							<input type="submit"
								class="btn" value="GO">

						</form>
					</div>
				</div>
				<div class="row">
					<div class="col-6 col-sm-6 col-lg-4">
						<h2>Heading</h2>
						<p>Donec id elit non mi porta gravida at eget metus. Fusce
							dapibus, tellus ac cursus commodo, tortor mauris condimentum
							nibh, ut fermentum massa justo sit amet risus. Etiam porta sem
							malesuada magna mollis euismod. Donec sed odio dui.</p>
						<p>
							<a class="btn btn-default" href="#" role="button">View details
								&raquo;</a>
						</p>
					</div>
					<!--/span-->
					<div class="col-6 col-sm-6 col-lg-4">
						<h2>Heading</h2>
						<p>Donec id elit non mi porta gravida at eget metus. Fusce
							dapibus, tellus ac cursus commodo, tortor mauris condimentum
							nibh, ut fermentum massa justo sit amet risus. Etiam porta sem
							malesuada magna mollis euismod. Donec sed odio dui.</p>
						<p>
							<a class="btn btn-default" href="#" role="button">View details
								&raquo;</a>
						</p>
					</div>
					<!--/span-->
					<div class="col-6 col-sm-6 col-lg-4">
						<h2>Heading</h2>
						<p>Donec id elit non mi porta gravida at eget metus. Fusce
							dapibus, tellus ac cursus commodo, tortor mauris condimentum
							nibh, ut fermentum massa justo sit amet risus. Etiam porta sem
							malesuada magna mollis euismod. Donec sed odio dui.</p>
						<p>
							<a class="btn btn-default" href="#" role="button">View details
								&raquo;</a>
						</p>
					</div>
					<!--/span-->
					<div class="col-6 col-sm-6 col-lg-4">
						<h2>Heading</h2>
						<p>Donec id elit non mi porta gravida at eget metus. Fusce
							dapibus, tellus ac cursus commodo, tortor mauris condimentum
							nibh, ut fermentum massa justo sit amet risus. Etiam porta sem
							malesuada magna mollis euismod. Donec sed odio dui.</p>
						<p>
							<a class="btn btn-default" href="#" role="button">View details
								&raquo;</a>
						</p>
					</div>
					<!--/span-->
					<div class="col-6 col-sm-6 col-lg-4">
						<h2>Heading</h2>
						<p>Donec id elit non mi porta gravida at eget metus. Fusce
							dapibus, tellus ac cursus commodo, tortor mauris condimentum
							nibh, ut fermentum massa justo sit amet risus. Etiam porta sem
							malesuada magna mollis euismod. Donec sed odio dui.</p>
						<p>
							<a class="btn btn-default" href="#" role="button">View details
								&raquo;</a>
						</p>
					</div>
					<!--/span-->
					<div class="col-6 col-sm-6 col-lg-4">
						<h2>Heading</h2>
						<p>Donec id elit non mi porta gravida at eget metus. Fusce
							dapibus, tellus ac cursus commodo, tortor mauris condimentum
							nibh, ut fermentum massa justo sit amet risus. Etiam porta sem
							malesuada magna mollis euismod. Donec sed odio dui.</p>
						<p>
							<a class="btn btn-default" href="#" role="button">View details
								&raquo;</a>
						</p>
					</div>
					<!--/span-->
				</div>
				<!--/row-->
			</div>
			<!--/span-->

			<div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar"
				role="navigation">
				<div class="list-group">
					<a href="#" class="list-group-item active">Link</a> <a href="#"
						class="list-group-item">Link</a> <a href="#"
						class="list-group-item">Link</a> <a href="#"
						class="list-group-item">Link</a> <a href="#"
						class="list-group-item">Link</a> <a href="#"
						class="list-group-item">Link</a> <a href="#"
						class="list-group-item">Link</a> <a href="#"
						class="list-group-item">Link</a> <a href="#"
						class="list-group-item">Link</a> <a href="#"
						class="list-group-item">Link</a>
				</div>
			</div>
			<!--/span-->
		</div>
		<!--/row-->

		<hr>

		<footer>
			<p>&copy; Company 2014</p>
		</footer>

	</div>
	<!--/.container-->



	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="../static/js/jquery-2.1.1.min.js"></script>
	<script src="../static/bootstrap/js/bootstrap.min.js"></script>
	<script src="../static/js/offcanvas.js"></script>
	<script src="../static/js/jquery.cookie.js"></script>
	<script src="../static/js/weburl.js"></script>

</body>
</html>
