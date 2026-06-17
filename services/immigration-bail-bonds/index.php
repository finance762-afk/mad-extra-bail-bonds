<?php
/**
 * services/immigration-bail-bonds/index.php — Immigration Bail Bonds Service Page
 * Mad Extra Bail Bonds | Delray Beach, FL
 * Phase 4: Service Pages
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Immigration Bail Bonds South Florida | Mad Extra Bail Bonds | ICE Detention 24/7';
$pageDescription = 'ICE detention or immigration hold in South Florida? Mad Extra Bail Bonds posts immigration bonds at Krome, Broward Transitional Center & all South FL detention facilities. Licensed FL bondsman. Call 24/7.';
$canonicalUrl    = $siteUrl . '/services/immigration-bail-bonds/';
$currentPage     = 'services';

$_breadcrumb = generateBreadcrumbSchema([
    ['name' => 'Home',                  'url' => $siteUrl . '/'],
    ['name' => 'Services',              'url' => $siteUrl . '/services/'],
    ['name' => 'Immigration Bail Bonds','url' => $siteUrl . '/services/immigration-bail-bonds/'],
]);

$_serviceSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'Service',
    '@id'         => $siteUrl . '/services/immigration-bail-bonds/#service-immigration-bail-bonds',
    'name'        => 'Immigration Bail Bonds',
    'description' => 'Immigration bail bonds for ICE detention and immigration court proceedings across South Florida. Licensed FL bondsman working with Krome Service Processing Center and all South Florida immigration detention facilities.',
    'url'         => $siteUrl . '/services/immigration-bail-bonds/',
    'provider'    => ['@id' => $siteUrl . '/#localbusiness'],
    'areaServed'  => [
        ['@type' => 'State', 'name' => 'Florida'],
        ['@type' => 'City',  'name' => 'Delray Beach, FL'],
        ['@type' => 'City',  'name' => 'Miami, FL'],
    ],
    'serviceType' => 'Immigration Bail Bonds',
];

$_faqs = [
    [
        'q' => 'How does an immigration bail bond work in South Florida?',
        'a' => 'Immigration bail bonds are set by an Immigration Judge or a DHS/ICE officer — not by a state judge. There are two types: "delivery bonds" (released pending an immigration hearing) and "voluntary departure bonds" (released to self-deport by a specific date). An immigration bondsman posts the bond directly with ICE and the person is released until their immigration hearing. Bond amounts typically range from $1,500 to $10,000 and higher for complex cases.',
    ],
    [
        'q' => 'Which immigration detention facilities in South Florida does Mad Extra Bail Bonds work with?',
        'a' => 'We work with all major immigration detention facilities in South Florida including the Krome Service Processing Center (Miami-Dade), the Broward Transitional Center (Pompano Beach), the Glades County Detention Center (Moore Haven), and the Hendry County Detention Center. We also work with county jails holding ICE detainees across Palm Beach, Broward, and Miami-Dade counties.',
    ],
    [
        'q' => 'Can someone with a prior deportation order get an immigration bond in Florida?',
        'a' => 'Prior deportation orders make bond much more difficult to obtain and significantly increase bond amounts when granted. An Immigration Judge has discretion to deny bond entirely for individuals with prior removal orders. However, a bond hearing can still be requested through immigration court — and if bond is set, we are ready to post it immediately. Call us and we will give you an honest assessment of the situation.',
    ],
    [
        'q' => 'What information do I need to arrange an immigration bail bond?',
        'a' => 'You will need the detainee\'s full legal name, country of birth, date of birth, and their A-Number (Alien Registration Number — found on immigration paperwork). You also need to know which detention facility they are being held at. If you do not have the A-Number, we can help locate the detainee through ICE\'s online detention locator. Call us with whatever information you have and we will work from there.',
    ],
    [
        'q' => 'How long does it take to get someone released from an immigration detention facility in South Florida?',
        'a' => 'Once bond is paid and ICE processes the paperwork, release typically takes 8 to 24 hours from Krome and the Broward Transitional Center. Facilities with less staff processing capacity, like Glades or Hendry, can take 24 to 48 hours. We submit bond payment as quickly as possible and stay in contact with the facility to expedite the process. Release times can vary — we are honest with families about realistic expectations.',
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
   IMMIGRATION BAIL BONDS — Mad Extra Bail Bonds
   Premium Tier | Dark/Neon Design System
   Techniques: layered hero radials (globe accent), neon orbs,
   glassmorphism sidebar with multilingual badge,
   facility cards (dark bg, amber highlight), process steps,
   urgent notice card, FAQ accordion, SVG dividers, CTA ring
   ============================================================ */

/* ── 1. HERO ── */
.hero-imm {
  position: relative;
  min-height: 57vh;
  display: flex;
  align-items: center;
  background: #04080f;
  overflow: hidden;
  padding-top: var(--nav-height, 72px);
  padding-bottom: var(--space-12);
}
.hero-imm::before {
  content: '';
  position: absolute; inset: 0;
  background:
    radial-gradient(ellipse 58% 72% at 7% 38%, rgba(229,53,231,0.22) 0%, transparent 58%),
    radial-gradient(ellipse 50% 52% at 85% 22%, rgba(249,183,62,0.14) 0%, transparent 55%),
    radial-gradient(ellipse 68% 42% at 50% 110%, rgba(4,8,15,0.99) 0%, transparent 80%);
  pointer-events: none;
}
.hero-imm::after {
  content: '';
  position: absolute; inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.88' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
  opacity: 0.5; pointer-events: none;
}
/* Technique 1: neon orbs with globe-tinted secondary */
.imm-orb {
  position: absolute; border-radius: 50%;
  pointer-events: none; will-change: transform;
}
.imm-orb-1 {
  width: 520px; height: 520px; top: -170px; left: -120px;
  background: radial-gradient(circle, rgba(229,53,231,0.17) 0%, transparent 68%);
  animation: imm-orb-float 17s ease-in-out infinite;
}
.imm-orb-2 {
  width: 360px; height: 360px; bottom: -60px; right: 4%;
  background: radial-gradient(circle, rgba(249,183,62,0.11) 0%, transparent 68%);
  animation: imm-orb-float 22s ease-in-out infinite reverse;
  animation-delay: -9s;
}
@keyframes imm-orb-float {
  0%,100% { transform: translate(0,0) scale(1); }
  40%     { transform: translate(10px,-14px) scale(1.03); }
  70%     { transform: translate(-8px,10px) scale(0.98); }
}
.hero-imm-inner {
  position: relative; z-index: 2;
  display: grid; grid-template-columns: 1fr 390px;
  gap: var(--space-12); align-items: center;
  padding: var(--space-12) 0; width: 100%;
}
.hero-imm-left { max-width: 620px; }

/* Technique 2: multilingual urgency badge */
.imm-eyebrow {
  display: inline-flex; align-items: center; gap: 8px;
  font-family: var(--font-heading); font-size: 0.68rem; font-weight: 800;
  text-transform: uppercase; letter-spacing: 2.5px; color: var(--color-accent);
  padding: 6px 16px; border: 1px solid rgba(249,183,62,0.42);
  border-radius: var(--radius-full); background: rgba(249,183,62,0.07); margin-bottom: var(--space-5);
}
.imm-eyebrow .imm-lang {
  display: flex; gap: 6px; align-items: center;
}
.imm-lang-badge {
  font-size: 0.6rem; padding: 2px 6px; border-radius: var(--radius-full);
  background: rgba(229,53,231,0.18); border: 1px solid rgba(229,53,231,0.35);
  color: var(--color-secondary); font-weight: 700; letter-spacing: 0.5px;
}
.imm-dot {
  width: 7px; height: 7px; border-radius: 50%;
  background: var(--color-accent); box-shadow: 0 0 8px var(--color-accent);
  animation: imm-dot-pulse 2.2s ease-in-out infinite;
}
@keyframes imm-dot-pulse {
  0%,100% { opacity:1; transform:scale(1); }
  50%     { opacity:.5; transform:scale(.7); }
}

.hero-imm h1 {
  font-size: clamp(1.85rem, 3.8vw, 3.1rem); font-weight: 900;
  color: #fff; line-height: 1.1; margin-bottom: var(--space-5);
  letter-spacing: -0.025em; text-wrap: balance;
}
.hero-imm h1 .hl-gold { color: var(--color-accent); text-shadow: 0 0 28px rgba(249,183,62,0.5); }
.hero-imm h1 .hl-mag  { color: var(--color-secondary); text-shadow: 0 0 28px rgba(229,53,231,0.5); }

.hero-imm .hero-answer {
  font-size: 1rem; color: rgba(255,255,255,0.66); line-height: 1.8;
  margin-bottom: var(--space-7); max-width: 560px;
}
.hero-imm-btns { display: flex; gap: var(--space-3); flex-wrap: wrap; margin-bottom: var(--space-7); }
.btn-imm-primary {
  display: inline-flex; align-items: center; gap: 8px; padding: 13px 28px;
  background: var(--color-secondary); color: #fff;
  font-family: var(--font-heading); font-size: 0.82rem; font-weight: 800;
  text-transform: uppercase; letter-spacing: 1.5px; border-radius: var(--radius-md);
  text-decoration: none;
  box-shadow: 0 0 22px rgba(229,53,231,0.42), 0 4px 14px rgba(0,0,0,0.3);
  transition: all var(--transition-base);
}
.btn-imm-primary:hover {
  background: #f043f2;
  box-shadow: 0 0 44px rgba(229,53,231,0.68), 0 8px 22px rgba(0,0,0,0.35);
  transform: translateY(-2px); color: #fff;
}
.btn-imm-primary svg { width: 15px; height: 15px; }
.btn-imm-secondary {
  display: inline-flex; align-items: center; gap: 8px; padding: 12px 24px;
  background: transparent; color: var(--color-accent);
  border: 2px solid rgba(249,183,62,0.55);
  font-family: var(--font-heading); font-size: 0.82rem; font-weight: 800;
  text-transform: uppercase; letter-spacing: 1.5px;
  border-radius: var(--radius-md); text-decoration: none; transition: all var(--transition-base);
}
.btn-imm-secondary:hover {
  background: var(--color-accent); color: #0a0d1a;
  border-color: var(--color-accent); box-shadow: 0 0 26px rgba(249,183,62,0.4); transform: translateY(-2px);
}
.imm-trust-row { display: flex; flex-wrap: wrap; gap: var(--space-2); }
.imm-htb {
  display: inline-flex; align-items: center; gap: 5px;
  font-size: 0.67rem; font-weight: 700; color: rgba(255,255,255,0.72);
  padding: 4px 11px; border-radius: var(--radius-full);
  background: rgba(255,255,255,0.055); border: 1px solid rgba(255,255,255,0.1);
  text-transform: uppercase; letter-spacing: 0.5px; white-space: nowrap;
}
.imm-htb svg { width: 11px; height: 11px; color: var(--color-accent); flex-shrink: 0; }

/* Technique 3: glassmorphism hero sidebar */
.hero-imm-card {
  position: relative; background: rgba(255,255,255,0.04);
  border: 1px solid rgba(255,255,255,0.11); border-radius: 18px;
  padding: var(--space-7) var(--space-6); backdrop-filter: blur(14px); -webkit-backdrop-filter: blur(14px);
}
.hero-imm-card::before {
  content: ''; position: absolute; inset: -1px; border-radius: 19px;
  background: linear-gradient(135deg, rgba(229,53,231,0.38) 0%, rgba(249,183,62,0.18) 50%, transparent 100%);
  z-index: -1; opacity: 0.5;
}
.hic-title { font-family: var(--font-heading); font-size: 1.05rem; font-weight: 800; color: #fff; margin-bottom: var(--space-1); }
.hic-subtitle { font-size: 0.75rem; color: var(--color-secondary); font-weight: 700; margin-bottom: var(--space-5); }
.hic-list { list-style: none; padding: 0; margin: 0 0 var(--space-6); display: flex; flex-direction: column; gap: var(--space-3); }
.hic-list li { display: flex; align-items: flex-start; gap: var(--space-2); font-size: 0.85rem; color: rgba(255,255,255,0.8); line-height: 1.5; }
.hic-check {
  display: inline-flex; align-items: center; justify-content: center;
  flex-shrink: 0; width: 18px; height: 18px; border-radius: 50%;
  background: linear-gradient(135deg, var(--color-secondary), #b515b7);
  font-size: 0.6rem; color: #fff; font-weight: 900; margin-top: 2px;
}
.hic-cta {
  display: block; width: 100%; padding: 13px;
  background: linear-gradient(135deg, var(--color-secondary) 0%, #b515b7 100%);
  color: #fff; font-family: var(--font-heading); font-size: 0.82rem;
  font-weight: 800; text-transform: uppercase; letter-spacing: 1.5px;
  border-radius: var(--radius-md); text-decoration: none; text-align: center;
  box-shadow: 0 4px 22px rgba(229,53,231,0.38); transition: all var(--transition-base);
}
.hic-cta:hover { box-shadow: 0 8px 34px rgba(229,53,231,0.58); transform: translateY(-1px); color: #fff; }
.hic-disclaimer { text-align: center; font-size: 0.6rem; color: rgba(255,255,255,0.3); margin-top: var(--space-3); line-height: 1.5; }

/* ── 2. DIVIDERS ── */
.div-imm-to-light { line-height: 0; background: #04080f; }
.div-imm-to-light svg { display: block; width: 100%; }
.div-imm-to-dark { line-height: 0; background: #f4f6f9; }
.div-imm-to-dark svg { display: block; width: 100%; }
.div-imm-to-white { line-height: 0; background: #04080f; }
.div-imm-to-white svg { display: block; width: 100%; }
.div-imm-to-faq { line-height: 0; background: #fff; }
.div-imm-to-faq svg { display: block; width: 100%; }

/* ── 3. INTRO ── */
.intro-imm { padding: var(--space-16) 0; background: #f4f6f9; }
.intro-imm-inner { max-width: 860px; margin: 0 auto; }
.imm-section-eyebrow {
  display: inline-flex; align-items: center; gap: 8px;
  font-family: var(--font-heading); font-size: 0.68rem; font-weight: 800;
  text-transform: uppercase; letter-spacing: 3px; color: var(--color-accent);
  padding: 5px 14px; border: 1px solid rgba(249,183,62,0.28);
  border-radius: var(--radius-full); background: rgba(249,183,62,0.06); margin-bottom: var(--space-4);
}
.intro-imm h2 {
  font-size: clamp(1.65rem, 2.8vw, 2.35rem); font-weight: 900;
  color: #1a2340; line-height: 1.15; text-wrap: balance; letter-spacing: -0.02em; margin-bottom: var(--space-4);
}
.intro-imm h2 em { color: var(--color-secondary); font-style: normal; }
.answer-block-imm {
  background: linear-gradient(135deg, rgba(229,53,231,0.06), rgba(249,183,62,0.04));
  border-left: 3px solid var(--color-secondary);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  padding: var(--space-5) var(--space-6); margin-bottom: var(--space-6);
}
.answer-block-imm p { font-size: 0.95rem; color: #1a2340; line-height: 1.8; margin: 0; font-style: italic; }

/* Technique 4: urgent notice card */
.imm-notice-card {
  background: rgba(229,53,231,0.05); border: 1px solid rgba(229,53,231,0.18);
  border-radius: var(--radius-lg); padding: var(--space-6);
  margin-bottom: var(--space-6); display: flex; gap: var(--space-4); align-items: flex-start;
}
.imm-notice-icon {
  flex-shrink: 0; width: 44px; height: 44px; border-radius: 50%;
  background: linear-gradient(135deg, rgba(229,53,231,0.15), rgba(249,183,62,0.08));
  border: 1px solid rgba(229,53,231,0.28);
  display: flex; align-items: center; justify-content: center; color: var(--color-secondary);
}
.imm-notice-icon svg { width: 20px; height: 20px; }
.imm-notice-body h4 { font-size: 0.92rem; font-weight: 800; color: #1a2340; margin-bottom: var(--space-2); }
.imm-notice-body p { font-size: 0.85rem; color: #4a5568; line-height: 1.72; margin: 0; }
.intro-imm p.prose { font-size: 0.95rem; color: #4a5568; line-height: 1.82; margin-bottom: var(--space-4); max-width: 65ch; }

/* ── 4. FACILITIES SECTION (dark bg) ── */
/* Technique 5: dark facility cards with amber highlight */
.facilities-imm {
  padding: var(--space-16) 0;
  background: linear-gradient(135deg, #040812 0%, #0b0520 55%, #050b18 100%);
  position: relative; overflow: hidden;
}
.facilities-imm::before {
  content: ''; position: absolute; inset: 0;
  background:
    radial-gradient(ellipse 50% 65% at 8% 48%, rgba(229,53,231,0.13) 0%, transparent 58%),
    radial-gradient(ellipse 42% 55% at 92% 52%, rgba(249,183,62,0.09) 0%, transparent 58%);
  pointer-events: none;
}
.facilities-imm-header { text-align: center; margin-bottom: var(--space-10); position: relative; z-index: 1; }
.fac-eyebrow {
  display: inline-flex; align-items: center; gap: 8px;
  font-family: var(--font-heading); font-size: 0.68rem; font-weight: 800;
  text-transform: uppercase; letter-spacing: 3px; color: var(--color-accent);
  padding: 5px 14px; border: 1px solid rgba(249,183,62,0.28);
  border-radius: var(--radius-full); background: rgba(249,183,62,0.07); margin-bottom: var(--space-4);
}
.facilities-imm h2 {
  font-size: clamp(1.55rem, 2.8vw, 2.2rem); font-weight: 900;
  color: #fff; line-height: 1.15; text-wrap: balance; letter-spacing: -0.02em; margin-bottom: var(--space-3);
}
.facilities-imm h2 em { color: var(--color-secondary); font-style: normal; }
.answer-block-dark-imm {
  background: rgba(255,255,255,0.04); border-left: 3px solid var(--color-secondary);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  padding: var(--space-4) var(--space-5); margin: 0 auto var(--space-8); max-width: 700px;
}
.answer-block-dark-imm p { font-size: 0.88rem; color: rgba(255,255,255,0.7); line-height: 1.8; margin: 0; font-style: italic; }
.facilities-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 18px; position: relative; z-index: 1; }
.fac-card {
  background: rgba(255,255,255,0.04); border: 1px solid rgba(255,255,255,0.08);
  border-radius: var(--radius-lg); padding: var(--space-6) var(--space-6);
  transition: border-color var(--transition-base), background var(--transition-base);
}
.fac-card:hover { border-color: rgba(249,183,62,0.3); background: rgba(255,255,255,0.065); }
.fac-card-header { display: flex; align-items: center; gap: var(--space-3); margin-bottom: var(--space-3); }
.fac-icon {
  width: 38px; height: 38px; border-radius: 50%; flex-shrink: 0;
  background: linear-gradient(135deg, rgba(249,183,62,0.16), rgba(229,53,231,0.08));
  border: 1px solid rgba(249,183,62,0.22);
  display: flex; align-items: center; justify-content: center; color: var(--color-accent);
}
.fac-icon svg { width: 18px; height: 18px; }
.fac-name { font-size: 0.9rem; font-weight: 800; color: #fff; }
.fac-location { font-size: 0.72rem; color: var(--color-accent); font-weight: 600; margin-top: 1px; }
.fac-desc { font-size: 0.82rem; color: rgba(255,255,255,0.56); line-height: 1.7; }

/* ── 5. PROCESS ── */
.process-imm { padding: var(--space-16) 0; background: #fff; }
.process-imm-header { text-align: center; margin-bottom: var(--space-10); }
.process-imm h2 {
  font-size: clamp(1.55rem, 2.8vw, 2.2rem); font-weight: 900;
  color: #1a2340; line-height: 1.15; text-wrap: balance; letter-spacing: -0.02em; margin-bottom: var(--space-3);
}
.process-imm h2 em { color: var(--color-secondary); font-style: normal; }
.answer-block-process-imm {
  background: linear-gradient(135deg, rgba(229,53,231,0.06), rgba(249,183,62,0.04));
  border-left: 3px solid var(--color-secondary);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  padding: var(--space-4) var(--space-5); margin: 0 auto var(--space-3); max-width: 680px;
}
.answer-block-process-imm p { font-size: 0.88rem; color: #1a2340; line-height: 1.8; margin: 0; font-style: italic; }
.process-imm-steps { display: grid; grid-template-columns: repeat(4, 1fr); gap: var(--space-5); }
.proc-imm-step { text-align: center; padding: var(--space-6) var(--space-4); }
.proc-imm-num {
  width: 52px; height: 52px; border-radius: 50%;
  background: linear-gradient(135deg, var(--color-secondary), #b515b7);
  display: flex; align-items: center; justify-content: center;
  font-family: var(--font-heading); font-size: 1.1rem; font-weight: 900;
  color: #fff; box-shadow: 0 0 20px rgba(229,53,231,0.3); margin: 0 auto var(--space-4);
}
.proc-imm-step h4 { font-size: 0.88rem; font-weight: 800; color: #1a2340; margin-bottom: var(--space-2); }
.proc-imm-step p { font-size: 0.81rem; color: #4a5568; line-height: 1.65; margin: 0; }

/* ── 6. FAQ ── */
.faq-imm { padding: var(--space-16) 0; background: #f4f6f9; }
.faq-imm-inner { max-width: 820px; margin: 0 auto; }
.faq-imm h2 {
  font-size: clamp(1.55rem, 2.6vw, 2.15rem); font-weight: 900;
  color: #1a2340; line-height: 1.15; text-wrap: balance; letter-spacing: -0.02em; margin-bottom: var(--space-3);
}
.faq-imm h2 em { color: var(--color-secondary); font-style: normal; }
.faq-imm-sub { font-size: 0.92rem; color: #4a5568; margin-bottom: var(--space-10); line-height: 1.75; }
.faq-imm-list { display: flex; flex-direction: column; gap: var(--space-3); }
.faq-imm-item {
  background: #fff; border: 1px solid rgba(229,53,231,0.12);
  border-radius: var(--radius-lg); overflow: hidden;
  transition: border-color var(--transition-base), box-shadow var(--transition-base);
}
.faq-imm-item.open { border-color: rgba(229,53,231,0.38); box-shadow: 0 4px 18px rgba(229,53,231,0.08); }
.faq-imm-q {
  display: flex; align-items: center; justify-content: space-between;
  gap: var(--space-4); padding: var(--space-5) var(--space-6);
  cursor: pointer; background: transparent; border: none; width: 100%;
  text-align: left; font-family: var(--font-heading); font-size: 0.92rem;
  font-weight: 700; color: #1a2340; transition: color var(--transition-fast); user-select: none;
}
.faq-imm-q:hover { color: var(--color-secondary); }
.faq-imm-item.open .faq-imm-q { color: var(--color-secondary); }
.faq-imm-icon {
  flex-shrink: 0; width: 26px; height: 26px; border-radius: 50%;
  background: rgba(229,53,231,0.08); border: 1px solid rgba(229,53,231,0.2);
  display: flex; align-items: center; justify-content: center;
  transition: background var(--transition-base), transform var(--transition-base);
  font-size: 0.95rem; color: var(--color-secondary); font-weight: 900;
}
.faq-imm-item.open .faq-imm-icon { background: var(--color-secondary); color: #fff; transform: rotate(45deg); }
.faq-imm-a {
  display: none; padding: 0 var(--space-6) var(--space-5);
  font-size: 0.88rem; color: #4a5568; line-height: 1.8;
  border-top: 1px solid rgba(229,53,231,0.08); padding-top: var(--space-4);
}
.faq-imm-item.open .faq-imm-a { display: block; }

/* ── 7. RELATED ── */
.related-imm { padding: var(--space-14) 0; background: #fff; }
.related-imm-h3 {
  font-size: clamp(1.45rem, 2.4vw, 1.95rem); font-weight: 900;
  color: #1a2340; text-align: center; margin-bottom: var(--space-2); text-wrap: balance;
}
.related-imm-sub { text-align: center; font-size: 0.9rem; color: #4a5568; margin-bottom: var(--space-10); }
.related-imm-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; }
.rim-card {
  border-radius: var(--radius-lg); overflow: hidden;
  border: 1px solid rgba(229,53,231,0.1); background: #fff;
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.rim-card:hover { transform: translateY(-5px); box-shadow: 0 14px 35px rgba(229,53,231,0.12); }
.rim-banner { height: 80px; display: flex; align-items: center; justify-content: center; }
.rim-card.t1 .rim-banner { background: linear-gradient(145deg, #040812, #1a0835); }
.rim-card.t2 .rim-banner { background: linear-gradient(145deg, #080f24, #142040); }
.rim-card.t3 .rim-banner { background: linear-gradient(145deg, #0c0618, #200a30); }
.rim-icon-ring {
  width: 46px; height: 46px; border-radius: 50%;
  border: 1px solid rgba(255,255,255,0.15); background: rgba(255,255,255,0.07);
  display: flex; align-items: center; justify-content: center;
}
.rim-icon-ring svg { width: 22px; height: 22px; color: var(--color-accent); }
.rim-body { padding: var(--space-5); display: flex; flex-direction: column; }
.rim-body h3 { font-size: 0.9rem; font-weight: 800; color: #1a2340; margin-bottom: var(--space-2); }
.rim-body p { font-size: 0.8rem; color: #4a5568; line-height: 1.65; flex: 1; margin-bottom: var(--space-4); }
.rim-link {
  display: inline-flex; align-items: center; gap: 4px;
  font-size: 0.78rem; font-weight: 800; color: var(--color-secondary);
  text-decoration: none; transition: gap var(--transition-fast);
}
.rim-link:hover { gap: 8px; }
.rim-link svg { width: 14px; height: 14px; }

/* ── 8. CTA ── */
.cta-imm {
  padding: var(--space-14) 0;
  background: linear-gradient(135deg, #040812 0%, #0f061e 55%, #050b18 100%);
  position: relative; overflow: hidden; text-align: center;
}
.cta-imm::before {
  content: ''; position: absolute; inset: 0;
  background:
    radial-gradient(ellipse 55% 78% at 18% 50%, rgba(229,53,231,0.15) 0%, transparent 58%),
    radial-gradient(ellipse 48% 68% at 82% 50%, rgba(249,183,62,0.10) 0%, transparent 58%);
  pointer-events: none;
}
.cta-imm-inner { position: relative; z-index: 1; max-width: 560px; margin: 0 auto; }
.cta-imm h2 {
  font-size: clamp(1.5rem, 2.8vw, 2.2rem); font-weight: 900;
  color: #fff; text-wrap: balance; margin-bottom: var(--space-3);
}
.cta-imm h2 em { color: var(--color-secondary); font-style: normal; }
.cta-imm p { font-size: 0.95rem; color: rgba(255,255,255,0.56); max-width: 440px; margin: 0 auto var(--space-7); line-height: 1.75; }
.cta-imm-btns { display: flex; gap: var(--space-3); justify-content: center; flex-wrap: wrap; }

/* ── RESPONSIVE ── */
@media (max-width: 1024px) {
  .hero-imm-inner { grid-template-columns: 1fr; }
  .hero-imm-card { display: none; }
  .facilities-grid { grid-template-columns: 1fr; }
}
@media (max-width: 768px) {
  .process-imm-steps { grid-template-columns: repeat(2, 1fr); }
  .related-imm-grid { grid-template-columns: 1fr; }
}
@media (max-width: 480px) {
  .process-imm-steps { grid-template-columns: 1fr; }
}
</style>

<!-- ═══ HERO ═══ -->
<section class="hero-imm" aria-label="Immigration bail bonds South Florida">
  <div class="imm-orb imm-orb-1"></div>
  <div class="imm-orb imm-orb-2"></div>

  <div class="container">
    <div class="hero-imm-inner">
      <div class="hero-imm-left">
        <span class="imm-eyebrow">
          <span class="imm-dot"></span>
          ICE Detention · Immigration Holds · 24/7 Availability
          <span class="imm-lang">
            <span class="imm-lang-badge">EN</span>
            <span class="imm-lang-badge">ES</span>
          </span>
        </span>
        <h1>
          <span class="hl-gold">Immigration Bail Bonds</span> in South Florida —<br>
          <span class="hl-mag">ICE Detention</span> Release Available 24/7
        </h1>
        <p class="hero-answer">Mad Extra Bail Bonds posts immigration bonds at the Krome Service Processing Center, the Broward Transitional Center, and all immigration detention facilities across Palm Beach, Broward, and Miami-Dade County. We understand the urgency of immigration detention — and we are available around the clock to help families act fast.</p>
        <div class="hero-imm-btns">
          <?php if (!empty($phone)): ?>
          <a href="tel:<?php echo preg_replace('/\D/','',$phone); ?>" class="btn-imm-primary">
            <?php echo lucide_icon('phone'); ?> Call Now — 24/7
          </a>
          <?php else: ?>
          <a href="/contact/" class="btn-imm-primary">
            <?php echo lucide_icon('zap'); ?> Get Help Now
          </a>
          <?php endif; ?>
          <a href="/contact/" class="btn-imm-secondary">Free Consultation</a>
        </div>
        <div class="imm-trust-row">
          <span class="imm-htb"><?php echo lucide_icon('shield-check'); ?> Licensed FL Bondsman</span>
          <span class="imm-htb"><?php echo lucide_icon('globe'); ?> Krome & BTC Experience</span>
          <span class="imm-htb"><?php echo lucide_icon('clock'); ?> 24/7 Availability</span>
          <span class="imm-htb"><?php echo lucide_icon('users'); ?> Bilingual Support</span>
        </div>
      </div>

      <div class="hero-imm-card">
        <p class="hic-title">Immigration Detention? We Can Help.</p>
        <p class="hic-subtitle">Krome · BTC · Palm Beach · Glades · Hendry</p>
        <ul class="hic-list">
          <li><span class="hic-check">✓</span> Immigration bonds from $1,500</li>
          <li><span class="hic-check">✓</span> Delivery bonds & departure bonds</li>
          <li><span class="hic-check">✓</span> ICE detainer & hold expertise</li>
          <li><span class="hic-check">✓</span> Bilingual support available</li>
          <li><span class="hic-check">✓</span> Available 24 hours a day</li>
        </ul>
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo preg_replace('/\D/','',$phone); ?>" class="hic-cta">
          <?php echo lucide_icon('phone'); ?> Call Now — 24/7
        </a>
        <?php else: ?>
        <a href="/contact/" class="hic-cta">Get Immigration Help Now</a>
        <?php endif; ?>
        <p class="hic-disclaimer">Every immigration situation is different — call for a direct consultation</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SVG DIVIDER ═══ -->
<div class="div-imm-to-light" aria-hidden="true">
  <svg viewBox="0 0 1440 55" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,55 L0,12 Q480,55 720,20 Q960,-2 1440,34 L1440,55 Z" fill="#f4f6f9"/>
  </svg>
</div>

<!-- ═══ INTRO ═══ -->
<section class="intro-imm" aria-label="Immigration bond overview">
  <div class="container">
    <div class="intro-imm-inner">
      <span class="imm-section-eyebrow">About Immigration Bonds</span>
      <h2>What is an immigration bail bond and who qualifies for one in South Florida?</h2>
      <div class="answer-block answer-block-imm">
        <p>An immigration bail bond is a surety bond paid to ICE to release a detainee while their immigration case is pending. An Immigration Judge or ICE officer sets the bond amount — not a state court. Not all detainees are bond-eligible; people with certain criminal convictions or classified as flight risks may be denied bond. For those who do qualify, bond amounts typically range from $1,500 to $10,000 or more depending on the case.</p>
      </div>
      <div class="imm-notice-card">
        <div class="imm-notice-icon"><?php echo lucide_icon('alert-circle'); ?></div>
        <div class="imm-notice-body">
          <h4>Time matters in immigration detention</h4>
          <p>Unlike state arrests, immigration detainees can be transferred to out-of-state facilities with little notice. Acting quickly — within the first 24 to 48 hours — keeps the case within South Florida's jurisdiction and makes the bond process faster and less complicated.</p>
        </div>
      </div>
      <p class="prose">South Florida — and the Southern District of Florida — is one of the most active immigration enforcement regions in the country. We have worked with families across Palm Beach, Broward, and Miami-Dade counties navigating ICE detentions and have experience with every major detention facility in the region.</p>
    </div>
  </div>
</section>

<!-- ═══ SVG DIVIDER ═══ -->
<div class="div-imm-to-dark" aria-hidden="true">
  <svg viewBox="0 0 1440 55" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,0 Q380,55 720,28 Q1060,2 1440,44 L1440,55 L0,55 Z" fill="#04080f"/>
  </svg>
</div>

<!-- ═══ FACILITIES ═══ -->
<section class="facilities-imm" aria-label="Immigration detention facilities we work with">
  <div class="container">
    <div class="facilities-imm-header">
      <span class="fac-eyebrow"><?php echo lucide_icon('map-pin'); ?> Facilities We Work With</span>
      <h2>Which <em>immigration detention facilities</em> does Mad Extra work with in South Florida?</h2>
      <div class="answer-block-dark-imm">
        <p>We work with all major immigration detention facilities in South Florida — from Krome in Miami-Dade to the Broward Transitional Center and county jails holding ICE detainees across the three-county region. We know the intake procedures at each facility and move fast.</p>
      </div>
    </div>
    <div class="facilities-grid">
      <div class="fac-card">
        <div class="fac-card-header">
          <div class="fac-icon"><?php echo lucide_icon('building-2'); ?></div>
          <div>
            <div class="fac-name">Krome Service Processing Center</div>
            <div class="fac-location">Miami-Dade County</div>
          </div>
        </div>
        <p class="fac-desc">The primary ICE detention facility in South Florida. We regularly post bonds here and know the release procedures for getting detainees out as fast as possible.</p>
      </div>
      <div class="fac-card">
        <div class="fac-card-header">
          <div class="fac-icon"><?php echo lucide_icon('building'); ?></div>
          <div>
            <div class="fac-name">Broward Transitional Center</div>
            <div class="fac-location">Pompano Beach, Broward County</div>
          </div>
        </div>
        <p class="fac-desc">A contract detention facility holding ICE detainees from Broward and surrounding counties. Bond processing here typically runs 8 to 24 hours from submission.</p>
      </div>
      <div class="fac-card">
        <div class="fac-card-header">
          <div class="fac-icon"><?php echo lucide_icon('landmark'); ?></div>
          <div>
            <div class="fac-name">Glades County Detention Center</div>
            <div class="fac-location">Moore Haven, FL</div>
          </div>
        </div>
        <p class="fac-desc">Holds overflow ICE detainees from South Florida. More remote location means release can take 24 to 48 hours — we act fast to avoid unnecessary transfers here.</p>
      </div>
      <div class="fac-card">
        <div class="fac-card-header">
          <div class="fac-icon"><?php echo lucide_icon('shield'); ?></div>
          <div>
            <div class="fac-name">County Jails with ICE Detainers</div>
            <div class="fac-location">Palm Beach · Broward · Miami-Dade</div>
          </div>
        </div>
        <p class="fac-desc">Many detainees are held in county jails under ICE detainer orders before transfer. We work with all three county jail systems to post immigration bonds before transfers happen.</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SVG DIVIDER ═══ -->
<div class="div-imm-to-white" aria-hidden="true">
  <svg viewBox="0 0 1440 55" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,0 Q720,55 1440,12 L1440,55 L0,55 Z" fill="#ffffff"/>
  </svg>
</div>

<!-- ═══ PROCESS ═══ -->
<section class="process-imm" aria-label="Immigration bond process steps">
  <div class="container">
    <div class="process-imm-header">
      <span class="imm-section-eyebrow">How It Works</span>
      <h2>How do you get someone released on an <em>immigration bond</em> in South Florida?</h2>
      <div class="answer-block-process-imm">
        <p>Once ICE or an Immigration Judge sets a bond, you contact us with the detainee's A-Number and detention facility. We handle the bond paperwork, payment to ICE, and coordination with the facility for release. The entire process takes 8 to 48 hours depending on the facility and bond amount.</p>
      </div>
    </div>
    <div class="process-imm-steps">
      <div class="proc-imm-step">
        <div class="proc-imm-num">1</div>
        <h4>Call Us With A-Number</h4>
        <p>Provide the detainee's A-Number (Alien Registration Number), full legal name, date of birth, and detention facility. We can help locate detainees if you have partial information.</p>
      </div>
      <div class="proc-imm-step">
        <div class="proc-imm-num">2</div>
        <h4>Confirm Bond Eligibility</h4>
        <p>We verify the bond amount set by ICE or the Immigration Judge and confirm the detainee is eligible for release on bond at their facility.</p>
      </div>
      <div class="proc-imm-step">
        <div class="proc-imm-num">3</div>
        <h4>Pay Bond Premium</h4>
        <p>The bond premium for immigration bonds is typically 15–20% of the bond amount. We review all payment and collateral options with you before any commitment.</p>
      </div>
      <div class="proc-imm-step">
        <div class="proc-imm-num">4</div>
        <h4>ICE Processes Release</h4>
        <p>We submit bond directly to ICE and coordinate with the detention facility. Release typically takes 8 to 24 hours from Krome and BTC after bond payment is received.</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SVG DIVIDER ═══ -->
<div class="div-imm-to-faq" aria-hidden="true">
  <svg viewBox="0 0 1440 40" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,18 Q380,42 720,8 Q1060,-10 1440,20 L1440,40 L0,40 Z" fill="#f4f6f9"/>
  </svg>
</div>

<!-- ═══ FAQ ═══ -->
<section class="faq-imm" aria-label="Immigration bail bond FAQ">
  <div class="container">
    <div class="faq-imm-inner">
      <span class="imm-section-eyebrow">Common Questions</span>
      <h2>Frequently asked questions about <em>immigration bail bonds</em> in South Florida</h2>
      <p class="faq-imm-sub">Direct answers to what families ask most when a loved one is detained by ICE in Palm Beach, Broward, or Miami-Dade County.</p>
      <div class="faq-imm-list" role="list">
        <?php foreach ($_faqs as $faq): ?>
        <div class="faq-imm-item" role="listitem">
          <button class="faq-imm-q" aria-expanded="false" onclick="toggleFaqImm(this)">
            <?php echo htmlspecialchars($faq['q']); ?>
            <span class="faq-imm-icon" aria-hidden="true">+</span>
          </button>
          <div class="faq-imm-a" role="region">
            <p><?php echo htmlspecialchars($faq['a']); ?></p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- ═══ RELATED SERVICES ═══ -->
<section class="related-imm" aria-label="Related bail bond services">
  <div class="container">
    <h3 class="related-imm-h3">Other Services You May Need</h3>
    <p class="related-imm-sub">Mad Extra Bail Bonds handles every type of bond across South Florida — 24 hours a day.</p>
    <div class="related-imm-grid">
      <article class="rim-card t1">
        <div class="rim-banner"><div class="rim-icon-ring"><?php echo lucide_icon('landmark'); ?></div></div>
        <div class="rim-body">
          <h3>Federal Bail Bonds</h3>
          <p>Federal criminal charges sometimes accompany immigration cases — we handle both levels of the federal system.</p>
          <a href="/services/federal-bail-bonds/" class="rim-link">Learn more <?php echo lucide_icon('arrow-right'); ?></a>
        </div>
      </article>
      <article class="rim-card t2">
        <div class="rim-banner"><div class="rim-icon-ring"><?php echo lucide_icon('file-warning'); ?></div></div>
        <div class="rim-body">
          <h3>Warrant Bail Bonds</h3>
          <p>Active warrants often trigger ICE detentions — we handle both warrant and immigration bonds simultaneously.</p>
          <a href="/services/warrant-bail-bonds/" class="rim-link">Learn more <?php echo lucide_icon('arrow-right'); ?></a>
        </div>
      </article>
      <article class="rim-card t3">
        <div class="rim-banner"><div class="rim-icon-ring"><?php echo lucide_icon('shield'); ?></div></div>
        <div class="rim-body">
          <h3>Bail Bond Services</h3>
          <p>State criminal bail bonds for any charge across Palm Beach, Broward, and Miami-Dade counties.</p>
          <a href="/services/bail-bonds/" class="rim-link">Learn more <?php echo lucide_icon('arrow-right'); ?></a>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- ═══ EMERGENCY CTA ═══ -->
<section class="cta-imm" aria-label="Emergency immigration bond contact">
  <div class="cta-imm-inner">
    <h2>Family member detained by <em>ICE in South Florida?</em></h2>
    <p>Immigration detention moves fast — transfers to out-of-state facilities can happen with little warning. Call us now and we will act immediately to post bond before that happens.</p>
    <div class="cta-imm-btns">
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo preg_replace('/\D/','',$phone); ?>" class="btn-imm-primary">
        <?php echo lucide_icon('phone'); ?> Call Now — 24/7
      </a>
      <?php endif; ?>
      <a href="/contact/" class="btn-imm-secondary">Send a Message</a>
    </div>
  </div>
</section>

<script>
function toggleFaqImm(btn) {
  const item = btn.closest('.faq-imm-item');
  const isOpen = item.classList.contains('open');
  document.querySelectorAll('.faq-imm-item.open').forEach(el => el.classList.remove('open'));
  document.querySelectorAll('.faq-imm-q').forEach(el => el.setAttribute('aria-expanded','false'));
  if (!isOpen) {
    item.classList.add('open');
    btn.setAttribute('aria-expanded','true');
  }
}
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
