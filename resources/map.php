    <div id="map" class="local_serralheria"></div>
    <script>
      function initMap() {
        var myLatLng = {lat: -23.489758, lng: -47.480476};

        // Create a map object and specify the DOM element for display.
        var map = new google.maps.Map(document.getElementById('map'), {
          center: myLatLng,
          scrollwheel: false,
          zoom: 14
        });

        // Create a marker and set its position.
        var marker = new google.maps.Marker({
          map: map,
          position: myLatLng,
          title: 'Hello World!'
        });
      }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBIjfDiGskTO1qFbjZV53fJo0ThRwemJfA&callback=initMap"
        async defer></script>