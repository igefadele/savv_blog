<?php
    $pageTitle = "Welcome — Your Brand Name | Savv Web Framework Starter";
    $pageDescription = "We build things that matter. Powered by Savv Web Framework";

    // Start capturing the HTML content
    ob_start();
?>
<div>
    <!-- HERO -->
    <section class="hero">
        <div class="hero-bg"></div>
        <div class="hero-grid"></div>
        <div class="hero-content">
            <div class="hero-badge">
                <span></span> Open for new projects
            </div>
            <h1>We build things<br>that <em>matter.</em></h1>
            <p class="hero-sub">
                A boutique studio crafting high-quality digital experiences
                for brands that want to stand out. Strategy, design, and engineering
                — all under one roof.
            </p>
            <div class="hero-actions">
                <a class="btn-primary" href="#services">Our services</a>
                <a class="btn-ghost" href="#contact">Start a project</a>
            </div>

            <div class="stats-row">
                <div class="stat-item">
                    <span class="stat-num">50+</span>
                    <span class="stat-label">Projects Delivered</span>
                </div>
                <div class="stat-item">
                    <span class="stat-num">8 yrs</span>
                    <span class="stat-label">In the Field</span>
                </div>
                <div class="stat-item">
                    <span class="stat-num">98%</span>
                    <span class="stat-label">Client Satisfaction</span>
                </div>
                <div class="stat-item">
                    <span class="stat-num">12+</span>
                    <span class="stat-label">Industries Served</span>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES -->
    <section id="services" class="services">
        <div>
            <span class="section-label">// What we do</span>
            <h2>Services built for<br>real outcomes.</h2>
            <p class="section-sub">We don't just deliver output — we deliver results. Every engagement is scoped to
                solve a real business problem.</p>
        </div>
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">⚡</div>
                <h3>Web Development</h3>
                <p>Fast, scalable websites and web applications built with modern technologies. From landing pages to
                    full platforms.</p>
            </div>
            <div class="service-card">
                <div class="service-icon">🎨</div>
                <h3>Brand & Design</h3>
                <p>Visual identity systems, UI design, and brand strategy that communicate what makes you different.</p>
            </div>
            <div class="service-card">
                <div class="service-icon">📈</div>
                <h3>Digital Strategy</h3>
                <p>Research-backed strategy sessions that align your digital presence with your business goals.</p>
            </div>
            <div class="service-card">
                <div class="service-icon">🔧</div>
                <h3>Ongoing Support</h3>
                <p>Maintenance, performance monitoring, and continuous improvement — so you never feel left behind.</p>
            </div>
            <div class="service-card">
                <div class="service-icon">📱</div>
                <h3>Mobile Experience</h3>
                <p>Responsive-first development and PWA capabilities that make your site feel native on any device.</p>
            </div>
            <div class="service-card">
                <div class="service-icon">🔒</div>
                <h3>Security & Performance</h3>
                <p>Hardened configurations, performance audits, and best-in-class page speed scores that win rankings.
                </p>
            </div>
        </div>
    </section>

    <!-- ABOUT -->
    <section id="about" class="about">
        <span class="section-label">// Who we are</span>
        <div class="about-inner">
            <blockquote class="about-quote">
                "We treat every client's project as if it were <em>our own</em> — because we know what it costs to get
                it wrong."
            </blockquote>
            <ul class="about-list">
                <li>Founded on the belief that small businesses deserve world-class digital experiences</li>
                <li>A tight-knit team of designers, engineers, and strategists who care deeply about craft</li>
                <li>We work with founders, studios, and established businesses globally</li>
                <li>Every project starts with understanding your audience, not your colour palette</li>
                <li>We measure success by your growth, not by our deliverable checklist</li>
            </ul>
        </div>
    </section>

    <!-- PROCESS -->
    <section id="process">
        <span class="section-label">// How it works</span>
        <h2>A process that respects<br>your time.</h2>
        <p class="section-sub">No endless back-and-forth. A structured engagement that moves from discovery to delivery
            with purpose.</p>
        <div class="process-steps">
            <div class="step">
                <h3>Discovery</h3>
                <p>We learn your business, your audience, and the problem we're solving together. No assumptions.</p>
            </div>
            <div class="step">
                <h3>Strategy</h3>
                <p>A clear plan with milestones, technology choices, and success metrics agreed upfront.</p>
            </div>
            <div class="step">
                <h3>Build</h3>
                <p>Iterative development with regular check-ins. You see progress, not just the final result.</p>
            </div>
            <div class="step">
                <h3>Launch</h3>
                <p>Rigorous testing, performance checks, and a smooth handover. We don't disappear post-launch.</p>
            </div>
        </div>
    </section>

    <!-- CONTACT -->
    <section id="contact" class="contact">
        <span class="section-label">// Get in touch</span>
        <h2>Let's start something<br>worth building.</h2>
        <p class="section-sub">Whether you have a fully formed brief or just an idea — we'd love to hear from you.</p>
        <div class="contact-inner">
            <div class="contact-info">
                <a class="contact-link" href="mailto:hello@yourbrand.com">
                    <div class="contact-link-icon">✉️</div>
                    <div class="contact-link-text">
                        <span class="contact-link-label">Email</span>
                        <span class="contact-link-value">hello@yourbrand.com</span>
                    </div>
                </a>
                <a class="contact-link" href="tel:+10000000000">
                    <div class="contact-link-icon">📞</div>
                    <div class="contact-link-text">
                        <span class="contact-link-label">Phone</span>
                        <span class="contact-link-value">+1 (000) 000-0000</span>
                    </div>
                </a>
                <a class="contact-link" href="https://wa.me/10000000000" target="_blank" rel="noopener">
                    <div class="contact-link-icon">💬</div>
                    <div class="contact-link-text">
                        <span class="contact-link-label">WhatsApp</span>
                        <span class="contact-link-value">Chat with us directly</span>
                    </div>
                </a>
                <a class="contact-link" href="https://linkedin.com/company/yourbrand" target="_blank" rel="noopener">
                    <div class="contact-link-icon">💼</div>
                    <div class="contact-link-text">
                        <span class="contact-link-label">LinkedIn</span>
                        <span class="contact-link-value">Connect professionally</span>
                    </div>
                </a>
            </div>
            <form class="contact-form" onsubmit="return false;">
                <div class="field">
                    <label>Your name</label>
                    <input type="text" placeholder="Jane Smith">
                </div>
                <div class="field">
                    <label>Email address</label>
                    <input type="email" placeholder="jane@company.com">
                </div>
                <div class="field">
                    <label>What do you need?</label>
                    <select>
                        <option value="">— Select a service —</option>
                        <option>Web Development</option>
                        <option>Brand & Design</option>
                        <option>Digital Strategy</option>
                        <option>Ongoing Support</option>
                        <option>Something else</option>
                    </select>
                </div>
                <div class="field">
                    <label>Tell us about your project</label>
                    <textarea placeholder="Describe your project, goals, and timeline..."></textarea>
                </div>
                <!-- Honeypot -->
                <input type="text" name="honeypot" style="display:none" tabindex="-1" autocomplete="off">
                <button type="submit" class="form-submit">Send message →</button>
            </form>
        </div>
    </section>
</div>


<?php 
    // Save the captured HTML into a variable
    $content = ob_get_clean(); 

    // Load the layout and inject the variable
    include ROOT_PATH . '/views/layouts/index.php'; 
?>