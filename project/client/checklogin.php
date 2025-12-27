<?php
	 $con=mysqli_connect("localhost","root","","crystal_crown_hotel");
	$username=$_POST['username'];
	$password=$_POST['password'];
	if($username==""||$password=="")
	{
		header("location:login.html");
	}
	else
	{
		 $query="select * from signup where username= '$username'and password= '$password'";
		 
		 $result=mysqli_query($con,$query);
		 $res=mysqli_fetch_array($result);
		 $count=mysqli_num_rows($result);
		 if($count==0)
	 	{
 ?>
	 
	<script type="text/javascript">
		 alert("Invalid username or password");
		 window.location.href="login.html";
	</script>
 <?php
	 }
	 else
	 {
		  session_start();
		  $_SESSION['username']=$username;
  ?>
  <script type="text/javascript">
	  alert("Login Successfully");
	  window.location.href="booking.html.php";
  
  
  </script>
  <?php
	  }
  
  }
  ?>