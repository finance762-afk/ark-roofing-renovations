<?php
$pageTitle       = "Ark Roofing & Renovations LLC | Roofing & Home Renovation in Tacoma, WA";
$pageDescription = "Ark Roofing & Renovations has served Tacoma and Pierce County for 33+ years. Roofing, siding, decking, gutters, and interior renovations. Licensed & insured. Free estimates. (253) 777-9683.";
$canonicalUrl    = "https://arkroofingpro.com";
$ogImage         = "/assets/images/q0vb42l-480.webp";
$currentPage     = "home";
$heroImage       = "/assets/images/q0vb42l-480.webp";
$useSwiper       = false;
$useTilt         = false;
$useTyped        = false;
$schemaMarkup    = '{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "LocalBusiness",
      "name": "Ark Roofing & Renovations LLC",
      "image": "/assets/images/q0vb42l-480.webp",
      "url": "https://arkroofingpro.com",
      "telephone": "+12537779683",
      "email": "letourneauwil@gmail.com",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "18214 25th Ave E",
        "addressLocality": "Tacoma",
        "addressRegion": "WA",
        "postalCode": "98445",
        "addressCountry": "US"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 47.2529,
        "longitude": -122.4443
      },
      "openingHoursSpecification": [
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],
          "opens": "08:00",
          "closes": "17:30"
        }
      ],
      "sameAs": [
        "https://share.google/KUCKCPllAaTlwyunI",
        "https://www.yelp.com/biz/ark-roofing-and-renovations-frederickson",
        "https://www.facebook.com/arkroofingpros/"
      ],
      "priceRange": "$$",
      "areaServed": {
        "@type": "GeoCircle",
        "geoMidpoint": {
          "@type": "GeoCoordinates",
          "latitude": 47.2529,
          "longitude": -122.4443
        },
        "geoRadius": "80467"
      }
    },
    {
      "@type": "WebSite",
      "name": "Ark Roofing & Renovations LLC",
      "url": "https://arkroofingpro.com",
      "potentialAction": {
        "@type": "SearchAction",
        "target": "https://arkroofingpro.com/?s={search_term_string}",
        "query-input": "required name=search_term_string"
      }
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How long does a roof replacement take in Tacoma?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Most residential roof replacements take 2-4 days depending on the size of the home, number of layers to tear off, and weather conditions. A standard single-story home with one layer of shingles is typically completed in 2 days. Larger homes, multi-layer tear-offs, or jobs requiring sheathing replacement may take 3-5 days."
          }
        },
        {
          "@type": "Question",
          "name": "Do you handle insurance claims for storm damage?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Ark Roofing & Renovations works with your insurance company throughout the claims process, providing detailed damage assessments, photo documentation, and itemized repair estimates that adjusters need."
          }
        },
        {
          "@type": "Question",
          "name": "What is included in your free estimate?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Our free estimates include a full inspection of the work area, measurements, material recommendations, and a written quote with line-item pricing. For roofing, we check the sheathing condition, flashing, vents, and gutters."
          }
        },
        {
          "@type": "Question",
          "name": "Can you replace siding and roofing at the same time?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Absolutely. Bundling roofing and siding work together saves on labor, reduces the overall project timeline, and ensures the entire building envelope is sealed properly. Many clients save 10-15% by combining exterior projects."
          }
        },
        {
          "@type": "Question",
          "name": "Do you offer emergency roofing services?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Ark Roofing & Renovations provides emergency tarping and temporary repairs for storm damage, fallen trees, and active leaks. Call (253) 777-9683 for rapid response to secure your property and prevent further damage."
          }
        }
      ]
    }
  ]
}';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

<main id="main-content">

  <!-- ========== HERO ========== -->
  <section class="hero" style="background-image: url('/assets/images/q0vb42l-480.webp');">
    <div class="container">
      <h1>Tacoma's Trusted Roofing &amp; Renovation Contractor &mdash; 33 Years Strong</h1>
      <p>From roof replacements to full interior remodels, Ark Roofing &amp; Renovations has protected Pierce County homes and businesses since 1992.</p>
      <div class="hero-cta">
        <a href="/contact" class="btn-primary">Get a Free Estimate</a>
        <a href="/services" class="btn-secondary" style="border-color:#fff;color:#fff;">Our Services</a>
      </div>
      <div style="margin-top: var(--space-xl);">
        <a href="tel:+12537779683" class="hero-phone">
          <i data-lucide="phone"></i> (253) 777-9683
        </a>
      </div>
    </div>
  </section>

  <!-- ========== TRUST BADGES ========== -->
  <section style="background: var(--bg-warm); padding: var(--space-lg) 0;">
    <div class="container">
      <div class="badge-strip">
        <div class="badge"><i data-lucide="award" style="width:20px;height:20px;color:var(--accent)"></i> 33+ years Experience</div>
        <div class="badge"><i data-lucide="building-2" style="width:20px;height:20px;color:var(--accent)"></i> Residential &amp; Commercial</div>
        <div class="badge"><i data-lucide="map" style="width:20px;height:20px;color:var(--accent)"></i> 50-Mile Service Radius</div>
        <div class="badge"><i data-lucide="shield-check" style="width:20px;height:20px;color:var(--accent)"></i> Licensed &amp; Insured</div>
        <div class="badge"><i data-lucide="siren" style="width:20px;height:20px;color:var(--accent)"></i> Emergency Services Available</div>
      </div>
    </div>
  </section>

  <!-- ========== SERVICES GRID ========== -->
  <section class="services-section" style="padding: var(--section-pad);">
    <div class="container">
      <div style="text-align:center; margin-bottom: var(--space-2xl);">
        <span class="eyebrow-label">What We Do</span>
        <h2 class="section-title">Roofing, Renovation &amp; Everything In Between</h2>
        <p class="section-subtitle prose-centered">Ark Roofing &amp; Renovations LLC is a licensed and insured roofing and renovation contractor based in Tacoma, WA. We handle exterior and interior projects for homes and businesses across Pierce County.</p>
      </div>
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

  <!-- ========== WHY CHOOSE ARK ========== -->
  <section style="background: var(--bg-warm); padding: var(--section-pad);">
    <div class="container">
      <div class="split">
        <div data-animate="fade-up">
          <span class="eyebrow-label">Why Ark</span>
          <h2 class="section-title">Why Tacoma Homeowners Choose Ark</h2>
          <p class="prose" style="margin-bottom: var(--space-xl); color: var(--text-light);">After 33 years of working on homes across Pierce County, we've earned our reputation the hard way &mdash; one project at a time. Here's what sets Ark apart from the competition.</p>
          <ul class="why-choose-list">
            <li>
              <span class="check-icon"><i data-lucide="check"></i></span>
              <span><strong>Hands-on owner on every job</strong> &mdash; Wil Letourneau oversees each project from start to finish</span>
            </li>
            <li>
              <span class="check-icon"><i data-lucide="check"></i></span>
              <span><strong>33 years of field experience</strong> &mdash; not sales experience, actual tools-in-hand trade knowledge</span>
            </li>
            <li>
              <span class="check-icon"><i data-lucide="check"></i></span>
              <span><strong>Full exterior + interior capabilities</strong> &mdash; one contractor from roofline to foundation</span>
            </li>
            <li>
              <span class="check-icon"><i data-lucide="check"></i></span>
              <span><strong>Honest assessments</strong> &mdash; we catch hidden rot, failing flashing, and structural issues before they spread</span>
            </li>
            <li>
              <span class="check-icon"><i data-lucide="check"></i></span>
              <span><strong>Emergency storm damage response</strong> &mdash; rapid tarping and repairs when Tacoma weather hits hard</span>
            </li>
          </ul>
        </div>
        <div>
          <div class="img-reveal">
            <img src="/assets/images/completed-gray-asphalt-shingle-roof-replacement-480.webp" alt="Completed gray asphalt shingle roof replacement by Ark Roofing in Tacoma, WA" width="800" height="600" loading="lazy">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== STATS ========== -->
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
          <div class="stat-number">24/7</div>
          <div class="stat-label">Emergency Response</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== WORK GALLERY ========== -->
  <section style="padding: var(--section-pad); background: var(--bg);">
    <div class="container">
      <div style="text-align:center; margin-bottom: var(--space-2xl);" data-animate="fade-up">
        <span class="eyebrow-label">Our Work</span>
        <h2 class="section-title">Recent Projects Across Pierce County</h2>
      </div>
      <div class="gallery-grid" data-animate="fade-up">
        <div class="gallery-item">
          <img src="/assets/images/completed-dark-gray-roof-with-plumbing-vents-and-480.webp" alt="Completed dark gray roof with plumbing vents and solar tube, Tacoma roofing project" width="800" height="600" loading="lazy">
        </div>
        <div class="gallery-item">
          <img src="/assets/images/modern-home-with-dark-board-and-batten-siding-in-480.webp" alt="Modern home with dark board-and-batten siding installed by Ark Roofing & Renovations" width="800" height="600" loading="lazy">
        </div>
        <div class="gallery-item">
          <img src="/assets/images/new-deck-frame-under-construction-with-pressure-960.webp" srcset="/assets/images/new-deck-frame-under-construction-with-pressure-480.webp 480w, /assets/images/new-deck-frame-under-construction-with-pressure-960.webp 960w, /assets/images/new-deck-frame-under-construction-with-pressure-1600.webp 1600w" sizes="(max-width: 768px) 100vw, 800px" alt="New deck frame under construction with pressure-treated lumber in Tacoma, WA" width="800" height="600" loading="lazy">
        </div>
        <div class="gallery-item">
          <img src="/assets/images/completed-asphalt-shingle-roof-overlooking-subur-480.webp" alt="Completed asphalt shingle roof overlooking suburban Tacoma neighborhood" width="800" height="600" loading="lazy">
        </div>
        <div class="gallery-item">
          <img src="/assets/images/weather-barrier-installed-over-new-sheathing-dur-480.webp" alt="Weather barrier installed over new sheathing during siding replacement project" width="800" height="600" loading="lazy">
        </div>
        <div class="gallery-item">
          <img src="/assets/images/deck-framing-in-progress-with-stained-lumber-pie-960.webp" srcset="/assets/images/deck-framing-in-progress-with-stained-lumber-pie-480.webp 480w, /assets/images/deck-framing-in-progress-with-stained-lumber-pie-960.webp 960w, /assets/images/deck-framing-in-progress-with-stained-lumber-pie-1600.webp 1600w" sizes="(max-width: 768px) 100vw, 800px" alt="Deck framing in progress with stained lumber, Pierce County deck build" width="800" height="600" loading="lazy">
        </div>
      </div>
    </div>
  </section>

  <!-- ========== ABOUT SNIPPET ========== -->
  <section class="about-snippet" style="padding: var(--section-pad);">
    <div class="container">
      <div class="split-reverse" data-animate="fade-up">
        <div>
          <span class="eyebrow-label">About Ark</span>
          <h2 class="section-title">33 Years of Hands-On Craftsmanship</h2>
          <div class="prose">
            <p style="margin-bottom: var(--space-md);">Ark Roofing &amp; Renovations LLC has protected Tacoma-area homes and businesses for over 33 years. Founded by Wil Letourneau, the company started as a focused roofing operation and grew into a full-service exterior and interior renovation contractor.</p>
            <p style="margin-bottom: var(--space-md);">Wil and his crew bring hands-on experience to every job. They've torn off thousands of roofs, replaced rotted sheathing hidden behind failing siding, and rebuilt decks down to the footings. That kind of field knowledge means problems get caught early and fixed right &mdash; not patched over.</p>
            <p style="margin-bottom: var(--space-xl);">Whether it's storm damage that needs immediate attention or a planned renovation, the team delivers consistent craftsmanship backed by three decades of earned reputation.</p>
          </div>
          <a href="/about" class="btn-primary">Meet the Team</a>
        </div>
        <div>
          <div class="img-reveal">
            <img src="/assets/images/ark-roofing-renovations-black-work-truck-with-du-480.webp" alt="Ark Roofing & Renovations black work truck with dump trailer at job site in Tacoma, WA" width="800" height="600" loading="lazy">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== CTA BANNER (MID-PAGE) ========== -->
  <section class="cta-banner">
    <div class="container">
      <h2 class="section-title">Need a Roof Inspection or Renovation Estimate?</h2>
      <p style="font-size: 1.1rem; opacity: 0.9; margin-bottom: var(--space-lg); max-width: 600px; margin-inline: auto;">Free estimates for roofing, siding, decking, and interior projects across Pierce County. No pressure, no hidden fees &mdash; just an honest assessment from a 33-year veteran contractor.</p>
      <a href="tel:+12537779683" class="hero-phone" style="color:#fff; justify-content:center; margin-bottom: var(--space-lg);">
        <i data-lucide="phone"></i> (253) 777-9683
      </a>
      <div>
        <a href="/contact" class="btn-primary">Schedule Your Free Estimate</a>
      </div>
    </div>
  </section>

  <!-- ========== FAQ ========== -->
  <section class="faq-section">
    <div class="container">
      <div style="text-align:center; margin-bottom: var(--space-2xl);" data-animate="fade-up">
        <h2 class="section-title">Common Questions About Roofing &amp; Renovations in Tacoma</h2>
      </div>
      <div class="faq-list" data-animate="fade-up">
        <div class="faq-item">
          <button class="faq-question" aria-expanded="false">
            How long does a roof replacement take in Tacoma?
            <i data-lucide="chevron-down"></i>
          </button>
          <div class="faq-answer">
            <p>Most residential roof replacements take 2&ndash;4 days depending on the size of the home, number of layers to tear off, and weather conditions. A standard single-story home with one layer of shingles is typically completed in 2 days. Larger homes, multi-layer tear-offs, or jobs requiring sheathing replacement may take 3&ndash;5 days. We schedule around Tacoma's rain patterns and always tarp exposed areas overnight.</p>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-question" aria-expanded="false">
            Do you handle insurance claims for storm damage?
            <i data-lucide="chevron-down"></i>
          </button>
          <div class="faq-answer">
            <p>Yes. We work with your insurance company throughout the claims process. We provide detailed damage assessments, photo documentation, and itemized repair estimates that adjusters need. We've handled hundreds of storm damage claims across Pierce County and know what documentation carriers require to approve repairs quickly.</p>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-question" aria-expanded="false">
            What's included in your free estimate?
            <i data-lucide="chevron-down"></i>
          </button>
          <div class="faq-answer">
            <p>Our free estimates include a full inspection of the work area, measurements, material recommendations, and a written quote with line-item pricing. For roofing, we check the sheathing condition, flashing, vents, and gutters &mdash; not just the shingles. We'll tell you exactly what needs attention now and what can wait, so you can plan and budget with real numbers.</p>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-question" aria-expanded="false">
            Can you replace siding and roofing at the same time?
            <i data-lucide="chevron-down"></i>
          </button>
          <div class="faq-answer">
            <p>Absolutely &mdash; and it's often the smartest approach. When we remove siding, we can inspect the sheathing and address rot or moisture damage before the new roof goes on. Bundling roofing and siding work together saves on labor, reduces the overall project timeline, and ensures the entire building envelope is sealed properly. Many of our Tacoma clients save 10&ndash;15% by combining exterior projects.</p>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-question" aria-expanded="false">
            Do you offer emergency roofing services?
            <i data-lucide="chevron-down"></i>
          </button>
          <div class="faq-answer">
            <p>Yes. We provide emergency tarping and temporary repairs for storm damage, fallen trees, and active leaks. In the Pacific Northwest, waiting even a day can turn a small leak into major water damage. Call us at <a href="tel:+12537779683">(253) 777-9683</a> and we'll get a crew out as quickly as possible to secure your property and prevent further damage.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== CLOSING CTA ========== -->
  <section class="closing-cta" data-animate="fade-up">
    <div class="container">
      <h2 class="section-title">Ready to Protect Your Investment?</h2>
      <p style="font-size: 1.1rem; color: rgba(255,255,255,0.8); max-width: 550px; margin-inline: auto; margin-bottom: var(--space-lg);">Whether it's a full roof replacement, siding project, or emergency repair &mdash; get a straight answer and an honest estimate from a contractor who's been doing this for 33 years.</p>
      <a href="tel:+12537779683" class="hero-phone" style="margin-bottom: var(--space-xl);">
        <i data-lucide="phone"></i> (253) 777-9683
      </a>
      <div>
        <a href="/contact" class="btn-primary">Schedule Your Free Estimate</a>
      </div>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
