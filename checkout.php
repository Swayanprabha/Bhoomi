<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .bread,.box{

          background-color:#f5dfbb;
          z-index: 10;
          border-radius:7px;
          border: 2px solid black;
          backdrop-filter:blur(7px);
          box-shadow: -20px 20px 20px rgba(10,10,10,0.25);
}
.breadcrumb li:before{
content:"";
color:#cccccc;
}
    </style>
</head>
<body>
 <?php 
include_once("nav.php");
$cart_items=$_SESSION['cart_count'];
  $user_mail=$_SESSION['user_mail'];
  $invoice=$_SESSION['invoice'];
  ?>
  <div class="checkout mb-3">
    <div class="container">
        <div class="row">
        <div class="col-md-12 mt-2 bread">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb mt-2">
            <li class="breadcrumb-item "><a href="cart.php" style="text-decoration:none" class="text-dark fw-bold ms-3">cart</a></li>
            <li class="breadcrumb-item active" aria-current="page" class="text-dark fw-bold" >checkout</li>
        </ol>
        </nav>
    </div>
 <!-- cart contain start -->
 <h2 class="text-center text-dark fs-bolder mt-3" style="text-transform:uppercase;">Select The address To be delivered</h2>
      <div class="box w-50 mx-auto mt-2">
        <?php
        require_once "connect.php";
        $qry="SELECT * FROM user WHERE email='$user_mail'";
        $res=$conn->query($qry);
        $row=mysqli_fetch_array($res);
        $name=$row['name'];
        $state=$row['country'];
        $city=$row['city'];
        $home=$row['address'];
        $phone=$row['phone'];
        ?> 
        <div class="address">
          <p class="ms-3 fs-5">
            House No/Street:<?php echo $home ?><br>
            City:<?php echo $city?><br>
            State:<?php echo $state?><br>
            Country:<?php echo "India" ?><br>
            Phone No:<?php echo $phone ?><br>
          </p>
        </div> 
        <a href="user/confirm.php?vid=<?php echo $invoice;?>" class="btn btn-outline-dark w-25 d-block mx-auto">Proceed</a>
        <p class="fs-5 mt-2">Want to be delivered on a new address? <a href="user/myaccount.php?my_address&order=1" style="text-decoration:none" class="text-danger">edit address</a></p>
      </div>
        </div>
    </div>
    <div>
    </div>
  </div> 
</body>
</html>