<?php

$item = $_POST['postitem'];
$address = $_POST['postaddress'];
$name = $_POST['postname'];
$color = $_POST['postcolor'];
$size = $_POST['postsize'];
$id = $_POST['postid'];

$to='hyunsupply@outlook.com';
$subject= 'Payment information for order '.$id;
$message="Item: ".$item."\n"."Shipping address: ".$address."\n"."Color: ".$color."\n"."Name of buyer: ".$name."\n"."Size: ".$size."\n"."Purchase ID: ".$id."\n\n"."Check full payment details: https://www.paypal.com/mep/dashboard";

mail($to, $subject, $message);

?>