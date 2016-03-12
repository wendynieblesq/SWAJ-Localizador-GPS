window.onload = function(){
var myCenter=new google.maps.LatLng(parseFloat(lat),parseFloat(lon));
var marker;
var map;
var apiKey = 'AIzaSyDiej_4UQcx04uFtHiCUEwvayOa8ERBTs0';
var rute = [];
var polilinea = new google.maps.Polyline({ path: rute,   strokeColor: '#c0392b',  strokeOpacity: 1.0,	 strokeWeight: 5	});
var image = {
    url: 'http://icons.iconarchive.com/icons/elegantthemes/beautiful-flat/32/taxi-icon.png',
    scaledSize: new google.maps.Size(32, 32),
    origin: new google.maps.Point(0, 0),
    anchor: new google.maps.Point(16, 16)
     }

var drawingManager;
var placeIdArray = [];
var polylines = [];
var snappedCoordinates = [];


function initialize() {
var mapProp = {
  center:myCenter,
  zoom:17,
  styles: [{"featureType":"water","elementType":"all","stylers":[{"hue":"#7fc8ed"},{"saturation":55},{"lightness":-6},{"visibility":"on"}]},{"featureType":"water","elementType":"labels","stylers":[{"hue":"#7fc8ed"},{"saturation":55},{"lightness":-6},{"visibility":"off"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"hue":"#83cead"},{"saturation":1},{"lightness":-15},{"visibility":"on"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"hue":"#f3f4f4"},{"saturation":-84},{"lightness":59},{"visibility":"on"}]},{"featureType":"landscape","elementType":"labels","stylers":[{"hue":"#ffffff"},{"saturation":-100},{"lightness":100},{"visibility":"off"}]},{"featureType":"road","elementType":"geometry","stylers":[{"hue":"#ffffff"},{"saturation":-100},{"lightness":100},{"visibility":"on"}]},{"featureType":"road","elementType":"labels","stylers":[{"hue":"#bbbbbb"},{"saturation":-100},{"lightness":26},{"visibility":"on"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"hue":"#ffcc00"},{"saturation":100},{"lightness":-35},{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"hue":"#ffcc00"},{"saturation":100},{"lightness":-22},{"visibility":"on"}]},{"featureType":"poi.school","elementType":"all","stylers":[{"hue":"#d7e4e4"},{"saturation":-60},{"lightness":23},{"visibility":"on"}]}]
  };
    map=new google.maps.Map(document.getElementById("map1"),mapProp);
    polilinea.setMap(map);
    setInterval(function(){
        SetMarker();
        
        }, 10000);

};

function SetMarker(){

    var myCentr=new google.maps.LatLng(parseFloat(lat),parseFloat(lon));
    marker=new google.maps.Marker({
        position:myCentr,
        icon:image
      });

    marker.setMap(map);
    var contentString = "Latitud: "  + lat +"</br>"+ "Longitud: " +  lon +"</br>"+ "Fecha: " + fecha;

    var infowindow = new google.maps.InfoWindow({
        content: contentString
    });
    
//    marker.addListener(map, 'click', function(event) {
//        var myLatLng = event.latLng;
//        var lat = myLatLng.lat();
//        var lng = myLatLng.lng();
//        var myCentrInfo=new google.maps.LatLng(parseFloat(lat),parseFloat(lng));
//        infowindow.close();
//        infowindow.open(map, myCentrInfo);
//        
//    });
    
    marker.addListener('click', function(event) {
        infowindow.close(map, marker);
        infowindow.open(map, marker);
    });
    
	rute.push(myCentr); 
	polilinea.setPath(rute);
    polilinea.setMap(map);
    map.panTo(myCentr);
    
    // ---SMOOTH---
    var path = polilinea.getPath();
    polylines.push(polilinea);
    placeIdArray = [];
    var pathValues = [];
    for (var i = 0; i < path.getLength(); i++) {
    pathValues.push(path.getAt(i).toUrlValue());
  }

  $.get('https://roads.googleapis.com/v1/snapToRoads', {
    interpolate: true,
    key: apiKey,
    path: pathValues.join('|')
  }, function(data) {
    processSnapToRoadResponse(data);
    drawSnappedPolyline();
  });
}

// Store snapped polyline returned by the snap-to-road method.
function processSnapToRoadResponse(data) {
  snappedCoordinates = [];
  placeIdArray = [];
  for (var i = 0; i < data.snappedPoints.length; i++) {
    var latlng = new google.maps.LatLng(
        data.snappedPoints[i].location.latitude,
        data.snappedPoints[i].location.longitude);
    snappedCoordinates.push(latlng);
    placeIdArray.push(data.snappedPoints[i].placeId);
  }
}

// Draws the snapped polyline (after processing snap-to-road response).
function drawSnappedPolyline() {
  var snappedPolyline = new google.maps.Polyline({
    path: snappedCoordinates,
    strokeColor: 'black',
    strokeWeight: 3
  });

  snappedPolyline.setMap(map);
  polylines.push(snappedPolyline);
}




initialize();
}