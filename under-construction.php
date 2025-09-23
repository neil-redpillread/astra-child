<?php
/* Template Name: Under Construction */
get_header();
?>

<div class="under-construction-wrapper">
  <div class="under-construction-box">
    <h1 class="under-construction-title">🚧 This Page is Under Construction</h1>
    <p class="under-construction-message">
      This page is currently under development. Please check back soon!
    </p>
    <a class="under-construction-button" href="<?php echo esc_url( home_url('/portfolio') ); ?>">
      ← Back to Portfolio
    </a>
  </div>
  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/stock-images/under-construction-page.webp" alt="under-construction-page">
</div>

<?php get_footer(); ?>
