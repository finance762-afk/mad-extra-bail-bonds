<?php
/**
 * footer.php — Shared site footer
 * Mad Extra Bail Bonds | Page One Insights v6.1
 *
 * Closes </main>, renders full footer, loads scripts.
 * Expects all variables from includes/config.php.
 */
if (!isset($siteName)) {
    require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
}
if (!isset($GLOBALS['LUCIDE_ICONS'])) {
    require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/icons.php';
}

// Split services into two columns
$_servicesHalf1 = array_slice($services, 0, 4);
$_servicesHalf2 = array_slice($services, 4);

// Group service areas by county
$_areasByCounty = [];
foreach ($serviceAreas as $area) {
    $_areasByCounty[$area['county']][] = $area;
}

$_year = date('Y');
$_phoneRaw = preg_replace('/\D/', '', $phone);
?>
  </main><!-- /#main-content -->

  <!-- ═══════════════════════════════════════════
       SITE FOOTER
  ═══════════════════════════════════════════ -->
  <footer class="site-footer" aria-label="Site footer">

    <!-- Footer Top: 4-column grid -->
    <div class="footer-top">
      <div class="container">
        <div class="footer-grid">

          <!-- Col 1: Brand + AEO Entity Block -->
          <div class="footer-col">
            <p class="footer-logo-name"><?php echo htmlspecialchars($siteName); ?></p>
            <p class="footer-tagline"><?php echo htmlspecialchars($tagline); ?></p>

            <?php if (!empty($phone)): ?>
            <div class="footer-emergency">
              <?php echo $GLOBALS['LUCIDE_ICONS']['phone']; ?>
              <div>
                <small>24/7 Emergency Line</small>
                <a href="tel:<?php echo $_phoneRaw; ?>"><?php echo htmlspecialchars($phone); ?></a>
              </div>
            </div>
            <?php endif; ?>

            <div class="footer-trust-badges">
              <span class="footer-badge"><?php echo $GLOBALS['LUCIDE_ICONS']['shield-check']; ?> Licensed Bail Bondsman</span>
              <span class="footer-badge"><?php echo $GLOBALS['LUCIDE_ICONS']['clock']; ?> Available 24/7</span>
              <span class="footer-badge"><?php echo $GLOBALS['LUCIDE_ICONS']['calendar']; ?> Est. <?php echo $yearEstablished; ?></span>
              <span class="footer-badge"><?php echo $GLOBALS['LUCIDE_ICONS']['users']; ?> <?php echo $yearsInBusiness; ?>+ Years Serving FL</span>
            </div>

            <!-- AEO Entity Block (machine-readable NAP) -->
            <div class="footer-entity" itemscope itemtype="https://schema.org/LegalService">
              <meta itemprop="name"      content="<?php echo htmlspecialchars($siteName); ?>">
              <meta itemprop="url"       content="<?php echo $siteUrl; ?>/">
              <meta itemprop="telephone" content="<?php echo htmlspecialchars($phone); ?>">
              <strong itemprop="name"><?php echo htmlspecialchars($siteName); ?></strong> is a licensed bail bondsman
              based in <?php echo htmlspecialchars($address['city']); ?>, <?php echo htmlspecialchars($address['state']); ?><?php if (!empty($address['zip'])): ?> <?php echo htmlspecialchars($address['zip']); ?><?php endif; ?>,
              serving Palm Beach County, Broward County, and Miami-Dade County with fast, professional bail bond services since <?php echo $yearEstablished; ?>. Available 24 hours a day, 7 days a week.
            </div>
          </div><!-- /Col 1 -->

          <!-- Col 2: Bail Bond Services -->
          <div class="footer-col">
            <h4>Our Services</h4>
            <ul>
              <?php foreach ($_servicesHalf1 as $svc): ?>
              <li><a href="/services/<?php echo htmlspecialchars($svc['slug']); ?>/"><?php echo htmlspecialchars($svc['name']); ?></a></li>
              <?php endforeach; ?>
            </ul>

            <h4 style="margin-top:var(--space-6)">More Services</h4>
            <ul>
              <?php foreach ($_servicesHalf2 as $svc): ?>
              <li><a href="/services/<?php echo htmlspecialchars($svc['slug']); ?>/"><?php echo htmlspecialchars($svc['name']); ?></a></li>
              <?php endforeach; ?>
              <li><a href="/services/" style="color:var(--color-accent);font-weight:600">View All Services →</a></li>
            </ul>
          </div><!-- /Col 2 -->

          <!-- Col 3: Service Areas by County -->
          <div class="footer-col">
            <h4>Service Areas</h4>
            <?php foreach ($_areasByCounty as $county => $areas): ?>
            <p style="font-size:var(--font-size-xs);text-transform:uppercase;letter-spacing:1px;color:var(--color-accent);margin:var(--space-3) 0 var(--space-2)">
              <?php echo htmlspecialchars($county); ?>
            </p>
            <ul>
              <?php foreach ($areas as $area): ?>
              <li><a href="/areas/<?php echo htmlspecialchars($area['slug']); ?>/"><?php echo htmlspecialchars($area['name']); ?></a></li>
              <?php endforeach; ?>
            </ul>
            <?php endforeach; ?>
          </div><!-- /Col 3 -->

          <!-- Col 4: Contact Info -->
          <div class="footer-col">
            <h4>Contact Us</h4>

            <?php if (!empty($phone)): ?>
            <div class="footer-contact-item">
              <?php echo $GLOBALS['LUCIDE_ICONS']['phone']; ?>
              <div>
                <a href="tel:<?php echo $_phoneRaw; ?>"><?php echo htmlspecialchars($phone); ?></a>
                <br><small style="color:var(--color-secondary);font-size:var(--font-size-xs);font-weight:600">Available 24/7</small>
              </div>
            </div>
            <?php endif; ?>

            <?php if (!empty($email)): ?>
            <div class="footer-contact-item">
              <?php echo $GLOBALS['LUCIDE_ICONS']['mail']; ?>
              <a href="mailto:<?php echo htmlspecialchars($email); ?>"><?php echo htmlspecialchars($email); ?></a>
            </div>
            <?php endif; ?>

            <div class="footer-contact-item">
              <?php echo $GLOBALS['LUCIDE_ICONS']['map-pin']; ?>
              <address style="font-style:normal">
                <?php if (!empty($address['street'])): ?><?php echo htmlspecialchars($address['street']); ?><br><?php endif; ?>
                <?php echo htmlspecialchars($address['city']); ?>, <?php echo htmlspecialchars($address['state']); ?> <?php echo htmlspecialchars($address['zip']); ?>
              </address>
            </div>

            <div class="footer-contact-item">
              <?php echo $GLOBALS['LUCIDE_ICONS']['clock']; ?>
              <span>
                Mon–Sun: 24 Hours<br>
                <strong style="color:var(--color-accent)">Always Available</strong>
              </span>
            </div>

            <div style="margin-top:var(--space-6)">
              <a href="/contact/" class="btn btn-accent btn-sm" style="width:100%;justify-content:center">Get Help Now</a>
            </div>
          </div><!-- /Col 4 -->

        </div><!-- /.footer-grid -->
      </div><!-- /.container -->
    </div><!-- /.footer-top -->

    <!-- Footer Legal Row + Bottom Bar -->
    <div class="footer-bottom">
      <div class="container">

        <!-- Legal Row (REQUIRED — TCPA/CCPA compliance links) -->
        <nav class="footer-legal-row" aria-label="Legal">
          <a href="/privacy-policy/">Privacy Policy</a>
          <span class="divider">|</span>
          <a href="/terms/">Terms of Service</a>
          <span class="divider">|</span>
          <a href="/cookie-policy/">Cookie Policy</a>
          <span class="divider">|</span>
          <a href="/accessibility/">Accessibility</a>
          <span class="divider">|</span>
          <a href="/privacy-policy/#ccpa-rights">Do Not Sell or Share My Personal Information</a>
          <span class="divider">|</span>
          <a href="/sitemap.xml">Sitemap</a>
        </nav>

        <!-- Copyright + Credit -->
        <div style="display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:var(--space-4);padding-top:var(--space-4)">
          <p style="font-size:var(--font-size-xs);color:rgba(255,255,255,0.4);margin:0">
            &copy; <?php echo $_year; ?> <?php echo htmlspecialchars($siteName); ?>. All rights reserved.
          </p>
          <p class="footer-credit" style="margin:0">
            <a href="https://pageoneinsights.com" rel="dofollow" target="_blank">
              Web Design &amp; Hosting by Page One Insights, LLC
            </a>
          </p>
        </div>

      </div><!-- /.container -->
    </div><!-- /.footer-bottom -->

  </footer><!-- /.site-footer -->

  <!-- ═══════════════════════════════════════════
       BACK TO TOP
  ═══════════════════════════════════════════ -->
  <button class="back-to-top" aria-label="Back to top" id="back-to-top">
    <?php echo $GLOBALS['LUCIDE_ICONS']['arrow-up']; ?>
  </button>

  <!-- ═══════════════════════════════════════════
       MOBILE FLOATING CTA BAR (< 768px)
  ═══════════════════════════════════════════ -->
  <div class="mobile-cta-bar" aria-hidden="true">
    <?php if (!empty($phone)): ?>
    <a href="tel:<?php echo $_phoneRaw; ?>" class="btn btn-primary">
      <?php echo $GLOBALS['LUCIDE_ICONS']['phone']; ?> Call Now
    </a>
    <?php endif; ?>
    <a href="/contact/" class="btn btn-accent">Get Help Now</a>
  </div>

  <!-- ═══════════════════════════════════════════
       COOKIE BANNER
  ═══════════════════════════════════════════ -->
  <div class="cookie-banner" id="cookie-banner" role="dialog" aria-label="Cookie notice" aria-live="polite">
    <p>
      We use cookies to improve your experience and analyze site traffic.
      By continuing to use this site you accept our
      <a href="/cookie-policy/">Cookie Policy</a>.
    </p>
    <button class="cookie-banner__dismiss" id="cookie-dismiss">Got it</button>
  </div>

  <!-- ═══════════════════════════════════════════
       SCRIPTS
  ═══════════════════════════════════════════ -->
  <script src="/assets/js/animations.js" defer></script>
  <script src="/assets/js/effects.js"    defer></script>
  <script src="/assets/js/main.js"       defer></script>

  <?php if (!empty($useSwiper)): ?>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>
  <?php endif; ?>
  <?php if (!empty($useTilt)): ?>
  <script src="https://cdn.jsdelivr.net/npm/vanilla-tilt@1.8.1/dist/vanilla-tilt.min.js" defer></script>
  <?php endif; ?>

</body>
</html>
