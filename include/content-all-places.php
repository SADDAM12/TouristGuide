<h3>Places<br></h3>
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

    $sql= "select place_id,place_name from place_info";
    $result=$con->query($sql);
    if($result->num_rows > 0)
    {
        $i=1;
        while($row=$result->fetch_assoc())
        {
            if($row["place_id"]==0)
                continue;
            echo '<h4><br>'.$i++.' '.'<a href="http://localhost/touristguide/place-detail.php?id='.$row["place_id"].'">' .$row["place_name"]. '</a>';
        }
        
    }
?>

