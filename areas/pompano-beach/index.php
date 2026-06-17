<?php
/**
 * areas/pompano-beach/index.php — Pompano Beach Service Area Page
 * Mad Extra Bail Bonds | Delray Beach, FL
 * Phase 6: Service Area Pages
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Bail Bonds Near Me in Pompano Beach FL | Mad Extra Bail Bonds | 24/7';
$pageDescription = 'Need bail bonds in Pompano Beach, FL? Mad Extra Bail Bonds serves Pompano Beach 24/7. Licensed FL bondsman — fast release from Broward North Regional Jail in Pompano Beach.';
$canonicalUrl    = $siteUrl . '/areas/pompano-beach/';
$currentPage     = 'areas';

$_breadcrumb = generateBreadcrumbSchema([
    ['name' => 'Home',         'url' => $siteUrl . '/'],
    ['name' => 'Service Areas','url' => $siteUrl . '/areas/'],
    ['name' => 'Pompano Beach','url' => $siteUrl . '/areas/pompano-beach/'],
]);

$_serviceSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'Service',
    '@id'         => $siteUrl . '/areas/pompano-beach/#service-pompano-beach',
    'name'        => 'Bail Bonds in Pompano Beach, FL',
    'description' => 'Licensed Florida bail bondsman serving Pompano Beach and North Broward County 24/7. Fast release from the Broward County North Regional Jail at 1000 Powerline Road, Pompano Beach.',
    'url'         => $siteUrl . '/areas/pompano-beach/',
    'provider'    => ['@id' => $siteUrl . '/#organization'],
    'areaServed'  => [
        ['@type' => 'City',   'name' => 'Pompano Beach, FL'],
        ['@type' => 'County', 'name' => 'Broward County, FL'],
    ],
    'serviceType' => 'Bail Bond Services',
];

$_faqs = [
    [
        'q' => 'Is there a jail in Pompano Beach itself?',
        'a' => 'Yes. The Broward County North Regional Jail at 1000 Powerline Road is the primary detention facility for North Broward County, including Pompano Beach. Many Pompano Beach arrests stay at North Regional rather than transferring to the Broward County Main Jail in Fort Lauderdale. Mad Extra Bail Bonds works directly with North Regional staff daily and knows the facility\'s procedures and release timelines — that familiarity speeds up every bond we post there.',
    ],
    [
        'q' => 'How is the release process at Broward North Regional Jail different from Broward Main in Fort Lauderdale?',
        'a' => 'North Regional Jail in Pompano Beach is smaller than the Broward County Main Jail in Fort Lauderdale and typically processes bonds faster. Misdemeanor releases at North Regional can sometimes happen in 3 to 6 hours after bond is posted — compared to 4 to 10 hours at Broward Main. We know the staff and protocols at both facilities, so we choose the fastest path based on where your loved one is being held.',
    ],
    [
        'q' => 'Can Mad Extra Bail Bonds handle an arrest near the Harrah\'s Pompano Beach casino?',
        'a' => 'Yes. Casino-area arrests — including disorderly conduct, DUI, and possession charges near Harrah\'s on Powerline Road — are a regular part of what we handle in Pompano Beach. Gaming facility areas follow predictable arrest patterns we are fully familiar with. Pompano Beach PD handles casino-adjacent city arrests; both transport defendants to North Regional Jail on Powerline Road, steps from the casino itself.',
    ],
    [
        'q' => 'What court handles criminal cases for Pompano Beach arrests?',
        'a' => 'Pompano Beach criminal cases are heard at the Broward County North Regional Courthouse at 1600 W Hillsboro Blvd in Deerfield Beach, which covers all North Broward Division cases. After posting bond, defendants receive a court date at the North Regional Courthouse. Mad Extra Bail Bonds can advise families on what to expect at the North Regional Courthouse and what court-date preparation looks like after the bond is posted.',
    ],
    [
        'q' => 'How fast can Mad Extra post bail for a misdemeanor arrest in Pompano Beach?',
        'a' => 'For misdemeanor bonds at North Regional Jail in Pompano Beach, Mad Extra Bail Bonds typically begins processing within 1 to 2 hours of your call. Total release time from the point of arrest is generally 4 to 8 hours for misdemeanors, depending on booking load at the facility. Felony cases take longer due to additional processing requirements, but we move as quickly as the facility allows on every bond we post.',
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
   POMPANO BEACH AREA PAGE — Mad Extra Bail Bonds
   Premium Tier | Dark/Neon Design System
   Techniques:
   1. Layered ::before radial gradient blobs — gold-dominant hero
   2. Fractal noise ::after texture on hero
   3. Floating neon orbs — gold and magenta reversed weighting
   4. Glassmorphism hero sidebar (backdrop-filter: blur(14px))
   5. SVG wave dividers (3 unique shapes)
   6. FAQ accordion with magenta left border + icon rotate
   7. Service cards with neon scaleX bottom-border hover
   8. Decorative large gold radial orb in dark coverage section
   9. Gradient stat numbers (gold → magenta background-clip)
   ============================================================ */

/* ── 1. HERO ── */
.hero-pmp {
  position: relative;
  min-height: 62vh;
  display: flex;
  align-items: center;
  background: #08060e;
  overflow: hidden;
  padding-top: var(--nav-height, 72px);
  padding-bottom: var(--space-12);
}
/* Technique 1: gold-dominant hero blob placement — mirrors FL page */
.hero-pmp::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 60% 70% at 8% 30%, rgba(249,183,62,0.2) 0%, transparent 58%),
    radial-gradient(ellipse 52% 65% at 90% 75%, rgba(229,53,231,0.18) 0%, transparent 55%),
    radial-gradient(ellipse 80% 42% at 50% 110%, rgba(8,6,14,0.99) 0%, transparent 80%);
  pointer-events: none;
}
/* Technique 2: fractal noise texture */
.hero-pmp::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
  opacity: 0.5;
  pointer-events: none;
  z-index: 0;
}
/* Technique 3: floating neon orbs — gold primary, magenta secondary */
.pmp-orb {
  position: absolute;
  border-radius: 50%;
  pointer-events: none;
  will-change: transform;
  z-index: 1;
}
.pmp-orb-1 {
  width: 500px; height: 500px;
  top: -160px; left: -90px;
  background: radial-gradient(circle, rgba(249,183,62,0.14) 0%, transparent 68%);
  animation: pmp-float 17s ease-in-out infinite;
}
.pmp-orb-2 {
  width: 400px; height: 400px;
  bottom: -80px; right: 0;
  background: radial-gradient(circle, rgba(229,53,231,0.13) 0%, transparent 68%);
  animation: pmp-float 20s ease-in-out infinite reverse;
  animation-delay: -8s;
}
.pmp-orb-3 {
  width: 200px; height: 200px;
  top: 50%; left: 40%;
  background: radial-gradient(circle, rgba(249,183,62,0.06) 0%, transparent 68%);
  animation: pmp-float 13s ease-in-out infinite;
  animation-delay: -5s;
}
@keyframes pmp-float {
  0%,100% { transform: translate(0,0) scale(1); }
  42%     { transform: translate(-12px,16px) scale(1.03); }
  75%     { transform: translate(10px,-10px) scale(0.97); }
}
.hero-pmp-inner {
  position: relative;
  z-index: 2;
  display: grid;
  grid-template-columns: 1fr 380px;
  gap: var(--space-12);
  align-items: center;
  padding: var(--space-12) 0;
  width: 100%;
}
.hero-pmp-left { max-width: 620px; }
.pmp-eyebrow {
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
  background: rgba(249,183,62,0.07);
  margin-bottom: var(--space-5);
}
.pmp-eyebrow .ready-dot {
  width: 7px; height: 7px;
  border-radius: 50%;
  background: var(--color-accent);
  box-shadow: 0 0 8px var(--color-accent);
  animation: ready-pulse 2.2s ease-in-out infinite;
  flex-shrink: 0;
}
@keyframes ready-pulse {
  0%,100% { opacity:1; transform:scale(1); }
  50%     { opacity:.45; transform:scale(.68); }
}
.hero-pmp h1 {
  font-size: clamp(1.8rem, 3.8vw, 3rem);
  font-weight: 900;
  color: #fff;
  line-height: 1.1;
  margin-bottom: var(--space-5);
  letter-spacing: -0.025em;
  text-wrap: balance;
}
.hero-pmp h1 .hl-gold { color: var(--color-accent); text-shadow: 0 0 28px rgba(249,183,62,0.55); }
.hero-pmp h1 .hl-mag  { color: var(--color-secondary); text-shadow: 0 0 28px rgba(229,53,231,0.5); }
.hero-pmp .hero-answer {
  font-size: 1rem;
  color: rgba(255,255,255,0.65);
  line-height: 1.82;
  margin-bottom: var(--space-7);
  max-width: 560px;
}
.hero-pmp-btns {
  display: flex;
  gap: var(--space-3);
  flex-wrap: wrap;
  margin-bottom: var(--space-7);
}
.btn-pmp-primary {
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
.btn-pmp-primary:hover {
  background: #f043f2;
  box-shadow: 0 0 44px rgba(229,53,231,0.65), 0 8px 22px rgba(0,0,0,0.35);
  transform: translateY(-2px);
  color: #fff;
}
.btn-pmp-primary svg { width: 15px; height: 15px; }
.btn-pmp-secondary {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 12px 24px;
  background: transparent;
  color: var(--color-accent);
  border: 2px solid rgba(249,183,62,0.45);
  font-family: var(--font-heading);
  font-size: 0.82rem;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  border-radius: var(--radius-md);
  text-decoration: none;
  transition: all var(--transition-base);
}
.btn-pmp-secondary:hover {
  background: rgba(249,183,62,0.1);
  border-color: var(--color-accent);
  transform: translateY(-2px);
  color: #ffd166;
}
.pmp-trust-row {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-2);
}
.pmp-badge {
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
.pmp-badge svg { width: 11px; height: 11px; color: var(--color-secondary); flex-shrink: 0; }

/* Technique 4: glassmorphism hero sidebar — gold-tinted gradient border */
.hero-pmp-card {
  position: relative;
  background: rgba(255,255,255,0.045);
  border: 1px solid rgba(255,255,255,0.12);
  border-radius: 18px;
  padding: var(--space-7) var(--space-6);
  backdrop-filter: blur(14px);
  -webkit-backdrop-filter: blur(14px);
}
.hero-pmp-card::before {
  content: '';
  position: absolute;
  inset: -1px;
  border-radius: 19px;
  background: linear-gradient(135deg, rgba(249,183,62,0.5) 0%, rgba(229,53,231,0.2) 55%, transparent 100%);
  z-index: -1;
  opacity: 0.4;
}
.hfc-pmp-title {
  font-family: var(--font-heading);
  font-size: 1.05rem;
  font-weight: 800;
  color: #fff;
  margin-bottom: var(--space-2);
}
.hfc-pmp-sub {
  font-size: 0.68rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  color: var(--color-accent);
  margin-bottom: var(--space-5);
}
.hfc-pmp-list {
  list-style: none;
  padding: 0;
  margin: 0 0 var(--space-6);
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
}
.hfc-pmp-list li {
  display: flex;
  align-items: flex-start;
  gap: var(--space-2);
  font-size: 0.85rem;
  color: rgba(255,255,255,0.8);
  line-height: 1.5;
}
.hfc-check-gold {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  width: 18px; height: 18px;
  border-radius: 50%;
  background: linear-gradient(135deg, var(--color-accent), #c98a12);
  font-size: 0.6rem;
  color: #fff;
  font-weight: 900;
  margin-top: 2px;
}
.hfc-pmp-cta {
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
.hfc-pmp-cta:hover {
  box-shadow: 0 8px 34px rgba(229,53,231,0.62);
  transform: translateY(-1px);
  color: #fff;
}
.hfc-pmp-disclaimer {
  text-align: center;
  font-size: 0.6rem;
  color: rgba(255,255,255,0.3);
  margin-top: var(--space-3);
  line-height: 1.5;
}

/* ── 2. SVG DIVIDERS ── */
/* Technique 5: 3 unique wave shapes per page */
.div-pmp-d2l { line-height: 0; background: #08060e; }
.div-pmp-d2l svg { display: block; width: 100%; }
.div-pmp-l2d { line-height: 0; background: #f4f6f9; }
.div-pmp-l2d svg { display: block; width: 100%; }
.div-pmp-d2w { line-height: 0; background: #08060e; }
.div-pmp-d2w svg { display: block; width: 100%; }
.div-pmp-w2l { line-height: 0; background: #fff; }
.div-pmp-w2l svg { display: block; width: 100%; }

/* ── 3. INTRO / ANSWER SECTION ── */
.intro-pmp {
  padding: var(--space-16) 0;
  background: #f4f6f9;
}
.intro-pmp-inner { max-width: 860px; margin: 0 auto; }
.pmp-sec-eyebrow {
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
  background: rgba(249,183,62,0.06);
  margin-bottom: var(--space-4);
}
.intro-pmp h2 {
  font-size: clamp(1.65rem, 2.8vw, 2.35rem);
  font-weight: 900;
  color: #1a2340;
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.02em;
  margin-bottom: var(--space-4);
}
.intro-pmp h2 em { color: var(--color-secondary); font-style: normal; }
.answer-block-pmp {
  background: linear-gradient(135deg, rgba(249,183,62,0.09), rgba(229,53,231,0.04));
  border-left: 3px solid var(--color-accent);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  padding: var(--space-5) var(--space-6);
  margin-bottom: var(--space-6);
}
.answer-block-pmp p {
  font-size: 0.95rem;
  color: #1a2340;
  line-height: 1.8;
  margin: 0;
  font-style: italic;
}
.intro-pmp p.prose {
  font-size: 0.95rem;
  color: #4a5568;
  line-height: 1.82;
  margin-bottom: var(--space-4);
  max-width: 65ch;
}

/* ── 4. LOCAL COVERAGE SECTION (dark) ── */
/* Technique 8: large gold decorative orb, asymmetric layout */
.coverage-pmp {
  padding: var(--space-16) 0;
  background: linear-gradient(135deg, #08060e 0%, #0f1a2a 60%, #16062a 100%);
  position: relative;
  overflow: hidden;
}
.coverage-pmp::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 45% 60% at 95% 50%, rgba(249,183,62,0.1) 0%, transparent 60%),
    radial-gradient(ellipse 42% 55% at 5% 50%, rgba(229,53,231,0.1) 0%, transparent 58%);
  pointer-events: none;
}
/* Technique 8: decorative large gold orb bottom-left */
.coverage-pmp-deco {
  position: absolute;
  width: 520px; height: 520px;
  bottom: -160px; left: -100px;
  border-radius: 50%;
  background: radial-gradient(circle, rgba(249,183,62,0.07) 0%, transparent 70%);
  pointer-events: none;
}
.coverage-pmp-inner {
  position: relative;
  z-index: 1;
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-14);
  align-items: start;
}
.coverage-pmp-eyebrow {
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
  border: 1px solid rgba(229,53,231,0.3);
  border-radius: var(--radius-full);
  background: rgba(229,53,231,0.07);
  margin-bottom: var(--space-4);
}
.coverage-pmp h2 {
  font-size: clamp(1.5rem, 2.6vw, 2.1rem);
  font-weight: 900;
  color: #fff;
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.02em;
  margin-bottom: var(--space-3);
}
.coverage-pmp h2 em { color: var(--color-accent); font-style: normal; }
.coverage-pmp-lead {
  font-size: 0.9rem;
  color: rgba(255,255,255,0.5);
  line-height: 1.8;
  margin-bottom: var(--space-5);
}
.answer-block-dark-pmp {
  background: rgba(255,255,255,0.04);
  border-left: 3px solid var(--color-accent);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  padding: var(--space-4) var(--space-5);
  margin-bottom: var(--space-6);
}
.answer-block-dark-pmp p {
  font-size: 0.88rem;
  color: rgba(255,255,255,0.72);
  line-height: 1.8;
  margin: 0;
  font-style: italic;
}
.coverage-pmp-detail-list {
  list-style: none;
  padding: 0;
  margin: 0;
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
}
.cov-pmp-item {
  display: flex;
  gap: var(--space-4);
  align-items: flex-start;
}
.cov-pmp-icon {
  flex-shrink: 0;
  width: 38px; height: 38px;
  border-radius: 10px;
  background: rgba(255,255,255,0.05);
  border: 1px solid rgba(255,255,255,0.1);
  display: flex; align-items: center; justify-content: center;
  color: var(--color-secondary);
  margin-top: 2px;
}
.cov-pmp-icon svg { width: 18px; height: 18px; }
.cov-pmp-content h4 {
  font-size: 0.88rem;
  font-weight: 800;
  color: #fff;
  margin-bottom: var(--space-1);
}
.cov-pmp-content p {
  font-size: 0.82rem;
  color: rgba(255,255,255,0.5);
  line-height: 1.65;
  margin: 0;
}
/* Technique 9: gradient text stat numbers — gold→magenta */
.coverage-pmp-stats {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-4);
}
.pmp-stat-card {
  background: rgba(255,255,255,0.04);
  border: 1px solid rgba(255,255,255,0.08);
  border-radius: var(--radius-lg);
  padding: var(--space-6);
  text-align: center;
  position: relative;
  overflow: hidden;
}
.pmp-stat-card::after {
  content: '';
  position: absolute;
  bottom: -30px; right: 50%;
  transform: translateX(50%);
  width: 100px; height: 100px;
  border-radius: 50%;
  background: radial-gradient(circle, rgba(249,183,62,0.09) 0%, transparent 70%);
  pointer-events: none;
}
.pmp-stat-num {
  font-family: var(--font-heading);
  font-size: 2.2rem;
  font-weight: 900;
  background: linear-gradient(135deg, var(--color-accent) 0%, var(--color-secondary) 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  line-height: 1;
  display: block;
  margin-bottom: var(--space-1);
  position: relative;
  z-index: 1;
}
.pmp-stat-lbl {
  font-family: var(--font-heading);
  font-size: 0.6rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  color: rgba(255,255,255,0.4);
  position: relative;
  z-index: 1;
}
.pmp-stat-note {
  font-size: 0.72rem;
  color: rgba(255,255,255,0.33);
  margin-top: var(--space-2);
  line-height: 1.55;
  position: relative;
  z-index: 1;
}

/* ── 5. SERVICES SECTION ── */
/* Technique 7: service cards with neon bottom-border scaleX */
.services-pmp {
  padding: var(--space-16) 0;
  background: #fff;
}
.services-pmp-header { text-align: center; margin-bottom: var(--space-12); }
.services-pmp h2 {
  font-size: clamp(1.65rem, 2.8vw, 2.35rem);
  font-weight: 900;
  color: #1a2340;
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.02em;
  margin-bottom: var(--space-3);
}
.services-pmp h2 em { color: var(--color-secondary); font-style: normal; }
.services-pmp-lead {
  font-size: 0.95rem;
  color: #4a5568;
  max-width: 500px;
  margin: 0 auto;
  line-height: 1.75;
}
.pmp-services-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 18px;
}
.pmp-svc-card {
  background: #f7f8fb;
  border: 1px solid rgba(249,183,62,0.12);
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
.pmp-svc-card::after {
  content: '';
  position: absolute;
  bottom: 0; left: 0; right: 0;
  height: 2px;
  background: linear-gradient(90deg, var(--color-accent), var(--color-secondary));
  transform: scaleX(0);
  transform-origin: left;
  transition: transform 0.32s ease;
}
.pmp-svc-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 14px 35px rgba(249,183,62,0.14), 0 4px 10px rgba(0,0,0,0.06);
  border-color: rgba(249,183,62,0.3);
}
.pmp-svc-card:hover::after { transform: scaleX(1); }
.pmp-svc-icon {
  width: 46px; height: 46px;
  border-radius: 50%;
  background: linear-gradient(135deg, rgba(249,183,62,0.12), rgba(229,53,231,0.07));
  border: 1px solid rgba(249,183,62,0.2);
  display: flex; align-items: center; justify-content: center;
  color: var(--color-accent);
}
.pmp-svc-icon svg { width: 20px; height: 20px; }
.pmp-svc-name {
  font-family: var(--font-heading);
  font-size: 0.88rem;
  font-weight: 800;
  color: #1a2340;
  line-height: 1.25;
}
.pmp-svc-desc {
  font-size: 0.8rem;
  color: #4a5568;
  line-height: 1.65;
  flex: 1;
  margin: 0;
}
.pmp-svc-link {
  display: inline-flex;
  align-items: center;
  gap: 4px;
  font-size: 0.76rem;
  font-weight: 800;
  color: var(--color-accent);
  text-decoration: none;
  transition: gap var(--transition-fast);
  margin-top: auto;
}
.pmp-svc-link:hover { gap: 8px; }
.pmp-svc-link svg { width: 13px; height: 13px; }

/* ── 6. FAQ SECTION ── */
/* Technique 6: FAQ accordion with magenta left border + icon rotate */
.faq-pmp {
  padding: var(--space-16) 0;
  background: #f4f6f9;
}
.faq-pmp-inner { max-width: 820px; margin: 0 auto; }
.faq-pmp h2 {
  font-size: clamp(1.55rem, 2.6vw, 2.15rem);
  font-weight: 900;
  color: #1a2340;
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.02em;
  margin-bottom: var(--space-3);
}
.faq-pmp h2 em { color: var(--color-accent); font-style: normal; }
.faq-pmp-sub { font-size: 0.92rem; color: #4a5568; margin-bottom: var(--space-10); line-height: 1.75; }
.faq-pmp-list { display: flex; flex-direction: column; gap: var(--space-3); }
.faq-pmp-item {
  background: #fff;
  border: 1px solid rgba(229,53,231,0.12);
  border-left: 3px solid rgba(229,53,231,0.18);
  border-radius: 0 var(--radius-lg) var(--radius-lg) 0;
  overflow: hidden;
  transition: border-color var(--transition-base), box-shadow var(--transition-base);
}
.faq-pmp-item.open {
  border-left-color: var(--color-secondary);
  box-shadow: 0 4px 18px rgba(229,53,231,0.1);
}
.faq-pmp-q {
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
.faq-pmp-q:hover { color: var(--color-secondary); }
.faq-pmp-item.open .faq-pmp-q { color: var(--color-secondary); }
.faq-pmp-icon {
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
.faq-pmp-item.open .faq-pmp-icon {
  background: var(--color-secondary);
  color: #fff;
  transform: rotate(45deg);
}
.faq-pmp-a {
  display: none;
  padding: 0 var(--space-6) var(--space-5);
  font-size: 0.88rem;
  color: #4a5568;
  line-height: 1.8;
  border-top: 1px solid rgba(229,53,231,0.07);
  padding-top: var(--space-4);
}
.faq-pmp-item.open .faq-pmp-a { display: block; }

/* ── 7. RELATED AREAS ── */
.related-pmp {
  padding: var(--space-14) 0;
  background: #fff;
}
.related-pmp-h3 {
  font-size: clamp(1.35rem, 2.2vw, 1.8rem);
  font-weight: 900;
  color: #1a2340;
  text-align: center;
  margin-bottom: var(--space-2);
  text-wrap: balance;
}
.related-pmp-sub { text-align: center; font-size: 0.9rem; color: #4a5568; margin-bottom: var(--space-8); }
.related-pmp-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 18px;
}
.rltd-pmp {
  display: block;
  background: #f7f8fb;
  border: 1px solid rgba(229,53,231,0.1);
  border-radius: var(--radius-lg);
  padding: var(--space-6) var(--space-5);
  text-decoration: none;
  position: relative;
  overflow: hidden;
  transition: transform var(--transition-base), box-shadow var(--transition-base), border-color var(--transition-base);
}
.rltd-pmp::after {
  content: '';
  position: absolute;
  bottom: 0; left: 0; right: 0;
  height: 2px;
  background: linear-gradient(90deg, var(--color-accent), var(--color-secondary));
  transform: scaleX(0);
  transform-origin: left;
  transition: transform 0.3s ease;
}
.rltd-pmp:hover {
  transform: translateY(-4px);
  box-shadow: 0 12px 30px rgba(229,53,231,0.12), 0 4px 8px rgba(0,0,0,0.05);
  border-color: rgba(229,53,231,0.22);
}
.rltd-pmp:hover::after { transform: scaleX(1); }
.rltd-pmp-tag {
  font-size: 0.63rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1px;
  color: var(--color-secondary);
  margin-bottom: var(--space-2);
}
.rltd-pmp-name {
  font-family: var(--font-heading);
  font-size: 1rem;
  font-weight: 800;
  color: #1a2340;
  margin-bottom: var(--space-2);
}
.rltd-pmp-note { font-size: 0.8rem; color: #4a5568; line-height: 1.6; margin-bottom: var(--space-4); }
.rltd-pmp-cta {
  display: inline-flex;
  align-items: center;
  gap: 4px;
  font-size: 0.76rem;
  font-weight: 800;
  color: var(--color-secondary);
}
.rltd-pmp-cta svg { width: 13px; height: 13px; }

/* ── 8. EMERGENCY CTA ── */
.cta-pmp {
  padding: var(--space-14) 0;
  background: linear-gradient(135deg, #08060e 0%, #0f1825 55%, #16062a 100%);
  position: relative;
  overflow: hidden;
  text-align: center;
}
.cta-pmp::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 52% 78% at 15% 50%, rgba(249,183,62,0.12) 0%, transparent 58%),
    radial-gradient(ellipse 50% 70% at 85% 50%, rgba(229,53,231,0.14) 0%, transparent 58%);
  pointer-events: none;
}
.cta-pmp-inner {
  position: relative;
  z-index: 1;
  max-width: 560px;
  margin: 0 auto;
}
.cta-pmp h2 {
  font-size: clamp(1.5rem, 2.8vw, 2.2rem);
  font-weight: 900;
  color: #fff;
  text-wrap: balance;
  margin-bottom: var(--space-3);
}
.cta-pmp h2 em { color: var(--color-secondary); font-style: normal; }
.cta-pmp p {
  font-size: 0.95rem;
  color: rgba(255,255,255,0.56);
  max-width: 440px;
  margin: 0 auto var(--space-7);
  line-height: 1.75;
}
.cta-pmp-btns {
  display: flex;
  gap: var(--space-3);
  justify-content: center;
  flex-wrap: wrap;
}

/* ── RESPONSIVE ── */
@media (max-width: 1024px) {
  .hero-pmp-inner { grid-template-columns: 1fr; }
  .hero-pmp-card { display: none; }
  .coverage-pmp-inner { grid-template-columns: 1fr; gap: var(--space-10); }
  .pmp-services-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 768px) {
  .coverage-pmp-stats { grid-template-columns: repeat(2, 1fr); }
  .related-pmp-grid { grid-template-columns: 1fr; }
}
@media (max-width: 600px) {
  .pmp-services-grid { grid-template-columns: 1fr; }
}
</style>

<!-- ═══ HERO ═══ -->
<section class="hero-pmp" aria-label="Pompano Beach bail bonds">
  <div class="pmp-orb pmp-orb-1"></div>
  <div class="pmp-orb pmp-orb-2"></div>
  <div class="pmp-orb pmp-orb-3"></div>

  <div class="container">
    <div class="hero-pmp-inner">
      <div class="hero-pmp-left">
        <span class="pmp-eyebrow">
          <span class="ready-dot"></span>
          North Broward · Pompano Beach · 24/7
        </span>
        <h1>
          <span class="hl-gold">Bail Bonds Near Me</span> in Pompano Beach, FL —<br>
          <span class="hl-mag">24/7 Fast Release</span>, North Broward
        </h1>
        <p class="hero-answer">Need a bondsman in Pompano Beach? The Broward County North Regional Jail is at 1000 Powerline Road — right in Pompano Beach. Mad Extra Bail Bonds works with North Regional staff daily and knows the faster release timelines at this North Broward facility. Call now, any hour.</p>
        <div class="hero-pmp-btns">
          <?php if (!empty($phone)): ?>
          <a href="tel:<?php echo preg_replace('/\D/','',$phone); ?>" class="btn-pmp-primary">
            <?php echo lucide_icon('phone'); ?> Call Now — 24/7
          </a>
          <?php else: ?>
          <a href="/contact/" class="btn-pmp-primary">
            <?php echo lucide_icon('zap'); ?> Get Help Now
          </a>
          <?php endif; ?>
          <a href="/contact/" class="btn-pmp-secondary">Free Consultation</a>
        </div>
        <div class="pmp-trust-row">
          <span class="pmp-badge"><?php echo lucide_icon('shield-check'); ?> Licensed FL Bondsman</span>
          <span class="pmp-badge"><?php echo lucide_icon('landmark'); ?> North Regional Jail</span>
          <span class="pmp-badge"><?php echo lucide_icon('clock'); ?> 24/7 Response</span>
          <span class="pmp-badge"><?php echo lucide_icon('zap'); ?> Faster Releases</span>
        </div>
      </div>

      <div class="hero-pmp-card">
        <p class="hfc-pmp-title">Pompano Beach Arrest?</p>
        <p class="hfc-pmp-sub">North Regional Jail — in Pompano Beach</p>
        <ul class="hfc-pmp-list">
          <li><span class="hfc-check-gold">✓</span> North Regional Jail — 1000 Powerline Rd</li>
          <li><span class="hfc-check-gold">✓</span> Smaller facility, faster misdemeanor releases</li>
          <li><span class="hfc-check-gold">✓</span> Harrah's casino-area arrests handled daily</li>
          <li><span class="hfc-check-gold">✓</span> North Regional Courthouse coordination</li>
          <li><span class="hfc-check-gold">✓</span> Licensed FL bondsman — 11+ years experience</li>
        </ul>
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo preg_replace('/\D/','',$phone); ?>" class="hfc-pmp-cta">
          <?php echo lucide_icon('phone'); ?> Call Now
        </a>
        <?php else: ?>
        <a href="/contact/" class="hfc-pmp-cta">Get Help Now</a>
        <?php endif; ?>
        <p class="hfc-pmp-disclaimer">Available 24 hours a day, 365 days a year</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SVG WAVE DIVIDER 1 — dark to light (gentle double S) ═══ -->
<div class="div-pmp-d2l" aria-hidden="true">
  <svg viewBox="0 0 1440 58" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,58 L0,20 Q200,8 480,35 Q720,55 960,22 Q1200,2 1440,38 L1440,58 Z" fill="#f4f6f9"/>
  </svg>
</div>

<!-- ═══ INTRO / ANSWER SECTION ═══ -->
<section class="intro-pmp" aria-label="Pompano Beach bail bond overview">
  <div class="container">
    <div class="intro-pmp-inner">
      <span class="pmp-sec-eyebrow">North Broward's Closest Bondsman</span>
      <h2>How long does release take from <em>North Regional Jail</em> in Pompano Beach?</h2>
      <div class="answer-block-pmp">
        <p>After bond is posted at the Broward County North Regional Jail at 1000 Powerline Road in Pompano Beach, misdemeanor releases typically take 3 to 6 hours — faster than the Broward Main Jail in Fort Lauderdale due to lower daily volume. Mad Extra Bail Bonds is a licensed Florida bail bondsman based in Delray Beach, serving Pompano Beach and all of North Broward County with 11 years of experience at both North Regional and Broward Main facilities.</p>
      </div>
      <p class="prose">Mad Extra Bail Bonds is a licensed Florida bail bondsman based in Delray Beach, serving Pompano Beach and all of North Broward County. The Broward County North Regional Jail at 1000 Powerline Road is our primary facility for Pompano Beach arrests — and it is a key differentiator in this part of Broward County. Many Pompano Beach arrests stay at North Regional rather than transferring to the Broward County Main Jail in Fort Lauderdale, which means faster processing and faster release times for defendants booked in Pompano Beach.</p>
      <p class="prose">Pompano Beach PD handles city-limit arrests in Pompano Beach. The Broward Sheriff's Office handles unincorporated areas east of US-1 and in Pompano Highlands. Both transport to North Regional Jail on Powerline Road. We work directly with North Regional staff and know the booking timeline, shift changes, and release procedures — that daily familiarity translates to faster action on every bond we post in Pompano Beach.</p>
      <p class="prose">The Atlantic Boulevard corridor, Sample Road, and the areas near Harrah's Pompano Beach casino are among the highest-arrest corridors in North Broward County. DUI on US-1, possession near the casino, and warrant-based arrests account for the largest share of Pompano Beach bonds we post. We handle all charge types, 24 hours a day, in East Pompano, Crystal Lake, Collier City, McNab, Cresthaven, and across Pompano Beach.</p>
    </div>
  </div>
</section>

<!-- ═══ SVG WAVE DIVIDER 2 — light to dark (steep rightward sweep) ═══ -->
<div class="div-pmp-l2d" aria-hidden="true">
  <svg viewBox="0 0 1440 55" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,38 Q360,0 720,28 Q1080,55 1440,15 L1440,55 L0,55 Z" fill="#08060e"/>
  </svg>
</div>

<!-- ═══ LOCAL COVERAGE SECTION ═══ -->
<section class="coverage-pmp" aria-label="Pompano Beach local jail and coverage details">
  <div class="coverage-pmp-deco"></div>
  <div class="container">
    <div class="coverage-pmp-inner">
      <div>
        <span class="coverage-pmp-eyebrow"><?php echo lucide_icon('map-pin'); ?> Pompano Beach Coverage Details</span>
        <h2>Which Pompano Beach neighborhoods and jails does <em>Mad Extra cover</em>?</h2>
        <div class="answer-block-dark-pmp">
          <p>We cover all of Pompano Beach — East Pompano beachside, Crystal Lake, Collier City, McNab, Cresthaven, Pompano Highlands, and the Sample Road corridor. Pompano Beach arrests primarily book at North Regional Jail on Powerline Road, which Mad Extra works with daily for faster processing compared to the Fort Lauderdale facility.</p>
        </div>
        <ul class="coverage-pmp-detail-list">
          <li class="cov-pmp-item">
            <div class="cov-pmp-icon"><?php echo lucide_icon('landmark'); ?></div>
            <div class="cov-pmp-content">
              <h4>Broward County North Regional Jail — 1000 Powerline Rd</h4>
              <p>The primary detention facility for North Broward County is right in Pompano Beach. Smaller daily volume than Broward Main in Fort Lauderdale means bonds process faster — misdemeanor releases often in 3 to 6 hours versus 4 to 10 hours at the Main Jail.</p>
            </div>
          </li>
          <li class="cov-pmp-item">
            <div class="cov-pmp-icon"><?php echo lucide_icon('scale'); ?></div>
            <div class="cov-pmp-content">
              <h4>North Regional Courthouse — 1600 W Hillsboro Blvd, Deerfield Beach</h4>
              <p>Pompano Beach criminal cases are heard at the North Regional Courthouse on Hillsboro Blvd, just north in Deerfield Beach. This is where first appearance hearings and subsequent court dates are scheduled. Mad Extra can advise families on what to expect after bond is posted.</p>
            </div>
          </li>
          <li class="cov-pmp-item">
            <div class="cov-pmp-icon"><?php echo lucide_icon('star'); ?></div>
            <div class="cov-pmp-content">
              <h4>Harrah's Pompano Beach Casino Area</h4>
              <p>The casino on Powerline Road and surrounding commercial area generates a steady pattern of gaming-adjacent arrests — disorderly conduct, DUI leaving the casino, and possession charges near the racing facility. These follow predictable booking patterns we handle regularly.</p>
            </div>
          </li>
          <li class="cov-pmp-item">
            <div class="cov-pmp-icon"><?php echo lucide_icon('map-pin'); ?></div>
            <div class="cov-pmp-content">
              <h4>Atlantic Blvd and US-1 DUI Corridor</h4>
              <p>The Atlantic Boulevard and US-1 commercial corridors in Pompano Beach are among the highest-DUI corridors in North Broward. Mad Extra handles Pompano Beach DUI bail bonds across the entire city, from the Pompano Beach Pier eastside to the Sample Road corridor in the north.</p>
            </div>
          </li>
        </ul>
      </div>
      <div>
        <div class="coverage-pmp-stats">
          <div class="pmp-stat-card">
            <span class="pmp-stat-num">3–6</span>
            <span class="pmp-stat-lbl">hrs misdemeanor release</span>
            <p class="pmp-stat-note">Faster than Broward Main — North Regional processes quicker</p>
          </div>
          <div class="pmp-stat-card">
            <span class="pmp-stat-num">8mi</span>
            <span class="pmp-stat-lbl">from our Delray office</span>
            <p class="pmp-stat-note">Mad Extra is the closest bondsman to North Broward County</p>
          </div>
          <div class="pmp-stat-card">
            <span class="pmp-stat-num">24/7</span>
            <span class="pmp-stat-lbl">live bondsman</span>
            <p class="pmp-stat-note">No voicemail — someone authorized to act picks up every call</p>
          </div>
          <div class="pmp-stat-card">
            <span class="pmp-stat-num">11+</span>
            <span class="pmp-stat-lbl">yrs Broward experience</span>
            <p class="pmp-stat-note">Active relationships with North Regional Jail staff since 2013</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SVG WAVE DIVIDER 3 — dark to white (low roll wave) ═══ -->
<div class="div-pmp-d2w" aria-hidden="true">
  <svg viewBox="0 0 1440 55" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,40 Q480,8 960,38 Q1200,55 1440,22 L1440,55 L0,55 Z" fill="#ffffff"/>
  </svg>
</div>

<!-- ═══ SERVICES SECTION ═══ -->
<section class="services-pmp" aria-label="Bail bond services available in Pompano Beach">
  <div class="container">
    <div class="services-pmp-header">
      <span class="pmp-sec-eyebrow">What We Handle in Pompano Beach</span>
      <h2>What bail bond services does Mad Extra provide in <em>Pompano Beach</em>?</h2>
      <p class="services-pmp-lead">Every charge type covered at North Regional Jail — DUI, drug, felony, misdemeanor, federal, warrant, and more. One bondsman for all of North Broward.</p>
    </div>
    <div class="pmp-services-grid" data-p1-dynamic>
      <?php foreach ($services as $svc): ?>
      <article class="pmp-svc-card">
        <div class="pmp-svc-icon"><?php echo lucide_icon($svc['icon']); ?></div>
        <p class="pmp-svc-name"><?php echo htmlspecialchars($svc['name']); ?></p>
        <p class="pmp-svc-desc"><?php echo htmlspecialchars($svc['description']); ?></p>
        <a href="/services/<?php echo htmlspecialchars($svc['slug']); ?>/" class="pmp-svc-link">
          Learn more <?php echo lucide_icon('arrow-right'); ?>
        </a>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══ SVG WAVE DIVIDER — white to light ═══ -->
<div class="div-pmp-w2l" aria-hidden="true">
  <svg viewBox="0 0 1440 40" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,10 Q720,40 1440,8 L1440,40 L0,40 Z" fill="#f4f6f9"/>
  </svg>
</div>

<!-- ═══ FAQ SECTION ═══ -->
<section class="faq-pmp" aria-label="Pompano Beach bail bond FAQ">
  <div class="container">
    <div class="faq-pmp-inner">
      <span class="pmp-sec-eyebrow">Common Questions</span>
      <h2>Frequently asked questions about <em>bail bonds in Pompano Beach</em></h2>
      <p class="faq-pmp-sub">Answers to what Pompano Beach families ask most — including questions specific to North Regional Jail and the North Broward Courthouse.</p>
      <div class="faq-pmp-list" role="list">
        <?php foreach ($_faqs as $faq): ?>
        <div class="faq-pmp-item" role="listitem">
          <button class="faq-pmp-q" aria-expanded="false" onclick="toggleFaqPmp(this)">
            <?php echo htmlspecialchars($faq['q']); ?>
            <span class="faq-pmp-icon" aria-hidden="true">+</span>
          </button>
          <div class="faq-pmp-a" role="region">
            <p><?php echo htmlspecialchars($faq['a']); ?></p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- ═══ RELATED AREAS ═══ -->
<section class="related-pmp" aria-label="Other North Broward service areas">
  <div class="container">
    <h3 class="related-pmp-h3">Other North Broward Areas We Serve</h3>
    <p class="related-pmp-sub">Mad Extra Bail Bonds covers all of Broward County — from Fort Lauderdale to the Palm Beach line.</p>
    <div class="related-pmp-grid">
      <a href="/areas/fort-lauderdale/" class="rltd-pmp">
        <p class="rltd-pmp-tag">Broward County</p>
        <p class="rltd-pmp-name">Fort Lauderdale</p>
        <p class="rltd-pmp-note">Broward County Main Jail at 555 SE 1st Ave — all FLPD and BSO city arrests. Spring Break and Las Olas corridor cases handled 24/7.</p>
        <span class="rltd-pmp-cta">View bail bonds in Fort Lauderdale <?php echo lucide_icon('arrow-right'); ?></span>
      </a>
      <a href="/areas/deerfield-beach/" class="rltd-pmp">
        <p class="rltd-pmp-tag">Broward County</p>
        <p class="rltd-pmp-name">Deerfield Beach</p>
        <p class="rltd-pmp-note">DBPD arrests route to North Regional just south on Powerline Rd. North Regional Courthouse is right in Deerfield Beach on Hillsboro Blvd.</p>
        <span class="rltd-pmp-cta">View bail bonds in Deerfield Beach <?php echo lucide_icon('arrow-right'); ?></span>
      </a>
      <a href="/areas/coral-springs/" class="rltd-pmp">
        <p class="rltd-pmp-tag">Broward County</p>
        <p class="rltd-pmp-name">Coral Springs</p>
        <p class="rltd-pmp-note">West Broward County city with BSO jurisdiction. Coral Springs PD arrests process through Broward County facilities covered by Mad Extra 24/7.</p>
        <span class="rltd-pmp-cta">View bail bonds in Coral Springs <?php echo lucide_icon('arrow-right'); ?></span>
      </a>
    </div>
  </div>
</section>

<!-- ═══ EMERGENCY CTA ═══ -->
<section class="cta-pmp" aria-label="Emergency Pompano Beach bail bond contact">
  <div class="container" style="position:relative;z-index:1">
    <div class="cta-pmp-inner">
      <h2>Need a bondsman at <em>North Regional Jail in Pompano Beach</em>?</h2>
      <p>We work with North Regional staff daily and know how to move faster than agencies that only know the Fort Lauderdale facility. One call starts the process — 24 hours a day, every day of the year.</p>
      <div class="cta-pmp-btns">
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo preg_replace('/\D/','',$phone); ?>" class="btn-pmp-primary">
          <?php echo lucide_icon('phone'); ?> Call Now — 24/7
        </a>
        <?php endif; ?>
        <a href="/contact/" class="btn-pmp-secondary">Send a Message</a>
      </div>
    </div>
  </div>
</section>

<script>
function toggleFaqPmp(btn) {
  const item = btn.closest('.faq-pmp-item');
  const isOpen = item.classList.contains('open');
  document.querySelectorAll('.faq-pmp-item.open').forEach(el => el.classList.remove('open'));
  document.querySelectorAll('.faq-pmp-q').forEach(el => el.setAttribute('aria-expanded', 'false'));
  if (!isOpen) {
    item.classList.add('open');
    btn.setAttribute('aria-expanded', 'true');
  }
}
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
