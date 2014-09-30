<?php /* Smarty version Smarty-3.1.19, created on 2014-09-29 23:23:42
         compiled from "apps/frontend/views/dashboard/exercicios/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:170126731542a10c9b58882-01332215%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5e04850713c8b8cd922f8ca29a6c8bdc10a8b2b' => 
    array (
      0 => 'apps/frontend/views/dashboard/exercicios/index.tpl',
      1 => 1412043820,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170126731542a10c9b58882-01332215',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542a10c9c87998_13512075',
  'variables' => 
  array (
    'dados' => 0,
    'field' => 0,
    'dado' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542a10c9c87998_13512075')) {function content_542a10c9c87998_13512075($_smarty_tpl) {?><div class="main sidebar-minified">

	<div class="row">		
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading" data-original-title>
							<h2><i class="fa fa-user"></i><span class="break"></span>Exercícios</h2>
							<div class="panel-actions-b">
								<a href="<?php echo site_url('exercicios/form');?>
"><i class="fa fa-wrench"></i> Adicionar Novo</a>
								<a href="table.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
								<a href="table.html#" class="btn-close"><i class="fa fa-times"></i></a>
							</div>
						</div>
						<div class="panel-body">
							<table class="table table-striped table-bordered bootstrap-datatable datatable">
							  <thead>
								  <tr>
								  	<?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dados']->value['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
									  	<th><?php echo check_field("exercicios",$_smarty_tpl->tpl_vars['field']->value);?>
</th>
								  	<?php } ?>  
								  	<th>Ações</th>
								  </tr>
							  </thead>   
							  <tbody>
								
								<?php  $_smarty_tpl->tpl_vars['dado'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dado']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dados']->value['dados']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dado']->key => $_smarty_tpl->tpl_vars['dado']->value) {
$_smarty_tpl->tpl_vars['dado']->_loop = true;
?>
									<tr>
										<?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dados']->value['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
											<td><?php echo check_field_value("exercicios",$_smarty_tpl->tpl_vars['field']->value,$_smarty_tpl->tpl_vars['dado']->value[$_smarty_tpl->tpl_vars['field']->value]);?>
</td>
										<?php } ?>  
									
										<td>
											
											<a class="btn btn-info" href="<?php echo base_url();?>
exercicios/form/<?php echo $_smarty_tpl->tpl_vars['dado']->value['cod_aparelhos'];?>
">
												<i class="fa fa-edit "></i>  
											</a>
											<a class="btn btn-danger" href="table.html#">
												<i class="fa fa-trash-o "></i> 
											</a>
										</td>
									</tr>
								<?php } ?>
								
							  </tbody>
						  </table>            
						</div>
					</div>
				</div><!--/col-->
			
			</div><!--/row--><?php }} ?>
