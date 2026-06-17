<?php
/**
 * faq/index.php — FAQ Page
 * Mad Extra Bail Bonds | Delray Beach, FL | Page One Insights v6.1
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Bail Bond FAQ | Mad Extra Bail Bonds | Delray Beach, FL';
$pageDescription = 'Answers to the most common bail bond questions in South Florida. How much does a bail bond cost? How long does release take? Mad Extra Bail Bonds explains it all.';
$canonicalUrl    = $siteUrl . '/faq/';
$currentPage     = 'faq';

// ── FAQ data organized by category ──────────────────────────────────
$_faqCategories = [
    [
        'id'    => 'general',
        'label' => 'Bail Bond Basics',
        'icon'  => 'help-circle',
        'faqs'  => [
            [
                'q' => 'What is a bail bond and how does it work in Florida?',
                'a' => 'A bail bond is a financial guarantee — posted by a licensed bondsman on your behalf — that promises the defendant will appear at all future court dates. In Florida, when a judge sets bail, you pay a bondsman 10% of that amount as a non-refundable premium. The bondsman then posts the full bail amount with the court, securing the defendant\'s release from jail until trial. If the defendant appears at every required court date, the bond is exonerated at the end of the case. The 10% premium is earned by the bondsman and is never returned regardless of outcome.',
            ],
            [
                'q' => 'What is the difference between bail and a bail bond?',
                'a' => '"Bail" is the total dollar amount the court sets as a condition of pretrial release — for example, $10,000. You can pay the full bail amount directly to the court (cash bail), but most families cannot afford this. A "bail bond" is the alternative: a licensed bondsman posts the full amount on your behalf, and you pay the bondsman 10% (in this example, $1,000) as their fee. The bondsman takes on the financial risk of guaranteeing the full $10,000 if the defendant fails to appear.',
            ],
            [
                'q' => 'Can bail be denied? What happens then?',
                'a' => 'Yes — Florida judges can deny bail in cases involving capital offenses, violent felonies with certain prior records, repeat violations of conditions of release, or when the defendant is deemed a serious flight risk or danger to the community. If bail is denied, the defendant remains in custody until their hearing or trial. A defense attorney can petition the court for reconsideration or a bail reduction hearing. A bail bondsman cannot assist if no bail has been set — we can only post bond when a judge has established a bail amount.',
            ],
            [
                'q' => 'What is a "no bail hold" or "no bond" in Florida?',
                'a' => 'A "no bail hold" or "no bond" is a court order stating that the defendant may not be released from custody regardless of payment. This can happen after a first appearance if the judge believes the defendant is a flight risk, faces extremely serious charges (like capital murder), or has previously violated conditions of release. No bail bondsman in Florida can post bond in this situation — the only option is for an attorney to petition the court for a bond hearing.',
            ],
        ],
    ],
    [
        'id'    => 'cost',
        'label' => 'Cost & Payment',
        'icon'  => 'dollar-sign',
        'faqs'  => [
            [
                'q' => 'How much does a bail bond cost in South Florida?',
                'a' => 'In Florida, the bail bond premium is set by state law at exactly 10% of the court-ordered bail amount. This rate is identical across Delray Beach, Boca Raton, Fort Lauderdale, Miami, and every jurisdiction in our service area. For a $5,000 bail order, the premium is $500. For a $25,000 bail order, the premium is $2,500. This 10% fee is non-refundable — it is the bondsman\'s earned fee for assuming the financial risk. You cannot negotiate below 10%; it is a fixed statutory rate in Florida.',
            ],
            [
                'q' => 'Do you offer payment plans if I cannot afford the full 10% upfront?',
                'a' => 'We understand that even 10% of a high bail amount can be a significant financial burden, especially during an already stressful situation. We discuss payment arrangements on a case-by-case basis for qualifying circumstances. Call us and honestly describe your situation — we will always try to find a path forward. We would rather work with your family to get your loved one home than turn you away over a financial obstacle.',
            ],
            [
                'q' => 'What forms of payment do you accept?',
                'a' => 'We accept cash, credit cards, debit cards, and electronic transfers. For larger bond amounts where payment plans are arranged, we document the agreement in writing and set clear payment milestones. Call us to discuss the specific options available for your case.',
            ],
            [
                'q' => 'Is the 10% bail bond premium refundable?',
                'a' => 'No — the 10% premium paid to the bondsman is non-refundable under Florida law, regardless of how the case resolves. Even if all charges are dropped the next day, the premium is earned by the bondsman for the act of posting bond and assuming liability. This is different from cash bail paid directly to the court, which is returned (minus court fees) after the case closes.',
            ],
        ],
    ],
    [
        'id'    => 'process',
        'label' => 'The Process',
        'icon'  => 'clock',
        'faqs'  => [
            [
                'q' => 'How long does it take to get someone released on a bail bond in South Florida?',
                'a' => 'Release timelines vary significantly by facility and charge type. For misdemeanor arrests, release typically happens within 2 to 6 hours after we post bond. Felony charges at the Palm Beach County Jail or Broward Main can take 6 to 24 hours depending on booking load and time of day. Immigration detainees and federal cases require separate processing that can take 24 to 72 hours. The earlier you call us, the faster we can begin — we start paperwork the moment you contact us, often before booking is even complete.',
            ],
            [
                'q' => 'What information do you need to get started?',
                'a' => 'To begin the bail bond process, we need: the defendant\'s full legal name, date of birth, and Social Security number (or immigration ID); the name and location of the jail or detention facility; the charges (if known); and the bail amount (if a judge has already set it). If you don\'t have all of this, call us anyway — we can help you locate the defendant in the system and gather the information needed.',
            ],
            [
                'q' => 'What happens after I call Mad Extra Bail Bonds?',
                'a' => 'When you call, we immediately begin gathering the information needed to verify the bond. We confirm the bail amount and any holds directly with the facility. We explain exactly what\'s required — costs, paperwork, and any co-signer requirements — before you commit to anything. Once you\'re ready to proceed, you sign the indemnity agreement and pay the premium. We then post the bond directly with the facility, and the jail begins processing release. We stay in contact with you throughout until your loved one is home.',
            ],
            [
                'q' => 'What is an indemnitor (co-signer) and do I need one?',
                'a' => 'An indemnitor, also called a co-signer or guarantor, is a person who agrees to be financially responsible if the defendant fails to appear in court. The bondsman requires an indemnitor because they\'re taking on significant financial risk. Requirements vary by case — the amount of bail, the severity of charges, and the defendant\'s ties to the community all affect whether a co-signer is required and what their financial qualifications need to be. We explain all of this upfront before any paperwork is signed.',
            ],
        ],
    ],
    [
        'id'    => 'charges',
        'label' => 'Types of Charges',
        'icon'  => 'shield',
        'faqs'  => [
            [
                'q' => 'Do you handle felony bail bonds in Palm Beach and Broward County?',
                'a' => 'Yes — felony bail bonds are among the most common cases we handle. Felony charges carry higher bail amounts and require more experience to navigate. We are familiar with the processes at Palm Beach County Jail, Broward County Main Jail, and all other major felony facilities in our service area. Felony release timelines are typically longer than misdemeanors, but we begin working on your case immediately.',
            ],
            [
                'q' => 'Can you post bail for DUI charges in South Florida?',
                'a' => 'Yes. DUI bail bonds are handled routinely across our entire service area. DUI cases in Florida often have a mandatory hold period before bail can be posted (typically 8 hours from arrest for first-time DUI), regardless of payment. We monitor these timelines and are ready to post as soon as the hold clears. For DUI with accident, serious injury, or prior DUI convictions, bail amounts are typically higher and the case may require additional steps.',
            ],
            [
                'q' => 'Do you handle immigration bail bonds and ICE detentions?',
                'a' => 'Yes — we assist with immigration bail bonds for individuals detained by ICE (Immigration and Customs Enforcement). Immigration bonds are federally processed through the Department of Homeland Security and involve different procedures than state criminal bail. The two types are Delivery Bonds (for detainees with a deportation order) and Voluntary Departure Bonds. Immigration bond amounts are typically higher, and processing takes longer — often 24 to 72 hours after bond is posted. We serve Miami-Dade\'s large immigrant community and surrounding areas.',
            ],
            [
                'q' => 'Can you help with federal bail bonds?',
                'a' => 'Yes. Federal bail bonds involve the federal court system, U.S. Marshals, and federal detention facilities (such as FDC Miami). Federal cases are more complex than state cases — bail is not always guaranteed, bond amounts are typically higher, and there are often more stringent conditions of release. We have experience navigating federal bail bond procedures in the Southern District of Florida.',
            ],
        ],
    ],
    [
        'id'    => 'after',
        'label' => 'After Bail Is Posted',
        'icon'  => 'check-circle',
        'faqs'  => [
            [
                'q' => 'What are typical conditions of release when someone is bailed out in Florida?',
                'a' => 'Florida courts typically impose conditions of release that the defendant must follow to remain free until trial. Common conditions include: appearing at all scheduled court dates, no contact with alleged victims, staying within Florida or the country, surrendering a passport, submitting to drug testing, refraining from further criminal activity, and sometimes wearing an electronic monitoring device. Violating any condition can result in immediate arrest and bail revocation. We explain all release conditions clearly so your family understands what\'s required.',
            ],
            [
                'q' => 'What happens if the defendant misses a court date?',
                'a' => 'If a defendant fails to appear for a scheduled court date in Florida, the judge will issue a bench warrant (capias) for their immediate arrest. The bail bond is forfeited — meaning the bondsman is now legally obligated to pay the full bail amount to the court unless the defendant is located and returned within a specified period (usually 60 days in Florida). The indemnitor (co-signer) becomes financially liable for the full bond amount if the defendant cannot be found. Call us immediately if a court date is missed — the sooner we act, the more options are available.',
            ],
            [
                'q' => 'Can bail be revoked after someone is released?',
                'a' => 'Yes. A judge can revoke bail and issue a bench warrant if the defendant violates any condition of release, is arrested on new charges, tampers with witnesses, or poses a danger to others. The bondsman can also surrender the defendant back to custody if they believe the defendant is likely to flee. If bail is revoked, the defendant is taken back into custody and typically must wait in jail until their case is resolved.',
            ],
        ],
    ],
];

// Build flat FAQ array for schema
$_allFaqs = [];
foreach ($_faqCategories as $cat) {
    foreach ($cat['faqs'] as $faq) {
        $_allFaqs[] = $faq;
    }
}
$_faqSchema = generateFAQSchema($_allFaqs);

$_breadcrumb = generateBreadcrumbSchema([
    ['name' => 'Home', 'url' => $siteUrl . '/'],
    ['name' => 'FAQ',  'url' => $siteUrl . '/faq/'],
]);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
echo '<script type="application/ld+json">' . json_encode($_breadcrumb, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>' . "\n";
echo '<script type="application/ld+json">' . json_encode($_faqSchema,  JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>' . "\n";
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
/* ============================================================
   FAQ PAGE — Mad Extra Bail Bonds
   Premium Tier | Dark/Neon Design System
   Techniques: layered hero, floating orbs, category tab filter,
   neon-accent accordion, answer-first answer blocks,
   glassmorphism CTA, SVG dividers
   ============================================================ */

/* ── 1. HERO ── */
.faq-hero {
  position: relative;
  min-height: 48vh;
  display: flex;
  align-items: center;
  background: #09090f;
  overflow: hidden;
  padding-top: var(--nav-height, 72px);
  padding-bottom: var(--space-12);
}
.faq-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 55% 75% at 8% 45%, rgba(229,53,231,0.18) 0%, transparent 60%),
    radial-gradient(ellipse 45% 55% at 85% 20%, rgba(249,183,62,0.13) 0%, transparent 55%),
    radial-gradient(ellipse 65% 40% at 50% 110%, rgba(10,18,38,0.99) 0%, transparent 75%);
  pointer-events: none;
}
.faq-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.03'/%3E%3C/svg%3E");
  opacity: 0.5;
  pointer-events: none;
}
.fq-orb {
  position: absolute;
  border-radius: 50%;
  pointer-events: none;
}
.fq-orb-1 {
  width: 440px; height: 440px;
  top: -100px; left: -80px;
  background: radial-gradient(circle, rgba(229,53,231,0.14) 0%, transparent 70%);
  animation: fq-drift 14s ease-in-out infinite;
}
.fq-orb-2 {
  width: 300px; height: 300px;
  bottom: -40px; right: 8%;
  background: radial-gradient(circle, rgba(249,183,62,0.1) 0%, transparent 70%);
  animation: fq-drift 18s ease-in-out infinite reverse;
  animation-delay: -5s;
}
@keyframes fq-drift {
  0%,100% { transform: translate(0,0); }
  45%     { transform: translate(10px,-14px); }
  70%     { transform: translate(-8px,10px); }
}
.faq-hero-inner {
  position: relative;
  z-index: 2;
  max-width: 680px;
  padding: var(--space-10) 0;
}
.faq-hero-eyebrow {
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
  border-radius: 100px;
  background: rgba(249,183,62,0.07);
  margin-bottom: var(--space-4);
}
.faq-hero h1 {
  font-size: clamp(1.9rem, 4vw, 3.2rem);
  font-weight: 900;
  color: var(--color-white);
  line-height: 1.1;
  letter-spacing: -0.03em;
  text-wrap: balance;
  margin-bottom: var(--space-4);
}
.faq-hero h1 em { color: var(--color-secondary); font-style: normal; }
.faq-hero-lead {
  font-size: 1rem;
  color: rgba(255,255,255,0.62);
  line-height: 1.78;
  max-width: 600px;
  margin-bottom: var(--space-5);
}
.faq-hero-count {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  font-family: var(--font-heading);
  font-size: 0.78rem;
  font-weight: 700;
  color: rgba(255,255,255,0.5);
}
.faq-hero-count strong { color: var(--color-accent); }

/* ── 2. CATEGORY FILTER TABS ── */
.faq-filter-strip {
  background: linear-gradient(to bottom, #09090f, #0d1422);
  padding: var(--space-5) 0 0;
  position: sticky;
  top: var(--nav-height, 72px);
  z-index: 80;
  border-bottom: 1px solid rgba(255,255,255,0.07);
}
.faq-tabs {
  display: flex;
  gap: var(--space-2);
  overflow-x: auto;
  padding-bottom: 0;
  scrollbar-width: none;
  -ms-overflow-style: none;
}
.faq-tabs::-webkit-scrollbar { display: none; }
.faq-tab {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  padding: 9px 18px 11px;
  font-family: var(--font-heading);
  font-size: 0.74rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  color: rgba(255,255,255,0.45);
  background: transparent;
  border: none;
  border-bottom: 2px solid transparent;
  cursor: pointer;
  transition: color var(--transition-base), border-color var(--transition-base);
  white-space: nowrap;
  text-decoration: none;
}
.faq-tab:hover { color: rgba(255,255,255,0.75); }
.faq-tab.active {
  color: var(--color-secondary);
  border-bottom-color: var(--color-secondary);
}
.faq-tab svg { width: 13px; height: 13px; }

/* ── 3. FAQ CATEGORIES ── */
.faq-content-area {
  background: #f4f6f9;
  padding: var(--space-14) 0 var(--space-16);
}
.faq-category-block {
  margin-bottom: var(--space-14);
}
.faq-category-block:last-child { margin-bottom: 0; }
.faq-cat-header {
  display: flex;
  align-items: center;
  gap: var(--space-3);
  margin-bottom: var(--space-6);
  padding-bottom: var(--space-4);
  border-bottom: 2px solid var(--color-border, rgba(0,0,0,0.08));
}
.faq-cat-icon {
  width: 42px; height: 42px;
  border-radius: 10px;
  background: linear-gradient(135deg, rgba(229,53,231,0.14), rgba(249,183,62,0.08));
  border: 1px solid rgba(229,53,231,0.2);
  display: flex; align-items: center; justify-content: center;
  color: var(--color-secondary);
  flex-shrink: 0;
}
.faq-cat-icon svg { width: 20px; height: 20px; }
.faq-cat-label {
  font-family: var(--font-heading);
  font-size: 1.25rem;
  font-weight: 800;
  color: var(--color-dark);
  letter-spacing: -0.01em;
}
/* Technique: accordion with magenta left-border reveal */
.faq-list {
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
}
.faq-item {
  background: var(--color-white);
  border: 1px solid rgba(229,53,231,0.1);
  border-radius: var(--radius-lg, 14px);
  overflow: hidden;
  transition: border-color var(--transition-base), box-shadow var(--transition-base);
}
.faq-item.open {
  border-color: rgba(229,53,231,0.35);
  box-shadow: 0 4px 20px rgba(229,53,231,0.09);
}
.faq-q {
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
  font-size: 0.96rem;
  font-weight: 700;
  color: var(--color-dark);
  transition: color var(--transition-base);
  user-select: none;
  line-height: 1.4;
}
.faq-q:hover { color: var(--color-secondary); }
.faq-item.open .faq-q { color: var(--color-secondary); }
.faq-q-icon {
  flex-shrink: 0;
  width: 26px; height: 26px;
  border-radius: 50%;
  background: rgba(229,53,231,0.08);
  border: 1px solid rgba(229,53,231,0.18);
  display: flex; align-items: center; justify-content: center;
  transition: background var(--transition-base), transform var(--transition-base);
  font-size: 1rem;
  font-weight: 900;
  color: var(--color-secondary);
  line-height: 1;
}
.faq-item.open .faq-q-icon {
  background: var(--color-secondary);
  color: var(--color-white);
  transform: rotate(45deg);
}
.faq-a {
  display: none;
  padding: 0 var(--space-6) var(--space-5);
  font-size: 0.9rem;
  color: var(--color-gray);
  line-height: 1.82;
  border-top: 1px solid rgba(229,53,231,0.06);
  padding-top: var(--space-4);
}
.faq-item.open .faq-a { display: block; }

/* ── 4. ANSWER BLOCK INSIDE FAQ ── */
.faq-answer-block {
  background: linear-gradient(135deg, rgba(229,53,231,0.06), rgba(249,183,62,0.03));
  border-left: 3px solid var(--color-secondary);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  padding: var(--space-3) var(--space-5);
  margin-bottom: var(--space-3);
}
.faq-answer-block p {
  font-size: 0.88rem;
  color: var(--color-dark);
  line-height: 1.75;
  margin: 0;
  font-style: italic;
}

/* ── 5. STILL HAVE QUESTIONS / CTA ── */
.faq-cta {
  background: linear-gradient(135deg, #09090f 0%, #1e0828 55%, #0a1425 100%);
  padding: var(--space-16) 0;
  text-align: center;
  position: relative;
  overflow: hidden;
}
.faq-cta::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 50% 80% at 20% 50%, rgba(229,53,231,0.12) 0%, transparent 60%),
    radial-gradient(ellipse 45% 70% at 80% 50%, rgba(249,183,62,0.09) 0%, transparent 60%);
  pointer-events: none;
}
.faq-cta-inner {
  position: relative;
  z-index: 1;
  max-width: 560px;
  margin: 0 auto;
}
.faq-cta-eyebrow {
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
.faq-cta h2 {
  font-size: clamp(1.5rem, 2.8vw, 2.2rem);
  font-weight: 900;
  color: var(--color-white);
  text-wrap: balance;
  margin-bottom: var(--space-3);
  letter-spacing: -0.02em;
}
.faq-cta h2 em { color: var(--color-accent); font-style: normal; }
.faq-cta p {
  font-size: 0.95rem;
  color: rgba(255,255,255,0.55);
  max-width: 440px;
  margin: 0 auto var(--space-7);
  line-height: 1.75;
}
.faq-cta-btns {
  display: flex;
  gap: var(--space-3);
  justify-content: center;
  flex-wrap: wrap;
}
.btn-fq-primary {
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
  box-shadow: 0 0 22px rgba(229,53,231,0.42), 0 4px 14px rgba(0,0,0,0.3);
  transition: all var(--transition-base);
}
.btn-fq-primary:hover {
  background: #f043f2;
  box-shadow: 0 0 42px rgba(229,53,231,0.68), 0 8px 22px rgba(0,0,0,0.35);
  transform: translateY(-2px);
  color: var(--color-white);
}
.btn-fq-primary svg { width: 15px; height: 15px; }
.btn-fq-secondary {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 12px 24px;
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
.btn-fq-secondary:hover {
  background: var(--color-accent);
  color: #0a0d1a;
  border-color: var(--color-accent);
  box-shadow: 0 0 28px rgba(249,183,62,0.42);
  transform: translateY(-2px);
}

/* ── RESPONSIVE ── */
@media (max-width: 768px) {
  .faq-q { font-size: 0.88rem; padding: var(--space-4) var(--space-5); }
  .faq-a { padding: 0 var(--space-5) var(--space-4); padding-top: var(--space-3); }
}
</style>

<!-- ═══ HERO ═══ -->
<section class="faq-hero" aria-label="Bail Bond FAQ">
  <div class="fq-orb fq-orb-1"></div>
  <div class="fq-orb fq-orb-2"></div>
  <div class="container">
    <div class="faq-hero-inner">
      <span class="faq-hero-eyebrow"><?php echo lucide_icon('help-circle'); ?> Common Questions</span>
      <h1>Bail Bond FAQ — <em>Real Answers</em> for South Florida Families</h1>
      <p class="faq-hero-lead">When someone you love is arrested, you need clear, fast answers. Mad Extra Bail Bonds has served South Florida for over 11 years — here are the questions we hear most, answered directly.</p>
      <div class="faq-hero-count">
        <strong><?php echo array_sum(array_map(fn($c) => count($c['faqs']), $_faqCategories)); ?> questions</strong> across <?php echo count($_faqCategories); ?> categories
      </div>
    </div>
  </div>
</section>

<!-- ═══ CATEGORY TABS ═══ -->
<div class="faq-filter-strip" aria-label="FAQ categories">
  <div class="container">
    <div class="faq-tabs" role="tablist">
      <a href="#general"  class="faq-tab active" role="tab"><?php echo lucide_icon('help-circle'); ?> Bail Bond Basics</a>
      <a href="#cost"     class="faq-tab" role="tab"><?php echo lucide_icon('dollar-sign'); ?> Cost &amp; Payment</a>
      <a href="#process"  class="faq-tab" role="tab"><?php echo lucide_icon('clock'); ?> The Process</a>
      <a href="#charges"  class="faq-tab" role="tab"><?php echo lucide_icon('shield'); ?> Types of Charges</a>
      <a href="#after"    class="faq-tab" role="tab"><?php echo lucide_icon('check-circle'); ?> After Bail</a>
    </div>
  </div>
</div>

<!-- ═══ SVG DIVIDER ═══ -->
<div style="line-height:0;background:#0d1422" aria-hidden="true">
  <svg viewBox="0 0 1440 36" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" style="display:block;width:100%">
    <path d="M0,0 Q480,36 720,14 Q960,-4 1440,22 L1440,36 L0,36 Z" fill="#f4f6f9"/>
  </svg>
</div>

<!-- ═══ FAQ CONTENT ═══ -->
<section class="faq-content-area" aria-label="Frequently asked questions">
  <div class="container" style="max-width:860px">

    <?php foreach ($_faqCategories as $cat): ?>
    <div class="faq-category-block" id="<?php echo htmlspecialchars($cat['id']); ?>">
      <div class="faq-cat-header">
        <div class="faq-cat-icon"><?php echo lucide_icon($cat['icon']); ?></div>
        <h2 class="faq-cat-label"><?php echo htmlspecialchars($cat['label']); ?></h2>
      </div>
      <div class="faq-list" data-p1-dynamic>
        <?php foreach ($cat['faqs'] as $i => $faq): ?>
        <div class="faq-item">
          <button class="faq-q" aria-expanded="false" onclick="toggleFaq(this)">
            <?php echo htmlspecialchars($faq['q']); ?>
            <span class="faq-q-icon" aria-hidden="true">+</span>
          </button>
          <div class="faq-a" role="region">
            <p><?php echo htmlspecialchars($faq['a']); ?></p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
    <?php endforeach; ?>

  </div>
</section>

<!-- ═══ SVG DIVIDER ═══ -->
<div style="line-height:0;background:#f4f6f9" aria-hidden="true">
  <svg viewBox="0 0 1440 40" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" style="display:block;width:100%">
    <path d="M0,20 Q360,40 720,10 Q1080,-10 1440,20 L1440,40 L0,40 Z" fill="#09090f"/>
  </svg>
</div>

<!-- ═══ CTA ═══ -->
<section class="faq-cta" aria-label="Get bail bond help now">
  <div class="faq-cta-inner">
    <span class="faq-cta-eyebrow"><?php echo lucide_icon('zap'); ?> Still Have Questions?</span>
    <h2>We answer every call — <em>day or night</em></h2>
    <p>If your question isn't answered here, call us directly. We explain the bail bond process clearly and honestly — no runaround, no pressure.</p>
    <div class="faq-cta-btns">
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo preg_replace('/\D/','', $phone); ?>" class="btn-fq-primary">
        <?php echo lucide_icon('phone'); ?> Call Now — 24/7
      </a>
      <?php else: ?>
      <a href="/contact/" class="btn-fq-primary">
        <?php echo lucide_icon('zap'); ?> Contact Us Now
      </a>
      <?php endif; ?>
      <a href="/services/" class="btn-fq-secondary"><?php echo lucide_icon('shield'); ?> View All Services</a>
    </div>
  </div>
</section>

<script>
function toggleFaq(btn) {
  const item = btn.closest('.faq-item');
  const isOpen = item.classList.contains('open');
  // Close all in same list
  const list = item.closest('.faq-list');
  if (list) {
    list.querySelectorAll('.faq-item.open').forEach(el => {
      el.classList.remove('open');
      el.querySelector('.faq-q').setAttribute('aria-expanded', 'false');
    });
  }
  if (!isOpen) {
    item.classList.add('open');
    btn.setAttribute('aria-expanded', 'true');
  }
}

// Tab active state on scroll/click
(function() {
  var tabs = document.querySelectorAll('.faq-tab');
  tabs.forEach(function(tab) {
    tab.addEventListener('click', function() {
      tabs.forEach(function(t) { t.classList.remove('active'); });
      tab.classList.add('active');
    });
  });
})();
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
