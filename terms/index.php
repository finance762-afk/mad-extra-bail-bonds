<?php
/**
 * terms/index.php — Terms of Service
 * Mad Extra Bail Bonds | Delray Beach, FL | Page One Insights v6.1
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Terms of Service | Mad Extra Bail Bonds | Delray Beach, FL';
$pageDescription = 'Terms of Service for Mad Extra Bail Bonds. Governing terms for use of this website and engagement of bail bond services in South Florida.';
$canonicalUrl    = $siteUrl . '/terms/';
$currentPage     = 'terms';
$lastUpdated     = date('F j, Y');

$_breadcrumb = generateBreadcrumbSchema([
    ['name' => 'Home',             'url' => $siteUrl . '/'],
    ['name' => 'Terms of Service', 'url' => $siteUrl . '/terms/'],
]);

$_schema = [
    '@context' => 'https://schema.org',
    '@graph'   => [
        [
            '@type'       => 'WebPage',
            '@id'         => $siteUrl . '/terms/#webpage',
            'url'         => $siteUrl . '/terms/',
            'name'        => $pageTitle,
            'description' => $pageDescription,
        ],
        [
            '@type'           => 'BreadcrumbList',
            'itemListElement' => [
                ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',             'item' => $siteUrl . '/'],
                ['@type' => 'ListItem', 'position' => 2, 'name' => 'Terms of Service', 'item' => $siteUrl . '/terms/'],
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
.hero--legal .section-subtitle { font-size: 0.88rem; color: rgba(255,255,255,0.45); display: block; margin-bottom: var(--space-2); }
.hero--legal .hero__phone { font-size: 0.82rem; color: rgba(255,255,255,0.38); margin: 0; }
.breadcrumb { background: #f8f8fc; border-bottom: 1px solid rgba(0,0,0,0.06); padding: var(--space-3) 0; font-size: 0.82rem; }
.breadcrumb .container { display: flex; }
.breadcrumb ol { display: flex; flex-wrap: wrap; gap: 5px 8px; align-items: center; list-style: none; margin: 0; padding: 0; }
.breadcrumb li { display: flex; align-items: center; gap: 6px; }
.breadcrumb a { color: rgba(0,0,0,0.45); text-decoration: none; }
.breadcrumb a:hover { color: var(--color-secondary); }
.breadcrumb li[aria-current="page"] { color: var(--color-dark); font-weight: 600; }
.breadcrumb-sep { color: rgba(0,0,0,0.2); }
.legal-prose { max-width: 72ch; margin: 0 auto; padding: var(--space-14) var(--space-6); }
.legal-prose h2 { font-family: var(--font-heading); font-size: 1.35rem; font-weight: 800; color: var(--color-dark); margin-top: var(--space-10); margin-bottom: var(--space-3); padding-bottom: var(--space-2); border-bottom: 2px solid rgba(229,53,231,0.12); scroll-margin-top: calc(var(--nav-height, 72px) + 20px); }
.legal-prose h3 { font-family: var(--font-heading); font-size: 1.08rem; font-weight: 700; color: var(--color-dark); margin-top: var(--space-6); margin-bottom: var(--space-2); }
.legal-prose p { font-size: 0.95rem; line-height: 1.78; color: var(--color-gray); margin-bottom: var(--space-4); }
.legal-prose ul, .legal-prose ol { margin: 0 0 var(--space-4) var(--space-6); }
.legal-prose li { font-size: 0.95rem; line-height: 1.7; color: var(--color-gray); margin-bottom: var(--space-2); }
.legal-prose a { color: var(--color-secondary); border-bottom: 1px solid rgba(229,53,231,0.2); text-decoration: none; transition: border-color var(--transition-base); }
.legal-prose a:hover { border-color: var(--color-secondary); }
.legal-disclaimer { background: rgba(229,53,231,0.05); border-left: 4px solid var(--color-secondary); padding: var(--space-5) var(--space-6); margin: var(--space-8) 0; font-size: 0.88rem; font-style: italic; line-height: 1.7; color: var(--color-gray); border-radius: 0 var(--radius-md) var(--radius-md) 0; }
</style>

<section class="hero hero--legal" aria-label="Terms of Service">
  <div class="container hero__copy">
    <span class="eyebrow-label">Legal</span>
    <h1>Terms of Service</h1>
    <span class="section-subtitle">governing your use of this website and our services</span>
    <p class="hero__phone">Last Updated: <?php echo $lastUpdated; ?></p>
  </div>
</section>

<nav class="breadcrumb" aria-label="Breadcrumb">
  <div class="container">
    <ol>
      <li><a href="/">Home</a></li>
      <li class="breadcrumb-sep" aria-hidden="true">›</li>
      <li aria-current="page">Terms of Service</li>
    </ol>
  </div>
</nav>

<article class="legal-prose">

  <h2>1. Agreement to Terms</h2>
  <p>By accessing or using this website or engaging <?php echo htmlspecialchars($siteName); ?> for bail bond services, you agree to these Terms of Service. If you do not agree, do not use this website or our services. These Terms are governed by the laws of the State of Florida.</p>

  <h2>2. Use of This Website</h2>
  <p>You may use this website for personal, non-commercial purposes to learn about our bail bond services and contact us. You may not:</p>
  <ul>
    <li>Use this site for any unlawful purpose or in violation of any applicable law.</li>
    <li>Submit false, misleading, or fraudulent information through any contact form.</li>
    <li>Attempt to access non-public areas of the website or our systems.</li>
    <li>Use automated tools to scrape, copy, or extract data from this website without written permission.</li>
    <li>Impersonate another person or entity when using this site or contacting us.</li>
  </ul>

  <h2>3. Bail Bond Services — Florida Law</h2>
  <p><?php echo htmlspecialchars($siteName); ?> is a licensed bail bondsman in the State of Florida, regulated by the Florida Department of Financial Services. All bail bond services are subject to Florida Statutes, including Chapter 648 (Bail Bond Agents and Runners), and applicable court and jail rules. The bail bond premium in Florida is set by law at 10% of the court-ordered bail amount and is non-negotiable and non-refundable.</p>
  <p>Nothing in these Terms or on this website constitutes legal advice. For legal advice regarding your case, consult a licensed Florida attorney.</p>

  <h2>4. Indemnity Agreements</h2>
  <p>Bail bond services are governed by a written Bail Bond Agreement (indemnity agreement) specific to each case. The indemnitor (co-signer) who signs the agreement assumes financial responsibility if the defendant fails to appear in court. Verbal commitments are non-binding. The written Bail Bond Agreement constitutes the full agreement between the parties for each bail transaction.</p>

  <h2>5. Defendant Obligations</h2>
  <p>By accepting release on a bail bond posted by <?php echo htmlspecialchars($siteName); ?>, the defendant agrees to:</p>
  <ul>
    <li>Appear at all scheduled court dates.</li>
    <li>Comply with all conditions of release imposed by the court.</li>
    <li>Notify us immediately of any change of address, phone number, or travel plans.</li>
    <li>Not leave the State of Florida (or the country) without prior written approval from the bondsman and the court.</li>
  </ul>
  <p>Failure to comply with these obligations may result in immediate surrender of the defendant back into custody, forfeiture of the bail bond, and financial liability for the full bond amount by the indemnitor.</p>

  <h2>6. Bond Forfeiture and Surrender</h2>
  <p>If a defendant fails to appear in court, Florida law requires the bondsman to forfeit the full bail amount unless the defendant is located and returned to custody within the period set by the court (typically 60 days for the bond estreature period). In such event, the indemnitor becomes immediately liable for the full bond amount. <?php echo htmlspecialchars($siteName); ?> may pursue all legal remedies to recover this amount, including legal action against the indemnitor.</p>

  <h2>7. Limitation of Liability</h2>
  <p>To the maximum extent permitted by Florida law, <?php echo htmlspecialchars($siteName); ?>'s total liability for any claim arising from the use of this website or from bail bond services shall not exceed the amount you paid for the specific service giving rise to the claim. We are not liable for indirect, incidental, special, or consequential damages, including lost wages, legal fees, or other expenses arising from a defendant's failure to appear or detention.</p>

  <h2>8. Intellectual Property</h2>
  <p>All content on this website — including text, graphics, logos, and images — is owned by <?php echo htmlspecialchars($siteName); ?> or used with permission. You may not reproduce, distribute, or create derivative works without our prior written permission.</p>

  <h2>9. No Attorney-Client Relationship</h2>
  <p>Nothing on this website creates an attorney-client relationship between you and <?php echo htmlspecialchars($siteName); ?>. We are bail bondsmen, not attorneys, and do not provide legal advice. If you need legal representation, please contact a licensed Florida criminal defense attorney.</p>

  <h2>10. Governing Law and Disputes</h2>
  <p>These Terms are governed by the laws of the State of Florida without regard to conflict-of-law principles. Any disputes arising from these Terms or our services shall be resolved in the state courts located in Palm Beach County, Florida, or as otherwise required by applicable Florida law.</p>

  <h2>11. Changes to These Terms</h2>
  <p>We may update these Terms at any time. The "Last Updated" date above reflects the most recent revision. Continued use of this website after any update constitutes your acceptance of the revised Terms.</p>

  <h2>12. Contact Us</h2>
  <p>
    <strong><?php echo htmlspecialchars($siteName); ?></strong><br>
    <?php echo htmlspecialchars($address['city']); ?>, <?php echo htmlspecialchars($address['state']); ?><br>
    <?php if (!empty($phone)): ?>Phone: <a href="tel:<?php echo preg_replace('/\D/','', $phone); ?>"><?php echo htmlspecialchars($phone); ?></a><br><?php endif; ?>
    <?php if (!empty($email)): ?>Email: <a href="mailto:<?php echo htmlspecialchars($email); ?>"><?php echo htmlspecialchars($email); ?></a><?php endif; ?>
  </p>

  <div class="legal-disclaimer">
    These Terms of Service are provided as a general template. We recommend reviewing this document with a licensed Florida attorney before publication to ensure compliance with current Florida law and your specific business structure.
  </div>

</article>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
