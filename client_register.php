<?php
include_once'connection.php';
$mailid=$_POST['mailid'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];

//$search_result=mysqli_query($conn,"select * from clients where mailid='$mailid'");
//if(mysqli_num_rows(search_res)>0){
 //   echo "User already registered or something went wrong";
   // die;
//}
$cmd="insert into clients(mailid,mobile,password) values('$mailid','$mobile','$password')";

//echo"$cmd";
$res=mysqli_query($conn,$cmd);
if($res){
    echo"Account created
    <br><a href='client_login.html' >Proceed to Login</a>
    ";
}
else{
    echo"User already exists or something went wrong";
}
?>