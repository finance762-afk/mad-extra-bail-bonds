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
    'street' => '110 SW 6th St',
    'city'   => 'Delray Beach',
    'state'  => 'FL',
    'zip'    => '33444',
];

// ── Domain & URLs ────────────────────────────────────────────
// TODO: confirm launch domain before going live
$domain  = 'mad-extra-bail-bonds';
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
$logoUrl = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/mad-extra-bail-bonds/logo/1781702183759-kbpr9j-MADEXTRALOGO.png';

// ── Typography ───────────────────────────────────────────────
$fonts = [
    'heading' => 'Montserrat',
    'body'    => 'Open Sans',
];

// ── SEO Keywords ─────────────────────────────────────────────
$primaryKeyword    = 'Bail Bonds Near Me';
$secondaryKeywords = [];  // TODO: populate from SERP research

// ── Services ─────────────────────────────────────────────────
// NOTE: No services were specified in the intake build plan.
// TODO: Populate with client-confirmed service list.
$services = [];

// ── Service Areas ────────────────────────────────────────────
// NOTE: No service areas were specified in the intake build plan.
// TODO: Populate with client-confirmed service area list.
// Address is Delray Beach, FL; description mentions Miami-Dade County.
$serviceAreas = [];

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
$cssVersion = '1';

// ── Lead Notification ─────────────────────────────────────────
$leadNotificationEmail = '';  // TODO: populate from client
$leadNotificationPhone = '';

// ── Certifications ───────────────────────────────────────────
$insurance        = '';
$certifications   = ['Licensed'];  // "WeGonFindYou" from intake appears to be an internal code; using "Licensed" as display value
$licenseNumber    = '';  // TODO: populate with FL bail bond license number

// ── Business Description ─────────────────────────────────────
$businessDescription = 'Mad Extra Bail Bonds has been serving South Florida families for over 11 years, providing fast, professional bail bond services across Delray Beach, Miami-Dade County, and surrounding areas. We help families navigate the bail process with experience and compassion — available 24 hours a day, 7 days a week.';
