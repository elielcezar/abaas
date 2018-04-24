<!-- MEGA06MAR2018 -->

<?php include "header.tpl.php"; ?>


<div class="banner-home">

    <div id="banners">
       <div class="container">
           <div class="chamada">
             <h3>Atacado de Autosserviço</h3>
             <h4>O segmento que mais cresce no Brasil</h4>
           </div>
        </div>
    </div>

</div>


<div class="principal">

  <div class="noticias-setor">
    <div class="container">
      <h3 class="background"><strong>Notícias do Setor</strong></h3>
      <div class="row">
          <div class="col-sm-8 destaque">
            <?php print views_embed_view('noticias_home', 'block_1'); ?>
          </div>
          <div class="col-sm-4 mais">
            <?php print views_embed_view('noticias_home', 'attachment_1'); ?>
          </div>
      </div>
    </div>
  </div>

  <div class="conheca-abaas">
    <div class="container">
      <h3 class="background"><strong>Conheça a ABAAS</strong></h3>
      <div class="row">
        <div class="col-sm-6">
          <div class="player">
              <iframe class="" id="vimeo-241578132" width="100%" height="380" src="//player.vimeo.com/video/241578132?width=640&amp;height=360&amp;color=00adef&amp;portrait=1&amp;title=1&amp;byline=1&amp;autoplay=0&amp;loop=0&amp;player_id=vimeo-241578132" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowfullscreen></iframe>  </div>
          </div>
          <div class="col-sm-6">
              <ul>
                <li>Representa os interesses de seus associados;</li>
                <li>É a porta-voz do segmento de atacado de autosserviço.</li>
                <li>Sua principal atividade é representar o setor
                    e atuar sobre suas demandas específicas junto
                    à iniciativa privada, à indústria, aos clientes e
                    aos órgãos públicos, sejam eles municipais,
                    estaduais ou federais
                </li>
              </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="parceiros">
    <div class="container">
      <h3 class="background"><strong>Parceiros da Indústria</strong></h3>
      <?php print views_embed_view('fornecedores_associados_home', 'default'); ?>
    </div>
  </div>



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
