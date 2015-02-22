<html>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/mydesign.css">

<script
src="http://maps.googleapis.com/maps/api/js?key=AIzaSyC067-zUkqufHA8QUmAZrZADzIWrAben8w&sensor=false">
</script>

<script>
var map;
var myCenter=new google.maps.LatLng(34.001919600000000000,71.485220300000040000);

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:14,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

  map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

  google.maps.event.addListener(map, 'click', function(event) {
    placeMarker(event.latLng);
  });
}

function placeMarker(location) {
  var marker = new google.maps.Marker({
    position: location,
    map: map,
  });


  var infowindow = new google.maps.InfoWindow({
    content: 'Latitude: ' + location.lat() + '<br>Longitude: ' + location.lng()
  });
  infowindow.open(map,marker);
  window.location = "distance_cal.php?Latitude=" + location.lat() + "&Longitude="+ location.lng();
}

google.maps.event.addDomListener(window, 'load', initialize);

</script>

<body class="body2">

	<div class="row nav_index" >
		
		<div class="col-sm-2 col-sm-push-1  logo">
			<img src="<?php echo base_url() ?>upload/1.jpg" style="position:absolute; top:10px; margin-left: 20px; height:130px; width:130px;">
		</div>

		<div class="col-sm-2 col-sm-push-2">
			<span><p><hr  style="background:white; border:0; height:3px; width:80%" /></p></span>
			<p><a href="<?php echo base_url() ?>home/index" class="nav_index">HOME</a></p>
		</div>

		<div class="col-sm-2 col-sm-push-2">
			<p><hr  style="background:white; border:0; height:3px; width:80%" /></p>
			<p><a href="<?php echo base_url() ?>home/chatroom" class="nav_index">CHAT ROOM</a></p>
		</div>

		<div class="col-sm-2 col-sm-push-2">
			<p><hr  style="background:white; border:0; height:3px; width:80%" /></p>
			<p><a href="<?php echo base_url() ?>home/contactus" class="nav_index">CONTACT US</a></p>
		</div>

		

	</div>