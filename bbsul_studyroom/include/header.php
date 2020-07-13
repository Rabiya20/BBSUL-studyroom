<header>
<div class="navbar navbar-default navbar-static-top">
<div class="container">
<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.php"><img src="../pics/img/logo.png" alt="logo"/></a>
</div>
<div class="navbar-collapse collapse ">
    <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li> 
        <li><a href="assignment.php">Assignments</a></li> 
		<li><a href="about.php">About Us</a></li>
		<li><a href="services.php">Services</a></li>
        <li><a href="courses.php">Courses</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li>
		<a href="" class="fa fa-user dropdown-toggle" type="button" data-toggle="dropdown">&nbsp;&nbsp
		<?php
		// session_start();
		// if($_SESSION['user'] == true) 
		// {
		// 	$email=$_SESSION['user'];
		// 	$conn=mysqli_connect("localhost","root","","my_db");
		// 	$user=mysqli_query($conn,"SELECT * FROM student WHERE email='$email'");
		// 	$row=mysqli_fetch_array($user);
		// 	echo $row[1];
		// 	$_SESSION['pro']=$row[3];
		// }
		// else
		// {
		// 	header('location:../index.php');
		// 	}
		?>      
        </a>
		  <ul class="dropdown-menu">
			<li><a href="profile.php<?php echo "?id=".$_SESSION['pro'];?>">Profile Setting</a></li>
			<li><a href="signout.php" class="fa fa-sign-out">&nbsp;&nbsp;Sign Out</a></li>
		  </ul>
		</li>
    </ul>
</div>
</div>
</header>