<?php

declare(strict_types=1);

/**
 * Quote form service dropdown — keys match index.php option values.
 *
 * @return array<string, string>
 */
function windzon_quote_service_map(): array
{
    return [
        '1' => 'Windows Service',
        '2' => 'Doors Service',
        '3' => 'Maintenance And Repair',
        '4' => 'Windows & Doors Accessories',
        '5' => 'Planning And Projects',
        '6' => 'Replace Accessories',
    ];
}

function windzon_quote_service_label(string $value): string
{
    $value = trim($value);
    if ($value === '') {
        return 'Not selected';
    }
    $map = windzon_quote_service_map();

    return $map[$value] ?? $value;
}
