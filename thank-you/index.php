<?php
$pageTitle       = "Thank You | Ark Roofing & Renovations LLC";
$pageDescription = "";
$canonicalUrl    = "";
$ogImage         = "";
$currentPage     = "";
$heroImage       = "";
$useSwiper       = false;
$useTilt         = false;
$useTyped        = false;
$schemaMarkup    = '';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<meta name="robots" content="noindex, nofollow">
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php'; ?>

<main id="main-content">
  <section style="padding: var(--space-4xl) 0; text-align: center; min-height: 60vh; display: flex; align-items: center;">
    <div class="container">
      <div style="width: 64px; height: 64px; background: rgba(22, 163, 74, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto var(--space-xl);">
        <i data-lucide="check-circle" style="width: 36px; height: 36px; color: #16a34a;"></i>
      </div>
      <h1 class="section-title">Thank You &mdash; We'll Be in Touch Soon</h1>
      <p class="prose-centered" style="color: var(--text-light); margin-bottom: var(--space-md);">Your request has been submitted. Ark Roofing &amp; Renovations typically responds within one business day with a call or email to discuss your project.</p>
      <p class="prose-centered" style="margin-bottom: var(--space-xl);">For urgent or emergency needs, call us directly:</p>
      <a href="tel:+12537779683" class="hero-phone" style="color: var(--primary); justify-content: center; margin-bottom: var(--space-2xl);">
        <i data-lucide="phone"></i> (253) 777-9683
      </a>
      <div style="display: flex; flex-wrap: wrap; gap: var(--space-md); justify-content: center;">
        <a href="/" class="btn-primary">Back to Homepage</a>
        <a href="/services" class="btn-secondary">Browse Our Services</a>
      </div>
    </div>
  </section>
</main>

<!-- GA4 Conversion Event -->
<script>
  if (typeof gtag !== 'undefined') {
    gtag('event', 'form_submission', {
      event_category: 'conversion',
      event_label: 'contact_form_complete'
    });
  }
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
