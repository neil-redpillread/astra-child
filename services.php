<?php
/*
Template Name: Services
*/
get_header();
?>
<div class="service-hero-wrapper">
  <div class="hero-left slide-left">
    <h1>The SEO Specialist Your Company Needs</h1>
    <p class="service-intro">
    <a href="https://marketing.redpillread.com/">Red Pill Read Marketing</a> offers a complete suite of SEO optimization services to help your business increase organic visibility and traffic. Whether you need technical fixes, content optimization, or link building, I’ve got you covered from A to Z.</p>
  </div>

  <div class="hero-right slide-right">
    <h2 class="services-prompt">Pick the service that matches your goals</h2>
    <div class="services-grid">
      <a href="/services/#technical-seo-services" class="service-box">⚙️ Technical SEO</a>
      <div class="service-box">📄 On-Page Optimization</div>
      <div class="service-box">🔗 Off-Page SEO</div>
      <div class="service-box">✍️ Content SEO</div>
      <div class="service-box">🏪 Local SEO</div>
      <div class="service-box">🛒 E-commerce SEO</div>
      <div class="service-box">🚀 Advanced SEO</div>
     <div class="service-box"> 📈Analytics & Reporting</div>
    </div>

    <div class="unsure-section">
      <p>Not sure which service your business needs? 🤔<br>
      Click the button below for a free website audit.</p>
      <a href="#seo-audit-form" class="seo-audit-button">SEO Audit</a>
    </div>
  </div>
</div>
<section id="technical-seo-services" class="service-detail technical-seo-section">
   <div class="ast-container">
    <div class="service-detail-wrapper">

        <!-- LEFT COLUMN -->
        <div class="service-detail-left">
            <h2>Technical SEO Services</h2>

            <p>
                Technical SEO is the foundation that allows search engines to access, understand, 
                and rank your website. Here’s our technical SEO checklist of services that covers 
                all areas of technical SEO.
            </p>

            <ul class="service-bullets">
                <li>Site Crawl & Indexation Fixes (robots.txt, XML sitemap, noindex tags)</li>
                <li>Page Speed Optimization (Core Web Vitals, image compression, caching)</li>
                <li>Mobile SEO & Responsive Optimization</li>
                <li>HTTPS & Security (SSL fixes, mixed content removal)</li>
                <li>Canonicalization & Duplicate Content Fixes</li>
                <li>Structured Data (JSON-LD schema setup for rich results)</li>
                <li>JavaScript SEO (rendering issues, lazy loading, dynamic content)</li>
                <li>Crawl Budget Optimization (for large/enterprise sites)</li>
                <li>Fixing Redirect Chains & Loops</li>
                <li>Orphan Page Detection & Fixing</li>
                <li>Site Migration SEO (domain changes, redesigns, HTTPS migrations)</li>
            </ul>
        </div>

        <!-- RIGHT COLUMN -->
        <div class="service-detail-right">
            <img 
    src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/service page/technical seo service section image showing Screaming Frong crawl and Google page speed inshights report and xml sitemap of a site.png" 
    alt="technical seo service section image showing Screaming Frong crawl and Google page speed inshights report and xml sitemap of a site" 
    class="service-detail-image"
/>

            <a href="#" class="cta-button technical-seo-cta cta-start-now">Start Now</a>
        </div>
    <!-- Popup Modal -->
<div id="audit-modal" class="audit-modal">
    <div class="audit-modal-content">
        <span class="audit-close">&times;</span>

        <h2>Technical Audit Form</h2>

        <form id="audit-form">
            <label>Business Name</label>
            <input type="text" required>

            <label>Website URL</label>
<input 
    type="text" 
    name="website-url"
    required
    pattern="(https?://)?([a-zA-Z0-9-]+\.)+[a-zA-Z]{2,}"
    placeholder="example.com or https://example.com"
>

            <label>Contact Name</label>
            <input type="text" required>

            <label>Email Address</label>
            <input type="email" required>

            <label>Phone Number (optional)</label>
            <input type="text">

            <label>Brief Description of Your Business</label>
            <textarea required></textarea>

            <label>What are your primary products or services?</label>
            <textarea required></textarea>

            <label>How soon are you looking to start SEO work?</label>
            <select required>
                <option>Immediately</option>
                <option>Within 1–3 months</option>
                <option>3–6 months</option>
                <option>6+ months</option>
            </select>

            <button type="submit" class="audit-submit">Submit</button>
        </form>
    </div>
</div>


    </div>
    </div>
</section>

<?php get_footer(); ?>
