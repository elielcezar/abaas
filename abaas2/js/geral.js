(function($) {
   $().ready(function() {


     $('.top-header input.form-text').focus( function() {
       $('.top-header .views-exposed-widget').addClass('active');
     });
     $('.top-header input.form-text').blur( function() {
       $('.top-header .views-exposed-widget').removeClass('active');
     });



    });
})(jQuery);
