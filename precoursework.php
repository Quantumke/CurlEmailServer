<?php

// use actual sendgrid username and password in this section
$url = 'https://api.sendgrid.com/'; 
$user = 'Bendevshop'; // place SG username here
$pass = 'master12!'; // place SG password here
$email=$_GET["email"]; 
// grabs HTML form's post data; if you customize the form.html parameters then you will need to reference their new new names here

$message="Thanks for applying to Moringa School!

The next step in the process is to complete the following units on Sololearn here before we schedule an interview.

1. Module 1:Basic Concepts 
2. Module 2:Conditionals and Loops 
3. Module 3:Arrays 
4. Module 4:Classes and Objects

Once you are done, kindly send the certificate you will earn to admissions@moringaschool.com to schedule an interview either over Skype or at our office along Galana Road. You have 1 week after receiving this email to complete  the units and send in your certificate. The interview will be your opportunity to learn more about Moringa School, and experience our teaching style.

Please feel free to reach out to us with any questions, at this e-mail address or call +254 711 581484.

Warmly,

Moringa School Team
Regards,
Kate, Admissions, Moringa School";



// note the above parameters now referenced in the 'subject', 'html', and 'text' sections
// make the to email be your own address or where ever you would like the contact form info sent
$params = array(
    'api_user'  => "$user",
    'api_key'   => "$pass",
    'to'        => $email, // set TO address to have the contact form's email content sent to
    'subject'   => "PRECOUSE_WORK", // Either give a subject for each submission, or set to $subject
    'html'      => "<html><head><title> Contact Form</title><body>
    $message <body></title></head></html>", 
    'text'      => "
    $message",
    'from'      => "ben@moringadevshop.com", // set from address here, it can really be anything
  );


curl_setopt($curl, CURLOPT_SSLVERSION, CURL_SSLVERSION_TLSv1_2);
$request =  $url.'api/mail.send.json';

// Generate curl request
$session = curl_init($request);
// Tell curl to use HTTP POST
curl_setopt ($session, CURLOPT_POST, true);
// Tell curl that this is the body of the POST
curl_setopt ($session, CURLOPT_POSTFIELDS, $params);
// Tell curl not to return headers, but do return the response
curl_setopt($session, CURLOPT_HEADER, false);
curl_setopt($session, CURLOPT_RETURNTRANSFER, true);

// obtain response
$response = curl_exec($session);
curl_close($session);
$name=$_GET["name"]; 
$email=$_GET["email"]; 
$subject=$_GET["subject"]; 
$smessage=$_GET["message"]; 
// Redirect to thank you page upon successfull completion, will want to build one if you don't alreday have one available
header("Location: spreadsheet.php?email=$email&name=$name&subject=$subject&message=$smessage");

exit();

// print everything out
print_r($response);

?>