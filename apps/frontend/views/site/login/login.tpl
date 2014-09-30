			<div class="container">
				<div class="row">
					<div class="login-box col-lg-4 col-lg-offset-4 col-sm-6 col-sm-offset-3">

						<div class="header">
							Profit Login
						</div>

						<form action="{site_url('login/processa')}" method="post">

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
			