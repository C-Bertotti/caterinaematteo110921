/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!************************************!*\
  !*** ./resources/js/matrimonio.js ***!
  \************************************/
// Set the date we're counting down to
var countDownDate = new Date("Sep 11, 2021 10:30:00").getTime(); // Update the count down every 1 second

var x = setInterval(function () {
  // Get today's date and time
  var now = new Date().getTime(); // Find the distance between now and the count down date

  var distance = countDownDate - now; // Time calculations for days, hours, minutes and seconds

  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor(distance % (1000 * 60 * 60 * 24) / (1000 * 60 * 60));
  var minutes = Math.floor(distance % (1000 * 60 * 60) / (1000 * 60));
  var seconds = Math.floor(distance % (1000 * 60) / 1000); // Display the result in the element with id="demo"

  document.getElementById("date-d").innerHTML = days;
  document.getElementById("date-h").innerHTML = hours;
  document.getElementById("date-m").innerHTML = minutes; // If the count down is finished, write some text

  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "Marito e Moglie";
  }
}, 1000); //mappa

mapboxgl.accessToken = 'pk.eyJ1IjoiY2F0ZTQ5OTciLCJhIjoiY2twZnA5ejYxMHk0eTJubzhkM2psbmd2NiJ9.vMy_pKghDVjf47V-flmGEg';
var map = new mapboxgl.Map({
  container: 'map',
  style: 'mapbox://styles/cate4997/ckpfphzxm1gdg17pllyu17su6',
  center: [11.192884, 46.006067],
  zoom: 11.5
});
map.on('load', function () {
  //linea strada
  map.addSource('route', {
    'type': 'geojson',
    'data': {
      'type': 'Feature',
      'properties': {},
      'geometry': {
        'type': 'LineString',
        'coordinates': [[11.212763, 46.004608], [11.224030, 46.001299], [11.165597, 46.030164], [11.164792, 46.029281], [11.164787, 46.027970]]
      }
    }
  }); // Add an image to use as a custom marker

  map.loadImage('https://docs.mapbox.com/mapbox-gl-js/assets/custom_marker.png', function (error, image) {
    if (error) throw error;
    map.addImage('custom-marker', image); // Add a GeoJSON source with 2 points

    map.addSource('points', {
      'type': 'geojson',
      'data': {
        'type': 'FeatureCollection',
        'features': [{
          // feature for Mapbox DC
          'type': 'Feature',
          'geometry': {
            'type': 'Point',
            'coordinates': [[11.212763, 46.004608], [11.224030, 46.001299], [11.165597, 46.030164]]
          },
          'properties': {
            'title': 'Mapbox DC'
          }
        }, {
          // feature for Mapbox SF
          'type': 'Feature',
          'geometry': {
            'type': 'Point',
            'coordinates': [[11.212763, 46.004608], [11.224030, 46.001299], [11.165597, 46.030164]]
          },
          'properties': {
            'title': 'Mapbox SF'
          }
        }]
      }
    }); // Add a symbol layer

    map.addLayer({
      'id': 'points',
      'type': 'symbol',
      'source': 'points',
      'layout': {
        'icon-image': 'custom-marker',
        // get the title name from the source's "title" property
        'text-field': ['get', 'title'],
        'text-font': ['Open Sans Semibold', 'Arial Unicode MS Bold'],
        'text-offset': [0, 1.25],
        'text-anchor': 'top'
      }
    });
  });
  map.addLayer({
    'id': 'route',
    'type': 'line',
    'source': 'route',
    'layout': {
      'line-join': 'round',
      'line-cap': 'round'
    },
    'paint': {
      'line-color': '#F4A8A8',
      'line-width': 6
    }
  });
});
/******/ })()
;