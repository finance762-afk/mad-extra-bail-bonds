<?php
/**
 * areas/west-palm-beach/index.php — West Palm Beach Service Area Page
 * Mad Extra Bail Bonds | Page One Insights v6.1
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Bail Bonds Near Me in West Palm Beach FL | Mad Extra Bail Bonds | 24/7';
$pageDescription = 'Need bail bonds in West Palm Beach? Mad Extra Bail Bonds is a licensed FL bondsman adjacent to the Palm Beach County Jail. Fastest possible release times — 24/7. Call now.';
$canonicalUrl    = $siteUrl . '/areas/west-palm-beach/';
$currentPage     = 'areas';

$_breadcrumb = generateBreadcrumbSchema([
    ['name' => 'Home',            'url' => $siteUrl . '/'],
    ['name' => 'Service Areas',   'url' => $siteUrl . '/areas/'],
    ['name' => 'West Palm Beach', 'url' => $siteUrl . '/areas/west-palm-beach/'],
]);

$_serviceSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'Service',
    '@id'         => $siteUrl . '/areas/west-palm-beach/#service-west-palm-beach',
    'name'        => 'Bail Bonds in West Palm Beach, FL',
    'description' => 'Licensed Florida bail bondsman serving West Palm Beach at the Palm Beach County Jail. Fastest possible release processing — 24/7, any charge, city and county arrests.',
    'url'         => $siteUrl . '/areas/west-palm-beach/',
    'provider'    => ['@id' => $siteUrl . '/#organization'],
    'areaServed'  => [
        ['@type' => 'City',  'name' => 'West Palm Beach, FL'],
        ['@type' => 'AdministrativeArea', 'name' => 'Palm Beach County, FL'],
    ],
    'serviceType' => 'Bail Bond Services',
];

$_faqs = [
    [
        'q' => 'How fast can you bail someone out of the Palm Beach County Jail in West Palm Beach?',
        'a' => 'We are highly familiar with the Palm Beach County Jail at 3228 Gun Club Road — we work there regularly. For misdemeanor charges, we can typically begin bond posting within 1 to 2 hours of your call, and the jail begins release processing immediately after. Total release time from arrest is commonly 3 to 6 hours for misdemeanors. Felony charges require a bond hearing at the Palm Beach County Courthouse at 205 North Dixie Highway, which adds time — we keep you updated through the entire process and can advise your family before the hearing.',
    ],
    [
        'q' => 'What\'s the difference between a West Palm Beach Police arrest and a Palm Beach County Sheriff arrest?',
        'a' => 'The West Palm Beach Police Department covers arrests within city limits. The Palm Beach County Sheriff\'s Office covers arrests in unincorporated Palm Beach County and provides services to smaller municipalities. Despite the different departments, all arrests in the West Palm Beach area — city and county — transfer to the same facility: the Palm Beach County Jail on Gun Club Road. We handle both WPBPD and PBSO arrests with equal speed because the destination is always the same jail.',
    ],
    [
        'q' => 'Can Mad Extra bail someone out of the West Palm Beach city jail?',
        'a' => 'There is no separate West Palm Beach city jail. All West Palm Beach Police Department arrests transfer to the Palm Beach County Jail at 3228 Gun Club Road — the county facility handles city arrests as well. There is no separate holding facility within West Palm Beach city limits for overnight custody. This means all bond posting for West Palm Beach arrests happens at the county jail on Gun Club Road.',
    ],
    [
        'q' => 'What happens at a first appearance hearing after an arrest in West Palm Beach?',
        'a' => 'First appearance hearings for West Palm Beach arrests are held at the Palm Beach County Courthouse at 205 North Dixie Highway in West Palm Beach, typically within 24 hours of arrest, or via video from the Palm Beach County Jail. At first appearance, a judge reviews the charges, may set or modify bail, and advises the defendant of their rights. We can advise your family on what to expect before the hearing and are ready to post bond the moment bail is confirmed or set.',
    ],
    [
        'q' => 'Does the Palm Beach County Jail accept bail bond payments after midnight?',
        'a' => 'Yes. The Palm Beach County Jail at 3228 Gun Club Road processes bond postings 24 hours a day, 7 days a week — there is no blackout window overnight or on weekends. The overnight and weekend staff know us by name. We can post bond at 2 AM on a Sunday exactly as efficiently as we can at noon on a Tuesday. If someone you know was just arrested in West Palm Beach, call us now — the time of day is not a barrier.',
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
   WEST PALM BEACH AREA PAGE — Mad Extra Bail Bonds
   Premium Tier | Dark/Neon Design System
   Key differentiator: WPB is home of the Palm Beach County
   Jail — shortest response times, deepest familiarity.
   Design uses a stronger amber-gold primary identity to signal
   "closest to the courthouse" authority vs magenta-led pages.
   Techniques: (1) layered ::before radial gradients — amber
   dominant this time, (2) noise texture ::after on hero,
   (3) floating neon orbs — larger central orb + two smaller,
   (4) glassmorphism sidebar card with amber gradient border,
   (5) SVG dividers — stepped/angular shapes unique to WPB page,
   (6) FAQ accordion with amber gold open-state highlight,
   (7) proximity advantage cards with gold icon rings,
   (8) gradient text — amber to white on proximity stat block
   ============================================================ */

/* ── 1. HERO ── */
.hero-wpb {
  position: relative;
  min-height: 62vh;
  display: flex;
  align-items: center;
  background: #09090f;
  overflow: hidden;
  padding-top: var(--nav-height, 72px);
  padding-bottom: var(--space-12);
}

/* Technique 1: layered ::before — amber dominant, magenta secondary */
.hero-wpb::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 55% 80% at 5% 45%, rgba(249,183,62,0.20) 0%, transparent 58%),
    radial-gradient(ellipse 48% 65% at 88% 18%, rgba(229,53,231,0.16) 0%, transparent 55%),
    radial-gradient(ellipse 40% 50% at 55% 95%, rgba(9,9,15,0.99) 0%, transparent 80%),
    radial-gradient(ellipse 30% 40% at 15% 90%, rgba(249,183,62,0.10) 0%, transparent 60%);
  pointer-events: none;
}

/* Technique 2: noise texture ::after */
.hero-wpb::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.035'/%3E%3C/svg%3E");
  opacity: 0.5;
  pointer-events: none;
}

/* Technique 3: floating neon orbs — larger central orb unique to WPB */
.wpb-orb {
  position: absolute;
  border-radius: 50%;
  pointer-events: none;
  will-change: transform;
}
.wpb-orb-1 {
  width: 600px; height: 600px;
  top: -200px; right: -100px;
  background: radial-gradient(circle, rgba(249,183,62,0.11) 0%, transparent 65%);
  animation: wpb-orb-drift 18s ease-in-out infinite;
}
.wpb-orb-2 {
  width: 260px; height: 260px;
  bottom: -30px; left: 4%;
  background: radial-gradient(circle, rgba(229,53,231,0.10) 0%, transparent 68%);
  animation: wpb-orb-drift 22s ease-in-out infinite reverse;
  animation-delay: -10s;
}
.wpb-orb-3 {
  width: 180px; height: 180px;
  top: 55%; left: 30%;
  background: radial-gradient(circle, rgba(249,183,62,0.07) 0%, transparent 70%);
  animation: wpb-orb-drift 26s ease-in-out infinite;
  animation-delay: -4s;
}
@keyframes wpb-orb-drift {
  0%,100% { transform: translate(0,0) scale(1); }
  30%     { transform: translate(14px, -18px) scale(1.04); }
  65%     { transform: translate(-10px, 12px) scale(0.97); }
}

.hero-wpb-inner {
  position: relative;
  z-index: 2;
  display: grid;
  grid-template-columns: 1fr 410px;
  gap: var(--space-12);
  align-items: center;
  padding: var(--space-14) 0;
  width: 100%;
}
.hero-wpb-left { max-width: 640px; }

.wpb-eyebrow {
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
  border: 1px solid rgba(249,183,62,0.42);
  border-radius: var(--radius-full);
  background: rgba(249,183,62,0.07);
  margin-bottom: var(--space-5);
}
.wpb-eyebrow .pulse-dot {
  width: 7px; height: 7px;
  border-radius: 50%;
  background: var(--color-accent);
  box-shadow: 0 0 8px var(--color-accent);
  animation: wpb-pulse 2s ease-in-out infinite;
  flex-shrink: 0;
}
@keyframes wpb-pulse {
  0%,100% { opacity:1; transform:scale(1); }
  50%     { opacity:.5; transform:scale(.7); }
}

.hero-wpb h1 {
  font-size: clamp(1.85rem, 3.8vw, 3.1rem);
  font-weight: 900;
  color: var(--color-white);
  line-height: 1.1;
  margin-bottom: var(--space-5);
  letter-spacing: -0.025em;
  text-wrap: balance;
}
.hero-wpb h1 .hl-gold { color: var(--color-accent); text-shadow: 0 0 28px rgba(249,183,62,0.60); }
.hero-wpb h1 .hl-mag  { color: var(--color-secondary); text-shadow: 0 0 28px rgba(229,53,231,0.55); }

.hero-wpb-answer {
  font-size: 1rem;
  color: rgba(255,255,255,0.68);
  line-height: 1.82;
  margin-bottom: var(--space-7);
  max-width: 560px;
}

.hero-wpb-btns {
  display: flex;
  gap: var(--space-3);
  flex-wrap: wrap;
  margin-bottom: var(--space-7);
}
.btn-wpb-primary {
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
  box-shadow: 0 0 24px rgba(249,183,62,0.48), 0 4px 14px rgba(0,0,0,0.3);
  transition: all var(--transition-base);
}
.btn-wpb-primary:hover {
  background: #fdc840;
  box-shadow: 0 0 44px rgba(249,183,62,0.72), 0 8px 22px rgba(0,0,0,0.35);
  transform: translateY(-2px);
  color: #0a0d1a;
}
.btn-wpb-primary svg { width: 15px; height: 15px; }
.btn-wpb-secondary {
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
.btn-wpb-secondary:hover {
  background: var(--color-secondary);
  color: var(--color-white);
  border-color: var(--color-secondary);
  box-shadow: 0 0 26px rgba(229,53,231,0.4);
  transform: translateY(-2px);
}

.wpb-trust-row {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-2);
}
.wpb-trust-badge {
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
.wpb-trust-badge svg { width: 11px; height: 11px; color: var(--color-accent); flex-shrink: 0; }

/* Technique 4: glassmorphism sidebar — amber-dominant gradient border */
.hero-wpb-card {
  position: relative;
  background: rgba(255,255,255,0.04);
  border: 1px solid rgba(255,255,255,0.11);
  border-radius: 18px;
  padding: var(--space-7) var(--space-6);
  backdrop-filter: blur(14px);
  -webkit-backdrop-filter: blur(14px);
}
.hero-wpb-card::before {
  content: '';
  position: absolute;
  inset: -1px;
  border-radius: 19px;
  background: linear-gradient(135deg, rgba(249,183,62,0.45) 0%, rgba(229,53,231,0.22) 60%, transparent 100%);
  z-index: -1;
  opacity: 0.5;
}
.wpbc-title {
  font-family: var(--font-heading);
  font-size: 1.05rem;
  font-weight: 800;
  color: var(--color-white);
  margin-bottom: var(--space-2);
}
.wpbc-sub {
  font-size: 0.68rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  color: var(--color-accent);
  margin-bottom: var(--space-5);
}
.wpbc-list {
  list-style: none;
  padding: 0;
  margin: 0 0 var(--space-6);
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
}
.wpbc-list li {
  display: flex;
  align-items: flex-start;
  gap: var(--space-2);
  font-size: 0.85rem;
  color: rgba(255,255,255,0.80);
  line-height: 1.5;
}
.wpbc-check {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  width: 18px; height: 18px;
  border-radius: 50%;
  background: linear-gradient(135deg, var(--color-accent), #e89a28);
  margin-top: 2px;
  font-size: 0.6rem;
  color: #0a0d1a;
  font-weight: 900;
}
.wpbc-cta {
  display: block;
  width: 100%;
  padding: 13px;
  background: linear-gradient(135deg, var(--color-accent) 0%, #e89a28 100%);
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
.wpbc-cta:hover {
  box-shadow: 0 8px 34px rgba(249,183,62,0.62);
  transform: translateY(-1px);
  color: #0a0d1a;
}
.wpbc-disclaimer {
  text-align: center;
  font-size: 0.6rem;
  color: rgba(255,255,255,0.3);
  margin-top: var(--space-3);
  line-height: 1.5;
}

/* ── 2. SVG DIVIDERS — stepped/angular shapes for WPB ── */
.wpb-div-dark-light { line-height: 0; background: #09090f; }
.wpb-div-dark-light svg { display: block; width: 100%; }
.wpb-div-light-dark { line-height: 0; background: #f4f6f9; }
.wpb-div-light-dark svg { display: block; width: 100%; }
.wpb-div-dark-white { line-height: 0; background: #09090f; }
.wpb-div-dark-white svg { display: block; width: 100%; }
.wpb-div-white-light { line-height: 0; background: #ffffff; }
.wpb-div-white-light svg { display: block; width: 100%; }

/* ── 3. INTRO / ANSWER SECTION ── */
.wpb-intro {
  padding: var(--space-16) 0;
  background: #f4f6f9;
}
.wpb-intro-inner {
  max-width: 860px;
  margin: 0 auto;
}
.wpb-section-eyebrow {
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
.wpb-intro h2 {
  font-size: clamp(1.7rem, 3vw, 2.4rem);
  font-weight: 900;
  color: var(--color-dark);
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.02em;
  margin-bottom: var(--space-4);
}
.wpb-intro h2 em { color: var(--color-secondary); font-style: normal; }
.wpb-answer-block {
  background: linear-gradient(135deg, rgba(249,183,62,0.07), rgba(229,53,231,0.04));
  border-left: 3px solid var(--color-accent);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  padding: var(--space-5) var(--space-6);
  margin-bottom: var(--space-6);
}
.wpb-answer-block p {
  font-size: 0.95rem;
  color: var(--color-dark);
  line-height: 1.8;
  margin: 0;
  font-style: italic;
}
.wpb-intro p {
  font-size: 0.95rem;
  color: var(--color-gray);
  line-height: 1.82;
  margin-bottom: var(--space-4);
}

/* ── 4. LOCAL COVERAGE / PROXIMITY SECTION (dark) ── */
.wpb-coverage {
  padding: var(--space-16) 0;
  background: linear-gradient(155deg, #09090f 0%, #0b0518 55%, #0a1422 100%);
  position: relative;
  overflow: hidden;
}
.wpb-coverage::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 45% 70% at 3% 45%, rgba(249,183,62,0.10) 0%, transparent 62%),
    radial-gradient(ellipse 40% 65% at 97% 55%, rgba(229,53,231,0.09) 0%, transparent 62%);
  pointer-events: none;
}
/* Floating orb blob in coverage section */
.wpb-coverage-blob {
  position: absolute;
  width: 400px; height: 400px;
  top: 20%; right: -100px;
  border-radius: 50%;
  background: radial-gradient(circle, rgba(249,183,62,0.07) 0%, transparent 70%);
  pointer-events: none;
  animation: wpb-orb-drift 22s ease-in-out infinite;
  animation-delay: -8s;
}
.wpb-coverage-inner {
  position: relative;
  z-index: 1;
}
.wpb-coverage-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-14);
  align-items: start;
}
.wpb-coverage-eyebrow {
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
.wpb-coverage h2 {
  font-size: clamp(1.6rem, 3vw, 2.3rem);
  font-weight: 900;
  color: var(--color-white);
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.02em;
  margin-bottom: var(--space-5);
}
.wpb-coverage h2 em { color: var(--color-accent); font-style: normal; }
.wpb-coverage-body {
  font-size: 0.92rem;
  color: rgba(255,255,255,0.60);
  line-height: 1.82;
  margin-bottom: var(--space-4);
}

/* Technique 8: gradient text — amber-to-white on stat numerals */
.wpb-stat-row {
  display: flex;
  gap: var(--space-8);
  margin-top: var(--space-8);
  flex-wrap: wrap;
}
.wpb-stat-item {}
.wpb-stat-num {
  font-family: var(--font-heading);
  font-size: 2.2rem;
  font-weight: 900;
  line-height: 1;
  background: linear-gradient(135deg, var(--color-accent) 0%, #ffffff 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  margin-bottom: var(--space-1);
}
.wpb-stat-label {
  font-size: 0.7rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1px;
  color: rgba(255,255,255,0.4);
}

/* Technique 7: proximity advantage cards — gold icon rings (distinct from magenta on other pages) */
.wpb-local-panel {
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
}
.wpb-signal-card {
  background: rgba(255,255,255,0.04);
  border: 1px solid rgba(255,255,255,0.07);
  border-radius: 14px;
  padding: var(--space-5) var(--space-6);
  transition: border-color var(--transition-base), background var(--transition-base);
  position: relative;
  overflow: hidden;
}
.wpb-signal-card::before {
  content: '';
  position: absolute;
  left: 0; top: 0; bottom: 0;
  width: 2px;
  background: linear-gradient(180deg, var(--color-accent), transparent);
  opacity: 0;
  transition: opacity var(--transition-base);
}
.wpb-signal-card:hover {
  border-color: rgba(249,183,62,0.28);
  background: rgba(255,255,255,0.06);
}
.wpb-signal-card:hover::before { opacity: 1; }
.wpb-signal-card h4 {
  font-family: var(--font-heading);
  font-size: 0.85rem;
  font-weight: 800;
  color: var(--color-accent);
  margin-bottom: var(--space-2);
  display: flex;
  align-items: center;
  gap: var(--space-2);
}
.wpb-signal-card h4 svg { width: 15px; height: 15px; flex-shrink: 0; }
.wpb-signal-card p {
  font-size: 0.82rem;
  color: rgba(255,255,255,0.55);
  line-height: 1.7;
  margin: 0;
}

/* ── 5. SERVICES GRID (white) ── */
.wpb-services {
  padding: var(--space-16) 0;
  background: var(--color-white);
}
.wpb-services-header {
  text-align: center;
  margin-bottom: var(--space-12);
}
.wpb-services h2 {
  font-size: clamp(1.7rem, 3vw, 2.4rem);
  font-weight: 900;
  color: var(--color-dark);
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.02em;
  margin-bottom: var(--space-3);
}
.wpb-services h2 em { color: var(--color-secondary); font-style: normal; }
.wpb-services-lead {
  font-size: 0.95rem;
  color: var(--color-gray);
  max-width: 520px;
  margin: 0 auto;
  line-height: 1.75;
}
.wpb-services-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
}
.wpb-svc-card {
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
.wpb-svc-card::after {
  content: '';
  position: absolute;
  bottom: 0; left: 0; right: 0;
  height: 2px;
  background: linear-gradient(90deg, var(--color-accent), var(--color-secondary));
  transform: scaleX(0);
  transform-origin: left;
  transition: transform 0.3s ease;
}
.wpb-svc-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 14px 36px rgba(249,183,62,0.12), 0 4px 10px rgba(0,0,0,0.06);
  border-color: rgba(249,183,62,0.24);
}
.wpb-svc-card:hover::after { transform: scaleX(1); }
.wpb-svc-icon {
  width: 50px; height: 50px;
  border-radius: 50%;
  background: linear-gradient(135deg, rgba(249,183,62,0.12), rgba(229,53,231,0.07));
  border: 1px solid rgba(249,183,62,0.20);
  display: flex; align-items: center; justify-content: center;
  color: var(--color-accent);
}
.wpb-svc-icon svg { width: 22px; height: 22px; }
.wpb-svc-card h3 {
  font-family: var(--font-heading);
  font-size: 0.92rem;
  font-weight: 800;
  color: var(--color-dark);
  margin: 0;
}
.wpb-svc-card p {
  font-size: 0.82rem;
  color: var(--color-gray);
  line-height: 1.68;
  margin: 0;
  flex: 1;
}
.wpb-svc-link {
  display: inline-flex;
  align-items: center;
  gap: 4px;
  font-size: 0.78rem;
  font-weight: 800;
  color: var(--color-accent);
  margin-top: auto;
  transition: gap var(--transition-fast);
}
.wpb-svc-link:hover { gap: 8px; }
.wpb-svc-link svg { width: 14px; height: 14px; }

/* ── 6. FAQ SECTION ── */
.wpb-faq {
  padding: var(--space-16) 0;
  background: #f4f6f9;
}
.wpb-faq-inner {
  max-width: 820px;
  margin: 0 auto;
}
.wpb-faq h2 {
  font-size: clamp(1.6rem, 2.8vw, 2.2rem);
  font-weight: 900;
  color: var(--color-dark);
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.02em;
  margin-bottom: var(--space-3);
}
.wpb-faq h2 em { color: var(--color-secondary); font-style: normal; }
.wpb-faq-sub {
  font-size: 0.92rem;
  color: var(--color-gray);
  margin-bottom: var(--space-10);
  line-height: 1.75;
}
.wpb-faq-list {
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
}

/* Technique 6: FAQ accordion — amber gold open-state (unique to WPB page) */
.wpb-faq-item {
  background: var(--color-white);
  border: 1px solid rgba(249,183,62,0.14);
  border-radius: var(--radius-lg);
  overflow: hidden;
  transition: border-color var(--transition-base), box-shadow var(--transition-base);
}
.wpb-faq-item.open {
  border-color: rgba(249,183,62,0.45);
  box-shadow: 0 4px 20px rgba(249,183,62,0.10);
}
.wpb-faq-q {
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
.wpb-faq-q:hover { color: #a06900; }
.wpb-faq-item.open .wpb-faq-q { color: #a06900; }
.wpb-faq-icon {
  flex-shrink: 0;
  width: 26px; height: 26px;
  border-radius: 50%;
  background: rgba(249,183,62,0.10);
  border: 1px solid rgba(249,183,62,0.22);
  display: flex; align-items: center; justify-content: center;
  transition: background var(--transition-base), transform var(--transition-base);
  font-size: 0.95rem;
  color: #a06900;
  font-weight: 900;
}
.wpb-faq-item.open .wpb-faq-icon {
  background: var(--color-accent);
  color: #0a0d1a;
  transform: rotate(45deg);
}
.wpb-faq-a {
  display: none;
  padding: 0 var(--space-6) var(--space-5);
  font-size: 0.88rem;
  color: var(--color-gray);
  line-height: 1.8;
  border-top: 1px solid rgba(249,183,62,0.10);
  padding-top: var(--space-4);
}
.wpb-faq-item.open .wpb-faq-a { display: block; }

/* ── 7. RELATED AREAS ── */
.wpb-related {
  padding: var(--space-14) 0;
  background: var(--color-white);
}
.wpb-related-header {
  text-align: center;
  margin-bottom: var(--space-10);
}
.wpb-related h3 {
  font-size: clamp(1.5rem, 2.5vw, 2rem);
  font-weight: 900;
  color: var(--color-dark);
  text-wrap: balance;
  margin-bottom: var(--space-2);
}
.wpb-related-sub {
  font-size: 0.9rem;
  color: var(--color-gray);
}
.wpb-related-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
}
.wpb-area-card {
  background: linear-gradient(145deg, #0a0a18, #14082a);
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
.wpb-area-card::before {
  content: '';
  position: absolute;
  bottom: 0; left: 0; right: 0;
  height: 2px;
  background: linear-gradient(90deg, var(--color-accent), var(--color-secondary));
  transform: scaleX(0);
  transform-origin: left;
  transition: transform 0.3s ease;
}
.wpb-area-card:hover {
  transform: translateY(-4px);
  box-shadow: 0 14px 36px rgba(249,183,62,0.15), 0 4px 12px rgba(0,0,0,0.3);
  border-color: rgba(249,183,62,0.25);
}
.wpb-area-card:hover::before { transform: scaleX(1); }
.wpb-area-card-icon {
  width: 42px; height: 42px;
  border-radius: 10px;
  background: rgba(255,255,255,0.05);
  border: 1px solid rgba(255,255,255,0.10);
  display: flex; align-items: center; justify-content: center;
  color: var(--color-accent);
}
.wpb-area-card-icon svg { width: 20px; height: 20px; }
.wpb-area-card h4 {
  font-family: var(--font-heading);
  font-size: 0.95rem;
  font-weight: 800;
  color: var(--color-white);
  margin: 0;
}
.wpb-area-card p {
  font-size: 0.8rem;
  color: rgba(255,255,255,0.52);
  line-height: 1.65;
  margin: 0;
  flex: 1;
}
.wpb-area-card-link {
  display: inline-flex;
  align-items: center;
  gap: 4px;
  font-size: 0.78rem;
  font-weight: 800;
  color: var(--color-accent);
  transition: gap var(--transition-fast);
}
.wpb-area-card-link:hover { gap: 8px; }
.wpb-area-card-link svg { width: 13px; height: 13px; }

/* ── 8. EMERGENCY CTA (dark) ── */
.wpb-cta {
  padding: var(--space-14) 0;
  background: linear-gradient(135deg, #09090f 0%, #160820 55%, #0a1322 100%);
  position: relative;
  overflow: hidden;
  text-align: center;
}
.wpb-cta::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 60% 85% at 30% 50%, rgba(249,183,62,0.12) 0%, transparent 60%),
    radial-gradient(ellipse 50% 75% at 70% 50%, rgba(229,53,231,0.09) 0%, transparent 60%);
  pointer-events: none;
}
.wpb-cta-inner {
  position: relative;
  z-index: 1;
  max-width: 580px;
  margin: 0 auto;
}
.wpb-cta h2 {
  font-size: clamp(1.5rem, 2.8vw, 2.2rem);
  font-weight: 900;
  color: var(--color-white);
  text-wrap: balance;
  margin-bottom: var(--space-3);
}
.wpb-cta h2 em { color: var(--color-accent); font-style: normal; }
.wpb-cta p {
  font-size: 0.95rem;
  color: rgba(255,255,255,0.58);
  max-width: 460px;
  margin: 0 auto var(--space-7);
  line-height: 1.75;
}
.wpb-cta-btns {
  display: flex;
  gap: var(--space-3);
  justify-content: center;
  flex-wrap: wrap;
}

/* ── RESPONSIVE ── */
@media (max-width: 1024px) {
  .hero-wpb-inner { grid-template-columns: 1fr; }
  .hero-wpb-card { display: none; }
  .wpb-coverage-grid { grid-template-columns: 1fr; gap: var(--space-10); }
}
@media (max-width: 768px) {
  .wpb-services-grid { grid-template-columns: repeat(2, 1fr); }
  .wpb-related-grid { grid-template-columns: 1fr; }
  .wpb-stat-row { gap: var(--space-6); }
}
@media (max-width: 480px) {
  .wpb-services-grid { grid-template-columns: 1fr; }
}
</style>

<main id="main-content">

<!-- ═══ HERO ═══ -->
<section class="hero-wpb" aria-label="Bail bonds in West Palm Beach, FL">
  <div class="wpb-orb wpb-orb-1"></div>
  <div class="wpb-orb wpb-orb-2"></div>
  <div class="wpb-orb wpb-orb-3"></div>

  <div class="container">
    <div class="hero-wpb-inner">
      <div class="hero-wpb-left">
        <span class="wpb-eyebrow">
          <span class="pulse-dot"></span>
          West Palm Beach, FL — Home of the County Jail
        </span>
        <h1>Bail Bonds Near Me in <span class="hl-gold">West Palm Beach, FL</span> — Local Bondsman at the <span class="hl-mag">County Jail 24/7</span></h1>
        <p class="hero-wpb-answer">Need bail bonds in West Palm Beach? Mad Extra Bail Bonds is a licensed Florida bail bondsman with deep familiarity at the Palm Beach County Jail on Gun Club Road — the facility that processes every West Palm Beach arrest. We post bond faster here than anywhere else in our coverage area.</p>
        <div class="hero-wpb-btns">
          <?php if (!empty($phone)): ?>
          <a href="tel:<?php echo preg_replace('/\D/','', $phone); ?>" class="btn-wpb-primary">
            <?php echo lucide_icon('phone'); ?> Call Now — 24/7
          </a>
          <?php else: ?>
          <a href="/contact/" class="btn-wpb-primary">
            <?php echo lucide_icon('zap'); ?> Get Help Now
          </a>
          <?php endif; ?>
          <a href="/contact/" class="btn-wpb-secondary">Free Consultation</a>
        </div>
        <div class="wpb-trust-row">
          <span class="wpb-trust-badge"><?php echo lucide_icon('landmark'); ?> PBCJ On Gun Club Rd</span>
          <span class="wpb-trust-badge"><?php echo lucide_icon('clock'); ?> 24/7 — 365 Days</span>
          <span class="wpb-trust-badge"><?php echo lucide_icon('shield-check'); ?> Licensed FL Bondsman</span>
          <span class="wpb-trust-badge"><?php echo lucide_icon('zap'); ?> Fastest Response Time</span>
        </div>
      </div>

      <!-- Technique 4: Glassmorphism sidebar card — amber border dominant -->
      <div class="hero-wpb-card">
        <p class="wpbc-title">Arrested in West Palm Beach?</p>
        <p class="wpbc-sub">We Know the Gun Club Rd Facility</p>
        <ul class="wpbc-list">
          <li><span class="wpbc-check">✓</span> PBCJ on Gun Club Road — our most-worked facility</li>
          <li><span class="wpbc-check">✓</span> Overnight &amp; weekend jail staff know us by name</li>
          <li><span class="wpbc-check">✓</span> WPB city and PBSO county arrests — same jail, we handle both</li>
          <li><span class="wpbc-check">✓</span> Fastest bond posting times of any facility we cover</li>
          <li><span class="wpbc-check">✓</span> PBC Courthouse at 205 N Dixie Hwy — first appearances covered</li>
        </ul>
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo preg_replace('/\D/','', $phone); ?>" class="wpbc-cta">
          <?php echo lucide_icon('phone'); ?> Call Now
        </a>
        <?php else: ?>
        <a href="/contact/" class="wpbc-cta">Get Help Now</a>
        <?php endif; ?>
        <p class="wpbc-disclaimer">Available every hour — 365 days a year</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SVG DIVIDER: dark → light (stepped/angular — unique to WPB) ═══ -->
<div class="wpb-div-dark-light" aria-hidden="true">
  <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,56 L0,28 L360,10 L720,40 L1080,8 L1440,30 L1440,56 Z" fill="#f4f6f9"/>
  </svg>
</div>

<!-- ═══ INTRO / ANSWER SECTION ═══ -->
<section class="wpb-intro" aria-label="How bail bonds work in West Palm Beach, FL">
  <div class="container">
    <div class="wpb-intro-inner">
      <span class="wpb-section-eyebrow">How It Works in West Palm Beach</span>
      <h2>How do bail bonds work in <em>West Palm Beach, FL</em>?</h2>
      <div class="wpb-answer-block">
        <p>Bail bonds in West Palm Beach work like this: arrests by the West Palm Beach Police Department or the Palm Beach County Sheriff's Office are processed directly at the Palm Beach County Jail at 3228 Gun Club Road in West Palm Beach — no transport required. Call us, we verify the bond amount, and we post it. West Palm Beach is where the county jail is, which means we can post bond faster here than in any other city we serve.</p>
      </div>
      <p>Mad Extra Bail Bonds is a licensed Florida bail bondsman based in Delray Beach, serving West Palm Beach and all of Palm Beach County. West Palm Beach is unique in our coverage area because it is the physical location of the Palm Beach County Jail on Gun Club Road. Defendants arrested in West Palm Beach stay at this facility from booking through release — there is no transport step that adds hours to the timeline, as there is for arrests made in Boca Raton, Delray Beach, or other cities in the county.</p>
      <p>West Palm Beach arrests are made by two primary agencies: the West Palm Beach Police Department for arrests within city limits, and the Palm Beach County Sheriff's Office for unincorporated areas and highway incidents. Despite the different agencies, both send defendants to the same facility — PBCJ on Gun Club Road. We handle both without distinction.</p>
      <p>West Palm Beach's nightlife on Clematis Street and The Square (formerly CityPlace) generates significant weekend arrest activity — DUI, disorderly conduct, assault, and drug charges peak on Friday and Saturday nights. The Northwood Village neighborhood, Flamingo Park, and SoDo see a mix of situations as these areas develop. The 45th Street corridor has its own distinct arrest patterns. Whatever the neighborhood, whatever the hour — we move immediately.</p>
    </div>
  </div>
</section>

<!-- ═══ SVG DIVIDER: light → dark (angled downward) ═══ -->
<div class="wpb-div-light-dark" aria-hidden="true">
  <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,0 L1440,42 L1440,56 L0,56 Z" fill="#09090f"/>
  </svg>
</div>

<!-- ═══ LOCAL COVERAGE / PROXIMITY SECTION ═══ -->
<section class="wpb-coverage" aria-label="Local coverage and proximity advantage in West Palm Beach">
  <div class="wpb-coverage-blob" aria-hidden="true"></div>
  <div class="container wpb-coverage-inner">
    <div class="wpb-coverage-grid">
      <div>
        <span class="wpb-coverage-eyebrow"><?php echo lucide_icon('map-pin'); ?> Proximity Advantage</span>
        <h2>Why does it matter that we post bail at <em>Gun Club Road</em> regularly?</h2>
        <p class="wpb-coverage-body">The Palm Beach County Jail at 3228 Gun Club Road in West Palm Beach is where every Palm Beach County arrest — from Boca Raton, Delray Beach, Lake Worth, Boynton Beach, and beyond — ultimately lands. It is also where West Palm Beach city arrests go without any transport step. We work there constantly.</p>
        <p class="wpb-coverage-body">Familiarity with jail staff, knowledge of which windows handle bond posting, understanding of the processing pace on different shifts — these factors directly affect how quickly a bond gets posted and how soon your loved one is released. The overnight and weekend staff know us. That relationship matters at 2 AM on a Sunday.</p>
        <p class="wpb-coverage-body">The Palm Beach County Courthouse is at 205 North Dixie Highway in West Palm Beach — also the location of first appearance hearings for West Palm Beach defendants. When a defendant's bail needs to be set or modified at a first appearance hearing, we can advise your family beforehand and post bond immediately after the hearing concludes.</p>
        <p class="wpb-coverage-body">El Cid, Grandview Heights, and West End residential communities in West Palm Beach each have different dynamics. The Kravis Center and Palm Beach County Convention Center area, the Norton Museum district, and the Prospect Park neighborhoods all fall within the West Palm Beach Police Department's jurisdiction. We cover every one of them.</p>

        <div class="wpb-stat-row">
          <div class="wpb-stat-item">
            <div class="wpb-stat-num">3–6 hrs</div>
            <div class="wpb-stat-label">Typical WPB misdemeanor release</div>
          </div>
          <div class="wpb-stat-item">
            <div class="wpb-stat-num">0 mi</div>
            <div class="wpb-stat-label">Transport needed from arrest to jail</div>
          </div>
          <div class="wpb-stat-item">
            <div class="wpb-stat-num">24/7</div>
            <div class="wpb-stat-label">PBCJ bond processing</div>
          </div>
        </div>
      </div>

      <!-- Technique 7: proximity advantage cards — gold icon rings -->
      <div class="wpb-local-panel">
        <div class="wpb-signal-card">
          <h4><?php echo lucide_icon('landmark'); ?> Palm Beach County Jail</h4>
          <p>3228 Gun Club Road, West Palm Beach — the hub for every Palm Beach County arrest. West Palm Beach defendants process here with no transport delay. We post bond here around the clock and know the facility comprehensively.</p>
        </div>
        <div class="wpb-signal-card">
          <h4><?php echo lucide_icon('scale'); ?> Palm Beach County Courthouse</h4>
          <p>205 N Dixie Highway, West Palm Beach — criminal court, first appearances, bond hearings. We can advise your family before the hearing and be ready to post bond the moment bail is set or confirmed by the judge.</p>
        </div>
        <div class="wpb-signal-card">
          <h4><?php echo lucide_icon('gavel'); ?> Federal Building Coverage</h4>
          <p>The Paul G. Rogers Federal Building in West Palm Beach handles federal court appearances for Palm Beach County. Federal bail bonds are a different process — we handle them and can explain what a federal bail hearing involves before it happens.</p>
        </div>
        <div class="wpb-signal-card">
          <h4><?php echo lucide_icon('clock'); ?> No Blackout Hours at PBCJ</h4>
          <p>The Palm Beach County Jail accepts bond postings 24 hours a day, 7 days a week, 365 days a year — including Christmas, Thanksgiving, and every holiday. We work those shifts regularly. The time of arrest is never a barrier.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SVG DIVIDER: dark → white (smooth sweeping curve) ═══ -->
<div class="wpb-div-dark-white" aria-hidden="true">
  <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,0 L0,20 C360,56 1080,0 1440,35 L1440,56 L0,56 Z" fill="#ffffff"/>
  </svg>
</div>

<!-- ═══ SERVICES GRID SECTION ═══ -->
<section class="wpb-services" aria-label="Bail bond services available in West Palm Beach">
  <div class="container">
    <div class="wpb-services-header">
      <span class="wpb-section-eyebrow">Services in West Palm Beach</span>
      <h2>What bail bond services does Mad Extra provide in <em>West Palm Beach, FL</em>?</h2>
      <p class="wpb-services-lead">Every bail bond service is available for West Palm Beach arrests — from Clematis Street DUI to felony charges at the county courthouse, posted directly at PBCJ on Gun Club Road.</p>
    </div>
    <div class="wpb-services-grid">
      <?php
      $wpbServices = [
        ['slug' => 'bail-bonds',           'name' => 'Bail Bond Services',      'icon' => 'shield',         'desc' => 'General bail bonds for West Palm Beach city and county arrests — we post at PBCJ on Gun Club Road faster than any bondsman not based in Palm Beach County.'],
        ['slug' => 'dui-bail-bonds',        'name' => 'DUI Bail Bonds',          'icon' => 'car',            'desc' => 'Clematis Street DUI arrests on Friday and Saturday nights are among our most common West Palm Beach situations — we know exactly how these process at PBCJ.'],
        ['slug' => 'felony-bail-bonds',     'name' => 'Felony Bail Bonds',       'icon' => 'gavel',          'desc' => 'Felony bond hearings at the Palm Beach County Courthouse at 205 N Dixie — we advise families before the hearing and post bond immediately after.'],
        ['slug' => 'misdemeanor-bail-bonds','name' => 'Misdemeanor Bail Bonds',  'icon' => 'file-text',      'desc' => 'West Palm Beach misdemeanor releases are among our fastest — no transport delays, PBCJ is right here. Most complete within 3 to 6 hours of bond posting.'],
        ['slug' => 'federal-bail-bonds',    'name' => 'Federal Bail Bonds',      'icon' => 'landmark',       'desc' => 'Federal charges at the Paul G. Rogers Federal Building in West Palm Beach — federal bail bonds handled with experience in Palm Beach County federal court.'],
        ['slug' => 'drug-charge-bail-bonds','name' => 'Drug Charge Bail Bonds',  'icon' => 'alert-triangle', 'desc' => 'Drug arrests in the 45th Street corridor and other West Palm Beach locations — confidential, fast, and direct to PBCJ bond posting.'],
      ];
      foreach ($wpbServices as $svc): ?>
      <div class="wpb-svc-card">
        <div class="wpb-svc-icon"><?php echo lucide_icon($svc['icon']); ?></div>
        <h3><?php echo $svc['name']; ?></h3>
        <p><?php echo $svc['desc']; ?></p>
        <a href="/services/<?php echo $svc['slug']; ?>/" class="wpb-svc-link">
          Learn more <?php echo lucide_icon('arrow-right'); ?>
        </a>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══ SVG DIVIDER: white → light ═══ -->
<div class="wpb-div-white-light" aria-hidden="true">
  <svg viewBox="0 0 1440 40" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,0 L720,38 L1440,0 L1440,40 L0,40 Z" fill="#f4f6f9"/>
  </svg>
</div>

<!-- ═══ FAQ SECTION ═══ -->
<section class="wpb-faq" aria-label="West Palm Beach bail bond FAQ">
  <div class="container">
    <div class="wpb-faq-inner">
      <span class="wpb-section-eyebrow">Common Questions</span>
      <h2>Frequently asked questions about <em>bail bonds in West Palm Beach, FL</em></h2>
      <p class="wpb-faq-sub">WPB-specific answers about the Palm Beach County Jail, WPBPD versus PBSO arrests, and what to expect from first appearance hearings at 205 N Dixie.</p>

      <div class="wpb-faq-list" role="list">
        <?php foreach ($_faqs as $faq): ?>
        <div class="wpb-faq-item" role="listitem">
          <button class="wpb-faq-q" aria-expanded="false" onclick="toggleWpbFaq(this)">
            <?php echo htmlspecialchars($faq['q']); ?>
            <span class="wpb-faq-icon" aria-hidden="true">+</span>
          </button>
          <div class="wpb-faq-a" role="region">
            <p><?php echo htmlspecialchars($faq['a']); ?></p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- ═══ RELATED AREAS ═══ -->
<section class="wpb-related" aria-label="Other cities near West Palm Beach we serve">
  <div class="container">
    <div class="wpb-related-header">
      <h3>Also Serving These Nearby Palm Beach County Cities</h3>
      <p class="wpb-related-sub">One license, every city in Palm Beach County — all arrests go to the same jail we already work every day.</p>
    </div>
    <div class="wpb-related-grid">
      <a href="/areas/delray-beach/" class="wpb-area-card">
        <div class="wpb-area-card-icon"><?php echo lucide_icon('map-pin'); ?></div>
        <h4>Delray Beach</h4>
        <p>Our home base — DBPD familiar, South County Courthouse covered, PBCJ transport handled fast.</p>
        <span class="wpb-area-card-link">View coverage <?php echo lucide_icon('arrow-right'); ?></span>
      </a>
      <a href="/areas/boca-raton/" class="wpb-area-card">
        <div class="wpb-area-card-icon"><?php echo lucide_icon('users'); ?></div>
        <h4>Boca Raton</h4>
        <p>BRPSD arrests, FAU student situations, and financial charge bail bonds — 30 miles south of PBCJ, we cover it all.</p>
        <span class="wpb-area-card-link">View coverage <?php echo lucide_icon('arrow-right'); ?></span>
      </a>
      <a href="/areas/" class="wpb-area-card">
        <div class="wpb-area-card-icon"><?php echo lucide_icon('globe'); ?></div>
        <h4>All 15+ Service Cities</h4>
        <p>Boynton Beach, Lake Worth Beach, Palm Beach Gardens, Fort Lauderdale, Miami, and more — we cover all of South Florida.</p>
        <span class="wpb-area-card-link">See all areas <?php echo lucide_icon('arrow-right'); ?></span>
      </a>
    </div>
  </div>
</section>

<!-- ═══ EMERGENCY CTA ═══ -->
<section class="wpb-cta" aria-label="Emergency bail bond help in West Palm Beach">
  <div class="wpb-cta-inner">
    <h2>Need a bondsman at the <em>Palm Beach County Jail right now</em>?</h2>
    <p>We post bond at PBCJ on Gun Club Road every day, around the clock. No bondsman knows this facility better. Call us the moment you hear about the arrest and we start moving immediately.</p>
    <div class="wpb-cta-btns">
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo preg_replace('/\D/','', $phone); ?>" class="btn-wpb-primary">
        <?php echo lucide_icon('phone'); ?> Call Now — 24/7
      </a>
      <?php endif; ?>
      <a href="/contact/" class="btn-wpb-secondary">Send a Message</a>
    </div>
  </div>
</section>

</main>

<script>
function toggleWpbFaq(btn) {
  const item = btn.closest('.wpb-faq-item');
  const isOpen = item.classList.contains('open');
  document.querySelectorAll('.wpb-faq-item.open').forEach(el => el.classList.remove('open'));
  document.querySelectorAll('.wpb-faq-q').forEach(el => el.setAttribute('aria-expanded', 'false'));
  if (!isOpen) {
    item.classList.add('open');
    btn.setAttribute('aria-expanded', 'true');
  }
}
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
