jQuery.noConflict();

jQuery(document).ready(function ($) {

  

  // lojas
  

  $(".select2.regioes").hide();
  $(".page-nossas-lojas .cidades").hide();

  

  $(".page-nossas-lojas select.estados").change(function() {
    //alert( this.value );
    if(this.value!="")
    {
      mostrarLojas(this.value);

      selecionaLoja($(".page-nossas-lojas .estados .estado ."+this.value));
    }
    else
    {
      resetLojas();
    }
  });

  

  $(".page-nossas-lojas .estados .estado a").click(function(e){
    e.preventDefault();
    selecionaLoja($(this));

    //$(".page-nossas-lojas .select2").show();

    $(".page-nossas-lojas select.estados").val($(this).attr("href").replace("#", "")).trigger( "change" );
  });

  $(".view-lojas .cep").on("change keyup paste",function(){
    var objER = /^[0-9]{2}[0-9]{3}-[0-9]{3}$/;

    if(!objER.test(this.value) || $(this).hasClass("buscando")) return false;

    

  });

  $('.view-lojas a.centros-de-distribuicao').click(function(event){
    event.preventDefault();

    $(".page-nossas-lojas select.estados").val("").trigger( "change" );
    $('.view-lojas .view-lojas.centros-distribuicao .view-content').fadeIn();
  })

  function filtraLoja(data)
  {
    $(".page-nossas-lojas select.estados").val("").trigger( "change" );

    setTimeout(function(){$(".view-lojas .cep.buscando").removeClass("buscando")}, 500);

    $(".page-nossas-lojas .lojas .loja").hide();

    var vazio = true;

    for (e in data) 
    {
      var estado = data[e].sub_category;
      for (l in estado) 
      {
        $cidade = $(".page-nossas-lojas .lojas .loja-"+estado[l].sub_id);
        $cidade.show();

        vazio = false;
      }
    }

    if(vazio) $(".sem-resultado").fadeIn();

    $(".page-nossas-lojas .lista-lojas").fadeIn();

    if($(".page-nossas-lojas .lista-lojas .nano-content").height() > 488)
    {
      $(".page-nossas-lojas .lista-lojas").addClass("nano").height(488);
      //$(".page-nossas-lojas .lista-lojas").nanoScroller({ alwaysVisible: true }).nanoScroller({scroll: 'top'});
    }
  }

  function selecionaLoja(t)
  {
    $(".page-nossas-lojas .estados .estado a").removeClass("selecionado").addClass("nao-selecionado");

    t.removeClass("nao-selecionado").addClass("selecionado");
  }

  function mostrarLojas(estado)
  {
    resetLojas();

    $(".view-lojas .cep").val("");

    $(".page-nossas-lojas .lojas .loja").hide();

    $(".page-nossas-lojas .lista-lojas").css("height", "auto");

   
      resetRegioes();

      $cidade = $(".page-nossas-lojas .lojas ."+estado);
      $cidade.show();

      $(".page-nossas-lojas .lista-lojas").fadeIn();

      //alert($(".page-nossas-lojas .lojas").height());
      if($(".page-nossas-lojas .lista-lojas .nano-content").height() > 488)
      {
        $(".page-nossas-lojas .lista-lojas").addClass("nano").height(488);;
        //$(".page-nossas-lojas .lista-lojas").nanoScroller({ alwaysVisible: true }).nanoScroller({scroll: 'top'});
      }
    
    //console.log(value);
  }
  function resetLojas()
  {
    $(".page-nossas-lojas .lista-lojas").hide();

    $(".page-nossas-lojas .estados .estado a").removeClass("nao-selecionado").addClass("selecionado");

    $(".sem-resultado").hide();

    $('.view-lojas .view-lojas.centros-distribuicao .view-content').hide();

    resetRegioes();
  }

  function resetRegioes()
  {
    //$(".page-nossas-lojas .lista-lojas").nanoScroller({ destroy: true }).removeClass("nano");
    $(".select2.regioes").hide();

    //$(".page-nossas-lojas select.regioes").val(null).trigger( "change" );
    //$(".page-nossas-lojas select.regioes").select2("container").hide();
    var $regioes = $('.page-nossas-lojas select.regioes');
    $regioes.find('option').remove();
  }

  

});
