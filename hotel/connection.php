<?php
   $con=mysqli_connect("localhost","root","","testing",3306);
   
   if(mysqli_connect_error())
   {
       echo"<script>alert('Cannot Connect');</script>";
       exit();
   }

?>