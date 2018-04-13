
<?php
global $base_url;
?>
 

<header>
  <nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      
      <a class="logo" href="<?php print base_path(); ?>"><img src="<?php print base_path() ?>sites/all/themes/abaas2/img/logo.png" class="img-responsive" /></a>

      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">MENU</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="<?php print base_path(); ?>">Home</a></li>
        <li><a href="<?php print base_path(); ?>quem-somos">Quem Somos</a></li>
        <li><a href="<?php print base_path(); ?>associados">Associados</a></li>
        <li><a href="<?php print base_path(); ?>fornecedores">Fornecedores</a></li>
        <li><a href="<?php print base_path(); ?>revista">Revista</a></li>
        <li><a href="<?php print base_path(); ?>news">News</a></li>
        <li><a href="<?php print base_path(); ?>contato">Contato</a></li>
        <?php if($user->uid){ ?>
             <li><a href="<?php print base_path(); ?>user/logout">Sair</a></li>
          <?php } ?>
      </ul> 


    </div><!-- /.navbar-collapse -->

    <?php print render($page['topo']); ?>

  </div><!-- /.container -->
</nav>

</header>

  <?php //print render($page['topo']); ?>  




