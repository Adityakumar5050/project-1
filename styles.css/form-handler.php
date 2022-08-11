
<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$email_from='ak8445ch@gmail.com';

$email_subject='New form submission';

$email_body="User Name: $name.\n".
              "User Email:$visitor_email.\n".
              "subject:subject.\n".
              "User Message:$Message.\n";
              

$to ='akjaat001kuntal@gmail.com';
$headers ="From $email_form\r\n";

$headers.="Reply-To:$vistor_email\r\n";
mail($to,$email_subject,$email_body,$headers);

header("Location:contect.html");





?>