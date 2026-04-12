<?php

declare(strict_types=1);

require_once __DIR__ . '/config.php';

/**
 * @return array{facebook: string, instagram: string, whatsapp: string}
 */
function windzon_social_hrefs(): array
{
    return [
        'facebook' => htmlspecialchars(WINDZON_SOCIAL_FACEBOOK_URL, ENT_QUOTES, 'UTF-8'),
        'instagram' => htmlspecialchars(WINDZON_SOCIAL_INSTAGRAM_URL, ENT_QUOTES, 'UTF-8'),
        'whatsapp' => htmlspecialchars(WINDZON_WHATSAPP_URL, ENT_QUOTES, 'UTF-8'),
    ];
}
