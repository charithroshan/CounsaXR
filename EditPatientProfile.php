<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="css/Footer.css">
  <link rel="stylesheet" href="css/PatientPage.css">
  <link rel="stylesheet" href="css/EditPatientProfile.css">
  <link rel="stylesheet" href="login/abc.css">
  <link rel="stylesheet" href="css/Navigation.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <title>Update Details|Profile</title>
</head>
<body>

<!--Header-->
<?php
  include_once "Header.php"; 
?>
</header>

<?php include_once ("Includes/editPatientProfile.inc.php"); ?>

<div class="trans">
<!--Editing-->
<div class="container xd">
<div class="row gutters">
<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
<div class="card h-200">
  <div class="card-body">
    <div class="account-settings">
      <div class="user-profile">
        <div class="user-avatar">
          <img src="images/avatar.jpg">
           <div class="upload-btn-wrapper"><br>
            <button class="btn1">Upload photo</button>
            <input type="file" name="myfile" /><br>
            <span>200x200 pixels</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12"><br>
  <h4 class="mb-2 text-center"> You can update your Details!</h4><br>
<div class="card h-200">
  <div class="card-body">
    <div class="row gutters">

      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <h6 class="mb-2 text-primary">Personal Details</h6>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="form-group">
          <label for="fullName">Fullname</label>
          <input type="text" class="form-control" id="fullname" placeholder="Enter fullname" value="<?php echo($userDetails['username']); ?>">
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" class="form-control" id="username" placeholder="Enter username" value="<?php echo($userDetails['username']); ?>">
        </div> 
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="form-group">
          <label for="newemail">Email</label>
          <input type="email" class="form-control" id="newemail" placeholder="Enter new email ID" value="<?php echo($userDetails['email']); ?>">
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="form-group">
          <label for="newphone">Phone</label>
          <input type="text" class="form-control" id="newphone" placeholder="Enter new phone number" value="<?php echo($userDetails['mobile']); ?>">
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="form-group">
          <label for="newpassword">Password</label>
          <input type="password" class="form-control" id="newpassword" placeholder="New password ">
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="form-group">
          <label for="newpassword">Confirm Password</label>
          <input type="password" class="form-control" id="newpassword" placeholder="Confirm password ">
        </div>
      </div>
    </div>
    <div class="row gutters">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <h6 class="mt-3 mb-2 text-primary">Address</h6>
      </div>

      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="form-group">
          <label for="ciTy">City</label>
          <input type="name" class="form-control" id="ciTy" placeholder="Enter City" value="<?php echo($userDetails['city']); ?>">
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="form-group">
          <label for="sTate">State</label>
          <input type="text" class="form-control" id="sTate" placeholder="Enter State">
        </div>
      </div>
    </div>
    <div class="row gutters">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="text-right">
          <button type="button" id="submit" name="submit" class="btn btn-secondary">Cancel</button>
          <button type="button" id="submit" name="submit" class="btn btn-primary">Update</button>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/swup@latest/dist/swup.min.js"></script>
<script src="js/LogoText.js"></script>
<script src="js/Notification.js"></script>
<script src="js/Message.js"></script>
</body>
</html>
