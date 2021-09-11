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
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>

    <section class="pt-5 pb-5 bg-dark inner-header">


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

                          <a href="add.php" class="btn btn-danger btn-lg" role="button"><span class="glyphicon glyphicon-list-alt"></span> <br/>Add Blood Donor</a>               

            
                           <?php
                          if($_SESSION['username']=="admin"){

                            echo ' <a href="cmod.php" class="btn btn-warning btn-lg" role="button"><span class="glyphicon glyphicon-bookmark"></span> <br/>Approval</a>
                                <a href="donorall.php" class="btn btn-success btn-lg" role="button"><span class="glyphicon glyphicon-user"></span> <br/>List of All Donor</a>'; 
                          }else{
                            echo '<a href="assigned.php" class="btn btn-success btn-lg" role="button"><span class="glyphicon glyphicon-user"></span> <br/>List of Your Donors</a>';
                          }

                            ?>
                           
                          
                         
                     
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>


<?php 
    $volname = $_SESSION['username']; 
    include('database.php'); 
    $name = $_SESSION['username']; 
    $sql="SELECT * FROM sheet1 WHERE Approved='0'";
    //printf($sql);
    $result = mysqli_query($con, $sql);
    $number_of_results = mysqli_num_rows($result);
    echo '<h2>You have '.$number_of_results.' pending submission. Keep the entries coming! <br/><br/>';
?> 

    <p><a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a></p>
</body>
</html>