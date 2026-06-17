<?php
/**
 * services/felony-bail-bonds/index.php — Felony Bail Bonds Service Page
 * Mad Extra Bail Bonds | Delray Beach, FL
 * Phase 4: Service Pages
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Felony Bail Bonds South Florida | Mad Extra Bail Bonds | 24/7 High-Bail Experience';
$pageDescription = 'Felony arrest in South Florida? Mad Extra Bail Bonds handles high-bail felony bonds at any Palm Beach, Broward or Miami-Dade jail 24/7. Licensed FL bondsman — act fast on felony charges.';
$canonicalUrl    = $siteUrl . '/services/felony-bail-bonds/';
$currentPage     = 'services';

$_breadcrumb = generateBreadcrumbSchema([
    ['name' => 'Home',           'url' => $siteUrl . '/'],
    ['name' => 'Services',       'url' => $siteUrl . '/services/'],
    ['name' => 'Felony Bail Bonds', 'url' => $siteUrl . '/services/felony-bail-bonds/'],
]);

$_serviceSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'Service',
    '@id'         => $siteUrl . '/services/felony-bail-bonds/#service-felony-bail-bonds',
    'name'        => 'Felony Bail Bonds',
    'description' => 'Felony bail bonds for all charges across Palm Beach, Broward, and Miami-Dade County. Licensed FL bondsman available 24/7 with high-bail felony experience.',
    'url'         => $siteUrl . '/services/felony-bail-bonds/',
    'provider'    => ['@id' => $siteUrl . '/#localbusiness'],
    'areaServed'  => [
        ['@type' => 'State', 'name' => 'Florida'],
        ['@type' => 'City',  'name' => 'Delray Beach, FL'],
    ],
    'serviceType' => 'Felony Bail Bonds',
];

$_faqs = [
    [
        'q' => 'Why is felony bail so much higher than misdemeanor bail in South Florida?',
        'a' => 'Florida judges set felony bail based on the severity of the charge, the defendant\'s criminal history, ties to the community, and flight risk. Under Florida Rule of Criminal Procedure 3.131, judges weigh these factors at first appearance — which must occur within 24 hours of arrest. Violent felonies, armed offenses, and prior records all push bail amounts significantly higher than misdemeanor cases.',
    ],
    [
        'q' => 'What is the first appearance hearing for a felony arrest in Florida?',
        'a' => 'Within 24 hours of any arrest in Florida, the defendant appears before a judge who sets the initial bail amount based on the charge, criminal history, and risk factors. For felony arrests, a public defender may appear at this hearing. Mad Extra Bail Bonds advises clients to contact us immediately after arrest so we are ready to post bond the moment it is set at first appearance.',
    ],
    [
        'q' => 'Can I use real estate or property as collateral for a felony bail bond in South Florida?',
        'a' => 'Yes. For high felony bail amounts — typically $50,000 or above — we may require or accept real estate equity as collateral. The property must have sufficient equity above any existing mortgages to cover the bond amount. We walk co-signers through the collateral process fully before anything is signed. Call us to discuss the specific bond amount and what collateral options are available.',
    ],
    [
        'q' => 'How long does it take to get released on a felony bail bond in the Palm Beach County Jail?',
        'a' => 'After bond is posted at the Palm Beach County Jail in West Palm Beach, felony releases typically take 6 to 24 hours depending on booking load, shift changes, and case complexity. The process is slower than misdemeanor releases because felony paperwork requires more review. We post the bond as early as possible and keep you updated through the entire process.',
    ],
    [
        'q' => 'What happens to a felony bail bond if the defendant is re-arrested?',
        'a' => 'If a defendant on a felony bail bond is re-arrested, the bondsman may be notified by the court and the bond can be subject to revocation. As the co-signer, you become liable for the full bond amount if the defendant fails to appear or violates conditions of release. Mad Extra Bail Bonds contacts co-signers immediately if bond conditions are at risk — we work to resolve the situation before a bond forfeiture occurs.',
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
   FELONY BAIL BONDS — Mad Extra Bail Bonds
   Premium Tier | Dark/Neon Design System
   Techniques: layered hero radials, neon orbs, glassmorphism,
   dark process steps, neon-hover benefit cards, FAQ accordion,
   SVG wave dividers, gradient stat numbers, alert-pulse badge,
   neon glow CTA ring with animation
   ============================================================ */

/* ── 1. HERO ── */
.hero-fel {
  position: relative;
  min-height: 57vh;
  display: flex;
  align-items: center;
  background: #080510;
  overflow: hidden;
  padding-top: var(--nav-height, 72px);
  padding-bottom: var(--space-12);
}
/* Technique 1: ::before deep radial overlays — shifted accent emphasis */
.hero-fel::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 55% 80% at 10% 35%, rgba(229,53,231,0.23) 0%, transparent 60%),
    radial-gradient(ellipse 48% 50% at 88% 25%, rgba(249,183,62,0.12) 0%, transparent 55%),
    radial-gradient(ellipse 75% 42% at 50% 105%, rgba(8,5,16,0.99) 0%, transparent 80%);
  pointer-events: none;
}
/* Technique 2: fractal noise texture */
.hero-fel::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.88' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
  opacity: 0.5;
  pointer-events: none;
}
/* Technique 3: floating neon orbs — slightly larger for gravity */
.fel-orb {
  position: absolute;
  border-radius: 50%;
  pointer-events: none;
  will-change: transform;
}
.fel-orb-1 {
  width: 520px; height: 520px;
  top: -180px; left: -120px;
  background: radial-gradient(circle, rgba(229,53,231,0.17) 0%, transparent 68%);
  animation: fel-orb-float 15s ease-in-out infinite;
}
.fel-orb-2 {
  width: 360px; height: 360px;
  bottom: -55px; right: 7%;
  background: radial-gradient(circle, rgba(249,183,62,0.10) 0%, transparent 68%);
  animation: fel-orb-float 19s ease-in-out infinite reverse;
  animation-delay: -8s;
}
.fel-orb-3 {
  width: 200px; height: 200px;
  top: 40%; right: 38%;
  background: radial-gradient(circle, rgba(229,53,231,0.07) 0%, transparent 68%);
  animation: fel-orb-float 11s ease-in-out infinite;
  animation-delay: -3s;
}
@keyframes fel-orb-float {
  0%,100% { transform: translate(0,0) scale(1); }
  40%     { transform: translate(12px,-16px) scale(1.04); }
  70%     { transform: translate(-9px,10px) scale(0.97); }
}
.hero-fel-inner {
  position: relative;
  z-index: 2;
  display: grid;
  grid-template-columns: 1fr 400px;
  gap: var(--space-12);
  align-items: center;
  padding: var(--space-12) 0;
  width: 100%;
}
.hero-fel-left { max-width: 620px; }

.fel-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  font-family: var(--font-heading);
  font-size: 0.68rem;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 3px;
  color: var(--color-accent);
  padding: 6px 16px;
  border: 1px solid rgba(249,183,62,0.42);
  border-radius: var(--radius-full);
  background: rgba(249,183,62,0.07);
  margin-bottom: var(--space-5);
}
.fel-eyebrow .alert-dot {
  width: 7px; height: 7px;
  border-radius: 50%;
  background: var(--color-accent);
  box-shadow: 0 0 8px var(--color-accent);
  animation: alert-pulse 1.8s ease-in-out infinite;
  flex-shrink: 0;
}
@keyframes alert-pulse {
  0%,100% { opacity:1; transform:scale(1); box-shadow: 0 0 8px var(--color-accent); }
  50%     { opacity:.6; transform:scale(.7); box-shadow: 0 0 14px var(--color-accent); }
}

.hero-fel h1 {
  font-size: clamp(1.85rem, 3.8vw, 3.1rem);
  font-weight: 900;
  color: #fff;
  line-height: 1.1;
  margin-bottom: var(--space-5);
  letter-spacing: -0.025em;
  text-wrap: balance;
}
.hero-fel h1 .hl-gold { color: var(--color-accent); text-shadow: 0 0 28px rgba(249,183,62,0.5); }
.hero-fel h1 .hl-mag  { color: var(--color-secondary); text-shadow: 0 0 28px rgba(229,53,231,0.5); }

.hero-fel .hero-answer {
  font-size: 1rem;
  color: rgba(255,255,255,0.66);
  line-height: 1.8;
  margin-bottom: var(--space-7);
  max-width: 560px;
}
.hero-fel-btns {
  display: flex;
  gap: var(--space-3);
  flex-wrap: wrap;
  margin-bottom: var(--space-7);
}
.btn-fel-primary {
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
.btn-fel-primary:hover {
  background: #f043f2;
  box-shadow: 0 0 44px rgba(229,53,231,0.68), 0 8px 22px rgba(0,0,0,0.35);
  transform: translateY(-2px);
  color: #fff;
}
.btn-fel-primary svg { width: 15px; height: 15px; }
.btn-fel-secondary {
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
.btn-fel-secondary:hover {
  background: var(--color-accent);
  color: #0a0d1a;
  border-color: var(--color-accent);
  box-shadow: 0 0 26px rgba(249,183,62,0.4);
  transform: translateY(-2px);
}
.fel-trust-row {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-2);
}
.fel-htb {
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
.fel-htb svg { width: 11px; height: 11px; color: var(--color-accent); flex-shrink: 0; }

/* Technique 4: glassmorphism hero sidebar — purple/gold tinted border */
.hero-fel-card {
  position: relative;
  background: rgba(255,255,255,0.04);
  border: 1px solid rgba(255,255,255,0.11);
  border-radius: 18px;
  padding: var(--space-7) var(--space-6);
  backdrop-filter: blur(14px);
  -webkit-backdrop-filter: blur(14px);
}
.hero-fel-card::before {
  content: '';
  position: absolute;
  inset: -1px;
  border-radius: 19px;
  background: linear-gradient(135deg, rgba(249,183,62,0.4) 0%, rgba(229,53,231,0.2) 50%, transparent 100%);
  z-index: -1;
  opacity: 0.5;
}
.hfc-title {
  font-family: var(--font-heading);
  font-size: 1.05rem;
  font-weight: 800;
  color: #fff;
  margin-bottom: var(--space-2);
}
.hfc-note {
  font-size: 0.68rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  color: var(--color-accent);
  margin-bottom: var(--space-5);
}
.hfc-list {
  list-style: none;
  padding: 0;
  margin: 0 0 var(--space-6);
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
}
.hfc-list li {
  display: flex;
  align-items: flex-start;
  gap: var(--space-2);
  font-size: 0.85rem;
  color: rgba(255,255,255,0.8);
  line-height: 1.5;
}
.hfc-check {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  width: 18px; height: 18px;
  border-radius: 50%;
  background: linear-gradient(135deg, var(--color-accent), var(--color-secondary));
  font-size: 0.6rem;
  color: #fff;
  font-weight: 900;
  margin-top: 2px;
}
.hfc-cta {
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
  box-shadow: 0 4px 22px rgba(229,53,231,0.42);
  transition: all var(--transition-base);
}
.hfc-cta:hover {
  box-shadow: 0 8px 34px rgba(229,53,231,0.62);
  transform: translateY(-1px);
  color: #fff;
}
.hfc-disclaimer {
  text-align: center;
  font-size: 0.6rem;
  color: rgba(255,255,255,0.3);
  margin-top: var(--space-3);
  line-height: 1.5;
}

/* ── 2. SVG DIVIDERS ── */
.div-fel-to-light { line-height: 0; background: #080510; }
.div-fel-to-light svg { display: block; width: 100%; }
.div-fel-to-dark  { line-height: 0; background: #f4f6f9; }
.div-fel-to-dark svg  { display: block; width: 100%; }
.div-fel-to-white { line-height: 0; background: #080510; }
.div-fel-to-white svg { display: block; width: 100%; }
.div-fel-faq      { line-height: 0; background: #fff; }
.div-fel-faq svg  { display: block; width: 100%; }

/* ── 3. INTRO / ANSWER SECTION ── */
.intro-fel {
  padding: var(--space-16) 0;
  background: #f4f6f9;
}
.intro-fel-inner { max-width: 860px; margin: 0 auto; }
.fel-section-eyebrow {
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
  background: rgba(249,183,62,0.06);
  margin-bottom: var(--space-4);
}
.intro-fel h2 {
  font-size: clamp(1.65rem, 2.8vw, 2.35rem);
  font-weight: 900;
  color: #1a2340;
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.02em;
  margin-bottom: var(--space-4);
}
.intro-fel h2 em { color: var(--color-secondary); font-style: normal; }
.answer-block-fel {
  background: linear-gradient(135deg, rgba(249,183,62,0.08), rgba(229,53,231,0.04));
  border-left: 3px solid var(--color-accent);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  padding: var(--space-5) var(--space-6);
  margin-bottom: var(--space-6);
}
.answer-block-fel p {
  font-size: 0.95rem;
  color: #1a2340;
  line-height: 1.8;
  margin: 0;
  font-style: italic;
}
.intro-fel p.prose {
  font-size: 0.95rem;
  color: #4a5568;
  line-height: 1.82;
  margin-bottom: var(--space-4);
  max-width: 65ch;
}

/* ── 4. PROCESS SECTION (dark) ── */
/* Technique 5: dark bg with purple gradient process side */
.process-fel {
  padding: var(--space-16) 0;
  background: linear-gradient(135deg, #080510 0%, #180a30 55%, #0a0e20 100%);
  position: relative;
  overflow: hidden;
}
.process-fel::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 50% 70% at 5% 50%, rgba(229,53,231,0.14) 0%, transparent 60%),
    radial-gradient(ellipse 44% 60% at 95% 50%, rgba(249,183,62,0.08) 0%, transparent 60%);
  pointer-events: none;
}
.process-fel-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-16);
  align-items: start;
  position: relative;
  z-index: 1;
}
.process-fel-eyebrow {
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
  background: rgba(229,53,231,0.07);
  margin-bottom: var(--space-4);
}
.process-fel h2 {
  font-size: clamp(1.55rem, 2.8vw, 2.2rem);
  font-weight: 900;
  color: #fff;
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.02em;
  margin-bottom: var(--space-3);
}
.process-fel h2 em { color: var(--color-accent); font-style: normal; }
.process-fel-lead {
  font-size: 0.92rem;
  color: rgba(255,255,255,0.52);
  line-height: 1.75;
  max-width: 420px;
  margin-bottom: var(--space-3);
}
.answer-block-dark-fel {
  background: rgba(255,255,255,0.04);
  border-left: 3px solid var(--color-accent);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  padding: var(--space-4) var(--space-5);
  margin-bottom: var(--space-6);
}
.answer-block-dark-fel p {
  font-size: 0.88rem;
  color: rgba(255,255,255,0.72);
  line-height: 1.8;
  margin: 0;
  font-style: italic;
}
.process-fel-steps {
  display: flex;
  flex-direction: column;
  gap: var(--space-5);
}
.process-fel-step {
  display: flex;
  gap: var(--space-5);
  align-items: flex-start;
}
.fel-step-num {
  flex-shrink: 0;
  width: 40px; height: 40px;
  border-radius: 50%;
  background: linear-gradient(135deg, var(--color-secondary) 0%, #8f08a0 100%);
  display: flex; align-items: center; justify-content: center;
  font-family: var(--font-heading);
  font-size: 0.85rem;
  font-weight: 900;
  color: #fff;
  box-shadow: 0 0 18px rgba(229,53,231,0.32);
}
.fel-step-content h4 {
  font-size: 0.92rem;
  font-weight: 800;
  color: #fff;
  margin-bottom: var(--space-1);
}
.fel-step-content p {
  font-size: 0.83rem;
  color: rgba(255,255,255,0.56);
  line-height: 1.7;
  margin: 0;
}
/* Technique 6: glassmorphism sidebar with gradient stat numbers */
.fel-process-sidebar { padding-top: var(--space-4); }
.fel-pss-card {
  background: rgba(255,255,255,0.04);
  border: 1px solid rgba(255,255,255,0.09);
  border-radius: 18px;
  padding: var(--space-8);
  backdrop-filter: blur(10px);
  position: relative;
  overflow: hidden;
}
.fel-pss-card::before {
  content: '';
  position: absolute;
  top: -55px; right: -55px;
  width: 220px; height: 220px;
  border-radius: 50%;
  background: radial-gradient(circle, rgba(229,53,231,0.14) 0%, transparent 68%);
  pointer-events: none;
}
.fel-pss-card::after {
  content: '';
  position: absolute;
  bottom: -50px; left: -50px;
  width: 190px; height: 190px;
  border-radius: 50%;
  background: radial-gradient(circle, rgba(249,183,62,0.11) 0%, transparent 68%);
  pointer-events: none;
}
.fel-pss-title {
  font-family: var(--font-heading);
  font-size: 1rem;
  font-weight: 800;
  color: #fff;
  margin-bottom: var(--space-5);
  position: relative;
  z-index: 1;
}
.fel-stat-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-4);
  margin-bottom: var(--space-6);
  position: relative;
  z-index: 1;
}
.fel-stat {
  text-align: center;
  padding: var(--space-5);
  background: rgba(255,255,255,0.04);
  border-radius: var(--radius-lg);
  border: 1px solid rgba(255,255,255,0.07);
}
.fel-stat-num {
  font-family: var(--font-heading);
  font-size: 2rem;
  font-weight: 900;
  background: linear-gradient(135deg, #fff 20%, var(--color-accent) 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  line-height: 1;
  display: block;
  margin-bottom: var(--space-1);
}
.fel-stat-lbl {
  font-family: var(--font-heading);
  font-size: 0.6rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  color: rgba(255,255,255,0.42);
}
.fel-pss-cta {
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
.fel-pss-cta:hover {
  box-shadow: 0 8px 32px rgba(229,53,231,0.62);
  transform: translateY(-1px);
  color: #fff;
}

/* ── 5. BENEFITS SECTION ── */
.benefits-fel {
  padding: var(--space-16) 0;
  background: #fff;
}
.benefits-fel-header { text-align: center; margin-bottom: var(--space-12); }
.benefits-fel h2 {
  font-size: clamp(1.65rem, 2.8vw, 2.35rem);
  font-weight: 900;
  color: #1a2340;
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.02em;
  margin-bottom: var(--space-3);
}
.benefits-fel h2 em { color: var(--color-secondary); font-style: normal; }
.benefits-fel-lead {
  font-size: 0.95rem;
  color: #4a5568;
  max-width: 500px;
  margin: 0 auto;
  line-height: 1.75;
}
/* Technique 7: benefit cards with magenta hover glow */
.benefits-fel-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
}
.benefit-fel-card {
  background: #f7f8fb;
  border: 1px solid rgba(229,53,231,0.1);
  border-radius: var(--radius-lg);
  padding: var(--space-7) var(--space-6);
  transition: transform var(--transition-base), box-shadow var(--transition-base), border-color var(--transition-base);
  position: relative;
  overflow: hidden;
}
.benefit-fel-card::after {
  content: '';
  position: absolute;
  bottom: 0; left: 0; right: 0;
  height: 2px;
  background: linear-gradient(90deg, var(--color-secondary), var(--color-accent));
  transform: scaleX(0);
  transform-origin: left;
  transition: transform var(--transition-base);
}
.benefit-fel-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 14px 35px rgba(229,53,231,0.13), 0 4px 10px rgba(0,0,0,0.06);
  border-color: rgba(229,53,231,0.25);
}
.benefit-fel-card:hover::after { transform: scaleX(1); }
.bfc-icon {
  width: 50px; height: 50px;
  border-radius: 50%;
  background: linear-gradient(135deg, rgba(229,53,231,0.12), rgba(249,183,62,0.07));
  border: 1px solid rgba(229,53,231,0.18);
  display: flex; align-items: center; justify-content: center;
  margin-bottom: var(--space-4);
  color: var(--color-secondary);
}
.bfc-icon svg { width: 22px; height: 22px; }
.benefit-fel-card h4 {
  font-size: 0.92rem;
  font-weight: 800;
  color: #1a2340;
  margin-bottom: var(--space-2);
}
.benefit-fel-card p {
  font-size: 0.84rem;
  color: #4a5568;
  line-height: 1.7;
  margin: 0;
}

/* ── 6. FAQ SECTION ── */
.faq-fel {
  padding: var(--space-16) 0;
  background: #f4f6f9;
}
.faq-fel-inner { max-width: 820px; margin: 0 auto; }
.faq-fel h2 {
  font-size: clamp(1.55rem, 2.6vw, 2.15rem);
  font-weight: 900;
  color: #1a2340;
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.02em;
  margin-bottom: var(--space-3);
}
.faq-fel h2 em { color: var(--color-secondary); font-style: normal; }
.faq-fel-sub { font-size: 0.92rem; color: #4a5568; margin-bottom: var(--space-10); line-height: 1.75; }
.faq-fel-list { display: flex; flex-direction: column; gap: var(--space-3); }
/* Technique 8: FAQ accordion with magenta open-state */
.faq-fel-item {
  background: #fff;
  border: 1px solid rgba(229,53,231,0.12);
  border-radius: var(--radius-lg);
  overflow: hidden;
  transition: border-color var(--transition-base), box-shadow var(--transition-base);
}
.faq-fel-item.open {
  border-color: rgba(229,53,231,0.38);
  box-shadow: 0 4px 18px rgba(229,53,231,0.09);
}
.faq-fel-q {
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
.faq-fel-q:hover { color: var(--color-secondary); }
.faq-fel-item.open .faq-fel-q { color: var(--color-secondary); }
.faq-fel-icon {
  flex-shrink: 0;
  width: 26px; height: 26px;
  border-radius: 50%;
  background: rgba(229,53,231,0.08);
  border: 1px solid rgba(229,53,231,0.18);
  display: flex; align-items: center; justify-content: center;
  transition: background var(--transition-base), transform var(--transition-base);
  font-size: 0.95rem;
  color: var(--color-secondary);
  font-weight: 900;
}
.faq-fel-item.open .faq-fel-icon {
  background: var(--color-secondary);
  color: #fff;
  transform: rotate(45deg);
}
.faq-fel-a {
  display: none;
  padding: 0 var(--space-6) var(--space-5);
  font-size: 0.88rem;
  color: #4a5568;
  line-height: 1.8;
  border-top: 1px solid rgba(229,53,231,0.07);
  padding-top: var(--space-4);
}
.faq-fel-item.open .faq-fel-a { display: block; }

/* ── 7. RELATED SERVICES ── */
.related-fel { padding: var(--space-14) 0; background: #fff; }
.related-fel-h3 {
  font-size: clamp(1.45rem, 2.4vw, 1.95rem);
  font-weight: 900;
  color: #1a2340;
  text-align: center;
  margin-bottom: var(--space-2);
  text-wrap: balance;
}
.related-fel-sub { text-align: center; font-size: 0.9rem; color: #4a5568; margin-bottom: var(--space-10); }
.related-fel-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; }
.rfl-card {
  border-radius: var(--radius-lg);
  overflow: hidden;
  display: flex;
  flex-direction: column;
  border: 1px solid rgba(229,53,231,0.1);
  background: #fff;
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.rfl-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 14px 35px rgba(229,53,231,0.14), 0 4px 10px rgba(0,0,0,0.06);
}
.rfl-banner { height: 80px; display: flex; align-items: center; justify-content: center; }
.rfl-card.t1 .rfl-banner { background: linear-gradient(145deg, #080510, #200835); }
.rfl-card.t2 .rfl-banner { background: linear-gradient(145deg, #0d1520, #1a2b3c); }
.rfl-card.t3 .rfl-banner { background: linear-gradient(145deg, #0a0618, #180a30); }
.rfl-icon-ring {
  width: 46px; height: 46px;
  border-radius: 50%;
  border: 1px solid rgba(255,255,255,0.15);
  background: rgba(255,255,255,0.07);
  display: flex; align-items: center; justify-content: center;
}
.rfl-icon-ring svg { width: 22px; height: 22px; color: var(--color-accent); }
.rfl-body { padding: var(--space-5); flex: 1; display: flex; flex-direction: column; }
.rfl-body h3 { font-size: 0.9rem; font-weight: 800; color: #1a2340; margin-bottom: var(--space-2); }
.rfl-body p { font-size: 0.8rem; color: #4a5568; line-height: 1.65; flex: 1; margin-bottom: var(--space-4); }
.rfl-link {
  display: inline-flex; align-items: center; gap: 4px;
  font-size: 0.78rem; font-weight: 800; color: var(--color-secondary);
  text-decoration: none; transition: gap var(--transition-fast);
}
.rfl-link:hover { gap: 8px; }
.rfl-link svg { width: 14px; height: 14px; }

/* ── 8. EMERGENCY CTA ── */
.cta-fel {
  padding: var(--space-14) 0;
  background: linear-gradient(135deg, #080510 0%, #1e0838 55%, #0a0e20 100%);
  position: relative;
  overflow: hidden;
  text-align: center;
}
.cta-fel::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 55% 78% at 18% 50%, rgba(229,53,231,0.15) 0%, transparent 58%),
    radial-gradient(ellipse 48% 68% at 82% 50%, rgba(249,183,62,0.1) 0%, transparent 58%);
  pointer-events: none;
}
/* Technique 9: pulsing gradient ring around CTA box */
.cta-fel-ring {
  display: inline-block;
  padding: 2px;
  border-radius: calc(var(--radius-lg) + 2px);
  background: linear-gradient(135deg, var(--color-accent), var(--color-secondary));
  box-shadow: 0 0 40px rgba(229,53,231,0.38), 0 0 80px rgba(229,53,231,0.14);
  animation: fel-ring-pulse 3s ease-in-out infinite;
  margin-bottom: var(--space-8);
}
@keyframes fel-ring-pulse {
  0%,100% { box-shadow: 0 0 40px rgba(229,53,231,0.38), 0 0 80px rgba(229,53,231,0.14); }
  50%      { box-shadow: 0 0 60px rgba(229,53,231,0.62), 0 0 120px rgba(229,53,231,0.24); }
}
.cta-fel-inner-card {
  background: rgba(255,255,255,0.05);
  border-radius: var(--radius-lg);
  padding: var(--space-10) var(--space-12);
  backdrop-filter: blur(10px);
  position: relative;
  z-index: 1;
  max-width: 560px;
  margin: 0 auto;
}
.cta-fel h2 {
  font-size: clamp(1.5rem, 2.8vw, 2.2rem);
  font-weight: 900;
  color: #fff;
  text-wrap: balance;
  margin-bottom: var(--space-3);
}
.cta-fel h2 em { color: var(--color-accent); font-style: normal; }
.cta-fel p {
  font-size: 0.95rem;
  color: rgba(255,255,255,0.56);
  max-width: 440px;
  margin: 0 auto var(--space-7);
  line-height: 1.75;
}
.cta-fel-btns { display: flex; gap: var(--space-3); justify-content: center; flex-wrap: wrap; }

/* ── RESPONSIVE ── */
@media (max-width: 1024px) {
  .hero-fel-inner { grid-template-columns: 1fr; }
  .hero-fel-card { display: none; }
  .process-fel-grid { grid-template-columns: 1fr; gap: var(--space-10); }
}
@media (max-width: 768px) {
  .benefits-fel-grid { grid-template-columns: repeat(2, 1fr); }
  .related-fel-grid { grid-template-columns: 1fr; }
  .cta-fel-inner-card { padding: var(--space-8) var(--space-5); }
}
@media (max-width: 480px) {
  .benefits-fel-grid { grid-template-columns: 1fr; }
  .fel-stat-grid { grid-template-columns: 1fr 1fr; }
}
</style>

<!-- ═══ HERO ═══ -->
<section class="hero-fel" aria-label="Felony bail bonds South Florida">
  <div class="fel-orb fel-orb-1"></div>
  <div class="fel-orb fel-orb-2"></div>
  <div class="fel-orb fel-orb-3"></div>

  <div class="container">
    <div class="hero-fel-inner">
      <div class="hero-fel-left">
        <span class="fel-eyebrow">
          <span class="alert-dot"></span>
          High-Bail Experience · 24/7 · South Florida
        </span>
        <h1>
          <span class="hl-gold">Felony Bail Bonds</span> in South Florida —<br>
          <span class="hl-mag">Fast Action</span> When the Stakes Are Highest
        </h1>
        <p class="hero-answer">Mad Extra Bail Bonds is a licensed Florida bail bondsman based in Delray Beach with over 11 years of experience handling felony bail bonds across Palm Beach, Broward, and Miami-Dade County. Felony charges carry higher bond amounts and tighter windows — we move immediately, 24 hours a day, 7 days a week.</p>
        <div class="hero-fel-btns">
          <?php if (!empty($phone)): ?>
          <a href="tel:<?php echo preg_replace('/\D/','',$phone); ?>" class="btn-fel-primary">
            <?php echo lucide_icon('phone'); ?> Call Now — 24/7
          </a>
          <?php else: ?>
          <a href="/contact/" class="btn-fel-primary">
            <?php echo lucide_icon('zap'); ?> Get Emergency Help
          </a>
          <?php endif; ?>
          <a href="/contact/" class="btn-fel-secondary">Free Consultation</a>
        </div>
        <div class="fel-trust-row">
          <span class="fel-htb"><?php echo lucide_icon('shield-check'); ?> Licensed FL Bondsman</span>
          <span class="fel-htb"><?php echo lucide_icon('gavel'); ?> Felony Specialists</span>
          <span class="fel-htb"><?php echo lucide_icon('clock'); ?> 24/7 Response</span>
          <span class="fel-htb"><?php echo lucide_icon('landmark'); ?> All South FL Jails</span>
        </div>
      </div>

      <div class="hero-fel-card">
        <p class="hfc-title">Felony Arrest? Call Us Now.</p>
        <p class="hfc-note">Immediate 24/7 response</p>
        <ul class="hfc-list">
          <li><span class="hfc-check">✓</span> Violent, drug, and property felonies</li>
          <li><span class="hfc-check">✓</span> High-bail and collateral options</li>
          <li><span class="hfc-check">✓</span> Palm Beach, Broward, Miami-Dade jails</li>
          <li><span class="hfc-check">✓</span> First appearance prep support</li>
          <li><span class="hfc-check">✓</span> Licensed FL bail bondsman on standby</li>
        </ul>
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo preg_replace('/\D/','',$phone); ?>" class="hfc-cta">
          <?php echo lucide_icon('phone'); ?> Call Now
        </a>
        <?php else: ?>
        <a href="/contact/" class="hfc-cta">Get Emergency Help</a>
        <?php endif; ?>
        <p class="hfc-disclaimer">Available 24 hours a day, 365 days a year</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SVG DIVIDER ═══ -->
<div class="div-fel-to-light" aria-hidden="true">
  <svg viewBox="0 0 1440 55" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,55 L0,10 Q480,55 720,22 Q960,-2 1440,36 L1440,55 Z" fill="#f4f6f9"/>
  </svg>
</div>

<!-- ═══ INTRO / ANSWER SECTION ═══ -->
<section class="intro-fel" aria-label="Felony bail bond overview">
  <div class="container">
    <div class="intro-fel-inner">
      <span class="fel-section-eyebrow">About This Service</span>
      <h2>How much does a felony bail bond cost in South Florida?</h2>
      <div class="answer-block-fel">
        <p>Felony bail amounts in South Florida are set by judges at first appearance — typically within 24 hours of arrest. Amounts range from $10,000 for lower-level felonies to $500,000 or more for violent or capital offenses. Florida law sets the bondsman's premium at exactly 10% of the bond amount. For large bonds, collateral such as real estate equity may be required or offered.</p>
      </div>
      <p class="prose">Mad Extra Bail Bonds has handled felony bail bonds across South Florida for over 11 years. We know the Palm Beach County Jail in West Palm Beach, the Broward County Main Jail in Fort Lauderdale, and the Turner Guilford Knight Correctional Center in Miami-Dade — including the booking timelines, shift changes, and release procedures at each facility.</p>
      <p class="prose">Felony cases move on tight timelines. The first 24 hours after arrest are critical. Call us the moment you learn of the arrest — we begin preparing immediately so we can post bond the instant it is set.</p>
    </div>
  </div>
</section>

<!-- ═══ SVG DIVIDER ═══ -->
<div class="div-fel-to-dark" aria-hidden="true">
  <svg viewBox="0 0 1440 55" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,0 Q380,55 720,28 Q1060,2 1440,44 L1440,55 L0,55 Z" fill="#080510"/>
  </svg>
</div>

<!-- ═══ PROCESS SECTION ═══ -->
<section class="process-fel" aria-label="Felony bail bond process">
  <div class="container">
    <div class="process-fel-grid">
      <div>
        <span class="process-fel-eyebrow"><?php echo lucide_icon('zap'); ?> The Process</span>
        <h2>How long does it take to get released on a felony bond in <em>Palm Beach County?</em></h2>
        <div class="answer-block-dark-fel">
          <p>After bond is posted at the Palm Beach County Jail in West Palm Beach, felony releases typically take 6 to 24 hours depending on booking load, shift changes, and case complexity. We post the bond the moment the amount is confirmed and stay in contact throughout the release process so your family knows exactly what to expect.</p>
        </div>
        <div class="process-fel-steps">
          <div class="process-fel-step">
            <div class="fel-step-num">1</div>
            <div class="fel-step-content">
              <h4>Call Us Immediately After Arrest</h4>
              <p>The first 24 hours are critical on a felony. Tell us the charges, the facility, and any known bail amount or if a hearing is pending. We act immediately.</p>
            </div>
          </div>
          <div class="process-fel-step">
            <div class="fel-step-num">2</div>
            <div class="fel-step-content">
              <h4>We Confirm Bond Amount & First Appearance</h4>
              <p>We check the jail for the bond status and first appearance schedule. For charges requiring a hearing, we prepare to be ready the moment bail is set by the judge.</p>
            </div>
          </div>
          <div class="process-fel-step">
            <div class="fel-step-num">3</div>
            <div class="fel-step-content">
              <h4>Sign Bond Documents & Arrange Collateral if Needed</h4>
              <p>Florida's premium is 10% of the bond amount. For large felony bonds, collateral arrangements are discussed before you sign anything.</p>
            </div>
          </div>
          <div class="process-fel-step">
            <div class="fel-step-num">4</div>
            <div class="fel-step-content">
              <h4>Bond Posted — Release Processing Begins</h4>
              <p>We post directly with the facility. Felony releases typically begin within hours — we stay with you throughout until your loved one is out.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="fel-process-sidebar">
        <div class="fel-pss-card">
          <p class="fel-pss-title">Felony Bail Bond Facts</p>
          <div class="fel-stat-grid">
            <div class="fel-stat">
              <span class="fel-stat-num">24hrs</span>
              <span class="fel-stat-lbl">First Appearance Window</span>
            </div>
            <div class="fel-stat">
              <span class="fel-stat-num">10%</span>
              <span class="fel-stat-lbl">FL Premium Rate</span>
            </div>
            <div class="fel-stat">
              <span class="fel-stat-num">11+</span>
              <span class="fel-stat-lbl">Years Experience</span>
            </div>
            <div class="fel-stat">
              <span class="fel-stat-num">3</span>
              <span class="fel-stat-lbl">Counties Covered</span>
            </div>
          </div>
          <?php if (!empty($phone)): ?>
          <a href="tel:<?php echo preg_replace('/\D/','',$phone); ?>" class="fel-pss-cta">
            <?php echo lucide_icon('phone'); ?> Call Now — 24/7
          </a>
          <?php else: ?>
          <a href="/contact/" class="fel-pss-cta">Get Felony Bond Help Now</a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SVG DIVIDER ═══ -->
<div class="div-fel-to-white" aria-hidden="true">
  <svg viewBox="0 0 1440 55" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,0 Q720,55 1440,12 L1440,55 L0,55 Z" fill="#ffffff"/>
  </svg>
</div>

<!-- ═══ BENEFITS SECTION ═══ -->
<section class="benefits-fel" aria-label="Felony bail bond benefits">
  <div class="container">
    <div class="benefits-fel-header">
      <span class="fel-section-eyebrow">What Sets Us Apart</span>
      <h2>Why do South Florida families choose <em>Mad Extra</em> for felony bonds?</h2>
      <p class="benefits-fel-lead">High-bail experience, 24/7 availability, and relationships at every South Florida facility — here's why felony cases come to Mad Extra.</p>
    </div>
    <div class="benefits-fel-grid">
      <div class="benefit-fel-card">
        <div class="bfc-icon"><?php echo lucide_icon('clock'); ?></div>
        <h4>24/7 Emergency Response</h4>
        <p>Felony arrests happen around the clock. We pick up every call and act immediately — no voicemail, no delay.</p>
      </div>
      <div class="benefit-fel-card">
        <div class="bfc-icon"><?php echo lucide_icon('gavel'); ?></div>
        <h4>High-Bail Felony Experience</h4>
        <p>Over 11 years handling felony bonds at every bail level — from $10,000 to six-figure amounts with collateral arrangements.</p>
      </div>
      <div class="benefit-fel-card">
        <div class="bfc-icon"><?php echo lucide_icon('landmark'); ?></div>
        <h4>Every South FL Jail Covered</h4>
        <p>Palm Beach County Jail, Broward Main, TGK, and every city lockup across the three-county region.</p>
      </div>
      <div class="benefit-fel-card">
        <div class="bfc-icon"><?php echo lucide_icon('home'); ?></div>
        <h4>Collateral Options Available</h4>
        <p>Real estate equity and other assets accepted for high bail amounts. We walk you through every option before you sign.</p>
      </div>
      <div class="benefit-fel-card">
        <div class="bfc-icon"><?php echo lucide_icon('shield-check'); ?></div>
        <h4>Licensed FL Bail Bondsman</h4>
        <p>Licensed by the Florida Department of Financial Services. Fully insured for any felony bond amount statewide.</p>
      </div>
      <div class="benefit-fel-card">
        <div class="bfc-icon"><?php echo lucide_icon('users'); ?></div>
        <h4>Family-First Communication</h4>
        <p>We keep families informed through every step — no black box, no guessing when the release will happen.</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SVG DIVIDER ═══ -->
<div class="div-fel-faq" aria-hidden="true">
  <svg viewBox="0 0 1440 40" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,20 Q360,40 720,8 Q1080,-10 1440,22 L1440,40 L0,40 Z" fill="#f4f6f9"/>
  </svg>
</div>

<!-- ═══ FAQ SECTION ═══ -->
<section class="faq-fel" aria-label="Felony bail bond FAQ">
  <div class="container">
    <div class="faq-fel-inner">
      <span class="fel-section-eyebrow">Common Questions</span>
      <h2>Frequently asked questions about <em>felony bail bonds</em> in South Florida</h2>
      <p class="faq-fel-sub">Direct answers to what families ask most when a loved one faces a felony charge.</p>
      <div class="faq-fel-list" role="list">
        <?php foreach ($_faqs as $faq): ?>
        <div class="faq-fel-item" role="listitem">
          <button class="faq-fel-q" aria-expanded="false" onclick="toggleFaqFel(this)">
            <?php echo htmlspecialchars($faq['q']); ?>
            <span class="faq-fel-icon" aria-hidden="true">+</span>
          </button>
          <div class="faq-fel-a" role="region">
            <p><?php echo htmlspecialchars($faq['a']); ?></p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- ═══ RELATED SERVICES ═══ -->
<section class="related-fel" aria-label="Related bail bond services">
  <div class="container">
    <h3 class="related-fel-h3">Other Services You May Need</h3>
    <p class="related-fel-sub">Mad Extra Bail Bonds handles every type of bail bond across South Florida — 24/7.</p>
    <div class="related-fel-grid">
      <article class="rfl-card t1">
        <div class="rfl-banner"><div class="rfl-icon-ring"><?php echo lucide_icon('shield'); ?></div></div>
        <div class="rfl-body">
          <h3>Bail Bond Services</h3>
          <p>General criminal bail bonds for any charge — licensed FL bondsman available every hour.</p>
          <a href="/services/bail-bonds/" class="rfl-link">Learn more <?php echo lucide_icon('arrow-right'); ?></a>
        </div>
      </article>
      <article class="rfl-card t2">
        <div class="rfl-banner"><div class="rfl-icon-ring"><?php echo lucide_icon('alert-triangle'); ?></div></div>
        <div class="rfl-body">
          <h3>Drug Charge Bail Bonds</h3>
          <p>Drug trafficking charges often bring felony bail — we handle both sides of the equation.</p>
          <a href="/services/drug-charge-bail-bonds/" class="rfl-link">Learn more <?php echo lucide_icon('arrow-right'); ?></a>
        </div>
      </article>
      <article class="rfl-card t3">
        <div class="rfl-banner"><div class="rfl-icon-ring"><?php echo lucide_icon('landmark'); ?></div></div>
        <div class="rfl-body">
          <h3>Federal Bail Bonds</h3>
          <p>Federal felony charges require a different kind of bondsman — one with federal court experience.</p>
          <a href="/services/federal-bail-bonds/" class="rfl-link">Learn more <?php echo lucide_icon('arrow-right'); ?></a>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- ═══ EMERGENCY CTA ═══ -->
<section class="cta-fel" aria-label="Emergency felony bail bond contact">
  <div class="container" style="position:relative;z-index:1">
    <div class="cta-fel-ring">
      <div class="cta-fel-inner-card">
        <h2>Need a bondsman for a <em>felony charge</em> right now?</h2>
        <p>Felony cases move fast and so do we. The first 24 hours after a felony arrest are the most critical — call immediately and we will be prepared the moment the bond amount is set.</p>
        <div class="cta-fel-btns">
          <?php if (!empty($phone)): ?>
          <a href="tel:<?php echo preg_replace('/\D/','',$phone); ?>" class="btn-fel-primary">
            <?php echo lucide_icon('phone'); ?> Call Now — 24/7
          </a>
          <?php endif; ?>
          <a href="/contact/" class="btn-fel-secondary">Send a Message</a>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
function toggleFaqFel(btn) {
  const item = btn.closest('.faq-fel-item');
  const isOpen = item.classList.contains('open');
  document.querySelectorAll('.faq-fel-item.open').forEach(el => el.classList.remove('open'));
  document.querySelectorAll('.faq-fel-q').forEach(el => el.setAttribute('aria-expanded','false'));
  if (!isOpen) {
    item.classList.add('open');
    btn.setAttribute('aria-expanded','true');
  }
}
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
