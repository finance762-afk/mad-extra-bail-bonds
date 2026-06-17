<?php
/**
 * areas/miami-gardens/index.php — Miami Gardens Service Area Page
 * Mad Extra Bail Bonds | Page One Insights v6.1
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Bail Bonds Near Me in Miami Gardens FL | Mad Extra Bail Bonds | 24/7';
$pageDescription = 'Need bail bonds in Miami Gardens, FL? Mad Extra Bail Bonds serves Miami Gardens with bilingual 24/7 bail bond service. Licensed FL bondsman — fast release from Miami-Dade Jail.';
$canonicalUrl    = $siteUrl . '/areas/miami-gardens/';
$currentPage     = 'areas';

$_breadcrumb = generateBreadcrumbSchema([
    ['name' => 'Home',           'url' => $siteUrl . '/'],
    ['name' => 'Service Areas',  'url' => $siteUrl . '/areas/'],
    ['name' => 'Miami Gardens',  'url' => $siteUrl . '/areas/miami-gardens/'],
]);

$_serviceSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'Service',
    '@id'         => $siteUrl . '/areas/miami-gardens/#service-miami-gardens',
    'name'        => 'Bail Bonds in Miami Gardens, FL',
    'description' => 'Licensed Florida bail bondsman serving Miami Gardens and all of Miami-Dade County. Fast release from Turner Guilford Knight (TGK) and Miami-Dade Main Jail, 24/7. Hard Rock Stadium event arrest experience.',
    'url'         => $siteUrl . '/areas/miami-gardens/',
    'provider'    => ['@id' => $siteUrl . '/#organization'],
    'areaServed'  => [
        ['@type' => 'City',   'name' => 'Miami Gardens, FL'],
        ['@type' => 'County', 'name' => 'Miami-Dade County, FL'],
    ],
    'serviceType' => 'Bail Bond Services',
];

$_faqs = [
    [
        'q' => 'Where do people arrested in Miami Gardens get taken to jail?',
        'a' => 'The Miami Gardens Police Department (MGPD), established in 2006 when Miami Gardens incorporated, processes initial arrests in the city. After MGPD processing, defendants are transported to Turner Guilford Knight Correctional Center (TGK) at 7000 NW 41st St in Miami for most charge types. For certain felony classifications, the Miami-Dade Main Jail at 1351 NW 12th St may also receive defendants. When you call us after a Miami Gardens arrest, we check both facilities immediately so you know exactly where your family member is being held.',
    ],
    [
        'q' => 'Can Mad Extra help with an arrest that happened at Hard Rock Stadium during an event in Miami Gardens?',
        'a' => 'Yes. Hard Rock Stadium at 347 Don Shula Drive hosts Miami Dolphins games, college football, concerts, and major events that draw tens of thousands of people — and event environments generate arrest situations. Public intoxication, disorderly conduct, drug possession, and battery charges from stadium events are situations we have handled. Stadium arrests at Hard Rock typically involve MGPD or Miami-Dade PD and route to TGK. We know the process and can post bond at TGK quickly once booking is complete — event arrests often resolve faster than weeknight arrests because of booking prioritization patterns we have observed.',
    ],
    [
        'q' => 'Does Mad Extra Bail Bonds serve Miami Gardens\' African-American and Caribbean-American communities?',
        'a' => 'Yes — completely. Miami Gardens is Florida\'s largest majority-Black municipality, and its Caribbean-American communities (with Jamaican, Haitian, and Bahamian heritage prominently represented) are an important part of its civic identity. We serve all of Miami Gardens\' communities with full respect for the specific concerns families in this city face. We understand that bail bond situations are among the most stressful experiences a family can encounter, and we communicate clearly and professionally with every family we serve — in whatever language or communication style makes this process easier.',
    ],
    [
        'q' => 'What is the typical bail amount for a domestic battery arrest in Miami Gardens, FL?',
        'a' => 'Florida law sets domestic battery bail based on prior criminal history, the specific charge (misdemeanor vs. felony), and the circumstances. A first-offense misdemeanor domestic battery in Miami Gardens typically carries a bond between $1,000 and $2,500 — however, Florida also requires a mandatory hold period of at least 24 hours before someone arrested for domestic battery can be released, regardless of when bond is posted. We advise families on this timeline immediately so there are no surprises. We have the bond ready to post at TGK at the first legally permitted moment.',
    ],
    [
        'q' => 'How long has Mad Extra Bail Bonds been serving Miami Gardens, FL?',
        'a' => 'Mad Extra Bail Bonds has served all of Miami-Dade County, including Miami Gardens, for over 11 years. Miami Gardens was incorporated in 2003 as Florida\'s newest major city, and we began serving the Miami Gardens community in the city\'s early years as an independent municipality. The city covers communities that were historically known as Carol City, Andover, Norland, Scott Lake, and Lake Lucerne — neighborhoods we have been navigating for bail bond purposes throughout their history under both the old unincorporated Miami-Dade designation and the current Miami Gardens city structure.',
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
   MIAMI GARDENS AREA PAGE — Mad Extra Bail Bonds
   Premium Tier | Dark/Neon Design System
   Techniques:
   (1) Layered ::before radial-gradient blobs on hero — 4-layer
   (2) Noise texture ::after on hero
   (3) Floating neon orbs — 3 instances with asymmetric timing
   (4) Glassmorphism hero sidebar card (backdrop-filter blur)
   (5) 3+ unique SVG dividers — staggered-wave, chevron, flowing-arc
   (6) FAQ accordion with neon left-border + icon 45deg rotation
   (7) Service cards with neon bottom-border scaleX animation
   (8) Gradient text on stat numbers (background-clip technique)
   (9) Decorative neon blob trio in dark coverage section
   (10) Signature stadium-event callout block (unique to this page)
   ============================================================ */

/* ── 1. HERO ── */
.mg-hero {
  position: relative;
  min-height: 60vh;
  display: flex;
  align-items: center;
  background: #09090f;
  overflow: hidden;
  padding-top: var(--nav-height, 72px);
  padding-bottom: var(--space-12);
}

/* Technique 1: 4-layer radial-gradient blobs */
.mg-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 55% 72% at 1% 62%, rgba(249,183,62,0.15) 0%, transparent 54%),
    radial-gradient(ellipse 48% 62% at 95% 8%, rgba(229,53,231,0.20) 0%, transparent 52%),
    radial-gradient(ellipse 35% 50% at 30% 95%, rgba(249,183,62,0.08) 0%, transparent 58%),
    radial-gradient(ellipse 68% 38% at 50% 112%, rgba(9,9,15,0.98) 0%, transparent 78%);
  pointer-events: none;
  z-index: 0;
}

/* Technique 2: noise texture overlay */
.mg-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.92' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.036'/%3E%3C/svg%3E");
  opacity: 0.50;
  pointer-events: none;
  z-index: 0;
}

/* Technique 3: floating neon orbs */
.mg-orb {
  position: absolute;
  border-radius: 50%;
  pointer-events: none;
  will-change: transform;
  z-index: 1;
}
.mg-orb-1 {
  width: 560px; height: 560px;
  top: -190px; right: -65px;
  background: radial-gradient(circle, rgba(229,53,231,0.14) 0%, transparent 64%);
  animation: mg-drift 17s ease-in-out infinite;
}
.mg-orb-2 {
  width: 300px; height: 300px;
  bottom: -85px; left: 7%;
  background: radial-gradient(circle, rgba(249,183,62,0.12) 0%, transparent 65%);
  animation: mg-drift 21s ease-in-out infinite reverse;
  animation-delay: -8s;
}
.mg-orb-3 {
  width: 180px; height: 180px;
  top: 32%; left: 42%;
  background: radial-gradient(circle, rgba(229,53,231,0.07) 0%, transparent 70%);
  animation: mg-drift 25s ease-in-out infinite;
  animation-delay: -13s;
}
@keyframes mg-drift {
  0%,100% { transform: translate(0,0) scale(1); }
  36%     { transform: translate(-14px, 20px) scale(1.05); }
  70%     { transform: translate(12px, -14px) scale(0.95); }
}

.mg-hero-inner {
  position: relative;
  z-index: 2;
  display: grid;
  grid-template-columns: 1fr 405px;
  gap: var(--space-12);
  align-items: center;
  padding: var(--space-14) 0;
  width: 100%;
}
.mg-hero-left { max-width: 660px; }

.mg-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  font-family: var(--font-heading);
  font-size: 0.68rem;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 2.5px;
  color: var(--color-accent);
  padding: 6px 16px;
  border: 1px solid rgba(249,183,62,0.38);
  border-radius: var(--radius-full);
  background: rgba(249,183,62,0.07);
  margin-bottom: var(--space-5);
}
.mg-pulse {
  width: 7px; height: 7px;
  border-radius: 50%;
  background: var(--color-accent);
  box-shadow: 0 0 8px var(--color-accent);
  animation: mg-pulse 2s ease-in-out infinite;
  flex-shrink: 0;
}
@keyframes mg-pulse {
  0%,100% { opacity:1; transform:scale(1); }
  50%     { opacity:.46; transform:scale(.68); }
}

.mg-hero h1 {
  font-size: clamp(1.75rem, 3.6vw, 3rem);
  font-weight: 900;
  color: var(--color-white);
  line-height: 1.1;
  margin-bottom: var(--space-5);
  letter-spacing: -0.025em;
  text-wrap: balance;
}
.mg-hero h1 .hl-gold { color: var(--color-accent); text-shadow: 0 0 28px rgba(249,183,62,0.52); }
.mg-hero h1 .hl-mag  { color: var(--color-secondary); text-shadow: 0 0 28px rgba(229,53,231,0.52); }

.mg-hero-answer {
  font-size: 1rem;
  color: rgba(255,255,255,0.68);
  line-height: 1.82;
  margin-bottom: var(--space-7);
  max-width: 580px;
}

.mg-hero-btns {
  display: flex;
  gap: var(--space-3);
  flex-wrap: wrap;
  margin-bottom: var(--space-7);
}
.btn-mg-primary {
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
  box-shadow: 0 0 26px rgba(249,183,62,0.45), 0 4px 14px rgba(0,0,0,0.3);
  transition: all var(--transition-base);
}
.btn-mg-primary:hover {
  background: #ffc94f;
  box-shadow: 0 0 48px rgba(249,183,62,0.72), 0 8px 22px rgba(0,0,0,0.36);
  transform: translateY(-2px);
  color: #0a0d1a;
}
.btn-mg-primary svg { width: 15px; height: 15px; }
.btn-mg-secondary {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 12px 24px;
  background: transparent;
  color: var(--color-secondary);
  border: 2px solid rgba(229,53,231,0.52);
  font-family: var(--font-heading);
  font-size: 0.82rem;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  border-radius: var(--radius-md);
  text-decoration: none;
  transition: all var(--transition-base);
}
.btn-mg-secondary:hover {
  background: var(--color-secondary);
  color: var(--color-white);
  border-color: var(--color-secondary);
  box-shadow: 0 0 28px rgba(229,53,231,0.42);
  transform: translateY(-2px);
}
.btn-mg-secondary svg { width: 15px; height: 15px; }

.mg-trust-row {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-2);
}
.mg-trust-badge {
  display: inline-flex;
  align-items: center;
  gap: 5px;
  font-size: 0.67rem;
  font-weight: 700;
  color: rgba(255,255,255,0.72);
  padding: 4px 11px;
  border-radius: var(--radius-full);
  background: rgba(255,255,255,0.055);
  border: 1px solid rgba(255,255,255,0.10);
  text-transform: uppercase;
  letter-spacing: 0.5px;
  white-space: nowrap;
}
.mg-trust-badge svg { width: 11px; height: 11px; color: var(--color-accent); flex-shrink: 0; }

/* Technique 4: glassmorphism hero sidebar card */
.mg-hero-card {
  position: relative;
  background: rgba(255,255,255,0.04);
  border: 1px solid rgba(255,255,255,0.11);
  border-radius: 18px;
  padding: var(--space-7) var(--space-6);
  backdrop-filter: blur(14px);
  -webkit-backdrop-filter: blur(14px);
}
.mg-hero-card::before {
  content: '';
  position: absolute;
  inset: -1px;
  border-radius: 19px;
  background: linear-gradient(135deg, rgba(249,183,62,0.32) 0%, rgba(229,53,231,0.18) 52%, transparent 100%);
  z-index: -1;
  opacity: 0.46;
}
.mg-card-title {
  font-family: var(--font-heading);
  font-size: 1.05rem;
  font-weight: 800;
  color: var(--color-white);
  margin-bottom: var(--space-1);
}
.mg-card-sub {
  font-size: 0.68rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  color: var(--color-accent);
  margin-bottom: var(--space-5);
}
.mg-card-list {
  list-style: none;
  padding: 0;
  margin: 0 0 var(--space-6);
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
}
.mg-card-list li {
  display: flex;
  align-items: flex-start;
  gap: var(--space-2);
  font-size: 0.85rem;
  color: rgba(255,255,255,0.80);
  line-height: 1.5;
}
.mg-check {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  width: 18px; height: 18px;
  border-radius: 50%;
  background: linear-gradient(135deg, var(--color-accent), #e89a25);
  margin-top: 2px;
  font-size: 0.6rem;
  color: #0a0d1a;
  font-weight: 900;
}
.mg-card-cta {
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
.mg-card-cta:hover {
  box-shadow: 0 8px 36px rgba(249,183,62,0.62);
  transform: translateY(-1px);
  color: #0a0d1a;
}
.mg-card-disclaimer {
  text-align: center;
  font-size: 0.6rem;
  color: rgba(255,255,255,0.28);
  margin-top: var(--space-3);
  line-height: 1.5;
}

/* ── DIVIDERS ── */
/* Technique 5: 3+ unique SVG shapes */
.mg-div-dk-lt { line-height: 0; background: #09090f; }
.mg-div-dk-lt svg { display: block; width: 100%; }
.mg-div-lt-dk { line-height: 0; background: #f4f6f9; }
.mg-div-lt-dk svg { display: block; width: 100%; }
.mg-div-dk-wh { line-height: 0; background: #09090f; }
.mg-div-dk-wh svg { display: block; width: 100%; }
.mg-div-wh-lt { line-height: 0; background: #ffffff; }
.mg-div-wh-lt svg { display: block; width: 100%; }

/* ── INTRO / ANSWER (light) ── */
.mg-intro {
  padding: var(--space-16) 0;
  background: #f4f6f9;
}
.mg-intro-inner {
  max-width: 880px;
  margin: 0 auto;
}
.mg-section-eyebrow {
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
.mg-section-eyebrow svg { width: 12px; height: 12px; }
.mg-intro h2 {
  font-size: clamp(1.7rem, 3vw, 2.5rem);
  font-weight: 900;
  color: var(--color-dark);
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.02em;
  margin-bottom: var(--space-4);
}
.mg-intro h2 em { color: var(--color-secondary); font-style: normal; }
.mg-answer-block {
  background: linear-gradient(135deg, rgba(229,53,231,0.07), rgba(249,183,62,0.04));
  border-left: 3px solid var(--color-secondary);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  padding: var(--space-5) var(--space-6);
  margin-bottom: var(--space-6);
}
.mg-answer-block p {
  font-size: 0.95rem;
  color: var(--color-dark);
  line-height: 1.8;
  margin: 0;
  font-style: italic;
}
.mg-intro p {
  font-size: 0.95rem;
  color: var(--color-gray);
  line-height: 1.82;
  margin-bottom: var(--space-4);
}

/* Technique 10: stadium-event callout (signature unique section) */
.mg-stadium-callout {
  background: #09090f;
  border: 1px solid rgba(249,183,62,0.22);
  border-radius: var(--radius-lg);
  padding: var(--space-6) var(--space-7);
  margin-top: var(--space-6);
  position: relative;
  overflow: hidden;
}
.mg-stadium-callout::before {
  content: '';
  position: absolute;
  inset: 0;
  background: radial-gradient(ellipse 60% 80% at 95% 50%, rgba(249,183,62,0.10) 0%, transparent 60%);
  pointer-events: none;
}
.mg-stadium-inner { position: relative; z-index: 1; display: flex; gap: var(--space-5); align-items: flex-start; }
.mg-stadium-icon {
  width: 52px; height: 52px;
  flex-shrink: 0;
  border-radius: var(--radius-md);
  background: rgba(249,183,62,0.12);
  border: 1px solid rgba(249,183,62,0.28);
  display: flex; align-items: center; justify-content: center;
  color: var(--color-accent);
}
.mg-stadium-icon svg { width: 26px; height: 26px; }
.mg-stadium-text h4 {
  font-family: var(--font-heading);
  font-size: 0.92rem;
  font-weight: 800;
  color: var(--color-accent);
  margin-bottom: var(--space-2);
}
.mg-stadium-text p {
  font-size: 0.85rem;
  color: rgba(255,255,255,0.62);
  line-height: 1.72;
  margin: 0;
}

/* ── LOCAL COVERAGE (dark) ── */
.mg-coverage {
  padding: var(--space-16) 0;
  background: linear-gradient(148deg, #09090f 0%, #120730 48%, #0a1527 100%);
  position: relative;
  overflow: hidden;
}
.mg-coverage::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 50% 70% at 4% 54%, rgba(249,183,62,0.10) 0%, transparent 60%),
    radial-gradient(ellipse 44% 66% at 96% 46%, rgba(229,53,231,0.09) 0%, transparent 60%);
  pointer-events: none;
}
/* Technique 9: decorative blob trio */
.mg-blob-a {
  position: absolute;
  width: 420px; height: 420px;
  border-radius: 50%;
  top: -110px; right: 5%;
  background: radial-gradient(circle, rgba(229,53,231,0.08) 0%, transparent 68%);
  pointer-events: none;
  animation: mg-drift 22s ease-in-out infinite;
}
.mg-blob-b {
  position: absolute;
  width: 220px; height: 220px;
  border-radius: 50%;
  bottom: -50px; left: 18%;
  background: radial-gradient(circle, rgba(249,183,62,0.07) 0%, transparent 68%);
  pointer-events: none;
  animation: mg-drift 28s ease-in-out infinite reverse;
  animation-delay: -11s;
}
.mg-blob-c {
  position: absolute;
  width: 150px; height: 150px;
  border-radius: 50%;
  top: 40%; left: 55%;
  background: radial-gradient(circle, rgba(229,53,231,0.06) 0%, transparent 70%);
  pointer-events: none;
  animation: mg-drift 32s ease-in-out infinite;
  animation-delay: -17s;
}
.mg-coverage-inner { position: relative; z-index: 1; }
.mg-coverage-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-16);
  align-items: start;
}
.mg-coverage-eyebrow {
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
.mg-coverage-eyebrow svg { width: 13px; height: 13px; }
.mg-coverage h2 {
  font-size: clamp(1.6rem, 3vw, 2.35rem);
  font-weight: 900;
  color: var(--color-white);
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.02em;
  margin-bottom: var(--space-5);
}
.mg-coverage h2 em { color: var(--color-accent); font-style: normal; }
.mg-coverage-body {
  font-size: 0.92rem;
  color: rgba(255,255,255,0.58);
  line-height: 1.82;
  margin-bottom: var(--space-4);
}

/* Technique 8: gradient text on stat numbers */
.mg-stat-row {
  display: flex;
  gap: var(--space-8);
  margin-top: var(--space-8);
  flex-wrap: wrap;
}
.mg-stat-num {
  font-family: var(--font-heading);
  font-size: 2.1rem;
  font-weight: 900;
  line-height: 1;
  background: linear-gradient(135deg, var(--color-accent) 0%, var(--color-secondary) 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  margin-bottom: var(--space-1);
}
.mg-stat-label {
  font-size: 0.7rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1px;
  color: rgba(255,255,255,0.38);
}

/* Signal cards */
.mg-local-panel {
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
}
.mg-signal-card {
  background: rgba(255,255,255,0.04);
  border: 1px solid rgba(255,255,255,0.07);
  border-radius: 14px;
  padding: var(--space-5) var(--space-6);
  transition: border-color var(--transition-base), background var(--transition-base);
}
.mg-signal-card:hover {
  border-color: rgba(229,53,231,0.28);
  background: rgba(255,255,255,0.065);
}
.mg-signal-card h4 {
  font-family: var(--font-heading);
  font-size: 0.85rem;
  font-weight: 800;
  color: var(--color-accent);
  margin-bottom: var(--space-2);
  display: flex;
  align-items: center;
  gap: var(--space-2);
}
.mg-signal-card h4 svg { width: 15px; height: 15px; flex-shrink: 0; }
.mg-signal-card p {
  font-size: 0.82rem;
  color: rgba(255,255,255,0.54);
  line-height: 1.7;
  margin: 0;
}

/* Community note */
.mg-community-note {
  display: flex;
  align-items: flex-start;
  gap: var(--space-3);
  background: rgba(229,53,231,0.07);
  border: 1px solid rgba(229,53,231,0.20);
  border-radius: var(--radius-md);
  padding: var(--space-5);
  margin-top: var(--space-6);
}
.mg-community-note svg { width: 20px; height: 20px; color: var(--color-secondary); flex-shrink: 0; margin-top: 2px; }
.mg-community-note p {
  font-size: 0.85rem;
  color: rgba(255,255,255,0.72);
  line-height: 1.7;
  margin: 0;
}
.mg-community-note strong { color: var(--color-secondary); }

/* ── SERVICES GRID (white) ── */
.mg-services {
  padding: var(--space-16) 0;
  background: var(--color-white);
}
.mg-services-header {
  text-align: center;
  margin-bottom: var(--space-12);
}
.mg-services h2 {
  font-size: clamp(1.7rem, 3vw, 2.4rem);
  font-weight: 900;
  color: var(--color-dark);
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.02em;
  margin-bottom: var(--space-3);
}
.mg-services h2 em { color: var(--color-secondary); font-style: normal; }
.mg-services-lead {
  font-size: 0.95rem;
  color: var(--color-gray);
  max-width: 520px;
  margin: 0 auto;
  line-height: 1.75;
}

/* Technique 7: neon bottom-border scaleX animation */
.mg-services-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
}
.mg-svc-card {
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
.mg-svc-card::after {
  content: '';
  position: absolute;
  bottom: 0; left: 0; right: 0;
  height: 2px;
  background: linear-gradient(90deg, var(--color-accent), var(--color-secondary));
  transform: scaleX(0);
  transform-origin: center;
  transition: transform 0.32s ease;
}
.mg-svc-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 14px 38px rgba(229,53,231,0.14), 0 4px 10px rgba(0,0,0,0.06);
  border-color: rgba(229,53,231,0.24);
}
.mg-svc-card:hover::after { transform: scaleX(1); }
.mg-svc-icon {
  width: 50px; height: 50px;
  border-radius: 50%;
  background: linear-gradient(135deg, rgba(229,53,231,0.12), rgba(249,183,62,0.08));
  border: 1px solid rgba(229,53,231,0.18);
  display: flex; align-items: center; justify-content: center;
  color: var(--color-secondary);
}
.mg-svc-icon svg { width: 22px; height: 22px; }
.mg-svc-card h3 {
  font-family: var(--font-heading);
  font-size: 0.92rem;
  font-weight: 800;
  color: var(--color-dark);
  margin: 0;
}
.mg-svc-card p {
  font-size: 0.82rem;
  color: var(--color-gray);
  line-height: 1.68;
  margin: 0;
  flex: 1;
}
.mg-svc-link {
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
.mg-svc-link:hover { gap: 8px; }
.mg-svc-link svg { width: 14px; height: 14px; }

/* ── FAQ (light) ── */
/* Technique 6: accordion neon left-border + 45deg icon rotate */
.mg-faq {
  padding: var(--space-16) 0;
  background: #f4f6f9;
}
.mg-faq-inner {
  max-width: 840px;
  margin: 0 auto;
}
.mg-faq h2 {
  font-size: clamp(1.6rem, 2.8vw, 2.2rem);
  font-weight: 900;
  color: var(--color-dark);
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.02em;
  margin-bottom: var(--space-3);
}
.mg-faq h2 em { color: var(--color-secondary); font-style: normal; }
.mg-faq-sub {
  font-size: 0.92rem;
  color: var(--color-gray);
  margin-bottom: var(--space-10);
  line-height: 1.75;
}
.mg-faq-list {
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
}
.mg-faq-item {
  background: var(--color-white);
  border: 1px solid rgba(229,53,231,0.10);
  border-left: 3px solid transparent;
  border-radius: var(--radius-lg);
  overflow: hidden;
  transition: border-color var(--transition-base), box-shadow var(--transition-base);
}
.mg-faq-item.open {
  border-left-color: var(--color-secondary);
  border-color: rgba(229,53,231,0.30);
  box-shadow: 0 4px 22px rgba(229,53,231,0.08);
}
.mg-faq-q {
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
  font-size: 0.9rem;
  font-weight: 700;
  color: var(--color-dark);
  transition: color var(--transition-fast);
  user-select: none;
}
.mg-faq-q:hover { color: var(--color-secondary); }
.mg-faq-item.open .mg-faq-q { color: var(--color-secondary); }
.mg-faq-icon {
  flex-shrink: 0;
  width: 26px; height: 26px;
  border-radius: 50%;
  background: rgba(229,53,231,0.08);
  border: 1px solid rgba(229,53,231,0.18);
  display: flex; align-items: center; justify-content: center;
  transition: background var(--transition-base), transform var(--transition-base);
  font-size: 1rem;
  color: var(--color-secondary);
  font-weight: 900;
  line-height: 1;
}
.mg-faq-item.open .mg-faq-icon {
  background: var(--color-secondary);
  color: var(--color-white);
  transform: rotate(45deg);
}
.mg-faq-a {
  display: none;
  padding: 0 var(--space-6) var(--space-5);
  font-size: 0.88rem;
  color: var(--color-gray);
  line-height: 1.8;
  border-top: 1px solid rgba(229,53,231,0.07);
  padding-top: var(--space-4);
}
.mg-faq-item.open .mg-faq-a { display: block; }

/* ── RELATED AREAS ── */
.mg-related {
  padding: var(--space-14) 0;
  background: var(--color-white);
}
.mg-related-header {
  text-align: center;
  margin-bottom: var(--space-10);
}
.mg-related h3 {
  font-size: clamp(1.5rem, 2.5vw, 2rem);
  font-weight: 900;
  color: var(--color-dark);
  text-wrap: balance;
  margin-bottom: var(--space-2);
}
.mg-related-sub {
  font-size: 0.9rem;
  color: var(--color-gray);
}
.mg-related-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
}
.mg-area-card {
  background: linear-gradient(148deg, #09090f, #15082c);
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
.mg-area-card::before {
  content: '';
  position: absolute;
  bottom: 0; left: 0; right: 0;
  height: 2px;
  background: linear-gradient(90deg, var(--color-secondary), var(--color-accent));
  transform: scaleX(0);
  transform-origin: center;
  transition: transform 0.3s ease;
}
.mg-area-card:hover {
  transform: translateY(-4px);
  box-shadow: 0 14px 38px rgba(229,53,231,0.18), 0 4px 12px rgba(0,0,0,0.28);
  border-color: rgba(229,53,231,0.28);
}
.mg-area-card:hover::before { transform: scaleX(1); }
.mg-area-card-icon {
  width: 42px; height: 42px;
  border-radius: 10px;
  background: rgba(255,255,255,0.05);
  border: 1px solid rgba(255,255,255,0.10);
  display: flex; align-items: center; justify-content: center;
  color: var(--color-accent);
}
.mg-area-card-icon svg { width: 20px; height: 20px; }
.mg-area-card h4 {
  font-family: var(--font-heading);
  font-size: 0.95rem;
  font-weight: 800;
  color: var(--color-white);
  margin: 0;
}
.mg-area-card p {
  font-size: 0.8rem;
  color: rgba(255,255,255,0.50);
  line-height: 1.65;
  margin: 0;
  flex: 1;
}
.mg-area-link {
  display: inline-flex;
  align-items: center;
  gap: 4px;
  font-size: 0.78rem;
  font-weight: 800;
  color: var(--color-accent);
  transition: gap var(--transition-fast);
}
.mg-area-link:hover { gap: 8px; }
.mg-area-link svg { width: 13px; height: 13px; }

/* ── EMERGENCY CTA (dark) ── */
.mg-cta {
  padding: var(--space-16) 0;
  background: linear-gradient(138deg, #09090f 0%, #1c0830 52%, #0a1528 100%);
  position: relative;
  overflow: hidden;
  text-align: center;
}
.mg-cta::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 58% 80% at 14% 52%, rgba(249,183,62,0.12) 0%, transparent 60%),
    radial-gradient(ellipse 48% 72% at 86% 52%, rgba(229,53,231,0.10) 0%, transparent 60%);
  pointer-events: none;
}
.mg-cta-inner {
  position: relative;
  z-index: 1;
  max-width: 580px;
  margin: 0 auto;
}
.mg-cta h2 {
  font-size: clamp(1.5rem, 2.8vw, 2.2rem);
  font-weight: 900;
  color: var(--color-white);
  text-wrap: balance;
  margin-bottom: var(--space-3);
}
.mg-cta h2 em { color: var(--color-accent); font-style: normal; }
.mg-cta p {
  font-size: 0.95rem;
  color: rgba(255,255,255,0.58);
  max-width: 460px;
  margin: 0 auto var(--space-7);
  line-height: 1.75;
}
.mg-cta-btns {
  display: flex;
  gap: var(--space-3);
  justify-content: center;
  flex-wrap: wrap;
}

/* ── RESPONSIVE ── */
@media (max-width: 1024px) {
  .mg-hero-inner { grid-template-columns: 1fr; }
  .mg-hero-card { display: none; }
  .mg-coverage-grid { grid-template-columns: 1fr; gap: var(--space-10); }
}
@media (max-width: 768px) {
  .mg-services-grid { grid-template-columns: repeat(2, 1fr); }
  .mg-related-grid { grid-template-columns: 1fr; }
  .mg-stat-row { gap: var(--space-6); }
  .mg-stadium-inner { flex-direction: column; }
}
@media (max-width: 480px) {
  .mg-services-grid { grid-template-columns: 1fr; }
}
</style>

<main id="main-content">

<!-- ═══ HERO ═══ -->
<section class="mg-hero" aria-label="Bail bonds in Miami Gardens, FL — licensed bondsman 24/7">
  <div class="mg-orb mg-orb-1"></div>
  <div class="mg-orb mg-orb-2"></div>
  <div class="mg-orb mg-orb-3"></div>

  <div class="container">
    <div class="mg-hero-inner">
      <div class="mg-hero-left">
        <span class="mg-eyebrow">
          <span class="mg-pulse"></span>
          Miami Gardens, FL — Miami-Dade County
        </span>
        <h1>Bail Bonds Near Me in <span class="hl-gold">Miami Gardens, FL</span> — Licensed Bondsman Available <span class="hl-mag">24/7</span></h1>
        <p class="mg-hero-answer">Need bail bonds in Miami Gardens? Mad Extra Bail Bonds posts bond at Turner Guilford Knight (TGK) and Miami-Dade facilities serving Miami Gardens — any charge, any hour. We are a licensed Florida bail bondsman serving Miami Gardens and all of Miami-Dade County for over 11 years, including Hard Rock Stadium event arrest situations.</p>
        <div class="mg-hero-btns">
          <?php if (!empty($phone)): ?>
          <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>" class="btn-mg-primary">
            <?php echo lucide_icon('phone'); ?> Call Now — 24/7
          </a>
          <?php else: ?>
          <a href="/contact/" class="btn-mg-primary">
            <?php echo lucide_icon('zap'); ?> Get Help Now
          </a>
          <?php endif; ?>
          <a href="/contact/" class="btn-mg-secondary">
            <?php echo lucide_icon('file-text'); ?> Free Consultation
          </a>
        </div>
        <div class="mg-trust-row">
          <span class="mg-trust-badge"><?php echo lucide_icon('shield-check'); ?> Licensed FL Bondsman</span>
          <span class="mg-trust-badge"><?php echo lucide_icon('clock'); ?> 24/7 Available</span>
          <span class="mg-trust-badge"><?php echo lucide_icon('building-2'); ?> MGPD &amp; TGK Familiar</span>
          <span class="mg-trust-badge"><?php echo lucide_icon('users'); ?> Stadium Event Experience</span>
        </div>
      </div>

      <!-- Technique 4: Glassmorphism sidebar card -->
      <div class="mg-hero-card">
        <p class="mg-card-title">Arrest in Miami Gardens?</p>
        <p class="mg-card-sub">Immediate 24/7 Response</p>
        <ul class="mg-card-list">
          <li><span class="mg-check">✓</span> Licensed FL bondsman — 11+ years in Miami-Dade County</li>
          <li><span class="mg-check">✓</span> MGPD and TGK procedures — we know them both</li>
          <li><span class="mg-check">✓</span> Hard Rock Stadium event arrest experience</li>
          <li><span class="mg-check">✓</span> Carol City, Andover, Norland, Scott Lake neighborhoods</li>
          <li><span class="mg-check">✓</span> 10% Florida legal premium — no hidden fees</li>
        </ul>
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>" class="mg-card-cta">
          <?php echo lucide_icon('phone'); ?> Call Now — 24/7
        </a>
        <?php else: ?>
        <a href="/contact/" class="mg-card-cta">Get Help Now</a>
        <?php endif; ?>
        <p class="mg-card-disclaimer">Available every hour — 365 days a year</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SVG DIVIDER: dark → light (staggered wave) ═══ -->
<div class="mg-div-dk-lt" aria-hidden="true">
  <svg viewBox="0 0 1440 58" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,58 L0,18 Q300,58 600,26 Q900,-4 1200,32 Q1350,50 1440,36 L1440,58 Z" fill="#f4f6f9"/>
  </svg>
</div>

<!-- ═══ INTRO / ANSWER SECTION ═══ -->
<section class="mg-intro" aria-label="Bail bonds in Miami Gardens — how the process works">
  <div class="container">
    <div class="mg-intro-inner">
      <span class="mg-section-eyebrow"><?php echo lucide_icon('zap'); ?> How It Works in Miami Gardens</span>
      <h2>How do bail bonds work in <em>Miami Gardens, FL</em>?</h2>
      <div class="mg-answer-block">
        <p>Bail bonds in Miami Gardens work as follows: after an arrest anywhere in Miami Gardens — from the Carol City area to the Andover community to the corridor along Miami Gardens Drive — the defendant is processed by the Miami Gardens Police Department and transported to Turner Guilford Knight Correctional Center (TGK). You call us, we locate your family member in the system immediately, and we post the full bail. You pay only Florida's 10% premium, and release processing begins the moment bond posts at TGK.</p>
      </div>
      <p>Mad Extra Bail Bonds is a licensed Florida bail bondsman based in Delray Beach, serving Miami Gardens and all of Miami-Dade County for over 11 years. Miami Gardens is Florida's largest majority-Black city — incorporated in 2003 and covering communities historically known as Carol City, Andover, Lake Lucerne, Norland, and Scott Lake. We have served these communities through the entire history of Miami Gardens as an independent city and understand the neighborhoods well.</p>
      <p>Miami Gardens Drive, the primary east-west corridor through the city, connects neighborhoods from the Scott Lake area on the east to the Andover gated community on the northwest. NW 27th Avenue runs north-south through the heart of Miami Gardens, passing Miami Gardens City Hall at 18605 NW 27th Ave. The Amazon Fulfillment Center near NW 27th Ave and Miami Gardens Drive is a major employer. When incidents occur in the residential neighborhoods, on Miami Gardens Drive, or in the commercial areas surrounding Norland High School or Miami Carol City Senior High, we are ready to move immediately.</p>

      <!-- Technique 10: stadium-event signature callout -->
      <div class="mg-stadium-callout">
        <div class="mg-stadium-inner">
          <div class="mg-stadium-icon"><?php echo lucide_icon('users'); ?></div>
          <div class="mg-stadium-text">
            <h4>Hard Rock Stadium Event Arrest Situations</h4>
            <p>Hard Rock Stadium at 347 Don Shula Drive is one of Miami Gardens' most prominent landmarks — home to Miami Dolphins games, college football, UFC events, international soccer, and major concerts. Large events bring large crowds, and arrest situations happen. Public intoxication, disorderly conduct, battery, and drug possession charges arising from Hard Rock events route through MGPD or Miami-Dade PD to TGK. We have experience handling stadium-event bail situations and can move quickly once booking is complete.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SVG DIVIDER: light → dark (chevron angle) ═══ -->
<div class="mg-div-lt-dk" aria-hidden="true">
  <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,0 Q720,56 1440,0 L1440,56 L0,56 Z" fill="#09090f"/>
  </svg>
</div>

<!-- ═══ LOCAL COVERAGE SECTION ═══ -->
<section class="mg-coverage" aria-label="Local coverage in Miami Gardens, FL">
  <div class="mg-blob-a" aria-hidden="true"></div>
  <div class="mg-blob-b" aria-hidden="true"></div>
  <div class="mg-blob-c" aria-hidden="true"></div>
  <div class="container mg-coverage-inner">
    <div class="mg-coverage-grid">
      <div>
        <span class="mg-coverage-eyebrow"><?php echo lucide_icon('map-pin'); ?> Miami Gardens — Facility Guide</span>
        <h2>Where do <em>Miami Gardens arrests go</em> — and how fast is release?</h2>
        <p class="mg-coverage-body">The Miami Gardens Police Department was established in 2006, three years after the city's incorporation. MGPD processes city arrests and transports defendants to Turner Guilford Knight Correctional Center (TGK) at 7000 NW 41st St in Miami for most charges. TGK is the standard intake facility for Miami Gardens arrests across the city's residential and commercial areas.</p>
        <p class="mg-coverage-body">For certain felony classifications or based on TGK population conditions, some Miami Gardens arrests may route to the Miami-Dade Main Jail at 1351 NW 12th St. We check both facilities the moment you call — so your family does not waste time contacting the wrong location. Misdemeanor releases from TGK after bond posting typically take 6 to 14 hours. Felony charges requiring a court appearance can extend to 12 to 36 hours.</p>
        <p class="mg-coverage-body">Miami Gardens criminal cases are heard in Miami-Dade Circuit Court — the nearest courthouse serving this area is the Miami-Dade Regional Justice Center in north Miami-Dade. We can guide families on court date locations after the immediate bond situation is resolved. Getting your family member out of TGK as fast as possible is always the first and most urgent step.</p>

        <div class="mg-community-note">
          <?php echo lucide_icon('users'); ?>
          <p><strong>Serving all of Miami Gardens' communities:</strong> Miami Gardens is Florida's largest majority-Black city with strong Caribbean-American communities including Jamaican, Haitian, and Bahamian heritage. We serve every Miami Gardens community with clear, respectful communication — understanding that a bail bond situation is one of the most stressful moments a family can experience.</p>
        </div>

        <div class="mg-stat-row">
          <div>
            <div class="mg-stat-num">6–14 hrs</div>
            <div class="mg-stat-label">TGK misdemeanor release</div>
          </div>
          <div>
            <div class="mg-stat-num">2003</div>
            <div class="mg-stat-label">Year Miami Gardens incorporated</div>
          </div>
          <div>
            <div class="mg-stat-num">11+ yrs</div>
            <div class="mg-stat-label">Serving Miami Gardens families</div>
          </div>
        </div>
      </div>

      <div class="mg-local-panel">
        <div class="mg-signal-card">
          <h4><?php echo lucide_icon('landmark'); ?> Turner Guilford Knight (TGK)</h4>
          <p>7000 NW 41st St, Miami — the primary intake facility for Miami Gardens Police Department arrests. We know TGK's booking processes in detail, including the specific documentation and procedures required for bond posting at this facility.</p>
        </div>
        <div class="mg-signal-card">
          <h4><?php echo lucide_icon('shield'); ?> Miami Gardens Police Department (MGPD)</h4>
          <p>Established 2006, MGPD is a full-service city police department serving Miami Gardens across all its residential neighborhoods and commercial corridors. MGPD coordinates with Miami-Dade PD on some situations. We track both agencies when locating a detained family member.</p>
        </div>
        <div class="mg-signal-card">
          <h4><?php echo lucide_icon('users'); ?> Hard Rock Stadium — 347 Don Shula Drive</h4>
          <p>Home of the Miami Dolphins and one of Miami's premier event venues. Stadium events generate arrest situations — public intoxication, battery, disorderly conduct — that we have experience handling. Event arrests route to TGK via MGPD or Miami-Dade PD.</p>
        </div>
        <div class="mg-signal-card">
          <h4><?php echo lucide_icon('map-pin'); ?> Carol City, Norland &amp; Scott Lake</h4>
          <p>Miami Gardens' historically significant neighborhoods — Carol City and Norland in the northeast, Scott Lake in the residential center — are areas where we have served families throughout Miami Gardens' existence as an incorporated city. We know these streets well.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SVG DIVIDER: dark → white (flowing arc) ═══ -->
<div class="mg-div-dk-wh" aria-hidden="true">
  <svg viewBox="0 0 1440 58" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,0 C480,58 960,0 1440,46 L1440,58 L0,58 Z" fill="#ffffff"/>
  </svg>
</div>

<!-- ═══ SERVICES GRID SECTION ═══ -->
<section class="mg-services" aria-label="Bail bond services available in Miami Gardens, FL">
  <div class="container">
    <div class="mg-services-header">
      <span class="mg-section-eyebrow"><?php echo lucide_icon('shield'); ?> Services in Miami Gardens</span>
      <h2>What bail bond services are available in <em>Miami Gardens, FL</em>?</h2>
      <p class="mg-services-lead">Every bail bond service we offer is available for Miami Gardens arrests — any charge, any facility, 24 hours a day.</p>
    </div>
    <div class="mg-services-grid">
      <?php
      $mgServices = [
        ['slug' => 'bail-bonds',             'name' => 'Bail Bond Services',       'icon' => 'shield',         'desc' => 'General bail bonds for Miami Gardens arrests — we post bond at TGK immediately after booking, for any charge, any hour.'],
        ['slug' => 'dui-bail-bonds',          'name' => 'DUI Bail Bonds',           'icon' => 'car',            'desc' => 'DUI arrests in Miami Gardens and along Miami Gardens Drive handled with urgency — we post DUI bonds at TGK fast.'],
        ['slug' => 'drug-charge-bail-bonds',  'name' => 'Drug Charge Bail Bonds',   'icon' => 'alert-triangle', 'desc' => 'Drug possession and trafficking charges in Miami Gardens handled with discretion. We know Miami-Dade drug charge bond procedures.'],
        ['slug' => 'felony-bail-bonds',       'name' => 'Felony Bail Bonds',        'icon' => 'gavel',          'desc' => 'Felony bail bonds in Miami Gardens cases — heard in Miami-Dade Circuit Court. We navigate higher-bond situations with 11+ years of experience.'],
        ['slug' => 'misdemeanor-bail-bonds',  'name' => 'Misdemeanor Bail Bonds',   'icon' => 'file-text',      'desc' => 'Misdemeanor releases from TGK after Miami Gardens arrests — disorderly conduct, battery, and possession handled quickly.'],
        ['slug' => 'warrant-bail-bonds',      'name' => 'Warrant &amp; Traffic Bonds', 'icon' => 'file-warning', 'desc' => 'Outstanding Miami-Dade warrants and traffic bonds for Miami Gardens residents — resolve before MGPD contact turns into a custody situation.'],
      ];
      foreach ($mgServices as $svc): ?>
      <div class="mg-svc-card">
        <div class="mg-svc-icon"><?php echo lucide_icon($svc['icon']); ?></div>
        <h3><?php echo $svc['name']; ?></h3>
        <p><?php echo $svc['desc']; ?></p>
        <a href="/services/<?php echo $svc['slug']; ?>/" class="mg-svc-link">
          Learn more <?php echo lucide_icon('arrow-right'); ?>
        </a>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══ SVG DIVIDER: white → light (rolling wave) ═══ -->
<div class="mg-div-wh-lt" aria-hidden="true">
  <svg viewBox="0 0 1440 44" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,30 Q360,44 720,16 Q1080,-4 1440,28 L1440,44 L0,44 Z" fill="#f4f6f9"/>
  </svg>
</div>

<!-- ═══ FAQ SECTION ═══ -->
<section class="mg-faq" aria-label="Miami Gardens bail bond FAQ">
  <div class="container">
    <div class="mg-faq-inner">
      <span class="mg-section-eyebrow"><?php echo lucide_icon('help-circle'); ?> Common Questions</span>
      <h2>Frequently asked questions about <em>bail bonds in Miami Gardens, FL</em></h2>
      <p class="mg-faq-sub">Miami Gardens-specific answers covering MGPD arrests, TGK procedures, Hard Rock Stadium situations, and community-specific context.</p>

      <div class="mg-faq-list" role="list">
        <?php foreach ($_faqs as $faq): ?>
        <div class="mg-faq-item" role="listitem">
          <button class="mg-faq-q" aria-expanded="false" onclick="toggleMgFaq(this)">
            <?php echo htmlspecialchars($faq['q']); ?>
            <span class="mg-faq-icon" aria-hidden="true">+</span>
          </button>
          <div class="mg-faq-a" role="region">
            <p><?php echo htmlspecialchars($faq['a']); ?></p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- ═══ RELATED AREAS ═══ -->
<section class="mg-related" aria-label="Other Miami-Dade cities we serve near Miami Gardens">
  <div class="container">
    <div class="mg-related-header">
      <h3>Also Serving These Nearby Miami-Dade Cities</h3>
      <p class="mg-related-sub">Mad Extra Bail Bonds covers all of Miami-Dade County — same fast, 24/7 service in every city.</p>
    </div>
    <div class="mg-related-grid">
      <a href="/areas/miami/" class="mg-area-card">
        <div class="mg-area-card-icon"><?php echo lucide_icon('landmark'); ?></div>
        <h4>Miami</h4>
        <p>Bail bonds across Miami — Main Jail, TGK, and Metro West. Bilingual service in English, Spanish, and Haitian Creole. 24/7 response.</p>
        <span class="mg-area-link">View coverage <?php echo lucide_icon('arrow-right'); ?></span>
      </a>
      <a href="/areas/hialeah/" class="mg-area-card">
        <div class="mg-area-card-icon"><?php echo lucide_icon('map-pin'); ?></div>
        <h4>Hialeah</h4>
        <p>Bail bonds for Hialeah arrests — TGK intake, fully bilingual English/Spanish service for Hialeah's Cuban-American community. 24/7.</p>
        <span class="mg-area-link">View coverage <?php echo lucide_icon('arrow-right'); ?></span>
      </a>
      <a href="/areas/" class="mg-area-card">
        <div class="mg-area-card-icon"><?php echo lucide_icon('globe'); ?></div>
        <h4>All Miami-Dade County</h4>
        <p>We cover every city in Miami-Dade County — fast bail bond service available 24 hours a day, 7 days a week across the entire county.</p>
        <span class="mg-area-link">See all areas <?php echo lucide_icon('arrow-right'); ?></span>
      </a>
    </div>
  </div>
</section>

<!-- ═══ EMERGENCY CTA ═══ -->
<section class="mg-cta" aria-label="Emergency bail bond help in Miami Gardens">
  <div class="mg-cta-inner">
    <h2>Need a bondsman in <em>Miami Gardens right now</em>?</h2>
    <p>We have served every Miami Gardens neighborhood — Carol City, Norland, Andover, Scott Lake, and beyond — for over 11 years. One call starts the TGK release process, any hour of the day or night.</p>
    <div class="mg-cta-btns">
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>" class="btn-mg-primary">
        <?php echo lucide_icon('phone'); ?> Call Now — 24/7
      </a>
      <?php endif; ?>
      <a href="/contact/" class="btn-mg-secondary">Send a Message</a>
    </div>
  </div>
</section>

</main>

<script>
function toggleMgFaq(btn) {
  const item = btn.closest('.mg-faq-item');
  const isOpen = item.classList.contains('open');
  document.querySelectorAll('.mg-faq-item.open').forEach(el => el.classList.remove('open'));
  document.querySelectorAll('.mg-faq-q').forEach(el => el.setAttribute('aria-expanded', 'false'));
  if (!isOpen) {
    item.classList.add('open');
    btn.setAttribute('aria-expanded', 'true');
  }
}
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
