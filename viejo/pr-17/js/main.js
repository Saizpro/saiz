$(document).ready(function(){
		 $('.verdilito').show();
        $(window).scroll(function(){
          if($(this).scrollTop()>75){
             if ($('.verdilito').is(":visible")){
				 $('.verdilito').fadeOut();
				 $('#home p').fadeOut();
			 }
          }else{
            if (!$('.verdilito').is(":visible")){
				$('.verdilito').fadeIn();
				 $('#home p').fadeIn();
			}
          }	

        });					   
						   
<!--Efecto parallax-->
$('#think').parallax({imageSrc: 'images/colours.jpg'});
$('#create').parallax({imageSrc: 'images/matrix2.jpg'});
$('#deliver').parallax({imageSrc: 'images/retouching1.jpg'});
$('#matrix').parallax({imageSrc: 'images/matrix4.jpg'});

<!--Galería de imágenes-->
$('#container').masonry({
  columnWidth: 1,
  itemSelector: '.item'
});						   
						   
						   						   
$('#form1').validator().on('submit', function (e) {
  if (e.isDefaultPrevented()) {
  	//alert("No Enviado");
    // handle the invalid form...
  } else {
  //alert("Enviado");
  $.ajax({
           type: "POST",
           url: "enviar-formulario.php",
           data: $("#form1").serialize(), // serializes the form's elements.
           success: function(data)
           {
               $("#form1").text(data); // show response from the php script.
			   $("#form1").css("display", "none");
			   $("#form1").fadeIn(3000);
           }
         });
		 
    return false; // avoid to execute the actual submit of the form.
    // everything looks good!
  }
})
})

<!--Mapa de google-->
var map;
var brooklyn = new google.maps.LatLng(41.641035, -0.896772);

var MY_MAPTYPE_ID = 'custom_style';

function initialize() {

  var featureOpts = [
    {
      stylers: [
        { hue: '#9dce00' },
        { visibility: 'on' },
        { gamma: 0.5 },
        { weight: 0.5 },
		{ "saturation": -15 }
      ]
    },
    {
      elementType: 'all',
      stylers: [
        { visibility: 'on' }
      ]
    },
    {
      featureType: 'water',
      stylers: [
        { color: '#890000' }
      ]
    }
  ];

  var mapOptions = {
    zoom: 19,
	scrollwheel: false,
    center: brooklyn,
    mapTypeControlOptions: {
      mapTypeIds: [google.maps.MapTypeId.ROADMAP, MY_MAPTYPE_ID]
    },
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

