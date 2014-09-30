<div class="main sidebar-minified">

	<div class="row">		
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading" data-original-title>
					<h2><i class="fa fa-user"></i><span class="break"></span>Aparelhos</h2>
					<div class="panel-actions">
						<a href="{site_url('aparelhos/validate')}" class="btn-setting"><i class="fa fa-wrench"></i> Adicionar Novo</a>
						<a href="table.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
						<a href="table.html#" class="btn-close"><i class="fa fa-times"></i></a>
					</div>
				</div>
				<div class="panel-body">
					<form id="form-save" action="{site_url('aparelhos/validate')}" method="post">
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