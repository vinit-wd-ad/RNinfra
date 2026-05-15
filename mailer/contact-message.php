<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../config.php.php';
require '../setting.php';
require '../vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name  = htmlspecialchars(trim($_POST['name']));
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    $redirect = $_POST['redirect_url'] ?? $_SERVER['HTTP_REFERER'] ?? 'index.php';

    $mail = new PHPMailer(true);
    $adminMail = DB_EMAIL;

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = $adminMail;
        $mail->Password   = DB_PASS;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        $mail->setFrom($adminMail, 'Rising Nexus Infra');
        $mail->addAddress($adminMail);
        $mail->addReplyTo($email, $name);
        
        $subject = $name . ' - ' . ($_POST['sub'] ?? 'New Form Submission');
        $mail->Subject = htmlspecialchars($subject);

        $mail->isHTML(true);

        $body = '<h2>New Form Submission</h2>';
        $body .= '<table border="1" cellpadding="8" cellspacing="0" style="border-collapse:collapse;">';

        foreach ($_POST as $key => $value) {
            if ($key == 'sub' || $key == 'redirect_url') continue;

            $body .= '<tr>
                        <td><strong>' . ucfirst(htmlspecialchars($key)) . '</strong></td>
                        <td>' . nl2br(htmlspecialchars($value)) . '</td>
                    </tr>';
        }

        $body .= '</table>';

        $mail->Body = $body;

        $mail->send();

        header("Location: $redirect?status=success");
        exit;

    } catch (Exception $e) {

        header("Location: $redirect?status=error");
        exit;
    }
}else{ 
    $home = BASE_URL;
    header("Location: $home");
}
