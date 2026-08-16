<section class="service-page web-development">
    <div class="container">
        <header class="page-header">
            <h1>Web Development Services</h1>
            <p>Delivering responsive, modern websites and web applications for businesses of all sizes.</p>
        </header>

        <div class="service-overview">
            <h2>What We Offer</h2>
            <ul>
                <li>Custom website design and development</li>
                <li>Progressive Web Apps (PWA) and single-page applications</li>
                <li>Content management system integration</li>
                <li>E-commerce solutions with secure checkout</li>
                <li>Performance optimization and SEO-friendly code</li>
            </ul>
        </div>

        <div class="service-details">
            <h2>Why Choose Our Web Development</h2>
            <p>Our team builds user-friendly websites with clean code and scalable architecture. We focus on fast load times, mobile-first design, and seamless user experiences.</p>

            <div class="detail-item">
                <h3>Responsive Design</h3>
                <p>Each website is designed to adapt smoothly to desktops, tablets, and mobile devices.</p>
            </div>
            <div class="detail-item">
                <h3>Modern Technologies</h3>
                <p>We use the latest frameworks and tools to ensure maintainable and future-proof solutions.</p>
            </div>
            <div class="detail-item">
                <h3>Ongoing Support</h3>
                <p>Our service includes support and updates to keep your site running reliably.</p>
            </div>
        </div>

        <div class="pricing-block">
            <h2>Dummy Pricing</h2>
            <p>Starting from:</p>
            <ul>
                <li>Basic website package: $999</li>
                <li>Advanced web application: $2999</li>
                <li>E-commerce solution: $4999</li>
            </ul>
        </div>
        @include('partials.faq-accordion', ['faqs' => $page->activeFaqs])
        <footer class="service-footer">
            <p>Contact us today to discuss your web development project and get a custom quote.</p>
        </footer>
    </div>
</section>
