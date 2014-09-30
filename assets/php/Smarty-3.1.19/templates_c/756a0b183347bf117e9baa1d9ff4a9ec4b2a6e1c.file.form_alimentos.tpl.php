<?php /* Smarty version Smarty-3.1.19, created on 2014-09-29 22:01:55
         compiled from "apps/frontend/views/dashboard/treinos/form_alimentos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6930315975429ff01a15683-57240685%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '756a0b183347bf117e9baa1d9ff4a9ec4b2a6e1c' => 
    array (
      0 => 'apps/frontend/views/dashboard/treinos/form_alimentos.tpl',
      1 => 1412038912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6930315975429ff01a15683-57240685',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5429ff01a92111_57709240',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5429ff01a92111_57709240')) {function content_5429ff01a92111_57709240($_smarty_tpl) {?><div class="main sidebar-minified">

	<div class="row">		
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading" data-original-title>
					<h2><i class="fa fa-user"></i><span class="break"></span>Alimentos</h2>
					<div class="panel-actions">
						<a href="<?php echo site_url('dashboard/form_alimentos');?>
" class="btn-setting"><i class="fa fa-wrench"></i> Adicionar Novo</a>
						<a href="table.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
						<a href="table.html#" class="btn-close"><i class="fa fa-times"></i></a>
					</div>
				</div>
				<div class="panel-body">
					<form id="form-save" action="<?php echo site_url('form-save/alimentos');?>
" method="post">
						<div class="row">

					  		<div class="col-sm-6">
								<div class="form-group has-feedback">
							    	<label for="name">Descrição</label>
							    	<input type="text" class="form-control" id="descricao" placeholder="">
									<span class="fa fa-asterisk form-control-feedback"></span>
						  		</div>
							</div>

							<div class="col-sm-3">
								<div class="form-group has-feedback">
							    	<label for="name">Calorias</label>
							    	<input type="text" class="form-control" id="calorias" placeholder="">
									<span class="fa fa-asterisk form-control-feedback"></span>
						  		</div>
							</div>

					  	</div>   

						<div class="form-actions">
							<button type="submit" class="btn pull-left btn-primary">Salvar Dados</button>
							
						</div>
					</form>
				</div>
			</div>
		</div>
	
	</div>
</div><?php }} ?>
