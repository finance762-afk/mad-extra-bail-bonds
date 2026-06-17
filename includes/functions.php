<?php
/**
 * functions.php — Shared helper functions
 * Mad Extra Bail Bonds | Page One Insights v6.1
 */

function isActivePage(string $page): bool {
    global $currentPage;
    return isset($currentPage) && $currentPage === $page;
}

function formatPhone(string $phone): string {
    $digits = preg_replace('/\D/', '', $phone);
    if (strlen($digits) === 11 && $digits[0] === '1') {
        $digits = substr($digits, 1);
    }
    if (strlen($digits) !== 10) {
        return $phone;
    }
    return '(' . substr($digits, 0, 3) . ') ' . substr($digits, 3, 3) . '-' . substr($digits, 6);
}

function phoneE164(string $phone): string {
    $digits = preg_replace('/\D/', '', $phone);
    if (strlen($digits) === 10) {
        return '+1' . $digits;
    }
    if (strlen($digits) === 11 && $digits[0] === '1') {
        return '+' . $digits;
    }
    return $phone;
}

function getServiceSlug(string $name): string {
    return strtolower(trim(preg_replace('/[^a-z0-9]+/i', '-', $name), '-'));
}

function getAreaSlug(string $city): string {
    return strtolower(trim(preg_replace('/[^a-z0-9]+/i', '-', $city), '-'));
}

/**
 * Returns an inline SVG by icon name. Falls back to check-circle if name not found.
 */
function lucide_icon(string $name): string {
    if (!isset($GLOBALS['LUCIDE_ICONS'])) {
        require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/icons.php';
    }
    return $GLOBALS['LUCIDE_ICONS'][$name] ?? $GLOBALS['LUCIDE_ICONS']['check-circle'] ?? '';
}

function generateBreadcrumbSchema(array $items): array {
    $listItems = [];
    foreach ($items as $i => $item) {
        $listItems[] = [
            '@type'    => 'ListItem',
            'position' => $i + 1,
            'name'     => $item['name'],
            'item'     => $item['url'],
        ];
    }
    return [
        '@context'        => 'https://schema.org',
        '@type'           => 'BreadcrumbList',
        'itemListElement' => $listItems,
    ];
}

function generateFAQSchema(array $faqs): array {
    $items = array_map(function($faq) {
        return [
            '@type'          => 'Question',
            'name'           => $faq['q'],
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => $faq['a']],
        ];
    }, $faqs);
    return ['@context' => 'https://schema.org', '@type' => 'FAQPage', 'mainEntity' => $items];
}
