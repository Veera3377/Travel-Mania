<?php
	$usr= $_POST["user"];
	$email= $_POST["email"];
	$passwd= $_POST["pass"];
	$pass1= $_POST["pass1"];

	if($passwd!=$pass1)
	{
		echo "Passwords Do not Match, Redirecting..";
		echo "<script>setTimeout(\"location.href = 'SignUp.php';\",1500);</script>";
	}
	else
	{
   		$host = "localhost";
   		$user = "root";
   		$pass = "";
   		$conn = mysqli_connect($host, $user, $pass);
   		if(! $conn ) 
   		{
      		die('Could not connect: ' . mysqli_error($conn));
   		}
   		mysqli_select_db($conn,"travel");
         $passwd = MD5($pass1);
   		$sql = "INSERT INTO user(Username,Email,Password) VALUES ('$usr','$email','$passwd');";
      
   
   		$retval = mysqli_query($conn,$sql);
    $query=mysqli_query($conn,"SELECT * from user where Username=\"$usr\" AND Password=\"$passwd\"") or die(mysqli_error($conn));
    $res=mysqli_fetch_array($query);
   
   		if(! $retval ) 
   		{
      		die('Could not enter data: ' . mysqli_error($conn));
   		}
      session_start();
      $_SESSION['name'] = $res['Username'];
   		header('location:Login.php?fname='.$usr.'&passwd='.$passwd.'$flag=1');
   		mysqli_close($conn);
   	}
  	
?>
