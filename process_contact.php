<?php 

$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

echo $name;
echo $email;
echo "From :".$name."\r\n"."Message :".$message;

$to = "sandeep.bhatt59@gmail.com";
$subject  = 'Domain Pool';			 
$headers  = 'From: '.$email.'' . "\r\n" .
            'Reply-To: '.$email.'' . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();	
			
if($sentmail=mail($to, $subject, $message, $headers) )
    {echo "Email has been sent to your Email ID...<br>";
	 header("location:index.php");
	}
else 
{echo "Sorry,Email sending failed.Please try again.<br>"; 
} 
   
  		

?>
