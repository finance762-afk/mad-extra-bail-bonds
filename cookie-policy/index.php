<?php
/**
 * cookie-policy/index.php — Cookie Policy
 * Mad Extra Bail Bonds | Delray Beach, FL | Page One Insights v6.1
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Cookie Policy | Mad Extra Bail Bonds | Delray Beach, FL';
$pageDescription = 'How Mad Extra Bail Bonds uses cookies and tracking technologies on our website. Details on Google Analytics and how to control cookies.';
$canonicalUrl    = $siteUrl . '/cookie-policy/';
$currentPage     = 'cookie-policy';
$lastUpdated     = date('F j, Y');

$_breadcrumb = generateBreadcrumbSchema([
    ['name' => 'Home',          'url' => $siteUrl . '/'],
    ['name' => 'Cookie Policy', 'url' => $siteUrl . '/cookie-policy/'],
]);

$_schema = [
    '@context' => 'https://schema.org',
    '@graph'   => [
        [
            '@type'       => 'WebPage',
            '@id'         => $siteUrl . '/cookie-policy/#webpage',
            'url'         => $siteUrl . '/cookie-policy/',
            'name'        => $pageTitle,
            'description' => $pageDescription,
        ],
        [
            '@type'           => 'BreadcrumbList',
            'itemListElement' => [
                ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',          'item' => $siteUrl . '/'],
                ['@type' => 'ListItem', 'position' => 2, 'name' => 'Cookie Policy', 'item' => $siteUrl . '/cookie-policy/'],
            ],
        ],
    ],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
echo '<script type="application/ld+json">' . json_encode($_schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>' . "\n";
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
.hero--legal { background: linear-gradient(135deg, #09090f 0%, #16082a 100%); min-height: 38vh; padding-top: calc(var(--nav-height, 72px) + var(--space-12)); padding-bottom: var(--space-12); display: flex; align-items: center; position: relative; overflow: hidden; }
.hero--legal::before { content: ''; position: absolute; inset: 0; background: radial-gradient(ellipse 45% 70% at 5% 50%, rgba(229,53,231,0.1) 0%, transparent 60%), radial-gradient(ellipse 35% 55% at 90% 20%, rgba(249,183,62,0.08) 0%, transparent 55%); pointer-events: none; }
.hero--legal .hero__copy { position: relative; z-index: 1; }
.hero--legal .eyebrow-label { font-family: var(--font-heading); font-size: 0.68rem; font-weight: 800; text-transform: uppercase; letter-spacing: 3px; color: var(--color-accent); display: block; margin-bottom: var(--space-3); }
.hero--legal h1 { font-size: clamp(1.7rem, 3.5vw, 2.8rem); font-weight: 900; color: var(--color-white); line-height: 1.1; margin-bottom: var(--space-3); letter-spacing: -0.02em; text-wrap: balance; }
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
.legal-prose h2 { font-family: var(--font-heading); font-size: 1.35rem; font-weight: 800; color: var(--color-dark); margin-top: var(--space-10); margin-bottom: var(--space-3); padding-bottom: var(--space-2); border-bottom: 2px solid rgba(229,53,231,0.12); }
.legal-prose h3 { font-family: var(--font-heading); font-size: 1.08rem; font-weight: 700; color: var(--color-dark); margin-top: var(--space-6); margin-bottom: var(--space-2); }
.legal-prose p { font-size: 0.95rem; line-height: 1.78; color: var(--color-gray); margin-bottom: var(--space-4); }
.legal-prose ul, .legal-prose ol { margin: 0 0 var(--space-4) var(--space-6); }
.legal-prose li { font-size: 0.95rem; line-height: 1.7; color: var(--color-gray); margin-bottom: var(--space-2); }
.legal-prose a { color: var(--color-secondary); border-bottom: 1px solid rgba(229,53,231,0.2); text-decoration: none; }
.legal-prose a:hover { border-color: var(--color-secondary); }
.legal-disclaimer { background: rgba(229,53,231,0.05); border-left: 4px solid var(--color-secondary); padding: var(--space-5) var(--space-6); margin: var(--space-8) 0; font-size: 0.88rem; font-style: italic; line-height: 1.7; color: var(--color-gray); border-radius: 0 var(--radius-md) var(--radius-md) 0; }
.cookie-table { width: 100%; border-collapse: collapse; margin-bottom: var(--space-6); font-size: 0.88rem; }
.cookie-table th { background: rgba(229,53,231,0.07); color: var(--color-dark); font-family: var(--font-heading); font-weight: 700; padding: var(--space-3) var(--space-4); text-align: left; border-bottom: 2px solid rgba(229,53,231,0.15); }
.cookie-table td { padding: var(--space-3) var(--space-4); color: var(--color-gray); border-bottom: 1px solid rgba(0,0,0,0.06); vertical-align: top; line-height: 1.6; }
.cookie-table tr:last-child td { border-bottom: none; }
</style>

<section class="hero hero--legal" aria-label="Cookie Policy">
  <div class="container hero__copy">
    <span class="eyebrow-label">Legal</span>
    <h1>Cookie Policy</h1>
    <span class="section-subtitle">how we use cookies and tracking technologies</span>
    <p class="hero__phone">Last Updated: <?php echo $lastUpdated; ?></p>
  </div>
</section>

<nav class="breadcrumb" aria-label="Breadcrumb">
  <div class="container">
    <ol>
      <li><a href="/">Home</a></li>
      <li class="breadcrumb-sep" aria-hidden="true">›</li>
      <li aria-current="page">Cookie Policy</li>
    </ol>
  </div>
</nav>

<article class="legal-prose">

  <h2>1. What Are Cookies?</h2>
  <p>Cookies are small text files stored on your device when you visit a website. They allow websites to function properly and provide information to website owners about how visitors interact with their sites. Cookies do not contain personally identifiable information on their own, but they can be used in combination with other information to identify you.</p>

  <h2>2. Cookies We Use</h2>

  <h3>Strictly Necessary Cookies</h3>
  <p>These cookies are essential for the website to function. They cannot be disabled. Examples include session-management cookies that ensure our contact form submits securely. Without these cookies, certain features of the site would not work properly.</p>

  <h3>Analytics Cookies (Google Analytics 4)</h3>
  <p>We use Google Analytics 4 (GA4) to understand how visitors use our website — which pages are visited most, how long visitors stay, and how they arrived at our site. GA4 uses cookies prefixed with <code>_ga</code> and <code>_gid</code>. IP addresses are anonymized by default in GA4 through IP truncation. We use this data only to improve our website and services.</p>

  <h3>localStorage</h3>
  <p>We use browser <code>localStorage</code> (not a cookie, but a similar technology) to remember when you have dismissed our cookie notice, so it does not appear on subsequent visits.</p>

  <h3>Third-Party Tools</h3>
  <p>Our website loads fonts from Google Fonts (fonts.googleapis.com), which may set its own cookies or use browser caching. We also use Lucide icons loaded from unpkg.com CDN. These third-party services have their own privacy policies and may collect limited technical information.</p>

  <h2>3. Cookie Details</h2>
  <table class="cookie-table">
    <thead>
      <tr>
        <th>Cookie / Technology</th>
        <th>Purpose</th>
        <th>Duration</th>
        <th>Type</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><code>_ga</code></td>
        <td>Google Analytics — distinguishes users</td>
        <td>2 years</td>
        <td>Analytics</td>
      </tr>
      <tr>
        <td><code>_gid</code></td>
        <td>Google Analytics — distinguishes users</td>
        <td>24 hours</td>
        <td>Analytics</td>
      </tr>
      <tr>
        <td><code>_ga_*</code></td>
        <td>Google Analytics 4 — session state</td>
        <td>2 years</td>
        <td>Analytics</td>
      </tr>
      <tr>
        <td><code>cookieBannerDismissed_v1</code> (localStorage)</td>
        <td>Remembers that you dismissed the cookie notice</td>
        <td>Until cleared</td>
        <td>Functional</td>
      </tr>
    </tbody>
  </table>

  <h2>4. How to Control Cookies</h2>
  <p>You can control and delete cookies through your browser settings. Most browsers allow you to:</p>
  <ul>
    <li>View cookies stored on your device.</li>
    <li>Delete all or specific cookies.</li>
    <li>Block third-party cookies.</li>
    <li>Block all cookies (note: this may break some website functionality).</li>
  </ul>
  <p>Browser-specific instructions: <a href="https://support.google.com/chrome/answer/95647" target="_blank" rel="noopener">Chrome</a>, <a href="https://support.mozilla.org/kb/cookies-information-websites-store-on-your-computer" target="_blank" rel="noopener">Firefox</a>, <a href="https://support.apple.com/guide/safari/manage-cookies-sfri11471/mac" target="_blank" rel="noopener">Safari</a>, <a href="https://support.microsoft.com/help/4027947" target="_blank" rel="noopener">Edge</a>.</p>

  <h2>5. Opt Out of Google Analytics</h2>
  <p>You can opt out of Google Analytics tracking across all websites by installing the <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">Google Analytics Opt-out Browser Add-on</a>.</p>

  <h2>6. Our Cookie Notice</h2>
  <p>We display a brief notice at the bottom of our website informing you of our cookie use. Clicking "Got it" dismisses the notice and stores a flag in your browser's localStorage so the notice does not reappear on future visits. You can re-enable the notice by clearing your browser's site data for this domain.</p>

  <h2>7. Changes to This Policy</h2>
  <p>We may update this Cookie Policy from time to time. The "Last Updated" date at the top reflects the most recent revision. Continued use of our website after any update constitutes acceptance of the revised Policy.</p>

  <h2>8. Contact Us</h2>
  <p>
    <strong><?php echo htmlspecialchars($siteName); ?></strong><br>
    <?php echo htmlspecialchars($address['city']); ?>, <?php echo htmlspecialchars($address['state']); ?><br>
    <?php if (!empty($phone)): ?>Phone: <a href="tel:<?php echo preg_replace('/\D/','', $phone); ?>"><?php echo htmlspecialchars($phone); ?></a><br><?php endif; ?>
    <?php if (!empty($email)): ?>Email: <a href="mailto:<?php echo htmlspecialchars($email); ?>"><?php echo htmlspecialchars($email); ?></a><?php endif; ?>
  </p>

  <div class="legal-disclaimer">
    This Cookie Policy is provided as a general template. We recommend reviewing this document with a licensed Florida attorney before publication.
  </div>

</article>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
