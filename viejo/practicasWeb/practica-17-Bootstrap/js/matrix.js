// JavaScript Document
$(window).scroll(function() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
    }
});

//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

//***********************************Enviar Formulario de contacto************************
$(document).ready(function(){
						 
	
$('.fondo2').parallax({imageSrc: 'images/colours.jpg'});
$('.fondo3').parallax({imageSrc: 'images/matrix2.jpg'});
$('.fondo4').parallax({imageSrc: 'images/retouching1.jpg'});
$('.fondo5').parallax({imageSrc: 'images/matrix4.jpg'});
				
				
$('#mosaico').masonry({
  columnWidth: 1,
  itemSelector: '.item'
});
						   
$('#contacto').validator().on('submit', function (e) {
  if (e.isDefaultPrevented()) {
   //alert("no lo has rellenado");
  } else {
   //alert("Si esta bien rellenado");
    $.ajax({
           type: "POST",
           url: "enviar-formulario.php",
           data: $("#contacto").serialize(), // serializes the form's elements.
           success: function(data)
           {
               //alert(data); // show response from the php script.
			    $("#contacto").css ("display", "none"); //para ocultarlo y se aprecie el fadeIn
                $("#contacto").html("<strong>"+data+"<strong>");
		 	    $("#contacto").fadeIn(1000);
           }
         });

    return false; // avoid to execute the actual submit of the form.
  }
})
})
//*****************************************************Fin**********************************

//**************Mapa************************

var map;
var birmingham = new google.maps.LatLng(52.486428, -1.889381);

var MY_MAPTYPE_ID = 'custom_style';

function initialize() {
	
	

  var featureOpts = [
    {
      stylers: [
        { hue: '#333' },
		{ saturation: -100 },
  		{ lightness: 10 },
        { visibility: 'simplified' },
        { gamma: 0.5 },
        { weight: 0.5 }
      ]
    },
    {
      elementType: 'labels',
      stylers: [
        { visibility: 'on' }
      ]
    },
    {
      featureType: 'water',
      stylers: [
        { color: '#11f' }
      ]
    }
  ];

  var mapOptions = {
    zoom: 14,
    center: birmingham,
    mapTypeControlOptions: {
      mapTypeIds: [google.maps.MapTypeId.ROADMAP, MY_MAPTYPE_ID]
    },
	disableDefaultUI: true,
	mapTypeControl: false,
	scrollwheel: false, //para deshabilitar el scroll en el mapa.
    mapTypeId: MY_MAPTYPE_ID
  };

  map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);

  var styledMapOptions = {
    name: 'Custom Style'
  };

  var customMapType = new google.maps.StyledMapType(featureOpts, styledMapOptions);

  map.mapTypes.set(MY_MAPTYPE_ID, customMapType);
  
}

google.maps.event.addDomListener(window, 'load', initialize);




/***********************************parallax*********************/


