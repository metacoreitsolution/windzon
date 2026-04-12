<?php
/**
 * Mail helper: uses PHPMailer + SMTP when WINDZON_SMTP_HOST is set; otherwise PHP mail().
 */

require_once __DIR__ . '/config.php';

require_once __DIR__ . '/phpmailer/Exception.php';
require_once __DIR__ . '/phpmailer/PHPMailer.php';
require_once __DIR__ . '/phpmailer/SMTP.php';

use PHPMailer\PHPMailer\Exception as PHPMailerException;
use PHPMailer\PHPMailer\PHPMailer;

/**
 * False when SMTP is selected but credentials are missing.
 */
function windzon_mail_config_ok(): bool
{
    if (WINDZON_SMTP_HOST === '') {
        return true;
    }
    $pass = preg_replace('/\s+/', '', (string) WINDZON_SMTP_PASSWORD);
    return WINDZON_SMTP_USER !== '' && $pass !== '';
}

/**
 * @param string $bodyPlain Plain text (AltBody when HTML is used)
 * @param string|null $replyTo Visitor email for Reply-To
 * @param string|null $bodyHtml Optional HTML body (multipart)
 * @return bool
 */
function windzon_mail_send(
    string $to,
    string $subject,
    string $bodyPlain,
    ?string $replyTo = null,
    ?string $bodyHtml = null
): bool {
    $from = WINDZON_MAIL_FROM;
    $fromName = WINDZON_MAIL_FROM_NAME;

    if (WINDZON_SMTP_HOST !== '') {
        return windzon_mail_send_smtp($to, $subject, $bodyPlain, $bodyHtml, $replyTo, $from, $fromName);
    }

    $encodedName = function_exists('mb_encode_mimeheader')
        ? mb_encode_mimeheader($fromName, 'UTF-8')
        : $fromName;

    $headers = [];
    $headers[] = 'MIME-Version: 1.0';
    if ($bodyHtml !== null && $bodyHtml !== '') {
        $headers[] = 'Content-Type: text/html; charset=UTF-8';
        $mailBody = $bodyHtml;
    } else {
        $headers[] = 'Content-Type: text/plain; charset=UTF-8';
        $mailBody = $bodyPlain;
    }
    $headers[] = 'From: ' . $encodedName . ' <' . $from . '>';
    if ($replyTo !== null && filter_var($replyTo, FILTER_VALIDATE_EMAIL)) {
        $headers[] = 'Reply-To: ' . $replyTo;
    }
    $headerStr = implode("\r\n", $headers);

    return @mail($to, $subject, $mailBody, $headerStr);
}

function windzon_mail_send_smtp(
    string $to,
    string $subject,
    string $bodyPlain,
    ?string $bodyHtml,
    ?string $replyTo,
    string $from,
    string $fromName
): bool {
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = WINDZON_SMTP_HOST;
        $mail->Port = (int) WINDZON_SMTP_PORT;
        $smtpPass = preg_replace('/\s+/', '', (string) WINDZON_SMTP_PASSWORD);
        $mail->SMTPAuth = WINDZON_SMTP_USER !== '' && $smtpPass !== '';
        $mail->Username = WINDZON_SMTP_USER;
        $mail->Password = $smtpPass;

        if (defined('WINDZON_SMTP_RELAX_SSL') && WINDZON_SMTP_RELAX_SSL) {
            $mail->SMTPOptions = [
                'ssl' => [
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true,
                ],
            ];
        }

        $enc = WINDZON_SMTP_ENCRYPTION;
        if ($enc === '') {
            $mail->SMTPSecure = false;
            $mail->SMTPAutoTLS = false;
        } else {
            $mail->SMTPSecure = $enc;
        }

        $mail->CharSet = PHPMailer::CHARSET_UTF8;
        $mail->setFrom($from, $fromName);
        $mail->addAddress($to);
        if ($replyTo !== null && filter_var($replyTo, FILTER_VALIDATE_EMAIL)) {
            $mail->addReplyTo($replyTo);
        }
        $mail->Subject = $subject;

        if ($bodyHtml !== null && $bodyHtml !== '') {
            $mail->isHTML(true);
            $mail->Body = $bodyHtml;
            $mail->AltBody = $bodyPlain;
        } else {
            $mail->isHTML(false);
            $mail->Body = $bodyPlain;
        }

        $mail->send();
        return true;
    } catch (PHPMailerException $e) {
        error_log('Windzon SMTP mail failed: ' . $mail->ErrorInfo);
        return false;
    }
}
