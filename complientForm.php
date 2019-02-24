
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>#Sadak</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/modernizr.custom.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<div id="preloader">
  <div id="status"> <img src="https://cdn.newsapi.com.au/image/v1/f52d7108cad3688ed32793f49aecd2ce" height="64" width="64" alt=""> </div>
</div>

<?php
include("nav.php"); 
?>
<body>
<br><br>
<div id="intro">
  <div class="intro-body">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <h1>BE ON <span class="brand-heading">#Sadak</span></h1>
          <p class="intro-text">Digital Services Helping To Make Digital India </p>
          <a href="#form" class="btn btn-default page-scroll">Learn More</a> </div>
      </div>
    </div>
  </div>
</div>


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
        <form action="" method="post">  
            <div class="row">
                <div class="col-md-6 col-xl-9">
                    <div class="form-group">
                        <label for="name" class="sr-only">Name</label>
                        <input type="text" class="form-control" placeholder="First Name" onfocus="this.placeholder =''" onblur="this.placeholder='First Name'"style="" required>
                    </div>
                </div> 
                <div class="col-md-6 col-xl-9">
                    <div class="form-group">
                        <label for="name" class="sr-only">Name</label>
                        <input type="text" class="form-control" placeholder="Last Name" onfocus="this.placeholder =''" onblur="this.placeholder='Last Name'"style="" required>
                    </div>
                </div>
            </div>
                <div class="form-group">
                    <label for="mobile" class="sr-only">Mobile</label>
                    <input type="text" class="form-control" placeholder="Enter Mobile Number" onfocus="this.placeholder=     ''" onblur="this.placeholder='Enter Mobile Number'" required>
                </div>
                <div class="form-group">
                    <label for="aadhaar" class="sr-only">Aadhaar</label>
                    <input type="text" class="form-control" placeholder="Enter Aadhaar Number" onfocus="this.placeholder =''" onblur="this.placeholder='Enter Aadhaar Number'" required>
                </div>
                <div class="form-group">
                    <label for="aadhaar" class="sr-only">E-mail</label>
                    <input type="email" class="form-control" placeholder="Enter Email" onfocus="this.placeholder =''" onblur="this.placeholder='Enter Email'" required>
                </div>
                <div class="form-group">
                    <label for="location" class="sr-only">Location</label>
                    <input type="text" class="form-control" placeholder="Enter Location" onfocus="this.placeholder =''" onblur="this.placeholder='Enter Location'" required>
                </div>
                <div class="form-group">
                    <label for="description" class="sr-only">Description</label>
                    <input type="text" class="form-control" placeholder="Enter Description" onfocus="this.placeholder =''" onblur="this.placeholder='Enter Description'" required>
                </div>
                <div class="form-group">
                    <input type="file" name="pic" value="" accept="image/*" capture>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col-md-3">
            
        </div>
        </div>
    <br> <br> <br> <br> <br> <br>
    </div>

    <?php
include("social.php");
include("script.php");
?>

</body>

</html>
