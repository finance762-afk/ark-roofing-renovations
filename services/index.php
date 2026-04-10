<?php
$pageTitle       = "Our Services | Roofing, Renovations & More | Ark Roofing & Renovations LLC";
$pageDescription = "Ark Roofing & Renovations provides roofing, siding, decking, gutters, fences, and interior renovation services across Tacoma and Pierce County. Licensed & insured. 33+ years experience.";
$canonicalUrl    = "https://arkroofingpro.com/services";
$ogImage         = "https://i.imgur.com/q0vb42l.jpeg";
$currentPage     = "services";
$heroImage       = "";
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
        {"@type": "ListItem", "position": 2, "name": "Services", "item": "https://arkroofingpro.com/services"}
      ]
    }
  ]
}';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

<main id="main-content">

  <!-- Breadcrumb -->
  <div class="container">
    <nav class="breadcrumbs" aria-label="Breadcrumb">
      <a href="/">Home</a> <span>/</span> <strong>Services</strong>
    </nav>
  </div>

  <!-- Header -->
  <section style="padding: var(--space-3xl) 0 var(--space-xl); background: var(--bg);">
    <div class="container">
      <h1 class="section-title">Our Services &mdash; Roofing, Renovations &amp; More in Tacoma, WA</h1>
      <div class="prose">
        <p>Ark Roofing &amp; Renovations LLC is a licensed and insured roofing and renovation contractor based in Tacoma, WA, serving Pierce County and the surrounding area for over 33 years. Whether you need a full roof replacement, new siding over rotted sheathing, a custom deck build, or an interior remodel, we handle projects from ridgeline to foundation &mdash; all under one contractor.</p>
        <p style="margin-top: var(--space-md);">Every project starts with an honest assessment. We tell you what needs attention now, what can wait, and what it will cost &mdash; no pressure, no surprises. Call <a href="tel:+12537779683">(253) 777-9683</a> for a free estimate.</p>
      </div>
    </div>
  </section>

  <!-- Services Grid -->
  <section style="padding: var(--space-xl) 0 var(--section-pad); background: var(--bg);">
    <div class="container">
      <div class="grid-3" data-stagger data-animate="fade-up">
        <a href="/services/roofing" class="service-card">
          <div class="card-icon"><i data-lucide="hard-hat"></i></div>
          <h3>Roofing</h3>
          <p>Full roof replacements, repairs, and tear-offs for residential and commercial properties.</p>
          <span class="card-arrow">Learn More <i data-lucide="arrow-right"></i></span>
        </a>
        <a href="/services/siding" class="service-card">
          <div class="card-icon"><i data-lucide="layout-panel-left"></i></div>
          <h3>Siding</h3>
          <p>Vinyl, fiber cement, and board-and-batten siding installation with rot repair.</p>
          <span class="card-arrow">Learn More <i data-lucide="arrow-right"></i></span>
        </a>
        <a href="/services/decking" class="service-card">
          <div class="card-icon"><i data-lucide="fence"></i></div>
          <h3>Decking</h3>
          <p>Custom deck builds, rebuilds, and resurfacing from footings to finished railings.</p>
          <span class="card-arrow">Learn More <i data-lucide="arrow-right"></i></span>
        </a>
        <a href="/services/soffit-and-fascia" class="service-card">
          <div class="card-icon"><i data-lucide="panels-top-left"></i></div>
          <h3>Soffit &amp; Fascia</h3>
          <p>Replacement and repair of soffit, fascia, and trim to protect your roofline.</p>
          <span class="card-arrow">Learn More <i data-lucide="arrow-right"></i></span>
        </a>
        <a href="/services/fences" class="service-card">
          <div class="card-icon"><i data-lucide="fence"></i></div>
          <h3>Fences</h3>
          <p>Wood, vinyl, and chain-link fencing for privacy, security, and curb appeal.</p>
          <span class="card-arrow">Learn More <i data-lucide="arrow-right"></i></span>
        </a>
        <a href="/services/gutters" class="service-card">
          <div class="card-icon"><i data-lucide="droplets"></i></div>
          <h3>Gutters</h3>
          <p>Seamless gutter installation, repair, and downspout routing for proper drainage.</p>
          <span class="card-arrow">Learn More <i data-lucide="arrow-right"></i></span>
        </a>
        <a href="/services/roof-cleaning" class="service-card">
          <div class="card-icon"><i data-lucide="spray-can"></i></div>
          <h3>Roof Cleaning</h3>
          <p>Moss removal, soft washing, and debris clearing to extend your roof's lifespan.</p>
          <span class="card-arrow">Learn More <i data-lucide="arrow-right"></i></span>
        </a>
        <a href="/services/emergency-services" class="service-card">
          <div class="card-icon"><i data-lucide="siren"></i></div>
          <h3>Emergency Services</h3>
          <p>Rapid response for storm damage, leaks, and tarping when you can't wait.</p>
          <span class="card-arrow">Learn More <i data-lucide="arrow-right"></i></span>
        </a>
        <a href="/services/flooring" class="service-card">
          <div class="card-icon"><i data-lucide="grid-2x2"></i></div>
          <h3>Flooring</h3>
          <p>Hardwood, laminate, vinyl plank, and tile flooring installation and replacement.</p>
          <span class="card-arrow">Learn More <i data-lucide="arrow-right"></i></span>
        </a>
        <a href="/services/bathrooms" class="service-card">
          <div class="card-icon"><i data-lucide="bath"></i></div>
          <h3>Bathrooms</h3>
          <p>Full bathroom remodels including tile, fixtures, vanities, and plumbing updates.</p>
          <span class="card-arrow">Learn More <i data-lucide="arrow-right"></i></span>
        </a>
        <a href="/services/drywall" class="service-card">
          <div class="card-icon"><i data-lucide="square"></i></div>
          <h3>Drywall</h3>
          <p>Drywall hanging, taping, mudding, and texture matching for repairs and new construction.</p>
          <span class="card-arrow">Learn More <i data-lucide="arrow-right"></i></span>
        </a>
        <a href="/services/painting" class="service-card">
          <div class="card-icon"><i data-lucide="paint-roller"></i></div>
          <h3>Painting</h3>
          <p>Interior and exterior painting with proper prep, priming, and lasting finishes.</p>
          <span class="card-arrow">Learn More <i data-lucide="arrow-right"></i></span>
        </a>
      </div>
    </div>
  </section>

  <!-- CTA Banner -->
  <section class="cta-banner">
    <div class="container">
      <h2 class="section-title">Ready to Start Your Project?</h2>
      <p style="font-size: 1.1rem; opacity: 0.9; margin-bottom: var(--space-lg); max-width: 600px; margin-inline: auto;">Get a free, no-pressure estimate from a contractor with 33 years of experience across Pierce County. We'll tell you exactly what you need &mdash; and what you don't.</p>
      <a href="tel:+12537779683" class="hero-phone" style="color:#fff; justify-content:center; margin-bottom: var(--space-lg);">
        <i data-lucide="phone"></i> (253) 777-9683
      </a>
      <div>
        <a href="/contact" class="btn-primary">Get Your Free Estimate</a>
      </div>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
