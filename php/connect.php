<?php
    //$db= new mysqli("127.0.0.1","root","","test");
	
	//if($db->connect_errno) {
		//echo $db->connect_error;
		// die('Sorry, we are having some problems');
	//}


// Create connection
 $db=mysqli_connect("127.0.0.1","root","","test");

// Check connection
 if (mysqli_connect_errno($db))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>