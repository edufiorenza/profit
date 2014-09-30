<div class="main sidebar-minified">

	<div class="row">		
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading" data-original-title>
							<h2><i class="fa fa-user"></i><span class="break"></span>Exercícios</h2>
							<div class="panel-actions-b">
								<a href="{site_url('exercicios/form')}"><i class="fa fa-wrench"></i> Adicionar Novo</a>
								<a href="table.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
								<a href="table.html#" class="btn-close"><i class="fa fa-times"></i></a>
							</div>
						</div>
						<div class="panel-body">
							<table class="table table-striped table-bordered bootstrap-datatable datatable">
							  <thead>
								  <tr>
								  	{foreach $dados.fields as $field}
									  	<th>{check_field("exercicios", $field)}</th>
								  	{/foreach}  
								  	<th>Ações</th>
								  </tr>
							  </thead>   
							  <tbody>
								
								{foreach $dados.dados as $dado}
									<tr>
										{foreach $dados.fields as $field}
											<td>{check_field_value("exercicios", $field, $dado.$field)}</td>
										{/foreach}  
									
										<td>
											
											<a class="btn btn-info" href="{base_url()}exercicios/form/{$dado.cod_aparelhos}">
												<i class="fa fa-edit "></i>  
											</a>
											<a class="btn btn-danger" href="table.html#">
												<i class="fa fa-trash-o "></i> 
											</a>
										</td>
									</tr>
								{/foreach}
								
							  </tbody>
						  </table>            
						</div>
					</div>
				</div><!--/col-->
			
			</div><!--/row-->