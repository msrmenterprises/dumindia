<?php include __DIR__ . '/partials/header.php'; ?>

  <!-- Hero -->
  <section class="hero text-center bg-primary text-white">
    <div class="container py-5">
      <div class="row align-items-center">
        <div class="col-md-7 text-start">
          <h2 class="display-5 fw-bold">Distribution Utility Meet — Beta</h2>
          <p class="lead">A refreshed look and feel preview. This is a sandboxed template under <code>beta/</code>. No live files were modified.</p>
          <p class="mt-4">
            <a href="#confirmed-utilities" class="btn btn-light btn-lg me-2">Confirmed Utilities</a>
            <a href="#speakers" class="btn btn-outline-light btn-lg">Speakers</a>
          </p>
        </div>
        <div class="col-md-5 text-center d-none d-md-block">
          <img src="../images/2026/WebHeaderv6.jpg" alt="DUM hero" class="img-fluid rounded shadow-sm">
        </div>
      </div>
    </div>
  </section>

  <!-- Quick intro / values -->
  <section class="py-5 bg-white">
    <div class="container">
      <div class="row g-4">
        <div class="col-md-4">
          <div class="p-4 border rounded text-center">
            <h5>Networked Utilities</h5>
            <p class="small text-muted">Connect with distribution utilities, exchange best practices, and learn from case studies.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="p-4 border rounded text-center">
            <h5>Technology & Innovation</h5>
            <p class="small text-muted">Spotlight on smart grid deployments, metering, DER integration and digitalization.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="p-4 border rounded text-center">
            <h5>Policy & Regulation</h5>
            <p class="small text-muted">Policy panels and regulatory insights to help utilities plan for the future.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Confirmed utilities partial -->
  <section id="confirmed-utilities" class="py-5 bg-light">
    <?php include __DIR__ . '/partials/sections/confirmed_utilities.php'; ?>
  </section>

  <!-- Speakers preview -->
  <section id="speakers" class="py-5 bg-white">
    <?php include __DIR__ . '/partials/sections/speakers.php'; ?>
  </section>

  <!-- Schedule preview -->
  <section id="schedule" class="py-5 bg-light">
    <?php include __DIR__ . '/partials/sections/schedule.php'; ?>
  </section>

  <!-- About / Contact -->
  <section id="about" class="py-5 bg-white">
    <?php include __DIR__ . '/partials/sections/about.php'; ?>
  </section>

  <!-- Contact form (static preview) -->
  <section id="contact" class="py-5 bg-light">
    <?php include __DIR__ . '/partials/sections/contact.php'; ?>
  </section>

  <?php include __DIR__ . '/partials/footer.php'; ?>
