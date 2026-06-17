<?php
/**
 * services/index.php — Services Main Page
 * Mad Extra Bail Bonds | Delray Beach, FL
 * Phase 4: Service Pages
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Bail Bond Services in South Florida | Mad Extra Bail Bonds | 24/7';
$pageDescription = 'Full-service bail bond company serving Palm Beach, Broward & Miami-Dade County 24/7. DUI, felony, misdemeanor, federal, immigration bonds — licensed FL bail bondsman available now.';
$canonicalUrl    = $siteUrl . '/services/';
$currentPage     = 'services';

$_breadcrumb = generateBreadcrumbSchema([
    ['name' => 'Home',     'url' => $siteUrl . '/'],
    ['name' => 'Services', 'url' => $siteUrl . '/services/'],
]);

$_faqs = [
    [
        'q' => 'What types of bail bonds does Mad Extra Bail Bonds handle in South Florida?',
        'a' => 'We handle all bail bond types across South Florida including standard criminal bail bonds, DUI bail bonds, drug charge bail bonds, felony bonds, misdemeanor bonds, federal bail bonds, immigration/ICE detention bonds, and warrant bonds. We serve every jail facility in Palm Beach, Broward, and Miami-Dade County, 24 hours a day.',
    ],
    [
        'q' => 'How fast can you get someone released from jail in Delray Beach or the surrounding area?',
        'a' => 'For misdemeanor arrests in Palm Beach County, most releases happen within 2 to 6 hours of your call to us. Felony charges generally take 6 to 24 hours depending on booking and processing at the facility. We begin the paperwork the moment you contact us — every minute counts and we treat your situation with the urgency it deserves.',
    ],
    [
        'q' => 'How much does a bail bond cost in Florida?',
        'a' => 'Florida law sets bail bond premiums at exactly 10% of the total court-ordered bail amount — this rate is fixed statewide and non-negotiable. A $5,000 bail order costs $500 in premium; a $50,000 bail order costs $5,000. That premium is non-refundable. Payment plans may be available for qualifying clients — call us to discuss your situation.',
    ],
    [
        'q' => 'Do I need collateral to get a bail bond?',
        'a' => 'Most bonds under $50,000 do not require collateral. For higher bail amounts or elevated flight-risk situations, we may require collateral such as real estate equity, a vehicle title, or other assets. We are always upfront about any collateral requirements before you commit to anything.',
    ],
];
$_faqSchema = generateFAQSchema($_faqs);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
echo '<script type="application/ld+json">' . json_encode($_breadcrumb, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>' . "\n";
echo '<script type="application/ld+json">' . json_encode($_faqSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>' . "\n";
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
/* ============================================================
   SERVICES INDEX — Mad Extra Bail Bonds
   Premium Tier | Dark/Neon Design System
   Techniques: layered hero, neon orbs, SVG dividers,
   glassmorphism cards, gradient-text, dark tints,
   neon glow buttons, staggered reveals, animated ticker
   ============================================================ */

/* ── 1. HERO ── */
.hero-svc {
  position: relative;
  min-height: 58vh;
  display: flex;
  align-items: center;
  background: #09090f;
  overflow: hidden;
  padding-top: var(--nav-height, 72px);
  padding-bottom: var(--space-16);
}
/* Technique 1: layered ::before gradient + ::after noise texture */
.hero-svc::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 60% 80% at 5% 60%, rgba(229,53,231,0.25) 0%, transparent 65%),
    radial-gradient(ellipse 50% 60% at 90% 15%, rgba(249,183,62,0.18) 0%, transparent 60%),
    radial-gradient(ellipse 70% 40% at 50% 105%, rgba(26,43,60,0.98) 0%, transparent 85%);
  pointer-events: none;
}
.hero-svc::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.035'/%3E%3C/svg%3E");
  opacity: 0.5;
  pointer-events: none;
}
/* Technique 2: floating neon orbs */
.svc-orb {
  position: absolute;
  border-radius: 50%;
  pointer-events: none;
  will-change: transform;
}
.svc-orb-1 {
  width: 500px; height: 500px;
  top: -160px; left: -120px;
  background: radial-gradient(circle, rgba(229,53,231,0.16) 0%, transparent 70%);
  animation: svc-orb-drift 12s ease-in-out infinite;
}
.svc-orb-2 {
  width: 380px; height: 380px;
  bottom: -60px; right: 5%;
  background: radial-gradient(circle, rgba(249,183,62,0.13) 0%, transparent 70%);
  animation: svc-orb-drift 16s ease-in-out infinite reverse;
  animation-delay: -5s;
}
@keyframes svc-orb-drift {
  0%, 100% { transform: translate(0,0) scale(1); }
  40%       { transform: translate(14px,-18px) scale(1.05); }
  70%       { transform: translate(-10px,12px) scale(0.97); }
}
.hero-svc-inner {
  position: relative;
  z-index: 2;
  text-align: center;
  padding: var(--space-16) 0 var(--space-8);
}
.hero-svc-eyebrow {
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
  border: 1px solid rgba(229,53,231,0.45);
  border-radius: var(--radius-full);
  background: rgba(229,53,231,0.07);
  margin-bottom: var(--space-5);
}
.hero-svc-eyebrow .pulse-dot {
  width: 7px; height: 7px;
  border-radius: 50%;
  background: var(--color-secondary);
  box-shadow: 0 0 8px var(--color-secondary);
  animation: pulse-glow 2s ease-in-out infinite;
  flex-shrink: 0;
}
@keyframes pulse-glow {
  0%,100% { opacity:1; transform:scale(1); }
  50%     { opacity:.6; transform:scale(.75); }
}
.hero-svc h1 {
  font-size: clamp(2rem, 4.5vw, 3.4rem);
  font-weight: 900;
  color: var(--color-white);
  line-height: 1.08;
  margin-bottom: var(--space-5);
  letter-spacing: -0.025em;
  text-wrap: balance;
}
.hero-svc h1 .hl-gold {
  color: var(--color-accent);
  text-shadow: 0 0 28px rgba(249,183,62,0.55);
}
.hero-svc h1 .hl-mag {
  color: var(--color-secondary);
  text-shadow: 0 0 28px rgba(229,53,231,0.55);
}
/* AEO: Speakable hero-answer */
.hero-answer-svc {
  font-size: 1rem;
  color: rgba(255,255,255,0.7);
  line-height: 1.8;
  max-width: 620px;
  margin: 0 auto var(--space-8);
}
.hero-svc-btns {
  display: flex;
  gap: var(--space-4);
  justify-content: center;
  flex-wrap: wrap;
  margin-bottom: var(--space-10);
}
.btn-svc-primary {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 14px 32px;
  background: var(--color-secondary);
  color: var(--color-white);
  font-family: var(--font-heading);
  font-size: 0.85rem;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  border-radius: var(--radius-md);
  text-decoration: none;
  box-shadow: 0 0 24px rgba(229,53,231,0.45), 0 4px 16px rgba(0,0,0,0.3);
  transition: all var(--transition-base);
}
.btn-svc-primary:hover {
  background: #f043f2;
  box-shadow: 0 0 44px rgba(229,53,231,0.7), 0 8px 24px rgba(0,0,0,0.35);
  transform: translateY(-2px);
  color: var(--color-white);
}
.btn-svc-primary svg { width: 16px; height: 16px; }
.btn-svc-secondary {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 13px 26px;
  background: transparent;
  color: var(--color-accent);
  border: 2px solid rgba(249,183,62,0.6);
  font-family: var(--font-heading);
  font-size: 0.85rem;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  border-radius: var(--radius-md);
  text-decoration: none;
  transition: all var(--transition-base);
}
.btn-svc-secondary:hover {
  background: var(--color-accent);
  color: #0a0d1a;
  border-color: var(--color-accent);
  box-shadow: 0 0 28px rgba(249,183,62,0.4);
  transform: translateY(-2px);
}
/* Trust badges row */
.hero-svc-trust {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-2);
  justify-content: center;
}
.svc-htb {
  display: inline-flex;
  align-items: center;
  gap: 5px;
  font-size: 0.68rem;
  font-weight: 700;
  color: rgba(255,255,255,0.75);
  padding: 5px 12px;
  border-radius: var(--radius-full);
  background: rgba(255,255,255,0.055);
  border: 1px solid rgba(255,255,255,0.1);
  text-transform: uppercase;
  letter-spacing: 0.5px;
  white-space: nowrap;
}
.svc-htb svg { width: 11px; height: 11px; color: var(--color-accent); flex-shrink: 0; }

/* ── 2. TICKER ── */
.ticker-svc {
  position: relative;
  z-index: 10;
  background: linear-gradient(90deg, #2a0a2a 0%, var(--color-secondary) 35%, #1a2b3c 70%, #2a0a2a 100%);
  background-size: 300% 100%;
  animation: ticker-bg-shift 7s linear infinite;
  overflow: hidden;
  padding: 11px 0;
}
@keyframes ticker-bg-shift {
  0%   { background-position: 0% 50%; }
  100% { background-position: 300% 50%; }
}
.ticker-svc-track {
  display: flex;
  width: max-content;
  animation: ticker-move-svc 30s linear infinite;
}
@keyframes ticker-move-svc {
  0%   { transform: translateX(0); }
  100% { transform: translateX(-50%); }
}
.ticker-svc-item {
  display: inline-flex;
  align-items: center;
  gap: var(--space-3);
  font-family: var(--font-heading);
  font-size: 0.68rem;
  font-weight: 800;
  color: var(--color-white);
  text-transform: uppercase;
  letter-spacing: 2px;
  padding: 0 var(--space-8);
  white-space: nowrap;
}
.ticker-svc-sep { color: rgba(255,255,255,0.45); font-size: 0.9rem; }

/* ── 3. SERVICES GRID ── */
/* Technique 3: dark tinted service cards with neon hover borders */
.svc-grid-section {
  padding: var(--space-16) 0;
  background: #f4f6f9;
  position: relative;
}
.svc-grid-section-header {
  text-align: center;
  margin-bottom: var(--space-12);
}
.sg-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  font-family: var(--font-heading);
  font-size: 0.68rem;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 3px;
  color: var(--color-secondary);
  padding: 6px 14px;
  border: 1px solid rgba(229,53,231,0.3);
  border-radius: var(--radius-full);
  background: rgba(229,53,231,0.06);
  margin-bottom: var(--space-4);
}
.sg-h2 {
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 900;
  color: var(--color-dark);
  line-height: 1.12;
  text-wrap: balance;
  letter-spacing: -0.02em;
  margin-bottom: var(--space-4);
}
.sg-h2 .hl { color: var(--color-secondary); }
/* AEO answer-block under H2 */
.answer-block {
  background: linear-gradient(135deg, rgba(229,53,231,0.07), rgba(249,183,62,0.04));
  border-left: 3px solid var(--color-secondary);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  padding: var(--space-5) var(--space-6);
  margin: 0 auto var(--space-3);
  max-width: 680px;
  text-align: left;
}
.answer-block p {
  font-size: 0.95rem;
  color: var(--color-dark);
  line-height: 1.8;
  margin: 0;
  font-style: italic;
}
.sg-lead {
  font-size: 1rem;
  color: var(--color-gray);
  max-width: 560px;
  margin: var(--space-2) auto 0;
  text-align: center;
  line-height: 1.75;
}

/* Technique 4: service card grid */
.services-main-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 20px;
  margin-top: var(--space-10);
}
.svc-main-card {
  background: var(--color-white);
  border: 1px solid rgba(229,53,231,0.1);
  border-radius: var(--radius-lg);
  overflow: hidden;
  display: flex;
  flex-direction: column;
  transition: transform var(--transition-base), box-shadow var(--transition-base), border-color var(--transition-base);
  position: relative;
}
.svc-main-card::after {
  content: '';
  position: absolute;
  bottom: 0; left: 0; right: 0;
  height: 2px;
  background: linear-gradient(90deg, var(--color-secondary), var(--color-accent));
  transform: scaleX(0);
  transform-origin: left;
  transition: transform var(--transition-base);
}
.svc-main-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 16px 40px rgba(229,53,231,0.16), 0 4px 12px rgba(0,0,0,0.07);
  border-color: rgba(229,53,231,0.3);
}
.svc-main-card:hover::after { transform: scaleX(1); }
.svc-main-banner {
  height: 90px;
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
  overflow: hidden;
}
.svc-main-card:nth-child(4n+1) .svc-main-banner { background: linear-gradient(145deg, #09090f 0%, #1e0a2e 100%); }
.svc-main-card:nth-child(4n+2) .svc-main-banner { background: linear-gradient(145deg, #0d1520 0%, #1a2b3c 100%); }
.svc-main-card:nth-child(4n+3) .svc-main-banner { background: linear-gradient(145deg, #130610 0%, #2a0a2a 100%); }
.svc-main-card:nth-child(4n+4) .svc-main-banner { background: linear-gradient(145deg, #0a0f1a 0%, #141e35 100%); }
.svc-icon-ring {
  width: 52px; height: 52px;
  border-radius: 50%;
  border: 1px solid rgba(255,255,255,0.15);
  background: rgba(255,255,255,0.07);
  backdrop-filter: blur(8px);
  display: flex; align-items: center; justify-content: center;
}
.svc-icon-ring svg { width: 24px; height: 24px; color: var(--color-accent); }
.svc-main-body {
  padding: var(--space-5) var(--space-5) var(--space-4);
  display: flex;
  flex-direction: column;
  flex: 1;
}
.svc-main-body h3 {
  font-size: 0.95rem;
  font-weight: 800;
  color: var(--color-dark);
  margin-bottom: var(--space-2);
  line-height: 1.3;
}
.svc-main-body p {
  font-size: 0.82rem;
  color: var(--color-gray);
  line-height: 1.7;
  flex: 1;
  margin-bottom: var(--space-4);
}
.svc-main-body ul {
  list-style: none;
  padding: 0;
  margin: 0 0 var(--space-4);
  border-top: 1px solid rgba(229,53,231,0.08);
  padding-top: var(--space-3);
}
.svc-main-body ul li {
  font-size: 0.8rem;
  color: var(--color-dark);
  padding: var(--space-1) 0 var(--space-1) 1.1rem;
  position: relative;
  line-height: 1.5;
}
.svc-main-body ul li::before {
  content: '•';
  color: var(--color-accent);
  font-weight: 700;
  position: absolute;
  left: 0.2rem;
}
.svc-main-link {
  display: inline-flex;
  align-items: center;
  gap: 4px;
  font-size: 0.8rem;
  font-weight: 800;
  color: var(--color-secondary);
  text-decoration: none;
  border-top: 1px solid rgba(229,53,231,0.1);
  padding-top: var(--space-3);
  transition: gap var(--transition-fast), color var(--transition-fast);
}
.svc-main-link:hover { gap: 8px; color: var(--color-primary); }

/* ── 4. PROCESS SECTION (dark bg) ── */
/* Technique 5: dark bg with gradient process steps */
.process-svc {
  padding: var(--space-16) 0;
  background: linear-gradient(135deg, #09090f 0%, #14082a 50%, #0a1525 100%);
  position: relative;
  overflow: hidden;
}
.process-svc::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 50% 70% at 8% 50%, rgba(229,53,231,0.12) 0%, transparent 60%),
    radial-gradient(ellipse 45% 60% at 92% 50%, rgba(249,183,62,0.09) 0%, transparent 60%);
  pointer-events: none;
}
.process-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  font-family: var(--font-heading);
  font-size: 0.68rem;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 3px;
  color: var(--color-accent);
  padding: 6px 14px;
  border: 1px solid rgba(249,183,62,0.3);
  border-radius: var(--radius-full);
  background: rgba(249,183,62,0.07);
  margin-bottom: var(--space-4);
}
.process-h2 {
  font-size: clamp(1.7rem, 3vw, 2.4rem);
  font-weight: 900;
  color: var(--color-white);
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.02em;
  margin-bottom: var(--space-3);
}
.process-h2 em { color: var(--color-secondary); font-style: normal; }
.process-sub {
  font-size: 0.95rem;
  color: rgba(255,255,255,0.55);
  max-width: 500px;
  line-height: 1.75;
}
.process-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-16);
  align-items: center;
  position: relative;
  z-index: 1;
}
.process-steps {
  display: flex;
  flex-direction: column;
  gap: var(--space-6);
  margin-top: var(--space-10);
}
.process-step {
  display: flex;
  gap: var(--space-5);
  align-items: flex-start;
}
.step-num {
  flex-shrink: 0;
  width: 44px; height: 44px;
  border-radius: 50%;
  background: linear-gradient(135deg, var(--color-secondary) 0%, #8f08a0 100%);
  display: flex; align-items: center; justify-content: center;
  font-family: var(--font-heading);
  font-size: 0.9rem;
  font-weight: 900;
  color: var(--color-white);
  box-shadow: 0 0 20px rgba(229,53,231,0.35);
  flex-shrink: 0;
}
.step-content h4 {
  font-size: 0.95rem;
  font-weight: 800;
  color: var(--color-white);
  margin-bottom: var(--space-1);
}
.step-content p {
  font-size: 0.85rem;
  color: rgba(255,255,255,0.6);
  line-height: 1.7;
  margin: 0;
}
/* Technique 6: glassmorphism stat card */
.process-stat-card {
  background: rgba(255,255,255,0.04);
  border: 1px solid rgba(255,255,255,0.1);
  border-radius: 20px;
  padding: var(--space-10) var(--space-8);
  backdrop-filter: blur(12px);
  -webkit-backdrop-filter: blur(12px);
  position: relative;
  overflow: hidden;
}
.process-stat-card::before {
  content: '';
  position: absolute;
  inset: -1px;
  border-radius: 21px;
  background: linear-gradient(135deg, rgba(229,53,231,0.35) 0%, rgba(249,183,62,0.2) 50%, transparent 100%);
  z-index: -1;
  opacity: 0.5;
}
.ps-stat-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-5);
  margin-bottom: var(--space-6);
}
.ps-stat {
  text-align: center;
  padding: var(--space-5);
  background: rgba(255,255,255,0.04);
  border-radius: var(--radius-lg);
  border: 1px solid rgba(255,255,255,0.07);
}
.ps-num {
  font-family: var(--font-heading);
  font-size: 2.4rem;
  font-weight: 900;
  background: linear-gradient(135deg, #fff 20%, var(--color-accent) 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  line-height: 1;
  display: block;
  margin-bottom: var(--space-1);
}
.ps-lbl {
  font-family: var(--font-heading);
  font-size: 0.62rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  color: rgba(255,255,255,0.45);
}
.ps-badge {
  display: flex;
  align-items: center;
  gap: var(--space-3);
  background: rgba(249,183,62,0.12);
  border: 1px solid rgba(249,183,62,0.3);
  border-radius: var(--radius-lg);
  padding: var(--space-4);
}
.ps-badge svg { width: 20px; height: 20px; color: var(--color-accent); flex-shrink: 0; }
.ps-badge p {
  font-size: 0.82rem;
  color: rgba(255,255,255,0.8);
  margin: 0;
  line-height: 1.5;
}
.ps-badge p strong { color: var(--color-accent); }

/* ── 5. SVG DIVIDER ── */
.divider-to-light { line-height: 0; background: #09090f; }
.divider-to-light svg { display: block; width: 100%; }
.divider-to-dark { line-height: 0; background: #f4f6f9; }
.divider-to-dark svg { display: block; width: 100%; }

/* ── 6. FAQ SECTION ── */
.faq-svc {
  padding: var(--space-16) 0;
  background: var(--color-white);
}
.faq-inner {
  max-width: 820px;
  margin: 0 auto;
}
.faq-eyebrow { margin-bottom: var(--space-3); }
.faq-h2 {
  font-size: clamp(1.7rem, 3vw, 2.4rem);
  font-weight: 900;
  color: var(--color-dark);
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.02em;
  margin-bottom: var(--space-3);
}
.faq-h2 em { color: var(--color-secondary); font-style: normal; }
.faq-list {
  margin-top: var(--space-10);
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
}
/* Technique 7: FAQ accordion with neon left border on open */
.faq-item-svc {
  border: 1px solid rgba(229,53,231,0.12);
  border-radius: var(--radius-lg);
  overflow: hidden;
  transition: border-color var(--transition-base), box-shadow var(--transition-base);
}
.faq-item-svc.open {
  border-color: rgba(229,53,231,0.35);
  box-shadow: 0 4px 20px rgba(229,53,231,0.08);
}
.faq-q-svc {
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
  font-size: 0.95rem;
  font-weight: 700;
  color: var(--color-dark);
  transition: color var(--transition-fast);
  user-select: none;
}
.faq-q-svc:hover { color: var(--color-secondary); }
.faq-item-svc.open .faq-q-svc { color: var(--color-secondary); }
.faq-icon-svc {
  flex-shrink: 0;
  width: 28px; height: 28px;
  border-radius: 50%;
  background: rgba(229,53,231,0.08);
  border: 1px solid rgba(229,53,231,0.2);
  display: flex; align-items: center; justify-content: center;
  transition: background var(--transition-base), transform var(--transition-base);
  font-size: 1rem;
  color: var(--color-secondary);
  font-weight: 900;
}
.faq-item-svc.open .faq-icon-svc {
  background: var(--color-secondary);
  color: var(--color-white);
  transform: rotate(45deg);
}
.faq-a-svc {
  display: none;
  padding: 0 var(--space-6) var(--space-5);
  font-size: 0.9rem;
  color: var(--color-gray);
  line-height: 1.8;
  border-top: 1px solid rgba(229,53,231,0.08);
  padding-top: var(--space-4);
}
.faq-item-svc.open .faq-a-svc { display: block; }

/* ── 7. EMERGENCY CTA ── */
.cta-emergency-svc {
  padding: var(--space-16) 0;
  background: linear-gradient(135deg, #09090f 0%, #1e082e 50%, #0a1525 100%);
  position: relative;
  overflow: hidden;
  text-align: center;
}
.cta-emergency-svc::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 60% 80% at 20% 50%, rgba(229,53,231,0.15) 0%, transparent 60%),
    radial-gradient(ellipse 50% 70% at 80% 50%, rgba(249,183,62,0.1) 0%, transparent 60%);
  pointer-events: none;
}
/* Technique 8: pulsing border glow on CTA */
.cta-glow-ring {
  display: inline-block;
  padding: 2px;
  border-radius: calc(var(--radius-lg) + 2px);
  background: linear-gradient(135deg, var(--color-secondary), var(--color-accent));
  box-shadow: 0 0 40px rgba(229,53,231,0.4), 0 0 80px rgba(229,53,231,0.15);
  animation: cta-ring-pulse 3s ease-in-out infinite;
  margin-bottom: var(--space-8);
}
@keyframes cta-ring-pulse {
  0%,100% { box-shadow: 0 0 40px rgba(229,53,231,0.4), 0 0 80px rgba(229,53,231,0.15); }
  50%      { box-shadow: 0 0 60px rgba(229,53,231,0.65), 0 0 120px rgba(229,53,231,0.25); }
}
.cta-inner-card {
  background: rgba(255,255,255,0.05);
  border-radius: var(--radius-lg);
  padding: var(--space-10) var(--space-12);
  backdrop-filter: blur(10px);
}
.cta-emergency-svc h2 {
  font-size: clamp(1.6rem, 3vw, 2.4rem);
  font-weight: 900;
  color: var(--color-white);
  text-wrap: balance;
  margin-bottom: var(--space-4);
}
.cta-emergency-svc h2 em { color: var(--color-accent); font-style: normal; }
.cta-emergency-svc p {
  font-size: 1rem;
  color: rgba(255,255,255,0.6);
  max-width: 480px;
  margin: 0 auto var(--space-8);
  line-height: 1.75;
}
.cta-btns-svc {
  display: flex;
  gap: var(--space-4);
  justify-content: center;
  flex-wrap: wrap;
}

/* ── RESPONSIVE ── */
@media (max-width: 1199px) {
  .services-main-grid { grid-template-columns: repeat(2, 1fr); }
  .process-grid { grid-template-columns: 1fr; gap: var(--space-10); }
}
@media (max-width: 767px) {
  .services-main-grid { grid-template-columns: 1fr; }
  .ps-stat-grid { grid-template-columns: 1fr 1fr; }
  .cta-inner-card { padding: var(--space-8) var(--space-5); }
  .hero-svc-btns { gap: var(--space-3); }
}
@media (max-width: 480px) {
  .ps-stat-grid { grid-template-columns: 1fr; }
}
</style>

<!-- ═══ HERO ═══ -->
<section class="hero-svc" aria-label="Bail bond services overview">
  <div class="svc-orb svc-orb-1"></div>
  <div class="svc-orb svc-orb-2"></div>

  <div class="container">
    <div class="hero-svc-inner">
      <span class="hero-svc-eyebrow">
        <span class="pulse-dot"></span>
        Available 24/7 Across South Florida
      </span>

      <h1>
        <span class="hl-gold">Bail Bond Services</span> Near Me —<br>
        <span class="hl-mag">Fast Release</span> from Any South Florida Jail
      </h1>

      <p class="hero-answer hero-answer-svc">
        Mad Extra Bail Bonds is a licensed Florida bail bond company serving Palm Beach, Broward, and Miami-Dade counties 24 hours a day. We handle every charge type — DUI, drug offenses, felonies, misdemeanors, federal cases, and immigration holds — with over 11 years of experience helping South Florida families.
      </p>

      <div class="hero-svc-btns">
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo preg_replace('/\D/','',$phone); ?>" class="btn-svc-primary">
          <?php echo lucide_icon('phone'); ?>
          Call Now — Available 24/7
        </a>
        <?php else: ?>
        <a href="/contact/" class="btn-svc-primary">
          <?php echo lucide_icon('zap'); ?>
          Get Emergency Help Now
        </a>
        <?php endif; ?>
        <a href="/contact/" class="btn-svc-secondary">Free Consultation</a>
      </div>

      <div class="hero-svc-trust">
        <span class="svc-htb"><?php echo lucide_icon('shield-check'); ?> Licensed FL Bail Bondsman</span>
        <span class="svc-htb"><?php echo lucide_icon('clock'); ?> 24/7 Emergency Response</span>
        <span class="svc-htb"><?php echo lucide_icon('zap'); ?> Same-Day Release Possible</span>
        <span class="svc-htb"><?php echo lucide_icon('landmark'); ?> All South FL Jails</span>
        <span class="svc-htb"><?php echo lucide_icon('globe'); ?> Multilingual Service</span>
      </div>
    </div>
  </div>
</section>

<!-- ═══ TICKER ═══ -->
<div class="ticker-svc" aria-hidden="true">
  <div class="ticker-svc-track">
    <?php for ($i = 0; $i < 2; $i++): ?>
    <span class="ticker-svc-item">DUI Bonds <span class="ticker-svc-sep">◆</span></span>
    <span class="ticker-svc-item">Felony Bonds <span class="ticker-svc-sep">◆</span></span>
    <span class="ticker-svc-item">Drug Charge Bonds <span class="ticker-svc-sep">◆</span></span>
    <span class="ticker-svc-item">Federal Bonds <span class="ticker-svc-sep">◆</span></span>
    <span class="ticker-svc-item">Immigration Bonds <span class="ticker-svc-sep">◆</span></span>
    <span class="ticker-svc-item">Warrant Bonds <span class="ticker-svc-sep">◆</span></span>
    <span class="ticker-svc-item">Misdemeanor Bonds <span class="ticker-svc-sep">◆</span></span>
    <span class="ticker-svc-item">24/7 Service <span class="ticker-svc-sep">◆</span></span>
    <?php endfor; ?>
  </div>
</div>

<!-- ═══ SERVICES GRID ═══ -->
<section class="svc-grid-section" aria-label="All bail bond service types">
  <div class="container">
    <div class="svc-grid-section-header">
      <span class="sg-eyebrow">Our Services</span>
      <h2 class="sg-h2">
        What types of <em class="hl">bail bonds</em> does<br>Mad Extra handle in South Florida?
      </h2>
      <div class="answer-block">
        <p>Mad Extra Bail Bonds handles every type of bail bond in South Florida — from standard criminal bonds and DUI arrests to felony charges, federal cases, immigration detentions, and active warrants. We work with every jail facility in Palm Beach, Broward, and Miami-Dade counties, 24 hours a day, 7 days a week.</p>
      </div>
      <p class="sg-lead">Licensed bail bondsman based in Delray Beach — available any hour of the day or night for any charge type.</p>
    </div>

    <div class="services-main-grid">
      <?php foreach ($services as $svc): ?>
      <article class="svc-main-card">
        <div class="svc-main-banner">
          <div class="svc-icon-ring">
            <?php echo lucide_icon($svc['icon']); ?>
          </div>
        </div>
        <div class="svc-main-body">
          <h3><?php echo htmlspecialchars($svc['name']); ?></h3>
          <p><?php echo htmlspecialchars($svc['description']); ?></p>
          <ul>
            <?php
            // Bullet points per service
            $bullets = [
              'bail-bonds'             => ['Available 24 hours a day', 'All South FL jail facilities', 'Licensed FL bondsman'],
              'dui-bail-bonds'         => ['DUI bail same day possible', 'All Palm Beach & Broward jails', 'Know DUI timelines cold'],
              'drug-charge-bail-bonds' => ['Confidential & discreet', 'All charge levels handled', 'Fast across South FL'],
              'felony-bail-bonds'      => ['High-bail experience', 'Collateral options available', '24/7 emergency response'],
              'misdemeanor-bail-bonds' => ['Most releases within hours', 'Low 10% FL premium', 'All misdemeanor charges'],
              'federal-bail-bonds'     => ['Federal court experience', 'Complex case specialists', 'Statewide coverage'],
              'immigration-bail-bonds' => ['ICE detention bonds', 'Bilingual support available', 'Miami-Dade & Broward coverage'],
              'warrant-bail-bonds'     => ['Voluntary surrender support', 'Traffic warrant resolution', 'Avoid surprise arrests'],
            ];
            $blist = $bullets[$svc['slug']] ?? ['Licensed bondsman', '24/7 availability', 'All South FL facilities'];
            foreach ($blist as $b): ?>
            <li><?php echo htmlspecialchars($b); ?></li>
            <?php endforeach; ?>
          </ul>
          <a href="/services/<?php echo htmlspecialchars($svc['slug']); ?>/" class="svc-main-link">
            Learn more <?php echo lucide_icon('arrow-right'); ?>
          </a>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══ SVG DIVIDER ═══ -->
<div class="divider-to-dark" aria-hidden="true">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,60 L0,0 Q360,60 720,20 Q1080,-20 1440,30 L1440,60 Z" fill="#09090f"/>
  </svg>
</div>

<!-- ═══ PROCESS SECTION ═══ -->
<section class="process-svc" aria-label="How the bail bond process works">
  <div class="container">
    <div class="process-grid">
      <!-- Left: steps -->
      <div>
        <span class="process-eyebrow"><?php echo lucide_icon('zap'); ?> The Process</span>
        <h2 class="process-h2">
          How does the bail bond process work<br>in <em>South Florida?</em>
        </h2>
        <p class="process-sub">From your first call to release, here's exactly what happens when you work with Mad Extra Bail Bonds.</p>

        <div class="process-steps">
          <div class="process-step">
            <div class="step-num">1</div>
            <div class="step-content">
              <h4>Call or Contact Us 24/7</h4>
              <p>Reach us any hour — day or night, weekdays or holidays. Tell us who was arrested, what they're charged with, and which facility they're in.</p>
            </div>
          </div>
          <div class="process-step">
            <div class="step-num">2</div>
            <div class="step-content">
              <h4>We Confirm Bail Amount & Conditions</h4>
              <p>We check with the facility to confirm the bail amount, the hold status, and any conditions on release. We explain all of this clearly before you pay anything.</p>
            </div>
          </div>
          <div class="process-step">
            <div class="step-num">3</div>
            <div class="step-content">
              <h4>Sign Bond Documents & Pay Premium</h4>
              <p>Florida law sets the bail bond premium at 10% of the bail amount. You sign an indemnity agreement and we post the bond directly with the jail.</p>
            </div>
          </div>
          <div class="process-step">
            <div class="step-num">4</div>
            <div class="step-content">
              <h4>Release Processed — Your Loved One Comes Home</h4>
              <p>Once the bond is posted, the jail begins processing the release. Misdemeanor releases often happen in 2-6 hours. Felony charges can take 6-24 hours depending on the facility.</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Right: stat card -->
      <div>
        <div class="process-stat-card">
          <div class="ps-stat-grid">
            <div class="ps-stat">
              <span class="ps-num">11+</span>
              <span class="ps-lbl">Years in Business</span>
            </div>
            <div class="ps-stat">
              <span class="ps-num">24/7</span>
              <span class="ps-lbl">Always Available</span>
            </div>
            <div class="ps-stat">
              <span class="ps-num">10%</span>
              <span class="ps-lbl">FL Legal Premium Rate</span>
            </div>
            <div class="ps-stat">
              <span class="ps-num">3</span>
              <span class="ps-lbl">Counties Covered</span>
            </div>
          </div>
          <div class="ps-badge">
            <?php echo lucide_icon('shield-check'); ?>
            <p>Mad Extra Bail Bonds is a <strong>licensed Florida bail bondsman</strong> operating under the Florida Department of Financial Services. Serving Delray Beach, Palm Beach, Broward, and Miami-Dade counties.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SVG DIVIDER ═══ -->
<div class="divider-to-light" aria-hidden="true">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,0 Q360,60 720,30 Q1080,0 1440,50 L1440,60 L0,60 Z" fill="#ffffff"/>
  </svg>
</div>

<!-- ═══ FAQ SECTION ═══ -->
<section class="faq-svc" aria-label="Bail bond FAQ">
  <div class="container">
    <div class="faq-inner">
      <span class="sg-eyebrow faq-eyebrow">Common Questions</span>
      <h2 class="faq-h2">
        Frequently asked questions about<br><em>bail bonds in South Florida</em>
      </h2>
      <p class="process-sub" style="color:var(--color-gray)">Direct answers to the questions families ask most when a loved one has been arrested.</p>

      <div class="faq-list" role="list">
        <?php foreach ($_faqs as $i => $faq): ?>
        <div class="faq-item-svc" role="listitem">
          <button class="faq-q-svc" aria-expanded="false" onclick="toggleFaq(this)">
            <?php echo htmlspecialchars($faq['q']); ?>
            <span class="faq-icon-svc" aria-hidden="true">+</span>
          </button>
          <div class="faq-a-svc" role="region">
            <p><?php echo htmlspecialchars($faq['a']); ?></p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- ═══ EMERGENCY CTA ═══ -->
<section class="cta-emergency-svc" aria-label="Emergency bail bond contact">
  <div class="container" style="position:relative;z-index:1">
    <div style="max-width:580px;margin:0 auto">
      <div class="cta-glow-ring">
        <div class="cta-inner-card">
          <h2>Need a bail bondsman <em>right now</em>?</h2>
          <p>Every hour someone spends in jail is a job, a family, a livelihood at risk. We move fast because that matters. Call or contact us now — we're available every single hour of every single day.</p>
          <div class="cta-btns-svc">
            <?php if (!empty($phone)): ?>
            <a href="tel:<?php echo preg_replace('/\D/','',$phone); ?>" class="btn-svc-primary">
              <?php echo lucide_icon('phone'); ?> Call Now — 24/7
            </a>
            <?php endif; ?>
            <a href="/contact/" class="btn-svc-secondary">Send a Message</a>
          </div>
        </div>
      </div>

      <p style="font-size:0.72rem;color:rgba(255,255,255,0.35);text-align:center;margin:0;padding:0 var(--space-4)">
        Mad Extra Bail Bonds — Licensed FL Bail Bondsman | Delray Beach, FL | Serving Palm Beach, Broward &amp; Miami-Dade Counties
      </p>
    </div>
  </div>
</section>

<script>
function toggleFaq(btn) {
  const item = btn.closest('.faq-item-svc');
  const isOpen = item.classList.contains('open');
  // Close all
  document.querySelectorAll('.faq-item-svc.open').forEach(el => el.classList.remove('open'));
  document.querySelectorAll('.faq-q-svc').forEach(el => el.setAttribute('aria-expanded', 'false'));
  // Open clicked
  if (!isOpen) {
    item.classList.add('open');
    btn.setAttribute('aria-expanded', 'true');
  }
}
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
