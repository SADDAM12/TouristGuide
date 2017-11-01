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

    $flag=0;
if(isset($_POST))
{
    $name=$_POST['place_name'];
    $cat=$_POST['place_category'];
    $loc=$_POST['place_location'];
    $des=$_POST['place_description'];
    $tran= $_POST['place_transport'];
    $cost=$_POST['place_cost'];
    $hotel=$_POST['place_hotel'];
    $agency = $_POST['place_agency'];
    $long=$_POST['place_longitude'];
    $longNS=$_POST['place_longitude_NS'];
    $lati = $_POST['place_latitude'];
    $latiEW = $_POST['place_latitude_EW'];
    $emergency=$_POST['place_emergency'];
    $web=$_POST['place_website'];

    $sql= "INSERT INTO place_info (place_name, place_category,place_location,place_description,place_transport, travelling_cost,hotel_info,
    tourism_agency,place_longitude,place_longitude_NS,place_latitude,place_latitude_EW,additional_info,emergency_number) 
	VALUES('$name','$cat','$loc','$des','$tran','$cost','$hotel','$agency','$long','$longNS', '$lati','$latiEW','$web', '$emergency')";

    if ($con->query($sql) === false)
    $flag=1;
}
else
{
	$flag=1;
}

// image file upload processing start
if($flag==1)
{
  echo "Failed!! Try Again";
  die();
}

$sql= "SELECT place_name FROM place_info";
$result=$con->query($sql);
$newid = $result->num_rows;
$newid--;

if(isset($_FILES['image1']))
{
      $errors= array();
      $file_name = $_FILES['image1']['name'];
      $file_size =$_FILES['image1']['size'];
      $file_tmp =$_FILES['image1']['tmp_name'];
      $file_type=$_FILES['image1']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image1']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         $target_path = $_SERVER['DOCUMENT_ROOT'] . "/touristguide/uploads/";
         $newname = "image-".$newid."-1.".$file_ext; 
         move_uploaded_file( $_FILES['image1']['tmp_name'], $target_path.$newname);
      }
      else
         $flag=1;
      
}
else
{
    $flag=1;
}
if(isset($_FILES['image2']))
{
      $errors= array();
      $file_name = $_FILES['image2']['name'];
      $file_size =$_FILES['image2']['size'];
      $file_tmp =$_FILES['image2']['tmp_name'];
      $file_type=$_FILES['image2']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image2']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         $target_path = $_SERVER['DOCUMENT_ROOT'] . "/touristguide/uploads/";
         $newname = "image-".$newid."-2.".$file_ext; 
         move_uploaded_file( $_FILES['image2']['tmp_name'], $target_path.$newname);
      }
      else
         $flag=1;
      
}
else
{
    $flag=1;
}
if(isset($_FILES['image3']))
{
      $errors= array();
      $file_name = $_FILES['image3']['name'];
      $file_size =$_FILES['image3']['size'];
      $file_tmp =$_FILES['image3']['tmp_name'];
      $file_type=$_FILES['image3']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image3']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         $target_path = $_SERVER['DOCUMENT_ROOT'] . "/touristguide/uploads/";
         $newname = "image-".$newid."-3.".$file_ext; 
         move_uploaded_file( $_FILES['image3']['tmp_name'], $target_path.$newname);
      }
      else
         $flag=1;
      
}
else
{
    $flag=1;
}

if($flag==1)
    echo "Something Error :( \nPlease Try Again";
else
    echo "New Place added successfully";

?>