
<?php
//MAILVARIABLEN AAN MAKEN
$to = '15982@ma-web.nl';
$subject = $_POST['subject'];
$message = $_POST['message'];
$headers = 'form: ' . $_POST['form'];

//MAIL VERSTUREN
mail($to, $subject, $message, $headers);

// BEVESTIG VOOR DE GEBRUIKER
echo 'Uw mail is verstuurd. Bedankt!';
?>
