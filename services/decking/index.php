<?php
$pageTitle       = "Deck Building & Repair in Tacoma, WA | Ark Roofing & Renovations";
$pageDescription = "Custom deck builds, rebuilds, and repairs in Tacoma and Pierce County. From footings to finished railings. Pressure-treated lumber. 33+ years experience. Free estimates.";
$canonicalUrl    = "https://arkroofingpro.com/services/decking";
$ogImage         = "/assets/images/new-deck-frame-under-construction-with-pressure-1600.webp";
$currentPage     = "services";
$heroImage       = "/assets/images/new-deck-frame-under-construction-with-pressure-1600.webp";
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
        {"@type": "ListItem", "position": 3, "name": "Decking", "item": "https://arkroofingpro.com/services/decking"}
      ]
    },
    {
      "@type": "Service",
      "serviceType": "Deck Building and Repair",
      "provider": {"@type": "LocalBusiness", "name": "Ark Roofing & Renovations LLC", "telephone": "+12537779683"},
      "areaServed": {"@type": "City", "name": "Tacoma", "addressRegion": "WA"},
      "description": "Custom deck construction, demolition, rebuilds, and repairs for residential properties in Tacoma, WA and Pierce County."
    },
    {
      "@type": "LocalBusiness",
      "name": "Ark Roofing & Renovations LLC"
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {"@type": "Question", "name": "Pressure-treated or composite -- which is better for Tacoma?", "acceptedAnswer": {"@type": "Answer", "text": "Both work well. Pressure-treated costs less but needs re-staining every 2-3 years. Composite costs more but requires almost zero maintenance."}},
        {"@type": "Question", "name": "How long does it take to build a new deck?", "acceptedAnswer": {"@type": "Answer", "text": "Most deck builds take 5-10 working days. Elevated or complex decks may take 2-3 weeks."}},
        {"@type": "Question", "name": "Can you build a deck on a slope?", "acceptedAnswer": {"@type": "Answer", "text": "Yes. Many Tacoma properties have sloped yards. We set posts to varying heights with stepped footings and proper bracing."}}
      ]
    },
    {
      "@type": "HowTo",
      "name": "How Ark Roofing & Renovations Builds a Deck",
      "step": [
        {"@type": "HowToStep", "position": 1, "name": "Demo & Site Prep", "text": "Tear down old deck, remove debris, level ground for footings."},
        {"@type": "HowToStep", "position": 2, "name": "Footings & Posts", "text": "Set concrete pier blocks, install posts plumb and to grade."},
        {"@type": "HowToStep", "position": 3, "name": "Framing", "text": "Install beams, joists, blocking, and ledger board with proper hardware."},
        {"@type": "HowToStep", "position": 4, "name": "Decking & Railings", "text": "Install deck boards, stairs, railings, and post caps."}
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

  <div class="container">
    <nav class="breadcrumbs" aria-label="Breadcrumb">
      <a href="/">Home</a> <span>/</span> <a href="/services">Services</a> <span>/</span> <strong>Decking</strong>
    </nav>
  </div>

  <section class="hero" style="background-image: url('/assets/images/new-deck-frame-under-construction-with-pressure-1600.webp'); min-height: 60vh;">
    <div class="container">
      <h1>Deck Building &amp; Repair in Tacoma, WA</h1>
      <p>Custom deck builds from footings to railings &mdash; demolition, framing, and finishing by a crew that's been building in Pierce County for 33 years.</p>
      <div class="hero-cta">
        <a href="/contact" class="btn-primary">Get a Free Deck Estimate</a>
        <a href="tel:+12537779683" class="hero-phone"><i data-lucide="phone"></i> (253) 777-9683</a>
      </div>
    </div>
  </section>

  <!-- Answer-First -->
  <section style="padding: var(--section-pad); background: var(--bg);">
    <div class="container">
      <div class="prose-centered">
        <p style="font-size: 1.1rem; line-height: 1.7; margin-bottom: var(--space-lg);">A new deck in Tacoma typically costs between $5,000 and $20,000 depending on size, materials, height, and site conditions. A standard 12x16 pressure-treated deck runs $6,000&ndash;$10,000 including footings, framing, decking, and basic railings. Most builds take 5&ndash;10 days from demolition of the old deck to final inspection.</p>
        <p style="font-size: 1.1rem; line-height: 1.7;">Ark Roofing &amp; Renovations has provided deck building and repair services in Tacoma and Pierce County for over 33 years. We build decks from the ground up &mdash; concrete pier footings, pressure-treated framing, and your choice of decking material. If your old deck is rotted, sagging, or unsafe, we demolish it down to bare ground and start fresh.</p>
      </div>
    </div>
  </section>

  <!-- Split: Demolition & Rebuild -->
  <section style="padding: var(--section-pad); background: var(--bg-warm);">
    <div class="container">
      <div class="split" data-animate="fade-up">
        <div>
          <h2 class="section-title">When Should You Replace a Deck Instead of Repairing It?</h2>
          <div class="prose">
            <p style="margin-bottom: var(--space-md);">Pacific Northwest decks take a beating. Constant rain, limited sun exposure, and ground-level moisture rot out untreated lumber in 10&ndash;15 years. If your deck has soft spots, bouncy boards, leaning posts, or visible rot on the joists and ledger board, patching isn't the answer &mdash; the structure underneath is compromised.</p>
            <p style="margin-bottom: var(--space-md);">We assess every deck repair request honestly. If the framing and footings are solid, we'll resurface it. If the rot has reached the structural members, we recommend a full tear-down and rebuild. A deck that collapses isn't just an inconvenience &mdash; it's a safety hazard.</p>
            <p>Our rebuilds start with concrete pier blocks set to grade, pressure-treated posts and beams, proper joist spacing, and hardware connections that meet current code. We build it right so it stands up to Tacoma weather for decades.</p>
          </div>
        </div>
        <div>
          <div class="img-reveal">
            <img src="/assets/images/old-rotted-deck-being-demolished-for-replacement-960.webp" srcset="/assets/images/old-rotted-deck-being-demolished-for-replacement-480.webp 480w, /assets/images/old-rotted-deck-being-demolished-for-replacement-960.webp 960w, /assets/images/old-rotted-deck-being-demolished-for-replacement-1600.webp 1600w" sizes="(max-width: 768px) 100vw, 800px" alt="Old rotted deck being demolished for replacement in Tacoma, WA" width="800" height="600" loading="lazy">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Answer Blocks -->
  <section style="padding: var(--section-pad); background: var(--bg);">
    <div class="container">
      <div class="answer-block" data-animate="fade-up" itemscope itemtype="https://schema.org/Question">
        <h2 itemprop="name">How much does it cost to build a new deck in Tacoma?</h2>
        <div itemprop="acceptedAnswer" itemscope itemtype="https://schema.org/Answer">
          <p class="prose" itemprop="text">Standard pressure-treated decks run $25&ndash;$45 per square foot installed, including footings, framing, decking, and railings. A 200 sq ft deck typically costs $6,000&ndash;$10,000. Composite decking adds $10&ndash;$20 per square foot. Second-story decks, complex shapes, and built-in benches or stairs add to the total. We provide detailed estimates with all costs itemized.</p>
        </div>
      </div>
      <div class="answer-block" data-animate="fade-up" itemscope itemtype="https://schema.org/Question">
        <h3 itemprop="name">Do I need a permit to build a deck in Pierce County?</h3>
        <div itemprop="acceptedAnswer" itemscope itemtype="https://schema.org/Answer">
          <p class="prose" itemprop="text">Most decks over 200 square feet or more than 30 inches above grade require a building permit in Pierce County. Decks attached to the house always require a permit to ensure the ledger board connection meets code. We handle permit applications as part of the project and build to pass inspection the first time.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Split Reverse: Framing -->
  <section style="padding: var(--section-pad); background: var(--bg-warm);">
    <div class="container">
      <div class="split-reverse" data-animate="fade-up">
        <div>
          <span class="eyebrow-label">Our Process</span>
          <h2 class="section-title">How We Build a Deck</h2>
          <div class="prose">
            <ol style="list-style: none; display: flex; flex-direction: column; gap: var(--space-lg);">
              <li style="display: flex; align-items: flex-start; gap: var(--space-md);">
                <span style="flex-shrink:0; width:36px; height:36px; background: var(--primary); color:#fff; border-radius:50%; display:flex; align-items:center; justify-content:center; font-weight:700; font-family:'Oswald',sans-serif;">1</span>
                <div><strong>Demo &amp; Site Prep</strong> &mdash; Tear down the old deck, remove debris, and level the ground for new footings.</div>
              </li>
              <li style="display: flex; align-items: flex-start; gap: var(--space-md);">
                <span style="flex-shrink:0; width:36px; height:36px; background: var(--primary); color:#fff; border-radius:50%; display:flex; align-items:center; justify-content:center; font-weight:700; font-family:'Oswald',sans-serif;">2</span>
                <div><strong>Footings &amp; Posts</strong> &mdash; Set concrete pier blocks, install posts plumb and to grade, and pour footings where required by code.</div>
              </li>
              <li style="display: flex; align-items: flex-start; gap: var(--space-md);">
                <span style="flex-shrink:0; width:36px; height:36px; background: var(--primary); color:#fff; border-radius:50%; display:flex; align-items:center; justify-content:center; font-weight:700; font-family:'Oswald',sans-serif;">3</span>
                <div><strong>Framing</strong> &mdash; Beams, joists, blocking, and ledger board connection with proper flashing and hardware.</div>
              </li>
              <li style="display: flex; align-items: flex-start; gap: var(--space-md);">
                <span style="flex-shrink:0; width:36px; height:36px; background: var(--primary); color:#fff; border-radius:50%; display:flex; align-items:center; justify-content:center; font-weight:700; font-family:'Oswald',sans-serif;">4</span>
                <div><strong>Decking &amp; Railings</strong> &mdash; Install deck boards, stairs, railings, and post caps. Final inspection and cleanup.</div>
              </li>
            </ol>
          </div>
        </div>
        <div>
          <div class="img-reveal">
            <img src="/assets/images/deck-framing-in-progress-with-stained-lumber-pie-960.webp" srcset="/assets/images/deck-framing-in-progress-with-stained-lumber-pie-480.webp 480w, /assets/images/deck-framing-in-progress-with-stained-lumber-pie-960.webp 960w, /assets/images/deck-framing-in-progress-with-stained-lumber-pie-1600.webp 1600w" sizes="(max-width: 768px) 100vw, 800px" alt="Deck framing in progress with stained pressure-treated lumber in Tacoma" width="800" height="600" loading="lazy">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="cta-banner">
    <div class="container">
      <h2 class="section-title">Ready for a New Deck?</h2>
      <p style="font-size: 1.1rem; opacity: 0.9; margin-bottom: var(--space-lg); max-width: 600px; margin-inline: auto;">Free estimates for deck builds, rebuilds, and repairs. We'll measure your space and give you options that fit your budget.</p>
      <a href="tel:+12537779683" class="hero-phone" style="color:#fff; justify-content:center; margin-bottom: var(--space-lg);"><i data-lucide="phone"></i> (253) 777-9683</a>
      <div><a href="/contact" class="btn-primary">Get Your Free Estimate</a></div>
    </div>
  </section>

  <!-- Gallery -->
  <section style="padding: var(--section-pad); background: var(--bg);">
    <div class="container">
      <h2 class="section-title" style="text-align:center; margin-bottom: var(--space-2xl);" data-animate="fade-up">Deck Projects in Pierce County</h2>
      <div class="grid-3" data-animate="fade-up">
        <div class="img-reveal"><img src="/assets/images/concrete-pier-blocks-set-for-new-deck-foundation-960.webp" srcset="/assets/images/concrete-pier-blocks-set-for-new-deck-foundation-480.webp 480w, /assets/images/concrete-pier-blocks-set-for-new-deck-foundation-960.webp 960w" sizes="(max-width: 768px) 100vw, 800px" alt="Concrete pier blocks set for new deck foundation in Tacoma" width="800" height="600" loading="lazy"></div>
        <div class="img-reveal"><img src="/assets/images/deck-frame-viewed-from-back-of-house-during-cons-960.webp" srcset="/assets/images/deck-frame-viewed-from-back-of-house-during-cons-480.webp 480w, /assets/images/deck-frame-viewed-from-back-of-house-during-cons-960.webp 960w" sizes="(max-width: 768px) 100vw, 800px" alt="Deck frame viewed from back of house during construction" width="800" height="600" loading="lazy"></div>
        <div class="img-reveal"><img src="/assets/images/deck-footings-being-set-during-new-deck-build-in-960.webp" srcset="/assets/images/deck-footings-being-set-during-new-deck-build-in-480.webp 480w, /assets/images/deck-footings-being-set-during-new-deck-build-in-960.webp 960w" sizes="(max-width: 768px) 100vw, 800px" alt="Deck footings being set during new deck build in Pierce County" width="800" height="600" loading="lazy"></div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="faq-section">
    <div class="container">
      <div style="text-align:center; margin-bottom: var(--space-2xl);" data-animate="fade-up">
        <h2 class="section-title">Deck Building Questions</h2>
      </div>
      <div class="faq-list" data-animate="fade-up">
        <div class="faq-item">
          <button class="faq-question" aria-expanded="false">Pressure-treated or composite &mdash; which is better for Tacoma?<i data-lucide="chevron-down"></i></button>
          <div class="faq-answer"><p>Both work well in the Pacific Northwest. Pressure-treated lumber costs less upfront and can be stained any color, but needs re-staining every 2&ndash;3 years. Composite costs more but requires almost zero maintenance and won't rot, split, or splinter. We build with both and can help you decide based on your budget and maintenance preference.</p></div>
        </div>
        <div class="faq-item">
          <button class="faq-question" aria-expanded="false">How long does it take to build a new deck?<i data-lucide="chevron-down"></i></button>
          <div class="faq-answer"><p>Most deck builds take 5&ndash;10 working days from demo to completion. A simple ground-level deck can be done in a week. Elevated decks, complex shapes, or projects requiring permits and inspections may take 2&ndash;3 weeks. We schedule around rain when possible, though framing can proceed in light rain.</p></div>
        </div>
        <div class="faq-item">
          <button class="faq-question" aria-expanded="false">Can you build a deck on a slope?<i data-lucide="chevron-down"></i></button>
          <div class="faq-answer"><p>Yes. Many Tacoma properties have sloped yards, and elevated decks are one of the best ways to add usable outdoor space. We set posts to varying heights, use stepped footings, and ensure proper bracing. Sloped-site decks often require engineering or a permit, which we handle as part of the project.</p></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Closing CTA -->
  <section class="closing-cta" data-animate="fade-up">
    <div class="container">
      <h2 class="section-title">Build Outdoor Space That Lasts</h2>
      <p style="font-size: 1.1rem; color: rgba(255,255,255,0.8); max-width: 550px; margin-inline: auto; margin-bottom: var(--space-lg);">From rotted tear-downs to brand-new builds &mdash; Ark handles deck projects of every size. Get a free estimate today.</p>
      <a href="tel:+12537779683" class="hero-phone" style="margin-bottom: var(--space-xl);"><i data-lucide="phone"></i> (253) 777-9683</a>
      <div><a href="/contact" class="btn-primary">Schedule Your Free Estimate</a></div>
    </div>
  </section>

  <div class="container" style="padding: var(--space-lg) 0;">
    <p style="font-size: 0.85rem; color: var(--text-light);">Last Updated: <?php echo date('F Y'); ?></p>
  </div>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
