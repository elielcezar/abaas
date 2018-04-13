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

    <?php print views_embed_view('quem_somos_topo', 'default'); ?>

	<div class="diretoria">
	    <?php print views_embed_view('quem_somos_diretores', 'default'); ?>
	</div>





    </div><!-- conteudo -->

</div><!-- container -->


</div><!-- principal -->


<?php include "footer.tpl.php"; ?>	    

