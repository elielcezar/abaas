<footer class="footer">


	<div class="container">

		<div class="sobre">
			<img src="<?php print base_path() ?>sites/all/themes/abaas2/img/abaas-rodape.png" class="img-responsive logo-abaas" />
			<p>A ABAAS foi criada para representar os interesses de seus associados e ser a porta-voz do segmento de atacado de autosserviço. Sua principal atividade é representar o setor e atuar sobre suas demandas específicas junto à iniciativa privada, à indústria, aos clientes e aos órgãos públicos, sejam eles municipais, estaduais ou federais.</p>
		</div>
	
	
		<div class="mapa">
			<h5>Mapa do Site</h5>
			<ul>
				<li><a href="<?php print base_path(); ?>">Home</a></li>
				<li><a href="<?php print base_path(); ?>quem-somos">Quem Somos</a></li>
				<li><a href="<?php print base_path(); ?>associados">Associados</a></li>
			</ul>
			<ul>
				<li><a href="<?php print base_path(); ?>revista">Revista</a></li>
				<!--li><a href="">Blog</a></li>
				<li><a href="">Imprensa</a></li-->
				<li><a class="email" href="#" data-toggle="modal" data-target="#contato">Contato</a></li>
				<li><a href="<?php print base_path(); ?>fornecedores">Fornecedores</a></li>
			</ul>
		</div>

		<div class="endereco">
			<h5>Contato</h5>
				<p>+55 11 3167 0080</p>
				<p>Rua Viradouro, 63 - Cj. 62 - 6º Andar</p>
				<p>Itaim Bibi - São Paulo - SP</p>
				<p>CEP: 04538-110</p>
				<p><a class="email" href="#" data-toggle="modal" data-target="#contato">Envie um Email</a></p>
		</div>
		
	</div>


	 </footer>

	 <div class="powered">
		<a href="http://www.megamidia.com.br/" target="_blank"><img src="<?php print base_path() ?>sites/all/themes/abaas2/img/megamidia.png" /></a>	
		</div>
	     


<!-- Modal -->
<div class="modal fade" id="form-newsletter" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>

				
				
        <?php
          $block = module_invoke('webform', 'block_view', 'client-block-1');
          print render($block['content']);
          ?>

			</div>
		</div>
	</div>
</div> 


<div class="modal fade" id="contato" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>

					<h3>Entre em Contato</h3>				
			        <?php
			          $block = module_invoke('webform', 'block_view', 'client-block-3');
			          print render($block['content']);
			          ?>

			</div>
		</div>
	</div>
</div> 



<script type="text/javascript">
jQuery(document).ready(function ($) {
document.getElementById("edit-s").placeholder = "Pesquisar";
$('#cadastr-usuarios').attr('onClick', "ga('send','event','cadastro-usuarios','Click')");
});
</script>


