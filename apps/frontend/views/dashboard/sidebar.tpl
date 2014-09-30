<!-- start: Main Menu -->
<div class="sidebar ">
					
	<div class="sidebar-collapse">
		
		<div class="sidebar-header">
			
			<img src="img/avatar.jpg">
			
			<h2>{$smarty.session.dadosUsuario->nome}</h2>
			<h3>{$smarty.session.dadosUsuario->email}</h3>
			
			<div class="user-menu">
				<a id="sidebar-minify" href="{site_url('dashboard')}"><i class="fa fa-ellipsis-v"></i></a>
			</div>
			
		</div>
		
		<div class="sidebar-menu">	
			<ul class="nav nav-sidebar">

				<li><a href="{site_url('dashboard')}"><i class="fa fa-bar-chart-o"></i><span class="text"> Dashboard </a></li>	

				<li>
					<a href="index.html#"><i class="fa fa-eye"></i><span class="text"> Mensagens</span> </a>
				</li>
				<li><a href="widgets.html"><i class="fa fa-dashboard"></i><span class="text"> Controle de Acesso</span></a></li>

				<li>
					<a href="{site_url('aparelhos')}"><i class="fa fa-folder-o"></i><span class="text"> Aparelhos</span></a>
				</li>
				<li>
					<a href="{site_url('exercicios')}"><i class="fa fa-edit"></i><span class="text"> Exercícios</span></a>
				</li>
				<li>
					<a href="{site_url('treinos')}"><i class="fa fa-list-alt"></i><span class="text"> Treinos</span></a>
				</li>
				<li><a href="{site_url('alimentos')}"><i class="fa fa-font"></i><span class="text"> Alimentos</span></a></li>

				<li><a href="gallery.html"><i class="fa fa-picture-o"></i><span class="text"> Receitas</span></a></li>
				<li><a href="table.html"><i class="fa fa-align-justify"></i><span class="text"> Dieta</span></a></li>
				
			</ul>
		</div>					
	</div>
	<div class="sidebar-footer">
		
		<ul class="sidebar-footer-menu">
			<li><a href="index.html#"><i class="fa fa-cog"></i> Voltar ao site</a></li>
			<button style="margin-bottom:10px;" class="btn btn-default md-trigger" data-modal="modal-1">Fade in &amp; Scale</button>
			<li><a href="{site_url('logout')}"><i class="fa fa-sign-out"></i> Sair do Sistema</a></li>
		</ul>
		
		<div class="sidebar-brand">
			PRO<strong>FIT</strong>
		</div>
		
		<ul class="sidebar-terms">
			<li><a href="index.html#">Terms</a></li>
			<li><a href="index.html#">Privacy</a></li>
			<li><a href="index.html#">Help</a></li>
			<li><a href="index.html#">About</a></li>
		</ul>	
		
	</div>	
</div>
<!-- end: Main Menu -->