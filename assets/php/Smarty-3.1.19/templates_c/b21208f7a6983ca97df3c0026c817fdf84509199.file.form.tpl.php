<?php /* Smarty version Smarty-3.1.19, created on 2014-09-29 23:25:18
         compiled from "apps/frontend/views/dashboard/exercicios/form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:109564884542a10ed6033f6-28234006%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b21208f7a6983ca97df3c0026c817fdf84509199' => 
    array (
      0 => 'apps/frontend/views/dashboard/exercicios/form.tpl',
      1 => 1412043916,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '109564884542a10ed6033f6-28234006',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542a10ed6d7e32_32025730',
  'variables' => 
  array (
    'id' => 0,
    'valores' => 0,
    'aparelhos' => 0,
    'aparelho' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542a10ed6d7e32_32025730')) {function content_542a10ed6d7e32_32025730($_smarty_tpl) {?><div class="main sidebar-minified">

	<div class="row">		
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading" data-original-title>
					<h2><i class="fa fa-user"></i><span class="break"></span>Exercícios</h2>
					<div class="panel-actions">
						<a href="<?php echo site_url('exercicios/validate');?>
" class="btn-setting"><i class="fa fa-wrench"></i> Adicionar Novo</a>
						<a href="table.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
						<a href="table.html#" class="btn-close"><i class="fa fa-times"></i></a>
					</div>
				</div>
				<div class="panel-body">
					<form id="form-save" action="<?php echo site_url('exercicios/validate');?>
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

							<div class="col-sm-4">
					    		<label for="tipo_exercicio">Tipo de Exercício</label>
					    		<select class="form-control form-group" id="tipo_exercicio" name="tipo_exercicio">
								  	<option>Selecione</option>
								  	<option <?php if (isset($_smarty_tpl->tpl_vars['valores']->value->tipo_exercicio)&&$_smarty_tpl->tpl_vars['valores']->value->tipo_exercicio=="A") {?>selected<?php }?> value="A" >Aeróbico</option>
								  	<option <?php if (isset($_smarty_tpl->tpl_vars['valores']->value->tipo_exercicio)&&$_smarty_tpl->tpl_vars['valores']->value->tipo_exercicio=="M") {?>selected<?php }?> value="M">Musculação</option>
								</select>
							</div>

							<div class="col-sm-4">
					    		<label for="cod_aparelhos">Aparelho</label>
					    		<select class="form-control form-group" id="cod_aparelhos" name="cod_aparelhos">
								  	<option>Selecione</option>
								  	<?php  $_smarty_tpl->tpl_vars['aparelho'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['aparelho']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aparelhos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['aparelho']->key => $_smarty_tpl->tpl_vars['aparelho']->value) {
$_smarty_tpl->tpl_vars['aparelho']->_loop = true;
?>
								  	<option <?php if (isset($_smarty_tpl->tpl_vars['valores']->value->cod_aparelhos)&&$_smarty_tpl->tpl_vars['valores']->value->cod_aparelhos==$_smarty_tpl->tpl_vars['aparelho']->value['cod_aparelhos']) {?>selected<?php }?>  value="<?php echo $_smarty_tpl->tpl_vars['aparelho']->value['cod_aparelhos'];?>
"><?php echo $_smarty_tpl->tpl_vars['aparelho']->value['descricao'];?>
</option>
								  	<?php } ?>
								</select>
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
