<?php
$contestant["rick"] = "Winner";
$contestant["julie"] = "Loser";
$contestant["ann"] = "Winner";
$contestant["larry"] = "Loser";
$contestant["mairead"] = "Winner";
?>

<h1>Contestants</h1>

<?php
for each($contestant as $name => $status) {
	echo $name."is a".$status."! <br>";
}
?>