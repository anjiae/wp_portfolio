jQuery(function () {


  var $container = $('.portfolio__lists').isotope();

  $('.portfolio__nav').on('click', 'a', function (e) {
    e.preventDefault();

    $('.portfolio__nav li a').removeClass('selected');
    $(this).closest('a').addClass('selected');
    var filterValue = $(this).attr('data-filter');
    $container.isotope({ filter: filterValue });
  });

});