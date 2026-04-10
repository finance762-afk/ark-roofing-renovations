<?php
$pageTitle       = "Service Area — Roofing & Renovations Within 50 Miles of Tacoma, WA";
$pageDescription = "Ark Roofing & Renovations serves Tacoma, Lakewood, Puyallup, Federal Way, Olympia, Bremerton, and all communities within 50 miles. Roofing, siding, decking & more.";
$canonicalUrl    = "https://arkroofingpro.com/service-area";
$ogImage         = "https://i.imgur.com/C85V48X.jpeg";
$currentPage     = "service-area";
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
        {"@type": "ListItem", "position": 2, "name": "Service Area", "item": "https://arkroofingpro.com/service-area"}
      ]
    },
    {
      "@type": "Service",
      "serviceType": "Roofing and Renovation",
      "provider": {
        "@type": "LocalBusiness",
        "name": "Ark Roofing & Renovations LLC",
        "telephone": "+12537779683",
        "address": {"@type": "PostalAddress", "streetAddress": "18214 25th Ave E", "addressLocality": "Tacoma", "addressRegion": "WA", "postalCode": "98445"}
      },
      "areaServed": [
        {"@type": "County", "name": "Pierce County", "containedInPlace": {"@type": "State", "name": "Washington"}},
        {"@type": "County", "name": "King County (South)", "containedInPlace": {"@type": "State", "name": "Washington"}},
        {"@type": "County", "name": "Thurston County", "containedInPlace": {"@type": "State", "name": "Washington"}},
        {"@type": "County", "name": "Kitsap County", "containedInPlace": {"@type": "State", "name": "Washington"}}
      ]
    },
    {"@type": "WebPage", "speakable": {"@type": "SpeakableSpecification", "cssSelector": [".answer-block", ".entity-block", "h1"]}}
  ]
}';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

<main id="main-content">

  <div class="container">
    <nav class="breadcrumbs" aria-label="Breadcrumb">
      <a href="/">Home</a> <span>/</span> <strong>Service Area</strong>
    </nav>
  </div>

  <!-- Header -->
  <section style="padding: var(--space-3xl) 0 var(--space-xl); background: var(--bg);">
    <div class="container">
      <h1 class="section-title">Roofing &amp; Renovation Services Within 50 Miles of Tacoma, WA</h1>
      <div class="prose">
        <p style="font-size: 1.1rem; line-height: 1.7;">Ark Roofing &amp; Renovations LLC is a licensed and insured roofing and renovation contractor based in Tacoma, WA 98445. We serve residential and commercial clients within a 50-mile radius, covering Pierce County, South King County, Thurston County, and Kitsap County. The Pacific Northwest's constant rain, wind-driven moisture, moss growth, and seasonal storms create demand for experienced contractors who understand what these conditions do to roofs, siding, and building envelopes year after year.</p>
      </div>
    </div>
  </section>

  <!-- Cities by County -->
  <section style="padding: var(--section-pad); background: var(--bg-warm);">
    <div class="container">
      <div style="text-align:center; margin-bottom: var(--space-2xl);">
        <h2 class="section-title">Communities We Serve</h2>
        <p class="section-subtitle prose-centered">From our home base in Tacoma, our crews travel across four counties to handle roofing, siding, decking, and renovation projects of every size.</p>
      </div>
      <div class="grid-2" data-animate="fade-up">
        <div class="card">
          <h3 style="color: var(--primary); margin-bottom: var(--space-md);"><i data-lucide="map-pin" style="width:20px; height:20px; display:inline; vertical-align:middle; margin-right:6px;"></i>Pierce County</h3>
          <p style="line-height: 1.8; color: var(--text-light);">Tacoma, Lakewood, Puyallup, Bonney Lake, University Place, Spanaway, Frederickson, Graham, Eatonville, Sumner, Edgewood, Fircrest, Steilacoom, DuPont, Orting, Buckley, Gig Harbor</p>
        </div>
        <div class="card">
          <h3 style="color: var(--primary); margin-bottom: var(--space-md);"><i data-lucide="map-pin" style="width:20px; height:20px; display:inline; vertical-align:middle; margin-right:6px;"></i>South King County</h3>
          <p style="line-height: 1.8; color: var(--text-light);">Federal Way, Auburn, Kent, Renton, Maple Valley, Covington, SeaTac, Tukwila, Burien</p>
        </div>
        <div class="card">
          <h3 style="color: var(--primary); margin-bottom: var(--space-md);"><i data-lucide="map-pin" style="width:20px; height:20px; display:inline; vertical-align:middle; margin-right:6px;"></i>Thurston County</h3>
          <p style="line-height: 1.8; color: var(--text-light);">Olympia, Lacey, Tumwater, Yelm, Rainier</p>
        </div>
        <div class="card">
          <h3 style="color: var(--primary); margin-bottom: var(--space-md);"><i data-lucide="map-pin" style="width:20px; height:20px; display:inline; vertical-align:middle; margin-right:6px;"></i>Kitsap County</h3>
          <p style="line-height: 1.8; color: var(--text-light);">Bremerton, Silverdale, Port Orchard</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Split: Why Local Experience Matters -->
  <section style="padding: var(--section-pad); background: var(--bg);">
    <div class="container">
      <div class="split" data-animate="fade-up">
        <div>
          <h2 class="section-title">Why Tacoma-Area Homes Need Experienced Contractors</h2>
          <div class="prose">
            <p style="margin-bottom: var(--space-md);">The Puget Sound region receives 37&ndash;50 inches of rain per year depending on location, spread across 150+ days of precipitation. That constant moisture, combined with mild temperatures and limited direct sunlight on north-facing surfaces, creates conditions that accelerate rot, moss growth, and material failure faster than almost anywhere else in the country.</p>
            <p style="margin-bottom: var(--space-md);">Roofs that last 30 years in Arizona last 20 here. Siding that stays dry in Colorado traps moisture behind it in Tacoma. Untreated decks rot in 10 years. Gutters clog with moss and debris quarterly. These aren't just maintenance issues &mdash; they're structural threats that compound when ignored.</p>
            <p>After 33 years of working on homes across this region, Ark Roofing &amp; Renovations understands exactly what the Pacific Northwest does to buildings. We spec materials, underlayment, flashing, and ventilation specifically for these conditions &mdash; not generic specs designed for drier climates.</p>
          </div>
        </div>
        <div>
          <div class="img-reveal">
            <img src="https://i.imgur.com/C85V48X.jpeg" alt="Large two-story home in Pierce County requiring roofing and renovation services" width="800" height="600" loading="lazy">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Services Summary -->
  <section style="padding: var(--section-pad); background: var(--bg-warm);">
    <div class="container">
      <div style="text-align:center; margin-bottom: var(--space-2xl);" data-animate="fade-up">
        <h2 class="section-title">Services Available Across Our Entire Coverage Area</h2>
      </div>
      <div class="grid-3" data-animate="fade-up">
        <a href="/services/roofing" class="card" style="text-decoration:none; color: var(--text); display:flex; align-items:center; gap: var(--space-md);"><i data-lucide="hard-hat" style="flex-shrink:0; width:22px; height:22px; color: var(--primary);"></i> <strong>Roofing</strong></a>
        <a href="/services/siding" class="card" style="text-decoration:none; color: var(--text); display:flex; align-items:center; gap: var(--space-md);"><i data-lucide="layout-panel-left" style="flex-shrink:0; width:22px; height:22px; color: var(--primary);"></i> <strong>Siding</strong></a>
        <a href="/services/decking" class="card" style="text-decoration:none; color: var(--text); display:flex; align-items:center; gap: var(--space-md);"><i data-lucide="fence" style="flex-shrink:0; width:22px; height:22px; color: var(--primary);"></i> <strong>Decking</strong></a>
        <a href="/services/soffit-and-fascia" class="card" style="text-decoration:none; color: var(--text); display:flex; align-items:center; gap: var(--space-md);"><i data-lucide="panels-top-left" style="flex-shrink:0; width:22px; height:22px; color: var(--primary);"></i> <strong>Soffit &amp; Fascia</strong></a>
        <a href="/services/fences" class="card" style="text-decoration:none; color: var(--text); display:flex; align-items:center; gap: var(--space-md);"><i data-lucide="fence" style="flex-shrink:0; width:22px; height:22px; color: var(--primary);"></i> <strong>Fences</strong></a>
        <a href="/services/gutters" class="card" style="text-decoration:none; color: var(--text); display:flex; align-items:center; gap: var(--space-md);"><i data-lucide="droplets" style="flex-shrink:0; width:22px; height:22px; color: var(--primary);"></i> <strong>Gutters</strong></a>
        <a href="/services/roof-cleaning" class="card" style="text-decoration:none; color: var(--text); display:flex; align-items:center; gap: var(--space-md);"><i data-lucide="spray-can" style="flex-shrink:0; width:22px; height:22px; color: var(--primary);"></i> <strong>Roof Cleaning</strong></a>
        <a href="/services/emergency-services" class="card" style="text-decoration:none; color: var(--text); display:flex; align-items:center; gap: var(--space-md);"><i data-lucide="siren" style="flex-shrink:0; width:22px; height:22px; color: var(--primary);"></i> <strong>Emergency Services</strong></a>
        <a href="/services/flooring" class="card" style="text-decoration:none; color: var(--text); display:flex; align-items:center; gap: var(--space-md);"><i data-lucide="grid-2x2" style="flex-shrink:0; width:22px; height:22px; color: var(--primary);"></i> <strong>Flooring</strong></a>
        <a href="/services/bathrooms" class="card" style="text-decoration:none; color: var(--text); display:flex; align-items:center; gap: var(--space-md);"><i data-lucide="bath" style="flex-shrink:0; width:22px; height:22px; color: var(--primary);"></i> <strong>Bathrooms</strong></a>
        <a href="/services/drywall" class="card" style="text-decoration:none; color: var(--text); display:flex; align-items:center; gap: var(--space-md);"><i data-lucide="square" style="flex-shrink:0; width:22px; height:22px; color: var(--primary);"></i> <strong>Drywall</strong></a>
        <a href="/services/painting" class="card" style="text-decoration:none; color: var(--text); display:flex; align-items:center; gap: var(--space-md);"><i data-lucide="paint-roller" style="flex-shrink:0; width:22px; height:22px; color: var(--primary);"></i> <strong>Painting</strong></a>
      </div>
    </div>
  </section>

  <!-- Map -->
  <section style="padding: var(--section-pad); background: var(--bg);">
    <div class="container">
      <h2 class="section-title" style="text-align:center; margin-bottom: var(--space-xl);" data-animate="fade-up">Our Coverage Area</h2>
      <div style="border-radius: var(--radius); overflow: hidden; box-shadow: var(--elevation-2);" data-animate="fade-up">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d350000!2d-122.5!3d47.2!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5490fdd91a0a0001%3A0x65f5ee45b4b9af1!2sTacoma%2C%20WA!5e0!3m2!1sen!2sus!4v1700000000000" width="100%" height="450" style="border:0; display:block;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Ark Roofing & Renovations 50-mile service area centered on Tacoma, WA"></iframe>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="closing-cta" data-animate="fade-up">
    <div class="container">
      <h2 class="section-title">Serving Your Neighborhood &mdash; Get a Free Estimate</h2>
      <p style="font-size: 1.1rem; color: rgba(255,255,255,0.8); max-width: 550px; margin-inline: auto; margin-bottom: var(--space-lg);">If you're within 50 miles of Tacoma, we'll come to you. Free on-site estimates for any roofing or renovation project.</p>
      <a href="tel:+12537779683" class="hero-phone" style="margin-bottom: var(--space-xl);">
        <i data-lucide="phone"></i> (253) 777-9683
      </a>
      <div>
        <a href="/contact" class="btn-primary">Request Your Free Estimate</a>
      </div>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
