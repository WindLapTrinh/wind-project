<!-- <?php
        //Import PHPMailer classes into the global namespace
        //These must be at the top of your script, not inside a function
        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;

        //Load Composer's autoloader
        require 'PHPMailer/src/Exception.php';
        require 'PHPMailer/src/PHPMailer.php';
        require 'PHPMailer/src/SMTP.php';

        //Create an instance; passing `true` enables exceptions
        function sendMail($email, $fullname, $subject, $content, $option = array())
        {
            $mail = new PHPMailer(true);
            global $configEmail;
            try {
                //Server settings
                $mail->SMTPDebug = 0;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = $configEmail['host'];                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = $configEmail['user'];                     //SMTP username
                $mail->Password   = $configEmail['pass'];                               //SMTP password
                $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
                $mail->Port       = $configEmail['port'];                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
                $mail->CharSet = $configEmail['charset'];
                //Recipients
                $mail->setFrom($configEmail['user'], $configEmail['fullname']); //mail người giửi  , tiêu đề
                $mail->addAddress($email, $fullname);  // mail người nhận, tiêu đề 
                //$mail->addAddress('windlaptrrinh.vn@gmail.com');               //Name is optional
                $mail->addReplyTo($configEmail['user'], $configEmail['fullname']);
                // $mail->addCC('cc@example.com');
                // $mail->addBCC('bcc@example.com');

                //Attachments
                // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
                // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'Giửi đến Wind Lập Trình'; // tiêu dề của mail
                $mail->Body    = 'Chúc mừng bạn đã hoàn thành nhiệm vụ <b>PHP</b>'; //Nội dung content 
                //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                $mail->send();
                echo 'Giửi mail thành công';
            } catch (Exception $e) {
                echo "Gửi thất bại. Kiểm tra lỗi.{$mail->ErrorInfo}";
            }
        }

?> 
-->