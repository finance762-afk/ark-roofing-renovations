<?php
$pageTitle       = "Page Not Found | Ark Roofing & Renovations LLC";
$pageDescription = "The page you're looking for doesn't exist. Return to the Ark Roofing & Renovations homepage or browse our services.";
$canonicalUrl    = "https://arkroofingpro.com/404";
$ogImage         = "https://i.imgur.com/q0vb42l.jpeg";
$currentPage     = "";
$heroImage       = "";
$useSwiper       = false;
$useTilt         = false;
$useTyped        = false;
$schemaMarkup    = '';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

<main id="main-content">
  <section style="padding: var(--space-4xl) 0; text-align: center; min-height: 60vh; display: flex; align-items: center;">
    <div class="container">
      <h1 style="font-size: clamp(4rem, 10vw, 8rem); color: var(--primary); margin-bottom: var(--space-md);">404</h1>
      <h2 class="section-title">Page Not Found</h2>
      <p class="prose-centered" style="color: var(--text-light); margin-bottom: var(--space-xl);">The page you're looking for doesn't exist or has been moved. Let's get you back on track.</p>
      <div style="display: flex; flex-wrap: wrap; gap: var(--space-md); justify-content: center; margin-bottom: var(--space-2xl);">
        <a href="/" class="btn-primary">Back to Homepage</a>
        <a href="/services" class="btn-secondary">Browse Services</a>
        <a href="/contact" class="btn-secondary">Contact Us</a>
      </div>
      <a href="tel:+12537779683" class="hero-phone" style="color: var(--primary); justify-content: center;">
        <i data-lucide="phone"></i> (253) 777-9683
      </a>
    </div>
  </section>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
