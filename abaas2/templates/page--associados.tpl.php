<?php include "header.tpl.php"; ?>
<!-- MEGA06MAR2018 -->

<div class="banner">
      
    

</div>


<div class="principal">

<div class="container">

    <div class="conteudo">

    	<?php print $messages; ?>
		<?php if (!empty($tabs)): ?>
		<?php print render($tabs); ?>
		<?php endif; ?>		


      <h1>Associados</h1>
      <div class="chamada">
        <p>O segmento de atacado de autosserviço vem mostrando sua força no mercado brasileiro. O setor é hoje o que mais cresce no país. São mais de 650 lojas espalhadas por todo o território nacional, com faturamento anual que ultrapassa os R$ 90 bilhões. É também um importante empregador, com mais de 75 mil postos de trabalho diretos e outros milhares indiretos. A ABAAS é formada por doze redes de atacados de autosserviço que operam no país, sendo elas: Assaí Atacadista, Atacadão, Comercial Esperança, Fort Atacadista, Giga Atacado, Makro, Mart Minas – Atacado & Varejo, Maxxi Atacado, Roldão Atacadista, Spani Atacadista, Tenda Atacado e Villefort Atacadista. Juntas, essas empresas somam mais de 650 lojas. Conheça abaixo. </p>        
        
      </div>

      <div class="associados">
        <?php print views_embed_view('associados', 'default'); ?>
      </div>

      <div class="faca-parte"><h3><a class="email" href="#" data-toggle="modal" data-target="#contato">É um atacadista de autosserviço e quer fazer parte da ABAAS? Entre em contato conosco!</a></h3></div>


    </div><!-- conteudo -->

</div><!-- container -->


</div><!-- principal -->


<?php include "footer.tpl.php"; ?>	    



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
