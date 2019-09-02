 <?php
 //$to = "info@sujitsuman.com";
 $to = "sumansujit2009@gmail.com";
 //$subject = "Contact Us";
 $name = $_REQUEST['name'] ;
 $email = $_REQUEST['email'] ;
 $subject = $_REQUEST['subject'] ;
 $message = $_REQUEST['message'] ;
 $headers = "From: $email";
 $sent = mail($to, $subject, $message, $headers) ;
 if($sent)
 {print "Your mail was sent successfully";
 $url = 'index.html';
 echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
 }
 else
 {print "We encountered an error sending your mail"; }
 ?>
