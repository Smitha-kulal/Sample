
<?php
if(!isset($_POST['submit']))
{
	echo "<script>window.alert('Enter the Secret Key and try again...')
    window.open('Admin_Page2.html', '_self')</script>";
}
ini_set("SMTP", "aspmx.l.google.com");
ini_set("sendmail_from", "smitharkulal123@gmail.com");

$password = $_POST['password'];

$to_email = $_POST['usermail'];
$subject = "Secret Key";
$body = "Secret Key for Decryption : $password";
$headers = "From: smitharkulal123@gmail.com";

mail($to_mail, $subject, $message, $headers);
echo "Check your email now....&lt;BR/>";

if(mail($to_email, $subject,$body, $headers)) {
    echo "<script>window.alert('Secret Key mailed successfully!')
    window.open('Admin_Page2.html', '_self')</script>";
}
?>