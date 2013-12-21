
<?php 
	//SUBJECT OF MAIL
	$subject = "Insurance Quote Form Submitted From The Bakos Agency, Inc.";

	//DETAIL WHICH RECIEVED FROM THE INDEX.HTML	
	$fullname = $_REQUEST['name'];
	$address = $_REQUEST['address'];
	$city = $_REQUEST['city'];
	$state = $_REQUEST['state'];	
	$phone = $_REQUEST['phone'];
	$email = $_REQUEST['email'];
	
	$property_add = $_REQUEST['property_add'];	
	$property_city = $_REQUEST['property_city'];	
	$property_state = $_REQUEST['property_state'];	
	$property_zip = $_REQUEST['property_zip'];
	
	$dwelling = $_REQUEST['Dwelling'];
	$liability = $_REQUEST['Liability'];
	$Structures = $_REQUEST['Structures'];	
	$Medical_Payments = $_REQUEST['Medical_Payments'];
	$Personal_Property = $_REQUEST['Personal_Property'];
	$Loss_of_use = $_REQUEST['Loss_of_use'];	
	$Deductible_Desired = $_REQUEST['Deductible_Desired'];	
	$Year_Constructed = $_REQUEST['Year_Constructed'];
	$Num_Family = $_REQUEST['Num_Family'];
	$Construction_type = $_REQUEST['Construction_type'];
	
	$frame = $_REQUEST['frame'];
	$structure = $_REQUEST['structure'];	
	$discontinue = $_REQUEST['discontinue'];
	$device = $_REQUEST['device'];
	$insurance = $_REQUEST['insurance'];	
	$pool = $_REQUEST['pool'];	
	$animal = $_REQUEST['animal'];
	$fuse = $_REQUEST['fuse'];
	$Pipe = $_REQUEST['Pipe'];
	$roof = $_REQUEST['roof'];
	$heating_sys = $_REQUEST['heating_sys'];	
	$clean = $_REQUEST['clean'];
	$claim = $_REQUEST['claim'];
	$fire_dept = $_REQUEST['fire_dept'];	
	$townhouse = $_REQUEST['townhouse'];	
	$smolealarm = $_REQUEST['smolealarm'];
	$how_many = $_REQUEST['how_many'];
	$vechiles = $_REQUEST['vechiles'];
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
					<td  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>Property Address</td>
					<td bgcolor='#f8f8f8'>".$property_add."</td>
				</tr>
				<tr>
					<td  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>Property City</td>
					<td bgcolor='#f8f8f8'>".$property_city."</td>
				</tr>
				<tr>
					<td  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>Property State</td>
					<td bgcolor='#f8f8f8'>".$property_state."</td>
				</tr>
				<tr>
					<td  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>Property Zip</td>
					<td bgcolor='#f8f8f8'>".$property_zip."</td>
				</tr>
				<tr>
					<td  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>Dwelling</td>
					<td bgcolor='#f8f8f8'>".$dwelling."</td>
				</tr>
				<tr>
					<td  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>Liability</td>
					<td bgcolor='#f8f8f8'>".$liability."</td>
				</tr>
				<tr>
					<td  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>Structures</td>
					<td bgcolor='#f8f8f8'>".$Structures."</td>
				</tr>
				<tr>
					<td  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>Medical Payments</td>
					<td bgcolor='#f8f8f8'>".$Medical_Payments."</td>
				</tr>
				<tr>
					<td  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>Personal Property</td>
					<td bgcolor='#f8f8f8'>".$Personal_Property."</td>
				</tr>
				<tr>
					<td  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>Loss of use</td>
					<td bgcolor='#f8f8f8'>".$Loss_of_use."</td>
				</tr><tr>
					<td  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>Deductible Desired</td>
					<td bgcolor='#f8f8f8'>".$Deductible_Desired."</td>
				</tr><tr>
					<td  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>Year Constructed</td>
					<td bgcolor='#f8f8f8'>".$Year_Constructed."</td>
				</tr>
				<tr>
					<td  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>Number of Family</td>
					<td bgcolor='#f8f8f8'>".$Num_Family."</td>
				</tr>
				<tr>
					<td  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>Construction Type</td>
					<td bgcolor='#f8f8f8'>".$Construction_type."</td>
				</tr>
				<tr>
					<td  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>Please Select Frame, Stone, Masonry, Veneer</td>
					<td bgcolor='#f8f8f8'>".$frame."</td>
				</tr>
				<tr>
					<td  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>Any other structures, like a garage, or storage building on premise? Please choose!</td>
					<td bgcolor='#f8f8f8'>".$structure."</td>
				</tr>
				<tr>
					<td  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>Any insurance discontinued in the last 3 years? Please choose!</td>
					<td bgcolor='#f8f8f8'>".$discontinue."</td>
				</tr>
				<tr>
					<td  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>Are there any other non-central heating devices in use? Please choose!</td>
					<td bgcolor='#f8f8f8'>".$device."</td>
				</tr>
				<tr>
					<td  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>Any other insurance with us? Please choose!</td>
					<td bgcolor='#f8f8f8'>".$insurance."</td>
				</tr>
				<tr>
					<td  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>Is their a swimming pool on premise? Please choose!</td>
					<td bgcolor='#f8f8f8'>".$pool."</td>
				</tr>
				<tr>
					<td  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>Any animals on premise? Please choose!</td>
					<td bgcolor='#f8f8f8'>".$animal."</td>
				</tr>
				<tr>
					<td  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>When was the last update for your electrical system? Please choose Breeaker or Fuse</td>
					<td bgcolor='#f8f8f8'>".$fuse."</td>
				</tr>
				<tr>
					<td  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>When was the last update for your plumbing system? Pipe or PVC?</td>
					<td bgcolor='#f8f8f8'>".$Pipe."</td>
				</tr>
				<tr>
					<td  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>What was the year of the last roof work? Please choose!</td>
					<td bgcolor='#f8f8f8'>".$roof."</td>
				</tr>
				<tr>
					<td  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>When was the last update for your heating system?   </td>
					<td bgcolor='#f8f8f8'>".$heating_sys."</td>
				</tr>
				<tr>
					<td  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>Cleaned or Maintained once a year?</td>
					<td bgcolor='#f8f8f8'>".$clean."</td>
				</tr>
				<tr>
					<td  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>Any claims in the last 5 years?</td>
					<td bgcolor='#f8f8f8'>".$claim."</td>
				</tr>
				<tr>
					<td  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>Who is your responding Fire Deaprtment? </td>
					<td bgcolor='#f8f8f8'>".$fire_dept."</td>
				</tr>
				<tr>
					<td  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>Is this home a townhouse?</td>
					<td bgcolor='#f8f8f8'>".$townhouse."</td>
				</tr>
				<tr>
					<td  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>Are their smoke alarms in the home?</td>
					<td bgcolor='#f8f8f8'>".$smolealarm."</td>
				</tr>
				
				<tr>
					<td  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>Do you own any recreational vechiles, like a snowmobile or a boat? </td>
					<td bgcolor='#f8f8f8'>".$vechiles."</td>
				</tr>
				<tr>
					<td  bgcolor='#f8f8f8' style='font-family:Arial; font-size:12px;font-weight:bold;'>Additional Comments</td>
					<td bgcolor='#f8f8f8'>".$additional_cmt."</td>
				</tr>
			</table>";
		
	///BY DEFAULT ENAUK UD	
	$sendList = "Ann.Wagner@bakosagency.com";
	//FINALLY SEND MAIL
	$send = mail($sendList, $subject, $body, $headers); 
	header('Location: thankyou.html'); 
?>
