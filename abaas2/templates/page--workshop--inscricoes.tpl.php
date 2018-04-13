<!-- MEGA06MAR2018 -->


<?php include "header.tpl.php"; ?>

<div class="header">
	<div class="container">
		<a href="http://abaas.com.br/"><img src="<?php print base_path() ?>sites/all/themes/abaas2/img/workshop/home.png" class="logo"></a>
		<ul class="menu-workshop">
			<li><a href="http://abaas.com.br/workshop">Workshop 2017</a></li>
			<li><a href="http://abaas.com.br/workshop#programacao">Programação</a></li>
			<li><a href="http://abaas.com.br/workshop#local">Como chegar</a></li>
			<li><a href="http://abaas.com.br/workshop#patrocinadores">Patrocinadores</a></li>
			<li><a href="http://abaas.com.br/workshop#contato">fale conosco</a></li>
			<li><a href="http://abaas.com.br/workshop#organizacao">Organizadores</a></li>		               
		</ul>
	</div>
</div>


<div class="banner">
      
    

</div>


<div class="principal">

<div class="container">

    <div class="conteudo">

    	<?php print $messages; ?>
		<?php if (!empty($tabs)): ?>
		<?php print render($tabs); ?>
		<?php endif; ?>		

    <div class="col-md-12">

      <h1>Workshop ABAAS 2017</h1>
      <div class="chamada">
        <p>O Workshop ABAAS 2016 marcou o lançamento da ABAAS no mercado junto aos principais players do segmento. O evento de 2017 reforça a atuação da Associação Brasileira dos Atacadistas de Autosserviço durante este ano, seus planos e metas para o o futuro do segmento, e o fortalecimento das parcerias estabelecidas.</p>
        <p>O Workshop ABAAS 2017 reune os principais fornecedores do cash & carry do Brasil em um evento que contará com a participação dos associados ABAAS e seus principais líderes.</p>
  		<img src="<?php print base_path() ?>sites/all/themes/abaas2/img/workshop/marcas.jpg" class="img-responsive"><br>
  		<img src="<?php print base_path() ?>sites/all/themes/abaas2/img/workshop/data-local-inscricao.png" class="img-responsive">
  		
  		<h4>Faça parte do Workshop</h4>
  		<div class="form-inscricoes">
	  		<?php
				$block = module_invoke('webform', 'block_view', 'client-block-111');
				print render($block['content']);
			?>
		</div>

  		<img src="<?php print base_path() ?>sites/all/themes/abaas2/img/workshop/patrocinadores.jpg" class="img-responsive">
      </div>
      
    </div>

    </div><!-- conteudo -->

</div><!-- container -->


</div><!-- principal -->


<?php include "footer.tpl.php"; ?>	    

