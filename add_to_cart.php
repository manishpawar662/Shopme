<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/ud/popper.min.js"></script> 
    <script src="https://maxcdn. bootstrapcdn.com/bootstrap/1.5.0/js/bootstrap.min.js"></script>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
</svg>
    <style>
        .parent{
            width:290px;
            height:400px;
            box-shadow: 5px 5px 5px 0px rgba(0,0,0,0.82);
            border-radius:12px;
            position:relative;
        }
        .currency{
            color:red;
            font-size:18px;
        }
        .details{
            font-weight:1000;
            color:white;
        }
        .myimg{
            width:100%;
            height:200px;
        }
        .bd-rad-12 {
            border-top-left-radius:12px;
            border-top-right-radius:12px;
        }
        .action_buttons{
        transform: translate(2800%,300%);
        width:10px;
        height:20px;
        }
        .mybtn{
            font-size:45px;
            bottom:3px;
            transform:translate(80  %,20%);
            
        }
        .main{
            text-align: center;
        }
         
        .marq{
            padding-top: 30px;
            padding-bottom: 30px;
            font-weight:1000;
        }
        .mytext{
            font-family: Impact, Charcoal, sans-serif;
font-size: 29px;
letter-spacing: 0.4px;
word-spacing: 1.8px;
color: #000000;
font-weight: 400;
text-decoration: overline solid rgb(68, 68, 68);
font-style: italic;
font-variant: small-caps;
text-transform: capitalize;
        }
        </style>
</head>
<body>
    <h1 class='mytext'>Acmepro Cart</h1>
    
</body>
</html>


<?php 
include_once 'connection.php';
$pid=$_GET['pid'];

$query="SELECT * FROM products WHERE pid = $pid";

$sql_result=mysqli_query($conn,$query);
$rowcount=mysqli_num_rows($sql_result);
echo"$rowcount";
if($rowcount==null){
    echo'Invalid operation';
}
else{
while($row=mysqli_fetch_assoc($sql_result)){
$pid=$row['pid'];
$name=$row['name'];
$details=$row['details'];
$imsrc=$row['imlocation'];  
$price=$row['price'];

$cmd="insert into cart(pid,name,details,price,imlocation) values($pid,'$name','$details',$price,'$imsrc')"; 
$sql_result1=mysqli_query($conn,$cmd);
echo '<script type ="text/JavaScript">';  
echo 'alert("Item added to cart")';  
echo '</script>'; 
header("location:client_view.php");
}
}

?>