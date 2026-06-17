<?php
/**
 * areas/miami/index.php — Miami Service Area Page
 * Mad Extra Bail Bonds | Page One Insights v6.1
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Bail Bonds Near Me in Miami FL | Mad Extra Bail Bonds | Bilingual 24/7';
$pageDescription = 'Need bail bonds in Miami, FL? Mad Extra Bail Bonds serves Miami families with bilingual 24/7 bail bond service. Licensed FL bondsman — fast release from Miami-Dade County Jail. Call now.';
$canonicalUrl    = $siteUrl . '/areas/miami/';
$currentPage     = 'areas';

$_breadcrumb = generateBreadcrumbSchema([
    ['name' => 'Home',         'url' => $siteUrl . '/'],
    ['name' => 'Service Areas','url' => $siteUrl . '/areas/'],
    ['name' => 'Miami',        'url' => $siteUrl . '/areas/miami/'],
]);

$_serviceSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'Service',
    '@id'         => $siteUrl . '/areas/miami/#service-miami',
    'name'        => 'Bail Bonds in Miami, FL',
    'description' => 'Bilingual (English/Spanish/Haitian Creole) licensed Florida bail bondsman serving Miami and all of Miami-Dade County. Fast release from Miami-Dade County Main Jail, TGK, and Metro West, 24/7.',
    'url'         => $siteUrl . '/areas/miami/',
    'provider'    => ['@id' => $siteUrl . '/#organization'],
    'areaServed'  => [
        ['@type' => 'City',   'name' => 'Miami, FL'],
        ['@type' => 'County', 'name' => 'Miami-Dade County, FL'],
    ],
    'serviceType' => 'Bail Bond Services',
];

$_faqs = [
    [
        'q' => '¿Hablan español en Mad Extra Bail Bonds? / Does Mad Extra Bail Bonds offer Spanish-language bail bond service in Miami?',
        'a' => 'Sí — yes. We provide full Spanish-language bail bond service for Miami families across every neighborhood from Little Havana to Flagami to Hialeah. Language should never be a barrier when a family member is in custody at Miami-Dade County Main Jail, TGK, or any other Miami-Dade facility. Call us and we will handle your situation in English or Spanish from start to finish.',
    ],
    [
        'q' => 'Which Miami-Dade jail will my family member be held at after a Miami arrest?',
        'a' => 'Miami-Dade County runs several detention facilities. The Miami-Dade Pre-Trial Detention Center (Main Jail) at 1351 NW 12th St is attached to the Metro-Justice Complex and handles many arrests from central Miami and downtown. Turner Guilford Knight Correctional Center (TGK) at 7000 NW 41st St in northwest Miami handles a large volume of Hialeah-area and northwest Miami arrests. Metro West Detention Center at 13850 NW 41st St handles overflow and certain charge classifications. When you call us, we immediately pull the booking location from the Miami-Dade system so you know exactly where your family member is and what the next step is.',
    ],
    [
        'q' => 'How long does booking take at the Miami-Dade Main Jail for a misdemeanor arrest in Miami?',
        'a' => 'The Miami-Dade Main Jail at 1351 NW 12th St processes extremely high arrest volumes — Miami is one of the busiest jurisdictions in Florida. Misdemeanor booking typically runs 4 to 10 hours. Felony booking, which may include an arraignment or first-appearance hearing at the Criminal Justice Center across the street, can extend to 12 to 48 hours. We begin working immediately on your case rather than waiting for booking to complete, so bond is filed at the earliest possible moment.',
    ],
    [
        'q' => 'Can Mad Extra help with an immigration bail bond for someone detained by ICE in the Miami area?',
        'a' => 'Yes. Immigration bail bonds — also called ICE detainers or immigration surety bonds — are handled very differently from state criminal bonds. They involve the immigration court system rather than state courts, and bond amounts are set by an immigration judge or DHS officer. We have experience with immigration bond situations in the Miami area, including cases that route through Krome Service Processing Center (KSPC) nearby in Richmond Heights. Call us and we will explain how the immigration bond process works for your specific situation.',
    ],
    [
        'q' => 'Are bail bonds available for someone arrested during a protest or mass arrest situation in Miami?',
        'a' => 'Yes. Mass arrest situations — including protest-related arrests, civil unrest, or group arrests during events — are bondable under Florida law, and we can coordinate multiple simultaneous bonds when needed. Miami has seen mass arrest situations in recent years involving civil demonstrations, and we have experience handling group arrest scenarios where multiple family members or community members need bonds posted at the same time. Each person requires a separate bond, but we can process them in sequence quickly.',
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
   MIAMI AREA PAGE — Mad Extra Bail Bonds
   Premium Tier | Dark/Neon Design System
   Techniques:
   (1) Layered ::before radial-gradient blobs on hero
   (2) Noise texture ::after on hero
   (3) Floating neon orbs — 3 instances, CSS keyframe drift
   (4) Glassmorphism hero sidebar card (backdrop-filter blur)
   (5) 3 unique SVG wave dividers (wave, angle, s-curve)
   (6) FAQ accordion with neon magenta left-border + icon 45deg rotate
   (7) Service cards with neon bottom-border scaleX on hover
   (8) Gradient text on stat numbers (background-clip technique)
   (9) Decorative neon blob in dark coverage section
   (10) Bilingual eyebrow badge — dual-language pill
   ============================================================ */

/* ── 1. HERO ── */
.mia-hero {
  position: relative;
  min-height: 60vh;
  display: flex;
  align-items: center;
  background: #09090f;
  overflow: hidden;
  padding-top: var(--nav-height, 72px);
  padding-bottom: var(--space-12);
}

/* Technique 1: layered ::before radial-gradient blobs */
.mia-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 65% 75% at 0% 55%, rgba(249,183,62,0.16) 0%, transparent 52%),
    radial-gradient(ellipse 55% 65% at 94% 10%, rgba(229,53,231,0.22) 0%, transparent 52%),
    radial-gradient(ellipse 40% 60% at 55% 95%, rgba(229,53,231,0.09) 0%, transparent 58%),
    radial-gradient(ellipse 70% 40% at 50% 108%, rgba(9,9,15,0.98) 0%, transparent 78%);
  pointer-events: none;
  z-index: 0;
}

/* Technique 2: noise texture ::after */
.mia-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
  opacity: 0.5;
  pointer-events: none;
  z-index: 0;
}

/* Technique 3: floating neon orbs */
.mia-orb {
  position: absolute;
  border-radius: 50%;
  pointer-events: none;
  will-change: transform;
  z-index: 1;
}
.mia-orb-1 {
  width: 600px; height: 600px;
  top: -220px; right: -80px;
  background: radial-gradient(circle, rgba(229,53,231,0.15) 0%, transparent 65%);
  animation: mia-drift 18s ease-in-out infinite;
}
.mia-orb-2 {
  width: 350px; height: 350px;
  bottom: -100px; left: 5%;
  background: radial-gradient(circle, rgba(249,183,62,0.12) 0%, transparent 65%);
  animation: mia-drift 22s ease-in-out infinite reverse;
  animation-delay: -9s;
}
.mia-orb-3 {
  width: 220px; height: 220px;
  top: 35%; left: 44%;
  background: radial-gradient(circle, rgba(229,53,231,0.08) 0%, transparent 68%);
  animation: mia-drift 26s ease-in-out infinite;
  animation-delay: -14s;
}
@keyframes mia-drift {
  0%,100% { transform: translate(0,0) scale(1); }
  33%     { transform: translate(-18px, 22px) scale(1.06); }
  66%     { transform: translate(14px, -16px) scale(0.95); }
}

.mia-hero-inner {
  position: relative;
  z-index: 2;
  display: grid;
  grid-template-columns: 1fr 400px;
  gap: var(--space-12);
  align-items: center;
  padding: var(--space-14) 0;
  width: 100%;
}
.mia-hero-left { max-width: 660px; }

.mia-eyebrow {
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
.mia-pulse {
  width: 7px; height: 7px;
  border-radius: 50%;
  background: var(--color-accent);
  box-shadow: 0 0 8px var(--color-accent);
  animation: mia-pulse 2s ease-in-out infinite;
  flex-shrink: 0;
}
@keyframes mia-pulse {
  0%,100% { opacity:1; transform:scale(1); }
  50%     { opacity:.5; transform:scale(.70); }
}

/* Technique 10: bilingual dual-language pill */
.mia-bilingual-pill {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  font-family: var(--font-heading);
  font-size: 0.64rem;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 2px;
  color: var(--color-secondary);
  padding: 5px 14px;
  border: 1px solid rgba(229,53,231,0.40);
  border-radius: var(--radius-full);
  background: rgba(229,53,231,0.08);
  margin-bottom: var(--space-3);
}
.mia-bilingual-pill svg { width: 12px; height: 12px; flex-shrink: 0; }

.mia-hero h1 {
  font-size: clamp(1.75rem, 3.6vw, 3rem);
  font-weight: 900;
  color: var(--color-white);
  line-height: 1.1;
  margin-bottom: var(--space-5);
  letter-spacing: -0.025em;
  text-wrap: balance;
}
.mia-hero h1 .hl-gold { color: var(--color-accent); text-shadow: 0 0 28px rgba(249,183,62,0.55); }
.mia-hero h1 .hl-mag  { color: var(--color-secondary); text-shadow: 0 0 28px rgba(229,53,231,0.55); }

.mia-hero-answer {
  font-size: 1rem;
  color: rgba(255,255,255,0.68);
  line-height: 1.82;
  margin-bottom: var(--space-7);
  max-width: 580px;
}

.mia-hero-btns {
  display: flex;
  gap: var(--space-3);
  flex-wrap: wrap;
  margin-bottom: var(--space-7);
}
.btn-mia-primary {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 13px 28px;
  background: var(--color-accent);
  color: #0a0d1a;
  font-family: var(--font-heading);
  font-size: 0.82rem;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  border-radius: var(--radius-md);
  text-decoration: none;
  box-shadow: 0 0 26px rgba(249,183,62,0.45), 0 4px 14px rgba(0,0,0,0.3);
  transition: all var(--transition-base);
}
.btn-mia-primary:hover {
  background: #ffc94f;
  box-shadow: 0 0 46px rgba(249,183,62,0.70), 0 8px 22px rgba(0,0,0,0.35);
  transform: translateY(-2px);
  color: #0a0d1a;
}
.btn-mia-primary svg { width: 15px; height: 15px; }
.btn-mia-secondary {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 12px 24px;
  background: transparent;
  color: var(--color-secondary);
  border: 2px solid rgba(229,53,231,0.52);
  font-family: var(--font-heading);
  font-size: 0.82rem;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  border-radius: var(--radius-md);
  text-decoration: none;
  transition: all var(--transition-base);
}
.btn-mia-secondary:hover {
  background: var(--color-secondary);
  color: var(--color-white);
  border-color: var(--color-secondary);
  box-shadow: 0 0 28px rgba(229,53,231,0.42);
  transform: translateY(-2px);
}
.btn-mia-secondary svg { width: 15px; height: 15px; }

.mia-trust-row {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-2);
}
.mia-trust-badge {
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
.mia-trust-badge svg { width: 11px; height: 11px; color: var(--color-accent); flex-shrink: 0; }

/* Technique 4: glassmorphism hero sidebar card */
.mia-hero-card {
  position: relative;
  background: rgba(255,255,255,0.04);
  border: 1px solid rgba(255,255,255,0.11);
  border-radius: 18px;
  padding: var(--space-7) var(--space-6);
  backdrop-filter: blur(14px);
  -webkit-backdrop-filter: blur(14px);
}
.mia-hero-card::before {
  content: '';
  position: absolute;
  inset: -1px;
  border-radius: 19px;
  background: linear-gradient(135deg, rgba(229,53,231,0.35) 0%, rgba(249,183,62,0.18) 55%, transparent 100%);
  z-index: -1;
  opacity: 0.42;
}
.mia-card-title {
  font-family: var(--font-heading);
  font-size: 1.05rem;
  font-weight: 800;
  color: var(--color-white);
  margin-bottom: var(--space-1);
}
.mia-card-sub {
  font-size: 0.68rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  color: var(--color-secondary);
  margin-bottom: var(--space-5);
}
.mia-card-list {
  list-style: none;
  padding: 0;
  margin: 0 0 var(--space-6);
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
}
.mia-card-list li {
  display: flex;
  align-items: flex-start;
  gap: var(--space-2);
  font-size: 0.85rem;
  color: rgba(255,255,255,0.80);
  line-height: 1.5;
}
.mia-check {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  width: 18px; height: 18px;
  border-radius: 50%;
  background: linear-gradient(135deg, var(--color-secondary), #b81ab9);
  margin-top: 2px;
  font-size: 0.6rem;
  color: #fff;
  font-weight: 900;
}
.mia-card-cta {
  display: block;
  width: 100%;
  padding: 13px;
  background: linear-gradient(135deg, var(--color-secondary) 0%, #b81ab9 100%);
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
}
.mia-card-cta:hover {
  box-shadow: 0 8px 36px rgba(229,53,231,0.62);
  transform: translateY(-1px);
  color: var(--color-white);
}
.mia-card-disclaimer {
  text-align: center;
  font-size: 0.6rem;
  color: rgba(255,255,255,0.28);
  margin-top: var(--space-3);
  line-height: 1.5;
}
/* bilingual indicator inside card */
.mia-card-lang {
  display: flex;
  gap: 6px;
  margin-bottom: var(--space-4);
}
.mia-lang-pill {
  font-size: 0.62rem;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 1px;
  padding: 3px 9px;
  border-radius: var(--radius-full);
  background: rgba(229,53,231,0.12);
  color: var(--color-secondary);
  border: 1px solid rgba(229,53,231,0.22);
}

/* ── DIVIDERS ── */
/* Technique 5: 3+ unique SVG wave shapes */
.mia-div-dk-lt { line-height: 0; background: #09090f; }
.mia-div-dk-lt svg { display: block; width: 100%; }
.mia-div-lt-dk { line-height: 0; background: #f4f6f9; }
.mia-div-lt-dk svg { display: block; width: 100%; }
.mia-div-dk-wh { line-height: 0; background: #09090f; }
.mia-div-dk-wh svg { display: block; width: 100%; }
.mia-div-wh-lt { line-height: 0; background: #ffffff; }
.mia-div-wh-lt svg { display: block; width: 100%; }

/* ── INTRO / ANSWER (light) ── */
.mia-intro {
  padding: var(--space-16) 0;
  background: #f4f6f9;
}
.mia-intro-inner {
  max-width: 880px;
  margin: 0 auto;
}
.mia-section-eyebrow {
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
.mia-section-eyebrow svg { width: 12px; height: 12px; }
.mia-intro h2 {
  font-size: clamp(1.7rem, 3vw, 2.5rem);
  font-weight: 900;
  color: var(--color-dark);
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.02em;
  margin-bottom: var(--space-4);
}
.mia-intro h2 em { color: var(--color-secondary); font-style: normal; }
.mia-answer-block {
  background: linear-gradient(135deg, rgba(229,53,231,0.07), rgba(249,183,62,0.04));
  border-left: 3px solid var(--color-secondary);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  padding: var(--space-5) var(--space-6);
  margin-bottom: var(--space-6);
}
.mia-answer-block p {
  font-size: 0.95rem;
  color: var(--color-dark);
  line-height: 1.8;
  margin: 0;
  font-style: italic;
}
.mia-intro p {
  font-size: 0.95rem;
  color: var(--color-gray);
  line-height: 1.82;
  margin-bottom: var(--space-4);
}

/* ── LOCAL COVERAGE (dark) ── */
.mia-coverage {
  padding: var(--space-16) 0;
  background: linear-gradient(145deg, #09090f 0%, #130830 50%, #0a1627 100%);
  position: relative;
  overflow: hidden;
}
.mia-coverage::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 50% 70% at 4% 55%, rgba(229,53,231,0.11) 0%, transparent 60%),
    radial-gradient(ellipse 42% 65% at 96% 45%, rgba(249,183,62,0.08) 0%, transparent 60%);
  pointer-events: none;
}
/* Technique 9: decorative neon blob in dark section */
.mia-coverage-blob {
  position: absolute;
  width: 400px; height: 400px;
  border-radius: 50%;
  top: -100px; right: 8%;
  background: radial-gradient(circle, rgba(229,53,231,0.09) 0%, transparent 70%);
  pointer-events: none;
  animation: mia-drift 20s ease-in-out infinite;
}
.mia-coverage-blob-2 {
  position: absolute;
  width: 260px; height: 260px;
  border-radius: 50%;
  bottom: -50px; left: 15%;
  background: radial-gradient(circle, rgba(249,183,62,0.07) 0%, transparent 68%);
  pointer-events: none;
  animation: mia-drift 28s ease-in-out infinite reverse;
  animation-delay: -10s;
}
.mia-coverage-inner { position: relative; z-index: 1; }
.mia-coverage-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-16);
  align-items: start;
}
.mia-coverage-eyebrow {
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
.mia-coverage-eyebrow svg { width: 13px; height: 13px; }
.mia-coverage h2 {
  font-size: clamp(1.6rem, 3vw, 2.35rem);
  font-weight: 900;
  color: var(--color-white);
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.02em;
  margin-bottom: var(--space-5);
}
.mia-coverage h2 em { color: var(--color-accent); font-style: normal; }
.mia-coverage-body {
  font-size: 0.92rem;
  color: rgba(255,255,255,0.58);
  line-height: 1.82;
  margin-bottom: var(--space-4);
}
/* Technique 8: gradient text on stat numbers */
.mia-stat-row {
  display: flex;
  gap: var(--space-8);
  margin-top: var(--space-8);
  flex-wrap: wrap;
}
.mia-stat-num {
  font-family: var(--font-heading);
  font-size: 2.1rem;
  font-weight: 900;
  line-height: 1;
  background: linear-gradient(135deg, var(--color-secondary) 0%, #f070f0 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  margin-bottom: var(--space-1);
}
.mia-stat-label {
  font-size: 0.7rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1px;
  color: rgba(255,255,255,0.38);
}

/* Facility/signal cards */
.mia-local-panel {
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
}
.mia-signal-card {
  background: rgba(255,255,255,0.04);
  border: 1px solid rgba(255,255,255,0.07);
  border-radius: 14px;
  padding: var(--space-5) var(--space-6);
  transition: border-color var(--transition-base), background var(--transition-base);
}
.mia-signal-card:hover {
  border-color: rgba(229,53,231,0.28);
  background: rgba(255,255,255,0.065);
}
.mia-signal-card h4 {
  font-family: var(--font-heading);
  font-size: 0.85rem;
  font-weight: 800;
  color: var(--color-accent);
  margin-bottom: var(--space-2);
  display: flex;
  align-items: center;
  gap: var(--space-2);
}
.mia-signal-card h4 svg { width: 15px; height: 15px; flex-shrink: 0; }
.mia-signal-card p {
  font-size: 0.82rem;
  color: rgba(255,255,255,0.54);
  line-height: 1.7;
  margin: 0;
}

/* Bilingual note inside coverage section */
.mia-bilingual-note {
  display: flex;
  align-items: flex-start;
  gap: var(--space-3);
  background: rgba(229,53,231,0.08);
  border: 1px solid rgba(229,53,231,0.22);
  border-radius: var(--radius-md);
  padding: var(--space-5) var(--space-5);
  margin-top: var(--space-6);
}
.mia-bilingual-note svg { width: 20px; height: 20px; color: var(--color-secondary); flex-shrink: 0; margin-top: 2px; }
.mia-bilingual-note p {
  font-size: 0.85rem;
  color: rgba(255,255,255,0.72);
  line-height: 1.7;
  margin: 0;
}
.mia-bilingual-note strong { color: var(--color-secondary); }

/* ── SERVICES GRID (white) ── */
.mia-services {
  padding: var(--space-16) 0;
  background: var(--color-white);
}
.mia-services-header {
  text-align: center;
  margin-bottom: var(--space-12);
}
.mia-services h2 {
  font-size: clamp(1.7rem, 3vw, 2.4rem);
  font-weight: 900;
  color: var(--color-dark);
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.02em;
  margin-bottom: var(--space-3);
}
.mia-services h2 em { color: var(--color-secondary); font-style: normal; }
.mia-services-lead {
  font-size: 0.95rem;
  color: var(--color-gray);
  max-width: 520px;
  margin: 0 auto;
  line-height: 1.75;
}

/* Technique 7: neon bottom-border scaleX animation on hover */
.mia-services-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
}
.mia-svc-card {
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
.mia-svc-card::after {
  content: '';
  position: absolute;
  bottom: 0; left: 0; right: 0;
  height: 2px;
  background: linear-gradient(90deg, var(--color-secondary), var(--color-accent));
  transform: scaleX(0);
  transform-origin: left;
  transition: transform 0.32s ease;
}
.mia-svc-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 14px 38px rgba(229,53,231,0.14), 0 4px 10px rgba(0,0,0,0.06);
  border-color: rgba(229,53,231,0.24);
}
.mia-svc-card:hover::after { transform: scaleX(1); }
.mia-svc-icon {
  width: 50px; height: 50px;
  border-radius: 50%;
  background: linear-gradient(135deg, rgba(229,53,231,0.12), rgba(249,183,62,0.08));
  border: 1px solid rgba(229,53,231,0.18);
  display: flex; align-items: center; justify-content: center;
  color: var(--color-secondary);
}
.mia-svc-icon svg { width: 22px; height: 22px; }
.mia-svc-card h3 {
  font-family: var(--font-heading);
  font-size: 0.92rem;
  font-weight: 800;
  color: var(--color-dark);
  margin: 0;
}
.mia-svc-card p {
  font-size: 0.82rem;
  color: var(--color-gray);
  line-height: 1.68;
  margin: 0;
  flex: 1;
}
.mia-svc-link {
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
.mia-svc-link:hover { gap: 8px; }
.mia-svc-link svg { width: 14px; height: 14px; }

/* ── FAQ (light) ── */
/* Technique 6: FAQ accordion — neon left-border + icon 45deg rotate */
.mia-faq {
  padding: var(--space-16) 0;
  background: #f4f6f9;
}
.mia-faq-inner {
  max-width: 840px;
  margin: 0 auto;
}
.mia-faq h2 {
  font-size: clamp(1.6rem, 2.8vw, 2.2rem);
  font-weight: 900;
  color: var(--color-dark);
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.02em;
  margin-bottom: var(--space-3);
}
.mia-faq h2 em { color: var(--color-secondary); font-style: normal; }
.mia-faq-sub {
  font-size: 0.92rem;
  color: var(--color-gray);
  margin-bottom: var(--space-10);
  line-height: 1.75;
}
.mia-faq-list {
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
}
.mia-faq-item {
  background: var(--color-white);
  border: 1px solid rgba(229,53,231,0.10);
  border-left: 3px solid transparent;
  border-radius: var(--radius-lg);
  overflow: hidden;
  transition: border-color var(--transition-base), box-shadow var(--transition-base);
}
.mia-faq-item.open {
  border-left-color: var(--color-secondary);
  border-color: rgba(229,53,231,0.30);
  box-shadow: 0 4px 22px rgba(229,53,231,0.08);
}
.mia-faq-q {
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
.mia-faq-q:hover { color: var(--color-secondary); }
.mia-faq-item.open .mia-faq-q { color: var(--color-secondary); }
.mia-faq-icon {
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
.mia-faq-item.open .mia-faq-icon {
  background: var(--color-secondary);
  color: var(--color-white);
  transform: rotate(45deg);
}
.mia-faq-a {
  display: none;
  padding: 0 var(--space-6) var(--space-5);
  font-size: 0.88rem;
  color: var(--color-gray);
  line-height: 1.8;
  border-top: 1px solid rgba(229,53,231,0.07);
  padding-top: var(--space-4);
}
.mia-faq-item.open .mia-faq-a { display: block; }

/* ── RELATED AREAS ── */
.mia-related {
  padding: var(--space-14) 0;
  background: var(--color-white);
}
.mia-related-header {
  text-align: center;
  margin-bottom: var(--space-10);
}
.mia-related h3 {
  font-size: clamp(1.5rem, 2.5vw, 2rem);
  font-weight: 900;
  color: var(--color-dark);
  text-wrap: balance;
  margin-bottom: var(--space-2);
}
.mia-related-sub {
  font-size: 0.9rem;
  color: var(--color-gray);
}
.mia-related-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
}
.mia-area-card {
  background: linear-gradient(145deg, #09090f, #15082c);
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
.mia-area-card::before {
  content: '';
  position: absolute;
  bottom: 0; left: 0; right: 0;
  height: 2px;
  background: linear-gradient(90deg, var(--color-secondary), var(--color-accent));
  transform: scaleX(0);
  transform-origin: left;
  transition: transform 0.3s ease;
}
.mia-area-card:hover {
  transform: translateY(-4px);
  box-shadow: 0 14px 38px rgba(229,53,231,0.18), 0 4px 12px rgba(0,0,0,0.28);
  border-color: rgba(229,53,231,0.28);
}
.mia-area-card:hover::before { transform: scaleX(1); }
.mia-area-card-icon {
  width: 42px; height: 42px;
  border-radius: 10px;
  background: rgba(255,255,255,0.05);
  border: 1px solid rgba(255,255,255,0.10);
  display: flex; align-items: center; justify-content: center;
  color: var(--color-accent);
}
.mia-area-card-icon svg { width: 20px; height: 20px; }
.mia-area-card h4 {
  font-family: var(--font-heading);
  font-size: 0.95rem;
  font-weight: 800;
  color: var(--color-white);
  margin: 0;
}
.mia-area-card p {
  font-size: 0.8rem;
  color: rgba(255,255,255,0.5);
  line-height: 1.65;
  margin: 0;
  flex: 1;
}
.mia-area-link {
  display: inline-flex;
  align-items: center;
  gap: 4px;
  font-size: 0.78rem;
  font-weight: 800;
  color: var(--color-accent);
  transition: gap var(--transition-fast);
}
.mia-area-link:hover { gap: 8px; }
.mia-area-link svg { width: 13px; height: 13px; }

/* ── EMERGENCY CTA (dark) ── */
.mia-cta {
  padding: var(--space-16) 0;
  background: linear-gradient(135deg, #09090f 0%, #200832 55%, #0a1527 100%);
  position: relative;
  overflow: hidden;
  text-align: center;
}
.mia-cta::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 60% 80% at 15% 50%, rgba(229,53,231,0.13) 0%, transparent 60%),
    radial-gradient(ellipse 48% 72% at 85% 50%, rgba(249,183,62,0.09) 0%, transparent 60%);
  pointer-events: none;
}
.mia-cta-inner {
  position: relative;
  z-index: 1;
  max-width: 580px;
  margin: 0 auto;
}
.mia-cta h2 {
  font-size: clamp(1.5rem, 2.8vw, 2.2rem);
  font-weight: 900;
  color: var(--color-white);
  text-wrap: balance;
  margin-bottom: var(--space-3);
}
.mia-cta h2 em { color: var(--color-secondary); font-style: normal; }
.mia-cta p {
  font-size: 0.95rem;
  color: rgba(255,255,255,0.58);
  max-width: 460px;
  margin: 0 auto var(--space-7);
  line-height: 1.75;
}
.mia-cta-btns {
  display: flex;
  gap: var(--space-3);
  justify-content: center;
  flex-wrap: wrap;
}

/* ── RESPONSIVE ── */
@media (max-width: 1024px) {
  .mia-hero-inner { grid-template-columns: 1fr; }
  .mia-hero-card { display: none; }
  .mia-coverage-grid { grid-template-columns: 1fr; gap: var(--space-10); }
}
@media (max-width: 768px) {
  .mia-services-grid { grid-template-columns: repeat(2, 1fr); }
  .mia-related-grid { grid-template-columns: 1fr; }
  .mia-stat-row { gap: var(--space-6); }
}
@media (max-width: 480px) {
  .mia-services-grid { grid-template-columns: 1fr; }
}
</style>

<main id="main-content">

<!-- ═══ HERO ═══ -->
<section class="mia-hero" aria-label="Bail bonds in Miami, FL — bilingual bondsman">
  <div class="mia-orb mia-orb-1"></div>
  <div class="mia-orb mia-orb-2"></div>
  <div class="mia-orb mia-orb-3"></div>

  <div class="container">
    <div class="mia-hero-inner">
      <div class="mia-hero-left">
        <div class="mia-bilingual-pill">
          <?php echo lucide_icon('globe'); ?>
          En Español &amp; Kreyòl Ayisyen Available
        </div>
        <span class="mia-eyebrow">
          <span class="mia-pulse"></span>
          Miami, FL — Miami-Dade County
        </span>
        <h1>Bail Bonds Near Me in <span class="hl-gold">Miami, FL</span> — <span class="hl-mag">Bilingual</span> Bondsman Available 24/7</h1>
        <p class="mia-hero-answer">Need bail bonds in Miami? Mad Extra Bail Bonds posts bond at Miami-Dade County Jail, TGK, and Metro West — any charge, any hour, in English, Spanish, or Haitian Creole. We are a licensed Florida bail bondsman serving Miami and all of Miami-Dade County, available the moment you call.</p>
        <div class="mia-hero-btns">
          <?php if (!empty($phone)): ?>
          <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>" class="btn-mia-primary">
            <?php echo lucide_icon('phone'); ?> Call Now — 24/7
          </a>
          <?php else: ?>
          <a href="/contact/" class="btn-mia-primary">
            <?php echo lucide_icon('zap'); ?> Get Help Now
          </a>
          <?php endif; ?>
          <a href="/contact/" class="btn-mia-secondary">
            <?php echo lucide_icon('file-text'); ?> Free Consultation
          </a>
        </div>
        <div class="mia-trust-row">
          <span class="mia-trust-badge"><?php echo lucide_icon('shield-check'); ?> Licensed FL Bondsman</span>
          <span class="mia-trust-badge"><?php echo lucide_icon('globe'); ?> Español / Kreyòl</span>
          <span class="mia-trust-badge"><?php echo lucide_icon('clock'); ?> 24/7 Available</span>
          <span class="mia-trust-badge"><?php echo lucide_icon('landmark'); ?> Miami-Dade Familiar</span>
        </div>
      </div>

      <!-- Technique 4: Glassmorphism sidebar card -->
      <div class="mia-hero-card">
        <p class="mia-card-title">Arrest in Miami-Dade?</p>
        <div class="mia-card-lang">
          <span class="mia-lang-pill">English</span>
          <span class="mia-lang-pill">Español</span>
          <span class="mia-lang-pill">Kreyòl</span>
        </div>
        <ul class="mia-card-list">
          <li><span class="mia-check">✓</span> Licensed FL bondsman, 11+ years serving Miami-Dade</li>
          <li><span class="mia-check">✓</span> We pull booking location immediately — Main Jail, TGK, or Metro West</li>
          <li><span class="mia-check">✓</span> Full Spanish-language and Haitian Creole service</li>
          <li><span class="mia-check">✓</span> Immigration bond experience — including Krome Detention</li>
          <li><span class="mia-check">✓</span> Florida 10% premium — no hidden fees</li>
        </ul>
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>" class="mia-card-cta">
          <?php echo lucide_icon('phone'); ?> Llamar Ahora / Call Now
        </a>
        <?php else: ?>
        <a href="/contact/" class="mia-card-cta">Get Help Now</a>
        <?php endif; ?>
        <p class="mia-card-disclaimer">Available every hour — 365 days a year</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SVG DIVIDER: dark → light (flowing wave) ═══ -->
<div class="mia-div-dk-lt" aria-hidden="true">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,60 L0,14 Q180,60 360,30 Q540,0 720,28 Q900,56 1080,22 Q1260,-6 1440,38 L1440,60 Z" fill="#f4f6f9"/>
  </svg>
</div>

<!-- ═══ INTRO / ANSWER SECTION ═══ -->
<section class="mia-intro" aria-label="How bail bonds work in Miami, FL">
  <div class="container">
    <div class="mia-intro-inner">
      <span class="mia-section-eyebrow"><?php echo lucide_icon('zap'); ?> How It Works in Miami</span>
      <h2>How do bail bonds work in <em>Miami, FL</em>?</h2>
      <div class="mia-answer-block">
        <p>Bail bonds in Miami work like this: after an arrest anywhere from Little Havana to Wynwood to Brickell, the defendant is booked and transported to one of Miami-Dade's detention facilities. You call us, we locate your family member in the Miami-Dade system immediately, and we post the full bail — you pay only Florida's required 10% premium. Release processing starts the moment the bond hits the system.</p>
      </div>
      <p>Mad Extra Bail Bonds is a licensed Florida bail bondsman based in Delray Beach, serving Miami and all of Miami-Dade County for over 11 years. Miami is unlike any other city in our service area — with multiple detention facilities, an extraordinarily diverse population, and a bail system that can place the same defendant at different jails depending on charge severity, arresting agency, and available space. We pull the booking record the moment you call so you never waste time calling the wrong facility.</p>
      <p>Miami's neighborhoods each carry their own arrest patterns. The Calle Ocho corridor through Little Havana, the arts scene in Wynwood, the financial district in Brickell, the historic Overtown neighborhood, and Little Haiti near NE 2nd Ave and NW 54th St — our service reaches every corner of Miami. Whether the arrest happened near Bayside Marketplace downtown, on Flagler Street, or near the Kaseya Center in the heart of the city, the process is the same: call us first and we handle everything from that point forward.</p>
      <p>Language is a real factor in Miami. For families whose primary language is Spanish — especially in Little Havana, Flagami, and neighborhoods with large Cuban, Nicaraguan, Colombian, and Venezuelan communities — we provide complete Spanish-language service. For Haitian-American families in Little Haiti and the North Miami corridor, we are experienced with the specific concerns those communities face during a bail crisis.</p>
    </div>
  </div>
</section>

<!-- ═══ SVG DIVIDER: light → dark (angular cut) ═══ -->
<div class="mia-div-lt-dk" aria-hidden="true">
  <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,0 L1440,44 L1440,56 L0,56 Z" fill="#09090f"/>
  </svg>
</div>

<!-- ═══ LOCAL COVERAGE SECTION ═══ -->
<section class="mia-coverage" aria-label="Local coverage in Miami-Dade County">
  <div class="mia-coverage-blob" aria-hidden="true"></div>
  <div class="mia-coverage-blob-2" aria-hidden="true"></div>
  <div class="container mia-coverage-inner">
    <div class="mia-coverage-grid">
      <div>
        <span class="mia-coverage-eyebrow"><?php echo lucide_icon('map-pin'); ?> Miami-Dade Facility Guide</span>
        <h2>Where do <em>Miami arrests go</em> — and how fast is release?</h2>
        <p class="mia-coverage-body">Miami-Dade County runs three primary adult detention facilities, and understanding which one holds your family member matters for how quickly we can post bond. The Miami-Dade Pre-Trial Detention Center (Main Jail) at 1351 NW 12th St — part of the Metro-Justice Complex — handles the highest volume. The Miami-Dade Criminal Justice Center is directly across the street, so felony first appearances often happen the same day as booking.</p>
        <p class="mia-coverage-body">Turner Guilford Knight (TGK) at 7000 NW 41st St in northwest Miami typically handles Hialeah and northwest corridor arrests, while Metro West Detention Center at 13850 NW 41st St handles overflow and certain classification levels. Misdemeanor releases from Miami-Dade facilities typically complete within 6 to 14 hours of our bond posting. Felony charges requiring a bond hearing can run 12 to 48 hours — we begin paperwork immediately to minimize that window.</p>
        <p class="mia-coverage-body">For immigration-related detentions, the Krome Service Processing Center (KSPC) in Richmond Heights is the primary federal ICE facility serving Miami. Immigration bond situations involve a separate process from criminal bonds and require specific handling — we have that experience and can walk your family through each step.</p>

        <div class="mia-bilingual-note">
          <?php echo lucide_icon('globe'); ?>
          <p><strong>Servicio bilingüe disponible / Bilingual service available:</strong> We speak with Miami families in English and Spanish throughout the entire bail bond process — from the first call through final release. Haitian Creole assistance also available for families in Little Haiti and surrounding communities.</p>
        </div>

        <div class="mia-stat-row">
          <div>
            <div class="mia-stat-num">6–14 hrs</div>
            <div class="mia-stat-label">Misdemeanor release window</div>
          </div>
          <div>
            <div class="mia-stat-num">3 facilities</div>
            <div class="mia-stat-label">Miami-Dade detention sites</div>
          </div>
          <div>
            <div class="mia-stat-num">11+ yrs</div>
            <div class="mia-stat-label">Serving Miami-Dade County</div>
          </div>
        </div>
      </div>

      <div class="mia-local-panel">
        <div class="mia-signal-card">
          <h4><?php echo lucide_icon('landmark'); ?> Miami-Dade Main Jail / Pre-Trial Detention Center</h4>
          <p>1351 NW 12th St, Miami — the Metro-Justice Complex is Miami's primary intake facility for city and county arrests. Attached to the Criminal Justice Center where felony first appearances are held. Highest-volume facility in Miami-Dade.</p>
        </div>
        <div class="mia-signal-card">
          <h4><?php echo lucide_icon('building-2'); ?> Turner Guilford Knight (TGK)</h4>
          <p>7000 NW 41st St, Miami — handles a large share of northwest Miami-Dade and Hialeah-area arrests. If an arrest happened near Liberty City, Allapattah, or NW 17th Avenue corridor, TGK is the likely holding facility.</p>
        </div>
        <div class="mia-signal-card">
          <h4><?php echo lucide_icon('shield'); ?> Metro West Detention Center</h4>
          <p>13850 NW 41st St, Miami — overflow and classification-based facility. Some arrests routed here based on charge type or population pressure at the main jail and TGK. We check all three facilities when you call.</p>
        </div>
        <div class="mia-signal-card">
          <h4><?php echo lucide_icon('globe'); ?> Krome Service Processing Center</h4>
          <p>Immigration detentions in the Miami area often route through Krome in Richmond Heights. Immigration bond situations are handled through federal immigration courts — a completely different process. We have experience with Miami-area immigration bonds.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SVG DIVIDER: dark → white (S-curve) ═══ -->
<div class="mia-div-dk-wh" aria-hidden="true">
  <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,28 Q360,0 720,42 Q1080,56 1440,14 L1440,56 L0,56 Z" fill="#ffffff"/>
  </svg>
</div>

<!-- ═══ SERVICES GRID SECTION ═══ -->
<section class="mia-services" aria-label="Bail bond services available in Miami, FL">
  <div class="container">
    <div class="mia-services-header">
      <span class="mia-section-eyebrow"><?php echo lucide_icon('shield'); ?> Services in Miami</span>
      <h2>What bail bond services are available in <em>Miami, FL</em>?</h2>
      <p class="mia-services-lead">Every bail bond service we offer is available for Miami and Miami-Dade arrests — any charge, any facility, 24 hours a day.</p>
    </div>
    <div class="mia-services-grid">
      <?php
      $miaServices = [
        ['slug' => 'bail-bonds',             'name' => 'Bail Bond Services',      'icon' => 'shield',         'desc' => 'General bail bonds for any criminal charge across Miami and Miami-Dade County — Main Jail, TGK, or Metro West, we post bond fast.'],
        ['slug' => 'dui-bail-bonds',          'name' => 'DUI Bail Bonds',          'icon' => 'car',            'desc' => 'DUI arrests near Brickell, Wynwood, downtown Miami, or Coconut Grove — we handle DUI bonds at every Miami-Dade facility.'],
        ['slug' => 'drug-charge-bail-bonds',  'name' => 'Drug Charge Bail Bonds',  'icon' => 'alert-triangle', 'desc' => 'Drug possession and trafficking charges in Miami handled discreetly. We have experience with Miami-Dade drug charge bond situations.'],
        ['slug' => 'felony-bail-bonds',       'name' => 'Felony Bail Bonds',       'icon' => 'gavel',          'desc' => 'Felony bonds in Miami require navigating the Miami-Dade Criminal Justice Center — we know the process and move fast when it matters.'],
        ['slug' => 'immigration-bail-bonds',  'name' => 'Immigration Bail Bonds',  'icon' => 'globe',          'desc' => 'ICE detentions and immigration bonds in Miami, including Krome Detention Center. Fully bilingual immigration bond assistance.'],
        ['slug' => 'warrant-bail-bonds',      'name' => 'Warrant &amp; Traffic Bonds', 'icon' => 'file-warning', 'desc' => 'Outstanding Miami-Dade warrants handled before a routine stop turns into a bigger problem. Traffic bonds resolved quickly.'],
      ];
      foreach ($miaServices as $svc): ?>
      <div class="mia-svc-card">
        <div class="mia-svc-icon"><?php echo lucide_icon($svc['icon']); ?></div>
        <h3><?php echo $svc['name']; ?></h3>
        <p><?php echo $svc['desc']; ?></p>
        <a href="/services/<?php echo $svc['slug']; ?>/" class="mia-svc-link">
          Learn more <?php echo lucide_icon('arrow-right'); ?>
        </a>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══ SVG DIVIDER: white → light (gentle wave) ═══ -->
<div class="mia-div-wh-lt" aria-hidden="true">
  <svg viewBox="0 0 1440 42" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,22 Q360,42 720,12 Q1080,-8 1440,22 L1440,42 L0,42 Z" fill="#f4f6f9"/>
  </svg>
</div>

<!-- ═══ FAQ SECTION ═══ -->
<section class="mia-faq" aria-label="Miami bail bond FAQ">
  <div class="container">
    <div class="mia-faq-inner">
      <span class="mia-section-eyebrow"><?php echo lucide_icon('help-circle'); ?> Common Questions</span>
      <h2>Frequently asked questions about <em>bail bonds in Miami, FL</em></h2>
      <p class="mia-faq-sub">City-specific answers to what Miami-Dade families ask most after an arrest — in English and Spanish.</p>

      <div class="mia-faq-list" role="list">
        <?php foreach ($_faqs as $faq): ?>
        <div class="mia-faq-item" role="listitem">
          <button class="mia-faq-q" aria-expanded="false" onclick="toggleMiaFaq(this)">
            <?php echo htmlspecialchars($faq['q']); ?>
            <span class="mia-faq-icon" aria-hidden="true">+</span>
          </button>
          <div class="mia-faq-a" role="region">
            <p><?php echo htmlspecialchars($faq['a']); ?></p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- ═══ RELATED AREAS ═══ -->
<section class="mia-related" aria-label="Other Miami-Dade cities we serve">
  <div class="container">
    <div class="mia-related-header">
      <h3>Also Serving These Nearby Miami-Dade Cities</h3>
      <p class="mia-related-sub">Mad Extra Bail Bonds covers all of Miami-Dade County — same bilingual, 24/7 service in every city.</p>
    </div>
    <div class="mia-related-grid">
      <a href="/areas/hialeah/" class="mia-area-card">
        <div class="mia-area-card-icon"><?php echo lucide_icon('map-pin'); ?></div>
        <h4>Hialeah</h4>
        <p>Bail bonds in Hialeah — TGK is the primary intake facility. Full Spanish-language service for Hialeah's Cuban-American community. 24/7.</p>
        <span class="mia-area-link">View coverage <?php echo lucide_icon('arrow-right'); ?></span>
      </a>
      <a href="/areas/miami-gardens/" class="mia-area-card">
        <div class="mia-area-card-icon"><?php echo lucide_icon('building-2'); ?></div>
        <h4>Miami Gardens</h4>
        <p>Bail bonds for Miami Gardens arrests — MGPD bookings route to TGK. Hard Rock Stadium event arrest experience. 24/7 service.</p>
        <span class="mia-area-link">View coverage <?php echo lucide_icon('arrow-right'); ?></span>
      </a>
      <a href="/areas/" class="mia-area-card">
        <div class="mia-area-card-icon"><?php echo lucide_icon('globe'); ?></div>
        <h4>All Miami-Dade County</h4>
        <p>We cover every city in Miami-Dade County — same fast, bilingual bail bond service across the entire county, 24 hours a day.</p>
        <span class="mia-area-link">See all areas <?php echo lucide_icon('arrow-right'); ?></span>
      </a>
    </div>
  </div>
</section>

<!-- ═══ EMERGENCY CTA ═══ -->
<section class="mia-cta" aria-label="Emergency bail bond help in Miami">
  <div class="mia-cta-inner">
    <h2>Need a bondsman in <em>Miami right now</em>?</h2>
    <p>We serve Miami's entire diverse community — in English, Spanish, and Haitian Creole. One call starts the release process at any Miami-Dade facility, any hour of the day or night.</p>
    <div class="mia-cta-btns">
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>" class="btn-mia-primary">
        <?php echo lucide_icon('phone'); ?> Call Now — 24/7
      </a>
      <?php endif; ?>
      <a href="/contact/" class="btn-mia-secondary">Send a Message</a>
    </div>
  </div>
</section>

</main>

<script>
function toggleMiaFaq(btn) {
  const item = btn.closest('.mia-faq-item');
  const isOpen = item.classList.contains('open');
  document.querySelectorAll('.mia-faq-item.open').forEach(el => el.classList.remove('open'));
  document.querySelectorAll('.mia-faq-q').forEach(el => el.setAttribute('aria-expanded', 'false'));
  if (!isOpen) {
    item.classList.add('open');
    btn.setAttribute('aria-expanded', 'true');
  }
}
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
