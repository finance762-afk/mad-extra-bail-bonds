<?php
/**
 * index.php — Homepage
 * Mad Extra Bail Bonds | Delray Beach, FL
 * Phase 3: Homepage customization
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Bail Bonds Near Me in Delray Beach, FL | Mad Extra Bail Bonds | 24/7';
$pageDescription = 'Need bail bonds near you in South Florida? Mad Extra Bail Bonds serves Palm Beach, Broward & Miami-Dade 24/7. Licensed FL bondsman — call now for fast release from any South Florida jail.';
$canonicalUrl    = $siteUrl . '/';
$currentPage     = 'home';
$_phoneRaw       = preg_replace('/\D/', '', $phone);

$_faqs = [
  [
    'q' => 'How much does a bail bond cost in Florida?',
    'a' => 'In Florida, bail bond premiums are set by law at 10% of the total bail amount ordered by the court. For example, if bail is set at $10,000, the non-refundable bond fee is $1,000. This rate applies in Delray Beach, across Palm Beach County, Broward County, and Miami-Dade County. Payment plans may be available — call Mad Extra Bail Bonds 24/7 to discuss your options.',
  ],
  [
    'q' => 'How long does it take to get someone out of jail in South Florida?',
    'a' => 'Release times depend on the charge and the specific facility. For misdemeanor arrests, release typically happens within 2 to 8 hours of contacting us. Felony bonds may take 6 to 24 hours depending on jail processing time. We work directly with Palm Beach County Jail, Broward County Main Jail, Turner Guilford Knight in Miami-Dade, and all other South Florida facilities to move as fast as the system allows.',
  ],
  [
    'q' => 'What jails does Mad Extra Bail Bonds service?',
    'a' => 'We post bail at every jail and detention facility across South Florida, including Palm Beach County Jail (West Palm Beach), Broward County Main Jail (Fort Lauderdale), Turner Guilford Knight Correctional Center (Miami), Pretrial Detention Center (Miami), and all city jails in Delray Beach, Boca Raton, Fort Lauderdale, Pompano Beach, Coral Springs, Hialeah, and surrounding communities.',
  ],
  [
    'q' => 'Do I need collateral to get a bail bond?',
    'a' => 'Most standard bail bonds do not require collateral. For very large bail amounts — typically $50,000 or more — or situations involving higher flight risk, we may ask for collateral such as real estate equity, a vehicle title, or other assets. We are always transparent upfront about what is required before you make any commitment.',
  ],
  [
    'q' => 'Can Mad Extra Bail Bonds help with immigration or federal charges?',
    'a' => 'Yes. We handle immigration bonds for individuals detained by ICE, and federal bail bonds for charges in U.S. District Court. Immigration and federal cases are more complex than state bonds and often involve higher amounts, but our experience across South Florida\'s diverse communities means we know how to navigate these situations quickly. We serve immigrant families throughout Miami-Dade, Broward, and Palm Beach counties.',
  ],
  [
    'q' => 'What happens if the defendant misses their court date?',
    'a' => 'If a defendant fails to appear in court, the judge can forfeit the bond and issue an arrest warrant. As the co-signer, you become responsible for the full bail amount. We proactively remind defendants and their families of court dates and help them understand the serious consequences of missing any scheduled appearance. Acting quickly when a court date is missed can sometimes prevent full forfeiture.',
  ],
];
$_faqSchema = generateFAQSchema($_faqs);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
echo '<script type="application/ld+json">' . json_encode($_faqSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>' . "\n";
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
/* ============================================================
   HOMEPAGE — Mad Extra Bail Bonds
   Premium Tier | Dark/Neon Design System
   Techniques: layered hero, neon orbs, SVG dividers,
   asymmetric grid, dark tinted cards, glassmorphism,
   gradient-text stats, animated ticker
   ============================================================ */

/* ── 1. HERO: Dark neon gradient stage ── */
.hero-home {
  position: relative;
  min-height: 100vh;
  display: flex;
  align-items: center;
  background: #09090f;
  overflow: hidden;
  padding-top: var(--nav-height, 72px);
}
/* Technique 1: layered ::before gradient + ::after noise texture */
.hero-home::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 55% 90% at 8% 65%,  rgba(229,53,231,0.30) 0%, transparent 65%),
    radial-gradient(ellipse 45% 70% at 88% 20%,  rgba(249,183,62,0.22) 0%, transparent 60%),
    radial-gradient(ellipse 60% 50% at 50% 100%,  rgba(26,43,60,0.95) 0%, transparent 90%);
  pointer-events: none;
}
.hero-home::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
  opacity: 0.5;
  pointer-events: none;
}

/* Technique 2: floating neon orbs */
.neon-orb {
  position: absolute;
  border-radius: 50%;
  pointer-events: none;
  will-change: transform;
}
.neon-orb-1 {
  width: 560px; height: 560px;
  top: -180px; left: -140px;
  background: radial-gradient(circle, rgba(229,53,231,0.18) 0%, transparent 70%);
  animation: orb-drift 11s ease-in-out infinite;
}
.neon-orb-2 {
  width: 420px; height: 420px;
  bottom: -80px; right: 4%;
  background: radial-gradient(circle, rgba(249,183,62,0.15) 0%, transparent 70%);
  animation: orb-drift 14s ease-in-out infinite reverse;
  animation-delay: -4s;
}
.neon-orb-3 {
  width: 280px; height: 280px;
  top: 35%; right: 35%;
  background: radial-gradient(circle, rgba(229,53,231,0.09) 0%, transparent 70%);
  animation: orb-drift 18s ease-in-out infinite;
  animation-delay: -8s;
}
@keyframes orb-drift {
  0%, 100% { transform: translate(0, 0) scale(1); }
  33%       { transform: translate(16px, -22px) scale(1.06); }
  66%       { transform: translate(-12px, 14px) scale(0.96); }
}

/* Hero content grid */
.hero-inner {
  position: relative;
  z-index: 2;
  display: grid;
  grid-template-columns: 1fr 420px;
  gap: var(--space-12);
  align-items: center;
  padding: var(--space-12) 0 var(--space-16);
  width: 100%;
}
.hero-left { max-width: 640px; }

/* Eyebrow pulse badge */
.hero-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  font-family: var(--font-heading);
  font-size: 0.7rem;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 3px;
  color: var(--color-secondary);
  margin-bottom: var(--space-5);
  padding: 7px 16px;
  border: 1px solid rgba(229,53,231,0.5);
  border-radius: var(--radius-full);
  background: rgba(229,53,231,0.08);
}
.hero-eyebrow .pulse-dot {
  width: 8px; height: 8px;
  border-radius: 50%;
  background: var(--color-secondary);
  box-shadow: 0 0 8px var(--color-secondary), 0 0 20px rgba(229,53,231,0.5);
  animation: pulse-glow 2s ease-in-out infinite;
  flex-shrink: 0;
}
@keyframes pulse-glow {
  0%, 100% { opacity: 1; transform: scale(1);   box-shadow: 0 0 8px var(--color-secondary); }
  50%       { opacity: 0.6; transform: scale(0.75); box-shadow: 0 0 4px var(--color-secondary); }
}

.hero-home h1 {
  font-size: clamp(2.2rem, 4.5vw, 3.8rem);
  font-weight: 900;
  color: var(--color-white);
  line-height: 1.08;
  margin-bottom: var(--space-6);
  letter-spacing: -0.025em;
  text-wrap: balance;
}
.hero-home h1 .hl-gold {
  color: var(--color-accent);
  text-shadow: 0 0 28px rgba(249,183,62,0.55), 0 0 60px rgba(249,183,62,0.25);
}
.hero-home h1 .hl-mag {
  color: var(--color-secondary);
  text-shadow: 0 0 28px rgba(229,53,231,0.55), 0 0 60px rgba(229,53,231,0.25);
}

.hero-sub {
  font-size: 1.05rem;
  color: rgba(255,255,255,0.72);
  line-height: 1.75;
  margin-bottom: var(--space-8);
  max-width: 520px;
}
.hero-sub strong { color: rgba(255,255,255,0.95); }

/* Hero trust badges */
.hero-trust-row {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-2);
  margin-bottom: var(--space-8);
}
.htb {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  font-size: 0.7rem;
  font-weight: 700;
  color: rgba(255,255,255,0.82);
  padding: 5px 12px;
  border-radius: var(--radius-full);
  background: rgba(255,255,255,0.06);
  border: 1px solid rgba(255,255,255,0.12);
  text-transform: uppercase;
  letter-spacing: 0.5px;
  white-space: nowrap;
}
.htb svg { width: 12px; height: 12px; color: var(--color-accent); flex-shrink: 0; }

/* Hero CTA buttons */
.hero-cta-row {
  display: flex;
  gap: var(--space-4);
  flex-wrap: wrap;
}
.btn-hero-primary {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 15px 32px;
  background: var(--color-secondary);
  color: var(--color-white);
  font-family: var(--font-heading);
  font-size: 0.875rem;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  border-radius: var(--radius-md);
  text-decoration: none;
  box-shadow: 0 0 24px rgba(229,53,231,0.5), 0 4px 20px rgba(0,0,0,0.35);
  transition: all var(--transition-base);
}
.btn-hero-primary:hover {
  background: #f043f2;
  box-shadow: 0 0 48px rgba(229,53,231,0.75), 0 8px 28px rgba(0,0,0,0.4);
  transform: translateY(-2px);
  color: var(--color-white);
}
.btn-hero-primary svg { width: 16px; height: 16px; }
.btn-hero-secondary {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 14px 28px;
  background: transparent;
  color: var(--color-accent);
  border: 2px solid rgba(249,183,62,0.7);
  font-family: var(--font-heading);
  font-size: 0.875rem;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  border-radius: var(--radius-md);
  text-decoration: none;
  transition: all var(--transition-base);
}
.btn-hero-secondary:hover {
  background: var(--color-accent);
  color: #0a0d1a;
  border-color: var(--color-accent);
  box-shadow: 0 0 30px rgba(249,183,62,0.45);
  transform: translateY(-2px);
}

/* Hero form card — Technique 3: glassmorphism */
.hero-form-card {
  position: relative;
  background: rgba(255,255,255,0.04);
  border: 1px solid rgba(255,255,255,0.12);
  border-radius: 20px;
  padding: var(--space-8) var(--space-7);
  backdrop-filter: blur(16px);
  -webkit-backdrop-filter: blur(16px);
  z-index: 2;
}
.hero-form-card::before {
  content: '';
  position: absolute;
  inset: -1px;
  border-radius: 21px;
  background: linear-gradient(135deg, rgba(229,53,231,0.45) 0%, rgba(249,183,62,0.25) 50%, transparent 100%);
  z-index: -1;
  opacity: 0.6;
}
.hfc-header { margin-bottom: var(--space-6); }
.hfc-header h3 {
  font-size: 1.25rem;
  font-weight: 800;
  color: var(--color-white);
  margin-bottom: 4px;
}
.hfc-note {
  font-size: 0.7rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  color: var(--color-secondary);
}
.hfc-field { margin-bottom: var(--space-4); }
.hfc-field label {
  display: block;
  font-size: 0.7rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.5px;
  color: rgba(255,255,255,0.5);
  margin-bottom: 6px;
}
.hfc-field input,
.hfc-field select {
  width: 100%;
  background: rgba(255,255,255,0.07);
  border: 1px solid rgba(255,255,255,0.15);
  border-radius: var(--radius-md);
  padding: 12px 14px;
  color: var(--color-white);
  font-family: var(--font-body);
  font-size: 0.875rem;
  transition: border-color var(--transition-fast), box-shadow var(--transition-fast);
  -webkit-appearance: none;
}
.hfc-field input::placeholder { color: rgba(255,255,255,0.3); }
.hfc-field select { color: rgba(255,255,255,0.7); }
.hfc-field select option { background: #1a1a2e; color: var(--color-white); }
.hfc-field input:focus,
.hfc-field select:focus {
  outline: none;
  border-color: var(--color-secondary);
  box-shadow: 0 0 0 3px rgba(229,53,231,0.18);
}
.hfc-consent { margin-bottom: var(--space-5); }
.hfc-check {
  display: flex;
  align-items: flex-start;
  gap: 8px;
  margin-bottom: var(--space-2);
}
.hfc-check input[type="checkbox"] { margin-top: 3px; flex-shrink: 0; accent-color: var(--color-secondary); }
.hfc-check label {
  font-size: 0.68rem;
  color: rgba(255,255,255,0.48);
  line-height: 1.5;
}
.hfc-check label a { color: var(--color-accent); text-decoration: underline; }
.hfc-check label strong { color: rgba(255,255,255,0.7); }
.btn-hfc-submit {
  width: 100%;
  padding: 14px;
  background: linear-gradient(135deg, var(--color-secondary) 0%, #b515b7 100%);
  color: var(--color-white);
  font-family: var(--font-heading);
  font-size: 0.875rem;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 2px;
  border: none;
  border-radius: var(--radius-md);
  cursor: pointer;
  box-shadow: 0 4px 24px rgba(229,53,231,0.45);
  transition: all var(--transition-base);
}
.btn-hfc-submit:hover {
  box-shadow: 0 8px 36px rgba(229,53,231,0.65);
  transform: translateY(-1px);
}
.hfc-disclaimer {
  text-align: center;
  font-size: 0.62rem;
  color: rgba(255,255,255,0.3);
  margin-top: var(--space-3);
  line-height: 1.5;
}

/* ── 2. TICKER ── */
.ticker-strip-home {
  position: relative;
  z-index: 10;
  background: linear-gradient(90deg, #c010c2 0%, var(--color-secondary) 40%, #c010c2 80%, var(--color-secondary) 100%);
  background-size: 300% 100%;
  animation: ticker-bg-shift 6s linear infinite;
  overflow: hidden;
  padding: 13px 0;
}
@keyframes ticker-bg-shift {
  0%   { background-position: 0% 50%; }
  100% { background-position: 300% 50%; }
}
.ticker-track-home {
  display: flex;
  gap: 0;
  width: max-content;
  animation: ticker-move 36s linear infinite;
}
.ticker-item-home {
  display: inline-flex;
  align-items: center;
  gap: var(--space-4);
  font-family: var(--font-heading);
  font-size: 0.72rem;
  font-weight: 800;
  color: var(--color-white);
  text-transform: uppercase;
  letter-spacing: 2.5px;
  padding: 0 var(--space-8);
  white-space: nowrap;
}
.ticker-sep { color: rgba(255,255,255,0.5); font-size: 1rem; }
@keyframes ticker-move {
  0%   { transform: translateX(0); }
  100% { transform: translateX(-50%); }
}

/* ── 3. SECTION UTILITIES ── */
.section-eyebrow-home {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  font-family: var(--font-heading);
  font-size: 0.7rem;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 3px;
  color: var(--color-secondary);
  margin-bottom: var(--space-4);
  padding: 6px 14px;
  border: 1px solid rgba(229,53,231,0.35);
  border-radius: var(--radius-full);
  background: rgba(229,53,231,0.07);
}
.section-h2-home {
  font-size: clamp(1.8rem, 3.5vw, 2.8rem);
  font-weight: 900;
  color: var(--color-dark);
  line-height: 1.1;
  margin-bottom: var(--space-4);
  text-wrap: balance;
  letter-spacing: -0.02em;
}
.section-h2-home .hl { color: var(--color-secondary); font-style: italic; }
.section-lead-home {
  font-size: 1.05rem;
  color: var(--color-gray);
  max-width: 580px;
  line-height: 1.75;
}
.section-header-center {
  text-align: center;
  margin-bottom: var(--space-12);
  display: flex;
  flex-direction: column;
  align-items: center;
}
.section-header-center .section-lead-home { text-align: center; }

/* ── 4. SERVICES SECTION ── */
.services-home { padding: var(--space-16) 0; background: var(--color-bg); }

/* Technique 4: dark tinted service cards */
.svc-grid-home {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 20px;
  margin-top: var(--space-10);
}
.svc-card-home {
  border-radius: var(--radius-lg);
  overflow: hidden;
  display: flex;
  flex-direction: column;
  border: 1px solid rgba(229,53,231,0.12);
  background: var(--color-white);
  transition: transform var(--transition-base), box-shadow var(--transition-base), border-color var(--transition-base);
  position: relative;
}
.svc-card-home::after {
  content: '';
  position: absolute;
  bottom: 0; left: 0; right: 0;
  height: 2px;
  background: linear-gradient(90deg, var(--color-secondary), var(--color-accent));
  transform: scaleX(0);
  transform-origin: left;
  transition: transform var(--transition-base);
}
.svc-card-home:hover {
  transform: translateY(-6px);
  box-shadow: 0 16px 40px rgba(229,53,231,0.18), 0 4px 12px rgba(0,0,0,0.08);
  border-color: rgba(229,53,231,0.35);
}
.svc-card-home:hover::after { transform: scaleX(1); }

.svc-banner {
  height: 160px;
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
  background-size: cover;
  background-position: center;
  background-color: #09090f;
}
.svc-banner::before {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 0;
}
.svc-card-home.t1 .svc-banner::before { background: linear-gradient(145deg, rgba(9,9,15,0.52) 0%, rgba(30,10,46,0.48) 100%); }
.svc-card-home.t2 .svc-banner::before { background: linear-gradient(145deg, rgba(13,21,32,0.52) 0%, rgba(26,43,60,0.48) 100%); }
.svc-card-home.t3 .svc-banner::before { background: linear-gradient(145deg, rgba(19,6,16,0.52) 0%, rgba(42,10,42,0.48) 100%); }
.svc-icon-ring {
  position: relative;
  z-index: 1;
  width: 56px; height: 56px;
  border-radius: 50%;
  border: 1px solid rgba(255,255,255,0.15);
  background: rgba(255,255,255,0.07);
  backdrop-filter: blur(8px);
  display: flex; align-items: center; justify-content: center;
  position: relative;
  z-index: 1;
}
.svc-icon-ring svg { width: 26px; height: 26px; color: var(--color-accent); }
.svc-card-body-home {
  padding: var(--space-5) var(--space-5) var(--space-4);
  display: flex;
  flex-direction: column;
  flex: 1;
}
.svc-card-body-home h3 {
  font-size: 0.95rem;
  font-weight: 800;
  color: var(--color-dark);
  margin-bottom: var(--space-2);
  line-height: 1.25;
}
.svc-card-body-home p {
  font-size: 0.82rem;
  color: var(--color-gray);
  line-height: 1.65;
  flex: 1;
  margin-bottom: var(--space-4);
}
.svc-link-home {
  display: inline-flex;
  align-items: center;
  gap: 4px;
  font-size: 0.8rem;
  font-weight: 800;
  color: var(--color-secondary);
  text-decoration: none;
  transition: gap var(--transition-fast), color var(--transition-fast);
  border-top: 1px solid rgba(229,53,231,0.1);
  padding-top: var(--space-3);
}
.svc-link-home:hover { gap: 9px; color: var(--color-primary); }

/* ── SVG DIVIDER: light to dark ── */
/* Technique 5: SVG section dividers */
.divider-to-dark {
  line-height: 0;
  background: var(--color-bg);
}
.divider-to-dark svg { display: block; width: 100%; }
.divider-to-light {
  line-height: 0;
  background: #09090f;
}
.divider-to-light svg { display: block; width: 100%; }
.divider-to-alt {
  line-height: 0;
  background: var(--color-bg-alt);
}
.divider-to-alt svg { display: block; width: 100%; }

/* ── 5. STATS SECTION ── */
/* Technique 6: gradient-text stats on dark bg */
.stats-home {
  padding: var(--space-14) 0;
  background: linear-gradient(135deg, #09090f 0%, #160a28 50%, #0a1525 100%);
  position: relative;
  overflow: hidden;
}
.stats-home::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 55% 80% at 5%  50%, rgba(229,53,231,0.13) 0%, transparent 60%),
    radial-gradient(ellipse 50% 70% at 95% 50%, rgba(249,183,62,0.11) 0%, transparent 60%);
  pointer-events: none;
}
.stats-grid-home {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  position: relative;
  z-index: 1;
}
.stat-col {
  text-align: center;
  padding: var(--space-8) var(--space-4);
  border-right: 1px solid rgba(255,255,255,0.06);
}
.stat-col:last-child { border-right: none; }
.stat-big {
  font-family: var(--font-heading);
  font-size: clamp(3rem, 6vw, 5rem);
  font-weight: 900;
  line-height: 1;
  background: linear-gradient(135deg, #ffffff 20%, var(--color-accent) 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  margin-bottom: var(--space-2);
}
.stat-lbl {
  font-family: var(--font-heading);
  font-size: 0.65rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 2px;
  color: rgba(255,255,255,0.45);
}
.stat-sub {
  font-size: 0.72rem;
  color: rgba(255,255,255,0.28);
  margin-top: 4px;
}

/* ── 6. ABOUT SECTION (Asymmetric broken grid) ── */
/* Technique 7: asymmetric/broken grid layout */
.about-home { padding: var(--space-16) 0; background: var(--color-bg-alt); }
.about-grid-home {
  display: grid;
  grid-template-columns: 1.05fr 1fr;
  gap: var(--space-16);
  align-items: center;
}

/* Visual block */
.about-visual-wrap { position: relative; }
.about-dark-card {
  border-radius: 20px;
  background: linear-gradient(145deg, #0d1120, #1a2b3c 60%, #12060e);
  padding: var(--space-10) var(--space-8);
  position: relative;
  overflow: hidden;
}
.about-dark-card::before {
  content: '';
  position: absolute;
  top: -100px; right: -100px;
  width: 360px; height: 360px;
  border-radius: 50%;
  background: radial-gradient(circle, rgba(229,53,231,0.18) 0%, transparent 70%);
  pointer-events: none;
}
.about-dark-card::after {
  content: '';
  position: absolute;
  bottom: -80px; left: -80px;
  width: 300px; height: 300px;
  border-radius: 50%;
  background: radial-gradient(circle, rgba(249,183,62,0.13) 0%, transparent 70%);
  pointer-events: none;
}
.about-logo-block {
  position: relative;
  z-index: 1;
  text-align: center;
  margin-bottom: var(--space-8);
}
.about-logo-block img {
  max-width: 180px;
  max-height: 100px;
  margin: 0 auto;
  object-fit: contain;
  filter: drop-shadow(0 0 24px rgba(229,53,231,0.55));
}
.about-mini-stats {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-3);
  position: relative;
  z-index: 1;
}
.about-mini-stat {
  text-align: center;
  padding: var(--space-5);
  border-radius: var(--radius-lg);
  border: 1px solid rgba(255,255,255,0.08);
  background: rgba(255,255,255,0.04);
}
.about-mini-stat .ms-num {
  font-family: var(--font-heading);
  font-size: 2.2rem;
  font-weight: 900;
  color: var(--color-accent);
  line-height: 1;
  text-shadow: 0 0 20px rgba(249,183,62,0.4);
}
.about-mini-stat .ms-lbl {
  font-size: 0.65rem;
  color: rgba(255,255,255,0.45);
  text-transform: uppercase;
  letter-spacing: 1px;
  margin-top: 4px;
}

/* Floating accent badge */
.about-float-badge {
  position: absolute;
  bottom: -20px;
  right: -20px;
  background: linear-gradient(135deg, var(--color-secondary) 0%, #b515b7 100%);
  color: var(--color-white);
  padding: var(--space-4) var(--space-6);
  border-radius: var(--radius-lg);
  box-shadow: 0 8px 32px rgba(229,53,231,0.45);
  z-index: 2;
  text-align: center;
}
.about-float-badge .fb-big {
  font-family: var(--font-heading);
  font-size: 2rem;
  font-weight: 900;
  line-height: 1;
  display: block;
}
.about-float-badge .fb-small {
  font-size: 0.65rem;
  text-transform: uppercase;
  letter-spacing: 1px;
  opacity: 0.88;
  display: block;
  margin-top: 2px;
}

/* About text side */
.about-text-side { position: relative; }
.about-text-side .section-eyebrow-home { margin-bottom: var(--space-4); }
.about-text-side h2 {
  font-size: clamp(1.7rem, 3vw, 2.5rem);
  font-weight: 900;
  color: var(--color-dark);
  line-height: 1.15;
  margin-bottom: var(--space-5);
  text-wrap: balance;
  letter-spacing: -0.02em;
}
.about-text-side h2 em { color: var(--color-secondary); font-style: normal; }

/* AEO answer block */
.answer-block {
  background: linear-gradient(135deg, rgba(229,53,231,0.07), rgba(249,183,62,0.05));
  border-left: 3px solid var(--color-secondary);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  padding: var(--space-5) var(--space-6);
  margin-bottom: var(--space-6);
}
.answer-block p {
  font-size: 0.95rem;
  color: var(--color-dark);
  line-height: 1.8;
  margin: 0;
  font-style: italic;
}

.about-text-side p {
  color: var(--color-gray);
  line-height: 1.82;
  margin-bottom: var(--space-4);
  font-size: 0.95rem;
}
.about-usp-list {
  list-style: none;
  margin: var(--space-5) 0 var(--space-8);
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
}
.about-usp-list li {
  display: flex;
  align-items: flex-start;
  gap: var(--space-3);
  font-size: 0.9rem;
  color: var(--color-dark);
  font-weight: 500;
  line-height: 1.5;
}
.usp-check {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  width: 22px; height: 22px;
  border-radius: 50%;
  background: linear-gradient(135deg, var(--color-secondary) 0%, var(--color-accent) 100%);
  margin-top: 1px;
  font-size: 0.65rem;
  color: var(--color-white);
  font-weight: 900;
}

/* ── 7. REVIEWS SECTION ── */
/* Technique 8: glassmorphism review cards on dark bg */
.reviews-home {
  padding: var(--space-16) 0;
  background: linear-gradient(135deg, #0d0d1a 0%, #1a0a28 50%, #0a1420 100%);
  position: relative;
  overflow: hidden;
}
.reviews-home::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 50% 60% at 10% 70%, rgba(229,53,231,0.1) 0%, transparent 60%),
    radial-gradient(ellipse 40% 50% at 90% 30%, rgba(249,183,62,0.08) 0%, transparent 60%);
  pointer-events: none;
}
.reviews-eyebrow { color: rgba(255,255,255,0.9) !important; }
.reviews-h2 { color: var(--color-white) !important; }
.reviews-sub { color: rgba(255,255,255,0.55) !important; }
.reviews-grid-home {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-6);
  position: relative;
  z-index: 1;
}
.review-card-home {
  background: rgba(255,255,255,0.04);
  border: 1px solid rgba(255,255,255,0.09);
  border-radius: var(--radius-lg);
  padding: var(--space-7);
  backdrop-filter: blur(10px);
  transition: border-color var(--transition-base), box-shadow var(--transition-base);
}
.review-card-home:hover {
  border-color: rgba(229,53,231,0.3);
  box-shadow: 0 8px 30px rgba(229,53,231,0.12);
}
.review-stars-home {
  display: flex;
  gap: 3px;
  margin-bottom: var(--space-4);
  font-size: 1.1rem;
  color: var(--color-star);
}
.review-text-home {
  font-size: 0.88rem;
  color: rgba(255,255,255,0.78);
  line-height: 1.8;
  font-style: italic;
  margin-bottom: var(--space-5);
}
.review-author-home {
  display: flex;
  align-items: center;
  gap: var(--space-3);
}
.review-avatar-home {
  width: 40px; height: 40px;
  border-radius: 50%;
  background: linear-gradient(135deg, var(--color-secondary), var(--color-accent));
  display: flex; align-items: center; justify-content: center;
  font-family: var(--font-heading);
  font-weight: 800;
  font-size: 0.9rem;
  color: var(--color-white);
  flex-shrink: 0;
}
.review-name-home {
  font-size: 0.85rem;
  font-weight: 700;
  color: var(--color-white);
}
.review-loc-home {
  font-size: 0.72rem;
  color: rgba(255,255,255,0.4);
  margin-top: 1px;
}
.review-note {
  text-align: center;
  margin-top: var(--space-6);
  font-size: 0.78rem;
  color: rgba(255,255,255,0.3);
  font-style: italic;
  position: relative;
  z-index: 1;
}

/* ── 8. FAQ SECTION ── */
.faq-home { padding: var(--space-16) 0; background: var(--color-bg); }
.faq-grid-home {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: var(--space-5);
  margin-top: var(--space-10);
}
.faq-card-home {
  padding: var(--space-6);
  background: var(--color-bg-alt);
  border-radius: var(--radius-lg);
  border: 1px solid var(--color-border);
  transition: border-color var(--transition-base), box-shadow var(--transition-base);
}
.faq-card-home:hover {
  border-color: rgba(229,53,231,0.25);
  box-shadow: 0 4px 20px rgba(229,53,231,0.08);
}
.faq-q-home {
  font-size: 0.95rem;
  font-weight: 800;
  color: var(--color-dark);
  margin-bottom: var(--space-3);
  line-height: 1.4;
}
.faq-a-home {
  font-size: 0.875rem;
  color: var(--color-gray);
  line-height: 1.75;
  margin: 0;
}

/* ── 9. SERVICE AREAS ── */
.areas-home { padding: var(--space-16) 0; background: var(--color-bg-alt); }
.county-group { margin-bottom: var(--space-10); }
.county-group:last-child { margin-bottom: 0; }
.county-heading {
  font-size: 0.7rem;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 3px;
  color: var(--color-secondary);
  margin-bottom: var(--space-4);
  display: flex;
  align-items: center;
  gap: var(--space-3);
}
.county-heading::after {
  content: '';
  flex: 1;
  height: 1px;
  background: linear-gradient(90deg, rgba(229,53,231,0.3), transparent);
}
.city-tag-row { display: flex; flex-wrap: wrap; gap: var(--space-2); }
.city-tag {
  display: inline-block;
  padding: 8px 18px;
  border-radius: var(--radius-full);
  background: var(--color-white);
  border: 1px solid var(--color-border);
  font-size: 0.82rem;
  font-weight: 600;
  color: var(--color-dark);
  text-decoration: none;
  transition: all var(--transition-fast);
}
.city-tag:hover {
  background: rgba(229,53,231,0.08);
  border-color: rgba(229,53,231,0.4);
  color: var(--color-secondary);
}
.areas-cta-row {
  margin-top: var(--space-10);
  text-align: center;
}

/* ── 10. CTA BANNER ── */
.cta-home {
  position: relative;
  padding: var(--space-16) 0;
  overflow: hidden;
  background: linear-gradient(135deg, #09090f 0%, #1e0a30 40%, #0a1525 80%, #09090f 100%);
  background-size: 300% 100%;
  animation: cta-bg-move 10s ease-in-out infinite alternate;
}
@keyframes cta-bg-move {
  0%   { background-position: 0% 50%; }
  100% { background-position: 100% 50%; }
}
.cta-home::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 60% 70% at 20% 50%, rgba(229,53,231,0.22) 0%, transparent 60%),
    radial-gradient(ellipse 50% 60% at 80% 50%, rgba(249,183,62,0.16) 0%, transparent 55%);
  pointer-events: none;
}
.cta-home::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.035'/%3E%3C/svg%3E");
  opacity: 0.5;
  pointer-events: none;
}
.cta-home .container { position: relative; z-index: 1; text-align: center; }
.cta-home h2 {
  font-size: clamp(2rem, 4vw, 3.2rem);
  font-weight: 900;
  color: var(--color-white);
  margin-bottom: var(--space-4);
  text-wrap: balance;
  letter-spacing: -0.02em;
}
.cta-home h2 .hl-gold {
  color: var(--color-accent);
  text-shadow: 0 0 28px rgba(249,183,62,0.5);
}
.cta-home p {
  font-size: 1.05rem;
  color: rgba(255,255,255,0.72);
  max-width: 560px;
  margin: 0 auto var(--space-8);
  line-height: 1.7;
}
.cta-btn-row {
  display: flex;
  gap: var(--space-4);
  justify-content: center;
  flex-wrap: wrap;
}
.btn-cta-primary {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 18px 40px;
  background: var(--color-accent);
  color: #09090f;
  font-family: var(--font-heading);
  font-size: 0.95rem;
  font-weight: 900;
  text-transform: uppercase;
  letter-spacing: 2px;
  border-radius: var(--radius-md);
  text-decoration: none;
  box-shadow: 0 0 28px rgba(249,183,62,0.5), 0 4px 20px rgba(0,0,0,0.35);
  transition: all var(--transition-base);
}
.btn-cta-primary:hover {
  background: #ffc84a;
  box-shadow: 0 0 50px rgba(249,183,62,0.75), 0 8px 28px rgba(0,0,0,0.4);
  transform: translateY(-2px);
  color: #09090f;
}
.btn-cta-secondary {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 17px 36px;
  background: transparent;
  color: var(--color-white);
  border: 2px solid rgba(255,255,255,0.4);
  font-family: var(--font-heading);
  font-size: 0.95rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 2px;
  border-radius: var(--radius-md);
  text-decoration: none;
  transition: all var(--transition-base);
}
.btn-cta-secondary:hover {
  background: rgba(255,255,255,0.1);
  border-color: rgba(255,255,255,0.7);
  transform: translateY(-2px);
  color: var(--color-white);
}
.cta-phone-line {
  margin-top: var(--space-6);
  font-size: 0.8rem;
  color: rgba(255,255,255,0.4);
  text-transform: uppercase;
  letter-spacing: 1px;
}
.cta-phone-line strong {
  color: var(--color-secondary);
  font-family: var(--font-heading);
  font-size: 1.05rem;
  letter-spacing: normal;
}

/* ── REVEAL ANIMATIONS ── */
[data-animate] {
  opacity: 0;
  transform: translateY(28px);
  transition: opacity 0.65s ease, transform 0.65s ease;
}
[data-animate="left"]  { transform: translateX(-28px); }
[data-animate="right"] { transform: translateX(28px); }
[data-animate="scale"] { transform: scale(0.94); }
[data-animate].animated {
  opacity: 1;
  transform: translate(0) scale(1);
}
[data-delay="1"] { transition-delay: 0.1s; }
[data-delay="2"] { transition-delay: 0.2s; }
[data-delay="3"] { transition-delay: 0.3s; }
[data-delay="4"] { transition-delay: 0.45s; }

/* ── RESPONSIVE ── */
@media (max-width: 1100px) {
  .hero-inner { grid-template-columns: 1fr; gap: var(--space-10); }
  .hero-form-card { max-width: 520px; }
  .about-grid-home { grid-template-columns: 1fr; gap: var(--space-10); }
  .about-visual-wrap { display: none; }
  .svc-grid-home { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 768px) {
  .hero-home { padding-top: 60px; min-height: auto; }
  .hero-inner { padding: var(--space-10) 0 var(--space-12); }
  .hero-form-card { padding: var(--space-6); }
  .stats-grid-home { grid-template-columns: repeat(2, 1fr); }
  .stat-col { border-right: none; border-bottom: 1px solid rgba(255,255,255,0.06); }
  .stat-col:nth-child(even) { border-right: none; }
  .stat-col:nth-child(odd) { border-right: 1px solid rgba(255,255,255,0.06); }
  .stat-col:nth-last-child(-n+2) { border-bottom: none; }
  .reviews-grid-home { grid-template-columns: 1fr; }
  .faq-grid-home { grid-template-columns: 1fr; }
  .svc-grid-home { grid-template-columns: 1fr 1fr; }
  .cta-btn-row { flex-direction: column; align-items: center; }
  .btn-cta-primary, .btn-cta-secondary { width: 100%; max-width: 320px; justify-content: center; }
  .hero-trust-row { gap: var(--space-2); }
}
@media (max-width: 480px) {
  .svc-grid-home { grid-template-columns: 1fr; }
  .stats-grid-home { grid-template-columns: repeat(2, 1fr); }
  .hero-home h1 { font-size: 2rem; }
  .section-h2-home { font-size: 1.7rem; }
  .city-tag { font-size: 0.78rem; padding: 7px 14px; }
}
</style>

<!-- ═════════════════════════════════════════════
     HERO — Bail Bonds Near Me in South Florida
════════════════════════════════════════════════ -->
<section class="hero-home" aria-label="Mad Extra Bail Bonds — Fast bail bonds in South Florida">
  <div class="neon-orb neon-orb-1" aria-hidden="true"></div>
  <div class="neon-orb neon-orb-2" aria-hidden="true"></div>
  <div class="neon-orb neon-orb-3" aria-hidden="true"></div>

  <div class="container">
    <div class="hero-inner">

      <!-- Left: Content -->
      <div class="hero-left">
        <span class="hero-eyebrow">
          <span class="pulse-dot"></span>
          Available Right Now — 24/7 Emergency Bail Bonds
        </span>

        <h1>
          <span class="hl-gold">Bail Bonds Near Me</span><br>
          in Delray Beach & <span class="hl-mag">South Florida</span> —<br>
          Out Tonight, Not Tomorrow
        </h1>

        <p class="hero-sub">
          Mad Extra Bail Bonds is a <strong>licensed Florida bail bondsman</strong> based in Delray Beach,
          serving families across Palm Beach County, Broward County, and Miami-Dade County.
          When your loved one is in jail, every minute counts — we answer at 2am, on weekends, and on holidays.
        </p>

        <div class="hero-trust-row">
          <span class="htb">
            <?php echo lucide_icon('shield-check'); ?>
            Licensed FL Bondsman
          </span>
          <span class="htb">
            <?php echo lucide_icon('clock'); ?>
            Available 24/7/365
          </span>
          <span class="htb">
            <?php echo lucide_icon('calendar'); ?>
            <?php echo $yearsInBusiness; ?>+ Years Experience
          </span>
          <span class="htb">
            <?php echo lucide_icon('map-pin'); ?>
            3 Counties Served
          </span>
        </div>

        <div class="hero-cta-row">
          <?php if (!empty($phone)): ?>
          <a href="tel:<?php echo $_phoneRaw; ?>" class="btn-hero-primary">
            <?php echo lucide_icon('phone'); ?>
            Call Now — Get Out Fast
          </a>
          <?php else: ?>
          <a href="/contact/" class="btn-hero-primary">
            <?php echo lucide_icon('phone'); ?>
            Get Help Now
          </a>
          <?php endif; ?>
          <a href="/services/" class="btn-hero-secondary">
            View Bond Types
          </a>
        </div>
      </div><!-- /hero-left -->

      <!-- Right: Quick Request Form -->
      <div class="hero-form-card" data-animate="right">
        <div class="hfc-header">
          <h3>Request Fast Bail Help</h3>
          <p class="hfc-note">Confidential &nbsp;·&nbsp; No obligation &nbsp;·&nbsp; Responds within minutes</p>
        </div>

        <form action="<?php echo htmlspecialchars($formAction); ?>" method="POST" novalidate>
          <!-- Spam / CRM hidden fields -->
          <input type="text"   name="_honey"           style="display:none !important" tabindex="-1" autocomplete="off" aria-hidden="true">
          <input type="hidden" name="_next"             value="/thank-you/">
          <input type="hidden" name="_consent_version" value="<?php echo htmlspecialchars($consentVersion); ?>">
          <input type="hidden" name="_consent_page"    value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>">

          <div class="hfc-field">
            <label for="hfc-name">Your Name *</label>
            <input type="text" id="hfc-name" name="name" placeholder="Full name" required autocomplete="name">
          </div>
          <div class="hfc-field">
            <label for="hfc-phone">Your Phone *</label>
            <input type="tel" id="hfc-phone" name="phone" placeholder="(561) 000-0000" required autocomplete="tel">
          </div>
          <div class="hfc-field">
            <label for="hfc-service">Type of Bond Needed</label>
            <select id="hfc-service" name="service">
              <option value="">— Select bond type —</option>
              <?php foreach ($services as $svc): ?>
              <option value="<?php echo htmlspecialchars($svc['name']); ?>"><?php echo htmlspecialchars($svc['name']); ?></option>
              <?php endforeach; ?>
              <option value="Not sure">Not sure yet</option>
            </select>
          </div>

          <!-- TCPA / CCPA Consent (required) -->
          <div class="hfc-consent">
            <div class="hfc-check">
              <input type="checkbox" name="email_opt_in" id="hfc-email-opt" value="yes">
              <label for="hfc-email-opt"><strong>Email updates (optional):</strong> I agree to receive emails from <?php echo htmlspecialchars($siteName); ?> about my inquiry. I can unsubscribe anytime.</label>
            </div>
            <div class="hfc-check">
              <input type="checkbox" name="sms_opt_in" id="hfc-sms-opt" value="yes">
              <label for="hfc-sms-opt"><strong>Text messages (optional):</strong> I agree to receive SMS from <?php echo htmlspecialchars($siteName); ?>. Message &amp; data rates may apply. Reply STOP to opt out. <strong>Consent is not a condition of service.</strong></label>
            </div>
            <div class="hfc-check">
              <input type="checkbox" name="terms_accepted" id="hfc-terms" value="yes" required>
              <label for="hfc-terms">I have read and agree to the <a href="/privacy-policy/">Privacy Policy</a> and <a href="/terms/">Terms of Service</a>. <strong>*</strong></label>
            </div>
          </div>

          <button type="submit" class="btn-hfc-submit">Send My Request →</button>
          <p class="hfc-disclaimer">Information shared is kept strictly confidential. We never share your data with third parties.</p>
        </form>
      </div><!-- /hero-form-card -->

    </div><!-- /hero-inner -->
  </div><!-- /container -->
</section><!-- /hero-home -->

<!-- ═════════════════════════════════════════════
     TICKER STRIP — Proof of service
════════════════════════════════════════════════ -->
<div class="ticker-strip-home" aria-hidden="true" role="presentation">
  <div class="ticker-track-home">
    <!-- Two copies for seamless loop -->
    <?php
    $tickerItems = [
      '24/7 Emergency Bail Bonds',
      'Licensed Florida Bondsman',
      'Fast Release — All South Florida Jails',
      $yearsInBusiness . '+ Years Serving FL Families',
      'Palm Beach County',
      'Broward County',
      'Miami-Dade County',
      'DUI · Felony · Drug · Federal · Immigration',
      'Call Any Time — We Answer',
    ];
    for ($i = 0; $i < 2; $i++):
      foreach ($tickerItems as $item):
    ?>
    <span class="ticker-item-home">
      <span class="ticker-sep">⚡</span>
      <?php echo htmlspecialchars($item); ?>
    </span>
    <?php endforeach; endfor; ?>
  </div>
</div>

<!-- ═════════════════════════════════════════════
     SERVICES — Bail bond types we handle
════════════════════════════════════════════════ -->
<section class="services-home" aria-label="Bail bond services in South Florida" id="services">
  <div class="container">
    <div data-animate>
      <span class="section-eyebrow-home">What Bond Types Do We Handle?</span>
      <h2 class="section-h2-home">
        Which <span class="hl">Bail Bond Services</span><br>
        Does Mad Extra Offer in South Florida?
      </h2>
      <p class="section-lead-home">
        Mad Extra Bail Bonds handles every type of charge — from misdemeanor traffic bonds to federal court cases.
        Based in Delray Beach, we post bail at every jail across Palm Beach, Broward, and Miami-Dade counties. Available 24 hours a day.
      </p>
    </div>

    <div class="svc-grid-home">
      <?php
      $tints = ['t1', 't2', 't3'];
      foreach ($services as $i => $svc):
        $tint = $tints[$i % 3];
      ?>
      <article class="svc-card-home <?php echo $tint; ?>" data-animate data-delay="<?php echo min($i % 4 + 1, 4); ?>">
        <div class="svc-banner"<?php if (!empty($svc['image'])): ?> style="background-image:url('<?php echo htmlspecialchars($svc['image']); ?>')"<?php endif; ?>>
          <div class="svc-icon-ring">
            <?php echo lucide_icon($svc['icon']); ?>
          </div>
        </div>
        <div class="svc-card-body-home">
          <h3><?php echo htmlspecialchars($svc['name']); ?></h3>
          <p><?php echo htmlspecialchars($svc['description']); ?></p>
          <a href="/services/<?php echo htmlspecialchars($svc['slug']); ?>/" class="svc-link-home">
            Learn more →
          </a>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- SVG Divider: bg to dark -->
<div class="divider-to-dark" aria-hidden="true">
  <svg viewBox="0 0 1440 72" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,0 C240,72 480,0 720,36 C960,72 1200,0 1440,36 L1440,72 L0,72 Z" fill="#09090f"/>
  </svg>
</div>

<!-- ═════════════════════════════════════════════
     STATS — By the numbers
════════════════════════════════════════════════ -->
<section class="stats-home" aria-label="Mad Extra Bail Bonds by the numbers">
  <div class="container">
    <div class="stats-grid-home">
      <div class="stat-col" data-animate>
        <div class="stat-big" data-target="<?php echo $yearsInBusiness; ?>"><?php echo $yearsInBusiness; ?></div>
        <div class="stat-lbl">Years in South Florida</div>
        <div class="stat-sub">Serving families since <?php echo $yearEstablished; ?></div>
      </div>
      <div class="stat-col" data-animate data-delay="1">
        <div class="stat-big">24/7</div>
        <div class="stat-lbl">Always Available</div>
        <div class="stat-sub">No voicemail — real people answer</div>
      </div>
      <div class="stat-col" data-animate data-delay="2">
        <div class="stat-big">3</div>
        <div class="stat-lbl">Counties Covered</div>
        <div class="stat-sub">Palm Beach · Broward · Miami-Dade</div>
      </div>
      <div class="stat-col" data-animate data-delay="3">
        <div class="stat-big">15<span style="font-size:0.55em;vertical-align:middle">+</span></div>
        <div class="stat-lbl">Cities Served</div>
        <div class="stat-sub">Across South Florida</div>
      </div>
    </div>
  </div>
</section>

<!-- SVG Divider: dark to alt -->
<div class="divider-to-alt" aria-hidden="true">
  <svg viewBox="0 0 1440 72" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,72 L1440,0 L1440,72 Z" fill="<?php echo htmlspecialchars($colors['bg-alt'] ?? '#f8f9fa'); ?>"/>
  </svg>
</div>

<!-- ═════════════════════════════════════════════
     ABOUT — Company story
════════════════════════════════════════════════ -->
<section class="about-home" aria-label="About Mad Extra Bail Bonds" id="about">
  <div class="container">
    <div class="about-grid-home">

      <!-- Visual side -->
      <div class="about-visual-wrap" data-animate="left">
        <div class="about-dark-card">
          <div class="about-logo-block">
            <img src="<?php echo htmlspecialchars($logoUrl ?? ''); ?>"
                 alt="Mad Extra Bail Bonds"
                 width="180" height="100"
                 loading="lazy">
          </div>
          <div class="about-mini-stats">
            <div class="about-mini-stat">
              <div class="ms-num"><?php echo $yearsInBusiness; ?>+</div>
              <div class="ms-lbl">Years Serving FL</div>
            </div>
            <div class="about-mini-stat">
              <div class="ms-num">3</div>
              <div class="ms-lbl">Counties</div>
            </div>
            <div class="about-mini-stat">
              <div class="ms-num">24/7</div>
              <div class="ms-lbl">Available</div>
            </div>
            <div class="about-mini-stat">
              <div class="ms-num">FL</div>
              <div class="ms-lbl">Licensed</div>
            </div>
          </div>
        </div>
        <div class="about-float-badge">
          <span class="fb-big">10%</span>
          <span class="fb-small">FL State Bond Rate</span>
        </div>
      </div><!-- /about-visual-wrap -->

      <!-- Text side -->
      <div class="about-text-side" data-animate="right">
        <span class="section-eyebrow-home">About Mad Extra Bail Bonds</span>

        <h2>
          A Licensed <em>South Florida Bondsman</em><br>
          Families Have Trusted for <?php echo $yearsInBusiness; ?> Years
        </h2>

        <!-- AEO Answer Block -->
        <div class="answer-block">
          <p>Mad Extra Bail Bonds is a licensed Florida bail bondsman based in Delray Beach, FL, serving families across Palm Beach County, Broward County, and Miami-Dade County for over <?php echo $yearsInBusiness; ?> years. We are available 24 hours a day, 7 days a week — no recording, no call center, just real help when your family needs it most.</p>
        </div>

        <p>
          When someone you care about is arrested, the next few hours can feel overwhelming. You do not know who to call, what to do, or how the process works.
          That is exactly the moment Mad Extra Bail Bonds was built for. We have helped families navigate South Florida jails — from Palm Beach County Jail in West Palm Beach to Turner Guilford Knight in Miami — with professionalism, discretion, and genuine compassion.
        </p>
        <p>
          We go beyond posting the bond. Our team walks co-signers through every step: what to expect, what the defendant must do, and how to make sure court dates do not get missed.
          A bail bond is not just a transaction — for the families we serve, it is one of the hardest moments of their lives, and we take that seriously.
        </p>

        <ul class="about-usp-list">
          <li>
            <span class="usp-check">✓</span>
            Licensed Florida bail bondsman — posted in every South Florida jail
          </li>
          <li>
            <span class="usp-check">✓</span>
            Available 24/7, 365 days a year — including weekends and holidays
          </li>
          <li>
            <span class="usp-check">✓</span>
            Florida's statutory 10% bond rate — no hidden fees, ever
          </li>
          <li>
            <span class="usp-check">✓</span>
            Immigration and federal bond experience across Miami-Dade County
          </li>
          <li>
            <span class="usp-check">✓</span>
            Serving Delray Beach and all cities within a 50-mile radius
          </li>
        </ul>

        <a href="/about/" class="btn-hero-secondary" style="align-self:flex-start">
          Our Full Story →
        </a>
      </div>

    </div><!-- /about-grid-home -->
  </div>
</section>

<!-- SVG Divider: alt to dark -->
<div class="divider-to-dark" aria-hidden="true" style="background:var(--color-bg-alt)">
  <svg viewBox="0 0 1440 72" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,36 C360,72 720,0 1080,54 C1260,72 1380,18 1440,36 L1440,72 L0,72 Z" fill="#0d0d1a"/>
  </svg>
</div>

<!-- ═════════════════════════════════════════════
     REVIEWS — What South Florida families say
════════════════════════════════════════════════ -->
<section class="reviews-home" aria-label="Customer reviews for Mad Extra Bail Bonds" id="reviews">
  <div class="container">
    <div class="section-header-center" data-animate>
      <span class="section-eyebrow-home reviews-eyebrow">Client Experiences</span>
      <h2 class="section-h2-home reviews-h2">
        What South Florida Families Say
      </h2>
      <p class="section-lead-home reviews-sub">
        When a family calls us at 3am, they are placing real trust in us. Here is what clients across Delray Beach and South Florida have shared about working with Mad Extra Bail Bonds.
      </p>
    </div>

    <div class="reviews-grid-home">

      <article class="review-card-home" data-animate data-delay="1">
        <div class="review-stars-home" aria-label="5 out of 5 stars">★★★★★</div>
        <p class="review-text-home">
          "I called Mad Extra at 11pm on a Friday when my husband was arrested. They picked up immediately, explained everything I needed to know, and walked me through each step. He was home by Saturday morning. I had no idea what I was doing, and they made one of the worst nights of my life manageable. Cannot thank them enough."
        </p>
        <div class="review-author-home">
          <div class="review-avatar-home" aria-hidden="true">MR</div>
          <div>
            <div class="review-name-home">Maria R.</div>
            <div class="review-loc-home">West Palm Beach, FL</div>
          </div>
        </div>
      </article>

      <article class="review-card-home" data-animate data-delay="2">
        <div class="review-stars-home" aria-label="5 out of 5 stars">★★★★★</div>
        <p class="review-text-home">
          "My brother was facing a felony charge and the bail amount was high. I called several places — most didn't answer. Mad Extra answered, was completely professional, and had the paperwork moving within the hour. He was out in under 12 hours. Fast, discreet, and they actually knew what they were doing with the Broward County Jail process."
        </p>
        <div class="review-author-home">
          <div class="review-avatar-home" aria-hidden="true">CM</div>
          <div>
            <div class="review-name-home">Carlos M.</div>
            <div class="review-loc-home">Fort Lauderdale, FL</div>
          </div>
        </div>
      </article>

      <article class="review-card-home" data-animate data-delay="3">
        <div class="review-stars-home" aria-label="5 out of 5 stars">★★★★★</div>
        <p class="review-text-home">
          "First time ever dealing with anything like this and I was completely lost. Mad Extra took the time to explain how bail bonds work in Florida, what the 10% fee means, and what to expect next. No pressure, no confusion. I felt informed instead of taken advantage of. I would absolutely recommend them to anyone in South Florida."
        </p>
        <div class="review-author-home">
          <div class="review-avatar-home" aria-hidden="true">JT</div>
          <div>
            <div class="review-name-home">Jennifer T.</div>
            <div class="review-loc-home">Delray Beach, FL</div>
          </div>
        </div>
      </article>

    </div><!-- /reviews-grid-home -->
    <p class="review-note">Reviews reflect real client experiences. Placeholder — replace with verified Google or Yelp reviews after launch.</p>
  </div>
</section>

<!-- SVG Divider: dark to bg -->
<div class="divider-to-light" aria-hidden="true" style="background:var(--color-bg)">
  <svg viewBox="0 0 1440 72" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,72 C480,0 960,72 1440,18 L1440,72 L0,72 Z" fill="var(--color-bg)"/>
  </svg>
</div>

<!-- ═════════════════════════════════════════════
     FAQ — Bail bonds questions answered
════════════════════════════════════════════════ -->
<section class="faq-home" aria-label="Frequently asked questions about bail bonds in South Florida" id="faq">
  <div class="container">
    <div class="section-header-center" data-animate>
      <span class="section-eyebrow-home">Got Questions?</span>
      <h2 class="section-h2-home">
        Common Questions About <span class="hl">Bail Bonds</span> in South Florida
      </h2>
      <p class="section-lead-home">
        When you are dealing with a bail situation for the first time, it is normal to have a lot of questions.
        Here are the ones we hear most from families across Delray Beach and South Florida.
      </p>
    </div>

    <div class="faq-grid-home">
      <?php foreach ($_faqs as $i => $faq): ?>
      <div class="faq-card-home" data-animate data-delay="<?php echo min(($i % 4) + 1, 4); ?>">
        <h3 class="faq-q-home"><?php echo htmlspecialchars($faq['q']); ?></h3>
        <p class="faq-a-home"><?php echo htmlspecialchars($faq['a']); ?></p>
      </div>
      <?php endforeach; ?>
    </div>

    <div style="text-align:center;margin-top:var(--space-10)" data-animate>
      <a href="/faq/" class="btn btn-outline-white" style="background:var(--color-secondary);color:#fff;border-color:var(--color-secondary);padding:14px 32px">
        View All FAQ →
      </a>
    </div>
  </div>
</section>

<!-- ═════════════════════════════════════════════
     SERVICE AREAS — Counties and cities
════════════════════════════════════════════════ -->
<section class="areas-home" aria-label="Bail bond service areas in South Florida" id="service-areas">
  <div class="container">
    <div data-animate>
      <span class="section-eyebrow-home">Where We Post Bail</span>
      <h2 class="section-h2-home">
        Bail Bonds Near Me — <span class="hl">Every City</span> in South Florida
      </h2>
      <p class="section-lead-home">
        From Delray Beach to Miami and everywhere in between, Mad Extra Bail Bonds posts bail across all three South Florida counties.
        If your loved one is in a South Florida jail, we can get there.
      </p>
    </div>

    <?php
    // Group areas by county for display
    $groupedAreas = [];
    foreach ($serviceAreas as $area) {
        $groupedAreas[$area['county']][] = $area;
    }
    foreach ($groupedAreas as $county => $areas):
    ?>
    <div class="county-group" data-animate>
      <div class="county-heading"><?php echo htmlspecialchars($county); ?></div>
      <div class="city-tag-row">
        <?php foreach ($areas as $area): ?>
        <a href="/areas/<?php echo htmlspecialchars($area['slug']); ?>/" class="city-tag">
          <?php echo htmlspecialchars($area['name']); ?>
        </a>
        <?php endforeach; ?>
      </div>
    </div>
    <?php endforeach; ?>

    <div class="areas-cta-row" data-animate>
      <a href="/areas/" class="btn btn-primary btn-lg">View All Service Areas →</a>
    </div>

  </div>
</section>

<!-- ═════════════════════════════════════════════
     CTA BANNER — Final conversion section
════════════════════════════════════════════════ -->
<section class="cta-home" aria-label="Contact Mad Extra Bail Bonds" id="contact">
  <div class="container">
    <div data-animate>
      <h2>
        Need Bail Bonds <span class="hl-gold">Right Now?</span><br>
        We Are Standing By.
      </h2>
      <p>
        Your call goes to a licensed Florida bail bondsman — not a recording, not a call center.
        Whether it is a misdemeanor in Delray Beach or a federal charge in Miami-Dade,
        Mad Extra Bail Bonds moves fast when your family needs it most.
      </p>
      <div class="cta-btn-row">
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo $_phoneRaw; ?>" class="btn-cta-primary">
          <?php echo lucide_icon('phone'); ?>
          Call Now — Available 24/7
        </a>
        <?php endif; ?>
        <a href="/contact/" class="btn-cta-secondary">
          Send a Message →
        </a>
      </div>
      <?php if (!empty($phone)): ?>
      <p class="cta-phone-line">
        Direct line: <strong><?php echo htmlspecialchars($phone); ?></strong> &nbsp;—&nbsp; No hold, no voicemail
      </p>
      <?php endif; ?>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
