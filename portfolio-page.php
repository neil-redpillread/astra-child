<?php
/*
Template Name: Portfolio Page
*/
get_header(); ?>
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
  <section class="portfolio-clients-carousel" aria-labelledby="carousel-title">
  <h2 id="carousel-title" class="portfolio-carousel-title">
    <?php echo esc_html__( 'Satisfied Clients. Proven Results.', 'astra-child' ); ?>
  </h2>
  <section class="portfolio-clients-carousel">
  <div class="swiper portfolio-carousel">
    <div class="swiper-wrapper">
      <!-- slide 1 -->
      <div class="swiper-slide case-study-card">
        <h3>Digitial Strategy Consultants</h3>
        <p> A digital marketing agency in Dublin</p>
        <h4>Objective</h4>
        <p> Increase online visibility and organic ranking </p>
        <div class="strategy-row">
  <h4 class="strategy-heading">Strategy:</h4>
  <ul class="strategy-tags">
    <li><a href="/services/digital-pr/">Digital PR</a></li>
    <li><a href="/services/keyword-research/">Keyword research</a></li>
    <li><a href="/services/link-building/">Link-building</a></li>
  </ul>
</div>
        <h3> Result: 600% increase in page view </h3>
        <a href="#">View Case Study →</a>
      </div>
      <!-- slide 2 -->
      <div class="swiper-slide case-study-card">
        <h3>AI Strategy Consultants</h3>
        <p>Boost organic traffic by 150%.</p>
        <h4>Approach</h4>
        <ul>
          <li>Technical audit</li>
          <li>Content gap analysis</li>
          <li>Link-building</li>
        </ul>
        <a href="#">View Case Study →</a>
      </div>
      <div class="swiper-slide case-study-card">
        <h3>Technology Advice</h3>
        <p>Boost organic traffic by 150%.</p>
        <h4>Approach</h4>
        <ul>
          <li>Technical audit</li>
          <li>Content gap analysis</li>
          <li>Link-building</li>
        </ul>
        <a href="#">View Case Study →</a>
      </div>
      <div class="swiper-slide case-study-card">
        <h3>Acodez IT Solutions</h3>
        <p>Boost organic traffic by 150%.</p>
        <h4>Approach</h4>
        <ul>
          <li>Technical audit</li>
          <li>Content gap analysis</li>
          <li>Link-building</li>
        </ul>
        <a href="#">View Case Study →</a>
      </div>
      <div class="swiper-slide case-study-card">
        <h3>Acowebs</h3>
        <p>Boost organic traffic by 150%.</p>
        <h4>Approach</h4>
        <ul>
          <li>Technical audit</li>
          <li>Content gap analysis</li>
          <li>Link-building</li>
        </ul>
        <a href="#">View Case Study →</a>
      </div>
      <!-- add more slides as needed -->
    </div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </div>
</section>
<?php get_footer(); ?>