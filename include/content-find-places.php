<pre>Find place by name:
<form method="get" action="find-places.php">
	<input type="text" name="place">
	<button type="submit">Search</button>
</form></pre>
<pre>Find place by location:
<form method="get" action="find-places.php">
	<input type="text" name="location">
	<button type="submit">Search</button>
</form>
</pre>
<?php
if(isset($_GET['place']))
{
	$place=$_GET['place'];

    $host='localhost';
    $username='root';
    $pass= '';
    $db='touristguide';
    
    $con = new mysqli($host,$username,$pass,$db);
    if($con->connect_error)
    {
        die("connection error:".$con->connect_error);
    }
    $sql= "select place_id,place_name from place_info where place_name LIKE '%".$place."%'";
    $result=$con->query($sql);
    echo "<br><h3>Places<br></h3>";
    if($result-> num_rows > 0)
    {
        $i=1;
        while($row=$result->fetch_assoc())
        {
            if($row["place_id"]==0)
                continue;
            echo '<h4><br>'.$i++.' '.'<a href="http://localhost/touristguide/place-detail.php?id='.$row["place_id"].'">' .$row["place_name"]. '</a>';
        }
        
    }
    else
    	echo "No results found";
}

if(isset($_GET['location']))
{
	$location=$_GET['location'];

    $host='localhost';
    $username='root';
    $pass= '';
    $db='touristguide';
    
    $con = new mysqli($host,$username,$pass,$db);
    if($con->connect_error)
    {
        die("connection error:".$con->connect_error);
    }
    $sql= "select place_id,place_name,place_location from place_info where place_location LIKE '%".$location."%'";
    $result=$con->query($sql);
    echo "<br><h3>Places<br></h3>";
    if($result-> num_rows > 0)
    {
        $i=1;
        while($row=$result->fetch_assoc())
        {
            if($row["place_id"]==0)
                continue;
            echo '<h4><br>'.$i++.' '.'<a href="http://localhost/touristguide/place-detail.php?id='.$row["place_id"].'">' .$row["place_name"]. '</a>';
        }
        
    }
    else
    	echo "No results found";
}
?>