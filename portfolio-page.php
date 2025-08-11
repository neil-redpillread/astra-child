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
  <section class="portfolio-clients-carousel">
  <div class="swiper portfolio-carousel">
    <div class="swiper-wrapper">
      <!-- slide 1 -->
      <div class="swiper-slide case-study-card">
        <h3>Digitial Strategy Consultants</h3>
        <p>Increase form submissions by 53% in 3 months.</p>
        <h4>Approach</h4>
        <ul>
          <li>PPC reallocation</li>
          <li>On-page SEO</li>
          <li>UX improvements</li>
        </ul>
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