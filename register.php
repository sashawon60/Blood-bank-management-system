 
<html>

<title>Register as Donor!</title>
 <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">





<?php
//processing Add Request _POST

// generating random ID: 

if(isset($_POST['name'])){
    
    $name = $_POST['name'];  //required
    $email = $_POST['email']; //required
   // $password = $_POST['password']; //required
    $mobile = $_POST['mobile'];  
    $fbid = $_POST['fbid']; 
    $dob = $_POST['dob'];  //required
    $gender = $_POST['gender'];  
    $bloodgroup = $_POST['bgroup']; //required 
    $remarks = $_POST['remarks'];  
    $reference = $_SESSION['username']; //required (auto populated); 
    //$dstatus = $_POST['dstatus'];  
    $city = $_POST['city'];   // required
    $area = $_POST['area'];  // required
    $lastdonated = $_POST['lastdonated'];  


   

    include("database.php"); 

    $sql = "insert into sheet1(Name, Password, DOB, BloodGroup, Gender, City, Area, Mobile, FBID, EmailAddress, LastDonated, Approved, Remarks, Reference)
     VALUES ('$name', '$password', '$dob', '$bloodgroup', '$gender', '$city', '$area', '$mobile', '$fbid', '$email','$lastdonated', '0', '$remarks', '$reference')";

     //printf($sql);

     if ($con->query($sql) === TRUE) {
            echo '<div class="alert alert-success">New Donor added to database successfully</div>';
            header("Location: http://alorjibon.org/success.php"); 
    } else {
             echo '<div class="alert alert-danger">Incorrect submission, Please recheck your entry!:';
             printf(mysqli_error($con)); 
    }




}


?>



<div class="container">
    <div class="row">
        <div class="col-6">
          



<form class="form-horizontal" action='' method="POST">
  <fieldset>
    <div id="legend">
      <legend class="">Add A Donor</legend>
      Interested to donate blood? You can register on our website to be featured as one of the kind donor in our directory. Please fill up this below form: <br/><br/> 
      <hr/>
    </div>

 
    <div class="control-group">
      <!-- Full Name -->
      <label class="control-label" for="name">Full Name</label>
      <div class="controls">
        <input type="text" id="name" name="name" placeholder="" class="input-xxlarge" required>
        <p class="help-block">Please provide Donor Name, required field</p>
      </div>
    </div>


      <div class="control-group">
      <!-- Email -->
      <label class="control-label" for="email">Email</label>
      <div class="controls">
        <input type="text" id="email" name="email" placeholder="" class="input-xxlarge" required>
        <p class="help-block">A correct mail address that can user use to login in future. Required field</p>
      </div>
    </div>
 
   

    <div class="control-group">
      <!-- Phone -->
      <label class="control-label" for="mobile">Phone/Mobile Number</label>
      <div class="controls">
        <input type="text" id="mobile" name="mobile" placeholder="" class="input-xlarge" >
        <p class="help-block">Phone Number to make it easier to communicate. Only add when you have permission from donor.</p>
      </div>
    </div>


     <div class="control-group">
      <!-- FBID -->
      <label class="control-label" for="fbid">Facebook Username:</label>
      <div class="controls">
        <input type="text" id="fbid" name="fbid" placeholder="" class="input-xlarge" >
        <p class="help-block"><font color="red">Provide username to Facebook account. only username portion not whole link. http://facebook.com/<b>thisisusername</b></font></p>
      </div>
    </div>

    <div class="control-group">
      <!-- FBID -->
      <label class="control-label" for="dob">Date of Birth</label>
      <div class="controls">
        <input type="text" id="dob" name="dob" placeholder="DD/MM/YYYY" class="input-xlarge" required>
        <p class="help-block">Provide correct DOB. Donor must be 18 or above of age. Required Field</p>
      </div>
    </div>
 
          <div class="control-group">
      <!-- Select Gender -->
      <label class="control-label" for="dob">Gender</label>
      <div class="controls">
        <select name="gender" class="form-control" class="input-xlarge" id="gender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Others">Others</option>
        </select>
        <p class="help-block">Select gender of Donor</p>
      </div>
    </div>

     <div class="control-group">
      <!-- Select Gender -->
      <label class="control-label" for="dob">Blood Group</label>
      <div class="controls">
        <select name="bgroup" class="form-control" class="input-xlarge" id="bgroup">
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
        </select>
        <p class="help-block">Select correct blood group. Required Field. </p>
      </div>
    </div>


         <div class="control-group">
      <!-- Remarks -->
      <label class="control-label" for="remarks">Remarks</label>
      <div class="controls">
        <input type="text" id="remarks" name="remarks" placeholder="" class="input-xxlarge" >
        <p class="help-block">Any additional information regarding donor. Any story and relevant details.</p>
      </div>
    </div>


         <div class="control-group">
      <!-- City -->
      <label class="control-label" for="city">City</label>
      <div class="controls">
        <select name="city" class="form-control" class="input-xlarge" id="city">
            <option value="Dhaka">Dhaka</option>
            <option value="Jessore">Jessore</option>
        </select>
        <p class="help-block">Select the city donor lives</p>
      </div>
    </div>

    <div class="control-group">
      <!-- Area -->
      <label class="control-label" for="area">Area</label>
      <div class="controls">
        <input type="text" id="area" name="area" placeholder="" class="input-xxlarge" >
        <p class="help-block">Select the area donor lives (eg. Banani)</p>
      </div>
    </div>

    <div class="control-group">
      <!-- City -->
      <label class="control-label" for="lastdonated">Last Donation Date</label>
      <div class="controls">
        <input type="text" id="lastdonated" name="lastdonated" placeholder="DD/MM/YYYY" class="input-xxlarge" >
        <p class="help-block">Select the date when the donor last time donated blood. </p>
      </div>
    </div>

        <!-- Donor Status (REMOVED) -->
        
    

     <div class="control-group">
      <!-- WHO ADDED? -->
      <label class="control-label" for="ref">Reference</label>
      <div class="controls">
        <input type="text" id="ref" name="ref" placeholder="website_register" class="input-xxlarge" disabled>
      </div>
    </div>


    
 
    <div class="control-group">
      <!-- Button -->
      <div class="controls">
        <input type="submit" value="Add Donor" class="btn btn-success">
      </div>
    </div>
  </fieldset>
</form>






</div>
<div class="col-6">
...
</div>
</div>
</div>



<p align="center" style="margin-top:20px;"><a href="index.php" class="btn btn-primary">Home</a>  </p>
</body>
</html>