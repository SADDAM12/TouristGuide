<?php
    $host='localhost';
    $username='root';
    $pass= '';
    $db='touristguide';
    
    $con = new mysqli($host,$username,$pass,$db);
    if($con->connect_error)
    {
        die("connection error:".$con->connect_error);
    }

    $sql= "select place_id,place_name,place_description,place_location,place_transport,travelling_cost,place_longitude,place_longitude_NS,hotel_info,tourism_agency,emergency_number,place_latitude,place_latitude_EW,additional_info from place_info where place_id=".$id;
    $result=$con->query($sql);

    $tmp = $result->fetch_assoc();
    $lng = $tmp['place_longitude'];
    if($tmp['place_longitude_NS']=="S")
        $lng= $lng* (-1);
    $ltd = $tmp['place_latitude'];
    if($tmp['place_latitude_EW']=="W")
        $ltd = $ltd * (-1);

?>

<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
<?php
echo 'var myCenter=new google.maps.LatLng('.$lng.','.$ltd.'); ';
?>
function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:10,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,
  });

marker.setMap(map);

var infowindow = new google.maps.InfoWindow({
<?php echo  'content: "'.$tmp['place_name'].'"'; ?>
  });
google.maps.event.addListener(marker, 'click', function() {
  infowindow.open(map,marker);
  });

// Zoom to 15 when clicking on marker
google.maps.event.addListener(marker,'click',function() {
  map.setZoom(15);
  map.setCenter(marker.getPosition());
  });



infowindow.open(map,marker);
}
google.maps.event.addDomListener(window, 'load', initialize);


</script>


<?php
    $sql= "select place_id,place_name,place_description,place_location,place_transport,travelling_cost,place_longitude,place_longitude_NS,hotel_info,tourism_agency,emergency_number,place_latitude,place_latitude_EW,additional_info from place_info where place_id=".$id;
    $result=$con->query($sql);
    if($result->num_rows > 0)
    {
        $i=1;
        while($row=$result->fetch_assoc())
        {
            echo "<h3>".$row['place_name']."</h3><br>";
            echo '<br><br><br><p>'.$row['place_description'].'</p><br>';

            echo "<h4>Location <br></h4>";
            echo '<p>'.$row['place_location'].'<br>';
            echo '<b>Coordinate:</b> '.$row['place_longitude'].$row['place_longitude_NS'].', '.$row['place_latitude'].$row['place_latitude_EW'].'</p><br>';

            echo "<h4>Transport System <br></h4>";
            echo '<p>'.$row['place_transport'].'</p><br>';

            echo "<h4>Travelling Cost<br></h4>";
            echo '<p>'.$row['travelling_cost'].'</p><br>';

            echo "<h4>Hotel Information<br></h4>";
            echo '<p>'.$row['hotel_info'].'</p><br>';

            echo "<h4>Tourism Agency<br></h4>";
            echo '<p>'.$row['tourism_agency'].'</p><br>';

            echo "<h4>Emergency Number(s)<br></h4>";
            echo '<p>'.$row['emergency_number'].'</p><br>';

            echo "<h4>More Information<br></h4>";
            echo '<p> Visit <a href="'.$row['additional_info'].'">Here</a></p><br>';
        }
        
    }
?>

<h3>Map</h3>
<div id="googleMap" style="width:500px;height:380px; align:center"></div>
<br>
<br>