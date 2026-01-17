<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <style>

    .sidebar {
      border:2px solid black;
      width:15vw;
      background-color:white; 
      box-sizing:border-box;
      box-shadow:0 1px 5px rgba(0,0,0,0.2);
    }
    .sidebar ul.navbar-nav li.nav-item a.nav-link {
      color:black;
      font-weight:300;
      margin:1px 10px;
      border-radius:2px;
      text-transform:lowercase;
    }
    .sidebar ul.navbar-nav li.nav-item a.nav-link:hover {
      box-shadow: 0 0 1px 1px rgba(255, 0, 0, 0.5);
      background-color:#FF6666;
    }
    .heading{
      border-bottom:2px solid red;
    }
    @media (max-width: 768px) {
  .sidebar {
   width:90vw;
  }}

  </style>

</head>
<body>
<div class="sidebar mb-4">
    <h2 class="text-dark ps-1 heading">Catagory</h2>
  <ul class="navbar-nav p-1 text-dark ">
  <?php 
require_once "./connect.php";
$qry = "SELECT * FROM catagory";
$res = $conn->query($qry);
while($bnd= $res->fetch_assoc()){
  $k=$bnd["cat_name"];
  $cid=$bnd["cid"]
?>
<li class="nav-item">
    <a class="nav-link fw-bold" href="./shop.php?cat_id=<?php echo $k?>"><?php echo "$k";?></a>
  </li>
<?php
}
?>
  </ul>
</div> 
<br>
<div class="sidebar mb-4">
  <h2 class="text-dark ps-1 heading">Brand name</h2>
<ul class="navbar-nav p-1 text-dark ">

<?php 
$qry = "SELECT * FROM brand";
$res = $conn->query($qry);
while($bnd= $res->fetch_assoc()){
  $k=$bnd["brand_name"];
  $bid=$bnd["bid"];
?>
<li class="nav-item">
    <a class="nav-link fw-bold" href="./shop.php?brand_id=<?php echo $k?>"><?php echo "$k";?></a>
  </li>
<?php
}
?>
</ul>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>