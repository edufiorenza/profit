<div class="main sidebar-minified">

	<div class="row">		
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading" data-original-title>
					<h2><i class="fa fa-user"></i><span class="break"></span>Exercícios</h2>
					<div class="panel-actions">
						<a href="{site_url('exercicios/validate')}" class="btn-setting"><i class="fa fa-wrench"></i> Adicionar Novo</a>
						<a href="table.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
						<a href="table.html#" class="btn-close"><i class="fa fa-times"></i></a>
					</div>
				</div>
				<div class="panel-body">
					<form id="form-save" action="{site_url('exercicios/validate')}" method="post">
						{if $id != false}
							<input type='hidden' name='cod' value='{$id}' />
						{/if}
						<div class="row">

					  		<div class="col-sm-12">
								<div class="form-group has-feedback">
							    	<label for="name">Descrição</label>
							    	<input type="text" class="form-control" id="descricao" name="descricao" placeholder="" value="{if isset($valores->descricao)}{$valores->descricao}{/if}">
									<span class="fa fa-asterisk form-control-feedback"></span>
						  		</div>
							</div>

							<div class="col-sm-4">
					    		<label for="tipo_exercicio">Tipo de Exercício</label>
					    		<select class="form-control form-group" id="tipo_exercicio" name="tipo_exercicio">
								  	<option>Selecione</option>
								  	<option {if isset($valores->tipo_exercicio) && $valores->tipo_exercicio == "A"}selected{/if} value="A" >Aeróbico</option>
								  	<option {if isset($valores->tipo_exercicio) && $valores->tipo_exercicio == "M"}selected{/if} value="M">Musculação</option>
								</select>
							</div>

							<div class="col-sm-4">
					    		<label for="cod_aparelhos">Aparelho</label>
					    		<select class="form-control form-group" id="cod_aparelhos" name="cod_aparelhos">
								  	<option>Selecione</option>
								  	{foreach $aparelhos as $aparelho }
								  	<option {if isset($valores->cod_aparelhos) && $valores->cod_aparelhos == $aparelho.cod_aparelhos}selected{/if}  value="{$aparelho.cod_aparelhos}">{$aparelho.descricao}</option>
								  	{/foreach}
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
</div>