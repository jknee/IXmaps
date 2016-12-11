(function($, window, document, undefined){

    $(function() {
        // Toggle open and close nav styles on click
        $('#nav-toggle').click(function() {
          $('nav ul').slideToggle();
          $(this).toggleClass('active');
        });
    });

    //Other code

})(jQuery, window, document);

