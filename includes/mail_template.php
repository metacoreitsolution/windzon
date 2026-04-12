<?php

declare(strict_types=1);

/**
 * @param array<int, array{label: string, value: string, multiline?: bool}> $fields
 */
function windzon_mail_premium_html(string $headline, array $fields): string
{
    $e = static function (string $s): string {
        return htmlspecialchars($s, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    };

    $rows = '';
    foreach ($fields as $field) {
        $label = $e($field['label']);
        $raw = $field['value'] ?? '';
        $multiline = !empty($field['multiline']);
        $inner = $multiline ? nl2br($e($raw)) : $e($raw);
        $rows .= '<tr>'
            . '<td style="padding:12px 16px 12px 0;border-bottom:1px solid #e8ecf1;vertical-align:top;width:150px;font-weight:600;color:#1a2744;font-size:14px;font-family:Segoe UI,Roboto,Helvetica,Arial,sans-serif;">' . $label . '</td>'
            . '<td style="padding:12px 0;border-bottom:1px solid #e8ecf1;color:#2d3748;font-size:15px;line-height:1.55;font-family:Segoe UI,Roboto,Helvetica,Arial,sans-serif;">' . $inner . '</td>'
            . '</tr>';
    }

    $headlineE = $e($headline);

    return '<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width">'
        . '<title>' . $headlineE . '</title></head><body style="margin:0;padding:0;background:#eef1f6;">'
        . '<table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background:#eef1f6;padding:32px 12px;">'
        . '<tr><td align="center">'
        . '<table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="max-width:600px;background:#ffffff;border-radius:14px;overflow:hidden;border:1px solid #e2e8f0;box-shadow:0 12px 40px rgba(26,39,68,0.08);">'
        . '<tr><td style="background:linear-gradient(135deg,#1a2744 0%,#24365a 100%);padding:28px 32px;text-align:center;">'
        . '<div style="color:#c9a227;font-size:11px;font-weight:700;letter-spacing:0.2em;font-family:Segoe UI,Roboto,Helvetica,Arial,sans-serif;">WINDZON</div>'
        . '<div style="color:#ffffff;font-size:22px;font-weight:600;margin-top:10px;line-height:1.3;font-family:Segoe UI,Roboto,Helvetica,Arial,sans-serif;">' . $headlineE . '</div>'
        . '<div style="height:3px;width:48px;background:#c9a227;margin:16px auto 0;border-radius:2px;"></div>'
        . '</td></tr>'
        . '<tr><td style="padding:28px 32px 8px;">'
        . '<table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="border-collapse:collapse;">'
        . $rows
        . '</table>'
        . '</td></tr>'
        . '<tr><td style="padding:8px 32px 28px;color:#64748b;font-size:12px;line-height:1.5;font-family:Segoe UI,Roboto,Helvetica,Arial,sans-serif;border-top:1px solid #e8ecf1;">'
        . 'This message was sent from a form on the Windzon website. Reply directly to the visitor’s email above.'
        . '</td></tr>'
        . '</table>'
        . '</td></tr></table></body></html>';
}

/**
 * @param array<int, array{label: string, value: string, multiline?: bool}> $fields
 */
function windzon_mail_plain_from_fields(array $fields): string
{
    $lines = [];
    foreach ($fields as $field) {
        $lines[] = $field['label'] . ': ' . ($field['value'] ?? '');
    }
    $lines[] = '';
    $lines[] = '— Windzon website notification';

    return implode("\n", $lines);
}
