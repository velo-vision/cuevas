var styles = [
  {
    "featureType": "administrative.country",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#004080"
      }
    ]
  },
  {
    "featureType": "administrative.locality",
    "stylers": [
      {
        "color": "#378842"
      }
    ]
  },
  {
    "featureType": "landscape",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "saturation": -100
      }
    ]
  },
  {
    "featureType": "landscape",
    "elementType": "geometry.stroke",
    "stylers": [
      {
        "color": "#dae5ea"
      },
      {
        "saturation": 5
      },
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "landscape.man_made",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#dae5ea"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "labels",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#009dfd"
      }
    ]
  }
];

$(document).ready(function() {

  function initialize() {


    var gmarkers = [];
    var map = null;
    var infowindow = null;


      var mapOptions = {
        center: new google.maps.LatLng(19.520483, -99.2333481),
        zoom: 16,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        mapTypeControl: false,
        zoomControl: true,
        scaleControl: false,
        styles: styles,
        scrollwheel: false,
        navigationControl: false,
        mapTypeControl: false,
        draggable: false
      };


      map = new google.maps.Map(document.getElementById("mack-map"), mapOptions);

      google.maps.event.addListener(map, 'click', function() {
        infowindow.close();
      });

      var locations = [
        ['Grupo Cuevas', 19.520483, -99.2333481]
       ];

      /*infowindow = new google.maps.InfoWindow({
        size: new google.maps.Size(150,50)
      });*/

      function setMarkers(locations) {
        for (var i = 0; i < locations.length; i++) {
          var location = locations[i];
          var myLatLng = new google.maps.LatLng(location[1], location[2]);
          var marker = new google.maps.Marker({
              position: myLatLng,
              animation: google.maps.Animation.DROP,
              map: map,
              title: location[0],
              icon: "images/mapa/cuevas.png",
              title: 'Grupo Cuevas'
          });

          // Standard markers - if not using infobox
          google.maps.event.addListener(marker, "click", function () {
          map.setCenter(marker.getPosition());
          infowindow.setContent(this.html);
          infowindow.open(map, this);
          });
          gmarkers.push(marker);
        }
      }

      // Add the markers
      setMarkers(locations);

  }

  // add window listener for GMaps
  google.maps.event.addDomListener(window, 'load', initialize);

});
