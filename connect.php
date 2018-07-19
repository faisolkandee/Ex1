<?php

   $serverName = "localhost";
   $userName = "root";
   $userPassword = "";
   $dbName = "customer";

   $conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
	
   $sql = "SELECT * FROM customer WHERE Name LIKE '%".$strKeyword."%' ";

   $query = mysqli_query($conn,$sql);

?>