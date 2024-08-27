var google;

    function initMap() {
        var annaba = {lat: 36.902233, lng: 7.755654}; 
        var mapOptions = {
            zoom: 13,
            center: annaba,
            scrollwheel: false,
            styles: [
                {
                    "featureType": "administrative.country",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "visibility": "simplified"
                        },
                        {
                            "hue": "#ff0000"
                        }
                    ]
                }
            ]
        };

        var mapElement = document.getElementById('map');
        var map = new google.maps.Map(mapElement, mapOptions);

        var marker = new google.maps.Marker({
            position: annaba,
            map: map,
            icon: 'images/loc.png'
        });
    }

    google.maps.event.addDomListener(window, 'load', initMap);