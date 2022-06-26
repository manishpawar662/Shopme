<!DOCTYPE html>
<html lang="en">
<head>
<style>
    .viewprod{
            background:yellow;
            font-family:'Comic Sans MS';
font-size:2em;
line-height:1.3em;
color:red;
background-color:yellow;
padding:1.5px;
width:230px;
    }
</style>
</head>
<body>
    
</body>
</html>

<?php

include_once 'connection.php';
echo"<div class='viewprod'>
<a href='view_products.php'>
     View Products
</a>
</div>";
 $name=$_POST['name'];
 $details=$_POST['description'];
 $price=$_POST['price'];

$conn=new mysqli('localhost','root','','acme_jan_pro');
if($conn->connect_error){
        echo "connection error";
        die;
}
date_default_timezone_set('Asia/kolkata');
$unique_file_name=date('d_m_Y_h_i_s').'.jpg';
//echo "$unique_file_name";

move_uploaded_file($_FILES['imdata']['tmp_name'],$unique_file_name);

$cmd="insert into products(name,details,price,imlocation) values('$name','$details',$price,'$unique_file_name')";

$res=mysqli_query($conn,$cmd);
if($res){
    echo "<h1><a style='color:green' href='upload_products.html'>Upload Product Success!</a></h1>";

}
else{
    echo "<h1><a style='color:red' href='upload_products.html'>Upload Product failed!</a></h1>";
}
?>