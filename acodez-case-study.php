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
    <div class="stat-box">
    <div><strong>88%</strong> Traffic Growth</div>
    </div>
    <div class="stat-box">
    <div><strong>15,159</strong> New Organic Keywords</div>
    </div>
    <div class="stat-box">
    <div><strong>1641</strong> 1st Page Rankings</div>
    </div>
  </section>

  <section class="content">
    <?php the_content(); ?>
  </section>

</main>

<?php get_footer(); ?>
