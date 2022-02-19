var script = document.createElement('script');
script.setAttribute('id', 'gmaps');
script.type = 'text/javascript';
script.src = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyB2rUJVOT2fDwAQJU2oYFERU-cCUHnGKTY&v=3.exp&' + 'callback=initialize';
document.body.appendChild(script);

function initialize() {
    var map;
    var bounds = new google.maps.LatLngBounds();
    var mapOptions = {
        mapTypeId: 'roadmap',
        center: new google.maps.LatLng(-100, 0),
        scrollwheel: false,
    };

    // Display a map on the page
    map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
    map.setTilt(45);

    // Multiple Markers
    var markers = [

    ];


    $('.address').each(function () {
        var temp = ['Ahuja Mahindra', $(this).data('lat'), $(this).data('long'), $(this).find('.the-address').html()];
        markers.push(temp);
    })


    // Display multiple markers on a map
    var infoWindow = new google.maps.InfoWindow(), marker, i;

    // Loop through our array of markers & place each one on the map  
    for (i = 0; i < markers.length; i++) {
        var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
        bounds.extend(position);
        marker = new google.maps.Marker({
            position: position,
            map: map,
            title: markers[i][0]
        });

        url = "http://maps.google.com?saddr=My+Location&daddr=" + markers[i][1] + "," + markers[i][2];
        $('.address').eq(i).find('.directions').attr('href', url).attr('target', '_blank');

        $(document).delegate(".map.h6", "click", function (e) {
            var data = markers[$(this).closest('.address').index()]; /* returns array[ 53.21, 6.56, 4]*/
            var laLatLng = new google.maps.LatLng(data[1], data[2]);
            map.panTo(laLatLng);
            $('html,body').animate({ scrollTop: 0 }, 1000);
            $("#showall").show(100);
        });

        $(document).delegate("#showall", "click", function (e) {
            $(this).hide(100);
            infoWindow.close();
            map.fitBounds(bounds);
        });

        // Allow each marker to have an info window    
        google.maps.event.addListener(marker, 'click', (function (marker, i) {
            return function () {
                infoWindow.setContent('<div id="customMarker"><h4>' + markers[i][0] + '</h4>' + markers[i][3] + '</div>');
                infoWindow.open(map, marker);
            }
        })(marker, i));

        map.fitBounds(bounds);
    }

    // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
    var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function (event) {
        google.maps.event.removeListener(boundsListener);
        //if ($(window).width() > 992)
            map.setZoom(13);
    });
    google.maps.event.addListener(infoWindow, 'closeclick', function () {
        map.fitBounds(bounds);
        google.maps.event.removeListener(boundsListener);
    });
}
