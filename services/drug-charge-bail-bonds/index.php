<?php
/**
 * services/drug-charge-bail-bonds/index.php — Drug Charge Bail Bonds Service Page
 * Mad Extra Bail Bonds | Delray Beach, FL
 * Phase 4: Service Pages
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Drug Charge Bail Bonds South Florida | Mad Extra Bail Bonds | 24/7';
$pageDescription = 'Arrested on drug charges in South Florida? Mad Extra Bail Bonds posts bail for possession, trafficking & distribution at any Palm Beach, Broward or Miami-Dade jail 24/7.';
$canonicalUrl    = $siteUrl . '/services/drug-charge-bail-bonds/';
$currentPage     = 'services';

$_breadcrumb = generateBreadcrumbSchema([
    ['name' => 'Home',                    'url' => $siteUrl . '/'],
    ['name' => 'Services',                'url' => $siteUrl . '/services/'],
    ['name' => 'Drug Charge Bail Bonds',  'url' => $siteUrl . '/services/drug-charge-bail-bonds/'],
]);

$_serviceSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'Service',
    '@id'         => $siteUrl . '/services/drug-charge-bail-bonds/#service-drug-charge-bail-bonds',
    'name'        => 'Drug Charge Bail Bonds',
    'description' => 'Bail bonds for drug possession, trafficking, and distribution charges across Palm Beach, Broward, and Miami-Dade County. Licensed FL bondsman available 24/7.',
    'url'         => $siteUrl . '/services/drug-charge-bail-bonds/',
    'provider'    => ['@id' => $siteUrl . '/#localbusiness'],
    'areaServed'  => [
        ['@type' => 'State', 'name' => 'Florida'],
        ['@type' => 'City',  'name' => 'Delray Beach, FL'],
    ],
    'serviceType' => 'Drug Charge Bail Bonds',
];

$_faqs = [
    [
        'q' => 'Does a drug trafficking charge always require a bond hearing in Florida?',
        'a' => 'Not always, but frequently. Under Florida Statute 903.046, a judge may hold a bond hearing for drug trafficking charges because of the severity of the offense. At that hearing the judge weighs flight risk and public safety. We advise clients to contact us the moment of arrest so we are prepared to post bond the moment it is set — whether at first appearance or after a hearing.',
    ],
    [
        'q' => 'Can immigration status affect a drug charge bail bond in South Florida?',
        'a' => 'Yes. An ICE hold or immigration detainer on top of a drug charge complicates and sometimes increases bail. Some judges consider immigration status in the flight-risk analysis. If the defendant has an immigration hold, standard bail bond release may be followed immediately by transfer to ICE custody. We work through all of these scenarios — call us and we will walk you through the full picture before you pay anything.',
    ],
    [
        'q' => 'What happens to my bail bond if new drug charges are added after release?',
        'a' => 'If new charges are added that are covered under the existing bond, the bondsman may need to re-evaluate or post an additional bond. In some cases the original bond is revoked and a new bond is required for the combined charges. We monitor this situation for every client and contact co-signers immediately if bond status changes after release.',
    ],
    [
        'q' => 'Is drug charge bail bond information kept confidential in South Florida?',
        'a' => 'Yes. All interactions with Mad Extra Bail Bonds are treated as confidential. Florida bail bond filings are part of the public court record, but our internal client communications, paperwork, and discussions are not disclosed to third parties. We understand the sensitivity of drug-related arrests and handle every case with full discretion.',
    ],
    [
        'q' => 'Can someone co-sign a drug charge bail bond without appearing in person?',
        'a' => 'In many cases, yes. For lower-amount bonds we can often process co-signer agreements remotely via phone and electronic signature. For higher bail amounts or elevated-risk situations, we may require an in-person signature. Call us and describe the situation — we will find the fastest path to execution given your circumstances.',
    ],
];
$_faqSchema = generateFAQSchema($_faqs);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
echo '<script type="application/ld+json">' . json_encode($_breadcrumb,    JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>' . "\n";
echo '<script type="application/ld+json">' . json_encode($_serviceSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>' . "\n";
echo '<script type="application/ld+json">' . json_encode($_faqSchema,     JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>' . "\n";
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
/* ============================================================
   DRUG CHARGE BAIL BONDS — Mad Extra Bail Bonds
   Premium Tier | Dark/Neon Design System
   Techniques: layered hero radials, neon orbs, glassmorphism
   sidebar, dark process steps, neon-hover benefit cards,
   FAQ accordion, SVG wave dividers, gradient-text stats,
   amber-pulse trust badges, neon glow CTA ring
   ============================================================ */

/* ── 1. HERO ── */
.hero-drug {
  position: relative;
  min-height: 55vh;
  display: flex;
  align-items: center;
  background: #06070e;
  overflow: hidden;
  padding-top: var(--nav-height, 72px);
  padding-bottom: var(--space-12);
}
/* Technique 1: ::before layered radial gradient overlays */
.hero-drug::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 60% 75% at 8% 40%, rgba(229,53,231,0.20) 0%, transparent 58%),
    radial-gradient(ellipse 50% 55% at 85% 20%, rgba(249,183,62,0.14) 0%, transparent 55%),
    radial-gradient(ellipse 70% 45% at 50% 110%, rgba(8,16,35,0.99) 0%, transparent 80%);
  pointer-events: none;
}
/* Technique 2: ::after SVG fractal noise texture */
.hero-drug::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
  opacity: 0.55;
  pointer-events: none;
}
/* Technique 3: animated neon orbs */
.drug-orb {
  position: absolute;
  border-radius: 50%;
  pointer-events: none;
  will-change: transform;
}
.drug-orb-1 {
  width: 500px; height: 500px;
  top: -160px; left: -110px;
  background: radial-gradient(circle, rgba(229,53,231,0.15) 0%, transparent 68%);
  animation: drug-orb-float 14s ease-in-out infinite;
}
.drug-orb-2 {
  width: 350px; height: 350px;
  bottom: -40px; right: 8%;
  background: radial-gradient(circle, rgba(249,183,62,0.11) 0%, transparent 68%);
  animation: drug-orb-float 18s ease-in-out infinite reverse;
  animation-delay: -7s;
}
@keyframes drug-orb-float {
  0%,100% { transform: translate(0,0) scale(1); }
  38%     { transform: translate(14px,-18px) scale(1.05); }
  68%     { transform: translate(-10px,12px) scale(0.96); }
}
.hero-drug-inner {
  position: relative;
  z-index: 2;
  display: grid;
  grid-template-columns: 1fr 400px;
  gap: var(--space-12);
  align-items: center;
  padding: var(--space-12) 0;
  width: 100%;
}
.hero-drug-left { max-width: 620px; }

.drug-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  font-family: var(--font-heading);
  font-size: 0.68rem;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 3px;
  color: var(--color-secondary);
  padding: 6px 16px;
  border: 1px solid rgba(229,53,231,0.42);
  border-radius: var(--radius-full);
  background: rgba(229,53,231,0.07);
  margin-bottom: var(--space-5);
}
.drug-eyebrow .pulse-dot {
  width: 7px; height: 7px;
  border-radius: 50%;
  background: var(--color-secondary);
  box-shadow: 0 0 8px var(--color-secondary);
  animation: drug-pulse 2s ease-in-out infinite;
  flex-shrink: 0;
}
@keyframes drug-pulse {
  0%,100% { opacity:1; transform:scale(1); }
  50%     { opacity:.55; transform:scale(.7); }
}

.hero-drug h1 {
  font-size: clamp(1.85rem, 3.8vw, 3.1rem);
  font-weight: 900;
  color: #fff;
  line-height: 1.1;
  margin-bottom: var(--space-5);
  letter-spacing: -0.025em;
  text-wrap: balance;
}
.hero-drug h1 .hl-gold { color: var(--color-accent); text-shadow: 0 0 28px rgba(249,183,62,0.5); }
.hero-drug h1 .hl-mag  { color: var(--color-secondary); text-shadow: 0 0 28px rgba(229,53,231,0.5); }

.hero-drug .hero-answer {
  font-size: 1rem;
  color: rgba(255,255,255,0.66);
  line-height: 1.8;
  margin-bottom: var(--space-7);
  max-width: 560px;
}
.hero-drug-btns {
  display: flex;
  gap: var(--space-3);
  flex-wrap: wrap;
  margin-bottom: var(--space-7);
}
.btn-drug-primary {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 13px 28px;
  background: var(--color-secondary);
  color: #fff;
  font-family: var(--font-heading);
  font-size: 0.82rem;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  border-radius: var(--radius-md);
  text-decoration: none;
  box-shadow: 0 0 22px rgba(229,53,231,0.42), 0 4px 14px rgba(0,0,0,0.3);
  transition: all var(--transition-base);
}
.btn-drug-primary:hover {
  background: #f043f2;
  box-shadow: 0 0 44px rgba(229,53,231,0.68), 0 8px 22px rgba(0,0,0,0.35);
  transform: translateY(-2px);
  color: #fff;
}
.btn-drug-primary svg { width: 15px; height: 15px; }
.btn-drug-secondary {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 12px 24px;
  background: transparent;
  color: var(--color-accent);
  border: 2px solid rgba(249,183,62,0.55);
  font-family: var(--font-heading);
  font-size: 0.82rem;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  border-radius: var(--radius-md);
  text-decoration: none;
  transition: all var(--transition-base);
}
.btn-drug-secondary:hover {
  background: var(--color-accent);
  color: #0a0d1a;
  border-color: var(--color-accent);
  box-shadow: 0 0 26px rgba(249,183,62,0.4);
  transform: translateY(-2px);
}
.drug-trust-row {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-2);
}
.drug-htb {
  display: inline-flex;
  align-items: center;
  gap: 5px;
  font-size: 0.67rem;
  font-weight: 700;
  color: rgba(255,255,255,0.72);
  padding: 4px 11px;
  border-radius: var(--radius-full);
  background: rgba(255,255,255,0.055);
  border: 1px solid rgba(255,255,255,0.1);
  text-transform: uppercase;
  letter-spacing: 0.5px;
  white-space: nowrap;
}
.drug-htb svg { width: 11px; height: 11px; color: var(--color-accent); flex-shrink: 0; }

/* Technique 4: glassmorphism hero sidebar card */
.hero-drug-card {
  position: relative;
  background: rgba(255,255,255,0.04);
  border: 1px solid rgba(255,255,255,0.11);
  border-radius: 18px;
  padding: var(--space-7) var(--space-6);
  backdrop-filter: blur(14px);
  -webkit-backdrop-filter: blur(14px);
}
.hero-drug-card::before {
  content: '';
  position: absolute;
  inset: -1px;
  border-radius: 19px;
  background: linear-gradient(135deg, rgba(229,53,231,0.38) 0%, rgba(249,183,62,0.18) 50%, transparent 100%);
  z-index: -1;
  opacity: 0.5;
}
.hdc-title {
  font-family: var(--font-heading);
  font-size: 1.05rem;
  font-weight: 800;
  color: #fff;
  margin-bottom: var(--space-2);
}
.hdc-note {
  font-size: 0.68rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  color: var(--color-accent);
  margin-bottom: var(--space-5);
}
.hdc-list {
  list-style: none;
  padding: 0;
  margin: 0 0 var(--space-6);
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
}
.hdc-list li {
  display: flex;
  align-items: flex-start;
  gap: var(--space-2);
  font-size: 0.85rem;
  color: rgba(255,255,255,0.8);
  line-height: 1.5;
}
.hdc-check {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  width: 18px; height: 18px;
  border-radius: 50%;
  background: linear-gradient(135deg, var(--color-secondary), var(--color-accent));
  font-size: 0.6rem;
  color: #fff;
  font-weight: 900;
  margin-top: 2px;
}
.hdc-cta {
  display: block;
  width: 100%;
  padding: 13px;
  background: linear-gradient(135deg, var(--color-accent) 0%, #d4920a 100%);
  color: #0a0d1a;
  font-family: var(--font-heading);
  font-size: 0.82rem;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  border-radius: var(--radius-md);
  text-decoration: none;
  text-align: center;
  box-shadow: 0 4px 22px rgba(249,183,62,0.38);
  transition: all var(--transition-base);
}
.hdc-cta:hover {
  box-shadow: 0 8px 34px rgba(249,183,62,0.58);
  transform: translateY(-1px);
  color: #0a0d1a;
}
.hdc-disclaimer {
  text-align: center;
  font-size: 0.6rem;
  color: rgba(255,255,255,0.3);
  margin-top: var(--space-3);
  line-height: 1.5;
}

/* ── 2. SVG DIVIDERS ── */
.div-drug-to-light { line-height: 0; background: #06070e; }
.div-drug-to-light svg { display: block; width: 100%; }
.div-drug-to-dark  { line-height: 0; background: #f4f6f9; }
.div-drug-to-dark svg  { display: block; width: 100%; }
.div-drug-to-white { line-height: 0; background: #06070e; }
.div-drug-to-white svg { display: block; width: 100%; }
.div-drug-faq      { line-height: 0; background: #fff; }
.div-drug-faq svg  { display: block; width: 100%; }

/* ── 3. INTRO / ANSWER SECTION ── */
.intro-drug {
  padding: var(--space-16) 0;
  background: #f4f6f9;
}
.intro-drug-inner {
  max-width: 860px;
  margin: 0 auto;
}
.drug-section-eyebrow {
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
  border: 1px solid rgba(229,53,231,0.28);
  border-radius: var(--radius-full);
  background: rgba(229,53,231,0.06);
  margin-bottom: var(--space-4);
}
.intro-drug h2 {
  font-size: clamp(1.65rem, 2.8vw, 2.35rem);
  font-weight: 900;
  color: #1a2340;
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.02em;
  margin-bottom: var(--space-4);
}
.intro-drug h2 em { color: var(--color-secondary); font-style: normal; }
.answer-block-drug {
  background: linear-gradient(135deg, rgba(229,53,231,0.07), rgba(249,183,62,0.04));
  border-left: 3px solid var(--color-accent);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  padding: var(--space-5) var(--space-6);
  margin-bottom: var(--space-6);
}
.answer-block-drug p {
  font-size: 0.95rem;
  color: #1a2340;
  line-height: 1.8;
  margin: 0;
  font-style: italic;
}
.intro-drug p.prose {
  font-size: 0.95rem;
  color: #4a5568;
  line-height: 1.82;
  margin-bottom: var(--space-4);
  max-width: 65ch;
}

/* ── 4. PROCESS SECTION (dark) ── */
/* Technique 5: dark gradient bg with neon step indicators */
.process-drug {
  padding: var(--space-16) 0;
  background: linear-gradient(135deg, #06070e 0%, #13062a 55%, #080e20 100%);
  position: relative;
  overflow: hidden;
}
.process-drug::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 48% 68% at 4% 50%, rgba(229,53,231,0.12) 0%, transparent 58%),
    radial-gradient(ellipse 42% 58% at 96% 50%, rgba(249,183,62,0.09) 0%, transparent 58%);
  pointer-events: none;
}
.process-drug-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-16);
  align-items: start;
  position: relative;
  z-index: 1;
}
.process-drug-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  font-family: var(--font-heading);
  font-size: 0.68rem;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 3px;
  color: var(--color-accent);
  padding: 5px 14px;
  border: 1px solid rgba(249,183,62,0.28);
  border-radius: var(--radius-full);
  background: rgba(249,183,62,0.07);
  margin-bottom: var(--space-4);
}
.process-drug h2 {
  font-size: clamp(1.55rem, 2.8vw, 2.2rem);
  font-weight: 900;
  color: #fff;
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.02em;
  margin-bottom: var(--space-3);
}
.process-drug h2 em { color: var(--color-secondary); font-style: normal; }
.process-drug-lead {
  font-size: 0.92rem;
  color: rgba(255,255,255,0.52);
  line-height: 1.75;
  max-width: 420px;
  margin-bottom: var(--space-3);
}
.answer-block-dark-drug {
  background: rgba(255,255,255,0.04);
  border-left: 3px solid var(--color-secondary);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  padding: var(--space-4) var(--space-5);
  margin-bottom: var(--space-6);
}
.answer-block-dark-drug p {
  font-size: 0.88rem;
  color: rgba(255,255,255,0.72);
  line-height: 1.8;
  margin: 0;
  font-style: italic;
}
.process-drug-steps {
  display: flex;
  flex-direction: column;
  gap: var(--space-5);
}
.process-drug-step {
  display: flex;
  gap: var(--space-5);
  align-items: flex-start;
}
.drug-step-num {
  flex-shrink: 0;
  width: 40px; height: 40px;
  border-radius: 50%;
  background: linear-gradient(135deg, var(--color-accent) 0%, #c07a10 100%);
  display: flex; align-items: center; justify-content: center;
  font-family: var(--font-heading);
  font-size: 0.85rem;
  font-weight: 900;
  color: #0a0d1a;
  box-shadow: 0 0 18px rgba(249,183,62,0.32);
}
.drug-step-content h4 {
  font-size: 0.92rem;
  font-weight: 800;
  color: #fff;
  margin-bottom: var(--space-1);
}
.drug-step-content p {
  font-size: 0.83rem;
  color: rgba(255,255,255,0.56);
  line-height: 1.7;
  margin: 0;
}
/* Technique 6: glassmorphism sidebar info card */
.drug-process-sidebar {
  padding-top: var(--space-4);
}
.drug-pss-card {
  background: rgba(255,255,255,0.04);
  border: 1px solid rgba(255,255,255,0.09);
  border-radius: 18px;
  padding: var(--space-8);
  backdrop-filter: blur(10px);
  position: relative;
  overflow: hidden;
}
.drug-pss-card::before {
  content: '';
  position: absolute;
  top: -60px; right: -60px;
  width: 240px; height: 240px;
  border-radius: 50%;
  background: radial-gradient(circle, rgba(249,183,62,0.14) 0%, transparent 68%);
  pointer-events: none;
}
.drug-pss-card::after {
  content: '';
  position: absolute;
  bottom: -55px; left: -55px;
  width: 200px; height: 200px;
  border-radius: 50%;
  background: radial-gradient(circle, rgba(229,53,231,0.1) 0%, transparent 68%);
  pointer-events: none;
}
.drug-pss-title {
  font-family: var(--font-heading);
  font-size: 1rem;
  font-weight: 800;
  color: #fff;
  margin-bottom: var(--space-5);
  position: relative;
  z-index: 1;
}
.drug-pss-facts {
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
  margin-bottom: var(--space-6);
  position: relative;
  z-index: 1;
}
.drug-pss-fact {
  display: flex;
  align-items: flex-start;
  gap: var(--space-3);
  padding: var(--space-4);
  background: rgba(255,255,255,0.04);
  border-radius: var(--radius-md);
  border: 1px solid rgba(255,255,255,0.06);
}
.drug-pss-fact svg { width: 18px; height: 18px; color: var(--color-secondary); flex-shrink: 0; margin-top: 1px; }
.drug-pss-fact-text strong {
  display: block;
  font-size: 0.8rem;
  font-weight: 700;
  color: #fff;
  margin-bottom: 2px;
}
.drug-pss-fact-text span {
  font-size: 0.75rem;
  color: rgba(255,255,255,0.48);
  line-height: 1.5;
}
.drug-pss-cta {
  display: block;
  width: 100%;
  padding: 13px;
  background: linear-gradient(135deg, var(--color-secondary) 0%, #b515b7 100%);
  color: #fff;
  font-family: var(--font-heading);
  font-size: 0.82rem;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  border-radius: var(--radius-md);
  text-decoration: none;
  text-align: center;
  box-shadow: 0 4px 22px rgba(229,53,231,0.4);
  transition: all var(--transition-base);
  position: relative;
  z-index: 1;
}
.drug-pss-cta:hover {
  box-shadow: 0 8px 32px rgba(229,53,231,0.62);
  transform: translateY(-1px);
  color: #fff;
}

/* ── 5. BENEFITS SECTION ── */
.benefits-drug {
  padding: var(--space-16) 0;
  background: #fff;
}
.benefits-drug-header {
  text-align: center;
  margin-bottom: var(--space-12);
}
.benefits-drug h2 {
  font-size: clamp(1.65rem, 2.8vw, 2.35rem);
  font-weight: 900;
  color: #1a2340;
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.02em;
  margin-bottom: var(--space-3);
}
.benefits-drug h2 em { color: var(--color-secondary); font-style: normal; }
.benefits-drug-lead {
  font-size: 0.95rem;
  color: #4a5568;
  max-width: 500px;
  margin: 0 auto;
  line-height: 1.75;
}
/* Technique 7: 3-col benefit cards with neon-amber bottom-border on hover */
.benefits-drug-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
}
.benefit-drug-card {
  background: #f7f8fb;
  border: 1px solid rgba(229,53,231,0.1);
  border-radius: var(--radius-lg);
  padding: var(--space-7) var(--space-6);
  transition: transform var(--transition-base), box-shadow var(--transition-base), border-color var(--transition-base);
  position: relative;
  overflow: hidden;
}
.benefit-drug-card::after {
  content: '';
  position: absolute;
  bottom: 0; left: 0; right: 0;
  height: 2px;
  background: linear-gradient(90deg, var(--color-accent), var(--color-secondary));
  transform: scaleX(0);
  transform-origin: left;
  transition: transform var(--transition-base);
}
.benefit-drug-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 14px 35px rgba(249,183,62,0.13), 0 4px 10px rgba(0,0,0,0.06);
  border-color: rgba(249,183,62,0.3);
}
.benefit-drug-card:hover::after { transform: scaleX(1); }
.bdc-icon {
  width: 50px; height: 50px;
  border-radius: 50%;
  background: linear-gradient(135deg, rgba(249,183,62,0.14), rgba(229,53,231,0.07));
  border: 1px solid rgba(249,183,62,0.22);
  display: flex; align-items: center; justify-content: center;
  margin-bottom: var(--space-4);
  color: var(--color-accent);
}
.bdc-icon svg { width: 22px; height: 22px; }
.benefit-drug-card h4 {
  font-size: 0.92rem;
  font-weight: 800;
  color: #1a2340;
  margin-bottom: var(--space-2);
}
.benefit-drug-card p {
  font-size: 0.84rem;
  color: #4a5568;
  line-height: 1.7;
  margin: 0;
}

/* ── 6. FAQ SECTION ── */
.faq-drug {
  padding: var(--space-16) 0;
  background: #f4f6f9;
}
.faq-drug-inner { max-width: 820px; margin: 0 auto; }
.faq-drug h2 {
  font-size: clamp(1.55rem, 2.6vw, 2.15rem);
  font-weight: 900;
  color: #1a2340;
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.02em;
  margin-bottom: var(--space-3);
}
.faq-drug h2 em { color: var(--color-secondary); font-style: normal; }
.faq-drug-sub {
  font-size: 0.92rem;
  color: #4a5568;
  margin-bottom: var(--space-10);
  line-height: 1.75;
}
.faq-drug-list {
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
}
/* Technique 8: FAQ accordion with amber left-border on open state */
.faq-drug-item {
  background: #fff;
  border: 1px solid rgba(249,183,62,0.15);
  border-radius: var(--radius-lg);
  overflow: hidden;
  transition: border-color var(--transition-base), box-shadow var(--transition-base);
}
.faq-drug-item.open {
  border-color: rgba(249,183,62,0.45);
  box-shadow: 0 4px 18px rgba(249,183,62,0.1);
}
.faq-drug-q {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: var(--space-4);
  padding: var(--space-5) var(--space-6);
  cursor: pointer;
  background: transparent;
  border: none;
  width: 100%;
  text-align: left;
  font-family: var(--font-heading);
  font-size: 0.92rem;
  font-weight: 700;
  color: #1a2340;
  transition: color var(--transition-fast);
  user-select: none;
}
.faq-drug-q:hover { color: var(--color-accent); }
.faq-drug-item.open .faq-drug-q { color: var(--color-accent); }
.faq-drug-icon {
  flex-shrink: 0;
  width: 26px; height: 26px;
  border-radius: 50%;
  background: rgba(249,183,62,0.1);
  border: 1px solid rgba(249,183,62,0.22);
  display: flex; align-items: center; justify-content: center;
  transition: background var(--transition-base), transform var(--transition-base);
  font-size: 0.95rem;
  color: var(--color-accent);
  font-weight: 900;
}
.faq-drug-item.open .faq-drug-icon {
  background: var(--color-accent);
  color: #0a0d1a;
  transform: rotate(45deg);
}
.faq-drug-a {
  display: none;
  padding: 0 var(--space-6) var(--space-5);
  font-size: 0.88rem;
  color: #4a5568;
  line-height: 1.8;
  border-top: 1px solid rgba(249,183,62,0.09);
  padding-top: var(--space-4);
}
.faq-drug-item.open .faq-drug-a { display: block; }

/* ── 7. RELATED SERVICES ── */
.related-drug {
  padding: var(--space-14) 0;
  background: #fff;
}
.related-drug-h3 {
  font-size: clamp(1.45rem, 2.4vw, 1.95rem);
  font-weight: 900;
  color: #1a2340;
  text-align: center;
  margin-bottom: var(--space-2);
  text-wrap: balance;
}
.related-drug-sub {
  text-align: center;
  font-size: 0.9rem;
  color: #4a5568;
  margin-bottom: var(--space-10);
}
.related-drug-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
}
.rd-card {
  border-radius: var(--radius-lg);
  overflow: hidden;
  display: flex;
  flex-direction: column;
  border: 1px solid rgba(229,53,231,0.1);
  background: #fff;
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.rd-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 14px 35px rgba(229,53,231,0.14), 0 4px 10px rgba(0,0,0,0.06);
}
.rd-banner {
  height: 80px;
  display: flex; align-items: center; justify-content: center;
}
.rd-card.t1 .rd-banner { background: linear-gradient(145deg, #06070e, #1c082a); }
.rd-card.t2 .rd-banner { background: linear-gradient(145deg, #0c1420, #1a2b3c); }
.rd-card.t3 .rd-banner { background: linear-gradient(145deg, #11060e, #260820); }
.rd-icon-ring {
  width: 46px; height: 46px;
  border-radius: 50%;
  border: 1px solid rgba(255,255,255,0.15);
  background: rgba(255,255,255,0.07);
  display: flex; align-items: center; justify-content: center;
}
.rd-icon-ring svg { width: 22px; height: 22px; color: var(--color-accent); }
.rd-body {
  padding: var(--space-5);
  flex: 1;
  display: flex;
  flex-direction: column;
}
.rd-body h3 {
  font-size: 0.9rem;
  font-weight: 800;
  color: #1a2340;
  margin-bottom: var(--space-2);
}
.rd-body p {
  font-size: 0.8rem;
  color: #4a5568;
  line-height: 1.65;
  flex: 1;
  margin-bottom: var(--space-4);
}
.rd-link {
  display: inline-flex;
  align-items: center;
  gap: 4px;
  font-size: 0.78rem;
  font-weight: 800;
  color: var(--color-secondary);
  text-decoration: none;
  transition: gap var(--transition-fast);
}
.rd-link:hover { gap: 8px; }
.rd-link svg { width: 14px; height: 14px; }

/* ── 8. EMERGENCY CTA ── */
.cta-drug {
  padding: var(--space-14) 0;
  background: linear-gradient(135deg, #06070e 0%, #1a0628 55%, #080e20 100%);
  position: relative;
  overflow: hidden;
  text-align: center;
}
.cta-drug::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 55% 78% at 18% 50%, rgba(229,53,231,0.14) 0%, transparent 58%),
    radial-gradient(ellipse 48% 68% at 82% 50%, rgba(249,183,62,0.1) 0%, transparent 58%);
  pointer-events: none;
}
.cta-drug-inner {
  position: relative;
  z-index: 1;
  max-width: 560px;
  margin: 0 auto;
}
.cta-drug h2 {
  font-size: clamp(1.5rem, 2.8vw, 2.2rem);
  font-weight: 900;
  color: #fff;
  text-wrap: balance;
  margin-bottom: var(--space-3);
}
.cta-drug h2 em { color: var(--color-accent); font-style: normal; }
.cta-drug p {
  font-size: 0.95rem;
  color: rgba(255,255,255,0.56);
  max-width: 440px;
  margin: 0 auto var(--space-7);
  line-height: 1.75;
}
.cta-drug-btns {
  display: flex;
  gap: var(--space-3);
  justify-content: center;
  flex-wrap: wrap;
}

/* ── RESPONSIVE ── */
@media (max-width: 1024px) {
  .hero-drug-inner { grid-template-columns: 1fr; }
  .hero-drug-card { display: none; }
  .process-drug-grid { grid-template-columns: 1fr; gap: var(--space-10); }
}
@media (max-width: 768px) {
  .benefits-drug-grid { grid-template-columns: repeat(2, 1fr); }
  .related-drug-grid { grid-template-columns: 1fr; }
}
@media (max-width: 480px) {
  .benefits-drug-grid { grid-template-columns: 1fr; }
}
</style>

<!-- ═══ HERO ═══ -->
<section class="hero-drug" aria-label="Drug charge bail bonds">
  <div class="drug-orb drug-orb-1"></div>
  <div class="drug-orb drug-orb-2"></div>

  <div class="container">
    <div class="hero-drug-inner">
      <div class="hero-drug-left">
        <span class="drug-eyebrow">
          <span class="pulse-dot"></span>
          Confidential · 24/7 · South Florida
        </span>
        <h1>
          <span class="hl-gold">Drug Charge Bail Bonds</span> in South Florida —<br>
          <span class="hl-mag">Licensed FL Bondsman</span> Available Now
        </h1>
        <p class="hero-answer">Mad Extra Bail Bonds is a licensed Florida bail bondsman based in Delray Beach, handling drug possession, trafficking, and distribution bail bonds across Palm Beach, Broward, and Miami-Dade County. We post bond at any South Florida jail within hours of your call, 24 hours a day, 7 days a week.</p>
        <div class="hero-drug-btns">
          <?php if (!empty($phone)): ?>
          <a href="tel:<?php echo preg_replace('/\D/','',$phone); ?>" class="btn-drug-primary">
            <?php echo lucide_icon('phone'); ?> Call Now — 24/7
          </a>
          <?php else: ?>
          <a href="/contact/" class="btn-drug-primary">
            <?php echo lucide_icon('zap'); ?> Get Help Now
          </a>
          <?php endif; ?>
          <a href="/contact/" class="btn-drug-secondary">Free Consultation</a>
        </div>
        <div class="drug-trust-row">
          <span class="drug-htb"><?php echo lucide_icon('shield-check'); ?> Licensed FL Bondsman</span>
          <span class="drug-htb"><?php echo lucide_icon('lock'); ?> Fully Confidential</span>
          <span class="drug-htb"><?php echo lucide_icon('clock'); ?> 24/7 Response</span>
          <span class="drug-htb"><?php echo lucide_icon('landmark'); ?> All Charge Levels</span>
        </div>
      </div>

      <div class="hero-drug-card">
        <p class="hdc-title">Need Help Right Now?</p>
        <p class="hdc-note">Discreet 24/7 response</p>
        <ul class="hdc-list">
          <li><span class="hdc-check">✓</span> Possession, trafficking & distribution</li>
          <li><span class="hdc-check">✓</span> All Palm Beach, Broward & Miami-Dade jails</li>
          <li><span class="hdc-check">✓</span> Fully confidential and discreet</li>
          <li><span class="hdc-check">✓</span> 10% FL legal premium rate</li>
          <li><span class="hdc-check">✓</span> Payment plans for qualifying situations</li>
        </ul>
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo preg_replace('/\D/','',$phone); ?>" class="hdc-cta">
          <?php echo lucide_icon('phone'); ?> Call Now
        </a>
        <?php else: ?>
        <a href="/contact/" class="hdc-cta">Get Confidential Help</a>
        <?php endif; ?>
        <p class="hdc-disclaimer">Available every hour, every day — including holidays</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SVG DIVIDER ═══ -->
<div class="div-drug-to-light" aria-hidden="true">
  <svg viewBox="0 0 1440 55" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,55 L0,12 Q480,55 720,22 Q960,-2 1440,38 L1440,55 Z" fill="#f4f6f9"/>
  </svg>
</div>

<!-- ═══ INTRO / ANSWER SECTION ═══ -->
<section class="intro-drug" aria-label="Drug charge bail bond overview">
  <div class="container">
    <div class="intro-drug-inner">
      <span class="drug-section-eyebrow">About This Service</span>
      <h2>How much does a drug charge bail bond cost in South Florida?</h2>
      <div class="answer-block answer-block-drug">
        <p>Drug charge bail amounts in South Florida range widely: simple marijuana possession may carry a $1,000–$5,000 bond; trafficking charges can reach $25,000 to $500,000 or higher. Florida law sets the bondsman's premium at exactly 10% of the court-ordered bail amount — identical statewide from Delray Beach to Miami. Payment plans may be available for qualifying situations.</p>
      </div>
      <p class="prose">Mad Extra Bail Bonds has handled drug charge bail bonds across South Florida for over 11 years — from simple possession cases at the Palm Beach County Jail in West Palm Beach to serious trafficking charges at the Federal Detention Center in Miami. Every case is handled personally with full confidentiality.</p>
      <p class="prose">Drug charge arrests often happen late at night or early in the morning. We answer every call because bail bond windows don't follow business hours. When you reach us, you're talking to someone who can act — not a message service.</p>
    </div>
  </div>
</section>

<!-- ═══ SVG DIVIDER ═══ -->
<div class="div-drug-to-dark" aria-hidden="true">
  <svg viewBox="0 0 1440 55" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,0 Q380,55 720,28 Q1060,2 1440,44 L1440,55 L0,55 Z" fill="#06070e"/>
  </svg>
</div>

<!-- ═══ PROCESS SECTION ═══ -->
<section class="process-drug" aria-label="Drug charge bail bond process">
  <div class="container">
    <div class="process-drug-grid">
      <div>
        <span class="process-drug-eyebrow"><?php echo lucide_icon('zap'); ?> The Process</span>
        <h2>How quickly can someone get out of jail on a drug charge in <em>Palm Beach County?</em></h2>
        <div class="answer-block-dark-drug">
          <p>Simple possession arrests in Palm Beach County typically release within 2 to 8 hours of posting bond. Trafficking or distribution charges may require a bond hearing at first appearance before bail is set — adding 12 to 24 hours. We begin your paperwork the moment you call so we are ready to post the instant the bond amount is confirmed.</p>
        </div>
        <div class="process-drug-steps">
          <div class="process-drug-step">
            <div class="drug-step-num">1</div>
            <div class="drug-step-content">
              <h4>Call Us — We Answer Every Hour</h4>
              <p>Drug arrests happen at all hours. Tell us who was arrested, the charge level, and which facility. We start gathering information immediately.</p>
            </div>
          </div>
          <div class="process-drug-step">
            <div class="drug-step-num">2</div>
            <div class="drug-step-content">
              <h4>We Verify the Bond & Charge Level</h4>
              <p>We confirm the bail amount, any holds, and whether a bond hearing is required. We explain all conditions before you pay anything.</p>
            </div>
          </div>
          <div class="process-drug-step">
            <div class="drug-step-num">3</div>
            <div class="drug-step-content">
              <h4>Sign Bond Documents & Pay 10% Premium</h4>
              <p>Florida's bail premium is set by law at 10% of the bond amount. You sign the indemnity agreement — we post the bond directly with the facility.</p>
            </div>
          </div>
          <div class="process-drug-step">
            <div class="drug-step-num">4</div>
            <div class="drug-step-content">
              <h4>Release Processing Begins</h4>
              <p>Once the bond is posted, the facility processes the release. We stay in contact throughout the process until your loved one is home.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="drug-process-sidebar">
        <div class="drug-pss-card">
          <p class="drug-pss-title">Why Mad Extra for Drug Bonds?</p>
          <div class="drug-pss-facts">
            <div class="drug-pss-fact">
              <?php echo lucide_icon('lock'); ?>
              <div class="drug-pss-fact-text">
                <strong>Fully Confidential</strong>
                <span>Your case details stay private — we don't share information with third parties</span>
              </div>
            </div>
            <div class="drug-pss-fact">
              <?php echo lucide_icon('layers'); ?>
              <div class="drug-pss-fact-text">
                <strong>All Charge Levels</strong>
                <span>Possession, trafficking, distribution — we handle every drug charge tier</span>
              </div>
            </div>
            <div class="drug-pss-fact">
              <?php echo lucide_icon('clock'); ?>
              <div class="drug-pss-fact-text">
                <strong>24/7 Response</strong>
                <span>Drug arrests don't keep business hours — neither do we</span>
              </div>
            </div>
            <div class="drug-pss-fact">
              <?php echo lucide_icon('shield-check'); ?>
              <div class="drug-pss-fact-text">
                <strong>11+ Years Experience</strong>
                <span>Over a decade of drug charge bail bonds across South Florida</span>
              </div>
            </div>
          </div>
          <?php if (!empty($phone)): ?>
          <a href="tel:<?php echo preg_replace('/\D/','',$phone); ?>" class="drug-pss-cta">
            <?php echo lucide_icon('phone'); ?> Call Now — 24/7
          </a>
          <?php else: ?>
          <a href="/contact/" class="drug-pss-cta">Get Confidential Help Now</a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SVG DIVIDER ═══ -->
<div class="div-drug-to-white" aria-hidden="true">
  <svg viewBox="0 0 1440 55" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,0 Q720,55 1440,12 L1440,55 L0,55 Z" fill="#ffffff"/>
  </svg>
</div>

<!-- ═══ BENEFITS SECTION ═══ -->
<section class="benefits-drug" aria-label="Drug charge bail bond benefits">
  <div class="container">
    <div class="benefits-drug-header">
      <span class="drug-section-eyebrow">What Sets Us Apart</span>
      <h2>Why do South Florida families choose <em>Mad Extra</em> for drug charge bonds?</h2>
      <p class="benefits-drug-lead">Experienced, discreet, and available every hour — here's why families trust Mad Extra Bail Bonds with drug charge cases.</p>
    </div>
    <div class="benefits-drug-grid">
      <div class="benefit-drug-card">
        <div class="bdc-icon"><?php echo lucide_icon('clock'); ?></div>
        <h4>24/7 Emergency Response</h4>
        <p>We answer every call every hour of the day. Drug arrests happen at 3 AM — we're there.</p>
      </div>
      <div class="benefit-drug-card">
        <div class="bdc-icon"><?php echo lucide_icon('lock'); ?></div>
        <h4>Fully Confidential Process</h4>
        <p>Every detail of your case stays private. We never discuss client cases with unauthorized parties.</p>
      </div>
      <div class="benefit-drug-card">
        <div class="bdc-icon"><?php echo lucide_icon('layers'); ?></div>
        <h4>All Charge Levels Handled</h4>
        <p>From personal-use possession to trafficking — we have the experience and relationships to move fast at every level.</p>
      </div>
      <div class="benefit-drug-card">
        <div class="bdc-icon"><?php echo lucide_icon('landmark'); ?></div>
        <h4>Every South FL Jail Covered</h4>
        <p>Palm Beach County Jail, Broward Main, TGK in Miami-Dade, and every city lockup in the region.</p>
      </div>
      <div class="benefit-drug-card">
        <div class="bdc-icon"><?php echo lucide_icon('credit-card'); ?></div>
        <h4>Payment Plans Available</h4>
        <p>High bond amounts can be difficult to cover immediately. We discuss payment options for qualifying situations.</p>
      </div>
      <div class="benefit-drug-card">
        <div class="bdc-icon"><?php echo lucide_icon('shield-check'); ?></div>
        <h4>Licensed FL Bondsman</h4>
        <p>Licensed by the Florida Department of Financial Services. Fully bonded and insured statewide.</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SVG DIVIDER ═══ -->
<div class="div-drug-faq" aria-hidden="true">
  <svg viewBox="0 0 1440 40" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,18 Q360,40 720,8 Q1080,-12 1440,20 L1440,40 L0,40 Z" fill="#f4f6f9"/>
  </svg>
</div>

<!-- ═══ FAQ SECTION ═══ -->
<section class="faq-drug" aria-label="Drug charge bail bond FAQ">
  <div class="container">
    <div class="faq-drug-inner">
      <span class="drug-section-eyebrow">Common Questions</span>
      <h2>Frequently asked questions about <em>drug charge bail bonds</em> in South Florida</h2>
      <p class="faq-drug-sub">Direct answers to what families and defendants ask most about drug-related bail bonds.</p>
      <div class="faq-drug-list" role="list">
        <?php foreach ($_faqs as $faq): ?>
        <div class="faq-drug-item" role="listitem">
          <button class="faq-drug-q" aria-expanded="false" onclick="toggleFaqDrug(this)">
            <?php echo htmlspecialchars($faq['q']); ?>
            <span class="faq-drug-icon" aria-hidden="true">+</span>
          </button>
          <div class="faq-drug-a" role="region">
            <p><?php echo htmlspecialchars($faq['a']); ?></p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- ═══ RELATED SERVICES ═══ -->
<section class="related-drug" aria-label="Related bail bond services">
  <div class="container">
    <h3 class="related-drug-h3">Other Services You May Need</h3>
    <p class="related-drug-sub">Mad Extra Bail Bonds handles every type of bail bond across South Florida — 24/7.</p>
    <div class="related-drug-grid">
      <article class="rd-card t1">
        <div class="rd-banner"><div class="rd-icon-ring"><?php echo lucide_icon('gavel'); ?></div></div>
        <div class="rd-body">
          <h3>Felony Bail Bonds</h3>
          <p>Drug trafficking often carries felony charges — we have the experience for high-stakes bonds.</p>
          <a href="/services/felony-bail-bonds/" class="rd-link">Learn more <?php echo lucide_icon('arrow-right'); ?></a>
        </div>
      </article>
      <article class="rd-card t2">
        <div class="rd-banner"><div class="rd-icon-ring"><?php echo lucide_icon('shield'); ?></div></div>
        <div class="rd-body">
          <h3>Bail Bond Services</h3>
          <p>General criminal bail bonds for any charge type across all South Florida facilities.</p>
          <a href="/services/bail-bonds/" class="rd-link">Learn more <?php echo lucide_icon('arrow-right'); ?></a>
        </div>
      </article>
      <article class="rd-card t3">
        <div class="rd-banner"><div class="rd-icon-ring"><?php echo lucide_icon('file-warning'); ?></div></div>
        <div class="rd-body">
          <h3>Warrant & Traffic Bonds</h3>
          <p>Outstanding warrants related to drug charges resolved before they compound into bigger problems.</p>
          <a href="/services/warrant-bail-bonds/" class="rd-link">Learn more <?php echo lucide_icon('arrow-right'); ?></a>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- ═══ EMERGENCY CTA ═══ -->
<section class="cta-drug" aria-label="Emergency drug charge bail bond contact">
  <div class="cta-drug-inner">
    <h2>Need a bondsman for a <em>drug charge</em> right now?</h2>
    <p>Every hour in jail affects employment, family, and legal preparation. We respond immediately because we understand what is at stake. Call or contact us — we're available every hour of every day, fully confidential.</p>
    <div class="cta-drug-btns">
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo preg_replace('/\D/','',$phone); ?>" class="btn-drug-primary">
        <?php echo lucide_icon('phone'); ?> Call Now — 24/7
      </a>
      <?php endif; ?>
      <a href="/contact/" class="btn-drug-secondary">Send a Message</a>
    </div>
  </div>
</section>

<script>
function toggleFaqDrug(btn) {
  const item = btn.closest('.faq-drug-item');
  const isOpen = item.classList.contains('open');
  document.querySelectorAll('.faq-drug-item.open').forEach(el => el.classList.remove('open'));
  document.querySelectorAll('.faq-drug-q').forEach(el => el.setAttribute('aria-expanded','false'));
  if (!isOpen) {
    item.classList.add('open');
    btn.setAttribute('aria-expanded','true');
  }
}
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
