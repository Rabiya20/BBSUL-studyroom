<?php 
// session_start();
include 'database/crdb.php';
if(isset($_POST['sbtn']))
{
	include 'database/createaccount.php';
}
if(isset($_POST['lbtn'])){
	include 'database/loginaccount.php';
}
?>
<html>
<head>
  <meta charset="UTF-8">
  <title>Study Room | Login form</title>
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans'>
  <link rel="stylesheet" href="style/form.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body>
  <form class="js-form" method="post">
  <!-- -----------------------Login--------------------- -->
    <p class="tip">Login Your Account</p>
    <div class="cont">
  <div class="form sign-in">
    <h2>Login</h2>
    <label>
      <span class="email" id="js-email">Email</span>
      <input type="email" name="lemail" />
    </label>
    <label>
      <span class="password" id="js-password">Password</span>
      <input type="password" name="lpass"/>
    </label>
    <!-- <a  href="database/forget.php" class="badge badge-danger extra">Forgot password?</a> -->
    <p  class="forgot-pass" onClick="location.href='database/forget.php'">Forgot password?</p>
    <br/>
    <input type="submit" class="submit" value="Sign in" name="lbtn">
  </div>
  <!-- ----------------------side div------------------------- -->
  <div class="sub-cont">
    <div class="img">
      <div class="img__text m--up">
        <h2>New here?</h2>
        <p>Sign up now to know what your Teachers are Sharing Information, Assignments etc</p>
      </div>
      <div class="img__text m--in">
        <h2>Already have Account?</h2>
        <p>If you already has an account, just sign in. And continue with your Work Potential!</p>
      </div>
      <div class="img__btn">
        <span class="m--up">Sign Up</span>
        <span class="m--in">Sign In</span>
      </div>
    </div>
	
</form>
    <!-- ----------------------sign in-------------------------- -->
    <form method="post" class="form sign-up">
      <h2>Create New Account</h2>
      <label>
        <span>Name</span>
        <input type="text" name="name"/>
      </label>
	    <label>
        <span>Father Name</span>
        <input type="text" name="fname"/>
      </label>
      <label>
        <span>Email</span>
        <input type="email" name="email"/>
      </label>
      <label>
        <span>Password</span>
        <input type="password" name="pass"/>
      </label>
      <label>
        <span>Confirm Password</span>
        <input type="password" name="cpass" />
      </label>
      <br/><input type="submit" class="submit" value="Sign Up" name="sbtn">
    </div>
  </div>
</div>
</form>

</body>
<script  src="javascript/form.js"></script>
</html>