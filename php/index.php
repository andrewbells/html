<!DOCTYPE html>
<html>
    <head>
       <title>Registration form</title>
       <link rel="stylesheet" href="form-basics.css" type="text/CSS" charset="utf-8"/>
    </head>
    <body>
    	<?php
    	error_reporting(0);
    	require './connect.php';
		
		if($result = $db->query("SELECT * FROM people")) {
					
					/* doesnt work for some reason
				if($result->num_rows) {
					
					$rows = $results->fetch_assoc();
					echo '<pre>' , print_r($rows) , '</pre>';
				}
					 */
				
			if($count = $result->num_rows) {
				echo '<p>',$count,'</p>';
				
				while($row = $result->fetch_assoc()) {
					echo $row['first_name'], ' ', $row['last_name'], '<br>';
				}
			}
				
		}
    	?>
        <form action="process.php" method="post">
        	<p>Enter your name</p><input type="text" name="name">
        		<input type="submit" value="submit">
        </form>
    </body>
</html>

