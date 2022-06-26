<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            position:absolute;
           bottom:10px;
            
        }
        .mybtn{
            font-size:40px;
        }
        .main{
            text-align: center;
        }
         
        .marq{
            padding-top: 30px;
            padding-bottom: 30px;
            font-weight:1000;
        }
        </style>
</head>
<body>
    
</body>
</html>

<?php 
    include_once 'view_products.php';
    include_once 'connection.php';
    $cmd='select * from products where pid=$pid';
    $sql_result=mysqli_query($conn,$cmd);
    echo'<table>';
    while($row=mysqli_fetch_assoc($sql_result)){
    
    $pid=$row['pid'];
    $name=$row['name'];
    $details=$row['details'];
    $price=$row['price'];
    $imsrc=$row['imlocation'];

    echo "<div class='bg-info parent mt-4 mx-3'>
    <div class='bd-rad-12 d-flex align-items-center justify-content-around bg-warning'>
    <h3 class='text-center text-dark'>$name</h3>
    <h4 class='text-success'><span class='currency'>Rs.</span>$price</h4>
    </div>
    <img src='$imsrc' class='myimg'>
    <p class='mb-0 text-center details'>$details</p>
    <div class='action_buttons'>
   <a href='deletepdt.php?pid=$pid'>
    <button class='mybtn btn text-danger'><i class='fa fa-trash'></i></button>
   </a>
    </div>
    </div>";
}
echo '</table>';
?>