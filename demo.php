

<!DOCTYPE html>
<html>
	<head>
		<?php
		require_once('logic.php');
		?>
	</head>
	<body>

		<h1>Shopping list using for loop</h1>

  		<?php
  			$j=count($shopping_list);
  			for ($i=0; $i < $j; $i++){
    		echo $shopping_list[$i]."<br>";
			}
		?>
		<br> <br>

		<h1> Shopping list using foreach loop</h1>
		<?php
			$j=count($shopping_list);
			foreach ($shopping_list as $key => $value){
				echo $value."<br>";
			}
		?>

	</body>

</html>