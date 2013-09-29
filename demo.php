

<!DOCTYPE html>
<html>
	<head>
		<?php
		require_once('logic.php');
		?>
	</head>
	<body>

		<h1>Shopping list</h1>

  		<?php
  			for ($i=0; $i < count($shopping_list); $i++){
    		echo $shopping_list[$i]."<br>";
			}
		?>
	</body>

</html>