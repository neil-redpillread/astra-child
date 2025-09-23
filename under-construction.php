<?php
/* Template Name: Under Construction */
get_header();
$bg_url = get_stylesheet_directory_uri() . '/assets/images/stock-images/under-construction-page.webp';
?>

<div class="under-construction-wrapper" style="background-image: url('<?php echo esc_url($bg_url); ?>');">
  <div class="under-construction-box">
    <h1 class="under-construction-title">🚧 This Page is Under Construction</h1>
    <p class="under-construction-message">
      This page is currently under development. Please check back soon!
    </p>
    <a class="under-construction-button" href="<?php echo esc_url( home_url('/portfolio') ); ?>">
    Back to Portfolio
    </a>
  </div>
</div>

<?php get_footer(); ?>
