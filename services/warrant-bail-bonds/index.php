<?php
/**
 * services/warrant-bail-bonds/index.php — Warrant Bail Bonds Service Page
 * Mad Extra Bail Bonds | Delray Beach, FL
 * Phase 4: Service Pages
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Warrant Bail Bonds South Florida | Mad Extra Bail Bonds | Voluntary Surrender Help';
$pageDescription = 'Active warrant in South Florida? Mad Extra Bail Bonds helps with voluntary surrender and immediate bond posting at Palm Beach, Broward & Miami-Dade jails. Licensed FL bondsman — call 24/7.';
$canonicalUrl    = $siteUrl . '/services/warrant-bail-bonds/';
$currentPage     = 'services';

$_breadcrumb = generateBreadcrumbSchema([
    ['name' => 'Home',               'url' => $siteUrl . '/'],
    ['name' => 'Services',           'url' => $siteUrl . '/services/'],
    ['name' => 'Warrant Bail Bonds', 'url' => $siteUrl . '/services/warrant-bail-bonds/'],
]);

$_serviceSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'Service',
    '@id'         => $siteUrl . '/services/warrant-bail-bonds/#service-warrant-bail-bonds',
    'name'        => 'Warrant Bail Bonds',
    'description' => 'Warrant bail bonds and voluntary surrender assistance across South Florida. Licensed FL bondsman helping clients turn themselves in on outstanding warrants and get out of jail quickly at Palm Beach, Broward, and Miami-Dade County facilities.',
    'url'         => $siteUrl . '/services/warrant-bail-bonds/',
    'provider'    => ['@id' => $siteUrl . '/#localbusiness'],
    'areaServed'  => [
        ['@type' => 'State', 'name' => 'Florida'],
        ['@type' => 'City',  'name' => 'Delray Beach, FL'],
        ['@type' => 'City',  'name' => 'West Palm Beach, FL'],
    ],
    'serviceType' => 'Warrant Bail Bonds',
];

$_faqs = [
    [
        'q' => 'What is the best way to handle an outstanding warrant in South Florida without being arrested at work or home?',
        'a' => 'The best approach is voluntary surrender — turning yourself in on your own terms, on your schedule, with a bondsman already prepared to post your bond immediately. This avoids an embarrassing public arrest, demonstrates good faith to the judge, and means you walk out the same day in most cases. Call us first, we pre-arrange everything, then you surrender at a time we coordinate together.',
    ],
    [
        'q' => 'How much does a warrant bail bond cost in Palm Beach County, FL?',
        'a' => 'The bond premium for a warrant bail bond is 10% of the bond amount set by the court, the same as any Florida bail bond. Bond amounts for warrants vary widely by the underlying charge — a traffic warrant may be a few hundred dollars while a felony warrant can be tens of thousands. Call us with the case number or warrant details and we will give you an accurate estimate before you commit to anything.',
    ],
    [
        'q' => 'What happens if I have a warrant and I get pulled over by police in Florida?',
        'a' => 'You will be arrested on the spot and taken to jail, where you will wait for processing before bond can even be set — which can take 12 to 24 hours or more. You will have no control over when or where you are arrested. Voluntary surrender avoids this entirely. Call us today and we will set up a same-day or next-day surrender where you walk out in a matter of hours instead of sitting in holding overnight.',
    ],
    [
        'q' => 'How do I find out if I have an active warrant in Broward or Miami-Dade County, Florida?',
        'a' => 'You can check online through the Broward County Clerk of Courts or Miami-Dade Clerk of Courts websites. However, the public records may not show all warrant types — particularly sealed or capias warrants. If you suspect a warrant exists, call us and we can help verify through our law enforcement contacts before you inadvertently discover it in the worst way possible.',
    ],
    [
        'q' => 'Can a bondsman help with a bench warrant or a failure-to-appear warrant in South Florida?',
        'a' => 'Yes. Bench warrants and failure-to-appear (FTA) warrants are very common and in most cases fully bondable once you surrender. A judge may require you to appear in court first to have the FTA cleared before bond is reset — we coordinate the timing so bond is ready the moment you come out of the courtroom. The key is acting before the warrant triggers an arrest on your terms.',
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
   WARRANT BAIL BONDS — Mad Extra Bail Bonds
   Premium Tier | Dark/Neon Design System
   Techniques: layered hero radials (amber-warm), neon orbs,
   "vs arrest" comparison card, voluntary surrender steps
   (dark bg), glassmorphism sidebar, benefit cards,
   FAQ accordion, SVG dividers, emergency CTA
   ============================================================ */

/* ── 1. HERO ── */
.hero-war {
  position: relative;
  min-height: 57vh;
  display: flex;
  align-items: center;
  background: #070a0e;
  overflow: hidden;
  padding-top: var(--nav-height, 72px);
  padding-bottom: var(--space-12);
}
.hero-war::before {
  content: '';
  position: absolute; inset: 0;
  background:
    radial-gradient(ellipse 55% 68% at 6% 40%, rgba(249,183,62,0.18) 0%, transparent 56%),
    radial-gradient(ellipse 48% 54% at 87% 24%, rgba(229,53,231,0.13) 0%, transparent 54%),
    radial-gradient(ellipse 65% 42% at 50% 110%, rgba(7,10,14,0.99) 0%, transparent 80%);
  pointer-events: none;
}
.hero-war::after {
  content: '';
  position: absolute; inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.88' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
  opacity: 0.5; pointer-events: none;
}
/* Technique 1: amber-first neon orbs — warrant = time pressure */
.war-orb {
  position: absolute; border-radius: 50%;
  pointer-events: none; will-change: transform;
}
.war-orb-1 {
  width: 500px; height: 500px; top: -160px; left: -110px;
  background: radial-gradient(circle, rgba(249,183,62,0.17) 0%, transparent 68%);
  animation: war-orb-float 15s ease-in-out infinite;
}
.war-orb-2 {
  width: 370px; height: 370px; bottom: -55px; right: 6%;
  background: radial-gradient(circle, rgba(229,53,231,0.10) 0%, transparent 68%);
  animation: war-orb-float 19s ease-in-out infinite reverse;
  animation-delay: -6s;
}
@keyframes war-orb-float {
  0%,100% { transform: translate(0,0) scale(1); }
  40%     { transform: translate(11px,-15px) scale(1.04); }
  70%     { transform: translate(-8px,9px) scale(0.97); }
}
.hero-war-inner {
  position: relative; z-index: 2;
  display: grid; grid-template-columns: 1fr 390px;
  gap: var(--space-12); align-items: center;
  padding: var(--space-12) 0; width: 100%;
}
.hero-war-left { max-width: 620px; }

.war-eyebrow {
  display: inline-flex; align-items: center; gap: 8px;
  font-family: var(--font-heading); font-size: 0.68rem; font-weight: 800;
  text-transform: uppercase; letter-spacing: 2.5px; color: var(--color-accent);
  padding: 6px 16px; border: 1px solid rgba(249,183,62,0.42);
  border-radius: var(--radius-full); background: rgba(249,183,62,0.07); margin-bottom: var(--space-5);
}
/* Technique 2: warning flash badge */
.war-flash {
  display: inline-flex; align-items: center; gap: 4px;
  font-size: 0.6rem; padding: 2px 7px; border-radius: var(--radius-full);
  background: rgba(229,53,231,0.15); border: 1px solid rgba(229,53,231,0.35);
  color: var(--color-secondary); font-weight: 700;
  animation: war-flash 2.8s ease-in-out infinite;
}
@keyframes war-flash {
  0%,100% { opacity: 1; }
  50%     { opacity: 0.55; }
}
.war-dot {
  width: 7px; height: 7px; border-radius: 50%;
  background: var(--color-accent); box-shadow: 0 0 8px var(--color-accent);
  animation: war-dot-pulse 2s ease-in-out infinite;
}
@keyframes war-dot-pulse {
  0%,100% { opacity:1; transform:scale(1); }
  50%     { opacity:.5; transform:scale(.7); }
}

.hero-war h1 {
  font-size: clamp(1.85rem, 3.8vw, 3.1rem); font-weight: 900;
  color: #fff; line-height: 1.1; margin-bottom: var(--space-5);
  letter-spacing: -0.025em; text-wrap: balance;
}
.hero-war h1 .hl-gold { color: var(--color-accent); text-shadow: 0 0 28px rgba(249,183,62,0.5); }
.hero-war h1 .hl-mag  { color: var(--color-secondary); text-shadow: 0 0 28px rgba(229,53,231,0.5); }

.hero-war .hero-answer {
  font-size: 1rem; color: rgba(255,255,255,0.66); line-height: 1.8;
  margin-bottom: var(--space-7); max-width: 560px;
}
.hero-war-btns { display: flex; gap: var(--space-3); flex-wrap: wrap; margin-bottom: var(--space-7); }
.btn-war-primary {
  display: inline-flex; align-items: center; gap: 8px; padding: 13px 28px;
  background: var(--color-accent); color: #0a0d1a;
  font-family: var(--font-heading); font-size: 0.82rem; font-weight: 800;
  text-transform: uppercase; letter-spacing: 1.5px; border-radius: var(--radius-md);
  text-decoration: none;
  box-shadow: 0 0 22px rgba(249,183,62,0.42), 0 4px 14px rgba(0,0,0,0.3);
  transition: all var(--transition-base);
}
.btn-war-primary:hover {
  background: #ffca5e;
  box-shadow: 0 0 44px rgba(249,183,62,0.65), 0 8px 22px rgba(0,0,0,0.35);
  transform: translateY(-2px); color: #0a0d1a;
}
.btn-war-primary svg { width: 15px; height: 15px; }
.btn-war-secondary {
  display: inline-flex; align-items: center; gap: 8px; padding: 12px 24px;
  background: transparent; color: var(--color-secondary);
  border: 2px solid rgba(229,53,231,0.55);
  font-family: var(--font-heading); font-size: 0.82rem; font-weight: 800;
  text-transform: uppercase; letter-spacing: 1.5px;
  border-radius: var(--radius-md); text-decoration: none; transition: all var(--transition-base);
}
.btn-war-secondary:hover {
  background: var(--color-secondary); color: #fff;
  border-color: var(--color-secondary); box-shadow: 0 0 26px rgba(229,53,231,0.4); transform: translateY(-2px);
}
.war-trust-row { display: flex; flex-wrap: wrap; gap: var(--space-2); }
.war-htb {
  display: inline-flex; align-items: center; gap: 5px;
  font-size: 0.67rem; font-weight: 700; color: rgba(255,255,255,0.72);
  padding: 4px 11px; border-radius: var(--radius-full);
  background: rgba(255,255,255,0.055); border: 1px solid rgba(255,255,255,0.1);
  text-transform: uppercase; letter-spacing: 0.5px; white-space: nowrap;
}
.war-htb svg { width: 11px; height: 11px; color: var(--color-accent); flex-shrink: 0; }

/* Technique 3: glassmorphism sidebar — amber border for warrant urgency */
.hero-war-card {
  position: relative; background: rgba(255,255,255,0.04);
  border: 1px solid rgba(255,255,255,0.11); border-radius: 18px;
  padding: var(--space-7) var(--space-6); backdrop-filter: blur(14px); -webkit-backdrop-filter: blur(14px);
}
.hero-war-card::before {
  content: ''; position: absolute; inset: -1px; border-radius: 19px;
  background: linear-gradient(135deg, rgba(249,183,62,0.44) 0%, rgba(229,53,231,0.14) 55%, transparent 100%);
  z-index: -1; opacity: 0.5;
}
.hwc-title { font-family: var(--font-heading); font-size: 1.05rem; font-weight: 800; color: #fff; margin-bottom: var(--space-1); }
.hwc-subtitle { font-size: 0.72rem; color: var(--color-accent); font-weight: 700; margin-bottom: var(--space-5); text-transform: uppercase; letter-spacing: 1px; }
.hwc-list { list-style: none; padding: 0; margin: 0 0 var(--space-6); display: flex; flex-direction: column; gap: var(--space-3); }
.hwc-list li { display: flex; align-items: flex-start; gap: var(--space-2); font-size: 0.85rem; color: rgba(255,255,255,0.8); line-height: 1.5; }
.hwc-check {
  display: inline-flex; align-items: center; justify-content: center;
  flex-shrink: 0; width: 18px; height: 18px; border-radius: 50%;
  background: linear-gradient(135deg, var(--color-accent), #c07a10);
  font-size: 0.6rem; color: #0a0d1a; font-weight: 900; margin-top: 2px;
}
.hwc-cta {
  display: block; width: 100%; padding: 13px;
  background: linear-gradient(135deg, var(--color-accent) 0%, #c07a10 100%);
  color: #0a0d1a; font-family: var(--font-heading); font-size: 0.82rem;
  font-weight: 800; text-transform: uppercase; letter-spacing: 1.5px;
  border-radius: var(--radius-md); text-decoration: none; text-align: center;
  box-shadow: 0 4px 22px rgba(249,183,62,0.38); transition: all var(--transition-base);
}
.hwc-cta:hover { box-shadow: 0 8px 34px rgba(249,183,62,0.58); transform: translateY(-1px); color: #0a0d1a; }
.hwc-disclaimer { text-align: center; font-size: 0.6rem; color: rgba(255,255,255,0.3); margin-top: var(--space-3); line-height: 1.5; }

/* ── 2. DIVIDERS ── */
.div-war-to-light { line-height: 0; background: #070a0e; }
.div-war-to-light svg { display: block; width: 100%; }
.div-war-to-dark { line-height: 0; background: #f4f6f9; }
.div-war-to-dark svg { display: block; width: 100%; }
.div-war-to-white { line-height: 0; background: #070a0e; }
.div-war-to-white svg { display: block; width: 100%; }
.div-war-faq { line-height: 0; background: #fff; }
.div-war-faq svg { display: block; width: 100%; }

/* ── 3. INTRO + COMPARISON ── */
.intro-war { padding: var(--space-16) 0; background: #f4f6f9; }
.intro-war-inner { max-width: 900px; margin: 0 auto; }
.war-section-eyebrow {
  display: inline-flex; align-items: center; gap: 8px;
  font-family: var(--font-heading); font-size: 0.68rem; font-weight: 800;
  text-transform: uppercase; letter-spacing: 3px; color: var(--color-accent);
  padding: 5px 14px; border: 1px solid rgba(249,183,62,0.28);
  border-radius: var(--radius-full); background: rgba(249,183,62,0.06); margin-bottom: var(--space-4);
}
.intro-war h2 {
  font-size: clamp(1.65rem, 2.8vw, 2.35rem); font-weight: 900;
  color: #1a2340; line-height: 1.15; text-wrap: balance; letter-spacing: -0.02em; margin-bottom: var(--space-4);
}
.intro-war h2 em { color: var(--color-secondary); font-style: normal; }
.answer-block-war {
  background: linear-gradient(135deg, rgba(249,183,62,0.08), rgba(229,53,231,0.04));
  border-left: 3px solid var(--color-accent);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  padding: var(--space-5) var(--space-6); margin-bottom: var(--space-8);
}
.answer-block-war p { font-size: 0.95rem; color: #1a2340; line-height: 1.8; margin: 0; font-style: italic; }

/* Technique 4: voluntary vs surprise-arrest comparison card */
.war-compare-card {
  background: #fff; border: 1px solid rgba(249,183,62,0.16);
  border-radius: var(--radius-xl); overflow: hidden; margin-bottom: var(--space-6);
}
.war-compare-header { display: grid; grid-template-columns: 1fr 1fr; }
.war-compare-col {
  padding: var(--space-4) var(--space-6); text-align: center;
  font-family: var(--font-heading); font-size: 0.8rem; font-weight: 800; text-transform: uppercase; letter-spacing: 1px;
}
.war-compare-col.good { background: linear-gradient(135deg, rgba(249,183,62,0.12), rgba(249,183,62,0.04)); color: #b07000; border-right: 1px solid rgba(249,183,62,0.16); }
.war-compare-col.bad  { background: linear-gradient(135deg, rgba(229,53,231,0.08), rgba(229,53,231,0.02)); color: #a020a0; }
.war-compare-rows { display: flex; flex-direction: column; }
.war-compare-row { display: grid; grid-template-columns: 1fr 1fr; border-top: 1px solid #f0f0f0; }
.war-compare-row .wcc-good {
  padding: var(--space-3) var(--space-6); font-size: 0.82rem; color: #1a2340;
  border-right: 1px solid rgba(249,183,62,0.12);
  display: flex; align-items: center; gap: var(--space-2);
}
.war-compare-row .wcc-good::before { content: "✓"; color: #b07000; font-weight: 900; flex-shrink: 0; }
.war-compare-row .wcc-bad {
  padding: var(--space-3) var(--space-6); font-size: 0.82rem; color: #6b7280;
  display: flex; align-items: center; gap: var(--space-2);
}
.war-compare-row .wcc-bad::before { content: "✗"; color: #c0509a; font-weight: 900; flex-shrink: 0; }

/* ── 4. PROCESS (dark) ── */
/* Technique 5: dark bg surrender process timeline */
.process-war {
  padding: var(--space-16) 0;
  background: linear-gradient(135deg, #070a0e 0%, #0e0616 55%, #060a14 100%);
  position: relative; overflow: hidden;
}
.process-war::before {
  content: ''; position: absolute; inset: 0;
  background:
    radial-gradient(ellipse 50% 65% at 8% 48%, rgba(249,183,62,0.12) 0%, transparent 58%),
    radial-gradient(ellipse 42% 55% at 92% 52%, rgba(229,53,231,0.09) 0%, transparent 58%);
  pointer-events: none;
}
.process-war-header { text-align: center; margin-bottom: var(--space-12); position: relative; z-index: 1; }
.pro-war-eyebrow {
  display: inline-flex; align-items: center; gap: 8px;
  font-family: var(--font-heading); font-size: 0.68rem; font-weight: 800;
  text-transform: uppercase; letter-spacing: 3px; color: var(--color-accent);
  padding: 5px 14px; border: 1px solid rgba(249,183,62,0.28);
  border-radius: var(--radius-full); background: rgba(249,183,62,0.07); margin-bottom: var(--space-4);
}
.process-war h2 {
  font-size: clamp(1.55rem, 2.8vw, 2.2rem); font-weight: 900;
  color: #fff; line-height: 1.15; text-wrap: balance; letter-spacing: -0.02em; margin-bottom: var(--space-3);
}
.process-war h2 em { color: var(--color-accent); font-style: normal; }
.answer-block-dark-war {
  background: rgba(255,255,255,0.04); border-left: 3px solid var(--color-accent);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  padding: var(--space-4) var(--space-5); margin: 0 auto var(--space-3); max-width: 680px;
}
.answer-block-dark-war p { font-size: 0.88rem; color: rgba(255,255,255,0.7); line-height: 1.8; margin: 0; font-style: italic; }
.process-war-steps { display: grid; grid-template-columns: repeat(4, 1fr); gap: var(--space-5); position: relative; z-index: 1; }
.proc-war-step { text-align: center; padding: var(--space-6) var(--space-4); }
.proc-war-num {
  width: 52px; height: 52px; border-radius: 50%;
  background: linear-gradient(135deg, var(--color-accent), #c07a10);
  display: flex; align-items: center; justify-content: center;
  font-family: var(--font-heading); font-size: 1.1rem; font-weight: 900;
  color: #0a0d1a; box-shadow: 0 0 20px rgba(249,183,62,0.3); margin: 0 auto var(--space-4);
}
.proc-war-step h4 { font-size: 0.88rem; font-weight: 800; color: #fff; margin-bottom: var(--space-2); }
.proc-war-step p { font-size: 0.81rem; color: rgba(255,255,255,0.55); line-height: 1.65; margin: 0; }

/* ── 5. BENEFITS ── */
.benefits-war { padding: var(--space-16) 0; background: #fff; }
.benefits-war-header { text-align: center; margin-bottom: var(--space-10); }
.benefits-war h2 {
  font-size: clamp(1.55rem, 2.8vw, 2.15rem); font-weight: 900;
  color: #1a2340; line-height: 1.15; text-wrap: balance; letter-spacing: -0.02em; margin-bottom: var(--space-3);
}
.benefits-war h2 em { color: var(--color-secondary); font-style: normal; }
.benefits-war-lead { font-size: 0.95rem; color: #4a5568; max-width: 500px; margin: 0 auto; line-height: 1.75; }
/* Technique 6: benefit grid — control vs chaos theme */
.benefits-war-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; }
.benefit-war-card {
  background: #f7f8fb; border: 1px solid rgba(249,183,62,0.12);
  border-radius: var(--radius-lg); padding: var(--space-7) var(--space-6);
  transition: transform var(--transition-base), box-shadow var(--transition-base), border-color var(--transition-base);
  position: relative; overflow: hidden;
}
.benefit-war-card::after {
  content: ''; position: absolute; bottom: 0; left: 0; right: 0; height: 2px;
  background: linear-gradient(90deg, var(--color-accent), var(--color-secondary));
  transform: scaleX(0); transform-origin: left; transition: transform var(--transition-base);
}
.benefit-war-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 14px 35px rgba(249,183,62,0.12), 0 4px 10px rgba(0,0,0,0.06);
  border-color: rgba(249,183,62,0.3);
}
.benefit-war-card:hover::after { transform: scaleX(1); }
.bwc-icon {
  width: 50px; height: 50px; border-radius: 50%;
  background: linear-gradient(135deg, rgba(249,183,62,0.14), rgba(229,53,231,0.07));
  border: 1px solid rgba(249,183,62,0.22);
  display: flex; align-items: center; justify-content: center;
  margin-bottom: var(--space-4); color: var(--color-accent);
}
.bwc-icon svg { width: 22px; height: 22px; }
.benefit-war-card h4 { font-size: 0.92rem; font-weight: 800; color: #1a2340; margin-bottom: var(--space-2); }
.benefit-war-card p { font-size: 0.84rem; color: #4a5568; line-height: 1.7; margin: 0; }

/* ── 6. FAQ ── */
.faq-war { padding: var(--space-16) 0; background: #f4f6f9; }
.faq-war-inner { max-width: 820px; margin: 0 auto; }
.faq-war h2 {
  font-size: clamp(1.55rem, 2.6vw, 2.15rem); font-weight: 900;
  color: #1a2340; line-height: 1.15; text-wrap: balance; letter-spacing: -0.02em; margin-bottom: var(--space-3);
}
.faq-war h2 em { color: var(--color-secondary); font-style: normal; }
.faq-war-sub { font-size: 0.92rem; color: #4a5568; margin-bottom: var(--space-10); line-height: 1.75; }
.faq-war-list { display: flex; flex-direction: column; gap: var(--space-3); }
.faq-war-item {
  background: #fff; border: 1px solid rgba(249,183,62,0.14);
  border-radius: var(--radius-lg); overflow: hidden;
  transition: border-color var(--transition-base), box-shadow var(--transition-base);
}
.faq-war-item.open { border-color: rgba(249,183,62,0.42); box-shadow: 0 4px 18px rgba(249,183,62,0.09); }
.faq-war-q {
  display: flex; align-items: center; justify-content: space-between;
  gap: var(--space-4); padding: var(--space-5) var(--space-6);
  cursor: pointer; background: transparent; border: none; width: 100%;
  text-align: left; font-family: var(--font-heading); font-size: 0.92rem;
  font-weight: 700; color: #1a2340; transition: color var(--transition-fast); user-select: none;
}
.faq-war-q:hover { color: var(--color-accent); }
.faq-war-item.open .faq-war-q { color: var(--color-accent); }
.faq-war-icon {
  flex-shrink: 0; width: 26px; height: 26px; border-radius: 50%;
  background: rgba(249,183,62,0.1); border: 1px solid rgba(249,183,62,0.22);
  display: flex; align-items: center; justify-content: center;
  transition: background var(--transition-base), transform var(--transition-base);
  font-size: 0.95rem; color: var(--color-accent); font-weight: 900;
}
.faq-war-item.open .faq-war-icon { background: var(--color-accent); color: #0a0d1a; transform: rotate(45deg); }
.faq-war-a {
  display: none; padding: 0 var(--space-6) var(--space-5);
  font-size: 0.88rem; color: #4a5568; line-height: 1.8;
  border-top: 1px solid rgba(249,183,62,0.08); padding-top: var(--space-4);
}
.faq-war-item.open .faq-war-a { display: block; }

/* ── 7. RELATED ── */
.related-war { padding: var(--space-14) 0; background: #fff; }
.related-war-h3 {
  font-size: clamp(1.45rem, 2.4vw, 1.95rem); font-weight: 900;
  color: #1a2340; text-align: center; margin-bottom: var(--space-2); text-wrap: balance;
}
.related-war-sub { text-align: center; font-size: 0.9rem; color: #4a5568; margin-bottom: var(--space-10); }
.related-war-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; }
.rwa-card {
  border-radius: var(--radius-lg); overflow: hidden;
  border: 1px solid rgba(249,183,62,0.1); background: #fff;
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.rwa-card:hover { transform: translateY(-5px); box-shadow: 0 14px 35px rgba(249,183,62,0.14), 0 4px 10px rgba(0,0,0,0.06); }
.rwa-banner { height: 80px; display: flex; align-items: center; justify-content: center; }
.rwa-card.t1 .rwa-banner { background: linear-gradient(145deg, #070a0e, #1a0a0e); }
.rwa-card.t2 .rwa-banner { background: linear-gradient(145deg, #080f1c, #0e1a32); }
.rwa-card.t3 .rwa-banner { background: linear-gradient(145deg, #0c0618, #1e0a2c); }
.rwa-icon-ring {
  width: 46px; height: 46px; border-radius: 50%;
  border: 1px solid rgba(255,255,255,0.15); background: rgba(255,255,255,0.07);
  display: flex; align-items: center; justify-content: center;
}
.rwa-icon-ring svg { width: 22px; height: 22px; color: var(--color-accent); }
.rwa-body { padding: var(--space-5); display: flex; flex-direction: column; }
.rwa-body h3 { font-size: 0.9rem; font-weight: 800; color: #1a2340; margin-bottom: var(--space-2); }
.rwa-body p { font-size: 0.8rem; color: #4a5568; line-height: 1.65; flex: 1; margin-bottom: var(--space-4); }
.rwa-link {
  display: inline-flex; align-items: center; gap: 4px;
  font-size: 0.78rem; font-weight: 800; color: var(--color-accent);
  text-decoration: none; transition: gap var(--transition-fast);
}
.rwa-link:hover { gap: 8px; }
.rwa-link svg { width: 14px; height: 14px; }

/* ── 8. CTA ── */
.cta-war {
  padding: var(--space-14) 0;
  background: linear-gradient(135deg, #070a0e 0%, #100616 55%, #060a14 100%);
  position: relative; overflow: hidden; text-align: center;
}
.cta-war::before {
  content: ''; position: absolute; inset: 0;
  background:
    radial-gradient(ellipse 55% 78% at 18% 50%, rgba(249,183,62,0.13) 0%, transparent 58%),
    radial-gradient(ellipse 48% 68% at 82% 50%, rgba(229,53,231,0.10) 0%, transparent 58%);
  pointer-events: none;
}
.cta-war-inner { position: relative; z-index: 1; max-width: 560px; margin: 0 auto; }
.cta-war h2 {
  font-size: clamp(1.5rem, 2.8vw, 2.2rem); font-weight: 900;
  color: #fff; text-wrap: balance; margin-bottom: var(--space-3);
}
.cta-war h2 em { color: var(--color-accent); font-style: normal; }
.cta-war p { font-size: 0.95rem; color: rgba(255,255,255,0.56); max-width: 440px; margin: 0 auto var(--space-7); line-height: 1.75; }
.cta-war-btns { display: flex; gap: var(--space-3); justify-content: center; flex-wrap: wrap; }

/* ── RESPONSIVE ── */
@media (max-width: 1024px) {
  .hero-war-inner { grid-template-columns: 1fr; }
  .hero-war-card { display: none; }
  .war-compare-card { overflow-x: auto; }
}
@media (max-width: 768px) {
  .process-war-steps { grid-template-columns: repeat(2, 1fr); }
  .benefits-war-grid { grid-template-columns: repeat(2, 1fr); }
  .related-war-grid { grid-template-columns: 1fr; }
}
@media (max-width: 480px) {
  .process-war-steps { grid-template-columns: 1fr; }
  .benefits-war-grid { grid-template-columns: 1fr; }
}
</style>

<!-- ═══ HERO ═══ -->
<section class="hero-war" aria-label="Warrant bail bonds South Florida">
  <div class="war-orb war-orb-1"></div>
  <div class="war-orb war-orb-2"></div>

  <div class="container">
    <div class="hero-war-inner">
      <div class="hero-war-left">
        <span class="war-eyebrow">
          <span class="war-dot"></span>
          Active Warrants · Voluntary Surrender · Same-Day Release
          <span class="war-flash"><?php echo lucide_icon('alert-triangle'); ?> ACT NOW</span>
        </span>
        <h1>
          <span class="hl-gold">Warrant Bail Bonds</span> in South Florida —<br>
          Turn Yourself In on <span class="hl-mag">Your Terms</span>
        </h1>
        <p class="hero-answer">Mad Extra Bail Bonds helps people with active warrants in Palm Beach, Broward, and Miami-Dade County handle the situation the right way — through voluntary surrender with a bondsman ready to post bail immediately. You walk out the same day instead of sitting in holding waiting to be discovered at a traffic stop.</p>
        <div class="hero-war-btns">
          <?php if (!empty($phone)): ?>
          <a href="tel:<?php echo preg_replace('/\D/','',$phone); ?>" class="btn-war-primary">
            <?php echo lucide_icon('phone'); ?> Call Now — 24/7
          </a>
          <?php else: ?>
          <a href="/contact/" class="btn-war-primary">
            <?php echo lucide_icon('zap'); ?> Handle This Now
          </a>
          <?php endif; ?>
          <a href="/contact/" class="btn-war-secondary">Free Consultation</a>
        </div>
        <div class="war-trust-row">
          <span class="war-htb"><?php echo lucide_icon('shield-check'); ?> Licensed FL Bondsman</span>
          <span class="war-htb"><?php echo lucide_icon('check-circle'); ?> Voluntary Surrender Help</span>
          <span class="war-htb"><?php echo lucide_icon('clock'); ?> Same-Day Release Possible</span>
          <span class="war-htb"><?php echo lucide_icon('lock'); ?> Confidential Consultation</span>
        </div>
      </div>

      <div class="hero-war-card">
        <p class="hwc-title">Have an Active Warrant?</p>
        <p class="hwc-subtitle">Voluntary surrender — controlled, fast, discreet</p>
        <ul class="hwc-list">
          <li><span class="hwc-check">✓</span> Pre-arrange bond before you surrender</li>
          <li><span class="hwc-check">✓</span> Walk out same day — no overnight hold</li>
          <li><span class="hwc-check">✓</span> Avoid arrest at work, home, or traffic stop</li>
          <li><span class="hwc-check">✓</span> Bench warrants, FTAs, and criminal warrants</li>
          <li><span class="hwc-check">✓</span> Available 24/7 across Palm Beach, Broward, Miami-Dade</li>
        </ul>
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo preg_replace('/\D/','',$phone); ?>" class="hwc-cta">
          <?php echo lucide_icon('phone'); ?> Call Now — Confidential
        </a>
        <?php else: ?>
        <a href="/contact/" class="hwc-cta">Handle This Now</a>
        <?php endif; ?>
        <p class="hwc-disclaimer">Completely confidential — no commitment to call</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SVG DIVIDER ═══ -->
<div class="div-war-to-light" aria-hidden="true">
  <svg viewBox="0 0 1440 55" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,55 L0,10 Q480,55 720,22 Q960,-2 1440,36 L1440,55 Z" fill="#f4f6f9"/>
  </svg>
</div>

<!-- ═══ INTRO + COMPARISON ═══ -->
<section class="intro-war" aria-label="Warrant bail bond overview">
  <div class="container">
    <div class="intro-war-inner">
      <span class="war-section-eyebrow">Why Voluntary Surrender Wins</span>
      <h2>Is it better to turn yourself in on a warrant or wait to be arrested in South Florida?</h2>
      <div class="answer-block-war">
        <p>Voluntary surrender is almost always the better option. You control the timing, arrive with a bondsman ready to post your bail, avoid an embarrassing public arrest, and demonstrate good faith to the judge. Waiting to be discovered — at a traffic stop, at work, or at home — means no control over when or where it happens and potentially a much longer wait in jail before bond can even be arranged.</p>
      </div>

      <div class="war-compare-card" role="table" aria-label="Voluntary surrender vs surprise arrest comparison">
        <div class="war-compare-header" role="row">
          <div class="war-compare-col good" role="columnheader">Voluntary Surrender + Mad Extra</div>
          <div class="war-compare-col bad"  role="columnheader">Surprise Arrest</div>
        </div>
        <div class="war-compare-rows">
          <div class="war-compare-row" role="row">
            <div class="wcc-good" role="cell">Bond posted immediately on arrival</div>
            <div class="wcc-bad"  role="cell">Wait 12–24 hrs for processing</div>
          </div>
          <div class="war-compare-row" role="row">
            <div class="wcc-good" role="cell">Same-day release in most cases</div>
            <div class="wcc-bad"  role="cell">Overnight hold almost guaranteed</div>
          </div>
          <div class="war-compare-row" role="row">
            <div class="wcc-good" role="cell">You choose when and where</div>
            <div class="wcc-bad"  role="cell">Arrested at work, home, or traffic stop</div>
          </div>
          <div class="war-compare-row" role="row">
            <div class="wcc-good" role="cell">Shows good faith to the judge</div>
            <div class="wcc-bad"  role="cell">Resistance can worsen bail terms</div>
          </div>
          <div class="war-compare-row" role="row">
            <div class="wcc-good" role="cell">Attorney and family notified in advance</div>
            <div class="wcc-bad"  role="cell">Family may not know for hours</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SVG DIVIDER ═══ -->
<div class="div-war-to-dark" aria-hidden="true">
  <svg viewBox="0 0 1440 55" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,0 Q380,55 720,28 Q1060,2 1440,44 L1440,55 L0,55 Z" fill="#070a0e"/>
  </svg>
</div>

<!-- ═══ PROCESS ═══ -->
<section class="process-war" aria-label="Voluntary surrender process">
  <div class="container">
    <div class="process-war-header">
      <span class="pro-war-eyebrow"><?php echo lucide_icon('file-warning'); ?> How Voluntary Surrender Works</span>
      <h2>How do you arrange voluntary surrender on a warrant in <em>Palm Beach County</em>?</h2>
      <div class="answer-block-dark-war">
        <p>Call us first with whatever information you have about the warrant. We verify the case, pre-arrange your bond, choose a surrender time that works for you, and post bond immediately on arrival. You are in and out the same day in most cases — without the overnight holding experience that comes with a surprise arrest.</p>
      </div>
    </div>
    <div class="process-war-steps">
      <div class="proc-war-step">
        <div class="proc-war-num">1</div>
        <h4>Call Us First — Confidentially</h4>
        <p>Tell us what you know about the warrant: charge type, county, case number if you have it. We keep everything confidential and give you an honest picture of what to expect.</p>
      </div>
      <div class="proc-war-step">
        <div class="proc-war-num">2</div>
        <h4>We Verify and Pre-Arrange Bond</h4>
        <p>We verify the warrant and bond amount through our court contacts, then arrange everything in advance so bond is ready the moment you arrive at the facility.</p>
      </div>
      <div class="proc-war-step">
        <div class="proc-war-num">3</div>
        <h4>Surrender on Your Schedule</h4>
        <p>We coordinate your surrender at a time that works for you — usually during daytime hours when processing is faster and release times are shorter.</p>
      </div>
      <div class="proc-war-step">
        <div class="proc-war-num">4</div>
        <h4>Bond Posted — You Walk Out</h4>
        <p>Bond is posted immediately on intake. Most voluntary surrender clients are released the same day — often within 2 to 6 hours depending on the facility and charge.</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SVG DIVIDER ═══ -->
<div class="div-war-to-white" aria-hidden="true">
  <svg viewBox="0 0 1440 55" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,0 Q720,55 1440,12 L1440,55 L0,55 Z" fill="#ffffff"/>
  </svg>
</div>

<!-- ═══ BENEFITS ═══ -->
<section class="benefits-war" aria-label="Warrant bail bond benefits">
  <div class="container">
    <div class="benefits-war-header">
      <span class="war-section-eyebrow">Why Call Mad Extra</span>
      <h2>Why do South Florida families call <em>Mad Extra</em> when there's an active warrant?</h2>
      <p class="benefits-war-lead">We have handled hundreds of voluntary surrender situations across South Florida. Here is what we bring to this specific situation.</p>
    </div>
    <div class="benefits-war-grid">
      <div class="benefit-war-card">
        <div class="bwc-icon"><?php echo lucide_icon('clock'); ?></div>
        <h4>Pre-Arranged Bond Before Surrender</h4>
        <p>We arrange everything in advance. Bond is ready the moment you arrive — no waiting in holding for hours while we scramble to pull paperwork together.</p>
      </div>
      <div class="benefit-war-card">
        <div class="bwc-icon"><?php echo lucide_icon('shield-check'); ?></div>
        <h4>11+ Years South Florida Experience</h4>
        <p>We know the intake and release procedures at every county jail in Palm Beach, Broward, and Miami-Dade and the fastest way to get you out.</p>
      </div>
      <div class="benefit-war-card">
        <div class="bwc-icon"><?php echo lucide_icon('lock'); ?></div>
        <h4>Completely Confidential Consultation</h4>
        <p>Calling us does not commit you to anything. We give you honest information about your options before you make any decision.</p>
      </div>
      <div class="benefit-war-card">
        <div class="bwc-icon"><?php echo lucide_icon('file-text'); ?></div>
        <h4>Bench Warrants, FTAs, All Warrant Types</h4>
        <p>We handle bench warrants, failure-to-appear warrants, criminal warrants, and traffic warrants — any warrant type, any charge category.</p>
      </div>
      <div class="benefit-war-card">
        <div class="bwc-icon"><?php echo lucide_icon('users'); ?></div>
        <h4>Family-Focused Communication</h4>
        <p>We keep your family informed throughout the process so no one is left wondering where you are or what is happening.</p>
      </div>
      <div class="benefit-war-card">
        <div class="bwc-icon"><?php echo lucide_icon('phone'); ?></div>
        <h4>Available 24/7 — No Waiting</h4>
        <p>Warrants do not wait for business hours and neither do we. Call any time and talk to a real bondsman immediately.</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SVG DIVIDER ═══ -->
<div class="div-war-faq" aria-hidden="true">
  <svg viewBox="0 0 1440 40" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,18 Q380,42 720,8 Q1060,-10 1440,20 L1440,40 L0,40 Z" fill="#f4f6f9"/>
  </svg>
</div>

<!-- ═══ FAQ ═══ -->
<section class="faq-war" aria-label="Warrant bail bond FAQ">
  <div class="container">
    <div class="faq-war-inner">
      <span class="war-section-eyebrow">Common Questions</span>
      <h2>Frequently asked questions about <em>warrant bail bonds</em> in South Florida</h2>
      <p class="faq-war-sub">Answers to what people with active warrants ask most before calling — from Palm Beach to Miami-Dade.</p>
      <div class="faq-war-list" role="list">
        <?php foreach ($_faqs as $faq): ?>
        <div class="faq-war-item" role="listitem">
          <button class="faq-war-q" aria-expanded="false" onclick="toggleFaqWar(this)">
            <?php echo htmlspecialchars($faq['q']); ?>
            <span class="faq-war-icon" aria-hidden="true">+</span>
          </button>
          <div class="faq-war-a" role="region">
            <p><?php echo htmlspecialchars($faq['a']); ?></p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- ═══ RELATED SERVICES ═══ -->
<section class="related-war" aria-label="Related bail bond services">
  <div class="container">
    <h3 class="related-war-h3">Other Services You May Need</h3>
    <p class="related-war-sub">Mad Extra Bail Bonds handles every type of bond across South Florida — any time of day or night.</p>
    <div class="related-war-grid">
      <article class="rwa-card t1">
        <div class="rwa-banner"><div class="rwa-icon-ring"><?php echo lucide_icon('shield'); ?></div></div>
        <div class="rwa-body">
          <h3>Bail Bond Services</h3>
          <p>State bail bonds for any criminal charge across Palm Beach, Broward, and Miami-Dade counties — 24/7.</p>
          <a href="/services/bail-bonds/" class="rwa-link">Learn more <?php echo lucide_icon('arrow-right'); ?></a>
        </div>
      </article>
      <article class="rwa-card t2">
        <div class="rwa-banner"><div class="rwa-icon-ring"><?php echo lucide_icon('gavel'); ?></div></div>
        <div class="rwa-body">
          <h3>Felony Bail Bonds</h3>
          <p>Outstanding felony warrants often have high bond amounts — we handle complex felony bond cases across South Florida.</p>
          <a href="/services/felony-bail-bonds/" class="rwa-link">Learn more <?php echo lucide_icon('arrow-right'); ?></a>
        </div>
      </article>
      <article class="rwa-card t3">
        <div class="rwa-banner"><div class="rwa-icon-ring"><?php echo lucide_icon('car'); ?></div></div>
        <div class="rwa-body">
          <h3>DUI Bail Bonds</h3>
          <p>DUI warrants and DUI arrests handled quickly across Palm Beach, Broward, and Miami-Dade County.</p>
          <a href="/services/dui-bail-bonds/" class="rwa-link">Learn more <?php echo lucide_icon('arrow-right'); ?></a>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- ═══ EMERGENCY CTA ═══ -->
<section class="cta-war" aria-label="Emergency warrant bail bond contact">
  <div class="cta-war-inner">
    <h2>Have an active warrant in <em>South Florida?</em></h2>
    <p>The longer you wait, the less control you have over how this ends. Call us now — confidentially. We will explain your options and pre-arrange your bond so you can handle this on your own terms.</p>
    <div class="cta-war-btns">
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo preg_replace('/\D/','',$phone); ?>" class="btn-war-primary">
        <?php echo lucide_icon('phone'); ?> Call Now — Confidential
      </a>
      <?php endif; ?>
      <a href="/contact/" class="btn-war-secondary">Send a Message</a>
    </div>
  </div>
</section>

<script>
function toggleFaqWar(btn) {
  const item = btn.closest('.faq-war-item');
  const isOpen = item.classList.contains('open');
  document.querySelectorAll('.faq-war-item.open').forEach(el => el.classList.remove('open'));
  document.querySelectorAll('.faq-war-q').forEach(el => el.setAttribute('aria-expanded','false'));
  if (!isOpen) {
    item.classList.add('open');
    btn.setAttribute('aria-expanded','true');
  }
}
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
