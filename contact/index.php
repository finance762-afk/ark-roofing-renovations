<?php
$pageTitle       = "Contact Ark Roofing & Renovations — Free Estimates in Tacoma, WA";
$pageDescription = "Request a free roofing or renovation estimate from Ark Roofing & Renovations in Tacoma, WA. Call (253) 777-9683 or fill out our contact form. Licensed & insured. 33+ years experience.";
$canonicalUrl    = "https://arkroofingpro.com/contact";
$ogImage         = "https://i.imgur.com/q0vb42l.jpeg";
$currentPage     = "contact";
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
        {"@type": "ListItem", "position": 2, "name": "Contact", "item": "https://arkroofingpro.com/contact"}
      ]
    }
  ]
}';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

<main id="main-content">

  <div class="container">
    <nav class="breadcrumbs" aria-label="Breadcrumb">
      <a href="/">Home</a> <span>/</span> <strong>Contact</strong>
    </nav>
  </div>

  <!-- Header -->
  <section style="padding: var(--space-3xl) 0 var(--space-xl); background: var(--bg);">
    <div class="container">
      <h1 class="section-title">Contact Ark Roofing &amp; Renovations &mdash; Free Estimates in Tacoma, WA</h1>
      <p class="prose" style="font-size: 1.1rem; color: var(--text-light);">Ark Roofing &amp; Renovations is a licensed and insured roofing and renovation contractor based in Tacoma, WA. Fill out the form below or call us directly. We typically respond within one business day. For emergencies, call <a href="tel:+12537779683" style="color: var(--primary); font-weight: 700;">(253) 777-9683</a> immediately.</p>
    </div>
  </section>

  <!-- Form + Contact Info -->
  <section style="padding: 0 0 var(--section-pad); background: var(--bg);">
    <div class="container">
      <div class="split" style="align-items: flex-start;">

        <!-- Form -->
        <div>
          <form action="https://db.pageone.cloud/functions/v1/leads/ark-roofing-renovations" method="POST" style="background: var(--bg-alt); padding: var(--space-xl); border-radius: var(--radius); box-shadow: var(--elevation-2);">
            <!-- Hidden Fields -->
            <input type="hidden" name="_next" value="https://arkroofingpro.com/thank-you">
            <input type="hidden" name="_captcha" value="false">
            <input type="text" name="_honey" style="display:none">
            <input type="hidden" name="_template" value="table">
            <input type="hidden" name="_subject" value="New Lead from Ark Roofing & Renovations Website">
            <input type="hidden" name="_cc" value="CustomerService@pageoneinsights.com">

            <div class="form-group">
              <input type="text" name="name" id="name" placeholder=" " required>
              <label for="name">Full Name *</label>
            </div>

            <div class="form-group">
              <input type="tel" name="phone" id="phone" placeholder=" " required>
              <label for="phone">Phone Number *</label>
            </div>

            <div class="form-group">
              <input type="email" name="email" id="email" placeholder=" " required>
              <label for="email">Email Address *</label>
            </div>

            <div class="form-group">
              <input type="text" name="address" id="address" placeholder=" ">
              <label for="address">Address / Project Location</label>
            </div>

            <div class="form-group">
              <select name="service" id="service" required>
                <option value="" disabled selected></option>
                <option value="Roofing">Roofing</option>
                <option value="Siding">Siding</option>
                <option value="Decking">Decking</option>
                <option value="Soffit & Fascia">Soffit &amp; Fascia</option>
                <option value="Fences">Fences</option>
                <option value="Gutters">Gutters</option>
                <option value="Roof Cleaning">Roof Cleaning</option>
                <option value="Emergency Services">Emergency Services</option>
                <option value="Flooring">Flooring</option>
                <option value="Bathrooms">Bathrooms</option>
                <option value="Drywall">Drywall</option>
                <option value="Painting">Painting</option>
                <option value="Other">Other</option>
              </select>
              <label for="service">Service Needed *</label>
            </div>

            <div class="form-group">
              <textarea name="message" id="message" rows="5" placeholder=" "></textarea>
              <label for="message">Project Description</label>
            </div>

            <!-- spam shield: signed render timestamp + JS interaction signal -->
            <?php $__ft_ts = (string) time(); ?>
            <input type="hidden" name="_ft" value="<?php echo $__ft_ts . '.' . hash_hmac('sha256', $__ft_ts, 'bac7714a8f41505ab12d75311ccbb11a6374e38b1a010d69111c84a652cfa0f3'); ?>">
            <input type="hidden" name="_js" value="" class="js-shield-field">
            <?php if (empty($GLOBALS['__js_shield'])) { $GLOBALS['__js_shield'] = 1; ?>
            <script>(function(){var d=document,f=function(){var i,e=d.querySelectorAll('.js-shield-field');for(i=0;i<e.length;i++)e[i].value='1';d.removeEventListener('pointerdown',f);d.removeEventListener('keydown',f);};d.addEventListener('pointerdown',f);d.addEventListener('keydown',f);})();</script>
            <?php } ?>
            <button type="submit" class="btn-primary" style="width: 100%; text-align: center; font-size: 1.05rem;">Request Your Free Estimate</button>
          </form>
        </div>

        <!-- Contact Info Sidebar -->
        <div>
          <div style="background: var(--bg-warm); padding: var(--space-xl); border-radius: var(--radius); margin-bottom: var(--space-xl);">
            <h2 style="font-size: 1.3rem; margin-bottom: var(--space-lg);">Get In Touch</h2>

            <div style="display: flex; flex-direction: column; gap: var(--space-lg);">
              <div style="display: flex; align-items: flex-start; gap: var(--space-md);">
                <i data-lucide="phone" style="flex-shrink:0; width:22px; height:22px; color: var(--primary); margin-top:2px;"></i>
                <div>
                  <strong>Phone</strong><br>
                  <a href="tel:+12537779683" style="color: var(--primary); font-weight: 600; font-size: 1.1rem;">(253) 777-9683</a>
                </div>
              </div>

              <div style="display: flex; align-items: flex-start; gap: var(--space-md);">
                <i data-lucide="mail" style="flex-shrink:0; width:22px; height:22px; color: var(--primary); margin-top:2px;"></i>
                <div>
                  <strong>Email</strong><br>
                  <a href="mailto:letourneauwil@gmail.com" style="color: var(--primary);">letourneauwil@gmail.com</a>
                </div>
              </div>

              <div style="display: flex; align-items: flex-start; gap: var(--space-md);">
                <i data-lucide="map-pin" style="flex-shrink:0; width:22px; height:22px; color: var(--primary); margin-top:2px;"></i>
                <div>
                  <strong>Address</strong><br>
                  18214 25th Ave E<br>
                  Tacoma, WA 98445
                </div>
              </div>

              <div style="display: flex; align-items: flex-start; gap: var(--space-md);">
                <i data-lucide="clock" style="flex-shrink:0; width:22px; height:22px; color: var(--primary); margin-top:2px;"></i>
                <div>
                  <strong>Hours</strong><br>
                  Monday&ndash;Saturday: 8:00 AM &ndash; 5:30 PM<br>
                  Sunday: Closed
                </div>
              </div>
            </div>

            <div style="margin-top: var(--space-xl); display: flex; gap: var(--space-md);">
              <a href="https://share.google/KUCKCPllAaTlwyunI" target="_blank" rel="noopener" aria-label="Google Business Profile" style="width:40px; height:40px; border-radius:50%; background: rgba(var(--primary-rgb),0.1); display:flex; align-items:center; justify-content:center;"><i data-lucide="map-pin" style="width:18px; height:18px; color: var(--primary);"></i></a>
              <a href="https://www.yelp.com/biz/ark-roofing-and-renovations-frederickson" target="_blank" rel="noopener" aria-label="Yelp" style="width:40px; height:40px; border-radius:50%; background: rgba(var(--primary-rgb),0.1); display:flex; align-items:center; justify-content:center;"><i data-lucide="star" style="width:18px; height:18px; color: var(--primary);"></i></a>
              <a href="https://www.facebook.com/arkroofingpros/" target="_blank" rel="noopener" aria-label="Facebook" style="width:40px; height:40px; border-radius:50%; background: rgba(var(--primary-rgb),0.1); display:flex; align-items:center; justify-content:center;"><i data-lucide="facebook" style="width:18px; height:18px; color: var(--primary);"></i></a>
            </div>
          </div>

          <!-- Service Area Note -->
          <div style="background: var(--bg-alt); padding: var(--space-lg); border-radius: var(--radius); border-left: 4px solid var(--accent);">
            <p style="font-size: 0.95rem; line-height: 1.6;"><strong>Service Area:</strong> We serve residential and commercial clients within a 50-mile radius of Tacoma, including Pierce County, South King County, Thurston County, and Kitsap County. <a href="/service-area" style="color: var(--primary); font-weight: 500;">View full service area &rarr;</a></p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Map -->
  <section style="padding: 0 0 var(--section-pad); background: var(--bg);">
    <div class="container">
      <div style="border-radius: var(--radius); overflow: hidden; box-shadow: var(--elevation-2);">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d86432.45!2d-122.52!3d47.25!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5490fdd91a0a0001%3A0x65f5ee45b4b9af1!2sTacoma%2C%20WA%2098445!5e0!3m2!1sen!2sus!4v1700000000000" width="100%" height="400" style="border:0; display:block;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Ark Roofing & Renovations service area map centered on Tacoma, WA 98445"></iframe>
      </div>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
