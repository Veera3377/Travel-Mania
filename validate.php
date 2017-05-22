<?php

 $conn=mysqli_connect('localhost','root','') or die(mysqli_error($conn));
 mysqli_select_db($conn,'travel') or die(mysqli_error($conn));
 $name=$_POST['user'];
 $pwd=$_POST['pass'];
 $pwd = MD5($pwd);
 if($name!=''&&$pwd!='')
 {
   $query=mysqli_query($conn,"SELECT * from user where Username=\"$name\" AND Password=\"$pwd\"") or die(mysqli_error($conn));
   $res=mysqli_fetch_array($query);
   //var_dump($res);
   if($res)
   {
    //echo'Hello'.$name;
    session_start();
    $_SESSION['name'] = $res['Username'];
    header('location:Index.php?fname='.$name.'&passwd='.$pwd.'&flag=1');
   }
   else
   {
    echo'Entered username or password is incorrect';
   }
 }
 else
 {
  echo'Enter both username and password';
 }

?>