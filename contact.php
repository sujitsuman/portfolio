 <?php
 //$to = "info@sujitsuman.com";
 $to = "sumansujit2009@gmail.com";
 //$subject = "Contact Us";
 $name = $_REQUEST['name'] ;
 $email = $_REQUEST['email'] ;
 $subject = $_REQUEST['subject'] ;
 $message = $_REQUEST['message'] ;
 // $headers = "From: $email";
 $headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From:  ' . $name . ' <' . $email .'>' . " \r\n" .
            'Reply-To: '.  $fromEmail . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
 $sent = mail($to, $subject, $message, $headers, "-f sumansujit2009@gmail.com") ;
 if($sent)
 {print "Your mail was sent successfully";
 $url = 'index.html';
 echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
 }
 else
 {print "We encountered an error sending your mail"; }
 ?>
