<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$call = $_POST['call'];
$website = $_POST['website'];
$priority = $_POST['priority'];
$type = $_POST['type'];
$message = $_POST['message'];
$formcontent=" From: $name \n Phone: $phone \n Call Back: $call \n Website: $website \n Priority: $priority \n Type: $type \n Message: $message";
$recipient = "saavedrabse@gmail.com";
$subject = "Mensaje desde sitio Web";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Muchas gracias por tu mensaje, te respondere a la brevedad posible." . " -" . "<a href='#' style='text-decoration:none;color:#ff0099;'> Volver a Sitio web</a>";



$recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify'; 
$recaptcha_secret = '6Lfcs6IeAAAAAH1YDjubRExXFSoptUQr0aKI4dqN'; 
$recaptcha_response = $_POST['recaptcha_response']; 
$recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response); 
$recaptcha = json_decode($recaptcha); 
if($recaptcha->score >= 1){
    // Añade aquí el código que desees en el caso de que la validación sea correcta
}else{
    // Añade aquí el código que desees en el caso de que la validación no sea correcta
}

?>


