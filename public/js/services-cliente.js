var map;
var flightPlanCoordinates = [];
var flightPath;
var markers = [];
var directionsService;

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(moveToLocation);
    }
}

function moveToLocation(position){
    var center = new google.maps.LatLng(position.coords.latitude,
        position.coords.longitude);

    map.panTo(center);
}

function loadSearchBar() {
    var input = document.getElementById('searchTextField');
    var options = {
        componentRestrictions: {country: 'mx'}
    };

    autocomplete = new google.maps.places.Autocomplete(input, options);
    autocomplete.addListener('place_changed', fillInAddress);
}

function fillInAddress() {
    // Get the place details from the autocomplete object.
    var place = autocomplete.getPlace();

    // Get each component of the address from the place details
    // and fill the corresponding field on the form.
    var addressGeometry = place.geometry;
    var coords = addressGeometry.location;
    centerPositionAndMarker(coords.lat(), coords.lng());
    document.getElementById('searchTextField').value = "";
}

function centerPositionAndMarker(lat, lon) {
    var center = new google.maps.LatLng(lat,
        lon);

    map.panTo(center);
}

function addMarkerOnClick() {
    var cntLatLng = {lat: map.center.lat(), lng: map.center.lng()};
    var marker = new google.maps.Marker({
        position: cntLatLng,
        map: map,
        icon: "http://localhost:8080/dauster/public/images/mapa-marcador.png"
    });

    markers.push(marker);

    flightPlanCoordinates.push(cntLatLng);

    if (flightPath) {
        flightPath.setMap(null);
        flightPath = null;

    }

    flightPath = new google.maps.Polyline({
        path: flightPlanCoordinates,
        geodesic: true,
        strokeColor: 'white',
        strokeOpacity: 1.0,
        strokeWeight: 4
    });

    flightPath.setMap(map);

}

function limpiarMapa() {
    if (flightPath) {
        flightPath.setMap(null);
        flightPlanCoordinates = [];

        markers.forEach(function(marker) {
            marker.setMap(null);
        });

        markers = [];
    }
}

function cotizaServicio() {
    if (flightPlanCoordinates) {
        var iTotal = flightPlanCoordinates.length;
        iTotal--;

        if (iTotal > 0) {

            var coorStart = new google.maps.LatLng(flightPlanCoordinates[0].lat,
                flightPlanCoordinates[0].lng);

            var coorEnd = new google.maps.LatLng(flightPlanCoordinates[iTotal].lat,
                flightPlanCoordinates[iTotal].lng);

            var i = 0;
            var waypoints = [];

            flightPlanCoordinates.forEach(function(marker) {
                if (i == 0 || i == iTotal) {
                    var waypoint = {
                        location: new google.maps.LatLng(flightPlanCoordinates[i].lat,
                            flightPlanCoordinates[i].lng),
                        stopover: false
                    };

                    waypoints.push(waypoint);
                }

                i++;
            });

            var request = {
                origin: coorStart,
                destination: coorEnd,
                waypoints: [waypoints[0]],
                travelMode: 'DRIVING'
            };

            directionsService.route(request, function(response, status) {
                if (status == 'OK') {
                    if (response.routes.length) {
                        var dis = response.routes[0].legs[0].distance.value;
                        var tim = response.routes[0].legs[0].duration.value;
                        var sCoordins = JSON.stringify(flightPlanCoordinates);

                        $("#distance").val(dis);
                        $("#time").val(tim);
                        $("#coordinates").val(sCoordins);

                        $("#frmCotizaServicio").submit();

                    }
                }
            });
        }
    }
}

function load_page() {
    $("#btnAgreagarPunto").click(addMarkerOnClick);
    $("#btnLimpiar").click(limpiarMapa);
    $("#btnCotizar").click(cotizaServicio);
}

function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: -34.397, lng: 150.644},
        zoom: 20,
        styles: [
            {
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#1d2c4d"
                    }
                ]
            },
            {
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#8ec3b9"
                    }
                ]
            },
            {
                "elementType": "labels.text.stroke",
                "stylers": [
                    {
                        "color": "#1a3646"
                    }
                ]
            },
            {
                "featureType": "administrative.country",
                "elementType": "geometry.stroke",
                "stylers": [
                    {
                        "color": "#4b6878"
                    }
                ]
            },
            {
                "featureType": "administrative.land_parcel",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#64779e"
                    }
                ]
            },
            {
                "featureType": "administrative.province",
                "elementType": "geometry.stroke",
                "stylers": [
                    {
                        "color": "#4b6878"
                    }
                ]
            },
            {
                "featureType": "landscape.man_made",
                "elementType": "geometry.stroke",
                "stylers": [
                    {
                        "color": "#334e87"
                    }
                ]
            },
            {
                "featureType": "landscape.natural",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#023e58"
                    }
                ]
            },
            {
                "featureType": "poi",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#283d6a"
                    }
                ]
            },
            {
                "featureType": "poi",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#6f9ba5"
                    }
                ]
            },
            {
                "featureType": "poi",
                "elementType": "labels.text.stroke",
                "stylers": [
                    {
                        "color": "#1d2c4d"
                    }
                ]
            },
            {
                "featureType": "poi.park",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "color": "#023e58"
                    }
                ]
            },
            {
                "featureType": "poi.park",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#3C7680"
                    }
                ]
            },
            {
                "featureType": "road",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#304a7d"
                    }
                ]
            },
            {
                "featureType": "road",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#98a5be"
                    }
                ]
            },
            {
                "featureType": "road",
                "elementType": "labels.text.stroke",
                "stylers": [
                    {
                        "color": "#1d2c4d"
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#2c6675"
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "geometry.stroke",
                "stylers": [
                    {
                        "color": "#255763"
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#b0d5ce"
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "labels.text.stroke",
                "stylers": [
                    {
                        "color": "#023e58"
                    }
                ]
            },
            {
                "featureType": "transit",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#98a5be"
                    }
                ]
            },
            {
                "featureType": "transit",
                "elementType": "labels.text.stroke",
                "stylers": [
                    {
                        "color": "#1d2c4d"
                    }
                ]
            },
            {
                "featureType": "transit.line",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "color": "#283d6a"
                    }
                ]
            },
            {
                "featureType": "transit.station",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#3a4762"
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#0e1626"
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#4e6d70"
                    }
                ]
            }
        ]
    });

    setTimeout(function() {
        $("#map").addClass("map")
        getLocation();
        loadSearchBar();
        directionsService = new google.maps.DirectionsService;
    }, 5);
}

$(document).ready(load_page);
