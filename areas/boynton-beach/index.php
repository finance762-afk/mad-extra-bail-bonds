<?php
/**
 * areas/boynton-beach/index.php — Boynton Beach Service Area Page
 * Mad Extra Bail Bonds | Delray Beach, FL
 * Phase 4: Area Pages
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Bail Bonds Near Me in Boynton Beach FL | Mad Extra Bail Bonds | 24/7';
$pageDescription = 'Need bail bonds in Boynton Beach, FL? Mad Extra Bail Bonds serves Boynton Beach families with 24/7 bail bond service. Licensed FL bondsman — fast release from Palm Beach County Jail.';
$canonicalUrl    = $siteUrl . '/areas/boynton-beach/';
$currentPage     = 'areas';

$_breadcrumb = generateBreadcrumbSchema([
    ['name' => 'Home',          'url' => $siteUrl . '/'],
    ['name' => 'Service Areas', 'url' => $siteUrl . '/areas/'],
    ['name' => 'Boynton Beach', 'url' => $siteUrl . '/areas/boynton-beach/'],
]);

$_serviceSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'Service',
    '@id'         => $siteUrl . '/areas/boynton-beach/#service-boynton-beach',
    'name'        => 'Bail Bonds in Boynton Beach, FL',
    'description' => 'Mad Extra Bail Bonds provides 24/7 licensed bail bond services in Boynton Beach, FL. Fast release from Palm Beach County Jail for all charge types.',
    'url'         => $siteUrl . '/areas/boynton-beach/',
    'provider'    => ['@id' => $siteUrl . '/#organization'],
    'areaServed'  => [
        ['@type' => 'City',   'name' => 'Boynton Beach, FL'],
        ['@type' => 'County', 'name' => 'Palm Beach County, FL'],
    ],
    'serviceType' => 'Bail Bond Services',
];

$_faqs = [
    [
        'q' => 'How do I bail someone out of jail after a Boynton Beach arrest if I\'m out of state?',
        'a' => 'We work remotely with families across the country — you can sign paperwork digitally and wire premium payment. We handle everything on the ground in Boynton Beach and at Palm Beach County Jail. Call us immediately after you learn of the arrest and we will walk you through the process regardless of where you are.',
    ],
    [
        'q' => 'How long does it take the Boynton Beach Police Department to process an arrest and transport to jail?',
        'a' => 'BBPD typically completes local booking within 1 to 3 hours, then transports to Palm Beach County Jail in West Palm Beach. Call us immediately after the arrest is made — we can have paperwork ready before the transport even completes, which speeds up release once bail is posted.',
    ],
    [
        'q' => 'Can Mad Extra Bail Bonds help someone arrested in Boynton Beach\'s Congress Avenue corridor?',
        'a' => 'Yes. DUI, disorderly conduct, and traffic warrant arrests along Congress Avenue and the Golf Road corridor are among the most common situations we handle in Boynton Beach. We know exactly how those charges move through BBPD and the Palm Beach County system.',
    ],
    [
        'q' => 'What is the typical bail amount for a DUI arrest in Boynton Beach, FL?',
        'a' => 'First-offense DUI bonds in Palm Beach County typically range from $500 to $1,500. Subsequent offenses or DUI with injury are set higher by the judge. Once you call us, we can pull the booking information and give you the exact bond figure within minutes.',
    ],
    [
        'q' => 'Is there a separate court for Boynton Beach criminal cases?',
        'a' => 'The South County Courthouse at 200 W Atlantic Ave in Delray Beach handles many Palm Beach County South cases, including Boynton Beach arrests. We can advise families on court dates and what to expect at arraignment after your loved one is released.',
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
   BOYNTON BEACH AREA PAGE — Mad Extra Bail Bonds
   Premium Tier | Dark/Neon Design System
   Techniques:
     1. Layered ::before radial gradients on hero (distinct positions)
     2. Noise texture ::after on hero (SVG feTurbulence data URI)
     3. Three floating neon orbs — top-right / bottom-left / mid-right
     4. Glassmorphism hero sidebar card with gradient pseudo-border
     5. SVG wave dividers — 3 distinct shapes
     6. FAQ accordion with neon magenta border + rotate icon on open
     7. Service cards with neon bottom-border sweep animation on hover
     8. Gradient eyebrow labels via background-clip:text
     9. Dark local coverage section with decorative neon orb right-center
   ============================================================ */

/* ── 1. BOYNTON BEACH HERO ── */
.bb-hero {
  position: relative;
  min-height: 58vh;
  display: flex;
  align-items: center;
  background: #09090f;
  overflow: hidden;
  padding-top: var(--nav-height, 72px);
  padding-bottom: var(--space-12);
}

/* Technique 1: Layered ::before radial gradients — positioned differently from service pages */
.bb-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 50% 70% at 92% 15%, rgba(229,53,231,0.20) 0%, transparent 60%),
    radial-gradient(ellipse 60% 50% at 8% 80%, rgba(249,183,62,0.15) 0%, transparent 55%),
    radial-gradient(ellipse 70% 45% at 50% 110%, rgba(10,20,40,0.99) 0%, transparent 75%),
    radial-gradient(ellipse 30% 40% at 70% 50%, rgba(26,43,60,0.6) 0%, transparent 70%);
  pointer-events: none;
}

/* Technique 2: Noise texture overlay via SVG feTurbulence */
.bb-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='bb-noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23bb-noise)' opacity='0.04'/%3E%3C/svg%3E");
  opacity: 0.55;
  pointer-events: none;
}

/* Technique 3: Three floating neon orbs — different positions from service page orbs */
.bb-orb {
  position: absolute;
  border-radius: 50%;
  pointer-events: none;
  will-change: transform;
}

/* Orb 1: top-right */
.bb-orb-1 {
  width: 520px;
  height: 520px;
  top: -160px;
  right: -80px;
  background: radial-gradient(circle, rgba(229,53,231,0.16) 0%, transparent 70%);
  animation: bb-orb-drift 15s ease-in-out infinite;
}

/* Orb 2: bottom-left */
.bb-orb-2 {
  width: 380px;
  height: 380px;
  bottom: -100px;
  left: -60px;
  background: radial-gradient(circle, rgba(249,183,62,0.13) 0%, transparent 70%);
  animation: bb-orb-drift 19s ease-in-out infinite reverse;
  animation-delay: -7s;
}

/* Orb 3: mid-right (unique to this page) */
.bb-orb-3 {
  width: 260px;
  height: 260px;
  top: 35%;
  right: 28%;
  background: radial-gradient(circle, rgba(229,53,231,0.10) 0%, transparent 70%);
  animation: bb-orb-drift 22s ease-in-out infinite;
  animation-delay: -11s;
}

@keyframes bb-orb-drift {
  0%, 100% { transform: translate(0, 0) scale(1); }
  33%       { transform: translate(14px, -20px) scale(1.05); }
  66%       { transform: translate(-10px, 13px) scale(0.96); }
}

.bb-hero-inner {
  position: relative;
  z-index: 2;
  display: grid;
  grid-template-columns: 1fr 400px;
  gap: var(--space-12);
  align-items: center;
  padding: var(--space-12) 0;
  width: 100%;
}

.bb-hero-left {
  max-width: 640px;
}

/* Technique 8: Gradient eyebrow via background-clip:text */
.bb-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: 9px;
  font-family: var(--font-heading);
  font-size: 0.68rem;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 3px;
  padding: 6px 16px;
  border-radius: var(--radius-full);
  border: 1px solid rgba(229,53,231,0.38);
  background: rgba(229,53,231,0.07);
  margin-bottom: var(--space-5);
  position: relative;
}

.bb-eyebrow-text {
  background: linear-gradient(90deg, var(--color-secondary) 0%, var(--color-accent) 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  color: transparent;
}

.bb-eyebrow .pulse-dot {
  width: 7px;
  height: 7px;
  border-radius: 50%;
  background: var(--color-secondary);
  box-shadow: 0 0 8px var(--color-secondary);
  animation: bb-pulse-dot 2s ease-in-out infinite;
  flex-shrink: 0;
}

@keyframes bb-pulse-dot {
  0%, 100% { opacity: 1; transform: scale(1); }
  50%       { opacity: 0.6; transform: scale(0.75); }
}

.bb-hero h1 {
  font-size: clamp(1.85rem, 3.8vw, 3.1rem);
  font-weight: 900;
  color: var(--color-white);
  line-height: 1.1;
  margin-bottom: var(--space-5);
  letter-spacing: -0.025em;
  text-wrap: balance;
}

.bb-hero h1 .hl-gold {
  color: var(--color-accent);
  text-shadow: 0 0 28px rgba(249,183,62,0.5);
}

.bb-hero h1 .hl-mag {
  color: var(--color-secondary);
  text-shadow: 0 0 28px rgba(229,53,231,0.5);
}

.bb-hero-answer {
  font-size: 1rem;
  color: rgba(255,255,255,0.68);
  line-height: 1.82;
  margin-bottom: var(--space-7);
  max-width: 560px;
}

.bb-hero-btns {
  display: flex;
  gap: var(--space-3);
  flex-wrap: wrap;
  margin-bottom: var(--space-7);
}

.btn-bb-primary {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 14px 30px;
  background: var(--color-secondary);
  color: var(--color-white);
  font-family: var(--font-heading);
  font-size: 0.82rem;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  border-radius: var(--radius-md);
  text-decoration: none;
  box-shadow: 0 0 24px rgba(229,53,231,0.44), 0 4px 16px rgba(0,0,0,0.3);
  transition: all var(--transition-base);
}

.btn-bb-primary:hover {
  background: #f043f2;
  box-shadow: 0 0 44px rgba(229,53,231,0.70), 0 8px 24px rgba(0,0,0,0.36);
  transform: translateY(-2px);
  color: var(--color-white);
}

.btn-bb-primary svg {
  width: 15px;
  height: 15px;
}

.btn-bb-secondary {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 13px 26px;
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

.btn-bb-secondary:hover {
  background: var(--color-accent);
  color: #0a0d1a;
  border-color: var(--color-accent);
  box-shadow: 0 0 28px rgba(249,183,62,0.42);
  transform: translateY(-2px);
}

.bb-trust-row {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-2);
}

.bb-trust-badge {
  display: inline-flex;
  align-items: center;
  gap: 5px;
  font-size: 0.67rem;
  font-weight: 700;
  color: rgba(255,255,255,0.72);
  padding: 4px 12px;
  border-radius: var(--radius-full);
  background: rgba(255,255,255,0.055);
  border: 1px solid rgba(255,255,255,0.1);
  text-transform: uppercase;
  letter-spacing: 0.5px;
  white-space: nowrap;
}

.bb-trust-badge svg {
  width: 11px;
  height: 11px;
  color: var(--color-accent);
  flex-shrink: 0;
}

/* Technique 4: Glassmorphism hero sidebar card */
.bb-hero-card {
  position: relative;
  background: rgba(255,255,255,0.04);
  border: 1px solid rgba(255,255,255,0.11);
  border-radius: 18px;
  padding: var(--space-7) var(--space-6);
  backdrop-filter: blur(14px);
  -webkit-backdrop-filter: blur(14px);
  overflow: hidden;
}

.bb-hero-card::before {
  content: '';
  position: absolute;
  inset: -1px;
  border-radius: 19px;
  background: linear-gradient(145deg, rgba(229,53,231,0.38) 0%, rgba(249,183,62,0.18) 50%, transparent 100%);
  z-index: -1;
  opacity: 0.5;
}

.bb-hero-card::after {
  content: '';
  position: absolute;
  top: -80px;
  right: -80px;
  width: 220px;
  height: 220px;
  border-radius: 50%;
  background: radial-gradient(circle, rgba(229,53,231,0.14) 0%, transparent 70%);
  pointer-events: none;
}

.bbc-title {
  font-family: var(--font-heading);
  font-size: 1.05rem;
  font-weight: 800;
  color: var(--color-white);
  margin-bottom: var(--space-2);
  position: relative;
  z-index: 1;
}

.bbc-note {
  font-size: 0.68rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  color: var(--color-secondary);
  margin-bottom: var(--space-5);
  position: relative;
  z-index: 1;
}

.bbc-list {
  list-style: none;
  padding: 0;
  margin: 0 0 var(--space-6);
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
  position: relative;
  z-index: 1;
}

.bbc-list li {
  display: flex;
  align-items: flex-start;
  gap: var(--space-2);
  font-size: 0.85rem;
  color: rgba(255,255,255,0.8);
  line-height: 1.5;
}

.bbc-check {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  width: 18px;
  height: 18px;
  border-radius: 50%;
  background: linear-gradient(135deg, var(--color-secondary), var(--color-accent));
  margin-top: 2px;
  font-size: 0.6rem;
  color: var(--color-white);
  font-weight: 900;
}

.bbc-cta {
  display: block;
  width: 100%;
  padding: 13px;
  background: linear-gradient(135deg, var(--color-secondary) 0%, #b515b7 100%);
  color: var(--color-white);
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
  position: relative;
  z-index: 1;
}

.bbc-cta:hover {
  box-shadow: 0 8px 36px rgba(229,53,231,0.64);
  transform: translateY(-1px);
  color: var(--color-white);
}

.bbc-disclaimer {
  text-align: center;
  font-size: 0.6rem;
  color: rgba(255,255,255,0.3);
  margin-top: var(--space-3);
  line-height: 1.5;
  position: relative;
  z-index: 1;
}

/* ── SVG DIVIDER CONTAINERS — Technique 5 ── */
/* Divider 1: dark → light */
.bb-divider-dark-to-light {
  line-height: 0;
  background: #09090f;
}
.bb-divider-dark-to-light svg {
  display: block;
  width: 100%;
}

/* Divider 2: light → dark */
.bb-divider-light-to-dark {
  line-height: 0;
  background: #f4f6f9;
}
.bb-divider-light-to-dark svg {
  display: block;
  width: 100%;
}

/* Divider 3: dark → white */
.bb-divider-dark-to-white {
  line-height: 0;
  background: #09090f;
}
.bb-divider-dark-to-white svg {
  display: block;
  width: 100%;
}

/* Divider 4: white → light */
.bb-divider-white-to-light {
  line-height: 0;
  background: #ffffff;
}
.bb-divider-white-to-light svg {
  display: block;
  width: 100%;
}

/* ── 2. INTRO / AEO ANSWER SECTION (light) ── */
.bb-intro {
  padding: var(--space-16) 0;
  background: #f4f6f9;
}

.bb-intro-inner {
  max-width: 880px;
  margin: 0 auto;
}

.sp-section-eyebrow {
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

.bb-intro-h2 {
  font-size: clamp(1.65rem, 2.9vw, 2.35rem);
  font-weight: 900;
  color: var(--color-dark);
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.02em;
  margin-bottom: var(--space-5);
}

.bb-intro-h2 em {
  color: var(--color-secondary);
  font-style: normal;
}

/* AEO answer block with magenta left border */
.answer-block {
  background: linear-gradient(135deg, rgba(229,53,231,0.07), rgba(249,183,62,0.04));
  border-left: 3px solid var(--color-secondary);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  padding: var(--space-5) var(--space-6);
  margin-bottom: var(--space-6);
}

.answer-block p {
  font-size: 0.95rem;
  color: var(--color-dark);
  line-height: 1.82;
  margin: 0;
  font-style: italic;
}

.bb-intro p {
  font-size: 0.95rem;
  color: var(--color-gray);
  line-height: 1.82;
  margin-bottom: var(--space-4);
}

/* ── 3. LOCAL COVERAGE SECTION (dark gradient) — Technique 9 ── */
.bb-local {
  padding: var(--space-16) 0;
  background: linear-gradient(140deg, #09090f 0%, #140828 55%, #0a1628 100%);
  position: relative;
  overflow: hidden;
}

/* Technique 9: Decorative neon orb positioned right-center */
.bb-local-orb {
  position: absolute;
  right: -120px;
  top: 50%;
  transform: translateY(-50%);
  width: 560px;
  height: 560px;
  border-radius: 50%;
  background: radial-gradient(circle, rgba(229,53,231,0.11) 0%, transparent 70%);
  pointer-events: none;
}

.bb-local-orb-accent {
  position: absolute;
  left: -80px;
  bottom: -100px;
  width: 340px;
  height: 340px;
  border-radius: 50%;
  background: radial-gradient(circle, rgba(249,183,62,0.08) 0%, transparent 70%);
  pointer-events: none;
}

.bb-local-inner {
  position: relative;
  z-index: 2;
}

.bb-local-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-14);
  align-items: start;
}

.process-eyebrow-sp {
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

.bb-local-h2 {
  font-size: clamp(1.55rem, 2.8vw, 2.25rem);
  font-weight: 900;
  color: var(--color-white);
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.02em;
  margin-bottom: var(--space-4);
}

.bb-local-h2 em {
  color: var(--color-secondary);
  font-style: normal;
}

.answer-block-dark {
  background: rgba(255,255,255,0.045);
  border-left: 3px solid var(--color-accent);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  padding: var(--space-4) var(--space-5);
  margin-bottom: var(--space-6);
}

.answer-block-dark p {
  font-size: 0.88rem;
  color: rgba(255,255,255,0.72);
  line-height: 1.8;
  margin: 0;
  font-style: italic;
}

.bb-local p {
  font-size: 0.88rem;
  color: rgba(255,255,255,0.54);
  line-height: 1.8;
  margin-bottom: var(--space-4);
}

/* Stat blocks */
.bb-stat-row {
  display: flex;
  gap: var(--space-5);
  margin-top: var(--space-6);
  flex-wrap: wrap;
}

.bb-stat-block {
  flex: 1;
  min-width: 80px;
  text-align: center;
  padding: var(--space-5) var(--space-4);
  background: rgba(255,255,255,0.04);
  border: 1px solid rgba(255,255,255,0.08);
  border-radius: var(--radius-md);
  position: relative;
  overflow: hidden;
}

.bb-stat-block::after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  height: 2px;
  background: linear-gradient(90deg, var(--color-secondary), var(--color-accent));
}

.bb-stat-number {
  display: block;
  font-family: var(--font-heading);
  font-size: 2rem;
  font-weight: 900;
  line-height: 1;
  margin-bottom: var(--space-1);
  background: linear-gradient(135deg, var(--color-secondary) 0%, var(--color-accent) 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  color: transparent;
}

.bb-stat-label {
  font-size: 0.68rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1px;
  color: rgba(255,255,255,0.5);
}

/* Process steps */
.bb-process-steps {
  display: flex;
  flex-direction: column;
  gap: var(--space-5);
  margin-top: var(--space-6);
}

.bb-process-step {
  display: flex;
  gap: var(--space-4);
  align-items: flex-start;
}

.bb-step-num {
  flex-shrink: 0;
  width: 38px;
  height: 38px;
  border-radius: 50%;
  background: linear-gradient(135deg, var(--color-secondary) 0%, #8f08a0 100%);
  display: flex;
  align-items: center;
  justify-content: center;
  font-family: var(--font-heading);
  font-size: 0.83rem;
  font-weight: 900;
  color: var(--color-white);
  box-shadow: 0 0 18px rgba(229,53,231,0.32);
}

.bb-step-content h4 {
  font-size: 0.9rem;
  font-weight: 800;
  color: var(--color-white);
  margin-bottom: var(--space-1);
}

.bb-step-content p {
  font-size: 0.82rem;
  color: rgba(255,255,255,0.52);
  line-height: 1.7;
  margin: 0;
}

/* Sidebar card */
.bb-local-sidebar {
  padding-top: var(--space-2);
}

.bb-side-card {
  background: rgba(255,255,255,0.04);
  border: 1px solid rgba(255,255,255,0.09);
  border-radius: 18px;
  padding: var(--space-8) var(--space-7);
  position: relative;
  overflow: hidden;
}

.bb-side-card::before {
  content: '';
  position: absolute;
  top: -50px;
  right: -50px;
  width: 200px;
  height: 200px;
  border-radius: 50%;
  background: radial-gradient(circle, rgba(229,53,231,0.16) 0%, transparent 70%);
  pointer-events: none;
}

.bb-side-card-title {
  font-family: var(--font-heading);
  font-size: 1rem;
  font-weight: 800;
  color: var(--color-white);
  margin-bottom: var(--space-5);
  position: relative;
  z-index: 1;
}

.bb-facts {
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
  margin-bottom: var(--space-6);
  position: relative;
  z-index: 1;
}

.bb-fact {
  display: flex;
  align-items: flex-start;
  gap: var(--space-3);
  padding: var(--space-4);
  background: rgba(255,255,255,0.04);
  border-radius: var(--radius-md);
  border: 1px solid rgba(255,255,255,0.06);
}

.bb-fact svg {
  width: 17px;
  height: 17px;
  color: var(--color-accent);
  flex-shrink: 0;
  margin-top: 1px;
}

.bb-fact-text strong {
  display: block;
  font-size: 0.8rem;
  font-weight: 700;
  color: var(--color-white);
  margin-bottom: 2px;
}

.bb-fact-text span {
  font-size: 0.74rem;
  color: rgba(255,255,255,0.48);
  line-height: 1.55;
}

.bb-side-cta {
  display: block;
  width: 100%;
  padding: 13px;
  background: linear-gradient(135deg, var(--color-secondary) 0%, #b515b7 100%);
  color: var(--color-white);
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
  position: relative;
  z-index: 1;
}

.bb-side-cta:hover {
  box-shadow: 0 8px 34px rgba(229,53,231,0.64);
  transform: translateY(-1px);
  color: var(--color-white);
}

/* ── 4. SERVICES GRID SECTION (white) — Technique 7 ── */
.bb-services {
  padding: var(--space-16) 0;
  background: var(--color-white);
}

.bb-services-header {
  text-align: center;
  margin-bottom: var(--space-12);
}

.bb-services-h2 {
  font-size: clamp(1.65rem, 2.9vw, 2.3rem);
  font-weight: 900;
  color: var(--color-dark);
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.02em;
  margin-bottom: var(--space-3);
}

.bb-services-h2 em {
  color: var(--color-secondary);
  font-style: normal;
}

.bb-services-lead {
  font-size: 0.95rem;
  color: var(--color-gray);
  max-width: 500px;
  margin: 0 auto;
  line-height: 1.75;
}

/* 3-column services grid */
.bb-svc-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
}

/* Service card with neon bottom-border sweep — Technique 7 */
.bb-svc-card {
  border-radius: var(--radius-lg);
  overflow: hidden;
  display: flex;
  flex-direction: column;
  border: 1px solid rgba(229,53,231,0.1);
  background: var(--color-white);
  transition: transform var(--transition-base), box-shadow var(--transition-base), border-color var(--transition-base);
  position: relative;
}

/* Neon bottom-border sweep on hover — scaleX 0 → 1 */
.bb-svc-card::after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  height: 2px;
  background: linear-gradient(90deg, var(--color-secondary), var(--color-accent));
  transform: scaleX(0);
  transform-origin: left center;
  transition: transform 0.35s ease;
}

.bb-svc-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 14px 38px rgba(229,53,231,0.14), 0 4px 12px rgba(0,0,0,0.06);
  border-color: rgba(229,53,231,0.24);
}

.bb-svc-card:hover::after {
  transform: scaleX(1);
}

.bb-svc-banner {
  height: 72px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.bb-svc-card.t1 .bb-svc-banner { background: linear-gradient(145deg, #09090f, #1e0a2e); }
.bb-svc-card.t2 .bb-svc-banner { background: linear-gradient(145deg, #0d1520, #1a2b3c); }
.bb-svc-card.t3 .bb-svc-banner { background: linear-gradient(145deg, #130610, #2a0a2a); }

.bb-svc-icon-ring {
  width: 46px;
  height: 46px;
  border-radius: 50%;
  border: 1px solid rgba(255,255,255,0.16);
  background: rgba(255,255,255,0.07);
  display: flex;
  align-items: center;
  justify-content: center;
}

.bb-svc-icon-ring svg {
  width: 22px;
  height: 22px;
  color: var(--color-accent);
}

.bb-svc-body {
  padding: var(--space-5);
  flex: 1;
  display: flex;
  flex-direction: column;
}

.bb-svc-body h3 {
  font-size: 0.9rem;
  font-weight: 800;
  color: var(--color-dark);
  margin-bottom: var(--space-2);
}

.bb-svc-body p {
  font-size: 0.8rem;
  color: var(--color-gray);
  line-height: 1.65;
  flex: 1;
  margin-bottom: var(--space-4);
}

.bb-svc-link {
  display: inline-flex;
  align-items: center;
  gap: 4px;
  font-size: 0.78rem;
  font-weight: 800;
  color: var(--color-secondary);
  text-decoration: none;
  transition: gap var(--transition-fast);
}

.bb-svc-link:hover {
  gap: 8px;
}

.bb-svc-link svg {
  width: 14px;
  height: 14px;
}

/* ── 5. FAQ SECTION — Technique 6 ── */
.bb-faq {
  padding: var(--space-16) 0;
  background: #f4f6f9;
}

.bb-faq-inner {
  max-width: 840px;
  margin: 0 auto;
}

.bb-faq-h2 {
  font-size: clamp(1.55rem, 2.7vw, 2.15rem);
  font-weight: 900;
  color: var(--color-dark);
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.02em;
  margin-bottom: var(--space-3);
}

.bb-faq-h2 em {
  color: var(--color-secondary);
  font-style: normal;
}

.bb-faq-sub {
  font-size: 0.92rem;
  color: var(--color-gray);
  margin-bottom: var(--space-10);
  line-height: 1.75;
}

.faq-list-sp {
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
}

/* FAQ accordion with neon magenta border on open + rotate icon */
.faq-item-sp {
  background: var(--color-white);
  border: 1px solid rgba(229,53,231,0.11);
  border-radius: var(--radius-lg);
  overflow: hidden;
  transition: border-color var(--transition-base), box-shadow var(--transition-base);
}

.faq-item-sp.open {
  border-color: rgba(229,53,231,0.36);
  box-shadow: 0 4px 20px rgba(229,53,231,0.09);
}

.faq-q-sp {
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
  color: var(--color-dark);
  transition: color var(--transition-fast);
  user-select: none;
}

.faq-q-sp:hover { color: var(--color-secondary); }
.faq-item-sp.open .faq-q-sp { color: var(--color-secondary); }

/* Rotate icon on open state */
.faq-icon-sp {
  flex-shrink: 0;
  width: 26px;
  height: 26px;
  border-radius: 50%;
  background: rgba(229,53,231,0.08);
  border: 1px solid rgba(229,53,231,0.18);
  display: flex;
  align-items: center;
  justify-content: center;
  transition: background var(--transition-base), transform var(--transition-base);
  font-size: 0.95rem;
  color: var(--color-secondary);
  font-weight: 900;
}

.faq-item-sp.open .faq-icon-sp {
  background: var(--color-secondary);
  color: var(--color-white);
  transform: rotate(45deg);
}

.faq-a-sp {
  display: none;
  padding: 0 var(--space-6) var(--space-5);
  font-size: 0.88rem;
  color: var(--color-gray);
  line-height: 1.82;
  border-top: 1px solid rgba(229,53,231,0.07);
  padding-top: var(--space-4);
}

.faq-item-sp.open .faq-a-sp { display: block; }

/* ── 6. RELATED AREAS SECTION ── */
.bb-areas {
  padding: var(--space-14) 0;
  background: var(--color-white);
}

.bb-areas-header {
  text-align: center;
  margin-bottom: var(--space-10);
}

.bb-areas-h2 {
  font-size: clamp(1.5rem, 2.5vw, 2rem);
  font-weight: 900;
  color: var(--color-dark);
  text-wrap: balance;
  letter-spacing: -0.02em;
  margin-bottom: var(--space-3);
}

.bb-areas-h2 em {
  color: var(--color-secondary);
  font-style: normal;
}

.bb-areas-sub {
  font-size: 0.9rem;
  color: var(--color-gray);
  line-height: 1.75;
}

.bb-areas-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
}

.bb-area-card {
  border-radius: var(--radius-lg);
  overflow: hidden;
  border: 1px solid rgba(229,53,231,0.1);
  background: #09090f;
  transition: transform var(--transition-base), box-shadow var(--transition-base);
  position: relative;
  text-decoration: none;
  display: flex;
  flex-direction: column;
}

/* Neon sweep hover on area cards */
.bb-area-card::after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  height: 2px;
  background: linear-gradient(90deg, var(--color-secondary), var(--color-accent));
  transform: scaleX(0);
  transform-origin: left center;
  transition: transform 0.35s ease;
}

.bb-area-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 14px 38px rgba(229,53,231,0.20), 0 4px 12px rgba(0,0,0,0.15);
}

.bb-area-card:hover::after {
  transform: scaleX(1);
}

.bb-area-card-top {
  padding: var(--space-6) var(--space-5) var(--space-4);
  background: linear-gradient(145deg, #09090f, #14082a);
  display: flex;
  align-items: center;
  gap: var(--space-3);
}

.bb-area-icon {
  width: 42px;
  height: 42px;
  border-radius: 50%;
  background: rgba(229,53,231,0.12);
  border: 1px solid rgba(229,53,231,0.22);
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
}

.bb-area-icon svg {
  width: 20px;
  height: 20px;
  color: var(--color-secondary);
}

.bb-area-card-name {
  font-family: var(--font-heading);
  font-size: 1rem;
  font-weight: 800;
  color: var(--color-white);
  line-height: 1.2;
}

.bb-area-card-county {
  font-size: 0.68rem;
  color: rgba(255,255,255,0.44);
  text-transform: uppercase;
  letter-spacing: 0.8px;
  margin-top: 2px;
}

.bb-area-card-body {
  padding: var(--space-4) var(--space-5) var(--space-5);
  flex: 1;
  display: flex;
  flex-direction: column;
}

.bb-area-card-body p {
  font-size: 0.8rem;
  color: rgba(255,255,255,0.5);
  line-height: 1.65;
  flex: 1;
  margin-bottom: var(--space-4);
}

.bb-area-link {
  display: inline-flex;
  align-items: center;
  gap: 5px;
  font-size: 0.78rem;
  font-weight: 800;
  color: var(--color-secondary);
  text-decoration: none;
  transition: gap var(--transition-fast);
}

.bb-area-link:hover { gap: 9px; }
.bb-area-link svg { width: 14px; height: 14px; }

/* ── 7. EMERGENCY CTA SECTION ── */
.bb-cta {
  padding: var(--space-16) 0;
  background: linear-gradient(140deg, #09090f 0%, #1e082e 55%, #0a1628 100%);
  position: relative;
  overflow: hidden;
  text-align: center;
}

.bb-cta::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 55% 80% at 18% 50%, rgba(229,53,231,0.14) 0%, transparent 60%),
    radial-gradient(ellipse 50% 70% at 82% 50%, rgba(249,183,62,0.10) 0%, transparent 60%);
  pointer-events: none;
}

.bb-cta-inner {
  position: relative;
  z-index: 1;
  max-width: 580px;
  margin: 0 auto;
}

.bb-cta h2 {
  font-size: clamp(1.5rem, 2.8vw, 2.2rem);
  font-weight: 900;
  color: var(--color-white);
  text-wrap: balance;
  margin-bottom: var(--space-3);
  letter-spacing: -0.02em;
}

.bb-cta h2 em {
  color: var(--color-accent);
  font-style: normal;
}

.bb-cta p {
  font-size: 0.95rem;
  color: rgba(255,255,255,0.58);
  max-width: 450px;
  margin: 0 auto var(--space-7);
  line-height: 1.75;
}

.bb-cta-btns {
  display: flex;
  gap: var(--space-3);
  justify-content: center;
  flex-wrap: wrap;
}

/* ── RESPONSIVE ── */
@media (max-width: 1024px) {
  .bb-hero-inner {
    grid-template-columns: 1fr;
  }
  .bb-hero-card {
    display: none;
  }
  .bb-local-grid {
    grid-template-columns: 1fr;
    gap: var(--space-10);
  }
}

@media (max-width: 900px) {
  .bb-svc-grid {
    grid-template-columns: repeat(2, 1fr);
  }
  .bb-areas-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 600px) {
  .bb-svc-grid {
    grid-template-columns: 1fr;
  }
  .bb-areas-grid {
    grid-template-columns: 1fr;
  }
  .bb-stat-row {
    gap: var(--space-3);
  }
}

@media (max-width: 480px) {
  .bb-stat-number {
    font-size: 1.65rem;
  }
}
</style>

<!-- ═══ HERO ═══ -->
<section class="bb-hero" aria-label="Bail bonds in Boynton Beach FL">
  <div class="bb-orb bb-orb-1"></div>
  <div class="bb-orb bb-orb-2"></div>
  <div class="bb-orb bb-orb-3"></div>

  <div class="container">
    <div class="bb-hero-inner">

      <!-- Left content -->
      <div class="bb-hero-left">
        <span class="bb-eyebrow">
          <span class="pulse-dot"></span>
          <span class="bb-eyebrow-text">24/7 Coverage — Boynton Beach, FL</span>
        </span>

        <h1>Bail Bonds Near Me in <span class="hl-gold">Boynton Beach, FL</span> — <span class="hl-mag">24/7</span> Licensed Bondsman, Fast Release</h1>

        <p class="bb-hero-answer">Mad Extra Bail Bonds is a licensed Florida bail bondsman based in Delray Beach, serving Boynton Beach and all of Palm Beach County around the clock. When someone you care about is arrested in Boynton Beach, every hour they spend in jail matters — we move immediately, day or night, so you don't have to wait until morning to get started.</p>

        <div class="bb-hero-btns">
          <?php if (!empty($phone)): ?>
          <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>" class="btn-bb-primary">
            <?php echo lucide_icon('phone'); ?> Call Now — 24/7
          </a>
          <?php else: ?>
          <a href="/contact/" class="btn-bb-primary">
            <?php echo lucide_icon('zap'); ?> Get Help Now
          </a>
          <?php endif; ?>
          <a href="/contact/" class="btn-bb-secondary">Free Consultation</a>
        </div>

        <div class="bb-trust-row">
          <span class="bb-trust-badge"><?php echo lucide_icon('shield-check'); ?> Licensed FL Bondsman</span>
          <span class="bb-trust-badge"><?php echo lucide_icon('clock'); ?> 24/7 Available</span>
          <span class="bb-trust-badge"><?php echo lucide_icon('zap'); ?> Fast Release</span>
          <span class="bb-trust-badge"><?php echo lucide_icon('map-pin'); ?> Palm Beach County</span>
        </div>
      </div>

      <!-- Glassmorphism sidebar card — Technique 4 -->
      <div class="bb-hero-card">
        <p class="bbc-title">Boynton Beach Arrest? Call Now.</p>
        <p class="bbc-note">We answer every call — 24 hours a day</p>
        <ul class="bbc-list">
          <li><span class="bbc-check">✓</span> Licensed FL bail bondsman, 11+ years</li>
          <li><span class="bbc-check">✓</span> Palm Beach County Jail covered</li>
          <li><span class="bbc-check">✓</span> 10% FL legal premium rate</li>
          <li><span class="bbc-check">✓</span> Paperwork starts within 15 minutes</li>
          <li><span class="bbc-check">✓</span> Out-of-state families welcome to call</li>
          <li><span class="bbc-check">✓</span> Available 365 days a year</li>
        </ul>
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>" class="bbc-cta">
          <?php echo lucide_icon('phone'); ?> Call Now
        </a>
        <?php else: ?>
        <a href="/contact/" class="bbc-cta">Get Help Now</a>
        <?php endif; ?>
        <p class="bbc-disclaimer">Available 24 hours a day, 7 days a week, including holidays</p>
      </div>

    </div>
  </div>
</section>

<!-- ═══ SVG DIVIDER 1: dark → light (rolling wave shape) — Technique 5 ═══ -->
<div class="bb-divider-dark-to-light" aria-hidden="true">
  <svg viewBox="0 0 1440 58" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,58 L0,18 C180,52 360,0 540,24 C720,48 900,4 1080,28 C1260,52 1380,18 1440,28 L1440,58 Z" fill="#f4f6f9"/>
  </svg>
</div>

<!-- ═══ SECTION 2: AEO INTRO — light bg ═══ -->
<section class="bb-intro" aria-label="How bail bonds work in Boynton Beach">
  <div class="container">
    <div class="bb-intro-inner">
      <span class="sp-section-eyebrow">How It Works</span>
      <h2 class="bb-intro-h2">How does the bail bond process work after a <em>Boynton Beach</em> arrest?</h2>

      <!-- AEO answer block — identity sentence within first 150 words -->
      <div class="answer-block">
        <p>Mad Extra Bail Bonds is a licensed Florida bail bondsman based in Delray Beach, serving Boynton Beach and all of Palm Beach County. When Boynton Beach Police Department makes an arrest, the defendant is typically processed locally at BBPD's facility at 100 E Boynton Beach Blvd before being transported to Palm Beach County Jail in West Palm Beach. Call us the moment you learn of an arrest and we will begin the process immediately — no waiting until morning.</p>
      </div>

      <p>The Boynton Beach area runs a wide range of arrest situations — from DUI stops along Congress Avenue and Golf Road, to domestic disputes in residential communities like Leisureville and Lake Boynton Estates, to traffic warrant issues near Quantum Park and the Boynton Beach Mall. Whatever the circumstance, the booking process at BBPD is generally the same: the defendant is photographed, fingerprinted, and held until either a judge sets bail at first appearance or a bond schedule amount applies.</p>

      <p>Once bail is set, the 10% Florida premium applies to your bond total. On a $5,000 bond, your cost is $500. We accept multiple payment methods and can work with co-signers regardless of whether they are in Boynton Beach or calling from out of state. Families living near Hunters Run Country Club, Sky Lake, or anywhere in Boynton Beach proper deal with the same Palm Beach County court system — and we know it well.</p>

      <p>After we post the bond at Palm Beach County Jail, processing toward release begins. Most defendants are out within 2 to 8 hours of bond posting, depending on facility volume. We stay in contact until your loved one walks out the door. We also remind defendants of their upcoming court dates at the South County Courthouse in Delray Beach — missing a court date leads to bond forfeiture and a new warrant.</p>
    </div>
  </div>
</section>

<!-- ═══ SVG DIVIDER 2: light → dark (asymmetric peak shape) — Technique 5 ═══ -->
<div class="bb-divider-light-to-dark" aria-hidden="true">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,0 L0,35 C240,60 480,10 720,42 C960,60 1200,20 1440,48 L1440,60 L0,60 Z" fill="#09090f"/>
  </svg>
</div>

<!-- ═══ SECTION 3: LOCAL COVERAGE — dark gradient — Technique 9 ═══ -->
<section class="bb-local" aria-label="Boynton Beach jail and local coverage details">
  <!-- Technique 9: Decorative neon orb right-center -->
  <div class="bb-local-orb"></div>
  <div class="bb-local-orb-accent"></div>

  <div class="container">
    <div class="bb-local-inner">
      <div class="bb-local-grid">

        <!-- Left: content and process steps -->
        <div>
          <span class="process-eyebrow-sp"><?php echo lucide_icon('map-pin'); ?> Local Coverage</span>
          <h2 class="bb-local-h2">Which jail holds <em>Boynton Beach</em> arrestees and how fast can Mad Extra get them released?</h2>

          <div class="answer-block-dark">
            <p>Both BBPD and the Palm Beach Sheriff's Office book Boynton Beach arrestees to Palm Beach County Jail at 3228 Gun Club Road, West Palm Beach — approximately 20 miles north of Boynton Beach. We can begin paperwork within 15 minutes of your call and have the bond ready to post the moment bail is set.</p>
          </div>

          <p>BBPD handles initial processing at 100 E Boynton Beach Blvd before transport. Depending on the charge and time of day, a first-appearance hearing (where bail is formally set by a judge) may happen within 24 hours. For many charges, a bond schedule allows us to post bond before first appearance, which shortens time in custody significantly.</p>

          <p>Common arrest situations in Boynton Beach include DUI stops along the Golf Road and Congress Avenue corridors, disputes near Bethesda Hospital East on Seacrest Boulevard, trespassing or theft incidents at Boynton Beach Mall, and warrant pickups tied to Boynton Beach High School-area incidents. We have handled all of these scenarios and know how quickly each type of charge typically moves through the Palm Beach County system.</p>

          <!-- Stat blocks -->
          <div class="bb-stat-row">
            <div class="bb-stat-block">
              <span class="bb-stat-number">~20 mi</span>
              <span class="bb-stat-label">to Palm Beach County Jail</span>
            </div>
            <div class="bb-stat-block">
              <span class="bb-stat-number">24/7</span>
              <span class="bb-stat-label">Coverage in Boynton Beach</span>
            </div>
            <div class="bb-stat-block">
              <span class="bb-stat-number">15 min</span>
              <span class="bb-stat-label">to start paperwork</span>
            </div>
          </div>

          <!-- Process steps -->
          <div class="bb-process-steps">
            <div class="bb-process-step">
              <div class="bb-step-num">1</div>
              <div class="bb-step-content">
                <h4>Call as Soon as the Arrest Happens</h4>
                <p>Don't wait for booking to finish. Call us immediately — we start gathering information and pulling the booking file while processing is underway at BBPD.</p>
              </div>
            </div>
            <div class="bb-process-step">
              <div class="bb-step-num">2</div>
              <div class="bb-step-content">
                <h4>We Confirm the Bond Amount</h4>
                <p>Once bail is set — either by bond schedule or first-appearance judge — we confirm the exact figure and collect the 10% Florida premium from you or your co-signer.</p>
              </div>
            </div>
            <div class="bb-process-step">
              <div class="bb-step-num">3</div>
              <div class="bb-step-content">
                <h4>Bond Posted at Palm Beach County Jail</h4>
                <p>We post the bond directly at the Palm Beach County Jail facility. Release processing begins immediately — typically 2 to 8 hours depending on facility volume.</p>
              </div>
            </div>
            <div class="bb-process-step">
              <div class="bb-step-num">4</div>
              <div class="bb-step-content">
                <h4>Court Date Reminders &amp; Follow-Up</h4>
                <p>We stay in contact and remind defendants of South County Courthouse appearances. Missing a date leads to bond forfeiture and a new Boynton Beach arrest warrant.</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Right: sidebar card with facts -->
        <div class="bb-local-sidebar">
          <div class="bb-side-card">
            <p class="bb-side-card-title">Boynton Beach Bail Facts</p>
            <div class="bb-facts">
              <div class="bb-fact">
                <?php echo lucide_icon('landmark'); ?>
                <div class="bb-fact-text">
                  <strong>Palm Beach County Jail</strong>
                  <span>3228 Gun Club Rd, West Palm Beach — primary booking facility for all Boynton Beach arrests</span>
                </div>
              </div>
              <div class="bb-fact">
                <?php echo lucide_icon('building-2'); ?>
                <div class="bb-fact-text">
                  <strong>Boynton Beach Police Department</strong>
                  <span>100 E Boynton Beach Blvd — local processing before PBCJ transport</span>
                </div>
              </div>
              <div class="bb-fact">
                <?php echo lucide_icon('scale'); ?>
                <div class="bb-fact-text">
                  <strong>South County Courthouse</strong>
                  <span>200 W Atlantic Ave, Delray Beach — handles many Boynton Beach criminal cases</span>
                </div>
              </div>
              <div class="bb-fact">
                <?php echo lucide_icon('percent'); ?>
                <div class="bb-fact-text">
                  <strong>Florida Bond Premium Rate</strong>
                  <span>10% of the bond amount — set by FL law, non-negotiable. $5,000 bond = $500 premium.</span>
                </div>
              </div>
              <div class="bb-fact">
                <?php echo lucide_icon('clock'); ?>
                <div class="bb-fact-text">
                  <strong>Typical Release Timeline</strong>
                  <span>2 to 8 hours after bond is posted, depending on PBCJ processing volume</span>
                </div>
              </div>
            </div>
            <?php if (!empty($phone)): ?>
            <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>" class="bb-side-cta">
              <?php echo lucide_icon('phone'); ?> Call Now — 24/7
            </a>
            <?php else: ?>
            <a href="/contact/" class="bb-side-cta">Get Emergency Help Now</a>
            <?php endif; ?>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- ═══ SVG DIVIDER 3: dark → white (staggered S-curve shape) — Technique 5 ═══ -->
<div class="bb-divider-dark-to-white" aria-hidden="true">
  <svg viewBox="0 0 1440 62" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,0 Q200,62 480,32 Q760,0 1000,48 Q1240,62 1440,18 L1440,62 L0,62 Z" fill="#ffffff"/>
  </svg>
</div>

<!-- ═══ SECTION 4: SERVICES GRID — white ═══ -->
<section class="bb-services" aria-label="Bail bond services available in Boynton Beach">
  <div class="container">
    <div class="bb-services-header">
      <span class="sp-section-eyebrow">What We Do</span>
      <h2 class="bb-services-h2">What bail bond services does <em>Mad Extra</em> offer in Boynton Beach?</h2>
      <p class="bb-services-lead">Every charge type, every situation — available 24 hours a day across all of Palm Beach County.</p>
    </div>

    <div class="bb-svc-grid">
      <?php
      $tints = ['t1', 't2', 't3'];
      foreach ($services as $i => $svc):
        $tint = $tints[$i % 3];
      ?>
      <article class="bb-svc-card <?php echo $tint; ?>">
        <div class="bb-svc-banner">
          <div class="bb-svc-icon-ring">
            <?php echo lucide_icon($svc['icon']); ?>
          </div>
        </div>
        <div class="bb-svc-body">
          <h3><?php echo htmlspecialchars($svc['name']); ?></h3>
          <p><?php echo htmlspecialchars($svc['description']); ?></p>
          <a href="/services/<?php echo htmlspecialchars($svc['slug']); ?>/" class="bb-svc-link">
            Learn more <?php echo lucide_icon('arrow-right'); ?>
          </a>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══ SVG DIVIDER: white → light ═══ -->
<div class="bb-divider-white-to-light" aria-hidden="true">
  <svg viewBox="0 0 1440 44" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,22 Q360,44 720,12 Q1080,-8 1440,28 L1440,44 L0,44 Z" fill="#f4f6f9"/>
  </svg>
</div>

<!-- ═══ SECTION 5: FAQ — Technique 6 ═══ -->
<section class="bb-faq" aria-label="Boynton Beach bail bond FAQs">
  <div class="container">
    <div class="bb-faq-inner">
      <span class="sp-section-eyebrow">Common Questions</span>
      <h2 class="bb-faq-h2">Frequently asked questions about <em>bail bonds in Boynton Beach, FL</em></h2>
      <p class="bb-faq-sub">Direct answers to what Boynton Beach families ask most when a loved one is arrested.</p>

      <div class="faq-list-sp" role="list">

        <div class="faq-item-sp" role="listitem">
          <button class="faq-q-sp" aria-expanded="false" onclick="toggleFaq(this)">
            <?php echo htmlspecialchars($_faqs[0]['q']); ?>
            <span class="faq-icon-sp" aria-hidden="true">+</span>
          </button>
          <div class="faq-a-sp" role="region">
            <p><?php echo htmlspecialchars($_faqs[0]['a']); ?></p>
          </div>
        </div>

        <div class="faq-item-sp" role="listitem">
          <button class="faq-q-sp" aria-expanded="false" onclick="toggleFaq(this)">
            <?php echo htmlspecialchars($_faqs[1]['q']); ?>
            <span class="faq-icon-sp" aria-hidden="true">+</span>
          </button>
          <div class="faq-a-sp" role="region">
            <p><?php echo htmlspecialchars($_faqs[1]['a']); ?></p>
          </div>
        </div>

        <div class="faq-item-sp" role="listitem">
          <button class="faq-q-sp" aria-expanded="false" onclick="toggleFaq(this)">
            <?php echo htmlspecialchars($_faqs[2]['q']); ?>
            <span class="faq-icon-sp" aria-hidden="true">+</span>
          </button>
          <div class="faq-a-sp" role="region">
            <p><?php echo htmlspecialchars($_faqs[2]['a']); ?></p>
          </div>
        </div>

        <div class="faq-item-sp" role="listitem">
          <button class="faq-q-sp" aria-expanded="false" onclick="toggleFaq(this)">
            <?php echo htmlspecialchars($_faqs[3]['q']); ?>
            <span class="faq-icon-sp" aria-hidden="true">+</span>
          </button>
          <div class="faq-a-sp" role="region">
            <p><?php echo htmlspecialchars($_faqs[3]['a']); ?></p>
          </div>
        </div>

        <div class="faq-item-sp" role="listitem">
          <button class="faq-q-sp" aria-expanded="false" onclick="toggleFaq(this)">
            <?php echo htmlspecialchars($_faqs[4]['q']); ?>
            <span class="faq-icon-sp" aria-hidden="true">+</span>
          </button>
          <div class="faq-a-sp" role="region">
            <p><?php echo htmlspecialchars($_faqs[4]['a']); ?></p>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- ═══ SECTION 6: RELATED AREAS ═══ -->
<section class="bb-areas" aria-label="Other Palm Beach County service areas">
  <div class="container">
    <div class="bb-areas-header">
      <span class="sp-section-eyebrow">Service Areas</span>
      <h2 class="bb-areas-h2">Serving All of Palm Beach County — <em>Not Just Boynton Beach</em></h2>
      <p class="bb-areas-sub">Mad Extra Bail Bonds covers every city in Palm Beach County and beyond. Neighboring communities we serve include:</p>
    </div>

    <div class="bb-areas-grid">

      <a href="/areas/boca-raton/" class="bb-area-card">
        <div class="bb-area-card-top">
          <div class="bb-area-icon">
            <?php echo lucide_icon('map-pin'); ?>
          </div>
          <div>
            <div class="bb-area-card-name">Boca Raton</div>
            <div class="bb-area-card-county">Palm Beach County</div>
          </div>
        </div>
        <div class="bb-area-card-body">
          <p>Bail bonds for Boca Raton arrests — Boca Raton Police and Palm Beach County Sheriff arrests all booked to PBCJ. Fast response 24/7.</p>
          <span class="bb-area-link">View coverage <?php echo lucide_icon('arrow-right'); ?></span>
        </div>
      </a>

      <a href="/areas/delray-beach/" class="bb-area-card">
        <div class="bb-area-card-top">
          <div class="bb-area-icon">
            <?php echo lucide_icon('map-pin'); ?>
          </div>
          <div>
            <div class="bb-area-card-name">Delray Beach</div>
            <div class="bb-area-card-county">Palm Beach County</div>
          </div>
        </div>
        <div class="bb-area-card-body">
          <p>Our home base. We know Delray Beach Police Department and the South County Courthouse system inside out — fast bail bond service for all charges.</p>
          <span class="bb-area-link">View coverage <?php echo lucide_icon('arrow-right'); ?></span>
        </div>
      </a>

      <a href="/areas/west-palm-beach/" class="bb-area-card">
        <div class="bb-area-card-top">
          <div class="bb-area-icon">
            <?php echo lucide_icon('map-pin'); ?>
          </div>
          <div>
            <div class="bb-area-card-name">West Palm Beach</div>
            <div class="bb-area-card-county">Palm Beach County</div>
          </div>
        </div>
        <div class="bb-area-card-body">
          <p>West Palm Beach is home to Palm Beach County Jail at Gun Club Road — we post bonds here daily for arrestees from across the county.</p>
          <span class="bb-area-link">View coverage <?php echo lucide_icon('arrow-right'); ?></span>
        </div>
      </a>

    </div>
  </div>
</section>

<!-- ═══ SECTION 7: EMERGENCY CTA ═══ -->
<section class="bb-cta" aria-label="Emergency bail bond contact">
  <div class="bb-cta-inner">
    <span class="sp-section-eyebrow" style="display:inline-block;margin-bottom:var(--space-4);">Get Help Now</span>
    <h2>Need a bail bondsman in <em>Boynton Beach</em> right now?</h2>
    <p>Every hour your loved one spends in Palm Beach County Jail is an hour too long. Call immediately — we answer every call, 24 hours a day, and we start working the moment you reach us.</p>
    <div class="bb-cta-btns">
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>" class="btn-bb-primary">
        <?php echo lucide_icon('phone'); ?> Call Now — 24/7
      </a>
      <?php endif; ?>
      <a href="/contact/" class="btn-bb-secondary">Send a Message</a>
    </div>
  </div>
</section>

<script>
function toggleFaq(btn) {
  const item = btn.closest('.faq-item-sp');
  const isOpen = item.classList.contains('open');
  document.querySelectorAll('.faq-item-sp.open').forEach(el => el.classList.remove('open'));
  document.querySelectorAll('.faq-q-sp').forEach(el => el.setAttribute('aria-expanded', 'false'));
  if (!isOpen) {
    item.classList.add('open');
    btn.setAttribute('aria-expanded', 'true');
  }
}
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
