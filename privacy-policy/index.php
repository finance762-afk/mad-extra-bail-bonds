<?php
/**
 * privacy-policy/index.php — Privacy Policy
 * Mad Extra Bail Bonds | Delray Beach, FL | Page One Insights v6.1
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Privacy Policy | Mad Extra Bail Bonds | Delray Beach, FL';
$pageDescription = 'How Mad Extra Bail Bonds collects, uses, and protects your personal information. Privacy practices for our website, contact forms, and bail bond services.';
$canonicalUrl    = $siteUrl . '/privacy-policy/';
$currentPage     = 'privacy-policy';
$lastUpdated     = date('F j, Y');

$_breadcrumb = generateBreadcrumbSchema([
    ['name' => 'Home',           'url' => $siteUrl . '/'],
    ['name' => 'Privacy Policy', 'url' => $siteUrl . '/privacy-policy/'],
]);

$_schema = [
    '@context' => 'https://schema.org',
    '@graph'   => [
        [
            '@type'       => 'WebPage',
            '@id'         => $siteUrl . '/privacy-policy/#webpage',
            'url'         => $siteUrl . '/privacy-policy/',
            'name'        => $pageTitle,
            'description' => $pageDescription,
        ],
        [
            '@type'           => 'BreadcrumbList',
            'itemListElement' => [
                ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',           'item' => $siteUrl . '/'],
                ['@type' => 'ListItem', 'position' => 2, 'name' => 'Privacy Policy', 'item' => $siteUrl . '/privacy-policy/'],
            ],
        ],
    ],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
echo '<script type="application/ld+json">' . json_encode($_schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>' . "\n";
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
.hero--legal {
  background: linear-gradient(135deg, #09090f 0%, #16082a 100%);
  min-height: 38vh;
  padding-top: calc(var(--nav-height, 72px) + var(--space-12));
  padding-bottom: var(--space-12);
  display: flex;
  align-items: center;
  position: relative;
  overflow: hidden;
}
.hero--legal::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 45% 70% at 5% 50%, rgba(229,53,231,0.1) 0%, transparent 60%),
    radial-gradient(ellipse 35% 55% at 90% 20%, rgba(249,183,62,0.08) 0%, transparent 55%);
  pointer-events: none;
}
.hero--legal .hero__copy { position: relative; z-index: 1; }
.hero--legal .eyebrow-label {
  font-family: var(--font-heading);
  font-size: 0.68rem;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 3px;
  color: var(--color-accent);
  display: block;
  margin-bottom: var(--space-3);
}
.hero--legal h1 {
  font-size: clamp(1.7rem, 3.5vw, 2.8rem);
  font-weight: 900;
  color: var(--color-white);
  line-height: 1.1;
  margin-bottom: var(--space-3);
  letter-spacing: -0.02em;
  text-wrap: balance;
}
.hero--legal .section-subtitle {
  font-size: 0.88rem;
  color: rgba(255,255,255,0.45);
  display: block;
  margin-bottom: var(--space-2);
}
.hero--legal .hero__phone {
  font-size: 0.82rem;
  color: rgba(255,255,255,0.38);
  margin: 0;
}
.breadcrumb {
  background: #f8f8fc;
  border-bottom: 1px solid rgba(0,0,0,0.06);
  padding: var(--space-3) 0;
  font-size: 0.82rem;
}
.breadcrumb .container { display: flex; }
.breadcrumb ol {
  display: flex;
  flex-wrap: wrap;
  gap: 5px 8px;
  align-items: center;
  list-style: none;
  margin: 0;
  padding: 0;
}
.breadcrumb li { display: flex; align-items: center; gap: 6px; }
.breadcrumb a { color: rgba(0,0,0,0.45); text-decoration: none; }
.breadcrumb a:hover { color: var(--color-secondary); }
.breadcrumb li[aria-current="page"] { color: var(--color-dark); font-weight: 600; }
.breadcrumb-sep { color: rgba(0,0,0,0.2); }
.legal-prose {
  max-width: 72ch;
  margin: 0 auto;
  padding: var(--space-14) var(--space-6);
}
.legal-prose h2 {
  font-family: var(--font-heading);
  font-size: 1.35rem;
  font-weight: 800;
  color: var(--color-dark);
  margin-top: var(--space-10);
  margin-bottom: var(--space-3);
  padding-bottom: var(--space-2);
  border-bottom: 2px solid rgba(229,53,231,0.12);
  scroll-margin-top: calc(var(--nav-height, 72px) + 20px);
}
.legal-prose h3 {
  font-family: var(--font-heading);
  font-size: 1.08rem;
  font-weight: 700;
  color: var(--color-dark);
  margin-top: var(--space-6);
  margin-bottom: var(--space-2);
  scroll-margin-top: calc(var(--nav-height, 72px) + 20px);
}
.legal-prose p {
  font-size: 0.95rem;
  line-height: 1.78;
  color: var(--color-gray);
  margin-bottom: var(--space-4);
}
.legal-prose ul, .legal-prose ol {
  margin: 0 0 var(--space-4) var(--space-6);
}
.legal-prose li {
  font-size: 0.95rem;
  line-height: 1.7;
  color: var(--color-gray);
  margin-bottom: var(--space-2);
}
.legal-prose a {
  color: var(--color-secondary);
  border-bottom: 1px solid rgba(229,53,231,0.2);
  text-decoration: none;
  transition: border-color var(--transition-base);
}
.legal-prose a:hover {
  border-color: var(--color-secondary);
}
.legal-disclaimer {
  background: rgba(229,53,231,0.05);
  border-left: 4px solid var(--color-secondary);
  padding: var(--space-5) var(--space-6);
  margin: var(--space-8) 0;
  font-size: 0.88rem;
  font-style: italic;
  line-height: 1.7;
  color: var(--color-gray);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
}
</style>

<!-- Hero -->
<section class="hero hero--legal" aria-label="Privacy Policy">
  <div class="container hero__copy">
    <span class="eyebrow-label">Legal</span>
    <h1>Privacy Policy</h1>
    <span class="section-subtitle">your data, our commitments</span>
    <p class="hero__phone">Last Updated: <?php echo $lastUpdated; ?></p>
  </div>
</section>

<!-- Breadcrumb -->
<nav class="breadcrumb" aria-label="Breadcrumb">
  <div class="container">
    <ol>
      <li><a href="/">Home</a></li>
      <li class="breadcrumb-sep" aria-hidden="true">›</li>
      <li aria-current="page">Privacy Policy</li>
    </ol>
  </div>
</nav>

<!-- Content -->
<article class="legal-prose">

  <h2>1. Introduction</h2>
  <p>This Privacy Policy explains how <?php echo htmlspecialchars($siteName); ?> ("we", "us", "our") collects, uses, and protects your personal information when you visit our website or contact us about bail bond services in South Florida. We are based at <?php echo htmlspecialchars($address['street']); ?>, <?php echo htmlspecialchars($address['city']); ?>, <?php echo htmlspecialchars($address['state']); ?> <?php echo htmlspecialchars($address['zip']); ?>.</p>

  <h2>2. Information We Collect</h2>
  <ul>
    <li><strong>Information you provide:</strong> name, email address, phone number, the type of bail bond service needed, and any details you share in the message field of our contact forms.</li>
    <li><strong>Bail-related information:</strong> information about the detained individual (name, charge, facility) that you voluntarily provide when requesting bail bond services.</li>
    <li><strong>Automatically collected:</strong> IP address, browser type, device type, pages visited, referring URL, and timestamps via Google Analytics 4.</li>
    <li><strong>Cookies and similar technologies:</strong> see our <a href="/cookie-policy/">Cookie Policy</a> for details.</li>
  </ul>

  <h2>3. How We Use Your Information</h2>
  <ul>
    <li>Respond to bail bond inquiries and provide the services you requested.</li>
    <li>Communicate with you throughout the bail bond process.</li>
    <li>Send service-related communications, including phone calls and SMS messages where you have consented.</li>
    <li>Improve our website and services through analytics.</li>
    <li>Comply with legal obligations as a licensed Florida bail bondsman.</li>
  </ul>

  <h2>4. How We Share Your Information</h2>
  <ul>
    <li>We do <strong>NOT</strong> sell your personal information.</li>
    <li><strong>Service providers:</strong> Google Analytics (analytics), Page One Insights, LLC (web design partner — receives contact form notifications for lead-tracking purposes), and our hosting provider.</li>
    <li><strong>Legal authorities:</strong> We may disclose information to Florida courts, jails, law enforcement, or regulatory agencies as required by law or as necessary in the course of providing bail bond services (for example, posting bond on a defendant's behalf).</li>
    <li><strong>Business transfers:</strong> In the event of a merger, acquisition, or sale of our business.</li>
  </ul>

  <h2>5. Your Privacy Rights</h2>

  <h3>Florida Residents</h3>
  <p>You may request access to or deletion of personal information we hold about you. Contact us using the methods in Section 12 below. We will respond within a reasonable time.</p>

  <h3 id="ccpa-rights">California Residents (CCPA / CPRA)</h3>
  <p>If you are a California resident, you have the following rights under the California Consumer Privacy Act (CCPA) and California Privacy Rights Act (CPRA):</p>
  <ul>
    <li><strong>Right to know</strong> what personal information we collect, use, disclose, and sell.</li>
    <li><strong>Right to delete</strong> personal information we have collected from you, subject to certain exceptions.</li>
    <li><strong>Right to correct</strong> inaccurate personal information.</li>
    <li><strong>Right to opt-out of sale or sharing</strong> of personal information. (We do not sell personal information, but you may submit an opt-out request for our records.)</li>
    <li><strong>Right to limit use</strong> of sensitive personal information.</li>
    <li><strong>Right to non-discrimination</strong> — we will not deny services or charge different prices based on your exercise of these rights.</li>
  </ul>
  <?php if (!empty($email)): ?>
  <p><strong>How to exercise your rights:</strong> Email <a href="mailto:<?php echo htmlspecialchars($email); ?>"><?php echo htmlspecialchars($email); ?></a><?php if (!empty($phone)): ?> or call <a href="tel:<?php echo preg_replace('/\D/','', $phone); ?>"><?php echo htmlspecialchars($phone); ?></a><?php endif; ?>. We will respond within 45 days.</p>
  <?php endif; ?>

  <h3>Other State Residents</h3>
  <p>Residents of Colorado, Virginia, Connecticut, Utah, and Texas have similar rights under their respective state privacy laws. Contact us using the methods in Section 12 to exercise your rights.</p>

  <h2>6. SMS and Phone Communications (TCPA)</h2>
  <p>When you submit our contact form and opt in to SMS text messages, you agree to receive text messages from us about your bail bond inquiry. Standard message and data rates may apply. Consent is not a condition of receiving bail bond services. You can opt out of SMS communications at any time by replying STOP to any text message. You can opt out of phone communications by telling our representative or contacting us in writing.</p>

  <h2>7. Data Retention</h2>
  <p>We retain contact form submissions and case-related information for as long as necessary to provide services and comply with legal obligations. As a licensed bail bondsman, we may be required by Florida law to retain certain records for defined periods. Information no longer needed is deleted or anonymized.</p>

  <h2>8. Data Security</h2>
  <p>We use SSL encryption on all form submissions and maintain reasonable administrative and technical safeguards. No transmission over the internet is 100% secure. We cannot guarantee absolute security, but we work to minimize risk to your personal information.</p>

  <h2>9. Children's Privacy</h2>
  <p>Our website is not directed to children under 13. We do not knowingly collect personal information from children. If you believe a child has submitted information through our site, please contact us and we will delete it promptly.</p>

  <h2>10. Third-Party Links</h2>
  <p>Our website may contain links to third-party resources (court websites, county jail portals, Google Maps, etc.). We are not responsible for the privacy practices of these sites. Please review their policies separately.</p>

  <h2>11. Changes to This Policy</h2>
  <p>We may update this Privacy Policy from time to time. The "Last Updated" date at the top reflects the most recent revision. Continued use of our website after any update constitutes acceptance of the revised Policy.</p>

  <h2>12. Contact Us</h2>
  <p>For privacy questions or to exercise your rights:</p>
  <p>
    <strong><?php echo htmlspecialchars($siteName); ?></strong><br>
    <?php echo htmlspecialchars($address['street']); ?>, <?php echo htmlspecialchars($address['city']); ?>, <?php echo htmlspecialchars($address['state']); ?> <?php echo htmlspecialchars($address['zip']); ?><br>
    <?php if (!empty($phone)): ?>Phone: <a href="tel:<?php echo preg_replace('/\D/','', $phone); ?>"><?php echo htmlspecialchars($phone); ?></a><br><?php endif; ?>
    <?php if (!empty($email)): ?>Email: <a href="mailto:<?php echo htmlspecialchars($email); ?>"><?php echo htmlspecialchars($email); ?></a><?php endif; ?>
  </p>

  <div class="legal-disclaimer">
    This Privacy Policy is provided as a general template. We recommend reviewing this document with a licensed Florida attorney before publication to ensure compliance with current state and federal privacy laws.
  </div>

</article>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
