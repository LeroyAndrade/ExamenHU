<?php
session_start();

//Dit document is heel zwaar aangepast, ik geef je de zwaar beveiligde checks, maximaam twee weken na einde sprint.
// VALUES FROM THE FORM
// $onderwerp	   	 = $_POST['name'];
$email	         = $_POST['email'];
$subject	       = $_POST['onderwerp'];
$textareaBericht = $_POST['textareaBericht'];

// ERROR & SECURITY CHECKS
if ( ( !$email ) ||
 ( strlen($_POST['email']) > 200 ) ||
 ( !preg_match("#^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$#", $email) )
)
{
 print "Error: Invalid E-Mail Address";
 exit;
}
// if ( ( !$name ) ||
// 	 ( strlen($name) > 100 ) ||
// 	 ( preg_match("/[:=@\<\>]/", $name) )
//    )
// {
// 	print "Error: Invalid Name";
// 	exit;
// }
if ( preg_match("#cc:#i", $textareaBericht, $matches) )
{
 print "Error: Found Invalid Header Field";
 exit;
}
if ( !$textareaBericht )
{
 print "Error: No textareaBericht";
 exit;
}
/*if (eregi("\r",$email) || eregi("\n",$email)){
 print "Error: Invalide E-Mail Addres";
 exit;
}
   */
if (FALSE) {
 print "Error: You cannot send to an email address on the same domain.";
 exit;
}

// Maak email bericht aan
$headers	= "Content-Type: text/plain; charset=iso-8859-1\n";
$headers	.= "From: <$email>\n";
// $recipient	= "info@firesofdestruction.nl";
$recipient	= "Leroy_Andrade@hotmail.com";
$textareaBericht	= wordwrap($textareaBericht, 1024);

// Verstuur mail
mail($recipient, $subject, $textareaBericht, $headers);

// REDIRECT TO THE THANKS PAGE
// header("location: ./page-overzicht.php");
header("location: https://firesofdestruction.nl/bewijzenmap/l3/hu-techwp/wp-content/themes/huTheme/pages/page-contact.php");
?>
