<?php

$con =mysqli_connect('localhost','root');
if($con){
    echo"Thankyou for using our services.";
}
else{
    echo "No Connection";
}

mysqli_select_db($con,'glimpsedata');
$user =$_POST['user'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$comment=$_POST['comment'];

$query= "INSERT into userinfodata(user, email, mobile, comment) VALUES ('$user','$email','$mobile','$comment')";
echo"$query";
mysqli_query($con,$query);
header('location:index.php');
?>