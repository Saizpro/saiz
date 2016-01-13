// JavaScript Document
var map;
var brooklyn = new google.maps.LatLng(41.644262, -0.871378);

var MY_MAPTYPE_ID = 'custom_style';

function initialize() {

  var featureOpts = [
    {
      stylers: [
        { hue: '#88AA33' },
        { visibility: 'simplified' },
        { gamma: 0.5 },
        { weight: 0.5 },
		{ saturation:0 }
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
        { color: '#0000FF' }
      ]
    }
  ];

  var mapOptions = {
    zoom: 18,
    center: brooklyn,
    mapTypeControlOptions: {
      mapTypeIds: [google.maps.MapTypeId.ROADMAP, MY_MAPTYPE_ID]
    },
	disableDefaultUI: true,
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
