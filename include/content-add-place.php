<h3>Want to Add a New Place?</h3>
<p>To add a new place in this website, please fill the following form with necessary information<br><br></p> 
<form role="form" name="place_info" method="post" action="action/action-add-place.php" enctype="multipart/form-data">
	<div class="form-group">
    <b> Place Name:<br></b>
	<input name="place_name" type="text" class="form-control" required >
	</div>
  
    <div class="form-group">
	<b> Place Category:</b>
    <select name="place_category" class="form-control" required>
    	<option value="ancient">Ancient</option>
    	<option value="entertainment">Entertaiment</option>
    	<option value="nature">Natural Beauty</option>
    	<option value="others">Others</option>
    </select>
    </div>
  
    <div class="form-group">
    <b> Place Location:</b>
    <select name="place_location" class="form-control" required>
    	<option value="dhaka">Dhaka</option>
    	<option value="rajshahi">Rajshahi</option>
    	<option value="chittagong">Chittagong</option>
    	<option value="khulna">Khulna</option>
    	<option value="sylhet">Sylhet</option>
    	<option value="borishal">Borishal</option>
    	<option value="Rangpur">Rangpur</option>
    </select>
    </div>
  
    <div class="form-group">
    <b>  Place Description:<br></b>
    <textarea name="place_description" class="form-control" required></textarea>
    </div>
  
    <div class="form-group">
    <b>  Transport Information:<br></b>
    <textarea name="place_transport" class="form-control"></textarea>
    </div>
  
    <div class="form-group">
    <b>  Estimated Cost:<br></b>
    <textarea name="place_cost" class="form-control"></textarea>
    </div>
  
    <div class="form-group">
    <b>  Nearby Hotel Information:<br></b>
    <textarea name="place_hotel" class="form-control"></textarea>
    </div>
     
    <div class="form-group">
    <b>  Tourism Agency:<br></b>
    <textarea name="place_agency" class="form-control"></textarea>
    </div>

    <div class="form-group">
    <b> Map Information (Coordinates):<br></b>
    <div class="col-sm-4">
        <input name="place_longitude" type="text" class="form-control" placeholder="Longitude">
    </div>
    <div class="col-sm-2">
        <select class="form-control" name="place_longitude_NS">
            <option value="N">North</option>
            <option value="S">South</option>
        </select>
    </div>
	<div class="col-sm-4">
        <input name="place_latitude" type="text" class="form-control" placeholder="Latitude">
    </div>
    <div class="col-sm-2">
        <select class="form-control" name="place_latitude_EW">
            <option value="E">East</option>
            <option value="W">West</option>
        </select>
    </div>
    </div>
  
    <div class="form-group">
    <b> <br><br>Emergency Numbers:<br></b>
    <textarea name="place_emergency" class="form-control"></textarea>
    </div>
    
    <div class="form-group">
    <b> Additional info(Website link):<br></b>
    <input name="place_website" type="text" class="form-control" >
    </div>

    <div class="form-group">
    <b> Upload Image:</b><br><br>
    <input type="file" name="image1" /><br>
    <input type="file" name="image2" /><br>
    <input type="file" name="image3" />
    </div>

     <button type="submit" class="btn btn-info">Submit Information</button>
</form>
