<?php
/*
Template Name: Portfolio Page
*/
get_header(); ?>
<section class="portfolio-hero-section">
    <div class="portfolio-hero-content">
      <h1>Your Personal SEO Specialist</h1>
      <div class="video-wrapper">
   <iframe width="100%" height="300" src="https://www.youtube.com/embed/mCD51Qv7UpI" frameborder="0" allowfullscreen></iframe>
</div>
      <div class="text-content">
        <p>
        Hi, I’m Neil Jose — an SEO service provider with over 5 years of hands-on experience in digital marketing, alongside a master’s degree in digital marketing from<a href="https://www.tcd.ie " target="_blank " rel="nofollow noopener noreferrer "> Trinity College Dublin.</a> By hiring me as your dedicated SEO strategist, you give your business the strongest opportunity to rank on Google’s first page. Click the video to learn more about me.
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
        <div class="case-header">
  <h3 class="case-title">Digital Strategy Consultants</h3>
  <div class="logo-container">
  <img
  class="case-logo"
    src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/logos/digital-strategy_logo.webp' ); ?>"
    alt="Digital Strategy logo" loading="lazy" decoding="async">
</div>
</div>
        <p> Digital Strategy Consultants, founded in 2012, is a digital marketing agency and consultancy based in Dublin, a global hub for digital marketing excellence.</p>
        <h4>Objective</h4>
        <p> Improvements keyword rankings, organic traffic, and backlink profile.</p>
        <div class="strategy-row">
  <h4 class="strategy-heading">Strategy:</h4>
  <ul class="strategy-tags">
    <li><a href="/services/digital-pr/">Off-Page SEO</a></li>
    <li><a href="/services/keyword-research/">On-Page SEO</a></li>
    <li><a href="/services/link-building/">Technical SEO</a></li>
    <li><a href="/services/website-audit/">Authority Metrics</a></li>
  </ul>
</div>
        <h3> Result: +120% growth in organic traffic</h3>
      <div class="case-footer">
  <a class="btn-case-study" href="/case-studies/digital-strategy-case-study">View Case Study</a>
</div>
</div>
<!-- slide 2 -->
<div class="swiper-slide case-study-card">
        <div class="case-header">
  <h3 class="case-title">Acowebs</h3>
  <div class="logo-container">
  <img
  class="case-logo"
    src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/logos/acowebs-logo.webp'); ?>"
    alt="Digital Strategy logo" loading="lazy" decoding="async">
</div>
</div>
        <p>Acowebs is a WooCommerce plugin store with customers in 130+ countries and +50,000 customer base.</p>
        <h4>Objective</h4>
        <p> Scale Visibility and Brand Authority </p>
        <div class="strategy-row">
  <h4 class="strategy-heading">Strategy:</h4>
  <ul class="strategy-tags">
    <li><a href="/services/digital-pr/">Off-Page SEO</a></li>
    <li><a href="/services/keyword-research/">Keyword research</a></li>
    <li><a href="/services/link-building/">On-Page SEO</a></li>
    <li><a href="/services/website-audit/">Technical SEO</a></li>
  </ul>
</div>
<h3> Result: 16x Growth in Plugin Downloads </h3>
      <div class="case-footer">
  <a class="btn-case-study" href="/case-study/acowebs-case-study/">View Case Study</a>
</div>
</div>
<!-- slide 3 -->
<div class="swiper-slide case-study-card">
        <div class="case-header">
  <h3 class="case-title">Acodez IT Solutions</h3>
  <div class="logo-container">
  <img
  class="case-logo"
    src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/logos/acodez-logo.webp' ); ?>"
    alt="acodez-logo" loading="lazy" decoding="async">
</div>
</div>
        <p> Acodez is a web development and digital marketing agency founded in 2011 and based in India.</p>
        <h4>Objective</h4>
        <p>Strengthen organic visibility</p>
        <div class="strategy-row">
  <h4 class="strategy-heading">Strategy:</h4>
  <ul class="strategy-tags">
    <li><a href="/services/digital-pr/">On-Page SEO</a></li>
    <li><a href="/services/keyword-research/">Technical SEO</a></li>
    <li><a href="/services/link-building/">Link-building</a></li>
    <li><a href="/services/website-audit/">Digital PR</a></li>
  </ul>
</div>
<h3> Result: Increased Organic Traffic by 88% </h3>
      <div class="case-footer">
  <a class="btn-case-study" href="/case-study/acodez-case-study/">View Case Study</a>
</div>
</div>
<!-- slide 4 -->
 <div class="swiper-slide case-study-card">
        <div class="case-header">
  <h3 class="case-title">TechnologyAdvice</h3>
  <div class="logo-container">
  <img
  class="case-logo"
    src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/logos/technologyadvice-logo-01.webp'); ?>"
    alt="Digital Strategy logo" loading="lazy" decoding="async">
</div>
</div>
        <p>TechnologyAdvice is a B2B media services company that connects businesses with the right software and service providers.</p>
        <h4>Objective</h4>
        <p>Building authority and improving keyword visibility</p>
        <div class="strategy-row">
  <h4 class="strategy-heading">Strategy:</h4>
  <ul class="strategy-tags">
    <li><a href="/services/digital-pr/">Off-Page SEO</a></li>
    <li><a href="/services/keyword-research/">On-Page SEO</a></li>
    <li><a href="/services/link-building/">Technical SEO</a></li>
  </ul>
</div>
<h3>Result: Strengthened Authority & Keyword Visibility</h3>
      <div class="case-footer">
  <a class="btn-case-study" href="/case-studies/ta-case-study">View Case Study</a>
</div>
</div>
<!-- slide 5 -->
 <div class="swiper-slide case-study-card">
        <div class="case-header">
  <h3 class="case-title">AI Strategy Consultants</h3>
  <div class="logo-container">
  <img
  class="case-logo"
    src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/logos/gpttraining-logo.webp'); ?>"
    alt="Digital Strategy logo" loading="lazy" decoding="async">
</div>
</div>
        <p>gpttraining.ie(now known as aistrategy.ie), is an AI consultancy firm specializing in ChatGPT and GPT solutions.</p>
        <h4>Objective</h4>
        <p>Buld brand awareness and generate consultation leads</p>
        <div class="strategy-row">
  <h4 class="strategy-heading">Strategy:</h4>
  <ul class="strategy-tags">
    <li><a href="/services/digital-pr/">Google Search Ads</a></li>
    <li><a href="/services/keyword-research/">Google Display Ads</a></li>
    <li><a href="/services/link-building/">LinkedIn Ads</a></li>
    <li><a href="/services/website-audit/">Content Marketing</a></li>
    <li><a href="/services/Google-ads/">SEO</a></li>
    <li><a href="/services/Google-ads/">Analytics & Measurement</a></li>
  </ul>
</div>
<h3>Result: 250K+ Ad impressions and leads</h3>
      <div class="case-footer">
  <a class="btn-case-study" href="/case-study/gpttraining-case-study/">View Case Study</a>
</div>
</div>

      <!-- add more slides as needed -->
</div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </div>
</section>
<section class="skills-carousel-section">
  <h2 id="skills-tools" class="skills-section-title">Skills and Tools</h2>
  <p>This section highlights the Digital Marketing skills I’ve acquired over time, showcasing my level of expertise and proficiency in key tools that I regularly use to implement and optimize marketing strategies.</p>
  <p class="mobile-disclaimer">
    ℹ️ <em>To view the full list of tools and skills, please visit this section on desktop.</em></p>
  <div class="swiper skills-carousel">
    <div class="swiper-wrapper">

      <!-- Slide 1: SEO -->
      <div class="swiper-slide skills-slide">
        <div class="skills-card">
          <h3>Search Engine Optimization (SEO)</h3>

          <div class="skills-columns">
            <!-- LEFT column -->
            <div class="skills-col">
              <div class="tool-item">
              <div class="skill-bar" data-pct="90">
                 <div class="label">
                <span class="label-text">🔗Off-page</span>
                  </div>
                  <div class="bar-wrapper">
                <div class="bar"><div class="fill"></div></div>
                <span class="pct"></span>
                </div>
              </div>
              </div>
              <div class="tool-item">
              <div class="skill-bar" data-pct="75">
                <div class="label">
                <span class="label-text">📄On-page</span>
                </div>
                <div class="bar-wrapper">
                <div class="bar"><div class="fill"></div></div>
                <span class="pct"></span>
                </div>
              </div>
              </div>
               <div class="tool-item">
              <div class="skill-bar" data-pct="55">
                <div class="label">
                <span class="label-text">⚙️Technical</span>
                </div>
                <div class="bar-wrapper">
                <div class="bar"><div class="fill"></div></div>
                <span class="pct"></span>
                </div>
              </div>
              </div>
              <div class="tool-item">
              <div class="skill-bar" data-pct="50">
                <div class="label">
                <span class="label-text">🏪Local SEO</span>
                </div>
                <div class="bar-wrapper">
                <div class="bar"><div class="fill"></div></div>
                <span class="pct"></span>
                </div>
              </div>
              </div>
              <div class="tool-item">
              <div class="skill-bar" data-pct="55">
                <div class="label">
                <span class="label-text">📈Analytics and Reporting</span>
                </div>
                <div class="bar-wrapper">
                <div class="bar"><div class="fill"></div></div>
                <span class="pct"></span>
                </div>
              </div>
              </div>
            </div>
            <!-- RIGHT column -->
            <div class="skills-col">
            <div class="tool-item mobile-show">
            <div class="skill-bar" data-pct="70">
                 <div class="label">
                  <img class="label-icon"
         src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/logos/ahrefs-logo.webp"
         alt="ahrefs-logo">
                <span class="label-text">Ahrefs</span>
                </div>
                <div class="bar-wrapper">
                <div class="bar"><div class="fill"></div></div>
                <span class="pct"></span>
                </div>
              </div>
              </div>
              <div class="tool-item mobile-show">
              <div class="skill-bar" data-pct="80">
                <div class="label">
                  <img class="label-icon"
         src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/logos/screaming-frog logo.webp"
         alt="screaming-frog logo">
                <span class="label-text">Screaming Frog</span>
                </div>
                <div class="bar-wrapper">
                <div class="bar"><div class="fill"></div></div>
                <span class="pct"></span>
                </div>
              </div>
              </div>
              <div class="tool-item mobile-show">
              <div class="skill-bar" data-pct="80">
                <div class="label">
                  <img class="label-icon"
         src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/logos/semrush-logo.webp"
         alt="semrush-logo">
                <span class="label-text">Semrush</span>
                </div>
                <div class="bar-wrapper">
                <div class="bar"><div class="fill"></div></div>
                <span class="pct"></span>
                </div>
              </div>
              </div>
              <div class="tool-item mobile-show">
              <div class="skill-bar" data-pct="60">
                <div class="label">
                  <img class="label-icon"
         src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/logos/google-analytics-logo.webp"
         alt="google-analytics-logo">
                <span class="label-text">Google Analytics 4</span>
                </div>
                <div class="bar-wrapper">
                <div class="bar"><div class="fill"></div></div>
                <span class="pct"></span>
                </div>
              </div>
              </div>
              <div class="tool-item mobile-show">
              <div class="skill-bar" data-pct="60">
                <div class="label">
                  <img class="label-icon"
         src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/logos/google_search_console_logo.webp"
         alt="search_console-logo">
         <span class="label-text">Google Search Console</span>
                </div>
                <div class="bar-wrapper">
                <div class="bar"><div class="fill"></div></div>
                <span class="pct"></span>
                </div>
              </div>
              </div>
            </div>
          </div><!-- /.skills-columns -->
        </div><!-- /.skills-card -->
      </div><!-- /.swiper-slide -->
             
       <!-- Slide 2: Search Engine Marketing -->
 <div class="swiper-slide skills-slide">
        <div class="skills-card">
          <h3>Search Engine Marketing (SEM)</h3>
          <div class="skills-columns">
            <!-- LEFT column -->
            <div class="skills-col">
              <div class="tool-item">
              <div class="skill-bar" data-pct="60">
                 <div class="label">
                <span class="label-text">🎯 Campaign Strategy & Setup</span>
                  </div>
                  <div class="bar-wrapper">
                <div class="bar"><div class="fill"></div></div>
                <span class="pct"></span>
                </div>
              </div>
              </div>
               <div class="tool-item">
              <div class="skill-bar" data-pct="75">
                <div class="label">
                <span class="label-text">✍️ Ad Copywriting</span>
                </div>
                <div class="bar-wrapper">
                <div class="bar"><div class="fill"></div></div>
                <span class="pct"></span>
                </div>
              </div>
              </div>
              <div class="tool-item">
              <div class="skill-bar" data-pct="50">
                <div class="label">
                <span class="label-text">💰Budget & Bidding</span>
                </div>
                <div class="bar-wrapper">
                <div class="bar"><div class="fill"></div></div>
                <span class="pct"></span>
                </div>
              </div>
              </div>
              <div class="tool-item">
              <div class="skill-bar" data-pct="50">
                <div class="label">
                <span class="label-text">🛠️Campaign Management</span>
                </div>
                <div class="bar-wrapper">
                <div class="bar"><div class="fill"></div></div>
                <span class="pct"></span>
                </div>
              </div>
              </div>
              <div class="tool-item">
              <div class="skill-bar" data-pct="55">
                <div class="label">
                <span class="label-text">📈Analytics & Reporting</span>
                </div>
                <div class="bar-wrapper">
                <div class="bar"><div class="fill"></div></div>
                <span class="pct"></span>
                </div>
              </div>
              </div>
            </div>
            <!-- RIGHT column -->
            <div class="skills-col">
            <div class="tool-item mobile-show">
            <div class="skill-bar" data-pct="60">
                 <div class="label">
                  <img class="label-icon"
         src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/logos/google-ads-logo.webp"
         alt="google-ads-logo">
                <span class="label-text">Google Ads</span>
                </div>
                <div class="bar-wrapper">
                <div class="bar"><div class="fill"></div></div>
                <span class="pct"></span>
                </div>
              </div>
              </div>
              <div class="tool-item mobile-show">
              <div class="skill-bar" data-pct="75">
                <div class="label">
                <span class="label-text">🔑Google Keyword Planner</span>
                </div>
                <div class="bar-wrapper">
                <div class="bar"><div class="fill"></div></div>
                <span class="pct"></span>
                </div>
              </div>
              </div>
              <div class="tool-item mobile-show">
              <div class="skill-bar" data-pct="50">
                <div class="label">
                  <img class="label-icon"
         src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/logos/tag_manager-logo.webp"
         alt="tag_manager-logo">
                <span class="label-text">Google Tag Manager</span>
                </div>
                <div class="bar-wrapper">
                <div class="bar"><div class="fill"></div></div>
                <span class="pct"></span>
                </div>
              </div>
              </div>
              <div class="tool-item mobile-show">
              <div class="skill-bar" data-pct="50">
                <div class="label">
                  <img class="label-icon"
         src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/logos/looker_studio-logo.webp"
         alt="google-analytics-logo">
                <span class="label-text">Looker Studio</span>
                </div>
                <div class="bar-wrapper">
                <div class="bar"><div class="fill"></div></div>
                <span class="pct"></span>
                </div>
              </div>
              </div>

            </div>
          </div><!-- /.skills-columns -->
        </div><!-- /.skills-card -->
      </div><!-- /.swiper-slide -->

             <!-- Slide 3: Web Development -->
 <div class="swiper-slide skills-slide">
        <div class="skills-card">
          <h3>Web Development</h3>
          <div class="skills-columns">
            <!-- LEFT column -->
            <div class="skills-col">
              <div class="tool-item mobile-show">
              <div class="skill-bar" data-pct="30">
                 <div class="label">
                <span class="label-text">🌐 HTML</span>
                  </div>
                  <div class="bar-wrapper">
                <div class="bar"><div class="fill"></div></div>
                <span class="pct"></span>
                </div>
              </div>
              </div>
              <div class="tool-item mobile-show">
              <div class="skill-bar" data-pct="50">
                <div class="label">
                <span class="label-text">🎨 CSS</span>
                </div>
                <div class="bar-wrapper">
                <div class="bar"><div class="fill"></div></div>
                <span class="pct"></span>
                </div>
              </div>
              </div>
              <div class="tool-item mobile-show">
              <div class="skill-bar" data-pct="20">
                <div class="label">
                  <img class="label-icon"
         src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/logos/javascriptlogo.webp"
         alt="javascript-logo">
                <span class="label-text">JavaScript</span>
                </div>
                <div class="bar-wrapper">
                <div class="bar"><div class="fill"></div></div>
                <span class="pct"></span>
                </div>
              </div>
              </div>
            </div>
            <!-- RIGHT column -->
            <div class="skills-col">
            <div class="tool-item mobile-show">
            <div class="skill-bar" data-pct="30">
                 <div class="label">
                  <img class="label-icon"
         src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/logos/vs-code-logo.webp"
         alt="vs-code-logo">
                <span class="label-text">VS Code</span>
                </div>
                <div class="bar-wrapper">
                <div class="bar"><div class="fill"></div></div>
                <span class="pct"></span>
                </div>
              </div>
              </div>
              <div class="tool-item">
              <div class="skill-bar" data-pct="40">
                <div class="label">
                <img class="label-icon"
         src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/logos/local-logo.webp"
         alt="local-logo">
                <span class="label-text">Local</span>
                </div>
                <div class="bar-wrapper">
                <div class="bar"><div class="fill"></div></div>
                <span class="pct"></span>
                </div>
              </div>
              </div>
              <div class="tool-item">
              <div class="skill-bar" data-pct="40">
                <div class="label">
                  <img class="label-icon"
         src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/logos/filezilla_logo.webp"
         alt="filezilla_logo">
                <span class="label-text">FileZilla</span>
                </div>
                <div class="bar-wrapper">
                <div class="bar"><div class="fill"></div></div>
                <span class="pct"></span>
                </div>
              </div>
              </div>
              <div class="tool-item mobile-show">
              <div class="skill-bar" data-pct="70">
                <div class="label">
                  <img class="label-icon"
         src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/logos/wordpress-logo.webp"
         alt="wordpress-logo">
                <span class="label-text">WordPress</span>
                </div>
                <div class="bar-wrapper">
                <div class="bar"><div class="fill"></div></div>
                <span class="pct"></span>
                </div>
              </div>
              </div>
              <div class="tool-item">
        <div class="skill-bar" data-pct="40">
                <div class="label">
                  <img class="label-icon"
         src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/logos/github-logo.webp"
         alt="github-logo">
                <span class="label-text">GitHub</span>
                </div>
                <div class="bar-wrapper">
                <div class="bar"><div class="fill"></div></div>
                <span class="pct"></span>
                </div>
              </div>
              </div>
            </div>
          </div><!-- /.skills-columns -->
        </div><!-- /.skills-card -->
      </div><!-- /.swiper-slide -->
               <!-- Slide 4: Social Media Marketing -->
 <div class="swiper-slide skills-slide">
        <div class="skills-card">
          <h3>Social Media Marketing</h3>
          <div class="skills-columns">
            <!-- LEFT column -->
            <div class="skills-col">
              <div class="tool-item mobile-show">
              <div class="skill-bar" data-pct="40">
                 <div class="label">
                  <img class="label-icon"
         src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/logos/instagram-logo.webp"
         alt="instagram-logo">
                <span class="label-text">Instagram</span>
                  </div>
                  <div class="bar-wrapper">
                <div class="bar"><div class="fill"></div></div>
                <span class="pct"></span>
                </div>
              </div>
              </div>
              <div class="tool-item mobile-show">
              <div class="skill-bar" data-pct="50">
                <div class="label">
                <img class="label-icon"
         src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/logos/youtube-logo.webp"
         alt="youtube-logo">
                <span class="label-text">YouTube</span>
                </div>
                <div class="bar-wrapper">
                <div class="bar"><div class="fill"></div></div>
                <span class="pct"></span>
                </div>
              </div>
              </div>
              <div class="tool-item mobile-show">
              <div class="skill-bar" data-pct="50">
                <div class="label">
                  <img class="label-icon"
         src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/logos/facebook-logo.webp"
         alt="javascript-logo">
                <span class="label-text">Facebook</span>
                </div>
                <div class="bar-wrapper">
                <div class="bar"><div class="fill"></div></div>
                <span class="pct"></span>
                </div>
              </div>
              </div>
              <div class="tool-item mobile-show">
               <div class="skill-bar" data-pct="50">
                <div class="label">
                  <img class="label-icon"
         src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/logos/linkedIn_logo.webp"
         alt="linkedIn_logo">
                <span class="label-text">LinkedIn</span>
                </div>
                <div class="bar-wrapper">
                <div class="bar"><div class="fill"></div></div>
                <span class="pct"></span>
                </div>
              </div>
              </div>
              <div class="tool-item mobile-show">
              <div class="skill-bar" data-pct="40">
                <div class="label">
                  <img class="label-icon"
         src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/logos/X_logo.webp"
         alt="X_logo">
                <span class="label-text">X (Twitter)</span>
                </div>
                <div class="bar-wrapper">
                <div class="bar"><div class="fill"></div></div>
                <span class="pct"></span>
                </div>
              </div>
              </div>
            </div>
           
          </div><!-- /.skills-columns -->
        </div><!-- /.skills-card -->
      </div><!-- /.swiper-slide -->
      
      <!-- Slide 5: Content Creation Toolbox -->
 <div class="swiper-slide skills-slide">
        <div class="skills-card">
          <h3>Content Creation Toolbox</h3>
          <div class="skills-columns">
            <!-- LEFT column -->
            <div class="skills-col">
              <div class="tool-item mobile-show">
              <div class="skill-bar" data-pct="50">
                 <div class="label">
                  <img class="label-icon"
         src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/logos/Adobe_Illustrator-logo.webp"
         alt="adobe_illustrator-logo">
                <span class="label-text">Adobe Illustrator</span>
                  </div>
                  <div class="bar-wrapper">
                <div class="bar"><div class="fill"></div></div>
                <span class="pct"></span>
                </div>
              </div>
              </div>
              <div class="tool-item mobile-show">
              <div class="skill-bar" data-pct="40">
                <div class="label">
                  <img class="label-icon"
         src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/logos/Canva-Logo.webp"
         alt="Canva-Logo">
                <span class="label-text">Canva</span>
                </div>
                <div class="bar-wrapper">
                <div class="bar"><div class="fill"></div></div>
                <span class="pct"></span>
                </div>
              </div>
              </div>
              <div class="tool-item mobile-show">
              <div class="skill-bar" data-pct="20">
                <div class="label">
                  <img class="label-icon"
         src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/logos/Adobe_Photoshop_logo.webp"
         alt="Adobe_Photoshop_logo">
                <span class="label-text">Photoshop</span>
                </div>
                <div class="bar-wrapper">
                <div class="bar"><div class="fill"></div></div>
                <span class="pct"></span>
                </div>
              </div>
              </div>
            </div>
            <!-- RIGHT column -->
            <div class="skills-col">
            <div class="tool-item mobile-show">
            <div class="skill-bar" data-pct="45">
                 <div class="label">
                  <img class="label-icon"
         src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/logos/CapCut_logo.webp"
         alt="CapCut_logo">
                <span class="label-text">CapCut</span>
                </div>
                <div class="bar-wrapper">
                <div class="bar"><div class="fill"></div></div>
                <span class="pct"></span>
                </div>
              </div>
              </div>
              <div class="tool-item">
              <div class="skill-bar" data-pct="60">
                <div class="label">
                <img class="label-icon"
         src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/logos/Wondershare_filmora_logo.webp"
         alt="Wondershare_filmora_logo">
                <span class="label-text">Filmora</span>
                </div>
                <div class="bar-wrapper">
                <div class="bar"><div class="fill"></div></div>
                <span class="pct"></span>
                </div>
              </div>
              </div>
              <div class="tool-item mobile-show">
              <div class="skill-bar" data-pct="50">
                <div class="label">
                  <img class="label-icon"
         src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/logos/audacity_logo.webp"
         alt="audacity_logo">
                <span class="label-text">Audacity</span>
                </div>
                <div class="bar-wrapper">
                <div class="bar"><div class="fill"></div></div>
                <span class="pct"></span>
                </div>
              </div>
              </div>
              <div class="tool-item">
              <div class="skill-bar" data-pct="40">
                <div class="label">
                  <img class="label-icon"
         src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/logos/adobe_after_effects_logo.webp"
         alt="adobe_after_effects_logo">
                <span class="label-text">Adobe After Effects</span>
                </div>
                <div class="bar-wrapper">
                <div class="bar"><div class="fill"></div></div>
                <span class="pct"></span>
                </div>
              </div>
              </div>

            </div>
          </div><!-- /.skills-columns -->
        </div><!-- /.skills-card -->
      </div><!-- /.swiper-slide -->
    </div><!-- /.swiper-wrapper -->

    <div class="swiper-button-prev skills-nav"></div>
    <div class="swiper-button-next skills-nav"></div>
  </div><!-- /.swiper -->
  <section id="certifications" class="certifications-section">
  <h2>Certifications</h2>
  <p>
    Staying updated with industry trends is essential. That’s why I continually invest in learning and sharpening my skills. Below is a catalog of certifications I’ve earned along the way.
  </p>

  <div class="carousel-container">
    <button class="carousel-btn left" onclick="scrollCarousel(-1)" aria-label="Previous">‹</button>
    <div class="carousel" id="carousel">
      <!-- Certificate Item -->
      <div class="certificate-item">
        <div class="photo-frame">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/certificates/SEO-crash-course-certificate.webp" alt="SEO-crash-course-certificate">
        </div>
        <div class="certificate-info">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logos/semrush-logo.webp" class="course-logo" alt="semrush-logo">
          <div class="course-name"><a href="https://static.semrush.com/academy/certificates/716db3bdf0/neil-jose_2.pdf" target="_blank " rel="nofollow noopener noreferrer"> SEO Crash Course with Brian Dean</a></div>
        </div>
      </div>
      <div class="certificate-item">
        <div class="photo-frame">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/certificates/backlink-managment-course-certificate.webp" alt="backlink-managment-course-certificate">
        </div>
        <div class="certificate-info">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logos/semrush-logo.webp" class="course-logo" alt="semrush-logo">
          <div class="course-name"><a href="https://static.semrush.com/academy/certificates/c538003413/neil-jose_2.pdf" target="_blank " rel="nofollow noopener noreferrer"> Backlink Management Course</a></div>
        </div>
      </div>
    <div class="certificate-item">
        <div class="photo-frame">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/certificates/google-display-ad-certificate.webp" alt="google-display-ad-certificate">
        </div>
        <div class="certificate-info">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logos/google-logo.webp" class="course-logo" alt="google-logo">
          <div class="course-name"><a href="https://drive.google.com/file/d/1xMsAUVh07yDYKLpMzC3F7SovxEbRrwA1/view?pli=1" target="_blank " rel="nofollow noopener noreferrer"> Google Ads Display Certification</a></div>
        </div>
      </div>
      <div class="certificate-item">
        <div class="photo-frame">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/certificates/google-search-ads-certificate.webp" alt="google-display-ad-certificate">
        </div>
        <div class="certificate-info">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logos/google-logo.webp" class="course-logo" alt="google-logo">
          <div class="course-name"><a href="https://drive.google.com/file/d/11tF__NU9LhzmEl-QSqIp4xb1eBu-Akay/view" target="_blank " rel="nofollow noopener noreferrer"> Google Ads Search Certification</a></div>
        </div>
      </div>
      <div class="certificate-item">
        <div class="photo-frame">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/certificates/content-marketing-certificate.webp" alt="content-marketing-certificat">
        </div>
        <div class="certificate-info">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logos/uc_davis_logo.webp" class="course-logo" alt="uc_davis_logo">
          <div class="course-name"><a href="https://drive.google.com/file/d/1p5kHLIdMkaiNwdfqFq2TbZGkBa6CCwCU/view" target="_blank " rel="nofollow noopener noreferrer"> The Strategy of Content Marketing</a></div>
        </div>
      </div>
      <div class="certificate-item">
        <div class="photo-frame">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/certificates/content-strategy-certificate.webp" alt="business-english-certificate">
        </div>
        <div class="certificate-info">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logos/Washington_uni_logo.webp" class="course-logo" alt="Washington_uni_logo">
          <div class="course-name"><a href="https://drive.google.com/file/d/1-efnIpN7KbpxhoM3TT5q7Dx_5bPSiynB/view" target="_blank " rel="nofollow noopener noreferrer"> Business English: Networking</a></div>
        </div>
      </div>
      <div class="certificate-item">
        <div class="photo-frame">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/certificates/excel-certificate-training.webp" alt="excel-certificate-training">
        </div>
        <div class="certificate-info">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logos/linkedIn_logo.webp" class="course-logo" alt="linkedIn_logo">
          <div class="course-name"><a href="https://drive.google.com/file/d/1iS6JM-F3XTaBBZUlQk-ev-wnsiM11bcY/view" target="_blank " rel="nofollow noopener noreferrer">Excel Statistics Essential Training</a></div>
        </div>
      </div>
      <div class="certificate-item">
        <div class="photo-frame">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/certificates/statistics-foundation-certificate.webp" alt="statistics-foundation-certificate">
        </div>
        <div class="certificate-info">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logos/linkedIn_logo.webp" class="course-logo" alt="linkedIn_logo">
          <div class="course-name"><a href="https://drive.google.com/file/d/18JCDCqBL9iqMFlkTjR_8mIwBZ47M894W/view" target="_blank " rel="nofollow noopener noreferrer">Statistics Foundations</a></div>
        </div>
      </div>
      <div class="certificate-item">
        <div class="photo-frame">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/certificates/google-analytics-basic-course-cerficate.webp" alt="google-analytics-basic-course-cerficate">
        </div>
        <div class="certificate-info">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logos/Coursera-Logo.webp" class="course-logo" alt="Coursera-Logo">
          <div class="course-name"><a href="https://drive.google.com/file/d/1_gRt3skVBXKAc5LDbB7ZacSlhEkMih6U/view" target="_blank " rel="nofollow noopener noreferrer">Google Analytics Basics</a></div>
        </div>
      </div>
      <!-- Add more certificate items similarly -->
    </div>

    <button class="carousel-btn right" onclick="scrollCarousel(1)" aria-label="Next">›</button>
  </div>
  </section>
  <section class="testimonials-section">
  <h2>In Their Own Words</h2>
  <p class="testimonial-intro">Here’s what past clients have shared about working with me.</p>

  <div class="testimonial-outer-wrapper">
  <div class="swiper testimonial-carousel">
    <div class="swiper-wrapper">
      <!-- Slide 1 -->
      <div class="swiper-slide">
        <div class="testimonial-card">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/headshots/kristin-Wise-headshot.webp" alt="kristin-Wise-headshot" class="testimonial-photo">
          <blockquote class="testimonial-quote desktop-only">“I have had the privilege of working with Neil Jose in two distinct capacities: first as an SEO Intern at Digital Strategy Consultants and then as the lead consultant on a Trinity College Dublin group project with AI Strategy Consultants. Across both roles, Neil consistently impressed me with his professionalism, proactive communication, and deep SEO expertise.”</blockquote>
          <blockquote class="testimonial-quote mobile-only">"I would recommend Neil to any organization seeking to elevate their SEO performance."</blockquote>
          <p class="testimonial-author">— Kristin Wise<br><span class="designation">Digital Project Manager, Digital Strategy Consultants</span></p>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="testimonial-card">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/headshots/kristin-Wise-headshot.webp" alt="kristin-Wise-headshot" class="testimonial-photo">
          <blockquote class="testimonial-quote desktop-only">“I have had the privilege of working with Neil Jose in two distinct capacities: first as an SEO Intern at Digital Strategy Consultants and then as the lead consultant on a Trinity College Dublin group project with AI Strategy Consultants. Across both roles, Neil consistently impressed me with his professionalism, proactive communication, and deep SEO expertise.”</blockquote>
          <blockquote class="testimonial-quote mobile-only">"I would recommend Neil to any organization seeking to elevate their SEO performance."</blockquote>
          <p class="testimonial-author">— Kristin Wise<br><span class="designation">Digital Project Manager, Digital Strategy Consultants</span></p>
        </div>
      </div>
      <!-- Add more slides like this -->
    </div>
    </div>
</section>
<section class="contact-section">
  <div class="contact-left">
    <h2>Let’s Connect</h2>
    <p>
    Thanks for stopping by! Whether you're a small business looking to boost your online presence or you're interested in pro SEO services to climb the Google rankings, I’d love to hear from you. Even if you just want to connect or network, my inbox is always open.
    </p>
    <a href="/services/" class="cta-button">Explore Services</a>
  </div>

  <div class="contact-right" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/stock-images/notepad-image.webp');">
    <h3>My Socials</h3>
    <div class="social-icons">
      <a href="https://www.linkedin.com/in/neil-jose/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logos/linkedIn_logo.webp" alt="LinkedIn logo" /></a>
      <a href="mailto:redpillread@gmail.com"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logos/gmail-logo.webp" alt="Gmail logo" /></a>
      <a href="https://github.com/neil-redpillread"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logos/github-logo.webp" alt="GitHub" /></a>
      <a href="/under-construction/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logos/youtube-logo.webp" alt="YouTube-logo" /></a>
      <a href="https://www.instagram.com/neiljose4real/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logos/instagram-logo.webp" alt="Instagram" /></a>
      <a href="/under-construction/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logos/X_logo.webp" alt="x-logo" /></a>
    </div>

    <div class="cv-download">
      <a href="<?php echo get_stylesheet_directory_uri(); ?>/assets/downloadables/Neil Jose -  CV.pdf" download>📄 CV Download Link</a>
    </div>

    <div class="contact-number">
     <span class="mobile-only">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/emojis/phone-emoji.webp" alt="Phone Icon" style="width: 16px; vertical-align: middle; margin-right: 8px;">
        +353 892127114
    </span>
    <span class="desktop-only">
        Contact number: +353 892127114
    </span>
    </div>
  </div>
</section>
<?php get_footer(); ?>