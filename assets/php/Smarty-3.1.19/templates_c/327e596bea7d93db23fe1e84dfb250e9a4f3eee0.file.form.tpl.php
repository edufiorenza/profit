<?php /* Smarty version Smarty-3.1.19, created on 2014-09-29 22:48:45
         compiled from "apps/frontend/views/dashboard/alimentos/form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1757866734542a01fb2479f9-87486362%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '327e596bea7d93db23fe1e84dfb250e9a4f3eee0' => 
    array (
      0 => 'apps/frontend/views/dashboard/alimentos/form.tpl',
      1 => 1412041723,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1757866734542a01fb2479f9-87486362',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542a01fb2dc655_21534113',
  'variables' => 
  array (
    'id' => 0,
    'valores' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542a01fb2dc655_21534113')) {function content_542a01fb2dc655_21534113($_smarty_tpl) {?><div class="main sidebar-minified">

	<div class="row">		
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading" data-original-title>
					<h2><i class="fa fa-user"></i><span class="break"></span>Alimentos</h2>
					<div class="panel-actions">
						<a href="<?php echo site_url('alimentos/validate');?>
" class="btn-setting"><i class="fa fa-wrench"></i> Adicionar Novo</a>
						<a href="table.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
						<a href="table.html#" class="btn-close"><i class="fa fa-times"></i></a>
					</div>
				</div>
				<div class="panel-body">
					<form id="form-save" action="<?php echo site_url('alimentos/validate');?>
" method="post">
						<?php if ($_smarty_tpl->tpl_vars['id']->value!=false) {?>
							<input type='hidden' name='cod' value='<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
' />
						<?php }?>
						<div class="row">

					  		<div class="col-sm-12">
								<div class="form-group has-feedback">
							    	<label for="name">Descrição</label>
							    	<input type="text" class="form-control" id="descricao" name="descricao" placeholder="" value="<?php if (isset($_smarty_tpl->tpl_vars['valores']->value->descricao)) {?><?php echo $_smarty_tpl->tpl_vars['valores']->value->descricao;?>
<?php }?>">
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
