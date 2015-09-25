<?php
// the message
$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);
$name = "emailtest@exampe.com";
$headers = "From: $name" ;
// send email
mail("webdev271@gmail.com","My subject",$msg,$headers);
