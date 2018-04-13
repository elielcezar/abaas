<!-- MEGA06MAR2018 -->

<?php include "header.tpl.php"; ?>

<div class="banner">
      
    

</div>

<div class="principal">

    <div class="container">

    	<div class="conteudo">

		      <div class="row">
			      <div class="col-md-8">
			      	<h1>Contato</h1>
			      	<h5>Compartilhe conosco suas dúvidas e sugestões</h5>
			      	<p>Entre em contato pelo e-mail superintendencia@abaas.com.br ou preencha o formulário abaixo:</p>
			      	   <?php
			                  $block = module_invoke('webform', 'block_view', 'client-block-3');
			                  print render($block['content']);
			              ?>
			      </div>
			      <div class="col-md-4">
			      	<div class="mais">
			      		<img src="<?php print base_path() ?>sites/all/themes/abaas2/img/contato.png" />
			      		<h2>Contatos</h2>	
			      		<h4>Paulo Roberto Alves</h4>
						<p>Superintendente Executivo</p>
						<h4>Cida Serpa</h4>
						<p>Secretária</p>	      		
				      	<h4>+55 11 3167 0080</h4>
						<p>Rua Viradouro, 63 - Cj. 62 - 6º Andar</p>
						<p>Itaim Bibi - São Paulo - SP</p>
						<p>CEP: 04538-110	</p>

						<h2>Gestão Comercial</h2>
						<h4>Lucas Rispoli</h4>
						<p>+55 11 3053-6969</p>
					</div>
			      </div>
			   </div>
		</div>

    </div><!-- container -->

</div><!-- principal -->


<?php include "footer.tpl.php"; ?>	    


