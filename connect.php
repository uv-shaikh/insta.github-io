<?php

$username='root';
$password='';
$server='localhost';
$db='instagram';

$con=mysqli_connect($server,$username,$password,$db);

if($con){
 ?>
 <!-- <script>
  alert('connection successfully');
 </script> -->
 <?php
}else{
    ?>
    <!-- <script>
     alert('connection failed');
    </script> -->
    <?php
}
?>