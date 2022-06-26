<?php

$uname=$_POST['uname'];
$upass=$_POST['upassword'];
if($uname=="admin" && $upass=="password"){

    header('location:upload_products.html');
}
else{
    echo "<h1>Invalid Login</h1>";
    echo "<a href='login.html'>Login again</a>";
}
?>