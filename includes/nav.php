<!-- Skip to Content -->
<a href="#main-content" class="skip-link">Skip to main content</a>

<!-- Navbar -->
<nav class="navbar" aria-label="Main navigation">
  <div class="container">
    <a href="/" class="navbar-logo"><img src="https://i.imgur.com/40hC7pw.jpeg" alt="Ark Roofing & Renovations LLC" width="160" height="50"></a>

    <ul class="nav-links">
      <li><a href="/" <?php if ($currentPage === 'home') echo 'aria-current="page"'; ?>>Home</a></li>
      <li class="has-dropdown">
        <a href="/services" <?php if ($currentPage === 'services') echo 'aria-current="page"'; ?>>Services</a>
        <ul class="dropdown" role="menu" style="display:none">
          <li><a href="/services/roofing" role="menuitem">Roofing</a></li>
          <li><a href="/services/siding" role="menuitem">Siding</a></li>
          <li><a href="/services/decking" role="menuitem">Decking</a></li>
          <li><a href="/services/soffit-and-fascia" role="menuitem">Soffit &amp; Fascia</a></li>
          <li><a href="/services/fences" role="menuitem">Fences</a></li>
          <li><a href="/services/gutters" role="menuitem">Gutters</a></li>
          <li><a href="/services/roof-cleaning" role="menuitem">Roof Cleaning</a></li>
          <li><a href="/services/emergency-services" role="menuitem">Emergency Services</a></li>
          <li><a href="/services/flooring" role="menuitem">Flooring</a></li>
          <li><a href="/services/bathrooms" role="menuitem">Bathrooms</a></li>
          <li><a href="/services/drywall" role="menuitem">Drywall</a></li>
          <li><a href="/services/painting" role="menuitem">Painting</a></li>
        </ul>
      </li>
      <li><a href="/service-area" <?php if ($currentPage === 'service-area') echo 'aria-current="page"'; ?>>Service Area</a></li>
      <li><a href="/about" <?php if ($currentPage === 'about') echo 'aria-current="page"'; ?>>About</a></li>
      <li><a href="/contact" <?php if ($currentPage === 'contact') echo 'aria-current="page"'; ?>>Contact</a></li>
    </ul>

    <a href="tel:+12537779683" class="nav-phone nav-phone-desktop">
      <i data-lucide="phone"></i> (253) 777-9683
    </a>

    <button class="hamburger" aria-label="Toggle menu" aria-expanded="false">
      <span></span>
      <span></span>
      <span></span>
    </button>
  </div>
</nav>

<!-- Mobile Menu -->
<div class="mobile-menu">
  <a href="/" <?php if ($currentPage === 'home') echo 'aria-current="page"'; ?>>Home</a>
  <a href="/services" <?php if ($currentPage === 'services') echo 'aria-current="page"'; ?>>Services</a>
  <div class="mobile-dropdown">
    <a href="/services/roofing">Roofing</a>
    <a href="/services/siding">Siding</a>
    <a href="/services/decking">Decking</a>
    <a href="/services/soffit-and-fascia">Soffit &amp; Fascia</a>
    <a href="/services/fences">Fences</a>
    <a href="/services/gutters">Gutters</a>
    <a href="/services/roof-cleaning">Roof Cleaning</a>
    <a href="/services/emergency-services">Emergency Services</a>
    <a href="/services/flooring">Flooring</a>
    <a href="/services/bathrooms">Bathrooms</a>
    <a href="/services/drywall">Drywall</a>
    <a href="/services/painting">Painting</a>
  </div>
  <a href="/service-area" <?php if ($currentPage === 'service-area') echo 'aria-current="page"'; ?>>Service Area</a>
  <a href="/about" <?php if ($currentPage === 'about') echo 'aria-current="page"'; ?>>About</a>
  <a href="/contact" <?php if ($currentPage === 'contact') echo 'aria-current="page"'; ?>>Contact</a>
  <a href="tel:+12537779683" class="nav-phone"><i data-lucide="phone"></i> (253) 777-9683</a>
</div>
