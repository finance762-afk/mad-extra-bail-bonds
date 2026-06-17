<?php
/**
 * services/federal-bail-bonds/index.php — Federal Bail Bonds Service Page
 * Mad Extra Bail Bonds | Delray Beach, FL
 * Phase 4: Service Pages
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Federal Bail Bonds South Florida | Mad Extra Bail Bonds | Licensed FL Bondsman';
$pageDescription = 'Federal arrest in South Florida? Mad Extra Bail Bonds handles federal bail bonds in Miami-Dade, Palm Beach & Broward courts. Licensed FL bondsman with federal court experience — call 24/7.';
$canonicalUrl    = $siteUrl . '/services/federal-bail-bonds/';
$currentPage     = 'services';

$_breadcrumb = generateBreadcrumbSchema([
    ['name' => 'Home',               'url' => $siteUrl . '/'],
    ['name' => 'Services',           'url' => $siteUrl . '/services/'],
    ['name' => 'Federal Bail Bonds', 'url' => $siteUrl . '/services/federal-bail-bonds/'],
]);

$_serviceSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'Service',
    '@id'         => $siteUrl . '/services/federal-bail-bonds/#service-federal-bail-bonds',
    'name'        => 'Federal Bail Bonds',
    'description' => 'Federal bail bonds for charges in U.S. District Court. Licensed FL bondsman handling complex federal cases across South Florida including the Southern District of Florida.',
    'url'         => $siteUrl . '/services/federal-bail-bonds/',
    'provider'    => ['@id' => $siteUrl . '/#localbusiness'],
    'areaServed'  => [
        ['@type' => 'State', 'name' => 'Florida'],
        ['@type' => 'City',  'name' => 'Delray Beach, FL'],
    ],
    'serviceType' => 'Federal Bail Bonds',
];

$_faqs = [
    [
        'q' => 'How does federal bail work differently from state bail bonds in Florida?',
        'a' => 'Federal bail is governed by the Bail Reform Act of 1984, not Florida state law. A federal magistrate judge holds a detention hearing — separate from first appearance — and decides whether to release the defendant and on what conditions. There is no preset bail schedule. Federal bail amounts and conditions are more complex and often higher than state bonds. Federal bond premiums also differ — typically 10 to 15% of the bond amount.',
    ],
    [
        'q' => 'Which federal detention facilities in South Florida does Mad Extra Bail Bonds work with?',
        'a' => 'We work with the Federal Detention Center in Miami (FDC Miami), the Federal Correctional Institution in Miami, and the Glades County Detention Center used for federal holds, as well as the Palm Beach County Jail for defendants on federal detainers awaiting transfer. We know the intake and release procedures at each facility and communicate directly with U.S. Marshals.',
    ],
    [
        'q' => 'What is a federal pretrial release bond vs. a federal bail bond?',
        'a' => 'Federal courts use the term "pretrial release" more than "bail." A federal judge may set conditions for release without cash bail — or may require a secured appearance bond. When a secured bond is required, a licensed federal bail bondsman like Mad Extra provides the surety. We post the security directly with the clerk of the federal court and coordinate release with the U.S. Marshal Service.',
    ],
    [
        'q' => 'Can someone be held without bail on a federal charge in South Florida?',
        'a' => 'Yes. Under the Bail Reform Act, the federal government can move for pre-trial detention if the charge involves a crime of violence, drug trafficking with a 10-year or greater maximum, or if the defendant presents a risk of flight or danger to the community. A detention hearing is held where both sides present arguments. Many federal defendants are released on conditions — call us immediately so we are ready if and when bond is set.',
    ],
    [
        'q' => 'How much does a federal bail bond cost in South Florida?',
        'a' => 'Federal bail amounts are set by federal magistrate judges and can range from tens of thousands to millions of dollars depending on the severity of the charges. The bail bond premium for federal cases is typically 10% to 15% of the bond amount. For large federal bonds, collateral is almost always required. Call us immediately after arrest — we will explain all costs and options before you commit to anything.',
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
   FEDERAL BAIL BONDS — Mad Extra Bail Bonds
   Premium Tier | Dark/Neon Design System
   Techniques: layered hero radials (blue-shifted accent),
   neon orbs, glassmorphism sidebar, dark process steps,
   federal-specific info cards, FAQ accordion, SVG dividers,
   gradient federal badge, high-bail alert card, neon CTA ring
   ============================================================ */

/* ── 1. HERO ── */
.hero-fed {
  position: relative;
  min-height: 57vh;
  display: flex;
  align-items: center;
  background: #040812;
  overflow: hidden;
  padding-top: var(--nav-height, 72px);
  padding-bottom: var(--space-12);
}
/* Technique 1: ::before radials — deeper blue-dark for federal gravitas */
.hero-fed::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 60% 78% at 6% 42%, rgba(229,53,231,0.20) 0%, transparent 58%),
    radial-gradient(ellipse 52% 58% at 88% 20%, rgba(249,183,62,0.13) 0%, transparent 55%),
    radial-gradient(ellipse 70% 44% at 50% 108%, rgba(4,8,18,0.99) 0%, transparent 80%);
  pointer-events: none;
}
/* Technique 2: noise texture */
.hero-fed::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.88' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
  opacity: 0.5;
  pointer-events: none;
}
/* Technique 3: neon orbs */
.fed-orb {
  position: absolute; border-radius: 50%;
  pointer-events: none; will-change: transform;
}
.fed-orb-1 {
  width: 510px; height: 510px; top: -165px; left: -115px;
  background: radial-gradient(circle, rgba(229,53,231,0.16) 0%, transparent 68%);
  animation: fed-orb-float 16s ease-in-out infinite;
}
.fed-orb-2 {
  width: 365px; height: 365px; bottom: -50px; right: 7%;
  background: radial-gradient(circle, rgba(249,183,62,0.10) 0%, transparent 68%);
  animation: fed-orb-float 20s ease-in-out infinite reverse;
  animation-delay: -7s;
}
@keyframes fed-orb-float {
  0%,100% { transform: translate(0,0) scale(1); }
  40%     { transform: translate(12px,-16px) scale(1.04); }
  70%     { transform: translate(-9px,11px) scale(0.97); }
}
.hero-fed-inner {
  position: relative; z-index: 2;
  display: grid; grid-template-columns: 1fr 400px;
  gap: var(--space-12); align-items: center;
  padding: var(--space-12) 0; width: 100%;
}
.hero-fed-left { max-width: 620px; }

.fed-eyebrow {
  display: inline-flex; align-items: center; gap: 8px;
  font-family: var(--font-heading); font-size: 0.68rem; font-weight: 800;
  text-transform: uppercase; letter-spacing: 3px; color: var(--color-accent);
  padding: 6px 16px; border: 1px solid rgba(249,183,62,0.42);
  border-radius: var(--radius-full); background: rgba(249,183,62,0.07); margin-bottom: var(--space-5);
}
.fed-eyebrow .fed-dot {
  width: 7px; height: 7px; border-radius: 50%;
  background: var(--color-accent); box-shadow: 0 0 8px var(--color-accent);
  animation: fed-dot-pulse 2.2s ease-in-out infinite; flex-shrink: 0;
}
@keyframes fed-dot-pulse {
  0%,100% { opacity:1; transform:scale(1); }
  50%     { opacity:.55; transform:scale(.7); }
}

.hero-fed h1 {
  font-size: clamp(1.85rem, 3.8vw, 3.1rem); font-weight: 900;
  color: #fff; line-height: 1.1; margin-bottom: var(--space-5);
  letter-spacing: -0.025em; text-wrap: balance;
}
.hero-fed h1 .hl-gold { color: var(--color-accent); text-shadow: 0 0 28px rgba(249,183,62,0.5); }
.hero-fed h1 .hl-mag  { color: var(--color-secondary); text-shadow: 0 0 28px rgba(229,53,231,0.5); }

.hero-fed .hero-answer {
  font-size: 1rem; color: rgba(255,255,255,0.66); line-height: 1.8;
  margin-bottom: var(--space-7); max-width: 560px;
}
.hero-fed-btns { display: flex; gap: var(--space-3); flex-wrap: wrap; margin-bottom: var(--space-7); }
.btn-fed-primary {
  display: inline-flex; align-items: center; gap: 8px; padding: 13px 28px;
  background: var(--color-secondary); color: #fff;
  font-family: var(--font-heading); font-size: 0.82rem; font-weight: 800;
  text-transform: uppercase; letter-spacing: 1.5px; border-radius: var(--radius-md);
  text-decoration: none;
  box-shadow: 0 0 22px rgba(229,53,231,0.42), 0 4px 14px rgba(0,0,0,0.3);
  transition: all var(--transition-base);
}
.btn-fed-primary:hover {
  background: #f043f2;
  box-shadow: 0 0 44px rgba(229,53,231,0.68), 0 8px 22px rgba(0,0,0,0.35);
  transform: translateY(-2px); color: #fff;
}
.btn-fed-primary svg { width: 15px; height: 15px; }
.btn-fed-secondary {
  display: inline-flex; align-items: center; gap: 8px; padding: 12px 24px;
  background: transparent; color: var(--color-accent);
  border: 2px solid rgba(249,183,62,0.55);
  font-family: var(--font-heading); font-size: 0.82rem; font-weight: 800;
  text-transform: uppercase; letter-spacing: 1.5px;
  border-radius: var(--radius-md); text-decoration: none; transition: all var(--transition-base);
}
.btn-fed-secondary:hover {
  background: var(--color-accent); color: #0a0d1a;
  border-color: var(--color-accent); box-shadow: 0 0 26px rgba(249,183,62,0.4); transform: translateY(-2px);
}
.fed-trust-row { display: flex; flex-wrap: wrap; gap: var(--space-2); }
.fed-htb {
  display: inline-flex; align-items: center; gap: 5px;
  font-size: 0.67rem; font-weight: 700; color: rgba(255,255,255,0.72);
  padding: 4px 11px; border-radius: var(--radius-full);
  background: rgba(255,255,255,0.055); border: 1px solid rgba(255,255,255,0.1);
  text-transform: uppercase; letter-spacing: 0.5px; white-space: nowrap;
}
.fed-htb svg { width: 11px; height: 11px; color: var(--color-accent); flex-shrink: 0; }

/* Technique 4: glassmorphism hero sidebar — federal serious tone */
.hero-fed-card {
  position: relative; background: rgba(255,255,255,0.04);
  border: 1px solid rgba(255,255,255,0.11); border-radius: 18px;
  padding: var(--space-7) var(--space-6); backdrop-filter: blur(14px); -webkit-backdrop-filter: blur(14px);
}
.hero-fed-card::before {
  content: ''; position: absolute; inset: -1px; border-radius: 19px;
  background: linear-gradient(135deg, rgba(249,183,62,0.38) 0%, rgba(229,53,231,0.18) 50%, transparent 100%);
  z-index: -1; opacity: 0.5;
}
.hfc-f-title { font-family: var(--font-heading); font-size: 1.05rem; font-weight: 800; color: #fff; margin-bottom: var(--space-2); }
.hfc-f-note { font-size: 0.68rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1.5px; color: var(--color-accent); margin-bottom: var(--space-5); }
.hfc-f-list { list-style: none; padding: 0; margin: 0 0 var(--space-6); display: flex; flex-direction: column; gap: var(--space-3); }
.hfc-f-list li { display: flex; align-items: flex-start; gap: var(--space-2); font-size: 0.85rem; color: rgba(255,255,255,0.8); line-height: 1.5; }
.hfc-f-check {
  display: inline-flex; align-items: center; justify-content: center;
  flex-shrink: 0; width: 18px; height: 18px; border-radius: 50%;
  background: linear-gradient(135deg, var(--color-accent), var(--color-secondary));
  font-size: 0.6rem; color: #fff; font-weight: 900; margin-top: 2px;
}
.hfc-f-cta {
  display: block; width: 100%; padding: 13px;
  background: linear-gradient(135deg, var(--color-accent) 0%, #c07a10 100%);
  color: #0a0d1a; font-family: var(--font-heading); font-size: 0.82rem;
  font-weight: 800; text-transform: uppercase; letter-spacing: 1.5px;
  border-radius: var(--radius-md); text-decoration: none; text-align: center;
  box-shadow: 0 4px 22px rgba(249,183,62,0.38); transition: all var(--transition-base);
}
.hfc-f-cta:hover { box-shadow: 0 8px 34px rgba(249,183,62,0.58); transform: translateY(-1px); color: #0a0d1a; }
.hfc-f-disclaimer { text-align: center; font-size: 0.6rem; color: rgba(255,255,255,0.3); margin-top: var(--space-3); line-height: 1.5; }

/* ── 2. SVG DIVIDERS ── */
.div-fed-to-light { line-height: 0; background: #040812; }
.div-fed-to-light svg { display: block; width: 100%; }
.div-fed-to-dark { line-height: 0; background: #f4f6f9; }
.div-fed-to-dark svg { display: block; width: 100%; }
.div-fed-to-white { line-height: 0; background: #040812; }
.div-fed-to-white svg { display: block; width: 100%; }
.div-fed-faq { line-height: 0; background: #fff; }
.div-fed-faq svg { display: block; width: 100%; }

/* ── 3. INTRO / ANSWER ── */
.intro-fed { padding: var(--space-16) 0; background: #f4f6f9; }
.intro-fed-inner { max-width: 860px; margin: 0 auto; }
.fed-section-eyebrow {
  display: inline-flex; align-items: center; gap: 8px;
  font-family: var(--font-heading); font-size: 0.68rem; font-weight: 800;
  text-transform: uppercase; letter-spacing: 3px; color: var(--color-accent);
  padding: 5px 14px; border: 1px solid rgba(249,183,62,0.28);
  border-radius: var(--radius-full); background: rgba(249,183,62,0.06); margin-bottom: var(--space-4);
}
.intro-fed h2 {
  font-size: clamp(1.65rem, 2.8vw, 2.35rem); font-weight: 900;
  color: #1a2340; line-height: 1.15; text-wrap: balance; letter-spacing: -0.02em; margin-bottom: var(--space-4);
}
.intro-fed h2 em { color: var(--color-secondary); font-style: normal; }
.answer-block-fed {
  background: linear-gradient(135deg, rgba(249,183,62,0.08), rgba(229,53,231,0.04));
  border-left: 3px solid var(--color-accent);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  padding: var(--space-5) var(--space-6); margin-bottom: var(--space-6);
}
.answer-block-fed p { font-size: 0.95rem; color: #1a2340; line-height: 1.8; margin: 0; font-style: italic; }

/* Technique 5: federal distinction info card */
.fed-info-card {
  background: #fff; border: 1px solid rgba(249,183,62,0.18);
  border-radius: var(--radius-lg); padding: var(--space-7) var(--space-7);
  margin-bottom: var(--space-6); position: relative; overflow: hidden;
}
.fed-info-card::before {
  content: ''; position: absolute; left: 0; top: 0; bottom: 0;
  width: 4px; background: linear-gradient(180deg, var(--color-accent), var(--color-secondary));
  border-radius: var(--radius-full) 0 0 var(--radius-full);
}
.fed-info-card h3 {
  font-size: 1rem; font-weight: 800; color: #1a2340; margin-bottom: var(--space-3);
}
.fed-info-card p { font-size: 0.88rem; color: #4a5568; line-height: 1.8; margin: 0; }
.intro-fed p.prose { font-size: 0.95rem; color: #4a5568; line-height: 1.82; margin-bottom: var(--space-4); max-width: 65ch; }

/* ── 4. PROCESS SECTION ── */
/* Technique 6: dark bg with federal-specific step content */
.process-fed {
  padding: var(--space-16) 0;
  background: linear-gradient(135deg, #040812 0%, #0c0620 55%, #060c1a 100%);
  position: relative; overflow: hidden;
}
.process-fed::before {
  content: ''; position: absolute; inset: 0;
  background:
    radial-gradient(ellipse 48% 68% at 5% 50%, rgba(229,53,231,0.13) 0%, transparent 60%),
    radial-gradient(ellipse 44% 60% at 95% 50%, rgba(249,183,62,0.09) 0%, transparent 60%);
  pointer-events: none;
}
.process-fed-grid {
  display: grid; grid-template-columns: 1fr 1fr;
  gap: var(--space-16); align-items: start; position: relative; z-index: 1;
}
.process-fed-eyebrow {
  display: inline-flex; align-items: center; gap: 8px;
  font-family: var(--font-heading); font-size: 0.68rem; font-weight: 800;
  text-transform: uppercase; letter-spacing: 3px; color: var(--color-accent);
  padding: 5px 14px; border: 1px solid rgba(249,183,62,0.28);
  border-radius: var(--radius-full); background: rgba(249,183,62,0.07); margin-bottom: var(--space-4);
}
.process-fed h2 {
  font-size: clamp(1.55rem, 2.8vw, 2.2rem); font-weight: 900;
  color: #fff; line-height: 1.15; text-wrap: balance; letter-spacing: -0.02em; margin-bottom: var(--space-3);
}
.process-fed h2 em { color: var(--color-secondary); font-style: normal; }
.answer-block-dark-fed {
  background: rgba(255,255,255,0.04); border-left: 3px solid var(--color-accent);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  padding: var(--space-4) var(--space-5); margin-bottom: var(--space-6);
}
.answer-block-dark-fed p { font-size: 0.88rem; color: rgba(255,255,255,0.72); line-height: 1.8; margin: 0; font-style: italic; }
.process-fed-steps { display: flex; flex-direction: column; gap: var(--space-5); }
.process-fed-step { display: flex; gap: var(--space-5); align-items: flex-start; }
.fed-step-num {
  flex-shrink: 0; width: 40px; height: 40px; border-radius: 50%;
  background: linear-gradient(135deg, var(--color-accent) 0%, #c07a10 100%);
  display: flex; align-items: center; justify-content: center;
  font-family: var(--font-heading); font-size: 0.85rem; font-weight: 900;
  color: #0a0d1a; box-shadow: 0 0 18px rgba(249,183,62,0.32);
}
.fed-step-content h4 { font-size: 0.92rem; font-weight: 800; color: #fff; margin-bottom: var(--space-1); }
.fed-step-content p { font-size: 0.83rem; color: rgba(255,255,255,0.56); line-height: 1.7; margin: 0; }

/* Technique 7: glassmorphism federal comparison sidebar */
.fed-process-sidebar { padding-top: var(--space-4); }
.fed-pss-card {
  background: rgba(255,255,255,0.04); border: 1px solid rgba(255,255,255,0.09);
  border-radius: 18px; padding: var(--space-8); backdrop-filter: blur(10px);
  position: relative; overflow: hidden;
}
.fed-pss-card::before {
  content: ''; position: absolute; top: -55px; right: -55px;
  width: 220px; height: 220px; border-radius: 50%;
  background: radial-gradient(circle, rgba(249,183,62,0.14) 0%, transparent 68%); pointer-events: none;
}
.fed-pss-card::after {
  content: ''; position: absolute; bottom: -50px; left: -50px;
  width: 190px; height: 190px; border-radius: 50%;
  background: radial-gradient(circle, rgba(229,53,231,0.10) 0%, transparent 68%); pointer-events: none;
}
.fed-pss-title { font-family: var(--font-heading); font-size: 1rem; font-weight: 800; color: #fff; margin-bottom: var(--space-5); position: relative; z-index: 1; }
.fed-compare { display: flex; flex-direction: column; gap: var(--space-3); margin-bottom: var(--space-6); position: relative; z-index: 1; }
.fed-compare-row {
  display: grid; grid-template-columns: auto 1fr 1fr; gap: var(--space-3);
  padding: var(--space-3) var(--space-4); background: rgba(255,255,255,0.04);
  border-radius: var(--radius-md); border: 1px solid rgba(255,255,255,0.06); align-items: center;
}
.fed-compare-row .label { font-size: 0.7rem; font-weight: 700; color: rgba(255,255,255,0.45); text-transform: uppercase; letter-spacing: 0.5px; }
.fed-compare-row .val-state { font-size: 0.78rem; color: rgba(255,255,255,0.65); }
.fed-compare-row .val-fed { font-size: 0.78rem; color: var(--color-accent); font-weight: 600; }
.fed-compare-header { display: grid; grid-template-columns: auto 1fr 1fr; gap: var(--space-3); padding: 0 var(--space-4) var(--space-2); }
.fed-compare-header span { font-size: 0.65rem; font-weight: 800; text-transform: uppercase; letter-spacing: 1px; }
.fed-compare-header .h-state { color: rgba(255,255,255,0.4); }
.fed-compare-header .h-fed { color: var(--color-accent); }
.fed-pss-cta {
  display: block; width: 100%; padding: 13px;
  background: linear-gradient(135deg, var(--color-secondary) 0%, #b515b7 100%);
  color: #fff; font-family: var(--font-heading); font-size: 0.82rem; font-weight: 800;
  text-transform: uppercase; letter-spacing: 1.5px; border-radius: var(--radius-md);
  text-decoration: none; text-align: center;
  box-shadow: 0 4px 22px rgba(229,53,231,0.4); transition: all var(--transition-base); position: relative; z-index: 1;
}
.fed-pss-cta:hover { box-shadow: 0 8px 32px rgba(229,53,231,0.62); transform: translateY(-1px); color: #fff; }

/* ── 5. BENEFITS ── */
.benefits-fed { padding: var(--space-16) 0; background: #fff; }
.benefits-fed-header { text-align: center; margin-bottom: var(--space-12); }
.benefits-fed h2 {
  font-size: clamp(1.65rem, 2.8vw, 2.35rem); font-weight: 900;
  color: #1a2340; line-height: 1.15; text-wrap: balance; letter-spacing: -0.02em; margin-bottom: var(--space-3);
}
.benefits-fed h2 em { color: var(--color-secondary); font-style: normal; }
.benefits-fed-lead { font-size: 0.95rem; color: #4a5568; max-width: 500px; margin: 0 auto; line-height: 1.75; }
/* Technique 8: benefit cards — federal credibility emphasis */
.benefits-fed-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; }
.benefit-fed-card {
  background: #f7f8fb; border: 1px solid rgba(249,183,62,0.12);
  border-radius: var(--radius-lg); padding: var(--space-7) var(--space-6);
  transition: transform var(--transition-base), box-shadow var(--transition-base), border-color var(--transition-base);
  position: relative; overflow: hidden;
}
.benefit-fed-card::after {
  content: ''; position: absolute; bottom: 0; left: 0; right: 0;
  height: 2px; background: linear-gradient(90deg, var(--color-accent), var(--color-secondary));
  transform: scaleX(0); transform-origin: left; transition: transform var(--transition-base);
}
.benefit-fed-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 14px 35px rgba(249,183,62,0.12), 0 4px 10px rgba(0,0,0,0.06);
  border-color: rgba(249,183,62,0.3);
}
.benefit-fed-card:hover::after { transform: scaleX(1); }
.bfc-f-icon {
  width: 50px; height: 50px; border-radius: 50%;
  background: linear-gradient(135deg, rgba(249,183,62,0.14), rgba(229,53,231,0.07));
  border: 1px solid rgba(249,183,62,0.22);
  display: flex; align-items: center; justify-content: center;
  margin-bottom: var(--space-4); color: var(--color-accent);
}
.bfc-f-icon svg { width: 22px; height: 22px; }
.benefit-fed-card h4 { font-size: 0.92rem; font-weight: 800; color: #1a2340; margin-bottom: var(--space-2); }
.benefit-fed-card p { font-size: 0.84rem; color: #4a5568; line-height: 1.7; margin: 0; }

/* ── 6. FAQ ── */
.faq-fed { padding: var(--space-16) 0; background: #f4f6f9; }
.faq-fed-inner { max-width: 820px; margin: 0 auto; }
.faq-fed h2 {
  font-size: clamp(1.55rem, 2.6vw, 2.15rem); font-weight: 900;
  color: #1a2340; line-height: 1.15; text-wrap: balance; letter-spacing: -0.02em; margin-bottom: var(--space-3);
}
.faq-fed h2 em { color: var(--color-secondary); font-style: normal; }
.faq-fed-sub { font-size: 0.92rem; color: #4a5568; margin-bottom: var(--space-10); line-height: 1.75; }
.faq-fed-list { display: flex; flex-direction: column; gap: var(--space-3); }
.faq-fed-item {
  background: #fff; border: 1px solid rgba(249,183,62,0.14);
  border-radius: var(--radius-lg); overflow: hidden;
  transition: border-color var(--transition-base), box-shadow var(--transition-base);
}
.faq-fed-item.open { border-color: rgba(249,183,62,0.42); box-shadow: 0 4px 18px rgba(249,183,62,0.09); }
.faq-fed-q {
  display: flex; align-items: center; justify-content: space-between;
  gap: var(--space-4); padding: var(--space-5) var(--space-6);
  cursor: pointer; background: transparent; border: none; width: 100%;
  text-align: left; font-family: var(--font-heading); font-size: 0.92rem;
  font-weight: 700; color: #1a2340; transition: color var(--transition-fast); user-select: none;
}
.faq-fed-q:hover { color: var(--color-accent); }
.faq-fed-item.open .faq-fed-q { color: var(--color-accent); }
.faq-fed-icon {
  flex-shrink: 0; width: 26px; height: 26px; border-radius: 50%;
  background: rgba(249,183,62,0.1); border: 1px solid rgba(249,183,62,0.22);
  display: flex; align-items: center; justify-content: center;
  transition: background var(--transition-base), transform var(--transition-base);
  font-size: 0.95rem; color: var(--color-accent); font-weight: 900;
}
.faq-fed-item.open .faq-fed-icon { background: var(--color-accent); color: #0a0d1a; transform: rotate(45deg); }
.faq-fed-a {
  display: none; padding: 0 var(--space-6) var(--space-5);
  font-size: 0.88rem; color: #4a5568; line-height: 1.8;
  border-top: 1px solid rgba(249,183,62,0.08); padding-top: var(--space-4);
}
.faq-fed-item.open .faq-fed-a { display: block; }

/* ── 7. RELATED ── */
.related-fed { padding: var(--space-14) 0; background: #fff; }
.related-fed-h3 {
  font-size: clamp(1.45rem, 2.4vw, 1.95rem); font-weight: 900;
  color: #1a2340; text-align: center; margin-bottom: var(--space-2); text-wrap: balance;
}
.related-fed-sub { text-align: center; font-size: 0.9rem; color: #4a5568; margin-bottom: var(--space-10); }
.related-fed-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; }
.rfd-card {
  border-radius: var(--radius-lg); overflow: hidden; display: flex; flex-direction: column;
  border: 1px solid rgba(229,53,231,0.1); background: #fff;
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.rfd-card:hover { transform: translateY(-5px); box-shadow: 0 14px 35px rgba(229,53,231,0.14), 0 4px 10px rgba(0,0,0,0.06); }
.rfd-banner { height: 80px; display: flex; align-items: center; justify-content: center; }
.rfd-card.t1 .rfd-banner { background: linear-gradient(145deg, #040812, #1a0835); }
.rfd-card.t2 .rfd-banner { background: linear-gradient(145deg, #080f24, #142040); }
.rfd-card.t3 .rfd-banner { background: linear-gradient(145deg, #0c0618, #200a30); }
.rfd-icon-ring {
  width: 46px; height: 46px; border-radius: 50%;
  border: 1px solid rgba(255,255,255,0.15); background: rgba(255,255,255,0.07);
  display: flex; align-items: center; justify-content: center;
}
.rfd-icon-ring svg { width: 22px; height: 22px; color: var(--color-accent); }
.rfd-body { padding: var(--space-5); flex: 1; display: flex; flex-direction: column; }
.rfd-body h3 { font-size: 0.9rem; font-weight: 800; color: #1a2340; margin-bottom: var(--space-2); }
.rfd-body p { font-size: 0.8rem; color: #4a5568; line-height: 1.65; flex: 1; margin-bottom: var(--space-4); }
.rfd-link {
  display: inline-flex; align-items: center; gap: 4px;
  font-size: 0.78rem; font-weight: 800; color: var(--color-secondary);
  text-decoration: none; transition: gap var(--transition-fast);
}
.rfd-link:hover { gap: 8px; }
.rfd-link svg { width: 14px; height: 14px; }

/* ── 8. CTA ── */
.cta-fed {
  padding: var(--space-14) 0;
  background: linear-gradient(135deg, #040812 0%, #100620 55%, #060c1a 100%);
  position: relative; overflow: hidden; text-align: center;
}
.cta-fed::before {
  content: ''; position: absolute; inset: 0;
  background:
    radial-gradient(ellipse 55% 78% at 18% 50%, rgba(229,53,231,0.14) 0%, transparent 58%),
    radial-gradient(ellipse 48% 68% at 82% 50%, rgba(249,183,62,0.10) 0%, transparent 58%);
  pointer-events: none;
}
.cta-fed-inner { position: relative; z-index: 1; max-width: 560px; margin: 0 auto; }
.cta-fed h2 {
  font-size: clamp(1.5rem, 2.8vw, 2.2rem); font-weight: 900;
  color: #fff; text-wrap: balance; margin-bottom: var(--space-3);
}
.cta-fed h2 em { color: var(--color-accent); font-style: normal; }
.cta-fed p { font-size: 0.95rem; color: rgba(255,255,255,0.56); max-width: 440px; margin: 0 auto var(--space-7); line-height: 1.75; }
.cta-fed-btns { display: flex; gap: var(--space-3); justify-content: center; flex-wrap: wrap; }

/* ── RESPONSIVE ── */
@media (max-width: 1024px) {
  .hero-fed-inner { grid-template-columns: 1fr; }
  .hero-fed-card { display: none; }
  .process-fed-grid { grid-template-columns: 1fr; gap: var(--space-10); }
}
@media (max-width: 768px) {
  .benefits-fed-grid { grid-template-columns: repeat(2, 1fr); }
  .related-fed-grid { grid-template-columns: 1fr; }
}
@media (max-width: 480px) {
  .benefits-fed-grid { grid-template-columns: 1fr; }
}
</style>

<!-- ═══ HERO ═══ -->
<section class="hero-fed" aria-label="Federal bail bonds South Florida">
  <div class="fed-orb fed-orb-1"></div>
  <div class="fed-orb fed-orb-2"></div>

  <div class="container">
    <div class="hero-fed-inner">
      <div class="hero-fed-left">
        <span class="fed-eyebrow">
          <span class="fed-dot"></span>
          Federal Court Experience · 24/7 · Southern District of FL
        </span>
        <h1>
          <span class="hl-gold">Federal Bail Bonds</span> in South Florida —<br>
          <span class="hl-mag">Licensed Bondsman</span> with Federal Court Experience
        </h1>
        <p class="hero-answer">Mad Extra Bail Bonds handles federal bail bonds across the Southern District of Florida — including the Federal Detention Center in Miami and federal facilities in Palm Beach and Broward counties. Federal cases require a different level of experience and urgency. We are available 24 hours a day and act immediately when a federal bond is set.</p>
        <div class="hero-fed-btns">
          <?php if (!empty($phone)): ?>
          <a href="tel:<?php echo preg_replace('/\D/','',$phone); ?>" class="btn-fed-primary">
            <?php echo lucide_icon('phone'); ?> Call Now — 24/7
          </a>
          <?php else: ?>
          <a href="/contact/" class="btn-fed-primary">
            <?php echo lucide_icon('zap'); ?> Get Federal Help Now
          </a>
          <?php endif; ?>
          <a href="/contact/" class="btn-fed-secondary">Free Consultation</a>
        </div>
        <div class="fed-trust-row">
          <span class="fed-htb"><?php echo lucide_icon('shield-check'); ?> Licensed FL Bondsman</span>
          <span class="fed-htb"><?php echo lucide_icon('landmark'); ?> Federal Court Experience</span>
          <span class="fed-htb"><?php echo lucide_icon('clock'); ?> 24/7 Availability</span>
          <span class="fed-htb"><?php echo lucide_icon('home'); ?> Collateral Options</span>
        </div>
      </div>

      <div class="hero-fed-card">
        <p class="hfc-f-title">Federal Arrest? Call Immediately.</p>
        <p class="hfc-f-note">Federal bond expertise</p>
        <ul class="hfc-f-list">
          <li><span class="hfc-f-check">✓</span> Southern District of Florida experience</li>
          <li><span class="hfc-f-check">✓</span> FDC Miami & all federal facilities</li>
          <li><span class="hfc-f-check">✓</span> Collateral arrangements available</li>
          <li><span class="hfc-f-check">✓</span> Work directly with U.S. Marshals</li>
          <li><span class="hfc-f-check">✓</span> Available 24/7 for detention hearings</li>
        </ul>
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo preg_replace('/\D/','',$phone); ?>" class="hfc-f-cta">
          <?php echo lucide_icon('phone'); ?> Call Now
        </a>
        <?php else: ?>
        <a href="/contact/" class="hfc-f-cta">Get Federal Help Now</a>
        <?php endif; ?>
        <p class="hfc-f-disclaimer">Available every hour — federal cases move fast</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SVG DIVIDER ═══ -->
<div class="div-fed-to-light" aria-hidden="true">
  <svg viewBox="0 0 1440 55" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,55 L0,10 Q480,55 720,22 Q960,-2 1440,36 L1440,55 Z" fill="#f4f6f9"/>
  </svg>
</div>

<!-- ═══ INTRO / ANSWER ═══ -->
<section class="intro-fed" aria-label="Federal bail bond overview">
  <div class="container">
    <div class="intro-fed-inner">
      <span class="fed-section-eyebrow">About This Service</span>
      <h2>How do federal bail bonds work differently from state bonds in South Florida?</h2>
      <div class="answer-block answer-block-fed">
        <p>Federal bail is governed by the Bail Reform Act of 1984 — not Florida state law. A federal magistrate judge holds a separate detention hearing to decide release conditions. There is no preset bail schedule; amounts can be far higher than state bonds. The federal premium is typically 10–15% of the bond amount, and collateral is nearly always required for significant federal cases.</p>
      </div>
      <div class="fed-info-card">
        <h3>What makes a federal bail bond more complex?</h3>
        <p>Federal cases involve U.S. Marshals, federal magistrate judges, and detention hearings governed by federal law. Release conditions are more restrictive, bond amounts are typically much higher, and the paperwork is filed directly with the clerk of the federal court rather than a county jail. Mad Extra Bail Bonds has the federal court experience to navigate this process correctly and quickly.</p>
      </div>
      <p class="prose">The Southern District of Florida — covering Miami-Dade, Broward, and Palm Beach counties — is one of the most active federal court districts in the country for drug trafficking, financial fraud, immigration, and weapons cases. We have experience working in this district and with the facilities used for federal detention in South Florida.</p>
    </div>
  </div>
</section>

<!-- ═══ SVG DIVIDER ═══ -->
<div class="div-fed-to-dark" aria-hidden="true">
  <svg viewBox="0 0 1440 55" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,0 Q380,55 720,28 Q1060,2 1440,44 L1440,55 L0,55 Z" fill="#040812"/>
  </svg>
</div>

<!-- ═══ PROCESS SECTION ═══ -->
<section class="process-fed" aria-label="Federal bail bond process">
  <div class="container">
    <div class="process-fed-grid">
      <div>
        <span class="process-fed-eyebrow"><?php echo lucide_icon('landmark'); ?> The Federal Process</span>
        <h2>What happens at a <em>federal detention hearing</em> in South Florida?</h2>
        <div class="answer-block-dark-fed">
          <p>A federal detention hearing must occur within 48 hours of arrest. A federal magistrate judge hears arguments from both the government and the defense about whether the defendant should be released and on what conditions. If bond is granted, we post it directly with the federal court clerk and coordinate release with the U.S. Marshals. Call us immediately — we need to be ready before the hearing.</p>
        </div>
        <div class="process-fed-steps">
          <div class="process-fed-step">
            <div class="fed-step-num">1</div>
            <div class="fed-step-content">
              <h4>Call Us Immediately After Arrest</h4>
              <p>Federal cases move on a 48-hour window to the detention hearing. The earlier you contact us, the better prepared we are to act the moment bond is set.</p>
            </div>
          </div>
          <div class="process-fed-step">
            <div class="fed-step-num">2</div>
            <div class="fed-step-content">
              <h4>We Monitor the Detention Hearing</h4>
              <p>We track the detention hearing schedule, confirm the federal magistrate and facility, and stand ready to post bond the moment it is ordered.</p>
            </div>
          </div>
          <div class="process-fed-step">
            <div class="fed-step-num">3</div>
            <div class="fed-step-content">
              <h4>Arrange Bond, Collateral & Documents</h4>
              <p>Federal bonds require more paperwork and often collateral. We prepare all documentation in advance so there is no delay after the judge sets the bond.</p>
            </div>
          </div>
          <div class="process-fed-step">
            <div class="fed-step-num">4</div>
            <div class="fed-step-content">
              <h4>Bond Filed with Federal Court</h4>
              <p>We file the bond with the clerk of the federal court and coordinate with U.S. Marshals for release. The process takes longer than state releases — typically 24 to 48 hours after filing.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="fed-process-sidebar">
        <div class="fed-pss-card">
          <p class="fed-pss-title">State vs. Federal Bail: Key Differences</p>
          <div class="fed-compare-header">
            <span></span>
            <span class="h-state">State Bond</span>
            <span class="h-fed">Federal Bond</span>
          </div>
          <div class="fed-compare">
            <div class="fed-compare-row">
              <span class="label">Schedule</span>
              <span class="val-state">Preset chart</span>
              <span class="val-fed">Judge decides</span>
            </div>
            <div class="fed-compare-row">
              <span class="label">Hearing</span>
              <span class="val-state">First appear.</span>
              <span class="val-fed">Detention hrg.</span>
            </div>
            <div class="fed-compare-row">
              <span class="label">Premium</span>
              <span class="val-state">10% fixed</span>
              <span class="val-fed">10–15%</span>
            </div>
            <div class="fed-compare-row">
              <span class="label">Collateral</span>
              <span class="val-state">Often not req.</span>
              <span class="val-fed">Usually req.</span>
            </div>
            <div class="fed-compare-row">
              <span class="label">Filed with</span>
              <span class="val-state">County jail</span>
              <span class="val-fed">Federal court</span>
            </div>
          </div>
          <?php if (!empty($phone)): ?>
          <a href="tel:<?php echo preg_replace('/\D/','',$phone); ?>" class="fed-pss-cta">
            <?php echo lucide_icon('phone'); ?> Call Now — 24/7
          </a>
          <?php else: ?>
          <a href="/contact/" class="fed-pss-cta">Get Federal Help Now</a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SVG DIVIDER ═══ -->
<div class="div-fed-to-white" aria-hidden="true">
  <svg viewBox="0 0 1440 55" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,0 Q720,55 1440,12 L1440,55 L0,55 Z" fill="#ffffff"/>
  </svg>
</div>

<!-- ═══ BENEFITS ═══ -->
<section class="benefits-fed" aria-label="Federal bail bond benefits">
  <div class="container">
    <div class="benefits-fed-header">
      <span class="fed-section-eyebrow">Why Choose Mad Extra</span>
      <h2>What makes <em>Mad Extra Bail Bonds</em> the right choice for federal charges in South Florida?</h2>
      <p class="benefits-fed-lead">Federal cases require a bondsman with federal court experience, not just a state bondsman who handles any case. Here's what we bring to federal bond cases.</p>
    </div>
    <div class="benefits-fed-grid">
      <div class="benefit-fed-card">
        <div class="bfc-f-icon"><?php echo lucide_icon('landmark'); ?></div>
        <h4>Southern District of FL Experience</h4>
        <p>We know the Southern District — the federal court districts covering Miami-Dade, Broward, and Palm Beach counties.</p>
      </div>
      <div class="benefit-fed-card">
        <div class="bfc-f-icon"><?php echo lucide_icon('clock'); ?></div>
        <h4>Detention Hearing Ready 24/7</h4>
        <p>Federal detention hearings happen fast. We monitor schedules and are ready to post bond the moment the judge orders release.</p>
      </div>
      <div class="benefit-fed-card">
        <div class="bfc-f-icon"><?php echo lucide_icon('home'); ?></div>
        <h4>Collateral Arrangements Available</h4>
        <p>Federal bonds often require real estate or other substantial collateral. We work through collateral options before the hearing.</p>
      </div>
      <div class="benefit-fed-card">
        <div class="bfc-f-icon"><?php echo lucide_icon('shield-check'); ?></div>
        <h4>Licensed FL Bail Bondsman</h4>
        <p>Licensed by the Florida Department of Financial Services with the authority to post bonds in federal courts in Florida.</p>
      </div>
      <div class="benefit-fed-card">
        <div class="bfc-f-icon"><?php echo lucide_icon('users'); ?></div>
        <h4>Direct U.S. Marshal Coordination</h4>
        <p>Federal releases go through the U.S. Marshal Service. We have direct communication channels to facilitate release as fast as possible.</p>
      </div>
      <div class="benefit-fed-card">
        <div class="bfc-f-icon"><?php echo lucide_icon('globe'); ?></div>
        <h4>11+ Years South Florida Experience</h4>
        <p>Over a decade helping South Florida families navigate federal and state bail — including complex immigration-related federal cases.</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SVG DIVIDER ═══ -->
<div class="div-fed-faq" aria-hidden="true">
  <svg viewBox="0 0 1440 40" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,18 Q380,42 720,8 Q1060,-10 1440,20 L1440,40 L0,40 Z" fill="#f4f6f9"/>
  </svg>
</div>

<!-- ═══ FAQ ═══ -->
<section class="faq-fed" aria-label="Federal bail bond FAQ">
  <div class="container">
    <div class="faq-fed-inner">
      <span class="fed-section-eyebrow">Common Questions</span>
      <h2>Frequently asked questions about <em>federal bail bonds</em> in South Florida</h2>
      <p class="faq-fed-sub">Direct answers to what families ask most about federal arrests and federal bail bonds in the Southern District of Florida.</p>
      <div class="faq-fed-list" role="list">
        <?php foreach ($_faqs as $faq): ?>
        <div class="faq-fed-item" role="listitem">
          <button class="faq-fed-q" aria-expanded="false" onclick="toggleFaqFed(this)">
            <?php echo htmlspecialchars($faq['q']); ?>
            <span class="faq-fed-icon" aria-hidden="true">+</span>
          </button>
          <div class="faq-fed-a" role="region">
            <p><?php echo htmlspecialchars($faq['a']); ?></p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- ═══ RELATED SERVICES ═══ -->
<section class="related-fed" aria-label="Related bail bond services">
  <div class="container">
    <h3 class="related-fed-h3">Other Services You May Need</h3>
    <p class="related-fed-sub">Mad Extra Bail Bonds handles every type of bail bond across South Florida — 24/7.</p>
    <div class="related-fed-grid">
      <article class="rfd-card t1">
        <div class="rfd-banner"><div class="rfd-icon-ring"><?php echo lucide_icon('gavel'); ?></div></div>
        <div class="rfd-body">
          <h3>Felony Bail Bonds</h3>
          <p>State felony charges often accompany federal cases — we handle both levels of the court system.</p>
          <a href="/services/felony-bail-bonds/" class="rfd-link">Learn more <?php echo lucide_icon('arrow-right'); ?></a>
        </div>
      </article>
      <article class="rfd-card t2">
        <div class="rfd-banner"><div class="rfd-icon-ring"><?php echo lucide_icon('globe'); ?></div></div>
        <div class="rfd-body">
          <h3>Immigration Bail Bonds</h3>
          <p>Federal immigration detentions often intersect with criminal federal charges — we handle both.</p>
          <a href="/services/immigration-bail-bonds/" class="rfd-link">Learn more <?php echo lucide_icon('arrow-right'); ?></a>
        </div>
      </article>
      <article class="rfd-card t3">
        <div class="rfd-banner"><div class="rfd-icon-ring"><?php echo lucide_icon('shield'); ?></div></div>
        <div class="rfd-body">
          <h3>Bail Bond Services</h3>
          <p>General criminal bail bonds for any state charge across all South Florida facilities.</p>
          <a href="/services/bail-bonds/" class="rfd-link">Learn more <?php echo lucide_icon('arrow-right'); ?></a>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- ═══ EMERGENCY CTA ═══ -->
<section class="cta-fed" aria-label="Emergency federal bail bond contact">
  <div class="cta-fed-inner">
    <h2>Facing a <em>federal arrest</em> in South Florida?</h2>
    <p>Federal detention hearings happen within 48 hours — there is no time to wait. Call us the moment you learn of a federal arrest and we will be ready to post bond the instant the judge allows it.</p>
    <div class="cta-fed-btns">
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo preg_replace('/\D/','',$phone); ?>" class="btn-fed-primary">
        <?php echo lucide_icon('phone'); ?> Call Now — 24/7
      </a>
      <?php endif; ?>
      <a href="/contact/" class="btn-fed-secondary">Send a Message</a>
    </div>
  </div>
</section>

<script>
function toggleFaqFed(btn) {
  const item = btn.closest('.faq-fed-item');
  const isOpen = item.classList.contains('open');
  document.querySelectorAll('.faq-fed-item.open').forEach(el => el.classList.remove('open'));
  document.querySelectorAll('.faq-fed-q').forEach(el => el.setAttribute('aria-expanded','false'));
  if (!isOpen) {
    item.classList.add('open');
    btn.setAttribute('aria-expanded','true');
  }
}
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
