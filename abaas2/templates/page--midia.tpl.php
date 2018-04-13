<!-- MEGA06MAR2018 -->

<?php include "header.tpl.php"; ?>


<div class="banner">
      
    

</div>


<div class="principal">

<div class="container">

    <div class="conteudo">

      <h1>Notícias</h1>

      <div class="chamada">
        <p>A Associação tem como objetivo reunir as principais redes de cash &amp; carry do Brasil, consolidando a representação e defesa dos interesses do segmento que mais cresce no país: O ATACADO DE AUTOSSERVIÇO.</p>
        
      </div>

    	<?php print $messages; ?>
		<?php if (!empty($tabs)): ?>
		<?php print render($tabs); ?>
		<?php endif; ?>		

      <div class="row">
        <div class="col-sm-12">
          <?php print views_embed_view('midia', 'default'); ?>
        </div>

        
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
