<?php
/**
 * head.php — Shared <head> component
 * Mad Extra Bail Bonds | Page One Insights v6.1
 *
 * Variables expected from calling page (set BEFORE including this file):
 *   $pageTitle        — full <title> string
 *   $pageDescription  — meta description (140–160 chars)
 *   $canonicalUrl     — absolute canonical URL for this page
 *   $currentPage      — slug for active nav state ('home', 'services', 'about', etc.)
 *   $noindex          — (optional) true to suppress indexing (thank-you, etc.)
 *   $heroImagePreload — (optional) absolute URL to hero image for LCP preload
 *   $ogImage          — (optional) override OG image; defaults to logo
 *   $cssVersion       — from config.php (cache-bust query param)
 */
if (!isset($siteName)) {
    require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
}

// Page-level defaults
$_pageTitle = $pageTitle ?? ($siteName . ' | Bail Bonds in ' . $address['city'] . ', FL | Available 24/7');
$_pageDesc  = $pageDescription ?? ('Need bail bonds in ' . $address['city'] . ', FL? Mad Extra Bail Bonds has served South Florida families for ' . $yearsInBusiness . ' years. Licensed bail bondsman available 24/7 across Palm Beach, Broward &amp; Miami-Dade. Call now.');
$_canonical = $canonicalUrl ?? ($siteUrl . '/');
$_ogImage   = $ogImage ?? $logoUrl;
$_noindex   = $noindex ?? false;

// Build areaServed for homepage schema
$_areaServed = [];
foreach ($serviceAreas as $area) {
    $_areaServed[] = ['@type' => 'City', 'name' => $area['name'] . ', FL'];
}

// Build service offers for homepage schema
$_schemaServices = [];
foreach ($services as $svc) {
    $_schemaServices[] = [
        '@type'       => 'Offer',
        'itemOffered' => [
            '@type'       => 'Attorney',
            'name'        => $svc['name'],
            'url'         => $siteUrl . '/services/' . $svc['slug'] . '/',
            'description' => $svc['description'],
        ],
    ];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Primary SEO -->
  <title><?php echo htmlspecialchars($_pageTitle); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($_pageDesc); ?>">

  <!-- Robots -->
<?php if ($_noindex): ?>
  <meta name="robots" content="noindex,nofollow">
<?php else: ?>
  <meta name="robots" content="index,follow,max-snippet:-1,max-image-preview:large">
<?php endif; ?>

  <!-- Canonical -->
  <link rel="canonical" href="<?php echo htmlspecialchars($_canonical); ?>">

  <!-- Open Graph -->
  <meta property="og:type"        content="website">
  <meta property="og:title"       content="<?php echo htmlspecialchars($_pageTitle); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($_pageDesc); ?>">
  <meta property="og:url"         content="<?php echo htmlspecialchars($_canonical); ?>">
  <meta property="og:image"       content="<?php echo htmlspecialchars($_ogImage); ?>">
  <meta property="og:site_name"   content="<?php echo htmlspecialchars($siteName); ?>">
  <meta property="og:locale"      content="en_US">

<?php if (!empty($gscVerification)): ?>
  <meta name="google-site-verification" content="<?php echo htmlspecialchars($gscVerification); ?>">
<?php endif; ?>

  <!-- Performance: Preconnects -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="dns-prefetch" href="https://db.pageone.cloud">

  <!-- Google Fonts: Montserrat (headings) + Open Sans (body) -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700;800&family=Open+Sans:ital,wght@0,400;0,600;1,400&display=swap">

<?php if (!empty($heroImagePreload)): ?>
  <link rel="preload" as="image" href="<?php echo htmlspecialchars($heroImagePreload); ?>" fetchpriority="high">
<?php endif; ?>

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="/assets/images/favicon.ico">

  <!-- Stylesheet with cache-bust -->
  <link rel="stylesheet" href="/assets/css/framework.css?v=<?php echo htmlspecialchars($cssVersion ?? '1'); ?>">

<?php if (!empty($googleAnalyticsId) && $googleAnalyticsId !== 'G-XXXXXXXXXX'): ?>
  <!-- Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo htmlspecialchars($googleAnalyticsId); ?>"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', '<?php echo htmlspecialchars($googleAnalyticsId); ?>');
  </script>
<?php endif; ?>

  <!-- JSON-LD Schema -->
<?php if (($currentPage ?? '') === 'home'): ?>
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Attorney",
    "@id": "<?php echo $siteUrl; ?>/#organization",
    "name": "<?php echo htmlspecialchars($siteName); ?>",
    "url": "<?php echo $siteUrl; ?>/",
    "telephone": "<?php echo htmlspecialchars($phone); ?>",
    "email": "<?php echo htmlspecialchars($email); ?>",
    "description": "<?php echo htmlspecialchars($businessDescription); ?>",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "<?php echo htmlspecialchars($address['street']); ?>",
      "addressLocality": "<?php echo htmlspecialchars($address['city']); ?>",
      "addressRegion": "<?php echo htmlspecialchars($address['state']); ?>",
      "postalCode": "<?php echo htmlspecialchars($address['zip']); ?>",
      "addressCountry": "US"
    },
    "openingHoursSpecification": [
      {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
        "opens": "00:00",
        "closes": "23:59"
      }
    ],
    "image": "<?php echo htmlspecialchars($logoUrl); ?>",
    "logo": "<?php echo htmlspecialchars($logoUrl); ?>",
    "priceRange": "$$",
    "foundingDate": "<?php echo $yearEstablished; ?>",
    "areaServed": <?php echo json_encode($_areaServed, JSON_UNESCAPED_SLASHES); ?>,
    "hasOfferCatalog": {
      "@type": "OfferCatalog",
      "name": "Bail Bond Services",
      "itemListElement": <?php echo json_encode($_schemaServices, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES); ?>
    }
  }
  </script>
<?php else: ?>
  <!-- Non-homepage: reference organization by @id only -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "WebPage",
    "url": "<?php echo htmlspecialchars($_canonical); ?>",
    "name": "<?php echo htmlspecialchars($_pageTitle); ?>",
    "description": "<?php echo htmlspecialchars($_pageDesc); ?>",
    "isPartOf": {
      "@type": "WebSite",
      "url": "<?php echo $siteUrl; ?>/",
      "name": "<?php echo htmlspecialchars($siteName); ?>"
    },
    "provider": { "@id": "<?php echo $siteUrl; ?>/#organization" }
  }
  </script>
<?php endif; ?>

<?php require_once __DIR__ . '/edit-mode.php'; ?>
</head>
<body>
