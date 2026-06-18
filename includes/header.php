<?php
/**
 * header.php — Shared site navigation
 * Mad Extra Bail Bonds | Page One Insights v6.1
 *
 * Expects: $currentPage, $siteName, $phone, $services, $siteUrl, $logoUrl
 * All set via includes/config.php (required before this file).
 */
if (!isset($siteName)) {
    require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
}
if (!function_exists('isActivePage')) {
    require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
}
?>
  <!-- Skip to main content (accessibility) -->
  <a href="#main-content" class="skip-link">Skip to main content</a>

  <header class="site-header" data-header>
    <nav class="container header-inner" aria-label="Main navigation">

      <!-- Logo -->
      <a href="/" class="site-logo" aria-label="Mad Extra Bail Bonds — Home">
        <img src="<?php echo htmlspecialchars($logoUrl ?? ''); ?>"
             alt="Mad Extra Bail Bonds"
             width="640" height="160">
      </a>

      <!-- Desktop Nav Links -->
      <ul class="nav-links" role="list">
        <li>
          <a href="/"
             <?php if (isActivePage('home')): ?>aria-current="page"<?php endif; ?>>
            Home
          </a>
        </li>

        <!-- Services with Dropdown -->
        <li class="nav-dropdown">
          <a href="/services/"
             <?php if (isActivePage('services')): ?>aria-current="page"<?php endif; ?>
             aria-haspopup="true">
            Services
          </a>
          <!-- CRITICAL: inline style="display:none" prevents cached CSS blink -->
          <ul class="nav-dropdown-menu" role="menu" aria-label="Services menu" style="display:none">
            <?php foreach ($services as $svc): ?>
            <li role="none">
              <a href="/services/<?php echo htmlspecialchars($svc['slug']); ?>/"
                 role="menuitem">
                <?php echo htmlspecialchars($svc['name']); ?>
              </a>
            </li>
            <?php endforeach; ?>
            <li role="none" style="border-top:1px solid var(--color-gray-light);margin-top:4px;padding-top:4px">
              <a href="/services/" role="menuitem" style="font-weight:600;color:var(--color-primary)">View All Services →</a>
            </li>
          </ul>
        </li>

        <li>
          <a href="/areas/"
             <?php if (isActivePage('areas')): ?>aria-current="page"<?php endif; ?>>
            Service Areas
          </a>
        </li>
        <li>
          <a href="/about/"
             <?php if (isActivePage('about')): ?>aria-current="page"<?php endif; ?>>
            About
          </a>
        </li>
        <li>
          <a href="/contact/"
             <?php if (isActivePage('contact')): ?>aria-current="page"<?php endif; ?>>
            Contact
          </a>
        </li>
        <li>
          <a href="/blog/"
             <?php if (isActivePage('blog')): ?>aria-current="page"<?php endif; ?>>
            Blog
          </a>
        </li>
      </ul>

      <!-- Desktop CTA -->
      <div class="header-cta">
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>"
           class="btn btn-outline-white btn-sm"
           aria-label="Call <?php echo htmlspecialchars($siteName); ?> now">
          <?php
          if (!isset($GLOBALS['LUCIDE_ICONS'])) {
              require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/icons.php';
          }
          echo $GLOBALS['LUCIDE_ICONS']['phone'];
          ?>
          <?php echo htmlspecialchars($phone); ?>
        </a>
        <?php endif; ?>
        <a href="/contact/" class="btn btn-accent btn-sm">Get Help Now</a>
      </div>

      <!-- Mobile Hamburger -->
      <button class="hamburger"
              id="hamburger-btn"
              aria-label="Toggle navigation menu"
              aria-expanded="false"
              aria-controls="nav-links-mobile">
        <span></span>
        <span></span>
        <span></span>
      </button>

    </nav><!-- /.header-inner -->
  </header><!-- /.site-header -->

  <main id="main-content">
