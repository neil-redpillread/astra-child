<?php
/*
Template Name: Portfolio Page
*/
get_header();
?>
<section class="portfolio-hero-section">
    <div class="portfolio-hero-content">
      <h1>Your Personal SEO Specialist</h1>
      <div class="video-wrapper">
        <iframe src="https://www.youtube.com/embed/O7il3R-scF4" title="YouTube video" allowfullscreen></iframe>
      </div>
      <div class="text-content">
        <p>
        Hi, I’m Neil Jose, a freelance SEO service provider and a graduate of <a href="https://www.tcd.ie" target="_blank" rel="nofollow noopener noreferrer">Trinity College Dublin</a>  with a master’s in Digital Marketing. Since 2019, I’ve gained hands-on expertise across all areas of digital marketing, specializing in SEO. As your SEO specialist, my services gives your small business the best chance to rank on Google’s first page. Click the video to learn more about me.
        </p>
        <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="cta-button">Explore Services</a>
      </div>
    </div>
  </section>
<?php get_footer(); ?>