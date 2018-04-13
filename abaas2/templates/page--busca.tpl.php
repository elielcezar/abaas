
<!-- MEGA06MAR2018 -->
<?php include "header.tpl.php"; ?>	  


<div class="principal">

	     <div class="container">


	     	<?php if (!empty($title)): ?>
				        <h1 class="page-header"><?php print $title; ?></h1>
				      <?php endif; ?>

				<?php print render($page['content']); ?>
					   
			</div>
	 
</div>

<?php include "footer.tpl.php"; ?>	    




