
<?php
// error_reporting(0);

require "vendor/autoload.php";
 $name=$_POST["name"];
 $emaill=trim($_POST["email"]);
 $sub=$_POST["subject"];
 $msg=$_POST["message"];
 $email = new \SendGrid\Mail\Mail();
 $email->setFrom("sonidev7250@gmail.com");
 $email->setSubject($sub);
 $email->addTo("divyasoniworld@gmail.com");
 $email->addContent("text/html","<div>".$name."<br>".$emaill."<br>".$msg."</div>");

 $sendgrid = new SendGrid("SG.10JFVrNzQ_GSPJmxOQtryZA.S_U5QjouZE2h5OkpmkpXenKyhUxjEFQAAHrVnZI_8oY");
 


 if($sendgrid->send($email))
 {
     
     
     echo '<script>alert("Mail Sent Successfully");
     window.location.replace("https://divyasoniworld.github.io/divyaworld/");</script>';


    
}
 else{ echo '<script>alert("Something Went Wrong")</script>';}

?>
