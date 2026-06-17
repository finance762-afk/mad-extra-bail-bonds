<?php
/**
 * areas/fort-lauderdale/index.php — Fort Lauderdale Service Area Page
 * Mad Extra Bail Bonds | Delray Beach, FL
 * Phase 6: Service Area Pages
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Bail Bonds Near Me in Fort Lauderdale FL | Mad Extra Bail Bonds | 24/7';
$pageDescription = 'Need bail bonds in Fort Lauderdale, FL? Mad Extra Bail Bonds is a licensed FL bondsman serving Fort Lauderdale and all of Broward County 24/7. Fast release from Broward Main Jail.';
$canonicalUrl    = $siteUrl . '/areas/fort-lauderdale/';
$currentPage     = 'areas';

$_breadcrumb = generateBreadcrumbSchema([
    ['name' => 'Home',         'url' => $siteUrl . '/'],
    ['name' => 'Service Areas','url' => $siteUrl . '/areas/'],
    ['name' => 'Fort Lauderdale', 'url' => $siteUrl . '/areas/fort-lauderdale/'],
]);

$_serviceSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'Service',
    '@id'         => $siteUrl . '/areas/fort-lauderdale/#service-fort-lauderdale',
    'name'        => 'Bail Bonds in Fort Lauderdale, FL',
    'description' => 'Licensed Florida bail bondsman serving Fort Lauderdale and all of Broward County 24/7. Fast release from Broward County Main Jail at 555 SE 1st Ave, Fort Lauderdale.',
    'url'         => $siteUrl . '/areas/fort-lauderdale/',
    'provider'    => ['@id' => $siteUrl . '/#organization'],
    'areaServed'  => [
        ['@type' => 'City',   'name' => 'Fort Lauderdale, FL'],
        ['@type' => 'County', 'name' => 'Broward County, FL'],
    ],
    'serviceType' => 'Bail Bond Services',
];

$_faqs = [
    [
        'q' => 'Where is the Broward County Main Jail in Fort Lauderdale and how long does booking take?',
        'a' => 'The Broward County Main Jail — also called the Central Detention Center — is located at 555 SE 1st Ave in downtown Fort Lauderdale, two blocks from the Broward County Courthouse. Initial booking and processing typically takes 2 to 8 hours after arrest. The facility operates high volumes year-round and is especially busy during Spring Break season in March and April. Mad Extra Bail Bonds works directly with Broward Main Jail staff and can begin preparing your bond the moment you call.',
    ],
    [
        'q' => 'Does Mad Extra Bail Bonds handle Spring Break arrests in Fort Lauderdale?',
        'a' => 'Yes. March and April bring significant volumes of out-of-state visitors arrested near Fort Lauderdale Beach, Las Olas Boulevard, and the Himmarshee Street corridor. We handle tourist arrests efficiently and can coordinate with out-of-state families remotely — you do not have to be in Florida to start the bond process. We walk out-of-state co-signers through the entire process by phone.',
    ],
    [
        'q' => 'Can you bail someone out of Fort Lauderdale for a federal charge at Port Everglades?',
        'a' => 'Federal charges — including drug smuggling, trafficking, and immigration violations at Port Everglades — are handled in federal court, not county jail. Federal bail is set by a federal magistrate, and the process differs significantly from state court. Mad Extra Bail Bonds has experience with federal bail bonds and can explain the federal magistrate hearing process to families navigating federal charges for the first time.',
    ],
    [
        'q' => 'What is the difference between a Fort Lauderdale city arrest and a Broward County Sheriff arrest?',
        'a' => 'The Fort Lauderdale Police Department handles arrests within city limits. The Broward Sheriff\'s Office handles arrests in unincorporated Broward County. Both agencies transport defendants to the same facility — the Broward County Main Jail at 555 SE 1st Ave in Fort Lauderdale. The arresting agency does not change the bail process for us — same jail, same procedures, same response from Mad Extra.',
    ],
    [
        'q' => 'How long does release take from the Broward County Main Jail after bond is posted?',
        'a' => 'Releases from Broward County Main Jail typically take 4 to 10 hours after bond is posted, depending on booking volume and shift changes. The facility processes high volumes, especially on weekend nights and during Spring Break. Mad Extra Bail Bonds pushes to expedite processing wherever possible and stays in direct contact with you throughout — you will never be left wondering what is happening.',
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
   FORT LAUDERDALE AREA PAGE — Mad Extra Bail Bonds
   Premium Tier | Dark/Neon Design System
   Techniques:
   1. Layered ::before radial gradient blobs on hero (2+ blobs)
   2. Fractal noise ::after texture on hero
   3. Floating neon orbs with CSS @keyframes float
   4. Glassmorphism hero sidebar (backdrop-filter: blur(14px))
   5. SVG wave dividers (3, all unique shapes)
   6. FAQ accordion with magenta border + icon rotate on open
   7. Service cards with neon hover bottom-border scaleX
   8. Decorative radial gradient orb in dark coverage section
   9. Gradient text on stat numbers (background-clip technique)
   ============================================================ */

/* ── 1. HERO ── */
.hero-ftl {
  position: relative;
  min-height: 60vh;
  display: flex;
  align-items: center;
  background: #06040f;
  overflow: hidden;
  padding-top: var(--nav-height, 72px);
  padding-bottom: var(--space-12);
}
/* Technique 1: layered radial blobs — magenta heavy on right, gold on lower left */
.hero-ftl::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 58% 75% at 92% 18%, rgba(229,53,231,0.24) 0%, transparent 58%),
    radial-gradient(ellipse 50% 60% at 12% 75%, rgba(249,183,62,0.14) 0%, transparent 55%),
    radial-gradient(ellipse 80% 45% at 50% 108%, rgba(6,4,15,0.99) 0%, transparent 80%);
  pointer-events: none;
}
/* Technique 2: fractal noise overlay */
.hero-ftl::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.038'/%3E%3C/svg%3E");
  opacity: 0.55;
  pointer-events: none;
  z-index: 0;
}
/* Technique 3: floating neon orbs */
.ftl-orb {
  position: absolute;
  border-radius: 50%;
  pointer-events: none;
  will-change: transform;
  z-index: 1;
}
.ftl-orb-1 {
  width: 560px; height: 560px;
  top: -200px; right: -100px;
  background: radial-gradient(circle, rgba(229,53,231,0.16) 0%, transparent 68%);
  animation: ftl-float 16s ease-in-out infinite;
}
.ftl-orb-2 {
  width: 340px; height: 340px;
  bottom: -70px; left: 3%;
  background: radial-gradient(circle, rgba(249,183,62,0.11) 0%, transparent 68%);
  animation: ftl-float 21s ease-in-out infinite reverse;
  animation-delay: -9s;
}
.ftl-orb-3 {
  width: 180px; height: 180px;
  top: 38%; right: 36%;
  background: radial-gradient(circle, rgba(229,53,231,0.06) 0%, transparent 68%);
  animation: ftl-float 12s ease-in-out infinite;
  animation-delay: -4s;
}
@keyframes ftl-float {
  0%,100% { transform: translate(0,0) scale(1); }
  38%     { transform: translate(14px,-18px) scale(1.04); }
  72%     { transform: translate(-10px,12px) scale(0.97); }
}
.hero-ftl-inner {
  position: relative;
  z-index: 2;
  display: grid;
  grid-template-columns: 1fr 390px;
  gap: var(--space-12);
  align-items: center;
  padding: var(--space-12) 0;
  width: 100%;
}
.hero-ftl-left { max-width: 620px; }
.ftl-eyebrow {
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
  border: 1px solid rgba(229,53,231,0.4);
  border-radius: var(--radius-full);
  background: rgba(229,53,231,0.07);
  margin-bottom: var(--space-5);
}
.ftl-eyebrow .live-dot {
  width: 7px; height: 7px;
  border-radius: 50%;
  background: var(--color-secondary);
  box-shadow: 0 0 8px var(--color-secondary);
  animation: live-dot-pulse 2s ease-in-out infinite;
  flex-shrink: 0;
}
@keyframes live-dot-pulse {
  0%,100% { opacity:1; transform:scale(1); }
  50%     { opacity:.5; transform:scale(.72); }
}
.hero-ftl h1 {
  font-size: clamp(1.8rem, 3.8vw, 3rem);
  font-weight: 900;
  color: #fff;
  line-height: 1.1;
  margin-bottom: var(--space-5);
  letter-spacing: -0.025em;
  text-wrap: balance;
}
.hero-ftl h1 .hl-gold { color: var(--color-accent); text-shadow: 0 0 28px rgba(249,183,62,0.5); }
.hero-ftl h1 .hl-mag  { color: var(--color-secondary); text-shadow: 0 0 28px rgba(229,53,231,0.55); }
.hero-ftl .hero-answer {
  font-size: 1rem;
  color: rgba(255,255,255,0.65);
  line-height: 1.82;
  margin-bottom: var(--space-7);
  max-width: 560px;
}
.hero-ftl-btns {
  display: flex;
  gap: var(--space-3);
  flex-wrap: wrap;
  margin-bottom: var(--space-7);
}
.btn-ftl-primary {
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
  box-shadow: 0 0 22px rgba(249,183,62,0.42), 0 4px 14px rgba(0,0,0,0.3);
  transition: all var(--transition-base);
}
.btn-ftl-primary:hover {
  background: #ffc94f;
  box-shadow: 0 0 42px rgba(249,183,62,0.65), 0 8px 22px rgba(0,0,0,0.35);
  transform: translateY(-2px);
  color: #0a0d1a;
}
.btn-ftl-primary svg { width: 15px; height: 15px; }
.btn-ftl-secondary {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 12px 24px;
  background: transparent;
  color: rgba(255,255,255,0.82);
  border: 2px solid rgba(255,255,255,0.22);
  font-family: var(--font-heading);
  font-size: 0.82rem;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  border-radius: var(--radius-md);
  text-decoration: none;
  transition: all var(--transition-base);
}
.btn-ftl-secondary:hover {
  border-color: rgba(255,255,255,0.5);
  background: rgba(255,255,255,0.07);
  transform: translateY(-2px);
  color: #fff;
}
.ftl-trust-row {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-2);
}
.ftl-badge {
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
.ftl-badge svg { width: 11px; height: 11px; color: var(--color-accent); flex-shrink: 0; }

/* Technique 4: glassmorphism hero sidebar */
.hero-ftl-card {
  position: relative;
  background: rgba(255,255,255,0.045);
  border: 1px solid rgba(255,255,255,0.12);
  border-radius: 18px;
  padding: var(--space-7) var(--space-6);
  backdrop-filter: blur(14px);
  -webkit-backdrop-filter: blur(14px);
}
.hero-ftl-card::before {
  content: '';
  position: absolute;
  inset: -1px;
  border-radius: 19px;
  background: linear-gradient(135deg, rgba(229,53,231,0.45) 0%, rgba(249,183,62,0.2) 55%, transparent 100%);
  z-index: -1;
  opacity: 0.45;
}
.hfc-ftl-title {
  font-family: var(--font-heading);
  font-size: 1.05rem;
  font-weight: 800;
  color: #fff;
  margin-bottom: var(--space-2);
}
.hfc-ftl-sub {
  font-size: 0.68rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  color: var(--color-secondary);
  margin-bottom: var(--space-5);
}
.hfc-ftl-list {
  list-style: none;
  padding: 0;
  margin: 0 0 var(--space-6);
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
}
.hfc-ftl-list li {
  display: flex;
  align-items: flex-start;
  gap: var(--space-2);
  font-size: 0.85rem;
  color: rgba(255,255,255,0.8);
  line-height: 1.5;
}
.hfc-check {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  width: 18px; height: 18px;
  border-radius: 50%;
  background: linear-gradient(135deg, var(--color-secondary), #8f08a0);
  font-size: 0.6rem;
  color: #fff;
  font-weight: 900;
  margin-top: 2px;
}
.hfc-ftl-cta {
  display: block;
  width: 100%;
  padding: 13px;
  background: linear-gradient(135deg, var(--color-accent) 0%, #e09a1e 100%);
  color: #0a0d1a;
  font-family: var(--font-heading);
  font-size: 0.82rem;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  border-radius: var(--radius-md);
  text-decoration: none;
  text-align: center;
  box-shadow: 0 4px 22px rgba(249,183,62,0.4);
  transition: all var(--transition-base);
}
.hfc-ftl-cta:hover {
  box-shadow: 0 8px 34px rgba(249,183,62,0.62);
  transform: translateY(-1px);
  color: #0a0d1a;
}
.hfc-ftl-disclaimer {
  text-align: center;
  font-size: 0.6rem;
  color: rgba(255,255,255,0.3);
  margin-top: var(--space-3);
  line-height: 1.5;
}

/* ── 2. SVG DIVIDERS ── */
/* Technique 5: 3 unique SVG wave shapes */
.div-ftl-d2l { line-height: 0; background: #06040f; }
.div-ftl-d2l svg { display: block; width: 100%; }
.div-ftl-l2d { line-height: 0; background: #f4f6f9; }
.div-ftl-l2d svg { display: block; width: 100%; }
.div-ftl-d2w { line-height: 0; background: #06040f; }
.div-ftl-d2w svg { display: block; width: 100%; }
.div-ftl-w2l { line-height: 0; background: #fff; }
.div-ftl-w2l svg { display: block; width: 100%; }

/* ── 3. INTRO / ANSWER SECTION ── */
.intro-ftl {
  padding: var(--space-16) 0;
  background: #f4f6f9;
}
.intro-ftl-inner { max-width: 860px; margin: 0 auto; }
.ftl-sec-eyebrow {
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
.intro-ftl h2 {
  font-size: clamp(1.65rem, 2.8vw, 2.35rem);
  font-weight: 900;
  color: #1a2340;
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.02em;
  margin-bottom: var(--space-4);
}
.intro-ftl h2 em { color: var(--color-secondary); font-style: normal; }
.answer-block-ftl {
  background: linear-gradient(135deg, rgba(229,53,231,0.08), rgba(249,183,62,0.04));
  border-left: 3px solid var(--color-secondary);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  padding: var(--space-5) var(--space-6);
  margin-bottom: var(--space-6);
}
.answer-block-ftl p {
  font-size: 0.95rem;
  color: #1a2340;
  line-height: 1.8;
  margin: 0;
  font-style: italic;
}
.intro-ftl p.prose {
  font-size: 0.95rem;
  color: #4a5568;
  line-height: 1.82;
  margin-bottom: var(--space-4);
  max-width: 65ch;
}

/* ── 4. LOCAL COVERAGE SECTION (dark) ── */
/* Technique 8: decorative radial orb in dark section */
.coverage-ftl {
  padding: var(--space-16) 0;
  background: linear-gradient(135deg, #06040f 0%, #170528 55%, #080d1e 100%);
  position: relative;
  overflow: hidden;
}
.coverage-ftl::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 48% 65% at 4% 50%, rgba(229,53,231,0.13) 0%, transparent 60%),
    radial-gradient(ellipse 40% 55% at 96% 50%, rgba(249,183,62,0.08) 0%, transparent 60%);
  pointer-events: none;
}
/* Decorative large orb right side */
.coverage-ftl-deco {
  position: absolute;
  width: 480px; height: 480px;
  top: 50%; right: -120px;
  transform: translateY(-50%);
  border-radius: 50%;
  background: radial-gradient(circle, rgba(229,53,231,0.07) 0%, transparent 70%);
  pointer-events: none;
}
.coverage-ftl-inner {
  position: relative;
  z-index: 1;
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-14);
  align-items: start;
}
.coverage-ftl-eyebrow {
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
  border: 1px solid rgba(249,183,62,0.3);
  border-radius: var(--radius-full);
  background: rgba(249,183,62,0.07);
  margin-bottom: var(--space-4);
}
.coverage-ftl h2 {
  font-size: clamp(1.5rem, 2.6vw, 2.1rem);
  font-weight: 900;
  color: #fff;
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.02em;
  margin-bottom: var(--space-3);
}
.coverage-ftl h2 em { color: var(--color-secondary); font-style: normal; }
.coverage-ftl-lead {
  font-size: 0.9rem;
  color: rgba(255,255,255,0.52);
  line-height: 1.8;
  margin-bottom: var(--space-5);
}
.answer-block-dark-ftl {
  background: rgba(255,255,255,0.04);
  border-left: 3px solid var(--color-secondary);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  padding: var(--space-4) var(--space-5);
  margin-bottom: var(--space-6);
}
.answer-block-dark-ftl p {
  font-size: 0.88rem;
  color: rgba(255,255,255,0.72);
  line-height: 1.8;
  margin: 0;
  font-style: italic;
}
.coverage-ftl-detail-list {
  list-style: none;
  padding: 0;
  margin: 0;
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
}
.cov-detail-item {
  display: flex;
  gap: var(--space-4);
  align-items: flex-start;
}
.cov-detail-icon {
  flex-shrink: 0;
  width: 38px; height: 38px;
  border-radius: 10px;
  background: rgba(255,255,255,0.05);
  border: 1px solid rgba(255,255,255,0.1);
  display: flex; align-items: center; justify-content: center;
  color: var(--color-accent);
  margin-top: 2px;
}
.cov-detail-icon svg { width: 18px; height: 18px; }
.cov-detail-content h4 {
  font-size: 0.88rem;
  font-weight: 800;
  color: #fff;
  margin-bottom: var(--space-1);
}
.cov-detail-content p {
  font-size: 0.82rem;
  color: rgba(255,255,255,0.52);
  line-height: 1.65;
  margin: 0;
}
/* Technique 9: gradient text stat numbers */
.coverage-ftl-stats {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-4);
}
.ftl-stat-card {
  background: rgba(255,255,255,0.04);
  border: 1px solid rgba(255,255,255,0.08);
  border-radius: var(--radius-lg);
  padding: var(--space-6);
  text-align: center;
  position: relative;
  overflow: hidden;
}
.ftl-stat-card::before {
  content: '';
  position: absolute;
  top: -30px; left: 50%;
  transform: translateX(-50%);
  width: 100px; height: 100px;
  border-radius: 50%;
  background: radial-gradient(circle, rgba(229,53,231,0.1) 0%, transparent 70%);
  pointer-events: none;
}
.ftl-stat-num {
  font-family: var(--font-heading);
  font-size: 2.2rem;
  font-weight: 900;
  background: linear-gradient(135deg, var(--color-accent) 20%, var(--color-secondary) 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  line-height: 1;
  display: block;
  margin-bottom: var(--space-1);
  position: relative;
  z-index: 1;
}
.ftl-stat-lbl {
  font-family: var(--font-heading);
  font-size: 0.6rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  color: rgba(255,255,255,0.4);
  position: relative;
  z-index: 1;
}
.ftl-stat-note {
  font-size: 0.72rem;
  color: rgba(255,255,255,0.35);
  margin-top: var(--space-2);
  line-height: 1.55;
  position: relative;
  z-index: 1;
}

/* ── 5. SERVICES SECTION ── */
/* Technique 7: neon bottom-border scaleX on service cards */
.services-ftl {
  padding: var(--space-16) 0;
  background: #fff;
}
.services-ftl-header { text-align: center; margin-bottom: var(--space-12); }
.services-ftl h2 {
  font-size: clamp(1.65rem, 2.8vw, 2.35rem);
  font-weight: 900;
  color: #1a2340;
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.02em;
  margin-bottom: var(--space-3);
}
.services-ftl h2 em { color: var(--color-secondary); font-style: normal; }
.services-ftl-lead {
  font-size: 0.95rem;
  color: #4a5568;
  max-width: 500px;
  margin: 0 auto;
  line-height: 1.75;
}
.ftl-services-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 18px;
}
.ftl-svc-card {
  background: #f7f8fb;
  border: 1px solid rgba(229,53,231,0.1);
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
.ftl-svc-card::after {
  content: '';
  position: absolute;
  bottom: 0; left: 0; right: 0;
  height: 2px;
  background: linear-gradient(90deg, var(--color-secondary), var(--color-accent));
  transform: scaleX(0);
  transform-origin: left;
  transition: transform 0.32s ease;
}
.ftl-svc-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 14px 35px rgba(229,53,231,0.14), 0 4px 10px rgba(0,0,0,0.06);
  border-color: rgba(229,53,231,0.25);
}
.ftl-svc-card:hover::after { transform: scaleX(1); }
.ftl-svc-icon {
  width: 46px; height: 46px;
  border-radius: 50%;
  background: linear-gradient(135deg, rgba(229,53,231,0.12), rgba(249,183,62,0.07));
  border: 1px solid rgba(229,53,231,0.18);
  display: flex; align-items: center; justify-content: center;
  color: var(--color-secondary);
}
.ftl-svc-icon svg { width: 20px; height: 20px; }
.ftl-svc-name {
  font-family: var(--font-heading);
  font-size: 0.88rem;
  font-weight: 800;
  color: #1a2340;
  line-height: 1.25;
}
.ftl-svc-desc {
  font-size: 0.8rem;
  color: #4a5568;
  line-height: 1.65;
  flex: 1;
  margin: 0;
}
.ftl-svc-link {
  display: inline-flex;
  align-items: center;
  gap: 4px;
  font-size: 0.76rem;
  font-weight: 800;
  color: var(--color-secondary);
  text-decoration: none;
  transition: gap var(--transition-fast);
  margin-top: auto;
}
.ftl-svc-link:hover { gap: 8px; }
.ftl-svc-link svg { width: 13px; height: 13px; }

/* ── 6. FAQ SECTION ── */
/* Technique 6: accordion with magenta border + icon rotate */
.faq-ftl {
  padding: var(--space-16) 0;
  background: #f4f6f9;
}
.faq-ftl-inner { max-width: 820px; margin: 0 auto; }
.faq-ftl h2 {
  font-size: clamp(1.55rem, 2.6vw, 2.15rem);
  font-weight: 900;
  color: #1a2340;
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.02em;
  margin-bottom: var(--space-3);
}
.faq-ftl h2 em { color: var(--color-secondary); font-style: normal; }
.faq-ftl-sub { font-size: 0.92rem; color: #4a5568; margin-bottom: var(--space-10); line-height: 1.75; }
.faq-ftl-list { display: flex; flex-direction: column; gap: var(--space-3); }
.faq-ftl-item {
  background: #fff;
  border: 1px solid rgba(229,53,231,0.12);
  border-left: 3px solid rgba(229,53,231,0.2);
  border-radius: 0 var(--radius-lg) var(--radius-lg) 0;
  overflow: hidden;
  transition: border-color var(--transition-base), box-shadow var(--transition-base);
}
.faq-ftl-item.open {
  border-left-color: var(--color-secondary);
  box-shadow: 0 4px 18px rgba(229,53,231,0.1);
}
.faq-ftl-q {
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
.faq-ftl-q:hover { color: var(--color-secondary); }
.faq-ftl-item.open .faq-ftl-q { color: var(--color-secondary); }
.faq-ftl-icon {
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
.faq-ftl-item.open .faq-ftl-icon {
  background: var(--color-secondary);
  color: #fff;
  transform: rotate(45deg);
}
.faq-ftl-a {
  display: none;
  padding: 0 var(--space-6) var(--space-5);
  font-size: 0.88rem;
  color: #4a5568;
  line-height: 1.8;
  border-top: 1px solid rgba(229,53,231,0.07);
  padding-top: var(--space-4);
}
.faq-ftl-item.open .faq-ftl-a { display: block; }

/* ── 7. RELATED AREAS ── */
.related-ftl {
  padding: var(--space-14) 0;
  background: #fff;
}
.related-ftl-h3 {
  font-size: clamp(1.35rem, 2.2vw, 1.8rem);
  font-weight: 900;
  color: #1a2340;
  text-align: center;
  margin-bottom: var(--space-2);
  text-wrap: balance;
}
.related-ftl-sub { text-align: center; font-size: 0.9rem; color: #4a5568; margin-bottom: var(--space-8); }
.related-ftl-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 18px;
}
.rltd-card {
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
.rltd-card::after {
  content: '';
  position: absolute;
  bottom: 0; left: 0; right: 0;
  height: 2px;
  background: linear-gradient(90deg, var(--color-secondary), var(--color-accent));
  transform: scaleX(0);
  transform-origin: left;
  transition: transform 0.3s ease;
}
.rltd-card:hover {
  transform: translateY(-4px);
  box-shadow: 0 12px 30px rgba(229,53,231,0.12), 0 4px 8px rgba(0,0,0,0.05);
  border-color: rgba(229,53,231,0.25);
}
.rltd-card:hover::after { transform: scaleX(1); }
.rltd-tag {
  font-size: 0.63rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1px;
  color: var(--color-secondary);
  margin-bottom: var(--space-2);
}
.rltd-name {
  font-family: var(--font-heading);
  font-size: 1rem;
  font-weight: 800;
  color: #1a2340;
  margin-bottom: var(--space-2);
}
.rltd-note { font-size: 0.8rem; color: #4a5568; line-height: 1.6; margin-bottom: var(--space-4); }
.rltd-cta {
  display: inline-flex;
  align-items: center;
  gap: 4px;
  font-size: 0.76rem;
  font-weight: 800;
  color: var(--color-secondary);
}
.rltd-cta svg { width: 13px; height: 13px; }

/* ── 8. EMERGENCY CTA ── */
.cta-ftl {
  padding: var(--space-14) 0;
  background: linear-gradient(135deg, #06040f 0%, #1c0830 55%, #08101e 100%);
  position: relative;
  overflow: hidden;
  text-align: center;
}
.cta-ftl::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 55% 78% at 18% 50%, rgba(229,53,231,0.15) 0%, transparent 58%),
    radial-gradient(ellipse 48% 68% at 82% 50%, rgba(249,183,62,0.1) 0%, transparent 58%);
  pointer-events: none;
}
.cta-ftl-inner {
  position: relative;
  z-index: 1;
  max-width: 560px;
  margin: 0 auto;
}
.cta-ftl h2 {
  font-size: clamp(1.5rem, 2.8vw, 2.2rem);
  font-weight: 900;
  color: #fff;
  text-wrap: balance;
  margin-bottom: var(--space-3);
}
.cta-ftl h2 em { color: var(--color-accent); font-style: normal; }
.cta-ftl p {
  font-size: 0.95rem;
  color: rgba(255,255,255,0.56);
  max-width: 440px;
  margin: 0 auto var(--space-7);
  line-height: 1.75;
}
.cta-ftl-btns {
  display: flex;
  gap: var(--space-3);
  justify-content: center;
  flex-wrap: wrap;
}

/* ── RESPONSIVE ── */
@media (max-width: 1024px) {
  .hero-ftl-inner { grid-template-columns: 1fr; }
  .hero-ftl-card { display: none; }
  .coverage-ftl-inner { grid-template-columns: 1fr; gap: var(--space-10); }
  .ftl-services-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 768px) {
  .coverage-ftl-stats { grid-template-columns: repeat(2, 1fr); }
  .related-ftl-grid { grid-template-columns: 1fr; }
}
@media (max-width: 600px) {
  .ftl-services-grid { grid-template-columns: 1fr; }
  .related-ftl-grid { grid-template-columns: 1fr; }
}
</style>

<!-- ═══ HERO ═══ -->
<section class="hero-ftl" aria-label="Fort Lauderdale bail bonds">
  <div class="ftl-orb ftl-orb-1"></div>
  <div class="ftl-orb ftl-orb-2"></div>
  <div class="ftl-orb ftl-orb-3"></div>

  <div class="container">
    <div class="hero-ftl-inner">
      <div class="hero-ftl-left">
        <span class="ftl-eyebrow">
          <span class="live-dot"></span>
          Broward County · Fort Lauderdale · 24/7
        </span>
        <h1>
          <span class="hl-gold">Bail Bonds Near Me</span> in Fort Lauderdale, FL —<br>
          Licensed <span class="hl-mag">Broward Bondsman</span>, 24/7
        </h1>
        <p class="hero-answer">Need a bondsman for a Fort Lauderdale arrest? Mad Extra Bail Bonds posts bail at the Broward County Main Jail at 555 SE 1st Ave — the facility where all Fort Lauderdale arrests are booked. We start working the moment you call, any hour, any charge.</p>
        <div class="hero-ftl-btns">
          <?php if (!empty($phone)): ?>
          <a href="tel:<?php echo preg_replace('/\D/','',$phone); ?>" class="btn-ftl-primary">
            <?php echo lucide_icon('phone'); ?> Call Now — 24/7
          </a>
          <?php else: ?>
          <a href="/contact/" class="btn-ftl-primary">
            <?php echo lucide_icon('zap'); ?> Get Help Now
          </a>
          <?php endif; ?>
          <a href="/contact/" class="btn-ftl-secondary">Free Consultation</a>
        </div>
        <div class="ftl-trust-row">
          <span class="ftl-badge"><?php echo lucide_icon('shield-check'); ?> Licensed FL Bondsman</span>
          <span class="ftl-badge"><?php echo lucide_icon('landmark'); ?> Broward Main Jail</span>
          <span class="ftl-badge"><?php echo lucide_icon('clock'); ?> 24/7 Response</span>
          <span class="ftl-badge"><?php echo lucide_icon('zap'); ?> Fast Release</span>
        </div>
      </div>

      <div class="hero-ftl-card">
        <p class="hfc-ftl-title">Fort Lauderdale Arrest?</p>
        <p class="hfc-ftl-sub">Immediate 24/7 response</p>
        <ul class="hfc-ftl-list">
          <li><span class="hfc-check">✓</span> Broward County Main Jail — 555 SE 1st Ave</li>
          <li><span class="hfc-check">✓</span> All charges: DUI, drug, felony, misdemeanor</li>
          <li><span class="hfc-check">✓</span> Spring Break tourist arrests handled remotely</li>
          <li><span class="hfc-check">✓</span> Federal charges at Port Everglades covered</li>
          <li><span class="hfc-check">✓</span> Licensed FL bail bondsman — 11+ years</li>
        </ul>
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo preg_replace('/\D/','',$phone); ?>" class="hfc-ftl-cta">
          <?php echo lucide_icon('phone'); ?> Call Now
        </a>
        <?php else: ?>
        <a href="/contact/" class="hfc-ftl-cta">Get Help Now</a>
        <?php endif; ?>
        <p class="hfc-ftl-disclaimer">Available 24 hours a day, 365 days a year</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SVG WAVE DIVIDER 1 — dark to light (unique S-curve shape) ═══ -->
<div class="div-ftl-d2l" aria-hidden="true">
  <svg viewBox="0 0 1440 58" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,58 L0,12 C180,52 360,4 540,28 C720,52 900,8 1080,32 C1260,55 1380,18 1440,36 L1440,58 Z" fill="#f4f6f9"/>
  </svg>
</div>

<!-- ═══ INTRO / ANSWER SECTION ═══ -->
<section class="intro-ftl" aria-label="Fort Lauderdale bail bond overview">
  <div class="container">
    <div class="intro-ftl-inner">
      <span class="ftl-sec-eyebrow">Serving Fort Lauderdale Since 2013</span>
      <h2>How fast can you get someone out of the <em>Broward County Main Jail</em> in Fort Lauderdale?</h2>
      <div class="answer-block-ftl">
        <p>After bond is posted at the Broward County Main Jail at 555 SE 1st Ave in Fort Lauderdale, releases typically take 4 to 10 hours depending on booking volume and shift changes. Mad Extra Bail Bonds is a licensed Florida bail bondsman based in Delray Beach, serving Fort Lauderdale and all of Broward County — we start the process the moment you call.</p>
      </div>
      <p class="prose">Mad Extra Bail Bonds is a licensed Florida bail bondsman based in Delray Beach, serving Fort Lauderdale and all of Broward County. We post bail directly at Broward Main — also called the Central Detention Center — which sits two blocks from the Broward County Courthouse at 201 SE 6th St. That proximity to the courthouse means first appearances in Fort Lauderdale felony cases happen fast, and we position ourselves to move the moment the judge sets a bond amount.</p>
      <p class="prose">Fort Lauderdale is one of the highest-volume arrest cities in South Florida. The Las Olas Boulevard entertainment corridor, Himmarshee Street bar district, and the beach areas generate steady volumes of DUI, disorderly conduct, and drug arrests — especially from March through April during Spring Break season. We handle Fort Lauderdale arrests year-round and are fully familiar with Broward Main Jail procedures, shift rotations, and release timelines.</p>
      <p class="prose">Both the Fort Lauderdale Police Department and the Broward Sheriff's Office transport defendants to the same facility — Broward Main at 555 SE 1st Ave. The arresting agency does not change the process for us. One call covers any Fort Lauderdale arrest, regardless of who made it.</p>
    </div>
  </div>
</section>

<!-- ═══ SVG WAVE DIVIDER 2 — light to dark (angled tilt shape) ═══ -->
<div class="div-ftl-l2d" aria-hidden="true">
  <svg viewBox="0 0 1440 55" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,0 L1440,38 L1440,55 L0,55 Z" fill="#06040f"/>
  </svg>
</div>

<!-- ═══ LOCAL COVERAGE SECTION ═══ -->
<section class="coverage-ftl" aria-label="Fort Lauderdale local jail and coverage details">
  <div class="coverage-ftl-deco"></div>
  <div class="container">
    <div class="coverage-ftl-inner">
      <div>
        <span class="coverage-ftl-eyebrow"><?php echo lucide_icon('map-pin'); ?> Local Coverage Details</span>
        <h2>Which Fort Lauderdale neighborhoods and facilities does <em>Mad Extra cover</em>?</h2>
        <div class="answer-block-dark-ftl">
          <p>We cover all of Fort Lauderdale — from the Flagler Village arts district and Victoria Park to Rio Vista, Las Olas Isles, Tarpon River, Riverland, and downtown Himmarshee Street. Every arrest in Fort Lauderdale routes to Broward Main Jail where we have active relationships with intake staff.</p>
        </div>
        <ul class="coverage-ftl-detail-list">
          <li class="cov-detail-item">
            <div class="cov-detail-icon"><?php echo lucide_icon('landmark'); ?></div>
            <div class="cov-detail-content">
              <h4>Broward County Main Jail (Central Detention Center)</h4>
              <p>555 SE 1st Ave, Fort Lauderdale — primary booking facility for all FLPD and BSO arrests in Fort Lauderdale. Two blocks from the Broward County Courthouse. Booking takes 2–8 hours; releases typically 4–10 hours after bond is posted.</p>
            </div>
          </li>
          <li class="cov-detail-item">
            <div class="cov-detail-icon"><?php echo lucide_icon('scale'); ?></div>
            <div class="cov-detail-content">
              <h4>Broward County Courthouse — 201 SE 6th St</h4>
              <p>First appearance hearings for Fort Lauderdale felony arrests are held here — just two blocks from the jail. Proximity means judges set bond quickly. We prepare to post the moment a bond amount is set, day or night.</p>
            </div>
          </li>
          <li class="cov-detail-item">
            <div class="cov-detail-icon"><?php echo lucide_icon('anchor'); ?></div>
            <div class="cov-detail-content">
              <h4>Port Everglades Federal Charges</h4>
              <p>Drug smuggling, immigration violations, and maritime offenses at Port Everglades are prosecuted in federal court. We handle federal bail bonds and can explain the federal magistrate process to families facing Port Everglades charges for the first time.</p>
            </div>
          </li>
          <li class="cov-detail-item">
            <div class="cov-detail-icon"><?php echo lucide_icon('star'); ?></div>
            <div class="cov-detail-content">
              <h4>Spring Break & Las Olas Entertainment Area</h4>
              <p>March and April bring high volumes of tourist and out-of-state arrests near Fort Lauderdale Beach, Las Olas Blvd, and Himmarshee Street. We handle out-of-state family coordination by phone — parents in another state can start the process without being in Florida.</p>
            </div>
          </li>
        </ul>
      </div>
      <div>
        <div class="coverage-ftl-stats">
          <div class="ftl-stat-card">
            <span class="ftl-stat-num">4–10</span>
            <span class="ftl-stat-lbl">hrs avg release</span>
            <p class="ftl-stat-note">From bond posting to release at Broward Main</p>
          </div>
          <div class="ftl-stat-card">
            <span class="ftl-stat-num">2</span>
            <span class="ftl-stat-lbl">blocks to courthouse</span>
            <p class="ftl-stat-note">Broward Main Jail to 1st Appearance Hearing</p>
          </div>
          <div class="ftl-stat-card">
            <span class="ftl-stat-num">24/7</span>
            <span class="ftl-stat-lbl">availability</span>
            <p class="ftl-stat-note">No voicemail — a bondsman picks up every call</p>
          </div>
          <div class="ftl-stat-card">
            <span class="ftl-stat-num">11+</span>
            <span class="ftl-stat-lbl">years Broward exp.</span>
            <p class="ftl-stat-note">Mad Extra has served Broward County since 2013</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SVG WAVE DIVIDER 3 — dark to white (double-arch shape) ═══ -->
<div class="div-ftl-d2w" aria-hidden="true">
  <svg viewBox="0 0 1440 55" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,55 L0,30 Q360,55 720,20 Q1080,-10 1440,32 L1440,55 Z" fill="#ffffff"/>
  </svg>
</div>

<!-- ═══ SERVICES SECTION ═══ -->
<section class="services-ftl" aria-label="Bail bond services available in Fort Lauderdale">
  <div class="container">
    <div class="services-ftl-header">
      <span class="ftl-sec-eyebrow">What We Handle</span>
      <h2>What bail bond services does Mad Extra provide in <em>Fort Lauderdale</em>?</h2>
      <p class="services-ftl-lead">Every type of bond for every type of charge — DUI, drug, felony, federal, and more. One licensed bondsman covers it all across Broward County.</p>
    </div>
    <div class="ftl-services-grid" data-p1-dynamic>
      <?php foreach ($services as $svc): ?>
      <article class="ftl-svc-card">
        <div class="ftl-svc-icon"><?php echo lucide_icon($svc['icon']); ?></div>
        <p class="ftl-svc-name"><?php echo htmlspecialchars($svc['name']); ?></p>
        <p class="ftl-svc-desc"><?php echo htmlspecialchars($svc['description']); ?></p>
        <a href="/services/<?php echo htmlspecialchars($svc['slug']); ?>/" class="ftl-svc-link">
          Learn more <?php echo lucide_icon('arrow-right'); ?>
        </a>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══ SVG WAVE DIVIDER — white to light ═══ -->
<div class="div-ftl-w2l" aria-hidden="true">
  <svg viewBox="0 0 1440 40" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,20 Q480,40 720,12 Q960,-6 1440,22 L1440,40 L0,40 Z" fill="#f4f6f9"/>
  </svg>
</div>

<!-- ═══ FAQ SECTION ═══ -->
<section class="faq-ftl" aria-label="Fort Lauderdale bail bond FAQ">
  <div class="container">
    <div class="faq-ftl-inner">
      <span class="ftl-sec-eyebrow">Common Questions</span>
      <h2>Frequently asked questions about <em>bail bonds in Fort Lauderdale</em></h2>
      <p class="faq-ftl-sub">Direct answers to what Fort Lauderdale families — and out-of-state families — ask most when someone is arrested in Broward County.</p>
      <div class="faq-ftl-list" role="list">
        <?php foreach ($_faqs as $faq): ?>
        <div class="faq-ftl-item" role="listitem">
          <button class="faq-ftl-q" aria-expanded="false" onclick="toggleFaqFtl(this)">
            <?php echo htmlspecialchars($faq['q']); ?>
            <span class="faq-ftl-icon" aria-hidden="true">+</span>
          </button>
          <div class="faq-ftl-a" role="region">
            <p><?php echo htmlspecialchars($faq['a']); ?></p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- ═══ RELATED AREAS ═══ -->
<section class="related-ftl" aria-label="Other Broward County service areas">
  <div class="container">
    <h3 class="related-ftl-h3">Other Broward County Areas We Serve</h3>
    <p class="related-ftl-sub">Mad Extra Bail Bonds covers all of Broward County — not just Fort Lauderdale.</p>
    <div class="related-ftl-grid">
      <a href="/areas/pompano-beach/" class="rltd-card">
        <p class="rltd-tag">Broward County</p>
        <p class="rltd-name">Pompano Beach</p>
        <p class="rltd-note">North Regional Jail at 1000 Powerline Rd — Pompano arrests often stay at this North Broward facility for faster processing.</p>
        <span class="rltd-cta">View bail bonds in Pompano Beach <?php echo lucide_icon('arrow-right'); ?></span>
      </a>
      <a href="/areas/deerfield-beach/" class="rltd-card">
        <p class="rltd-tag">Broward County</p>
        <p class="rltd-name">Deerfield Beach</p>
        <p class="rltd-note">DBPD arrests route to North Regional in Pompano Beach. The North Regional Courthouse is right in Deerfield Beach on Hillsboro Blvd.</p>
        <span class="rltd-cta">View bail bonds in Deerfield Beach <?php echo lucide_icon('arrow-right'); ?></span>
      </a>
      <a href="/areas/coral-springs/" class="rltd-card">
        <p class="rltd-tag">Broward County</p>
        <p class="rltd-name">Coral Springs</p>
        <p class="rltd-note">West Broward city with BSO jurisdiction — arrests process through Broward County facilities. 24/7 coverage across all of Coral Springs.</p>
        <span class="rltd-cta">View bail bonds in Coral Springs <?php echo lucide_icon('arrow-right'); ?></span>
      </a>
    </div>
  </div>
</section>

<!-- ═══ EMERGENCY CTA ═══ -->
<section class="cta-ftl" aria-label="Emergency Fort Lauderdale bail bond contact">
  <div class="container" style="position:relative;z-index:1">
    <div class="cta-ftl-inner">
      <h2>Need a bondsman in <em>Fort Lauderdale right now</em>?</h2>
      <p>Broward County Main Jail, Port Everglades federal charges, Spring Break arrests — we handle every Fort Lauderdale scenario, 24 hours a day, 365 days a year. One call starts the process.</p>
      <div class="cta-ftl-btns">
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo preg_replace('/\D/','',$phone); ?>" class="btn-ftl-primary">
          <?php echo lucide_icon('phone'); ?> Call Now — 24/7
        </a>
        <?php endif; ?>
        <a href="/contact/" class="btn-ftl-secondary">Send a Message</a>
      </div>
    </div>
  </div>
</section>

<script>
function toggleFaqFtl(btn) {
  const item = btn.closest('.faq-ftl-item');
  const isOpen = item.classList.contains('open');
  document.querySelectorAll('.faq-ftl-item.open').forEach(el => el.classList.remove('open'));
  document.querySelectorAll('.faq-ftl-q').forEach(el => el.setAttribute('aria-expanded', 'false'));
  if (!isOpen) {
    item.classList.add('open');
    btn.setAttribute('aria-expanded', 'true');
  }
}
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
