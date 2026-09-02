<?php
$pageTitle       = "Roof Replacement & Repair in Tacoma, WA | Ark Roofing & Renovations";
$pageDescription = "Tacoma's trusted roofing contractor for 33+ years. Full roof replacements, tear-offs, storm damage repair, and insurance claims. Licensed & insured. Free estimates. (253) 777-9683.";
$canonicalUrl    = "https://arkroofingpro.com/services/roofing";
$ogImage         = "/assets/images/q0vb42l-480.webp";
$currentPage     = "services";
$heroImage       = "/assets/images/q0vb42l-480.webp";
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
        {"@type": "ListItem", "position": 2, "name": "Services", "item": "https://arkroofingpro.com/services"},
        {"@type": "ListItem", "position": 3, "name": "Roofing", "item": "https://arkroofingpro.com/services/roofing"}
      ]
    },
    {
      "@type": "Service",
      "serviceType": "Roofing",
      "provider": {
        "@type": "LocalBusiness",
        "name": "Ark Roofing & Renovations LLC",
        "telephone": "+12537779683",
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "18214 25th Ave E",
          "addressLocality": "Tacoma",
          "addressRegion": "WA",
          "postalCode": "98445"
        }
      },
      "areaServed": {
        "@type": "GeoCircle",
        "geoMidpoint": {"@type": "GeoCoordinates", "latitude": 47.2529, "longitude": -122.4443},
        "geoRadius": "80467"
      },
      "description": "Full roof replacements, tear-offs, repairs, and storm damage restoration for residential and commercial properties in Tacoma, WA and Pierce County."
    },
    {
      "@type": "LocalBusiness",
      "name": "Ark Roofing & Renovations LLC"
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {"@type": "Question", "name": "How long will my new roof last in the Tacoma climate?", "acceptedAnswer": {"@type": "Answer", "text": "Architectural asphalt shingles typically last 25-35 years in the Pacific Northwest when properly installed with adequate ventilation. The key factors are quality underlayment, proper flashing, and ridge venting to prevent moisture buildup."}},
        {"@type": "Question", "name": "Can you roof during the rainy season?", "acceptedAnswer": {"@type": "Answer", "text": "Yes, with precautions. We schedule around weather windows and always tarp exposed areas at the end of each work day. We will not start a tear-off when sustained heavy rain is forecasted."}},
        {"@type": "Question", "name": "Do I need to replace the gutters when I get a new roof?", "acceptedAnswer": {"@type": "Answer", "text": "Not always, but it is often the most cost-effective time to do it. We remove and reset existing gutters during every roof replacement. If they are damaged or over 15 years old, replacing them during the roofing project saves costs."}},
        {"@type": "Question", "name": "What roofing materials do you recommend for homes in Pierce County?", "acceptedAnswer": {"@type": "Answer", "text": "For most residential properties, we recommend architectural asphalt shingles from manufacturers like CertainTeed, GAF, or Owens Corning. They offer the best balance of durability, wind resistance, and value for the Pacific Northwest climate."}}
      ]
    },
    {
      "@type": "HowTo",
      "name": "How Ark Roofing & Renovations Replaces a Roof in Tacoma, WA",
      "description": "The step-by-step process for a full residential roof replacement by Ark Roofing & Renovations in Tacoma and Pierce County.",
      "step": [
        {"@type": "HowToStep", "position": 1, "name": "Inspection & Estimate", "text": "Assess roof condition, check sheathing, measure the roof, and provide a written estimate with material options."},
        {"@type": "HowToStep", "position": 2, "name": "Tear-Off", "text": "Strip all existing shingles and underlayment down to bare sheathing. Old material goes into a dumpster on-site."},
        {"@type": "HowToStep", "position": 3, "name": "Sheathing Repair", "text": "Inspect every inch of the deck. Replace rotted or water-damaged plywood before anything goes on top."},
        {"@type": "HowToStep", "position": 4, "name": "Underlayment & Flashing", "text": "Install ice and water shield at eaves and valleys, synthetic underlayment across the deck, new drip edge and flashing."},
        {"@type": "HowToStep", "position": 5, "name": "Shingle Installation & Cleanup", "text": "Install new shingles to manufacturer spec, ridge vent for ventilation, full debris cleanup, and magnetic sweep."}
      ]
    },
    {
      "@type": "WebPage",
      "speakable": {
        "@type": "SpeakableSpecification",
        "cssSelector": [".answer-block", ".entity-block", "h1"]
      }
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
      <a href="/">Home</a> <span>/</span> <a href="/services">Services</a> <span>/</span> <strong>Roofing</strong>
    </nav>
  </div>

  <!-- Hero Section -->
  <section class="hero" style="background-image: url('/assets/images/q0vb42l-480.webp'); min-height: 60vh;">
    <div class="container">
      <h1>Roof Replacement &amp; Repair in Tacoma, WA</h1>
      <p>Full tear-offs, new installations, storm damage repair, and insurance claims &mdash; backed by 33 years of hands-on roofing experience across Pierce County.</p>
      <div class="hero-cta">
        <a href="/contact" class="btn-primary">Get a Free Roofing Estimate</a>
        <a href="tel:+12537779683" class="hero-phone"><i data-lucide="phone"></i> (253) 777-9683</a>
      </div>
    </div>
  </section>

  <!-- Answer-First Opening -->
  <section style="padding: var(--section-pad); background: var(--bg);">
    <div class="container">
      <div class="prose-centered">
        <p style="font-size: 1.1rem; line-height: 1.7; margin-bottom: var(--space-lg);">A full roof replacement in Tacoma typically costs between $8,000 and $20,000 for a standard residential home, depending on size, pitch, material, and the number of layers to tear off. Most replacements take 2&ndash;4 days. Ark Roofing &amp; Renovations LLC has completed thousands of roof replacements across Pierce County since 1992, handling everything from single-layer strip-and-replace jobs to complex multi-layer tear-offs with sheathing repair underneath.</p>
        <p style="font-size: 1.1rem; line-height: 1.7;">Ark Roofing &amp; Renovations has provided roofing services in Tacoma and Pierce County for over 33 years. We're licensed, insured, and experienced with both residential and commercial roofing systems. Every roof we install starts with a thorough inspection of the deck sheathing &mdash; because a new roof over rotted plywood is money wasted.</p>
      </div>
    </div>
  </section>

  <!-- Split: Why Replace Your Roof -->
  <section style="padding: var(--section-pad); background: var(--bg-warm);">
    <div class="container">
      <div class="split" data-animate="fade-up">
        <div>
          <h2 class="section-title">When Does a Tacoma Home Need a New Roof?</h2>
          <div class="prose">
            <p style="margin-bottom: var(--space-md);">Pacific Northwest weather is relentless on roofing materials. Between constant rain, wind-driven moisture, freeze-thaw cycles in winter, and moss growth in summer shade, asphalt shingles in the Tacoma area typically last 20&ndash;30 years before they need full replacement.</p>
            <p style="margin-bottom: var(--space-md);">Signs your roof is due for replacement include curling or buckling shingles, granule loss in gutters, daylight visible through roof boards, sagging sections, and recurring leaks that patching can't stop. If your roof is over 20 years old and showing two or more of these signs, repair costs start to outweigh replacement value.</p>
            <p>We provide free inspections and honest assessments. If a repair will buy you another 5&ndash;10 years, we'll tell you. If the deck is compromised and you need a full tear-off, we'll explain why &mdash; and show you the damage.</p>
          </div>
        </div>
        <div>
          <div class="img-reveal">
            <img src="/assets/images/damaged-chimney-flashing-requiring-emergency-rep-480.webp" alt="Brick chimney with damaged roof flashing requiring repair in Tacoma, WA" width="800" height="600" loading="lazy">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Answer Block -->
  <section style="padding: var(--section-pad); background: var(--bg);">
    <div class="container">
      <div class="answer-block" data-animate="fade-up" itemscope itemtype="https://schema.org/Question">
        <h2 itemprop="name">How much does a roof replacement cost in Tacoma?</h2>
        <div itemprop="acceptedAnswer" itemscope itemtype="https://schema.org/Answer">
          <p class="prose" itemprop="text">Most residential roof replacements in the Tacoma area run between $8,000 and $20,000. A basic single-story home with one layer of shingles is on the lower end. Larger homes, steep pitches, multiple tear-off layers, sheathing replacement, or architectural shingles push the cost higher. We provide detailed line-item estimates so you know exactly what you're paying for.</p>
        </div>
      </div>
      <div class="answer-block" data-animate="fade-up" itemscope itemtype="https://schema.org/Question">
        <h2 itemprop="name">What's included in a full roof replacement?</h2>
        <div itemprop="acceptedAnswer" itemscope itemtype="https://schema.org/Answer">
          <p class="prose" itemprop="text">A complete tear-off of existing shingles and underlayment, inspection and repair of deck sheathing, installation of ice and water shield at eaves and valleys, synthetic underlayment (we use APOC Gator-Skin), new drip edge, new flashing at walls and penetrations, ridge vent for ventilation, and new asphalt shingles. We also handle permits when required by Pierce County.</p>
        </div>
      </div>
      <div class="answer-block" data-animate="fade-up" itemscope itemtype="https://schema.org/Question">
        <h3 itemprop="name">Do you handle roofing and siding together?</h3>
        <div itemprop="acceptedAnswer" itemscope itemtype="https://schema.org/Answer">
          <p class="prose" itemprop="text">Yes &mdash; and it's often the smartest approach. When we strip <a href="/services/siding">siding</a>, we expose the sheathing and can address rot or water damage before the new roof goes on. Many Tacoma homeowners save 10&ndash;15% by bundling exterior projects. We also install <a href="/services/gutters">gutters</a> and <a href="/services/soffit-and-fascia">soffit and fascia</a> during roofing projects.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Split Reverse: Our Process -->
  <section style="padding: var(--section-pad); background: var(--bg-warm);">
    <div class="container">
      <div class="split-reverse" data-animate="fade-up">
        <div>
          <span class="eyebrow-label">Our Process</span>
          <h2 class="section-title">How We Replace a Roof</h2>
          <div class="prose">
            <ol style="list-style: none; counter-reset: step; display: flex; flex-direction: column; gap: var(--space-lg);">
              <li style="display: flex; align-items: flex-start; gap: var(--space-md);">
                <span style="flex-shrink:0; width:36px; height:36px; background: var(--primary); color:#fff; border-radius:50%; display:flex; align-items:center; justify-content:center; font-weight:700; font-family:'Oswald',sans-serif;">1</span>
                <div><strong>Inspection &amp; Estimate</strong> &mdash; We assess the roof condition, check sheathing from the attic if accessible, measure the roof, and provide a written estimate with material options.</div>
              </li>
              <li style="display: flex; align-items: flex-start; gap: var(--space-md);">
                <span style="flex-shrink:0; width:36px; height:36px; background: var(--primary); color:#fff; border-radius:50%; display:flex; align-items:center; justify-content:center; font-weight:700; font-family:'Oswald',sans-serif;">2</span>
                <div><strong>Tear-Off</strong> &mdash; We strip all existing shingles and underlayment down to bare sheathing. Old material goes into a dumpster on-site.</div>
              </li>
              <li style="display: flex; align-items: flex-start; gap: var(--space-md);">
                <span style="flex-shrink:0; width:36px; height:36px; background: var(--primary); color:#fff; border-radius:50%; display:flex; align-items:center; justify-content:center; font-weight:700; font-family:'Oswald',sans-serif;">3</span>
                <div><strong>Sheathing Repair</strong> &mdash; We inspect every inch of the deck. Rotted or water-damaged plywood gets replaced before anything goes on top. No shortcuts.</div>
              </li>
              <li style="display: flex; align-items: flex-start; gap: var(--space-md);">
                <span style="flex-shrink:0; width:36px; height:36px; background: var(--primary); color:#fff; border-radius:50%; display:flex; align-items:center; justify-content:center; font-weight:700; font-family:'Oswald',sans-serif;">4</span>
                <div><strong>Underlayment &amp; Flashing</strong> &mdash; Ice and water shield at eaves and valleys, APOC Gator-Skin synthetic underlayment across the deck, new drip edge and flashing at every wall junction and pipe penetration.</div>
              </li>
              <li style="display: flex; align-items: flex-start; gap: var(--space-md);">
                <span style="flex-shrink:0; width:36px; height:36px; background: var(--primary); color:#fff; border-radius:50%; display:flex; align-items:center; justify-content:center; font-weight:700; font-family:'Oswald',sans-serif;">5</span>
                <div><strong>Shingle Installation &amp; Cleanup</strong> &mdash; New shingles installed to manufacturer spec, ridge vent for proper ventilation, full debris cleanup, and magnetic sweep of the yard and driveway.</div>
              </li>
            </ol>
          </div>
        </div>
        <div>
          <div class="img-reveal">
            <img src="/assets/images/apoc-gator-skin-underlayment-installed-on-roof-d-960.webp" srcset="/assets/images/apoc-gator-skin-underlayment-installed-on-roof-d-480.webp 480w, /assets/images/apoc-gator-skin-underlayment-installed-on-roof-d-960.webp 960w" sizes="(max-width: 768px) 100vw, 800px" alt="APOC Gator-Skin underlayment installed on roof deck during replacement in Tacoma" width="800" height="600" loading="lazy">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Banner Mid-Page -->
  <section class="cta-banner">
    <div class="container">
      <h2 class="section-title">Need a Roof Inspection or Replacement Quote?</h2>
      <p style="font-size: 1.1rem; opacity: 0.9; margin-bottom: var(--space-lg); max-width: 600px; margin-inline: auto;">Free estimates with detailed line-item pricing. We'll show you exactly what your roof needs &mdash; no pressure, no hidden costs.</p>
      <a href="tel:+12537779683" class="hero-phone" style="color:#fff; justify-content:center; margin-bottom: var(--space-lg);">
        <i data-lucide="phone"></i> (253) 777-9683
      </a>
      <div>
        <a href="/contact" class="btn-primary">Schedule Your Free Estimate</a>
      </div>
    </div>
  </section>

  <!-- Gallery Split -->
  <section style="padding: var(--section-pad); background: var(--bg);">
    <div class="container">
      <h2 class="section-title" style="text-align:center; margin-bottom: var(--space-2xl);" data-animate="fade-up">Roofing Projects Across Pierce County</h2>
      <div class="grid-3" data-animate="fade-up">
        <div class="img-reveal">
          <img src="/assets/images/completed-gray-asphalt-shingle-roof-replacement-480.webp" alt="Completed gray shingle roof with green shed in background, Tacoma roofing project" width="800" height="600" loading="lazy">
        </div>
        <div class="img-reveal">
          <img src="/assets/images/completed-asphalt-shingle-roof-overlooking-subur-480.webp" alt="Completed asphalt shingle roof overlooking suburban Tacoma street" width="800" height="600" loading="lazy">
        </div>
        <div class="img-reveal">
          <img src="/assets/images/completed-dark-gray-roof-with-plumbing-vents-and-480.webp" alt="Dark gray completed roof with plumbing vents and solar tube in Tacoma" width="800" height="600" loading="lazy">
        </div>
      </div>
    </div>
  </section>

  <!-- Split: Storm Damage -->
  <section style="padding: var(--section-pad); background: var(--bg-warm);">
    <div class="container">
      <div class="split" data-animate="fade-up">
        <div>
          <h2 class="section-title">Storm Damage &amp; Insurance Roof Repairs</h2>
          <div class="prose">
            <p style="margin-bottom: var(--space-md);">Tacoma and the greater Puget Sound region see windstorms, heavy rain events, and occasional hail that can damage roofing materials in hours. When a storm hits, waiting to address the damage invites water intrusion, mold, and structural issues that compound fast.</p>
            <p style="margin-bottom: var(--space-md);">Ark provides <a href="/services/emergency-services">emergency tarping and temporary repairs</a> to stop active leaks, followed by permanent restoration once conditions allow. We work directly with your insurance company &mdash; providing detailed photo documentation, damage assessments, and itemized repair estimates that adjusters need to approve claims quickly.</p>
            <p>We've handled hundreds of storm damage claims across Pierce County. Our documentation process is designed to give adjusters exactly what they need, which means fewer delays and faster approvals for homeowners.</p>
          </div>
        </div>
        <div>
          <div class="img-reveal">
            <img src="/assets/images/roofing-crew-removing-damaged-roofing-material-f-960.webp" srcset="/assets/images/roofing-crew-removing-damaged-roofing-material-f-480.webp 480w, /assets/images/roofing-crew-removing-damaged-roofing-material-f-960.webp 960w, /assets/images/roofing-crew-removing-damaged-roofing-material-f-1600.webp 1600w" sizes="(max-width: 768px) 100vw, 800px" alt="Roofing crew removing damaged roofing material from blue house during storm repair in Tacoma" width="800" height="600" loading="lazy">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Tear-off split -->
  <section style="padding: var(--section-pad); background: var(--bg);">
    <div class="container">
      <div class="split-reverse" data-animate="fade-up">
        <div>
          <h2 class="section-title">Full Tear-Off vs. Overlay &mdash; Why We Strip It Down</h2>
          <div class="prose">
            <p style="margin-bottom: var(--space-md);">Some contractors will layer new shingles over old ones to save time and cost. We don't. In the Pacific Northwest, moisture gets trapped between layers, accelerating rot in the sheathing underneath. An overlay hides problems &mdash; a tear-off reveals them.</p>
            <p style="margin-bottom: var(--space-md);">Every roof we replace gets stripped to bare sheathing. We inspect every board for soft spots, water staining, and mold. Damaged sections get cut out and replaced with new plywood or OSB before underlayment goes down. It's more work up front, but it means the roof you're paying for is built on a solid foundation.</p>
            <p>After 33 years of tearing off roofs in Tacoma, we can tell you that the majority of roofs over 20 years old have at least some sheathing damage. Catching it now costs hundreds. Missing it costs thousands later.</p>
          </div>
        </div>
        <div>
          <div class="img-reveal">
            <img src="/assets/images/dumpster-full-of-old-roofing-tear-off-debris-fro-480.webp" alt="Dumpster full of old roofing tear-off debris from Tacoma roof replacement project" width="800" height="600" loading="lazy">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section class="faq-section">
    <div class="container">
      <div style="text-align:center; margin-bottom: var(--space-2xl);" data-animate="fade-up">
        <h2 class="section-title">Roofing Questions From Tacoma Homeowners</h2>
      </div>
      <div class="faq-list" data-animate="fade-up">
        <div class="faq-item">
          <button class="faq-question" aria-expanded="false">
            How long will my new roof last in the Tacoma climate?
            <i data-lucide="chevron-down"></i>
          </button>
          <div class="faq-answer">
            <p>Architectural asphalt shingles typically last 25&ndash;35 years in the Pacific Northwest when properly installed with adequate ventilation. The key factors are quality underlayment, proper flashing, and ridge venting to prevent moisture buildup from Tacoma's wet climate. We install systems designed to handle the specific conditions here &mdash; not desert or Midwest specs.</p>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-question" aria-expanded="false">
            Can you roof during the rainy season?
            <i data-lucide="chevron-down"></i>
          </button>
          <div class="faq-answer">
            <p>Yes, with precautions. We schedule around weather windows and always tarp exposed areas at the end of each work day. Underlayment goes down the same day sheathing is exposed. That said, we won't start a tear-off when sustained heavy rain is forecasted &mdash; that's not a risk worth taking with your home. We monitor weather closely and communicate any schedule adjustments.</p>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-question" aria-expanded="false">
            Do I need to replace the gutters when I get a new roof?
            <i data-lucide="chevron-down"></i>
          </button>
          <div class="faq-answer">
            <p>Not always, but it's often the most cost-effective time to do it. We remove and reset existing gutters during every roof replacement. If they're damaged, sagging, or over 15 years old, replacing them during the roofing project saves the cost of a separate crew and setup. We can include <a href="/services/gutters">gutter replacement</a> in your estimate if needed.</p>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-question" aria-expanded="false">
            What roofing materials do you recommend for homes in Pierce County?
            <i data-lucide="chevron-down"></i>
          </button>
          <div class="faq-answer">
            <p>For most residential properties, we recommend architectural asphalt shingles from manufacturers like CertainTeed, GAF, or Owens Corning. They offer the best balance of durability, wind resistance (130+ mph rating), and value for the Pacific Northwest climate. We install with synthetic underlayment (APOC Gator-Skin), ice and water shield at critical areas, and proper ridge ventilation.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Closing CTA -->
  <section class="closing-cta" data-animate="fade-up">
    <div class="container">
      <h2 class="section-title">Protect Your Home With a Roof Built to Last</h2>
      <p style="font-size: 1.1rem; color: rgba(255,255,255,0.8); max-width: 550px; margin-inline: auto; margin-bottom: var(--space-lg);">33 years. Thousands of roofs. One standard &mdash; get it right the first time. Call for a free estimate on your Tacoma roofing project.</p>
      <a href="tel:+12537779683" class="hero-phone" style="margin-bottom: var(--space-xl);">
        <i data-lucide="phone"></i> (253) 777-9683
      </a>
      <div>
        <a href="/contact" class="btn-primary">Schedule Your Free Estimate</a>
      </div>
    </div>
  </section>

  <div class="container" style="padding: var(--space-lg) 0;">
    <p style="font-size: 0.85rem; color: var(--text-light);">Last Updated: <?php echo date('F Y'); ?></p>
  </div>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
