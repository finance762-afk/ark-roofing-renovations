<?php
$pageTitle       = "About Ark Roofing & Renovations — 33 Years Serving Tacoma, WA";
$pageDescription = "Founded by Wil Letourneau, Ark Roofing & Renovations has served Tacoma and Pierce County for 33+ years. Roofing, siding, decking, and full renovations. Licensed & insured.";
$canonicalUrl    = "https://arkroofingpro.com/about";
$ogImage         = "/assets/images/ark-roofing-renovations-black-work-truck-with-du-480.webp";
$currentPage     = "about";
$heroImage       = "/assets/images/ark-roofing-renovations-black-work-truck-with-du-480.webp";
$useSwiper       = false;
$useTilt         = false;
$useTyped        = false;
$schemaMarkup    = '{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {"@type": "ListItem", "position": 1, "name": "Home", "item": "https://arkroofingpro.com"},
        {"@type": "ListItem", "position": 2, "name": "About", "item": "https://arkroofingpro.com/about"}
      ]
    },
    {
      "@type": "Organization",
      "name": "Ark Roofing & Renovations LLC",
      "url": "https://arkroofingpro.com",
      "logo": "/assets/images/logo.jpeg",
      "foundingDate": "1992",
      "founder": {
        "@type": "Person",
        "name": "Wil Letourneau",
        "jobTitle": "Owner & Founder",
        "worksFor": {"@type": "Organization", "name": "Ark Roofing & Renovations LLC"}
      },
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "18214 25th Ave E",
        "addressLocality": "Tacoma",
        "addressRegion": "WA",
        "postalCode": "98445",
        "addressCountry": "US"
      },
      "telephone": "+12537779683",
      "email": "letourneauwil@gmail.com",
      "sameAs": [
        "https://share.google/KUCKCPllAaTlwyunI",
        "https://www.yelp.com/biz/ark-roofing-and-renovations-frederickson",
        "https://www.facebook.com/arkroofingpros/"
      ]
    },
    {
      "@type": "Person",
      "name": "Wil Letourneau",
      "jobTitle": "Owner & Founder",
      "worksFor": {"@type": "Organization", "name": "Ark Roofing & Renovations LLC"},
      "knowsAbout": ["Roofing", "Siding", "Renovation", "Construction"]
    },
    {
      "@type": "LocalBusiness",
      "name": "Ark Roofing & Renovations LLC"
    }
  ]
}';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

<main id="main-content">

  <div class="container">
    <nav class="breadcrumbs" aria-label="Breadcrumb">
      <a href="/">Home</a> <span>/</span> <strong>About</strong>
    </nav>
  </div>

  <!-- Hero -->
  <section class="hero" style="background-image: url('/assets/images/ark-roofing-renovations-black-work-truck-with-du-480.webp'); min-height: 55vh;">
    <div class="container">
      <h1>About Ark Roofing &amp; Renovations &mdash; 33 Years Serving Tacoma</h1>
      <p>Founded by Wil Letourneau, Ark has protected Pierce County homes and businesses since 1992 with honest assessments and hands-on craftsmanship.</p>
    </div>
  </section>

  <!-- Intro -->
  <section style="padding: var(--section-pad); background: var(--bg);">
    <div class="container">
      <div class="prose-centered">
        <p style="font-size: 1.1rem; line-height: 1.7; margin-bottom: var(--space-md);">Ark Roofing &amp; Renovations LLC is a licensed and insured roofing and renovation contractor based in Tacoma, WA, serving residential and commercial clients within a 50-mile radius. Founded by Wil Letourneau over 33 years ago, the company started as a focused roofing operation and grew into a full-service exterior and interior renovation contractor handling everything from roof replacements and <a href="/services/siding">siding installations</a> to <a href="/services/decking">deck builds</a>, <a href="/services/gutters">gutter systems</a>, and interior remodeling.</p>
        <p style="font-size: 1.1rem; line-height: 1.7;">Ark's reputation was built one roof at a time through consistent craftsmanship and honest assessments. We don't upsell unnecessary work, and we don't cut corners on what matters &mdash; proper underlayment, solid sheathing, correct flashing, and quality materials.</p>
      </div>
    </div>
  </section>

  <!-- Founder Section -->
  <section style="padding: var(--section-pad); background: var(--bg-warm);">
    <div class="container">
      <div class="split" data-animate="fade-up">
        <div>
          <span class="eyebrow-label">The Founder</span>
          <h2 class="section-title">Wil Letourneau &mdash; Hands-On From Day One</h2>
          <div class="prose">
            <p style="margin-bottom: var(--space-md);">Wil Letourneau founded Ark Roofing &amp; Renovations in Tacoma, Washington over three decades ago. He's not a sales guy who sends crews out and waits for a check &mdash; he's on job sites, on ladders, and in attics. That hands-on approach is what built the company and what keeps it running the same way today.</p>
            <p style="margin-bottom: var(--space-md);">Over 33 years, Wil and his crew have torn off thousands of roofs, replaced rotted sheathing hidden behind failing siding, rebuilt decks down to the footings, and handled emergency storm damage calls at all hours. That kind of field experience means problems get caught early &mdash; soft spots in sheathing, failing flashing behind a chimney, rot spreading from a gutter leak into the fascia.</p>
            <p>When you get an estimate from Ark, you're talking to the person who will be on your roof &mdash; not a salesperson who disappears after the contract is signed.</p>
          </div>
        </div>
        <div>
          <div class="img-reveal">
            <img src="/assets/images/ark-roofing-renovations-crew-vehicles-at-an-acti-480.webp" alt="Ark Roofing & Renovations crew vehicles at an active job site in Tacoma, WA" width="800" height="600" loading="lazy">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- What Sets Ark Apart -->
  <section style="padding: var(--section-pad); background: var(--bg);">
    <div class="container">
      <div class="split-reverse" data-animate="fade-up">
        <div>
          <h2 class="section-title">What Sets Ark Apart</h2>
          <ul class="why-choose-list">
            <li>
              <span class="check-icon"><i data-lucide="check"></i></span>
              <span><strong>We catch what others miss</strong> &mdash; 33 years of tearing off roofs and pulling siding means we know where damage hides</span>
            </li>
            <li>
              <span class="check-icon"><i data-lucide="check"></i></span>
              <span><strong>Honest assessments</strong> &mdash; if a repair will last, we'll tell you. If the structure is compromised, we'll show you why</span>
            </li>
            <li>
              <span class="check-icon"><i data-lucide="check"></i></span>
              <span><strong>Full exterior and interior</strong> &mdash; roofing, siding, decking, gutters, fences, flooring, bathrooms, drywall, and painting under one contractor</span>
            </li>
            <li>
              <span class="check-icon"><i data-lucide="check"></i></span>
              <span><strong>Residential and commercial</strong> &mdash; from single-family homes to multi-unit properties and commercial buildings</span>
            </li>
            <li>
              <span class="check-icon"><i data-lucide="check"></i></span>
              <span><strong>Emergency response</strong> &mdash; <a href="/services/emergency-services">rapid tarping and repairs</a> for storm damage, fallen trees, and active leaks</span>
            </li>
          </ul>
        </div>
        <div>
          <div class="img-reveal">
            <img src="/assets/images/roofing-crew-removing-damaged-roofing-material-f-960.webp" srcset="/assets/images/roofing-crew-removing-damaged-roofing-material-f-480.webp 480w, /assets/images/roofing-crew-removing-damaged-roofing-material-f-960.webp 960w, /assets/images/roofing-crew-removing-damaged-roofing-material-f-1600.webp 1600w" sizes="(max-width: 768px) 100vw, 800px" alt="Roofing crew removing old materials during roof replacement project in Tacoma" width="800" height="600" loading="lazy">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Stats -->
  <section class="stats-section">
    <div class="container">
      <div class="grid-2 grid-4-desktop" style="text-align:center;" data-animate="fade-up">
        <div class="stat-counter">
          <div class="stat-number" data-count="33" data-suffix="+">0+</div>
          <div class="stat-label">Years in Business</div>
        </div>
        <div class="stat-counter">
          <div class="stat-number" data-count="5000" data-suffix="+">0+</div>
          <div class="stat-label">Roofs Completed</div>
        </div>
        <div class="stat-counter">
          <div class="stat-number" data-count="50">0</div>
          <div class="stat-label">Mile Service Radius</div>
        </div>
        <div class="stat-counter">
          <div class="stat-number" data-count="12">0</div>
          <div class="stat-label">Services Offered</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Service Area Brief -->
  <section style="padding: var(--section-pad); background: var(--bg-warm);">
    <div class="container">
      <div style="text-align:center;" data-animate="fade-up">
        <h2 class="section-title">Serving the Greater Tacoma Region</h2>
        <p class="prose-centered" style="margin-bottom: var(--space-xl); color: var(--text-light);">Ark Roofing &amp; Renovations serves residential and commercial clients within a 50-mile radius of Tacoma, covering Pierce County, South King County, Thurston County, and Kitsap County. From Olympia to Federal Way and Bremerton to Bonney Lake, our crews travel to wherever the work is needed.</p>
        <a href="/service-area" class="btn-secondary">View Full Service Area</a>
      </div>
    </div>
  </section>

  <!-- Closing CTA -->
  <section class="closing-cta" data-animate="fade-up">
    <div class="container">
      <h2 class="section-title">Ready to Work With Tacoma's Most Experienced Contractor?</h2>
      <p style="font-size: 1.1rem; color: rgba(255,255,255,0.8); max-width: 550px; margin-inline: auto; margin-bottom: var(--space-lg);">33 years. Thousands of projects. One standard &mdash; get it right the first time. Call for a free estimate on any roofing or renovation project.</p>
      <a href="tel:+12537779683" class="hero-phone" style="margin-bottom: var(--space-xl);">
        <i data-lucide="phone"></i> (253) 777-9683
      </a>
      <div>
        <a href="/contact" class="btn-primary">Get Your Free Estimate</a>
      </div>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
