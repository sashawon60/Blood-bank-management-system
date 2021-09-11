<!DOCTYPE html>
<html>

<?php 


include("database.php"); 

error_reporting(1); 

//processing Add Request _POST
    $donorid = $_POST['id']; //required
    $name = $_POST['name'];  //required
    $email = $_POST['email']; //required
    $password = $_POST['password']; //required
    $mobile = $_POST['mobile'];  
    $fbid = $_POST['fbid']; 
    $dob = $_POST['dob'];  //required
    $gender = $_POST['gender'];  
    $bloodgroup = $_POST['bgroup']; //required 
    $remarks = $_POST['remarks'];  
    $reference = $_SESSION['ref']; //required (auto populated); 
    $city = $_POST['city'];   // required
    $area = $_POST['area'];  // required
    $lastdonated = $_POST['lastdonated'];  

    //printf($donorid);

    $sql = "UPDATE sheet1 
    
    SET Name='$name', Password = '$password',DOB='$dob',BloodGroup='$bloodgroup',Gender='$gender',City='$city', Area='$area', Mobile='$mobile', FBID='$fbid', EmailAddress='$email', LastDonated='$lastdonated', Remarks='$remarks' 

    WHERE id=$donorid"; 
   

     if ($con->query($sql) === TRUE) {
            echo '


            <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
            <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
            <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
            <!------ Include the above in your HEAD tag ---------->

        <div class="container">
        <div class="row text-center">
        <div class="col-sm-6 col-sm-offset-3">
        <br><br> <h2 style="color:#0fad00">Success</h2>
        <img src="images/tick.png">
        <h3>Information Updated for Donor: '.$name.' !</h3>
        
    <br><br>
        </div>
        
    </div>
</div>







            ';
    } else {
             echo '<div class="alert alert-danger">Error connecting to database!:'; 
             printf(mysqli_error($con)); 

    }





?>

<center>
<a href="welcome.php" class="btn btn-success">     Home      </a>
</center>
</html> 