<?php
/*
Template Name: Acodez Case Study
*/
get_header(); ?>

<main class="acodez-case-study">

  <section class="hero">
    <h1>Acodez IT Solutions: Increased Organic Traffic by 88% in 2.5 Years</h1>
    <p>From November 2019 to February 2022, I served as the Digital PR and Outreach Team Lead at Acodez, a web development and digital marketing agency founded in 2011 and based in India.</p>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/case-studies/acodez-hero-image-01.webp" alt="Acodez-hero-section" />
  </section>

  <section class="stats">
    <div><strong>35%</strong> Increase in Conversions</div>
    <div><strong>4x</strong> More Organic Traffic</div>
    <div><strong>120+</strong> Top 10 Keyword Rankings</div>
  </section>

  <section class="content">
    <?php the_content(); ?>
  </section>

</main>

<?php get_footer(); ?>
