
<?php
include("includes/header.php"); 
include("includes/frontimg.php"); 
include("includes/nav.php");
include("image.php"); 
?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script type="text/javascript" src="js/jquery.1.11.1.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/SmoothScroll.js"></script> 
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script> 
<script type="text/javascript" src="js/jquery.isotope.js"></script> 
<script type="text/javascript" src="js/jquery.parallax.js"></script> 
<script type="text/javascript" src="js/main.js"></script>
<div id="form">

<div class="container">
    <div class="row">
        <div class="col-md-3">
        
        </div>
        <div class="col-md-6">
            <br>
            <br>
        <center><h2><b>Feedback PORTAL</b></h2></center>
        <br><hr><br>
        <form action="functions.php" method="post" role="form" id="login-form" enctype="multipart/form-data">  
            <div class="row">
                <div class="col-md-6 col-xl-9">
                    <div class="form-group">
                        <label for="name" class="sr-only">Name</label>
                        <input type="text" name="fname" class="form-control" placeholder="First Name" required>
                    </div>
                </div> 
                <div class="col-md-6 col-xl-9">
                    <div class="form-group">
                        <label for="name" class="sr-only">Name</label>
                        <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
                    </div>
                </div>
            </div>
                <div class="form-group">
                    <label for="mobile" class="sr-only">Mobile</label>
                    <input type="text" name="mobile" class="form-control" placeholder="Enter Mobile Number" required>
                </div>
                <div class="form-group">
                    <label for="aadhaar" class="sr-only">Aadhaar</label>
                    <input type="text" name="aadhar" class="form-control" placeholder="Enter Aadhaar Number" required>
                </div>
                <div class="form-group">
                    <label for="aadhaar" class="sr-only">E-mail</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
                </div>
                <div class="form-group">
                    <label for="location" class="sr-only">Location</label>
                    <input type="text" name="location" class="form-control" placeholder="Enter Location" required>
                </div>
                <div class="form-group">
                    <label for="description" class="sr-only">Description</label>
                    <input type="text" name="description" class="form-control" placeholder="Enter Description" required>
                </div>
                <div class="form-group">
                    <input type="file" class="form-control" id="fAadhar" accept="image/*" name="file">     
            </div>
                <button type="submit" name="submit" id="btn-login" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col-md-3">
            
        </div>
        </div>
    <br> <br> <br> <br> <br> <br>
    </div>

    <?php
    include("includes/social.php");
    include("includes/footer.php");
?>

