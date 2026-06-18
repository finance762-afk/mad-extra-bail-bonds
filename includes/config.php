<?php
// =============================================================
// config.php — Mad Extra Bail Bonds
// Page One Insights — Phase 1 Scaffold
// =============================================================

// ── Identity ────────────────────────────────────────────────
$slug            = 'mad-extra-bail-bonds';
$siteName        = 'Mad Extra Bail Bonds';
// NOTE: Tagline from intake was flagged as inappropriate for production.
// Replace with client-approved tagline before launch.
$tagline         = 'Fast, Reliable Bail Bonds — Available 24/7';
$ownerName       = '';  // TODO: populate from client

// ── Contact ─────────────────────────────────────────────────
$phone           = '';  // TODO: populate from client
$phoneSecondary  = '';
$email           = '';  // TODO: populate from client
$contactEmail    = $email;

$address = [
    'street' => '',
    'city'   => 'Delray Beach',
    'state'  => 'FL',
    'zip'    => '33444',
];

// ── Domain & URLs ────────────────────────────────────────────
// TODO: confirm launch domain before going live
$domain  = 'bailbonds.madextraseo.com';
$siteUrl = 'https://' . $domain;

// ── Industry & Age ───────────────────────────────────────────
$industry        = 'legal';
$yearEstablished = (int) date('Y') - 11;  // 11 years in business (from intake)
$yearsInBusiness = 11;

// ── Analytics & Verification ─────────────────────────────────
$googleAnalyticsId = 'G-XXXXXXXXXX';  // Replace after launch
$gscVerification   = '';              // Replace after GSC setup

// ── Brand Colors ─────────────────────────────────────────────
$colors = [
    'primary'   => '#1a2b3c',   // rgb(26, 43, 60) — dark navy base
    'secondary' => '#e535e7',   // rgb(229, 53, 231) — neon magenta
    'accent'    => '#f9b73e',   // rgb(249, 183, 62) — amber gold
];

// ── Logo URL ─────────────────────────────────────────────────
$logoUrl = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/mad-extra-bail-bonds/logo/1781721309794-ChatGPT_Image_Jun_17__2026__01_25_39_PM.png';

// ── Typography ───────────────────────────────────────────────
$fonts = [
    'heading' => 'Montserrat',
    'body'    => 'Open Sans',
];

// ── SEO Keywords ─────────────────────────────────────────────
$primaryKeyword    = 'Bail Bonds Near Me';
$secondaryKeywords = [];  // TODO: populate from SERP research

// ── Services ─────────────────────────────────────────────────
$services = [
    [
        'slug'        => 'bail-bonds',
        'name'        => 'Bail Bond Services',
        'description' => 'Fast bail bond services for any criminal charge. We work directly with the jail to secure release as quickly as possible, 24 hours a day.',
        'icon'        => 'shield',
        'image'       => 'https://images.unsplash.com/photo-1589829085413-56de8ae18c73?auto=format&fit=crop&w=800&h=500&q=80',
    ],
    [
        'slug'        => 'dui-bail-bonds',
        'name'        => 'DUI Bail Bonds',
        'description' => 'Immediate DUI bail bond assistance to get your loved one home fast. We know DUI bail timelines and move with urgency.',
        'icon'        => 'car',
        'image'       => 'https://images.unsplash.com/photo-1520583457224-aee11bad5112?auto=format&fit=crop&w=800&h=500&q=80',
    ],
    [
        'slug'        => 'drug-charge-bail-bonds',
        'name'        => 'Drug Charge Bail Bonds',
        'description' => 'Bail bonds for drug possession, trafficking, and related charges. Confidential, discreet, and fast processing across South Florida.',
        'icon'        => 'alert-triangle',
        'image'       => 'https://images.unsplash.com/photo-1450101499163-c8848c66ca85?auto=format&fit=crop&w=800&h=500&q=80',
    ],
    [
        'slug'        => 'felony-bail-bonds',
        'name'        => 'Felony Bail Bonds',
        'description' => 'Felony charges carry higher bond amounts — we have the experience and relationships to move quickly when the stakes are highest.',
        'icon'        => 'gavel',
        'image'       => 'https://images.unsplash.com/photo-1589829545856-d10d557cf95f?auto=format&fit=crop&w=800&h=500&q=80',
    ],
    [
        'slug'        => 'misdemeanor-bail-bonds',
        'name'        => 'Misdemeanor Bail Bonds',
        'description' => 'Fast, affordable bail bonds for misdemeanor charges. Most misdemeanor releases happen within hours of contact.',
        'icon'        => 'file-text',
        'image'       => 'https://images.unsplash.com/photo-1521791136064-7986c2920216?auto=format&fit=crop&w=800&h=500&q=80',
    ],
    [
        'slug'        => 'federal-bail-bonds',
        'name'        => 'Federal Bail Bonds',
        'description' => 'Federal bail bonds for charges in federal court. More complex cases handled with the experience required at the federal level.',
        'icon'        => 'landmark',
        'image'       => 'https://images.unsplash.com/photo-1524673450801-b5ae9b4fea92?auto=format&fit=crop&w=800&h=500&q=80',
    ],
    [
        'slug'        => 'immigration-bail-bonds',
        'name'        => 'Immigration Bail Bonds',
        'description' => 'ICE detention and immigration bail bonds for detained individuals. We serve Miami-Dade and surrounding immigrant communities.',
        'icon'        => 'globe',
        'image'       => 'https://images.unsplash.com/photo-1541199249251-f713e6145474?auto=format&fit=crop&w=800&h=500&q=80',
    ],
    [
        'slug'        => 'warrant-bail-bonds',
        'name'        => 'Warrant & Traffic Bonds',
        'description' => 'Outstanding warrants and traffic-related bonds handled quickly. Get right with the court before a warrant becomes a bigger problem.',
        'icon'        => 'file-warning',
        'image'       => 'https://images.unsplash.com/photo-1555982105-d25af4182e4e?auto=format&fit=crop&w=800&h=500&q=80',
    ],
];

// ── Service Areas ────────────────────────────────────────────
// 50-mile radius from Delray Beach, FL covers Palm Beach, Broward, and Miami-Dade counties.
$serviceAreas = [
    // Palm Beach County
    ['slug' => 'delray-beach',       'name' => 'Delray Beach',       'county' => 'Palm Beach County'],
    ['slug' => 'boca-raton',         'name' => 'Boca Raton',         'county' => 'Palm Beach County'],
    ['slug' => 'west-palm-beach',    'name' => 'West Palm Beach',    'county' => 'Palm Beach County'],
    ['slug' => 'boynton-beach',      'name' => 'Boynton Beach',      'county' => 'Palm Beach County'],
    ['slug' => 'lake-worth-beach',   'name' => 'Lake Worth Beach',   'county' => 'Palm Beach County'],
    ['slug' => 'palm-beach-gardens', 'name' => 'Palm Beach Gardens', 'county' => 'Palm Beach County'],
    // Broward County
    ['slug' => 'fort-lauderdale',    'name' => 'Fort Lauderdale',    'county' => 'Broward County'],
    ['slug' => 'pompano-beach',      'name' => 'Pompano Beach',      'county' => 'Broward County'],
    ['slug' => 'deerfield-beach',    'name' => 'Deerfield Beach',    'county' => 'Broward County'],
    ['slug' => 'coral-springs',      'name' => 'Coral Springs',      'county' => 'Broward County'],
    ['slug' => 'hollywood',          'name' => 'Hollywood',          'county' => 'Broward County'],
    ['slug' => 'margate',            'name' => 'Margate',            'county' => 'Broward County'],
    // Miami-Dade County
    ['slug' => 'miami',              'name' => 'Miami',              'county' => 'Miami-Dade County'],
    ['slug' => 'hialeah',            'name' => 'Hialeah',            'county' => 'Miami-Dade County'],
    ['slug' => 'miami-gardens',      'name' => 'Miami Gardens',      'county' => 'Miami-Dade County'],
];

// ── Social Links ─────────────────────────────────────────────
$socialLinks = [
    // 'facebook'  => 'https://facebook.com/...',
    // 'instagram' => 'https://instagram.com/...',
];

// ── Form ─────────────────────────────────────────────────────
$formAction     = 'https://design.pageone.cloud/api/leads/mad-extra-bail-bonds';
$consentVersion = 'v2.1';

// ── CSS Cache Busting ─────────────────────────────────────────
// Increment on every framework.css / styles change.
$cssVersion = '7';

// ── Lead Notification ─────────────────────────────────────────
$leadNotificationEmail = '';  // TODO: populate from client
$leadNotificationPhone = '';

// ── Certifications ───────────────────────────────────────────
$insurance        = '';
$certifications   = ['Licensed'];  // "WeGonFindYou" from intake appears to be an internal code; using "Licensed" as display value
$licenseNumber    = '';  // TODO: populate with FL bail bond license number

// ── Business Description ─────────────────────────────────────
$businessDescription = 'Mad Extra Bail Bonds has been serving South Florida families for over 11 years, providing fast, professional bail bond services across Delray Beach, Miami-Dade County, and surrounding areas. We help families navigate the bail process with experience and compassion — available 24 hours a day, 7 days a week.';
