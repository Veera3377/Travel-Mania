<?php
    $f = fopen('a.txt','r');
    $name = fgets($f);
    $cardno = $_POST['cardno'];
    $cvv = $_POST['cvv'];
    $Amt = $_POST['amt'];

   $con = mysqli_connect('localhost', 'root', '');
   $db = mysqli_select_db($con,'travel');
   $q1 = "SELECT id from user WHERE Username = \"$name\"";
   $result = mysqli_query($con,$q1);
   $row = mysqli_fetch_array($result,1);
   $id = $row['id'];
$query = "INSERT INTO payment(pay_cno,pay_cvv,pay_amt,pay_usrid) VALUES('$cardno','$cvv','$Amt','$id')";
   var_dump($query);
   mysqli_query($con,$query);
   header('location:States.php?flag=1')
 ?>