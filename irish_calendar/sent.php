<?php
$dataFile = 'bbs.dat';
if ($_SERVER['REQUEST_METHOD']) == 'POST') {
  $date = $_POST['date'];
  $place =['place'];
  $eventType = $_POST['eventType'];
  $conten = $_POST['content'];
  $url = $POST['url'];

$newData = $date . "\t" . $eventType . "\n" ;

$fp = fopen($dateFile, 'a');
fwrite($fp, $newDate);
fclose($fp);

}
