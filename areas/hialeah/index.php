<?php
/**
 * areas/hialeah/index.php — Hialeah Service Area Page
 * Mad Extra Bail Bonds | Page One Insights v6.1
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Bail Bonds Near Me in Hialeah FL | Mad Extra Bail Bonds | Bilingual 24/7';
$pageDescription = 'Need bail bonds in Hialeah, FL? Mad Extra Bail Bonds provides bilingual bail bond service in Hialeah 24/7. Licensed FL bondsman — fast release from TGK and Miami-Dade Jail.';
$canonicalUrl    = $siteUrl . '/areas/hialeah/';
$currentPage     = 'areas';

$_breadcrumb = generateBreadcrumbSchema([
    ['name' => 'Home',         'url' => $siteUrl . '/'],
    ['name' => 'Service Areas','url' => $siteUrl . '/areas/'],
    ['name' => 'Hialeah',      'url' => $siteUrl . '/areas/hialeah/'],
]);

$_serviceSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'Service',
    '@id'         => $siteUrl . '/areas/hialeah/#service-hialeah',
    'name'        => 'Bail Bonds in Hialeah, FL',
    'description' => 'Fully bilingual (English/Spanish) licensed Florida bail bondsman serving Hialeah and Miami-Dade County. Fast release from Turner Guilford Knight (TGK) and Miami-Dade Main Jail, 24/7.',
    'url'         => $siteUrl . '/areas/hialeah/',
    'provider'    => ['@id' => $siteUrl . '/#organization'],
    'areaServed'  => [
        ['@type' => 'City',   'name' => 'Hialeah, FL'],
        ['@type' => 'County', 'name' => 'Miami-Dade County, FL'],
    ],
    'serviceType' => 'Bail Bond Services',
];

$_faqs = [
    [
        'q' => '¿Dónde va alguien arrestado en Hialeah? / Where does someone arrested in Hialeah go to jail?',
        'a' => 'Las personas arrestadas en Hialeah generalmente son procesadas en el Departamento de Policía de Hialeah y luego trasladadas a Turner Guilford Knight (TGK) en 7000 NW 41st St en Miami. Hialeah arrests are typically processed at the Hialeah Police Department headquarters and then transported to Turner Guilford Knight Correctional Center (TGK) at 7000 NW 41st St in Miami. In some cases, depending on charge severity and facility population, detainees may be transported to the Miami-Dade Main Jail at 1351 NW 12th St. We know TGK\'s booking procedures in detail and can begin the release process the moment you call us.',
    ],
    [
        'q' => 'Does Mad Extra Bail Bonds provide Spanish-language bail bond service in Hialeah?',
        'a' => 'Yes — completely. We are fully bilingual in English and Spanish, and we serve Hialeah\'s predominantly Spanish-speaking community every hour of the day. When you call about a Hialeah arrest, you will speak with someone who can communicate clearly in Spanish from start to finish — explaining the bond amount, the premium, the paperwork, and the expected release timeline — without language being an additional source of stress during an already difficult situation.',
    ],
    [
        'q' => '¿Cuál es el proceso de fianza en Hialeah, FL — paso a paso? / What is the bail bond process in Hialeah, FL?',
        'a' => 'The bail bond process in Hialeah follows five steps. Step 1: Call us immediately after the arrest — we locate the booking in the Hialeah Police Department or TGK system right away. Step 2: We confirm the bond amount set by the court and explain what the 10% Florida premium will be. Step 3: You provide the premium payment and sign the required paperwork. Step 4: We post the bond at TGK or the Miami-Dade Main Jail. Step 5: Release processing begins immediately — Hialeah misdemeanor releases from TGK typically complete within 6 to 12 hours of posting.',
    ],
    [
        'q' => 'Is there a courthouse in Hialeah for criminal hearings after an arrest?',
        'a' => 'Hialeah does not have its own dedicated criminal courthouse. Criminal cases from Hialeah are heard at the Miami-Dade County Courthouse in downtown Miami (73 W Flagler St) or at a Miami-Dade Regional Justice Center, depending on the charge type. First appearance hearings may be conducted via video from TGK. We can advise families on where and when court dates are scheduled after the immediate bail situation is resolved — and we remain a resource through the process, not just at the bond posting step.',
    ],
    [
        'q' => 'What charges generate the most bail bond situations in Hialeah, FL?',
        'a' => 'Based on our 11+ years handling Hialeah bail bonds, the most frequent charge types we see are: DUI arrests along W 49th St and Okeechobee Road (Hialeah\'s two busiest commercial corridors), drug possession charges, domestic battery, and arrests on active warrants. Retail theft from the Westland Mall area on W 49th St is also a consistent source of misdemeanor bond situations. Hialeah\'s density and high-traffic commercial areas generate substantial arrest volumes — we handle Hialeah bond requests regularly and know the HPD and TGK processes well.',
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
   HIALEAH AREA PAGE — Mad Extra Bail Bonds
   Premium Tier | Dark/Neon Design System
   Techniques:
   (1) Layered ::before radial-gradient blobs on hero — 3 blobs
   (2) Noise texture ::after on hero
   (3) Floating neon orbs with CSS keyframe drift animation
   (4) Glassmorphism hero sidebar card (backdrop-filter blur)
   (5) 3+ unique SVG dividers — double-wave, sharp-angle, compound-curve
   (6) FAQ accordion with magenta left-border + icon 45deg rotation
   (7) Service cards with neon scaleX bottom-border on hover
   (8) Gradient text on stat numbers (background-clip technique)
   (9) Decorative dual neon blobs in dark coverage section
   (10) Bilingual section header treatment with split-language eyebrow
   ============================================================ */

/* ── 1. HERO ── */
.hia-hero {
  position: relative;
  min-height: 62vh;
  display: flex;
  align-items: center;
  background: #09090f;
  overflow: hidden;
  padding-top: var(--nav-height, 72px);
  padding-bottom: var(--space-12);
}

/* Technique 1: layered ::before radial-gradient blobs */
.hia-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 58% 78% at 3% 58%, rgba(229,53,231,0.17) 0%, transparent 54%),
    radial-gradient(ellipse 50% 60% at 96% 12%, rgba(249,183,62,0.19) 0%, transparent 52%),
    radial-gradient(ellipse 38% 55% at 50% 100%, rgba(229,53,231,0.10) 0%, transparent 60%),
    radial-gradient(ellipse 65% 38% at 50% 110%, rgba(9,9,15,0.97) 0%, transparent 76%);
  pointer-events: none;
  z-index: 0;
}

/* Technique 2: SVG noise texture overlay */
.hia-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.88' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.038'/%3E%3C/svg%3E");
  opacity: 0.52;
  pointer-events: none;
  z-index: 0;
}

/* Technique 3: floating neon orbs */
.hia-orb {
  position: absolute;
  border-radius: 50%;
  pointer-events: none;
  will-change: transform;
  z-index: 1;
}
.hia-orb-1 {
  width: 580px; height: 580px;
  top: -200px; right: -70px;
  background: radial-gradient(circle, rgba(249,183,62,0.14) 0%, transparent 64%);
  animation: hia-drift 19s ease-in-out infinite;
}
.hia-orb-2 {
  width: 330px; height: 330px;
  bottom: -90px; left: 6%;
  background: radial-gradient(circle, rgba(229,53,231,0.13) 0%, transparent 64%);
  animation: hia-drift 23s ease-in-out infinite reverse;
  animation-delay: -10s;
}
.hia-orb-3 {
  width: 190px; height: 190px;
  top: 28%; left: 40%;
  background: radial-gradient(circle, rgba(249,183,62,0.07) 0%, transparent 70%);
  animation: hia-drift 27s ease-in-out infinite;
  animation-delay: -15s;
}
@keyframes hia-drift {
  0%,100% { transform: translate(0,0) scale(1); }
  34%     { transform: translate(-15px, 24px) scale(1.06); }
  67%     { transform: translate(13px, -15px) scale(0.94); }
}

.hia-hero-inner {
  position: relative;
  z-index: 2;
  display: grid;
  grid-template-columns: 1fr 400px;
  gap: var(--space-12);
  align-items: center;
  padding: var(--space-14) 0;
  width: 100%;
}
.hia-hero-left { max-width: 660px; }

/* Technique 10: bilingual split-language eyebrow */
.hia-bilingual-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: 0;
  margin-bottom: var(--space-4);
  border-radius: var(--radius-full);
  overflow: hidden;
  border: 1px solid rgba(229,53,231,0.35);
  font-family: var(--font-heading);
  font-size: 0.64rem;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 2px;
}
.hia-bilingual-eyebrow .hia-lang-es {
  background: rgba(229,53,231,0.14);
  color: var(--color-secondary);
  padding: 5px 14px;
}
.hia-bilingual-eyebrow .hia-lang-divider {
  width: 1px;
  height: 100%;
  background: rgba(229,53,231,0.35);
}
.hia-bilingual-eyebrow .hia-lang-en {
  background: rgba(249,183,62,0.10);
  color: var(--color-accent);
  padding: 5px 14px;
}

.hia-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  font-family: var(--font-heading);
  font-size: 0.68rem;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 2.5px;
  color: var(--color-accent);
  padding: 6px 16px;
  border: 1px solid rgba(249,183,62,0.38);
  border-radius: var(--radius-full);
  background: rgba(249,183,62,0.07);
  margin-bottom: var(--space-5);
}
.hia-pulse {
  width: 7px; height: 7px;
  border-radius: 50%;
  background: var(--color-accent);
  box-shadow: 0 0 8px var(--color-accent);
  animation: hia-pulse 2s ease-in-out infinite;
  flex-shrink: 0;
}
@keyframes hia-pulse {
  0%,100% { opacity:1; transform:scale(1); }
  50%     { opacity:.48; transform:scale(.68); }
}

.hia-hero h1 {
  font-size: clamp(1.75rem, 3.6vw, 2.9rem);
  font-weight: 900;
  color: var(--color-white);
  line-height: 1.1;
  margin-bottom: var(--space-5);
  letter-spacing: -0.025em;
  text-wrap: balance;
}
.hia-hero h1 .hl-gold { color: var(--color-accent); text-shadow: 0 0 28px rgba(249,183,62,0.52); }
.hia-hero h1 .hl-mag  { color: var(--color-secondary); text-shadow: 0 0 28px rgba(229,53,231,0.52); }

.hia-hero-answer {
  font-size: 1rem;
  color: rgba(255,255,255,0.68);
  line-height: 1.82;
  margin-bottom: var(--space-7);
  max-width: 580px;
}

.hia-hero-btns {
  display: flex;
  gap: var(--space-3);
  flex-wrap: wrap;
  margin-bottom: var(--space-7);
}
.btn-hia-primary {
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
  box-shadow: 0 0 26px rgba(229,53,231,0.45), 0 4px 14px rgba(0,0,0,0.3);
  transition: all var(--transition-base);
}
.btn-hia-primary:hover {
  background: #f040f2;
  box-shadow: 0 0 48px rgba(229,53,231,0.70), 0 8px 22px rgba(0,0,0,0.35);
  transform: translateY(-2px);
  color: var(--color-white);
}
.btn-hia-primary svg { width: 15px; height: 15px; }
.btn-hia-secondary {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 12px 24px;
  background: transparent;
  color: var(--color-accent);
  border: 2px solid rgba(249,183,62,0.52);
  font-family: var(--font-heading);
  font-size: 0.82rem;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  border-radius: var(--radius-md);
  text-decoration: none;
  transition: all var(--transition-base);
}
.btn-hia-secondary:hover {
  background: var(--color-accent);
  color: #0a0d1a;
  border-color: var(--color-accent);
  box-shadow: 0 0 28px rgba(249,183,62,0.42);
  transform: translateY(-2px);
}
.btn-hia-secondary svg { width: 15px; height: 15px; }

.hia-trust-row {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-2);
}
.hia-trust-badge {
  display: inline-flex;
  align-items: center;
  gap: 5px;
  font-size: 0.67rem;
  font-weight: 700;
  color: rgba(255,255,255,0.72);
  padding: 4px 11px;
  border-radius: var(--radius-full);
  background: rgba(255,255,255,0.055);
  border: 1px solid rgba(255,255,255,0.10);
  text-transform: uppercase;
  letter-spacing: 0.5px;
  white-space: nowrap;
}
.hia-trust-badge svg { width: 11px; height: 11px; color: var(--color-secondary); flex-shrink: 0; }

/* Technique 4: glassmorphism hero sidebar card */
.hia-hero-card {
  position: relative;
  background: rgba(255,255,255,0.04);
  border: 1px solid rgba(255,255,255,0.11);
  border-radius: 18px;
  padding: var(--space-7) var(--space-6);
  backdrop-filter: blur(14px);
  -webkit-backdrop-filter: blur(14px);
}
.hia-hero-card::before {
  content: '';
  position: absolute;
  inset: -1px;
  border-radius: 19px;
  background: linear-gradient(135deg, rgba(249,183,62,0.30) 0%, rgba(229,53,231,0.20) 60%, transparent 100%);
  z-index: -1;
  opacity: 0.48;
}
.hia-card-title {
  font-family: var(--font-heading);
  font-size: 0.7rem;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 2px;
  color: var(--color-secondary);
  margin-bottom: var(--space-1);
}
.hia-card-headline {
  font-family: var(--font-heading);
  font-size: 1.08rem;
  font-weight: 900;
  color: var(--color-white);
  margin-bottom: var(--space-5);
  line-height: 1.25;
}
.hia-card-list {
  list-style: none;
  padding: 0;
  margin: 0 0 var(--space-6);
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
}
.hia-card-list li {
  display: flex;
  align-items: flex-start;
  gap: var(--space-2);
  font-size: 0.85rem;
  color: rgba(255,255,255,0.80);
  line-height: 1.5;
}
.hia-check {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  width: 18px; height: 18px;
  border-radius: 50%;
  background: linear-gradient(135deg, var(--color-accent), #e89a25);
  margin-top: 2px;
  font-size: 0.6rem;
  color: #0a0d1a;
  font-weight: 900;
}
.hia-card-cta {
  display: block;
  width: 100%;
  padding: 13px;
  background: linear-gradient(135deg, var(--color-secondary) 0%, #a818a9 100%);
  color: var(--color-white);
  font-family: var(--font-heading);
  font-size: 0.82rem;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  border-radius: var(--radius-md);
  text-decoration: none;
  text-align: center;
  box-shadow: 0 4px 22px rgba(229,53,231,0.40);
  transition: all var(--transition-base);
}
.hia-card-cta:hover {
  box-shadow: 0 8px 38px rgba(229,53,231,0.62);
  transform: translateY(-1px);
  color: var(--color-white);
}
.hia-card-disclaimer {
  text-align: center;
  font-size: 0.6rem;
  color: rgba(255,255,255,0.28);
  margin-top: var(--space-3);
  line-height: 1.5;
}

/* ── DIVIDERS ── */
/* Technique 5: 3 unique SVG shapes */
.hia-div-dk-lt { line-height: 0; background: #09090f; }
.hia-div-dk-lt svg { display: block; width: 100%; }
.hia-div-lt-dk { line-height: 0; background: #f4f6f9; }
.hia-div-lt-dk svg { display: block; width: 100%; }
.hia-div-dk-wh { line-height: 0; background: #09090f; }
.hia-div-dk-wh svg { display: block; width: 100%; }
.hia-div-wh-lt { line-height: 0; background: #ffffff; }
.hia-div-wh-lt svg { display: block; width: 100%; }

/* ── INTRO / ANSWER (light) ── */
.hia-intro {
  padding: var(--space-16) 0;
  background: #f4f6f9;
}
.hia-intro-inner {
  max-width: 880px;
  margin: 0 auto;
}
.hia-section-eyebrow {
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
.hia-section-eyebrow svg { width: 12px; height: 12px; }
.hia-intro h2 {
  font-size: clamp(1.7rem, 3vw, 2.5rem);
  font-weight: 900;
  color: var(--color-dark);
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.02em;
  margin-bottom: var(--space-4);
}
.hia-intro h2 em { color: var(--color-secondary); font-style: normal; }
.hia-answer-block {
  background: linear-gradient(135deg, rgba(229,53,231,0.07), rgba(249,183,62,0.04));
  border-left: 3px solid var(--color-secondary);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  padding: var(--space-5) var(--space-6);
  margin-bottom: var(--space-6);
}
.hia-answer-block p {
  font-size: 0.95rem;
  color: var(--color-dark);
  line-height: 1.8;
  margin: 0;
  font-style: italic;
}
.hia-intro p {
  font-size: 0.95rem;
  color: var(--color-gray);
  line-height: 1.82;
  margin-bottom: var(--space-4);
}

/* ── LOCAL COVERAGE (dark) ── */
.hia-coverage {
  padding: var(--space-16) 0;
  background: linear-gradient(148deg, #09090f 0%, #110630 48%, #0a1528 100%);
  position: relative;
  overflow: hidden;
}
.hia-coverage::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 48% 68% at 3% 52%, rgba(249,183,62,0.10) 0%, transparent 58%),
    radial-gradient(ellipse 44% 66% at 97% 48%, rgba(229,53,231,0.09) 0%, transparent 58%);
  pointer-events: none;
}
/* Technique 9: dual decorative neon blobs in dark section */
.hia-blob-1 {
  position: absolute;
  width: 380px; height: 380px;
  border-radius: 50%;
  top: -90px; right: 6%;
  background: radial-gradient(circle, rgba(249,183,62,0.08) 0%, transparent 68%);
  pointer-events: none;
  animation: hia-drift 21s ease-in-out infinite;
}
.hia-blob-2 {
  position: absolute;
  width: 240px; height: 240px;
  border-radius: 50%;
  bottom: -40px; left: 20%;
  background: radial-gradient(circle, rgba(229,53,231,0.07) 0%, transparent 68%);
  pointer-events: none;
  animation: hia-drift 29s ease-in-out infinite reverse;
  animation-delay: -12s;
}
.hia-coverage-inner { position: relative; z-index: 1; }
.hia-coverage-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-16);
  align-items: start;
}
.hia-coverage-eyebrow {
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
.hia-coverage-eyebrow svg { width: 13px; height: 13px; }
.hia-coverage h2 {
  font-size: clamp(1.6rem, 3vw, 2.35rem);
  font-weight: 900;
  color: var(--color-white);
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.02em;
  margin-bottom: var(--space-5);
}
.hia-coverage h2 em { color: var(--color-secondary); font-style: normal; }
.hia-coverage-body {
  font-size: 0.92rem;
  color: rgba(255,255,255,0.58);
  line-height: 1.82;
  margin-bottom: var(--space-4);
}

/* Technique 8: gradient text on stat numbers */
.hia-stat-row {
  display: flex;
  gap: var(--space-8);
  margin-top: var(--space-8);
  flex-wrap: wrap;
}
.hia-stat-num {
  font-family: var(--font-heading);
  font-size: 2.1rem;
  font-weight: 900;
  line-height: 1;
  background: linear-gradient(135deg, var(--color-accent) 0%, #fcd87e 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  margin-bottom: var(--space-1);
}
.hia-stat-label {
  font-size: 0.7rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1px;
  color: rgba(255,255,255,0.38);
}

/* Signal cards */
.hia-local-panel {
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
}
.hia-signal-card {
  background: rgba(255,255,255,0.04);
  border: 1px solid rgba(255,255,255,0.07);
  border-radius: 14px;
  padding: var(--space-5) var(--space-6);
  transition: border-color var(--transition-base), background var(--transition-base);
}
.hia-signal-card:hover {
  border-color: rgba(249,183,62,0.28);
  background: rgba(255,255,255,0.065);
}
.hia-signal-card h4 {
  font-family: var(--font-heading);
  font-size: 0.85rem;
  font-weight: 800;
  color: var(--color-accent);
  margin-bottom: var(--space-2);
  display: flex;
  align-items: center;
  gap: var(--space-2);
}
.hia-signal-card h4 svg { width: 15px; height: 15px; flex-shrink: 0; }
.hia-signal-card p {
  font-size: 0.82rem;
  color: rgba(255,255,255,0.54);
  line-height: 1.7;
  margin: 0;
}

/* Bilingual note */
.hia-bilingual-note {
  display: flex;
  align-items: flex-start;
  gap: var(--space-3);
  background: rgba(249,183,62,0.07);
  border: 1px solid rgba(249,183,62,0.22);
  border-radius: var(--radius-md);
  padding: var(--space-5);
  margin-top: var(--space-6);
}
.hia-bilingual-note svg { width: 20px; height: 20px; color: var(--color-accent); flex-shrink: 0; margin-top: 2px; }
.hia-bilingual-note p {
  font-size: 0.85rem;
  color: rgba(255,255,255,0.72);
  line-height: 1.7;
  margin: 0;
}
.hia-bilingual-note strong { color: var(--color-accent); }

/* ── SERVICES GRID (white) ── */
.hia-services {
  padding: var(--space-16) 0;
  background: var(--color-white);
}
.hia-services-header {
  text-align: center;
  margin-bottom: var(--space-12);
}
.hia-services h2 {
  font-size: clamp(1.7rem, 3vw, 2.4rem);
  font-weight: 900;
  color: var(--color-dark);
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.02em;
  margin-bottom: var(--space-3);
}
.hia-services h2 em { color: var(--color-secondary); font-style: normal; }
.hia-services-lead {
  font-size: 0.95rem;
  color: var(--color-gray);
  max-width: 520px;
  margin: 0 auto;
  line-height: 1.75;
}

/* Technique 7: neon bottom-border scaleX animation on hover */
.hia-services-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
}
.hia-svc-card {
  background: #f7f8fb;
  border: 1px solid rgba(229,53,231,0.09);
  border-radius: var(--radius-lg);
  padding: var(--space-7) var(--space-6);
  text-decoration: none;
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
  transition: transform var(--transition-base), box-shadow var(--transition-base), border-color var(--transition-base);
  position: relative;
  overflow: hidden;
}
.hia-svc-card::after {
  content: '';
  position: absolute;
  bottom: 0; left: 0; right: 0;
  height: 2px;
  background: linear-gradient(90deg, var(--color-accent), var(--color-secondary));
  transform: scaleX(0);
  transform-origin: right;
  transition: transform 0.32s ease;
}
.hia-svc-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 14px 38px rgba(249,183,62,0.13), 0 4px 10px rgba(0,0,0,0.06);
  border-color: rgba(249,183,62,0.24);
}
.hia-svc-card:hover::after { transform: scaleX(1); }
.hia-svc-icon {
  width: 50px; height: 50px;
  border-radius: 50%;
  background: linear-gradient(135deg, rgba(249,183,62,0.12), rgba(229,53,231,0.08));
  border: 1px solid rgba(249,183,62,0.18);
  display: flex; align-items: center; justify-content: center;
  color: var(--color-accent);
}
.hia-svc-icon svg { width: 22px; height: 22px; }
.hia-svc-card h3 {
  font-family: var(--font-heading);
  font-size: 0.92rem;
  font-weight: 800;
  color: var(--color-dark);
  margin: 0;
}
.hia-svc-card p {
  font-size: 0.82rem;
  color: var(--color-gray);
  line-height: 1.68;
  margin: 0;
  flex: 1;
}
.hia-svc-link {
  display: inline-flex;
  align-items: center;
  gap: 4px;
  font-size: 0.78rem;
  font-weight: 800;
  color: var(--color-secondary);
  margin-top: auto;
  transition: gap var(--transition-fast);
  text-decoration: none;
}
.hia-svc-link:hover { gap: 8px; }
.hia-svc-link svg { width: 14px; height: 14px; }

/* ── FAQ (light) ── */
/* Technique 6: accordion with magenta left-border + 45deg rotate */
.hia-faq {
  padding: var(--space-16) 0;
  background: #f4f6f9;
}
.hia-faq-inner {
  max-width: 840px;
  margin: 0 auto;
}
.hia-faq h2 {
  font-size: clamp(1.6rem, 2.8vw, 2.2rem);
  font-weight: 900;
  color: var(--color-dark);
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.02em;
  margin-bottom: var(--space-3);
}
.hia-faq h2 em { color: var(--color-secondary); font-style: normal; }
.hia-faq-sub {
  font-size: 0.92rem;
  color: var(--color-gray);
  margin-bottom: var(--space-10);
  line-height: 1.75;
}
.hia-faq-list {
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
}
.hia-faq-item {
  background: var(--color-white);
  border: 1px solid rgba(229,53,231,0.10);
  border-left: 3px solid transparent;
  border-radius: var(--radius-lg);
  overflow: hidden;
  transition: border-color var(--transition-base), box-shadow var(--transition-base);
}
.hia-faq-item.open {
  border-left-color: var(--color-secondary);
  border-color: rgba(229,53,231,0.30);
  box-shadow: 0 4px 22px rgba(229,53,231,0.08);
}
.hia-faq-q {
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
  font-size: 0.9rem;
  font-weight: 700;
  color: var(--color-dark);
  transition: color var(--transition-fast);
  user-select: none;
}
.hia-faq-q:hover { color: var(--color-secondary); }
.hia-faq-item.open .hia-faq-q { color: var(--color-secondary); }
.hia-faq-icon {
  flex-shrink: 0;
  width: 26px; height: 26px;
  border-radius: 50%;
  background: rgba(229,53,231,0.08);
  border: 1px solid rgba(229,53,231,0.18);
  display: flex; align-items: center; justify-content: center;
  transition: background var(--transition-base), transform var(--transition-base);
  font-size: 1rem;
  color: var(--color-secondary);
  font-weight: 900;
  line-height: 1;
}
.hia-faq-item.open .hia-faq-icon {
  background: var(--color-secondary);
  color: var(--color-white);
  transform: rotate(45deg);
}
.hia-faq-a {
  display: none;
  padding: 0 var(--space-6) var(--space-5);
  font-size: 0.88rem;
  color: var(--color-gray);
  line-height: 1.8;
  border-top: 1px solid rgba(229,53,231,0.07);
  padding-top: var(--space-4);
}
.hia-faq-item.open .hia-faq-a { display: block; }

/* ── RELATED AREAS ── */
.hia-related {
  padding: var(--space-14) 0;
  background: var(--color-white);
}
.hia-related-header {
  text-align: center;
  margin-bottom: var(--space-10);
}
.hia-related h3 {
  font-size: clamp(1.5rem, 2.5vw, 2rem);
  font-weight: 900;
  color: var(--color-dark);
  text-wrap: balance;
  margin-bottom: var(--space-2);
}
.hia-related-sub {
  font-size: 0.9rem;
  color: var(--color-gray);
}
.hia-related-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
}
.hia-area-card {
  background: linear-gradient(148deg, #09090f, #14082a);
  border: 1px solid rgba(255,255,255,0.07);
  border-radius: var(--radius-lg);
  padding: var(--space-7) var(--space-6);
  text-decoration: none;
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
  transition: transform var(--transition-base), box-shadow var(--transition-base), border-color var(--transition-base);
  position: relative;
  overflow: hidden;
}
.hia-area-card::before {
  content: '';
  position: absolute;
  bottom: 0; left: 0; right: 0;
  height: 2px;
  background: linear-gradient(90deg, var(--color-accent), var(--color-secondary));
  transform: scaleX(0);
  transform-origin: right;
  transition: transform 0.3s ease;
}
.hia-area-card:hover {
  transform: translateY(-4px);
  box-shadow: 0 14px 38px rgba(249,183,62,0.16), 0 4px 12px rgba(0,0,0,0.28);
  border-color: rgba(249,183,62,0.26);
}
.hia-area-card:hover::before { transform: scaleX(1); }
.hia-area-card-icon {
  width: 42px; height: 42px;
  border-radius: 10px;
  background: rgba(255,255,255,0.05);
  border: 1px solid rgba(255,255,255,0.10);
  display: flex; align-items: center; justify-content: center;
  color: var(--color-secondary);
}
.hia-area-card-icon svg { width: 20px; height: 20px; }
.hia-area-card h4 {
  font-family: var(--font-heading);
  font-size: 0.95rem;
  font-weight: 800;
  color: var(--color-white);
  margin: 0;
}
.hia-area-card p {
  font-size: 0.8rem;
  color: rgba(255,255,255,0.5);
  line-height: 1.65;
  margin: 0;
  flex: 1;
}
.hia-area-link {
  display: inline-flex;
  align-items: center;
  gap: 4px;
  font-size: 0.78rem;
  font-weight: 800;
  color: var(--color-accent);
  transition: gap var(--transition-fast);
}
.hia-area-link:hover { gap: 8px; }
.hia-area-link svg { width: 13px; height: 13px; }

/* ── EMERGENCY CTA (dark) ── */
.hia-cta {
  padding: var(--space-16) 0;
  background: linear-gradient(138deg, #09090f 0%, #1c0830 52%, #0a1628 100%);
  position: relative;
  overflow: hidden;
  text-align: center;
}
.hia-cta::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 58% 82% at 12% 52%, rgba(249,183,62,0.11) 0%, transparent 60%),
    radial-gradient(ellipse 48% 70% at 88% 52%, rgba(229,53,231,0.10) 0%, transparent 60%);
  pointer-events: none;
}
.hia-cta-inner {
  position: relative;
  z-index: 1;
  max-width: 580px;
  margin: 0 auto;
}
.hia-cta h2 {
  font-size: clamp(1.5rem, 2.8vw, 2.2rem);
  font-weight: 900;
  color: var(--color-white);
  text-wrap: balance;
  margin-bottom: var(--space-3);
}
.hia-cta h2 em { color: var(--color-accent); font-style: normal; }
.hia-cta p {
  font-size: 0.95rem;
  color: rgba(255,255,255,0.58);
  max-width: 460px;
  margin: 0 auto var(--space-7);
  line-height: 1.75;
}
.hia-cta-btns {
  display: flex;
  gap: var(--space-3);
  justify-content: center;
  flex-wrap: wrap;
}

/* ── RESPONSIVE ── */
@media (max-width: 1024px) {
  .hia-hero-inner { grid-template-columns: 1fr; }
  .hia-hero-card { display: none; }
  .hia-coverage-grid { grid-template-columns: 1fr; gap: var(--space-10); }
}
@media (max-width: 768px) {
  .hia-services-grid { grid-template-columns: repeat(2, 1fr); }
  .hia-related-grid { grid-template-columns: 1fr; }
  .hia-stat-row { gap: var(--space-6); }
}
@media (max-width: 480px) {
  .hia-services-grid { grid-template-columns: 1fr; }
}
</style>

<main id="main-content">

<!-- ═══ HERO ═══ -->
<section class="hia-hero" aria-label="Bail bonds in Hialeah, FL — bilingual bondsman">
  <div class="hia-orb hia-orb-1"></div>
  <div class="hia-orb hia-orb-2"></div>
  <div class="hia-orb hia-orb-3"></div>

  <div class="container">
    <div class="hia-hero-inner">
      <div class="hia-hero-left">
        <div class="hia-bilingual-eyebrow">
          <span class="hia-lang-es">Fianza de Cárcel — Hialeah</span>
          <span class="hia-lang-en">Bail Bonds Hialeah</span>
        </div>
        <span class="hia-eyebrow">
          <span class="hia-pulse"></span>
          Hialeah, FL — Miami-Dade County
        </span>
        <h1>Bail Bonds <span class="hl-mag">en Hialeah, FL</span> — <span class="hl-gold">Fianza de Cárcel 24/7</span> | Bilingual Bondsman Near Me</h1>
        <p class="hia-hero-answer">Need bail bonds in Hialeah? Mad Extra Bail Bonds provides fully bilingual English/Spanish bail bond service in Hialeah 24 hours a day. We post bond at Turner Guilford Knight (TGK) and the Miami-Dade Main Jail — fast, experienced, and serving Hialeah's community for over 11 years.</p>
        <div class="hia-hero-btns">
          <?php if (!empty($phone)): ?>
          <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>" class="btn-hia-primary">
            <?php echo lucide_icon('phone'); ?> Llamar / Call — 24/7
          </a>
          <?php else: ?>
          <a href="/contact/" class="btn-hia-primary">
            <?php echo lucide_icon('zap'); ?> Obtener Ayuda / Get Help
          </a>
          <?php endif; ?>
          <a href="/contact/" class="btn-hia-secondary">
            <?php echo lucide_icon('file-text'); ?> Free Consultation
          </a>
        </div>
        <div class="hia-trust-row">
          <span class="hia-trust-badge"><?php echo lucide_icon('shield-check'); ?> Licensed FL Bondsman</span>
          <span class="hia-trust-badge"><?php echo lucide_icon('globe'); ?> Español / English</span>
          <span class="hia-trust-badge"><?php echo lucide_icon('clock'); ?> 24/7 Disponible</span>
          <span class="hia-trust-badge"><?php echo lucide_icon('landmark'); ?> TGK Familiar</span>
        </div>
      </div>

      <!-- Technique 4: Glassmorphism sidebar card -->
      <div class="hia-hero-card">
        <p class="hia-card-title">¿Arresto en Hialeah? / Arrested in Hialeah?</p>
        <p class="hia-card-headline">Servicio bilingüe inmediato — Immediate Bilingual Service</p>
        <ul class="hia-card-list">
          <li><span class="hia-check">✓</span> Fully bilingual — complete Spanish-language service</li>
          <li><span class="hia-check">✓</span> We know TGK and HPD booking procedures</li>
          <li><span class="hia-check">✓</span> 10% Florida legal premium — sin cargos ocultos</li>
          <li><span class="hia-check">✓</span> Misdemeanor release within hours of TGK posting</li>
          <li><span class="hia-check">✓</span> 11+ years serving Hialeah and Miami-Dade</li>
        </ul>
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>" class="hia-card-cta">
          <?php echo lucide_icon('phone'); ?> Llámenos Ahora / Call Now
        </a>
        <?php else: ?>
        <a href="/contact/" class="hia-card-cta">Obtener Ayuda / Get Help</a>
        <?php endif; ?>
        <p class="hia-card-disclaimer">Disponible 24 horas — 365 días del año</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SVG DIVIDER: dark → light (double wave) ═══ -->
<div class="hia-div-dk-lt" aria-hidden="true">
  <svg viewBox="0 0 1440 64" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,64 L0,20 Q240,0 480,30 Q720,60 960,24 Q1200,-4 1440,40 L1440,64 Z" fill="#f4f6f9"/>
  </svg>
</div>

<!-- ═══ INTRO / ANSWER SECTION ═══ -->
<section class="hia-intro" aria-label="Bail bonds in Hialeah — how the process works">
  <div class="container">
    <div class="hia-intro-inner">
      <span class="hia-section-eyebrow"><?php echo lucide_icon('zap'); ?> How It Works in Hialeah</span>
      <h2>How do bail bonds work in <em>Hialeah, FL</em>?</h2>
      <div class="hia-answer-block">
        <p>Bail bonds in Hialeah work as follows: when someone is arrested in Hialeah, they are processed by the Hialeah Police Department and transported to Turner Guilford Knight Correctional Center (TGK) at 7000 NW 41st St. You call us, we pull the booking from HPD or TGK immediately, and we post the full bail — you pay only Florida's 10% premium. We provide this service entirely in Spanish if needed, and release from TGK typically begins within 6 to 12 hours of bond posting.</p>
      </div>
      <p>Mad Extra Bail Bonds is a licensed Florida bail bondsman based in Delray Beach, serving Hialeah and all of Miami-Dade County for over 11 years. Hialeah is one of the most densely populated cities in Florida and the most culturally Cuban city in the United States — with over 75% of its population identifying as Hispanic and Spanish as the dominant language of everyday life. We understand what Hialeah families face when a family member is arrested, and we provide our full service without language barriers.</p>
      <p>Hialeah's commercial corridors generate significant arrest activity — particularly along W 49th Street, Okeechobee Road, and the Palm Avenue historic main street. The area around Westland Mall on W 49th St sees retail-related charges regularly. DUI arrests on Okeechobee Road and W 49th St are among the most common Hialeah bail situations we handle. The residential communities surrounding Milander Park, the neighborhoods near Hialeah Park Racing &amp; Casino — the iconic historic racetrack on Palm Avenue — and the streets around Hialeah Hospital: wherever the arrest happened in Hialeah, we move quickly.</p>
      <p>The Hialeah Police Department headquarters on E 5th Street processes city arrests. From there, most defendants are transported to TGK. Hialeah criminal cases are ultimately heard at the Miami-Dade County Courthouse in downtown Miami or at a Miami-Dade Regional Justice Center. We can advise families on next steps beyond the immediate bond situation — but getting your family member out of TGK is always the first priority.</p>
    </div>
  </div>
</section>

<!-- ═══ SVG DIVIDER: light → dark (sharp angle) ═══ -->
<div class="hia-div-lt-dk" aria-hidden="true">
  <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,0 L0,30 Q480,56 1440,10 L1440,56 L0,56 Z" fill="#09090f"/>
  </svg>
</div>

<!-- ═══ LOCAL COVERAGE SECTION ═══ -->
<section class="hia-coverage" aria-label="Local coverage in Hialeah, FL">
  <div class="hia-blob-1" aria-hidden="true"></div>
  <div class="hia-blob-2" aria-hidden="true"></div>
  <div class="container hia-coverage-inner">
    <div class="hia-coverage-grid">
      <div>
        <span class="hia-coverage-eyebrow"><?php echo lucide_icon('map-pin'); ?> Hialeah — Facility Guide</span>
        <h2>Where do <em>Hialeah arrests go</em> — and how fast is release?</h2>
        <p class="hia-coverage-body">Hialeah is served by its own full police department — the Hialeah Police Department (HPD), headquartered on E 5th Street. After booking at HPD, defendants are transported to Turner Guilford Knight Correctional Center (TGK) at 7000 NW 41st St in northwest Miami. TGK is the primary intake facility for Hialeah arrests and one of the most active facilities in Miami-Dade County.</p>
        <p class="hia-coverage-body">TGK handles a massive volume of Miami-Dade's daily arrests. Misdemeanor releases from TGK after bond posting typically take 6 to 12 hours. Felony charges that require a first-appearance hearing can take 12 to 36 hours. We begin filing the bond at TGK the moment payment is confirmed — we do not wait for booking to fully complete before starting.</p>
        <p class="hia-coverage-body">Hialeah is the fifth-largest city in Florida and one of the most densely populated cities in the entire country. That density, combined with active commercial corridors on Okeechobee Road, W 49th St, and Palm Avenue, creates the consistent arrest volume that makes our familiarity with HPD and TGK procedures directly valuable to Hialeah families.</p>

        <div class="hia-bilingual-note">
          <?php echo lucide_icon('globe'); ?>
          <p><strong>Servicio completamente en español / Full Spanish-language service:</strong> En Mad Extra Bail Bonds, hablamos español con fluidez y proveemos nuestro servicio completo de fianza en español — desde la primera llamada hasta la liberación. No tiene que preocuparse por la barrera del idioma.</p>
        </div>

        <div class="hia-stat-row">
          <div>
            <div class="hia-stat-num">6–12 hrs</div>
            <div class="hia-stat-label">TGK misdemeanor release</div>
          </div>
          <div>
            <div class="hia-stat-num">5th largest</div>
            <div class="hia-stat-label">City in Florida by population</div>
          </div>
          <div>
            <div class="hia-stat-num">11+ yrs</div>
            <div class="hia-stat-label">Serving Hialeah families</div>
          </div>
        </div>
      </div>

      <div class="hia-local-panel">
        <div class="hia-signal-card">
          <h4><?php echo lucide_icon('landmark'); ?> Turner Guilford Knight (TGK)</h4>
          <p>7000 NW 41st St, Miami — the primary intake facility for Hialeah Police Department arrests. We know TGK's booking and release procedures in detail. When you call about a Hialeah arrest, TGK is typically where we start.</p>
        </div>
        <div class="hia-signal-card">
          <h4><?php echo lucide_icon('shield'); ?> Hialeah Police Department (HPD)</h4>
          <p>HPD headquarters on E 5th Street processes all Hialeah city arrests before transfer to TGK. HPD is a full-service city department with its own detectives and specialized units. We are familiar with HPD booking procedures and timelines.</p>
        </div>
        <div class="hia-signal-card">
          <h4><?php echo lucide_icon('map-pin'); ?> W 49th St &amp; Okeechobee Road Corridor</h4>
          <p>Hialeah's busiest commercial corridors — home to Westland Mall, major retail centers, and heavy vehicle traffic — generate the highest volume of DUI, traffic, and retail-related arrests we handle in Hialeah. We have extensive experience with these charge types.</p>
        </div>
        <div class="hia-signal-card">
          <h4><?php echo lucide_icon('flag'); ?> Hialeah Park Racing &amp; Casino Area</h4>
          <p>The historic racetrack and casino on Palm Avenue draws consistent traffic to the Palm Avenue corridor. Events and entertainment-related situations in this area sometimes result in arrest situations — we are prepared to respond immediately.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SVG DIVIDER: dark → white (compound curve) ═══ -->
<div class="hia-div-dk-wh" aria-hidden="true">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,60 Q360,0 720,40 Q1080,70 1440,20 L1440,60 Z" fill="#ffffff"/>
  </svg>
</div>

<!-- ═══ SERVICES GRID SECTION ═══ -->
<section class="hia-services" aria-label="Bail bond services available in Hialeah, FL">
  <div class="container">
    <div class="hia-services-header">
      <span class="hia-section-eyebrow"><?php echo lucide_icon('shield'); ?> Services in Hialeah</span>
      <h2>What bail bond services are available in <em>Hialeah, FL</em>?</h2>
      <p class="hia-services-lead">Every bail bond service we offer is available in Hialeah — any charge, any facility, fully bilingual, 24 hours a day.</p>
    </div>
    <div class="hia-services-grid">
      <?php
      $hiaServices = [
        ['slug' => 'bail-bonds',             'name' => 'Bail Bond Services',       'icon' => 'shield',         'desc' => 'General bail bonds for Hialeah arrests — we post bond at TGK and the Miami-Dade Main Jail fast, with full Spanish-language service.'],
        ['slug' => 'dui-bail-bonds',          'name' => 'DUI Bail Bonds',           'icon' => 'car',            'desc' => 'DUI arrests on W 49th St and Okeechobee Road are the most common Hialeah bail situation we handle — we move with urgency on DUI bonds at TGK.'],
        ['slug' => 'drug-charge-bail-bonds',  'name' => 'Drug Charge Bail Bonds',   'icon' => 'alert-triangle', 'desc' => 'Drug possession and trafficking charges in Hialeah handled confidentially. We know Miami-Dade drug charge bail timelines and move fast.'],
        ['slug' => 'felony-bail-bonds',       'name' => 'Felony Bail Bonds',        'icon' => 'gavel',          'desc' => 'Felony bonds in Hialeah cases are heard at Miami-Dade courts — we have the experience to navigate these higher-stakes situations in Miami-Dade County.'],
        ['slug' => 'misdemeanor-bail-bonds',  'name' => 'Misdemeanor Bail Bonds',   'icon' => 'file-text',      'desc' => 'Hialeah misdemeanor releases from TGK typically complete within hours — retail theft, disorderly conduct, domestic situations handled quickly.'],
        ['slug' => 'warrant-bail-bonds',      'name' => 'Warrant &amp; Traffic Bonds', 'icon' => 'file-warning', 'desc' => 'Outstanding Hialeah warrants and Miami-Dade traffic bonds — resolve them before an HPD traffic stop becomes an arrest situation.'],
      ];
      foreach ($hiaServices as $svc): ?>
      <div class="hia-svc-card">
        <div class="hia-svc-icon"><?php echo lucide_icon($svc['icon']); ?></div>
        <h3><?php echo $svc['name']; ?></h3>
        <p><?php echo $svc['desc']; ?></p>
        <a href="/services/<?php echo $svc['slug']; ?>/" class="hia-svc-link">
          Learn more <?php echo lucide_icon('arrow-right'); ?>
        </a>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══ SVG DIVIDER: white → light (gentle S-wave) ═══ -->
<div class="hia-div-wh-lt" aria-hidden="true">
  <svg viewBox="0 0 1440 44" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,44 L0,24 Q480,0 720,28 Q960,50 1440,18 L1440,44 Z" fill="#f4f6f9"/>
  </svg>
</div>

<!-- ═══ FAQ SECTION ═══ -->
<section class="hia-faq" aria-label="Hialeah bail bond FAQ — English and Spanish">
  <div class="container">
    <div class="hia-faq-inner">
      <span class="hia-section-eyebrow"><?php echo lucide_icon('help-circle'); ?> Preguntas Frecuentes / FAQ</span>
      <h2>Frequently asked questions about <em>bail bonds in Hialeah, FL</em></h2>
      <p class="hia-faq-sub">Preguntas y respuestas específicas de Hialeah — en inglés y español. Questions Hialeah families ask after an arrest at HPD or TGK.</p>

      <div class="hia-faq-list" role="list">
        <?php foreach ($_faqs as $faq): ?>
        <div class="hia-faq-item" role="listitem">
          <button class="hia-faq-q" aria-expanded="false" onclick="toggleHiaFaq(this)">
            <?php echo htmlspecialchars($faq['q']); ?>
            <span class="hia-faq-icon" aria-hidden="true">+</span>
          </button>
          <div class="hia-faq-a" role="region">
            <p><?php echo htmlspecialchars($faq['a']); ?></p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- ═══ RELATED AREAS ═══ -->
<section class="hia-related" aria-label="Other Miami-Dade cities we serve near Hialeah">
  <div class="container">
    <div class="hia-related-header">
      <h3>Also Serving These Nearby Cities</h3>
      <p class="hia-related-sub">Mad Extra Bail Bonds covers all of Miami-Dade County — the same bilingual, 24/7 service everywhere.</p>
    </div>
    <div class="hia-related-grid">
      <a href="/areas/miami/" class="hia-area-card">
        <div class="hia-area-card-icon"><?php echo lucide_icon('landmark'); ?></div>
        <h4>Miami</h4>
        <p>Bail bonds across Miami — Main Jail, TGK, and Metro West. Bilingual service for Little Havana, Wynwood, Brickell, and all Miami neighborhoods. 24/7.</p>
        <span class="hia-area-link">View coverage <?php echo lucide_icon('arrow-right'); ?></span>
      </a>
      <a href="/areas/miami-gardens/" class="hia-area-card">
        <div class="hia-area-card-icon"><?php echo lucide_icon('building-2'); ?></div>
        <h4>Miami Gardens</h4>
        <p>Bail bonds for Miami Gardens arrests — TGK intake, Hard Rock Stadium event arrest experience. Florida's largest majority-Black city, served 24/7.</p>
        <span class="hia-area-link">View coverage <?php echo lucide_icon('arrow-right'); ?></span>
      </a>
      <a href="/areas/" class="hia-area-card">
        <div class="hia-area-card-icon"><?php echo lucide_icon('globe'); ?></div>
        <h4>All Miami-Dade County</h4>
        <p>We cover every city in Miami-Dade County — the same bilingual, fast bail bond service available 24 hours a day across the entire county.</p>
        <span class="hia-area-link">See all areas <?php echo lucide_icon('arrow-right'); ?></span>
      </a>
    </div>
  </div>
</section>

<!-- ═══ EMERGENCY CTA ═══ -->
<section class="hia-cta" aria-label="Emergency bail bond help in Hialeah">
  <div class="hia-cta-inner">
    <h2>Need a bondsman in <em>Hialeah right now</em>?</h2>
    <p>Llamamos al TGK inmediatamente — we contact TGK immediately. One call in English or Spanish starts the release process, any hour of the day or night. 11+ years serving Hialeah families.</p>
    <div class="hia-cta-btns">
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>" class="btn-hia-primary">
        <?php echo lucide_icon('phone'); ?> Llamar Ahora / Call Now — 24/7
      </a>
      <?php endif; ?>
      <a href="/contact/" class="btn-hia-secondary">Send a Message</a>
    </div>
  </div>
</section>

</main>

<script>
function toggleHiaFaq(btn) {
  const item = btn.closest('.hia-faq-item');
  const isOpen = item.classList.contains('open');
  document.querySelectorAll('.hia-faq-item.open').forEach(el => el.classList.remove('open'));
  document.querySelectorAll('.hia-faq-q').forEach(el => el.setAttribute('aria-expanded', 'false'));
  if (!isOpen) {
    item.classList.add('open');
    btn.setAttribute('aria-expanded', 'true');
  }
}
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
