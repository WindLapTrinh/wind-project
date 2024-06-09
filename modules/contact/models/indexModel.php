<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
function SendMail($name, $content, $email)
{
    $mail = new PHPMailer(true);
    global $configEmail;
    try {
        //Server settings
        $mail->SMTPDebug = 0;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = "smtp.gmail.com";                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = "windvintage81@gmail.com";                     //SMTP username
        $mail->Password   = "vncohiuqodxtiwqs";                               //SMTP password
        $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
        $mail->Port       = '587';                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        $mail->CharSet = "UTF-8";

        // Người gửi và người nhận
        $mail->setFrom($email, $name);
        $mail->addAddress('windvintage81@gmail.com', 'Nguyễn Thanh Phong');  // Thay bằng email của bạn
        
        //Content
        $mail->isHTML(true);
        $mail->Subject = "Khách hàng {$name} - {$content}" ;
        $mail->Body    = "<h2>Nội dung hỗ trợ</h2>
                          <p><b>Khách hàng:</b> {$name}</p>
                          <p><b>Email:</b> {$email}</p>
                          <p><b>Nội dung:</b><br>{$content}</p>";
        $mail->AltBody = "Thông tin khách hàng\n\nName: {$name}\nEmail: {$email}\nMessage:\n{$content}";

        $mail->send();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
