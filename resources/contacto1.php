<?php	



	if ($_POST['Submit']) {



	//$para = htmlspecialchars($_POST['mensaje'], ENT_QUOTES);

	$name = htmlspecialchars($_POST['nombre'], ENT_QUOTES);

	$email = htmlspecialchars($_POST['email'], ENT_QUOTES);

	$comments = htmlspecialchars($_POST['comentarios'], ENT_QUOTES);



	$strHTML = "<HTML> \n";

	$strHTML .= "<HEAD> \n";

	$strHTML .= "<META content=\"text/html\"; charset=\"iso-8859-1\"> \n";

	$strHTML .= "</HEAD> \n";

	$strHTML .= "<body> \n";

	$strHTML .= "<div align='center'> \n";

	$strHTML .= "<p><font size='2' face='Verdana, Arial, Helvetica, sans-serif'>Comentario enviado desde el sitio web de<br> \n";

	$strHTML .= "<strong>Alfonso Arias</strong></font></p> \n";

	$strHTML .= "<table width='90%'  border='0' cellspacing='2' cellpadding='2'> \n";

	$strHTML .= "<tr> \n";

	$strHTML .= "<td width='13%'><strong><font size='2' face='Verdana, Arial, Helvetica, sans-serif'>Nombre:</font></strong></td> \n";

	$strHTML .= "<td width='87%'><font size='2' face='Verdana, Arial, Helvetica, sans-serif'> $name </font></td> \n";

	$strHTML .= "</tr> \n";

	$strHTML .= "<tr> \n";

	$strHTML .= "<td><strong><font size='2' face='Verdana, Arial, Helvetica, sans-serif'>E-mail:</font></strong></td> \n";

	$strHTML .= "<td><font size='2' face='Verdana, Arial, Helvetica, sans-serif'> $email </font></td> \n";

	$strHTML .= "</tr> \n";

	$strHTML .= "<tr> \n";

	$strHTML .= "<td><strong><font size='2' face='Verdana, Arial, Helvetica, sans-serif'>Comentario:</font></strong></td> \n";

	$strHTML .= "<td><font size='2' face='Verdana, Arial, Helvetica, sans-serif'> $comments </font></td> \n";

	$strHTML .= "</tr> \n";

	$strHTML .= "</table> \n";

	$strHTML .= "<p><strong><font size='2' face='Verdana, Arial, Helvetica, sans-serif'></font></strong></p> \n";

	$strHTML .= "</div> \n";

	$strHTML .= "</body>";

	$strHTML .= "</HTML>"; 



		//Enviar correo

		$to = "alfonso.arias@gmail.com";

		$subject = "Comentarios desde el sitio web";

		$BCC = "alfonsoarias2000@hotmail.com";



		$headers  = "MIME-Version: 1.0" . "\r\n";

		$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";

		//$headers .= "Content-Transfer-Encoding: quoted-printable" . "\r\n";

		$headers .= "From: Web site<alfonsoarias2000@hotmail.com>" . "\r\n";

		$headers .= "Bcc: $BCC" . "\r\n";



		mail($to, $subject, $strHTML, $headers);

		//}



	} //end $_POST['Submit'] 



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Jesús Alfonso Arias Alegría - Contacto, e-mail</title>
<link href="../estilos.css" rel="stylesheet" type="text/css" />
<style type="text/css">




td img {display: block;}td img {display: block;}td img {display: block;}td img {display: block;}td img {display: block;}
</style>
</head>

<body>
<div align="center">
  <table width="800" border="0" align="center" cellpadding="0" cellspacing="0" style="display: inline-table;">
    <!-- fwtable fwsrc="contacto.png" fwpage="Page 1" fwbase="contacto.jpg" fwstyle="Dreamweaver" fwdocid = "955102727" fwnested="0" -->
    <tr>
      <td><img src="images/contacto/images/spacer.gif" width="19" height="1" border="0" alt="" /></td>
      <td><img src="images/contacto/images/spacer.gif" width="50" height="1" border="0" alt="" /></td>
      <td><img src="images/contacto/images/spacer.gif" width="57" height="1" border="0" alt="" /></td>
      <td><img src="images/contacto/images/spacer.gif" width="13" height="1" border="0" alt="" /></td>
      <td><img src="images/contacto/images/spacer.gif" width="28" height="1" border="0" alt="" /></td>
      <td><img src="images/contacto/images/spacer.gif" width="48" height="1" border="0" alt="" /></td>
      <td><img src="images/contacto/images/spacer.gif" width="78" height="1" border="0" alt="" /></td>
      <td><img src="images/contacto/images/spacer.gif" width="68" height="1" border="0" alt="" /></td>
      <td><img src="images/contacto/images/spacer.gif" width="419" height="1" border="0" alt="" /></td>
      <td><img src="images/contacto/images/spacer.gif" width="20" height="1" border="0" alt="" /></td>
      <td><img src="images/contacto/images/spacer.gif" width="1" height="1" border="0" alt="" /></td>
    </tr>
    <tr>
      <td colspan="8"><a href="../default.html"><img name="contacto_r1_c1" src="images/contacto/images/contacto_r1_c1.jpg" width="361" height="42" border="0" id="contacto_r1_c1" alt="" /></a></td>
      <td colspan="2"><img name="contacto_r1_c9" src="images/contacto/images/contacto_r1_c9.jpg" width="439" height="42" border="0" id="contacto_r1_c9" alt="" /></td>
      <td><img src="images/contacto/images/spacer.gif" width="1" height="42" border="0" alt="" /></td>
    </tr>
    <tr>
      <td colspan="2"><img name="contacto_r2_c1" src="images/contacto/images/contacto_r2_c1.jpg" width="69" height="34" border="0" id="contacto_r2_c1" alt="" /></td>
      <td width="57" height="34" bgcolor="#4778D5" class="white_font"><a href="../default.html" class="blanco">Inicio</a></td>
      <td height="34" colspan="3" bgcolor="#4778D5" class="white_font"><a href="profesional.html" class="blanco">Profesional</a></td>
      <td width="78" height="34" bgcolor="#4778D5" class="white_font"><a href="personal.html" class="blanco">Personal</a></td>
      <td width="68" height="34" bgcolor="#4778D5" class="white_font"><a href="contacto1.html" class="blanco">Contacto</a></td>
      <td><img name="contacto_r2_c9" src="images/contacto/images/contacto_r2_c9.jpg" width="419" height="34" border="0" id="contacto_r2_c9" alt="" /></td>
      <td><img name="contacto_r2_c10" src="images/contacto/images/contacto_r2_c10.jpg" width="20" height="34" border="0" id="contacto_r2_c10" alt="" /></td>
      <td><img src="images/contacto/images/spacer.gif" width="1" height="34" border="0" alt="" /></td>
    </tr>
    <tr>
      <td colspan="10"><img name="contacto_r3_c1" src="images/contacto/images/contacto_r3_c1.jpg" width="800" height="9" border="0" id="contacto_r3_c1" alt="" /></td>
      <td><img src="images/contacto/images/spacer.gif" width="1" height="9" border="0" alt="" /></td>
    </tr>
    <tr>
      <td rowspan="4" colspan="4"><img name="contacto_r4_c1" src="images/contacto/images/contacto_r4_c1.jpg" width="139" height="442" border="0" id="contacto_r4_c1" alt="" /></td>
      <td rowspan="4"><img name="contacto_r4_c5" src="images/contacto/images/contacto_r4_c5.jpg" width="28" height="442" border="0" id="contacto_r4_c5" alt="" /></td>
      <td colspan="4"><img name="contacto_r4_c6" src="images/contacto/images/contacto_r4_c6.jpg" width="613" height="31" border="0" id="contacto_r4_c6" alt="" /></td>
      <td rowspan="5"><img name="contacto_r4_c10" src="images/contacto/images/contacto_r4_c10.jpg" width="20" height="477" border="0" id="contacto_r4_c10" alt="" /></td>
      <td><img src="images/contacto/images/spacer.gif" width="1" height="31" border="0" alt="" /></td>
    </tr>
    <tr>
      <td colspan="4"><img name="contacto_r5_c6" src="images/contacto/images/contacto_r5_c6.jpg" width="613" height="8" border="0" id="contacto_r5_c6" alt="" /></td>
      <td><img src="images/contacto/images/spacer.gif" width="1" height="8" border="0" alt="" /></td>
    </tr>
    <tr>
      <td colspan="4"><img name="contacto_r6_c6" src="images/contacto/images/contacto_r6_c6.jpg" width="613" height="169" border="0" id="contacto_r6_c6" alt="" /></td>
      <td><img src="images/contacto/images/spacer.gif" width="1" height="169" border="0" alt="" /></td>
    </tr>
    <tr>
      <td height="234" colspan="4" valign="top" bgcolor="#FFFFFF" class="texto_gris_medio"><p align="center">&nbsp;</p>
        <p align="center">Tu mensaje ha sido enviado<br />
        </p>
      <p>&nbsp;</p></td>
      <td><img src="images/contacto/images/spacer.gif" width="1" height="234" border="0" alt="" /></td>
    </tr>
    <tr>
      <td><img name="contacto_r8_c1" src="images/contacto/images/contacto_r8_c1.jpg" width="19" height="35" border="0" id="contacto_r8_c1" alt="" /></td>
      <td height="35" colspan="8" bgcolor="#4778D5"><div align="left" class="white_font">&copy; 2014 - Jesús Alfonso Arias Alegría</div></td>
      <td><img src="images/contacto/images/spacer.gif" width="1" height="35" border="0" alt="" /></td>
    </tr>
    <tr>
      <td colspan="10"><img name="contacto_r9_c1" src="images/contacto/images/contacto_r9_c1.jpg" width="800" height="38" border="0" id="contacto_r9_c1" alt="" /></td>
      <td><img src="images/contacto/images/spacer.gif" width="1" height="38" border="0" alt="" /></td>
    </tr>
  </table>
</div>
<div align="center"></div>
</body>
</html>
