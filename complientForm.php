
<?php
include("includes/header.php"); 
include("includes/frontimg.php"); 
include("includes/nav.php");
include("image.php"); 
?>


<div id="form">

<div class="container">
    <div class="row">
        <div class="col-md-3">
        
        </div>
        <div class="col-md-6">
            <br>
            <br>
        <center><h2><b>Feedback PORTAL</b></h2></center>
        <br><br>
        <form action="functions/functions.php" method="post">  
            <div class="row">
                <div class="col-md-6 col-xl-9">
                    <div class="form-group">
                        <label for="name" class="sr-only">Name</label>
                        <input type="text" name="fname" class="form-control" placeholder="First Name" onfocus="this.placeholder =''" onblur="this.placeholder='First Name'"style="" required>
                    </div>
                </div> 
                <div class="col-md-6 col-xl-9">
                    <div class="form-group">
                        <label for="name" class="sr-only">Name</label>
                        <input type="text" name="lname" class="form-control" placeholder="Last Name" onfocus="this.placeholder =''" onblur="this.placeholder='Last Name'"style="" required>
                    </div>
                </div>
            </div>
                <div class="form-group">
                    <label for="mobile" class="sr-only">Mobile</label>
                    <input type="text" name="mobile" class="form-control" placeholder="Enter Mobile Number" onfocus="this.placeholder=     ''" onblur="this.placeholder='Enter Mobile Number'" required>
                </div>
                <div class="form-group">
                    <label for="aadhaar" class="sr-only">Aadhaar</label>
                    <input type="text" name="aadhar" class="form-control" placeholder="Enter Aadhaar Number" onfocus="this.placeholder =''" onblur="this.placeholder='Enter Aadhaar Number'" required>
                </div>
                <div class="form-group">
                    <label for="aadhaar" class="sr-only">E-mail</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter Email" onfocus="this.placeholder =''" onblur="this.placeholder='Enter Email'" required>
                </div>
                <div class="form-group">
                    <label for="location" class="sr-only">Location</label>
                    <input type="text" name="location" class="form-control" placeholder="Enter Location" onfocus="this.placeholder =''" onblur="this.placeholder='Enter Location'" required>
                </div>
                <div class="form-group">
                    <label for="description" class="sr-only">Description</label>
                    <input type="text" name="description" class="form-control" placeholder="Enter Description" onfocus="this.placeholder =''" onblur="this.placeholder='Enter Description'" required>
                </div>
                <div class="form-group">
                    <input type="file" name="pic" value="" accept="image/*" capture>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
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
    include("includes/script.php");
?>

</body>

</html>
