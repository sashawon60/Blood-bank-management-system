<?php
// Initialize the session
session_start();

// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
header("location: login.php");
exit;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Approval</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
    body{ font: 14px sans-serif; text-align: center; }
    </style>
  </head>
  <body>
    <div class="page-header">
      <h1>Volunteer Panel <br/>Hi, <b><?php echo htmlspecialchars($_SESSION['username']); ?></b>. </h1>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">
              <span class="glyphicon glyphicon-bookmark"></span> Main Menu <span class="glyphicon glyphicon-bookmark"></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                
                <a href="welcome.php" class="btn btn-info btn-lg" role="button"><span class="glyphicon glyphicon-file"></span> <br/>Dashboard</a>
                <a href="add.php" class="btn btn-danger btn-lg" role="button"><span class="glyphicon glyphicon-list-alt"></span> <br/>Add Blood do</a>
                <a href="donorall.php" class="btn btn-success btn-lg" role="button"><span class="glyphicon glyphicon-user"></span> <br/>List of Your Donors</a>
                <a href="cmod.php" class="btn btn-warning btn-lg" role="button"><span class="glyphicon glyphicon-bookmark"></span> <br/>Approval</a>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="px-0">
      <div class="container">
        <div class="row">
          <div class="col-md-12" style="margin-top:20px;">
            
            <?php
            include('database.php');
            if(isset($_GET['isGood']) && isset($_GET['id'])){
            $approve=$_GET['isGood'];
            //printf($approve);
            $id = $_GET['id'];
            if($approve=='1'){
            
            //approve set to 1
            $sql="UPDATE sheet1 SET Approved='1' WHERE id='$id'";
            $result = mysqli_query($con, $sql);
            if ($con->query($sql) === TRUE) {
            echo '<div class="alert alert-success">Record Approved Successfully</div>';
            } else {
            echo '<div class="alert alert-danger">Error updating record</div>';
            }
            }
            else if($approve=='0'){
            $sql="DELETE FROM sheet1 WHERE id='$id'";
            if($result = mysqli_query($con, $sql)){
            printf('<div class="alert alert-success">Deleted the entry!</div>');
            }
            else{
            printf('<div class="alert alert-danger">Something went wrong!</div>');
            }
            }
            }else{
            printf('<div class="alert alert-danger">You are in wrong place!</div>');
            }
            ?>
            <br/><br/>
            <p><a href="cmod.php" class="btn btn-primary">Go Back</a></p>
            <br/><br/>
          </div></div></div></div>
          <p><a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a></p>
        </body>
      </html>