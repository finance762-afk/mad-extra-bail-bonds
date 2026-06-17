<?php
/**
 * areas/margate/index.php — Margate Service Area Page
 * Mad Extra Bail Bonds | Page One Insights v6.1
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Bail Bonds Near Me in Margate FL | Mad Extra Bail Bonds | 24/7';
$pageDescription = 'Need bail bonds in Margate, FL? Mad Extra Bail Bonds serves Margate and central Broward County with licensed 24/7 bail bond service. Fast release from Broward County Jail.';
$canonicalUrl    = $siteUrl . '/areas/margate/';
$currentPage     = 'areas';

$_breadcrumb = generateBreadcrumbSchema([
    ['name' => 'Home',          'url' => $siteUrl . '/'],
    ['name' => 'Service Areas', 'url' => $siteUrl . '/areas/'],
    ['name' => 'Margate',       'url' => $siteUrl . '/areas/margate/'],
]);

$_serviceSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'Service',
    '@id'         => $siteUrl . '/areas/margate/#service-margate',
    'name'        => 'Bail Bonds in Margate, FL',
    'description' => 'Licensed Florida bail bondsman serving Margate and central Broward County. Fast release from Broward County Main Jail, 24/7, any charge.',
    'url'         => $siteUrl . '/areas/margate/',
    'provider'    => ['@id' => $siteUrl . '/#organization'],
    'areaServed'  => [
        ['@type' => 'City',   'name' => 'Margate, FL'],
        ['@type' => 'County', 'name' => 'Broward County, FL'],
    ],
    'serviceType' => 'Bail Bond Services',
];

$_faqs = [
    [
        'q' => 'Is there a local jail or holding facility in Margate, FL?',
        'a' => 'No. Margate Police Department completes initial booking at the Margate PD facility, then transfers all arrestees to the Broward County Main Jail at 555 SE 1st Ave in Fort Lauderdale. There is no extended-hold city lockup in Margate — all Margate arrests eventually arrive at Broward Main, which is where we post bond.',
    ],
    [
        'q' => 'What types of charges generate the most bail bond situations in Margate, FL?',
        'a' => 'Drug possession, domestic battery, DUI on Copans Road and Banks Road, and active warrant arrests make up the majority of what we see in Margate. Retail theft charges connected to the Sawgrass Mills Mall area are also a charge type we handle regularly from the Margate and Sunrise border. Traffic warrant arrests — where a routine stop surfaces an old warrant — are among the most common calls we get from Margate families.',
    ],
    [
        'q' => 'How long is the drive from Margate to the Broward County Jail and how does it affect release time?',
        'a' => 'Margate PD transport to Broward County Main Jail in Fort Lauderdale takes approximately 25 to 35 minutes depending on traffic. After transport and jail intake processing — typically 2 to 6 hours — we can post bond and release begins. Total misdemeanor release time from a Margate arrest is typically 6 to 12 hours from the time you call us. We begin paperwork before transport even departs Margate.',
    ],
    [
        'q' => 'Can Mad Extra Bail Bonds help with a retail theft arrest near Sawgrass Mills in Margate?',
        'a' => 'Yes. Sawgrass Mills Mall is technically within Sunrise city limits, but arrests near the mall perimeter on the Margate side may involve Margate PD depending on the exact location of the alleged offense. Retail theft is a bondable charge under Florida law regardless of which agency makes the arrest. We handle retail theft bonds in Margate and the Sawgrass Mills area regularly.',
    ],
    [
        'q' => 'Does Margate have domestic violence charges that require a specific bail hold?',
        'a' => 'Yes. Like every jurisdiction in Broward County, a domestic battery arrest in Margate requires a mandatory 24-hour hold before bond can be set under Florida Statute 741.2901. We advise Margate families on this specific timeline so they are not waiting at the jail expecting an immediate release. We have the bond paperwork ready to post the moment the hold expires.',
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
   MARGATE AREA PAGE — Mad Extra Bail Bonds
   Premium Tier | Dark/Neon Design System
   Techniques:
   (1) Hero: layered ::before radial-gradient (balanced gold+magenta) + ::after SVG noise
   (2) Floating neon orbs — 4 orbs, varied sizes, staggered drift animations
   (3) Glassmorphism hero sidebar card (backdrop-filter: blur(14px)) — horizontal badge row format
   (4) SVG wave dividers — 4 distinct shapes (tear, diagonal, arc-fill, undulation)
   (5) FAQ accordion: neon border on .open + icon rotate 45deg
   (6) Service cards: gold-to-magenta neon bottom-border scaleX from right on hover
   (7) Gradient text on stat counters (gold → magenta)
   (8) Hover lift related area cards with magenta left-border reveal
   ============================================================ */

/* ── 1. HERO ── */
.mg-hero {
  position: relative;
  min-height: 58vh;
  display: flex;
  align-items: center;
  background: #09090f;
  overflow: hidden;
  padding-top: var(--nav-height, 72px);
  padding-bottom: var(--space-12);
}

/* Technique 1a: balanced gold+magenta radial layers — gold top-left, magenta bottom-right */
.mg-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 48% 72% at 0% 10%,  rgba(249,183,62,0.18) 0%, transparent 55%),
    radial-gradient(ellipse 44% 68% at 100% 90%, rgba(229,53,231,0.18) 0%, transparent 55%),
    radial-gradient(ellipse 60% 35% at 50% 115%, rgba(9,9,15,1.0) 0%, transparent 78%);
  pointer-events: none;
}

/* Technique 1b: SVG noise texture */
.mg-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='mgn'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.92' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23mgn)' opacity='0.038'/%3E%3C/svg%3E");
  opacity: 0.52;
  pointer-events: none;
}

/* Technique 2: 4 orbs, varied sizes, staggered drift keyframes */
.mg-orb {
  position: absolute;
  border-radius: 50%;
  pointer-events: none;
  will-change: transform;
}
.mg-orb-1 {
  width: 520px; height: 520px;
  top: -100px; right: -100px;
  background: radial-gradient(circle, rgba(229,53,231,0.12) 0%, transparent 63%);
  animation: mg-float-a 20s ease-in-out infinite;
}
.mg-orb-2 {
  width: 300px; height: 300px;
  bottom: -80px; left: 3%;
  background: radial-gradient(circle, rgba(249,183,62,0.12) 0%, transparent 65%);
  animation: mg-float-a 26s ease-in-out infinite reverse;
  animation-delay: -11s;
}
.mg-orb-3 {
  width: 160px; height: 160px;
  top: 20%; left: 50%;
  background: radial-gradient(circle, rgba(229,53,231,0.08) 0%, transparent 68%);
  animation: mg-float-b 18s ease-in-out infinite;
  animation-delay: -7s;
}
.mg-orb-4 {
  width: 100px; height: 100px;
  top: 55%; left: 22%;
  background: radial-gradient(circle, rgba(249,183,62,0.09) 0%, transparent 70%);
  animation: mg-float-b 12s ease-in-out infinite reverse;
  animation-delay: -4s;
}
@keyframes mg-float-a {
  0%,100% { transform: translate(0,0) scale(1); }
  38%     { transform: translate(-22px, 26px) scale(1.06); }
  70%     { transform: translate(16px, -18px) scale(0.95); }
}
@keyframes mg-float-b {
  0%,100% { transform: translate(0,0) scale(1); }
  45%     { transform: translate(20px, -24px) scale(1.10); }
  80%     { transform: translate(-14px, 18px) scale(0.92); }
}

.mg-hero-inner {
  position: relative;
  z-index: 2;
  display: grid;
  grid-template-columns: 1fr 370px;
  gap: var(--space-12);
  align-items: center;
  padding: var(--space-12) 0;
  width: 100%;
}
.mg-hero-left { max-width: 650px; }

.mg-eyebrow {
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
  border: 1px solid rgba(249,183,62,0.38);
  border-radius: var(--radius-full);
  background: rgba(249,183,62,0.07);
  margin-bottom: var(--space-5);
}
.mg-pulse {
  width: 7px; height: 7px;
  border-radius: 50%;
  background: var(--color-accent);
  box-shadow: 0 0 8px var(--color-accent);
  animation: mg-pulse 2.2s ease-in-out infinite;
  flex-shrink: 0;
}
@keyframes mg-pulse {
  0%,100% { opacity:1; transform:scale(1); }
  50%     { opacity:.45; transform:scale(.68); }
}

.mg-hero h1 {
  font-size: clamp(1.8rem, 3.5vw, 2.95rem);
  font-weight: 900;
  color: var(--color-white);
  line-height: 1.1;
  margin-bottom: var(--space-5);
  letter-spacing: -0.025em;
  text-wrap: balance;
}
.mg-hero h1 .hl-gold { color: var(--color-accent); text-shadow: 0 0 28px rgba(249,183,62,0.55); }
.mg-hero h1 .hl-mag  { color: var(--color-secondary); text-shadow: 0 0 28px rgba(229,53,231,0.55); }

.mg-hero-lead {
  font-size: 1rem;
  color: rgba(255,255,255,0.65);
  line-height: 1.82;
  margin-bottom: var(--space-7);
  max-width: 560px;
}
.mg-hero-btns {
  display: flex;
  gap: var(--space-3);
  flex-wrap: wrap;
  margin-bottom: var(--space-7);
}
.btn-mg-primary {
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
  box-shadow: 0 0 24px rgba(249,183,62,0.46), 0 4px 14px rgba(0,0,0,0.3);
  transition: all var(--transition-base);
}
.btn-mg-primary:hover {
  background: #ffc94f;
  box-shadow: 0 0 44px rgba(249,183,62,0.72), 0 8px 22px rgba(0,0,0,0.35);
  transform: translateY(-2px);
  color: #0a0d1a;
}
.btn-mg-primary svg { width: 15px; height: 15px; }
.btn-mg-secondary {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 12px 24px;
  background: transparent;
  color: var(--color-secondary);
  border: 2px solid rgba(229,53,231,0.48);
  font-family: var(--font-heading);
  font-size: 0.82rem;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  border-radius: var(--radius-md);
  text-decoration: none;
  transition: all var(--transition-base);
}
.btn-mg-secondary:hover {
  background: var(--color-secondary);
  color: var(--color-white);
  border-color: var(--color-secondary);
  box-shadow: 0 0 26px rgba(229,53,231,0.42);
  transform: translateY(-2px);
}

.mg-trust-row {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-2);
}
.mg-trust-badge {
  display: inline-flex;
  align-items: center;
  gap: 5px;
  font-size: 0.67rem;
  font-weight: 700;
  color: rgba(255,255,255,0.70);
  padding: 4px 11px;
  border-radius: var(--radius-full);
  background: rgba(255,255,255,0.055);
  border: 1px solid rgba(255,255,255,0.10);
  text-transform: uppercase;
  letter-spacing: 0.5px;
  white-space: nowrap;
}
.mg-trust-badge svg { width: 11px; height: 11px; color: var(--color-accent); flex-shrink: 0; }

/* Technique 3: glassmorphism sidebar card — horizontal badge row + checklist */
.mg-hero-card {
  position: relative;
  background: rgba(255,255,255,0.038);
  border: 1px solid rgba(255,255,255,0.09);
  border-radius: 20px;
  padding: var(--space-7) var(--space-6);
  backdrop-filter: blur(14px);
  -webkit-backdrop-filter: blur(14px);
  box-shadow: 0 8px 36px rgba(0,0,0,0.28);
}
.mg-hero-card::before {
  content: '';
  position: absolute;
  inset: -1px;
  border-radius: 21px;
  background: linear-gradient(155deg, rgba(249,183,62,0.28) 0%, rgba(229,53,231,0.16) 55%, transparent 100%);
  z-index: -1;
  opacity: 0.48;
}
/* Horizontal badge row across top of card */
.mgc-badge-row {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-2);
  margin-bottom: var(--space-5);
}
.mgc-badge {
  background: rgba(255,255,255,0.05);
  border: 1px solid rgba(255,255,255,0.08);
  border-radius: 10px;
  padding: var(--space-3) var(--space-3);
  text-align: center;
}
.mgc-badge-num {
  font-family: var(--font-heading);
  font-size: 1.2rem;
  font-weight: 900;
  background: linear-gradient(135deg, var(--color-accent) 0%, var(--color-secondary) 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  line-height: 1;
  margin-bottom: 3px;
}
.mgc-badge-label {
  font-size: 0.6rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.7px;
  color: rgba(255,255,255,0.40);
  line-height: 1.3;
}
.mgc-divider {
  border: none;
  border-top: 1px solid rgba(255,255,255,0.08);
  margin: 0 0 var(--space-4);
}
.mgc-list {
  list-style: none;
  padding: 0;
  margin: 0 0 var(--space-6);
  display: flex;
  flex-direction: column;
  gap: var(--space-2);
}
.mgc-list li {
  display: flex;
  align-items: flex-start;
  gap: var(--space-2);
  font-size: 0.82rem;
  color: rgba(255,255,255,0.76);
  line-height: 1.5;
}
.mgc-check {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  width: 17px; height: 17px;
  border-radius: 50%;
  background: linear-gradient(135deg, var(--color-accent), #e89a25);
  margin-top: 2px;
  font-size: 0.58rem;
  color: #0a0d1a;
  font-weight: 900;
}
.mgc-cta {
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
.mgc-cta:hover {
  box-shadow: 0 8px 34px rgba(249,183,62,0.62);
  transform: translateY(-1px);
  color: #0a0d1a;
}
.mgc-note {
  text-align: center;
  font-size: 0.6rem;
  color: rgba(255,255,255,0.28);
  margin-top: var(--space-3);
  line-height: 1.5;
}

/* ── TECHNIQUE 4: SVG DIVIDERS (4 distinct shapes) ── */
.mg-div-dark-light { line-height: 0; background: #09090f; }
.mg-div-dark-light svg { display: block; width: 100%; }
.mg-div-light-dark { line-height: 0; background: #f4f6f9; }
.mg-div-light-dark svg { display: block; width: 100%; }
.mg-div-dark-white { line-height: 0; background: #09090f; }
.mg-div-dark-white svg { display: block; width: 100%; }
.mg-div-white-light { line-height: 0; background: #ffffff; }
.mg-div-white-light svg { display: block; width: 100%; }

/* ── INTRO / ANSWER (light) ── */
.mg-intro {
  padding: var(--space-16) 0;
  background: #f4f6f9;
}
.mg-intro-inner {
  max-width: 880px;
  margin: 0 auto;
}
.mg-section-eyebrow {
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
.mg-intro h2 {
  font-size: clamp(1.65rem, 2.9vw, 2.35rem);
  font-weight: 900;
  color: var(--color-dark);
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.022em;
  margin-bottom: var(--space-5);
}
.mg-intro h2 em { color: var(--color-secondary); font-style: normal; }
.mg-answer-block {
  background: linear-gradient(135deg, rgba(229,53,231,0.07), rgba(249,183,62,0.04));
  border-left: 3px solid var(--color-secondary);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  padding: var(--space-5) var(--space-6);
  margin-bottom: var(--space-6);
}
.mg-answer-block p {
  font-size: 0.97rem;
  color: var(--color-dark);
  line-height: 1.82;
  margin: 0;
}
.mg-intro p {
  font-size: 0.95rem;
  color: var(--color-gray);
  line-height: 1.82;
  margin-bottom: var(--space-4);
}
.mg-intro p:last-child { margin-bottom: 0; }

/* ── LOCAL COVERAGE (dark) — asymmetric 3-col-then-stats layout ── */
.mg-coverage {
  padding: var(--space-16) 0;
  background: linear-gradient(135deg, #09090f 0%, #0e0a20 45%, #081622 100%);
  position: relative;
  overflow: hidden;
}
.mg-coverage::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 48% 70% at 8% 45%, rgba(249,183,62,0.09) 0%, transparent 58%),
    radial-gradient(ellipse 40% 60% at 92% 55%, rgba(229,53,231,0.09) 0%, transparent 58%);
  pointer-events: none;
}
.mg-cov-blob-1 {
  position: absolute;
  width: 350px; height: 350px;
  top: -80px; right: 8%;
  border-radius: 50%;
  background: radial-gradient(circle, rgba(229,53,231,0.07) 0%, transparent 68%);
  pointer-events: none;
  animation: mg-float-a 22s ease-in-out infinite;
  animation-delay: -6s;
}
.mg-cov-blob-2 {
  position: absolute;
  width: 180px; height: 180px;
  bottom: 10%; left: 30%;
  border-radius: 50%;
  background: radial-gradient(circle, rgba(249,183,62,0.07) 0%, transparent 70%);
  pointer-events: none;
  animation: mg-float-b 14s ease-in-out infinite;
  animation-delay: -9s;
}
.mg-cov-inner {
  position: relative;
  z-index: 1;
}
.mg-cov-eyebrow {
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
.mg-cov-header {
  margin-bottom: var(--space-10);
}
.mg-cov-header h2 {
  font-size: clamp(1.6rem, 3vw, 2.3rem);
  font-weight: 900;
  color: var(--color-white);
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.022em;
  margin-bottom: var(--space-4);
  max-width: 700px;
}
.mg-cov-header h2 em { color: var(--color-accent); font-style: normal; }
.mg-cov-header p {
  font-size: 0.92rem;
  color: rgba(255,255,255,0.55);
  max-width: 640px;
  line-height: 1.82;
  margin-bottom: var(--space-2);
}
/* 2-column then full-width stats — different layout from coral springs 3-col */
.mg-cov-two-col {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-5);
  margin-bottom: var(--space-8);
}
.mg-signal-card {
  background: rgba(255,255,255,0.04);
  border: 1px solid rgba(255,255,255,0.08);
  border-radius: 14px;
  padding: var(--space-6);
  transition: border-color var(--transition-base), background var(--transition-base);
}
.mg-signal-card:hover {
  border-color: rgba(249,183,62,0.26);
  background: rgba(255,255,255,0.07);
}
.mg-signal-card h4 {
  font-family: var(--font-heading);
  font-size: 0.88rem;
  font-weight: 800;
  color: var(--color-accent);
  margin-bottom: var(--space-2);
  display: flex;
  align-items: center;
  gap: var(--space-2);
}
.mg-signal-card h4 svg { width: 15px; height: 15px; flex-shrink: 0; }
.mg-signal-card p {
  font-size: 0.82rem;
  color: rgba(255,255,255,0.52);
  line-height: 1.72;
  margin: 0;
}
/* Technique 7: gradient text stats row — full-width strip */
.mg-stat-strip {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 0;
  background: rgba(255,255,255,0.03);
  border: 1px solid rgba(255,255,255,0.07);
  border-radius: 16px;
  overflow: hidden;
}
.mg-stat-item {
  text-align: center;
  padding: var(--space-7) var(--space-4);
  border-right: 1px solid rgba(255,255,255,0.06);
}
.mg-stat-item:last-child { border-right: none; }
.mg-stat-num {
  font-family: var(--font-heading);
  font-size: 2rem;
  font-weight: 900;
  line-height: 1;
  background: linear-gradient(135deg, var(--color-accent) 0%, var(--color-secondary) 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  margin-bottom: var(--space-1);
}
.mg-stat-label {
  font-size: 0.67rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1px;
  color: rgba(255,255,255,0.36);
  line-height: 1.3;
}

/* ── SERVICES GRID (white) ── */
.mg-services {
  padding: var(--space-16) 0;
  background: var(--color-white);
}
.mg-svc-header {
  text-align: center;
  margin-bottom: var(--space-12);
}
.mg-svc-header h2 {
  font-size: clamp(1.65rem, 2.9vw, 2.35rem);
  font-weight: 900;
  color: var(--color-dark);
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.022em;
  margin-bottom: var(--space-3);
}
.mg-svc-header h2 em { color: var(--color-secondary); font-style: normal; }
.mg-svc-lead {
  font-size: 0.95rem;
  color: var(--color-gray);
  max-width: 510px;
  margin: 0 auto;
  line-height: 1.75;
}
/* Technique 6: gold-to-magenta bottom-border, scaleX from RIGHT on hover */
.mg-svc-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
}
.mg-svc-card {
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
.mg-svc-card::after {
  content: '';
  position: absolute;
  bottom: 0; left: 0; right: 0;
  height: 3px;
  background: linear-gradient(90deg, var(--color-accent), var(--color-secondary));
  transform: scaleX(0);
  transform-origin: right;   /* right-origin — differentiates from coral springs (left) */
  transition: transform 0.30s ease;
}
.mg-svc-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 14px 36px rgba(249,183,62,0.13), 0 4px 10px rgba(0,0,0,0.06);
  border-color: rgba(249,183,62,0.22);
}
.mg-svc-card:hover::after { transform: scaleX(1); }
.mg-svc-icon {
  width: 50px; height: 50px;
  border-radius: 50%;
  background: linear-gradient(135deg, rgba(249,183,62,0.13), rgba(229,53,231,0.08));
  border: 1px solid rgba(249,183,62,0.20);
  display: flex; align-items: center; justify-content: center;
  color: var(--color-accent);
}
.mg-svc-icon svg { width: 22px; height: 22px; }
.mg-svc-card h3 {
  font-family: var(--font-heading);
  font-size: 0.92rem;
  font-weight: 800;
  color: var(--color-dark);
  margin: 0;
}
.mg-svc-card p {
  font-size: 0.82rem;
  color: var(--color-gray);
  line-height: 1.68;
  margin: 0;
  flex: 1;
}
.mg-svc-link {
  display: inline-flex;
  align-items: center;
  gap: 4px;
  font-size: 0.78rem;
  font-weight: 800;
  color: var(--color-accent);
  margin-top: auto;
  transition: gap var(--transition-fast);
  text-decoration: none;
}
.mg-svc-link:hover { gap: 8px; }
.mg-svc-link svg { width: 14px; height: 14px; }

/* ── FAQ (light) ── */
.mg-faq {
  padding: var(--space-16) 0;
  background: #f4f6f9;
}
.mg-faq-inner {
  max-width: 820px;
  margin: 0 auto;
}
.mg-faq h2 {
  font-size: clamp(1.55rem, 2.8vw, 2.2rem);
  font-weight: 900;
  color: var(--color-dark);
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.022em;
  margin-bottom: var(--space-3);
}
.mg-faq h2 em { color: var(--color-secondary); font-style: normal; }
.mg-faq-sub {
  font-size: 0.92rem;
  color: var(--color-gray);
  margin-bottom: var(--space-10);
  line-height: 1.75;
}
.mg-faq-list {
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
}
/* Technique 5: neon border on .open + icon rotate 45deg */
.mg-faq-item {
  background: var(--color-white);
  border: 1px solid rgba(229,53,231,0.10);
  border-radius: var(--radius-lg);
  overflow: hidden;
  transition: border-color var(--transition-base), box-shadow var(--transition-base);
}
.mg-faq-item.open {
  border-color: rgba(229,53,231,0.42);
  box-shadow: 0 4px 20px rgba(229,53,231,0.10);
}
.mg-faq-q {
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
.mg-faq-q:hover { color: var(--color-secondary); }
.mg-faq-item.open .mg-faq-q { color: var(--color-secondary); }
.mg-faq-icon {
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
.mg-faq-item.open .mg-faq-icon {
  background: var(--color-secondary);
  color: var(--color-white);
  transform: rotate(45deg);
}
.mg-faq-a {
  display: none;
  padding: 0 var(--space-6) var(--space-5);
  font-size: 0.88rem;
  color: var(--color-gray);
  line-height: 1.8;
  border-top: 1px solid rgba(229,53,231,0.07);
  padding-top: var(--space-4);
}
.mg-faq-item.open .mg-faq-a { display: block; }

/* ── RELATED AREAS — Technique 8: hover lift + magenta left-border reveal ── */
.mg-related {
  padding: var(--space-14) 0;
  background: var(--color-white);
}
.mg-related-header {
  text-align: center;
  margin-bottom: var(--space-10);
}
.mg-related h3 {
  font-size: clamp(1.45rem, 2.5vw, 2rem);
  font-weight: 900;
  color: var(--color-dark);
  text-wrap: balance;
  margin-bottom: var(--space-2);
}
.mg-related-sub {
  font-size: 0.9rem;
  color: var(--color-gray);
}
.mg-related-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
}
.mg-area-card {
  background: linear-gradient(145deg, #09090f, #11062a);
  border: 1px solid rgba(255,255,255,0.07);
  border-left: 3px solid rgba(229,53,231,0.0);
  border-radius: var(--radius-lg);
  padding: var(--space-7) var(--space-6);
  text-decoration: none;
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
  transition: transform var(--transition-base), box-shadow var(--transition-base), border-left-color var(--transition-base);
  position: relative;
}
.mg-area-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 16px 40px rgba(229,53,231,0.17), 0 4px 14px rgba(0,0,0,0.28);
  border-left-color: rgba(229,53,231,0.70);
}
.mg-area-icon {
  width: 42px; height: 42px;
  border-radius: 10px;
  background: rgba(255,255,255,0.05);
  border: 1px solid rgba(255,255,255,0.10);
  display: flex; align-items: center; justify-content: center;
  color: var(--color-secondary);
}
.mg-area-icon svg { width: 20px; height: 20px; }
.mg-area-card h4 {
  font-family: var(--font-heading);
  font-size: 0.95rem;
  font-weight: 800;
  color: var(--color-white);
  margin: 0;
}
.mg-area-card p {
  font-size: 0.80rem;
  color: rgba(255,255,255,0.50);
  line-height: 1.65;
  margin: 0;
  flex: 1;
}
.mg-area-link {
  display: inline-flex;
  align-items: center;
  gap: 4px;
  font-size: 0.78rem;
  font-weight: 800;
  color: var(--color-secondary);
  transition: gap var(--transition-fast);
  text-decoration: none;
}
.mg-area-link:hover { gap: 8px; }
.mg-area-link svg { width: 13px; height: 13px; }

/* ── EMERGENCY CTA (dark) ── */
.mg-cta {
  padding: var(--space-14) 0;
  background: linear-gradient(140deg, #09090f 0%, #110630 55%, #081620 100%);
  position: relative;
  overflow: hidden;
  text-align: center;
}
.mg-cta::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 52% 80% at 10% 50%, rgba(249,183,62,0.12) 0%, transparent 58%),
    radial-gradient(ellipse 44% 72% at 90% 50%, rgba(229,53,231,0.10) 0%, transparent 58%);
  pointer-events: none;
}
.mg-cta-inner {
  position: relative;
  z-index: 1;
  max-width: 560px;
  margin: 0 auto;
}
.mg-cta h2 {
  font-size: clamp(1.5rem, 2.8vw, 2.2rem);
  font-weight: 900;
  color: var(--color-white);
  text-wrap: balance;
  margin-bottom: var(--space-3);
}
.mg-cta h2 em { color: var(--color-accent); font-style: normal; }
.mg-cta p {
  font-size: 0.95rem;
  color: rgba(255,255,255,0.56);
  max-width: 440px;
  margin: 0 auto var(--space-7);
  line-height: 1.75;
}
.mg-cta-btns {
  display: flex;
  gap: var(--space-3);
  justify-content: center;
  flex-wrap: wrap;
}

/* ── RESPONSIVE ── */
@media (max-width: 1100px) {
  .mg-hero-inner { grid-template-columns: 1fr; }
  .mg-hero-card { display: none; }
  .mg-cov-two-col { grid-template-columns: 1fr; }
  .mg-stat-strip { grid-template-columns: repeat(2, 1fr); }
  .mg-stat-item:nth-child(2) { border-right: none; }
  .mg-stat-item:nth-child(3) { border-top: 1px solid rgba(255,255,255,0.06); }
  .mg-stat-item:nth-child(4) { border-top: 1px solid rgba(255,255,255,0.06); }
}
@media (max-width: 768px) {
  .mg-svc-grid { grid-template-columns: repeat(2, 1fr); }
  .mg-related-grid { grid-template-columns: 1fr; }
  .mg-cov-two-col { grid-template-columns: 1fr; }
}
@media (max-width: 480px) {
  .mg-svc-grid { grid-template-columns: 1fr; }
  .mg-stat-strip { grid-template-columns: 1fr 1fr; }
}
</style>

<!-- ═══ HERO ═══ -->
<section class="mg-hero" aria-label="Bail bonds in Margate, FL">
  <div class="mg-orb mg-orb-1" aria-hidden="true"></div>
  <div class="mg-orb mg-orb-2" aria-hidden="true"></div>
  <div class="mg-orb mg-orb-3" aria-hidden="true"></div>
  <div class="mg-orb mg-orb-4" aria-hidden="true"></div>

  <div class="container">
    <div class="mg-hero-inner">
      <div class="mg-hero-left">
        <span class="mg-eyebrow">
          <span class="mg-pulse"></span>
          Margate, FL — Central Broward County
        </span>
        <h1>Bail Bonds Near Me in <span class="hl-gold">Margate, FL</span> — <span class="hl-mag">24/7</span> Licensed Bondsman, Central Broward</h1>
        <p class="mg-hero-lead">Need bail bonds near you in Margate, FL? Mad Extra Bail Bonds posts bond at Broward County Main Jail within hours of your call — any charge, Margate PD or BSO, 24 hours a day. Licensed Florida bail bondsman serving Margate and central Broward County around the clock.</p>
        <div class="mg-hero-btns">
          <?php if (!empty($phone)): ?>
          <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>" class="btn-mg-primary">
            <?php echo lucide_icon('phone'); ?> Call Now — 24/7
          </a>
          <?php else: ?>
          <a href="/contact/" class="btn-mg-primary">
            <?php echo lucide_icon('zap'); ?> Get Help Now
          </a>
          <?php endif; ?>
          <a href="/contact/" class="btn-mg-secondary">Free Consultation</a>
        </div>
        <div class="mg-trust-row">
          <span class="mg-trust-badge"><?php echo lucide_icon('shield-check'); ?> Licensed FL Bondsman</span>
          <span class="mg-trust-badge"><?php echo lucide_icon('clock'); ?> 24/7 Available</span>
          <span class="mg-trust-badge"><?php echo lucide_icon('map-pin'); ?> Central Broward</span>
          <span class="mg-trust-badge"><?php echo lucide_icon('zap'); ?> Fast Release</span>
        </div>
      </div>

      <!-- Technique 3: glassmorphism card — horizontal badge row format -->
      <div class="mg-hero-card" aria-label="Margate bail bond quick facts">
        <div class="mgc-badge-row">
          <div class="mgc-badge">
            <div class="mgc-badge-num">~10 mi</div>
            <div class="mgc-badge-label">to Broward County Jail</div>
          </div>
          <div class="mgc-badge">
            <div class="mgc-badge-num">6–12 hrs</div>
            <div class="mgc-badge-label">typical misdemeanor release</div>
          </div>
          <div class="mgc-badge">
            <div class="mgc-badge-num">24/7</div>
            <div class="mgc-badge-label">always available</div>
          </div>
          <div class="mgc-badge">
            <div class="mgc-badge-num">Licensed</div>
            <div class="mgc-badge-label">FL bondsman</div>
          </div>
        </div>
        <hr class="mgc-divider">
        <ul class="mgc-list">
          <li><span class="mgc-check">✓</span> Licensed Florida bail bondsman — central Broward</li>
          <li><span class="mgc-check">✓</span> Familiar with Margate PD booking process</li>
          <li><span class="mgc-check">✓</span> Bond papers prepared before Broward Main transport</li>
          <li><span class="mgc-check">✓</span> Florida-fixed 10% rate — transparent pricing</li>
        </ul>
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>" class="mgc-cta">
          <?php echo lucide_icon('phone'); ?> Call Now — Free Consult
        </a>
        <?php else: ?>
        <a href="/contact/" class="mgc-cta">Get Help Now</a>
        <?php endif; ?>
        <p class="mgc-note">Available every hour — Margate, Sawgrass area &amp; all of Broward</p>
      </div>
    </div>
  </div>
</section>

<!-- SVG DIVIDER: dark → light (tear / gentle drip shape) -->
<div class="mg-div-dark-light" aria-hidden="true">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,60 L0,12 C360,60 720,0 1080,40 C1260,56 1380,28 1440,20 L1440,60 Z" fill="#f4f6f9"/>
  </svg>
</div>

<!-- ═══ INTRO / ANSWER SECTION ═══ -->
<section class="mg-intro" aria-label="How bail bonds work in Margate, FL">
  <div class="container">
    <div class="mg-intro-inner">
      <span class="mg-section-eyebrow">How It Works in Margate</span>
      <h2>How do bail bonds work after a <em>Margate, FL arrest</em>?</h2>
      <div class="mg-answer-block">
        <p>Bail bonds in Margate are available 24/7 — after an MPD or BSO arrest, the defendant is booked at the Margate Police Department facility and transported to Broward County Main Jail at 555 SE 1st Ave in Fort Lauderdale, approximately 10 miles east. Call Mad Extra Bail Bonds right away. We verify the bond amount with the jail, prepare paperwork, and post bond. You pay only the Florida-fixed 10% premium. Misdemeanor releases from Margate typically complete within 6 to 12 hours of arrest.</p>
      </div>
      <p>Mad Extra Bail Bonds is a licensed Florida bail bond agency based in Broward County, serving Margate and central Broward County with fast, professional bail bond services. Margate is a working-class to middle-class inland Broward suburb built around planned canal neighborhoods like Oriole Gardens and residential areas along Banks Road and Copans Road. It is the kind of community where most families have never dealt with a bail bond situation before — and where a knowledgeable bondsman matters.</p>
      <p>Margate arrests come from a consistent range of situations: DUI stops on Copans Road and Banks Road, drug possession, domestic battery, and active warrant arrests during routine traffic stops. The Sawgrass Mills Mall in adjacent Sunrise generates retail theft charges that sometimes involve Margate PD depending on exact location. Canal neighborhood trespassing and property crime situations also surface occasionally in Oriole Gardens and the surrounding residential areas.</p>
      <p>Florida law sets the bail bond premium at exactly 10% of court-ordered bail. This applies in Margate identically to every other jurisdiction in the state. If bail is set at $6,000 after a Margate arrest, the premium is $600. We walk Margate families through every cost before anything is signed.</p>
    </div>
  </div>
</section>

<!-- SVG DIVIDER: light → dark (diagonal fill) -->
<div class="mg-div-light-dark" aria-hidden="true">
  <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,56 L0,0 L1440,48 L1440,56 Z" fill="#09090f"/>
  </svg>
</div>

<!-- ═══ LOCAL COVERAGE SECTION ═══ -->
<section class="mg-coverage" aria-label="Margate local jail and neighborhood coverage">
  <div class="mg-cov-blob-1" aria-hidden="true"></div>
  <div class="mg-cov-blob-2" aria-hidden="true"></div>
  <div class="container mg-cov-inner">
    <span class="mg-cov-eyebrow"><?php echo lucide_icon('map-pin'); ?> Local Coverage — Margate, FL</span>
    <div class="mg-cov-header">
      <h2>Jail, neighborhoods, and common arrest situations in <em>Margate</em></h2>
      <p>Margate PD completes initial booking before transporting defendants to Broward County Main Jail in Fort Lauderdale — about 10 miles east on Copans Road to I-95. There is no extended city lockup in Margate. All defendants eventually arrive at Broward Main, which is where we post bond. We can have paperwork prepared before the transport even departs the Margate PD facility.</p>
      <p>Margate is primarily a residential city with canal neighborhoods and central Broward commercial corridors. The city's arrest profile is dominated by domestic situations, drug possession, DUI, and warrant-based arrests — the types of situations where speed and clear communication matter most to families who are often navigating this process for the first time.</p>
    </div>

    <div class="mg-cov-two-col">
      <div class="mg-signal-card">
        <h4><?php echo lucide_icon('landmark'); ?> Broward County Main Jail</h4>
        <p>555 SE 1st Ave, Fort Lauderdale — approximately 10 miles east of Margate. All MPD arrests transfer here after local booking. No extended-hold facility exists in Margate itself. We work directly with Broward Main intake staff and post bond the moment the defendant is processed in.</p>
      </div>
      <div class="mg-signal-card">
        <h4><?php echo lucide_icon('clock'); ?> Release Timeline from Margate</h4>
        <p>MPD local booking: 1–3 hours. Transport to Broward Main: 25–35 minutes. Jail intake: 2–6 hours. From your call to us, total misdemeanor release time runs 6 to 12 hours. We begin paperwork before transport departs and track the defendant through the system.</p>
      </div>
      <div class="mg-signal-card">
        <h4><?php echo lucide_icon('car'); ?> Copans Road &amp; Banks Road</h4>
        <p>These two east-west arterials through Margate are high-volume traffic enforcement corridors. DUI stops and warrant-based arrests during routine traffic stops on Copans Road and Banks Road are among the most common Margate arrest situations we handle.</p>
      </div>
      <div class="mg-signal-card">
        <h4><?php echo lucide_icon('home'); ?> Canal Neighborhoods — Oriole Gardens</h4>
        <p>Oriole Gardens is one of Margate's original planned communities, a large canal-based neighborhood built in the 1960s. Domestic situations and property crime arrests from Margate's canal neighborhoods — Heathgate, Aberdeen, Kimberly Lake, Royal Oak Hills — account for a meaningful portion of what we see from Margate.</p>
      </div>
      <div class="mg-signal-card">
        <h4><?php echo lucide_icon('shield'); ?> Margate Police Department</h4>
        <p>MPD handles all in-city arrests. BSO covers unincorporated pockets bordering Margate. Sawgrass Mills Mall proximity means the Margate-Sunrise border occasionally generates jurisdiction questions — we know how these situations work and can advise families on which agency made the arrest and where the defendant is being processed.</p>
      </div>
      <div class="mg-signal-card">
        <h4><?php echo lucide_icon('users'); ?> Domestic Battery — 24-Hour Hold</h4>
        <p>Florida law requires a mandatory 24-hour hold for domestic battery arrests before bond can be set. This applies in Margate exactly as it does everywhere in Broward County. We advise Margate families on this timeline so expectations are realistic, and we post bond the instant the hold expires.</p>
      </div>
    </div>

    <!-- Technique 7: gradient text stats — full-width strip with dividers -->
    <div class="mg-stat-strip">
      <div class="mg-stat-item">
        <div class="mg-stat-num">~10 mi</div>
        <div class="mg-stat-label">Margate to Broward Jail</div>
      </div>
      <div class="mg-stat-item">
        <div class="mg-stat-num">6–12 hrs</div>
        <div class="mg-stat-label">Typical misdemeanor release</div>
      </div>
      <div class="mg-stat-item">
        <div class="mg-stat-num">24/7</div>
        <div class="mg-stat-label">Always on call</div>
      </div>
      <div class="mg-stat-item">
        <div class="mg-stat-num">11+ yrs</div>
        <div class="mg-stat-label">Serving Broward County</div>
      </div>
    </div>
  </div>
</section>

<!-- SVG DIVIDER: dark → white (arc-fill) -->
<div class="mg-div-dark-white" aria-hidden="true">
  <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,56 L0,28 Q360,0 720,40 Q1080,56 1440,20 L1440,56 Z" fill="#ffffff"/>
  </svg>
</div>

<!-- ═══ SERVICES GRID ═══ -->
<section class="mg-services" aria-label="Bail bond services available in Margate, FL">
  <div class="container">
    <div class="mg-svc-header">
      <span class="mg-section-eyebrow">Services in Margate</span>
      <h2>What bail bond services are available in <em>Margate, FL</em>?</h2>
      <p class="mg-svc-lead">Every service we offer covers Margate and central Broward County — MPD or BSO, any charge, 24 hours a day, seven days a week.</p>
    </div>
    <div class="mg-svc-grid">
      <?php
      $mgSvcList = [
        ['slug' => 'bail-bonds',            'icon' => 'shield',         'name' => 'Bail Bond Services',        'desc' => 'General bail bond services for any criminal charge after a Margate arrest — MPD or BSO, we post bond at Broward County Main Jail the same day you call.'],
        ['slug' => 'dui-bail-bonds',         'icon' => 'car',            'name' => 'DUI Bail Bonds',             'desc' => 'DUI stops on Copans Road and Banks Road in Margate are handled fast. We move with urgency on DUI bonds at Broward County Main Jail.'],
        ['slug' => 'drug-charge-bail-bonds', 'icon' => 'alert-triangle', 'name' => 'Drug Charge Bail Bonds',    'desc' => 'Drug possession and related charges in Margate handled with speed and discretion — from the Oriole Gardens area to the Sawgrass Mills border.'],
        ['slug' => 'felony-bail-bonds',      'icon' => 'gavel',          'name' => 'Felony Bail Bonds',          'desc' => 'Felony charges from Margate mean higher bail and Broward bond hearings — 11 years of experience moving fast when stakes are highest.'],
        ['slug' => 'misdemeanor-bail-bonds', 'icon' => 'file-text',      'name' => 'Misdemeanor Bail Bonds',     'desc' => 'Most Margate misdemeanor releases complete within hours — retail theft near Sawgrass Mills, first-time offenses, warrant arrests. We get moving fast.'],
        ['slug' => 'warrant-bail-bonds',     'icon' => 'file-warning',   'name' => 'Warrant &amp; Traffic Bonds','desc' => 'Active warrant arrests during routine Margate traffic stops are common — resolve outstanding warrants before they compound into larger issues.'],
      ];
      foreach ($mgSvcList as $svc): ?>
      <div class="mg-svc-card">
        <div class="mg-svc-icon"><?php echo lucide_icon($svc['icon']); ?></div>
        <h3><?php echo $svc['name']; ?></h3>
        <p><?php echo $svc['desc']; ?></p>
        <a href="/services/<?php echo $svc['slug']; ?>/" class="mg-svc-link">
          Learn more <?php echo lucide_icon('arrow-right'); ?>
        </a>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- SVG DIVIDER: white → light (undulating double wave) -->
<div class="mg-div-white-light" aria-hidden="true">
  <svg viewBox="0 0 1440 48" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,0 Q360,48 720,16 Q1080,-16 1440,32 L1440,48 L0,48 Z" fill="#f4f6f9"/>
  </svg>
</div>

<!-- ═══ FAQ SECTION ═══ -->
<section class="mg-faq" aria-label="Margate FL bail bond FAQ">
  <div class="container">
    <div class="mg-faq-inner">
      <span class="mg-section-eyebrow">Common Questions</span>
      <h2>Frequently asked questions about <em>bail bonds in Margate, FL</em></h2>
      <p class="mg-faq-sub">Specific answers to what Margate and central Broward families ask most when a loved one is arrested.</p>

      <div class="mg-faq-list" role="list">
        <?php foreach ($_faqs as $faq): ?>
        <div class="mg-faq-item" role="listitem">
          <button class="mg-faq-q" aria-expanded="false" onclick="toggleMgFaq(this)">
            <?php echo htmlspecialchars($faq['q']); ?>
            <span class="mg-faq-icon" aria-hidden="true">+</span>
          </button>
          <div class="mg-faq-a" role="region">
            <p><?php echo htmlspecialchars($faq['a']); ?></p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- ═══ RELATED AREAS — Broward cities (Technique 8: hover lift + magenta left-border) ═══ -->
<section class="mg-related" aria-label="Other central Broward cities we serve near Margate">
  <div class="container">
    <div class="mg-related-header">
      <h3>Also Serving These Nearby Broward Cities</h3>
      <p class="mg-related-sub">Mad Extra Bail Bonds covers all of Broward County — same 24/7 licensed bondsman service in every city.</p>
    </div>
    <div class="mg-related-grid">
      <a href="/areas/coral-springs/" class="mg-area-card">
        <div class="mg-area-icon"><?php echo lucide_icon('map-pin'); ?></div>
        <h4>Coral Springs</h4>
        <p>Adjacent to Margate on the northwest — bail bonds for Coral Springs arrests handled the same way. CSPD bookings transferred to Broward County Main Jail. 24/7 service.</p>
        <span class="mg-area-link">View coverage <?php echo lucide_icon('arrow-right'); ?></span>
      </a>
      <a href="/areas/fort-lauderdale/" class="mg-area-card">
        <div class="mg-area-icon"><?php echo lucide_icon('landmark'); ?></div>
        <h4>Fort Lauderdale</h4>
        <p>Broward County Main Jail is in Fort Lauderdale — the hub for all Broward County arrests. Licensed 24/7 bondsman serving Fort Lauderdale and central Broward.</p>
        <span class="mg-area-link">View coverage <?php echo lucide_icon('arrow-right'); ?></span>
      </a>
      <a href="/areas/pompano-beach/" class="mg-area-card">
        <div class="mg-area-icon"><?php echo lucide_icon('globe'); ?></div>
        <h4>Pompano Beach</h4>
        <p>Bail bonds for Pompano Beach arrests in North Broward — same Broward Main process, same 24/7 licensed bondsman. Covering all central and north Broward County.</p>
        <span class="mg-area-link">View coverage <?php echo lucide_icon('arrow-right'); ?></span>
      </a>
    </div>
  </div>
</section>

<!-- ═══ EMERGENCY CTA ═══ -->
<section class="mg-cta" aria-label="Emergency bail bond help in Margate FL">
  <div class="mg-cta-inner">
    <h2>Need a bondsman in <em>Margate right now</em>?</h2>
    <p>Margate PD, BSO, Copans Road, Oriole Gardens — whatever the situation in Margate, we post bond at Broward Main and work until your family member is released.</p>
    <div class="mg-cta-btns">
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>" class="btn-mg-primary">
        <?php echo lucide_icon('phone'); ?> Call Now — 24/7
      </a>
      <?php endif; ?>
      <a href="/contact/" class="btn-mg-secondary">Send a Message</a>
    </div>
  </div>
</section>

</main>

<script>
function toggleMgFaq(btn) {
  const item = btn.closest('.mg-faq-item');
  const isOpen = item.classList.contains('open');
  document.querySelectorAll('.mg-faq-item.open').forEach(el => el.classList.remove('open'));
  document.querySelectorAll('.mg-faq-q').forEach(el => el.setAttribute('aria-expanded', 'false'));
  if (!isOpen) {
    item.classList.add('open');
    btn.setAttribute('aria-expanded', 'true');
  }
}
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
