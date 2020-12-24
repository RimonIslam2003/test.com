<?php
$to='rimonislam2003@gmail.com';
$subject='For test';
$message='Hi how are you ';
$headers='rimonislam2003@gmail.com';
mail($to,$subject, $message, $headers);

if(mail($to,$subject, $message, $headers)
){
    echo 'msg sent';
}else{
    echo'there have a problem';
}

