/* ============================================
   Precision Plumbing Solutions — Global Scripts
   ============================================ */

(function() {
  'use strict';

  /* --- Sticky Header --- */
  const header = document.getElementById('header');
  if (header) {
    let lastScroll = 0;
    window.addEventListener('scroll', function() {
      const currentScroll = window.pageYOffset;
      if (currentScroll > 50) {
        header.classList.add('scrolled');
      } else {
        header.classList.remove('scrolled');
      }
      lastScroll = currentScroll;
    }, { passive: true });
  }

  /* --- Mobile Navigation --- */
  const navToggle = document.getElementById('navToggle');
  const nav = document.getElementById('nav');
  const navOverlay = document.getElementById('navOverlay');

  if (navToggle && nav) {
    navToggle.addEventListener('click', function() {
      navToggle.classList.toggle('active');
      nav.classList.toggle('open');
      if (navOverlay) navOverlay.classList.toggle('active');
      document.body.style.overflow = nav.classList.contains('open') ? 'hidden' : '';
    });

    if (navOverlay) {
      navOverlay.addEventListener('click', function() {
        navToggle.classList.remove('active');
        nav.classList.remove('open');
        navOverlay.classList.remove('active');
        document.body.style.overflow = '';
      });
    }
  }

  /* --- Mobile Dropdown Toggles (handled via delegated click below) --- */
  const dropdowns = document.querySelectorAll('.nav-dropdown');

  // Reset nav state on resize to desktop
  window.addEventListener('resize', function() {
    if (window.innerWidth > 768) {
      dropdowns.forEach(function(d) { d.classList.remove('open'); });
      if (nav) nav.classList.remove('open');
      if (navToggle) navToggle.classList.remove('active');
      if (navOverlay) navOverlay.classList.remove('active');
      document.body.style.overflow = '';
    }
  });

  /* --- Scroll Animations (IntersectionObserver) --- */
  var animatedElements = document.querySelectorAll('.fade-in, .fade-in-left, .fade-in-right, .scale-in');
  if (animatedElements.length > 0 && 'IntersectionObserver' in window) {
    var prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    if (prefersReducedMotion) {
      animatedElements.forEach(function(el) {
        el.classList.add('visible');
      });
    } else {
      var observer = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            observer.unobserve(entry.target);
          }
        });
      }, {
        threshold: 0.1,
        rootMargin: '0px 0px -40px 0px'
      });

      animatedElements.forEach(function(el) {
        observer.observe(el);
      });
    }
  }

  /* --- Active Page Highlighting --- */
  var currentPath = window.location.pathname;
  var navLinks = document.querySelectorAll('.nav-link, .dropdown-menu a, .footer-links a');
  navLinks.forEach(function(link) {
    var href = link.getAttribute('href');
    if (!href) return;
    // Normalize paths
    var linkPath = href.replace(/\/index\.html$/, '/').replace(/\.html$/, '');
    var pagePath = currentPath.replace(/\/index\.html$/, '/').replace(/\.html$/, '');
    if (linkPath === pagePath || (pagePath === '/' && href === '/' ) || (pagePath === '/' && href === '/index.html')) {
      link.classList.add('active');
      // If in dropdown, also mark parent nav-link
      var parentDropdown = link.closest('.nav-dropdown');
      if (parentDropdown) {
        var parentLink = parentDropdown.querySelector(':scope > .nav-link');
        if (parentLink) parentLink.classList.add('active');
      }
    }
  });

  /* --- Smooth scroll for anchor links --- */
  document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
    anchor.addEventListener('click', function(e) {
      var targetId = this.getAttribute('href');
      if (targetId === '#') return;
      var target = document.querySelector(targetId);
      if (target) {
        e.preventDefault();
        target.scrollIntoView({ behavior: 'smooth' });
      }
    });
  });

  /* --- Mobile dropdown click handler (event delegation) --- */
  document.addEventListener('click', function(e) {
    if (window.innerWidth > 768) return;

    // Toggle dropdowns on mobile
    var dropdownLink = e.target.closest('.nav-dropdown > .nav-link');
    if (dropdownLink) {
      e.preventDefault();
      var dropdown = dropdownLink.closest('.nav-dropdown');
      var isOpen = dropdown.classList.contains('open');
      // Close all
      document.querySelectorAll('.nav-dropdown').forEach(function(d) {
        d.classList.remove('open');
      });
      // Toggle current
      if (!isOpen) {
        dropdown.classList.add('open');
      }
      return;
    }

    // Close mobile nav when a regular link inside the nav is clicked
    var navLink = e.target.closest('.nav a:not(.nav-dropdown > .nav-link)');
    if (navLink && nav && nav.classList.contains('open')) {
      navToggle.classList.remove('active');
      nav.classList.remove('open');
      if (navOverlay) navOverlay.classList.remove('active');
      document.body.style.overflow = '';
    }
  });

})();
