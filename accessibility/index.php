<?php
/**
 * accessibility/index.php — Accessibility Statement
 * Mad Extra Bail Bonds | Delray Beach, FL | Page One Insights v6.1
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Accessibility Statement | Mad Extra Bail Bonds | Delray Beach, FL';
$pageDescription = 'Mad Extra Bail Bonds is committed to digital accessibility for people with disabilities. Learn about our WCAG 2.1 AA efforts and how to report accessibility barriers.';
$canonicalUrl    = $siteUrl . '/accessibility/';
$currentPage     = 'accessibility';
$lastUpdated     = date('F j, Y');

$_breadcrumb = generateBreadcrumbSchema([
    ['name' => 'Home',                   'url' => $siteUrl . '/'],
    ['name' => 'Accessibility Statement','url' => $siteUrl . '/accessibility/'],
]);

$_schema = [
    '@context' => 'https://schema.org',
    '@graph'   => [
        [
            '@type'       => 'WebPage',
            '@id'         => $siteUrl . '/accessibility/#webpage',
            'url'         => $siteUrl . '/accessibility/',
            'name'        => $pageTitle,
            'description' => $pageDescription,
        ],
        [
            '@type'           => 'BreadcrumbList',
            'itemListElement' => [
                ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',                    'item' => $siteUrl . '/'],
                ['@type' => 'ListItem', 'position' => 2, 'name' => 'Accessibility Statement', 'item' => $siteUrl . '/accessibility/'],
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
.a11y-badge { display: inline-flex; align-items: center; gap: var(--space-2); background: rgba(229,53,231,0.08); border: 1px solid rgba(229,53,231,0.18); border-radius: var(--radius-md); padding: var(--space-3) var(--space-4); font-size: 0.88rem; font-weight: 600; color: var(--color-dark); margin-bottom: var(--space-5); }
.a11y-badge svg { width: 16px; height: 16px; color: var(--color-secondary); }
</style>

<section class="hero hero--legal" aria-label="Accessibility Statement">
  <div class="container hero__copy">
    <span class="eyebrow-label">Legal</span>
    <h1>Accessibility Statement</h1>
    <span class="section-subtitle">our commitment to inclusive digital access</span>
    <p class="hero__phone">Last Updated: <?php echo $lastUpdated; ?></p>
  </div>
</section>

<nav class="breadcrumb" aria-label="Breadcrumb">
  <div class="container">
    <ol>
      <li><a href="/">Home</a></li>
      <li class="breadcrumb-sep" aria-hidden="true">›</li>
      <li aria-current="page">Accessibility Statement</li>
    </ol>
  </div>
</nav>

<article class="legal-prose">

  <h2>1. Our Commitment</h2>
  <p><?php echo htmlspecialchars($siteName); ?> is committed to ensuring digital accessibility for people with disabilities. We believe that everyone — regardless of ability — should be able to access clear information about bail bond services and contact us in an emergency. We continually work to improve the accessibility of our website and apply relevant accessibility standards.</p>

  <h2>2. Conformance Status</h2>
  <div class="a11y-badge">
    <?php echo lucide_icon('shield-check'); ?>
    Target: WCAG 2.1 Level AA
  </div>
  <p>This website is designed to conform with Web Content Accessibility Guidelines (WCAG) 2.1 Level AA. WCAG defines requirements for designers and developers to improve accessibility for people with disabilities, including those with visual, auditory, motor, and cognitive impairments.</p>
  <p>Our site <strong>partially conforms</strong> with WCAG 2.1 Level AA, meaning some content may not yet fully meet all standards. We are actively working to address known issues.</p>

  <h2>3. Accessibility Features</h2>
  <p>We have implemented the following accessibility features on this website:</p>
  <ul>
    <li><strong>Skip to main content link</strong> — appears at the top of every page when accessed by keyboard, allowing keyboard users to bypass navigation.</li>
    <li><strong>Semantic HTML5 markup</strong> — proper landmark regions (header, nav, main, footer) that work with screen readers.</li>
    <li><strong>ARIA labels and roles</strong> — on navigation, forms, and interactive elements to convey meaning to assistive technology.</li>
    <li><strong>Keyboard navigation</strong> — all interactive elements are reachable and operable by keyboard alone.</li>
    <li><strong>Visible focus indicators</strong> — all interactive elements display a visible focus outline.</li>
    <li><strong>Alt text on images</strong> — all meaningful images include descriptive alt text; decorative images use empty alt attributes.</li>
    <li><strong>Form labels</strong> — all form inputs are associated with visible or programmatic labels.</li>
    <li><strong>Color contrast</strong> — body text and interactive elements meet WCAG AA minimum contrast ratios (4.5:1 for normal text, 3:1 for large text).</li>
    <li><strong>Responsive design</strong> — the website adapts to different screen sizes and zoom levels (up to 200% without loss of content).</li>
    <li><strong>Reduced motion support</strong> — animations and transitions are disabled for users who have enabled "prefers-reduced-motion" in their operating system.</li>
    <li><strong>Click-to-call phone links</strong> — phone numbers are linked with tel: URIs for easy access on mobile and assistive devices.</li>
  </ul>

  <h2>4. Known Limitations</h2>
  <p>We are aware of the following areas that may not yet fully meet WCAG 2.1 AA standards and are actively working to address them:</p>
  <ul>
    <li><strong>Third-party content:</strong> Some third-party scripts or embedded tools (such as analytics or CDN-loaded fonts) may not fully conform to accessibility standards. We provide equivalent information through direct contact (phone or email).</li>
    <li><strong>Complex animations:</strong> Some decorative animations may not be fully suppressed in all browsers for users with reduced motion preferences. We are testing and improving this.</li>
  </ul>

  <h2>5. Alternative Contact Methods</h2>
  <p>If our website presents accessibility barriers that prevent you from obtaining the information you need, please contact us directly. We are happy to provide information about our bail bond services in alternative formats or by phone.</p>
  <p>
    <?php if (!empty($phone)): ?><strong>Phone (24/7):</strong> <a href="tel:<?php echo preg_replace('/\D/','', $phone); ?>"><?php echo htmlspecialchars($phone); ?></a> — Our emergency line is available 24 hours a day.<br><?php endif; ?>
    <?php if (!empty($email)): ?><strong>Email:</strong> <a href="mailto:<?php echo htmlspecialchars($email); ?>"><?php echo htmlspecialchars($email); ?></a><br><?php endif; ?>
  </p>

  <h2>6. Feedback and Reporting Accessibility Barriers</h2>
  <p>We welcome feedback on the accessibility of our website. If you encounter an accessibility barrier, please let us know:</p>
  <ul>
    <li>Describe the page or element you were trying to use.</li>
    <li>Describe the barrier you encountered.</li>
    <li>Include your contact information so we can follow up.</li>
  </ul>
  <p>We aim to respond to accessibility feedback within 5 business days and will work to resolve confirmed barriers as quickly as possible.</p>

  <h2>7. Technical Specifications</h2>
  <p>Accessibility on this website relies on the following technologies working together with your browser and any assistive technology:</p>
  <ul>
    <li>HTML5</li>
    <li>CSS3</li>
    <li>JavaScript (ECMAScript 2015+)</li>
    <li>WAI-ARIA 1.2</li>
  </ul>
  <p>The website has been tested with Chrome, Firefox, Safari, and Edge browsers on both desktop and mobile. Screen reader testing has been performed with VoiceOver (macOS/iOS).</p>

  <h2>8. Standards and Guidelines</h2>
  <p>This Accessibility Statement has been prepared with reference to:</p>
  <ul>
    <li><a href="https://www.w3.org/WAI/WCAG21/quickref/" target="_blank" rel="noopener">WCAG 2.1 Quick Reference</a></li>
    <li><a href="https://www.ada.gov/" target="_blank" rel="noopener">Americans with Disabilities Act (ADA)</a></li>
  </ul>

  <h2>9. Date of This Statement</h2>
  <p>This accessibility statement was created on <?php echo $lastUpdated; ?> and reflects the current state of the website as of that date.</p>

  <h2>10. Contact Us</h2>
  <p>
    <strong><?php echo htmlspecialchars($siteName); ?></strong><br>
    <?php echo htmlspecialchars($address['city']); ?>, <?php echo htmlspecialchars($address['state']); ?><br>
    <?php if (!empty($phone)): ?>Phone: <a href="tel:<?php echo preg_replace('/\D/','', $phone); ?>"><?php echo htmlspecialchars($phone); ?></a><br><?php endif; ?>
    <?php if (!empty($email)): ?>Email: <a href="mailto:<?php echo htmlspecialchars($email); ?>"><?php echo htmlspecialchars($email); ?></a><?php endif; ?>
  </p>

  <div class="legal-disclaimer">
    This Accessibility Statement is provided as a general template. We recommend reviewing this document with a licensed Florida attorney and a certified accessibility specialist before publication to ensure compliance with current ADA Title III requirements and WCAG standards.
  </div>

</article>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
