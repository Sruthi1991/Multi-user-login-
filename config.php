
<?php
   // Database configuration
   //hostname -End point of RDS
   $hostname = "sampledb.cczexkg9ci56.ap-southeast-1.rds.amazonaws.com";
   $username = "admin";
   $password = "admin123";
   $dbname   = "sample";

   // Create database connection
   $con = new mysqli($hostname, $username, $password, $dbname);

   // Check connection
   if ($con->connect_error) {
       die("Connection failed: " . $con->connect_error);
   }
?>
