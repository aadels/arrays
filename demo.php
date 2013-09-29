

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
  		$j= count($shopping_list);
  		for ($i=0; $i < $j; $i++){
    	echo $shopping_list[$i]."<br>";
		}
		?>
	</body>

</html>