<?php /* Smarty version Smarty-3.1.19, created on 2014-09-29 21:14:52
         compiled from "apps/frontend/views/dashboard/treinos/exercicios.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9231271755429f512b0f910-30495689%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db876ddae3051c318fcd32a5f27b946bb89d0aee' => 
    array (
      0 => 'apps/frontend/views/dashboard/treinos/exercicios.tpl',
      1 => 1412036091,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9231271755429f512b0f910-30495689',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5429f512bf3899_00085089',
  'variables' => 
  array (
    'dados' => 0,
    'field' => 0,
    'dado' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5429f512bf3899_00085089')) {function content_5429f512bf3899_00085089($_smarty_tpl) {?><div class="main sidebar-minified">

	<div class="row">		
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading" data-original-title>
							<h2><i class="fa fa-user"></i><span class="break"></span>Exercícios</h2>
							<div class="panel-actions">
								<a href="table.html#" class="btn-setting"><i class="fa fa-wrench"></i> Adicionar Novo</a>
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
											<a class="btn btn-success" href="table.html#">
												<i class="fa fa-search-plus "></i>  
											</a>
											<a class="btn btn-info" href="table.html#">
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
