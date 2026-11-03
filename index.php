<?php
/**
 * LAKSHAY SHARMA - OFFICIAL PORTFOLIO (CONCEPT 2)
 * Designed after: Lakshay Sharma Badminton Portfolio (3).png Mockup
 * Uses existing includes/header.php and includes/footer.php with site-container width alignment
 */
$pageTitle = "Lakshay Sharma | Badminton Player (Concept 2)";
$currentPage = "home";
$homeUrl = "index2.php";
include_once __DIR__ . '/includes/header.php';
?>

<!-- Concept 2 Specific Stylesheet -->
<link rel="stylesheet" href="assets/css/style2.css?v=<?php echo time(); ?>">

<!-- ================= 1. HERO SECTION ================= -->
<section class="hero-section" id="home">
    <!-- Atmospheric Background Video with Opacity & Gradient Blending (Exact index.php Hero Video) -->
    <div class="hero-bg-media">
        <video class="hero-bg-video" autoplay muted loop playsinline poster="assets/images/image7.jpg">
            <source src="assets/images/bgvdeio.mp4" type="video/mp4">
        </video>
        <div class="hero-bg-overlay"></div>
    </div>

    <!-- Geometric & Lighting Effects -->
    <div class="hero-bg-shapes">
        <div class="shape-glow anim-pulse"></div>
        <div class="shape-stripe stripe-1 anim-slide-stripe-1"></div>
        <div class="shape-stripe stripe-2 anim-slide-stripe-2"></div>
        <div class="shape-stripe stripe-3 anim-slide-stripe-3"></div>
    </div>

    <div class="site-container hero-container">
        <!-- Left Animated Content -->
        <div class="hero-content">
            <!-- Badge Animation: FROM PRODIGY TO PODIUM -->
            <div class="hero-badge-wrap anim-fade-in" style="--delay: 0.1s;">
                <span class="hero-badge-line anim-expand-line"></span>
                <span class="hero-badge-tag" style="font-weight: 800; letter-spacing: 2px;">FROM PRODIGY TO PODIUM</span>
                <span class="hero-badge-line anim-expand-line"></span>
            </div>

            <!-- Title: Lakshay Sharma in ONE LINE -->
            <h1 class="hero-title">
                <span class="hero-name-row hero-name-single-line">
                    <span class="hero-name-white anim-reveal-left" style="--delay: 0.25s; font-weight: 900;">Lakshay</span>
                    <span class="hero-name-lime anim-reveal-left" style="--delay: 0.45s; font-weight: 900;">Sharma.</span>
                </span>
            </h1>

            <!-- Tagline Badges: LAKSHAY KA LAKSH & OLYMPIC MEDAL. -->
            <div class="hero-laksh-badge-box anim-pop" style="--delay: 0.6s;">
                <span class="hero-laksh-pill">LAKSHAY KA LAKSH</span>
                <span class="hero-laksh-pill hero-laksh-pill-outline">OLYMPIC MEDAL.</span>
            </div>

            <!-- Description (Crisp 2 lines) -->
            <p class="hero-bio anim-fade-up" style="--delay: 0.85s;">
                Naturally gifted and fiercely competitive, Lakshay combines exceptional athleticism with lightning-fast baseline coverage and fearless attacking play.
            </p>

            <!-- Hero Statistics Bar (5 Metrics across) -->
            <div class="hero2-stats-row hero-stats-5col anim-fade-up" style="--delay: 1.1s;">
                <div class="hero2-stat-item">
                    <span class="hero2-stat-num"><span class="counter" data-target="105">0</span></span>
                    <span class="hero2-stat-lbl">Highest Rank</span>
                </div>
                <div class="hero2-stat-divider"></div>
                <div class="hero2-stat-item">
                    <span class="hero2-stat-num"><span class="counter" data-target="2">0</span></span>
                    <span class="hero2-stat-lbl">Total Weeks</span>
                </div>
                <div class="hero2-stat-divider"></div>
                <div class="hero2-stat-item">
                    <span class="hero2-stat-num"><span class="counter" data-target="2">0</span></span>
                    <span class="hero2-stat-lbl">Consecutive Weeks</span>
                </div>
                <div class="hero2-stat-divider"></div>
                <div class="hero2-stat-item">
                    <span class="hero2-stat-num"><span class="counter" data-target="4">0</span></span>
                    <span class="hero2-stat-lbl">India Ranking</span>
                </div>
                <div class="hero2-stat-divider"></div>
                <div class="hero2-stat-item">
                    <span class="hero2-stat-num stat-lime stat-ind-flag">
                        <span class="india-flag-badge" aria-label="Flag of India">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 225 150" class="india-flag-svg">
                                <rect width="225" height="150" fill="#ffffff" />
                                <rect width="225" height="50" fill="#FF9933" />
                                <rect y="100" width="225" height="50" fill="#138808" />
                                <circle cx="112.5" cy="75" r="20" fill="none" stroke="#000080" stroke-width="2.5" />
                                <circle cx="112.5" cy="75" r="4" fill="#000080" />
                                <g stroke="#000080" stroke-width="1.2">
                                    <line x1="112.5" y1="55" x2="112.5" y2="95" />
                                    <line x1="92.5" y1="75" x2="132.5" y2="75" />
                                    <line x1="98.36" y1="60.86" x2="126.64" y2="89.14" />
                                    <line x1="98.36" y1="89.14" x2="126.64" y2="60.86" />
                                    <line x1="102.15" y1="56.76" x2="122.85" y2="93.24" />
                                    <line x1="102.15" y1="93.24" x2="122.85" y2="56.76" />
                                    <line x1="107.32" y1="55.45" x2="117.68" y2="94.55" />
                                    <line x1="107.32" y1="94.55" x2="117.68" y2="55.45" />
                                    <line x1="94.24" y1="64.65" x2="130.76" y2="85.35" />
                                    <line x1="94.24" y1="85.35" x2="130.76" y2="64.65" />
                                    <line x1="92.95" y1="69.82" x2="132.05" y2="80.18" />
                                    <line x1="92.95" y1="80.18" x2="132.05" y2="69.82" />
                                </g>
                            </svg>
                        </span>
                        <span>IND</span>
                    </span>
                    <span class="hero2-stat-lbl">Country</span>
                </div>
            </div>

            <!-- CTA button (AFTER Statistics) -->
            <div class="hero-cta-wrap anim-fade-up" style="--delay: 1.35s;">
                <a href="#about" class="btn-know-more btn-explore-journey">
                    <span>Explore My Journey</span>
                    <span class="btn-arrow">&rarr;</span>
                </a>
            </div>
        </div>

        <!-- Center-Right Hero Action Visual Composition with Dynamic Badminton Player Cutout -->
        <div class="hero-visual">
            <div class="hero-composition-wrap">
                <!-- Action Cutout: Dynamic Badminton Player Cutout -->
                <div class="hero-action-cutout anim-fade-in" style="--delay: 0.4s;">
                    <img src="assets/images/Dynamic Badminton Player Cutout.png" alt="Lakshay Sharma Badminton Action" class="action-cutout-img">
                </div>
            </div>

            <!-- Diagonal Energy Stripes from Mockup (Anchored to right edge) -->
            <div class="mockup-diagonal-stripes" aria-hidden="true">
                <svg viewBox="0 0 320 330" preserveAspectRatio="none" class="mockup-stripes-svg">
                    <!-- Corner White Shape -->
                    <polygon points="170,330 320,180 320,330" fill="#FFFFFF" />
                    <!-- Lime Green Wide Stripe (#C6F135) -->
                    <polygon points="90,330 150,330 320,160 320,100" fill="#C6F135" />
                    <!-- Electric Blue Narrow Accent Stripe (#1769FF) -->
                    <polygon points="20,330 45,330 320,55 320,30" fill="#1769FF" />
                </svg>
            </div>
        </div>
    </div>

    <!-- Freestyle Slanted Section Divider into About Section -->
    <div class="sec2-divider" aria-hidden="true">
        <svg viewBox="0 0 1440 65" preserveAspectRatio="none">
            <polygon points="0,65 1440,0 1440,65 0,65" fill="#ffffff" />
        </svg>
    </div>
</section>

<!-- ================= 2. ABOUT LAKSHAY SECTION (LIGHT) ================= -->
<section class="about2-section" id="about">
    <div class="site-container">
        <div class="about2-grid">
            <!-- Left: Cutout + Polygon Accents -->
            <div class="about2-left-visual sec2-anim-hidden sec2-anim-left">
                <div class="about2-photo-frame">
                    <svg class="about2-bg-polygons" viewBox="0 0 320 360" preserveAspectRatio="none">
                        <polygon points="0,60 120,0 260,30 200,340 40,320" fill="#f1f5f9" />
                        <polygon points="80,20 180,0 240,60 180,180" fill="#C6F135" opacity="0.3" />
                    </svg>
                    <img src="assets/images/FACECOUTOUT.png" alt="Lakshay Sharma focused portrait" class="about2-photo-img">
                    <img src="assets/images/footer-shuttlecock.png" alt="Shuttlecock" class="about2-shuttle-accent">
                </div>
            </div>

            <!-- Center: Content -->
            <div class="about2-center-content sec2-anim-hidden sec2-anim-up delay-1">
                <div class="kicker-slashes-wrap">
                    <span class="kicker-slashes">///</span>
                    <span class="kicker-text-dark">ABOUT LAKSHAY</span>
                </div>

                <h2 class="sec2-title-dark">
                    The Person<br class="desktop-only-br"> Behind The Racket.
                </h2>

                <p class="sec2-desc-dark">
                    A rising force in Indian badminton, his talent, determination, and achievements across competitive circuits fuel his pursuit of Olympic glory. Discover the values and play that drive Lakshay Sharma.
                </p>

                <div>
                    <a href="about.php" class="btn2-outline-dark">
                        <span>Know More</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Right: 3 Feature Rows with Icons -->
            <div class="about2-right-features sec2-anim-hidden sec2-anim-right delay-2">
                <!-- Feature 1 -->
                <div class="feature2-row">
                    <div class="feature2-icon">
                        <i class="fa-solid fa-feather-pointed"></i>
                    </div>
                    <div>
                        <h4 class="feature2-title">Playing Style</h4>
                        <p class="feature2-desc">Swift Baseline &amp; Volley Attacker</p>
                    </div>
                </div>

                <!-- Feature 2 -->
                <div class="feature2-row">
                    <div class="feature2-icon">
                        <i class="fa-solid fa-bolt"></i>
                    </div>
                    <div>
                        <h4 class="feature2-title">Athletic Profile</h4>
                        <p class="feature2-desc">Athletically Gifted &bull; Child Prodigy</p>
                    </div>
                </div>

                <!-- Feature 3 -->
                <div class="feature2-row">
                    <div class="feature2-icon">
                        <i class="fa-solid fa-medal"></i>
                    </div>
                    <div>
                        <h4 class="feature2-title">Enviable Record</h4>
                        <p class="feature2-desc">A Cut Above the Rest Across Circuits</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Freestyle Curved Wave Divider into Journey Section -->
    <div class="sec2-divider" aria-hidden="true">
        <svg viewBox="0 0 1440 85" preserveAspectRatio="none">
            <path d="M0,0 Q360,110 720,40 T1440,25 L1440,85 L0,85 Z" fill="#0b1528" />
        </svg>
    </div>
</section>

<!-- ================= 3. MY JOURNEY SECTION (DARK WITH TIMELINE) ================= -->
<section class="journey2-section" id="journey">
    <!-- Player Action Background Backdrop -->
    <div class="journey2-bg-backdrop" aria-hidden="true">
        <img src="assets/images/image8.jpg" alt="Lakshay Sharma Journey Background" loading="lazy">
    </div>

    <div class="site-container">
        <div class="journey2-grid">
            <!-- Left: Intro & CTA -->
            <div class="sec2-anim-hidden sec2-anim-left">
                <div class="kicker-line-wrap">
                    <span class="kicker-text">MY JOURNEY</span>
                    <span class="kicker-line"></span>
                </div>

                <h2 class="sec2-title-light">
                    The Road So Far.
                </h2>

                <p class="sec2-desc-light">
                    From a young dreamer to a determined athlete, this is the story of my growth in badminton.
                </p>

                <div>
                    <a href="about.php" class="btn2-lime">
                        <span>Discover My Journey</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Right: Interactive Career Timeline (Mockup Style) -->
            <div class="journey2-timeline-wrap sec2-anim-hidden sec2-anim-up delay-2">
                <div class="timeline2-track-line"></div>
                <div class="timeline2-nodes-grid">
                    <!-- Node 1 -->
                    <div class="timeline2-node">
                        <div class="timeline2-icon-wrap">
                            <i class="fa-solid fa-baby"></i>
                        </div>
                        <div class="timeline2-dot"></div>
                        <div class="timeline2-text-wrap">
                            <span class="timeline2-year">2005</span>
                            <span class="timeline2-caption">Born in<br>Ludhiana, Punjab</span>
                        </div>
                    </div>

                    <!-- Node 2 -->
                    <div class="timeline2-node">
                        <div class="timeline2-icon-wrap">
                            <i class="fa-solid fa-feather-pointed"></i>
                        </div>
                        <div class="timeline2-dot"></div>
                        <div class="timeline2-text-wrap">
                            <span class="timeline2-caption-only">First Encounter<br>With Badminton</span>
                        </div>
                    </div>

                    <!-- Node 3 -->
                    <div class="timeline2-node">
                        <div class="timeline2-icon-wrap">
                            <i class="fa-solid fa-chart-line"></i>
                        </div>
                        <div class="timeline2-dot"></div>
                        <div class="timeline2-text-wrap">
                            <span class="timeline2-caption-only">Training &<br>Development</span>
                        </div>
                    </div>

                    <!-- Node 4 -->
                    <div class="timeline2-node is-highlight">
                        <div class="timeline2-icon-wrap">
                            <i class="fa-solid fa-award"></i>
                        </div>
                        <div class="timeline2-dot"></div>
                        <div class="timeline2-text-wrap">
                            <span class="timeline2-caption-only">The Road<br>Ahead</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ================= 4. ACHIEVEMENTS SECTION (LIGHT GRID) ================= -->
<section class="achieve2-section" id="achievements">
    <div class="site-container">
        <div class="achieve2-grid">
            <!-- Left: Intro & CTA -->
            <div class="sec2-anim-hidden sec2-anim-left">
                <div class="kicker-slashes-wrap">
                    <span class="kicker-slashes">///</span>
                    <span class="kicker-text-dark">ACHIEVEMENTS</span>
                    <span class="kicker-line" style="background-color: var(--text-dark);"></span>
                </div>

                <h2 class="sec2-title-dark">
                    Results That<br>Matter.
                </h2>

                <p class="sec2-desc-dark">
                    A record of hard-earned medals and notable tournament victories.
                </p>

                <div>
                    <a href="achievements.php" class="btn2-lime">
                        <span>View All Achievements</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Right: 4 Medals & Trophy Columns -->
            <div class="medals2-grid">
                <!-- Gold Medal -->
                <div class="medal2-card sec2-anim-hidden sec2-anim-up delay-1">
                    <div class="medal2-img-wrap">
                        <img src="assets/images/Shiny Gold Star Medal with Red Ribbon.png" alt="Shiny Gold Star Medal" class="medal2-img">
                    </div>
                    <h4 class="medal2-title">Gold Medal</h4>
                    <span class="medal2-sub">(Year)</span>
                </div>

                <!-- Silver Medal -->
                <div class="medal2-card sec2-anim-hidden sec2-anim-up delay-2">
                    <div class="medal2-img-wrap">
                        <img src="assets/images/Silver Star Medal with Red Ribbon.png" alt="Silver Star Medal" class="medal2-img">
                    </div>
                    <h4 class="medal2-title">Silver Medal</h4>
                    <span class="medal2-sub">(Year)</span>
                </div>

                <!-- Bronze Medal -->
                <div class="medal2-card sec2-anim-hidden sec2-anim-up delay-3">
                    <div class="medal2-img-wrap">
                        <img src="assets/images/Bronze Star Medal with Red Ribbon.png" alt="Bronze Star Medal" class="medal2-img">
                    </div>
                    <h4 class="medal2-title">Bronze Medal</h4>
                    <span class="medal2-sub">(Year)</span>
                </div>

                <!-- Championship Trophy -->
                <div class="medal2-card sec2-anim-hidden sec2-anim-up delay-4">
                    <div class="medal2-img-wrap">
                        <img src="assets/images/Golden Badminton Championship Trophy.png" alt="Golden Badminton Championship Trophy" class="medal2-img">
                    </div>
                    <h4 class="medal2-title">Championship Title</h4>
                    <span class="medal2-sub">(Year)</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ================= 5. ON THE COURT (GALLERY - DARK PARALLELOGRAMS) ================= -->
<section class="gallery2-section" id="gallery">
    <!-- Clean Parallel Neon Diagonal Energy Stripes Flush at End of Section -->
    <div class="gallery2-neon-accent" aria-hidden="true">
        <svg viewBox="0 0 60 300" preserveAspectRatio="none" class="gallery2-neon-svg">
            <!-- Electric Blue Parallel Accent Stripe -->
            <polygon points="18,0 32,0 0,300 0,300" fill="#1769FF" opacity="0.85" />
            <!-- Neon Lime Parallel Accent Stripe Anchored completely flush to Right Edge -->
            <polygon points="38,0 60,0 20,300 0,300" fill="#C6F135" />
        </svg>
    </div>

    <div class="site-container">
        <div class="gallery2-grid">
            <!-- Left: Intro & CTA -->
            <div class="gallery2-intro sec2-anim-hidden sec2-anim-left">
                <div class="kicker-line-wrap">
                    <span class="kicker-text">ON THE COURT</span>
                    <span class="kicker-line"></span>
                </div>

                <h2 class="gallery2-title">
                    The Game<br>In Action.
                </h2>

                <p class="gallery2-desc">
                    Match moments, training sessions and unforgettable shots.
                </p>

                <div>
                    <a href="gallery.php" class="btn2-lime">
                        <span>Explore Gallery</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Right: 3 Slanted Parallelogram Photo Cards -->
            <div class="court-cards2-grid">
                <!-- Photo 1: Focused Badminton Player at Yonex Championship -->
                <div class="parallelogram-card sec2-anim-hidden sec2-anim-up delay-1">
                    <img src="assets/images/Focused Badminton Player at Yonex Championship.png" alt="Focused Badminton Player at Yonex Championship" loading="lazy">
                </div>

                <!-- Photo 2: Midair Badminton Championship Rally -->
                <div class="parallelogram-card sec2-anim-hidden sec2-anim-up delay-2">
                    <img src="assets/images/Midair Badminton Championship Rally.png" alt="Midair Badminton Championship Rally" loading="lazy">
                </div>

                <!-- Photo 3: Intense Badminton Match in a Stadium -->
                <div class="parallelogram-card sec2-anim-hidden sec2-anim-up delay-3">
                    <img src="assets/images/Intense Badminton Match in a Stadium.png" alt="Intense Badminton Match in a Stadium" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ================= 6. LET'S CONNECT (CONTACT SECTION) ================= -->
<section class="connect2-section" id="contact">
    <div class="connect2-flush-layout">
        <!-- Left: Full Flush Edge-to-Edge Cinematic Badminton Arena Image -->
        <div class="connect2-cinema-frame sec2-anim-hidden sec2-anim-scale">
            <img src="assets/images/Shuttlecock Flyby in a Badminton Arena.png" alt="Shuttlecock Flyby in a Badminton Arena" class="connect2-cinema-img">
            <!-- Slanted Neon Polygon Border Transition on Right Edge -->
            <div class="connect2-neon-border" aria-hidden="true">
                <svg viewBox="0 0 100 275" preserveAspectRatio="none">
                    <!-- Dark navy accent seam -->
                    <polygon points="70,0 74,0 4,275 0,275" fill="#101C35" />
                    <!-- Electric Blue Parallel Stripe (#1769FF) -->
                    <polygon points="74,0 84,0 14,275 4,275" fill="#1769FF" />
                    <!-- Neon Lime Parallel Stripe (#C6F135) ending flush with outer diagonal cut -->
                    <polygon points="84,0 100,0 30,275 14,275" fill="#C6F135" />
                </svg>
            </div>
        </div>

        <!-- Right: Content (Comfortable Padding Aligned with Site Container) -->
        <div class="connect2-content-wrap">
            <div class="connect2-content sec2-anim-hidden sec2-anim-right delay-2">
                <h2 class="connect2-title">
                    Let's Connect.
                </h2>
                <p class="connect2-desc">
                    Interested in collaborations, sponsorships or simply a hello? Let's connect!
                </p>
                <a href="contact.php" class="btn2-lime">
                    <span>Get In Touch</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<?php
// Existing shared footer
include_once __DIR__ . '/includes/footer.php';
?>
