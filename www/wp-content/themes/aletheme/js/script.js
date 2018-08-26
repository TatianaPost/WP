jQuery(document).ready(function($) {

  //initialize swiper when document ready
  // var mySwiper = new Swiper('.swiper-container', {
  //   // Optional parameters
  //   direction: 'horizontal',
  //   loop: true,
  //   pagination: '.swiper-pagination',
  //   paginationClickable: true,
  //   speed: 600,
  //   nextButton: '.swiper-button-next',
  //   prevButton: '.swiper-button-prev'
  // });
  // if (typeof ymaps != 'undefined' && $('#map-field').length) {
  //   var myMap, myPlacemark, myPlacemark2, myPlacemark3;
  //   ymaps.ready(init);
  //   var cont = "<ul><li><a href='#'>Товар1</a></li><li><a href='#'>Товар2</a></li><li><a href='#'>Товар3</a></li></ul>";
  //
  //   function init() {
  //     myMap = new ymaps.Map("map-field", {
  //       center: [55.750226, 37.618911], // Координаты центра карты
  //       zoom: 13, // Zoom
  //       controls: ['zoomControl', 'typeSelector']
  //     }, {
  //       searchControlProvider: 'yandex#search'
  //     });
  //
  //     jQuery.getJSON('http://granitstroi.ru/geo-json', function(json) {
  //
  //       geoObjects = new ymaps.geoQuery(json)
  //         .addToMap(myMap)
  //         .applyBoundsToMap(myMap, {
  //           checkZoomRange: true
  //         });
  //     });
  //     myMap.behaviors
  //       .disable('scrollZoom')
  //       .disable('multiTouch');
  //     myMap.events.once('click', function() {
  //       myMap.behaviors
  //         .enable('scrollZoom')
  //         .enable('multiTouch');
  //     });
  //   }
  // };
  // if ($('main').hasClass('contacts')) {
  //   var myMap, myPlacemark;
  //   ymaps.ready(init);
  //
  //   function init() {
  //     myMap = new ymaps.Map("mapFieldContact", {
  //       center: [55.72504493415047, 37.64696099999997], // Координаты центра карты
  //       zoom: 14, // Zoom
  //       controls: ['zoomControl', 'typeSelector']
  //     });
  //     myPlacemark = new ymaps.Placemark([55.72504493415047, 37.64696099999997], {
  //       hintContent: 'Москва'
  //     }, {
  //       preset: 'twirl#redIcon'
  //     });
  //     myMap.geoObjects.add(myPlacemark);
  //   }
  // }

  // if (true) {
  //   var myMap, myPlacemark;
  //   ymaps.ready(init);
  //   function init() {
  //     myMap = new ymaps.Map("map_contact", {
  //       center: [55.744510, 37.520168],
  //       zoom: 14,
  //       controls: ['zoomControl', 'typeSelector']
  //     });
  //     myPlacemark = new ymaps.Placemark([55.744510, 37.520168], {
  //       hintContent: 'Москва'
  //     }, {
  //       preset: 'twirl#redIcon'
  //     });
  //     myMap.geoObjects.add(myPlacemark);
  //   }
  // }

  // $('select').styler();
  // $(".btn-order, .zakaz, .btn-order-table").fancybox({
  //   'transitionIn': 'elastic',
  //   'transitionOut': 'elastic',
  //   'speedIn': 600,
  //   'speedOut': 200,
  //   'overlayShow': false,
  //   'touch':false
  // });

  // $(".tablepress tbody .column-2").each(function() { $(this).hover(function() {
  //   $(this).wrapInner("<a href='#data' data-fancybox class='btn-order-table'></a>")
  //   }, function() {
  //     $(this).find('a').contents().unwrap();
  //   });
  // });
  // $(".tablepress").wrap("<div class='table'></div>");
  //
  // $('.table-wrap').each(function() {
  //   var $more = $(this).find('.table-more');
  //   var $morebtn = $(this).find('.table-more-btn');
  //   $more.hide();
  //   $morebtn.click(function(e) {
  //     e.preventDefault();
  //     if ($more.hasClass('more-expand')) {
  //       $more.removeClass('more-expand');
  //       $more.slideUp();
  //     } else {
  //       $more.addClass('more-expand');
  //       $more.slideDown();
  //     }
  //   });
  // });
  //
  //
  // $('.table-more-btn').click(function(){
  //         var el = $(this).parent('.table-wrap').prev();
  //         $('body').animate({
  //             scrollTop: $(el).offset().top}, 100);
  //         return false;
  // });
  //
  // $('.js-tel').mask('+7(999)999-99-99');


  $("<div class='arrow-mobMenu'></div>").insertAfter( '#menu-uslugi>.menu-item-has-children>a' );

  $('.arrow-mobMenu').on('click', function(e) {
    $(this).toggleClass('active');
    $(this).next('.sub-menu').slideToggle();
    e.stopPropagation();
	});

});
