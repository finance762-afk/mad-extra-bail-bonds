<?php
/**
 * 404.php — Not Found Error Page
 * Mad Extra Bail Bonds | Delray Beach, FL | Page One Insights v6.1
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

header('HTTP/1.1 404 Not Found');

$pageTitle    = '404 — Page Not Found | Mad Extra Bail Bonds';
$pageDescription = 'This page could not be found. Mad Extra Bail Bonds is a licensed FL bail bondsman serving South Florida 24/7 — call or visit our homepage for help.';
$canonicalUrl = $siteUrl . '/404';
$noindex      = true;
$currentPage  = '';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
.error-page {
  min-height: 80vh;
  display: flex;
  align-items: center;
  background: #09090f;
  position: relative;
  overflow: hidden;
  padding-top: var(--nav-height, 72px);
}
.error-page::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 55% 70% at 10% 40%, rgba(229,53,231,0.18) 0%, transparent 60%),
    radial-gradient(ellipse 40% 55% at 85% 25%, rgba(249,183,62,0.12) 0%, transparent 55%);
  pointer-events: none;
}
.error-page::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.03'/%3E%3C/svg%3E");
  opacity: 0.5;
  pointer-events: none;
}
.error-inner {
  position: relative;
  z-index: 2;
  text-align: center;
  padding: var(--space-16) 0;
  max-width: 600px;
  margin: 0 auto;
}
.error-code {
  font-family: var(--font-heading);
  font-size: clamp(5rem, 15vw, 9rem);
  font-weight: 900;
  line-height: 1;
  background: linear-gradient(135deg, var(--color-secondary) 0%, var(--color-accent) 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  margin-bottom: var(--space-4);
  letter-spacing: -0.04em;
}
.error-inner h1 {
  font-size: clamp(1.4rem, 3vw, 2rem);
  font-weight: 800;
  color: var(--color-white);
  margin-bottom: var(--space-4);
  text-wrap: balance;
}
.error-inner p {
  font-size: 0.95rem;
  color: rgba(255,255,255,0.55);
  line-height: 1.75;
  max-width: 460px;
  margin: 0 auto var(--space-8);
}
.error-btns {
  display: flex;
  gap: var(--space-3);
  justify-content: center;
  flex-wrap: wrap;
  margin-bottom: var(--space-10);
}
.btn-err-primary {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 13px 28px;
  background: var(--color-secondary);
  color: var(--color-white);
  font-family: var(--font-heading);
  font-size: 0.82rem;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  border-radius: var(--radius-md);
  text-decoration: none;
  box-shadow: 0 0 22px rgba(229,53,231,0.44);
  transition: all var(--transition-base);
}
.btn-err-primary:hover {
  background: #f043f2;
  box-shadow: 0 0 42px rgba(229,53,231,0.7);
  transform: translateY(-2px);
  color: var(--color-white);
}
.btn-err-primary svg { width: 15px; height: 15px; }
.btn-err-secondary {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 12px 24px;
  background: transparent;
  color: var(--color-accent);
  border: 2px solid rgba(249,183,62,0.5);
  font-family: var(--font-heading);
  font-size: 0.82rem;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  border-radius: var(--radius-md);
  text-decoration: none;
  transition: all var(--transition-base);
}
.btn-err-secondary:hover {
  background: var(--color-accent);
  color: #0a0d1a;
  border-color: var(--color-accent);
  transform: translateY(-2px);
}
.error-links {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: var(--space-3) var(--space-5);
}
.error-links a {
  font-size: 0.82rem;
  color: rgba(255,255,255,0.45);
  text-decoration: none;
  transition: color var(--transition-base);
  display: flex;
  align-items: center;
  gap: 5px;
}
.error-links a:hover { color: rgba(255,255,255,0.82); }
.error-links a svg { width: 12px; height: 12px; }
</style>

<section class="error-page" aria-label="Page not found">
  <div class="container">
    <div class="error-inner">
      <div class="error-code">404</div>
      <h1>Page not found</h1>
      <p>This page has moved or doesn't exist. If you need bail bond help in South Florida, <?php echo htmlspecialchars($siteName); ?> is available 24 hours a day.</p>
      <div class="error-btns">
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo preg_replace('/\D/','', $phone); ?>" class="btn-err-primary">
          <?php echo lucide_icon('phone'); ?> Call Now — 24/7
        </a>
        <?php endif; ?>
        <a href="/" class="btn-err-secondary"><?php echo lucide_icon('home'); ?> Back to Home</a>
      </div>
      <div class="error-links">
        <a href="/services/"><?php echo lucide_icon('shield'); ?> Our Services</a>
        <a href="/about/"><?php echo lucide_icon('users'); ?> About Us</a>
        <a href="/faq/"><?php echo lucide_icon('help-circle'); ?> FAQ</a>
        <a href="/contact/"><?php echo lucide_icon('mail'); ?> Contact</a>
      </div>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
