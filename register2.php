<?php

$form_name = $_POST['name'];
$form_phone_number = $_POST['phone_number'];
$form_email = $_POST['email'];
$form_message = $_POST['message'];

 
// $to = 'aokoroleju@thetessfoundation.org';
$to = 'hello@santahomevisitsnigeria.org';
// $to = 'stephensajose@gmail.com';


							$header = "MIME-Version: 1.0" . "\r\n";
							$header .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
							$header .= 'From: '.'DGILNG Launch <no-reply@exolvetechnologies.com>'. "\r\n";
							$header .= 'Reply-To: '.'no-reply@exolvetechnologies.com'. "\r\n";
							$header .= 'X-Mailer: PHP/' . phpversion() . "\r\n";	
							$fromSubject = "Booking for Santa Home Visits, Nigeria";
							
								
							$subject = 'Booking for Santa Home Visits, Nigeria';
							$message= "<html><body>
							<table width='685' height='354' align='center' cellpadding='0' cellspacing='0'>
							  <tr>
								<td height='109' align='left' style='border-bottom: 1px dashed #00CC00;'>
									<img src='http://santahomevisitsnigeria.org/images/santahomevisits-logo.png' alt='Santa Home Visits Nigeria' />
								</td>
							  </tr>
							  <tr>
							  <td align='left' style='font-family:lucida grande, vedana Ref, calibri; font-size:14px; background-color: #f9f9f9; padding: 6px;'>
								  Hello <strong>Guest Manager,</strong><br/><br/>
								  A Booking for Santa from
								  <br/>
								  <strong>Personal Information:</strong>
								  <br/><strong>Name</strong>: $form_name</br>
								  <strong>Phone Number</strong>: $form_phone_number</br>
								  <strong>Email Address</strong>: $form_email</br>
								  <strong>Message</strong>: $form_message
								  
								  
								  <br/><br/>
								  <strong>Best Regards</strong><br/>
								  Santa Home Visits Nigeria<br/>
							  </td>
							  </tr>
							</table>
							</body></html>";
							
 // &&!empty($form_email)&&!empty($form_subject)&&!empty($form_message)
if (!empty($form_email)) { // this line checks that we have a valid email address

	mail($to, $subject, $message, $header); //This sends the mail.

	echo "<div class='alert alert-success'><i class='fa fa-exclamation-triangle'></i> Hello <strong>$form_name,</strong> We have received your message, you will be contacted shortly</div>"; 
	// success message

} else {

	echo '<div class="alert alert-success"><div class="fa fa-exclamation-triangle"></div> Invalid input, please fill in the form correctly. <a href="#backR" id="backR">Back</a></div>';

}

?>