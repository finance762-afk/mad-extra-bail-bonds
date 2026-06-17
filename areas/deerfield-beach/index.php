<?php
/**
 * areas/deerfield-beach/index.php — Deerfield Beach Service Area Page
 * Mad Extra Bail Bonds | Delray Beach, FL
 * Phase 6: Service Area Pages
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Bail Bonds Near Me in Deerfield Beach FL | Mad Extra Bail Bonds | 24/7';
$pageDescription = 'Need bail bonds in Deerfield Beach, FL? Mad Extra Bail Bonds serves Deerfield Beach 24/7. Licensed FL bondsman — fast release from North Broward jail facilities. Call now.';
$canonicalUrl    = $siteUrl . '/areas/deerfield-beach/';
$currentPage     = 'areas';

$_breadcrumb = generateBreadcrumbSchema([
    ['name' => 'Home',         'url' => $siteUrl . '/'],
    ['name' => 'Service Areas','url' => $siteUrl . '/areas/'],
    ['name' => 'Deerfield Beach', 'url' => $siteUrl . '/areas/deerfield-beach/'],
]);

$_serviceSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'Service',
    '@id'         => $siteUrl . '/areas/deerfield-beach/#service-deerfield-beach',
    'name'        => 'Bail Bonds in Deerfield Beach, FL',
    'description' => 'Licensed Florida bail bondsman serving Deerfield Beach and North Broward County 24/7. Fast release from Broward County North Regional Jail and the North Regional Courthouse — right in Deerfield Beach.',
    'url'         => $siteUrl . '/areas/deerfield-beach/',
    'provider'    => ['@id' => $siteUrl . '/#organization'],
    'areaServed'  => [
        ['@type' => 'City',   'name' => 'Deerfield Beach, FL'],
        ['@type' => 'County', 'name' => 'Broward County, FL'],
    ],
    'serviceType' => 'Bail Bond Services',
];

$_faqs = [
    [
        'q' => 'Where do Deerfield Beach arrests get processed — North Regional or Broward Main Jail?',
        'a' => 'Deerfield Beach Police Department arrests typically transport to the Broward County North Regional Jail at 1000 Powerline Road in Pompano Beach, approximately 5 miles south. BSO arrests in unincorporated areas of Deerfield Beach — including Hillsboro Shores and areas near Lighthouse Point — may go to either North Regional or the Broward County Main Jail in Fort Lauderdale. Mad Extra Bail Bonds can confirm which facility the moment you provide the case information, and we work actively with staff at both locations.',
    ],
    [
        'q' => 'Is the North Regional Courthouse in Deerfield Beach the same as the jail?',
        'a' => 'No — these are two separate locations. The Broward County North Regional Courthouse is at 1600 W Hillsboro Blvd in Deerfield Beach, and it handles criminal hearings for all of North Broward County including Deerfield Beach cases. The detention facility — the North Regional Jail — is at 1000 Powerline Road in Pompano Beach, about 5 miles south. Defendants are held at the Pompano Beach jail and attend hearings at the Deerfield Beach courthouse. Mad Extra can walk families through both addresses and what happens at each.',
    ],
    [
        'q' => 'What types of arrests are most common in Deerfield Beach?',
        'a' => 'DUI arrests on Sample Road and US-1 account for the largest share of what we handle in Deerfield Beach. Drug possession arrests, warrant-based arrests, and charges related to the bar and restaurant areas around Hillsboro Blvd and Federal Highway are also common. The Deerfield Beach waterfront and Intracoastal areas — including The Cove and Hillsboro Shores — also produce boating under the influence charges during boating season, which we handle regularly.',
    ],
    [
        'q' => 'Can Mad Extra handle a boating under the influence (BUI) arrest in Deerfield Beach?',
        'a' => 'Yes. BUI arrests in Deerfield Beach coastal waters — including Hillsboro Shores, The Cove on the Intracoastal, and the waters south toward Lighthouse Point — are processed through BSO marine patrol and booked at the North Regional Jail in Pompano Beach. Boating Under the Influence is a criminal charge in Florida carrying penalties similar to DUI, and bail is set by the court. Mad Extra Bail Bonds handles BUI bonds in Deerfield Beach the same as any other criminal bond — we begin processing immediately after your call.',
    ],
    [
        'q' => 'How close is Mad Extra Bail Bonds to Deerfield Beach?',
        'a' => 'Mad Extra Bail Bonds is based in Delray Beach at 110 SW 6th St, approximately 8 miles north of Deerfield Beach on I-95. We are the closest licensed bondsman to Deerfield Beach in our network and can respond faster than agencies operating out of Fort Lauderdale, which is an additional 15 miles south. Our proximity to the Broward-Palm Beach county line means North Broward County — including Deerfield Beach — is our primary coverage zone and gets our fastest response.',
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
   DEERFIELD BEACH AREA PAGE — Mad Extra Bail Bonds
   Premium Tier | Dark/Neon Design System
   Techniques:
   1. Layered ::before radial gradient blobs — teal/cyan accent
      variation, differentiating from Fort Lauderdale + Pompano
   2. Fractal noise ::after texture on hero
   3. Floating neon orbs — magenta and teal balanced
   4. Glassmorphism hero sidebar (backdrop-filter: blur(14px))
   5. SVG wave dividers (3 unique shapes distinct from prior pages)
   6. FAQ accordion with magenta left border + icon rotate on open
   7. Service cards with neon scaleX bottom-border hover
   8. Decorative stacked orb rings in dark coverage section
   9. Gradient stat numbers (background-clip: text — magenta/gold)
   ============================================================ */

/* ── 1. HERO — teal/cyan accent variation for visual distinction ── */
.hero-dfl {
  position: relative;
  min-height: 60vh;
  display: flex;
  align-items: center;
  background: #050b12;
  overflow: hidden;
  padding-top: var(--nav-height, 72px);
  padding-bottom: var(--space-12);
}
/* Technique 1: teal-shifted blob cluster — unique among the 3 pages */
.hero-dfl::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 55% 75% at 88% 30%, rgba(77,247,184,0.14) 0%, transparent 55%),
    radial-gradient(ellipse 50% 65% at 10% 70%, rgba(229,53,231,0.16) 0%, transparent 55%),
    radial-gradient(ellipse 75% 40% at 50% 108%, rgba(5,11,18,0.99) 0%, transparent 80%);
  pointer-events: none;
}
/* Technique 2: fractal noise texture */
.hero-dfl::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.87' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.042'/%3E%3C/svg%3E");
  opacity: 0.5;
  pointer-events: none;
  z-index: 0;
}
/* Technique 3: floating orbs — teal and magenta for Deerfield */
.dfl-orb {
  position: absolute;
  border-radius: 50%;
  pointer-events: none;
  will-change: transform;
  z-index: 1;
}
.dfl-orb-1 {
  width: 480px; height: 480px;
  top: -140px; right: -60px;
  background: radial-gradient(circle, rgba(77,247,184,0.1) 0%, transparent 68%);
  animation: dfl-float 18s ease-in-out infinite;
}
.dfl-orb-2 {
  width: 360px; height: 360px;
  bottom: -80px; left: -60px;
  background: radial-gradient(circle, rgba(229,53,231,0.12) 0%, transparent 68%);
  animation: dfl-float 22s ease-in-out infinite reverse;
  animation-delay: -10s;
}
.dfl-orb-3 {
  width: 160px; height: 160px;
  top: 55%; left: 44%;
  background: radial-gradient(circle, rgba(249,183,62,0.07) 0%, transparent 68%);
  animation: dfl-float 14s ease-in-out infinite;
  animation-delay: -6s;
}
@keyframes dfl-float {
  0%,100% { transform: translate(0,0) scale(1); }
  40%     { transform: translate(12px,-15px) scale(1.04); }
  74%     { transform: translate(-9px,11px) scale(0.97); }
}
.hero-dfl-inner {
  position: relative;
  z-index: 2;
  display: grid;
  grid-template-columns: 1fr 390px;
  gap: var(--space-12);
  align-items: center;
  padding: var(--space-12) 0;
  width: 100%;
}
.hero-dfl-left { max-width: 620px; }
.dfl-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  font-family: var(--font-heading);
  font-size: 0.68rem;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 3px;
  color: #4df7b8;
  padding: 6px 16px;
  border: 1px solid rgba(77,247,184,0.35);
  border-radius: var(--radius-full);
  background: rgba(77,247,184,0.07);
  margin-bottom: var(--space-5);
}
.dfl-eyebrow .near-dot {
  width: 7px; height: 7px;
  border-radius: 50%;
  background: #4df7b8;
  box-shadow: 0 0 8px rgba(77,247,184,0.8);
  animation: near-pulse 2.4s ease-in-out infinite;
  flex-shrink: 0;
}
@keyframes near-pulse {
  0%,100% { opacity:1; transform:scale(1); }
  50%     { opacity:.4; transform:scale(.65); }
}
.hero-dfl h1 {
  font-size: clamp(1.8rem, 3.8vw, 3rem);
  font-weight: 900;
  color: #fff;
  line-height: 1.1;
  margin-bottom: var(--space-5);
  letter-spacing: -0.025em;
  text-wrap: balance;
}
.hero-dfl h1 .hl-teal { color: #4df7b8; text-shadow: 0 0 28px rgba(77,247,184,0.45); }
.hero-dfl h1 .hl-mag  { color: var(--color-secondary); text-shadow: 0 0 28px rgba(229,53,231,0.5); }
.hero-dfl h1 .hl-gold { color: var(--color-accent); text-shadow: 0 0 22px rgba(249,183,62,0.4); }
.hero-dfl .hero-answer {
  font-size: 1rem;
  color: rgba(255,255,255,0.65);
  line-height: 1.82;
  margin-bottom: var(--space-7);
  max-width: 560px;
}
.hero-dfl-btns {
  display: flex;
  gap: var(--space-3);
  flex-wrap: wrap;
  margin-bottom: var(--space-7);
}
.btn-dfl-primary {
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
.btn-dfl-primary:hover {
  background: #f043f2;
  box-shadow: 0 0 44px rgba(229,53,231,0.65), 0 8px 22px rgba(0,0,0,0.35);
  transform: translateY(-2px);
  color: #fff;
}
.btn-dfl-primary svg { width: 15px; height: 15px; }
.btn-dfl-secondary {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 12px 24px;
  background: transparent;
  color: #4df7b8;
  border: 2px solid rgba(77,247,184,0.4);
  font-family: var(--font-heading);
  font-size: 0.82rem;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  border-radius: var(--radius-md);
  text-decoration: none;
  transition: all var(--transition-base);
}
.btn-dfl-secondary:hover {
  background: rgba(77,247,184,0.1);
  border-color: #4df7b8;
  transform: translateY(-2px);
  color: #6fffc6;
}
.dfl-trust-row {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-2);
}
.dfl-badge {
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
.dfl-badge svg { width: 11px; height: 11px; color: #4df7b8; flex-shrink: 0; }

/* Technique 4: glassmorphism sidebar — teal-tinted gradient border */
.hero-dfl-card {
  position: relative;
  background: rgba(255,255,255,0.04);
  border: 1px solid rgba(255,255,255,0.12);
  border-radius: 18px;
  padding: var(--space-7) var(--space-6);
  backdrop-filter: blur(14px);
  -webkit-backdrop-filter: blur(14px);
}
.hero-dfl-card::before {
  content: '';
  position: absolute;
  inset: -1px;
  border-radius: 19px;
  background: linear-gradient(135deg, rgba(77,247,184,0.4) 0%, rgba(229,53,231,0.25) 55%, transparent 100%);
  z-index: -1;
  opacity: 0.45;
}
.hfc-dfl-title {
  font-family: var(--font-heading);
  font-size: 1.05rem;
  font-weight: 800;
  color: #fff;
  margin-bottom: var(--space-2);
}
.hfc-dfl-sub {
  font-size: 0.68rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  color: #4df7b8;
  margin-bottom: var(--space-5);
}
.hfc-dfl-list {
  list-style: none;
  padding: 0;
  margin: 0 0 var(--space-6);
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
}
.hfc-dfl-list li {
  display: flex;
  align-items: flex-start;
  gap: var(--space-2);
  font-size: 0.85rem;
  color: rgba(255,255,255,0.8);
  line-height: 1.5;
}
.hfc-check-teal {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  width: 18px; height: 18px;
  border-radius: 50%;
  background: linear-gradient(135deg, #4df7b8, #0fbf8a);
  font-size: 0.6rem;
  color: #05120d;
  font-weight: 900;
  margin-top: 2px;
}
.hfc-dfl-cta {
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
}
.hfc-dfl-cta:hover {
  box-shadow: 0 8px 34px rgba(229,53,231,0.62);
  transform: translateY(-1px);
  color: #fff;
}
.hfc-dfl-disclaimer {
  text-align: center;
  font-size: 0.6rem;
  color: rgba(255,255,255,0.3);
  margin-top: var(--space-3);
  line-height: 1.5;
}

/* ── 2. SVG DIVIDERS ── */
/* Technique 5: 3 unique shapes — wider arch, angled left lean, shallow double */
.div-dfl-d2l { line-height: 0; background: #050b12; }
.div-dfl-d2l svg { display: block; width: 100%; }
.div-dfl-l2d { line-height: 0; background: #f4f6f9; }
.div-dfl-l2d svg { display: block; width: 100%; }
.div-dfl-d2w { line-height: 0; background: #050b12; }
.div-dfl-d2w svg { display: block; width: 100%; }
.div-dfl-w2l { line-height: 0; background: #fff; }
.div-dfl-w2l svg { display: block; width: 100%; }

/* ── 3. INTRO / ANSWER SECTION ── */
.intro-dfl {
  padding: var(--space-16) 0;
  background: #f4f6f9;
}
.intro-dfl-inner { max-width: 860px; margin: 0 auto; }
.dfl-sec-eyebrow {
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
.intro-dfl h2 {
  font-size: clamp(1.65rem, 2.8vw, 2.35rem);
  font-weight: 900;
  color: #1a2340;
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.02em;
  margin-bottom: var(--space-4);
}
.intro-dfl h2 em { color: var(--color-secondary); font-style: normal; }
.answer-block-dfl {
  background: linear-gradient(135deg, rgba(229,53,231,0.07), rgba(77,247,184,0.04));
  border-left: 3px solid var(--color-secondary);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  padding: var(--space-5) var(--space-6);
  margin-bottom: var(--space-6);
}
.answer-block-dfl p {
  font-size: 0.95rem;
  color: #1a2340;
  line-height: 1.8;
  margin: 0;
  font-style: italic;
}
.intro-dfl p.prose {
  font-size: 0.95rem;
  color: #4a5568;
  line-height: 1.82;
  margin-bottom: var(--space-4);
  max-width: 65ch;
}

/* ── 4. LOCAL COVERAGE SECTION (dark) ── */
/* Technique 8: stacked ring orb decoration — unique visual element */
.coverage-dfl {
  padding: var(--space-16) 0;
  background: linear-gradient(155deg, #050b12 0%, #0e1824 50%, #12082a 100%);
  position: relative;
  overflow: hidden;
}
.coverage-dfl::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 50% 60% at 5% 30%, rgba(77,247,184,0.08) 0%, transparent 58%),
    radial-gradient(ellipse 44% 55% at 96% 70%, rgba(229,53,231,0.1) 0%, transparent 58%);
  pointer-events: none;
}
/* Technique 8: stacked decorative ring rings — teal for Deerfield */
.coverage-dfl-ring {
  position: absolute;
  border-radius: 50%;
  pointer-events: none;
}
.coverage-dfl-ring-1 {
  width: 400px; height: 400px;
  top: 50%; right: -80px;
  transform: translateY(-50%);
  background: transparent;
  border: 1px solid rgba(77,247,184,0.07);
}
.coverage-dfl-ring-2 {
  width: 300px; height: 300px;
  top: 50%; right: -30px;
  transform: translateY(-50%);
  background: transparent;
  border: 1px solid rgba(77,247,184,0.1);
}
.coverage-dfl-ring-3 {
  width: 200px; height: 200px;
  top: 50%; right: 20px;
  transform: translateY(-50%);
  background: radial-gradient(circle, rgba(77,247,184,0.05) 0%, transparent 70%);
  border: 1px solid rgba(77,247,184,0.15);
}
.coverage-dfl-inner {
  position: relative;
  z-index: 1;
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-14);
  align-items: start;
}
.coverage-dfl-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  font-family: var(--font-heading);
  font-size: 0.68rem;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 3px;
  color: #4df7b8;
  padding: 5px 14px;
  border: 1px solid rgba(77,247,184,0.28);
  border-radius: var(--radius-full);
  background: rgba(77,247,184,0.07);
  margin-bottom: var(--space-4);
}
.coverage-dfl h2 {
  font-size: clamp(1.5rem, 2.6vw, 2.1rem);
  font-weight: 900;
  color: #fff;
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.02em;
  margin-bottom: var(--space-3);
}
.coverage-dfl h2 em { color: #4df7b8; font-style: normal; }
.coverage-dfl-lead {
  font-size: 0.9rem;
  color: rgba(255,255,255,0.5);
  line-height: 1.8;
  margin-bottom: var(--space-5);
}
.answer-block-dark-dfl {
  background: rgba(255,255,255,0.04);
  border-left: 3px solid #4df7b8;
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  padding: var(--space-4) var(--space-5);
  margin-bottom: var(--space-6);
}
.answer-block-dark-dfl p {
  font-size: 0.88rem;
  color: rgba(255,255,255,0.72);
  line-height: 1.8;
  margin: 0;
  font-style: italic;
}
.coverage-dfl-detail-list {
  list-style: none;
  padding: 0;
  margin: 0;
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
}
.cov-dfl-item {
  display: flex;
  gap: var(--space-4);
  align-items: flex-start;
}
.cov-dfl-icon {
  flex-shrink: 0;
  width: 38px; height: 38px;
  border-radius: 10px;
  background: rgba(77,247,184,0.07);
  border: 1px solid rgba(77,247,184,0.15);
  display: flex; align-items: center; justify-content: center;
  color: #4df7b8;
  margin-top: 2px;
}
.cov-dfl-icon svg { width: 18px; height: 18px; }
.cov-dfl-content h4 {
  font-size: 0.88rem;
  font-weight: 800;
  color: #fff;
  margin-bottom: var(--space-1);
}
.cov-dfl-content p {
  font-size: 0.82rem;
  color: rgba(255,255,255,0.5);
  line-height: 1.65;
  margin: 0;
}
/* Technique 9: gradient stat numbers — magenta → gold */
.coverage-dfl-stats {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-4);
}
.dfl-stat-card {
  background: rgba(255,255,255,0.04);
  border: 1px solid rgba(255,255,255,0.08);
  border-radius: var(--radius-lg);
  padding: var(--space-6);
  text-align: center;
  position: relative;
  overflow: hidden;
}
.dfl-stat-card::before {
  content: '';
  position: absolute;
  top: -20px; left: 50%;
  transform: translateX(-50%);
  width: 80px; height: 80px;
  border-radius: 50%;
  background: radial-gradient(circle, rgba(77,247,184,0.08) 0%, transparent 70%);
  pointer-events: none;
}
.dfl-stat-num {
  font-family: var(--font-heading);
  font-size: 2.2rem;
  font-weight: 900;
  background: linear-gradient(135deg, var(--color-secondary) 0%, var(--color-accent) 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  line-height: 1;
  display: block;
  margin-bottom: var(--space-1);
  position: relative;
  z-index: 1;
}
.dfl-stat-lbl {
  font-family: var(--font-heading);
  font-size: 0.6rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  color: rgba(255,255,255,0.4);
  position: relative;
  z-index: 1;
}
.dfl-stat-note {
  font-size: 0.72rem;
  color: rgba(255,255,255,0.32);
  margin-top: var(--space-2);
  line-height: 1.55;
  position: relative;
  z-index: 1;
}

/* ── 5. SERVICES SECTION ── */
/* Technique 7: scaleX neon bottom-border on service cards */
.services-dfl {
  padding: var(--space-16) 0;
  background: #fff;
}
.services-dfl-header { text-align: center; margin-bottom: var(--space-12); }
.services-dfl h2 {
  font-size: clamp(1.65rem, 2.8vw, 2.35rem);
  font-weight: 900;
  color: #1a2340;
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.02em;
  margin-bottom: var(--space-3);
}
.services-dfl h2 em { color: var(--color-secondary); font-style: normal; }
.services-dfl-lead {
  font-size: 0.95rem;
  color: #4a5568;
  max-width: 500px;
  margin: 0 auto;
  line-height: 1.75;
}
.dfl-services-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 18px;
}
.dfl-svc-card {
  background: #f7f8fb;
  border: 1px solid rgba(77,247,184,0.1);
  border-radius: var(--radius-lg);
  padding: var(--space-6) var(--space-5);
  text-decoration: none;
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
  position: relative;
  overflow: hidden;
  transition: transform var(--transition-base), box-shadow var(--transition-base), border-color var(--transition-base);
}
.dfl-svc-card::after {
  content: '';
  position: absolute;
  bottom: 0; left: 0; right: 0;
  height: 2px;
  background: linear-gradient(90deg, #4df7b8, var(--color-secondary));
  transform: scaleX(0);
  transform-origin: left;
  transition: transform 0.32s ease;
}
.dfl-svc-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 14px 35px rgba(77,247,184,0.1), 0 4px 10px rgba(0,0,0,0.06);
  border-color: rgba(77,247,184,0.22);
}
.dfl-svc-card:hover::after { transform: scaleX(1); }
.dfl-svc-icon {
  width: 46px; height: 46px;
  border-radius: 50%;
  background: linear-gradient(135deg, rgba(77,247,184,0.1), rgba(229,53,231,0.07));
  border: 1px solid rgba(77,247,184,0.18);
  display: flex; align-items: center; justify-content: center;
  color: #4df7b8;
}
.dfl-svc-icon svg { width: 20px; height: 20px; }
.dfl-svc-name {
  font-family: var(--font-heading);
  font-size: 0.88rem;
  font-weight: 800;
  color: #1a2340;
  line-height: 1.25;
}
.dfl-svc-desc {
  font-size: 0.8rem;
  color: #4a5568;
  line-height: 1.65;
  flex: 1;
  margin: 0;
}
.dfl-svc-link {
  display: inline-flex;
  align-items: center;
  gap: 4px;
  font-size: 0.76rem;
  font-weight: 800;
  color: var(--color-secondary);
  text-decoration: none;
  transition: gap var(--transition-fast);
  margin-top: auto;
}
.dfl-svc-link:hover { gap: 8px; }
.dfl-svc-link svg { width: 13px; height: 13px; }

/* ── 6. FAQ SECTION ── */
/* Technique 6: accordion — teal left border transforms to magenta on open */
.faq-dfl {
  padding: var(--space-16) 0;
  background: #f4f6f9;
}
.faq-dfl-inner { max-width: 820px; margin: 0 auto; }
.faq-dfl h2 {
  font-size: clamp(1.55rem, 2.6vw, 2.15rem);
  font-weight: 900;
  color: #1a2340;
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.02em;
  margin-bottom: var(--space-3);
}
.faq-dfl h2 em { color: var(--color-secondary); font-style: normal; }
.faq-dfl-sub { font-size: 0.92rem; color: #4a5568; margin-bottom: var(--space-10); line-height: 1.75; }
.faq-dfl-list { display: flex; flex-direction: column; gap: var(--space-3); }
.faq-dfl-item {
  background: #fff;
  border: 1px solid rgba(77,247,184,0.12);
  border-left: 3px solid rgba(77,247,184,0.25);
  border-radius: 0 var(--radius-lg) var(--radius-lg) 0;
  overflow: hidden;
  transition: border-color var(--transition-base), box-shadow var(--transition-base);
}
.faq-dfl-item.open {
  border-left-color: var(--color-secondary);
  border-color: rgba(229,53,231,0.2);
  box-shadow: 0 4px 18px rgba(229,53,231,0.09);
}
.faq-dfl-q {
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
.faq-dfl-q:hover { color: var(--color-secondary); }
.faq-dfl-item.open .faq-dfl-q { color: var(--color-secondary); }
.faq-dfl-icon {
  flex-shrink: 0;
  width: 26px; height: 26px;
  border-radius: 50%;
  background: rgba(77,247,184,0.1);
  border: 1px solid rgba(77,247,184,0.22);
  display: flex; align-items: center; justify-content: center;
  transition: background var(--transition-base), transform var(--transition-base), border-color var(--transition-base);
  font-size: 0.95rem;
  color: #4df7b8;
  font-weight: 900;
}
.faq-dfl-item.open .faq-dfl-icon {
  background: var(--color-secondary);
  border-color: var(--color-secondary);
  color: #fff;
  transform: rotate(45deg);
}
.faq-dfl-a {
  display: none;
  padding: 0 var(--space-6) var(--space-5);
  font-size: 0.88rem;
  color: #4a5568;
  line-height: 1.8;
  border-top: 1px solid rgba(77,247,184,0.08);
  padding-top: var(--space-4);
}
.faq-dfl-item.open .faq-dfl-a { display: block; }

/* ── 7. RELATED AREAS ── */
.related-dfl {
  padding: var(--space-14) 0;
  background: #fff;
}
.related-dfl-h3 {
  font-size: clamp(1.35rem, 2.2vw, 1.8rem);
  font-weight: 900;
  color: #1a2340;
  text-align: center;
  margin-bottom: var(--space-2);
  text-wrap: balance;
}
.related-dfl-sub { text-align: center; font-size: 0.9rem; color: #4a5568; margin-bottom: var(--space-8); }
.related-dfl-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 18px;
}
.rltd-dfl {
  display: block;
  background: #f7f8fb;
  border: 1px solid rgba(77,247,184,0.1);
  border-radius: var(--radius-lg);
  padding: var(--space-6) var(--space-5);
  text-decoration: none;
  position: relative;
  overflow: hidden;
  transition: transform var(--transition-base), box-shadow var(--transition-base), border-color var(--transition-base);
}
.rltd-dfl::after {
  content: '';
  position: absolute;
  bottom: 0; left: 0; right: 0;
  height: 2px;
  background: linear-gradient(90deg, #4df7b8, var(--color-secondary));
  transform: scaleX(0);
  transform-origin: left;
  transition: transform 0.3s ease;
}
.rltd-dfl:hover {
  transform: translateY(-4px);
  box-shadow: 0 12px 30px rgba(77,247,184,0.1), 0 4px 8px rgba(0,0,0,0.05);
  border-color: rgba(77,247,184,0.22);
}
.rltd-dfl:hover::after { transform: scaleX(1); }
.rltd-dfl-tag {
  font-size: 0.63rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1px;
  color: var(--color-secondary);
  margin-bottom: var(--space-2);
}
.rltd-dfl-name {
  font-family: var(--font-heading);
  font-size: 1rem;
  font-weight: 800;
  color: #1a2340;
  margin-bottom: var(--space-2);
}
.rltd-dfl-note { font-size: 0.8rem; color: #4a5568; line-height: 1.6; margin-bottom: var(--space-4); }
.rltd-dfl-cta {
  display: inline-flex;
  align-items: center;
  gap: 4px;
  font-size: 0.76rem;
  font-weight: 800;
  color: var(--color-secondary);
}
.rltd-dfl-cta svg { width: 13px; height: 13px; }

/* ── 8. EMERGENCY CTA ── */
.cta-dfl {
  padding: var(--space-14) 0;
  background: linear-gradient(135deg, #050b12 0%, #0e1824 55%, #12082a 100%);
  position: relative;
  overflow: hidden;
  text-align: center;
}
.cta-dfl::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 50% 76% at 14% 50%, rgba(77,247,184,0.1) 0%, transparent 58%),
    radial-gradient(ellipse 50% 70% at 86% 50%, rgba(229,53,231,0.14) 0%, transparent 58%);
  pointer-events: none;
}
.cta-dfl-inner {
  position: relative;
  z-index: 1;
  max-width: 560px;
  margin: 0 auto;
}
.cta-dfl h2 {
  font-size: clamp(1.5rem, 2.8vw, 2.2rem);
  font-weight: 900;
  color: #fff;
  text-wrap: balance;
  margin-bottom: var(--space-3);
}
.cta-dfl h2 em { color: var(--color-secondary); font-style: normal; }
.cta-dfl p {
  font-size: 0.95rem;
  color: rgba(255,255,255,0.56);
  max-width: 440px;
  margin: 0 auto var(--space-7);
  line-height: 1.75;
}
.cta-dfl-btns {
  display: flex;
  gap: var(--space-3);
  justify-content: center;
  flex-wrap: wrap;
}

/* ── RESPONSIVE ── */
@media (max-width: 1024px) {
  .hero-dfl-inner { grid-template-columns: 1fr; }
  .hero-dfl-card { display: none; }
  .coverage-dfl-inner { grid-template-columns: 1fr; gap: var(--space-10); }
  .dfl-services-grid { grid-template-columns: repeat(2, 1fr); }
  .coverage-dfl-ring-1,
  .coverage-dfl-ring-2,
  .coverage-dfl-ring-3 { display: none; }
}
@media (max-width: 768px) {
  .coverage-dfl-stats { grid-template-columns: repeat(2, 1fr); }
  .related-dfl-grid { grid-template-columns: 1fr; }
}
@media (max-width: 600px) {
  .dfl-services-grid { grid-template-columns: 1fr; }
}
</style>

<!-- ═══ HERO ═══ -->
<section class="hero-dfl" aria-label="Deerfield Beach bail bonds">
  <div class="dfl-orb dfl-orb-1"></div>
  <div class="dfl-orb dfl-orb-2"></div>
  <div class="dfl-orb dfl-orb-3"></div>

  <div class="container">
    <div class="hero-dfl-inner">
      <div class="hero-dfl-left">
        <span class="dfl-eyebrow">
          <span class="near-dot"></span>
          North Broward · Deerfield Beach · 8 Miles from Our Office
        </span>
        <h1>
          <span class="hl-teal">Bail Bonds Near Me</span> in Deerfield Beach, FL —<br>
          Licensed <span class="hl-mag">North Broward</span> <span class="hl-gold">Bondsman 24/7</span>
        </h1>
        <p class="hero-answer">Arrested in Deerfield Beach? Mad Extra Bail Bonds is a licensed Florida bail bondsman based in Delray Beach — just 8 miles away. DBPD arrests route to North Regional Jail in Pompano Beach. We work with North Regional staff daily and can reach Deerfield Beach faster than any Fort Lauderdale agency. Call now.</p>
        <div class="hero-dfl-btns">
          <?php if (!empty($phone)): ?>
          <a href="tel:<?php echo preg_replace('/\D/','',$phone); ?>" class="btn-dfl-primary">
            <?php echo lucide_icon('phone'); ?> Call Now — 24/7
          </a>
          <?php else: ?>
          <a href="/contact/" class="btn-dfl-primary">
            <?php echo lucide_icon('zap'); ?> Get Help Now
          </a>
          <?php endif; ?>
          <a href="/contact/" class="btn-dfl-secondary">Free Consultation</a>
        </div>
        <div class="dfl-trust-row">
          <span class="dfl-badge"><?php echo lucide_icon('shield-check'); ?> Licensed FL Bondsman</span>
          <span class="dfl-badge"><?php echo lucide_icon('map-pin'); ?> 8 Miles Away</span>
          <span class="dfl-badge"><?php echo lucide_icon('clock'); ?> 24/7 Response</span>
          <span class="dfl-badge"><?php echo lucide_icon('anchor'); ?> BUI Bonds Covered</span>
        </div>
      </div>

      <div class="hero-dfl-card">
        <p class="hfc-dfl-title">Deerfield Beach Arrest?</p>
        <p class="hfc-dfl-sub">Closest bondsman — just 8 miles away</p>
        <ul class="hfc-dfl-list">
          <li><span class="hfc-check-teal">✓</span> DBPD arrests → North Regional Jail, Pompano</li>
          <li><span class="hfc-check-teal">✓</span> BUI charges on The Cove and Hillsboro Shores</li>
          <li><span class="hfc-check-teal">✓</span> DUI on Sample Road and US-1 handled daily</li>
          <li><span class="hfc-check-teal">✓</span> North Regional Courthouse coordination</li>
          <li><span class="hfc-check-teal">✓</span> Licensed FL bondsman — faster than Fort Lauderdale agencies</li>
        </ul>
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo preg_replace('/\D/','',$phone); ?>" class="hfc-dfl-cta">
          <?php echo lucide_icon('phone'); ?> Call Now
        </a>
        <?php else: ?>
        <a href="/contact/" class="hfc-dfl-cta">Get Help Now</a>
        <?php endif; ?>
        <p class="hfc-dfl-disclaimer">Available 24 hours a day, 365 days a year</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SVG WAVE DIVIDER 1 — dark to light (wide single arch) ═══ -->
<div class="div-dfl-d2l" aria-hidden="true">
  <svg viewBox="0 0 1440 55" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,55 L0,22 Q720,55 1440,14 L1440,55 Z" fill="#f4f6f9"/>
  </svg>
</div>

<!-- ═══ INTRO / ANSWER SECTION ═══ -->
<section class="intro-dfl" aria-label="Deerfield Beach bail bond overview">
  <div class="container">
    <div class="intro-dfl-inner">
      <span class="dfl-sec-eyebrow">Closest Bondsman to Deerfield Beach</span>
      <h2>Where do <em>Deerfield Beach arrests</em> get booked — and how fast can Mad Extra post bond?</h2>
      <div class="answer-block-dfl">
        <p>Deerfield Beach Police Department arrests typically route to the Broward County North Regional Jail at 1000 Powerline Road in Pompano Beach, approximately 5 miles south. BSO arrests in unincorporated Deerfield Beach may go to either North Regional or Broward Main in Fort Lauderdale. Mad Extra Bail Bonds is a licensed Florida bail bondsman based in Delray Beach, serving Deerfield Beach and all of North Broward County — we are 8 miles from Deerfield Beach and can confirm which facility within minutes of your call.</p>
      </div>
      <p class="prose">Mad Extra Bail Bonds is a licensed Florida bail bondsman based in Delray Beach, serving Deerfield Beach and all of North Broward County. Our Delray Beach location at 110 SW 6th St puts us 8 miles north of Deerfield Beach on I-95 — closer than any Fort Lauderdale-based bondsman by 15 additional miles. For families in Deerfield Beach, that proximity means faster response and faster action at the North Regional Jail in Pompano Beach, where most Deerfield Beach arrests are booked.</p>
      <p class="prose">Deerfield Beach sits at the northeastern corner of Broward County. The North Regional Courthouse at 1600 W Hillsboro Blvd is right in Deerfield Beach — making it one of the few Broward cities where criminal hearings are heard locally rather than in Fort Lauderdale. We know this courthouse and its scheduling patterns, which is valuable context for families trying to understand what happens after bond is posted.</p>
      <p class="prose">DUI arrests on Sample Road and US-1, drug possession arrests near the Hillsboro Blvd commercial corridor, and warrant-based arrests are the most common charge types we see from Deerfield Beach. The waterfront communities of The Cove and Hillsboro Shores also generate boating under the influence (BUI) charges through BSO marine patrol — we handle BUI bonds in Deerfield Beach the same as any other criminal charge, 24 hours a day. The Deerfield Beach Pier area, Quiet Waters Park, and Deer Creek are all within our Deerfield Beach coverage.</p>
    </div>
  </div>
</section>

<!-- ═══ SVG WAVE DIVIDER 2 — light to dark (angled right lean) ═══ -->
<div class="div-dfl-l2d" aria-hidden="true">
  <svg viewBox="0 0 1440 55" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,22 L1440,0 L1440,55 L0,55 Z" fill="#050b12"/>
  </svg>
</div>

<!-- ═══ LOCAL COVERAGE SECTION ═══ -->
<section class="coverage-dfl" aria-label="Deerfield Beach local jail and coverage details">
  <div class="coverage-dfl-ring coverage-dfl-ring-1"></div>
  <div class="coverage-dfl-ring coverage-dfl-ring-2"></div>
  <div class="coverage-dfl-ring coverage-dfl-ring-3"></div>
  <div class="container">
    <div class="coverage-dfl-inner">
      <div>
        <span class="coverage-dfl-eyebrow"><?php echo lucide_icon('map-pin'); ?> Deerfield Beach Coverage Details</span>
        <h2>Which Deerfield Beach neighborhoods and courts does <em>Mad Extra cover</em>?</h2>
        <div class="answer-block-dark-dfl">
          <p>We cover all of Deerfield Beach — The Cove waterfront, Quiet Waters, Deer Creek, Hillsboro Shores, and the Sample Road and Hillsboro Blvd commercial corridors. Deerfield Beach arrests route to North Regional Jail in Pompano Beach, and Deerfield Beach criminal hearings are heard at the North Regional Courthouse right on Hillsboro Blvd in the city itself.</p>
        </div>
        <ul class="coverage-dfl-detail-list">
          <li class="cov-dfl-item">
            <div class="cov-dfl-icon"><?php echo lucide_icon('landmark'); ?></div>
            <div class="cov-dfl-content">
              <h4>North Regional Courthouse — 1600 W Hillsboro Blvd, Deerfield Beach</h4>
              <p>Deerfield Beach is unique in Broward County because criminal hearings for local arrests are held right here in the city. First appearance hearings and subsequent court dates for Deerfield Beach cases go to this courthouse — not Fort Lauderdale. We know this facility and its schedule.</p>
            </div>
          </li>
          <li class="cov-dfl-item">
            <div class="cov-dfl-icon"><?php echo lucide_icon('shield'); ?></div>
            <div class="cov-dfl-content">
              <h4>Broward County North Regional Jail — 1000 Powerline Rd, Pompano Beach</h4>
              <p>DBPD arrests transport approximately 5 miles south to North Regional Jail in Pompano Beach. This is the primary booking facility for Deerfield Beach arrests. Mad Extra has active daily relationships with North Regional staff — we know the fastest path to release at this facility.</p>
            </div>
          </li>
          <li class="cov-dfl-item">
            <div class="cov-dfl-icon"><?php echo lucide_icon('anchor'); ?></div>
            <div class="cov-dfl-content">
              <h4>The Cove and Hillsboro Shores — BUI Coverage</h4>
              <p>The Cove waterfront community on the Intracoastal and Hillsboro Shores on the barrier island see BSO marine patrol activity. Boating Under the Influence arrests in Deerfield Beach coastal waters are criminal charges — we handle BUI bonds with the same urgency as DUI bonds, 24 hours a day.</p>
            </div>
          </li>
          <li class="cov-dfl-item">
            <div class="cov-dfl-icon"><?php echo lucide_icon('car'); ?></div>
            <div class="cov-dfl-content">
              <h4>Sample Road and US-1 DUI Corridor</h4>
              <p>The Sample Road and I-95 interchange and the US-1 Federal Highway corridor through Deerfield Beach are high-DUI corridors in North Broward. DUI bonds in Deerfield Beach are among our most common calls — we know the timelines and can guide families through the entire process from first call to release.</p>
            </div>
          </li>
        </ul>
      </div>
      <div>
        <div class="coverage-dfl-stats">
          <div class="dfl-stat-card">
            <span class="dfl-stat-num">8mi</span>
            <span class="dfl-stat-lbl">from our Delray office</span>
            <p class="dfl-stat-note">Closer to Deerfield Beach than any Fort Lauderdale bondsman</p>
          </div>
          <div class="dfl-stat-card">
            <span class="dfl-stat-num">5mi</span>
            <span class="dfl-stat-lbl">to North Regional Jail</span>
            <p class="dfl-stat-note">DBPD arrests route south to Pompano Beach for booking</p>
          </div>
          <div class="dfl-stat-card">
            <span class="dfl-stat-num">24/7</span>
            <span class="dfl-stat-lbl">live response</span>
            <p class="dfl-stat-note">A licensed bondsman — not voicemail — picks up every call</p>
          </div>
          <div class="dfl-stat-card">
            <span class="dfl-stat-num">11+</span>
            <span class="dfl-stat-lbl">yrs FL experience</span>
            <p class="dfl-stat-note">Active relationships with Deerfield Beach and Broward courts</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SVG WAVE DIVIDER 3 — dark to white (shallow double-bump) ═══ -->
<div class="div-dfl-d2w" aria-hidden="true">
  <svg viewBox="0 0 1440 55" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,30 Q240,55 480,20 Q720,0 960,30 Q1200,55 1440,18 L1440,55 L0,55 Z" fill="#ffffff"/>
  </svg>
</div>

<!-- ═══ SERVICES SECTION ═══ -->
<section class="services-dfl" aria-label="Bail bond services available in Deerfield Beach">
  <div class="container">
    <div class="services-dfl-header">
      <span class="dfl-sec-eyebrow">What We Handle in Deerfield Beach</span>
      <h2>What bail bond services does Mad Extra provide in <em>Deerfield Beach</em>?</h2>
      <p class="services-dfl-lead">DUI, BUI, drug, warrant, felony, misdemeanor — every charge type covered at North Regional Jail and Broward Main. One call, all of North Broward.</p>
    </div>
    <div class="dfl-services-grid" data-p1-dynamic>
      <?php foreach ($services as $svc): ?>
      <article class="dfl-svc-card">
        <div class="dfl-svc-icon"><?php echo lucide_icon($svc['icon']); ?></div>
        <p class="dfl-svc-name"><?php echo htmlspecialchars($svc['name']); ?></p>
        <p class="dfl-svc-desc"><?php echo htmlspecialchars($svc['description']); ?></p>
        <a href="/services/<?php echo htmlspecialchars($svc['slug']); ?>/" class="dfl-svc-link">
          Learn more <?php echo lucide_icon('arrow-right'); ?>
        </a>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══ SVG WAVE DIVIDER — white to light ═══ -->
<div class="div-dfl-w2l" aria-hidden="true">
  <svg viewBox="0 0 1440 40" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,0 Q480,40 960,14 Q1200,2 1440,32 L1440,40 L0,40 Z" fill="#f4f6f9"/>
  </svg>
</div>

<!-- ═══ FAQ SECTION ═══ -->
<section class="faq-dfl" aria-label="Deerfield Beach bail bond FAQ">
  <div class="container">
    <div class="faq-dfl-inner">
      <span class="dfl-sec-eyebrow">Common Questions</span>
      <h2>Frequently asked questions about <em>bail bonds in Deerfield Beach</em></h2>
      <p class="faq-dfl-sub">Answers specific to Deerfield Beach — including BUI charges, North Regional Jail vs. Broward Main, and why proximity to the North Regional Courthouse matters.</p>
      <div class="faq-dfl-list" role="list">
        <?php foreach ($_faqs as $faq): ?>
        <div class="faq-dfl-item" role="listitem">
          <button class="faq-dfl-q" aria-expanded="false" onclick="toggleFaqDfl(this)">
            <?php echo htmlspecialchars($faq['q']); ?>
            <span class="faq-dfl-icon" aria-hidden="true">+</span>
          </button>
          <div class="faq-dfl-a" role="region">
            <p><?php echo htmlspecialchars($faq['a']); ?></p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- ═══ RELATED AREAS ═══ -->
<section class="related-dfl" aria-label="Other North Broward service areas near Deerfield Beach">
  <div class="container">
    <h3 class="related-dfl-h3">Other North Broward Areas We Serve</h3>
    <p class="related-dfl-sub">Mad Extra Bail Bonds covers all of Broward County — and our Delray Beach base puts us closest to the northern end.</p>
    <div class="related-dfl-grid">
      <a href="/areas/pompano-beach/" class="rltd-dfl">
        <p class="rltd-dfl-tag">Broward County</p>
        <p class="rltd-dfl-name">Pompano Beach</p>
        <p class="rltd-dfl-note">North Regional Jail at 1000 Powerline Rd is right in Pompano Beach — the same facility that processes most Deerfield Beach arrests. We work with North Regional daily.</p>
        <span class="rltd-dfl-cta">View bail bonds in Pompano Beach <?php echo lucide_icon('arrow-right'); ?></span>
      </a>
      <a href="/areas/fort-lauderdale/" class="rltd-dfl">
        <p class="rltd-dfl-tag">Broward County</p>
        <p class="rltd-dfl-name">Fort Lauderdale</p>
        <p class="rltd-dfl-note">BSO Deerfield Beach arrests sometimes route to Broward Main at 555 SE 1st Ave in Fort Lauderdale. We cover both facilities and can confirm which one handles your case.</p>
        <span class="rltd-dfl-cta">View bail bonds in Fort Lauderdale <?php echo lucide_icon('arrow-right'); ?></span>
      </a>
      <a href="/areas/boca-raton/" class="rltd-dfl">
        <p class="rltd-dfl-tag">Palm Beach County</p>
        <p class="rltd-dfl-name">Boca Raton</p>
        <p class="rltd-dfl-note">Just north of Deerfield Beach, Boca Raton arrests route to the Palm Beach County Jail in West Palm Beach. Mad Extra covers all of Palm Beach County 24/7.</p>
        <span class="rltd-dfl-cta">View bail bonds in Boca Raton <?php echo lucide_icon('arrow-right'); ?></span>
      </a>
    </div>
  </div>
</section>

<!-- ═══ EMERGENCY CTA ═══ -->
<section class="cta-dfl" aria-label="Emergency Deerfield Beach bail bond contact">
  <div class="container" style="position:relative;z-index:1">
    <div class="cta-dfl-inner">
      <h2>Need a bondsman in <em>Deerfield Beach</em> right now?</h2>
      <p>We are 8 miles north on I-95 — the closest licensed bondsman to Deerfield Beach. Whether the arrest is at North Regional Jail or Broward Main, we handle it. Call now and we start immediately.</p>
      <div class="cta-dfl-btns">
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo preg_replace('/\D/','',$phone); ?>" class="btn-dfl-primary">
          <?php echo lucide_icon('phone'); ?> Call Now — 24/7
        </a>
        <?php endif; ?>
        <a href="/contact/" class="btn-dfl-secondary">Send a Message</a>
      </div>
    </div>
  </div>
</section>

<script>
function toggleFaqDfl(btn) {
  const item = btn.closest('.faq-dfl-item');
  const isOpen = item.classList.contains('open');
  document.querySelectorAll('.faq-dfl-item.open').forEach(el => el.classList.remove('open'));
  document.querySelectorAll('.faq-dfl-q').forEach(el => el.setAttribute('aria-expanded', 'false'));
  if (!isOpen) {
    item.classList.add('open');
    btn.setAttribute('aria-expanded', 'true');
  }
}
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
