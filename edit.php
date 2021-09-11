<?php
// Initialize the session
session_start();

// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
header("location: login.php");
exit;
}
?>

<html>
  <title>Edit Donor to Database</title>
  <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <?php
  include("database.php");
  // getting info and storing in variables
  if(isset($_GET['id'])){
  $id = $_GET['id'];
  $sql = "select * from sheet1 where id='$id'";
  //printf($sql);
  
  if ($result=mysqli_query($con,$sql))
  {
  while ($row=mysqli_fetch_row($result))
  {
  $id = $row[0];
  $name = $row[1];
  $password = $row[2];
  $dob = $row[3];
  $bloodGroup = $row[4];
  $gender = $row[5];
  $city = $row[6];
  $area = $row[7];
  $mobile = $row[8];
  $fbid = $row[9];
  $emailAddress = $row[10];
  $lastDonated = $row[11];
  $approved = $row[12];
  $remarks = $row[13];
  $reference = $row [14];
  //$donorStatus = $row[15];
  }
  // Free result set
  //mysqli_free_result($result);
  }
  }
  ?>
  <div class="container">
    <div class="row">
      <div class="col-6">
        <form class="form-horizontal" action='editFinal.php' method="POST">
          <fieldset>
            <div id="legend">
              <legend class="">Edit Donor</legend>
            </div>
            <div class="control-group">
              <!-- Id -->
              <label class="control-label"  for="id">donor id</label>
              <div class="controls">
                <input type="text" id="id" name="id" placeholder="" class="input-xlarge" value="<?php echo $id; ?>" required>
              </div>
            </div>
            
            <div class="control-group">
              <!-- Full Name -->
              <label class="control-label" for="name">Full Name</label>
              <div class="controls">
                <input type="text" id="name" name="name" class="input-xxlarge"  value="<?php echo $name; ?>" required>
                <p class="help-block">Please provide Donor Name, required field</p>
              </div>
            </div>
            
            <div class="control-group">
              <!-- Email -->
              <label class="control-label" for="email">Email</label>
              <div class="controls">
                <input type="text" id="email" name="email" placeholder=""  class="input-xxlarge"  value="<?php echo $emailAddress; ?>" required>
                <p class="help-block">A correct mail address that can user use to login in future. Required field</p>
              </div>
            </div>
            
            <div class="control-group">
              <!-- Password-->
              <label class="control-label" for="password">Password</label>
              <div class="controls">
                <input type="password" id="password" name="password" placeholder=""  value="<?php echo $password; ?>" class="input-xlarge">
                <p class="help-block">Password should be at least 4 characters. Required Field</p>
              </div>
            </div>
            <div class="control-group">
              <!-- Phone -->
              <label class="control-label" for="mobile">Phone/Mobile Number</label>
              <div class="controls">
                <input type="text" id="mobile" name="mobile" placeholder="" value="<?php echo $mobile; ?>" class="input-xlarge" >
                <p class="help-block">Phone Number to make it easier to communicate. Only add when you have permission from donor.</p>
              </div>
            </div>
            <div class="control-group">
              <!-- FBID -->
              <label class="control-label" for="fbid">Social Media Profile (FB, Twitter, etc)</label>
              <div class="controls">
                <input type="text" id="fbid" name="fbid" placeholder="" value="<?php echo $fbid; ?>" class="input-xlarge" >
                <p class="help-block">Provide username of Facebook account/Other social account of donor. Not URL only bold portion: http://facebook.com/<b>th3.anik</b> </p>
              </div>
            </div>
            <div class="control-group">
              <!-- DateOfBirth -->
              <label class="control-label" for="dob">Date of Birth</label>
              <div class="controls">
                <input type="text" id="dob" name="dob" placeholder="DD/MM/YYYY" value="<?php echo $dob; ?>" class="input-xlarge" required>
                <p class="help-block">Provide correct DOB. Donor must be 18 or above of age. Required Field</p>
              </div>
            </div>
            
            <div class="control-group">
              <!-- Select Gender -->
              <label class="control-label" for="dob">gender</label>
              <div class="controls">
                <input type="text" id="gender" name="gender" placeholder="Gender" value="<?php echo $gender; ?>" class="input-xlarge" required>
                <p class="help-block">Select gender of Donor</p>
              </div>
            </div>
            <div class="control-group">
              <!-- Select Gender -->
              <label class="control-label" for="dob">Blood Group</label>
              <div class="controls">
                <input type="text" id="bgroup" name="bgroup"  value="<?php echo $bloodGroup; ?>" class="input-xlarge" required>
                <p class="help-block">Select correct blood group. Required Field. </p>
              </div>
            </div>
            <div class="control-group">
              <!-- Remarks -->
              <label class="control-label" for="remarks">Remarks</label>
              <div class="controls">
                <input type="text" id="remarks" name="remarks" placeholder="" value="<?php echo $remarks; ?>" class="input-xxlarge" >
                <p class="help-block">Any additional information regarding donor. Any story and relevant details.</p>
              </div>
            </div>
            <div class="control-group">
              <!-- City -->
              <label class="control-label" for="city">City</label>
              <div class="controls">
                <select name="city" class="form-control" class="input-xlarge" value="<?php echo $city; ?>" id="city">
                  <option value="Dhaka">Dhaka</option>
                </select>
                <p class="help-block">Select the city donor lives</p>
              </div>
            </div>
            <div class="control-group">
              <!-- Area -->
              <label class="control-label" for="area">Area</label>
              <div class="controls">
                <input type="text" id="area" name="area" placeholder="" value="<?php echo $area; ?>" class="input-xxlarge" >
                <p class="help-block">Select the area donor lives (eg. Banani)</p>
              </div>
            </div>
            <div class="control-group">
              <!-- City -->
              <label class="control-label" for="lastdonated">Last Donation Date</label>
              <div class="controls">
                <input type="text" id="lastdonated" name="lastdonated" placeholder="DD/MM/YYYY" value="<?php echo $lastDonated; ?>" class="input-xxlarge" >
                <p class="help-block">Select the date when the donor last time donated blood. </p>
              </div>
            </div>
            <div class="control-group">
              <!-- WHO ADDED? -->
              <label class="control-label" for="ref">Reference</label>
              <div class="controls">
                <input type="text" id="ref" name="ref" placeholder="<?php echo $reference; ?>" class="input-xxlarge" disabled>
              </div>
            </div>
            <div class="control-group">
              <!-- Button -->
              <div class="controls">
                <input type="submit" value="Save Changes" class="btn btn-success">
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
  <p align="center" style="margin-top:20px;"><a href="welcome.php" class="btn btn-primary">Dashboard</a>  <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a></p>
</body>
</html>