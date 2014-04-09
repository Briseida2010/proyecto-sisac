<?php // lista de correos electrónicos -- pueden guardarse en una base de datos 
$list[0]="martijudi@hotmail.com";
$list[1]="haydee_1620@yahoo.es";
$list[2]="martin_alcantara@hotmail.com"; 
$list[3]="revasoft00@hotmail.com"; 
$list[4]="elardroma@hotmail.com"; 
$list[5]="martin_rosado25@yahoo.es"; 
$list[6]="rpoma@electrosur.com.pe"; 
$list[7]="roberto.mliendo@gmail.com"; 
$list[8]="ralanoca@camactacna.com.pe"; 
$list[9]="lfvfernandez@msn.com"; 
$liststep=2; 
// number of emails to send out at a time 
$TotalAddresses=10; $myFile = "listcount.txt"; 
// revisa la existencia de un archivo de conteo. Si no existe, lo crea 
// Si existe, carga el contador, lo incrementa y lo pasa a una rutina de correo 
if (file_exists($myFile))
 { $fh = fopen($myFile, 'r');
  $count=intval(fgets($fh)); 
  $count=$count+$liststep; fclose($fh);
  $fh = fopen($myFile, 'w'); 
  fwrite( $fh,$count); 
  fclose($fh); 
}
else
 {
  $fh =fopen($myFile, 'x'); 
  $count=$liststep; 
  fwrite($fh, $count); 
  fclose($fh); 
} 
// tu correo electrónico y el asunto 
$email='myorganization@myemailservice.com';
 $subject="meeting announcement"; 
 // encabezado para indicar dónde y a quién se le debe responder el correo
  $headers = 'From: ' . $email . "\r\n" . 'Reply-To: ' . $email . "\r\n" ; 
  $themessage='Este es mi mensaje. Debe ser HTML también: sólo tienes que observar las comillas sencillas y dobles'; 
  // rutina del correo
   // esta sección se repite por la lista de direcciones hasta que la cuenta llega a 10 
  // retira el comentario de la función mail() cuando estés listo para enviar los correos. 
  if ($count<$TotalAddresses) { for ($n=0;$n<$count;$n++)
   { 
   $result=mail($list[$n], "Meeting Invitation", $themessage,$headers); 
   	if ($result=True) { echo $list[$n].' sent!<br> '; 
   // if the mail function is successful } } } ?>