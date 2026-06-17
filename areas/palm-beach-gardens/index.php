<?php
/**
 * areas/palm-beach-gardens/index.php — Palm Beach Gardens Service Area Page
 * Mad Extra Bail Bonds | Delray Beach, FL
 * Phase 4: Area Pages
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Bail Bonds Near Me in Palm Beach Gardens FL | Mad Extra Bail Bonds | 24/7';
$pageDescription = 'Need bail bonds in Palm Beach Gardens, FL? Mad Extra Bail Bonds serves Palm Beach Gardens 24/7. Licensed FL bondsman — fast release from Palm Beach County Jail. Call now.';
$canonicalUrl    = $siteUrl . '/areas/palm-beach-gardens/';
$currentPage     = 'areas';

$_breadcrumb = generateBreadcrumbSchema([
    ['name' => 'Home',               'url' => $siteUrl . '/'],
    ['name' => 'Service Areas',      'url' => $siteUrl . '/areas/'],
    ['name' => 'Palm Beach Gardens', 'url' => $siteUrl . '/areas/palm-beach-gardens/'],
]);

$_serviceSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'Service',
    '@id'         => $siteUrl . '/areas/palm-beach-gardens/#service-palm-beach-gardens',
    'name'        => 'Bail Bonds in Palm Beach Gardens, FL',
    'description' => 'Mad Extra Bail Bonds provides 24/7 licensed bail bond services in Palm Beach Gardens, FL. Fast release from Palm Beach County Jail for all charge types including DUI on PGA Boulevard.',
    'url'         => $siteUrl . '/areas/palm-beach-gardens/',
    'provider'    => ['@id' => $siteUrl . '/#organization'],
    'areaServed'  => [
        ['@type' => 'City',   'name' => 'Palm Beach Gardens, FL'],
        ['@type' => 'County', 'name' => 'Palm Beach County, FL'],
    ],
    'serviceType' => 'Bail Bond Services',
];

$_faqs = [
    [
        'q' => 'How does the Palm Beach Gardens Police Department process arrests before transporting to jail?',
        'a' => 'PBGPD books at 10500 N Military Trail in Palm Beach Gardens. Arrestees typically transfer to Palm Beach County Jail in West Palm Beach within 2 to 5 hours. We advise calling us the moment you learn of the arrest so we can begin preparation and have paperwork ready before your loved one even arrives at PBCJ.',
    ],
    [
        'q' => 'Are bail amounts in Palm Beach Gardens different from other parts of Palm Beach County?',
        'a' => 'Bond amounts are set by the circuit court judge based on the charge, not the arresting city. A DUI in Palm Beach Gardens carries the same presumptive bond as one in Delray Beach or Boynton Beach — Palm Beach County uses a standard bond schedule. We can pull the exact figure within minutes once we have the booking information.',
    ],
    [
        'q' => 'Can Mad Extra Bail Bonds help with a DUI arrest on PGA Boulevard in Palm Beach Gardens?',
        'a' => 'PGA Boulevard is one of North Palm Beach County\'s busiest DUI corridors — restaurants, bars, and the resort traffic on PGA Blvd regularly produce DUI arrests. We handle Palm Beach Gardens DUI bail bonds regularly and know exactly how the process moves through PBGPD and Palm Beach County Jail.',
    ],
    [
        'q' => 'What happens if someone is arrested at PGA National Resort in Palm Beach Gardens?',
        'a' => 'Resort property arrests can involve PBGPD or private security with PBGPD response. Either way, the booking process is the same as any city arrest — PBGPD handles it and the defendant is transported to Palm Beach County Jail. We handle resort-area arrest bail regularly and can begin the process immediately after you call.',
    ],
    [
        'q' => 'How long does bail take for a misdemeanor arrest in Palm Beach Gardens?',
        'a' => 'From the moment PBGPD completes booking — which typically takes 1 to 3 hours — we can post bond and release processing typically completes within 2 to 4 additional hours at Palm Beach County Jail. Total time from arrest to release for a misdemeanor is often under 8 hours when you call us immediately after the arrest.',
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
   PALM BEACH GARDENS AREA PAGE — Mad Extra Bail Bonds
   Premium Tier | Dark/Neon Design System
   CSS Prefix: pbg-
   Techniques: layered radial gradients (gold top-center,
   magenta right, navy bottom-left), noise texture overlay,
   3 floating neon orbs, glassmorphism hero sidebar card,
   ticker strip marquee, SVG wave dividers (3 distinct shapes),
   FAQ accordion with magenta border + rotate icon,
   vertical timeline process steps with dashed connector,
   dark local coverage with 3-stat amber gradient grid
   ============================================================ */

/* ── 1. HERO ── */
.pbg-hero {
  position: relative;
  min-height: 58vh;
  display: flex;
  align-items: center;
  background: #09090f;
  overflow: hidden;
  padding-top: var(--nav-height, 72px);
  padding-bottom: var(--space-12);
}

/* Technique 1a: layered ::before radial gradients
   Gold glow top-center, magenta glow right-side,
   deep navy bottom-left — distinct from DUI page */
.pbg-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 60% 55% at 50% -5%, rgba(249,183,62,0.18) 0%, transparent 60%),
    radial-gradient(ellipse 50% 70% at 98% 45%, rgba(229,53,231,0.2) 0%, transparent 58%),
    radial-gradient(ellipse 55% 50% at 0% 95%, rgba(10,20,40,0.96) 0%, transparent 65%);
  pointer-events: none;
  z-index: 1;
}

/* Technique 1b: noise texture ::after */
.pbg-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='pbgn'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.88' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23pbgn)' opacity='0.038'/%3E%3C/svg%3E");
  opacity: 0.45;
  pointer-events: none;
  z-index: 1;
}

/* Technique 3: 3 floating neon orbs — positions differ from DUI page */
.pbg-orb {
  position: absolute;
  border-radius: 50%;
  pointer-events: none;
  will-change: transform;
}

/* Orb 1: left-center, magenta */
.pbg-orb-1 {
  width: 420px;
  height: 420px;
  top: 50%;
  left: -120px;
  transform: translateY(-50%);
  background: radial-gradient(circle, rgba(229,53,231,0.12) 0%, transparent 68%);
  animation: pbg-orb-drift 14s ease-in-out infinite;
  z-index: 0;
}

/* Orb 2: top-right, large, gold */
.pbg-orb-2 {
  width: 500px;
  height: 500px;
  top: -120px;
  right: -60px;
  background: radial-gradient(circle, rgba(249,183,62,0.1) 0%, transparent 65%);
  animation: pbg-orb-drift 18s ease-in-out infinite reverse;
  animation-delay: -7s;
  z-index: 0;
}

/* Orb 3: bottom-right, small, magenta */
.pbg-orb-3 {
  width: 240px;
  height: 240px;
  bottom: -40px;
  right: 22%;
  background: radial-gradient(circle, rgba(229,53,231,0.09) 0%, transparent 70%);
  animation: pbg-orb-drift 11s ease-in-out infinite;
  animation-delay: -3s;
  z-index: 0;
}

@keyframes pbg-orb-drift {
  0%, 100% { transform: translate(0, 0) scale(1); }
  35%       { transform: translate(14px, -18px) scale(1.05); }
  68%       { transform: translate(-10px, 12px) scale(0.96); }
}

.pbg-hero-inner {
  position: relative;
  z-index: 2;
  display: grid;
  grid-template-columns: 55fr 45fr;
  gap: var(--space-12);
  align-items: center;
  padding: var(--space-12) 0;
  width: 100%;
}

.pbg-hero-left { max-width: 640px; }

/* Amber eyebrow pill — visual variation from DUI page magenta eyebrow */
.pbg-eyebrow {
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
  border: 1px solid rgba(249,183,62,0.4);
  border-radius: var(--radius-full);
  background: rgba(249,183,62,0.08);
  margin-bottom: var(--space-5);
}

.pbg-eyebrow .pbg-pulse-dot {
  width: 7px;
  height: 7px;
  border-radius: 50%;
  background: var(--color-accent);
  box-shadow: 0 0 8px rgba(249,183,62,0.8);
  animation: pbg-pulse 2s ease-in-out infinite;
  flex-shrink: 0;
}

@keyframes pbg-pulse {
  0%, 100% { opacity: 1; transform: scale(1); }
  50%       { opacity: 0.55; transform: scale(0.72); }
}

.pbg-hero h1 {
  font-size: clamp(1.85rem, 3.8vw, 3.1rem);
  font-weight: 900;
  color: var(--color-white);
  line-height: 1.1;
  margin-bottom: var(--space-5);
  letter-spacing: -0.025em;
  text-wrap: balance;
}

.pbg-hero h1 .pbg-hl-gold {
  color: var(--color-accent);
  text-shadow: 0 0 30px rgba(249,183,62,0.55);
}

.pbg-hero h1 .pbg-hl-mag {
  color: var(--color-secondary);
  text-shadow: 0 0 30px rgba(229,53,231,0.55);
}

.pbg-hero-answer {
  font-size: 1rem;
  color: rgba(255,255,255,0.68);
  line-height: 1.8;
  margin-bottom: var(--space-7);
  max-width: 580px;
}

.pbg-hero-btns {
  display: flex;
  gap: var(--space-3);
  flex-wrap: wrap;
  margin-bottom: var(--space-7);
}

.pbg-btn-primary {
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
  box-shadow: 0 0 22px rgba(229,53,231,0.42), 0 4px 14px rgba(0,0,0,0.3);
  transition: all var(--transition-base);
}

.pbg-btn-primary:hover {
  background: #f043f2;
  box-shadow: 0 0 44px rgba(229,53,231,0.7), 0 8px 22px rgba(0,0,0,0.35);
  transform: translateY(-2px);
  color: var(--color-white);
}

.pbg-btn-primary svg { width: 15px; height: 15px; }

.pbg-btn-secondary {
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

.pbg-btn-secondary:hover {
  background: var(--color-accent);
  color: #0a0d1a;
  border-color: var(--color-accent);
  box-shadow: 0 0 28px rgba(249,183,62,0.42);
  transform: translateY(-2px);
}

.pbg-trust-row {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-2);
}

.pbg-htb {
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

.pbg-htb svg { width: 11px; height: 11px; color: var(--color-accent); flex-shrink: 0; }

/* Technique 4: glassmorphism hero sidebar card */
.pbg-hero-card {
  position: relative;
  background: rgba(255,255,255,0.04);
  border: 1px solid rgba(255,255,255,0.11);
  border-radius: 18px;
  padding: var(--space-7) var(--space-6);
  backdrop-filter: blur(14px);
  -webkit-backdrop-filter: blur(14px);
}

.pbg-hero-card::before {
  content: '';
  position: absolute;
  inset: -1px;
  border-radius: 19px;
  background: linear-gradient(135deg, rgba(249,183,62,0.35) 0%, rgba(229,53,231,0.2) 50%, transparent 100%);
  z-index: -1;
  opacity: 0.5;
}

.pbg-hsc-title {
  font-family: var(--font-heading);
  font-size: 1.05rem;
  font-weight: 800;
  color: var(--color-white);
  margin-bottom: var(--space-2);
}

.pbg-hsc-note {
  font-size: 0.68rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  color: var(--color-accent);
  margin-bottom: var(--space-5);
}

.pbg-hsc-list {
  list-style: none;
  padding: 0;
  margin: 0 0 var(--space-6);
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
}

.pbg-hsc-list li {
  display: flex;
  align-items: flex-start;
  gap: var(--space-2);
  font-size: 0.85rem;
  color: rgba(255,255,255,0.8);
  line-height: 1.5;
}

.pbg-hsc-check {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  width: 18px;
  height: 18px;
  border-radius: 50%;
  background: linear-gradient(135deg, var(--color-accent), var(--color-secondary));
  margin-top: 2px;
  font-size: 0.6rem;
  color: #0a0d1a;
  font-weight: 900;
}

.pbg-hsc-cta {
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
}

.pbg-hsc-cta:hover {
  box-shadow: 0 8px 34px rgba(229,53,231,0.65);
  transform: translateY(-1px);
  color: var(--color-white);
}

.pbg-hsc-disclaimer {
  text-align: center;
  font-size: 0.6rem;
  color: rgba(255,255,255,0.3);
  margin-top: var(--space-3);
  line-height: 1.5;
}

/* ── 5. TICKER STRIP — Technique 5 ── */
.pbg-ticker-wrap {
  background: #09090f;
  border-top: 1px solid rgba(249,183,62,0.12);
  border-bottom: 1px solid rgba(249,183,62,0.12);
  padding: var(--space-3) 0;
  overflow: hidden;
  position: relative;
  z-index: 2;
}

.pbg-ticker-track {
  display: flex;
  width: max-content;
  animation: pbg-ticker 28s linear infinite;
}

.pbg-ticker-track:hover { animation-play-state: paused; }

@keyframes pbg-ticker {
  from { transform: translateX(0); }
  to   { transform: translateX(-50%); }
}

.pbg-ticker-inner {
  display: flex;
  align-items: center;
  gap: var(--space-3);
  padding-right: var(--space-3);
}

.pbg-badge {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  padding: 5px 14px;
  background: rgba(249,183,62,0.08);
  border: 1px solid rgba(249,183,62,0.22);
  border-radius: var(--radius-full);
  font-family: var(--font-heading);
  font-size: 0.65rem;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 1.8px;
  color: var(--color-accent);
  white-space: nowrap;
}

.pbg-badge-sep {
  color: rgba(229,53,231,0.4);
  font-size: 0.9rem;
  flex-shrink: 0;
}

/* ── 6. SVG DIVIDERS ── */

/* Divider 1: dark → light | torn/jagged edge */
.pbg-divider-torn {
  line-height: 0;
  background: #09090f;
}
.pbg-divider-torn svg { display: block; width: 100%; }

/* Divider 2: light → dark | smooth curved */
.pbg-divider-curve {
  line-height: 0;
  background: #f4f6f9;
}
.pbg-divider-curve svg { display: block; width: 100%; }

/* Divider 3: dark → white | angled cut */
.pbg-divider-angle {
  line-height: 0;
  background: #09090f;
}
.pbg-divider-angle svg { display: block; width: 100%; }

/* Divider 4: white → light */
.pbg-divider-wave {
  line-height: 0;
  background: #ffffff;
}
.pbg-divider-wave svg { display: block; width: 100%; }

/* ── 7. INTRO / ANSWER SECTION (light) ── */
.pbg-intro {
  padding: var(--space-16) 0;
  background: #f4f6f9;
}

.pbg-intro-inner {
  max-width: 880px;
  margin: 0 auto;
}

.pbg-section-eyebrow {
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

.pbg-intro-h2 {
  font-size: clamp(1.7rem, 3vw, 2.4rem);
  font-weight: 900;
  color: var(--color-dark);
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.02em;
  margin-bottom: var(--space-4);
}

.pbg-intro-h2 em {
  color: var(--color-secondary);
  font-style: normal;
}

/* AEO answer block with magenta left border */
.pbg-answer-block {
  background: linear-gradient(135deg, rgba(229,53,231,0.07), rgba(249,183,62,0.04));
  border-left: 3px solid var(--color-secondary);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  padding: var(--space-5) var(--space-6);
  margin-bottom: var(--space-6);
}

.pbg-answer-block p {
  font-size: 0.95rem;
  color: var(--color-dark);
  line-height: 1.8;
  margin: 0;
  font-style: italic;
}

.pbg-intro p {
  font-size: 0.95rem;
  color: var(--color-gray);
  line-height: 1.82;
  margin-bottom: var(--space-4);
}

/* ── 8. COVERAGE / TIMELINE SECTION (dark) ── */
.pbg-coverage {
  padding: var(--space-16) 0;
  background: linear-gradient(135deg, #09090f 0%, #0e0a1e 50%, #091420 100%);
  position: relative;
  overflow: hidden;
}

.pbg-coverage::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 40% 65% at 2% 45%, rgba(229,53,231,0.1) 0%, transparent 60%),
    radial-gradient(ellipse 45% 55% at 98% 30%, rgba(249,183,62,0.08) 0%, transparent 55%);
  pointer-events: none;
}

/* Decorative orb: right side, large, very low opacity */
.pbg-coverage-orb {
  position: absolute;
  right: -80px;
  top: 50%;
  transform: translateY(-50%);
  width: 500px;
  height: 500px;
  border-radius: 50%;
  background: radial-gradient(circle, rgba(249,183,62,0.05) 0%, transparent 70%);
  pointer-events: none;
}

.pbg-coverage-inner {
  position: relative;
  z-index: 1;
}

.pbg-coverage-header {
  margin-bottom: var(--space-12);
}

.pbg-cov-eyebrow {
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

.pbg-coverage-h2 {
  font-size: clamp(1.6rem, 2.8vw, 2.3rem);
  font-weight: 900;
  color: var(--color-white);
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.02em;
  margin-bottom: var(--space-3);
  max-width: 700px;
}

.pbg-coverage-h2 em { color: var(--color-secondary); font-style: normal; }

.pbg-cov-lead {
  font-size: 0.92rem;
  color: rgba(255,255,255,0.52);
  line-height: 1.75;
  max-width: 580px;
  margin-bottom: var(--space-4);
}

/* AEO answer block dark variant */
.pbg-answer-block-dark {
  background: rgba(255,255,255,0.04);
  border-left: 3px solid var(--color-accent);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  padding: var(--space-4) var(--space-5);
  margin-bottom: var(--space-10);
  max-width: 680px;
}

.pbg-answer-block-dark p {
  font-size: 0.88rem;
  color: rgba(255,255,255,0.72);
  line-height: 1.8;
  margin: 0;
  font-style: italic;
}

/* Coverage main grid: timeline left, stats right */
.pbg-cov-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-16);
  align-items: start;
}

/* Technique 8: Vertical timeline with dashed connector */
.pbg-timeline {
  position: relative;
}

.pbg-timeline::before {
  content: '';
  position: absolute;
  left: 19px;
  top: 20px;
  bottom: 20px;
  width: 2px;
  background: repeating-linear-gradient(
    to bottom,
    rgba(229,53,231,0.35) 0px,
    rgba(229,53,231,0.35) 6px,
    transparent 6px,
    transparent 12px
  );
}

.pbg-timeline-step {
  display: flex;
  gap: var(--space-5);
  align-items: flex-start;
  position: relative;
  margin-bottom: var(--space-8);
}

.pbg-timeline-step:last-child { margin-bottom: 0; }

.pbg-step-circle {
  flex-shrink: 0;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background: linear-gradient(135deg, var(--color-secondary) 0%, #8f08a0 100%);
  display: flex;
  align-items: center;
  justify-content: center;
  font-family: var(--font-heading);
  font-size: 0.85rem;
  font-weight: 900;
  color: var(--color-white);
  box-shadow: 0 0 18px rgba(229,53,231,0.35), 0 0 0 4px rgba(229,53,231,0.08);
  position: relative;
  z-index: 1;
}

.pbg-step-body { padding-top: 8px; }

.pbg-step-body h4 {
  font-size: 0.92rem;
  font-weight: 800;
  color: var(--color-white);
  margin-bottom: var(--space-1);
  text-wrap: balance;
}

.pbg-step-body p {
  font-size: 0.82rem;
  color: rgba(255,255,255,0.54);
  line-height: 1.7;
  margin: 0;
}

/* Technique 9: Dark stat grid with large amber gradient numbers */
.pbg-stat-grid {
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
}

.pbg-stat-card {
  background: rgba(255,255,255,0.04);
  border: 1px solid rgba(255,255,255,0.08);
  border-radius: var(--radius-lg);
  padding: var(--space-6) var(--space-7);
  text-align: center;
  position: relative;
  overflow: hidden;
  transition: border-color var(--transition-base);
}

.pbg-stat-card::before {
  content: '';
  position: absolute;
  bottom: 0; left: 0; right: 0;
  height: 2px;
  background: linear-gradient(90deg, var(--color-secondary), var(--color-accent));
  opacity: 0.5;
}

.pbg-stat-card:hover {
  border-color: rgba(249,183,62,0.2);
}

.pbg-stat-number {
  font-family: var(--font-heading);
  font-size: 2.6rem;
  font-weight: 900;
  background: linear-gradient(135deg, var(--color-accent) 0%, #ffd96b 60%, var(--color-secondary) 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  line-height: 1;
  margin-bottom: var(--space-1);
  letter-spacing: -0.03em;
}

.pbg-stat-label {
  font-family: var(--font-heading);
  font-size: 0.75rem;
  font-weight: 700;
  color: rgba(255,255,255,0.55);
  text-transform: uppercase;
  letter-spacing: 1.5px;
}

.pbg-stat-sub {
  font-size: 0.72rem;
  color: rgba(255,255,255,0.35);
  margin-top: var(--space-1);
  line-height: 1.4;
}

/* ── 9. SERVICES GRID (white) ── */
.pbg-services {
  padding: var(--space-16) 0;
  background: var(--color-white);
}

.pbg-services-header {
  text-align: center;
  margin-bottom: var(--space-12);
}

.pbg-services-h2 {
  font-size: clamp(1.7rem, 3vw, 2.4rem);
  font-weight: 900;
  color: var(--color-dark);
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.02em;
  margin-bottom: var(--space-3);
}

.pbg-services-h2 em { color: var(--color-secondary); font-style: normal; }

.pbg-services-lead {
  font-size: 0.95rem;
  color: var(--color-gray);
  max-width: 520px;
  margin: 0 auto;
  line-height: 1.75;
}

.pbg-svc-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
}

/* Service card with neon sweep hover — dark gradient banners */
.pbg-svc-card {
  border-radius: var(--radius-lg);
  overflow: hidden;
  display: flex;
  flex-direction: column;
  border: 1px solid rgba(229,53,231,0.1);
  background: var(--color-white);
  transition: transform var(--transition-base), box-shadow var(--transition-base), border-color var(--transition-base);
  position: relative;
}

.pbg-svc-card::after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  height: 2px;
  background: linear-gradient(90deg, var(--color-secondary), var(--color-accent));
  transform: scaleX(0);
  transform-origin: left;
  transition: transform var(--transition-base);
}

.pbg-svc-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 14px 36px rgba(229,53,231,0.14), 0 4px 10px rgba(0,0,0,0.07);
  border-color: rgba(229,53,231,0.25);
}

.pbg-svc-card:hover::after { transform: scaleX(1); }

/* Cycling gradient banner tints: t1 navy, t2 dark purple, t3 very dark teal */
.pbg-svc-banner {
  height: 72px;
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
}

.pbg-svc-card.t1 .pbg-svc-banner { background: linear-gradient(145deg, #09090f, #1e0a2e); }
.pbg-svc-card.t2 .pbg-svc-banner { background: linear-gradient(145deg, #0d0620, #220d3a); }
.pbg-svc-card.t3 .pbg-svc-banner { background: linear-gradient(145deg, #04141a, #0a2832); }

.pbg-svc-icon-ring {
  width: 44px;
  height: 44px;
  border-radius: 50%;
  border: 1px solid rgba(255,255,255,0.14);
  background: rgba(255,255,255,0.07);
  display: flex;
  align-items: center;
  justify-content: center;
}

.pbg-svc-icon-ring svg { width: 20px; height: 20px; color: var(--color-accent); }

.pbg-svc-body {
  padding: var(--space-5);
  flex: 1;
  display: flex;
  flex-direction: column;
}

.pbg-svc-body h3 {
  font-size: 0.88rem;
  font-weight: 800;
  color: var(--color-dark);
  margin-bottom: var(--space-2);
}

.pbg-svc-body p {
  font-size: 0.8rem;
  color: var(--color-gray);
  line-height: 1.65;
  flex: 1;
  margin-bottom: var(--space-4);
}

.pbg-svc-link {
  display: inline-flex;
  align-items: center;
  gap: 4px;
  font-size: 0.78rem;
  font-weight: 800;
  color: var(--color-secondary);
  text-decoration: none;
  transition: gap var(--transition-fast);
}

.pbg-svc-link:hover { gap: 8px; }
.pbg-svc-link svg { width: 14px; height: 14px; }

/* ── 10. FAQ SECTION (light) ── */
.pbg-faq {
  padding: var(--space-16) 0;
  background: #f4f6f9;
}

.pbg-faq-inner {
  max-width: 840px;
  margin: 0 auto;
}

.pbg-faq-h2 {
  font-size: clamp(1.6rem, 2.8vw, 2.2rem);
  font-weight: 900;
  color: var(--color-dark);
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.02em;
  margin-bottom: var(--space-3);
}

.pbg-faq-h2 em { color: var(--color-secondary); font-style: normal; }

.pbg-faq-sub {
  font-size: 0.92rem;
  color: var(--color-gray);
  margin-bottom: var(--space-10);
  line-height: 1.75;
}

.pbg-faq-list {
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
}

/* Technique 7: FAQ accordion — magenta border + rotate icon */
.faq-item-sp {
  background: var(--color-white);
  border: 1px solid rgba(229,53,231,0.11);
  border-radius: var(--radius-lg);
  overflow: hidden;
  transition: border-color var(--transition-base), box-shadow var(--transition-base);
}

.faq-item-sp.open {
  border-color: rgba(229,53,231,0.32);
  box-shadow: 0 4px 18px rgba(229,53,231,0.08);
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
  line-height: 1.8;
  border-top: 1px solid rgba(229,53,231,0.07);
  padding-top: var(--space-4);
}

.faq-item-sp.open .faq-a-sp { display: block; }

/* ── 11. RELATED AREAS (white) ── */
.pbg-related-areas {
  padding: var(--space-14) 0;
  background: var(--color-white);
}

.pbg-ra-header {
  text-align: center;
  margin-bottom: var(--space-10);
}

.pbg-ra-h2 {
  font-size: clamp(1.5rem, 2.5vw, 2rem);
  font-weight: 900;
  color: var(--color-dark);
  text-wrap: balance;
  margin-bottom: var(--space-2);
}

.pbg-ra-sub {
  font-size: 0.9rem;
  color: var(--color-gray);
}

.pbg-ra-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
}

.pbg-ra-card {
  border-radius: var(--radius-lg);
  overflow: hidden;
  display: flex;
  flex-direction: column;
  border: 1px solid rgba(229,53,231,0.1);
  background: var(--color-white);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}

.pbg-ra-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 14px 36px rgba(229,53,231,0.13), 0 4px 10px rgba(0,0,0,0.06);
}

.pbg-ra-banner {
  height: 80px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.pbg-ra-card.t1 .pbg-ra-banner { background: linear-gradient(145deg, #09090f, #1e0a2e); }
.pbg-ra-card.t2 .pbg-ra-banner { background: linear-gradient(145deg, #0d1520, #1a2b3c); }
.pbg-ra-card.t3 .pbg-ra-banner { background: linear-gradient(145deg, #130610, #2a0a2a); }

.pbg-ra-icon-ring {
  width: 46px;
  height: 46px;
  border-radius: 50%;
  border: 1px solid rgba(255,255,255,0.15);
  background: rgba(255,255,255,0.07);
  display: flex;
  align-items: center;
  justify-content: center;
}

.pbg-ra-icon-ring svg { width: 22px; height: 22px; color: var(--color-accent); }

.pbg-ra-body {
  padding: var(--space-5);
  flex: 1;
  display: flex;
  flex-direction: column;
}

.pbg-ra-body h3 {
  font-size: 0.9rem;
  font-weight: 800;
  color: var(--color-dark);
  margin-bottom: 2px;
}

.pbg-ra-county {
  font-size: 0.72rem;
  color: var(--color-secondary);
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 0.8px;
  margin-bottom: var(--space-3);
}

.pbg-ra-link {
  display: inline-flex;
  align-items: center;
  gap: 4px;
  font-size: 0.78rem;
  font-weight: 800;
  color: var(--color-secondary);
  text-decoration: none;
  transition: gap var(--transition-fast);
  margin-top: auto;
}

.pbg-ra-link:hover { gap: 8px; }
.pbg-ra-link svg { width: 14px; height: 14px; }

/* ── 12. EMERGENCY CTA (dark gradient) ── */
.pbg-cta {
  padding: var(--space-16) 0;
  background: linear-gradient(135deg, #09090f 0%, #1a082e 55%, #0a1625 100%);
  position: relative;
  overflow: hidden;
  text-align: center;
}

.pbg-cta::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 55% 80% at 20% 50%, rgba(229,53,231,0.12) 0%, transparent 60%),
    radial-gradient(ellipse 45% 70% at 80% 50%, rgba(249,183,62,0.09) 0%, transparent 60%);
  pointer-events: none;
}

.pbg-cta-inner {
  position: relative;
  z-index: 1;
  max-width: 580px;
  margin: 0 auto;
}

.pbg-cta h2 {
  font-size: clamp(1.5rem, 2.8vw, 2.2rem);
  font-weight: 900;
  color: var(--color-white);
  text-wrap: balance;
  margin-bottom: var(--space-4);
  line-height: 1.2;
}

.pbg-cta h2 em { color: var(--color-accent); font-style: normal; }

.pbg-cta p {
  font-size: 0.95rem;
  color: rgba(255,255,255,0.58);
  max-width: 460px;
  margin: 0 auto var(--space-8);
  line-height: 1.75;
}

.pbg-cta-btns {
  display: flex;
  gap: var(--space-3);
  justify-content: center;
  flex-wrap: wrap;
}

/* ── RESPONSIVE ── */
@media (max-width: 1024px) {
  .pbg-hero-inner {
    grid-template-columns: 1fr;
  }
  .pbg-hero-card {
    display: none;
  }
  .pbg-cov-grid {
    grid-template-columns: 1fr;
    gap: var(--space-10);
  }
  .pbg-stat-grid {
    flex-direction: row;
    flex-wrap: wrap;
  }
  .pbg-stat-card {
    flex: 1 1 180px;
  }
}

@media (max-width: 768px) {
  .pbg-svc-grid {
    grid-template-columns: repeat(2, 1fr);
  }
  .pbg-ra-grid {
    grid-template-columns: 1fr;
  }
}

@media (max-width: 480px) {
  .pbg-svc-grid {
    grid-template-columns: 1fr;
  }
  .pbg-stat-grid {
    flex-direction: column;
  }
}
</style>

<!-- ═══ HERO ═══ -->
<section class="pbg-hero" aria-label="Bail bonds in Palm Beach Gardens, FL">
  <div class="pbg-orb pbg-orb-1"></div>
  <div class="pbg-orb pbg-orb-2"></div>
  <div class="pbg-orb pbg-orb-3"></div>

  <div class="container">
    <div class="pbg-hero-inner">

      <!-- Left column — 55% -->
      <div class="pbg-hero-left">
        <span class="pbg-eyebrow">
          <span class="pbg-pulse-dot"></span>
          Serving Palm Beach Gardens 24/7
        </span>

        <h1>Bail Bonds Near Me in <span class="pbg-hl-gold">Palm Beach Gardens</span>, FL — <span class="pbg-hl-mag">Licensed Bondsman</span> Available 24/7</h1>

        <p class="pbg-hero-answer">Need fast bail bonds in Palm Beach Gardens? Mad Extra Bail Bonds posts bond at Palm Beach County Jail for all charges — DUI, felony, misdemeanor, drug — 24 hours a day. Licensed Florida bondsman, immediate response, same-day release possible.</p>

        <div class="pbg-hero-btns">
          <?php if (!empty($phone)): ?>
          <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>" class="pbg-btn-primary">
            <?php echo lucide_icon('phone'); ?> Call Now — 24/7
          </a>
          <?php else: ?>
          <a href="/contact/" class="pbg-btn-primary">
            <?php echo lucide_icon('zap'); ?> Get Help Now
          </a>
          <?php endif; ?>
          <a href="/contact/" class="pbg-btn-secondary">Free Consultation</a>
        </div>

        <div class="pbg-trust-row">
          <span class="pbg-htb"><?php echo lucide_icon('shield-check'); ?> Licensed FL Bondsman</span>
          <span class="pbg-htb"><?php echo lucide_icon('clock'); ?> 24/7 Available</span>
          <span class="pbg-htb"><?php echo lucide_icon('zap'); ?> Fast Release</span>
          <span class="pbg-htb"><?php echo lucide_icon('landmark'); ?> Palm Beach County Jail</span>
        </div>
      </div>

      <!-- Right column — glassmorphism sidebar card -->
      <div class="pbg-hero-card">
        <p class="pbg-hsc-title">Palm Beach Gardens Arrest? Call Now.</p>
        <p class="pbg-hsc-note">Immediate 24/7 response</p>
        <ul class="pbg-hsc-list">
          <li><span class="pbg-hsc-check">✓</span> Licensed Florida bail bondsman</li>
          <li><span class="pbg-hsc-check">✓</span> PBCJ at Gun Club Road — we know it</li>
          <li><span class="pbg-hsc-check">✓</span> 10% FL flat premium rate</li>
          <li><span class="pbg-hsc-check">✓</span> All charge types: DUI, felony, drug</li>
          <li><span class="pbg-hsc-check">✓</span> Same-day release possible</li>
          <li><span class="pbg-hsc-check">✓</span> Available 365 days a year</li>
        </ul>
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>" class="pbg-hsc-cta">
          <?php echo lucide_icon('phone'); ?> Call Now
        </a>
        <?php else: ?>
        <a href="/contact/" class="pbg-hsc-cta">Get Emergency Help</a>
        <?php endif; ?>
        <p class="pbg-hsc-disclaimer">Available 24 hours a day, 7 days a week</p>
      </div>

    </div>
  </div>
</section>

<!-- ═══ TICKER STRIP ═══ -->
<div class="pbg-ticker-wrap" aria-hidden="true">
  <div class="pbg-ticker-track">
    <!-- Original 8 badges -->
    <div class="pbg-ticker-inner">
      <span class="pbg-badge"><?php echo lucide_icon('shield'); ?> Bail Bond Services</span>
      <span class="pbg-badge-sep">◆</span>
      <span class="pbg-badge"><?php echo lucide_icon('car'); ?> DUI Bonds</span>
      <span class="pbg-badge-sep">◆</span>
      <span class="pbg-badge"><?php echo lucide_icon('gavel'); ?> Felony Bonds</span>
      <span class="pbg-badge-sep">◆</span>
      <span class="pbg-badge"><?php echo lucide_icon('alert-triangle'); ?> Drug Charges</span>
      <span class="pbg-badge-sep">◆</span>
      <span class="pbg-badge"><?php echo lucide_icon('file-text'); ?> Misdemeanor</span>
      <span class="pbg-badge-sep">◆</span>
      <span class="pbg-badge"><?php echo lucide_icon('landmark'); ?> Federal Bonds</span>
      <span class="pbg-badge-sep">◆</span>
      <span class="pbg-badge"><?php echo lucide_icon('globe'); ?> Immigration Bonds</span>
      <span class="pbg-badge-sep">◆</span>
      <span class="pbg-badge"><?php echo lucide_icon('file-warning'); ?> Warrant Bonds</span>
      <span class="pbg-badge-sep">◆</span>
    </div>
    <!-- Duplicate 8 badges for seamless loop -->
    <div class="pbg-ticker-inner" aria-hidden="true">
      <span class="pbg-badge"><?php echo lucide_icon('shield'); ?> Bail Bond Services</span>
      <span class="pbg-badge-sep">◆</span>
      <span class="pbg-badge"><?php echo lucide_icon('car'); ?> DUI Bonds</span>
      <span class="pbg-badge-sep">◆</span>
      <span class="pbg-badge"><?php echo lucide_icon('gavel'); ?> Felony Bonds</span>
      <span class="pbg-badge-sep">◆</span>
      <span class="pbg-badge"><?php echo lucide_icon('alert-triangle'); ?> Drug Charges</span>
      <span class="pbg-badge-sep">◆</span>
      <span class="pbg-badge"><?php echo lucide_icon('file-text'); ?> Misdemeanor</span>
      <span class="pbg-badge-sep">◆</span>
      <span class="pbg-badge"><?php echo lucide_icon('landmark'); ?> Federal Bonds</span>
      <span class="pbg-badge-sep">◆</span>
      <span class="pbg-badge"><?php echo lucide_icon('globe'); ?> Immigration Bonds</span>
      <span class="pbg-badge-sep">◆</span>
      <span class="pbg-badge"><?php echo lucide_icon('file-warning'); ?> Warrant Bonds</span>
      <span class="pbg-badge-sep">◆</span>
    </div>
  </div>
</div>

<!-- ═══ SVG DIVIDER 1: dark → light | torn/jagged edge ═══ -->
<div class="pbg-divider-torn" aria-hidden="true">
  <svg viewBox="0 0 1440 70" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,70 L0,28 L60,42 L130,18 L210,38 L290,12 L380,35 L460,8 L540,30 L620,15 L700,40 L780,20 L860,44 L940,16 L1020,38 L1100,22 L1180,45 L1260,18 L1350,36 L1440,22 L1440,70 Z" fill="#f4f6f9"/>
  </svg>
</div>

<!-- ═══ INTRO / ANSWER SECTION ═══ -->
<section class="pbg-intro" aria-label="How bail bonds work in Palm Beach Gardens">
  <div class="container">
    <div class="pbg-intro-inner">
      <span class="pbg-section-eyebrow">Palm Beach Gardens Bail Process</span>

      <h2 class="pbg-intro-h2">How does bail bonds work after a <em>Palm Beach Gardens</em> arrest?</h2>

      <div class="pbg-answer-block">
        <p>When someone is arrested in Palm Beach Gardens, PBGPD books at 10500 N Military Trail before transferring the defendant to Palm Beach County Jail in West Palm Beach. Call Mad Extra Bail Bonds immediately — we begin pulling arrest details and have paperwork staged so we can post bond the moment bail is set. Fast, licensed, available around the clock.</p>
      </div>

      <p>Mad Extra Bail Bonds is a licensed Florida bail bondsman based in Delray Beach, serving Palm Beach Gardens and all of Palm Beach County. When someone is arrested in Palm Beach Gardens, the Palm Beach Gardens Police Department — headquartered at 10500 N Military Trail — processes the arrest, holds the defendant, and then transports them approximately 15 miles south to Palm Beach County Jail at 3228 Gun Club Road in West Palm Beach. That transfer window — typically 2 to 5 hours — is when you should be calling us so we can prepare.</p>

      <p>PGA Boulevard is one of the busiest arrest corridors in northern Palm Beach County. The concentration of restaurants, bars, entertainment venues, and heavy resort traffic near PGA National Resort &amp; Spa regularly produces DUI arrests along PGA Blvd and surrounding roads. Arrests also occur near Legacy Place shopping center, along Donald Ross Road, and in the Alton development near Interstate 95. We handle Palm Beach Gardens DUI bail bonds regularly and know the exact processing timeline through PBGPD.</p>

      <p>Palm Beach Gardens is an affluent suburban community with distinct neighborhoods — Mirasol, BallenIsles Country Club, and Steeplechase among the gated communities in its northern sections. Gardens Mall draws steady retail traffic. Palm Beach Gardens Medical Center on Burns Road serves northern Palm Beach County residents. William T. Dwyer High School and Palm Beach Gardens High School anchor the local school district. The city sits close to Jupiter and Tequesta to the north, putting it at the edge of Palm Beach County's reach toward the Treasure Coast — and all of it falls within Palm Beach County Jail's jurisdiction, which is exactly where we operate.</p>
    </div>
  </div>
</section>

<!-- ═══ SVG DIVIDER 2: light → dark | smooth curved ═══ -->
<div class="pbg-divider-curve" aria-hidden="true">
  <svg viewBox="0 0 1440 65" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,0 C240,65 480,65 720,32 C960,0 1200,0 1440,52 L1440,65 L0,65 Z" fill="#09090f"/>
  </svg>
</div>

<!-- ═══ COVERAGE / TIMELINE SECTION ═══ -->
<section class="pbg-coverage" aria-label="Palm Beach Gardens jail and release timeline">
  <div class="pbg-coverage-orb"></div>
  <div class="container pbg-coverage-inner">

    <div class="pbg-coverage-header">
      <span class="pbg-cov-eyebrow"><?php echo lucide_icon('map-pin'); ?> Local Coverage</span>
      <h2 class="pbg-coverage-h2">Which jail holds <em>Palm Beach Gardens</em> arrestees and what's the release timeline?</h2>
      <div class="pbg-answer-block-dark">
        <p>Palm Beach Gardens arrests land at Palm Beach County Jail — 3228 Gun Club Road, West Palm Beach, FL 33406 — approximately 15 miles south of Palm Beach Gardens. PBGPD processes at the N Military Trail station first. Call us the moment you learn of the arrest. We pull the booking information, stage paperwork, and post bond immediately once bail is set — day or night, including holidays.</p>
      </div>
    </div>

    <div class="pbg-cov-grid">

      <!-- Left: Vertical Timeline -->
      <div>
        <div class="pbg-timeline">

          <div class="pbg-timeline-step">
            <div class="pbg-step-circle">1</div>
            <div class="pbg-step-body">
              <h4>Call Us Immediately After the Arrest</h4>
              <p>Don't wait. Call as soon as you learn of the arrest — from Harbour Square, Legacy Place, PGA Blvd, or anywhere in Palm Beach Gardens. We begin pulling booking details right away.</p>
            </div>
          </div>

          <div class="pbg-timeline-step">
            <div class="pbg-step-circle">2</div>
            <div class="pbg-step-body">
              <h4>We Verify the Arrest &amp; Pull the Bail Amount</h4>
              <p>We contact PBGPD and Palm Beach County Jail to confirm booking status, charges, and bail amount. Palm Beach County uses a standard bond schedule — we can pull the figure within minutes once booking is confirmed.</p>
            </div>
          </div>

          <div class="pbg-timeline-step">
            <div class="pbg-step-circle">3</div>
            <div class="pbg-step-body">
              <h4>Bond Posted at Palm Beach County Jail</h4>
              <p>Once bail is set — either by a judge or from the bond schedule — we present the 10% Florida premium, collect co-signer signatures, and post the bond directly at PBCJ on Gun Club Road.</p>
            </div>
          </div>

          <div class="pbg-timeline-step">
            <div class="pbg-step-circle">4</div>
            <div class="pbg-step-body">
              <h4>Release Processing Begins</h4>
              <p>After the bond is posted, PBCJ processes release — typically 2 to 4 hours. We stay on it and notify you when your loved one is ready to walk out. Court dates are reviewed with every defendant at release.</p>
            </div>
          </div>

        </div>
      </div>

      <!-- Right: Stat Grid -->
      <div class="pbg-stat-grid">

        <div class="pbg-stat-card">
          <div class="pbg-stat-number">~15 mi</div>
          <div class="pbg-stat-label">PBGPD to PBCJ</div>
          <div class="pbg-stat-sub">Palm Beach County Jail is ~15 miles south of Palm Beach Gardens on Gun Club Road in West Palm Beach</div>
        </div>

        <div class="pbg-stat-card">
          <div class="pbg-stat-number">2–5 hrs</div>
          <div class="pbg-stat-label">PBGPD Processing Time</div>
          <div class="pbg-stat-sub">Typical booking and transfer window from PBGPD at N Military Trail to Palm Beach County Jail</div>
        </div>

        <div class="pbg-stat-card">
          <div class="pbg-stat-number">24/7</div>
          <div class="pbg-stat-label">Always Available</div>
          <div class="pbg-stat-sub">We answer every hour — nights, weekends, holidays, including Donald Ross Road traffic stops at 2 a.m.</div>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- ═══ SVG DIVIDER 3: dark → white | angled cut ═══ -->
<div class="pbg-divider-angle" aria-hidden="true">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,0 L1440,40 L1440,60 L0,60 Z" fill="#ffffff"/>
  </svg>
</div>

<!-- ═══ SERVICES GRID ═══ -->
<section class="pbg-services" aria-label="Bail bond services in Palm Beach Gardens">
  <div class="container">
    <div class="pbg-services-header">
      <span class="pbg-section-eyebrow">What We Do</span>
      <h2 class="pbg-services-h2">What bail bond services does <em>Mad Extra</em> provide in Palm Beach Gardens?</h2>
      <p class="pbg-services-lead">Every charge type, every shift, all of Palm Beach County — handled by a licensed bondsman who knows the process.</p>
    </div>

    <div class="pbg-svc-grid">
      <?php
      $tints = ['t1', 't2', 't3'];
      foreach ($services as $i => $svc):
        $tint = $tints[$i % 3];
      ?>
      <article class="pbg-svc-card <?php echo $tint; ?>">
        <div class="pbg-svc-banner">
          <div class="pbg-svc-icon-ring">
            <?php echo lucide_icon($svc['icon']); ?>
          </div>
        </div>
        <div class="pbg-svc-body">
          <h3><?php echo htmlspecialchars($svc['name']); ?></h3>
          <p><?php echo htmlspecialchars($svc['description']); ?></p>
          <a href="/services/<?php echo htmlspecialchars($svc['slug']); ?>/" class="pbg-svc-link">
            Learn more <?php echo lucide_icon('arrow-right'); ?>
          </a>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══ SVG DIVIDER 4: white → light ═══ -->
<div class="pbg-divider-wave" aria-hidden="true">
  <svg viewBox="0 0 1440 48" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,24 Q360,48 720,16 Q1080,-12 1440,24 L1440,48 L0,48 Z" fill="#f4f6f9"/>
  </svg>
</div>

<!-- ═══ FAQ SECTION ═══ -->
<section class="pbg-faq" aria-label="Palm Beach Gardens bail bonds FAQ">
  <div class="container">
    <div class="pbg-faq-inner">
      <span class="pbg-section-eyebrow">Common Questions</span>
      <h2 class="pbg-faq-h2">Frequently asked questions about bail bonds in <em>Palm Beach Gardens, FL</em></h2>
      <p class="pbg-faq-sub">Direct answers to what Palm Beach Gardens families ask most about the bail process.</p>

      <div class="pbg-faq-list" role="list">

        <?php foreach ($_faqs as $faq): ?>
        <div class="faq-item-sp" role="listitem">
          <button class="faq-q-sp" aria-expanded="false" onclick="toggleFaq(this)">
            <?php echo htmlspecialchars($faq['q']); ?>
            <span class="faq-icon-sp" aria-hidden="true">+</span>
          </button>
          <div class="faq-a-sp" role="region">
            <p><?php echo htmlspecialchars($faq['a']); ?></p>
          </div>
        </div>
        <?php endforeach; ?>

      </div>
    </div>
  </div>
</section>

<!-- ═══ RELATED AREAS ═══ -->
<section class="pbg-related-areas" aria-label="Nearby cities we also serve">
  <div class="container">
    <div class="pbg-ra-header">
      <h2 class="pbg-ra-h2">We Also Serve These Nearby Palm Beach County Cities</h2>
      <p class="pbg-ra-sub">Same licensed bondsman, same 24/7 availability — across all of Palm Beach County.</p>
    </div>

    <div class="pbg-ra-grid">

      <article class="pbg-ra-card t1">
        <div class="pbg-ra-banner">
          <div class="pbg-ra-icon-ring">
            <?php echo lucide_icon('map-pin'); ?>
          </div>
        </div>
        <div class="pbg-ra-body">
          <h3>Boynton Beach</h3>
          <p class="pbg-ra-county">Palm Beach County</p>
          <a href="/areas/boynton-beach/" class="pbg-ra-link">
            View area <?php echo lucide_icon('arrow-right'); ?>
          </a>
        </div>
      </article>

      <article class="pbg-ra-card t2">
        <div class="pbg-ra-banner">
          <div class="pbg-ra-icon-ring">
            <?php echo lucide_icon('map-pin'); ?>
          </div>
        </div>
        <div class="pbg-ra-body">
          <h3>Boca Raton</h3>
          <p class="pbg-ra-county">Palm Beach County</p>
          <a href="/areas/boca-raton/" class="pbg-ra-link">
            View area <?php echo lucide_icon('arrow-right'); ?>
          </a>
        </div>
      </article>

      <article class="pbg-ra-card t3">
        <div class="pbg-ra-banner">
          <div class="pbg-ra-icon-ring">
            <?php echo lucide_icon('map-pin'); ?>
          </div>
        </div>
        <div class="pbg-ra-body">
          <h3>West Palm Beach</h3>
          <p class="pbg-ra-county">Palm Beach County</p>
          <a href="/areas/west-palm-beach/" class="pbg-ra-link">
            View area <?php echo lucide_icon('arrow-right'); ?>
          </a>
        </div>
      </article>

    </div>
  </div>
</section>

<!-- ═══ EMERGENCY CTA ═══ -->
<section class="pbg-cta" aria-label="Emergency bail bond contact for Palm Beach Gardens">
  <div class="pbg-cta-inner">
    <h2>Need a bail bondsman in <em>Palm Beach Gardens</em> right now?</h2>
    <p>We know the PGA Boulevard corridor, PBGPD's processing timeline, and exactly how Palm Beach County Jail handles releases from this area. Call or contact us — we move immediately, day or night, because every hour your family member spends at PBCJ is an hour we can potentially cut short.</p>
    <div class="pbg-cta-btns">
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>" class="pbg-btn-primary">
        <?php echo lucide_icon('phone'); ?> Call Now — 24/7
      </a>
      <?php endif; ?>
      <a href="/contact/" class="pbg-btn-secondary">Send a Message</a>
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
