<?php


$con = mysqli_connect('localhost','root','','sadak');
if($con){
    echo "yes";
        
}


if(isset($_POST['submit']))
{
    $fname = mysqli_real_escape_string($con,$_POST['fname']);
    $lname = mysqli_real_escape_string($con,$_POST['lname']);
    $mobile = mysqli_real_escape_string($con,$_POST['mobile']);
    $aadhar = mysqli_real_escape_string($con,$_POST['aadhar']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $location = mysqli_real_escape_string($con,$_POST['location']);
    $description = mysqli_real_escape_string($con,$_POST['description']);
    $file = $_FILES["file"]["name"];
    $count=1;
    
    $target_dir = "uploads/". $aadhar . "/" ;
    if(!file_exists($target_dir)){
      mkdir($target_dir,0777);
      chmod($target_dir,0777) ;
    }
    $uploadOk = 1;
    if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_dir.$file)) {
        echo '<script>alert("file Uploaded Succesfully.");</script>';
        $sql="INSERT INTO feedback (feedback_fname, feedback_lname, feedback_mobile, feedback_email, feedback_location,feedback_discription, feedback_image, feedback_aadhar) VALUES('$fname','$lname','$mobile','$email','$location','$description','$file','$aadhar')";
      if(mysqli_query($con,$sql)){
      echo '<script>alert("Data Uploaded Succesfully."); window.location = "index.php"; </script>' ; 
        
    } else {
        echo "Sorry, there was an error uploading your database  ",mysqli_error($con);
    }
}

   
    

        
      
}
}



?>