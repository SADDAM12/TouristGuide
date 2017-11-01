<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
var myCenter=new google.maps.LatLng(23.508742,89.120850);

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
  content:"Hello World!"
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


<body>
<div id="googleMap" style="width:500px;height:380px;"></div>
</body>

<! End of google map >

<form action="action/img-upload.php" method="POST" enctype="multipart/form-data">  
         <input name="place_photo" type="text" >
         <input type="file" name="image1" />
         <input type="file" name="image2" />
         <input type="file" name="image3" />
         <input type="submit"/>
</form>


<! End of file upload >


<script language="JavaScript1.1">
<!--

/*
JavaScript Image slideshow:
By JavaScript Kit (www.javascriptkit.com)
Over 200+ free JavaScript here!
*/

var slideimages=new Array()
var slidelinks=new Array()
function slideshowimages(){
for (i=0;i<slideshowimages.arguments.length;i++){
slideimages[i]=new Image()
slideimages[i].src=slideshowimages.arguments[i]
}
}

function slideshowlinks(){
for (i=0;i<slideshowlinks.arguments.length;i++)
slidelinks[i]=slideshowlinks.arguments[i]
}

function gotoshow(){
if (!window.winslide||winslide.closed)
winslide=window.open(slidelinks[whichlink])
else
winslide.location=slidelinks[whichlink]
winslide.focus()
}

//-->
</script>

<a href="javascript:gotoshow()"><img src="uploads/image-1-1.jpg" name="slide" border=0 width=500 height=350></a>
<script>
<!--

//configure the paths of the images, plus corresponding target links
slideshowimages("uploads/image-1-1.jpg","uploads/image-1-2.jpg","uploads/image-1-3.jpg","uploads/image-1-1.jpg")
//slideshowlinks("http://food.epicurious.com/run/recipe/view?id=13285","http://food.epicurious.com/run/recipe/view?id=10092","http://food.epicurious.com/run/recipe/view?id=100975","http://food.epicurious.com/run/recipe/view?id=2876","http://food.epicurious.com/run/recipe/view?id=20010")

//configure the speed of the slideshow, in miliseconds
var slideshowspeed=4000

var whichlink=0
var whichimage=0
function slideit(){
if (!document.images)
return
document.images.slide.src=slideimages[whichimage].src
whichlink=whichimage
if (whichimage<slideimages.length-1)
whichimage++
else
whichimage=0
setTimeout("slideit()",slideshowspeed)
}
slideit()

//-->
</script>


<p align="center"><font face="arial" size="-2">This free script provided by</font><br>
<font face="arial, helvetica" size="-2"><a href="http://javascriptkit.com">JavaScript
Kit</a></font></p>


<! End of slide show >

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  </style>

  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="uploads/image-1-1.jpg" data-slide-to="0" class="active"></li>
      <li data-target="uploads/image-1-2.jpg" data-slide-to="1"></li>
      <li data-target="uploads/image-1-3.jpg" data-slide-to="2"></li>
      <li data-target="uploads/image-1-4.jpg" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="uploads/image-1-1.jpg" alt="Chania" width="460" height="345">
      </div>

      <div class="item">
        <img src="uploads/image-1-2.jpg" alt="Chania" width="460" height="345">
      </div>
    
      <div class="item">
        <img src="uploads/image-1-3.jpg" alt="Flower" width="460" height="345">
      </div>

      <div class="item">
        <img src="uploads/image-1-4.jpg" alt="Flower" width="460" height="345">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>