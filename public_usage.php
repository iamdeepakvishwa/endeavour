<?php
include("includes/header.php");
include("includes/frontimg.php"); 
include("image.php"); 
include("includes/nav.php"); 
?>

<br>
<br>

<div class="row">
	<div class="col-md-12">
<div class="container">
	 <center> <h2>Public Usage</h2></center><br>
	  <hr>
		<form action="#" method="post" id="form">
			<div class="col-md-6">
			<select name="state" class="form-control">
			    <option selected>Select State</option>
				<option value="Andaman and Nicobar Islands" disabled>Andaman and Nicobar Islands</option>
				<option value="Andhra Pradesh" disabled>Andhra Pradesh</option>
				<option value="Arunachal Pradesh" disabled>Arunachal Pradesh</option>
				<option value="Assam" disabled>Assam</option>
				<option value="Bihar" disabled>Bihar</option>
				<option value="Chandigarh" disabled>Chandigarh</option>
				<option value="Chhattisgarh" disabled>Chhattisgarh</option>
				<option value="Dadra and Nagar Haveli" disabled>Dadra and Nagar Haveli</option>
				<option value="Daman and Diu" disabled>Daman and Diu</option>
				<option value="Delhi" disabled>Delhi</option>
				<option value="Goa" disabled>Goa</option>
				<option value="Gujarat" disabled>Gujarat</option>
				<option value="Haryana" disabled>Haryana</option>
				<option value="Himachal Pradesh" disabled>Himachal Pradesh</option>
				<option value="Jammu and Kashmir" disabled>Jammu and Kashmir</option>
				<option value="Jharkhand" disabled>Jharkhand</option>
				<option value="Karnataka" disabled>Karnataka</option>
				<option value="Kerala" disabled>Kerala</option>
				<option value="Lakshadweep" disabled>Lakshadweep</option>
				<option value="Madhya Pradesh" disabled>Madhya Pradesh</option>
				<option value="Maharashtra" disabled>Maharashtra</option>
				<option value="Manipur" disabled>Manipur</option>
				<option value="Meghalaya" disabled>Meghalaya</option>
				<option value="Mizoram" disabled>Mizoram</option>
				<option value="Nagaland" disabled>Nagaland</option>
				<option value="Orissa" disabled>Orissa</option>
				<option value="Pondicherry" disabled>Pondicherry</option>
				<option value="Punjab" disabled>Punjab</option>
				<option value="Rajasthan" disabled>Rajasthan</option>
				<option value="Sikkim" disabled>Sikkim</option>
				<option value="Tamil Nadu" disabled>Tamil Nadu</option>
				<option value="Tripura" disabled>Tripura</option>
				<option value="Uttaranchal" disabled>Uttaranchal</option>
				<option value="Uttar Pradesh">Uttar Pradesh</option>
				<option value="West Bengal" disabled>West Bengal</option>
		    </select>
		</div>
           <div class="col-md-6">
		    <select name="city" class="form-control">
			      <option selected>Select City</option>
			      <option value="agra" disabled>Agra</option>
			      <option value="ghaziabad">Ghaziabad</option>
			      <option value="lucknow" disabled>Lucknow</option>
			      <option value="allahabad" disabled>Allahabad</option>
			      <option value="varanasi" disabled>Varanasi</option>
			      <option value="bareilly" disabled>Bareilly</option>
			      <option value="kanpur" disabled>Kanpur</option>
			      <option value="gorakhpur" disabled>Gorakhpur</option>
		    </select><br>
		</div>
			<center><button type="submit" class="btn btn-primary">Submit</button></center>
 		</form>
 		<br><br>
 		<div class="row ">
 			<div class="col-md-3">
 				<div class="jumbotron">
					<div class="card" style="width:100%">
					    <img class="card-img-top" src="http://www.sohadacouri.com/wp-content/uploads/st/thumb-stock-illustration-profile-icon-male-avatar.jpg" alt="Card image" style="width:100%; height: auto;">
					    <div class="card-body" style="margin: auto;">
					    	<br><br>
					      	<center><a href="#" class="btn btn-primary">Get Location</a></center>
					    </div>
				 	</div> 				
				 </div>
 			</div>
 			<div class="col-md-3">
					<div class="jumbotron">
					<div class="card" style="width:100%">
					    <img class="card-img-top" src="http://www.sohadacouri.com/wp-content/uploads/st/thumb-stock-illustration-profile-icon-male-avatar.jpg" alt="Card image" style="width:100%; height: auto;">
					    <div class="card-body" style="margin-left: auto;">
					    	<br><br>
					      	<center><a href="#" class="btn btn-primary">Get Location</a></center>
					    </div>
				 	</div> 				
				 </div> 				
 			</div>
 			<div class="col-md-3">
					<div class="jumbotron">
					<div class="card" style="width:100%">
					    <img class="card-img-top" src="http://www.sohadacouri.com/wp-content/uploads/st/thumb-stock-illustration-profile-icon-male-avatar.jpg" alt="Card image" style="width:100%; height: auto;">
					    <div class="card-body" style="margin: auto;">
					      <br><br>
					      <center><a href="#" class="btn btn-primary">Get Location</a></center>
					    </div>
				 	</div> 				
				 </div>
 			</div>
 			<div class="col-md-3">
					<div class="jumbotron">
					<div class="card" style="width:100%">
					    <img class="card-img-top" src="http://www.sohadacouri.com/wp-content/uploads/st/thumb-stock-illustration-profile-icon-male-avatar.jpg" alt="Card image" style="width:100%; height: auto;">
					    <div class="card-body" style="margin: auto;">
					    	<br><br>
					      	<center><a href="#" class="btn btn-primary">Get Location</a></center>
				 	</div> 				
				 </div> 				
 			</div>
 		</div>
	</div>
</div>
	<?php
    include("includes/contactus.php");
    include("includes/footer.php");
    include("includes/script.php");
?>