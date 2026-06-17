<?php
/**
 * areas/lake-worth-beach/index.php — Lake Worth Beach Service Area Page
 * Mad Extra Bail Bonds | Delray Beach, FL
 * Phase 3B: Service Area Pages
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Bail Bonds Near Me in Lake Worth Beach FL | Mad Extra Bail Bonds | 24/7';
$pageDescription = 'Need bail bonds in Lake Worth Beach, FL? Mad Extra Bail Bonds serves Lake Worth Beach with 24/7 licensed bondsman service. Fast release from Palm Beach County Jail. Call now.';
$canonicalUrl    = $siteUrl . '/areas/lake-worth-beach/';
$currentPage     = 'areas';

$_breadcrumb = generateBreadcrumbSchema([
    ['name' => 'Home',            'url' => $siteUrl . '/'],
    ['name' => 'Service Areas',   'url' => $siteUrl . '/areas/'],
    ['name' => 'Lake Worth Beach','url' => $siteUrl . '/areas/lake-worth-beach/'],
]);

$_serviceSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'Service',
    '@id'         => $siteUrl . '/areas/lake-worth-beach/#service-lake-worth-beach',
    'name'        => 'Bail Bonds in Lake Worth Beach, FL',
    'description' => 'Mad Extra Bail Bonds provides 24/7 licensed bail bond services in Lake Worth Beach, FL. Fast, discreet release from Palm Beach County Jail for all charge types.',
    'url'         => $siteUrl . '/areas/lake-worth-beach/',
    'provider'    => ['@id' => $siteUrl . '/#organization'],
    'areaServed'  => [
        ['@type' => 'City',   'name' => 'Lake Worth Beach, FL'],
        ['@type' => 'County', 'name' => 'Palm Beach County, FL'],
    ],
    'serviceType' => 'Bail Bond Services',
];

$_faqs = [
    [
        'q' => 'How does the Lake Worth Beach Police Department process arrests before transferring to jail?',
        'a' => 'LWBPD books locally at 1 N Federal Hwy in Lake Worth Beach. Transport to Palm Beach County Jail in West Palm Beach typically happens within 4 to 6 hours. Call us immediately after you learn of the arrest — we begin preparing paperwork right away so we are ready to post bond the moment the defendant is processed in at PBCJ.',
    ],
    [
        'q' => 'Does Mad Extra Bail Bonds serve Lake Worth Beach\'s diverse communities?',
        'a' => 'Yes. We serve Spanish-speaking and Haitian Creole-speaking families in Lake Worth Beach. Language should not be a barrier when your loved one is in jail — call us and we will connect you with someone who can communicate clearly in the language your family is most comfortable with.',
    ],
    [
        'q' => 'What types of charges lead to arrests in Lake Worth Beach most commonly?',
        'a' => 'The downtown Lake Avenue entertainment district and the Lake Worth Beach waterfront area generate DUI, disorderly conduct, and drug possession arrests, particularly on weekends. Residential areas in College Park and Lake Worth Shores see warrant-related arrests. We handle all charge types across Lake Worth Beach — from misdemeanor to felony.',
    ],
    [
        'q' => 'Can I bail someone out of Palm Beach County Jail from Lake Worth Beach without driving to West Palm Beach?',
        'a' => 'You do not need to go to PBCJ yourself. We handle everything at the jail. You can sign paperwork at our office in Delray Beach or electronically, and pay the premium remotely. Most Lake Worth Beach families never need to travel to West Palm Beach to secure their loved one\'s release.',
    ],
    [
        'q' => 'What happens if a Lake Worth Beach arrest happened on the beach or in Bryant Park?',
        'a' => 'Arrests in public spaces — including Lake Worth Beach itself or Bryant Park along the waterfront — are typically handled by LWBPD with the same booking and transport process as any city arrest. Beach-area arrests in Lake Worth Beach peak during summer season weekends. The process is identical regardless of where in the city the arrest occurred.',
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
   LAKE WORTH BEACH AREA PAGE — Mad Extra Bail Bonds
   Premium Tier | Dark/Neon Design System
   Prefix: lwb-
   Techniques:
     1. Layered ::before radial gradients (magenta top-left, gold bottom-right, deep navy)
     2. Noise texture ::after on hero (inline SVG feTurbulence)
     3. Two floating neon orbs — large centered-top, small bottom-right
     4. Stat bar below H1 — 4 gradient-text stats in a row
     5. SVG dividers — 3 distinct shapes (diagonal, multi-wave, curved)
     6. FAQ accordion — neon left-border on .open state items
     7. Service cards — neon glow box-shadow on hover
     8. Dark local coverage section — decorative orb at LEFT
     9. Related area cards — horizontal flex-row layout
   ============================================================ */

/* ── 1. HERO ── */
.lwb-hero {
  position: relative;
  min-height: 60vh;
  display: flex;
  align-items: center;
  background: #09090f;
  overflow: hidden;
  padding-top: var(--nav-height, 72px);
  padding-bottom: 0;
}

/* Technique 1: layered ::before radial gradients — magenta top-left, gold bottom-right */
.lwb-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 60% 70% at 0% 10%, rgba(229,53,231,0.26) 0%, transparent 55%),
    radial-gradient(ellipse 50% 55% at 92% 85%, rgba(249,183,62,0.18) 0%, transparent 50%),
    radial-gradient(ellipse 70% 45% at 50% 110%, rgba(10,18,38,0.98) 0%, transparent 75%);
  pointer-events: none;
  z-index: 0;
}

/* Technique 2: noise texture ::after */
.lwb-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 300 300' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='lwb-noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23lwb-noise)' opacity='0.04'/%3E%3C/svg%3E");
  opacity: 0.55;
  pointer-events: none;
  z-index: 0;
}

/* Technique 3: Floating neon orbs — large centered-top, small bottom-right */
.lwb-orb-1 {
  position: absolute;
  width: 560px;
  height: 560px;
  top: -200px;
  left: 50%;
  transform: translateX(-50%);
  border-radius: 50%;
  background: radial-gradient(circle, rgba(229,53,231,0.16) 0%, transparent 65%);
  animation: lwb-orb-drift 14s ease-in-out infinite;
  pointer-events: none;
  z-index: 0;
}

.lwb-orb-2 {
  position: absolute;
  width: 280px;
  height: 280px;
  bottom: -40px;
  right: 4%;
  border-radius: 50%;
  background: radial-gradient(circle, rgba(249,183,62,0.14) 0%, transparent 65%);
  animation: lwb-orb-drift 19s ease-in-out infinite reverse;
  animation-delay: -7s;
  pointer-events: none;
  z-index: 0;
}

@keyframes lwb-orb-drift {
  0%, 100% { transform: translateX(-50%) translate(0, 0) scale(1); }
  35%       { transform: translateX(-50%) translate(14px, -18px) scale(1.05); }
  70%       { transform: translateX(-50%) translate(-10px, 12px) scale(0.96); }
}

.lwb-orb-2 { animation-name: lwb-orb-drift-2; }
@keyframes lwb-orb-drift-2 {
  0%, 100% { transform: translate(0, 0) scale(1); }
  40%      { transform: translate(-12px, -16px) scale(1.04); }
  75%      { transform: translate(8px, 10px) scale(0.97); }
}

.lwb-hero-inner {
  position: relative;
  z-index: 2;
  padding: var(--space-14) 0 var(--space-10);
  width: 100%;
  max-width: 780px;
}

/* Eyebrow pill — magenta color */
.lwb-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  font-family: var(--font-heading);
  font-size: 0.67rem;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 3px;
  color: var(--color-secondary);
  padding: 6px 16px;
  border: 1px solid rgba(229,53,231,0.44);
  border-radius: var(--radius-full);
  background: rgba(229,53,231,0.08);
  margin-bottom: var(--space-5);
}

.lwb-eyebrow .lwb-pulse {
  width: 7px;
  height: 7px;
  border-radius: 50%;
  background: var(--color-secondary);
  box-shadow: 0 0 8px var(--color-secondary);
  animation: lwb-pulse-anim 2s ease-in-out infinite;
  flex-shrink: 0;
}

@keyframes lwb-pulse-anim {
  0%, 100% { opacity: 1; transform: scale(1); }
  50%       { opacity: 0.55; transform: scale(0.72); }
}

.lwb-hero h1 {
  font-size: clamp(1.8rem, 3.8vw, 3rem);
  font-weight: 900;
  color: var(--color-white);
  line-height: 1.1;
  margin-bottom: var(--space-5);
  letter-spacing: -0.025em;
  text-wrap: balance;
}

.lwb-hero h1 .lwb-hl-gold { color: var(--color-accent); text-shadow: 0 0 28px rgba(249,183,62,0.5); }
.lwb-hero h1 .lwb-hl-mag  { color: var(--color-secondary); text-shadow: 0 0 28px rgba(229,53,231,0.5); }

.lwb-hero-answer {
  font-size: 1rem;
  color: rgba(255,255,255,0.68);
  line-height: 1.82;
  margin-bottom: var(--space-8);
  max-width: 640px;
}

/* Technique 4: Stat bar — 4 gradient-text stats in a row */
.lwb-stat-bar {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 2px;
  background: rgba(255,255,255,0.07);
  border: 1px solid rgba(255,255,255,0.09);
  border-radius: var(--radius-lg);
  overflow: hidden;
  margin-bottom: var(--space-8);
}

.lwb-stat-item {
  padding: var(--space-4) var(--space-3);
  text-align: center;
  background: rgba(255,255,255,0.03);
  border-right: 1px solid rgba(255,255,255,0.07);
  transition: background var(--transition-base);
}

.lwb-stat-item:last-child { border-right: none; }
.lwb-stat-item:hover { background: rgba(229,53,231,0.07); }

.lwb-stat-num {
  display: block;
  font-family: var(--font-heading);
  font-size: 1.45rem;
  font-weight: 900;
  line-height: 1;
  margin-bottom: 4px;
  /* gradient-text via background-clip */
  background: linear-gradient(135deg, var(--color-secondary) 0%, var(--color-accent) 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}

.lwb-stat-label {
  display: block;
  font-size: 0.62rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1.2px;
  color: rgba(255,255,255,0.45);
}

/* CTA buttons */
.lwb-hero-btns {
  display: flex;
  gap: var(--space-3);
  flex-wrap: wrap;
  margin-bottom: var(--space-7);
}

.lwb-btn-primary {
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
  box-shadow: 0 0 22px rgba(229,53,231,0.44), 0 4px 14px rgba(0,0,0,0.3);
  transition: all var(--transition-base);
}

.lwb-btn-primary:hover {
  background: #f043f2;
  box-shadow: 0 0 44px rgba(229,53,231,0.68), 0 8px 22px rgba(0,0,0,0.35);
  transform: translateY(-2px);
  color: var(--color-white);
}

.lwb-btn-primary svg { width: 15px; height: 15px; }

.lwb-btn-secondary {
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

.lwb-btn-secondary:hover {
  background: var(--color-accent);
  color: #0a0d1a;
  border-color: var(--color-accent);
  box-shadow: 0 0 26px rgba(249,183,62,0.42);
  transform: translateY(-2px);
}

/* Trust badges row */
.lwb-trust-row {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-2);
}

.lwb-badge {
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

.lwb-badge svg { width: 11px; height: 11px; color: var(--color-accent); flex-shrink: 0; }

/* ── 2. SVG DIVIDERS ── */

/* Divider 1: diagonal/angled cut — dark to light */
.lwb-divider-1 {
  line-height: 0;
  background: #09090f;
}
.lwb-divider-1 svg { display: block; width: 100%; }

/* Divider 2: multi-wave — light to dark */
.lwb-divider-2 {
  line-height: 0;
  background: #f4f6f9;
}
.lwb-divider-2 svg { display: block; width: 100%; }

/* Divider 3: curved smooth — dark to white */
.lwb-divider-3 {
  line-height: 0;
  background: #09090f;
}
.lwb-divider-3 svg { display: block; width: 100%; }

/* Divider 4: small white to light */
.lwb-divider-4 {
  line-height: 0;
  background: #ffffff;
}
.lwb-divider-4 svg { display: block; width: 100%; }

/* ── 3. INTRO / ANSWER SECTION ── */
.lwb-intro {
  padding: var(--space-16) 0;
  background: #f4f6f9;
}

.lwb-intro-inner {
  max-width: 860px;
  margin: 0 auto;
}

.lwb-section-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  font-family: var(--font-heading);
  font-size: 0.67rem;
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

.lwb-intro-h2 {
  font-size: clamp(1.65rem, 2.8vw, 2.3rem);
  font-weight: 900;
  color: var(--color-dark);
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.02em;
  margin-bottom: var(--space-5);
}

.lwb-intro-h2 em { color: var(--color-secondary); font-style: normal; }

/* AEO answer block — magenta left border */
.lwb-answer-block {
  background: linear-gradient(135deg, rgba(229,53,231,0.07), rgba(249,183,62,0.04));
  border-left: 3px solid var(--color-secondary);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  padding: var(--space-5) var(--space-6);
  margin-bottom: var(--space-7);
}

.lwb-answer-block p {
  font-size: 0.95rem;
  color: var(--color-dark);
  line-height: 1.82;
  margin: 0;
  font-style: italic;
}

.lwb-intro p {
  font-size: 0.95rem;
  color: var(--color-gray);
  line-height: 1.82;
  margin-bottom: var(--space-4);
}

/* ── 4. LOCAL COVERAGE SECTION (dark) ── */
.lwb-coverage {
  padding: var(--space-16) 0;
  background: linear-gradient(135deg, #09090f 0%, #110820 55%, #0a1525 100%);
  position: relative;
  overflow: hidden;
}

/* Technique 8: decorative large orb at LEFT side */
.lwb-coverage-orb {
  position: absolute;
  width: 620px;
  height: 620px;
  top: 50%;
  left: -180px;
  transform: translateY(-50%);
  border-radius: 50%;
  background: radial-gradient(circle, rgba(229,53,231,0.12) 0%, transparent 65%);
  pointer-events: none;
}

.lwb-coverage-inner {
  position: relative;
  z-index: 2;
}

.lwb-coverage-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  font-family: var(--font-heading);
  font-size: 0.67rem;
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

.lwb-coverage-h2 {
  font-size: clamp(1.55rem, 2.8vw, 2.2rem);
  font-weight: 900;
  color: var(--color-white);
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.02em;
  margin-bottom: var(--space-3);
}

.lwb-coverage-h2 em { color: var(--color-secondary); font-style: normal; }

.lwb-coverage-grid {
  display: grid;
  grid-template-columns: 1fr 360px;
  gap: var(--space-14);
  align-items: start;
  margin-top: var(--space-8);
}

/* Answer block dark variant */
.lwb-answer-block-dark {
  background: rgba(255,255,255,0.04);
  border-left: 3px solid var(--color-accent);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  padding: var(--space-4) var(--space-5);
  margin-bottom: var(--space-7);
}

.lwb-answer-block-dark p {
  font-size: 0.88rem;
  color: rgba(255,255,255,0.74);
  line-height: 1.82;
  margin: 0;
  font-style: italic;
}

/* Process steps */
.lwb-steps {
  display: flex;
  flex-direction: column;
  gap: var(--space-5);
}

.lwb-step {
  display: flex;
  gap: var(--space-5);
  align-items: flex-start;
}

.lwb-step-num {
  flex-shrink: 0;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background: linear-gradient(135deg, var(--color-secondary) 0%, #900a92 100%);
  display: flex;
  align-items: center;
  justify-content: center;
  font-family: var(--font-heading);
  font-size: 0.85rem;
  font-weight: 900;
  color: var(--color-white);
  box-shadow: 0 0 18px rgba(229,53,231,0.34);
}

.lwb-step-content h4 {
  font-size: 0.92rem;
  font-weight: 800;
  color: var(--color-white);
  margin-bottom: var(--space-1);
}

.lwb-step-content p {
  font-size: 0.83rem;
  color: rgba(255,255,255,0.56);
  line-height: 1.72;
  margin: 0;
}

/* Coverage sidebar card */
.lwb-coverage-card {
  background: rgba(255,255,255,0.04);
  border: 1px solid rgba(255,255,255,0.1);
  border-radius: 18px;
  padding: var(--space-7) var(--space-6);
  backdrop-filter: blur(12px);
  -webkit-backdrop-filter: blur(12px);
  position: relative;
  overflow: hidden;
}

.lwb-coverage-card::before {
  content: '';
  position: absolute;
  top: -50px;
  right: -50px;
  width: 200px;
  height: 200px;
  border-radius: 50%;
  background: radial-gradient(circle, rgba(249,183,62,0.13) 0%, transparent 70%);
  pointer-events: none;
}

.lwb-cc-title {
  font-family: var(--font-heading);
  font-size: 0.95rem;
  font-weight: 800;
  color: var(--color-white);
  margin-bottom: var(--space-5);
  position: relative;
  z-index: 1;
}

/* Coverage stat blocks — 3 stat blocks */
.lwb-cc-stats {
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
  margin-bottom: var(--space-6);
  position: relative;
  z-index: 1;
}

.lwb-cc-stat {
  display: flex;
  align-items: center;
  gap: var(--space-3);
  padding: var(--space-4);
  background: rgba(255,255,255,0.04);
  border: 1px solid rgba(255,255,255,0.07);
  border-radius: var(--radius-md);
}

.lwb-cc-stat-num {
  font-family: var(--font-heading);
  font-size: 1.5rem;
  font-weight: 900;
  line-height: 1;
  background: linear-gradient(135deg, var(--color-secondary), var(--color-accent));
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  flex-shrink: 0;
  min-width: 60px;
  text-align: center;
}

.lwb-cc-stat-info strong {
  display: block;
  font-size: 0.8rem;
  font-weight: 700;
  color: var(--color-white);
  margin-bottom: 2px;
}

.lwb-cc-stat-info span {
  font-size: 0.74rem;
  color: rgba(255,255,255,0.45);
  line-height: 1.45;
}

.lwb-cc-cta {
  display: block;
  width: 100%;
  padding: 13px;
  background: linear-gradient(135deg, var(--color-secondary) 0%, #b215b4 100%);
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
  position: relative;
  z-index: 1;
}

.lwb-cc-cta:hover {
  box-shadow: 0 8px 34px rgba(229,53,231,0.64);
  transform: translateY(-1px);
  color: var(--color-white);
}

/* ── 5. SERVICES GRID ── */
.lwb-services {
  padding: var(--space-16) 0;
  background: var(--color-white);
}

.lwb-services-header {
  text-align: center;
  margin-bottom: var(--space-12);
}

.lwb-services-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  font-family: var(--font-heading);
  font-size: 0.67rem;
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

.lwb-services-h2 {
  font-size: clamp(1.65rem, 2.8vw, 2.3rem);
  font-weight: 900;
  color: var(--color-dark);
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.02em;
  margin-bottom: var(--space-3);
}

.lwb-services-h2 em { color: var(--color-secondary); font-style: normal; }

.lwb-services-lead {
  font-size: 0.95rem;
  color: var(--color-gray);
  max-width: 500px;
  margin: 0 auto;
  line-height: 1.75;
}

/* Technique 7: Service cards with neon glow box-shadow on hover */
.lwb-svc-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
}

.lwb-svc-card {
  border-radius: var(--radius-lg);
  overflow: hidden;
  border: 1px solid rgba(229,53,231,0.09);
  background: var(--color-white);
  transition: transform var(--transition-base), box-shadow var(--transition-base), border-color var(--transition-base);
  display: flex;
  flex-direction: column;
}

/* Neon glow box-shadow on hover — distinct from DUI/Boynton sweep technique */
.lwb-svc-card:hover {
  transform: translateY(-4px);
  box-shadow: 0 0 0 2px rgba(229,53,231,0.28), 0 12px 38px rgba(229,53,231,0.18), 0 4px 12px rgba(0,0,0,0.07);
  border-color: rgba(229,53,231,0.32);
}

.lwb-svc-banner {
  height: 82px;
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
  overflow: hidden;
}

.lwb-svc-card:nth-child(3n+1) .lwb-svc-banner { background: linear-gradient(145deg, #09090f, #1e0a2e); }
.lwb-svc-card:nth-child(3n+2) .lwb-svc-banner { background: linear-gradient(145deg, #0d1520, #1a2b3c); }
.lwb-svc-card:nth-child(3n)   .lwb-svc-banner { background: linear-gradient(145deg, #130610, #2d0a2d); }

.lwb-svc-icon-ring {
  width: 48px;
  height: 48px;
  border-radius: 50%;
  border: 1px solid rgba(255,255,255,0.16);
  background: rgba(255,255,255,0.07);
  display: flex;
  align-items: center;
  justify-content: center;
  transition: box-shadow var(--transition-base);
}

.lwb-svc-card:hover .lwb-svc-icon-ring {
  box-shadow: 0 0 18px rgba(229,53,231,0.4);
}

.lwb-svc-icon-ring svg { width: 22px; height: 22px; color: var(--color-accent); }

.lwb-svc-body {
  padding: var(--space-5);
  flex: 1;
  display: flex;
  flex-direction: column;
}

.lwb-svc-body h3 {
  font-size: 0.9rem;
  font-weight: 800;
  color: var(--color-dark);
  margin-bottom: var(--space-2);
}

.lwb-svc-body p {
  font-size: 0.8rem;
  color: var(--color-gray);
  line-height: 1.65;
  flex: 1;
  margin-bottom: var(--space-4);
}

.lwb-svc-link {
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

.lwb-svc-link:hover { gap: 8px; color: var(--color-secondary); }
.lwb-svc-link svg { width: 14px; height: 14px; }

/* ── 6. FAQ SECTION ── */
.lwb-faq {
  padding: var(--space-16) 0;
  background: #f4f6f9;
}

.lwb-faq-inner {
  max-width: 820px;
  margin: 0 auto;
}

.lwb-faq-h2 {
  font-size: clamp(1.55rem, 2.6vw, 2.15rem);
  font-weight: 900;
  color: var(--color-dark);
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.02em;
  margin-bottom: var(--space-3);
}

.lwb-faq-h2 em { color: var(--color-secondary); font-style: normal; }

.lwb-faq-sub {
  font-size: 0.92rem;
  color: var(--color-gray);
  margin-bottom: var(--space-10);
  line-height: 1.75;
}

.lwb-faq-list {
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
}

/* Technique 6: FAQ accordion — neon left-border on .open state */
.faq-item-sp {
  background: var(--color-white);
  border: 1px solid rgba(229,53,231,0.1);
  border-radius: var(--radius-lg);
  overflow: hidden;
  transition: border-color var(--transition-base), box-shadow var(--transition-base), border-left var(--transition-base);
  border-left: 3px solid transparent;
}

.faq-item-sp.open {
  border-color: rgba(229,53,231,0.28);
  border-left: 3px solid var(--color-secondary);
  box-shadow: 0 4px 18px rgba(229,53,231,0.09);
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
  line-height: 1.82;
  border-top: 1px solid rgba(229,53,231,0.07);
  padding-top: var(--space-4);
}

.faq-item-sp.open .faq-a-sp { display: block; }

/* ── 7. RELATED AREAS — horizontal cards ── */
.lwb-related-areas {
  padding: var(--space-14) 0;
  background: var(--color-white);
}

.lwb-related-h2 {
  font-size: clamp(1.5rem, 2.4vw, 2rem);
  font-weight: 900;
  color: var(--color-dark);
  text-align: center;
  margin-bottom: var(--space-2);
  text-wrap: balance;
}

.lwb-related-sub {
  text-align: center;
  font-size: 0.9rem;
  color: var(--color-gray);
  margin-bottom: var(--space-10);
}

/* Technique 9: Horizontal card design — flex-row with icon left, text right */
.lwb-area-cards {
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
  max-width: 680px;
  margin: 0 auto;
}

.lwb-area-card {
  display: flex;
  align-items: center;
  gap: var(--space-5);
  padding: var(--space-5) var(--space-6);
  border: 1px solid rgba(229,53,231,0.1);
  border-radius: var(--radius-lg);
  background: var(--color-white);
  text-decoration: none;
  transition: transform var(--transition-base), box-shadow var(--transition-base), border-color var(--transition-base);
}

.lwb-area-card:hover {
  transform: translateX(4px);
  box-shadow: 0 4px 22px rgba(229,53,231,0.12);
  border-color: rgba(229,53,231,0.26);
}

.lwb-area-icon {
  flex-shrink: 0;
  width: 52px;
  height: 52px;
  border-radius: 50%;
  background: linear-gradient(135deg, rgba(229,53,231,0.1), rgba(249,183,62,0.07));
  border: 1px solid rgba(229,53,231,0.18);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-secondary);
}

.lwb-area-icon svg { width: 22px; height: 22px; }

.lwb-area-text {
  flex: 1;
}

.lwb-area-text strong {
  display: block;
  font-size: 0.95rem;
  font-weight: 800;
  color: var(--color-dark);
  margin-bottom: 2px;
}

.lwb-area-text span {
  font-size: 0.78rem;
  color: var(--color-gray);
}

.lwb-area-arrow {
  flex-shrink: 0;
  display: inline-flex;
  align-items: center;
  gap: 4px;
  font-size: 0.78rem;
  font-weight: 800;
  color: var(--color-secondary);
  transition: gap var(--transition-fast);
}

.lwb-area-card:hover .lwb-area-arrow { gap: 8px; }
.lwb-area-arrow svg { width: 16px; height: 16px; }

/* ── 8. EMERGENCY CTA ── */
.lwb-cta {
  padding: var(--space-14) 0;
  background: linear-gradient(135deg, #09090f 0%, #1c082c 55%, #0b1528 100%);
  position: relative;
  overflow: hidden;
  text-align: center;
}

.lwb-cta::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 50% 80% at 15% 50%, rgba(229,53,231,0.14) 0%, transparent 60%),
    radial-gradient(ellipse 45% 70% at 85% 50%, rgba(249,183,62,0.09) 0%, transparent 60%);
  pointer-events: none;
}

.lwb-cta-inner {
  position: relative;
  z-index: 1;
  max-width: 580px;
  margin: 0 auto;
}

.lwb-cta h2 {
  font-size: clamp(1.45rem, 2.6vw, 2.1rem);
  font-weight: 900;
  color: var(--color-white);
  text-wrap: balance;
  margin-bottom: var(--space-3);
  line-height: 1.2;
}

.lwb-cta h2 em { color: var(--color-accent); font-style: normal; }

.lwb-cta-desc {
  font-size: 0.95rem;
  color: rgba(255,255,255,0.58);
  max-width: 460px;
  margin: 0 auto var(--space-7);
  line-height: 1.78;
}

.lwb-cta-btns {
  display: flex;
  gap: var(--space-3);
  justify-content: center;
  flex-wrap: wrap;
}

/* ── RESPONSIVE ── */
@media (max-width: 1024px) {
  .lwb-coverage-grid { grid-template-columns: 1fr; gap: var(--space-10); }
  .lwb-coverage-card { max-width: 480px; }
  .lwb-svc-grid { grid-template-columns: repeat(2, 1fr); }
  .lwb-stat-bar { grid-template-columns: repeat(2, 1fr); }
}

@media (max-width: 768px) {
  .lwb-hero-inner { padding: var(--space-10) 0 var(--space-8); }
  .lwb-svc-grid { grid-template-columns: 1fr; }
  .lwb-area-cards { max-width: 100%; }
}

@media (max-width: 480px) {
  .lwb-stat-bar { grid-template-columns: repeat(2, 1fr); }
  .lwb-stat-num { font-size: 1.2rem; }
  .lwb-coverage-orb { width: 340px; height: 340px; left: -120px; }
  .lwb-orb-1 { width: 340px; height: 340px; }
}
</style>

<main id="main-content">

<!-- ═══ HERO ═══ -->
<section class="lwb-hero" aria-label="Bail bonds in Lake Worth Beach, FL">
  <div class="lwb-orb-1" aria-hidden="true"></div>
  <div class="lwb-orb-2" aria-hidden="true"></div>

  <div class="container">
    <div class="lwb-hero-inner">
      <span class="lwb-eyebrow">
        <span class="lwb-pulse" aria-hidden="true"></span>
        Serving Lake Worth Beach, FL — 24/7
      </span>

      <h1>
        Bail Bonds Near Me in <span class="lwb-hl-gold">Lake Worth Beach, FL</span> —
        <span class="lwb-hl-mag">Fast, Discreet, 24/7</span>
      </h1>

      <p class="lwb-hero-answer">
        When someone in your family is arrested in Lake Worth Beach, you need a licensed Florida bail bondsman who can move immediately. Mad Extra Bail Bonds posts bail at Palm Beach County Jail 24 hours a day — all charges, all bond amounts, discreet service for Lake Worth Beach families including bilingual Spanish and Haitian Creole support.
      </p>

      <!-- Technique 4: Stat bar with gradient-text numbers -->
      <div class="lwb-stat-bar" aria-label="Key service facts">
        <div class="lwb-stat-item">
          <span class="lwb-stat-num">~15 mi</span>
          <span class="lwb-stat-label">to PBCJ</span>
        </div>
        <div class="lwb-stat-item">
          <span class="lwb-stat-num">24/7</span>
          <span class="lwb-stat-label">Available</span>
        </div>
        <div class="lwb-stat-item">
          <span class="lwb-stat-num">All</span>
          <span class="lwb-stat-label">Charge Types</span>
        </div>
        <div class="lwb-stat-item">
          <span class="lwb-stat-num">11+</span>
          <span class="lwb-stat-label">Years Serving FL</span>
        </div>
      </div>

      <div class="lwb-hero-btns">
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>" class="lwb-btn-primary">
          <?php echo lucide_icon('phone'); ?> Call Now — 24/7
        </a>
        <?php else: ?>
        <a href="/contact/" class="lwb-btn-primary">
          <?php echo lucide_icon('zap'); ?> Get Help Now
        </a>
        <?php endif; ?>
        <a href="/contact/" class="lwb-btn-secondary"><?php echo lucide_icon('message-circle'); ?> Get Help Now</a>
      </div>

      <div class="lwb-trust-row">
        <span class="lwb-badge"><?php echo lucide_icon('shield-check'); ?> Licensed FL Bondsman</span>
        <span class="lwb-badge"><?php echo lucide_icon('clock'); ?> 24/7</span>
        <span class="lwb-badge"><?php echo lucide_icon('lock'); ?> Discreet</span>
        <span class="lwb-badge"><?php echo lucide_icon('landmark'); ?> Palm Beach County</span>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SVG DIVIDER 1: diagonal/angled cut — dark to light ═══ -->
<div class="lwb-divider-1" aria-hidden="true">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <polygon points="0,60 1440,0 1440,60" fill="#f4f6f9"/>
  </svg>
</div>

<!-- ═══ INTRO / ANSWER SECTION ═══ -->
<section class="lwb-intro" aria-label="How bail bonds work in Lake Worth Beach">
  <div class="container">
    <div class="lwb-intro-inner">
      <span class="lwb-section-eyebrow">Lake Worth Beach, FL</span>
      <h2 class="lwb-intro-h2">How does bail bonds work after a <em>Lake Worth Beach</em> arrest?</h2>

      <div class="lwb-answer-block">
        <p>
          After an arrest in Lake Worth Beach, the Lake Worth Beach Police Department books the defendant locally at 1 N Federal Hwy before transport to Palm Beach County Jail in West Palm Beach — typically within 4 to 6 hours. Once the defendant is processed at PBCJ and bond is set, Mad Extra Bail Bonds posts the 10% Florida premium and secures release. Call us the moment you learn of the arrest so paperwork is ready the instant bond is available.
        </p>
      </div>

      <p>
        Mad Extra Bail Bonds is a licensed Florida bail bondsman based in Delray Beach, serving Lake Worth Beach and all of Palm Beach County. We have posted bond for Lake Worth Beach families for over 11 years — residents from College Park, The Lucerne neighborhood, Lake Worth Shores, and South Palm Park all know where to call when someone ends up at PBCJ.
      </p>

      <p>
        Lake Worth Beach is one of Palm Beach County's most culturally rich cities — a place where the arts district on Lake Avenue, the Compass Community Center, and the Cultural Council of Palm Beach County reflect a genuinely diverse community. The city's Hispanic and Haitian communities make up a significant part of the population, and we provide bilingual service in Spanish and Haitian Creole so language is never a barrier when your family needs help at 2 a.m.
      </p>

      <p>
        Arrest activity in Lake Worth Beach spans the city's neighborhoods. The Lake Avenue entertainment district near downtown Lake Worth Beach generates DUI and disorderly conduct arrests, especially on weekend nights. The Bryant Park waterfront and the beach itself see public disturbance and alcohol-related arrests in summer. Warrant pick-ups happen throughout residential areas from Lake Worth Shores to South Palm Park. The Gulfstream Hotel district and areas near Lake Worth High School see their share of arrests that result in calls to bondsmen like us. Whatever the charge, whatever the neighborhood, we respond immediately — 24 hours a day.
      </p>
    </div>
  </div>
</section>

<!-- ═══ SVG DIVIDER 2: multi-wave — light to dark ═══ -->
<div class="lwb-divider-2" aria-hidden="true">
  <svg viewBox="0 0 1440 65" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,0 Q200,45 400,20 Q600,-5 800,35 Q1000,65 1200,30 Q1350,10 1440,40 L1440,65 L0,65 Z" fill="#09090f"/>
  </svg>
</div>

<!-- ═══ LOCAL COVERAGE SECTION (dark) ═══ -->
<section class="lwb-coverage" aria-label="Lake Worth Beach jail and bond process">
  <div class="lwb-coverage-orb" aria-hidden="true"></div>
  <div class="container">
    <div class="lwb-coverage-inner">
      <span class="lwb-coverage-eyebrow"><?php echo lucide_icon('map-pin'); ?> Jail &amp; Release</span>
      <h2 class="lwb-coverage-h2">Which jail holds <em>Lake Worth Beach</em> arrestees and how fast can you secure release?</h2>

      <div class="lwb-coverage-grid">
        <!-- Left: content + process steps -->
        <div>
          <div class="lwb-answer-block-dark">
            <p>
              Lake Worth Beach arrestees are transported to Palm Beach County Jail at 3228 Gun Club Road, West Palm Beach — approximately 15 miles north of downtown Lake Worth Beach. LWBPD handles local booking at 1 N Federal Hwy first, then transport occurs within 4 to 6 hours. Call us the moment you hear about the arrest. We begin paperwork immediately so we are ready to post the moment PBCJ intake is complete.
            </p>
          </div>

          <div class="lwb-steps">
            <div class="lwb-step">
              <div class="lwb-step-num">1</div>
              <div class="lwb-step-content">
                <h4>LWBPD Arrest &amp; Local Booking</h4>
                <p>The Lake Worth Beach Police Department books the defendant at their station at 1 N Federal Hwy. This is where initial charges are logged and the booking process begins. Call us immediately — the sooner you call, the sooner we can prepare to act.</p>
              </div>
            </div>

            <div class="lwb-step">
              <div class="lwb-step-num">2</div>
              <div class="lwb-step-content">
                <h4>Transport to Palm Beach County Jail</h4>
                <p>Within 4 to 6 hours, the defendant is transported ~15 miles north to PBCJ at 3228 Gun Club Road, West Palm Beach. We track the transport so we know the moment they arrive and bond is available. Most Lake Worth Beach families never need to go to PBCJ themselves — we handle everything at the jail.</p>
              </div>
            </div>

            <div class="lwb-step">
              <div class="lwb-step-num">3</div>
              <div class="lwb-step-content">
                <h4>Bond Set — We Post Immediately</h4>
                <p>Once bond is set by the judge or on the scheduled bond sheet, we post the 10% Florida premium and execute the bond documents. Paperwork can be signed at our Delray Beach office, electronically, or we come to you. We move without delay.</p>
              </div>
            </div>

            <div class="lwb-step">
              <div class="lwb-step-num">4</div>
              <div class="lwb-step-content">
                <h4>Release &amp; Court Appearance Reminders</h4>
                <p>After bond posts, PBCJ processes the release — typically within 2 to 4 hours. We follow up with the defendant and co-signer about all scheduled court dates. Missing a court date triggers a bond forfeiture and new warrant — something we make sure Lake Worth Beach defendants avoid.</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Right: sidebar card with 3 stats -->
        <div>
          <div class="lwb-coverage-card">
            <p class="lwb-cc-title">Lake Worth Beach Bond Facts</p>
            <div class="lwb-cc-stats">
              <div class="lwb-cc-stat">
                <span class="lwb-cc-stat-num">~15 mi</span>
                <div class="lwb-cc-stat-info">
                  <strong>PBCJ Distance</strong>
                  <span>3228 Gun Club Rd, West Palm Beach</span>
                </div>
              </div>
              <div class="lwb-cc-stat">
                <span class="lwb-cc-stat-num">4–6 hrs</span>
                <div class="lwb-cc-stat-info">
                  <strong>Local Processing Time</strong>
                  <span>LWBPD booking to PBCJ intake</span>
                </div>
              </div>
              <div class="lwb-cc-stat">
                <span class="lwb-cc-stat-num">24/7</span>
                <div class="lwb-cc-stat-info">
                  <strong>Bondsman Response</strong>
                  <span>Every hour, every day of the year</span>
                </div>
              </div>
            </div>
            <?php if (!empty($phone)): ?>
            <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>" class="lwb-cc-cta">
              <?php echo lucide_icon('phone'); ?> Call Now — Free Consultation
            </a>
            <?php else: ?>
            <a href="/contact/" class="lwb-cc-cta"><?php echo lucide_icon('zap'); ?> Get Emergency Help Now</a>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SVG DIVIDER 3: curved smooth — dark to white ═══ -->
<div class="lwb-divider-3" aria-hidden="true">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,0 C480,60 960,60 1440,0 L1440,60 L0,60 Z" fill="#ffffff"/>
  </svg>
</div>

<!-- ═══ SERVICES GRID ═══ -->
<section class="lwb-services" aria-label="Bail bond services in Lake Worth Beach">
  <div class="container">
    <div class="lwb-services-header">
      <span class="lwb-services-eyebrow">What We Do</span>
      <h2 class="lwb-services-h2">What bail bond services does <em>Mad Extra</em> provide in Lake Worth Beach?</h2>
      <p class="lwb-services-lead">From DUI arrests downtown to felony warrants — we handle every charge type for Lake Worth Beach residents, 24 hours a day.</p>
    </div>

    <div class="lwb-svc-grid">
      <?php foreach ($services as $svc): ?>
      <article class="lwb-svc-card">
        <div class="lwb-svc-banner">
          <div class="lwb-svc-icon-ring">
            <?php echo lucide_icon($svc['icon']); ?>
          </div>
        </div>
        <div class="lwb-svc-body">
          <h3><?php echo htmlspecialchars($svc['name']); ?></h3>
          <p><?php echo htmlspecialchars($svc['description']); ?></p>
          <a href="/services/<?php echo htmlspecialchars($svc['slug']); ?>/" class="lwb-svc-link">
            Learn more <?php echo lucide_icon('arrow-right'); ?>
          </a>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══ SVG DIVIDER 4: white to light ═══ -->
<div class="lwb-divider-4" aria-hidden="true">
  <svg viewBox="0 0 1440 40" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,20 Q360,40 720,10 Q1080,-10 1440,20 L1440,40 L0,40 Z" fill="#f4f6f9"/>
  </svg>
</div>

<!-- ═══ FAQ SECTION ═══ -->
<section class="lwb-faq" aria-label="Frequently asked questions about bail bonds in Lake Worth Beach">
  <div class="container">
    <div class="lwb-faq-inner">
      <span class="lwb-section-eyebrow">Common Questions</span>
      <h2 class="lwb-faq-h2">Frequently asked questions about <em>bail bonds in Lake Worth Beach, FL</em></h2>
      <p class="lwb-faq-sub">Direct answers to what Lake Worth Beach families ask most when a loved one is arrested.</p>

      <div class="lwb-faq-list" role="list">
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

<!-- ═══ RELATED AREAS — horizontal cards ═══ -->
<section class="lwb-related-areas" aria-label="Other Palm Beach County cities we serve">
  <div class="container">
    <h2 class="lwb-related-h2">Also Serving These Palm Beach County Cities</h2>
    <p class="lwb-related-sub">Mad Extra Bail Bonds covers all of Palm Beach County — 24 hours a day.</p>

    <div class="lwb-area-cards">
      <a href="/areas/boynton-beach/" class="lwb-area-card" aria-label="Bail bonds in Boynton Beach">
        <div class="lwb-area-icon">
          <?php echo lucide_icon('map-pin'); ?>
        </div>
        <div class="lwb-area-text">
          <strong>Boynton Beach</strong>
          <span>Palm Beach County — 24/7 Bail Bond Service</span>
        </div>
        <span class="lwb-area-arrow">
          View <?php echo lucide_icon('arrow-right'); ?>
        </span>
      </a>

      <a href="/areas/west-palm-beach/" class="lwb-area-card" aria-label="Bail bonds in West Palm Beach">
        <div class="lwb-area-icon">
          <?php echo lucide_icon('map-pin'); ?>
        </div>
        <div class="lwb-area-text">
          <strong>West Palm Beach</strong>
          <span>Palm Beach County — 24/7 Bail Bond Service</span>
        </div>
        <span class="lwb-area-arrow">
          View <?php echo lucide_icon('arrow-right'); ?>
        </span>
      </a>

      <a href="/areas/boca-raton/" class="lwb-area-card" aria-label="Bail bonds in Boca Raton">
        <div class="lwb-area-icon">
          <?php echo lucide_icon('map-pin'); ?>
        </div>
        <div class="lwb-area-text">
          <strong>Boca Raton</strong>
          <span>Palm Beach County — 24/7 Bail Bond Service</span>
        </div>
        <span class="lwb-area-arrow">
          View <?php echo lucide_icon('arrow-right'); ?>
        </span>
      </a>
    </div>
  </div>
</section>

<!-- ═══ EMERGENCY CTA ═══ -->
<section class="lwb-cta" aria-label="Emergency bail bond contact for Lake Worth Beach">
  <div class="lwb-cta-inner">
    <h2>Arrested in <em>Lake Worth Beach?</em> Call a bondsman right now.</h2>
    <p class="lwb-cta-desc">Discreet, bilingual service for Lake Worth Beach families — Spanish and Haitian Creole spoken. Available every hour of every day. We move the moment you call.</p>
    <div class="lwb-cta-btns">
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>" class="lwb-btn-primary">
        <?php echo lucide_icon('phone'); ?> Call Now — 24/7
      </a>
      <?php endif; ?>
      <a href="/contact/" class="lwb-btn-secondary"><?php echo lucide_icon('message-circle'); ?> Send a Message</a>
    </div>
  </div>
</section>

</main>

<script>
function toggleFaq(btn) {
  const item = btn.closest('.faq-item-sp');
  const isOpen = item.classList.contains('open');
  document.querySelectorAll('.faq-item-sp.open').forEach(function(el) {
    el.classList.remove('open');
  });
  document.querySelectorAll('.faq-q-sp').forEach(function(el) {
    el.setAttribute('aria-expanded', 'false');
  });
  if (!isOpen) {
    item.classList.add('open');
    btn.setAttribute('aria-expanded', 'true');
  }
}
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
