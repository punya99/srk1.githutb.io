<?php 
//$msg1="";
//$error = array();


if(isset($_REQUEST['submit'])){

$name=!empty($_REQUEST['form_name'])?$_REQUEST['form_name']:"";
$phone=!empty($_REQUEST['form_phone'])?$_REQUEST['form_phone']:"";
$email=!empty($_REQUEST['form_email'])?$_REQUEST['form_email']:"";
$msg=!empty($_REQUEST['form_message'])?$_REQUEST['form_message']:"";


  if(empty($name)||empty($email)) 
{
    echo "Name and email are mandatory!";
    exit;
}


//$email_from = 'palravi808@gmail.com';$email_from = 'SRK VENEER & PLYWOOD'.'<srkimpexldh@gmail.com>';
$email_subject ="SRK VENEER & PLYWOOD ENQUIRY";
$email_body = "User Name: " .$name."\n".   
			  "Email: " .$email."\n" .
			  "Phone: " .$phone."\n".
			  "Message: " .$msg."\n";
			 
			  
			  
$to = "webadsind@gmail.com,webappdatawebads@gmail.com,srkimpexldh@gmail.com";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $email \r\n";
//Send the email!
$mdr=mail($to,$email_subject,$email_body,$headers);
//done. redirect to thank-you page.
if($mdr>0){
	echo "<script>";
    echo " alert('Thanks for Query. HR Will be contact ASAP!');   
    window.location.href='contact.html'";
    echo "</script>";
	}

    }
?>