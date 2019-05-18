<?php

require_once('config.php');

$coffee_type = $_POST['coffee_type'];
$methods = $_POST['methods'];
$size = $_POST['size'];
$details = $_POST['details'];
$payment_methods = $_POST['payment_methods'];
//$queue_number = $_POST['queue_number'];
  
if(!$coffee_type || !$methods || !$size || !$details || !$payment_methods){
  echo json_encode(array('message'=>'Please fill the information as complete as possible :)'));
}else

{
$sql = "INSERT INTO main_database VALUES ('$coffee_type','$methods','$size','$details', NULL ,'$payment_methods')";
$query = mysqli_query($CON, $sql);
$queue_number= mysqli_insert_id($CON);

if( $query ) {
    header('Location: queue_display.php?queue_number='.$queue_number);
} else {
    header('Location: index.php?status=gagal');
}
}

?>