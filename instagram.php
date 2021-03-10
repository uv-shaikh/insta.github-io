<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
    <style>
    .div1{
        background-color:#00FFFF;
        height:100vh;
        position:relative;
    }
    .div2{
        margin-top:120px;
        position:absolute;
        width:100%;
        height:200px;
        display: table-cell;
        vertical-align: middle;
    }
    .profile{
        background-size: cover !important;
    background-position: center center;
    background-repeat: no-repeat;
    height: 250px;
    width: 250px;
    margin: 0 auto;
    margin-bottom: 30px;
    border-radius: 50%;
    }
    .img1{
        border-radius:50%;
    }
    .myname{
        position:absolute;
        width:100%;
        height:200px;
        display: table-cell;
        vertical-align: middle;
    }
     h3{
         color:#FF9000;
         font-family: "Lucida Console", "Courier New", monospace;
     }
     .services{
         background-color:#00FFFF;
         height:50vh;
     }
     .submit1{
         background-color:#FF9000;
         border:none;
         outline:none;
         border-radius:20px;
         padding:8px 20px;
         color:white;
         font-family: "Lucida Console", "Courier New", monospace;
     }
     .form1{
        background-color:#00FFFF;
        height:75vh;
     }
    </style>
</head>
<body>
 
 <div class="div1">
  <div class="div2">
   <div class="profile" style="background:url(images/tetrebbien-cpjfJjJ8TLY-unsplash.jpg);">
  </div>

    <h3 class="text-center mt-5"><i class="fa fa-instagram mr-2"></i>XX.UVESH_SHAIKH.XX<i class="fa fa-instagram ml-2"></i></h3>
     
    <h3 class="text-center mt-5"><i class="fa fa-globe mr-2"></i>WEB DESIGNER<i class="fa fa-globe ml-2"></i></h3>
  </div>
 </div>

 <h3 class="text-center mt-5" style="font-family: cursive">ABOUT ME</h3>
 <div class="container">
 <div class="row text-center">
     <div class="col-4" style="font-family: Georgia, serif;font-size:15px;">
         Full Name: 
     </div>
     <div class="col-8" style="font-family: Georgia, serif;font-size:15px;">
         Uvesh Shaikh
     </div>
     <div class="col-4 mt-2" style="font-family: Georgia, serif;font-size:15px;">
         Mobile: 
     </div>
     <div class="col-8 mt-2" style="font-family: Georgia, serif;font-size:15px;">
         7041923448
     </div>
     <div class="col-4 mt-2" style="font-family: Georgia, serif;font-size:15px;">
         Email 
     </div>
     <div class="col-8 mt-2" style="font-family: Georgia, serif;font-size:15px;">
         maparauvesh@gmail.com
     </div>
     <div class="col-4 mt-2" style="font-family: Georgia, serif;font-size:15px;">
         Address:
     </div>
     <div class="col-8 mt-2" style="font-family: Georgia, serif;font-size:15px;">
         Danilimda,Ahmedabad,Gujarat
     </div>
     <div class="col-4 mt-2" style="font-family: Georgia, serif;font-size:15px;">
         Country 
     </div>
     <div class="col-8 mt-2" style="font-family: Georgia, serif;font-size:15px;">
         India
     </div>
 </div>
 </div>

 <div class="services mt-5">
   <h3 class="text-center mt-5" style="font-family: cursive"><i class="fa fa-wrench text-dark mr-2"></i>My services<i class="fa fa-wrench text-dark ml-2"></i></h3>
   <h3 class="text-center mt-5" style="font-family: cursive">Web Design</h3>
   <h3 class="text-center mt-5" style="font-family: cursive">All type of web designing with database or without database</h3>
 </div>

 <h3 class="text-center mt-5"><i class="fa fa-cogs mr-2 "></i>Skills<i class="fa fa-cogs ml-2"></i></h3>
 <h5 class="text-center mt-4" style="font-size:21px;">HTML5</h5>
 <h5 class="text-center mt-4" style="font-size:21px;">CSS3</h5>
 <h5 class="text-center mt-4" style="font-size:21px;">JAVASCRIPT</h5>
 <h5 class="text-center mt-4" style="font-size:21px;">Jquery</h5>
 <h5 class="text-center mt-4" style="font-size:21px;">BOOTSTRAP</h5>
 <h5 class="text-center mt-4" style="font-size:21px;">C</h5>
 <h5 class="text-center mt-4" style="font-size:21px;">C++</h5>
 <h5 class="text-center mt-4" style="font-size:21px;">PHP</h5>

<div class="form1">
 <div class="container mt-5">
<h3 class="text-center" style="font-family: cursive">CONTACT US</h3>
<form method="POST" class="mt-3">
    <input type="text" name="fname" class="form-control" placeholder="YOUR FIRST NAME"><br>

    <input type="text" name="lname" class="form-control" placeholder="YOUR LAST NAME"><br>

    <input type="email" name="email" class="form-control" placeholder="YOUR EMAIL"><br>

    <input type="number" name="mobile" class="form-control" placeholder="YOUR MOBILE NUMBER"><br>

    <input type="text" name="address" class="form-control" placeholder="ADDRESS"><br>

    <input type="submit" name="submit" class="submit1 text-center" value="send message"><br>
</form>
</div>
</div>

<marquee><i class="fa fa-copyright"></i>Rights Reserved.Designed by Uvesh Shaikh<marquee>

    <script src="js/jquery.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>

<?php

include 'connect.php';

if(isset($_POST['submit'])){
    $firstname=$_POST['fname'];
    $lastname=$_POST['lname'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $address=$_POST['address'];

    $insertquery="insert into insta(firstname,lastname,email,mobile,address) values('$firstname','$lastname','$email','$mobile','$address')";

    $res=mysqli_query($con,$insertquery);

    if($res){
        ?>
        <script>
         alert("data has been successfully");
        </script>
        <?php
    }else{
        ?>
        <script>
         alert("data has not been successfully");
        </script>
        <?php
    }
}

?>