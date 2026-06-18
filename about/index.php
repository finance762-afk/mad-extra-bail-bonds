<?php
/**
 * about/index.php — About Mad Extra Bail Bonds
 * Delray Beach, FL | Page One Insights v6.1 | Premium Tier
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'About Mad Extra Bail Bonds | Delray Beach, FL | 11+ Years Serving South Florida';
$pageDescription = 'Mad Extra Bail Bonds has served South Florida families for over 11 years from Delray Beach, FL. Licensed bondsman covering Palm Beach, Broward & Miami-Dade County. 24/7 bail bonds with real people who care.';
$canonicalUrl    = $siteUrl . '/about/';
$currentPage     = 'about';

$_breadcrumb = generateBreadcrumbSchema([
    ['name' => 'Home',  'url' => $siteUrl . '/'],
    ['name' => 'About', 'url' => $siteUrl . '/about/'],
]);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
echo '<script type="application/ld+json">' . json_encode($_breadcrumb, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>' . "\n";
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
/* ============================================================
   ABOUT PAGE — Mad Extra Bail Bonds
   Premium Tier | Dark/Neon Design System
   Techniques: layered hero, neon orbs, glassmorphism stat blocks,
   asymmetric split layout, timeline, tinted mission cards,
   SVG dividers, gradient text, neon glow CTA
   ============================================================ */

/* ── 1. HERO ── */
.about-hero {
  position: relative;
  min-height: 55vh;
  display: flex;
  align-items: center;
  background: #09090f;
  overflow: hidden;
  padding-top: var(--nav-height, 72px);
  padding-bottom: var(--space-12);
}
.about-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 60% 80% at 0% 45%, rgba(229,53,231,0.2) 0%, transparent 60%),
    radial-gradient(ellipse 50% 55% at 90% 20%, rgba(249,183,62,0.14) 0%, transparent 55%),
    radial-gradient(ellipse 70% 45% at 50% 110%, rgba(10,18,38,0.99) 0%, transparent 75%);
  pointer-events: none;
}
.about-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.035'/%3E%3C/svg%3E");
  opacity: 0.5;
  pointer-events: none;
}
.a-orb {
  position: absolute;
  border-radius: 50%;
  pointer-events: none;
}
.a-orb-1 {
  width: 520px; height: 520px;
  top: -160px; left: -120px;
  background: radial-gradient(circle, rgba(229,53,231,0.13) 0%, transparent 70%);
  animation: a-orb-drift 15s ease-in-out infinite;
}
.a-orb-2 {
  width: 380px; height: 380px;
  bottom: -80px; right: 4%;
  background: radial-gradient(circle, rgba(249,183,62,0.11) 0%, transparent 70%);
  animation: a-orb-drift 19s ease-in-out infinite reverse;
  animation-delay: -7s;
}
@keyframes a-orb-drift {
  0%,100% { transform: translate(0,0) scale(1); }
  40%     { transform: translate(14px,-18px) scale(1.03); }
  70%     { transform: translate(-10px,12px) scale(0.97); }
}
.about-hero-inner {
  position: relative;
  z-index: 2;
  max-width: 760px;
  padding: var(--space-10) 0;
}
.about-eyebrow {
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
  border: 1px solid rgba(229,53,231,0.38);
  border-radius: 100px;
  background: rgba(229,53,231,0.07);
  margin-bottom: var(--space-5);
}
.about-eyebrow .pulse-dot {
  width: 7px; height: 7px;
  border-radius: 50%;
  background: var(--color-secondary);
  box-shadow: 0 0 8px var(--color-secondary);
  animation: pulse-dot 2s ease-in-out infinite;
  flex-shrink: 0;
}
@keyframes pulse-dot {
  0%,100% { opacity:1; transform:scale(1); }
  50%     { opacity:.5; transform:scale(.7); }
}
.about-hero h1 {
  font-size: clamp(2rem, 4.5vw, 3.6rem);
  font-weight: 900;
  color: var(--color-white);
  line-height: 1.08;
  letter-spacing: -0.03em;
  text-wrap: balance;
  margin-bottom: var(--space-5);
}
.about-hero h1 .hl-mag  { color: var(--color-secondary); text-shadow: 0 0 28px rgba(229,53,231,0.5); }
.about-hero h1 .hl-gold { color: var(--color-accent);    text-shadow: 0 0 28px rgba(249,183,62,0.5); }
.about-hero-lead {
  font-size: 1.05rem;
  color: rgba(255,255,255,0.65);
  line-height: 1.78;
  max-width: 640px;
  margin-bottom: var(--space-7);
}
.about-hero-badges {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-2);
}
.a-badge {
  display: inline-flex;
  align-items: center;
  gap: 5px;
  font-size: 0.68rem;
  font-weight: 700;
  color: rgba(255,255,255,0.7);
  padding: 5px 12px;
  border-radius: 100px;
  background: rgba(255,255,255,0.055);
  border: 1px solid rgba(255,255,255,0.1);
  text-transform: uppercase;
  letter-spacing: 0.5px;
  white-space: nowrap;
}
.a-badge svg { width: 11px; height: 11px; color: var(--color-accent); flex-shrink: 0; }

/* ── 2. STATS BAND (dark, glassmorphism) ── */
.stats-band {
  background: linear-gradient(135deg, #0d1020 0%, #1a0830 55%, #0a1425 100%);
  padding: var(--space-12) 0;
  position: relative;
  overflow: hidden;
}
.stats-band::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 40% 80% at 0% 50%, rgba(229,53,231,0.1) 0%, transparent 60%),
    radial-gradient(ellipse 35% 70% at 100% 50%, rgba(249,183,62,0.07) 0%, transparent 60%);
  pointer-events: none;
}
.stats-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 2px;
  position: relative;
  z-index: 1;
}
.stat-card {
  padding: var(--space-7) var(--space-6);
  text-align: center;
  position: relative;
}
.stat-card + .stat-card::before {
  content: '';
  position: absolute;
  top: 15%;
  left: 0;
  height: 70%;
  width: 1px;
  background: linear-gradient(to bottom, transparent, rgba(255,255,255,0.12), transparent);
}
.stat-num {
  font-family: var(--font-heading);
  font-size: clamp(2.4rem, 5vw, 3.8rem);
  font-weight: 900;
  line-height: 1;
  background: linear-gradient(135deg, var(--color-secondary) 0%, var(--color-accent) 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  margin-bottom: var(--space-2);
  letter-spacing: -0.03em;
}
.stat-label {
  font-size: 0.8rem;
  font-weight: 600;
  color: rgba(255,255,255,0.55);
  text-transform: uppercase;
  letter-spacing: 1px;
  line-height: 1.5;
}

/* ── 3. STORY SECTION (light) ── */
.story-section {
  padding: var(--space-20) 0;
  background: #f4f6f9;
}
.story-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-16);
  align-items: center;
}
.story-eyebrow {
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
  border-radius: 100px;
  background: rgba(229,53,231,0.06);
  margin-bottom: var(--space-4);
}
.story-h2 {
  font-size: clamp(1.8rem, 3.5vw, 2.8rem);
  font-weight: 900;
  color: var(--color-dark);
  line-height: 1.12;
  letter-spacing: -0.02em;
  text-wrap: balance;
  margin-bottom: var(--space-5);
}
.story-h2 em { color: var(--color-secondary); font-style: normal; }
.story-body p {
  font-size: 0.96rem;
  color: var(--color-gray);
  line-height: 1.82;
  margin-bottom: var(--space-4);
}
.story-body p:last-child { margin-bottom: 0; }
.story-aside {
  position: relative;
}
/* Technique: asymmetric card stack on the right */
.story-card-stack {
  position: relative;
  height: 420px;
}
.story-card-bg {
  position: absolute;
  top: 24px;
  right: -16px;
  width: 88%;
  height: 88%;
  background: linear-gradient(135deg, rgba(229,53,231,0.14), rgba(249,183,62,0.08));
  border-radius: 20px;
  border: 1px solid rgba(229,53,231,0.22);
}
.story-card-main {
  position: absolute;
  top: 0;
  left: 0;
  width: 88%;
  height: 88%;
  background-image: url('https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=900&h=600&q=80');
  background-size: cover;
  background-position: center;
  border-radius: 20px;
  padding: var(--space-8);
  border: 1px solid rgba(255,255,255,0.09);
  overflow: hidden;
}
.story-card-main::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(135deg, rgba(9,9,15,0.91) 0%, rgba(28,8,48,0.87) 100%);
  border-radius: 20px;
  z-index: 0;
  pointer-events: none;
}
.story-card-main::after {
  content: '';
  position: absolute;
  top: -80px; right: -80px;
  width: 280px; height: 280px;
  border-radius: 50%;
  background: radial-gradient(circle, rgba(229,53,231,0.2) 0%, transparent 70%);
  pointer-events: none;
  z-index: 1;
}
.scm-logo {
  font-family: var(--font-heading);
  font-size: 1.4rem;
  font-weight: 900;
  color: var(--color-white);
  margin-bottom: var(--space-6);
  position: relative;
  z-index: 2;
  line-height: 1.2;
}
.scm-logo span { color: var(--color-secondary); }
.scm-items {
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
  position: relative;
  z-index: 2;
}
.scm-item {
  display: flex;
  align-items: flex-start;
  gap: var(--space-3);
}
.scm-dot {
  flex-shrink: 0;
  width: 28px; height: 28px;
  border-radius: 50%;
  background: linear-gradient(135deg, var(--color-secondary) 0%, #8f00a0 100%);
  display: flex; align-items: center; justify-content: center;
  font-size: 0.6rem;
  font-weight: 900;
  color: var(--color-white);
  box-shadow: 0 0 14px rgba(229,53,231,0.35);
  margin-top: 2px;
}
.scm-text strong {
  display: block;
  font-size: 0.82rem;
  font-weight: 800;
  color: var(--color-white);
  margin-bottom: 2px;
}
.scm-text span {
  font-size: 0.75rem;
  color: rgba(255,255,255,0.5);
  line-height: 1.5;
}
/* Floating badge */
.story-floating-badge {
  position: absolute;
  bottom: 20px;
  right: 0;
  background: var(--color-accent);
  color: #0a0d1a;
  border-radius: 12px;
  padding: var(--space-4) var(--space-5);
  box-shadow: 0 8px 28px rgba(249,183,62,0.4);
  z-index: 10;
}
.sfb-num {
  font-family: var(--font-heading);
  font-size: 1.6rem;
  font-weight: 900;
  color: #0a0d1a;
  line-height: 1;
  margin-bottom: 2px;
}
.sfb-label {
  font-size: 0.68rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1px;
  color: rgba(0,0,0,0.65);
  line-height: 1.4;
}

/* ── 4. MISSION CARDS (dark) ── */
.mission-section {
  padding: var(--space-20) 0;
  background: linear-gradient(135deg, #09090f 0%, #160a28 55%, #0a1528 100%);
  position: relative;
  overflow: hidden;
}
.mission-section::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 50% 80% at 5% 50%, rgba(229,53,231,0.1) 0%, transparent 60%),
    radial-gradient(ellipse 40% 60% at 95% 50%, rgba(249,183,62,0.07) 0%, transparent 60%);
  pointer-events: none;
}
.mission-header {
  text-align: center;
  margin-bottom: var(--space-12);
  position: relative;
  z-index: 1;
}
.mission-eyebrow {
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
  border-radius: 100px;
  background: rgba(249,183,62,0.07);
  margin-bottom: var(--space-4);
}
.mission-h2 {
  font-size: clamp(1.7rem, 3vw, 2.5rem);
  font-weight: 900;
  color: var(--color-white);
  line-height: 1.12;
  letter-spacing: -0.025em;
  text-wrap: balance;
  margin-bottom: var(--space-3);
}
.mission-h2 em { color: var(--color-secondary); font-style: normal; }
.mission-sub {
  font-size: 0.95rem;
  color: rgba(255,255,255,0.5);
  max-width: 520px;
  margin: 0 auto;
  line-height: 1.75;
}
/* Technique: 3-column mission cards with gradient border on hover */
.mission-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
  position: relative;
  z-index: 1;
}
.mission-card {
  background: rgba(255,255,255,0.04);
  border: 1px solid rgba(255,255,255,0.08);
  border-radius: 18px;
  padding: var(--space-8) var(--space-7);
  transition: transform var(--transition-base), border-color var(--transition-base), box-shadow var(--transition-base);
  position: relative;
  overflow: hidden;
}
.mission-card::after {
  content: '';
  position: absolute;
  bottom: 0; left: 0; right: 0;
  height: 2px;
  background: linear-gradient(90deg, var(--color-secondary), var(--color-accent));
  transform: scaleX(0);
  transform-origin: left;
  transition: transform 0.4s ease;
}
.mission-card:hover {
  transform: translateY(-6px);
  border-color: rgba(229,53,231,0.3);
  box-shadow: 0 18px 42px rgba(229,53,231,0.12), 0 4px 12px rgba(0,0,0,0.2);
}
.mission-card:hover::after { transform: scaleX(1); }
.mc-icon {
  width: 54px; height: 54px;
  border-radius: 50%;
  border: 1px solid rgba(229,53,231,0.25);
  background: linear-gradient(135deg, rgba(229,53,231,0.15), rgba(249,183,62,0.07));
  display: flex; align-items: center; justify-content: center;
  margin-bottom: var(--space-5);
  color: var(--color-secondary);
}
.mc-icon svg { width: 24px; height: 24px; }
.mc-title {
  font-family: var(--font-heading);
  font-size: 1.05rem;
  font-weight: 800;
  color: var(--color-white);
  margin-bottom: var(--space-3);
  line-height: 1.3;
}
.mc-body {
  font-size: 0.87rem;
  color: rgba(255,255,255,0.55);
  line-height: 1.75;
  margin: 0;
}

/* ── 5. APPROACH SECTION (light, asymmetric) ── */
.approach-section {
  padding: var(--space-20) 0;
  background: var(--color-white);
}
.approach-inner {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-16);
  align-items: start;
}
.approach-content h2 {
  font-size: clamp(1.7rem, 3vw, 2.5rem);
  font-weight: 900;
  color: var(--color-dark);
  line-height: 1.12;
  letter-spacing: -0.02em;
  text-wrap: balance;
  margin-bottom: var(--space-4);
}
.approach-content h2 em { color: var(--color-secondary); font-style: normal; }
.approach-content p {
  font-size: 0.96rem;
  color: var(--color-gray);
  line-height: 1.82;
  margin-bottom: var(--space-4);
}
/* Technique: left-bordered answer block */
.approach-answer {
  background: linear-gradient(135deg, rgba(229,53,231,0.06), rgba(249,183,62,0.03));
  border-left: 3px solid var(--color-secondary);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  padding: var(--space-5) var(--space-6);
  margin-bottom: var(--space-6);
}
.approach-answer p {
  font-size: 0.95rem;
  color: var(--color-dark);
  line-height: 1.8;
  margin: 0;
  font-style: italic;
}
.approach-list {
  list-style: none;
  padding: 0;
  margin: 0 0 var(--space-7);
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
}
.approach-list li {
  display: flex;
  align-items: flex-start;
  gap: var(--space-3);
  font-size: 0.92rem;
  color: var(--color-gray);
  line-height: 1.65;
}
.al-check {
  flex-shrink: 0;
  width: 22px; height: 22px;
  border-radius: 50%;
  background: linear-gradient(135deg, var(--color-secondary), var(--color-accent));
  display: flex; align-items: center; justify-content: center;
  font-size: 0.58rem;
  color: var(--color-white);
  font-weight: 900;
  margin-top: 2px;
}
/* Areas covered card on the right */
.approach-card {
  background: linear-gradient(145deg, #09090f, #1a0830);
  border-radius: 20px;
  padding: var(--space-8);
  border: 1px solid rgba(229,53,231,0.18);
  position: sticky;
  top: calc(var(--nav-height, 72px) + var(--space-5));
}
.approach-card h3 {
  font-family: var(--font-heading);
  font-size: 1.05rem;
  font-weight: 800;
  color: var(--color-white);
  margin-bottom: var(--space-5);
  display: flex;
  align-items: center;
  gap: var(--space-2);
}
.approach-card h3 svg { width: 18px; height: 18px; color: var(--color-accent); }
.county-block {
  margin-bottom: var(--space-5);
  padding-bottom: var(--space-5);
  border-bottom: 1px solid rgba(255,255,255,0.06);
}
.county-block:last-of-type { border-bottom: none; }
.county-name {
  font-size: 0.68rem;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 2px;
  color: var(--color-accent);
  margin-bottom: var(--space-3);
}
.county-cities {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-2);
}
.city-pill {
  font-size: 0.72rem;
  color: rgba(255,255,255,0.6);
  background: rgba(255,255,255,0.05);
  border: 1px solid rgba(255,255,255,0.08);
  border-radius: 100px;
  padding: 3px 10px;
}
.approach-card-cta {
  display: block;
  width: 100%;
  padding: 12px;
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
  box-shadow: 0 4px 22px rgba(229,53,231,0.38);
  transition: all var(--transition-base);
  margin-top: var(--space-5);
}
.approach-card-cta:hover {
  box-shadow: 0 8px 34px rgba(229,53,231,0.58);
  transform: translateY(-1px);
  color: var(--color-white);
}

/* ── 6. BOTTOM CTA (dark) ── */
.about-cta {
  padding: var(--space-16) 0;
  background: linear-gradient(135deg, #09090f 0%, #1e0828 50%, #0a1425 100%);
  position: relative;
  overflow: hidden;
  text-align: center;
}
.about-cta::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 55% 80% at 25% 50%, rgba(229,53,231,0.12) 0%, transparent 60%),
    radial-gradient(ellipse 45% 70% at 75% 50%, rgba(249,183,62,0.09) 0%, transparent 60%);
  pointer-events: none;
}
.about-cta-inner {
  position: relative;
  z-index: 1;
  max-width: 580px;
  margin: 0 auto;
}
.about-cta h2 {
  font-size: clamp(1.5rem, 2.8vw, 2.4rem);
  font-weight: 900;
  color: var(--color-white);
  text-wrap: balance;
  margin-bottom: var(--space-3);
  letter-spacing: -0.02em;
}
.about-cta h2 em { color: var(--color-accent); font-style: normal; }
.about-cta p {
  font-size: 0.95rem;
  color: rgba(255,255,255,0.55);
  max-width: 440px;
  margin: 0 auto var(--space-8);
  line-height: 1.75;
}
.about-cta-btns {
  display: flex;
  gap: var(--space-3);
  justify-content: center;
  flex-wrap: wrap;
}
.btn-cta-primary {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 14px 32px;
  background: var(--color-secondary);
  color: var(--color-white);
  font-family: var(--font-heading);
  font-size: 0.82rem;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  border-radius: var(--radius-md);
  text-decoration: none;
  box-shadow: 0 0 24px rgba(229,53,231,0.44), 0 4px 14px rgba(0,0,0,0.3);
  transition: all var(--transition-base);
}
.btn-cta-primary:hover {
  background: #f043f2;
  box-shadow: 0 0 44px rgba(229,53,231,0.68), 0 8px 22px rgba(0,0,0,0.35);
  transform: translateY(-2px);
  color: var(--color-white);
}
.btn-cta-primary svg { width: 15px; height: 15px; }
.btn-cta-secondary {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 13px 28px;
  background: transparent;
  color: var(--color-accent);
  border: 2px solid rgba(249,183,62,0.5);
  font-family: var(--font-heading);
  font-size: 0.82rem;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  border-radius: var(--radius-md);
  text-decoration: none;
  transition: all var(--transition-base);
}
.btn-cta-secondary:hover {
  background: var(--color-accent);
  color: #0a0d1a;
  border-color: var(--color-accent);
  box-shadow: 0 0 28px rgba(249,183,62,0.42);
  transform: translateY(-2px);
}

/* ── RESPONSIVE ── */
@media (max-width: 1024px) {
  .story-grid,
  .approach-inner { grid-template-columns: 1fr; gap: var(--space-10); }
  .story-card-stack { height: 340px; }
  .approach-card { position: static; }
}
@media (max-width: 768px) {
  .stats-grid { grid-template-columns: repeat(2, 1fr); }
  .stats-grid .stat-card:nth-child(3)::before { display: none; }
  .mission-grid { grid-template-columns: 1fr; }
}
@media (max-width: 480px) {
  .stats-grid { grid-template-columns: 1fr 1fr; }
}
</style>

<!-- ═══ HERO ═══ -->
<section class="about-hero" aria-label="About Mad Extra Bail Bonds">
  <div class="a-orb a-orb-1"></div>
  <div class="a-orb a-orb-2"></div>
  <div class="container">
    <div class="about-hero-inner">
      <span class="about-eyebrow">
        <span class="pulse-dot"></span>
        Delray Beach, FL — Since <?php echo $yearEstablished; ?>
      </span>
      <h1>South Florida's <span class="hl-mag">Committed</span> Bail Bond Team — <span class="hl-gold">11+ Years</span> of Getting Families Home</h1>
      <p class="about-hero-lead">Mad Extra Bail Bonds is a licensed bail bondsman based in Delray Beach, FL, serving families across Palm Beach County, Broward County, and Miami-Dade County. When someone you love is behind bars, we move fast — because every hour matters.</p>
      <div class="about-hero-badges">
        <span class="a-badge"><?php echo lucide_icon('shield-check'); ?> Licensed FL Bondsman</span>
        <span class="a-badge"><?php echo lucide_icon('clock'); ?> Available 24/7</span>
        <span class="a-badge"><?php echo lucide_icon('map-pin'); ?> 3 County Service Area</span>
        <span class="a-badge"><?php echo lucide_icon('landmark'); ?> All South FL Jails</span>
        <span class="a-badge"><?php echo lucide_icon('users'); ?> 11+ Years in Business</span>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SVG DIVIDER ═══ -->
<div style="line-height:0;background:#09090f" aria-hidden="true">
  <svg viewBox="0 0 1440 50" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" style="display:block;width:100%">
    <path d="M0,0 Q480,50 720,22 Q960,0 1440,38 L1440,50 L0,50 Z" fill="<?php echo urlencode('#1a0830'); ?>"/>
  </svg>
</div>

<!-- ═══ STATS BAND ═══ -->
<div class="stats-band" aria-label="Company statistics">
  <div class="container">
    <div class="stats-grid" data-p1-dynamic>
      <div class="stat-card">
        <div class="stat-num" data-target="11">11+</div>
        <div class="stat-label">Years Serving<br>South Florida</div>
      </div>
      <div class="stat-card">
        <div class="stat-num" data-target="3">3</div>
        <div class="stat-label">Counties<br>Covered</div>
      </div>
      <div class="stat-card">
        <div class="stat-num" data-target="8">8+</div>
        <div class="stat-label">Types of Bail<br>Bonds Handled</div>
      </div>
      <div class="stat-card">
        <div class="stat-num">24/7</div>
        <div class="stat-label">Emergency<br>Availability</div>
      </div>
    </div>
  </div>
</div>

<!-- ═══ SVG DIVIDER ═══ -->
<div style="line-height:0;background:#1a0830" aria-hidden="true">
  <svg viewBox="0 0 1440 50" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" style="display:block;width:100%">
    <path d="M0,50 L0,12 Q360,50 720,22 Q1080,-4 1440,28 L1440,50 Z" fill="#f4f6f9"/>
  </svg>
</div>

<!-- ═══ STORY SECTION ═══ -->
<section class="story-section" aria-label="Our story">
  <div class="container">
    <div class="story-grid">
      <div class="story-body">
        <span class="story-eyebrow"><?php echo lucide_icon('book-open'); ?> Our Story</span>
        <h2 class="story-h2">A South Florida bail bond company built on <em>trust and results</em></h2>
        <p>Mad Extra Bail Bonds was founded with one purpose: to be the bondsman South Florida families can count on when a legal crisis hits at the worst possible moment. We are a licensed Florida bail bondsman based in Delray Beach, serving every county jail and city lockup from Palm Beach to Miami-Dade.</p>
        <p>With over 11 years in business, we have helped hundreds of South Florida families navigate the bail bond process. We know the Palm Beach County Jail, Broward Main, TGK, and every facility in between — the booking procedures, the shift changes, the fastest paths to release. That experience saves your family time when time is the only thing that matters.</p>
        <p>We understand that a bail emergency affects the whole family — emotionally and financially. That's why we go beyond just posting bond. We take the time to explain the process clearly, work through financial challenges, and support families with educational guidance on next steps and how to avoid repeat law enforcement encounters. Our goal is to help your family move forward, not just get through tonight.</p>
      </div>
      <div class="story-aside">
        <div class="story-card-stack">
          <div class="story-card-bg"></div>
          <div class="story-card-main">
            <div class="scm-logo">Mad Extra<br><span>Bail Bonds</span></div>
            <div class="scm-items">
              <div class="scm-item">
                <div class="scm-dot">✓</div>
                <div class="scm-text">
                  <strong>Licensed by Florida DFS</strong>
                  <span>Florida Department of Financial Services licensed bail bondsman</span>
                </div>
              </div>
              <div class="scm-item">
                <div class="scm-dot">✓</div>
                <div class="scm-text">
                  <strong>11+ Years of Experience</strong>
                  <span>Serving South Florida families since <?php echo $yearEstablished; ?></span>
                </div>
              </div>
              <div class="scm-item">
                <div class="scm-dot">✓</div>
                <div class="scm-text">
                  <strong>Three-County Coverage</strong>
                  <span>Palm Beach, Broward, and Miami-Dade County jails</span>
                </div>
              </div>
              <div class="scm-item">
                <div class="scm-dot">✓</div>
                <div class="scm-text">
                  <strong>24/7 Emergency Response</strong>
                  <span>We answer every call — midnight, weekends, holidays</span>
                </div>
              </div>
            </div>
          </div>
          <div class="story-floating-badge">
            <div class="sfb-num">24/7</div>
            <div class="sfb-label">Always<br>Available</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SVG DIVIDER ═══ -->
<div style="line-height:0;background:#f4f6f9" aria-hidden="true">
  <svg viewBox="0 0 1440 50" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" style="display:block;width:100%">
    <path d="M0,0 Q360,50 720,20 Q1080,-10 1440,36 L1440,50 L0,50 Z" fill="#09090f"/>
  </svg>
</div>

<!-- ═══ MISSION CARDS (dark) ═══ -->
<section class="mission-section" aria-label="Our mission and values">
  <div class="container">
    <div class="mission-header">
      <span class="mission-eyebrow"><?php echo lucide_icon('target'); ?> What Drives Us</span>
      <h2 class="mission-h2">We don't just post bail — we help <em>families move forward</em></h2>
      <p class="mission-sub">Three principles guide every call we take and every bond we post across South Florida.</p>
    </div>
    <div class="mission-grid" data-p1-dynamic>
      <div class="mission-card">
        <div class="mc-icon"><?php echo lucide_icon('zap'); ?></div>
        <h3 class="mc-title">Speed When It Counts</h3>
        <p class="mc-body">Every hour in jail is an hour too many. We begin processing the moment you call — gathering details, verifying the bond, and communicating with the facility before many bondsmen have even answered the phone. For misdemeanor charges in South Florida, same-day release is often achievable.</p>
      </div>
      <div class="mission-card">
        <div class="mc-icon"><?php echo lucide_icon('heart'); ?></div>
        <h3 class="mc-title">Family-First Service</h3>
        <p class="mc-body">We understand this is one of the most stressful calls your family will ever make. We treat every client with dignity and compassion — no judgment, no lectures, just clear information and fast action. Financial challenges are discussed openly; we look for solutions, not obstacles.</p>
      </div>
      <div class="mission-card">
        <div class="mc-icon"><?php echo lucide_icon('book-open'); ?></div>
        <h3 class="mc-title">Beyond the Bond</h3>
        <p class="mc-body">Mad Extra Bail Bonds goes further than traditional bail bond services. We provide educational guidance on decision-making and proactive steps families can take to reduce future law enforcement encounters — because our goal is to help your family build a better path forward, not just get through tonight.</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SVG DIVIDER ═══ -->
<div style="line-height:0;background:#09090f" aria-hidden="true">
  <svg viewBox="0 0 1440 50" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" style="display:block;width:100%">
    <path d="M0,50 L0,14 Q480,50 720,24 Q960,0 1440,32 L1440,50 Z" fill="#ffffff"/>
  </svg>
</div>

<!-- ═══ APPROACH / COVERAGE SECTION ═══ -->
<section class="approach-section" aria-label="Our approach and service coverage">
  <div class="container">
    <div class="approach-inner">
      <div class="approach-content">
        <span class="story-eyebrow"><?php echo lucide_icon('map-pin'); ?> Service Area</span>
        <h2>Bail bonds near me in <em>Delray Beach, Boca Raton, Fort Lauderdale &amp; Miami</em></h2>
        <div class="approach-answer">
          <p>Mad Extra Bail Bonds is a licensed Florida bondsman based in Delray Beach. We post bail across a 50-mile service radius covering the jails and detention facilities in Palm Beach County, Broward County, and Miami-Dade County — including county main jails, city lockups, and federal holding facilities.</p>
        </div>
        <p>Our deep familiarity with South Florida's jail systems means we're not learning on your time. We know exactly who to call at the Palm Beach County Jail in West Palm Beach, Broward County Main Jail in Fort Lauderdale, Turner Guilford Knight Correctional Center (TGK) in Miami-Dade, and dozens of city and municipal facilities in between.</p>
        <p>Whether you're in Delray Beach, Boca Raton, Boynton Beach, Coral Springs, Pompano Beach, Miami, or anywhere in our 50-mile service area — we can help you get your loved one home faster.</p>
        <ul class="approach-list">
          <li><span class="al-check">✓</span> Bail bonds for felony, misdemeanor, DUI, drug charges, federal, immigration, and warrant cases</li>
          <li><span class="al-check">✓</span> Licensed at every South Florida jail — county, city, and federal detention</li>
          <li><span class="al-check">✓</span> Available around the clock — no answering machines, no voicemail traps</li>
          <li><span class="al-check">✓</span> Payment arrangements available for qualifying situations</li>
          <li><span class="al-check">✓</span> Bilingual service available — <?php echo htmlspecialchars($siteName); ?> serves South Florida's diverse communities</li>
        </ul>
        <a href="/contact/" class="approach-card-cta">Get Help Now — 24/7</a>
      </div>
      <div class="approach-card">
        <h3><?php echo lucide_icon('map-pin'); ?> Counties We Serve</h3>

        <div class="county-block">
          <div class="county-name">Palm Beach County</div>
          <div class="county-cities">
            <?php
            $pb = array_filter($serviceAreas, fn($a) => $a['county'] === 'Palm Beach County');
            foreach ($pb as $city):
            ?><span class="city-pill"><?php echo htmlspecialchars($city['name']); ?></span><?php endforeach; ?>
          </div>
        </div>

        <div class="county-block">
          <div class="county-name">Broward County</div>
          <div class="county-cities">
            <?php
            $brow = array_filter($serviceAreas, fn($a) => $a['county'] === 'Broward County');
            foreach ($brow as $city):
            ?><span class="city-pill"><?php echo htmlspecialchars($city['name']); ?></span><?php endforeach; ?>
          </div>
        </div>

        <div class="county-block">
          <div class="county-name">Miami-Dade County</div>
          <div class="county-cities">
            <?php
            $dade = array_filter($serviceAreas, fn($a) => $a['county'] === 'Miami-Dade County');
            foreach ($dade as $city):
            ?><span class="city-pill"><?php echo htmlspecialchars($city['name']); ?></span><?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SVG DIVIDER ═══ -->
<div style="line-height:0;background:#ffffff" aria-hidden="true">
  <svg viewBox="0 0 1440 42" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" style="display:block;width:100%">
    <path d="M0,20 Q360,42 720,12 Q1080,-8 1440,24 L1440,42 L0,42 Z" fill="#09090f"/>
  </svg>
</div>

<!-- ═══ BOTTOM CTA ═══ -->
<section class="about-cta" aria-label="Contact Mad Extra Bail Bonds">
  <div class="about-cta-inner">
    <h2>Ready to help your <em>family right now</em></h2>
    <p>We're a licensed Florida bondsman available 24 hours a day. Call or contact us the moment an arrest happens — early action means faster release.</p>
    <div class="about-cta-btns">
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo preg_replace('/\D/','', $phone); ?>" class="btn-cta-primary">
        <?php echo lucide_icon('phone'); ?> Call Now — 24/7
      </a>
      <?php else: ?>
      <a href="/contact/" class="btn-cta-primary">
        <?php echo lucide_icon('zap'); ?> Get Emergency Help
      </a>
      <?php endif; ?>
      <a href="/services/" class="btn-cta-secondary"><?php echo lucide_icon('shield'); ?> See All Services</a>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
