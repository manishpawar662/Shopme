<?php
$conn=new mysqli('localhost','root','','acme_jan_pro');
if($conn->connect_error){
        echo "connection error";
        die;
}
?>