<?php /* Smarty version Smarty-3.1.19, created on 2014-09-28 22:58:44
         compiled from "apps/frontend/views/dashboard/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18331913735428bb595cf846-05719841%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99d7426828f59ac5c9a8de682802ff1cdcf4720d' => 
    array (
      0 => 'apps/frontend/views/dashboard/header.tpl',
      1 => 1411955884,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18331913735428bb595cf846-05719841',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5428bb5961b993_24900236',
  'variables' => 
  array (
    'assets_path' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5428bb5961b993_24900236')) {function content_5428bb5961b993_24900236($_smarty_tpl) {?>
<!DOCTYPE html>
<html lang="en">
	<head>
    	<meta charset="utf-8">
    	<base href="<?php echo $_smarty_tpl->tpl_vars['assets_path']->value;?>
" />
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="Origin Admin - Bootstrap Admin Template">
		<meta name="author" content="Łukasz Holeczek">
		<meta name="keyword" content="Origin, Admin, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="57x57" href="ico/apple-touch-icon-57-precomposed.png">
		<link rel="shortcut icon" href="ico/favicon.png">

	    <title>Origin Admin - Bootstrap Admin Template</title>

	    <!-- Bootstrap core CSS -->
	    <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-style">
	
		<!-- Remove following comment to add Right to Left Support or add class rtl to body -->
		<!-- <link href="css/bootstrap-rtl.min.css" rel="stylesheet"> -->
		
		<link href="css/jquery.mmenu.css" rel="stylesheet">
		<link href="css/font-awesome.min.css" rel="stylesheet">
		
		<!-- page css files -->
		<link href="css/climacons-font.css" rel="stylesheet">
		
		<link href="plugins/jquery-ui/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
		<link href="plugins/fullcalendar/css/fullcalendar.css" rel="stylesheet">
		<link href="plugins/morris/css/morris.css" rel="stylesheet">
		<link href="plugins/jvectormap/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">

	    <!-- Custom styles for this template -->
	    <link href="css/style.min.css" rel="stylesheet" id="main-style">
		<link href="css/add-ons.min.css" rel="stylesheet">
		
		<!-- Themes -->
	    <link href="css/themes.min.css" rel="stylesheet">
		
		<!-- Remove following comment to add Right to Left Support or add class rtl to body -->
		<!-- <link href="css/style.rtl.min.css" rel="stylesheet"> -->

	    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>
	
	
	<!-- BODY options, add following classes to body to change options

		1. 'sidebar-minified'     - Switch sidebar to minified version (width 50px)
		2. 'sidebar-hidden'		  - Hide sidebar
		3. 'rtl'				  - Switch to Right to Left Mode
		4. 'container'			  - Boxed layout
		5. 'static-sidebar'		  - Static Sidebar
		6. 'static-header'		  - Static Header
		7. 'hidden-usage'		  - Hidden Usage Bar
			
		Themes:
			
		1. 'elegant'			  - Elegant Theme
		2. 'sky'				  - Sky Theme

	-->
	</head>
</head>

<body >

		
	<!-- start: Header -->
	<div class="navbar" role="navigation">
		<div class="container-fluid">
			<ul class="nav navbar-nav navbar-actions navbar-left">
				<li class="visible-md visible-lg"><a href="index.html#" id="main-menu-toggle"><i class="fa fa-bars"></i></a></li>
				<li class="visible-xs visible-sm"><a href="index.html#" id="sidebar-menu"><i class="fa fa-bars"></i></a></li>
			</ul>
			<form class="navbar-form navbar-left">
				<i class="fa fa-search"></i>
				<input type="text" class="form-control" placeholder="Search...">
			</form>
	        <ul class="nav navbar-nav navbar-right">
				
				<li class="dropdown visible-md visible-lg">
	        		<a href="index.html#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-comments-o"></i><span class="badge">4</span></a>
	        		<ul class="dropdown-menu">
						<li class="dropdown-menu-header">
							<strong>Messages</strong>
							<div class="progress thin">
							  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
							    <span class="sr-only">40% Complete (success)</span>
							  </div>
							</div>
						</li>
						<li class="avatar">
							<a href="index.html#">
								<img class="avatar" src="img/avatar.jpg">
								<div>New message</div>
								<small>1 minute ago</small>
								<span class="label label-info">NEW</span>
							</a>
						</li>
						<li class="avatar">
							<a href="index.html#">
								<img class="avatar" src="img/avatar.jpg">
								<div>New message</div>
								<small>1 minute ago</small>
								<span class="label label-info">NEW</span>
							</a>
						</li>
						<li class="avatar">
							<a href="index.html#">
								<img class="avatar" src="img/avatar.jpg">
								<div>New message</div>
								<small>1 minute ago</small>
							</a>
						</li>
						<li class="avatar">
							<a href="index.html#">
								<img class="avatar" src="img/avatar.jpg">
								<div>New message</div>
								<small>1 minute ago</small>
							</a>
						</li>
						<li class="avatar">
							<a href="index.html#">
								<img class="avatar" src="img/avatar.jpg">
								<div>New message</div>
								<small>1 minute ago</small>
							</a>
						</li>
						<li class="avatar">
							<a href="index.html#">
								<img class="avatar" src="img/avatar.jpg">
								<div>New message</div>
								<small>1 minute ago</small>
							</a>
						</li>
						<li class="dropdown-menu-footer text-center">
							<a href="index.html#">View all messages</a>
						</li>	
	        		</ul>
	      		</li>
				<li><a href="index.html#"><i class="fa fa-cog"></i></a></li>
				<li class="dropdown visible-md visible-lg">
	        		<a href="index.html#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-wrench"></i><span class="badge">!</span></a>
	        		<ul class="dropdown-menu">
						<li class="dropdown-menu-header text-center">
							<strong>Account</strong>
						</li>
						<li><a href="index.html#"><i class="fa fa-bell-o"></i> Updates <span class="label label-info">42</span></a></li>
						<li><a href="index.html#"><i class="fa fa-envelope-o"></i> Messages <span class="label label-success">42</span></a></li>
						<li><a href="index.html#"><i class="fa fa-tasks"></i> Tasks <span class="label label-danger">42</span></a></li>
						<li><a href="index.html#"><i class="fa fa-comments"></i> Comments <span class="label label-warning">42</span></a></li>
						<li class="dropdown-menu-header text-center">
							<strong>Settings</strong>
						</li>
						<li><a href="index.html#"><i class="fa fa-user"></i> Profile</a></li>
						<li><a href="index.html#"><i class="fa fa-wrench"></i> Settings</a></li>
						<li><a href="index.html#"><i class="fa fa-usd"></i> Payments <span class="label label-default">42</span></a></li>
						<li><a href="index.html#"><i class="fa fa-file"></i> Projects <span class="label label-primary">42</span></a></li>
						<li class="divider"></li>
						<li><a href="index.html#"><i class="fa fa-shield"></i> Lock Profile</a></li>
						<li><a href="index.html#"><i class="fa fa-lock"></i> Logout</a></li>	
	        		</ul>
	      		</li>
				<li><a href="<?php echo site_url('logout');?>
"><i class="fa fa-power-off"></i></a></li>
			</ul>
		</div>
	</div>
	<!-- end: Header --><?php }} ?>
