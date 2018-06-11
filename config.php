<?php

 $con = mysqli_connect("fdb6.awardspace.net","2507956_englishapp","Shukuk@1","2507956_englishapp");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  echo "hello";
 ?>