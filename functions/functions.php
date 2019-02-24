<?php


$con = mysqli_connect('localhost','root','','sadak');


if(isset($_POST['submit']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $mobile = $_POST['mobile'];
    $aadhar = $_POST['aadhar'];
    $email = $_POST['email'];
    $location = $_POST['location'];
    $description = $_POST['description'];
    $file = $_FILES["file"]["name"][0];
    $count=1;
    
    $target_dir = "./uploads/". $fname . "/". $aadhar . "/" ;
    $uploadOk = 1;
    
    if(!file_exists($target_dir)){
      mkdir($target_dir,0777);
      chmod($target_dir,0777) ;
    }
    
    /*for($i = 0 ; $i<$count ; $i++){

    $target_file = $target_dir . basename($_FILES["file"]["name"][$i]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $dataset=1;*/

   /*if(isset($_POST["submit"])) {
        
        $check = getimagesize($_FILES["file"]["tmp_name"][$i]);
        
        if($check !== false) {
            //echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            //echo "File is not an image.";
            $uploadOk = 0;
        }
    
    }
        if($imageFileType != "jpg" || $imageFileType != "jpeg" ) {
        //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo '<script>alert("Form Not Submitted!!!. Try Again. "); window.location = "./complientForm.php";</script>' ;
    } else {
        if(move_uploaded_file($_FILES["file"]["tmp_name"][$i], $target_file)) {
            //echo "The file ". basename( $_FILES["fileToUpload"]["name"][$i]). " has been uploaded.<br>";
            $dataset=1 ;
        } else{
            $dataset = 0 ;
        }
    }

    }*/
if($dataset == 1) {
      $sql="INSERT INTO `feedback`(`feedback_fname`, `feedback_lname`, `feedback_mobile`, `feedback_email`, `feedback_location`, `feedback_discription`, `feedback_image`, `feedback_aadhar`) VALUES ($fname,$lname,$mobile,$email,$location,$description,$file,$aadhar)";
      $query=mysqli_query($con,$sql);
      echo '<script>alert("Form Uploaded Succesfully."); window.location = "./index.php";</script>' ;
    } else{
      echo '<script>alert("Form Not Submitted fuuk!!!. Try Again. "); window.location = "./complientForm.php";</script>' ;
    }

}

?>