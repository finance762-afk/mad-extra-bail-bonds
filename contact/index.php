<?php
/**
 * contact/index.php — Contact Page
 * Mad Extra Bail Bonds | Delray Beach, FL | Page One Insights v6.1
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Contact Mad Extra Bail Bonds | 24/7 Bail Bond Help in South Florida';
$pageDescription = 'Need a bail bond in South Florida right now? Contact Mad Extra Bail Bonds in Delray Beach. Licensed FL bondsman available 24/7 across Palm Beach, Broward & Miami-Dade County.';
$canonicalUrl    = $siteUrl . '/contact/';
$currentPage     = 'contact';

$_breadcrumb = generateBreadcrumbSchema([
    ['name' => 'Home',    'url' => $siteUrl . '/'],
    ['name' => 'Contact', 'url' => $siteUrl . '/contact/'],
]);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
echo '<script type="application/ld+json">' . json_encode($_breadcrumb, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>' . "\n";
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
/* ============================================================
   CONTACT PAGE — Mad Extra Bail Bonds
   Premium Tier | Dark/Neon Design System
   Techniques: layered hero with neon orbs, split asymmetric layout,
   glassmorphism contact card, floating-label form with neon focus,
   separate TCPA consent checkboxes, dark CTA band
   ============================================================ */

/* ── 1. HERO ── */
.contact-hero {
  position: relative;
  min-height: 44vh;
  display: flex;
  align-items: center;
  background: #09090f;
  overflow: hidden;
  padding-top: var(--nav-height, 72px);
  padding-bottom: var(--space-10);
}
.contact-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 50% 70% at 5% 40%, rgba(229,53,231,0.2) 0%, transparent 60%),
    radial-gradient(ellipse 40% 55% at 88% 20%, rgba(249,183,62,0.14) 0%, transparent 55%),
    radial-gradient(ellipse 60% 40% at 50% 105%, rgba(10,18,38,0.98) 0%, transparent 75%);
  pointer-events: none;
}
.contact-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.03'/%3E%3C/svg%3E");
  opacity: 0.5;
  pointer-events: none;
}
.ct-orb {
  position: absolute;
  border-radius: 50%;
  pointer-events: none;
}
.ct-orb-1 {
  width: 420px; height: 420px;
  top: -100px; left: -80px;
  background: radial-gradient(circle, rgba(229,53,231,0.15) 0%, transparent 70%);
  animation: ct-orb 13s ease-in-out infinite;
}
.ct-orb-2 {
  width: 280px; height: 280px;
  bottom: -30px; right: 10%;
  background: radial-gradient(circle, rgba(249,183,62,0.12) 0%, transparent 70%);
  animation: ct-orb 17s ease-in-out infinite reverse;
  animation-delay: -5s;
}
@keyframes ct-orb {
  0%,100% { transform: translate(0,0); }
  40%     { transform: translate(10px,-14px); }
  70%     { transform: translate(-7px,10px); }
}
.contact-hero-inner {
  position: relative;
  z-index: 2;
  max-width: 680px;
  padding: var(--space-8) 0;
}
.contact-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  font-family: var(--font-heading);
  font-size: 0.68rem;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 3px;
  color: var(--color-secondary);
  padding: 5px 14px;
  border: 1px solid rgba(229,53,231,0.35);
  border-radius: 100px;
  background: rgba(229,53,231,0.07);
  margin-bottom: var(--space-4);
}
.contact-eyebrow .pulse-dot {
  width: 6px; height: 6px;
  border-radius: 50%;
  background: var(--color-secondary);
  box-shadow: 0 0 8px var(--color-secondary);
  animation: pulse-dot 2s ease-in-out infinite;
}
@keyframes pulse-dot { 0%,100% { opacity:1; transform:scale(1); } 50% { opacity:.5; transform:scale(.7); } }
.contact-hero h1 {
  font-size: clamp(1.9rem, 4vw, 3rem);
  font-weight: 900;
  color: var(--color-white);
  line-height: 1.1;
  letter-spacing: -0.03em;
  text-wrap: balance;
  margin-bottom: var(--space-4);
}
.contact-hero h1 .hl-mag  { color: var(--color-secondary); text-shadow: 0 0 22px rgba(229,53,231,0.5); }
.contact-hero h1 .hl-gold { color: var(--color-accent);    text-shadow: 0 0 22px rgba(249,183,62,0.5); }
.contact-hero-lead {
  font-size: 1rem;
  color: rgba(255,255,255,0.62);
  line-height: 1.78;
  margin-bottom: var(--space-5);
  max-width: 580px;
}
.contact-trust-row {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-2);
}
.ct-badge {
  display: inline-flex;
  align-items: center;
  gap: 5px;
  font-size: 0.68rem;
  font-weight: 700;
  color: rgba(255,255,255,0.7);
  padding: 4px 11px;
  border-radius: 100px;
  background: rgba(255,255,255,0.055);
  border: 1px solid rgba(255,255,255,0.1);
  text-transform: uppercase;
  letter-spacing: 0.5px;
}
.ct-badge svg { width: 11px; height: 11px; color: var(--color-accent); flex-shrink: 0; }

/* ── 2. CONTACT LAYOUT ── */
.contact-layout {
  background: #f4f6f9;
  padding: var(--space-16) 0;
}
.contact-grid {
  display: grid;
  grid-template-columns: 1fr 400px;
  gap: var(--space-12);
  align-items: start;
}

/* ── 3. CONTACT FORM ── */
.contact-form-wrap {
  background: var(--color-white);
  border-radius: 20px;
  padding: var(--space-10) var(--space-9);
  box-shadow: 0 4px 28px rgba(0,0,0,0.07);
  border: 1px solid rgba(229,53,231,0.08);
}
.form-header {
  margin-bottom: var(--space-7);
}
.form-header h2 {
  font-size: 1.6rem;
  font-weight: 900;
  color: var(--color-dark);
  letter-spacing: -0.02em;
  margin-bottom: var(--space-2);
  text-wrap: balance;
}
.form-header h2 em { color: var(--color-secondary); font-style: normal; }
.form-header p {
  font-size: 0.88rem;
  color: var(--color-gray);
  line-height: 1.65;
  margin: 0;
}
/* Technique: floating labels with neon focus */
.form-field {
  position: relative;
  margin-bottom: var(--space-5);
}
.form-field input,
.form-field select,
.form-field textarea {
  width: 100%;
  padding: 18px 16px 8px;
  background: #f8f9fc;
  border: 2px solid rgba(0,0,0,0.08);
  border-radius: var(--radius-md, 10px);
  font-family: var(--font-body);
  font-size: 0.95rem;
  color: var(--color-dark);
  transition: border-color var(--transition-base), box-shadow var(--transition-base), background var(--transition-base);
  outline: none;
}
.form-field input:focus,
.form-field select:focus,
.form-field textarea:focus {
  border-color: var(--color-secondary);
  background: #fff;
  box-shadow: 0 0 0 3px rgba(229,53,231,0.1);
}
.form-field label {
  position: absolute;
  top: 13px;
  left: 16px;
  font-size: 0.88rem;
  color: rgba(0,0,0,0.4);
  pointer-events: none;
  transition: all 0.2s ease;
}
.form-field input:focus + label,
.form-field input:not(:placeholder-shown) + label,
.form-field textarea:focus + label,
.form-field textarea:not(:placeholder-shown) + label {
  top: 5px;
  font-size: 0.7rem;
  color: var(--color-secondary);
  font-weight: 700;
  letter-spacing: 0.5px;
}
.form-field select {
  padding: 14px 16px;
  appearance: none;
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='rgba(0,0,0,0.4)' stroke-width='2'%3E%3Cpath d='M6 9l6 6 6-6'/%3E%3C/svg%3E");
  background-repeat: no-repeat;
  background-position: right 14px center;
  padding-right: 40px;
}
.form-field textarea { resize: vertical; min-height: 100px; }
.form-row {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-4);
}
.form-honeypot { display: none !important; }

/* Technique: separate TCPA consent checkboxes */
.form-consent-fieldset {
  border: 1px solid rgba(0,0,0,0.08);
  border-radius: var(--radius-md);
  padding: var(--space-5) var(--space-5);
  margin-bottom: var(--space-5);
  background: #f9f9fc;
}
.form-consent-legend {
  font-family: var(--font-heading);
  font-size: 0.82rem;
  font-weight: 800;
  color: var(--color-dark);
  text-transform: uppercase;
  letter-spacing: 1px;
  padding: 0 var(--space-2);
}
.form-consent-item {
  display: flex;
  align-items: flex-start;
  gap: var(--space-3);
  margin-top: var(--space-4);
  cursor: pointer;
}
.consent-checkbox {
  width: 18px !important;
  height: 18px !important;
  margin-top: 2px;
  flex-shrink: 0;
  accent-color: var(--color-secondary);
  cursor: pointer;
  padding: 0 !important;
  border: none !important;
  background: transparent !important;
}
.consent-label {
  font-size: 0.82rem;
  line-height: 1.55;
  color: var(--color-gray);
  position: static;
  pointer-events: auto;
  top: auto;
  left: auto;
  background: transparent;
  padding: 0;
  cursor: pointer;
}
.consent-label strong { color: var(--color-dark); }
.consent-label a { color: var(--color-secondary); text-decoration: underline; }
.form-consent-required .consent-label { color: var(--color-dark); }
.required-star { color: var(--color-secondary); font-weight: 900; }

.btn-submit {
  width: 100%;
  padding: 15px;
  background: linear-gradient(135deg, var(--color-secondary) 0%, #b515b7 100%);
  color: var(--color-white);
  font-family: var(--font-heading);
  font-size: 0.9rem;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  border: none;
  border-radius: var(--radius-md);
  cursor: pointer;
  box-shadow: 0 4px 22px rgba(229,53,231,0.4);
  transition: all var(--transition-base);
  display: flex;
  align-items: center;
  justify-content: center;
  gap: var(--space-2);
}
.btn-submit:hover {
  box-shadow: 0 8px 34px rgba(229,53,231,0.6);
  transform: translateY(-1px);
}
.btn-submit svg { width: 16px; height: 16px; }
.form-disclaimer {
  text-align: center;
  font-size: 0.72rem;
  color: rgba(0,0,0,0.35);
  margin-top: var(--space-3);
  line-height: 1.5;
}
.form-disclaimer a { color: var(--color-secondary); text-decoration: underline; }

/* ── 4. CONTACT INFO SIDEBAR ── */
.contact-sidebar {
  display: flex;
  flex-direction: column;
  gap: var(--space-5);
}
.contact-info-card {
  background: linear-gradient(145deg, #09090f, #180930);
  border-radius: 18px;
  padding: var(--space-7);
  border: 1px solid rgba(229,53,231,0.18);
  position: relative;
  overflow: hidden;
}
.contact-info-card::before {
  content: '';
  position: absolute;
  top: -60px; right: -60px;
  width: 200px; height: 200px;
  border-radius: 50%;
  background: radial-gradient(circle, rgba(229,53,231,0.15) 0%, transparent 70%);
  pointer-events: none;
}
.cic-title {
  font-family: var(--font-heading);
  font-size: 0.98rem;
  font-weight: 800;
  color: var(--color-white);
  margin-bottom: var(--space-5);
  position: relative;
  z-index: 1;
}
.cic-items {
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
  position: relative;
  z-index: 1;
}
.cic-item {
  display: flex;
  align-items: flex-start;
  gap: var(--space-3);
}
.cic-icon {
  flex-shrink: 0;
  width: 34px; height: 34px;
  border-radius: 8px;
  background: rgba(249,183,62,0.12);
  border: 1px solid rgba(249,183,62,0.2);
  display: flex; align-items: center; justify-content: center;
  color: var(--color-accent);
  margin-top: 1px;
}
.cic-icon svg { width: 16px; height: 16px; }
.cic-text strong {
  display: block;
  font-size: 0.78rem;
  font-weight: 700;
  color: rgba(255,255,255,0.5);
  text-transform: uppercase;
  letter-spacing: 0.5px;
  margin-bottom: 2px;
}
.cic-text a,
.cic-text span {
  font-size: 0.9rem;
  color: var(--color-white);
  text-decoration: none;
  line-height: 1.5;
}
.cic-text a:hover { color: var(--color-accent); }
/* Emergency pill */
.cic-emergency-pill {
  display: inline-flex;
  align-items: center;
  gap: 5px;
  font-size: 0.65rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1px;
  color: var(--color-secondary);
  padding: 2px 8px;
  border-radius: 100px;
  background: rgba(229,53,231,0.1);
  border: 1px solid rgba(229,53,231,0.2);
  margin-top: 3px;
  display: block;
  width: fit-content;
}
/* Service areas card */
.coverage-card {
  background: var(--color-white);
  border-radius: 18px;
  padding: var(--space-6);
  border: 1px solid rgba(229,53,231,0.1);
}
.coverage-card h3 {
  font-family: var(--font-heading);
  font-size: 0.92rem;
  font-weight: 800;
  color: var(--color-dark);
  margin-bottom: var(--space-4);
  display: flex;
  align-items: center;
  gap: var(--space-2);
}
.coverage-card h3 svg { width: 15px; height: 15px; color: var(--color-secondary); }
.county-row { margin-bottom: var(--space-3); }
.county-label {
  font-size: 0.66rem;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  color: var(--color-secondary);
  margin-bottom: var(--space-2);
}
.county-pills {
  display: flex;
  flex-wrap: wrap;
  gap: 5px;
}
.cpill {
  font-size: 0.68rem;
  color: var(--color-gray);
  background: #f4f6f9;
  border: 1px solid rgba(0,0,0,0.07);
  border-radius: 100px;
  padding: 2px 8px;
}
/* Response time card */
.response-card {
  background: linear-gradient(135deg, rgba(229,53,231,0.08), rgba(249,183,62,0.05));
  border: 1px solid rgba(229,53,231,0.18);
  border-radius: 14px;
  padding: var(--space-5) var(--space-6);
  display: flex;
  align-items: center;
  gap: var(--space-4);
}
.rc-icon {
  flex-shrink: 0;
  width: 44px; height: 44px;
  border-radius: 50%;
  background: linear-gradient(135deg, var(--color-secondary), #8f00a0);
  display: flex; align-items: center; justify-content: center;
  color: var(--color-white);
  box-shadow: 0 0 18px rgba(229,53,231,0.38);
}
.rc-icon svg { width: 20px; height: 20px; }
.rc-text strong {
  display: block;
  font-family: var(--font-heading);
  font-size: 0.88rem;
  font-weight: 800;
  color: var(--color-dark);
  margin-bottom: 2px;
}
.rc-text span {
  font-size: 0.78rem;
  color: var(--color-gray);
  line-height: 1.5;
}

/* ── RESPONSIVE ── */
@media (max-width: 1024px) {
  .contact-grid { grid-template-columns: 1fr; }
  .contact-sidebar { display: grid; grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 640px) {
  .form-row { grid-template-columns: 1fr; }
  .contact-form-wrap { padding: var(--space-7) var(--space-5); }
  .contact-sidebar { grid-template-columns: 1fr; }
}
</style>

<!-- ═══ HERO ═══ -->
<section class="contact-hero" aria-label="Contact Mad Extra Bail Bonds">
  <div class="ct-orb ct-orb-1"></div>
  <div class="ct-orb ct-orb-2"></div>
  <div class="container">
    <div class="contact-hero-inner">
      <span class="contact-eyebrow">
        <span class="pulse-dot"></span>
        We Answer Every Call
      </span>
      <h1>Get Bail Bond Help <span class="hl-mag">Right Now</span> — <span class="hl-gold">24/7</span> in South Florida</h1>
      <p class="contact-hero-lead">Mad Extra Bail Bonds is a licensed Florida bondsman based in Delray Beach. Call or send a message — someone with the authority to act will respond immediately, any hour of the day.</p>
      <div class="contact-trust-row">
        <span class="ct-badge"><?php echo lucide_icon('shield-check'); ?> Licensed FL Bondsman</span>
        <span class="ct-badge"><?php echo lucide_icon('clock'); ?> 24/7 Available</span>
        <span class="ct-badge"><?php echo lucide_icon('zap'); ?> Fast Response</span>
        <span class="ct-badge"><?php echo lucide_icon('landmark'); ?> All South FL Jails</span>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SVG DIVIDER ═══ -->
<div style="line-height:0;background:#09090f" aria-hidden="true">
  <svg viewBox="0 0 1440 44" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" style="display:block;width:100%">
    <path d="M0,44 L0,10 Q480,44 720,20 Q960,0 1440,28 L1440,44 Z" fill="#f4f6f9"/>
  </svg>
</div>

<!-- ═══ CONTACT LAYOUT ═══ -->
<section class="contact-layout" aria-label="Contact form and information">
  <div class="container">
    <div class="contact-grid">

      <!-- FORM -->
      <div class="contact-form-wrap">
        <div class="form-header">
          <h2>Send us a message — <em>we respond fast</em></h2>
          <p>Fill out the form below with what you know. We'll follow up immediately. For urgent situations, call us directly.</p>
        </div>

        <form action="<?php echo htmlspecialchars($formAction); ?>" method="POST" novalidate>

          <!-- Honeypot -->
          <input type="text" name="_honey" class="form-honeypot" tabindex="-1" autocomplete="off" aria-hidden="true">

          <!-- Redirect -->
          <input type="hidden" name="_next" value="/thank-you">

          <!-- Consent tracking -->
          <input type="hidden" name="_consent_version" value="v2.1">
          <input type="hidden" name="_consent_page" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>">

          <!-- Name + Phone -->
          <div class="form-row">
            <div class="form-field">
              <input type="text" name="name" id="contact-name" placeholder=" " required autocomplete="name">
              <label for="contact-name">Full Name *</label>
            </div>
            <div class="form-field">
              <input type="tel" name="phone" id="contact-phone" placeholder=" " required autocomplete="tel">
              <label for="contact-phone">Phone Number *</label>
            </div>
          </div>

          <!-- Email -->
          <div class="form-field">
            <input type="email" name="email" id="contact-email" placeholder=" " autocomplete="email">
            <label for="contact-email">Email Address (optional)</label>
          </div>

          <!-- Service needed -->
          <div class="form-field">
            <select name="service" id="contact-service">
              <option value="">Select the type of bail bond needed...</option>
              <?php foreach ($services as $svc): ?>
              <option value="<?php echo htmlspecialchars($svc['name']); ?>"><?php echo htmlspecialchars($svc['name']); ?></option>
              <?php endforeach; ?>
              <option value="Not sure">Not sure / need help</option>
            </select>
          </div>

          <!-- Message -->
          <div class="form-field">
            <textarea name="message" id="contact-message" placeholder=" " rows="4"></textarea>
            <label for="contact-message">Tell us about the situation (optional)</label>
          </div>

          <!-- ═══ TCPA CONSENT — 3 SEPARATE CHECKBOXES ═══ -->
          <fieldset class="form-consent-fieldset">
            <legend class="form-consent-legend">Communication Consent</legend>

            <!-- 1. Email opt-in (optional) -->
            <label class="form-consent-item" for="contact-email-optin">
              <input type="checkbox" name="email_opt_in" id="contact-email-optin" value="yes" class="consent-checkbox">
              <span class="consent-label">
                <strong>Email updates (optional):</strong> I agree to receive emails from
                <?php echo htmlspecialchars($siteName); ?> about my inquiry, services, and relevant information.
                I can unsubscribe anytime via the link in any email.
              </span>
            </label>

            <!-- 2. SMS opt-in (optional) -->
            <label class="form-consent-item" for="contact-sms-optin">
              <input type="checkbox" name="sms_opt_in" id="contact-sms-optin" value="yes" class="consent-checkbox">
              <span class="consent-label">
                <strong>SMS / Text messages (optional):</strong> I agree to receive text messages from
                <?php echo htmlspecialchars($siteName); ?> at the phone number I provided about my bail bond inquiry and case updates.
                Message frequency varies. Message and data rates may apply. Reply STOP to unsubscribe, HELP for help.
                <strong>Consent is not a condition of purchase.</strong>
              </span>
            </label>

            <!-- 3. Terms acceptance (REQUIRED) -->
            <label class="form-consent-item form-consent-required" for="contact-terms">
              <input type="checkbox" name="terms_accepted" id="contact-terms" value="yes" class="consent-checkbox" required>
              <span class="consent-label">
                I have read and agree to the
                <a href="/privacy-policy/">Privacy Policy</a>
                and
                <a href="/terms/">Terms of Service</a>. <span class="required-star">*</span>
              </span>
            </label>

          </fieldset>

          <button type="submit" class="btn-submit">
            <?php echo lucide_icon('send'); ?> Send My Message
          </button>
          <p class="form-disclaimer">
            By submitting, you agree to our <a href="/privacy-policy/">Privacy Policy</a>.
            We will never share your information with third parties for marketing purposes.
          </p>
        </form>
      </div><!-- /.contact-form-wrap -->

      <!-- SIDEBAR INFO -->
      <div class="contact-sidebar">

        <!-- Response time card -->
        <div class="response-card">
          <div class="rc-icon"><?php echo lucide_icon('zap'); ?></div>
          <div class="rc-text">
            <strong>We respond immediately</strong>
            <span>For urgent bail emergencies, call us directly — do not wait for a form response</span>
          </div>
        </div>

        <!-- Contact info card -->
        <div class="contact-info-card">
          <p class="cic-title">Reach Us Directly</p>
          <div class="cic-items">
            <?php if (!empty($phone)): ?>
            <div class="cic-item">
              <div class="cic-icon"><?php echo lucide_icon('phone'); ?></div>
              <div class="cic-text">
                <strong>Phone (24/7)</strong>
                <a href="tel:<?php echo preg_replace('/\D/','', $phone); ?>"><?php echo htmlspecialchars($phone); ?></a>
                <span class="cic-emergency-pill">Emergency Line — Always Open</span>
              </div>
            </div>
            <?php endif; ?>
            <?php if (!empty($email)): ?>
            <div class="cic-item">
              <div class="cic-icon"><?php echo lucide_icon('mail'); ?></div>
              <div class="cic-text">
                <strong>Email</strong>
                <a href="mailto:<?php echo htmlspecialchars($email); ?>"><?php echo htmlspecialchars($email); ?></a>
              </div>
            </div>
            <?php endif; ?>
            <div class="cic-item">
              <div class="cic-icon"><?php echo lucide_icon('map-pin'); ?></div>
              <div class="cic-text">
                <strong>Address</strong>
                <span><?php echo htmlspecialchars($address['street']); ?>, <?php echo htmlspecialchars($address['city']); ?>, <?php echo htmlspecialchars($address['state']); ?> <?php echo htmlspecialchars($address['zip']); ?></span>
              </div>
            </div>
            <div class="cic-item">
              <div class="cic-icon"><?php echo lucide_icon('clock'); ?></div>
              <div class="cic-text">
                <strong>Hours</strong>
                <span>Monday–Sunday, 24 Hours<br><strong style="color:var(--color-accent)">Always Available</strong></span>
              </div>
            </div>
          </div>
        </div>

        <!-- Service coverage card -->
        <div class="coverage-card">
          <h3><?php echo lucide_icon('map'); ?> Service Coverage</h3>
          <?php
          $counties = array_unique(array_column($serviceAreas, 'county'));
          foreach ($counties as $county):
            $cities = array_filter($serviceAreas, fn($a) => $a['county'] === $county);
          ?>
          <div class="county-row">
            <div class="county-label"><?php echo htmlspecialchars($county); ?></div>
            <div class="county-pills">
              <?php foreach ($cities as $city): ?>
              <span class="cpill"><?php echo htmlspecialchars($city['name']); ?></span>
              <?php endforeach; ?>
            </div>
          </div>
          <?php endforeach; ?>
        </div>

      </div><!-- /.contact-sidebar -->
    </div><!-- /.contact-grid -->
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
