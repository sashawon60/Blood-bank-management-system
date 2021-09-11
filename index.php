<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AlorJibon.Org - Blood Directory | Find Blood Donors Information</title>
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="theme.css" type="text/css">
  </head>
  <body>
    <nav class="navbar navbar-expand-md bg-primary navbar-dark">
      <div class="container">
        <a class="navbar-brand" href="index.php"><img src="images/logo.png" height="100px"/></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.php">
              <i class="fa d-inline fa-lg fa-bookmark-o"></i>&nbsp;হোমপেজ</a>
            </li>
            
          </ul>
          <a class="btn navbar-btn btn-primary ml-2 text-white" href="login.php">
          <i class="fa d-inline fa-lg fa-user-circle-o"></i>&nbsp; প্রবেশ</a>
        </div>
      </div>
    </nav>
    <div class="text-center py-0" style="background-image: url('images/sub_banner.png'); height:600px;" >
      <div class="container py-5">
        <div class="row">
          <div class="col-md-12">
            <img src="images/logo.png" height="30%"/>
            <p class="lead mb-5">রক্ত দিন, জীবন বাচান</p>
            <!-- <a href="#" data-target="#BeADonor" data-toggle="modal" class="btn btn-lg mx-1 btn-secondary">Be A Donor</a> -->
            <a href="register.php" class="btn btn-lg mx-1 btn-secondary">Be A Donor</a>
            <a href="#" data-target="#SearchDonor" data-toggle="modal" class="btn btn-lg btn-primary mx-1">Find Donor</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Be A Donor -->
    <div class="modal fade" id="BeADonor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">রক্ত দাতা হিসেবে নিবন্ধন করুন</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            
            আগে নিবন্ধন করেছেন কিন্তু তথ্য আপডেট করতে চান? <button type="button" class="btn btn-primary">Login</button><br/>
            </hr/>
            <br/>
            <h2>নিবন্ধন ফর্ম </h2>
            <form>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Email</label>
                  <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Password</label>
                  <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                </div>
              </div>
              <div class="form-group">
                <label for="inputAddress">Address</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
              </div>
              <div class="form-group">
                <label for="inputAddress2">Address 2</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputCity">City</label>
                  <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="form-group col-md-4">
                  <label for="inputState">State</label>
                  <select id="inputState" class="form-control">
                    <option selected>Choose...</option>
                    <option>...</option>
                  </select>
                </div>
                <div class="form-group col-md-2">
                  <label for="inputZip">Zip</label>
                  <input type="text" class="form-control" id="inputZip">
                </div>
              </div>
              <div class="form-group">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="gridCheck">
                  <label class="form-check-label" for="gridCheck">
                    Check me out
                  </label>
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Find Donor -->
    <div class="modal fade" id="SearchDonor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">রক্ত দাতা খুজে বের করুন</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="list.php" method="get">
              
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="blood">Select Blood Group</label>
                </div>
                <select name="blood" class="custom-select" id="blood" required>
                  
                  <option value="A+">A+</option>
                  <option value="A-">A-</option>
                  <option value="B+">B+</option>
                  <option value="B-">B-</option>
                  <option value="O+">O+</option>
                  <option value="O-">O-</option>
                  <option value="AB+">AB+</option>
                  <option value="AB-">AB-</option>
                </select>
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="city">Select City</label>
                </div>
                <select name="city" class="custom-select" id="city">
                  
                  <option value="Dhaka">Dhaka</option>
                  
                </select>
              </div>
              
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="area">Select Area</label>
                </div>
                <select class="custom-select" id="area">
                  
                  <option value="">All Area</option>
                  
                  
                </select>
              </div>
            </div>
            
            <div class="modal-footer">
              <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
              <input type="submit" class="btn btn-primary" value="Search For Donor">
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="py-5 text-center bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="pb-3 text-secondary">দ্রুত বর্ধনশীল বাংলাদেশি  রক্তদাতাদের তালিকা  </h1>
          </div>
        </div>
        <div class="row">
          <div class="text-right col-md-6">
            <div class="row my-5">
              <div class="col-2 order-lg-2 col-2 text-center">
                <i class="d-block fa fa-3x fa-money"></i>
              </div>
              <div class="col-10 text-lg-right text-left order-lg-1">
                <h4 class="text-primary">সম্পুর্ণ বিনামুল্যে</h4>
                <p>আপনার প্রয়োজনীয় রক্ত পেতে সঠিক ব্যক্তি খুজে বের করতে সাহায্য করবে আলোর জীবন পোর্টাল, কোন সাবস্ক্রিপশন চার্জ ছাড়া</p>
              </div>
            </div>
            <div class="row my-5">
              <div class="col-2 order-lg-2 col-2 text-center">
                <i class="d-block fa fa-4x fa-ambulance"></i>
              </div>
              <div class="col-10 text-lg-right text-left order-lg-1">
                <h4 class="text-primary">রক্তদাতা হোন!&nbsp;</h4>
                <p>সাহায্য করতে চান? জীবন বাঁচানোর চেয়ে বড় সুযোগ আর কি হতে পারে? সাইন আপ করে নথিভুক্ত হলে প্রয়োজনে পাশে পাবে আপনাকে</p>
              </div>
            </div>
          </div>
          <div class="text-left col-md-6">
            <div class="row my-5">
              <div class="col-2 text-center">
                <i class="d-block fa fa-3x fa-angellist"></i>
              </div>
              <div class="col-10">
                <h4 class="text-primary">সহজ ইন্টারফেস</h4>
                <p>সহজেই খুজে বের করুন রক্তদাতা কে। আমাদের বড় তথ্য ভান্ডার হতে যথাযথ ফিল্টার সেট করলেই তথ্য পাওয়া যাবে।&nbsp;</p>
              </div>
            </div>
            <div class="row my-5">
              <div class="col-2 text-center">
                <i class="d-block mx-auto fa  fa-3x fa-handshake-o"></i>
              </div>
              <div class="col-10">
                <h4 class="text-primary">সেচ্ছাসেবক হোন!</h4>
                <p>এই মহৎ এবং খুবই গুরুত্বপুর্ণ কাজে সেচ্ছাসেবক হিসেবে কাজ করতে চান? <a href="https://www.facebook.com/alorjibon.org/">যোগাযোগ করুন</a> আমাদের সাথে।&nbsp;</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-primary py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-6 my-3">
            <h1 class="display-5 text-white text-md-left text-center">সোশ্যাল মিডিয়াতে যুক্ত হোনঃ  </h1>
          </div>
          <div class="col-md-5  text-center align-self-center">Page
            <a href="https://www.facebook.com/alorjibon.org/" target="_blank">
              <i class="fa fa-fw fa-facebook fa-2x text-white mx-3"></i>
            </a>Channel
            <a href="https://www.youtube.com/channel/UCu4FekxNuwhwdCY6pzAgXDA" target="_blank">
              <i class="fa fa-fw fa-youtube fa-2x text-white mx-3"></i>
            </a>Group
            <a href="https://www.facebook.com/groups/alorjibon.org" target="_blank">
              <i class="fa fa-fw fa-facebook fa-2x text-white mx-3"></i>
            </a>
            <!--<a href="https://www.instagram.com/" target="_blank">-->
            <!--  <i class="fa fa-fw fa-instagram fa-3x text-white mx-3"></i>-->
            <!--</a>-->
          </div>
        </div>
      </div>
    </div>
    <div class="py-3 bg-dark text-white">
      <div class="container">
        
        <div class="row">
          <div class="col-md-12 mt-3 text-center">
            <p>Contact Email: <a href="mailto:info@alorjibon.org">info@alorjibon.org</a></p>
            <p>Copyright &copy; <?php echo date('Y'); ?> AlorJibon.org. All Right Reserved.</p>
          </div>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
  </body>
</html>