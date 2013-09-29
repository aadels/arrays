<?php
$contestant["rick"] = "Winner";
$contestant["julie"] = "Loser";
$contestant["ann"] = "Winner";
$contestant["larry"] = "Loser";
$contestant["mairead"] = "Winner";
?>

<h1>Contestants</h1>

  <?php
  $j= count($contestant);
  for ($i=0; $i < $j; $i++){
     echo $contestant[""]. "<br>";
}
?>

