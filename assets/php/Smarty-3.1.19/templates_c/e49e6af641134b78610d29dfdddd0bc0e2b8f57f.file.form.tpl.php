<?php /* Smarty version Smarty-3.1.19, created on 2014-09-29 23:06:57
         compiled from "apps/frontend/views/dashboard/aparelhos/form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:941791555542a0f555ec470-32733682%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e49e6af641134b78610d29dfdddd0bc0e2b8f57f' => 
    array (
      0 => 'apps/frontend/views/dashboard/aparelhos/form.tpl',
      1 => 1412042814,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '941791555542a0f555ec470-32733682',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542a0f556ae145_88864328',
  'variables' => 
  array (
    'id' => 0,
    'valores' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542a0f556ae145_88864328')) {function content_542a0f556ae145_88864328($_smarty_tpl) {?><div class="main sidebar-minified">

	<div class="row">		
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading" data-original-title>
					<h2><i class="fa fa-user"></i><span class="break"></span>Aparelhos</h2>
					<div class="panel-actions">
						<a href="<?php echo site_url('aparelhos/validate');?>
" class="btn-setting"><i class="fa fa-wrench"></i> Adicionar Novo</a>
						<a href="table.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
						<a href="table.html#" class="btn-close"><i class="fa fa-times"></i></a>
					</div>
				</div>
				<div class="panel-body">
					<form id="form-save" action="<?php echo site_url('aparelhos/validate');?>
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
