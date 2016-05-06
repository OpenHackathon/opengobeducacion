<style type="text/css">
  #map{
    height: 500px;
    width: 100%;
  }
</style>
<div id="map"></div>


    <script>

function initMap() {
  var myLatLng = {lat: -28.14889, lng: -58.0869571};

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 7.5,
    center: myLatLng
  });


  


  


  <?php 

  if(count($establecimientos)>0){
    foreach ($establecimientos as $esta) {
      
      $nombre = str_replace("'", '', $esta->nombre);
      $nombre = str_replace("?", '', $nombre);
      $nombre = str_replace('"', '', $nombre);
      
      if($esta->latitud != 'NULL'){
  ?>
  
  var marker = new google.maps.Marker({
    position: { lat: <?php echo $esta->latitud.', lng: '.$esta->longitud; ?>},
    map: map,
    title: '<?php echo $nombre ?>',
  });
  
  <?php
    }
      
    }

  }
  
  ?>
  
}

    </script>
   
