google.maps.event.addDomListener(window, 'load', init);

 function init() {
     // Basic options for a simple Google Map
     // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
     var mapOptions = {
         // How zoomed in you want the map to start at (always required)
         zoom: 17,
         scrollwheel: false,zoomControl: true,
         zoomControlOptions: {
             style: google.maps.ZoomControlStyle.SMALL
        },

         // The latitude and longitude to center the map (always required)
         center: new google.maps.LatLng(4.994523, -74.336892), // La Vega
         // How you would like to style the map. 
         // This is where you would paste any style found on Snazzy Maps.
         styles: [{
             "featureType": "landscape",
             "stylers": [{
                 "saturation": -100
             }, {
                 "lightness": 60
             }]
         }, {
             "featureType": "road.local",
             "stylers": [{
                 "saturation": -100
             }, {
                 "lightness": 40
             }, {
                 "visibility": "on"
             }]
         }, {
             "featureType": "transit",
             "stylers": [{
                 "saturation": -100
             }, {
                 "visibility": "simplified"
             }]
         }, {
             "featureType": "administrative.province",
             "stylers": [{
                 "visibility": "off"
             }]
         }, {
             "featureType": "water",
             "stylers": [{
                 "visibility": "on"
             }, {
                 "lightness": 30
             }]
         }, {
             "featureType": "road.highway",
             "elementType": "geometry.fill",
             "stylers": [{
                 "color": "#ef8c25"
             }, {
                 "lightness": 40
             }]
         }, {
             "featureType": "road.highway",
             "elementType": "geometry.stroke",
             "stylers": [{
                 "visibility": "off"
             }]
         }, {
             "featureType": "poi.park",
             "elementType": "geometry.fill",
             "stylers": [{
                 "color": "#b6c54c"
             }, {
                 "lightness": 40
             }, {
                 "saturation": -40
             }]
         }, {}]
     };

     // Get the HTML DOM element that will contain your map 
     // We are using a div with id="map" seen below in the <body>
     var mapElement = document.getElementById('map');

     // Create the Google Map using our element and options defined above
     var map = new google.maps.Map(mapElement, mapOptions);

     // Let's also add a marker while we're at it
     var marker = new google.maps.Marker({
         position: new google.maps.LatLng(4.994523, -74.336892),
         map: map,
         title: 'MADRIGAL',
         icon: 'images/icon-map.png'
     });
 };

jQuery(document).ready(function($) {
    $.init();

        //fancyboc
     $(".button-ver").fancybox({
        maxWidth    : 800,
        maxHeight   : 600,
        fitToView   : true,
        width       : '80%',
        height      : '80%',
        autoSize    : false,
        closeClick  : false,
        openEffect  : 'none',
        closeEffect : 'none',
        scrolling   : 'auto',
    });

    $('.menu-bars').on('click', function(event) {
        event.preventDefault();

        var menu = $(this).parent();

        if(menu.hasClass('active')){
            menu.removeClass('active');
        }
        else{
            menu.addClass('active');
        }
    });
      $("#owl-demo").owlCarousel({
      autoPlay: 6000,
      navigation : true,
      slideSpeed : 1000,
      paginationSpeed : 1000,
      singleItem : true
      
      // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false

      });
});

 
$.addBrochure = function(content){
    content.turn({
        height: 645,
        autoCenter: true
    });
    content.on('click', '.next-button', function(event) {
        event.preventDefault();
        content.turn('next');
    });
    content.on('click', '.previous-button', function(event) {
        event.preventDefault();
        content.turn('previous');
    });
}
$.imgToSvg = function(image){
    var $img = image;
    var imgID = $img.attr('id');
    var imgClass = $img.attr('class');
    var imgURL = $img.attr('src');

    $.get(imgURL, function(data) {
        var $svg = jQuery(data).find('svg');
        if(typeof imgID !== 'undefined') {
            $svg = $svg.attr('id', imgID);
        }
        if(typeof imgClass !== 'undefined') {
            $svg = $svg.attr('class', imgClass+' replaced-svg');
        }
        $svg = $svg.removeAttr('xmlns:a');
        $img.replaceWith($svg);

        if($img.hasClass('map-animate'))
            $.myScrollAnimate();
    }, 'xml');
}
$.resizing = function(element){
    $(window).resize(function() {
        var width = element.outerWidth();
        element.css({
            "height": width * eval(element.attr('data-resizing'))
        });
        if(element.hasClass('panel')){
            element.parent().find('.panel').css({
                "height": width * eval(element.attr('data-resizing'))
            });
        }
    }).resize();
}
$.scrollAnimate = function(){
    if($('.wow').length){
        wow = new WOW({
            boxClass: 'wow',
            animateClass: 'animated',
            offset: 15,
            mobile: true,
            live: true
        });
        wow.init();
    }
}

$.showMessage = function(message){
    var content = $('<div>', {
        class: 'message-modal',
        text: message
    });

    $('body').append(content);

    setTimeout(function(){
        content.remove();
    }, 8000);
}
$.init = function(){
    $('.to-svg').each(function(index, el) {
        $.imgToSvg($(this));
    });

    $('.js-resizing').each(function(index, el) {
        $.resizing($(this));
    });

    $(".fancybox").each(function(index, el) {
        $(this).fancybox({
            closeEffect : 'elastic',
            openEffect  : 'elastic',
            padding: 6,
            helpers : {
                title: {
                    position: 'bottom',
                    type : 'inside'
                }
            }
        });
    });
    
    $('.brochure-js').each(function(index, el) {
        $.addBrochure($(this));
    });
    $.scrollAnimate();
     $(document).on('keypress', '.js-input-number', function(event){
        if(!((event.which <= 57 && event.which >= 48) || event.which == 8))
            event.preventDefault();
    });

    $('#contact').on('submit', function(event) {
        event.preventDefault();

        var form = $(this),
            url = $(this).attr('action'),
            data = $(this).serialize();

        $.ajax({
            url: url,
            type: 'POST',
            dataType: 'json',
            data: data,
        })
        .done(function(data) {
            $.showMessage('Su mensaje fue enviado con exito. Muy pronto uno de nuestros agentes de ventas se comunicara con usted.');
            form.find('input, textarea').val('').html('');
        })
        .fail(function() {
            $.showMessage('Ocurrio un error en el envio. Por favor intente mas tarde.');
        })
        .always(function() {
        });
    });
}

