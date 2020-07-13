<?php
class functions
{
	function con()
	{
		$conn=mysqli_connect("localhost","root","","crdb");
	}
	function dataupdate($id,$name,$fname,$email,$pass)
	{
		$conn=mysqli_connect("localhost","root","","crdb");
		$update=mysqli_query($conn,"UPDATE `student` SET `sname`='$name',`fname`='$fname',`email`='$email',`pass`='$pass' WHERE `email`='$id'");
		if($update)
		{
			echo "<script> alert('Data Updated');</script>";
			echo "<script> window.location.assign('index.php');</script>";
		}
	}
}
?>