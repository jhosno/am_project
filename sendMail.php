<?php




//datos obtenidos
$name=$_POST["name"];
$phoneNumber=$_POST["phoneNumber"];
$email=$_POST["email"];
$service=$_POST["service"];
$zipCode=$_POST["zipCode"];



$to  = $email; // Email de la persona que envia el comentario


// Asunto
$subject = 'Get Your Free Quote';

// message
$message = '
<html>
<head>
  <title>Get Your Free Quote</title>
</head>
<body>
  <p><font color="blue">Contacto desde el portal web AM Project.</font></p>
  <table>
    <tr>
      <td width="30%"><strong>Name:</strong></td>
	  <td>'. $name .'</td>
	</tr> 
    <tr>
      <td><strong>Tel&eacute;fono:</strong></td>
	  <td>'. $phoneNumber .'</td>
	</tr> 	
	<tr>
      <td><strong>Email:</strong></td>
	  <td>'. $email .'</td>
	</tr> 	
	<tr>
      <td><strong>Servicio:</strong></td>
	  <td>'. $service .'</td>
	</tr> 	
	<tr>
      <td><strong>Zip Code:</strong></td>
	  <td>'. $zipCode .'</td>
	</tr> 		
  </table>
</body>
</html>
';

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= 'To: AM Project <amprojectmiami@gmail.com>' . "\r\n";
$headers .= 'From: Contacto desde el portal web AM Project <amprojectmiami@gmail.com>' . "\r\n";


//Envio del email
mail($to, $subject, $message, $headers);
//Redireccion al home
header("Location: http://www.amprojectflorida.com"); 

?>