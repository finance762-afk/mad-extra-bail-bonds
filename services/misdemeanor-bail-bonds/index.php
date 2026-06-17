<?php
/**
 * services/misdemeanor-bail-bonds/index.php — Misdemeanor Bail Bonds Service Page
 * Mad Extra Bail Bonds | Delray Beach, FL
 * Phase 4: Service Pages
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Misdemeanor Bail Bonds South Florida | Mad Extra Bail Bonds | Fast Release';
$pageDescription = 'Misdemeanor arrest in South Florida? Mad Extra Bail Bonds gets you out fast — most misdemeanor releases happen within hours. Licensed FL bondsman available 24/7.';
$canonicalUrl    = $siteUrl . '/services/misdemeanor-bail-bonds/';
$currentPage     = 'services';

$_breadcrumb = generateBreadcrumbSchema([
    ['name' => 'Home',                      'url' => $siteUrl . '/'],
    ['name' => 'Services',                  'url' => $siteUrl . '/services/'],
    ['name' => 'Misdemeanor Bail Bonds',    'url' => $siteUrl . '/services/misdemeanor-bail-bonds/'],
]);

$_serviceSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'Service',
    '@id'         => $siteUrl . '/services/misdemeanor-bail-bonds/#service-misdemeanor-bail-bonds',
    'name'        => 'Misdemeanor Bail Bonds',
    'description' => 'Fast, affordable misdemeanor bail bonds across Palm Beach, Broward, and Miami-Dade County. Most releases within 2 to 6 hours. Licensed FL bondsman available 24/7.',
    'url'         => $siteUrl . '/services/misdemeanor-bail-bonds/',
    'provider'    => ['@id' => $siteUrl . '/#localbusiness'],
    'areaServed'  => [
        ['@type' => 'State', 'name' => 'Florida'],
        ['@type' => 'City',  'name' => 'Delray Beach, FL'],
    ],
    'serviceType' => 'Misdemeanor Bail Bonds',
];

$_faqs = [
    [
        'q' => 'What is the typical bail amount for a misdemeanor arrest in South Florida?',
        'a' => 'Misdemeanor bail amounts in South Florida vary by charge severity. First-degree misdemeanors (the most serious) typically carry bonds of $500 to $5,000. Second-degree misdemeanors often have bonds of $250 to $1,500. Simple battery, petty theft, and trespassing generally fall in the lower range. The bondsman\'s Florida-regulated premium is exactly 10% of the bond amount — so most misdemeanor bonds cost $50 to $500 in premium.',
    ],
    [
        'q' => 'How fast can someone be released on a misdemeanor bail bond in Delray Beach, FL?',
        'a' => 'Misdemeanor releases are typically the fastest in the Florida jail system. At most Palm Beach County facilities, release processing after bond posting takes 2 to 6 hours. Some city lockups in Delray Beach and Boca Raton process even faster. We begin release paperwork the moment you contact us so there is no delay on our end when the bond is ready to post.',
    ],
    [
        'q' => 'Can someone be arrested for a misdemeanor and released the same night in South Florida?',
        'a' => 'Yes, same-night release on a misdemeanor is common and achievable in most South Florida jurisdictions. If you call us immediately after the arrest, we can often have the bond posted and release processing started within the first hour of booking — making same-night release realistic for most standard misdemeanor charges across Palm Beach, Broward, and Miami-Dade counties.',
    ],
    [
        'q' => 'Do misdemeanor bail bonds require collateral in Florida?',
        'a' => 'Most misdemeanor bonds under $10,000 do not require collateral. The 10% premium and a signed indemnity agreement are typically all that is needed. For repeat offenders or cases involving flight-risk factors, a bondsman may request additional security — but for first-time misdemeanor arrests, this is rarely needed. Call us and we will tell you exactly what is required before you commit to anything.',
    ],
    [
        'q' => 'What misdemeanor charges does Mad Extra Bail Bonds handle in South Florida?',
        'a' => 'We handle bail bonds for all misdemeanor charge types in South Florida — including simple battery, petty theft, trespassing, disorderly conduct, driving with a suspended license, possession of marijuana under the personal-use threshold, domestic violence misdemeanors, and more. If the charge is a misdemeanor in Florida, we can post bail for it.',
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
   MISDEMEANOR BAIL BONDS — Mad Extra Bail Bonds
   Premium Tier | Dark/Neon Design System
   Techniques: layered hero radials, neon orbs, glassmorphism,
   dark process steps with magenta numbering, neon hover cards,
   FAQ accordion, SVG wave dividers, countdown-stat card,
   speed-emphasis trust badges, neon glow CTA
   ============================================================ */

/* ── 1. HERO ── */
.hero-misd {
  position: relative;
  min-height: 55vh;
  display: flex;
  align-items: center;
  background: #050810;
  overflow: hidden;
  padding-top: var(--nav-height, 72px);
  padding-bottom: var(--space-12);
}
/* Technique 1: ::before radial gradient — speed/urgency orientation */
.hero-misd::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 65% 75% at 3% 50%, rgba(229,53,231,0.22) 0%, transparent 62%),
    radial-gradient(ellipse 45% 55% at 90% 22%, rgba(249,183,62,0.15) 0%, transparent 58%),
    radial-gradient(ellipse 72% 44% at 50% 108%, rgba(5,8,16,0.99) 0%, transparent 80%);
  pointer-events: none;
}
/* Technique 2: noise texture */
.hero-misd::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.035'/%3E%3C/svg%3E");
  opacity: 0.55;
  pointer-events: none;
}
/* Technique 3: neon orbs — faster animation timing */
.misd-orb {
  position: absolute;
  border-radius: 50%;
  pointer-events: none;
  will-change: transform;
}
.misd-orb-1 {
  width: 480px; height: 480px;
  top: -150px; left: -100px;
  background: radial-gradient(circle, rgba(229,53,231,0.16) 0%, transparent 70%);
  animation: misd-orb-float 11s ease-in-out infinite;
}
.misd-orb-2 {
  width: 340px; height: 340px;
  bottom: -45px; right: 8%;
  background: radial-gradient(circle, rgba(249,183,62,0.12) 0%, transparent 70%);
  animation: misd-orb-float 15s ease-in-out infinite reverse;
  animation-delay: -5s;
}
@keyframes misd-orb-float {
  0%,100% { transform: translate(0,0) scale(1); }
  40%     { transform: translate(11px,-15px) scale(1.04); }
  70%     { transform: translate(-8px,10px) scale(0.97); }
}
.hero-misd-inner {
  position: relative;
  z-index: 2;
  display: grid;
  grid-template-columns: 1fr 400px;
  gap: var(--space-12);
  align-items: center;
  padding: var(--space-12) 0;
  width: 100%;
}
.hero-misd-left { max-width: 620px; }

.misd-eyebrow {
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
.misd-eyebrow .pulse-dot {
  width: 7px; height: 7px;
  border-radius: 50%;
  background: var(--color-secondary);
  box-shadow: 0 0 8px var(--color-secondary);
  animation: misd-pulse 2s ease-in-out infinite;
  flex-shrink: 0;
}
@keyframes misd-pulse {
  0%,100% { opacity:1; transform:scale(1); }
  50%     { opacity:.55; transform:scale(.7); }
}

.hero-misd h1 {
  font-size: clamp(1.85rem, 3.8vw, 3.1rem);
  font-weight: 900;
  color: #fff;
  line-height: 1.1;
  margin-bottom: var(--space-5);
  letter-spacing: -0.025em;
  text-wrap: balance;
}
.hero-misd h1 .hl-gold { color: var(--color-accent); text-shadow: 0 0 28px rgba(249,183,62,0.5); }
.hero-misd h1 .hl-mag  { color: var(--color-secondary); text-shadow: 0 0 28px rgba(229,53,231,0.5); }

.hero-misd .hero-answer {
  font-size: 1rem;
  color: rgba(255,255,255,0.66);
  line-height: 1.8;
  margin-bottom: var(--space-7);
  max-width: 560px;
}
.hero-misd-btns {
  display: flex;
  gap: var(--space-3);
  flex-wrap: wrap;
  margin-bottom: var(--space-7);
}
.btn-misd-primary {
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
.btn-misd-primary:hover {
  background: #f043f2;
  box-shadow: 0 0 44px rgba(229,53,231,0.68), 0 8px 22px rgba(0,0,0,0.35);
  transform: translateY(-2px);
  color: #fff;
}
.btn-misd-primary svg { width: 15px; height: 15px; }
.btn-misd-secondary {
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
.btn-misd-secondary:hover {
  background: var(--color-accent);
  color: #0a0d1a;
  border-color: var(--color-accent);
  box-shadow: 0 0 26px rgba(249,183,62,0.4);
  transform: translateY(-2px);
}
.misd-trust-row {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-2);
}
.misd-htb {
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
.misd-htb svg { width: 11px; height: 11px; color: var(--color-accent); flex-shrink: 0; }

/* Technique 4: glassmorphism hero sidebar — speed emphasis */
.hero-misd-card {
  position: relative;
  background: rgba(255,255,255,0.04);
  border: 1px solid rgba(255,255,255,0.11);
  border-radius: 18px;
  padding: var(--space-7) var(--space-6);
  backdrop-filter: blur(14px);
  -webkit-backdrop-filter: blur(14px);
}
.hero-misd-card::before {
  content: '';
  position: absolute;
  inset: -1px;
  border-radius: 19px;
  background: linear-gradient(135deg, rgba(229,53,231,0.4) 0%, rgba(249,183,62,0.2) 50%, transparent 100%);
  z-index: -1;
  opacity: 0.5;
}
.hmc-title { font-family: var(--font-heading); font-size: 1.05rem; font-weight: 800; color: #fff; margin-bottom: var(--space-2); }
.hmc-note { font-size: 0.68rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1.5px; color: var(--color-secondary); margin-bottom: var(--space-5); }
.hmc-list {
  list-style: none; padding: 0; margin: 0 0 var(--space-6);
  display: flex; flex-direction: column; gap: var(--space-3);
}
.hmc-list li {
  display: flex; align-items: flex-start; gap: var(--space-2);
  font-size: 0.85rem; color: rgba(255,255,255,0.8); line-height: 1.5;
}
.hmc-check {
  display: inline-flex; align-items: center; justify-content: center;
  flex-shrink: 0; width: 18px; height: 18px;
  border-radius: 50%;
  background: linear-gradient(135deg, var(--color-secondary), var(--color-accent));
  font-size: 0.6rem; color: #fff; font-weight: 900; margin-top: 2px;
}
.hmc-cta {
  display: block; width: 100%; padding: 13px;
  background: linear-gradient(135deg, var(--color-secondary) 0%, #b515b7 100%);
  color: #fff; font-family: var(--font-heading); font-size: 0.82rem;
  font-weight: 800; text-transform: uppercase; letter-spacing: 1.5px;
  border-radius: var(--radius-md); text-decoration: none; text-align: center;
  box-shadow: 0 4px 22px rgba(229,53,231,0.42); transition: all var(--transition-base);
}
.hmc-cta:hover { box-shadow: 0 8px 34px rgba(229,53,231,0.62); transform: translateY(-1px); color: #fff; }
.hmc-disclaimer { text-align: center; font-size: 0.6rem; color: rgba(255,255,255,0.3); margin-top: var(--space-3); line-height: 1.5; }

/* ── 2. SVG DIVIDERS ── */
.div-misd-to-light { line-height: 0; background: #050810; }
.div-misd-to-light svg { display: block; width: 100%; }
.div-misd-to-dark { line-height: 0; background: #f4f6f9; }
.div-misd-to-dark svg { display: block; width: 100%; }
.div-misd-to-white { line-height: 0; background: #050810; }
.div-misd-to-white svg { display: block; width: 100%; }
.div-misd-faq { line-height: 0; background: #fff; }
.div-misd-faq svg { display: block; width: 100%; }

/* ── 3. INTRO / ANSWER ── */
.intro-misd { padding: var(--space-16) 0; background: #f4f6f9; }
.intro-misd-inner { max-width: 860px; margin: 0 auto; }
.misd-section-eyebrow {
  display: inline-flex; align-items: center; gap: 8px;
  font-family: var(--font-heading); font-size: 0.68rem; font-weight: 800;
  text-transform: uppercase; letter-spacing: 3px; color: var(--color-secondary);
  padding: 5px 14px; border: 1px solid rgba(229,53,231,0.28);
  border-radius: var(--radius-full); background: rgba(229,53,231,0.06); margin-bottom: var(--space-4);
}
.intro-misd h2 {
  font-size: clamp(1.65rem, 2.8vw, 2.35rem); font-weight: 900;
  color: #1a2340; line-height: 1.15; text-wrap: balance; letter-spacing: -0.02em; margin-bottom: var(--space-4);
}
.intro-misd h2 em { color: var(--color-secondary); font-style: normal; }
.answer-block-misd {
  background: linear-gradient(135deg, rgba(229,53,231,0.07), rgba(249,183,62,0.04));
  border-left: 3px solid var(--color-secondary);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  padding: var(--space-5) var(--space-6); margin-bottom: var(--space-6);
}
.answer-block-misd p { font-size: 0.95rem; color: #1a2340; line-height: 1.8; margin: 0; font-style: italic; }
.intro-misd p.prose { font-size: 0.95rem; color: #4a5568; line-height: 1.82; margin-bottom: var(--space-4); max-width: 65ch; }

/* ── 4. PROCESS SECTION ── */
/* Technique 5: dark bg, magenta step numbers, speed-focused layout */
.process-misd {
  padding: var(--space-16) 0;
  background: linear-gradient(135deg, #050810 0%, #110528 55%, #060d1e 100%);
  position: relative; overflow: hidden;
}
.process-misd::before {
  content: '';
  position: absolute; inset: 0;
  background:
    radial-gradient(ellipse 50% 70% at 5% 50%, rgba(229,53,231,0.13) 0%, transparent 60%),
    radial-gradient(ellipse 44% 60% at 95% 50%, rgba(249,183,62,0.09) 0%, transparent 60%);
  pointer-events: none;
}
.process-misd-grid {
  display: grid; grid-template-columns: 1fr 1fr;
  gap: var(--space-16); align-items: start; position: relative; z-index: 1;
}
.process-misd-eyebrow {
  display: inline-flex; align-items: center; gap: 8px;
  font-family: var(--font-heading); font-size: 0.68rem; font-weight: 800;
  text-transform: uppercase; letter-spacing: 3px; color: var(--color-secondary);
  padding: 5px 14px; border: 1px solid rgba(229,53,231,0.28);
  border-radius: var(--radius-full); background: rgba(229,53,231,0.07); margin-bottom: var(--space-4);
}
.process-misd h2 {
  font-size: clamp(1.55rem, 2.8vw, 2.2rem); font-weight: 900;
  color: #fff; line-height: 1.15; text-wrap: balance; letter-spacing: -0.02em; margin-bottom: var(--space-3);
}
.process-misd h2 em { color: var(--color-accent); font-style: normal; }
.answer-block-dark-misd {
  background: rgba(255,255,255,0.04);
  border-left: 3px solid var(--color-secondary);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  padding: var(--space-4) var(--space-5); margin-bottom: var(--space-6);
}
.answer-block-dark-misd p { font-size: 0.88rem; color: rgba(255,255,255,0.72); line-height: 1.8; margin: 0; font-style: italic; }
.process-misd-steps { display: flex; flex-direction: column; gap: var(--space-5); }
.process-misd-step { display: flex; gap: var(--space-5); align-items: flex-start; }
.misd-step-num {
  flex-shrink: 0; width: 40px; height: 40px; border-radius: 50%;
  background: linear-gradient(135deg, var(--color-secondary) 0%, #8f08a0 100%);
  display: flex; align-items: center; justify-content: center;
  font-family: var(--font-heading); font-size: 0.85rem; font-weight: 900; color: #fff;
  box-shadow: 0 0 18px rgba(229,53,231,0.32);
}
.misd-step-content h4 { font-size: 0.92rem; font-weight: 800; color: #fff; margin-bottom: var(--space-1); }
.misd-step-content p { font-size: 0.83rem; color: rgba(255,255,255,0.56); line-height: 1.7; margin: 0; }

/* Technique 6: glassmorphism speed card with large time stats */
.misd-process-sidebar { padding-top: var(--space-4); }
.misd-pss-card {
  background: rgba(255,255,255,0.04);
  border: 1px solid rgba(255,255,255,0.09);
  border-radius: 18px; padding: var(--space-8);
  backdrop-filter: blur(10px); position: relative; overflow: hidden;
}
.misd-pss-card::before {
  content: ''; position: absolute; top: -60px; right: -60px;
  width: 240px; height: 240px; border-radius: 50%;
  background: radial-gradient(circle, rgba(229,53,231,0.14) 0%, transparent 68%);
  pointer-events: none;
}
.misd-pss-card::after {
  content: ''; position: absolute; bottom: -55px; left: -55px;
  width: 200px; height: 200px; border-radius: 50%;
  background: radial-gradient(circle, rgba(249,183,62,0.11) 0%, transparent 68%);
  pointer-events: none;
}
.misd-pss-title {
  font-family: var(--font-heading); font-size: 1rem; font-weight: 800;
  color: #fff; margin-bottom: var(--space-5); position: relative; z-index: 1;
}
.misd-time-stat {
  text-align: center; padding: var(--space-6);
  background: rgba(255,255,255,0.04); border-radius: var(--radius-lg);
  border: 1px solid rgba(255,255,255,0.07); margin-bottom: var(--space-4);
  position: relative; z-index: 1;
}
.misd-time-num {
  font-family: var(--font-heading); font-size: 3rem; font-weight: 900;
  background: linear-gradient(135deg, var(--color-secondary) 0%, var(--color-accent) 100%);
  -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;
  line-height: 1; display: block; margin-bottom: var(--space-1);
}
.misd-time-lbl {
  font-family: var(--font-heading); font-size: 0.65rem; font-weight: 700;
  text-transform: uppercase; letter-spacing: 2px; color: rgba(255,255,255,0.45);
}
.misd-pss-facts {
  display: flex; flex-direction: column; gap: var(--space-3);
  margin-bottom: var(--space-6); position: relative; z-index: 1;
}
.misd-pss-fact {
  display: flex; align-items: flex-start; gap: var(--space-3);
  padding: var(--space-3) var(--space-4);
  background: rgba(255,255,255,0.04); border-radius: var(--radius-md);
  border: 1px solid rgba(255,255,255,0.06);
}
.misd-pss-fact svg { width: 16px; height: 16px; color: var(--color-accent); flex-shrink: 0; margin-top: 1px; }
.misd-pss-fact span { font-size: 0.78rem; color: rgba(255,255,255,0.72); line-height: 1.5; }
.misd-pss-cta {
  display: block; width: 100%; padding: 13px;
  background: linear-gradient(135deg, var(--color-secondary) 0%, #b515b7 100%);
  color: #fff; font-family: var(--font-heading); font-size: 0.82rem;
  font-weight: 800; text-transform: uppercase; letter-spacing: 1.5px;
  border-radius: var(--radius-md); text-decoration: none; text-align: center;
  box-shadow: 0 4px 22px rgba(229,53,231,0.4); transition: all var(--transition-base);
  position: relative; z-index: 1;
}
.misd-pss-cta:hover { box-shadow: 0 8px 32px rgba(229,53,231,0.62); transform: translateY(-1px); color: #fff; }

/* ── 5. BENEFITS ── */
.benefits-misd { padding: var(--space-16) 0; background: #fff; }
.benefits-misd-header { text-align: center; margin-bottom: var(--space-12); }
.benefits-misd h2 {
  font-size: clamp(1.65rem, 2.8vw, 2.35rem); font-weight: 900;
  color: #1a2340; line-height: 1.15; text-wrap: balance; letter-spacing: -0.02em; margin-bottom: var(--space-3);
}
.benefits-misd h2 em { color: var(--color-secondary); font-style: normal; }
.benefits-misd-lead { font-size: 0.95rem; color: #4a5568; max-width: 500px; margin: 0 auto; line-height: 1.75; }
/* Technique 7: benefit cards — speed indicators */
.benefits-misd-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; }
.benefit-misd-card {
  background: #f7f8fb; border: 1px solid rgba(229,53,231,0.1);
  border-radius: var(--radius-lg); padding: var(--space-7) var(--space-6);
  transition: transform var(--transition-base), box-shadow var(--transition-base), border-color var(--transition-base);
  position: relative; overflow: hidden;
}
.benefit-misd-card::after {
  content: ''; position: absolute; bottom: 0; left: 0; right: 0;
  height: 2px; background: linear-gradient(90deg, var(--color-secondary), var(--color-accent));
  transform: scaleX(0); transform-origin: left; transition: transform var(--transition-base);
}
.benefit-misd-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 14px 35px rgba(229,53,231,0.13), 0 4px 10px rgba(0,0,0,0.06);
  border-color: rgba(229,53,231,0.25);
}
.benefit-misd-card:hover::after { transform: scaleX(1); }
.bmc-icon {
  width: 50px; height: 50px; border-radius: 50%;
  background: linear-gradient(135deg, rgba(229,53,231,0.12), rgba(249,183,62,0.07));
  border: 1px solid rgba(229,53,231,0.18);
  display: flex; align-items: center; justify-content: center;
  margin-bottom: var(--space-4); color: var(--color-secondary);
}
.bmc-icon svg { width: 22px; height: 22px; }
.benefit-misd-card h4 { font-size: 0.92rem; font-weight: 800; color: #1a2340; margin-bottom: var(--space-2); }
.benefit-misd-card p { font-size: 0.84rem; color: #4a5568; line-height: 1.7; margin: 0; }

/* ── 6. FAQ ── */
.faq-misd { padding: var(--space-16) 0; background: #f4f6f9; }
.faq-misd-inner { max-width: 820px; margin: 0 auto; }
.faq-misd h2 {
  font-size: clamp(1.55rem, 2.6vw, 2.15rem); font-weight: 900;
  color: #1a2340; line-height: 1.15; text-wrap: balance; letter-spacing: -0.02em; margin-bottom: var(--space-3);
}
.faq-misd h2 em { color: var(--color-secondary); font-style: normal; }
.faq-misd-sub { font-size: 0.92rem; color: #4a5568; margin-bottom: var(--space-10); line-height: 1.75; }
.faq-misd-list { display: flex; flex-direction: column; gap: var(--space-3); }
/* Technique 8: FAQ accordion */
.faq-misd-item {
  background: #fff; border: 1px solid rgba(229,53,231,0.12);
  border-radius: var(--radius-lg); overflow: hidden;
  transition: border-color var(--transition-base), box-shadow var(--transition-base);
}
.faq-misd-item.open { border-color: rgba(229,53,231,0.38); box-shadow: 0 4px 18px rgba(229,53,231,0.09); }
.faq-misd-q {
  display: flex; align-items: center; justify-content: space-between;
  gap: var(--space-4); padding: var(--space-5) var(--space-6);
  cursor: pointer; background: transparent; border: none; width: 100%;
  text-align: left; font-family: var(--font-heading); font-size: 0.92rem;
  font-weight: 700; color: #1a2340; transition: color var(--transition-fast); user-select: none;
}
.faq-misd-q:hover { color: var(--color-secondary); }
.faq-misd-item.open .faq-misd-q { color: var(--color-secondary); }
.faq-misd-icon {
  flex-shrink: 0; width: 26px; height: 26px; border-radius: 50%;
  background: rgba(229,53,231,0.08); border: 1px solid rgba(229,53,231,0.18);
  display: flex; align-items: center; justify-content: center;
  transition: background var(--transition-base), transform var(--transition-base);
  font-size: 0.95rem; color: var(--color-secondary); font-weight: 900;
}
.faq-misd-item.open .faq-misd-icon { background: var(--color-secondary); color: #fff; transform: rotate(45deg); }
.faq-misd-a {
  display: none; padding: 0 var(--space-6) var(--space-5);
  font-size: 0.88rem; color: #4a5568; line-height: 1.8;
  border-top: 1px solid rgba(229,53,231,0.07); padding-top: var(--space-4);
}
.faq-misd-item.open .faq-misd-a { display: block; }

/* ── 7. RELATED ── */
.related-misd { padding: var(--space-14) 0; background: #fff; }
.related-misd-h3 {
  font-size: clamp(1.45rem, 2.4vw, 1.95rem); font-weight: 900;
  color: #1a2340; text-align: center; margin-bottom: var(--space-2); text-wrap: balance;
}
.related-misd-sub { text-align: center; font-size: 0.9rem; color: #4a5568; margin-bottom: var(--space-10); }
.related-misd-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; }
.rmd-card {
  border-radius: var(--radius-lg); overflow: hidden; display: flex; flex-direction: column;
  border: 1px solid rgba(229,53,231,0.1); background: #fff;
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.rmd-card:hover { transform: translateY(-5px); box-shadow: 0 14px 35px rgba(229,53,231,0.14), 0 4px 10px rgba(0,0,0,0.06); }
.rmd-banner { height: 80px; display: flex; align-items: center; justify-content: center; }
.rmd-card.t1 .rmd-banner { background: linear-gradient(145deg, #050810, #190638); }
.rmd-card.t2 .rmd-banner { background: linear-gradient(145deg, #0d1520, #1a2b3c); }
.rmd-card.t3 .rmd-banner { background: linear-gradient(145deg, #0f0818, #2a0a38); }
.rmd-icon-ring {
  width: 46px; height: 46px; border-radius: 50%;
  border: 1px solid rgba(255,255,255,0.15); background: rgba(255,255,255,0.07);
  display: flex; align-items: center; justify-content: center;
}
.rmd-icon-ring svg { width: 22px; height: 22px; color: var(--color-accent); }
.rmd-body { padding: var(--space-5); flex: 1; display: flex; flex-direction: column; }
.rmd-body h3 { font-size: 0.9rem; font-weight: 800; color: #1a2340; margin-bottom: var(--space-2); }
.rmd-body p { font-size: 0.8rem; color: #4a5568; line-height: 1.65; flex: 1; margin-bottom: var(--space-4); }
.rmd-link {
  display: inline-flex; align-items: center; gap: 4px;
  font-size: 0.78rem; font-weight: 800; color: var(--color-secondary);
  text-decoration: none; transition: gap var(--transition-fast);
}
.rmd-link:hover { gap: 8px; }
.rmd-link svg { width: 14px; height: 14px; }

/* ── 8. CTA ── */
.cta-misd {
  padding: var(--space-14) 0;
  background: linear-gradient(135deg, #050810 0%, #160528 55%, #060d1e 100%);
  position: relative; overflow: hidden; text-align: center;
}
.cta-misd::before {
  content: ''; position: absolute; inset: 0;
  background:
    radial-gradient(ellipse 55% 78% at 18% 50%, rgba(229,53,231,0.14) 0%, transparent 58%),
    radial-gradient(ellipse 48% 68% at 82% 50%, rgba(249,183,62,0.1) 0%, transparent 58%);
  pointer-events: none;
}
.cta-misd-inner { position: relative; z-index: 1; max-width: 560px; margin: 0 auto; }
.cta-misd h2 {
  font-size: clamp(1.5rem, 2.8vw, 2.2rem); font-weight: 900;
  color: #fff; text-wrap: balance; margin-bottom: var(--space-3);
}
.cta-misd h2 em { color: var(--color-accent); font-style: normal; }
.cta-misd p { font-size: 0.95rem; color: rgba(255,255,255,0.56); max-width: 440px; margin: 0 auto var(--space-7); line-height: 1.75; }
.cta-misd-btns { display: flex; gap: var(--space-3); justify-content: center; flex-wrap: wrap; }

/* ── RESPONSIVE ── */
@media (max-width: 1024px) {
  .hero-misd-inner { grid-template-columns: 1fr; }
  .hero-misd-card { display: none; }
  .process-misd-grid { grid-template-columns: 1fr; gap: var(--space-10); }
}
@media (max-width: 768px) {
  .benefits-misd-grid { grid-template-columns: repeat(2, 1fr); }
  .related-misd-grid { grid-template-columns: 1fr; }
}
@media (max-width: 480px) {
  .benefits-misd-grid { grid-template-columns: 1fr; }
}
</style>

<!-- ═══ HERO ═══ -->
<section class="hero-misd" aria-label="Misdemeanor bail bonds South Florida">
  <div class="misd-orb misd-orb-1"></div>
  <div class="misd-orb misd-orb-2"></div>

  <div class="container">
    <div class="hero-misd-inner">
      <div class="hero-misd-left">
        <span class="misd-eyebrow">
          <span class="pulse-dot"></span>
          Fast Release · 24/7 · South Florida
        </span>
        <h1>
          <span class="hl-gold">Misdemeanor Bail Bonds</span> Near Me —<br>
          <span class="hl-mag">Same-Night Release</span> Possible in South Florida
        </h1>
        <p class="hero-answer">Mad Extra Bail Bonds is a licensed Florida bail bondsman based in Delray Beach, providing fast misdemeanor bail bonds across Palm Beach, Broward, and Miami-Dade County. Most misdemeanor arrests release within 2 to 6 hours of posting bond — call us immediately after arrest and we move right away, 24 hours a day.</p>
        <div class="hero-misd-btns">
          <?php if (!empty($phone)): ?>
          <a href="tel:<?php echo preg_replace('/\D/','',$phone); ?>" class="btn-misd-primary">
            <?php echo lucide_icon('phone'); ?> Call Now — 24/7
          </a>
          <?php else: ?>
          <a href="/contact/" class="btn-misd-primary">
            <?php echo lucide_icon('zap'); ?> Get Help Now
          </a>
          <?php endif; ?>
          <a href="/contact/" class="btn-misd-secondary">Free Consultation</a>
        </div>
        <div class="misd-trust-row">
          <span class="misd-htb"><?php echo lucide_icon('zap'); ?> Same-Night Release Possible</span>
          <span class="misd-htb"><?php echo lucide_icon('shield-check'); ?> Licensed FL Bondsman</span>
          <span class="misd-htb"><?php echo lucide_icon('clock'); ?> 24/7 Response</span>
          <span class="misd-htb"><?php echo lucide_icon('dollar-sign'); ?> Lowest FL Legal Rate</span>
        </div>
      </div>

      <div class="hero-misd-card">
        <p class="hmc-title">Out Tonight — It's Possible.</p>
        <p class="hmc-note">Fast 24/7 misdemeanor bonds</p>
        <ul class="hmc-list">
          <li><span class="hmc-check">✓</span> 2–6 hour release at most facilities</li>
          <li><span class="hmc-check">✓</span> All misdemeanor charge types</li>
          <li><span class="hmc-check">✓</span> 10% Florida legal premium</li>
          <li><span class="hmc-check">✓</span> No collateral on most misdemeanor bonds</li>
          <li><span class="hmc-check">✓</span> Licensed bail bondsman on standby now</li>
        </ul>
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo preg_replace('/\D/','',$phone); ?>" class="hmc-cta">
          <?php echo lucide_icon('phone'); ?> Call Now
        </a>
        <?php else: ?>
        <a href="/contact/" class="hmc-cta">Get Out Tonight</a>
        <?php endif; ?>
        <p class="hmc-disclaimer">Available every hour — Delray Beach, Palm Beach, Broward, Miami-Dade</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SVG DIVIDER ═══ -->
<div class="div-misd-to-light" aria-hidden="true">
  <svg viewBox="0 0 1440 55" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,55 L0,14 Q480,58 720,24 Q960,0 1440,36 L1440,55 Z" fill="#f4f6f9"/>
  </svg>
</div>

<!-- ═══ INTRO / ANSWER ═══ -->
<section class="intro-misd" aria-label="Misdemeanor bail bond overview">
  <div class="container">
    <div class="intro-misd-inner">
      <span class="misd-section-eyebrow">About This Service</span>
      <h2>How much does a misdemeanor bail bond cost in South Florida?</h2>
      <div class="answer-block-misd">
        <p>Misdemeanor bail amounts in South Florida typically range from $250 to $5,000 depending on the charge and the defendant's record. Florida sets the bondsman's premium at exactly 10% of the bond amount — so most misdemeanor bonds cost $25 to $500 in premium. No collateral is required in most cases, and no hidden fees. Payment is straightforward and fast.</p>
      </div>
      <p class="prose">Mad Extra Bail Bonds handles misdemeanor bail bonds across Delray Beach and all of South Florida — from first-degree misdemeanors like simple battery and domestic incidents to second-degree charges like petty theft, disorderly conduct, and trespassing. We know the release timelines at each facility and begin your paperwork the moment you call.</p>
      <p class="prose">Misdemeanor arrests in Delray Beach are processed through the Palm Beach County Jail in West Palm Beach or the South County Jail facility. We are familiar with both and post bail at either location 24 hours a day, 7 days a week.</p>
    </div>
  </div>
</section>

<!-- ═══ SVG DIVIDER ═══ -->
<div class="div-misd-to-dark" aria-hidden="true">
  <svg viewBox="0 0 1440 55" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,0 Q380,55 720,26 Q1060,0 1440,42 L1440,55 L0,55 Z" fill="#050810"/>
  </svg>
</div>

<!-- ═══ PROCESS SECTION ═══ -->
<section class="process-misd" aria-label="Misdemeanor bail bond process">
  <div class="container">
    <div class="process-misd-grid">
      <div>
        <span class="process-misd-eyebrow"><?php echo lucide_icon('zap'); ?> The Process</span>
        <h2>How fast can someone get out of jail on a misdemeanor in <em>Delray Beach, FL?</em></h2>
        <div class="answer-block-dark-misd">
          <p>Most misdemeanor arrests in the Delray Beach area release within 2 to 6 hours of bond being posted at the Palm Beach County Jail. Same-night release is achievable for the majority of misdemeanor charges when you call us immediately. We start paperwork the moment we hear from you — no waiting, no delays on our end.</p>
        </div>
        <div class="process-misd-steps">
          <div class="process-misd-step">
            <div class="misd-step-num">1</div>
            <div class="misd-step-content">
              <h4>Call Right After the Arrest</h4>
              <p>The sooner you call, the sooner we move. Tell us the charge, the jail, and any known bond amount — we get started immediately.</p>
            </div>
          </div>
          <div class="process-misd-step">
            <div class="misd-step-num">2</div>
            <div class="misd-step-content">
              <h4>We Verify the Bond Amount</h4>
              <p>We confirm the bail with the facility. Most misdemeanor bonds are set at first appearance or on a preset schedule — no hearing required.</p>
            </div>
          </div>
          <div class="process-misd-step">
            <div class="misd-step-num">3</div>
            <div class="misd-step-content">
              <h4>Sign & Pay — No Collateral Needed</h4>
              <p>Florida's 10% premium is all that's needed for most misdemeanor bonds. No collateral, no complex paperwork, no delay.</p>
            </div>
          </div>
          <div class="process-misd-step">
            <div class="misd-step-num">4</div>
            <div class="misd-step-content">
              <h4>Release Begins — Home Tonight</h4>
              <p>The jail begins processing release after bond is posted. Most misdemeanor releases complete in 2 to 6 hours — same night in most cases.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="misd-process-sidebar">
        <div class="misd-pss-card">
          <p class="misd-pss-title">Typical Misdemeanor Release Time</p>
          <div class="misd-time-stat">
            <span class="misd-time-num">2–6</span>
            <span class="misd-time-lbl">Hours Average Release Time</span>
          </div>
          <div class="misd-pss-facts">
            <div class="misd-pss-fact">
              <?php echo lucide_icon('dollar-sign'); ?>
              <span>10% Florida legal premium — fixed statewide, no hidden fees</span>
            </div>
            <div class="misd-pss-fact">
              <?php echo lucide_icon('shield-check'); ?>
              <span>No collateral required on most misdemeanor bonds under $10,000</span>
            </div>
            <div class="misd-pss-fact">
              <?php echo lucide_icon('clock'); ?>
              <span>Available 24 hours a day — misdemeanor arrests happen at all hours</span>
            </div>
            <div class="misd-pss-fact">
              <?php echo lucide_icon('landmark'); ?>
              <span>All Palm Beach, Broward, and Miami-Dade jails covered</span>
            </div>
          </div>
          <?php if (!empty($phone)): ?>
          <a href="tel:<?php echo preg_replace('/\D/','',$phone); ?>" class="misd-pss-cta">
            <?php echo lucide_icon('phone'); ?> Call Now — 24/7
          </a>
          <?php else: ?>
          <a href="/contact/" class="misd-pss-cta">Get Out Tonight</a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SVG DIVIDER ═══ -->
<div class="div-misd-to-white" aria-hidden="true">
  <svg viewBox="0 0 1440 55" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,0 Q720,55 1440,12 L1440,55 L0,55 Z" fill="#ffffff"/>
  </svg>
</div>

<!-- ═══ BENEFITS ═══ -->
<section class="benefits-misd" aria-label="Misdemeanor bail bond benefits">
  <div class="container">
    <div class="benefits-misd-header">
      <span class="misd-section-eyebrow">Why Choose Mad Extra</span>
      <h2>What makes <em>Mad Extra Bail Bonds</em> the fastest option for misdemeanor bonds in South Florida?</h2>
      <p class="benefits-misd-lead">Speed, simplicity, and a licensed bondsman who acts immediately — here's why families call Mad Extra for misdemeanor bonds.</p>
    </div>
    <div class="benefits-misd-grid">
      <div class="benefit-misd-card">
        <div class="bmc-icon"><?php echo lucide_icon('zap'); ?></div>
        <h4>Same-Night Release Achievable</h4>
        <p>For most misdemeanors we can have bond posted and release processing started within an hour of your call.</p>
      </div>
      <div class="benefit-misd-card">
        <div class="bmc-icon"><?php echo lucide_icon('dollar-sign'); ?></div>
        <h4>Lowest Legal Premium Rate</h4>
        <p>Florida law sets the premium at exactly 10% — the same rate across every licensed bondsman in the state. No markup, no surprise fees.</p>
      </div>
      <div class="benefit-misd-card">
        <div class="bmc-icon"><?php echo lucide_icon('shield'); ?></div>
        <h4>No Collateral on Most Bonds</h4>
        <p>Misdemeanor bonds under $10,000 rarely require collateral. Sign, pay the premium, and we post the bond.</p>
      </div>
      <div class="benefit-misd-card">
        <div class="bmc-icon"><?php echo lucide_icon('clock'); ?></div>
        <h4>24/7 Availability</h4>
        <p>Misdemeanor arrests happen after bars close, on weekends, on holidays. We answer every call every hour of the day.</p>
      </div>
      <div class="benefit-misd-card">
        <div class="bmc-icon"><?php echo lucide_icon('landmark'); ?></div>
        <h4>All Charge Types Handled</h4>
        <p>Battery, petty theft, disorderly conduct, trespassing, suspended license — every misdemeanor charge in Florida.</p>
      </div>
      <div class="benefit-misd-card">
        <div class="bmc-icon"><?php echo lucide_icon('shield-check'); ?></div>
        <h4>Licensed FL Bondsman</h4>
        <p>Licensed by the Florida Department of Financial Services. Serving South Florida families for over 11 years.</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SVG DIVIDER ═══ -->
<div class="div-misd-faq" aria-hidden="true">
  <svg viewBox="0 0 1440 40" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,18 Q380,42 720,8 Q1060,-10 1440,20 L1440,40 L0,40 Z" fill="#f4f6f9"/>
  </svg>
</div>

<!-- ═══ FAQ ═══ -->
<section class="faq-misd" aria-label="Misdemeanor bail bond FAQ">
  <div class="container">
    <div class="faq-misd-inner">
      <span class="misd-section-eyebrow">Common Questions</span>
      <h2>Frequently asked questions about <em>misdemeanor bail bonds</em> in South Florida</h2>
      <p class="faq-misd-sub">Straight answers to what families ask most about misdemeanor arrests and bail.</p>
      <div class="faq-misd-list" role="list">
        <?php foreach ($_faqs as $faq): ?>
        <div class="faq-misd-item" role="listitem">
          <button class="faq-misd-q" aria-expanded="false" onclick="toggleFaqMisd(this)">
            <?php echo htmlspecialchars($faq['q']); ?>
            <span class="faq-misd-icon" aria-hidden="true">+</span>
          </button>
          <div class="faq-misd-a" role="region">
            <p><?php echo htmlspecialchars($faq['a']); ?></p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- ═══ RELATED SERVICES ═══ -->
<section class="related-misd" aria-label="Related bail bond services">
  <div class="container">
    <h3 class="related-misd-h3">Other Services You May Need</h3>
    <p class="related-misd-sub">Mad Extra Bail Bonds handles every type of bail bond across South Florida — 24/7.</p>
    <div class="related-misd-grid">
      <article class="rmd-card t1">
        <div class="rmd-banner"><div class="rmd-icon-ring"><?php echo lucide_icon('shield'); ?></div></div>
        <div class="rmd-body">
          <h3>Bail Bond Services</h3>
          <p>General criminal bail bonds for any charge at any South Florida facility.</p>
          <a href="/services/bail-bonds/" class="rmd-link">Learn more <?php echo lucide_icon('arrow-right'); ?></a>
        </div>
      </article>
      <article class="rmd-card t2">
        <div class="rmd-banner"><div class="rmd-icon-ring"><?php echo lucide_icon('car'); ?></div></div>
        <div class="rmd-body">
          <h3>DUI Bail Bonds</h3>
          <p>DUI arrests are common misdemeanors in South Florida — we know the DUI bail process cold.</p>
          <a href="/services/dui-bail-bonds/" class="rmd-link">Learn more <?php echo lucide_icon('arrow-right'); ?></a>
        </div>
      </article>
      <article class="rmd-card t3">
        <div class="rmd-banner"><div class="rmd-icon-ring"><?php echo lucide_icon('file-warning'); ?></div></div>
        <div class="rmd-body">
          <h3>Warrant & Traffic Bonds</h3>
          <p>Outstanding misdemeanor warrants resolved before they result in arrest.</p>
          <a href="/services/warrant-bail-bonds/" class="rmd-link">Learn more <?php echo lucide_icon('arrow-right'); ?></a>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- ═══ EMERGENCY CTA ═══ -->
<section class="cta-misd" aria-label="Emergency misdemeanor bail bond contact">
  <div class="cta-misd-inner">
    <h2>Need a misdemeanor bondsman in <em>South Florida</em> right now?</h2>
    <p>Same-night release on a misdemeanor is very achievable — but only if you call right away. We start moving the moment we hear from you. Call or contact us now.</p>
    <div class="cta-misd-btns">
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo preg_replace('/\D/','',$phone); ?>" class="btn-misd-primary">
        <?php echo lucide_icon('phone'); ?> Call Now — 24/7
      </a>
      <?php endif; ?>
      <a href="/contact/" class="btn-misd-secondary">Send a Message</a>
    </div>
  </div>
</section>

<script>
function toggleFaqMisd(btn) {
  const item = btn.closest('.faq-misd-item');
  const isOpen = item.classList.contains('open');
  document.querySelectorAll('.faq-misd-item.open').forEach(el => el.classList.remove('open'));
  document.querySelectorAll('.faq-misd-q').forEach(el => el.setAttribute('aria-expanded','false'));
  if (!isOpen) {
    item.classList.add('open');
    btn.setAttribute('aria-expanded','true');
  }
}
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
