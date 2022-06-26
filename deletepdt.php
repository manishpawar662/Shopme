<?php
include_once 'connection.php';
$pid=$_GET['pid'];
echo "I am ready to delete products $pid";

$cmd="delete from products where pid=$pid";
$res=mysqli_query($conn,$cmd);
if($res){
  header('location:view_products.php');

}
else{
    echo"<a href='view_products.php'>Try again</php>";
}
?>