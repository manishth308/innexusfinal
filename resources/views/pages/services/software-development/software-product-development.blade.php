@extends('layouts.app')

@section('title', 'Software Product Development Services - InTech Nexus')

@section('content')
<style>
    :root {
        --primary: #2563eb;
        --primary-hover: #1d4ed8;
        --bg-light: #f8fafc;
        --text-dark: #0f172a;
        --text-muted: #475569;
        --border: #e2e8f0;
        --white: #ffffff;
    }

    .sp-body { color: var(--text-dark); line-height: 1.6; background: var(--bg-light); font-family: system-ui, -apple-system, sans-serif; }
    .sp-container { max-width: 1100px; margin: 0 auto; padding: 0 20px; }
    
    /* Buttons */
    .sp-btn { display: inline-block; padding: 12px 24px; border-radius: 6px; font-weight: 600; text-decoration: none; transition: 0.2s; }
    .sp-btn-primary { background: var(--primary); color: var(--white); }
    .sp-btn-primary:hover { background: var(--primary-hover); color: var(--white); }
    .sp-btn-secondary { background: transparent; color: var(--primary); border: 1px solid var(--primary); margin-left: 10px; }
    .sp-btn-secondary:hover { background: var(--primary); color: var(--white); }

    /* Hero */
    .sp-hero { background: var(--white); padding: 80px 0; border-bottom: 1px solid var(--border); text-align: center; }
    .sp-hero h1 { font-size: 2.5rem; margin-bottom: 16px; font-weight: 700; color: var(--text-dark); }
    .sp-hero p { font-size: 1.25rem; color: var(--text-muted); max-width: 800px; margin: 0 auto 24px; }
    
    /* Generic Sections */
    .sp-section { padding: 60px 0; }
    .sp-section-title { font-size: 2rem; margin-bottom: 30px; text-align: center; font-weight: 700; }
    
    /* Grid Layouts */
    .sp-grid-2 { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; }
    
    .sp-card { background: var(--white); padding: 24px; border-radius: 8px; border: 1px solid var(--border); }
    .sp-card h3 { margin-bottom: 12px; color: var(--primary); font-size: 1.25rem; font-weight: 600; }

    /* Process Steps */
    .sp-process-steps { display: flex; flex-direction: column; gap: 15px; }
    .sp-step { background: var(--white); padding: 20px; border-left: 4px solid var(--primary); border-radius: 0 8px 8px 0; border-top: 1px solid var(--border); border-right: 1px solid var(--border); border-bottom: 1px solid var(--border); }
    .sp-step h4 { font-size: 1.1rem; font-weight: 600; margin-bottom: 4px; }

    /* Tech Badges */
    .sp-tech-group { margin-bottom: 20px; }
    .sp-tech-group:last-child { margin-bottom: 0; }
    .sp-tech-group h4 { margin-bottom: 8px; color: var(--text-muted); font-weight: 600; }
    .sp-badges { display: flex; flex-wrap: wrap; gap: 10px; }
    .sp-badge { background: #e0e7ff; color: #3730a3; padding: 6px 12px; border-radius: 20px; font-size: 0.9rem; font-weight: 500; }

    /* FAQ */
    .sp-faq-item { background: var(--white); padding: 20px; margin-bottom: 12px; border-radius: 6px; border: 1px solid var(--border); }
    .sp-faq-item h4 { margin-bottom: 8px; font-weight: 600; }

    /* CTA Section */
    .sp-cta-section { background: var(--primary); color: var(--white); text-align: center; padding: 60px 20px; border-radius: 12px; margin: 40px 0; }
    .sp-cta-section h2 { margin-bottom: 12px; color: var(--white); font-weight: 700; }
    .sp-cta-section p { margin-bottom: 24px; opacity: 0.9; }
    .sp-cta-section .sp-btn-cta { background: var(--white); color: var(--primary); font-weight: 600; }
    .sp-cta-section .sp-btn-cta:hover { background: #f1f5f9; }
</style>

<div class="sp-body">
    <!-- Hero Section -->
    <header class="sp-hero">
        <div class="sp-container">
            <h1>Software Product Development From Early Idea to Market Ready Launch</h1>
            <p>Software product development services for businesses turning an idea into a full, market ready digital product.</p>
            <p style="font-size: 1rem; color: var(--text-muted);">Turning an idea into a real, usable product takes more than development alone. As part of our Software Development practice, we handle product planning, design, engineering, and QA together, so nothing gets lost in translation between teams working in isolation.</p>
            <div style="margin-top: 24px;">
                <a href="#quote" class="sp-btn sp-btn-primary">Get a Free Quote</a>
                <a href="#call" class="sp-btn sp-btn-secondary">Book a Call</a>
            </div>
        </div>
    </header>

    <div class="sp-container">
        <!-- Who This Is For & Problems We Solve -->
        <section class="sp-section sp-grid-2">
            <div class="sp-card">
                <h3>Who This Is For</h3>
                <p>Businesses and product teams building a digital product from the ground up, not just a single internal tool.</p>
            </div>
            <div class="sp-card">
                <h3>Problems We Solve</h3>
                <ul style="padding-left: 20px; color: var(--text-muted);">
                    <li>Turning a product idea into something real takes more than just development.</li>
                    <li>Without proper product engineering, products can end up expensive to maintain.</li>
                    <li>You need a partner who can carry the product from concept through to launch.</li>
                </ul>
            </div>
        </section>

        <!-- What We Offer -->
        <section class="sp-section">
            <h2 class="sp-section-title">What We Offer</h2>
            <p style="text-align: center; margin-bottom: 30px; color: var(--text-muted);">We handle end to end product development, from planning through to launch and support.</p>
            <div class="sp-grid-2">
                <div class="sp-card">
                    <ul style="padding-left: 20px; color: var(--text-muted);">
                        <li>Software product development company support from idea to launch</li>
                        <li>Digital product development across web, mobile, and cloud</li>
                        <li>End to end product development, including design and QA</li>
                    </ul>
                </div>
                <div class="sp-card">
                    <ul style="padding-left: 20px; color: var(--text-muted);">
                        <li>Product engineering services for scalable architecture</li>
                        <li>Custom product development for your specific market</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Service Capabilities -->
        <section class="sp-section">
            <h2 class="sp-section-title">Our Service Capabilities</h2>
            <div class="sp-grid-2">
                <div class="sp-card">
                    <h3>What We Deliver</h3>
                    <ul style="padding-left: 20px; color: var(--text-muted);">
                        <li>A market ready digital product built end to end</li>
                        <li>Product architecture built for future growth</li>
                        <li>A full design system alongside the technical build</li>
                        <li>QA and launch support</li>
                    </ul>
                </div>
                <div class="sp-card">
                    <h3>Key Skill Areas</h3>
                    <ul style="padding-left: 20px; color: var(--text-muted);">
                        <li>Product strategy and scoping</li>
                        <li>Full stack software engineering</li>
                        <li>Scalable product architecture</li>
                        <li>Cross functional product management</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Our Process -->
        <section class="sp-section">
            <h2 class="sp-section-title">Our Process</h2>
            <div class="sp-process-steps">
                <div class="sp-step">
                    <h4>1. Discovery & Requirements</h4>
                    <p style="color: var(--text-muted);">We map your goals, workflows, and technical needs before any planning begins.</p>
                </div>
                <div class="sp-step">
                    <h4>2. Planning & Architecture</h4>
                    <p style="color: var(--text-muted);">We design the system architecture and choose the right technical approach.</p>
                </div>
                <div class="sp-step">
                    <h4>3. Design</h4>
                    <p style="color: var(--text-muted);">We plan the interface and user experience alongside the technical build.</p>
                </div>
                <div class="sp-step">
                    <h4>4. Development</h4>
                    <p style="color: var(--text-muted);">We build the software in structured, reviewable stages.</p>
                </div>
                <div class="sp-step">
                    <h4>5. Testing & Launch</h4>
                    <p style="color: var(--text-muted);">We test thoroughly, then launch with ongoing support.</p>
                </div>
            </div>
        </section>

        <!-- Tools & Technologies -->
        <section class="sp-section">
            <h2 class="sp-section-title">Tools & Technologies</h2>
            <div class="sp-card">
                <div class="sp-tech-group">
                    <h4>Languages</h4>
                    <div class="sp-badges">
                        <span class="sp-badge">Python</span>
                        <span class="sp-badge">JavaScript</span>
                        <span class="sp-badge">PHP</span>
                    </div>
                </div>
                <div class="sp-tech-group">
                    <h4>Frameworks</h4>
                    <div class="sp-badges">
                        <span class="sp-badge">React</span>
                        <span class="sp-badge">Node.js</span>
                        <span class="sp-badge">Laravel</span>
                        <span class="sp-badge">Django</span>
                    </div>
                </div>
                <div class="sp-tech-group">
                    <h4>Databases</h4>
                    <div class="sp-badges">
                        <span class="sp-badge">PostgreSQL</span>
                        <span class="sp-badge">MySQL</span>
                        <span class="sp-badge">MongoDB</span>
                    </div>
                </div>
                <div class="sp-tech-group">
                    <h4>Cloud & Infrastructure</h4>
                    <div class="sp-badges">
                        <span class="sp-badge">AWS</span>
                        <span class="sp-badge">Azure</span>
                        <span class="sp-badge">Google Cloud</span>
                    </div>
                </div>
                <div class="sp-tech-group">
                    <h4>Project & QA Tools</h4>
                    <div class="sp-badges">
                        <span class="sp-badge">Jira</span>
                        <span class="sp-badge">GitHub</span>
                        <span class="sp-badge">Postman</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Choose Us -->
        <section class="sp-section">
            <h2 class="sp-section-title">Why Choose InTech Nexus</h2>
            <div class="sp-card" style="text-align: center;">
                <p style="color: var(--text-muted);">We treat product development as one connected process, not separate stages handed off between teams. The same group that plans your product also designs it, builds it, and supports it after launch.</p>
            </div>
        </section>

        <!-- FAQs -->
        <section class="sp-section">
            <h2 class="sp-section-title">Frequently Asked Questions</h2>
            <div class="sp-faq-item">
                <h4>Do you handle design as part of product development?</h4>
                <p style="color: var(--text-muted);">Yes. Product design is part of our software product development process, not a separate add on.</p>
            </div>
            <div class="sp-faq-item">
                <h4>Can you take over a product that is already partly built?</h4>
                <p style="color: var(--text-muted);">Yes. We regularly review existing codebases and take over projects that were started elsewhere or by another team.</p>
            </div>
            <div class="sp-faq-item">
                <h4>Do you help decide what features to build first?</h4>
                <p style="color: var(--text-muted);">Yes. We help prioritize features based on what actually matters to your first users, rather than trying to build everything at once.</p>
            </div>
        </section>

        <!-- CTA Section -->
        <div class="sp-cta-section">
            <h2>Ready to bring your product idea to life?</h2>
            <p>Book a call, request a proposal, or get a free quote to start.</p>
            <div style="display: flex; gap: 12px; justify-content: center; flex-wrap: wrap;">
                <a href="#quote" class="sp-btn sp-btn-cta">Get a Free Quote</a>
                <a href="#call" class="sp-btn sp-btn-cta">Book a Call</a>
            </div>
        </div>
    </div>
</div>
@endsection