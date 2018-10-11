$(function() {

	function cotizaServicio(flightPlanCoordinates, directionsService) {
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

});