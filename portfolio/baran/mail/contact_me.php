<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));
$message = nl2br($message);
   
// Create the email and send the message
$to = 'bilbaomanuel98@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Nuevo mensaje de contacto";
$email_body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   <title>Nuevo mensaje de contacto</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body style="margin:0; padding:0;">
   <table cellspacing="0" cellpadding="0" width="100%">
     <tr>
       <td style="padding:20px 0 0 0;">
         <table align="center" bgcolor="#f8f8f8" border="1" cellpadding="0" cellspacing="0" width="600" style="border-collapse:collapse;">
            <tr>
               <td align="center" bgcolor="#000000" style="padding:20px 0 20px 0; color: #FFFFFF;">
               <img src="http://www.bilbao.com.ar/baran/img/Logo.png" alt="GRUPO BARAN" width="300" style="display: block;" />
               </td>
            </tr>
            <tr>
              <td style="padding:40px 30px 40px 30px">
                <table cellspacing="0" cellpadding="0" width="100%">
                  <tr>
                     <td style="color: #153643; font-family: Arial, sans-serif; font-size: 24px;">
                        <b>Nuevo mensaje de ' . $name . '</b>
                     </td>
                  </tr>
                  <tr>
                     <td style="font-family:Arial, sans-serif; font-size:16px; color:#000000; line-height: 20px; padding:20px 0 30px 0;">
                       ' . $message . '
                     </td>
                  </tr>
                  <tr>
                     <td style="font-family:Arial, sans-serif; font-size:16px; color:#000000; line-height: 20px;">
                        Tel.: ' . $phone . '<br />
                        Mail: ' . $email_address . '
                     </td>
                  </tr>
                </table>
              </td>
            </tr>
         </table>
       </td>
     </tr>
   </table>
</body>
</html>';

$email_body = wordwrap($email_body,70);

$headers = "Content-type: text/html; charset=utf-8;";
$headers .= "From: noreply@grupobaran.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: " . $email_address;
mail($to,$email_subject,$email_body,$headers);


$para = $email_address;
$asunto = "¡Gracias por contactarse!";

$msj = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   <title>¡Gracias por contactarse!</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body style="margin:0; padding:0;">
   <table cellspacing="0" cellpadding="0" width="100%">
      <tr>
         <td style="padding:20px 0 0 0;">
            <table align="center" bgcolor="#f8f8f8" border="1" cellpadding="0" cellspacing="0" width="600" style="border-collapse:collapse;">
               <tr>
                  <td align="center" bgcolor="#000000" style="padding:20px 0 20px 0; color: #FFFFFF;">
                     <img src="www.bilbao.com.ar/baran/img/Logo.png" alt="GRUPO BARAN" width="300" style="display: block;" />
                  </td>
               </tr>
               <tr>
                  <td style="padding:40px 30px 40px 30px">
                     <table cellspacing="0" cellpadding="0" width="100%">
                        <tr>
                           <td style="font-family:Arial, sans-serif; font-size:16px; color:#000000; line-height: 20px;">'. $name .',<br />
                              Gracias por comunicarse con nosotros.<br />
                              Le responderemos a la brevedad.<br />
                              <br />
                              Su mensaje:<br />
                              ' . $message . '
                           </td>
                        </tr>
                     </table>
                  </td>
               </tr>
               <tr>
                  <td bgcolor="#2C3E50" style="padding: 30px 30px 30px 30px;">
                     <table cellpadding="0" cellspacing="0" width="100%">
                        <tr>
                           <td width="75%" style="color: #ffffff; font-family: Arial, sans-serif; font-size: 14px;"><a href="http://www.grupobaran.com/" style="color: #ffffff;"><font color="#ffffff">GrupoBaran.com</font></a></td>
                           <td width="25%" align="right" style="text-align:right; float: right;">
                              <table border="0" cellspacing="0" cellpadding="0">
                                 <tr>
                                    <td>
                                       <a href="http://www.facebook.com/GrupoBaran/">
                                          <img src="www.bilbao.com.ar/baran/img/fb3.png" alt="Facebook" width="38" height="38" style="display: block;" border="0" />
                                       </a>
                                    </td>
                                 </tr>
                              </table>
                           </td>
                        </tr>
                     </table>
                  </td>
               </tr>
            </table>
         </td>
      </tr>
      <tr>
         <td style="padding:0 0 30px 0;">
            <table width="600" align="center" cellpadding="0" cellspacing="0" style="border-collapse:collapse;" >
               <tr>
                  <td align="center" style="color: #555555; font-family: Arial, sans-serif; font-size: 11px; padding:5px 0 0 0;">Este mail fue generado automáticamente. Por favor no responda a esta dirección ya que no será recibido</td>
               </tr>
            </table>
         </td>
      </tr>
   </table>
</body>
</html>';

$msj = wordwrap($msj,70);

$headersResp .= "From: Grupo Baran < noreply@grupobaran.com >\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headersResp .= "X-Sender: Grupo Baran < noreply@grupobaran.com >\n";
$headersResp = "Content-type: text/html; charset=utf-8;";

mail($para,$asunto,$msj,$headersResp);
return true;
?>
