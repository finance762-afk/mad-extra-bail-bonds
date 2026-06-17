<?php
/**
 * thank-you.php — Form Submission Confirmation
 * Mad Extra Bail Bonds | Delray Beach, FL | Page One Insights v6.1
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle    = 'Message Sent — Mad Extra Bail Bonds';
$pageDescription = 'Thank you for contacting Mad Extra Bail Bonds. We will respond as quickly as possible.';
$canonicalUrl = $siteUrl . '/thank-you';
$noindex      = true;
$currentPage  = '';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
.thankyou-page {
  min-height: 80vh;
  display: flex;
  align-items: center;
  background: #09090f;
  position: relative;
  overflow: hidden;
  padding-top: var(--nav-height, 72px);
}
.thankyou-page::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 55% 70% at 10% 40%, rgba(229,53,231,0.16) 0%, transparent 60%),
    radial-gradient(ellipse 40% 55% at 85% 25%, rgba(249,183,62,0.12) 0%, transparent 55%);
  pointer-events: none;
}
.thankyou-page::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.03'/%3E%3C/svg%3E");
  opacity: 0.4;
  pointer-events: none;
}
.thankyou-inner {
  position: relative;
  z-index: 2;
  text-align: center;
  padding: var(--space-16) 0;
  max-width: 560px;
  margin: 0 auto;
}
.ty-icon-ring {
  width: 80px; height: 80px;
  border-radius: 50%;
  background: linear-gradient(135deg, rgba(229,53,231,0.2), rgba(249,183,62,0.12));
  border: 2px solid rgba(229,53,231,0.35);
  display: flex; align-items: center; justify-content: center;
  margin: 0 auto var(--space-6);
  color: var(--color-secondary);
  box-shadow: 0 0 28px rgba(229,53,231,0.28);
}
.ty-icon-ring svg { width: 36px; height: 36px; }
.ty-eyebrow {
  font-family: var(--font-heading);
  font-size: 0.68rem;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 3px;
  color: var(--color-accent);
  margin-bottom: var(--space-3);
  display: block;
}
.thankyou-inner h1 {
  font-size: clamp(1.8rem, 4vw, 2.8rem);
  font-weight: 900;
  color: var(--color-white);
  line-height: 1.1;
  letter-spacing: -0.03em;
  text-wrap: balance;
  margin-bottom: var(--space-4);
}
.thankyou-inner h1 em { color: var(--color-secondary); font-style: normal; }
.thankyou-inner p {
  font-size: 0.95rem;
  color: rgba(255,255,255,0.58);
  line-height: 1.78;
  max-width: 440px;
  margin: 0 auto var(--space-3);
}
.ty-urgent {
  background: rgba(229,53,231,0.08);
  border: 1px solid rgba(229,53,231,0.22);
  border-radius: var(--radius-md);
  padding: var(--space-5) var(--space-6);
  margin: var(--space-7) auto;
  max-width: 420px;
}
.ty-urgent p {
  font-size: 0.88rem;
  color: rgba(255,255,255,0.7);
  margin: 0;
  text-align: center;
}
.ty-urgent strong { color: var(--color-accent); }
.ty-btns {
  display: flex;
  gap: var(--space-3);
  justify-content: center;
  flex-wrap: wrap;
  margin-top: var(--space-6);
}
.btn-ty-primary {
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
  box-shadow: 0 0 22px rgba(229,53,231,0.42);
  transition: all var(--transition-base);
}
.btn-ty-primary:hover {
  background: #f043f2;
  box-shadow: 0 0 40px rgba(229,53,231,0.68);
  transform: translateY(-2px);
  color: var(--color-white);
}
.btn-ty-primary svg { width: 15px; height: 15px; }
.btn-ty-secondary {
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
.btn-ty-secondary:hover {
  background: var(--color-accent);
  color: #0a0d1a;
  border-color: var(--color-accent);
  transform: translateY(-2px);
}
</style>

<section class="thankyou-page" aria-label="Message received">
  <div class="container">
    <div class="thankyou-inner">
      <div class="ty-icon-ring"><?php echo lucide_icon('check-circle'); ?></div>
      <span class="ty-eyebrow">Message Received</span>
      <h1>We've got your message — <em>responding now</em></h1>
      <p>Thank you for reaching out to <?php echo htmlspecialchars($siteName); ?>. We review every submission immediately and will follow up as quickly as possible.</p>
      <p>For urgent bail emergencies, don't wait — call us directly any hour of the day.</p>

      <?php if (!empty($phone)): ?>
      <div class="ty-urgent">
        <p><strong>Bail emergency?</strong> Call us right now at <strong><?php echo htmlspecialchars($phone); ?></strong> — we answer 24/7.</p>
      </div>
      <?php endif; ?>

      <div class="ty-btns">
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo preg_replace('/\D/','', $phone); ?>" class="btn-ty-primary">
          <?php echo lucide_icon('phone'); ?> Call Now — 24/7
        </a>
        <?php endif; ?>
        <a href="/" class="btn-ty-secondary"><?php echo lucide_icon('home'); ?> Return Home</a>
      </div>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
