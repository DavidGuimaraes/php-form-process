

<?php

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$message = $_POST['message'];

echo "<p>Hello, ".$firstName."!"." Thank you very much for your contact!
		We will get in touch with you asap on the e-mail ".$email;
?>