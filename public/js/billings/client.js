
    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(getAddress);
        }
    }

    function getAddress(position) {
        getGoogleAddress(position.coords.latitude, position.coords.longitude)
    }

    function getGoogleAddress(latitude, longitude) {
        var geocoder = new google.maps.Geocoder;

        var latlng = {
            lat: parseFloat(latitude),
            lng: parseFloat(longitude)
        };

        geocoder.geocode({
            'location': latlng
        }, function(results, status) {
            if (status === google.maps.GeocoderStatus.OK) {
                if (results[0]) {
                    bindRecords(results[0]);


                }
            }
        });
    }

    function loadSearchAddress() {
        var input = document.getElementById('street');
        var options = {
            componentRestrictions: {country: 'mx'}
        };

        autocomplete = new google.maps.places.Autocomplete(input, options);
        autocomplete.addListener('place_changed', fillInAddress);
    }

    function fillInAddress() {
        var place = autocomplete.getPlace();
        var addressGeometry = place.geometry;
        var coords = addressGeometry.location;
        getGoogleAddress(coords.lat(), coords.lng())
        //centerPositionAndMarker(coords.lat(), coords.lng());
    }

    function bindRecords(results) {
        var street = results.address_components[1].long_name;
        var cp = results.address_components[6].long_name;
        var location = results.address_components[3].long_name;
        var colony = results.address_components[2].long_name;
        var city = results.address_components[5].long_name;

        $("#street").val(street);
        $("#cp").val(cp);
        $("#location").val(location);
        $("#colony").val(colony);
        $("#city").val(city);
    }

    function init() {
        $("#btnLocation").click(getLocation);
        loadSearchAddress();
    }
