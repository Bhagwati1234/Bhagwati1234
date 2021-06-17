<?php
//Check whether the submission is made
if(isset($_POST["hidSubmit7"])){

//msg body
$txtMsg = "<html>
<head></head>
<body>

<table>
	<tr>
		<td>Name : ".$_POST["txtname"]."</td>
	</tr>
	<tr>
		<td>Company Name : ".$_POST["txtcompany_name"]."</td>
	</tr>
	<tr>
		<td>Email : ".$_POST["txtemail"]."</td>
	</tr>
	<tr>
		<td>Phone : ".$_POST["txtphone"]."</td>
	</tr>
	<tr>
		<td>Message : ".$_POST["txtmessage"]."</td>
	</tr>
</table></body></html>";

//Declarate the necessary variables
$mail_to = "salesbpatel@gmail.com,sumitsonavane62@gmail.com";
$mail_from=$_POST["txtEmail"];
$mail_sub="Contact Form Details";
$mail_mesg=$txtMsg;

/*$headers = "From:$mail_from/r/nReply-to:$mail_from";
$headers .= "Content-type: text/html\r\n";*/

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

//Check for success/failure of delivery 
if(mail($mail_to,$mail_sub,$mail_mesg,$headers))
echo "<center><span class='textred' align='center'><b>E-mail has been sent successfully </b></span></center>";
else
echo "<center><span class='textred' align='center'><b>Failed to send the E-mail from $mail_sub to $mail_to</b></span></center>";
}

echo ("<meta http-equiv='refresh' content='2;url=index.html'>");
?>