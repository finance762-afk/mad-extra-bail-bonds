<?php
/**
 * areas/coral-springs/index.php — Coral Springs Service Area Page
 * Mad Extra Bail Bonds | Page One Insights v6.1
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Bail Bonds Near Me in Coral Springs FL | Mad Extra Bail Bonds | 24/7';
$pageDescription = 'Need bail bonds in Coral Springs, FL? Mad Extra Bail Bonds serves Coral Springs families with licensed 24/7 bail bond service across Broward County. Fast release — call now.';
$canonicalUrl    = $siteUrl . '/areas/coral-springs/';
$currentPage     = 'areas';

$_breadcrumb = generateBreadcrumbSchema([
    ['name' => 'Home',          'url' => $siteUrl . '/'],
    ['name' => 'Service Areas', 'url' => $siteUrl . '/areas/'],
    ['name' => 'Coral Springs', 'url' => $siteUrl . '/areas/coral-springs/'],
]);

$_serviceSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'Service',
    '@id'         => $siteUrl . '/areas/coral-springs/#service-coral-springs',
    'name'        => 'Bail Bonds in Coral Springs, FL',
    'description' => 'Licensed Florida bail bondsman serving Coral Springs and all of Broward County. Fast release from Broward County Main Jail, 24/7, any charge.',
    'url'         => $siteUrl . '/areas/coral-springs/',
    'provider'    => ['@id' => $siteUrl . '/#organization'],
    'areaServed'  => [
        ['@type' => 'City',   'name' => 'Coral Springs, FL'],
        ['@type' => 'County', 'name' => 'Broward County, FL'],
    ],
    'serviceType' => 'Bail Bond Services',
];

$_faqs = [
    [
        'q' => 'How long does it take from a Coral Springs arrest to release from Broward County Jail?',
        'a' => 'CSPD completes local booking, which takes roughly 1 to 3 hours, then transports the defendant to Broward County Main Jail in Fort Lauderdale — about a 15-mile, 25-minute drive. From the time you call us, we can have bond papers ready before transport even completes. Total misdemeanor release time from a Coral Springs arrest is typically 6 to 12 hours.',
    ],
    [
        'q' => 'Is this my child\'s first arrest in Coral Springs — what do I need to know?',
        'a' => 'First-time arrests in Coral Springs for misdemeanor charges often result in reasonable bail. We advise families on next steps beyond just getting them out — what comes after posting bond matters as much as the bond itself. We\'ve worked through this with hundreds of Broward County families and can walk you through exactly what to expect from the moment of arrest through the first court appearance.',
    ],
    [
        'q' => 'What are the most common reasons people get arrested in Coral Springs, FL?',
        'a' => 'DUI stops on University Drive and Sample Road are among the most frequent charges in Coral Springs. Drug possession, domestic battery, and traffic warrant arrests also generate significant volume. Coral Springs is a heavily planned residential city with high traffic enforcement presence — routine traffic stops that surface outstanding warrants are a common pathway to arrest here.',
    ],
    [
        'q' => 'Can Mad Extra Bail Bonds help if my family member was arrested during a domestic incident in Coral Springs?',
        'a' => 'Yes. Domestic battery charges in Coral Springs carry a mandatory hold before bond can be set — typically 24 hours from the time of arrest under Florida law. We advise families on this timeline so they are not caught off guard, and we have the bond ready to post the moment it can legally be set. Our job is to minimize the time between the hold lifting and your family member\'s release.',
    ],
    [
        'q' => 'Does the Coral Springs area have its own courthouse for criminal hearings?',
        'a' => 'Broward County has multiple courthouse locations. Coral Springs criminal cases are typically heard at the Broward County Central Courthouse in Fort Lauderdale. First appearances often occur via video feed from the jail. We can give families a clear picture of what the court schedule looks like after bond is posted so there are no surprises at the first hearing.',
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
   CORAL SPRINGS AREA PAGE — Mad Extra Bail Bonds
   Premium Tier | Dark/Neon Design System
   Techniques:
   (1) Hero: layered ::before radial-gradient + ::after SVG noise texture
   (2) Floating neon orbs — 4 orbs, gold-dominant, CSS keyframes
   (3) Glassmorphism hero sidebar card (backdrop-filter: blur(16px))
   (4) SVG wave dividers — 4 distinct shapes (wave, angular, gentle arc, ripple)
   (5) FAQ accordion: neon secondary border on .open + icon rotates 45deg
   (6) Service cards: neon bottom-border scaleX on hover
   (7) Gradient text on stat counters via background-clip: text
   (8) Hover lift cards in related areas — dark card with lift + glow shadow
   ============================================================ */

/* ── 1. HERO ── */
.cs-hero {
  position: relative;
  min-height: 60vh;
  display: flex;
  align-items: center;
  background: #09090f;
  overflow: hidden;
  padding-top: var(--nav-height, 72px);
  padding-bottom: var(--space-12);
}

/* Technique 1a: layered ::before radial gradients — gold left, magenta upper-right */
.cs-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 55% 75% at 5% 75%, rgba(249,183,62,0.20) 0%, transparent 52%),
    radial-gradient(ellipse 45% 60% at 88% 8%,  rgba(229,53,231,0.18) 0%, transparent 52%),
    radial-gradient(ellipse 80% 50% at 50% 110%, rgba(9,9,15,0.99) 0%, transparent 75%);
  pointer-events: none;
}

/* Technique 1b: SVG noise texture overlay */
.cs-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='csn'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23csn)' opacity='0.04'/%3E%3C/svg%3E");
  opacity: 0.5;
  pointer-events: none;
}

/* Technique 2: floating neon orbs — 4 orbs, gold-dominant palette */
.cs-orb {
  position: absolute;
  border-radius: 50%;
  pointer-events: none;
  will-change: transform;
}
.cs-orb-1 {
  width: 480px; height: 480px;
  top: -150px; right: 5%;
  background: radial-gradient(circle, rgba(249,183,62,0.14) 0%, transparent 65%);
  animation: cs-drift-a 18s ease-in-out infinite;
}
.cs-orb-2 {
  width: 280px; height: 280px;
  bottom: -60px; left: 12%;
  background: radial-gradient(circle, rgba(229,53,231,0.12) 0%, transparent 65%);
  animation: cs-drift-a 22s ease-in-out infinite reverse;
  animation-delay: -9s;
}
.cs-orb-3 {
  width: 180px; height: 180px;
  top: 35%; left: 38%;
  background: radial-gradient(circle, rgba(249,183,62,0.08) 0%, transparent 70%);
  animation: cs-drift-b 26s ease-in-out infinite;
  animation-delay: -14s;
}
.cs-orb-4 {
  width: 120px; height: 120px;
  top: 15%; left: 20%;
  background: radial-gradient(circle, rgba(229,53,231,0.09) 0%, transparent 70%);
  animation: cs-drift-b 14s ease-in-out infinite;
  animation-delay: -5s;
}
@keyframes cs-drift-a {
  0%,100% { transform: translate(0,0) scale(1); }
  33%     { transform: translate(-18px, 24px) scale(1.06); }
  66%     { transform: translate(14px, -16px) scale(0.95); }
}
@keyframes cs-drift-b {
  0%,100% { transform: translate(0,0) scale(1); }
  40%     { transform: translate(22px, -20px) scale(1.08); }
  75%     { transform: translate(-12px, 18px) scale(0.94); }
}

.cs-hero-inner {
  position: relative;
  z-index: 2;
  display: grid;
  grid-template-columns: 1fr 380px;
  gap: var(--space-12);
  align-items: center;
  padding: var(--space-12) 0;
  width: 100%;
}
.cs-hero-left { max-width: 660px; }

.cs-eyebrow {
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
.cs-pulse {
  width: 7px; height: 7px;
  border-radius: 50%;
  background: var(--color-accent);
  box-shadow: 0 0 8px var(--color-accent);
  animation: cs-pulse 2s ease-in-out infinite;
  flex-shrink: 0;
}
@keyframes cs-pulse {
  0%,100% { opacity:1; transform:scale(1); }
  50%     { opacity:.5; transform:scale(.7); }
}

.cs-hero h1 {
  font-size: clamp(1.8rem, 3.6vw, 3rem);
  font-weight: 900;
  color: var(--color-white);
  line-height: 1.1;
  margin-bottom: var(--space-5);
  letter-spacing: -0.025em;
  text-wrap: balance;
}
.cs-hero h1 .hl-gold { color: var(--color-accent); text-shadow: 0 0 28px rgba(249,183,62,0.55); }
.cs-hero h1 .hl-mag  { color: var(--color-secondary); text-shadow: 0 0 28px rgba(229,53,231,0.55); }

.cs-hero-lead {
  font-size: 1rem;
  color: rgba(255,255,255,0.65);
  line-height: 1.82;
  margin-bottom: var(--space-7);
  max-width: 560px;
}
.cs-hero-btns {
  display: flex;
  gap: var(--space-3);
  flex-wrap: wrap;
  margin-bottom: var(--space-7);
}
.btn-cs-primary {
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
.btn-cs-primary:hover {
  background: #ffc94f;
  box-shadow: 0 0 44px rgba(249,183,62,0.70), 0 8px 22px rgba(0,0,0,0.35);
  transform: translateY(-2px);
  color: #0a0d1a;
}
.btn-cs-primary svg { width: 15px; height: 15px; }
.btn-cs-secondary {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 12px 24px;
  background: transparent;
  color: var(--color-secondary);
  border: 2px solid rgba(229,53,231,0.50);
  font-family: var(--font-heading);
  font-size: 0.82rem;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  border-radius: var(--radius-md);
  text-decoration: none;
  transition: all var(--transition-base);
}
.btn-cs-secondary:hover {
  background: var(--color-secondary);
  color: var(--color-white);
  border-color: var(--color-secondary);
  box-shadow: 0 0 26px rgba(229,53,231,0.42);
  transform: translateY(-2px);
}

.cs-trust-row {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-2);
}
.cs-trust-badge {
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
.cs-trust-badge svg { width: 11px; height: 11px; color: var(--color-accent); flex-shrink: 0; }

/* Technique 3: glassmorphism hero sidebar card */
.cs-hero-card {
  position: relative;
  background: rgba(255,255,255,0.042);
  border: 1px solid rgba(255,255,255,0.10);
  border-radius: 20px;
  padding: var(--space-7) var(--space-6);
  backdrop-filter: blur(16px);
  -webkit-backdrop-filter: blur(16px);
  box-shadow: 0 8px 32px rgba(0,0,0,0.28);
}
.cs-hero-card::before {
  content: '';
  position: absolute;
  inset: -1px;
  border-radius: 21px;
  background: linear-gradient(145deg, rgba(249,183,62,0.32) 0%, rgba(229,53,231,0.16) 50%, transparent 100%);
  z-index: -1;
  opacity: 0.5;
}

/* Stat items inside sidebar card */
.csc-stats {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-3);
  margin-bottom: var(--space-6);
}
.csc-stat {
  background: rgba(255,255,255,0.05);
  border: 1px solid rgba(255,255,255,0.08);
  border-radius: 12px;
  padding: var(--space-4) var(--space-3);
  text-align: center;
}
.csc-stat-num {
  font-family: var(--font-heading);
  font-size: 1.4rem;
  font-weight: 900;
  background: linear-gradient(135deg, var(--color-accent) 0%, #fcd87e 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  line-height: 1;
  margin-bottom: 4px;
}
.csc-stat-label {
  font-size: 0.62rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.8px;
  color: rgba(255,255,255,0.42);
  line-height: 1.3;
}
.csc-divider {
  border: none;
  border-top: 1px solid rgba(255,255,255,0.08);
  margin: 0 0 var(--space-5);
}
.csc-list {
  list-style: none;
  padding: 0;
  margin: 0 0 var(--space-6);
  display: flex;
  flex-direction: column;
  gap: var(--space-2);
}
.csc-list li {
  display: flex;
  align-items: flex-start;
  gap: var(--space-2);
  font-size: 0.82rem;
  color: rgba(255,255,255,0.78);
  line-height: 1.5;
}
.csc-check {
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
.csc-cta {
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
.csc-cta:hover {
  box-shadow: 0 8px 34px rgba(249,183,62,0.62);
  transform: translateY(-1px);
  color: #0a0d1a;
}
.csc-note {
  text-align: center;
  font-size: 0.6rem;
  color: rgba(255,255,255,0.28);
  margin-top: var(--space-3);
  line-height: 1.5;
}

/* ── TECHNIQUE 4: SVG DIVIDERS (4 distinct shapes) ── */
.cs-div-dark-light { line-height: 0; background: #09090f; }
.cs-div-dark-light svg { display: block; width: 100%; }
.cs-div-light-dark { line-height: 0; background: #f4f6f9; }
.cs-div-light-dark svg { display: block; width: 100%; }
.cs-div-dark-white { line-height: 0; background: #09090f; }
.cs-div-dark-white svg { display: block; width: 100%; }
.cs-div-white-light { line-height: 0; background: #ffffff; }
.cs-div-white-light svg { display: block; width: 100%; }

/* ── INTRO / ANSWER (light) ── */
.cs-intro {
  padding: var(--space-16) 0;
  background: #f4f6f9;
}
.cs-intro-inner {
  max-width: 880px;
  margin: 0 auto;
}
.cs-section-eyebrow {
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
.cs-intro h2 {
  font-size: clamp(1.65rem, 2.9vw, 2.35rem);
  font-weight: 900;
  color: var(--color-dark);
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.022em;
  margin-bottom: var(--space-5);
}
.cs-intro h2 em { color: var(--color-secondary); font-style: normal; }
.cs-answer-block {
  background: linear-gradient(135deg, rgba(229,53,231,0.07), rgba(249,183,62,0.04));
  border-left: 3px solid var(--color-secondary);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  padding: var(--space-5) var(--space-6);
  margin-bottom: var(--space-6);
}
.cs-answer-block p {
  font-size: 0.97rem;
  color: var(--color-dark);
  line-height: 1.82;
  margin: 0;
}
.cs-intro p {
  font-size: 0.95rem;
  color: var(--color-gray);
  line-height: 1.82;
  margin-bottom: var(--space-4);
}
.cs-intro p:last-child { margin-bottom: 0; }

/* ── LOCAL COVERAGE (dark) — 3-column panel layout ── */
.cs-coverage {
  padding: var(--space-16) 0;
  background: linear-gradient(150deg, #09090f 0%, #0e0620 50%, #091226 100%);
  position: relative;
  overflow: hidden;
}
.cs-coverage::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 45% 65% at 2% 40%, rgba(249,183,62,0.10) 0%, transparent 58%),
    radial-gradient(ellipse 38% 55% at 98% 60%, rgba(229,53,231,0.09) 0%, transparent 58%);
  pointer-events: none;
}
.cs-cov-blob-1 {
  position: absolute;
  width: 400px; height: 400px;
  top: -120px; right: 15%;
  border-radius: 50%;
  background: radial-gradient(circle, rgba(249,183,62,0.07) 0%, transparent 68%);
  pointer-events: none;
  animation: cs-drift-a 20s ease-in-out infinite;
}
.cs-cov-blob-2 {
  position: absolute;
  width: 220px; height: 220px;
  bottom: -60px; left: 5%;
  border-radius: 50%;
  background: radial-gradient(circle, rgba(229,53,231,0.07) 0%, transparent 70%);
  pointer-events: none;
  animation: cs-drift-b 16s ease-in-out infinite reverse;
  animation-delay: -7s;
}
.cs-cov-inner {
  position: relative;
  z-index: 1;
}
.cs-cov-eyebrow {
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
.cs-cov-header {
  text-align: center;
  margin-bottom: var(--space-12);
}
.cs-cov-header h2 {
  font-size: clamp(1.6rem, 3vw, 2.3rem);
  font-weight: 900;
  color: var(--color-white);
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.022em;
  margin-bottom: var(--space-4);
}
.cs-cov-header h2 em { color: var(--color-accent); font-style: normal; }
.cs-cov-header p {
  font-size: 0.92rem;
  color: rgba(255,255,255,0.55);
  max-width: 560px;
  margin: 0 auto;
  line-height: 1.8;
}
/* 3-column card layout — distinct from delray-beach 2-col */
.cs-cov-panels {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-5);
  margin-bottom: var(--space-12);
}
.cs-cov-card {
  background: rgba(255,255,255,0.04);
  border: 1px solid rgba(255,255,255,0.08);
  border-radius: 14px;
  padding: var(--space-6);
  transition: border-color var(--transition-base), background var(--transition-base), transform var(--transition-base);
}
.cs-cov-card:hover {
  border-color: rgba(249,183,62,0.28);
  background: rgba(255,255,255,0.07);
  transform: translateY(-3px);
}
.cs-cov-card-icon {
  width: 44px; height: 44px;
  border-radius: 12px;
  background: rgba(249,183,62,0.10);
  border: 1px solid rgba(249,183,62,0.20);
  display: flex; align-items: center; justify-content: center;
  color: var(--color-accent);
  margin-bottom: var(--space-4);
}
.cs-cov-card-icon svg { width: 20px; height: 20px; }
.cs-cov-card h4 {
  font-family: var(--font-heading);
  font-size: 0.88rem;
  font-weight: 800;
  color: var(--color-white);
  margin-bottom: var(--space-2);
}
.cs-cov-card p {
  font-size: 0.82rem;
  color: rgba(255,255,255,0.52);
  line-height: 1.72;
  margin: 0;
}

/* Technique 7: gradient text stats row */
.cs-stat-row {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-6);
  padding: var(--space-8) var(--space-8);
  background: rgba(255,255,255,0.03);
  border: 1px solid rgba(255,255,255,0.07);
  border-radius: 16px;
}
.cs-stat-item { text-align: center; }
.cs-stat-num {
  font-family: var(--font-heading);
  font-size: 2rem;
  font-weight: 900;
  line-height: 1;
  background: linear-gradient(135deg, var(--color-accent) 0%, #fcd87e 50%, var(--color-secondary) 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  margin-bottom: var(--space-1);
}
.cs-stat-label {
  font-size: 0.68rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1px;
  color: rgba(255,255,255,0.38);
  line-height: 1.3;
}

/* ── SERVICES GRID (white) ── */
.cs-services {
  padding: var(--space-16) 0;
  background: var(--color-white);
}
.cs-svc-header {
  text-align: center;
  margin-bottom: var(--space-12);
}
.cs-svc-header h2 {
  font-size: clamp(1.65rem, 2.9vw, 2.35rem);
  font-weight: 900;
  color: var(--color-dark);
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.022em;
  margin-bottom: var(--space-3);
}
.cs-svc-header h2 em { color: var(--color-secondary); font-style: normal; }
.cs-svc-lead {
  font-size: 0.95rem;
  color: var(--color-gray);
  max-width: 500px;
  margin: 0 auto;
  line-height: 1.75;
}
/* Technique 6: service cards with neon bottom-border scaleX animation */
.cs-svc-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
}
.cs-svc-card {
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
.cs-svc-card::after {
  content: '';
  position: absolute;
  bottom: 0; left: 0; right: 0;
  height: 3px;
  background: linear-gradient(90deg, var(--color-secondary), var(--color-accent));
  transform: scaleX(0);
  transform-origin: left;
  transition: transform 0.32s ease;
}
.cs-svc-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 14px 36px rgba(229,53,231,0.13), 0 4px 10px rgba(0,0,0,0.06);
  border-color: rgba(229,53,231,0.22);
}
.cs-svc-card:hover::after { transform: scaleX(1); }
.cs-svc-icon {
  width: 50px; height: 50px;
  border-radius: 50%;
  background: linear-gradient(135deg, rgba(229,53,231,0.11), rgba(249,183,62,0.08));
  border: 1px solid rgba(229,53,231,0.18);
  display: flex; align-items: center; justify-content: center;
  color: var(--color-secondary);
}
.cs-svc-icon svg { width: 22px; height: 22px; }
.cs-svc-card h3 {
  font-family: var(--font-heading);
  font-size: 0.92rem;
  font-weight: 800;
  color: var(--color-dark);
  margin: 0;
}
.cs-svc-card p {
  font-size: 0.82rem;
  color: var(--color-gray);
  line-height: 1.68;
  margin: 0;
  flex: 1;
}
.cs-svc-link {
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
.cs-svc-link:hover { gap: 8px; }
.cs-svc-link svg { width: 14px; height: 14px; }

/* ── FAQ (light) ── */
.cs-faq {
  padding: var(--space-16) 0;
  background: #f4f6f9;
}
.cs-faq-inner {
  max-width: 820px;
  margin: 0 auto;
}
.cs-faq h2 {
  font-size: clamp(1.55rem, 2.8vw, 2.2rem);
  font-weight: 900;
  color: var(--color-dark);
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.022em;
  margin-bottom: var(--space-3);
}
.cs-faq h2 em { color: var(--color-secondary); font-style: normal; }
.cs-faq-sub {
  font-size: 0.92rem;
  color: var(--color-gray);
  margin-bottom: var(--space-10);
  line-height: 1.75;
}
.cs-faq-list {
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
}
/* Technique 5: FAQ accordion neon border on .open, icon rotates 45deg */
.cs-faq-item {
  background: var(--color-white);
  border: 1px solid rgba(229,53,231,0.11);
  border-radius: var(--radius-lg);
  overflow: hidden;
  transition: border-color var(--transition-base), box-shadow var(--transition-base);
}
.cs-faq-item.open {
  border-color: rgba(229,53,231,0.40);
  box-shadow: 0 4px 20px rgba(229,53,231,0.10);
}
.cs-faq-q {
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
.cs-faq-q:hover { color: var(--color-secondary); }
.cs-faq-item.open .cs-faq-q { color: var(--color-secondary); }
.cs-faq-icon {
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
.cs-faq-item.open .cs-faq-icon {
  background: var(--color-secondary);
  color: var(--color-white);
  transform: rotate(45deg);
}
.cs-faq-a {
  display: none;
  padding: 0 var(--space-6) var(--space-5);
  font-size: 0.88rem;
  color: var(--color-gray);
  line-height: 1.8;
  border-top: 1px solid rgba(229,53,231,0.07);
  padding-top: var(--space-4);
}
.cs-faq-item.open .cs-faq-a { display: block; }

/* ── RELATED AREAS (white) — Technique 8: hover lift cards ── */
.cs-related {
  padding: var(--space-14) 0;
  background: var(--color-white);
}
.cs-related-header {
  text-align: center;
  margin-bottom: var(--space-10);
}
.cs-related h3 {
  font-size: clamp(1.45rem, 2.5vw, 2rem);
  font-weight: 900;
  color: var(--color-dark);
  text-wrap: balance;
  margin-bottom: var(--space-2);
}
.cs-related-sub {
  font-size: 0.9rem;
  color: var(--color-gray);
}
.cs-related-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
}
.cs-area-card {
  background: linear-gradient(150deg, #09090f, #120830);
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
.cs-area-card::before {
  content: '';
  position: absolute;
  bottom: 0; left: 0; right: 0;
  height: 2px;
  background: linear-gradient(90deg, var(--color-accent), var(--color-secondary));
  transform: scaleX(0);
  transform-origin: left;
  transition: transform 0.3s ease;
}
.cs-area-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 16px 40px rgba(249,183,62,0.16), 0 4px 14px rgba(0,0,0,0.30);
  border-color: rgba(249,183,62,0.28);
}
.cs-area-card:hover::before { transform: scaleX(1); }
.cs-area-icon {
  width: 42px; height: 42px;
  border-radius: 10px;
  background: rgba(255,255,255,0.05);
  border: 1px solid rgba(255,255,255,0.10);
  display: flex; align-items: center; justify-content: center;
  color: var(--color-accent);
}
.cs-area-icon svg { width: 20px; height: 20px; }
.cs-area-card h4 {
  font-family: var(--font-heading);
  font-size: 0.95rem;
  font-weight: 800;
  color: var(--color-white);
  margin: 0;
}
.cs-area-card p {
  font-size: 0.80rem;
  color: rgba(255,255,255,0.50);
  line-height: 1.65;
  margin: 0;
  flex: 1;
}
.cs-area-link {
  display: inline-flex;
  align-items: center;
  gap: 4px;
  font-size: 0.78rem;
  font-weight: 800;
  color: var(--color-accent);
  transition: gap var(--transition-fast);
  text-decoration: none;
}
.cs-area-link:hover { gap: 8px; }
.cs-area-link svg { width: 13px; height: 13px; }

/* ── EMERGENCY CTA (dark) ── */
.cs-cta {
  padding: var(--space-14) 0;
  background: linear-gradient(135deg, #09090f 0%, #17063c 55%, #091526 100%);
  position: relative;
  overflow: hidden;
  text-align: center;
}
.cs-cta::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 50% 80% at 15% 50%, rgba(249,183,62,0.12) 0%, transparent 58%),
    radial-gradient(ellipse 42% 70% at 85% 50%, rgba(229,53,231,0.10) 0%, transparent 58%);
  pointer-events: none;
}
.cs-cta-inner {
  position: relative;
  z-index: 1;
  max-width: 580px;
  margin: 0 auto;
}
.cs-cta h2 {
  font-size: clamp(1.5rem, 2.8vw, 2.2rem);
  font-weight: 900;
  color: var(--color-white);
  text-wrap: balance;
  margin-bottom: var(--space-3);
}
.cs-cta h2 em { color: var(--color-accent); font-style: normal; }
.cs-cta p {
  font-size: 0.95rem;
  color: rgba(255,255,255,0.56);
  max-width: 450px;
  margin: 0 auto var(--space-7);
  line-height: 1.75;
}
.cs-cta-btns {
  display: flex;
  gap: var(--space-3);
  justify-content: center;
  flex-wrap: wrap;
}

/* ── RESPONSIVE ── */
@media (max-width: 1100px) {
  .cs-hero-inner { grid-template-columns: 1fr; }
  .cs-hero-card { display: none; }
  .cs-cov-panels { grid-template-columns: repeat(2, 1fr); }
  .cs-stat-row { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 768px) {
  .cs-svc-grid { grid-template-columns: repeat(2, 1fr); }
  .cs-related-grid { grid-template-columns: 1fr; }
  .cs-cov-panels { grid-template-columns: 1fr; }
  .cs-stat-row { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 480px) {
  .cs-svc-grid { grid-template-columns: 1fr; }
  .cs-stat-row { grid-template-columns: 1fr 1fr; }
}
</style>

<!-- ═══ HERO ═══ -->
<section class="cs-hero" aria-label="Bail bonds in Coral Springs, FL">
  <div class="cs-orb cs-orb-1" aria-hidden="true"></div>
  <div class="cs-orb cs-orb-2" aria-hidden="true"></div>
  <div class="cs-orb cs-orb-3" aria-hidden="true"></div>
  <div class="cs-orb cs-orb-4" aria-hidden="true"></div>

  <div class="container">
    <div class="cs-hero-inner">
      <div class="cs-hero-left">
        <span class="cs-eyebrow">
          <span class="cs-pulse"></span>
          Coral Springs, FL — West Broward County
        </span>
        <h1>Bail Bonds Near Me in <span class="hl-gold">Coral Springs, FL</span> — <span class="hl-mag">24/7</span> Bondsman, West Broward</h1>
        <p class="cs-hero-lead">Need bail bonds near you in Coral Springs, FL? Mad Extra Bail Bonds posts bond at the Broward County Main Jail within hours of your call — any charge, any hour. We are a licensed Florida bail bondsman serving Coral Springs and all of Broward County around the clock.</p>
        <div class="cs-hero-btns">
          <?php if (!empty($phone)): ?>
          <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>" class="btn-cs-primary">
            <?php echo lucide_icon('phone'); ?> Call Now — 24/7
          </a>
          <?php else: ?>
          <a href="/contact/" class="btn-cs-primary">
            <?php echo lucide_icon('zap'); ?> Get Help Now
          </a>
          <?php endif; ?>
          <a href="/contact/" class="btn-cs-secondary">Free Consultation</a>
        </div>
        <div class="cs-trust-row">
          <span class="cs-trust-badge"><?php echo lucide_icon('shield-check'); ?> Licensed FL Bondsman</span>
          <span class="cs-trust-badge"><?php echo lucide_icon('clock'); ?> 24/7 Available</span>
          <span class="cs-trust-badge"><?php echo lucide_icon('map-pin'); ?> West Broward Coverage</span>
          <span class="cs-trust-badge"><?php echo lucide_icon('zap'); ?> Fast Release</span>
        </div>
      </div>

      <!-- Technique 3: Glassmorphism hero sidebar card with stats grid -->
      <div class="cs-hero-card" aria-label="Quick stats">
        <div class="csc-stats">
          <div class="csc-stat">
            <div class="csc-stat-num">~15 mi</div>
            <div class="csc-stat-label">to Broward County Jail</div>
          </div>
          <div class="csc-stat">
            <div class="csc-stat-num">6–12 hrs</div>
            <div class="csc-stat-label">typical misdemeanor release</div>
          </div>
          <div class="csc-stat">
            <div class="csc-stat-num">24/7</div>
            <div class="csc-stat-label">always available</div>
          </div>
          <div class="csc-stat">
            <div class="csc-stat-num">Licensed</div>
            <div class="csc-stat-label">FL bondsman</div>
          </div>
        </div>
        <hr class="csc-divider">
        <ul class="csc-list">
          <li><span class="csc-check">✓</span> Licensed Florida bail bondsman — Broward County</li>
          <li><span class="csc-check">✓</span> Familiar with CSPD booking process</li>
          <li><span class="csc-check">✓</span> Bond papers ready before jail transport completes</li>
          <li><span class="csc-check">✓</span> Florida-fixed 10% rate — no hidden fees</li>
        </ul>
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>" class="csc-cta">
          <?php echo lucide_icon('phone'); ?> Call Now — Free Consult
        </a>
        <?php else: ?>
        <a href="/contact/" class="csc-cta">Get Help Now</a>
        <?php endif; ?>
        <p class="csc-note">Available every hour — 365 days a year</p>
      </div>
    </div>
  </div>
</section>

<!-- SVG DIVIDER: dark → light (tall wave) -->
<div class="cs-div-dark-light" aria-hidden="true">
  <svg viewBox="0 0 1440 64" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,64 L0,20 C240,64 480,0 720,32 C960,64 1200,8 1440,40 L1440,64 Z" fill="#f4f6f9"/>
  </svg>
</div>

<!-- ═══ INTRO / ANSWER SECTION ═══ -->
<section class="cs-intro" aria-label="How bail bonds work in Coral Springs, FL">
  <div class="container">
    <div class="cs-intro-inner">
      <span class="cs-section-eyebrow">How It Works in Coral Springs</span>
      <h2>How do bail bonds work after a <em>Coral Springs arrest</em>?</h2>
      <div class="cs-answer-block">
        <p>Bail bonds in Coral Springs work fast: after a CSPD arrest, the defendant is booked locally and transported to Broward County Main Jail at 555 SE 1st Ave in Fort Lauderdale — about 15 miles southeast. Call Mad Extra Bail Bonds immediately. We verify the bond amount with the jail, prepare paperwork, and post the full bail. You pay only the Florida-required 10% premium. Release processing begins the moment bond is posted.</p>
      </div>
      <p>Mad Extra Bail Bonds is a licensed Florida bail bond agency based in Broward County, serving Coral Springs and all of West Broward County. Coral Springs is one of Florida's most meticulously planned cities — a family-oriented, high-homeownership community where many families have never dealt with an arrest before. We understand the stress that comes with a call from the Coral Springs Police Department, and we make the process as straightforward as possible.</p>
      <p>CSPD operates as a full-service city police department. After an arrest at a Coral Springs location — whether on Wiles Road and University Drive, near Coral Springs City Hall at Sample Road, or in residential neighborhoods like Ramblewood, Turtle Run, or Eagle Trace — booking happens locally before transport to Broward Main. We can start the paperwork before that transport is even completed.</p>
      <p>The Florida bail bond premium is set by statute at exactly 10% of the court-ordered bail amount — the same rate applies in Coral Springs as everywhere else in Florida. If bail is set at $8,000, the premium is $800. We are fully transparent about every cost before you commit to anything.</p>
    </div>
  </div>
</section>

<!-- SVG DIVIDER: light → dark (angular, asymmetric) -->
<div class="cs-div-light-dark" aria-hidden="true">
  <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,0 L480,52 L960,8 L1440,48 L1440,56 L0,56 Z" fill="#09090f"/>
  </svg>
</div>

<!-- ═══ LOCAL COVERAGE SECTION ═══ -->
<section class="cs-coverage" aria-label="Local jail coverage and Coral Springs neighborhoods">
  <div class="cs-cov-blob-1" aria-hidden="true"></div>
  <div class="cs-cov-blob-2" aria-hidden="true"></div>
  <div class="container cs-cov-inner">
    <div class="cs-cov-header">
      <span class="cs-cov-eyebrow"><?php echo lucide_icon('map-pin'); ?> Local Coverage — Coral Springs</span>
      <h2>Jail, neighborhoods, and what to expect from a <em>Coral Springs</em> arrest</h2>
      <p>Coral Springs arrests go to Broward County Main Jail. Here is what the process looks like from the moment CSPD makes an arrest to the moment your family member walks out.</p>
    </div>

    <div class="cs-cov-panels">
      <div class="cs-cov-card">
        <div class="cs-cov-card-icon"><?php echo lucide_icon('landmark'); ?></div>
        <h4>Broward County Main Jail</h4>
        <p>555 SE 1st Ave, Fort Lauderdale — all Coral Springs arrests end up here after CSPD local booking. Approximately 15 miles and 25 minutes southeast of Coral Springs. We are highly familiar with Broward Main's intake and release procedures and work directly with jail staff.</p>
      </div>
      <div class="cs-cov-card">
        <div class="cs-cov-card-icon"><?php echo lucide_icon('clock'); ?></div>
        <h4>Release Timeline</h4>
        <p>CSPD local booking: 1–3 hours. Transport to Broward Main: ~25 minutes. Jail intake processing: 2–5 hours. From the time you call us, we target a misdemeanor release window of 6–12 hours total from arrest. We call you with updates throughout the process.</p>
      </div>
      <div class="cs-cov-card">
        <div class="cs-cov-card-icon"><?php echo lucide_icon('car'); ?></div>
        <h4>University Drive &amp; Sample Road</h4>
        <p>The University Drive and Wiles Road corridor, and Sample Road near Coral Springs City Hall, are major traffic enforcement areas. DUI stops and warrant-based arrests during routine traffic stops are among the most common Coral Springs arrest types we handle.</p>
      </div>
      <div class="cs-cov-card">
        <div class="cs-cov-card-icon"><?php echo lucide_icon('home'); ?></div>
        <h4>Residential Neighborhoods</h4>
        <p>Ramblewood, Turtle Run, Eagle Trace, Maplewood, Royal Palm Point, and Coral Glades are Coral Springs' established planned communities. Domestic battery and first-time offense situations in these neighborhoods are what we see most often from Coral Springs families.</p>
      </div>
      <div class="cs-cov-card">
        <div class="cs-cov-card-icon"><?php echo lucide_icon('users'); ?></div>
        <h4>First-Time Arrests</h4>
        <p>Coral Springs is a family-forward community. Many calls we get from Coral Springs are parents calling about college-age children facing a first arrest. We take extra time to explain the process to families who have never dealt with bail before — most have not.</p>
      </div>
      <div class="cs-cov-card">
        <div class="cs-cov-card-icon"><?php echo lucide_icon('gavel'); ?></div>
        <h4>Domestic Hold — 24 Hours</h4>
        <p>Florida law requires a mandatory 24-hour hold for domestic battery arrests before bond can be set. If your family member was arrested in Coral Springs on a domestic charge, we will advise you on this timeline and post bond the moment the hold expires — not a minute later.</p>
      </div>
    </div>

    <!-- Technique 7: gradient text stats -->
    <div class="cs-stat-row">
      <div class="cs-stat-item">
        <div class="cs-stat-num">~15 mi</div>
        <div class="cs-stat-label">Coral Springs to Broward Jail</div>
      </div>
      <div class="cs-stat-item">
        <div class="cs-stat-num">6–12 hrs</div>
        <div class="cs-stat-label">Typical misdemeanor release</div>
      </div>
      <div class="cs-stat-item">
        <div class="cs-stat-num">24/7</div>
        <div class="cs-stat-label">Always available</div>
      </div>
      <div class="cs-stat-item">
        <div class="cs-stat-num">11+ yrs</div>
        <div class="cs-stat-label">Serving Broward County</div>
      </div>
    </div>
  </div>
</section>

<!-- SVG DIVIDER: dark → white (smooth gentle arc) -->
<div class="cs-div-dark-white" aria-hidden="true">
  <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,0 C480,56 960,56 1440,0 L1440,56 L0,56 Z" fill="#ffffff"/>
  </svg>
</div>

<!-- ═══ SERVICES GRID ═══ -->
<section class="cs-services" aria-label="Bail bond services available in Coral Springs">
  <div class="container">
    <div class="cs-svc-header">
      <span class="cs-section-eyebrow">Services in Coral Springs</span>
      <h2>What bail bond services are available in <em>Coral Springs, FL</em>?</h2>
      <p class="cs-svc-lead">Every service we provide is available for Coral Springs arrests — any charge, 24 hours a day, any day of the year.</p>
    </div>
    <div class="cs-svc-grid">
      <?php
      $csSvcList = [
        ['slug' => 'bail-bonds',            'icon' => 'shield',         'name' => 'Bail Bond Services',        'desc' => 'General bail bond services for any criminal charge after a Coral Springs arrest — we post bond at Broward County Main Jail the same day you call.'],
        ['slug' => 'dui-bail-bonds',         'icon' => 'car',            'name' => 'DUI Bail Bonds',             'desc' => 'DUI stops on University Drive and Sample Road are among the most common Coral Springs arrests — we move urgently on DUI bonds at Broward Main.'],
        ['slug' => 'drug-charge-bail-bonds', 'icon' => 'alert-triangle', 'name' => 'Drug Charge Bail Bonds',    'desc' => 'Drug possession arrests in Coral Springs and throughout West Broward handled with speed and full discretion.'],
        ['slug' => 'felony-bail-bonds',      'icon' => 'gavel',          'name' => 'Felony Bail Bonds',          'desc' => 'Felony charges from Coral Springs carry higher bond amounts and Broward County bond hearings — we navigate the process with 11 years of experience.'],
        ['slug' => 'misdemeanor-bail-bonds', 'icon' => 'file-text',      'name' => 'Misdemeanor Bail Bonds',     'desc' => 'Most Coral Springs misdemeanor releases complete within hours of your call — we begin paperwork before booking is finished.'],
        ['slug' => 'warrant-bail-bonds',     'icon' => 'file-warning',   'name' => 'Warrant &amp; Traffic Bonds','desc' => 'Outstanding warrants surfaced by Coral Springs traffic stops — resolve them before a routine stop becomes a bigger situation.'],
      ];
      foreach ($csSvcList as $svc): ?>
      <div class="cs-svc-card">
        <div class="cs-svc-icon"><?php echo lucide_icon($svc['icon']); ?></div>
        <h3><?php echo $svc['name']; ?></h3>
        <p><?php echo $svc['desc']; ?></p>
        <a href="/services/<?php echo $svc['slug']; ?>/" class="cs-svc-link">
          Learn more <?php echo lucide_icon('arrow-right'); ?>
        </a>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- SVG DIVIDER: white → light (ripple / triple wave) -->
<div class="cs-div-white-light" aria-hidden="true">
  <svg viewBox="0 0 1440 48" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,24 Q180,48 360,24 Q540,0 720,24 Q900,48 1080,24 Q1260,0 1440,24 L1440,48 L0,48 Z" fill="#f4f6f9"/>
  </svg>
</div>

<!-- ═══ FAQ SECTION ═══ -->
<section class="cs-faq" aria-label="Coral Springs bail bond FAQ">
  <div class="container">
    <div class="cs-faq-inner">
      <span class="cs-section-eyebrow">Common Questions</span>
      <h2>Frequently asked questions about <em>bail bonds in Coral Springs, FL</em></h2>
      <p class="cs-faq-sub">Specific answers to what Coral Springs and West Broward families ask most when a loved one is arrested.</p>

      <div class="cs-faq-list" role="list">
        <?php foreach ($_faqs as $faq): ?>
        <div class="cs-faq-item" role="listitem">
          <button class="cs-faq-q" aria-expanded="false" onclick="toggleCsFaq(this)">
            <?php echo htmlspecialchars($faq['q']); ?>
            <span class="cs-faq-icon" aria-hidden="true">+</span>
          </button>
          <div class="cs-faq-a" role="region">
            <p><?php echo htmlspecialchars($faq['a']); ?></p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- ═══ RELATED AREAS — Broward cities (Technique 8: hover lift) ═══ -->
<section class="cs-related" aria-label="Other Broward cities we serve near Coral Springs">
  <div class="container">
    <div class="cs-related-header">
      <h3>Also Serving These Nearby Broward Cities</h3>
      <p class="cs-related-sub">Mad Extra Bail Bonds covers all of Broward County — same 24/7 licensed service wherever you need us.</p>
    </div>
    <div class="cs-related-grid">
      <a href="/areas/fort-lauderdale/" class="cs-area-card">
        <div class="cs-area-icon"><?php echo lucide_icon('landmark'); ?></div>
        <h4>Fort Lauderdale</h4>
        <p>Broward County Main Jail is in Fort Lauderdale — fastest possible processing for Fort Lauderdale arrests. 24/7 licensed bondsman available.</p>
        <span class="cs-area-link">View coverage <?php echo lucide_icon('arrow-right'); ?></span>
      </a>
      <a href="/areas/pompano-beach/" class="cs-area-card">
        <div class="cs-area-icon"><?php echo lucide_icon('map-pin'); ?></div>
        <h4>Pompano Beach</h4>
        <p>Bail bonds for Pompano Beach arrests — PBPD and BSO bookings transferred to Broward County Main Jail. Same 24/7 service.</p>
        <span class="cs-area-link">View coverage <?php echo lucide_icon('arrow-right'); ?></span>
      </a>
      <a href="/areas/margate/" class="cs-area-card">
        <div class="cs-area-icon"><?php echo lucide_icon('globe'); ?></div>
        <h4>Margate</h4>
        <p>Adjacent to Coral Springs — bail bonds for Margate arrests handled the same way. Licensed bondsman, 24/7, any charge in central Broward County.</p>
        <span class="cs-area-link">View coverage <?php echo lucide_icon('arrow-right'); ?></span>
      </a>
    </div>
  </div>
</section>

<!-- ═══ EMERGENCY CTA ═══ -->
<section class="cs-cta" aria-label="Emergency bail bond help in Coral Springs">
  <div class="cs-cta-inner">
    <h2>Need a bondsman in <em>Coral Springs right now</em>?</h2>
    <p>We serve Coral Springs and all of West Broward County — call now and we begin working before CSPD transport to Broward Main is even complete.</p>
    <div class="cs-cta-btns">
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>" class="btn-cs-primary">
        <?php echo lucide_icon('phone'); ?> Call Now — 24/7
      </a>
      <?php endif; ?>
      <a href="/contact/" class="btn-cs-secondary">Send a Message</a>
    </div>
  </div>
</section>

</main>

<script>
function toggleCsFaq(btn) {
  const item = btn.closest('.cs-faq-item');
  const isOpen = item.classList.contains('open');
  document.querySelectorAll('.cs-faq-item.open').forEach(el => el.classList.remove('open'));
  document.querySelectorAll('.cs-faq-q').forEach(el => el.setAttribute('aria-expanded', 'false'));
  if (!isOpen) {
    item.classList.add('open');
    btn.setAttribute('aria-expanded', 'true');
  }
}
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
