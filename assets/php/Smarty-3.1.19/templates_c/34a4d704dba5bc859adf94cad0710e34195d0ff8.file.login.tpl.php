<?php /* Smarty version Smarty-3.1.19, created on 2014-09-28 22:49:47
         compiled from "apps/frontend/views/site/login/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2104673545428b9dd648ca7-16574435%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34a4d704dba5bc859adf94cad0710e34195d0ff8' => 
    array (
      0 => 'apps/frontend/views/site/login/login.tpl',
      1 => 1411955382,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2104673545428b9dd648ca7-16574435',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5428b9dd64ce94_62656713',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5428b9dd64ce94_62656713')) {function content_5428b9dd64ce94_62656713($_smarty_tpl) {?>			<div class="container">
				<div class="row">
					<div class="login-box col-lg-4 col-lg-offset-4 col-sm-6 col-sm-offset-3">

						<div class="header">
							Profit Login
						</div>

						<form action="<?php echo site_url('login/processa');?>
" method="post">

							<fieldset>

								<div class="form-group first">
								  	<div class="input-group col-sm-12">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
										<input type="email" class="form-control input-lg" id="email" name="email" placeholder="E-mail"/>	
									</div>
								</div>

								<div class="form-group last">
								  	<div class="input-group col-sm-12">
										<span class="input-group-addon"><i class="fa fa-key"></i></span>
										<input type="password" class="form-control input-lg" id="password" name="password" placeholder="Senha"/>
									</div>
								</div>

								<button type="submit" class="btn btn-primary col-xs-12">Login</button>

								<!--p class="small text-center">OR USE</p-->

								<!--div class="row social">

									<div class="col-xs-4">
										<button class="btn btn-sm btn-block btn-facebook"><span>Facebook</span></button>
									</div>

									<div class="col-xs-4">
										<button class="btn btn-sm  btn-block btn-twitter"><span>Twitter</span></button>
									</div>

									<div class="col-xs-4">
										<button class="btn btn-sm btn-block btn-linkedin"><span>LinkedIn</span></button>
									</div>

								</div-->

								<div class="row">

									<div class="col-xs-5">
										<a class="pull-right" href="page-register.html">Register</a>
									</div><!--/col-->

									<div class="col-xs-7">
										<a class="pull-left" href="page-login.html#">Forgot Password?</a>
									</div><!--/col-->

								</div><!--/row-->

							</fieldset>	

						</form>

					</div>
				</div><!--/row-->	
			</div><!--/container-->
			<?php }} ?>
