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
        transform: translate(2900%,248%);
        width:10px;
        height:20px;
        }
        .mybtn{
            font-size:45px;
            bottom:3px;
            
        }
        .main{
            text-align: center;
        }
         
        .marq{
            padding-top: 30px;
            padding-bottom: 30px;
            font-weight:1000;
        }
        .cart{
            width:50px;
            height:50px;
            bottom:3px;
            transform: translate(2570%,-1100%);
            position:absolute;
        }
        .btn1{
            width:100%;
            height:100%;
            
        }
        </style>
</head>
<body>
    
</body>
</html>


<?php
include_once 'connection.php';

$sql_result=mysqli_query($conn,'select * from products');

if(mysqli_num_rows($sql_result)==0){
    echo"
    <div class='main'>
        <marquee class='marq'
                 Scrollamount=10
                 direction='left'
                    loop=''>
            Upload products
        </marquee>
    </div>
    ";
}
$i=0;
echo"<div class='d-flex justify-content-start flex-wrap'>";
while($row=mysqli_fetch_assoc($sql_result))
{

$pid=$row['pid'];
$name=$row['name'];
$details=$row['details'];
$price=$row['price'];
$imsrc=$row['imlocation'];

    echo "<div class='bg-secondary parent mt-4 mx-3'>
    <div class='bd-rad-12 d-flex align-items-center justify-content-around bg-warning'>
    <h3 class='text-center text-dark'>$name</h3>
    <h4 class='text-success'><span class='currency'>Rs.</span>$price</h4>
    </div>
    <img src='$imsrc' class='myimg'>
    <p class='mb-0 text-center details'>$details</p>
    
    <div class='action_buttons '>
    <div class='w-50 d-flex justify-content-end'>
    <a href='add_to_cart.php?pid=$pid'>
     <button class='mybtn btn text-dark' p-3><i class='fa fa-cart-plus'></i></button>
    </a>
     </div> 
   </div>
    </div>
    <div>
    </div>
    
    ";
    $i++;
}
echo'</div>';
echo"<div class='cart'><a href='cart.php'>
<button class='btn1 text-dark' p-3><i class='fa fa-shopping-cart'></i></button>
</a></div>";
/* on line 69 instead of anchor tag this can also be used if POST is needed 
<form method='GET' action='deletepdt.php' value='$pid'>
   <<button class='mybtn btn text-danger'><i class='fa fa-trash'></i></button>
   </form>*/
echo '';

?>

