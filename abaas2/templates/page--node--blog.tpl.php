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

   
      <div class="row">
        <div class="col-sm-9">
          <?php print views_embed_view('blog_individual', 'default'); ?>
        </div>
        <div class="col-sm-3">
          <h3>Posts Relacionados</h3>
          <?php print views_embed_view('blog_posts_relacionados', 'default'); ?>
        </div>

        <div class="col-sm-12">
            <?php print views_embed_view('blog_album', 'default'); ?>
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

