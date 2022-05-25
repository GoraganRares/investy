<?php

use PHPMailer\PHPMailer\PHPMailer;

class Emails {

    public function send_email($subiect, $message, $send_to) {

        require_once "../../PHPMailer/PHPMailer.php";
        require_once "../../PHPMailer/SMTP.php";
        require_once "../../PHPMailer/Exception.php";

        $mail = new PHPMailer();
        $mail->CharSet = "UTF-8";

        $mail->SMTPDebug = 0;

        $mail->isSMTP();
        $mail->Host = "mail.mytodo.ro";
        $mail->SMTPAuth = true;
        $mail->Username = "info@mytodo.ro"; // sender 
        $mail->Password = "E9(5tX9SBA~l"; // sender pass
        $mail->Port = 465;
        $mail->SMTPSecure = "ssl";
        // Email settings

        $mail->isHTML(true);
        $mail->From = "info@mytodo.ro"; // sender
        $mail->FromName = "Investy";
        $mail->addAddress($send_to); // unde se primesc mesajele
        $mail->Subject = $subiect;
        $mail->Body = $message;
        #$mail->send();

        if ($mail->send()) {

            return "success";

        }else {
            // echo "Some mail info: <br><br>" . $mail->ErrorInfo;
            return "failed";
        }
    }

}