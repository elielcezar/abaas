<!-- MEGA06MAR2018 -->

<?php include "header.tpl.php"; ?>


<div class="banner">
      
    

</div>


<div class="principal">

<div class="container">

    <div class="conteudo">

    	<?php print $messages; ?>
		<?php if (!empty($tabs)): ?>
		<?php print render($tabs); ?>
		<?php endif; ?>		


      <h1>Fornecedores</h1>
      <div class="chamada">
        <p>A ABAAS conta com importantes parceiros no desafio de se tornar uma entidade forte e com grande representatividade no segmento de atacado de autosserviço. “Ver a indústria com disposição de atuar no segmento atacadista de autosserviço, desenvolvendo alternativas e soluções em produtos que atendam especificamente às demandas do canal nos deixa satisfeitos e certos de que é um caminho que só irá trazer grandes resultados. Por isso agradecemos aos parceiros que entraram conosco nesse projeto”, declara o presidente da entidade, Ricardo Roldão.</p>        
        <p>Confira nossos principais parceiros, que contribuem para efetividade e crescimento do setor:</p>
      </div>

      <div class="associados">
        <?php print views_embed_view('fornecedores', 'default'); ?>
      </div>

    


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
