<?php

  $dbHost     = "localhost";
  
  $dbDatabase = "jbt";
  
  $dbPasswrod = "root";
  
  $dbUser     = "root";

  $conn = new mysqli($dbHost, $dbUser, $dbPasswrod, $dbDatabase);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  ?>
