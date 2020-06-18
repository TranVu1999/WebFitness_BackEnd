<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

function send_mail($sent_to_email, $sent_to_fullname, $subject, $body, $option = array()){
    global $config;
    $config_email = $config['email'];
    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        // Không hiện dòng lệnh
        $mail->SMTPDebug = 0;                                 // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        // Tra trên smtp gmail google => support.google.com
        $mail->Host       = $config_email['smtp_host'];                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        // Cấu hình email gởi thông tin
        $mail->Username   = $config_email['smtp_user'];                     // SMTP username
        $mail->Password   = $config_email['smtp_pass'];                               // SMTP password
        $mail->SMTPSecure = $config_email['smtp_secure'];             // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
        $mail->Port       = $config_email['smtp_port'];                                    // TCP port to connect to
        // Cài đặt tiếng việt
        $mail->CharSet = 'UTF-8';
        //Recipients
        $mail->setFrom($config_email['smtp_user'], $config_email['smtp_fullname']);
        $mail->addAddress($sent_to_email, $sent_to_fullname);     // Add a recipient
        //$mail->addAddress('ellen@example.com');               // Name is optional

        // Nếu thằng này phản hồi thì gởi qua đâu.
        // Khai báo email nhận phản hồi.
        $mail->addReplyTo($config_email['smtp_user'], $config_email['smtp_fullname']);
    //    $mail->addCC('cc@example.com');
    //    $mail->addBCC('bcc@example.com');

        // Attachments
        // Thêm vào file
        // $mail->addAttachment('BangLamViec.xlsx');         // Add attachments
        // Phương thức này có thể thay đổi tên của file
        //$mail->addAttachment('BangLamViec.xlsx', 'NewName.xlsx');    // Optional name

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $body;
        //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        return true;
    } catch (Exception $e) {
        return "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

?>

