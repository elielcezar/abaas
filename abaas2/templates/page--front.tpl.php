<!-- MEGA06MAR2018 -->

<?php include "header.tpl.php"; ?>


<div class="banner-home">
      
    <div id="banners">        

           <div class="container">
                  <h3>Atacado de Autosserviço</h3>
                  <h4>O segmento que mais cresce no Brasil</h4>   


                <div class="logos">
                  <div class="carousel slide carousel-fade" data-ride="carousel">
                      <div class="carousel-inner" role="listbox">

                        <div class="item active">
                             <img src="<?php print base_path() ?>sites/all/themes/abaas2/img/topo/aurora.png" />
                        </div>
                        <div class="item">
                             <img src="<?php print base_path() ?>sites/all/themes/abaas2/img/topo/johnson.png" />
                        </div>
                        <div class="item">
                             <img src="<?php print base_path() ?>sites/all/themes/abaas2/img/topo/nestle.png" />
                        </div>                       
                        <div class="item">
                             <img src="<?php print base_path() ?>sites/all/themes/abaas2/img/topo/p-g.png" />
                        </div>
                         <div class="item">
                             <img src="<?php print base_path() ?>sites/all/themes/abaas2/img/topo/marba.png" />
                        </div>

                       
                        <div class="item">
                             <img src="<?php print base_path() ?>sites/all/themes/abaas2/img/topo/colgate.png" />
                        </div>
                        <div class="item">
                             <img src="<?php print base_path() ?>sites/all/themes/abaas2/img/topo/flora.png" />
                        </div>
                        <div class="item">
                             <img src="<?php print base_path() ?>sites/all/themes/abaas2/img/topo/heineken.png" />
                        </div>                       
                        <div class="item">
                             <img src="<?php print base_path() ?>sites/all/themes/abaas2/img/topo/loreal.png" />
                        </div>
                        <div class="item">
                             <img src="<?php print base_path() ?>sites/all/themes/abaas2/img/topo/ype.png" />
                        </div>
                      </div>
                    </div>
                </div>                   
                 
              </div>       

    </div>

</div>


<div class="principal">

    <div class="container">

    	<?php print $messages; ?>
		<?php if (!empty($tabs)): ?>
		<?php print render($tabs); ?>
		<?php endif; ?>		

    <div class="col-sm-12">
       <div class="associados">
          <h5>Associados</h5> 
          <?php print views_embed_view('associados_home', 'default'); ?> 
      </div>  
    </div>

    <div class="col-md-4">     
        <div class="revista"> 
              <!--img src="<?php print base_path() ?>sites/all/themes/abaas2/img/revista-home.png" /-->
              <img src="http://abaas.com.br/sites/all/themes/abaas2/img/capa5.png">
              <h5>Revista ABAAS</h5>
              <p>A 5ª edição traz uma reportagem especial sobre o impacto da tecnologia e de ações focadas na prevenção e no combate às rupturas.</p>
              <a class="btn" href="<?php print base_path(); ?>revista">Leia Agora</a>
        </div><!-- main --> 
    </div>  

    <div class="col-md-4">     
        <div class="video"> 
              <a href="#" data-toggle="modal" data-target="#video"><img src="<?php print base_path() ?>sites/all/themes/abaas2/img/video-home.jpg" class="img-responsive" /></a>
        </div><!-- main --> 
    </div>  

    <div class="col-md-4">     
        <div class="newsletter"> 
              <img src="<?php print base_path() ?>sites/all/themes/abaas2/img/icon_newsletter.png" />
              <h5>NEWSLETTER ABAAS</h5>
              <p>Assine e receba atualizações sobre o mercado e a associação em seu e-mail</p>
              <a class="btn" id="cadastro-usuarios" href="#" data-toggle="modal" data-target="#form-newsletter">Cadastrar</a>
        </div><!-- main --> 
    </div>  

  <div class="parceiros">

      <h5>Fornecedores e Parceiros</h5> 
      <?php print views_embed_view('fornecedores_associados_home', 'default'); ?>  

      <!--div class="view-content">

        <div class="col-sm-1">
        <div class="views-field views-field-field-avatar">        
          <div class="field-content">
            <a href="/ype"><img class="img-responsive" src="http://abaas.com.br/sites/default/files/logo-ype-vale-mais-cuidar.png" width="500" height="460" alt=""></a></div>  </div>  </div>
        
        <div class="col-sm-1">    
        <div class="views-field views-field-field-avatar">        
          <div class="field-content">
            <a href="/pg"><img class="img-responsive" src="http://abaas.com.br/sites/default/files/pg.png" width="600" height="600" alt=""></a></div>  </div>  </div>
        

        <div class="col-sm-1">
        <div class="views-field views-field-field-avatar">        
          <div class="field-content">
            <a href="/marba"><img class="img-responsive" src="http://abaas.com.br/sites/default/files/marba.png" width="600" height="600" alt=""></a></div>  </div>  </div>
        

        <div class="col-sm-1">            
        <div class="views-field views-field-field-avatar">       
         <div class="field-content">
          <a href="/nestle"><img class="img-responsive" src="http://abaas.com.br/sites/default/files/rodape-nestle1.png" width="260" height="260" alt=""></a></div>  </div>  </div>
        
        <div class="col-sm-1">            
        <div class="views-field views-field-field-avatar">        
          <div class="field-content">
            <a href="/colgate"><img class="img-responsive" src="http://abaas.com.br/sites/default/files/colgate.png" width="260" height="260" alt=""></a></div>  </div>  </div>
        

        <div class="col-sm-1">            
        <div class="views-field views-field-field-avatar">       
         <div class="field-content">
          <a href="/heineken"><img class="img-responsive" src="http://abaas.com.br/sites/default/files/logo-heineken_0.png" width="260" height="260" alt=""></a></div>  </div>  </div>
        

        <div class="col-sm-1">            
        <div class="views-field views-field-field-avatar">        
          <div class="field-content">
            <a href="/loreal"><img class="img-responsive" src="http://abaas.com.br/sites/default/files/loreal.png" width="260" height="260" alt=""></a></div>  </div>  </div>
        

        <div class="col-sm-1">            
        <div class="views-field views-field-field-avatar">        
          <div class="field-content">
            <a href="/aurora"><img class="img-responsive" src="http://abaas.com.br/sites/default/files/logo%20aurora.png" width="600" height="600" alt=""></a></div>  </div>  </div>
        

        <div class="col-sm-1">            
        <div class="views-field views-field-field-avatar">        
          <div class="field-content">
            <a href="/flora"><img class="img-responsive" src="http://abaas.com.br/sites/default/files/flora.png" width="260" height="260" alt=""></a></div>  </div>  </div>
    

      <div class="col-sm-1">            
        <div class="views-field views-field-field-avatar">        
          <div class="field-content">
            <img class="img-responsive" src="http://abaas.com.br/sites/default/files/johnson.png" width="260" height="260" alt=""></div>  </div>  </div>
    




    </div-->



      
  </div>         


    </div><!-- container -->

</div><!-- principal -->


<?php include "footer.tpl.php"; ?>	    

<!-- Modal -->
<div class="modal fade" id="video" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>        
        <!--iframe src="https://player.vimeo.com/video/257506633?title=0&byline=0&portrait=0" width="100%" height="510" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe-->
        <iframe src="https://player.vimeo.com/video/262273146?title=0&byline=0&portrait=0" width="100%" height="510" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div> 


<!-- Modal -->
<!--div class="modal fade" id="comunicado" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <a href="http://abaas.com.br/blog/carta-de-posicionamento-e-apoio"> 
        <img src="http://abaas.com.br/sites/default/files/000b.png" class="banner img-responsive" />
      </a>
      </div>
    </div>
  </div>
</div--> 

<style type="text/css">
#comunicado .close{
  position: absolute;
  right: 0;
}
  #comunicado .modal-body{padding: 0;}
</style>


<script type="text/javascript">
/*jQuery(document).ready(function ($) {

    $(window).load(function(){
        $('#comunicado').modal('show');
    });
});*/
</script>



