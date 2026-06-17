<?php
/**
 * areas/hollywood/index.php — Hollywood Service Area Page
 * Mad Extra Bail Bonds | Page One Insights v6.1
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Bail Bonds Near Me in Hollywood FL | Mad Extra Bail Bonds | 24/7';
$pageDescription = 'Need bail bonds in Hollywood, FL? Mad Extra Bail Bonds serves Hollywood, FL with licensed 24/7 bail bond service. Fast release from Broward County Jail. Call now.';
$canonicalUrl    = $siteUrl . '/areas/hollywood/';
$currentPage     = 'areas';

$_breadcrumb = generateBreadcrumbSchema([
    ['name' => 'Home',          'url' => $siteUrl . '/'],
    ['name' => 'Service Areas', 'url' => $siteUrl . '/areas/'],
    ['name' => 'Hollywood',     'url' => $siteUrl . '/areas/hollywood/'],
]);

$_serviceSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'Service',
    '@id'         => $siteUrl . '/areas/hollywood/#service-hollywood',
    'name'        => 'Bail Bonds in Hollywood, FL',
    'description' => 'Licensed Florida bail bondsman serving Hollywood, FL and all of Broward County. Fast release from Broward County Main Jail, 24/7, any charge.',
    'url'         => $siteUrl . '/areas/hollywood/',
    'provider'    => ['@id' => $siteUrl . '/#organization'],
    'areaServed'  => [
        ['@type' => 'City',   'name' => 'Hollywood, FL'],
        ['@type' => 'County', 'name' => 'Broward County, FL'],
    ],
    'serviceType' => 'Bail Bond Services',
];

$_faqs = [
    [
        'q' => 'Can Mad Extra Bail Bonds help with an arrest near the Seminole Hard Rock Hotel in Hollywood, FL?',
        'a' => 'Yes. The Hard Rock Hotel and Casino complex in Hollywood is on Seminole Tribe of Florida land, but criminal matters outside the gaming floor and in the surrounding area are typically handled by Hollywood PD. Arrests in the Hard Rock vicinity often involve HPD and follow the standard Broward County jail process. We handle these situations regularly and know what to expect.',
    ],
    [
        'q' => 'How does a Hollywood, FL arrest differ from a Fort Lauderdale arrest in terms of bail?',
        'a' => 'Same county, same jail, same bond schedule. Hollywood has its own police department — HPD — but once HPD completes local booking, the defendant transfers to Broward County Main Jail in Fort Lauderdale, the same facility used for all Broward County arrests. Bond amounts are set by the Broward County bail schedule. The arrest location does not change the bail process. We work directly with HPD booking staff.',
    ],
    [
        'q' => 'What is the fastest way to get someone out of jail in Hollywood, FL after an arrest?',
        'a' => 'Call Mad Extra Bail Bonds immediately — do not wait for the jail to complete booking. HPD completes local booking at the Hollywood Police Department facility, then transfers the defendant to Broward County Main Jail. For misdemeanor charges we can often have bond posted within 2 to 4 hours of your call, with full release completing within 6 to 10 hours of the arrest.',
    ],
    [
        'q' => 'Are bail bonds available for BUI (boating under the influence) arrests in Hollywood waterways?',
        'a' => 'Yes. Hollywood\'s Intracoastal Waterway and coastal waters see Florida Fish and Wildlife Conservation Commission and BSO Marine Unit arrests for BUI throughout the year. Boating Under the Influence is a criminal charge under Florida law that requires court-set bond just like DUI. We handle BUI bonds in Hollywood and South Broward regularly.',
    ],
    [
        'q' => 'Can a tourist arrested in Hollywood, FL near the Broadwalk get a bail bond?',
        'a' => 'Yes. Tourist arrests in the Hollywood Beach Broadwalk area are especially common from May through September when the beach population spikes. We regularly help out-of-state families coordinate bail for arrests in the Hollywood Beach area — being out of state makes the process feel more overwhelming, and we walk families through every step from bond posting to the first court appearance.',
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
   HOLLYWOOD AREA PAGE — Mad Extra Bail Bonds
   Premium Tier | Dark/Neon Design System
   Techniques:
   (1) Hero: layered ::before radial-gradient (magenta-dominant) + ::after SVG noise
   (2) Floating neon orbs — 3 large orbs, magenta-dominant palette, slow drift
   (3) Glassmorphism hero sidebar card (backdrop-filter: blur(18px))
   (4) SVG wave dividers — 4 distinct shapes (stacked/sawtooth, smooth, S-curve, double-bump)
   (5) FAQ accordion: neon secondary border on .open + icon rotate 45deg
   (6) Service cards: neon bottom-border scaleX on hover (magenta → gold direction)
   (7) Gradient text on stat counters (magenta → gold)
   (8) Related areas: hover lift dark cards with gold top-border accent
   ============================================================ */

/* ── 1. HERO ── */
.hw-hero {
  position: relative;
  min-height: 62vh;
  display: flex;
  align-items: center;
  background: #09090f;
  overflow: hidden;
  padding-top: var(--nav-height, 72px);
  padding-bottom: var(--space-12);
}

/* Technique 1a: magenta-dominant radial gradient layers */
.hw-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 52% 78% at 95% 20%, rgba(229,53,231,0.22) 0%, transparent 55%),
    radial-gradient(ellipse 40% 60% at 5% 80%,  rgba(249,183,62,0.15) 0%, transparent 55%),
    radial-gradient(ellipse 75% 40% at 50% 115%, rgba(9,9,15,1.0) 0%, transparent 75%);
  pointer-events: none;
}

/* Technique 1b: noise texture */
.hw-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='hwn'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.88' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23hwn)' opacity='0.042'/%3E%3C/svg%3E");
  opacity: 0.5;
  pointer-events: none;
}

/* Technique 2: 3 large magenta-dominant floating orbs with slow drift */
.hw-orb {
  position: absolute;
  border-radius: 50%;
  pointer-events: none;
  will-change: transform;
}
.hw-orb-1 {
  width: 620px; height: 620px;
  top: -200px; right: -80px;
  background: radial-gradient(circle, rgba(229,53,231,0.15) 0%, transparent 62%);
  animation: hw-drift-slow 22s ease-in-out infinite;
}
.hw-orb-2 {
  width: 360px; height: 360px;
  bottom: -100px; left: 5%;
  background: radial-gradient(circle, rgba(249,183,62,0.11) 0%, transparent 65%);
  animation: hw-drift-slow 28s ease-in-out infinite reverse;
  animation-delay: -10s;
}
.hw-orb-3 {
  width: 240px; height: 240px;
  top: 40%; left: 30%;
  background: radial-gradient(circle, rgba(229,53,231,0.07) 0%, transparent 68%);
  animation: hw-drift-fast 16s ease-in-out infinite;
  animation-delay: -6s;
}
@keyframes hw-drift-slow {
  0%,100% { transform: translate(0,0) scale(1); }
  40%     { transform: translate(-20px, 28px) scale(1.05); }
  72%     { transform: translate(16px, -18px) scale(0.96); }
}
@keyframes hw-drift-fast {
  0%,100% { transform: translate(0,0) scale(1); }
  35%     { transform: translate(24px, -22px) scale(1.09); }
  70%     { transform: translate(-14px, 16px) scale(0.93); }
}

.hw-hero-inner {
  position: relative;
  z-index: 2;
  display: grid;
  grid-template-columns: 1fr 400px;
  gap: var(--space-14);
  align-items: center;
  padding: var(--space-12) 0;
  width: 100%;
}
.hw-hero-left { max-width: 640px; }

.hw-eyebrow {
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
  border: 1px solid rgba(229,53,231,0.40);
  border-radius: var(--radius-full);
  background: rgba(229,53,231,0.07);
  margin-bottom: var(--space-5);
}
.hw-pulse {
  width: 7px; height: 7px;
  border-radius: 50%;
  background: var(--color-secondary);
  box-shadow: 0 0 8px var(--color-secondary);
  animation: hw-pulse 2s ease-in-out infinite;
  flex-shrink: 0;
}
@keyframes hw-pulse {
  0%,100% { opacity:1; transform:scale(1); }
  50%     { opacity:.4; transform:scale(.65); }
}

.hw-hero h1 {
  font-size: clamp(1.85rem, 3.7vw, 3.05rem);
  font-weight: 900;
  color: var(--color-white);
  line-height: 1.1;
  margin-bottom: var(--space-5);
  letter-spacing: -0.025em;
  text-wrap: balance;
}
.hw-hero h1 .hl-gold { color: var(--color-accent); text-shadow: 0 0 28px rgba(249,183,62,0.55); }
.hw-hero h1 .hl-mag  { color: var(--color-secondary); text-shadow: 0 0 28px rgba(229,53,231,0.55); }

.hw-hero-lead {
  font-size: 1rem;
  color: rgba(255,255,255,0.65);
  line-height: 1.82;
  margin-bottom: var(--space-7);
  max-width: 560px;
}
.hw-hero-btns {
  display: flex;
  gap: var(--space-3);
  flex-wrap: wrap;
  margin-bottom: var(--space-7);
}
.btn-hw-primary {
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
  box-shadow: 0 0 24px rgba(229,53,231,0.48), 0 4px 14px rgba(0,0,0,0.3);
  transition: all var(--transition-base);
}
.btn-hw-primary:hover {
  background: #f04ff2;
  box-shadow: 0 0 44px rgba(229,53,231,0.72), 0 8px 22px rgba(0,0,0,0.35);
  transform: translateY(-2px);
  color: var(--color-white);
}
.btn-hw-primary svg { width: 15px; height: 15px; }
.btn-hw-secondary {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 12px 24px;
  background: transparent;
  color: var(--color-accent);
  border: 2px solid rgba(249,183,62,0.50);
  font-family: var(--font-heading);
  font-size: 0.82rem;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  border-radius: var(--radius-md);
  text-decoration: none;
  transition: all var(--transition-base);
}
.btn-hw-secondary:hover {
  background: var(--color-accent);
  color: #0a0d1a;
  border-color: var(--color-accent);
  box-shadow: 0 0 26px rgba(249,183,62,0.42);
  transform: translateY(-2px);
}

.hw-trust-row {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-2);
}
.hw-trust-badge {
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
.hw-trust-badge svg { width: 11px; height: 11px; color: var(--color-secondary); flex-shrink: 0; }

/* Technique 3: glassmorphism sidebar card — vertical list layout, higher blur */
.hw-hero-card {
  position: relative;
  background: rgba(255,255,255,0.038);
  border: 1px solid rgba(255,255,255,0.10);
  border-radius: 22px;
  padding: var(--space-8) var(--space-7);
  backdrop-filter: blur(18px);
  -webkit-backdrop-filter: blur(18px);
  box-shadow: 0 8px 40px rgba(0,0,0,0.30);
}
.hw-hero-card::before {
  content: '';
  position: absolute;
  inset: -1px;
  border-radius: 23px;
  background: linear-gradient(135deg, rgba(229,53,231,0.30) 0%, rgba(249,183,62,0.15) 60%, transparent 100%);
  z-index: -1;
  opacity: 0.50;
}
.hwc-header {
  margin-bottom: var(--space-5);
}
.hwc-title {
  font-family: var(--font-heading);
  font-size: 1.08rem;
  font-weight: 800;
  color: var(--color-white);
  margin-bottom: var(--space-1);
}
.hwc-sub {
  font-size: 0.65rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  color: var(--color-secondary);
}
.hwc-divider {
  border: none;
  border-top: 1px solid rgba(255,255,255,0.08);
  margin: 0 0 var(--space-5);
}
/* Stat list (vertical, labeled) */
.hwc-stats {
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
  margin-bottom: var(--space-6);
}
.hwc-stat {
  display: flex;
  align-items: center;
  gap: var(--space-4);
  padding: var(--space-3) var(--space-4);
  background: rgba(255,255,255,0.04);
  border: 1px solid rgba(255,255,255,0.07);
  border-radius: 10px;
}
.hwc-stat-num {
  font-family: var(--font-heading);
  font-size: 1.1rem;
  font-weight: 900;
  background: linear-gradient(135deg, var(--color-secondary) 0%, var(--color-accent) 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  line-height: 1;
  white-space: nowrap;
  min-width: 68px;
}
.hwc-stat-label {
  font-size: 0.72rem;
  font-weight: 600;
  color: rgba(255,255,255,0.55);
  line-height: 1.3;
}
.hwc-cta {
  display: block;
  width: 100%;
  padding: 13px;
  background: linear-gradient(135deg, var(--color-secondary) 0%, #c020c2 100%);
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
.hwc-cta:hover {
  box-shadow: 0 8px 34px rgba(229,53,231,0.62);
  transform: translateY(-1px);
  color: var(--color-white);
}
.hwc-note {
  text-align: center;
  font-size: 0.6rem;
  color: rgba(255,255,255,0.28);
  margin-top: var(--space-3);
  line-height: 1.5;
}

/* ── TECHNIQUE 4: SVG DIVIDERS (4 distinct shapes) ── */
.hw-div-dark-light { line-height: 0; background: #09090f; }
.hw-div-dark-light svg { display: block; width: 100%; }
.hw-div-light-dark { line-height: 0; background: #f4f6f9; }
.hw-div-light-dark svg { display: block; width: 100%; }
.hw-div-dark-white { line-height: 0; background: #09090f; }
.hw-div-dark-white svg { display: block; width: 100%; }
.hw-div-white-light { line-height: 0; background: #ffffff; }
.hw-div-white-light svg { display: block; width: 100%; }

/* ── INTRO / ANSWER (light) ── */
.hw-intro {
  padding: var(--space-16) 0;
  background: #f4f6f9;
}
.hw-intro-inner {
  max-width: 880px;
  margin: 0 auto;
}
.hw-section-eyebrow {
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
.hw-intro h2 {
  font-size: clamp(1.65rem, 2.9vw, 2.35rem);
  font-weight: 900;
  color: var(--color-dark);
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.022em;
  margin-bottom: var(--space-5);
}
.hw-intro h2 em { color: var(--color-secondary); font-style: normal; }
.hw-answer-block {
  background: linear-gradient(135deg, rgba(229,53,231,0.07), rgba(249,183,62,0.04));
  border-left: 3px solid var(--color-secondary);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  padding: var(--space-5) var(--space-6);
  margin-bottom: var(--space-6);
}
.hw-answer-block p {
  font-size: 0.97rem;
  color: var(--color-dark);
  line-height: 1.82;
  margin: 0;
}
.hw-intro p {
  font-size: 0.95rem;
  color: var(--color-gray);
  line-height: 1.82;
  margin-bottom: var(--space-4);
}
.hw-intro p:last-child { margin-bottom: 0; }

/* ── LOCAL COVERAGE (dark) — split layout with large stat block left ── */
.hw-coverage {
  padding: var(--space-16) 0;
  background: linear-gradient(160deg, #09090f 0%, #18053a 60%, #0a1428 100%);
  position: relative;
  overflow: hidden;
}
.hw-coverage::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 55% 75% at 0% 50%, rgba(229,53,231,0.11) 0%, transparent 60%),
    radial-gradient(ellipse 42% 60% at 100% 50%, rgba(249,183,62,0.09) 0%, transparent 60%);
  pointer-events: none;
}
.hw-cov-blob {
  position: absolute;
  width: 500px; height: 500px;
  top: -160px; left: 20%;
  border-radius: 50%;
  background: radial-gradient(circle, rgba(229,53,231,0.07) 0%, transparent 68%);
  pointer-events: none;
  animation: hw-drift-slow 24s ease-in-out infinite;
  animation-delay: -8s;
}
.hw-cov-inner {
  position: relative;
  z-index: 1;
}
.hw-cov-eyebrow {
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
/* Split: stat block left + info cards right */
.hw-cov-split {
  display: grid;
  grid-template-columns: 1fr 1.2fr;
  gap: var(--space-16);
  align-items: start;
}
.hw-cov-left h2 {
  font-size: clamp(1.6rem, 3vw, 2.3rem);
  font-weight: 900;
  color: var(--color-white);
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.022em;
  margin-bottom: var(--space-5);
}
.hw-cov-left h2 em { color: var(--color-secondary); font-style: normal; }
.hw-cov-body {
  font-size: 0.92rem;
  color: rgba(255,255,255,0.58);
  line-height: 1.82;
  margin-bottom: var(--space-4);
}
/* Technique 7: gradient text stat blocks */
.hw-stat-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-4);
  margin-top: var(--space-8);
}
.hw-stat-box {
  background: rgba(255,255,255,0.04);
  border: 1px solid rgba(255,255,255,0.07);
  border-radius: 14px;
  padding: var(--space-5) var(--space-4);
  text-align: center;
}
.hw-stat-num {
  font-family: var(--font-heading);
  font-size: 2rem;
  font-weight: 900;
  line-height: 1;
  background: linear-gradient(135deg, var(--color-secondary) 0%, var(--color-accent) 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  margin-bottom: var(--space-1);
}
.hw-stat-label {
  font-size: 0.66rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1px;
  color: rgba(255,255,255,0.38);
  line-height: 1.35;
}
/* Right: info signal cards stacked */
.hw-cov-right {
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
}
.hw-signal-card {
  background: rgba(255,255,255,0.04);
  border: 1px solid rgba(255,255,255,0.08);
  border-radius: 14px;
  padding: var(--space-5) var(--space-6);
  transition: border-color var(--transition-base), transform var(--transition-base);
}
.hw-signal-card:hover {
  border-color: rgba(229,53,231,0.28);
  transform: translateX(4px);
}
.hw-signal-card h4 {
  font-family: var(--font-heading);
  font-size: 0.85rem;
  font-weight: 800;
  color: var(--color-secondary);
  margin-bottom: var(--space-2);
  display: flex;
  align-items: center;
  gap: var(--space-2);
}
.hw-signal-card h4 svg { width: 14px; height: 14px; flex-shrink: 0; }
.hw-signal-card p {
  font-size: 0.82rem;
  color: rgba(255,255,255,0.52);
  line-height: 1.70;
  margin: 0;
}

/* ── SERVICES GRID (white) ── */
.hw-services {
  padding: var(--space-16) 0;
  background: var(--color-white);
}
.hw-svc-header {
  text-align: center;
  margin-bottom: var(--space-12);
}
.hw-svc-header h2 {
  font-size: clamp(1.65rem, 2.9vw, 2.35rem);
  font-weight: 900;
  color: var(--color-dark);
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.022em;
  margin-bottom: var(--space-3);
}
.hw-svc-header h2 em { color: var(--color-secondary); font-style: normal; }
.hw-svc-lead {
  font-size: 0.95rem;
  color: var(--color-gray);
  max-width: 520px;
  margin: 0 auto;
  line-height: 1.75;
}
/* Technique 6: neon bottom-border scaleX on hover — magenta → gold direction */
.hw-svc-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
}
.hw-svc-card {
  background: #f7f8fb;
  border: 1px solid rgba(229,53,231,0.08);
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
.hw-svc-card::after {
  content: '';
  position: absolute;
  bottom: 0; left: 0; right: 0;
  height: 3px;
  background: linear-gradient(90deg, var(--color-secondary), var(--color-accent));
  transform: scaleX(0);
  transform-origin: left;
  transition: transform 0.30s ease;
}
.hw-svc-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 14px 38px rgba(229,53,231,0.14), 0 4px 10px rgba(0,0,0,0.06);
  border-color: rgba(229,53,231,0.22);
}
.hw-svc-card:hover::after { transform: scaleX(1); }
.hw-svc-icon {
  width: 50px; height: 50px;
  border-radius: 50%;
  background: linear-gradient(135deg, rgba(229,53,231,0.11), rgba(249,183,62,0.08));
  border: 1px solid rgba(229,53,231,0.18);
  display: flex; align-items: center; justify-content: center;
  color: var(--color-secondary);
}
.hw-svc-icon svg { width: 22px; height: 22px; }
.hw-svc-card h3 {
  font-family: var(--font-heading);
  font-size: 0.92rem;
  font-weight: 800;
  color: var(--color-dark);
  margin: 0;
}
.hw-svc-card p {
  font-size: 0.82rem;
  color: var(--color-gray);
  line-height: 1.68;
  margin: 0;
  flex: 1;
}
.hw-svc-link {
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
.hw-svc-link:hover { gap: 8px; }
.hw-svc-link svg { width: 14px; height: 14px; }

/* ── FAQ (light) ── */
.hw-faq {
  padding: var(--space-16) 0;
  background: #f4f6f9;
}
.hw-faq-inner {
  max-width: 820px;
  margin: 0 auto;
}
.hw-faq h2 {
  font-size: clamp(1.55rem, 2.8vw, 2.2rem);
  font-weight: 900;
  color: var(--color-dark);
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.022em;
  margin-bottom: var(--space-3);
}
.hw-faq h2 em { color: var(--color-secondary); font-style: normal; }
.hw-faq-sub {
  font-size: 0.92rem;
  color: var(--color-gray);
  margin-bottom: var(--space-10);
  line-height: 1.75;
}
.hw-faq-list {
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
}
/* Technique 5: FAQ neon border on .open + icon rotate 45deg */
.hw-faq-item {
  background: var(--color-white);
  border: 1px solid rgba(229,53,231,0.11);
  border-radius: var(--radius-lg);
  overflow: hidden;
  transition: border-color var(--transition-base), box-shadow var(--transition-base);
}
.hw-faq-item.open {
  border-color: rgba(229,53,231,0.40);
  box-shadow: 0 4px 20px rgba(229,53,231,0.10);
}
.hw-faq-q {
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
.hw-faq-q:hover { color: var(--color-secondary); }
.hw-faq-item.open .hw-faq-q { color: var(--color-secondary); }
.hw-faq-icon {
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
.hw-faq-item.open .hw-faq-icon {
  background: var(--color-secondary);
  color: var(--color-white);
  transform: rotate(45deg);
}
.hw-faq-a {
  display: none;
  padding: 0 var(--space-6) var(--space-5);
  font-size: 0.88rem;
  color: var(--color-gray);
  line-height: 1.8;
  border-top: 1px solid rgba(229,53,231,0.07);
  padding-top: var(--space-4);
}
.hw-faq-item.open .hw-faq-a { display: block; }

/* ── RELATED AREAS — Technique 8: hover lift dark cards, gold top-border accent ── */
.hw-related {
  padding: var(--space-14) 0;
  background: var(--color-white);
}
.hw-related-header {
  text-align: center;
  margin-bottom: var(--space-10);
}
.hw-related h3 {
  font-size: clamp(1.45rem, 2.5vw, 2rem);
  font-weight: 900;
  color: var(--color-dark);
  text-wrap: balance;
  margin-bottom: var(--space-2);
}
.hw-related-sub {
  font-size: 0.9rem;
  color: var(--color-gray);
}
.hw-related-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
}
.hw-area-card {
  background: linear-gradient(160deg, #09090f, #140830);
  border: 1px solid rgba(255,255,255,0.07);
  border-top: 2px solid rgba(249,183,62,0.0);
  border-radius: var(--radius-lg);
  padding: var(--space-7) var(--space-6);
  text-decoration: none;
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
  transition: transform var(--transition-base), box-shadow var(--transition-base), border-top-color var(--transition-base);
  position: relative;
  overflow: hidden;
}
.hw-area-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 16px 42px rgba(229,53,231,0.18), 0 4px 14px rgba(0,0,0,0.30);
  border-top-color: rgba(249,183,62,0.70);
}
.hw-area-icon {
  width: 42px; height: 42px;
  border-radius: 10px;
  background: rgba(255,255,255,0.05);
  border: 1px solid rgba(255,255,255,0.10);
  display: flex; align-items: center; justify-content: center;
  color: var(--color-secondary);
}
.hw-area-icon svg { width: 20px; height: 20px; }
.hw-area-card h4 {
  font-family: var(--font-heading);
  font-size: 0.95rem;
  font-weight: 800;
  color: var(--color-white);
  margin: 0;
}
.hw-area-card p {
  font-size: 0.80rem;
  color: rgba(255,255,255,0.50);
  line-height: 1.65;
  margin: 0;
  flex: 1;
}
.hw-area-link {
  display: inline-flex;
  align-items: center;
  gap: 4px;
  font-size: 0.78rem;
  font-weight: 800;
  color: var(--color-accent);
  transition: gap var(--transition-fast);
  text-decoration: none;
}
.hw-area-link:hover { gap: 8px; }
.hw-area-link svg { width: 13px; height: 13px; }

/* ── EMERGENCY CTA (dark) ── */
.hw-cta {
  padding: var(--space-14) 0;
  background: linear-gradient(140deg, #09090f 0%, #200848 55%, #091728 100%);
  position: relative;
  overflow: hidden;
  text-align: center;
}
.hw-cta::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 48% 80% at 25% 50%, rgba(229,53,231,0.13) 0%, transparent 58%),
    radial-gradient(ellipse 40% 70% at 75% 50%, rgba(249,183,62,0.10) 0%, transparent 58%);
  pointer-events: none;
}
.hw-cta-inner {
  position: relative;
  z-index: 1;
  max-width: 580px;
  margin: 0 auto;
}
.hw-cta h2 {
  font-size: clamp(1.5rem, 2.8vw, 2.2rem);
  font-weight: 900;
  color: var(--color-white);
  text-wrap: balance;
  margin-bottom: var(--space-3);
}
.hw-cta h2 em { color: var(--color-secondary); font-style: normal; }
.hw-cta p {
  font-size: 0.95rem;
  color: rgba(255,255,255,0.56);
  max-width: 450px;
  margin: 0 auto var(--space-7);
  line-height: 1.75;
}
.hw-cta-btns {
  display: flex;
  gap: var(--space-3);
  justify-content: center;
  flex-wrap: wrap;
}

/* ── RESPONSIVE ── */
@media (max-width: 1100px) {
  .hw-hero-inner { grid-template-columns: 1fr; }
  .hw-hero-card { display: none; }
  .hw-cov-split { grid-template-columns: 1fr; gap: var(--space-10); }
  .hw-stat-grid { grid-template-columns: repeat(4, 1fr); }
}
@media (max-width: 768px) {
  .hw-svc-grid { grid-template-columns: repeat(2, 1fr); }
  .hw-related-grid { grid-template-columns: 1fr; }
  .hw-stat-grid { grid-template-columns: 1fr 1fr; }
}
@media (max-width: 480px) {
  .hw-svc-grid { grid-template-columns: 1fr; }
}
</style>

<!-- ═══ HERO ═══ -->
<section class="hw-hero" aria-label="Bail bonds in Hollywood, FL">
  <div class="hw-orb hw-orb-1" aria-hidden="true"></div>
  <div class="hw-orb hw-orb-2" aria-hidden="true"></div>
  <div class="hw-orb hw-orb-3" aria-hidden="true"></div>

  <div class="container">
    <div class="hw-hero-inner">
      <div class="hw-hero-left">
        <span class="hw-eyebrow">
          <span class="hw-pulse"></span>
          Hollywood, FL — South Broward County
        </span>
        <h1>Bail Bonds Near Me in <span class="hl-gold">Hollywood, FL</span> — <span class="hl-mag">Fast Release</span>, 24/7 Bondsman</h1>
        <p class="hw-hero-lead">Need bail bonds near you in Hollywood, FL? Mad Extra Bail Bonds posts bond at Broward County Main Jail within hours of your call — any charge, HPD or BSO, any time of day or night. Licensed Florida bail bondsman serving Hollywood and South Broward 24/7.</p>
        <div class="hw-hero-btns">
          <?php if (!empty($phone)): ?>
          <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>" class="btn-hw-primary">
            <?php echo lucide_icon('phone'); ?> Call Now — 24/7
          </a>
          <?php else: ?>
          <a href="/contact/" class="btn-hw-primary">
            <?php echo lucide_icon('zap'); ?> Get Help Now
          </a>
          <?php endif; ?>
          <a href="/contact/" class="btn-hw-secondary">Free Consultation</a>
        </div>
        <div class="hw-trust-row">
          <span class="hw-trust-badge"><?php echo lucide_icon('shield-check'); ?> Licensed FL Bondsman</span>
          <span class="hw-trust-badge"><?php echo lucide_icon('clock'); ?> 24/7 Available</span>
          <span class="hw-trust-badge"><?php echo lucide_icon('anchor'); ?> South Broward Coverage</span>
          <span class="hw-trust-badge"><?php echo lucide_icon('zap'); ?> 6–10 hr Release</span>
        </div>
      </div>

      <!-- Technique 3: glassmorphism card — vertical stat list format -->
      <div class="hw-hero-card" aria-label="Hollywood bail bond facts">
        <div class="hwc-header">
          <p class="hwc-title">Need Help in Hollywood?</p>
          <p class="hwc-sub">24/7 — HPD, BSO &amp; Hard Rock Area</p>
        </div>
        <hr class="hwc-divider">
        <div class="hwc-stats">
          <div class="hwc-stat">
            <div class="hwc-stat-num">~12 mi</div>
            <div class="hwc-stat-label">to Broward County Main Jail</div>
          </div>
          <div class="hwc-stat">
            <div class="hwc-stat-num">6–10 hrs</div>
            <div class="hwc-stat-label">typical misdemeanor release</div>
          </div>
          <div class="hwc-stat">
            <div class="hwc-stat-num">24/7</div>
            <div class="hwc-stat-label">always available — 365 days</div>
          </div>
          <div class="hwc-stat">
            <div class="hwc-stat-num">Licensed</div>
            <div class="hwc-stat-label">Florida bondsman</div>
          </div>
        </div>
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>" class="hwc-cta">
          <?php echo lucide_icon('phone'); ?> Call Now — Free Consult
        </a>
        <?php else: ?>
        <a href="/contact/" class="hwc-cta">Get Help Now</a>
        <?php endif; ?>
        <p class="hwc-note">HPD · BSO · Seminole Hard Rock area — we cover it all</p>
      </div>
    </div>
  </div>
</section>

<!-- SVG DIVIDER: dark → light (stacked/sawtooth) -->
<div class="hw-div-dark-light" aria-hidden="true">
  <svg viewBox="0 0 1440 52" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,52 L0,0 L360,36 L720,0 L1080,36 L1440,8 L1440,52 Z" fill="#f4f6f9"/>
  </svg>
</div>

<!-- ═══ INTRO / ANSWER SECTION ═══ -->
<section class="hw-intro" aria-label="How bail bonds work in Hollywood, FL">
  <div class="container">
    <div class="hw-intro-inner">
      <span class="hw-section-eyebrow">How It Works in Hollywood</span>
      <h2>How do bail bonds work after a <em>Hollywood, FL arrest</em>?</h2>
      <div class="hw-answer-block">
        <p>Bail bonds in Hollywood are available 24/7 — after an HPD or BSO arrest, the defendant is booked at the Hollywood Police Department facility and transferred to Broward County Main Jail at 555 SE 1st Ave, Fort Lauderdale, approximately 12 miles north. Call Mad Extra Bail Bonds immediately. We post bond directly with the jail and release processing begins. You pay only the Florida-required 10% premium. Misdemeanor releases typically complete within 6 to 10 hours of arrest.</p>
      </div>
      <p>Mad Extra Bail Bonds is a licensed Florida bail bond agency based in Broward County, serving Hollywood and all of South Broward. Hollywood is a unique city — bisected by the Intracoastal Waterway, it runs from the Hollywood Beach Broadwalk on the barrier island all the way west through Emerald Hills, Hollywood Hills, and the commercial corridors along I-95. The Seminole Hard Rock Hotel and Casino near Stirling Road is a major presence and a frequent source of arrest activity in the area.</p>
      <p>Hollywood arrests happen for a wide range of reasons. Broadwalk tourist arrests spike from May through September when beach traffic is at its highest. The Young Circle downtown arts district and nearby Oakwood neighborhood see their share of misdemeanor situations. HPD and Hallandale Beach PD operate in adjacent jurisdictions — if an arrest occurs near the Hallandale border, jurisdiction matters, and we know how to navigate it.</p>
      <p>The Florida bail bond premium is fixed at 10% of court-ordered bail statewide. A Hollywood arrest follows the same bond schedule as any other Broward County arrest. We explain every cost before you commit to anything.</p>
    </div>
  </div>
</section>

<!-- SVG DIVIDER: light → dark (smooth S-curve) -->
<div class="hw-div-light-dark" aria-hidden="true">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,0 C360,60 720,0 1080,48 C1260,60 1380,36 1440,24 L1440,60 L0,60 Z" fill="#09090f"/>
  </svg>
</div>

<!-- ═══ LOCAL COVERAGE SECTION ═══ -->
<section class="hw-coverage" aria-label="Local jail and neighborhood coverage for Hollywood, FL">
  <div class="hw-cov-blob" aria-hidden="true"></div>
  <div class="container hw-cov-inner">
    <span class="hw-cov-eyebrow"><?php echo lucide_icon('map-pin'); ?> Local Coverage — Hollywood, FL</span>

    <div class="hw-cov-split">
      <div class="hw-cov-left">
        <h2>Jail, neighborhoods, and what drives arrests in <em>Hollywood</em></h2>
        <p class="hw-cov-body">Hollywood PD completes initial booking before transferring defendants to the Broward County Main Jail in Fort Lauderdale — about 12 miles north on I-95. The full process from Hollywood arrest to jail transfer typically takes 2 to 4 hours. From the moment you call us, we work in parallel with the jail so bond can be posted as soon as the defendant arrives at Broward Main.</p>
        <p class="hw-cov-body">Hollywood Hills and Hollywood Beach draw very different arrest profiles. Hollywood Hills, Emerald Hills, and the residential west side see domestic, drug, and property crime situations. The Broadwalk and beach corridor east of the Intracoastal sees high summer tourist activity — disorderly conduct, public intoxication, and misdemeanor situations during peak season. The Hard Rock Casino area near Stirling Road generates its own category of arrests. We cover all of it.</p>
        <!-- Technique 7: gradient text stats -->
        <div class="hw-stat-grid">
          <div class="hw-stat-box">
            <div class="hw-stat-num">~12 mi</div>
            <div class="hw-stat-label">Hollywood to Broward Jail</div>
          </div>
          <div class="hw-stat-box">
            <div class="hw-stat-num">6–10 hrs</div>
            <div class="hw-stat-label">Typical misdemeanor release</div>
          </div>
          <div class="hw-stat-box">
            <div class="hw-stat-num">24/7</div>
            <div class="hw-stat-label">Always on call</div>
          </div>
          <div class="hw-stat-box">
            <div class="hw-stat-num">11+ yrs</div>
            <div class="hw-stat-label">Serving South Florida</div>
          </div>
        </div>
      </div>

      <div class="hw-cov-right">
        <div class="hw-signal-card">
          <h4><?php echo lucide_icon('landmark'); ?> Broward County Main Jail</h4>
          <p>All Hollywood HPD arrests transfer to 555 SE 1st Ave, Fort Lauderdale — approximately 12 miles north on I-95. BSO South District arrests may also process through Broward Main. We know the facility and its intake staff well.</p>
        </div>
        <div class="hw-signal-card">
          <h4><?php echo lucide_icon('star'); ?> Seminole Hard Rock Hotel Area</h4>
          <p>The Hard Rock complex near Stirling Road and I-95 is on Seminole tribal land, but arrests in the surrounding area and perimeter involve HPD. This is a high-volume area for us — we have handled many Hollywood Hard Rock-adjacent situations.</p>
        </div>
        <div class="hw-signal-card">
          <h4><?php echo lucide_icon('anchor'); ?> Hollywood Beach Broadwalk</h4>
          <p>The 2.5-mile Broadwalk east of the Intracoastal is one of South Florida's most visited beach promenades. Arrest volume here peaks May through September. Tourist arrests — including out-of-state visitors — require the same licensed bondsman process as any Florida arrest.</p>
        </div>
        <div class="hw-signal-card">
          <h4><?php echo lucide_icon('shield'); ?> HPD Jurisdiction &amp; BSO Overlap</h4>
          <p>Hollywood PD covers city limits. Hallandale Beach PD borders Hollywood to the south. BSO handles unincorporated pockets and marine enforcement. We know how jurisdiction affects the booking process in Hollywood and can advise families on which facility has their family member.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SVG DIVIDER: dark → white (double-bump) -->
<div class="hw-div-dark-white" aria-hidden="true">
  <svg viewBox="0 0 1440 52" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,52 L0,28 Q360,52 720,20 Q1080,-8 1440,32 L1440,52 Z" fill="#ffffff"/>
  </svg>
</div>

<!-- ═══ SERVICES GRID ═══ -->
<section class="hw-services" aria-label="Bail bond services available in Hollywood, FL">
  <div class="container">
    <div class="hw-svc-header">
      <span class="hw-section-eyebrow">Services in Hollywood</span>
      <h2>What bail bond services are available in <em>Hollywood, FL</em>?</h2>
      <p class="hw-svc-lead">Every service we offer is available for Hollywood, FL arrests — HPD, BSO, FWC, any agency, any charge, 24 hours a day.</p>
    </div>
    <div class="hw-svc-grid">
      <?php
      $hwSvcList = [
        ['slug' => 'bail-bonds',            'icon' => 'shield',         'name' => 'Bail Bond Services',        'desc' => 'General bail bond services for any criminal charge after a Hollywood, FL arrest — HPD or BSO, we post bond at Broward County Main Jail the same day.'],
        ['slug' => 'dui-bail-bonds',         'icon' => 'car',            'name' => 'DUI Bail Bonds',             'desc' => 'DUI arrests are common along Hollywood Boulevard and near the Hard Rock corridor. We move fast on DUI bonds in Hollywood and South Broward.'],
        ['slug' => 'drug-charge-bail-bonds', 'icon' => 'alert-triangle', 'name' => 'Drug Charge Bail Bonds',    'desc' => 'Drug possession arrests in Hollywood handled with speed and discretion — from the Broadwalk to Hollywood Hills, we cover every part of the city.'],
        ['slug' => 'felony-bail-bonds',      'icon' => 'gavel',          'name' => 'Felony Bail Bonds',          'desc' => 'Felony arrests in Hollywood mean higher bond amounts and Broward County hearings — we bring 11+ years of experience to high-stakes situations.'],
        ['slug' => 'misdemeanor-bail-bonds', 'icon' => 'file-text',      'name' => 'Misdemeanor Bail Bonds',     'desc' => 'Tourist misdemeanor arrests near the Broadwalk, domestic situations, first-time offenses — most Hollywood misdemeanor releases complete within hours.'],
        ['slug' => 'warrant-bail-bonds',     'icon' => 'file-warning',   'name' => 'Warrant &amp; Traffic Bonds','desc' => 'Active warrants through Hollywood Municipal Court or Broward County — we help you resolve them before they become a bigger situation.'],
      ];
      foreach ($hwSvcList as $svc): ?>
      <div class="hw-svc-card">
        <div class="hw-svc-icon"><?php echo lucide_icon($svc['icon']); ?></div>
        <h3><?php echo $svc['name']; ?></h3>
        <p><?php echo $svc['desc']; ?></p>
        <a href="/services/<?php echo $svc['slug']; ?>/" class="hw-svc-link">
          Learn more <?php echo lucide_icon('arrow-right'); ?>
        </a>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- SVG DIVIDER: white → light (low gentle wave) -->
<div class="hw-div-white-light" aria-hidden="true">
  <svg viewBox="0 0 1440 44" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,0 Q240,44 480,20 Q720,0 960,32 Q1200,44 1440,16 L1440,44 L0,44 Z" fill="#f4f6f9"/>
  </svg>
</div>

<!-- ═══ FAQ SECTION ═══ -->
<section class="hw-faq" aria-label="Hollywood FL bail bond FAQ">
  <div class="container">
    <div class="hw-faq-inner">
      <span class="hw-section-eyebrow">Common Questions</span>
      <h2>Frequently asked questions about <em>bail bonds in Hollywood, FL</em></h2>
      <p class="hw-faq-sub">Answers to what Hollywood and South Broward families ask most when a loved one is arrested — including tourist and Hard Rock situations.</p>

      <div class="hw-faq-list" role="list">
        <?php foreach ($_faqs as $faq): ?>
        <div class="hw-faq-item" role="listitem">
          <button class="hw-faq-q" aria-expanded="false" onclick="toggleHwFaq(this)">
            <?php echo htmlspecialchars($faq['q']); ?>
            <span class="hw-faq-icon" aria-hidden="true">+</span>
          </button>
          <div class="hw-faq-a" role="region">
            <p><?php echo htmlspecialchars($faq['a']); ?></p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- ═══ RELATED AREAS — Broward cities (Technique 8: hover lift, gold top-border) ═══ -->
<section class="hw-related" aria-label="Other South Broward cities we serve near Hollywood">
  <div class="container">
    <div class="hw-related-header">
      <h3>Also Serving These Nearby Broward Cities</h3>
      <p class="hw-related-sub">Mad Extra Bail Bonds covers all of Broward County — same 24/7 licensed service wherever the arrest happens.</p>
    </div>
    <div class="hw-related-grid">
      <a href="/areas/fort-lauderdale/" class="hw-area-card">
        <div class="hw-area-icon"><?php echo lucide_icon('landmark'); ?></div>
        <h4>Fort Lauderdale</h4>
        <p>Broward County Main Jail is in Fort Lauderdale — the hub for all Broward County arrests including Hollywood transfers. Licensed 24/7 bondsman on call.</p>
        <span class="hw-area-link">View coverage <?php echo lucide_icon('arrow-right'); ?></span>
      </a>
      <a href="/areas/pompano-beach/" class="hw-area-card">
        <div class="hw-area-icon"><?php echo lucide_icon('map-pin'); ?></div>
        <h4>Pompano Beach</h4>
        <p>Bail bonds for Pompano Beach arrests in North Broward — same Broward Main process, same 24/7 licensed bondsman service.</p>
        <span class="hw-area-link">View coverage <?php echo lucide_icon('arrow-right'); ?></span>
      </a>
      <a href="/areas/pembroke-pines/" class="hw-area-card">
        <div class="hw-area-icon"><?php echo lucide_icon('globe'); ?></div>
        <h4>Pembroke Pines</h4>
        <p>Adjacent to Hollywood on the west — bail bonds for Pembroke Pines arrests, PPPD and BSO bookings transferred to Broward County Jail. 24/7 service.</p>
        <span class="hw-area-link">View coverage <?php echo lucide_icon('arrow-right'); ?></span>
      </a>
    </div>
  </div>
</section>

<!-- ═══ EMERGENCY CTA ═══ -->
<section class="hw-cta" aria-label="Emergency bail bond help in Hollywood FL">
  <div class="hw-cta-inner">
    <h2>Need a bondsman in <em>Hollywood right now</em>?</h2>
    <p>HPD, BSO, Broadwalk, Hard Rock area — wherever the arrest happened in Hollywood, we post bond at Broward Main and get your family member home.</p>
    <div class="hw-cta-btns">
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>" class="btn-hw-primary">
        <?php echo lucide_icon('phone'); ?> Call Now — 24/7
      </a>
      <?php endif; ?>
      <a href="/contact/" class="btn-hw-secondary">Send a Message</a>
    </div>
  </div>
</section>

</main>

<script>
function toggleHwFaq(btn) {
  const item = btn.closest('.hw-faq-item');
  const isOpen = item.classList.contains('open');
  document.querySelectorAll('.hw-faq-item.open').forEach(el => el.classList.remove('open'));
  document.querySelectorAll('.hw-faq-q').forEach(el => el.setAttribute('aria-expanded', 'false'));
  if (!isOpen) {
    item.classList.add('open');
    btn.setAttribute('aria-expanded', 'true');
  }
}
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
