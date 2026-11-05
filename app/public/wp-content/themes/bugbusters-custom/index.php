
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="container nav-container">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
            <span class="logo-icon">&lt;/&gt;</span>
            BugBusters<span class="logo-dot">.</span>
        </a>

        <nav class="main-nav">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#team">Our Team</a>
            <a href="#projects">Projects</a>
            <a href="#contact" class="nav-button">Contact Us ↗</a>
        </nav>
    </div>
</header>

<main>

    <!-- HERO SECTION -->
    <section class="hero" id="home">
        <div class="container hero-content">

            <div class="hero-text">
                <span class="eyebrow">
                    <span class="status-dot"></span>
                    STUDENT DEVELOPMENT TEAM
                </span>

                <h1>
                    We build ideas<br>
                    into <span class="highlight">reality.</span>
                </h1>

                <p>
                    We are BugBusters, a team of passionate IT students
                    creating innovative digital solutions through
                    creativity, collaboration, and code.
                </p>

                <div class="hero-buttons">
                    <a href="#projects" class="btn-primary">
                        Explore Our Work ↗
                    </a>

                    <a href="#team" class="btn-secondary">
                        Meet the Team
                    </a>
                </div>

                <div class="hero-stats">
                    <div>
                        <strong>01</strong>
                        <span>Team</span>
                    </div>
                    <div>
                        <strong>∞</strong>
                        <span>Ideas</span>
                    </div>
                    <div>
                        <strong>100%</strong>
                        <span>Dedication</span>
                    </div>
                </div>
            </div>

            <div class="hero-visual">
                <div class="visual-card">
                    <div class="visual-top">
                        <span class="code-dot red"></span>
                        <span class="code-dot yellow"></span>
                        <span class="code-dot green"></span>
                        <span class="code-label">bugbusters.dev</span>
                    </div>

                    <div class="code-content">
                        <span class="code-comment">// Our mission</span>
                        <p>
                            <span class="code-purple">const</span>
                            team = {
                        </p>
                        <p class="code-indent">
                            name: <span class="code-green">"BugBusters"</span>,
                        </p>
                        <p class="code-indent">
                            passion: <span class="code-green">"Technology"</span>,
                        </p>
                        <p class="code-indent">
                            mission: <span class="code-green">"Build solutions"</span>
                        </p>
                        <p>};</p>

                        <div class="code-result">
                            <span class="status-dot"></span>
                            Ready to innovate...
                        </div>
                    </div>
                </div>

                <div class="floating-badge">
                    <span>✦</span> Built with passion
                </div>
            </div>

        </div>
    </section>

    <!-- ABOUT SECTION -->
    <section class="about section-padding" id="about">
        <div class="container">
            <div class="section-heading">
                <span class="eyebrow">WHO WE ARE</span>
                <h2>More than just <span class="highlight">coders.</span></h2>
                <p>
                    We are a group of aspiring IT professionals driven
                    by curiosity, innovation, and the desire to make
                    technology meaningful.
                </p>
            </div>

            <div class="about-grid">
                <div class="about-card">
                    <div class="card-icon">✦</div>
                    <h3>Innovation</h3>
                    <p>
                        We turn creative ideas into practical
                        and meaningful digital solutions.
                    </p>
                </div>

                <div class="about-card">
                    <div class="card-icon">⌘</div>
                    <h3>Collaboration</h3>
                    <p>
                        We combine our skills and knowledge
                        to achieve greater results together.
                    </p>
                </div>

                <div class="about-card">
                    <div class="card-icon">⚡</div>
                    <h3>Continuous Learning</h3>
                    <p>
                        We embrace challenges and continuously
                        improve our technical skills.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- TEAM SECTION -->
    <section class="team section-padding" id="team">
        <div class="container">
            <div class="section-heading">
                <span class="eyebrow">THE PEOPLE BEHIND THE CODE</span>
                <h2>Meet our <span class="highlight">team.</span></h2>
                <p>
                    The minds, creativity, and dedication
                    behind BugBusters.
                </p>
            </div>

            <div class="team-grid">

                <div class="team-card">
                    <div class="member-image">
                        <span>01</span>
                    </div>
                    <h3>Team Member 01</h3>
                    <p>Web Developer</p>
                </div>

                <div class="team-card">
                    <div class="member-image">
                        <span>02</span>
                    </div>
                    <h3>Team Member 02</h3>
                    <p>UI/UX Designer</p>
                </div>

                <div class="team-card">
                    <div class="member-image">
                        <span>03</span>
                    </div>
                    <h3>Team Member 03</h3>
                    <p>Mobile Developer</p>
                </div>

                <div class="team-card">
                    <div class="member-image">
                        <span>04</span>
                    </div>
                    <h3>Team Member 04</h3>
                    <p>Backend Developer</p>
                </div>

            </div>
        </div>
    </section>

    <!-- PROJECTS SECTION -->
    <section class="projects section-padding" id="projects">
        <div class="container">
            <div class="section-heading">
                <span class="eyebrow">WHAT WE CREATE</span>
                <h2>Featured <span class="highlight">projects.</span></h2>
                <p>
                    A showcase of our academic projects,
                    experiments, and digital creations.
                </p>
            </div>

            <div class="project-grid">

                <div class="project-card">
                    <div class="project-preview preview-one">
                        <span>&lt;/&gt;</span>
                    </div>
                    <div class="project-info">
                        <span class="project-category">WEB DEVELOPMENT</span>
                        <h3>Project One</h3>
                        <p>
                            A web-based system designed to
                            solve real-world problems.
                        </p>
                        <a href="#contact">View Project ↗</a>
                    </div>
                </div>

                <div class="project-card">
                    <div class="project-preview preview-two">
                        <span>✦</span>
                    </div>
                    <div class="project-info">
                        <span class="project-category">MOBILE DEVELOPMENT</span>
                        <h3>Project Two</h3>
                        <p>
                            A mobile application focused on
                            accessibility and user experience.
                        </p>
                        <a href="#contact">View Project ↗</a>
                    </div>
                </div>

                <div class="project-card">
                    <div class="project-preview preview-three">
                        <span>⌘</span>
                    </div>
                    <div class="project-info">
                        <span class="project-category">IOT DEVELOPMENT</span>
                        <h3>Project Three</h3>
                        <p>
                            An innovative technology project
                            integrating hardware and software.
                        </p>
                        <a href="#contact">View Project ↗</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- CONTACT SECTION -->
    <section class="contact section-padding" id="contact">
        <div class="container contact-content">
            <span class="eyebrow">LET'S CONNECT</span>
            <h2>Have an idea?<br>
                <span class="highlight">Let's build it.</span>
            </h2>
            <p>
                Interested in collaborating or learning more
                about our projects? We'd love to hear from you.
            </p>

            <a href="mailto:bugbusters@example.com" class="btn-primary">
                Get in Touch ↗
            </a>
        </div>
    </section>

</main>

<footer class="site-footer">
    <div class="container footer-content">
        <a href="#home" class="logo">
            <span class="logo-icon">&lt;/&gt;</span>
            BugBusters<span class="logo-dot">.</span>
        </a>

        <p>© <?php echo date('Y'); ?> BugBusters Team. All rights reserved.</p>

        <a href="#home" class="back-top">Back to top ↑</a>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
