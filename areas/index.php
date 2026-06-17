<?php
/**
 * areas/index.php — Service Areas Overview
 * Mad Extra Bail Bonds | Page One Insights v6.1
 * Phase 6: Service Area Pages
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Bail Bonds Service Areas | Mad Extra Bail Bonds | Palm Beach, Broward & Miami-Dade';
$pageDescription = 'Mad Extra Bail Bonds serves all of South Florida — Palm Beach County, Broward County, and Miami-Dade County. Licensed FL bondsman available 24/7 at every jail in the region.';
$canonicalUrl    = $siteUrl . '/areas/';
$currentPage     = 'areas';

$_breadcrumb = generateBreadcrumbSchema([
    ['name' => 'Home',         'url' => $siteUrl . '/'],
    ['name' => 'Service Areas','url' => $siteUrl . '/areas/'],
]);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
echo '<script type="application/ld+json">' . json_encode($_breadcrumb, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>' . "\n";
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';

// Group areas by county
$areasByCounty = [];
foreach ($serviceAreas as $area) {
    $areasByCounty[$area['county']][] = $area;
}

$countyMeta = [
    'Palm Beach County' => [
        'icon'     => 'sun',
        'color'    => 'var(--color-accent)',
        'jail'     => 'Palm Beach County Jail — West Palm Beach',
        'tagline'  => 'Serving the heart of South Florida from Delray Beach to Palm Beach Gardens',
    ],
    'Broward County'    => [
        'icon'     => 'anchor',
        'color'    => 'var(--color-secondary)',
        'jail'     => 'Broward County Main Jail — Fort Lauderdale',
        'tagline'  => 'Covering Fort Lauderdale, Pompano Beach, Hollywood, and beyond',
    ],
    'Miami-Dade County' => [
        'icon'     => 'building-2',
        'color'    => '#4df7b8',
        'jail'     => 'Miami-Dade Main Jail & Metro West — Miami',
        'tagline'  => 'Bilingual service across Greater Miami, Hialeah, and Miami Gardens',
    ],
];
?>

<style>
/* ============================================================
   SERVICE AREAS OVERVIEW — Mad Extra Bail Bonds
   Premium Tier | Dark/Neon Design System
   Techniques: layered hero, county-grouped grid, neon county
   headers, glassmorphism county panel, area card hover neon,
   SVG dividers, coverage map stats, FAQ accordion
   ============================================================ */

/* ── 1. HERO ── */
.areas-hero {
  position: relative;
  min-height: 58vh;
  display: flex;
  align-items: center;
  background: #09090f;
  overflow: hidden;
  padding-top: var(--nav-height, 72px);
  padding-bottom: var(--space-10);
}
.areas-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 65% 80% at 0% 60%, rgba(249,183,62,0.16) 0%, transparent 55%),
    radial-gradient(ellipse 50% 70% at 90% 20%, rgba(229,53,231,0.18) 0%, transparent 55%),
    radial-gradient(ellipse 70% 50% at 50% 100%, rgba(10,20,40,0.99) 0%, transparent 80%);
  pointer-events: none;
}
.areas-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.035'/%3E%3C/svg%3E");
  opacity: 0.5;
  pointer-events: none;
}
.areas-hero-orb {
  position: absolute;
  border-radius: 50%;
  pointer-events: none;
}
.areas-hero-orb-1 {
  width: 520px; height: 520px;
  top: -160px; right: -80px;
  background: radial-gradient(circle, rgba(229,53,231,0.12) 0%, transparent 70%);
  animation: orb-drift 15s ease-in-out infinite;
}
.areas-hero-orb-2 {
  width: 380px; height: 380px;
  bottom: -60px; left: 5%;
  background: radial-gradient(circle, rgba(249,183,62,0.10) 0%, transparent 70%);
  animation: orb-drift 19s ease-in-out infinite reverse;
  animation-delay: -7s;
}
@keyframes orb-drift {
  0%,100% { transform: translate(0,0) scale(1); }
  40%     { transform: translate(-14px,18px) scale(1.04); }
  70%     { transform: translate(10px,-12px) scale(0.97); }
}
.areas-hero-inner {
  position: relative;
  z-index: 2;
  max-width: 720px;
  padding: var(--space-12) 0;
}
.areas-eyebrow {
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
  border: 1px solid rgba(249,183,62,0.38);
  border-radius: var(--radius-full);
  background: rgba(249,183,62,0.07);
  margin-bottom: var(--space-5);
}
.areas-eyebrow .pulse-dot {
  width: 7px; height: 7px;
  border-radius: 50%;
  background: var(--color-accent);
  box-shadow: 0 0 8px var(--color-accent);
  animation: pulse-dot 2s ease-in-out infinite;
}
@keyframes pulse-dot {
  0%,100% { opacity:1; transform:scale(1); }
  50%     { opacity:.55; transform:scale(.75); }
}
.areas-hero h1 {
  font-size: clamp(1.9rem, 4vw, 3.4rem);
  font-weight: 900;
  color: var(--color-white);
  line-height: 1.1;
  margin-bottom: var(--space-5);
  letter-spacing: -0.025em;
  text-wrap: balance;
}
.areas-hero h1 .hl-gold { color: var(--color-accent); text-shadow: 0 0 28px rgba(249,183,62,0.5); }
.areas-hero h1 .hl-mag  { color: var(--color-secondary); text-shadow: 0 0 28px rgba(229,53,231,0.5); }
.areas-hero-answer {
  font-size: 1.05rem;
  color: rgba(255,255,255,0.68);
  line-height: 1.8;
  margin-bottom: var(--space-7);
  max-width: 580px;
}
.areas-hero-stats {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-5);
  margin-bottom: var(--space-7);
}
.ah-stat {
  display: flex;
  flex-direction: column;
  gap: 2px;
}
.ah-stat-num {
  font-family: var(--font-heading);
  font-size: 2rem;
  font-weight: 900;
  color: var(--color-accent);
  line-height: 1;
}
.ah-stat-label {
  font-size: 0.72rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1px;
  color: rgba(255,255,255,0.48);
}
.areas-hero-btns {
  display: flex;
  gap: var(--space-3);
  flex-wrap: wrap;
}
.btn-areas-primary {
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
.btn-areas-primary:hover {
  background: #ffc84f;
  box-shadow: 0 0 42px rgba(249,183,62,0.65), 0 8px 22px rgba(0,0,0,0.35);
  transform: translateY(-2px);
  color: #0a0d1a;
}
.btn-areas-secondary {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 12px 24px;
  background: transparent;
  color: var(--color-secondary);
  border: 2px solid rgba(229,53,231,0.5);
  font-family: var(--font-heading);
  font-size: 0.82rem;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  border-radius: var(--radius-md);
  text-decoration: none;
  transition: all var(--transition-base);
}
.btn-areas-secondary:hover {
  background: var(--color-secondary);
  color: var(--color-white);
  border-color: var(--color-secondary);
  box-shadow: 0 0 26px rgba(229,53,231,0.4);
  transform: translateY(-2px);
}

/* ── 2. SVG DIVIDERS ── */
.divider-dark-to-light { line-height: 0; background: #09090f; }
.divider-dark-to-light svg { display: block; width: 100%; }
.divider-light-to-dark { line-height: 0; background: #f4f6f9; }
.divider-light-to-dark svg { display: block; width: 100%; }
.divider-dark-to-white { line-height: 0; background: #09090f; }
.divider-dark-to-white svg { display: block; width: 100%; }

/* ── 3. COVERAGE INTRO ── */
.coverage-intro {
  padding: var(--space-16) 0;
  background: #f4f6f9;
}
.coverage-intro-inner {
  max-width: 860px;
  margin: 0 auto;
}
.ci-eyebrow {
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
.ci-h2 {
  font-size: clamp(1.7rem, 3vw, 2.4rem);
  font-weight: 900;
  color: var(--color-dark);
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.02em;
  margin-bottom: var(--space-5);
}
.ci-h2 em { color: var(--color-secondary); font-style: normal; }
.coverage-intro p {
  font-size: 0.95rem;
  color: var(--color-gray);
  line-height: 1.82;
  margin-bottom: var(--space-4);
}
.answer-block-ci {
  background: linear-gradient(135deg, rgba(229,53,231,0.07), rgba(249,183,62,0.04));
  border-left: 3px solid var(--color-secondary);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  padding: var(--space-5) var(--space-6);
  margin-bottom: var(--space-6);
}
.answer-block-ci p {
  font-size: 0.95rem;
  color: var(--color-dark);
  line-height: 1.8;
  margin: 0;
  font-style: italic;
}

/* ── 4. COUNTY SECTIONS ── */
.county-section {
  padding: var(--space-16) 0;
  background: linear-gradient(135deg, #09090f 0%, #12082a 55%, #0a1525 100%);
  position: relative;
  overflow: hidden;
}
.county-section::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 40% 60% at 3% 50%, rgba(229,53,231,0.09) 0%, transparent 60%),
    radial-gradient(ellipse 35% 55% at 97% 50%, rgba(249,183,62,0.07) 0%, transparent 60%);
  pointer-events: none;
}
.county-section-inner { position: relative; z-index: 1; }
.county-header {
  display: flex;
  align-items: flex-start;
  gap: var(--space-6);
  margin-bottom: var(--space-10);
  padding-bottom: var(--space-7);
  border-bottom: 1px solid rgba(255,255,255,0.07);
}
.county-icon-ring {
  flex-shrink: 0;
  width: 56px; height: 56px;
  border-radius: 50%;
  background: rgba(255,255,255,0.05);
  border: 1px solid rgba(255,255,255,0.12);
  display: flex;
  align-items: center;
  justify-content: center;
}
.county-icon-ring svg { width: 26px; height: 26px; }
.county-header-text {}
.county-name {
  font-family: var(--font-heading);
  font-size: clamp(1.3rem, 2.5vw, 1.9rem);
  font-weight: 900;
  color: var(--color-white);
  margin-bottom: var(--space-1);
  line-height: 1.1;
}
.county-name em { font-style: normal; }
.county-jail-note {
  font-size: 0.78rem;
  font-weight: 700;
  color: rgba(255,255,255,0.45);
  text-transform: uppercase;
  letter-spacing: 1px;
  margin-bottom: var(--space-2);
}
.county-tagline {
  font-size: 0.9rem;
  color: rgba(255,255,255,0.55);
  line-height: 1.65;
}
/* Technique: 3-column area cards with neon hover border */
.area-cards-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 18px;
}
.area-card {
  position: relative;
  background: rgba(255,255,255,0.04);
  border: 1px solid rgba(255,255,255,0.08);
  border-radius: 14px;
  padding: var(--space-6) var(--space-5);
  text-decoration: none;
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
  transition: transform var(--transition-base), border-color var(--transition-base), box-shadow var(--transition-base), background var(--transition-base);
  overflow: hidden;
}
.area-card::before {
  content: '';
  position: absolute;
  bottom: 0; left: 0; right: 0;
  height: 2px;
  background: linear-gradient(90deg, var(--color-secondary), var(--color-accent));
  transform: scaleX(0);
  transform-origin: left;
  transition: transform 0.3s ease;
}
.area-card:hover {
  transform: translateY(-4px);
  border-color: rgba(229,53,231,0.35);
  background: rgba(255,255,255,0.07);
  box-shadow: 0 14px 36px rgba(229,53,231,0.16), 0 4px 12px rgba(0,0,0,0.3);
}
.area-card:hover::before { transform: scaleX(1); }
.area-card-name {
  font-family: var(--font-heading);
  font-size: 1rem;
  font-weight: 800;
  color: var(--color-white);
  line-height: 1.2;
}
.area-card-county {
  font-size: 0.7rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1px;
  color: rgba(255,255,255,0.35);
}
.area-card-services {
  display: flex;
  flex-wrap: wrap;
  gap: 5px;
  margin-top: var(--space-1);
}
.area-service-tag {
  font-size: 0.63rem;
  font-weight: 700;
  color: rgba(255,255,255,0.52);
  background: rgba(255,255,255,0.05);
  border: 1px solid rgba(255,255,255,0.09);
  padding: 3px 8px;
  border-radius: 4px;
  text-transform: uppercase;
  letter-spacing: 0.5px;
}
.area-card-cta {
  display: inline-flex;
  align-items: center;
  gap: 5px;
  font-size: 0.75rem;
  font-weight: 800;
  color: var(--color-accent);
  margin-top: auto;
  transition: gap var(--transition-fast);
}
.area-card-cta svg { width: 13px; height: 13px; }
.area-card:hover .area-card-cta { gap: 8px; }

/* ── 5. WHY SECTION (light) ── */
.why-areas {
  padding: var(--space-16) 0;
  background: var(--color-white);
}
.why-areas-header {
  text-align: center;
  margin-bottom: var(--space-12);
}
.wa-eyebrow {
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
.wa-h2 {
  font-size: clamp(1.6rem, 2.8vw, 2.3rem);
  font-weight: 900;
  color: var(--color-dark);
  text-wrap: balance;
  line-height: 1.15;
  letter-spacing: -0.02em;
  margin-bottom: var(--space-3);
}
.wa-h2 em { color: var(--color-secondary); font-style: normal; }
.wa-lead {
  font-size: 0.95rem;
  color: var(--color-gray);
  max-width: 500px;
  margin: 0 auto;
  line-height: 1.75;
}
/* Technique: asymmetric 2+2 why grid */
.why-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 20px;
}
.why-card {
  background: #f7f8fb;
  border: 1px solid rgba(229,53,231,0.09);
  border-radius: var(--radius-lg);
  padding: var(--space-7) var(--space-6);
  display: flex;
  gap: var(--space-5);
  align-items: flex-start;
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.why-card:hover {
  transform: translateY(-3px);
  box-shadow: 0 10px 28px rgba(229,53,231,0.1), 0 4px 8px rgba(0,0,0,0.05);
}
.why-card-icon {
  flex-shrink: 0;
  width: 48px; height: 48px;
  border-radius: 12px;
  background: linear-gradient(135deg, rgba(229,53,231,0.11), rgba(249,183,62,0.07));
  border: 1px solid rgba(229,53,231,0.15);
  display: flex; align-items: center; justify-content: center;
  color: var(--color-secondary);
}
.why-card-icon svg { width: 22px; height: 22px; }
.why-card h4 {
  font-size: 0.95rem;
  font-weight: 800;
  color: var(--color-dark);
  margin-bottom: var(--space-2);
}
.why-card p {
  font-size: 0.84rem;
  color: var(--color-gray);
  line-height: 1.7;
  margin: 0;
}

/* ── 6. EMERGENCY CTA SECTION ── */
.areas-cta {
  padding: var(--space-14) 0;
  background: linear-gradient(135deg, #09090f 0%, #1e082e 55%, #0a1525 100%);
  position: relative;
  overflow: hidden;
  text-align: center;
}
.areas-cta::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 55% 80% at 20% 50%, rgba(229,53,231,0.13) 0%, transparent 60%),
    radial-gradient(ellipse 45% 70% at 80% 50%, rgba(249,183,62,0.09) 0%, transparent 60%);
  pointer-events: none;
}
.areas-cta-inner {
  position: relative;
  z-index: 1;
  max-width: 560px;
  margin: 0 auto;
}
.areas-cta h2 {
  font-size: clamp(1.5rem, 2.8vw, 2.2rem);
  font-weight: 900;
  color: var(--color-white);
  text-wrap: balance;
  margin-bottom: var(--space-3);
}
.areas-cta h2 em { color: var(--color-accent); font-style: normal; }
.areas-cta p {
  font-size: 0.95rem;
  color: rgba(255,255,255,0.58);
  max-width: 440px;
  margin: 0 auto var(--space-7);
  line-height: 1.75;
}
.areas-cta-btns {
  display: flex;
  gap: var(--space-3);
  justify-content: center;
  flex-wrap: wrap;
}

/* ── RESPONSIVE ── */
@media (max-width: 1024px) {
  .area-cards-grid { grid-template-columns: repeat(2, 1fr); }
  .county-header { flex-direction: column; gap: var(--space-4); }
}
@media (max-width: 768px) {
  .why-grid { grid-template-columns: 1fr; }
  .areas-hero-stats { gap: var(--space-6); }
}
@media (max-width: 600px) {
  .area-cards-grid { grid-template-columns: 1fr; }
}
</style>

<!-- ═══ HERO ═══ -->
<section class="areas-hero" aria-label="Service areas overview">
  <div class="areas-hero-orb areas-hero-orb-1"></div>
  <div class="areas-hero-orb areas-hero-orb-2"></div>

  <div class="container">
    <div class="areas-hero-inner">
      <span class="areas-eyebrow">
        <span class="pulse-dot"></span>
        Coverage Across 3 Counties
      </span>
      <h1>Bail Bonds Near Me — We Cover All of <span class="hl-gold">South Florida</span> <span class="hl-mag">24/7</span></h1>
      <p class="areas-hero-answer">Mad Extra Bail Bonds is a licensed Florida bail bondsman based in Delray Beach, serving Palm Beach County, Broward County, and Miami-Dade County. We post bail at every county jail, city lockup, and federal facility across this 50-mile coverage radius — any charge, any hour.</p>

      <div class="areas-hero-stats">
        <div class="ah-stat">
          <span class="ah-stat-num">3</span>
          <span class="ah-stat-label">Counties Covered</span>
        </div>
        <div class="ah-stat">
          <span class="ah-stat-num">15+</span>
          <span class="ah-stat-label">Cities Served</span>
        </div>
        <div class="ah-stat">
          <span class="ah-stat-num">24/7</span>
          <span class="ah-stat-label">Always Available</span>
        </div>
        <div class="ah-stat">
          <span class="ah-stat-num">11+</span>
          <span class="ah-stat-label">Years Experience</span>
        </div>
      </div>

      <div class="areas-hero-btns">
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo preg_replace('/\D/','', $phone); ?>" class="btn-areas-primary">
          <?php echo lucide_icon('phone'); ?> Call Now — 24/7
        </a>
        <?php else: ?>
        <a href="/contact/" class="btn-areas-primary">
          <?php echo lucide_icon('zap'); ?> Get Help Now
        </a>
        <?php endif; ?>
        <a href="/contact/" class="btn-areas-secondary">Free Consultation</a>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SVG DIVIDER ═══ -->
<div class="divider-dark-to-light" aria-hidden="true">
  <svg viewBox="0 0 1440 55" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,55 L0,8 Q480,55 720,22 Q960,-2 1440,38 L1440,55 Z" fill="#f4f6f9"/>
  </svg>
</div>

<!-- ═══ COVERAGE INTRO ═══ -->
<section class="coverage-intro" aria-label="Coverage overview">
  <div class="container">
    <div class="coverage-intro-inner">
      <span class="ci-eyebrow">Coverage That Reaches You</span>
      <h2 class="ci-h2">What South Florida counties and cities does Mad Extra Bail Bonds <em>serve</em>?</h2>
      <div class="answer-block-ci">
        <p>Mad Extra Bail Bonds serves all of Palm Beach County, Broward County, and Miami-Dade County — covering every major city from Palm Beach Gardens in the north to Miami in the south. We post bail at every county and municipal jail within this 50-mile radius, 24 hours a day.</p>
      </div>
      <p>Based in Delray Beach, FL, Mad Extra Bail Bonds has been helping South Florida families for over 11 years. When someone you care about is arrested anywhere from West Palm Beach to Miami, one call is all it takes to start the release process — regardless of the facility, the charge, or the hour.</p>
      <p>We are licensed by the Florida Department of Financial Services and have direct relationships with intake staff at the Palm Beach County Jail, Broward County Main Jail, North Regional Broward Jail, Miami-Dade Main Jail, and Turner Guilford Knight Correctional Center. That familiarity speeds up processing when every hour counts.</p>
    </div>
  </div>
</section>

<!-- ═══ SVG DIVIDER ═══ -->
<div class="divider-light-to-dark" aria-hidden="true">
  <svg viewBox="0 0 1440 55" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,0 Q360,55 720,28 Q1080,5 1440,44 L1440,55 L0,55 Z" fill="#09090f"/>
  </svg>
</div>

<!-- ═══ COUNTY AREA GRIDS ═══ -->
<section class="county-section" aria-label="Service areas by county">
  <div class="container county-section-inner">

    <?php foreach ($areasByCounty as $countyName => $areas):
      $meta = $countyMeta[$countyName] ?? ['icon' => 'map-pin', 'color' => 'var(--color-accent)', 'jail' => '', 'tagline' => ''];
      $accentStyle = 'color:' . $meta['color'];
    ?>
    <div style="margin-bottom: var(--space-14);">
      <div class="county-header">
        <div class="county-icon-ring" style="border-color:<?php echo $meta['color']; ?>33;">
          <?php $ic = lucide_icon($meta['icon']); echo str_replace('svg', 'svg style="' . $accentStyle . '"', $ic, ); ?>
        </div>
        <div class="county-header-text">
          <h2 class="county-name" style="<?php echo $accentStyle; ?>"><?php echo htmlspecialchars($countyName); ?></h2>
          <?php if ($meta['jail']): ?>
          <p class="county-jail-note"><?php echo htmlspecialchars($meta['jail']); ?></p>
          <?php endif; ?>
          <p class="county-tagline"><?php echo htmlspecialchars($meta['tagline']); ?></p>
        </div>
      </div>

      <div class="area-cards-grid">
        <?php foreach ($areas as $area): ?>
        <a href="/areas/<?php echo htmlspecialchars($area['slug']); ?>/" class="area-card" aria-label="<?php echo htmlspecialchars($area['name']); ?> bail bonds">
          <div>
            <p class="area-card-county"><?php echo htmlspecialchars($countyName); ?></p>
            <p class="area-card-name"><?php echo htmlspecialchars($area['name']); ?></p>
          </div>
          <div class="area-card-services">
            <span class="area-service-tag">Bail Bonds</span>
            <span class="area-service-tag">DUI Bonds</span>
            <span class="area-service-tag">Felony</span>
            <span class="area-service-tag">24/7</span>
          </div>
          <span class="area-card-cta">
            View details <?php echo lucide_icon('arrow-right'); ?>
          </span>
        </a>
        <?php endforeach; ?>
      </div>
    </div>
    <?php endforeach; ?>

  </div>
</section>

<!-- ═══ SVG DIVIDER ═══ -->
<div class="divider-dark-to-white" aria-hidden="true">
  <svg viewBox="0 0 1440 55" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,0 Q720,55 1440,10 L1440,55 L0,55 Z" fill="#ffffff"/>
  </svg>
</div>

<!-- ═══ WHY SECTION ═══ -->
<section class="why-areas" aria-label="Why Mad Extra Bail Bonds">
  <div class="container">
    <div class="why-areas-header">
      <span class="wa-eyebrow">Why Choose Mad Extra</span>
      <h2 class="wa-h2">Why does it matter which bondsman you call across <em>South Florida</em>?</h2>
      <p class="wa-lead">Familiarity with local jails, 24/7 availability, and 11+ years of South Florida experience — these are the differences that get your loved one home faster.</p>
    </div>
    <div class="why-grid">
      <div class="why-card">
        <div class="why-card-icon"><?php echo lucide_icon('landmark'); ?></div>
        <div>
          <h4>Local Jail Knowledge</h4>
          <p>We know the intake staff, the booking procedures, and the fastest lanes at every major facility from PBC Jail in West Palm Beach to TGK in Miami. That familiarity saves hours.</p>
        </div>
      </div>
      <div class="why-card">
        <div class="why-card-icon"><?php echo lucide_icon('clock'); ?></div>
        <div>
          <h4>True 24/7 Availability</h4>
          <p>Not an answering service. Not a voicemail. Someone with the authority to start the process picks up every call, every hour — including weekends, nights, and holidays.</p>
        </div>
      </div>
      <div class="why-card">
        <div class="why-card-icon"><?php echo lucide_icon('shield-check'); ?></div>
        <div>
          <h4>Licensed Across All 3 Counties</h4>
          <p>Our Florida bail bond license is valid at every facility in Palm Beach, Broward, and Miami-Dade — you don't need to find a different bondsman depending on where the arrest happened.</p>
        </div>
      </div>
      <div class="why-card">
        <div class="why-card-icon"><?php echo lucide_icon('users'); ?></div>
        <div>
          <h4>Bilingual Service</h4>
          <p>We serve South Florida's diverse communities, including Spanish-speaking families in Miami, Hialeah, and Miami Gardens, and Haitian Creole-speaking families across Broward and Miami-Dade.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ EMERGENCY CTA ═══ -->
<section class="areas-cta" aria-label="Emergency contact">
  <div class="areas-cta-inner">
    <h2>Need a bondsman in <em>South Florida right now</em>?</h2>
    <p>We cover all of Palm Beach, Broward, and Miami-Dade. One call starts the process — 24 hours a day, 365 days a year, regardless of the charge or the facility.</p>
    <div class="areas-cta-btns">
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo preg_replace('/\D/','', $phone); ?>" class="btn-areas-primary">
        <?php echo lucide_icon('phone'); ?> Call Now — 24/7
      </a>
      <?php endif; ?>
      <a href="/contact/" class="btn-areas-secondary">Send a Message</a>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
