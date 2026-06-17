<?php
/**
 * areas/boca-raton/index.php — Boca Raton Service Area Page
 * Mad Extra Bail Bonds | Page One Insights v6.1
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Bail Bonds Near Me in Boca Raton FL | Mad Extra Bail Bonds | 24/7';
$pageDescription = 'Need bail bonds in Boca Raton, FL? Mad Extra Bail Bonds is a licensed FL bondsman serving Boca Raton families 24/7. Post bail fast at Palm Beach County Jail. Call now.';
$canonicalUrl    = $siteUrl . '/areas/boca-raton/';
$currentPage     = 'areas';

$_breadcrumb = generateBreadcrumbSchema([
    ['name' => 'Home',         'url' => $siteUrl . '/'],
    ['name' => 'Service Areas','url' => $siteUrl . '/areas/'],
    ['name' => 'Boca Raton',   'url' => $siteUrl . '/areas/boca-raton/'],
]);

$_serviceSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'Service',
    '@id'         => $siteUrl . '/areas/boca-raton/#service-boca-raton',
    'name'        => 'Bail Bonds in Boca Raton, FL',
    'description' => 'Licensed Florida bail bondsman serving Boca Raton and all of Palm Beach County. Fast release from Palm Beach County Jail after BRPSD arrests, 24/7, any charge.',
    'url'         => $siteUrl . '/areas/boca-raton/',
    'provider'    => ['@id' => $siteUrl . '/#organization'],
    'areaServed'  => [
        ['@type' => 'City',  'name' => 'Boca Raton, FL'],
        ['@type' => 'AdministrativeArea', 'name' => 'Palm Beach County, FL'],
    ],
    'serviceType' => 'Bail Bond Services',
];

$_faqs = [
    [
        'q' => 'How does the bail process work after an arrest in Boca Raton, FL?',
        'a' => 'When someone is arrested in Boca Raton, the Boca Raton Police Services Department books them locally, then transfers custody to the Palm Beach County Sheriff\'s Office for transport to the Palm Beach County Jail at 3228 Gun Club Road in West Palm Beach — about 30 miles north of Boca Raton. After booking is complete (typically 2 to 6 hours), we can post bond and release processing begins. Misdemeanor releases often complete within 4 to 8 hours. Felony charges may require a bond hearing first. Call us the moment you learn of the arrest — we start working immediately.',
    ],
    [
        'q' => 'Are bail bond rates in Boca Raton the same as the rest of Florida?',
        'a' => 'Yes, the bail bond premium rate is fixed by Florida law at exactly 10% of the court-ordered bail amount, and it applies identically in Boca Raton, Delray Beach, Miami, or anywhere else in Florida — regardless of the income level of the defendant, the wealth of the city, or the bondsman\'s preference. No Florida bondsman can legally charge more or less than 10%. The premium is non-refundable once the bond is posted.',
    ],
    [
        'q' => 'Can Mad Extra handle white-collar or fraud charge bail bonds in Boca Raton?',
        'a' => 'Yes. Boca Raton\'s concentration of corporate offices along the Yamato Road corridor and the Town Center area generates a higher proportion of financial crime, fraud, and white-collar arrests than most Palm Beach County cities. These cases often carry higher bail amounts set at bond hearings. We have experience handling complex financial charge bail situations in Palm Beach County — higher bail amounts are manageable with our direct relationships at the Palm Beach County Jail and the courthouse.',
    ],
    [
        'q' => 'What FAU student arrests in Boca Raton can Mad Extra Bail Bonds help with?',
        'a' => 'Florida Atlantic University campus arrests for underage drinking, drug possession, disorderly conduct, or assault are processed through the Boca Raton Police Services Department and then transferred to the Palm Beach County Jail. Parents calling from out of state are a common situation for us — we walk families through the entire process remotely and can have paperwork signed electronically in many cases. If your student was arrested at or near FAU\'s Boca Raton campus, call us immediately.',
    ],
    [
        'q' => 'How fast can Mad Extra post bail after a Boca Raton arrest?',
        'a' => 'From the moment you call, we begin gathering information and contacting the Palm Beach County Jail to verify the bond. For misdemeanor charges, we can typically post bond within 1 to 3 hours of your call, and release processing at the jail takes another 2 to 5 hours after that. Total time from arrest to release for a Boca Raton misdemeanor is commonly in the 4 to 8 hour range. Felony charges requiring a bond hearing at the Palm Beach County Courthouse add time — we keep you updated through the entire process.',
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
   BOCA RATON AREA PAGE — Mad Extra Bail Bonds
   Premium Tier | Dark/Neon Design System
   Techniques: (1) layered ::before radial gradients — magenta
   dominant on hero left, gold accent top-right,
   (2) noise texture ::after on hero, (3) floating neon orbs
   — asymmetric placement unique to this page,
   (4) glassmorphism hero sidebar with magenta gradient border,
   (5) SVG dividers — different wave shapes from Delray page,
   (6) FAQ accordion with neon magenta border on open state,
   (7) service cards with amber hover bottom-border glow,
   (8) gradient text on two-tone section heading
   ============================================================ */

/* ── 1. HERO ── */
.hero-br {
  position: relative;
  min-height: 60vh;
  display: flex;
  align-items: center;
  background: #09090f;
  overflow: hidden;
  padding-top: var(--nav-height, 72px);
  padding-bottom: var(--space-12);
}

/* Technique 1: layered ::before radial gradients — magenta dominant */
.hero-br::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 65% 85% at 3% 50%, rgba(229,53,231,0.22) 0%, transparent 58%),
    radial-gradient(ellipse 42% 55% at 90% 12%, rgba(249,183,62,0.14) 0%, transparent 52%),
    radial-gradient(ellipse 55% 35% at 55% 100%, rgba(9,9,15,0.99) 0%, transparent 80%);
  pointer-events: none;
}

/* Technique 2: noise texture ::after */
.hero-br::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.035'/%3E%3C/svg%3E");
  opacity: 0.45;
  pointer-events: none;
}

/* Technique 3: floating neon orbs — unique asymmetric positions for Boca page */
.br-orb {
  position: absolute;
  border-radius: 50%;
  pointer-events: none;
  will-change: transform;
}
.br-orb-1 {
  width: 480px; height: 480px;
  top: -100px; left: -140px;
  background: radial-gradient(circle, rgba(229,53,231,0.15) 0%, transparent 68%);
  animation: br-orb-float 14s ease-in-out infinite;
}
.br-orb-2 {
  width: 280px; height: 280px;
  bottom: -40px; right: 12%;
  background: radial-gradient(circle, rgba(249,183,62,0.10) 0%, transparent 68%);
  animation: br-orb-float 22s ease-in-out infinite reverse;
  animation-delay: -9s;
}
.br-orb-3 {
  width: 160px; height: 160px;
  top: 15%; right: 35%;
  background: radial-gradient(circle, rgba(229,53,231,0.06) 0%, transparent 70%);
  animation: br-orb-float 28s ease-in-out infinite;
  animation-delay: -5s;
}
@keyframes br-orb-float {
  0%,100% { transform: translate(0,0) scale(1); }
  33%     { transform: translate(18px, -20px) scale(1.06); }
  67%     { transform: translate(-12px, 14px) scale(0.95); }
}

.hero-br-inner {
  position: relative;
  z-index: 2;
  display: grid;
  grid-template-columns: 1fr 400px;
  gap: var(--space-12);
  align-items: center;
  padding: var(--space-14) 0;
  width: 100%;
}
.hero-br-left { max-width: 640px; }

.br-eyebrow {
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
.br-eyebrow .pulse-dot {
  width: 7px; height: 7px;
  border-radius: 50%;
  background: var(--color-secondary);
  box-shadow: 0 0 8px var(--color-secondary);
  animation: br-pulse 2s ease-in-out infinite;
  flex-shrink: 0;
}
@keyframes br-pulse {
  0%,100% { opacity:1; transform:scale(1); }
  50%     { opacity:.55; transform:scale(.72); }
}

.hero-br h1 {
  font-size: clamp(1.85rem, 3.8vw, 3.1rem);
  font-weight: 900;
  color: var(--color-white);
  line-height: 1.1;
  margin-bottom: var(--space-5);
  letter-spacing: -0.025em;
  text-wrap: balance;
}
.hero-br h1 .hl-gold { color: var(--color-accent); text-shadow: 0 0 28px rgba(249,183,62,0.55); }
.hero-br h1 .hl-mag  { color: var(--color-secondary); text-shadow: 0 0 28px rgba(229,53,231,0.55); }

.hero-br-answer {
  font-size: 1rem;
  color: rgba(255,255,255,0.68);
  line-height: 1.82;
  margin-bottom: var(--space-7);
  max-width: 560px;
}

.hero-br-btns {
  display: flex;
  gap: var(--space-3);
  flex-wrap: wrap;
  margin-bottom: var(--space-7);
}
.btn-br-primary {
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
  box-shadow: 0 0 24px rgba(229,53,231,0.44), 0 4px 14px rgba(0,0,0,0.3);
  transition: all var(--transition-base);
}
.btn-br-primary:hover {
  background: #f040f2;
  box-shadow: 0 0 44px rgba(229,53,231,0.70), 0 8px 22px rgba(0,0,0,0.35);
  transform: translateY(-2px);
  color: var(--color-white);
}
.btn-br-primary svg { width: 15px; height: 15px; }
.btn-br-secondary {
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
.btn-br-secondary:hover {
  background: var(--color-accent);
  color: #0a0d1a;
  border-color: var(--color-accent);
  box-shadow: 0 0 26px rgba(249,183,62,0.4);
  transform: translateY(-2px);
}

.br-trust-row {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-2);
}
.br-trust-badge {
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
.br-trust-badge svg { width: 11px; height: 11px; color: var(--color-secondary); flex-shrink: 0; }

/* Technique 4: glassmorphism sidebar — magenta gradient border */
.hero-br-card {
  position: relative;
  background: rgba(255,255,255,0.04);
  border: 1px solid rgba(255,255,255,0.11);
  border-radius: 18px;
  padding: var(--space-7) var(--space-6);
  backdrop-filter: blur(14px);
  -webkit-backdrop-filter: blur(14px);
}
.hero-br-card::before {
  content: '';
  position: absolute;
  inset: -1px;
  border-radius: 19px;
  background: linear-gradient(135deg, rgba(229,53,231,0.45) 0%, rgba(249,183,62,0.18) 60%, transparent 100%);
  z-index: -1;
  opacity: 0.5;
}
.brc-title {
  font-family: var(--font-heading);
  font-size: 1.05rem;
  font-weight: 800;
  color: var(--color-white);
  margin-bottom: var(--space-2);
}
.brc-sub {
  font-size: 0.68rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  color: var(--color-secondary);
  margin-bottom: var(--space-5);
}
.brc-list {
  list-style: none;
  padding: 0;
  margin: 0 0 var(--space-6);
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
}
.brc-list li {
  display: flex;
  align-items: flex-start;
  gap: var(--space-2);
  font-size: 0.85rem;
  color: rgba(255,255,255,0.80);
  line-height: 1.5;
}
.brc-check {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  width: 18px; height: 18px;
  border-radius: 50%;
  background: linear-gradient(135deg, var(--color-secondary), #b015b5);
  margin-top: 2px;
  font-size: 0.6rem;
  color: var(--color-white);
  font-weight: 900;
}
.brc-cta {
  display: block;
  width: 100%;
  padding: 13px;
  background: linear-gradient(135deg, var(--color-secondary) 0%, #b015b5 100%);
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
.brc-cta:hover {
  box-shadow: 0 8px 34px rgba(229,53,231,0.62);
  transform: translateY(-1px);
  color: var(--color-white);
}
.brc-disclaimer {
  text-align: center;
  font-size: 0.6rem;
  color: rgba(255,255,255,0.3);
  margin-top: var(--space-3);
  line-height: 1.5;
}

/* ── 2. SVG DIVIDERS — different shapes from Delray page ── */
.br-div-dark-light { line-height: 0; background: #09090f; }
.br-div-dark-light svg { display: block; width: 100%; }
.br-div-light-dark { line-height: 0; background: #f4f6f9; }
.br-div-light-dark svg { display: block; width: 100%; }
.br-div-dark-white { line-height: 0; background: #09090f; }
.br-div-dark-white svg { display: block; width: 100%; }
.br-div-white-light { line-height: 0; background: #ffffff; }
.br-div-white-light svg { display: block; width: 100%; }

/* ── 3. INTRO / ANSWER SECTION ── */
.br-intro {
  padding: var(--space-16) 0;
  background: #f4f6f9;
}
.br-intro-inner {
  max-width: 860px;
  margin: 0 auto;
}
.br-section-eyebrow {
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
.br-intro h2 {
  font-size: clamp(1.7rem, 3vw, 2.4rem);
  font-weight: 900;
  color: var(--color-dark);
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.02em;
  margin-bottom: var(--space-4);
}
.br-intro h2 em { color: var(--color-secondary); font-style: normal; }
.br-answer-block {
  background: linear-gradient(135deg, rgba(229,53,231,0.07), rgba(249,183,62,0.04));
  border-left: 3px solid var(--color-secondary);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  padding: var(--space-5) var(--space-6);
  margin-bottom: var(--space-6);
}
.br-answer-block p {
  font-size: 0.95rem;
  color: var(--color-dark);
  line-height: 1.8;
  margin: 0;
  font-style: italic;
}
.br-intro p {
  font-size: 0.95rem;
  color: var(--color-gray);
  line-height: 1.82;
  margin-bottom: var(--space-4);
}

/* ── 4. LOCAL COVERAGE SECTION (dark) ── */
.br-coverage {
  padding: var(--space-16) 0;
  background: linear-gradient(160deg, #09090f 0%, #0e0620 60%, #0a1428 100%);
  position: relative;
  overflow: hidden;
}
.br-coverage::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 42% 65% at 8% 55%, rgba(229,53,231,0.11) 0%, transparent 62%),
    radial-gradient(ellipse 38% 58% at 92% 40%, rgba(249,183,62,0.09) 0%, transparent 62%);
  pointer-events: none;
}
.br-coverage-blob {
  position: absolute;
  width: 300px; height: 300px;
  top: -60px; left: 55%;
  border-radius: 50%;
  background: radial-gradient(circle, rgba(249,183,62,0.07) 0%, transparent 70%);
  pointer-events: none;
  animation: br-orb-float 20s ease-in-out infinite reverse;
  animation-delay: -6s;
}
.br-coverage-inner {
  position: relative;
  z-index: 1;
}
.br-coverage-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-14);
  align-items: start;
}
.br-coverage-eyebrow {
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
.br-coverage h2 {
  font-size: clamp(1.6rem, 3vw, 2.3rem);
  font-weight: 900;
  color: var(--color-white);
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.02em;
  margin-bottom: var(--space-5);
}
.br-coverage h2 em { color: var(--color-secondary); font-style: normal; }
.br-coverage-body {
  font-size: 0.92rem;
  color: rgba(255,255,255,0.60);
  line-height: 1.82;
  margin-bottom: var(--space-4);
}

/* Technique 8: gradient text on stat numerals */
.br-stat-row {
  display: flex;
  gap: var(--space-8);
  margin-top: var(--space-8);
  flex-wrap: wrap;
}
.br-stat-item {}
.br-stat-num {
  font-family: var(--font-heading);
  font-size: 2rem;
  font-weight: 900;
  line-height: 1;
  background: linear-gradient(135deg, var(--color-secondary) 0%, #f080f2 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  margin-bottom: var(--space-1);
}
.br-stat-label {
  font-size: 0.7rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1px;
  color: rgba(255,255,255,0.4);
}

.br-local-panel {
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
}
.br-signal-card {
  background: rgba(255,255,255,0.04);
  border: 1px solid rgba(255,255,255,0.07);
  border-radius: 14px;
  padding: var(--space-5) var(--space-6);
  transition: border-color var(--transition-base), background var(--transition-base);
}
.br-signal-card:hover {
  border-color: rgba(249,183,62,0.25);
  background: rgba(255,255,255,0.06);
}
.br-signal-card h4 {
  font-family: var(--font-heading);
  font-size: 0.85rem;
  font-weight: 800;
  color: var(--color-secondary);
  margin-bottom: var(--space-2);
  display: flex;
  align-items: center;
  gap: var(--space-2);
}
.br-signal-card h4 svg { width: 15px; height: 15px; flex-shrink: 0; }
.br-signal-card p {
  font-size: 0.82rem;
  color: rgba(255,255,255,0.55);
  line-height: 1.7;
  margin: 0;
}

/* ── 5. SERVICES GRID SECTION ── */
.br-services {
  padding: var(--space-16) 0;
  background: var(--color-white);
}
.br-services-header {
  text-align: center;
  margin-bottom: var(--space-12);
}
.br-services h2 {
  font-size: clamp(1.7rem, 3vw, 2.4rem);
  font-weight: 900;
  color: var(--color-dark);
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.02em;
  margin-bottom: var(--space-3);
}
.br-services h2 em { color: var(--color-secondary); font-style: normal; }
.br-services-lead {
  font-size: 0.95rem;
  color: var(--color-gray);
  max-width: 500px;
  margin: 0 auto;
  line-height: 1.75;
}
.br-services-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
}

/* Technique 7: service cards with amber hover bottom-border glow */
.br-svc-card {
  background: #f7f8fb;
  border: 1px solid rgba(249,183,62,0.10);
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
.br-svc-card::after {
  content: '';
  position: absolute;
  bottom: 0; left: 0; right: 0;
  height: 2px;
  background: linear-gradient(90deg, var(--color-accent), var(--color-secondary));
  transform: scaleX(0);
  transform-origin: left;
  transition: transform 0.3s ease;
}
.br-svc-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 14px 36px rgba(249,183,62,0.14), 0 4px 10px rgba(0,0,0,0.06);
  border-color: rgba(249,183,62,0.28);
}
.br-svc-card:hover::after { transform: scaleX(1); }
.br-svc-icon {
  width: 50px; height: 50px;
  border-radius: 50%;
  background: linear-gradient(135deg, rgba(249,183,62,0.12), rgba(229,53,231,0.08));
  border: 1px solid rgba(249,183,62,0.20);
  display: flex; align-items: center; justify-content: center;
  color: var(--color-accent);
}
.br-svc-icon svg { width: 22px; height: 22px; }
.br-svc-card h3 {
  font-family: var(--font-heading);
  font-size: 0.92rem;
  font-weight: 800;
  color: var(--color-dark);
  margin: 0;
}
.br-svc-card p {
  font-size: 0.82rem;
  color: var(--color-gray);
  line-height: 1.68;
  margin: 0;
  flex: 1;
}
.br-svc-link {
  display: inline-flex;
  align-items: center;
  gap: 4px;
  font-size: 0.78rem;
  font-weight: 800;
  color: var(--color-accent);
  margin-top: auto;
  transition: gap var(--transition-fast);
}
.br-svc-link:hover { gap: 8px; }
.br-svc-link svg { width: 14px; height: 14px; }

/* ── 6. FAQ SECTION ── */
.br-faq {
  padding: var(--space-16) 0;
  background: #f4f6f9;
}
.br-faq-inner {
  max-width: 820px;
  margin: 0 auto;
}
.br-faq h2 {
  font-size: clamp(1.6rem, 2.8vw, 2.2rem);
  font-weight: 900;
  color: var(--color-dark);
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.02em;
  margin-bottom: var(--space-3);
}
.br-faq h2 em { color: var(--color-secondary); font-style: normal; }
.br-faq-sub {
  font-size: 0.92rem;
  color: var(--color-gray);
  margin-bottom: var(--space-10);
  line-height: 1.75;
}
.br-faq-list {
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
}

/* Technique 6: FAQ accordion — neon magenta open-state border */
.br-faq-item {
  background: var(--color-white);
  border: 1px solid rgba(229,53,231,0.11);
  border-radius: var(--radius-lg);
  overflow: hidden;
  transition: border-color var(--transition-base), box-shadow var(--transition-base);
}
.br-faq-item.open {
  border-color: rgba(229,53,231,0.40);
  box-shadow: 0 4px 20px rgba(229,53,231,0.10);
}
.br-faq-q {
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
.br-faq-q:hover { color: var(--color-secondary); }
.br-faq-item.open .br-faq-q { color: var(--color-secondary); }
.br-faq-icon {
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
.br-faq-item.open .br-faq-icon {
  background: var(--color-secondary);
  color: var(--color-white);
  transform: rotate(45deg);
}
.br-faq-a {
  display: none;
  padding: 0 var(--space-6) var(--space-5);
  font-size: 0.88rem;
  color: var(--color-gray);
  line-height: 1.8;
  border-top: 1px solid rgba(229,53,231,0.07);
  padding-top: var(--space-4);
}
.br-faq-item.open .br-faq-a { display: block; }

/* ── 7. RELATED AREAS ── */
.br-related {
  padding: var(--space-14) 0;
  background: var(--color-white);
}
.br-related-header {
  text-align: center;
  margin-bottom: var(--space-10);
}
.br-related h3 {
  font-size: clamp(1.5rem, 2.5vw, 2rem);
  font-weight: 900;
  color: var(--color-dark);
  text-wrap: balance;
  margin-bottom: var(--space-2);
}
.br-related-sub {
  font-size: 0.9rem;
  color: var(--color-gray);
}
.br-related-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
}
.br-area-card {
  background: linear-gradient(145deg, #0d0a20, #12082a);
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
.br-area-card::before {
  content: '';
  position: absolute;
  bottom: 0; left: 0; right: 0;
  height: 2px;
  background: linear-gradient(90deg, var(--color-secondary), var(--color-accent));
  transform: scaleX(0);
  transform-origin: left;
  transition: transform 0.3s ease;
}
.br-area-card:hover {
  transform: translateY(-4px);
  box-shadow: 0 14px 36px rgba(229,53,231,0.18), 0 4px 12px rgba(0,0,0,0.3);
  border-color: rgba(229,53,231,0.28);
}
.br-area-card:hover::before { transform: scaleX(1); }
.br-area-card-icon {
  width: 42px; height: 42px;
  border-radius: 10px;
  background: rgba(255,255,255,0.05);
  border: 1px solid rgba(255,255,255,0.10);
  display: flex; align-items: center; justify-content: center;
  color: var(--color-secondary);
}
.br-area-card-icon svg { width: 20px; height: 20px; }
.br-area-card h4 {
  font-family: var(--font-heading);
  font-size: 0.95rem;
  font-weight: 800;
  color: var(--color-white);
  margin: 0;
}
.br-area-card p {
  font-size: 0.8rem;
  color: rgba(255,255,255,0.52);
  line-height: 1.65;
  margin: 0;
  flex: 1;
}
.br-area-card-link {
  display: inline-flex;
  align-items: center;
  gap: 4px;
  font-size: 0.78rem;
  font-weight: 800;
  color: var(--color-accent);
  transition: gap var(--transition-fast);
}
.br-area-card-link:hover { gap: 8px; }
.br-area-card-link svg { width: 13px; height: 13px; }

/* ── 8. EMERGENCY CTA ── */
.br-cta {
  padding: var(--space-14) 0;
  background: linear-gradient(135deg, #09090f 0%, #1a0828 55%, #0a1228 100%);
  position: relative;
  overflow: hidden;
  text-align: center;
}
.br-cta::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 55% 80% at 25% 50%, rgba(229,53,231,0.13) 0%, transparent 60%),
    radial-gradient(ellipse 45% 70% at 75% 50%, rgba(249,183,62,0.09) 0%, transparent 60%);
  pointer-events: none;
}
.br-cta-inner {
  position: relative;
  z-index: 1;
  max-width: 560px;
  margin: 0 auto;
}
.br-cta h2 {
  font-size: clamp(1.5rem, 2.8vw, 2.2rem);
  font-weight: 900;
  color: var(--color-white);
  text-wrap: balance;
  margin-bottom: var(--space-3);
}
.br-cta h2 em { color: var(--color-secondary); font-style: normal; }
.br-cta p {
  font-size: 0.95rem;
  color: rgba(255,255,255,0.58);
  max-width: 440px;
  margin: 0 auto var(--space-7);
  line-height: 1.75;
}
.br-cta-btns {
  display: flex;
  gap: var(--space-3);
  justify-content: center;
  flex-wrap: wrap;
}

/* ── RESPONSIVE ── */
@media (max-width: 1024px) {
  .hero-br-inner { grid-template-columns: 1fr; }
  .hero-br-card { display: none; }
  .br-coverage-grid { grid-template-columns: 1fr; gap: var(--space-10); }
}
@media (max-width: 768px) {
  .br-services-grid { grid-template-columns: repeat(2, 1fr); }
  .br-related-grid { grid-template-columns: 1fr; }
  .br-stat-row { gap: var(--space-6); }
}
@media (max-width: 480px) {
  .br-services-grid { grid-template-columns: 1fr; }
}
</style>

<main id="main-content">

<!-- ═══ HERO ═══ -->
<section class="hero-br" aria-label="Bail bonds in Boca Raton, FL">
  <div class="br-orb br-orb-1"></div>
  <div class="br-orb br-orb-2"></div>
  <div class="br-orb br-orb-3"></div>

  <div class="container">
    <div class="hero-br-inner">
      <div class="hero-br-left">
        <span class="br-eyebrow">
          <span class="pulse-dot"></span>
          Boca Raton, FL — Palm Beach County
        </span>
        <h1>Bail Bonds Near Me in <span class="hl-gold">Boca Raton, FL</span> — Fast Release for Any Charge, <span class="hl-mag">24/7</span></h1>
        <p class="hero-br-answer">Need bail bonds in Boca Raton? Mad Extra Bail Bonds is a licensed Florida bail bondsman based in Delray Beach, serving Boca Raton families 24/7. Whether the arrest involves BRPSD, a situation at FAU, or a financial charge in the Town Center corridor — we post bail at Palm Beach County Jail fast.</p>
        <div class="hero-br-btns">
          <?php if (!empty($phone)): ?>
          <a href="tel:<?php echo preg_replace('/\D/','', $phone); ?>" class="btn-br-primary">
            <?php echo lucide_icon('phone'); ?> Call Now — 24/7
          </a>
          <?php else: ?>
          <a href="/contact/" class="btn-br-primary">
            <?php echo lucide_icon('zap'); ?> Get Help Now
          </a>
          <?php endif; ?>
          <a href="/contact/" class="btn-br-secondary">Free Consultation</a>
        </div>
        <div class="br-trust-row">
          <span class="br-trust-badge"><?php echo lucide_icon('shield-check'); ?> Licensed FL Bondsman</span>
          <span class="br-trust-badge"><?php echo lucide_icon('clock'); ?> 24/7 Available</span>
          <span class="br-trust-badge"><?php echo lucide_icon('landmark'); ?> PBCJ Direct Line</span>
          <span class="br-trust-badge"><?php echo lucide_icon('users'); ?> 11+ Years in PBC</span>
        </div>
      </div>

      <!-- Technique 4: Glassmorphism sidebar card — magenta border -->
      <div class="hero-br-card">
        <p class="brc-title">Arrested in Boca Raton?</p>
        <p class="brc-sub">We Post Bail Immediately</p>
        <ul class="brc-list">
          <li><span class="brc-check">✓</span> BRPSD bookings transferred to PBCJ — we know the process</li>
          <li><span class="brc-check">✓</span> FAU student arrests handled — parents can call from out of state</li>
          <li><span class="brc-check">✓</span> White-collar &amp; financial charge bail bonds available</li>
          <li><span class="brc-check">✓</span> 10% FL fixed rate — statewide regardless of city</li>
          <li><span class="brc-check">✓</span> Release processing starts within minutes of your call</li>
        </ul>
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo preg_replace('/\D/','', $phone); ?>" class="brc-cta">
          <?php echo lucide_icon('phone'); ?> Call Now
        </a>
        <?php else: ?>
        <a href="/contact/" class="brc-cta">Get Help Now</a>
        <?php endif; ?>
        <p class="brc-disclaimer">Available every hour — 365 days a year</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SVG DIVIDER: dark → light (different angle from Delray page) ═══ -->
<div class="br-div-dark-light" aria-hidden="true">
  <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,56 L0,20 C480,56 960,0 1440,28 L1440,56 Z" fill="#f4f6f9"/>
  </svg>
</div>

<!-- ═══ INTRO / ANSWER SECTION ═══ -->
<section class="br-intro" aria-label="How bail bonds work in Boca Raton, FL">
  <div class="container">
    <div class="br-intro-inner">
      <span class="br-section-eyebrow">How It Works in Boca Raton</span>
      <h2>How do bail bonds work in <em>Boca Raton, FL</em>?</h2>
      <div class="br-answer-block">
        <p>Bail bonds in Boca Raton work like this: the Boca Raton Police Services Department books the defendant locally, then transfers them to the Palm Beach County Jail in West Palm Beach about 30 miles north. You pay a licensed bondsman the Florida-required 10% of the set bail amount. We post the full bond directly with the jail and release processing begins — typically within hours for misdemeanor charges.</p>
      </div>
      <p>Mad Extra Bail Bonds is a licensed Florida bail bondsman based in Delray Beach, serving Boca Raton and all of Palm Beach County. Boca Raton is covered by the Boca Raton Police Services Department, an independent agency separate from the Palm Beach County Sheriff's Office. BRPSD makes the arrest and processes initial booking, then transfers the defendant to PBSO custody for transport to the main county jail on Gun Club Road in West Palm Beach.</p>
      <p>Boca Raton's geography creates a range of arrest situations unique to this city. The Yamato Road corridor and Spanish River area attract corporate-related incidents. The Town Center at Boca Raton mall area, Mizner Park, and the East Boca A1A corridor generate retail, nightlife, and traffic-related situations. Florida Atlantic University's Boca Raton campus means FAU student arrests are a regular part of what we handle — often with parents calling from out of state who need guidance on the entire process.</p>
      <p>Broken Sound, Boca Highlands, and Woodfield Country Club residential areas see their own mix of domestic and financial situations. Whatever the neighborhood and whatever the charge, the process is the same: call us immediately, and we begin working while the defendant is still in the booking process.</p>
    </div>
  </div>
</section>

<!-- ═══ SVG DIVIDER: light → dark (reverse S-curve) ═══ -->
<div class="br-div-light-dark" aria-hidden="true">
  <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,0 C480,56 960,0 1440,40 L1440,56 L0,56 Z" fill="#09090f"/>
  </svg>
</div>

<!-- ═══ LOCAL COVERAGE SECTION ═══ -->
<section class="br-coverage" aria-label="Local coverage in Boca Raton">
  <div class="br-coverage-blob" aria-hidden="true"></div>
  <div class="container br-coverage-inner">
    <div class="br-coverage-grid">
      <div>
        <span class="br-coverage-eyebrow"><?php echo lucide_icon('map-pin'); ?> Local Coverage</span>
        <h2>Which jail serves <em>Boca Raton</em> and how does the BRPSD process work?</h2>
        <p class="br-coverage-body">All Boca Raton arrests — whether made by BRPSD on the A1A corridor, near Mizner Park, or at the Royal Palm Place area — are processed locally then transported to the Palm Beach County Jail at 3228 Gun Club Road in West Palm Beach. There is no separate Boca Raton city jail; all defendants go to the county facility.</p>
        <p class="br-coverage-body">BRPSD is an independent department, not a division of PBSO, which means the intake handoff between BRPSD and PBSO adds a procedural step. We are familiar with this handoff and account for it in our timeline estimates. Misdemeanor releases typically complete 4 to 8 hours after bond posting. Felony charges may require a bond hearing at the Palm Beach County Courthouse in West Palm Beach first.</p>
        <p class="br-coverage-body">Boca Raton's proximity to Florida Atlantic University means we regularly handle situations involving students, parents calling from out of state, and campus-adjacent incidents. Spanish River High School and Boca Raton High School communities also generate their share of situations involving minors who turn 18. We handle these with appropriate discretion.</p>

        <div class="br-stat-row">
          <div class="br-stat-item">
            <div class="br-stat-num">4–8 hrs</div>
            <div class="br-stat-label">Typical misdemeanor release</div>
          </div>
          <div class="br-stat-item">
            <div class="br-stat-num">~30 mi</div>
            <div class="br-stat-label">Boca Raton to PBCJ</div>
          </div>
          <div class="br-stat-item">
            <div class="br-stat-num">24/7</div>
            <div class="br-stat-label">Always available</div>
          </div>
        </div>
      </div>

      <div class="br-local-panel">
        <div class="br-signal-card">
          <h4><?php echo lucide_icon('landmark'); ?> Palm Beach County Jail</h4>
          <p>3228 Gun Club Road, West Palm Beach — all Boca Raton arrests end up here after BRPSD transfers to PBSO custody. We post bond directly at this facility 24/7 and are highly familiar with the intake staff.</p>
        </div>
        <div class="br-signal-card">
          <h4><?php echo lucide_icon('shield'); ?> Boca Raton Police Services Dept.</h4>
          <p>BRPSD is independent from PBSO — a distinctive step in the Boca Raton arrest process. We understand the BRPSD booking handoff and build it into our response timeline so there are no surprises.</p>
        </div>
        <div class="br-signal-card">
          <h4><?php echo lucide_icon('users'); ?> FAU Campus Arrests</h4>
          <p>Florida Atlantic University on Glades Road generates campus-related arrests for drug possession, underage drinking, and assault. Parents calling from out of state can handle paperwork remotely through us — we walk you through every step.</p>
        </div>
        <div class="br-signal-card">
          <h4><?php echo lucide_icon('scale'); ?> Financial Crime Bail Bonds</h4>
          <p>The Yamato Road corporate corridor in Boca Raton sees more white-collar arrest situations than comparable cities. Higher bail amounts from financial charges are not a barrier — we handle complex bond situations with direct Palm Beach County court relationships.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SVG DIVIDER: dark → white ═══ -->
<div class="br-div-dark-white" aria-hidden="true">
  <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,0 L0,30 Q720,60 1440,14 L1440,56 L0,56 Z" fill="#ffffff"/>
  </svg>
</div>

<!-- ═══ SERVICES GRID SECTION ═══ -->
<section class="br-services" aria-label="Bail bond services available in Boca Raton">
  <div class="container">
    <div class="br-services-header">
      <span class="br-section-eyebrow">Services in Boca Raton</span>
      <h2>What bail bond services does Mad Extra provide in <em>Boca Raton, FL</em>?</h2>
      <p class="br-services-lead">Every bail bond service we offer is available for Boca Raton arrests — from FAU campus situations to financial charge bonds on Yamato Road.</p>
    </div>
    <div class="br-services-grid">
      <?php
      $brServices = [
        ['slug' => 'bail-bonds',           'name' => 'Bail Bond Services',      'icon' => 'shield',         'desc' => 'General bail bonds for any Boca Raton arrest — we handle BRPSD bookings at the Palm Beach County Jail the same day, 24/7.'],
        ['slug' => 'dui-bail-bonds',        'name' => 'DUI Bail Bonds',          'icon' => 'car',            'desc' => 'DUI arrests in Boca Raton near A1A, Mizner Park, or Royal Palm Place — we know DUI bond timelines at PBCJ.'],
        ['slug' => 'drug-charge-bail-bonds','name' => 'Drug Charge Bail Bonds',  'icon' => 'alert-triangle', 'desc' => 'Drug possession and trafficking charges near FAU or in Boca Raton residential areas — fast, discreet handling.'],
        ['slug' => 'felony-bail-bonds',     'name' => 'Felony Bail Bonds',       'icon' => 'gavel',          'desc' => 'Felony charges in Boca Raton carry higher bail amounts. Bond hearings at the PBC Courthouse — we navigate them with experience.'],
        ['slug' => 'federal-bail-bonds',    'name' => 'Federal Bail Bonds',      'icon' => 'landmark',       'desc' => 'Financial crime and fraud charges in the Boca Raton corporate corridor may reach the federal level — we handle federal bail bonds at the Paul G. Rogers Federal Building.'],
        ['slug' => 'misdemeanor-bail-bonds','name' => 'Misdemeanor Bail Bonds',  'icon' => 'file-text',      'desc' => 'Misdemeanor bail for Boca Raton arrests — most releases complete within hours of bond posting at PBCJ.'],
      ];
      foreach ($brServices as $svc): ?>
      <div class="br-svc-card">
        <div class="br-svc-icon"><?php echo lucide_icon($svc['icon']); ?></div>
        <h3><?php echo $svc['name']; ?></h3>
        <p><?php echo $svc['desc']; ?></p>
        <a href="/services/<?php echo $svc['slug']; ?>/" class="br-svc-link">
          Learn more <?php echo lucide_icon('arrow-right'); ?>
        </a>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══ SVG DIVIDER: white → light ═══ -->
<div class="br-div-white-light" aria-hidden="true">
  <svg viewBox="0 0 1440 40" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,0 Q480,40 720,15 Q960,-5 1440,25 L1440,40 L0,40 Z" fill="#f4f6f9"/>
  </svg>
</div>

<!-- ═══ FAQ SECTION ═══ -->
<section class="br-faq" aria-label="Boca Raton bail bond FAQ">
  <div class="container">
    <div class="br-faq-inner">
      <span class="br-section-eyebrow">Common Questions</span>
      <h2>Frequently asked questions about <em>bail bonds in Boca Raton, FL</em></h2>
      <p class="br-faq-sub">City-specific answers for Boca Raton families — covering BRPSD, FAU situations, and what to expect at the Palm Beach County Jail.</p>

      <div class="br-faq-list" role="list">
        <?php foreach ($_faqs as $faq): ?>
        <div class="br-faq-item" role="listitem">
          <button class="br-faq-q" aria-expanded="false" onclick="toggleBrFaq(this)">
            <?php echo htmlspecialchars($faq['q']); ?>
            <span class="br-faq-icon" aria-hidden="true">+</span>
          </button>
          <div class="br-faq-a" role="region">
            <p><?php echo htmlspecialchars($faq['a']); ?></p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- ═══ RELATED AREAS ═══ -->
<section class="br-related" aria-label="Other cities near Boca Raton we serve">
  <div class="container">
    <div class="br-related-header">
      <h3>Also Serving These Nearby Cities</h3>
      <p class="br-related-sub">One license covers all of Palm Beach County — same 24/7 service wherever the arrest happened.</p>
    </div>
    <div class="br-related-grid">
      <a href="/areas/delray-beach/" class="br-area-card">
        <div class="br-area-card-icon"><?php echo lucide_icon('map-pin'); ?></div>
        <h4>Delray Beach</h4>
        <p>Bail bonds for Delray Beach arrests — our home base, DBPD familiar, South County Courthouse covered.</p>
        <span class="br-area-card-link">View coverage <?php echo lucide_icon('arrow-right'); ?></span>
      </a>
      <a href="/areas/west-palm-beach/" class="br-area-card">
        <div class="br-area-card-icon"><?php echo lucide_icon('landmark'); ?></div>
        <h4>West Palm Beach</h4>
        <p>Home of the Palm Beach County Jail — our closest response coverage for WPB arrests on Clematis Street and beyond.</p>
        <span class="br-area-card-link">View coverage <?php echo lucide_icon('arrow-right'); ?></span>
      </a>
      <a href="/areas/" class="br-area-card">
        <div class="br-area-card-icon"><?php echo lucide_icon('globe'); ?></div>
        <h4>All Service Areas</h4>
        <p>Boynton Beach, Lake Worth Beach, Palm Beach Gardens, and all of Broward and Miami-Dade County.</p>
        <span class="br-area-card-link">See all areas <?php echo lucide_icon('arrow-right'); ?></span>
      </a>
    </div>
  </div>
</section>

<!-- ═══ EMERGENCY CTA ═══ -->
<section class="br-cta" aria-label="Emergency bail bond help in Boca Raton">
  <div class="br-cta-inner">
    <h2>Need a bondsman in <em>Boca Raton right now</em>?</h2>
    <p>We are familiar with BRPSD booking procedures and the Palm Beach County Jail intake process. One call is all it takes to get the process moving — 24 hours a day, any charge, any situation.</p>
    <div class="br-cta-btns">
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo preg_replace('/\D/','', $phone); ?>" class="btn-br-primary">
        <?php echo lucide_icon('phone'); ?> Call Now — 24/7
      </a>
      <?php endif; ?>
      <a href="/contact/" class="btn-br-secondary">Send a Message</a>
    </div>
  </div>
</section>

</main>

<script>
function toggleBrFaq(btn) {
  const item = btn.closest('.br-faq-item');
  const isOpen = item.classList.contains('open');
  document.querySelectorAll('.br-faq-item.open').forEach(el => el.classList.remove('open'));
  document.querySelectorAll('.br-faq-q').forEach(el => el.setAttribute('aria-expanded', 'false'));
  if (!isOpen) {
    item.classList.add('open');
    btn.setAttribute('aria-expanded', 'true');
  }
}
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
