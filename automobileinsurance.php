
<?php 
	//SUBJECT OF MAIL
	$subject = "Automobile Insurance Form Submitted From The Bakos Agency, Inc.";

	//DETAIL WHICH RECIEVED FROM THE INDEX.HTML	
	$fullname = $_REQUEST['name'];
	$address = $_REQUEST['address'];
	$city = $_REQUEST['city'];
	$state = $_REQUEST['state'];	
	$phone = $_REQUEST['phone'];
	$email = $_REQUEST['email'];
	$marital = $_REQUEST['marital'];	

	$dob = $_REQUEST['dob'];	
	$license = $_REQUEST['license'];	
	$occupation = $_REQUEST['occupation'];
	
	$ticket = $_REQUEST['ticket'];
	if($ticket == "Yes")
	{
		$ticketyes = $ticket . "." . $_REQUEST['ticketyes'];
	}
	else
	{
		$ticketyes = "No";
	}
	
	$driver = $_REQUEST['driver'];	
	if($driver == "Yes")
	{
		$driveryes = $driver . "." . $_REQUEST['driveryes'];	
	}
	else
	{
		$driveryes = "No";	
	}
	
	$ans = $_REQUEST['ans'];
	if($ans == "Yes")
	{
		$company = $_REQUEST['company'];	
		$eff_date = $_REQUEST['eff_date'];	
	}
	else
	{
		$company = "-";	
		$eff_date = "-";
	}
	
	$year = $_REQUEST['year'];
	$make = $_REQUEST['make'];
	$vin = $_REQUEST['vin'];
	
	$no_airbag = $_REQUEST['no_airbag'];
	if($no_airbag == "")
		$no_airbag = "-";
		
	$airbag = $_REQUEST['1airbag'];	
	if($airbag == "")
		$airbag = "-";
		
	$miles_on_car = $_REQUEST['miles_on_car'];
	
	$abs = $_REQUEST['abs'];
	if($abs == "")
		$abs = "-";
		
	$drl = $_REQUEST['drl'];	
	if($drl == "")
		$drl ="-";
		
	$alarm = $_REQUEST['alarm'];	
	$ad_year = $_REQUEST['ad_year'];
	$ad_make = $_REQUEST['ad_make'];
	$ad_vin = $_REQUEST['ad_vin'];
	
	$ad_no_airbag = $_REQUEST['ad_no_airbag'];
	if($ad_no_airbag == "")
		$ad_no_airbag = "-";
		
	$ad_1airbag = $_REQUEST['ad_1airbag'];	
	if($ad_1airbag == "")
		$ad_1airbag = "-";
		
	$ad_miles_on_car = $_REQUEST['ad_miles_on_car'];
	
	$ad_abs = $_REQUEST['ad_abs'];
	if($ad_abs == "")
		$ad_abs = "-";
		
	$ad_drl = $_REQUEST['ad_drl'];	
	if($ad_drl == "")
		$ad_drl = "-";
		
	$ad_alarm = $_REQUEST['alarm'];	
	if($ad_alarm == "")
		$ad_alarm = "-";
		
	$additional_cmt = $_REQUEST['additional_cmt'];
	
	//FROM TAG USED FOR THE FROM IN EMAIL. THIS WILL BE WRITTEN IN MAIL'S FROM
	$from = "inquiry@thebakosagency.com";
	$name =  "Bakos Auto Mobile Insurance - Inquiry";
	
	
	//DONT CHANGE THIS -------START
	$headers  = "From: ".$from; 
	$headers .= " \r\nMIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
	//DONT CHANGE THIS -------END

	
	//THIS IS THE TABLE FORMAT CONTENT, IT WILL DISPLAY IN THE EMAIL. CHANGE COLOR OR OTHER THING HERE
	$body = "<table width='500' border='0' cellpadding='4' cellspacing='1' bgcolor='#FFFFFF' style='border:1px solid #CCCCCC;'>
				<tr><td  colspan='2' align='center' bgcolor='#FFCC00' style='font-family:Arial; font-size:12px;font-weight:bold;'>Bakos Agency Automobile Quote</td></tr>
				<tr>
					<td width='50%'  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>Full Name</td>
					<td width='50%' bgcolor='#f8f8f8'>".$fullname."</td>
				</tr>
				<tr>
					<td  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>Address</td>
					<td bgcolor='#f8f8f8'>".$address."</td>
				</tr>
				<tr>
					<td  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>City</td>
					<td bgcolor='#f8f8f8'>".$city."</td>
				</tr>
				<tr>
					<td  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>State</td>
					<td bgcolor='#f8f8f8'>".$state."</td>
				</tr>
				<tr>
					<td  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>Phone</td>
					<td bgcolor='#f8f8f8'>".$phone."</td>
				</tr>
				<tr>
					<td  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>Email</td>
					<td bgcolor='#f8f8f8'>".$email."</td>
				</tr>
				<tr>
					<td  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>Material</td>
					<td bgcolor='#f8f8f8'>".$marital."</td>
				</tr>
				<tr>
					<td  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>Date of Birth</td>
					<td bgcolor='#f8f8f8'>".$dob."</td>
				</tr>
				<tr>
					<td  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>License</td>
					<td bgcolor='#f8f8f8'>".$license."</td>
				</tr>
				<tr>
					<td  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>Occupation</td>
					<td bgcolor='#f8f8f8'>".$occupation."</td>
				</tr>
				<tr>
					<td  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>Any of the above driver(s), had recieved a ticket in the last 39 months? </td>
					<td bgcolor='#f8f8f8'>".$ticketyes."</td>
				</tr>
				<tr>
					<td  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>Any of the above driver(s), got arrested for DWI? </td>
					<td bgcolor='#f8f8f8'>".$driveryes."</td>
				</tr>
				<tr>
					<td  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>Company</td>
					<td bgcolor='#f8f8f8'>".$company."</td>
				</tr>
				<tr>
					<td  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>Effective Date</td>
					<td bgcolor='#f8f8f8'>".$eff_date."</td>
				</tr>
				<tr>
					<td  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>Year</td>
					<td bgcolor='#f8f8f8'>".$year."</td>
				</tr>
				<tr>
					<td  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>Make</td>
					<td bgcolor='#f8f8f8'>".$make."</td>
				</tr>
				<tr>
					<td  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>VIN #</td>
					<td bgcolor='#f8f8f8'>".$vin."</td>
				</tr>
				<tr>
					<td  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>No Air Bag</td>
					<td bgcolor='#f8f8f8'>".$no_airbag."</td>
				</tr>
				<tr>
					<td  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>1 Air Bag</td>
					<td bgcolor='#f8f8f8'>".$airbag."</td>
				</tr>
				<tr>
					<td  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>Miles on Car</td>
					<td bgcolor='#f8f8f8'>".$miles_on_car."</td>
				</tr>
				<tr>
					<td  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>ABS</td>
					<td bgcolor='#f8f8f8'>".$abs."</td>
				</tr>
				<tr>
					<td  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>DRL</td>
					<td bgcolor='#f8f8f8'>".$drl."</td>
				</tr>
				<tr>
					<td  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>Alarm</td>
					<td bgcolor='#f8f8f8'>".$alarm."</td>
				</tr>
				<tr>
					<td  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>Additional year</td>
					<td bgcolor='#f8f8f8'>".$ad_year."</td>
				</tr>
				<tr>
					<td  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>Additional Make</td>
					<td bgcolor='#f8f8f8'>".$ad_make."</td>
				</tr>
				<tr>
					<td  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>Additional VIN #</td>
					<td bgcolor='#f8f8f8'>".$ad_vin."</td>
				</tr>
				<tr>
					<td  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>Additional  No Air Bag</td>
					<td bgcolor='#f8f8f8'>".$ad_no_airbag."</td>
				</tr>
				<tr>
					<td  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>Additional 1 Air Bag</td>
					<td bgcolor='#f8f8f8'>".$ad_1airbag."</td>
				</tr>
				<tr>
					<td  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>Additional Miles on Car</td>
					<td bgcolor='#f8f8f8'>".$ad_miles_on_car."</td>
				</tr>
				<tr>
					<td  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>Additional ABS</td>
					<td bgcolor='#f8f8f8'>".$ad_abs."</td>
				</tr>
				<tr>
					<td  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>Additional DRL</td>
					<td bgcolor='#f8f8f8'>".$ad_drl."</td>
				</tr>
				<tr>
					<td  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>Additional Alarm</td>
					<td bgcolor='#f8f8f8'>".$ad_alarm."</td>
				</tr>
				<tr>
					<td  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>Additional Comment</td>
					<td bgcolor='#f8f8f8'>".$additional_cmt."</td>
				</tr>
			</table>";
		
	///BY DEFAULT ENAUK UD	
	$sendList = "Ann.Wagner@bakosagency.com";
	//FINALLY SEND MAIL
	$send = mail($sendList, $subject, $body, $headers);
	header('Location: thankyou.html'); 
?>