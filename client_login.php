<?php

include_once 'connection.php';

$mailid=$_POST['mailid'];
$password=$_POST['password'];

$cmd="select * from clients where mailid='$mailid' and password='$password'";   
$res=mysqli_query($conn,$cmd);  
if(mysqli_num_rows($res)==1){
    header('location:client_view.php');  
}
else{
    echo'<a href="client_login.html">Login failed</a>';
}

?>