
<?php 
	//SUBJECT OF MAIL
	$subject = "Contact Form Submitted From The Bakos Agency, Inc.";

	//DETAIL WHICH RECIEVED FROM THE INDEX.HTML	
	$fullname = $_REQUEST['first_name'] . " " . $_REQUEST['last_name'] ;	
	$title = $_REQUEST['title'];
	$organization = $_REQUEST['organization'];
	$wPhone = $_REQUEST['wPhone'];	
	$fax = $_REQUEST['fax'];
	$hPhone = $_REQUEST['hPhone'];
	$email = $_REQUEST['email'];	
	$comments = $_REQUEST['comments'];	
	$chkbox = $_REQUEST['chkbox'];	
	

	//FROM TAG USED FOR THE FROM IN EMAIL. THIS WILL BE WRITTEN IN MAIL'S FROM
	$from = "inquiry@thebakosagency.com";
	$name =  "Bakos Agency";

	
	//DONT CHANGE THIS -------START
	$headers  = "From: ".$from; 
	$headers .= " \r\nMIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
	//DONT CHANGE THIS -------END
	
	//THIS IS THE TABLE FORMAT CONTENT, IT WILL DISPLAY IN THE EMAIL. CHANGE COLOR OR OTHER THING HERE
	$body = "<table width='500' border='0' cellpadding='4' cellspacing='1' bgcolor='#FFFFFF' style='border:1px solid #CCCCCC;'>
				<tr><td  colspan='2' align='center' bgcolor='#FFCC00' style='font-family:Arial; font-size:12px;font-weight:bold;'> Inquiry Details </td></tr>
				<tr>
					<td width='50%'  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>Full Name</td>
					<td width='50%' bgcolor='#f8f8f8'>".$fullname."</td>
				</tr>
				<tr>
					<td  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>Title</td>
					<td bgcolor='#f8f8f8'>".$title."</td>
				</tr>
				<tr>
					<td  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>Organization</td>
					<td bgcolor='#f8f8f8'>".$organization."</td>
				</tr>
				<tr>
					<td  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>Work Phone </td>
					<td bgcolor='#f8f8f8'>".$wPhone."</td>
				</tr>
				<tr>
					<td  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>Fax</td>
					<td bgcolor='#f8f8f8'>".$fax."</td>
				</tr>
				<tr>
					<td  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>Home Phone </td>
					<td bgcolor='#f8f8f8'>".$hPhone."</td>
				</tr>
				<tr>
					<td  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>Email</td>
					<td bgcolor='#f8f8f8'>".$email."</td>
				</tr>
				<tr>
					<td  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>Comments</td>
					<td bgcolor='#f8f8f8'>".$comments."</td>
				</tr>
				<tr>
					<td  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>Like to be in our mailing list</td>
					<td bgcolor='#f8f8f8'>".$chkbox."</td>
				</tr>
			</table>";
		
	///BY DEFAULT ENAUK UD	
	$sendList = "Ann.Wagner@bakosagency.com";
	//FINALLY SEND MAIL
	$send = mail($sendList, $subject, $body, $headers);
	header('Location: thankyou.html');  
?>
