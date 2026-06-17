<?php
/**
 * areas/delray-beach/index.php — Delray Beach Service Area Page
 * Mad Extra Bail Bonds | Page One Insights v6.1
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Bail Bonds Near Me in Delray Beach FL | Mad Extra Bail Bonds | 24/7';
$pageDescription = 'Need bail bonds near you in Delray Beach, FL? Mad Extra Bail Bonds is a licensed FL bondsman serving Delray Beach 24/7. Fast release from Palm Beach County Jail. Call now.';
$canonicalUrl    = $siteUrl . '/areas/delray-beach/';
$currentPage     = 'areas';

$_breadcrumb = generateBreadcrumbSchema([
    ['name' => 'Home',         'url' => $siteUrl . '/'],
    ['name' => 'Service Areas','url' => $siteUrl . '/areas/'],
    ['name' => 'Delray Beach', 'url' => $siteUrl . '/areas/delray-beach/'],
]);

$_serviceSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'Service',
    '@id'         => $siteUrl . '/areas/delray-beach/#service-delray-beach',
    'name'        => 'Bail Bonds in Delray Beach, FL',
    'description' => 'Licensed Florida bail bondsman serving Delray Beach and all of Palm Beach County. Fast release from Palm Beach County Jail, 24/7, any charge.',
    'url'         => $siteUrl . '/areas/delray-beach/',
    'provider'    => ['@id' => $siteUrl . '/#organization'],
    'areaServed'  => [
        ['@type' => 'City',  'name' => 'Delray Beach, FL'],
        ['@type' => 'AdministrativeArea', 'name' => 'Palm Beach County, FL'],
    ],
    'serviceType' => 'Bail Bond Services',
];

$_faqs = [
    [
        'q' => 'How long does it take to bail someone out of jail after an arrest in Delray Beach, FL?',
        'a' => 'Delray Beach arrests are processed through the Palm Beach County Sheriff\'s Office and the arrestee is transported to the Palm Beach County Jail in West Palm Beach — about 25 miles north. After booking, which typically takes 2 to 6 hours, we can post bond and release processing begins immediately. Misdemeanor releases often complete within 4 to 8 hours of arrest. Felony charges may take 12 to 24 hours due to bond hearings at the South County Courthouse. We start working the moment you call — not after booking finishes.',
    ],
    [
        'q' => 'Does Mad Extra Bail Bonds cover arrests in Delray Beach\'s downtown entertainment district?',
        'a' => 'Yes. The Atlantic Avenue corridor and the adjacent Pineapple Grove Arts District generate some of the busiest weekend arrest activity in Palm Beach County. We are familiar with DBPD booking procedures and the typical charges that arise in that area — from disorderly conduct to DUI to misdemeanor assault. These situations come up regularly for us and we handle them quickly.',
    ],
    [
        'q' => 'What is the 10% bail bond premium rate and does it apply in Delray Beach?',
        'a' => 'Florida law fixes the bail bond premium at exactly 10% of the court-ordered bail amount for every Florida county — including Palm Beach County and Delray Beach. This rate cannot legally be lowered or raised by any bondsman. For a $5,000 bail, the premium is $500. For a $50,000 bail, the premium is $5,000. The premium is non-refundable. We may discuss payment plan arrangements for qualifying situations.',
    ],
    [
        'q' => 'Can a bondsman help with federal charges for someone arrested in Palm Beach County?',
        'a' => 'Federal bail bonds are handled differently from state bonds. Federal charges processed in Palm Beach County go through the Paul G. Rogers Federal Building in West Palm Beach, and bail is set by a federal magistrate rather than a state judge. The premium rate structure is different and the paperwork is more complex. We handle federal bail bonds and can walk your family through what to expect from the federal court process.',
    ],
    [
        'q' => 'What happens at a first appearance hearing in Palm Beach County after a Delray Beach arrest?',
        'a' => 'After a Delray Beach arrest, the defendant typically has a first appearance hearing within 24 hours — usually at the South County Courthouse on 2nd Avenue in Delray Beach or via video from the Palm Beach County Jail. At first appearance, a judge reviews the charges, sets or confirms bail, and informs the defendant of their rights. We can advise your family on what to expect before the hearing and be ready to post bond the moment bail is set.',
    ],
];
$_faqSchema = generateFAQSchema($_faqs);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
echo '<script type="application/ld+json">' . json_encode($_breadcrumb,     JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>' . "\n";
echo '<script type="application/ld+json">' . json_encode($_serviceSchema,  JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>' . "\n";
echo '<script type="application/ld+json">' . json_encode($_faqSchema,      JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>' . "\n";
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
/* ============================================================
   DELRAY BEACH AREA PAGE — Mad Extra Bail Bonds
   Premium Tier | Dark/Neon Design System
   Techniques: (1) layered ::before radial gradients on hero,
   (2) noise texture ::after on hero, (3) floating neon orbs
   with keyframe animation, (4) glassmorphism sidebar card
   backdrop-filter, (5) SVG wave dividers (3+ shapes),
   (6) FAQ accordion with neon border on open state,
   (7) service cards with neon hover bottom-border animation,
   (8) gradient text on stat block headings
   ============================================================ */

/* ── 1. HERO ── */
.hero-db {
  position: relative;
  min-height: 58vh;
  display: flex;
  align-items: center;
  background: #09090f;
  overflow: hidden;
  padding-top: var(--nav-height, 72px);
  padding-bottom: var(--space-12);
}

/* Technique 1: layered ::before radial gradients */
.hero-db::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 60% 80% at 2% 60%, rgba(249,183,62,0.18) 0%, transparent 55%),
    radial-gradient(ellipse 48% 68% at 92% 15%, rgba(229,53,231,0.20) 0%, transparent 55%),
    radial-gradient(ellipse 70% 45% at 50% 105%, rgba(9,9,15,0.99) 0%, transparent 80%);
  pointer-events: none;
}

/* Technique 2: noise texture ::after */
.hero-db::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.035'/%3E%3C/svg%3E");
  opacity: 0.48;
  pointer-events: none;
}

/* Technique 3: floating neon orbs with keyframe animation */
.db-orb {
  position: absolute;
  border-radius: 50%;
  pointer-events: none;
  will-change: transform;
}
.db-orb-1 {
  width: 550px; height: 550px;
  top: -180px; right: -60px;
  background: radial-gradient(circle, rgba(229,53,231,0.13) 0%, transparent 68%);
  animation: db-orb-drift 16s ease-in-out infinite;
}
.db-orb-2 {
  width: 320px; height: 320px;
  bottom: -80px; left: 8%;
  background: radial-gradient(circle, rgba(249,183,62,0.11) 0%, transparent 68%);
  animation: db-orb-drift 20s ease-in-out infinite reverse;
  animation-delay: -8s;
}
.db-orb-3 {
  width: 200px; height: 200px;
  top: 30%; left: 42%;
  background: radial-gradient(circle, rgba(229,53,231,0.07) 0%, transparent 70%);
  animation: db-orb-drift 24s ease-in-out infinite;
  animation-delay: -12s;
}
@keyframes db-orb-drift {
  0%,100% { transform: translate(0,0) scale(1); }
  35%     { transform: translate(-16px, 20px) scale(1.05); }
  68%     { transform: translate(12px, -14px) scale(0.96); }
}

.hero-db-inner {
  position: relative;
  z-index: 2;
  display: grid;
  grid-template-columns: 1fr 390px;
  gap: var(--space-12);
  align-items: center;
  padding: var(--space-12) 0;
  width: 100%;
}
.hero-db-left { max-width: 640px; }

.db-eyebrow {
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
  border: 1px solid rgba(249,183,62,0.40);
  border-radius: var(--radius-full);
  background: rgba(249,183,62,0.07);
  margin-bottom: var(--space-5);
}
.db-eyebrow .pulse-dot {
  width: 7px; height: 7px;
  border-radius: 50%;
  background: var(--color-accent);
  box-shadow: 0 0 8px var(--color-accent);
  animation: db-pulse 2s ease-in-out infinite;
  flex-shrink: 0;
}
@keyframes db-pulse {
  0%,100% { opacity:1; transform:scale(1); }
  50%     { opacity:.55; transform:scale(.72); }
}

.hero-db h1 {
  font-size: clamp(1.85rem, 3.8vw, 3.1rem);
  font-weight: 900;
  color: var(--color-white);
  line-height: 1.1;
  margin-bottom: var(--space-5);
  letter-spacing: -0.025em;
  text-wrap: balance;
}
.hero-db h1 .hl-gold { color: var(--color-accent); text-shadow: 0 0 28px rgba(249,183,62,0.55); }
.hero-db h1 .hl-mag  { color: var(--color-secondary); text-shadow: 0 0 28px rgba(229,53,231,0.55); }

.hero-db-answer {
  font-size: 1rem;
  color: rgba(255,255,255,0.68);
  line-height: 1.82;
  margin-bottom: var(--space-7);
  max-width: 560px;
}

.hero-db-btns {
  display: flex;
  gap: var(--space-3);
  flex-wrap: wrap;
  margin-bottom: var(--space-7);
}
.btn-db-primary {
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
  box-shadow: 0 0 24px rgba(249,183,62,0.45), 0 4px 14px rgba(0,0,0,0.3);
  transition: all var(--transition-base);
}
.btn-db-primary:hover {
  background: #ffc94f;
  box-shadow: 0 0 44px rgba(249,183,62,0.70), 0 8px 22px rgba(0,0,0,0.35);
  transform: translateY(-2px);
  color: #0a0d1a;
}
.btn-db-primary svg { width: 15px; height: 15px; }
.btn-db-secondary {
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
.btn-db-secondary:hover {
  background: var(--color-secondary);
  color: var(--color-white);
  border-color: var(--color-secondary);
  box-shadow: 0 0 26px rgba(229,53,231,0.42);
  transform: translateY(-2px);
}

.db-trust-row {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-2);
}
.db-trust-badge {
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
.db-trust-badge svg { width: 11px; height: 11px; color: var(--color-accent); flex-shrink: 0; }

/* Technique 4: glassmorphism hero sidebar card */
.hero-db-card {
  position: relative;
  background: rgba(255,255,255,0.04);
  border: 1px solid rgba(255,255,255,0.11);
  border-radius: 18px;
  padding: var(--space-7) var(--space-6);
  backdrop-filter: blur(14px);
  -webkit-backdrop-filter: blur(14px);
}
.hero-db-card::before {
  content: '';
  position: absolute;
  inset: -1px;
  border-radius: 19px;
  background: linear-gradient(135deg, rgba(249,183,62,0.35) 0%, rgba(229,53,231,0.18) 50%, transparent 100%);
  z-index: -1;
  opacity: 0.45;
}
.dbc-title {
  font-family: var(--font-heading);
  font-size: 1.05rem;
  font-weight: 800;
  color: var(--color-white);
  margin-bottom: var(--space-2);
}
.dbc-sub {
  font-size: 0.68rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  color: var(--color-accent);
  margin-bottom: var(--space-5);
}
.dbc-list {
  list-style: none;
  padding: 0;
  margin: 0 0 var(--space-6);
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
}
.dbc-list li {
  display: flex;
  align-items: flex-start;
  gap: var(--space-2);
  font-size: 0.85rem;
  color: rgba(255,255,255,0.80);
  line-height: 1.5;
}
.dbc-check {
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
.dbc-cta {
  display: block;
  width: 100%;
  padding: 13px;
  background: linear-gradient(135deg, var(--color-accent) 0%, #e89a25 100%);
  color: #0a0d1a;
  font-family: var(--font-heading);
  font-size: 0.82rem;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  border-radius: var(--radius-md);
  text-decoration: none;
  text-align: center;
  box-shadow: 0 4px 22px rgba(249,183,62,0.42);
  transition: all var(--transition-base);
}
.dbc-cta:hover {
  box-shadow: 0 8px 34px rgba(249,183,62,0.60);
  transform: translateY(-1px);
  color: #0a0d1a;
}
.dbc-disclaimer {
  text-align: center;
  font-size: 0.6rem;
  color: rgba(255,255,255,0.3);
  margin-top: var(--space-3);
  line-height: 1.5;
}

/* ── 2. SVG DIVIDERS ── */
.db-div-dark-light { line-height: 0; background: #09090f; }
.db-div-dark-light svg { display: block; width: 100%; }
.db-div-light-dark { line-height: 0; background: #f4f6f9; }
.db-div-light-dark svg { display: block; width: 100%; }
.db-div-dark-white { line-height: 0; background: #09090f; }
.db-div-dark-white svg { display: block; width: 100%; }
.db-div-white-light { line-height: 0; background: #ffffff; }
.db-div-white-light svg { display: block; width: 100%; }

/* ── 3. INTRO / ANSWER SECTION (light) ── */
.db-intro {
  padding: var(--space-16) 0;
  background: #f4f6f9;
}
.db-intro-inner {
  max-width: 860px;
  margin: 0 auto;
}
.db-section-eyebrow {
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
.db-intro h2 {
  font-size: clamp(1.7rem, 3vw, 2.4rem);
  font-weight: 900;
  color: var(--color-dark);
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.02em;
  margin-bottom: var(--space-4);
}
.db-intro h2 em { color: var(--color-secondary); font-style: normal; }
.db-answer-block {
  background: linear-gradient(135deg, rgba(229,53,231,0.07), rgba(249,183,62,0.04));
  border-left: 3px solid var(--color-secondary);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  padding: var(--space-5) var(--space-6);
  margin-bottom: var(--space-6);
}
.db-answer-block p {
  font-size: 0.95rem;
  color: var(--color-dark);
  line-height: 1.8;
  margin: 0;
  font-style: italic;
}
.db-intro p {
  font-size: 0.95rem;
  color: var(--color-gray);
  line-height: 1.82;
  margin-bottom: var(--space-4);
}

/* ── 4. LOCAL COVERAGE SECTION (dark) ── */
.db-coverage {
  padding: var(--space-16) 0;
  background: linear-gradient(135deg, #09090f 0%, #120830 55%, #0a1426 100%);
  position: relative;
  overflow: hidden;
}
.db-coverage::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 50% 70% at 5% 50%, rgba(229,53,231,0.10) 0%, transparent 60%),
    radial-gradient(ellipse 40% 60% at 95% 50%, rgba(249,183,62,0.08) 0%, transparent 60%);
  pointer-events: none;
}
/* Floating orb blob decoration in local coverage section */
.db-coverage-blob {
  position: absolute;
  width: 360px; height: 360px;
  border-radius: 50%;
  top: -80px; right: 10%;
  background: radial-gradient(circle, rgba(229,53,231,0.08) 0%, transparent 70%);
  pointer-events: none;
  animation: db-orb-drift 18s ease-in-out infinite;
}
.db-coverage-inner {
  position: relative;
  z-index: 1;
}
.db-coverage-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-16);
  align-items: start;
}
.db-coverage-left {}
.db-coverage-eyebrow {
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
.db-coverage h2 {
  font-size: clamp(1.6rem, 3vw, 2.3rem);
  font-weight: 900;
  color: var(--color-white);
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.02em;
  margin-bottom: var(--space-5);
}
.db-coverage h2 em { color: var(--color-accent); font-style: normal; }
.db-coverage-body {
  font-size: 0.92rem;
  color: rgba(255,255,255,0.60);
  line-height: 1.82;
  margin-bottom: var(--space-4);
}

/* Technique 8: gradient text on stats */
.db-stat-row {
  display: flex;
  gap: var(--space-8);
  margin-top: var(--space-8);
}
.db-stat-item {}
.db-stat-num {
  font-family: var(--font-heading);
  font-size: 2.2rem;
  font-weight: 900;
  line-height: 1;
  background: linear-gradient(135deg, var(--color-accent) 0%, #fcd87e 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  margin-bottom: var(--space-1);
}
.db-stat-label {
  font-size: 0.7rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1px;
  color: rgba(255,255,255,0.4);
}

/* Local signals cards */
.db-local-panel {
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
}
.db-signal-card {
  background: rgba(255,255,255,0.04);
  border: 1px solid rgba(255,255,255,0.08);
  border-radius: 14px;
  padding: var(--space-5) var(--space-6);
  transition: border-color var(--transition-base), background var(--transition-base);
}
.db-signal-card:hover {
  border-color: rgba(229,53,231,0.28);
  background: rgba(255,255,255,0.06);
}
.db-signal-card h4 {
  font-family: var(--font-heading);
  font-size: 0.85rem;
  font-weight: 800;
  color: var(--color-accent);
  margin-bottom: var(--space-2);
  display: flex;
  align-items: center;
  gap: var(--space-2);
}
.db-signal-card h4 svg { width: 15px; height: 15px; flex-shrink: 0; }
.db-signal-card p {
  font-size: 0.82rem;
  color: rgba(255,255,255,0.55);
  line-height: 1.7;
  margin: 0;
}

/* ── 5. SERVICES GRID SECTION (white) ── */
.db-services {
  padding: var(--space-16) 0;
  background: var(--color-white);
}
.db-services-header {
  text-align: center;
  margin-bottom: var(--space-12);
}
.db-services h2 {
  font-size: clamp(1.7rem, 3vw, 2.4rem);
  font-weight: 900;
  color: var(--color-dark);
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.02em;
  margin-bottom: var(--space-3);
}
.db-services h2 em { color: var(--color-secondary); font-style: normal; }
.db-services-lead {
  font-size: 0.95rem;
  color: var(--color-gray);
  max-width: 500px;
  margin: 0 auto;
  line-height: 1.75;
}

/* Technique 7: service cards with neon hover bottom-border animation */
.db-services-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
}
.db-svc-card {
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
.db-svc-card::after {
  content: '';
  position: absolute;
  bottom: 0; left: 0; right: 0;
  height: 2px;
  background: linear-gradient(90deg, var(--color-secondary), var(--color-accent));
  transform: scaleX(0);
  transform-origin: left;
  transition: transform 0.3s ease;
}
.db-svc-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 14px 36px rgba(229,53,231,0.14), 0 4px 10px rgba(0,0,0,0.06);
  border-color: rgba(229,53,231,0.24);
}
.db-svc-card:hover::after { transform: scaleX(1); }
.db-svc-icon {
  width: 50px; height: 50px;
  border-radius: 50%;
  background: linear-gradient(135deg, rgba(229,53,231,0.12), rgba(249,183,62,0.08));
  border: 1px solid rgba(229,53,231,0.18);
  display: flex; align-items: center; justify-content: center;
  color: var(--color-secondary);
}
.db-svc-icon svg { width: 22px; height: 22px; }
.db-svc-card h3 {
  font-family: var(--font-heading);
  font-size: 0.92rem;
  font-weight: 800;
  color: var(--color-dark);
  margin: 0;
}
.db-svc-card p {
  font-size: 0.82rem;
  color: var(--color-gray);
  line-height: 1.68;
  margin: 0;
  flex: 1;
}
.db-svc-link {
  display: inline-flex;
  align-items: center;
  gap: 4px;
  font-size: 0.78rem;
  font-weight: 800;
  color: var(--color-secondary);
  margin-top: auto;
  transition: gap var(--transition-fast);
}
.db-svc-link:hover { gap: 8px; }
.db-svc-link svg { width: 14px; height: 14px; }

/* ── 6. FAQ SECTION (light) ── */
.db-faq {
  padding: var(--space-16) 0;
  background: #f4f6f9;
}
.db-faq-inner {
  max-width: 820px;
  margin: 0 auto;
}
.db-faq h2 {
  font-size: clamp(1.6rem, 2.8vw, 2.2rem);
  font-weight: 900;
  color: var(--color-dark);
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.02em;
  margin-bottom: var(--space-3);
}
.db-faq h2 em { color: var(--color-secondary); font-style: normal; }
.db-faq-sub {
  font-size: 0.92rem;
  color: var(--color-gray);
  margin-bottom: var(--space-10);
  line-height: 1.75;
}
.db-faq-list {
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
}

/* Technique 6: FAQ accordion with neon border on open state */
.db-faq-item {
  background: var(--color-white);
  border: 1px solid rgba(229,53,231,0.11);
  border-radius: var(--radius-lg);
  overflow: hidden;
  transition: border-color var(--transition-base), box-shadow var(--transition-base);
}
.db-faq-item.open {
  border-color: rgba(229,53,231,0.38);
  box-shadow: 0 4px 20px rgba(229,53,231,0.09);
}
.db-faq-q {
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
.db-faq-q:hover { color: var(--color-secondary); }
.db-faq-item.open .db-faq-q { color: var(--color-secondary); }
.db-faq-icon {
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
.db-faq-item.open .db-faq-icon {
  background: var(--color-secondary);
  color: var(--color-white);
  transform: rotate(45deg);
}
.db-faq-a {
  display: none;
  padding: 0 var(--space-6) var(--space-5);
  font-size: 0.88rem;
  color: var(--color-gray);
  line-height: 1.8;
  border-top: 1px solid rgba(229,53,231,0.07);
  padding-top: var(--space-4);
}
.db-faq-item.open .db-faq-a { display: block; }

/* ── 7. RELATED AREAS ── */
.db-related {
  padding: var(--space-14) 0;
  background: var(--color-white);
}
.db-related-header {
  text-align: center;
  margin-bottom: var(--space-10);
}
.db-related h3 {
  font-size: clamp(1.5rem, 2.5vw, 2rem);
  font-weight: 900;
  color: var(--color-dark);
  text-wrap: balance;
  margin-bottom: var(--space-2);
}
.db-related-sub {
  font-size: 0.9rem;
  color: var(--color-gray);
}
.db-related-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
}
.db-area-card {
  background: linear-gradient(145deg, #09090f, #14082a);
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
.db-area-card::before {
  content: '';
  position: absolute;
  bottom: 0; left: 0; right: 0;
  height: 2px;
  background: linear-gradient(90deg, var(--color-accent), var(--color-secondary));
  transform: scaleX(0);
  transform-origin: left;
  transition: transform 0.3s ease;
}
.db-area-card:hover {
  transform: translateY(-4px);
  box-shadow: 0 14px 36px rgba(229,53,231,0.18), 0 4px 12px rgba(0,0,0,0.3);
  border-color: rgba(229,53,231,0.28);
}
.db-area-card:hover::before { transform: scaleX(1); }
.db-area-card-icon {
  width: 42px; height: 42px;
  border-radius: 10px;
  background: rgba(255,255,255,0.05);
  border: 1px solid rgba(255,255,255,0.10);
  display: flex; align-items: center; justify-content: center;
  color: var(--color-accent);
}
.db-area-card-icon svg { width: 20px; height: 20px; }
.db-area-card h4 {
  font-family: var(--font-heading);
  font-size: 0.95rem;
  font-weight: 800;
  color: var(--color-white);
  margin: 0;
}
.db-area-card p {
  font-size: 0.8rem;
  color: rgba(255,255,255,0.52);
  line-height: 1.65;
  margin: 0;
  flex: 1;
}
.db-area-card-link {
  display: inline-flex;
  align-items: center;
  gap: 4px;
  font-size: 0.78rem;
  font-weight: 800;
  color: var(--color-accent);
  transition: gap var(--transition-fast);
}
.db-area-card-link:hover { gap: 8px; }
.db-area-card-link svg { width: 13px; height: 13px; }

/* ── 8. EMERGENCY CTA (dark) ── */
.db-cta {
  padding: var(--space-14) 0;
  background: linear-gradient(135deg, #09090f 0%, #1e082e 55%, #0a1525 100%);
  position: relative;
  overflow: hidden;
  text-align: center;
}
.db-cta::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 55% 80% at 20% 50%, rgba(249,183,62,0.12) 0%, transparent 60%),
    radial-gradient(ellipse 45% 70% at 80% 50%, rgba(229,53,231,0.10) 0%, transparent 60%);
  pointer-events: none;
}
.db-cta-inner {
  position: relative;
  z-index: 1;
  max-width: 560px;
  margin: 0 auto;
}
.db-cta h2 {
  font-size: clamp(1.5rem, 2.8vw, 2.2rem);
  font-weight: 900;
  color: var(--color-white);
  text-wrap: balance;
  margin-bottom: var(--space-3);
}
.db-cta h2 em { color: var(--color-accent); font-style: normal; }
.db-cta p {
  font-size: 0.95rem;
  color: rgba(255,255,255,0.58);
  max-width: 440px;
  margin: 0 auto var(--space-7);
  line-height: 1.75;
}
.db-cta-btns {
  display: flex;
  gap: var(--space-3);
  justify-content: center;
  flex-wrap: wrap;
}

/* ── RESPONSIVE ── */
@media (max-width: 1024px) {
  .hero-db-inner { grid-template-columns: 1fr; }
  .hero-db-card { display: none; }
  .db-coverage-grid { grid-template-columns: 1fr; gap: var(--space-10); }
}
@media (max-width: 768px) {
  .db-services-grid { grid-template-columns: repeat(2, 1fr); }
  .db-related-grid { grid-template-columns: 1fr; }
  .db-stat-row { gap: var(--space-6); }
}
@media (max-width: 480px) {
  .db-services-grid { grid-template-columns: 1fr; }
}
</style>

<main id="main-content">

<!-- ═══ HERO ═══ -->
<section class="hero-db" aria-label="Bail bonds in Delray Beach, FL">
  <div class="db-orb db-orb-1"></div>
  <div class="db-orb db-orb-2"></div>
  <div class="db-orb db-orb-3"></div>

  <div class="container">
    <div class="hero-db-inner">
      <div class="hero-db-left">
        <span class="db-eyebrow">
          <span class="pulse-dot"></span>
          Delray Beach, FL — Palm Beach County
        </span>
        <h1>Bail Bonds Near Me in <span class="hl-gold">Delray Beach, FL</span> — Licensed Bondsman Available <span class="hl-mag">24/7</span></h1>
        <p class="hero-db-answer">Need bail bonds near you in Delray Beach? Mad Extra Bail Bonds posts bond at the Palm Beach County Jail within hours of your call — any charge, any hour. We are a licensed Florida bail bondsman based right here in Delray Beach, serving Palm Beach County families for over 11 years.</p>
        <div class="hero-db-btns">
          <?php if (!empty($phone)): ?>
          <a href="tel:<?php echo preg_replace('/\D/','', $phone); ?>" class="btn-db-primary">
            <?php echo lucide_icon('phone'); ?> Call Now — 24/7
          </a>
          <?php else: ?>
          <a href="/contact/" class="btn-db-primary">
            <?php echo lucide_icon('zap'); ?> Get Help Now
          </a>
          <?php endif; ?>
          <a href="/contact/" class="btn-db-secondary">Free Consultation</a>
        </div>
        <div class="db-trust-row">
          <span class="db-trust-badge"><?php echo lucide_icon('shield-check'); ?> Licensed FL Bondsman</span>
          <span class="db-trust-badge"><?php echo lucide_icon('clock'); ?> 24/7 Available</span>
          <span class="db-trust-badge"><?php echo lucide_icon('map-pin'); ?> Based in Delray Beach</span>
          <span class="db-trust-badge"><?php echo lucide_icon('landmark'); ?> PBCJ Familiar</span>
        </div>
      </div>

      <!-- Technique 4: Glassmorphism sidebar card -->
      <div class="hero-db-card">
        <p class="dbc-title">Need Help in Delray Beach?</p>
        <p class="dbc-sub">Immediate 24/7 Response</p>
        <ul class="dbc-list">
          <li><span class="dbc-check">✓</span> Licensed FL bondsman, based in Delray Beach</li>
          <li><span class="dbc-check">✓</span> Direct line to Palm Beach County Jail</li>
          <li><span class="dbc-check">✓</span> Familiar with DBPD &amp; South County Courthouse</li>
          <li><span class="dbc-check">✓</span> 10% FL legal rate — no hidden charges</li>
          <li><span class="dbc-check">✓</span> Same-day release possible on misdemeanors</li>
        </ul>
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo preg_replace('/\D/','', $phone); ?>" class="dbc-cta">
          <?php echo lucide_icon('phone'); ?> Call Now
        </a>
        <?php else: ?>
        <a href="/contact/" class="dbc-cta">Get Help Now</a>
        <?php endif; ?>
        <p class="dbc-disclaimer">Available every hour — 365 days a year</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SVG DIVIDER: dark → light (wave shape) ═══ -->
<div class="db-div-dark-light" aria-hidden="true">
  <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,56 L0,10 Q360,56 720,24 Q1080,-4 1440,36 L1440,56 Z" fill="#f4f6f9"/>
  </svg>
</div>

<!-- ═══ INTRO / ANSWER SECTION ═══ -->
<section class="db-intro" aria-label="How bail bonds work in Delray Beach, FL">
  <div class="container">
    <div class="db-intro-inner">
      <span class="db-section-eyebrow">How It Works in Delray Beach</span>
      <h2>How do bail bonds work in <em>Delray Beach, FL</em>?</h2>
      <div class="db-answer-block">
        <p>Bail bonds in Delray Beach work like this: after an arrest by the Delray Beach Police Department, the defendant is booked and transported to the Palm Beach County Jail in West Palm Beach. You call us, we verify the bond amount with the jail, and we post the full bail — you pay only the Florida-required 10% premium. Release processing begins immediately after posting.</p>
      </div>
      <p>Mad Extra Bail Bonds is a licensed Florida bail bondsman based in Delray Beach, serving Delray Beach and all of Palm Beach County. Being based in Delray Beach means we understand the local landscape: the Delray Beach Police Department on Atlantic Avenue, the South County Courthouse on 2nd Avenue, and the PBSO protocols that govern how Delray Beach arrests are processed before transport to the main jail in West Palm Beach.</p>
      <p>Delray Beach arrests happen for a range of reasons — weekend activity on the Atlantic Avenue entertainment corridor generates its share of disorderly conduct, DUI, and misdemeanor charges, especially around the Pineapple Grove Arts District. The Lake Ida neighborhood, the Bankers Row Historic District, and residential areas along A1A near Delray Municipal Beach see their own mix of situations. Whatever the charge, whatever the neighborhood, our process is the same: call us first, let us handle the jail from there.</p>
      <p>Florida law fixes the bail bond premium at exactly 10% of the court-ordered bail amount — this applies in Delray Beach exactly as it does everywhere else in Florida. If a judge sets bail at $10,000, the premium is $1,000. We are transparent about every cost before you sign anything.</p>
    </div>
  </div>
</section>

<!-- ═══ SVG DIVIDER: light → dark (angular wave) ═══ -->
<div class="db-div-light-dark" aria-hidden="true">
  <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,0 Q360,56 720,28 Q1080,0 1440,44 L1440,56 L0,56 Z" fill="#09090f"/>
  </svg>
</div>

<!-- ═══ LOCAL COVERAGE SECTION ═══ -->
<section class="db-coverage" aria-label="Local coverage in Delray Beach">
  <div class="db-coverage-blob" aria-hidden="true"></div>
  <div class="container db-coverage-inner">
    <div class="db-coverage-grid">
      <div class="db-coverage-left">
        <span class="db-coverage-eyebrow"><?php echo lucide_icon('map-pin'); ?> Local Coverage</span>
        <h2>Which jail serves <em>Delray Beach</em> and how fast is release?</h2>
        <p class="db-coverage-body">Arrests made in Delray Beach are processed by the Delray Beach Police Department and the Palm Beach County Sheriff's Office, then transported to the Palm Beach County Jail at 3228 Gun Club Road in West Palm Beach — approximately 25 miles north of Delray Beach. First appearances for Delray Beach defendants are often held at the South County Courthouse at 200 West Atlantic Avenue.</p>
        <p class="db-coverage-body">Misdemeanor releases from the Palm Beach County Jail typically complete within 4 to 8 hours of our bond posting. Felony charges may require a bond hearing first, pushing the timeline to 12 to 24 hours. We begin paperwork before booking is complete and stay in contact with you through every step.</p>
        <p class="db-coverage-body">Delray Beach's Don Estridge High Tech Middle School and Atlantic High School communities, the residential neighborhoods around Tropic Isle and The SET neighborhood — when anyone in Delray Beach or surrounding Palm Beach County is arrested, we can reach the Palm Beach County Jail faster than a bondsman based elsewhere in South Florida.</p>

        <div class="db-stat-row">
          <div class="db-stat-item">
            <div class="db-stat-num">4–8 hrs</div>
            <div class="db-stat-label">Typical misdemeanor release</div>
          </div>
          <div class="db-stat-item">
            <div class="db-stat-num">~25 mi</div>
            <div class="db-stat-label">Delray to PBCJ distance</div>
          </div>
          <div class="db-stat-item">
            <div class="db-stat-num">11+ yrs</div>
            <div class="db-stat-label">Serving Palm Beach County</div>
          </div>
        </div>
      </div>

      <div class="db-local-panel">
        <div class="db-signal-card">
          <h4><?php echo lucide_icon('landmark'); ?> Palm Beach County Jail</h4>
          <p>3228 Gun Club Road, West Palm Beach, FL — all Delray Beach arrests are transported here after booking. We are highly familiar with intake and release procedures at this facility.</p>
        </div>
        <div class="db-signal-card">
          <h4><?php echo lucide_icon('scale'); ?> South County Courthouse</h4>
          <p>200 West Atlantic Avenue, Delray Beach — first appearances for Delray Beach defendants are often held here. Bond may be set or modified at first appearance, and we can post immediately after.</p>
        </div>
        <div class="db-signal-card">
          <h4><?php echo lucide_icon('map-pin'); ?> Atlantic Avenue Corridor</h4>
          <p>Delray Beach's main entertainment strip generates significant weekend arrest activity — disorderly conduct, DUI, and misdemeanor charges are common around Pineapple Grove and east of Swinton Avenue. We handle these regularly.</p>
        </div>
        <div class="db-signal-card">
          <h4><?php echo lucide_icon('shield'); ?> Delray Beach Police Department</h4>
          <p>DBPD headquarters on Atlantic Avenue processes city arrests before transfer to PBSO custody for transport to the county jail. We know the DBPD booking process well after 11 years in Delray Beach.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SVG DIVIDER: dark → white (smooth curve) ═══ -->
<div class="db-div-dark-white" aria-hidden="true">
  <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,0 Q720,56 1440,12 L1440,56 L0,56 Z" fill="#ffffff"/>
  </svg>
</div>

<!-- ═══ SERVICES GRID SECTION ═══ -->
<section class="db-services" aria-label="Bail bond services available in Delray Beach">
  <div class="container">
    <div class="db-services-header">
      <span class="db-section-eyebrow">Services in Delray Beach</span>
      <h2>What bail bond services are available in <em>Delray Beach, FL</em>?</h2>
      <p class="db-services-lead">Every bail bond service we provide is available for Delray Beach arrests — any charge, 24 hours a day.</p>
    </div>
    <div class="db-services-grid">
      <?php
      $dbServices = [
        ['slug' => 'bail-bonds',           'name' => 'Bail Bond Services',      'icon' => 'shield',         'desc' => 'General bail bond services for any criminal charge after a Delray Beach arrest — post bond at the Palm Beach County Jail the same day.'],
        ['slug' => 'dui-bail-bonds',        'name' => 'DUI Bail Bonds',          'icon' => 'car',            'desc' => 'DUI arrests near Atlantic Avenue or A1A in Delray Beach are common weekend charges — we move fast on DUI bonds at PBCJ.'],
        ['slug' => 'drug-charge-bail-bonds','name' => 'Drug Charge Bail Bonds',  'icon' => 'alert-triangle', 'desc' => 'Drug possession and trafficking charges in Delray Beach and Palm Beach County handled with speed and discretion.'],
        ['slug' => 'felony-bail-bonds',     'name' => 'Felony Bail Bonds',       'icon' => 'gavel',          'desc' => 'Higher bail amounts and bond hearings at the South County Courthouse — we navigate felony bail in Palm Beach County with 11+ years of experience.'],
        ['slug' => 'misdemeanor-bail-bonds','name' => 'Misdemeanor Bail Bonds',  'icon' => 'file-text',      'desc' => 'Most Delray Beach misdemeanor releases complete within hours — we get the paperwork moving before you hang up the phone.'],
        ['slug' => 'warrant-bail-bonds',    'name' => 'Warrant &amp; Traffic Bonds','icon' => 'file-warning',  'desc' => 'Outstanding warrants through Delray Beach Municipal Court or Palm Beach County — resolve them before a routine stop becomes an arrest.'],
      ];
      foreach ($dbServices as $svc): ?>
      <div class="db-svc-card">
        <div class="db-svc-icon"><?php echo lucide_icon($svc['icon']); ?></div>
        <h3><?php echo $svc['name']; ?></h3>
        <p><?php echo $svc['desc']; ?></p>
        <a href="/services/<?php echo $svc['slug']; ?>/" class="db-svc-link">
          Learn more <?php echo lucide_icon('arrow-right'); ?>
        </a>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══ SVG DIVIDER: white → light ═══ -->
<div class="db-div-white-light" aria-hidden="true">
  <svg viewBox="0 0 1440 40" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,20 Q360,40 720,10 Q1080,-10 1440,20 L1440,40 L0,40 Z" fill="#f4f6f9"/>
  </svg>
</div>

<!-- ═══ FAQ SECTION ═══ -->
<section class="db-faq" aria-label="Delray Beach bail bond FAQ">
  <div class="container">
    <div class="db-faq-inner">
      <span class="db-section-eyebrow">Common Questions</span>
      <h2>Frequently asked questions about <em>bail bonds in Delray Beach, FL</em></h2>
      <p class="db-faq-sub">Specific answers to what Delray Beach families ask most when a loved one is arrested.</p>

      <div class="db-faq-list" role="list">
        <?php foreach ($_faqs as $i => $faq): ?>
        <div class="db-faq-item" role="listitem">
          <button class="db-faq-q" aria-expanded="false" onclick="toggleDbFaq(this)">
            <?php echo htmlspecialchars($faq['q']); ?>
            <span class="db-faq-icon" aria-hidden="true">+</span>
          </button>
          <div class="db-faq-a" role="region">
            <p><?php echo htmlspecialchars($faq['a']); ?></p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- ═══ RELATED AREAS ═══ -->
<section class="db-related" aria-label="Other cities we serve near Delray Beach">
  <div class="container">
    <div class="db-related-header">
      <h3>Also Serving These Nearby Cities</h3>
      <p class="db-related-sub">Mad Extra Bail Bonds covers all of Palm Beach County — same 24/7 service in every city.</p>
    </div>
    <div class="db-related-grid">
      <a href="/areas/boca-raton/" class="db-area-card">
        <div class="db-area-card-icon"><?php echo lucide_icon('map-pin'); ?></div>
        <h4>Boca Raton</h4>
        <p>Bail bonds for Boca Raton arrests — BRPSD bookings transferred to Palm Beach County Jail. 24/7 service.</p>
        <span class="db-area-card-link">View coverage <?php echo lucide_icon('arrow-right'); ?></span>
      </a>
      <a href="/areas/west-palm-beach/" class="db-area-card">
        <div class="db-area-card-icon"><?php echo lucide_icon('landmark'); ?></div>
        <h4>West Palm Beach</h4>
        <p>Adjacent to the Palm Beach County Jail — fastest possible response times for West Palm Beach arrests.</p>
        <span class="db-area-card-link">View coverage <?php echo lucide_icon('arrow-right'); ?></span>
      </a>
      <a href="/areas/" class="db-area-card">
        <div class="db-area-card-icon"><?php echo lucide_icon('globe'); ?></div>
        <h4>All Palm Beach County</h4>
        <p>Boynton Beach, Lake Worth Beach, Palm Beach Gardens — we cover every city in Palm Beach County.</p>
        <span class="db-area-card-link">See all areas <?php echo lucide_icon('arrow-right'); ?></span>
      </a>
    </div>
  </div>
</section>

<!-- ═══ EMERGENCY CTA ═══ -->
<section class="db-cta" aria-label="Emergency bail bond help in Delray Beach">
  <div class="db-cta-inner">
    <h2>Need a bondsman in <em>Delray Beach right now</em>?</h2>
    <p>We are based in Delray Beach and know the Palm Beach County Jail and South County Courthouse inside and out. One call starts the process — 24 hours a day, 365 days a year.</p>
    <div class="db-cta-btns">
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo preg_replace('/\D/','', $phone); ?>" class="btn-db-primary">
        <?php echo lucide_icon('phone'); ?> Call Now — 24/7
      </a>
      <?php endif; ?>
      <a href="/contact/" class="btn-db-secondary">Send a Message</a>
    </div>
  </div>
</section>

</main>

<script>
function toggleDbFaq(btn) {
  const item = btn.closest('.db-faq-item');
  const isOpen = item.classList.contains('open');
  document.querySelectorAll('.db-faq-item.open').forEach(el => el.classList.remove('open'));
  document.querySelectorAll('.db-faq-q').forEach(el => el.setAttribute('aria-expanded', 'false'));
  if (!isOpen) {
    item.classList.add('open');
    btn.setAttribute('aria-expanded', 'true');
  }
}
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
