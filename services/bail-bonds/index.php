<?php
/**
 * services/bail-bonds/index.php — Bail Bond Services Service Page
 * Mad Extra Bail Bonds | Delray Beach, FL
 * Phase 4: Service Pages
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Bail Bonds Near Me in Delray Beach & South Florida | Mad Extra | 24/7';
$pageDescription = 'Need bail bonds near you in South Florida? Mad Extra Bail Bonds posts bail in every Palm Beach, Broward & Miami-Dade jail 24/7. Licensed FL bondsman — fast release on any charge.';
$canonicalUrl    = $siteUrl . '/services/bail-bonds/';
$currentPage     = 'services';

$_breadcrumb = generateBreadcrumbSchema([
    ['name' => 'Home',     'url' => $siteUrl . '/'],
    ['name' => 'Services', 'url' => $siteUrl . '/services/'],
    ['name' => 'Bail Bond Services', 'url' => $siteUrl . '/services/bail-bonds/'],
]);

$_serviceSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'Service',
    '@id'         => $siteUrl . '/services/bail-bonds/#service-bail-bonds',
    'name'        => 'Bail Bond Services',
    'description' => 'Need bail bonds near you in South Florida? Mad Extra Bail Bonds posts bail in every Palm Beach, Broward & Miami-Dade jail 24/7. Licensed FL bondsman — fast release on any charge.',
    'url'         => $siteUrl . '/services/bail-bonds/',
    'provider'    => ['@id' => $siteUrl . '/#localbusiness'],
    'areaServed'  => [
        ['@type' => 'State', 'name' => 'Florida'],
        ['@type' => 'City',  'name' => 'Delray Beach, FL'],
    ],
    'serviceType' => 'Bail Bond Services',
];

$_faqs = [
    [
        'q' => 'What is a bail bond and how does it work near me in Delray Beach, FL?',
        'a' => 'A bail bond is a financial guarantee posted by a licensed bondsman on behalf of a defendant, promising that the defendant will appear at all scheduled court dates. In Delray Beach and across Florida, you pay a bondsman 10% of the total bail amount as a non-refundable premium. The bondsman then posts the full bail amount with the court, securing the defendant\'s release from jail until trial.',
    ],
    [
        'q' => 'Do bail bond companies operate in every city in South Florida?',
        'a' => 'Yes — Mad Extra Bail Bonds operates across Palm Beach County (Delray Beach, Boca Raton, West Palm Beach, Boynton Beach), Broward County (Fort Lauderdale, Pompano Beach, Coral Springs, Hollywood), and Miami-Dade County (Miami, Hialeah, Miami Gardens). We can post bail at every county jail and city lockup throughout this 50-mile radius.',
    ],
    [
        'q' => 'What happens if I can\'t pay the full 10% bail bond premium upfront?',
        'a' => 'We understand that 10% of a high bail amount can be a significant sum. We may offer payment plan arrangements for qualifying situations. Call us and tell us your circumstances — we will always try to find a path to get your family member home without making a difficult situation worse.',
    ],
    [
        'q' => 'Can a bail bond company help someone released from the Palm Beach County Jail?',
        'a' => 'Yes, absolutely. The Palm Beach County Jail in West Palm Beach is one of the facilities we work with most frequently. We are familiar with the booking and release processes there, and we can typically post bond and begin release processing faster than a bondsman unfamiliar with that facility.',
    ],
    [
        'q' => 'What is the fastest way to bail someone out of jail in South Florida?',
        'a' => 'The fastest path is to call a licensed bondsman the moment you learn of the arrest. Every minute without a bondsman is time lost. Call Mad Extra Bail Bonds immediately after arrest — we gather the information, verify the bond with the jail, and begin processing before the booking process is even complete at many facilities.',
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
   BAIL BOND SERVICES SERVICE PAGE — Mad Extra Bail Bonds
   Premium Tier | Dark/Neon Design System
   Techniques: layered hero gradients, neon orbs, glassmorphism,
   dark process steps, benefit cards, FAQ accordion,
   SVG dividers, gradient-text, neon glow CTA
   ============================================================ */

/* ── 1. SERVICE HERO ── */
.hero-sp {
  position: relative;
  min-height: 55vh;
  display: flex;
  align-items: center;
  background: #09090f;
  overflow: hidden;
  padding-top: var(--nav-height, 72px);
  padding-bottom: var(--space-12);
}
/* Technique 1: layered ::before radial gradients */
.hero-sp::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 55% 80% at 5% 55%, rgba(229,53,231,0.22) 0%, transparent 60%),
    radial-gradient(ellipse 45% 60% at 88% 18%, rgba(249,183,62,0.16) 0%, transparent 55%),
    radial-gradient(ellipse 65% 40% at 50% 100%, rgba(10,20,40,0.99) 0%, transparent 80%);
  pointer-events: none;
}
/* Technique 2: noise texture overlay */
.hero-sp::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.035'/%3E%3C/svg%3E");
  opacity: 0.5;
  pointer-events: none;
}
/* Technique 3: floating neon orbs */
.sp-orb {
  position: absolute;
  border-radius: 50%;
  pointer-events: none;
  will-change: transform;
}
.sp-orb-1 {
  width: 480px; height: 480px;
  top: -140px; left: -100px;
  background: radial-gradient(circle, rgba(229,53,231,0.14) 0%, transparent 70%);
  animation: sp-orb-float 13s ease-in-out infinite;
}
.sp-orb-2 {
  width: 360px; height: 360px;
  bottom: -50px; right: 6%;
  background: radial-gradient(circle, rgba(249,183,62,0.12) 0%, transparent 70%);
  animation: sp-orb-float 17s ease-in-out infinite reverse;
  animation-delay: -6s;
}
@keyframes sp-orb-float {
  0%,100% { transform: translate(0,0) scale(1); }
  40%     { transform: translate(12px,-16px) scale(1.04); }
  70%     { transform: translate(-9px,11px) scale(0.97); }
}
.hero-sp-inner {
  position: relative;
  z-index: 2;
  display: grid;
  grid-template-columns: 1fr 400px;
  gap: var(--space-12);
  align-items: center;
  padding: var(--space-12) 0;
  width: 100%;
}
.hero-sp-left { max-width: 620px; }
.sp-eyebrow {
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
.sp-eyebrow .pulse-dot {
  width: 7px; height: 7px;
  border-radius: 50%;
  background: var(--color-secondary);
  box-shadow: 0 0 8px var(--color-secondary);
  animation: pulse-dot 2s ease-in-out infinite;
  flex-shrink: 0;
}
@keyframes pulse-dot {
  0%,100% { opacity:1; transform:scale(1); }
  50%     { opacity:.6; transform:scale(.75); }
}
.hero-sp h1 {
  font-size: clamp(1.9rem, 4vw, 3.2rem);
  font-weight: 900;
  color: var(--color-white);
  line-height: 1.1;
  margin-bottom: var(--space-5);
  letter-spacing: -0.025em;
  text-wrap: balance;
}
.hero-sp h1 .hl-gold { color: var(--color-accent); text-shadow: 0 0 28px rgba(249,183,62,0.5); }
.hero-sp h1 .hl-mag  { color: var(--color-secondary); text-shadow: 0 0 28px rgba(229,53,231,0.5); }
.hero-answer {
  font-size: 1rem;
  color: rgba(255,255,255,0.68);
  line-height: 1.8;
  margin-bottom: var(--space-7);
  max-width: 560px;
}
.hero-sp-btns {
  display: flex;
  gap: var(--space-3);
  flex-wrap: wrap;
  margin-bottom: var(--space-7);
}
.btn-sp-primary {
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
.btn-sp-primary:hover {
  background: #f043f2;
  box-shadow: 0 0 42px rgba(229,53,231,0.68), 0 8px 22px rgba(0,0,0,0.35);
  transform: translateY(-2px);
  color: var(--color-white);
}
.btn-sp-primary svg { width: 15px; height: 15px; }
.btn-sp-secondary {
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
.btn-sp-secondary:hover {
  background: var(--color-accent);
  color: #0a0d1a;
  border-color: var(--color-accent);
  box-shadow: 0 0 26px rgba(249,183,62,0.4);
  transform: translateY(-2px);
}
.sp-trust-row {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-2);
}
.sp-htb {
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
.sp-htb svg { width: 11px; height: 11px; color: var(--color-accent); flex-shrink: 0; }

/* Technique 4: glassmorphism hero sidebar card */
.hero-sp-card {
  position: relative;
  background: rgba(255,255,255,0.04);
  border: 1px solid rgba(255,255,255,0.11);
  border-radius: 18px;
  padding: var(--space-7) var(--space-6);
  backdrop-filter: blur(14px);
  -webkit-backdrop-filter: blur(14px);
}
.hero-sp-card::before {
  content: '';
  position: absolute;
  inset: -1px;
  border-radius: 19px;
  background: linear-gradient(135deg, rgba(229,53,231,0.4) 0%, rgba(249,183,62,0.2) 50%, transparent 100%);
  z-index: -1;
  opacity: 0.5;
}
.hsc-title {
  font-family: var(--font-heading);
  font-size: 1.05rem;
  font-weight: 800;
  color: var(--color-white);
  margin-bottom: var(--space-2);
}
.hsc-note {
  font-size: 0.68rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  color: var(--color-secondary);
  margin-bottom: var(--space-5);
}
.hsc-list {
  list-style: none;
  padding: 0;
  margin: 0 0 var(--space-6);
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
}
.hsc-list li {
  display: flex;
  align-items: flex-start;
  gap: var(--space-2);
  font-size: 0.85rem;
  color: rgba(255,255,255,0.8);
  line-height: 1.5;
}
.hsc-check {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  width: 18px; height: 18px;
  border-radius: 50%;
  background: linear-gradient(135deg, var(--color-secondary), var(--color-accent));
  margin-top: 2px;
  font-size: 0.6rem;
  color: var(--color-white);
  font-weight: 900;
}
.hsc-cta {
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
.hsc-cta:hover {
  box-shadow: 0 8px 34px rgba(229,53,231,0.62);
  transform: translateY(-1px);
  color: var(--color-white);
}
.hsc-disclaimer {
  text-align: center;
  font-size: 0.6rem;
  color: rgba(255,255,255,0.3);
  margin-top: var(--space-3);
  line-height: 1.5;
}

/* ── 2. SVG DIVIDERS ── */
.divider-to-light { line-height: 0; background: #09090f; }
.divider-to-light svg { display: block; width: 100%; }
.divider-to-dark-sp { line-height: 0; background: #f4f6f9; }
.divider-to-dark-sp svg { display: block; width: 100%; }
.divider-to-white { line-height: 0; background: #09090f; }
.divider-to-white svg { display: block; width: 100%; }

/* ── 3. ANSWER / INTRO SECTION ── */
.intro-sp {
  padding: var(--space-16) 0;
  background: #f4f6f9;
}
.intro-sp-inner {
  max-width: 860px;
  margin: 0 auto;
}
.sp-section-eyebrow {
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
.intro-h2 {
  font-size: clamp(1.7rem, 3vw, 2.4rem);
  font-weight: 900;
  color: var(--color-dark);
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.02em;
  margin-bottom: var(--space-4);
}
.intro-h2 em { color: var(--color-secondary); font-style: normal; }
/* AEO answer block */
.answer-block {
  background: linear-gradient(135deg, rgba(229,53,231,0.07), rgba(249,183,62,0.04));
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
.intro-sp p {
  font-size: 0.95rem;
  color: var(--color-gray);
  line-height: 1.82;
  margin-bottom: var(--space-4);
}

/* ── 4. PROCESS SECTION (dark) ── */
/* Technique 5: dark bg gradient process steps on right grid panel */
.process-sp {
  padding: var(--space-16) 0;
  background: linear-gradient(135deg, #09090f 0%, #14082a 55%, #0a1425 100%);
  position: relative;
  overflow: hidden;
}
.process-sp::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 45% 70% at 5% 50%, rgba(229,53,231,0.11) 0%, transparent 60%),
    radial-gradient(ellipse 40% 60% at 95% 50%, rgba(249,183,62,0.08) 0%, transparent 60%);
  pointer-events: none;
}
.process-sp-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-16);
  align-items: start;
  position: relative;
  z-index: 1;
}
.process-sp-header {
  margin-bottom: var(--space-10);
}
.process-eyebrow-sp {
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
.process-h2-sp {
  font-size: clamp(1.6rem, 3vw, 2.3rem);
  font-weight: 900;
  color: var(--color-white);
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.02em;
  margin-bottom: var(--space-3);
}
.process-h2-sp em { color: var(--color-secondary); font-style: normal; }
.process-lead-sp {
  font-size: 0.92rem;
  color: rgba(255,255,255,0.52);
  line-height: 1.75;
  max-width: 420px;
  margin-bottom: var(--space-3);
}
.answer-block-dark {
  background: rgba(255,255,255,0.04);
  border-left: 3px solid var(--color-accent);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  padding: var(--space-4) var(--space-5);
  margin-bottom: var(--space-5);
}
.answer-block-dark p {
  font-size: 0.88rem;
  color: rgba(255,255,255,0.72);
  line-height: 1.8;
  margin: 0;
  font-style: italic;
}
.process-steps-sp {
  display: flex;
  flex-direction: column;
  gap: var(--space-5);
}
.process-step-sp {
  display: flex;
  gap: var(--space-5);
  align-items: flex-start;
}
.step-num-sp {
  flex-shrink: 0;
  width: 40px; height: 40px;
  border-radius: 50%;
  background: linear-gradient(135deg, var(--color-secondary) 0%, #8f08a0 100%);
  display: flex; align-items: center; justify-content: center;
  font-family: var(--font-heading);
  font-size: 0.85rem;
  font-weight: 900;
  color: var(--color-white);
  box-shadow: 0 0 18px rgba(229,53,231,0.32);
}
.step-content-sp h4 {
  font-size: 0.92rem;
  font-weight: 800;
  color: var(--color-white);
  margin-bottom: var(--space-1);
}
.step-content-sp p {
  font-size: 0.83rem;
  color: rgba(255,255,255,0.58);
  line-height: 1.7;
  margin: 0;
}
/* Technique 6: neon-glow process badge sidebar */
.process-sp-sidebar {
  padding-top: var(--space-4);
}
.pss-card {
  background: rgba(255,255,255,0.04);
  border: 1px solid rgba(255,255,255,0.09);
  border-radius: 18px;
  padding: var(--space-8);
  backdrop-filter: blur(10px);
  position: relative;
  overflow: hidden;
}
.pss-card::before {
  content: '';
  position: absolute;
  top: -60px; right: -60px;
  width: 240px; height: 240px;
  border-radius: 50%;
  background: radial-gradient(circle, rgba(229,53,231,0.15) 0%, transparent 70%);
  pointer-events: none;
}
.pss-card::after {
  content: '';
  position: absolute;
  bottom: -60px; left: -60px;
  width: 200px; height: 200px;
  border-radius: 50%;
  background: radial-gradient(circle, rgba(249,183,62,0.12) 0%, transparent 70%);
  pointer-events: none;
}
.pss-title {
  font-family: var(--font-heading);
  font-size: 1rem;
  font-weight: 800;
  color: var(--color-white);
  margin-bottom: var(--space-5);
  position: relative;
  z-index: 1;
}
.pss-facts {
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
  margin-bottom: var(--space-6);
  position: relative;
  z-index: 1;
}
.pss-fact {
  display: flex;
  align-items: flex-start;
  gap: var(--space-3);
  padding: var(--space-4);
  background: rgba(255,255,255,0.04);
  border-radius: var(--radius-md);
  border: 1px solid rgba(255,255,255,0.06);
}
.pss-fact svg { width: 18px; height: 18px; color: var(--color-accent); flex-shrink: 0; margin-top: 1px; }
.pss-fact-text strong {
  display: block;
  font-size: 0.8rem;
  font-weight: 700;
  color: var(--color-white);
  margin-bottom: 2px;
}
.pss-fact-text span {
  font-size: 0.75rem;
  color: rgba(255,255,255,0.48);
  line-height: 1.5;
}
.pss-cta-btn {
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
  box-shadow: 0 4px 22px rgba(229,53,231,0.4);
  transition: all var(--transition-base);
  position: relative;
  z-index: 1;
}
.pss-cta-btn:hover {
  box-shadow: 0 8px 32px rgba(229,53,231,0.6);
  transform: translateY(-1px);
  color: var(--color-white);
}

/* ── 5. BENEFITS SECTION ── */
.benefits-sp {
  padding: var(--space-16) 0;
  background: var(--color-white);
}
.benefits-sp-header {
  text-align: center;
  margin-bottom: var(--space-12);
}
.benefits-h2 {
  font-size: clamp(1.7rem, 3vw, 2.4rem);
  font-weight: 900;
  color: var(--color-dark);
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.02em;
  margin-bottom: var(--space-3);
}
.benefits-h2 em { color: var(--color-secondary); font-style: normal; }
.benefits-lead {
  font-size: 0.95rem;
  color: var(--color-gray);
  max-width: 500px;
  margin: 0 auto;
  line-height: 1.75;
}
/* Technique 7: 3-column benefit cards with neon hover */
.benefits-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
}
.benefit-card {
  background: #f7f8fb;
  border: 1px solid rgba(229,53,231,0.1);
  border-radius: var(--radius-lg);
  padding: var(--space-7) var(--space-6);
  transition: transform var(--transition-base), box-shadow var(--transition-base), border-color var(--transition-base);
  position: relative;
  overflow: hidden;
}
.benefit-card::after {
  content: '';
  position: absolute;
  bottom: 0; left: 0; right: 0;
  height: 2px;
  background: linear-gradient(90deg, var(--color-secondary), var(--color-accent));
  transform: scaleX(0);
  transform-origin: left;
  transition: transform var(--transition-base);
}
.benefit-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 14px 35px rgba(229,53,231,0.13), 0 4px 10px rgba(0,0,0,0.06);
  border-color: rgba(229,53,231,0.25);
}
.benefit-card:hover::after { transform: scaleX(1); }
.bc-icon {
  width: 50px; height: 50px;
  border-radius: 50%;
  background: linear-gradient(135deg, rgba(229,53,231,0.12), rgba(249,183,62,0.08));
  border: 1px solid rgba(229,53,231,0.18);
  display: flex; align-items: center; justify-content: center;
  margin-bottom: var(--space-4);
  color: var(--color-secondary);
}
.bc-icon svg { width: 22px; height: 22px; }
.benefit-card h4 {
  font-size: 0.92rem;
  font-weight: 800;
  color: var(--color-dark);
  margin-bottom: var(--space-2);
}
.benefit-card p {
  font-size: 0.84rem;
  color: var(--color-gray);
  line-height: 1.7;
  margin: 0;
}

/* ── 6. FAQ SECTION ── */
.faq-sp {
  padding: var(--space-16) 0;
  background: #f4f6f9;
}
.faq-sp-inner {
  max-width: 820px;
  margin: 0 auto;
}
.faq-h2-sp {
  font-size: clamp(1.6rem, 2.8vw, 2.2rem);
  font-weight: 900;
  color: var(--color-dark);
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.02em;
  margin-bottom: var(--space-3);
}
.faq-h2-sp em { color: var(--color-secondary); font-style: normal; }
.faq-sub-sp {
  font-size: 0.92rem;
  color: var(--color-gray);
  margin-bottom: var(--space-10);
  line-height: 1.75;
}
.faq-list-sp {
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
}
/* Technique 8: FAQ accordion with magenta left-border on open */
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

/* ── 7. RELATED SERVICES ── */
.related-sp {
  padding: var(--space-14) 0;
  background: var(--color-white);
}
.related-h3 {
  font-size: clamp(1.5rem, 2.5vw, 2rem);
  font-weight: 900;
  color: var(--color-dark);
  text-align: center;
  margin-bottom: var(--space-2);
  text-wrap: balance;
}
.related-sub {
  text-align: center;
  font-size: 0.9rem;
  color: var(--color-gray);
  margin-bottom: var(--space-10);
}
.rs-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
}
.rs-card {
  border-radius: var(--radius-lg);
  overflow: hidden;
  display: flex;
  flex-direction: column;
  border: 1px solid rgba(229,53,231,0.1);
  background: var(--color-white);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.rs-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 14px 35px rgba(229,53,231,0.14), 0 4px 10px rgba(0,0,0,0.06);
}
.rs-card-banner {
  height: 80px;
  display: flex; align-items: center; justify-content: center;
}
.rs-card.t1 .rs-card-banner { background: linear-gradient(145deg, #09090f, #1e0a2e); }
.rs-card.t2 .rs-card-banner { background: linear-gradient(145deg, #0d1520, #1a2b3c); }
.rs-card.t3 .rs-card-banner { background: linear-gradient(145deg, #130610, #2a0a2a); }
.rs-icon-ring {
  width: 46px; height: 46px;
  border-radius: 50%;
  border: 1px solid rgba(255,255,255,0.15);
  background: rgba(255,255,255,0.07);
  display: flex; align-items: center; justify-content: center;
}
.rs-icon-ring svg { width: 22px; height: 22px; color: var(--color-accent); }
.rs-card-body {
  padding: var(--space-5);
  flex: 1;
  display: flex;
  flex-direction: column;
}
.rs-card-body h3 {
  font-size: 0.9rem;
  font-weight: 800;
  color: var(--color-dark);
  margin-bottom: var(--space-2);
}
.rs-card-body p {
  font-size: 0.8rem;
  color: var(--color-gray);
  line-height: 1.65;
  flex: 1;
  margin-bottom: var(--space-4);
}
.rs-link {
  display: inline-flex;
  align-items: center;
  gap: 4px;
  font-size: 0.78rem;
  font-weight: 800;
  color: var(--color-secondary);
  text-decoration: none;
  transition: gap var(--transition-fast);
}
.rs-link:hover { gap: 8px; }
.rs-link svg { width: 14px; height: 14px; }

/* ── 8. EMERGENCY CTA ── */
.cta-sp {
  padding: var(--space-14) 0;
  background: linear-gradient(135deg, #09090f 0%, #1e082e 55%, #0a1525 100%);
  position: relative;
  overflow: hidden;
  text-align: center;
}
.cta-sp::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 55% 80% at 20% 50%, rgba(229,53,231,0.13) 0%, transparent 60%),
    radial-gradient(ellipse 45% 70% at 80% 50%, rgba(249,183,62,0.09) 0%, transparent 60%);
  pointer-events: none;
}
.cta-sp-inner {
  position: relative;
  z-index: 1;
  max-width: 560px;
  margin: 0 auto;
}
.cta-sp h2 {
  font-size: clamp(1.5rem, 2.8vw, 2.2rem);
  font-weight: 900;
  color: var(--color-white);
  text-wrap: balance;
  margin-bottom: var(--space-3);
}
.cta-sp h2 em { color: var(--color-accent); font-style: normal; }
.cta-sp p {
  font-size: 0.95rem;
  color: rgba(255,255,255,0.58);
  max-width: 440px;
  margin: 0 auto var(--space-7);
  line-height: 1.75;
}
.cta-sp-btns {
  display: flex;
  gap: var(--space-3);
  justify-content: center;
  flex-wrap: wrap;
}

/* ── RESPONSIVE ── */
@media (max-width: 1024px) {
  .hero-sp-inner { grid-template-columns: 1fr; }
  .hero-sp-card { display: none; }
  .process-sp-grid { grid-template-columns: 1fr; gap: var(--space-10); }
}
@media (max-width: 768px) {
  .benefits-grid { grid-template-columns: repeat(2, 1fr); }
  .rs-grid { grid-template-columns: 1fr; }
}
@media (max-width: 480px) {
  .benefits-grid { grid-template-columns: 1fr; }
}
</style>

<!-- ═══ HERO ═══ -->
<section class="hero-sp" aria-label="Bail Bond Services services">
  <div class="sp-orb sp-orb-1"></div>
  <div class="sp-orb sp-orb-2"></div>

  <div class="container">
    <div class="hero-sp-inner">
      <div class="hero-sp-left">
        <span class="sp-eyebrow">
          <span class="pulse-dot"></span>
          Available 24/7 in South Florida
        </span>
        <h1>Bail Bonds Near Me in South Florida — Licensed FL Bondsman Available 24/7</h1>
        <p class="hero-answer">Mad Extra Bail Bonds is a licensed Florida bail bondsman based in Delray Beach, serving every jail in Palm Beach, Broward, and Miami-Dade County. We post bail for any criminal charge within hours of your call — 24 hours a day, 7 days a week, including holidays.</p>
        <div class="hero-sp-btns">
          <?php if (!empty($phone)): ?>
          <a href="tel:<?php echo preg_replace('/\D/','', $phone); ?>" class="btn-sp-primary">
            <?php echo lucide_icon('phone'); ?> Call Now — 24/7
          </a>
          <?php else: ?>
          <a href="/contact/" class="btn-sp-primary">
            <?php echo lucide_icon('zap'); ?> Get Help Now
          </a>
          <?php endif; ?>
          <a href="/contact/" class="btn-sp-secondary">Free Consultation</a>
        </div>
        <div class="sp-trust-row">
          <span class="sp-htb"><?php echo lucide_icon('shield-check'); ?> Licensed FL Bondsman</span>
          <span class="sp-htb"><?php echo lucide_icon('clock'); ?> 24/7 Available</span>
          <span class="sp-htb"><?php echo lucide_icon('zap'); ?> Fast Release</span>
          <span class="sp-htb"><?php echo lucide_icon('landmark'); ?> All South FL Jails</span>
        </div>
      </div>

      <!-- Glassmorphism sidebar card -->
      <div class="hero-sp-card">
        <p class="hsc-title">Need Help Right Now?</p>
        <p class="hsc-note">Immediate 24/7 response</p>
        <ul class="hsc-list">
          <li><span class="hsc-check">✓</span> Licensed FL bail bondsman</li>
          <li><span class="hsc-check">✓</span> All South Florida jails covered</li>
          <li><span class="hsc-check">✓</span> 10% FL legal premium rate</li>
          <li><span class="hsc-check">✓</span> Same-day release possible</li>
          <li><span class="hsc-check">✓</span> Available 365 days a year</li>
        </ul>
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo preg_replace('/\D/','', $phone); ?>" class="hsc-cta">
          <?php echo lucide_icon('phone'); ?> Call Now
        </a>
        <?php else: ?>
        <a href="/contact/" class="hsc-cta">Get Help Now</a>
        <?php endif; ?>
        <p class="hsc-disclaimer">Available 24 hours a day, 7 days a week</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SVG DIVIDER ═══ -->
<div class="divider-to-light" aria-hidden="true">
  <svg viewBox="0 0 1440 55" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,55 L0,10 Q480,55 720,25 Q960,0 1440,35 L1440,55 Z" fill="#f4f6f9"/>
  </svg>
</div>

<!-- ═══ INTRO / ANSWER SECTION ═══ -->
<section class="intro-sp" aria-label="Bail Bond Services overview">
  <div class="container">
    <div class="intro-sp-inner">
      <span class="sp-section-eyebrow">About This Service</span>
      <h2 class="intro-h2">How much does a bail bond cost near me in South Florida?</h2>
      <div class="answer-block">
        <p>In Florida, bail bond premiums are fixed by law at exactly 10% of the court-ordered bail amount — this rate is identical in Delray Beach, Boca Raton, Fort Lauderdale, and Miami. For a $10,000 bail order, the non-refundable premium is $1,000. Payment plans may be available for qualifying situations.</p>
      </div>
      <p>Mad Extra Bail Bonds has been serving South Florida families for over 11 years from our base in Delray Beach, FL. We are licensed by the Florida Department of Financial Services and post bail at every jail and detention facility across Palm Beach County, Broward County, and Miami-Dade County.</p>
      <p>Every case is handled personally. We don't pass you to a call center or leave you waiting. When you call, someone with the authority to act picks up — because every hour in jail matters.</p>
    </div>
  </div>
</section>

<!-- ═══ SVG DIVIDER ═══ -->
<div class="divider-to-dark-sp" aria-hidden="true">
  <svg viewBox="0 0 1440 55" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,0 Q360,55 720,30 Q1080,5 1440,45 L1440,55 L0,55 Z" fill="#09090f"/>
  </svg>
</div>

<!-- ═══ PROCESS SECTION ═══ -->
<section class="process-sp" aria-label="Bail Bond Services process">
  <div class="container">
    <div class="process-sp-grid">
      <!-- Steps left side -->
      <div>
        <div class="process-sp-header">
          <span class="process-eyebrow-sp"><?php echo lucide_icon('zap'); ?> The Process</span>
          <h2 class="process-h2-sp">How long does it take to get someone released on a bail bond in Palm Beach County?</h2>
          <div class="answer-block-dark">
            <p>Misdemeanor arrests in Palm Beach County typically release within 2 to 6 hours after we post bond. Felony charges at the Palm Beach County Jail in West Palm Beach can take 6 to 24 hours depending on booking load. We begin your paperwork the moment you call — every hour in jail matters.</p>
          </div>
        </div>
        <div class="process-steps-sp">
          <div class="process-step-sp">
            <div class="step-num-sp">1</div>
            <div class="step-content-sp">
              <h4>Call Us Any Hour</h4>
              <p>Day or night, weekday or holiday — someone at Mad Extra answers. Tell us who was arrested, the charge, and which facility they're at.</p>
            </div>
          </div>
          <div class="process-step-sp">
            <div class="step-num-sp">2</div>
            <div class="step-content-sp">
              <h4>We Verify the Bond</h4>
              <p>We confirm the bail amount, any holds, and release conditions directly with the jail. We explain everything clearly before you sign or pay.</p>
            </div>
          </div>
          <div class="process-step-sp">
            <div class="step-num-sp">3</div>
            <div class="step-content-sp">
              <h4>Sign & Pay the Premium</h4>
              <p>Florida's bail premium is 10% of bail — set by law, non-negotiable statewide. You sign the indemnity agreement and we post bond directly with the facility.</p>
            </div>
          </div>
          <div class="process-step-sp">
            <div class="step-num-sp">4</div>
            <div class="step-content-sp">
              <h4>Release Processing Begins</h4>
              <p>Once the bond is posted, the jail begins processing release. We stay in contact with you through the whole process until your loved one is free.</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Sidebar card right side -->
      <div class="process-sp-sidebar">
        <div class="pss-card">
          <p class="pss-title">Why Mad Extra Bail Bonds?</p>
          <div class="pss-facts">
            <div class="pss-fact">
              <?php echo lucide_icon('clock'); ?>
              <div class="pss-fact-text">
                <strong>Available Every Hour</strong>
                <span>24/7, 365 days a year — including holidays, weekends, and overnight</span>
              </div>
            </div>
            <div class="pss-fact">
              <?php echo lucide_icon('shield-check'); ?>
              <div class="pss-fact-text">
                <strong>Licensed FL Bondsman</strong>
                <span>Licensed by the Florida Department of Financial Services</span>
              </div>
            </div>
            <div class="pss-fact">
              <?php echo lucide_icon('landmark'); ?>
              <div class="pss-fact-text">
                <strong>All South FL Jails</strong>
                <span>Palm Beach, Broward, and Miami-Dade county and city facilities</span>
              </div>
            </div>
            <div class="pss-fact">
              <?php echo lucide_icon('users'); ?>
              <div class="pss-fact-text">
                <strong>11+ Years of Experience</strong>
                <span>Over a decade helping South Florida families through difficult times</span>
              </div>
            </div>
          </div>
          <?php if (!empty($phone)): ?>
          <a href="tel:<?php echo preg_replace('/\D/','', $phone); ?>" class="pss-cta-btn">
            <?php echo lucide_icon('phone'); ?> Call Now — 24/7
          </a>
          <?php else: ?>
          <a href="/contact/" class="pss-cta-btn">Get Emergency Help Now</a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SVG DIVIDER ═══ -->
<div class="divider-to-white" aria-hidden="true">
  <svg viewBox="0 0 1440 55" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,0 Q720,55 1440,10 L1440,55 L0,55 Z" fill="#ffffff"/>
  </svg>
</div>

<!-- ═══ BENEFITS SECTION ═══ -->
<section class="benefits-sp" aria-label="Bail Bond Services benefits">
  <div class="container">
    <div class="benefits-sp-header">
      <span class="sp-section-eyebrow">Why Choose Us</span>
      <h2 class="benefits-h2">Why do South Florida families choose Mad Extra Bail Bonds?</h2>
      <p class="benefits-lead">Licensed, experienced, and available around the clock — here's why South Florida families rely on Mad Extra Bail Bonds.</p>
    </div>
    <div class="benefits-grid">
        <div class="benefit-card">
          <div class="bc-icon">
            <?php echo lucide_icon('clock'); ?>
          </div>
          <h4>24/7 Emergency Response</h4>
          <p>We never close. Call any hour — we answer and we move.</p>
        </div>
        <div class="benefit-card">
          <div class="bc-icon">
            <?php echo lucide_icon('landmark'); ?>
          </div>
          <h4>Every South FL Jail</h4>
          <p>Palm Beach County Jail, Broward Main, TGK in Miami-Dade, and every city facility.</p>
        </div>
        <div class="benefit-card">
          <div class="bc-icon">
            <?php echo lucide_icon('shield-check'); ?>
          </div>
          <h4>Licensed FL Bondsman</h4>
          <p>Licensed by the Florida Department of Financial Services. Fully insured.</p>
        </div>
        <div class="benefit-card">
          <div class="bc-icon">
            <?php echo lucide_icon('users'); ?>
          </div>
          <h4>11+ Years Experience</h4>
          <p>Over a decade helping South Florida families navigate the bail bond process.</p>
        </div>
        <div class="benefit-card">
          <div class="bc-icon">
            <?php echo lucide_icon('zap'); ?>
          </div>
          <h4>Same-Day Release Possible</h4>
          <p>For most misdemeanor and some felony charges, same-day release is achievable.</p>
        </div>
        <div class="benefit-card">
          <div class="bc-icon">
            <?php echo lucide_icon('star'); ?>
          </div>
          <h4>Transparent Pricing</h4>
          <p>The 10% premium rate is fixed by Florida law. No hidden fees, no surprises.</p>
        </div>
    </div>
  </div>
</section>

<!-- ═══ SVG DIVIDER ═══ -->
<div style="line-height:0;background:#ffffff"><svg viewBox="0 0 1440 40" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" style="display:block;width:100%"><path d="M0,20 Q360,40 720,10 Q1080,-10 1440,20 L1440,40 L0,40 Z" fill="#f4f6f9"/></svg></div>

<!-- ═══ FAQ SECTION ═══ -->
<section class="faq-sp" aria-label="Bail Bond Services frequently asked questions">
  <div class="container">
    <div class="faq-sp-inner">
      <span class="sp-section-eyebrow">Common Questions</span>
      <h2 class="faq-h2-sp">Frequently asked questions about <em>bail bond services in South Florida</em></h2>
      <p class="faq-sub-sp">Direct answers to what families ask most about this service.</p>

      <div class="faq-list-sp" role="list">
        <div class="faq-item-sp" role="listitem">
          <button class="faq-q-sp" aria-expanded="false" onclick="toggleFaq(this)">
            <?php echo htmlspecialchars("What is a bail bond and how does it work near me in Delray Beach, FL?"); ?>
            <span class="faq-icon-sp" aria-hidden="true">+</span>
          </button>
          <div class="faq-a-sp" role="region">
            <p><?php echo htmlspecialchars("A bail bond is a financial guarantee posted by a licensed bondsman on behalf of a defendant, promising that the defendant will appear at all scheduled court dates. In Delray Beach and across Florida, you pay a bondsman 10% of the total bail amount as a non-refundable premium. The bondsman then posts the full bail amount with the court, securing the defendant's release from jail until trial."); ?></p>
          </div>
        </div>
        <div class="faq-item-sp" role="listitem">
          <button class="faq-q-sp" aria-expanded="false" onclick="toggleFaq(this)">
            <?php echo htmlspecialchars("Do bail bond companies operate in every city in South Florida?"); ?>
            <span class="faq-icon-sp" aria-hidden="true">+</span>
          </button>
          <div class="faq-a-sp" role="region">
            <p><?php echo htmlspecialchars("Yes — Mad Extra Bail Bonds operates across Palm Beach County (Delray Beach, Boca Raton, West Palm Beach, Boynton Beach), Broward County (Fort Lauderdale, Pompano Beach, Coral Springs, Hollywood), and Miami-Dade County (Miami, Hialeah, Miami Gardens). We can post bail at every county jail and city lockup throughout this 50-mile radius."); ?></p>
          </div>
        </div>
        <div class="faq-item-sp" role="listitem">
          <button class="faq-q-sp" aria-expanded="false" onclick="toggleFaq(this)">
            <?php echo htmlspecialchars("What happens if I can't pay the full 10% bail bond premium upfront?"); ?>
            <span class="faq-icon-sp" aria-hidden="true">+</span>
          </button>
          <div class="faq-a-sp" role="region">
            <p><?php echo htmlspecialchars("We understand that 10% of a high bail amount can be a significant sum. We may offer payment plan arrangements for qualifying situations. Call us and tell us your circumstances — we will always try to find a path to get your family member home without making a difficult situation worse."); ?></p>
          </div>
        </div>
        <div class="faq-item-sp" role="listitem">
          <button class="faq-q-sp" aria-expanded="false" onclick="toggleFaq(this)">
            <?php echo htmlspecialchars("Can a bail bond company help someone released from the Palm Beach County Jail?"); ?>
            <span class="faq-icon-sp" aria-hidden="true">+</span>
          </button>
          <div class="faq-a-sp" role="region">
            <p><?php echo htmlspecialchars("Yes, absolutely. The Palm Beach County Jail in West Palm Beach is one of the facilities we work with most frequently. We are familiar with the booking and release processes there, and we can typically post bond and begin release processing faster than a bondsman unfamiliar with that facility."); ?></p>
          </div>
        </div>
        <div class="faq-item-sp" role="listitem">
          <button class="faq-q-sp" aria-expanded="false" onclick="toggleFaq(this)">
            <?php echo htmlspecialchars("What is the fastest way to bail someone out of jail in South Florida?"); ?>
            <span class="faq-icon-sp" aria-hidden="true">+</span>
          </button>
          <div class="faq-a-sp" role="region">
            <p><?php echo htmlspecialchars("The fastest path is to call a licensed bondsman the moment you learn of the arrest. Every minute without a bondsman is time lost. Call Mad Extra Bail Bonds immediately after arrest — we gather the information, verify the bond with the jail, and begin processing before the booking process is even complete at many facilities."); ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ RELATED SERVICES ═══ -->
<section class="related-sp" aria-label="Related bail bond services">
  <div class="container">
    <h3 class="related-h3">Other Services You May Need</h3>
    <p class="related-sub">Mad Extra Bail Bonds handles every type of bail bond across South Florida — 24/7.</p>
    <div class="rs-grid">
        <article class="rs-card t1">
          <div class="rs-card-banner">
            <div class="rs-icon-ring">
              <?php echo lucide_icon('car'); ?>
            </div>
          </div>
          <div class="rs-card-body">
            <h3>DUI Bail Bonds</h3>
            <p>Immediate DUI bail bond assistance — we know DUI bail timelines.</p>
            <a href="/services/dui-bail-bonds/" class="rs-link">Learn more <?php echo lucide_icon('arrow-right'); ?></a>
          </div>
        </article>
        <article class="rs-card t2">
          <div class="rs-card-banner">
            <div class="rs-icon-ring">
              <?php echo lucide_icon('gavel'); ?>
            </div>
          </div>
          <div class="rs-card-body">
            <h3>Felony Bail Bonds</h3>
            <p>Felony charges require experienced handling — we deliver.</p>
            <a href="/services/felony-bail-bonds/" class="rs-link">Learn more <?php echo lucide_icon('arrow-right'); ?></a>
          </div>
        </article>
        <article class="rs-card t3">
          <div class="rs-card-banner">
            <div class="rs-icon-ring">
              <?php echo lucide_icon('file-text'); ?>
            </div>
          </div>
          <div class="rs-card-body">
            <h3>Misdemeanor Bail Bonds</h3>
            <p>Fast affordable bail bonds for misdemeanor charges.</p>
            <a href="/services/misdemeanor-bail-bonds/" class="rs-link">Learn more <?php echo lucide_icon('arrow-right'); ?></a>
          </div>
        </article>
    </div>
  </div>
</section>

<!-- ═══ EMERGENCY CTA ═══ -->
<section class="cta-sp" aria-label="Emergency contact">
  <div class="cta-sp-inner">
    <h2>Need a <em>bail bond services bondsman</em> right now?</h2>
    <p>Every hour in jail counts. We move with urgency because we understand what this moment means for your family. Call or contact us — we're available every hour of every day.</p>
    <div class="cta-sp-btns">
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo preg_replace('/\D/','', $phone); ?>" class="btn-sp-primary">
        <?php echo lucide_icon('phone'); ?> Call Now — 24/7
      </a>
      <?php endif; ?>
      <a href="/contact/" class="btn-sp-secondary">Send a Message</a>
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
