<?php
$pageTitle = "Lakshay Sharma | Indian Badminton Player";
$currentPage = "home";
include_once __DIR__ . '/includes/header.php';
?>

<!-- ================= HERO SECTION ================= -->
<section class="hero-section">
    <!-- Atmospheric Background Video with Opacity & Gradient Blending -->
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
            <!-- Badge Animation -->
            <div class="hero-badge-wrap anim-fade-in" style="--delay: 0.1s;">
                <span class="hero-badge-tag">INDIAN BADMINTON PLAYER</span>
                <span class="hero-badge-line anim-expand-line"></span>
            </div>

            <!-- Title: Lakshay Sharma in Title Capitalize format -->
            <h1 class="hero-title">
                <span class="hero-name-row hero-name-single-line">
                    <span class="hero-name-white anim-reveal-left" style="--delay: 0.25s;">Lakshay</span>
                    <span class="hero-name-lime anim-reveal-left" style="--delay: 0.45s;">Sharma</span>
                </span>
            </h1>

            <!-- Tagline: Dream. Train. Achieve. vertical stacked -->
            <div class="hero-tagline">
                <span class="tag-word anim-pop" style="--delay: 0.65s;">Dream.</span>
                <span class="tag-word anim-pop" style="--delay: 0.8s;">Train.</span>
                <span class="tag-word anim-pop text-lime" style="--delay: 0.95s;">Achieve.</span>
            </div>

            <!-- Bio with smooth upward fade -->
            <p class="hero-bio anim-fade-up" style="--delay: 1.1s;">
                A rising star from Ludhiana, Punjab, making India proud on the badminton court.
            </p>

            <!-- CTA button with bounce & glow -->
            <div class="hero-cta-wrap anim-fade-up" style="--delay: 1.25s;">
                <a href="about.php" class="btn-know-more">
                    <span>Know More</span>
                    <span class="btn-arrow">&rarr;</span>
                </a>
            </div>
        </div>

        <!-- Center-Right Hero Action Visual Composition (Action Cutout in Full Color) -->
        <div class="hero-visual">
            <div class="hero-composition-wrap">
                <!-- Action Cutout in Full Vibrant Color: Dynamic Badminton Player Cutout -->
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

    <!-- Quick Stats Bar -->
    <div class="hero-stats-bar">
        <div class="site-container stats-grid">
            <div class="stat-item">
                <div class="stat-icon"><i class="fa-solid fa-trophy"></i></div>
                <div class="stat-details">
                    <span class="stat-title">Silver Medal</span>
                    <span class="stat-sub">All-India Ranking (2025)</span>
                </div>
            </div>
            <div class="stat-item">
                <div class="stat-icon stat-icon-medal"><i class="fa-solid fa-medal"></i></div>
                <div class="stat-details">
                    <span class="stat-title">World Ranking</span>
                    <span class="stat-sub stat-highlight"><span class="counter" data-target="112">0</span> <small>(MS)</small></span>
                </div>
            </div>
            <div class="stat-item">
                <div class="stat-icon stat-icon-star"><i class="fa-solid fa-star"></i></div>
                <div class="stat-details">
                    <span class="stat-title">India Rank</span>
                    <span class="stat-sub stat-highlight"><span class="counter" data-target="4">0</span> <small>(MS)</small></span>
                </div>
            </div>
            <div class="stat-item">
                <div class="stat-icon"><i class="fa-solid fa-location-dot"></i></div>
                <div class="stat-details">
                    <span class="stat-title">From</span>
                    <span class="stat-sub">Ludhiana, Punjab</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ================= ABOUT LAKSHAY SECTION ================= -->
<section class="about-section" id="about">
    <div class="about-flush-layout">
        <!-- Left: Image with Hero Diagonal Stripes Transition -->
        <div class="about-visual reveal-on-scroll" data-reveal="slide-right">
            <div class="about-stripe-frame">
                <!-- Main Edge-to-Edge Photo -->
                <img src="assets/images/lakshay-sharma-11.webp" alt="Lakshay Sharma playing badminton" class="about-stripe-photo">
                
                <!-- Matching Parallel Diagonal Stripes from Hero (Right transition seam) -->
                <div class="about-diagonal-stripes" aria-hidden="true">
                    <svg viewBox="0 0 240 330" preserveAspectRatio="none" class="about-stripes-svg">
                        <!-- Background section color fill -->
                        <polygon points="60,0 240,0 240,330 220,330" fill="#f8fafc" />
                        <!-- Lime Green Parallel Stripe (#C6F135) -->
                        <polygon points="40,0 70,0 220,330 190,330" fill="#C6F135" />
                        <!-- Electric Blue Parallel Accent Stripe (#1769FF) -->
                        <polygon points="15,0 35,0 185,330 165,330" fill="#1769FF" />
                        <!-- Dark Navy Edge Seam (#101C35) -->
                        <polygon points="0,0 10,0 160,330 150,330" fill="#fbfbfc" />
                    </svg>
                </div>
            </div>
        </div>

        <!-- Right: Content with comfortable padding -->
        <div class="about-content reveal-on-scroll" data-reveal="slide-left">
            <div class="about-tag-wrap reveal-on-scroll" data-reveal="slide-left" data-delay="100">
                <span class="about-tag-bar"></span>
                <span class="about-tag-text">ABOUT LAKSHAY</span>
            </div>

            <h2 class="about-title reveal-on-scroll" data-reveal="slide-left" data-delay="200">
                <span class="about-line-1">A Journey of</span>
                <span class="about-line-2">Passion and <span class="about-highlight-lime anim-glow-text">Hard Work</span></span>
            </h2>

            <p class="about-description reveal-on-scroll" data-reveal="slide-left" data-delay="300">
                Lakshay Sharma, born in 2005, is a promising Indian badminton player from Ludhiana, Punjab. Known for his determination, skill and never-give-up attitude, he continues to inspire young athletes across the country.
            </p>

            <div class="about-cta-wrap reveal-on-scroll" data-reveal="slide-left" data-delay="400">
                <a href="about.php" class="btn-read-more">
                    <span>Read More</span>
                    <i class="fa-solid fa-arrow-right-long"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ================= ACHIEVEMENTS & MEDALS SECTION ================= -->
<section class="achievements-section" id="achievements">
    <div class="site-container">
        <div class="achievements-layout">
            <!-- Left Header & Info -->
            <div class="achievements-intro reveal-on-scroll" data-reveal="slide-right">
                <div class="achievements-tag-wrap">
                    <span class="achievements-tag-bar"></span>
                    <span class="achievements-tag-text">CAREER HIGHLIGHTS</span>
                </div>

                <h2 class="achievements-title">
                    Achievements<br>
                    <span class="achievements-title-lime">&amp; Medals</span>
                </h2>

                <p class="achievements-description">
                    A growing list of accolades at national and international levels.
                </p>

                <div class="achievements-cta-wrap">
                    <a href="achievements.php" class="btn-view-achievements">
                        View All Achievements
                    </a>
                </div>
            </div>

            <!-- Right Medal Cards Grid with Staggered Cascading Wave -->
            <div class="medal-cards-grid">
                <!-- Card 1: Silver Medal - All-India Senior Ranking -->
                <div class="medal-card reveal-on-scroll" data-reveal="card-pop" data-delay="100">
                    <div class="medal-icon-wrap">
                        <img src="assets/images/medal-silver-1.png" alt="Silver Medal" class="medal-3d-img">
                    </div>
                    <h3 class="medal-type medal-type-silver">Silver Medal</h3>
                    <p class="medal-tournament">All-India Senior</p>
                    <p class="medal-detail">Ranking Tournament</p>
                    <span class="medal-year">(2025)</span>
                </div>

                <!-- Card 2: Bronze Medal - Polish International -->
                <div class="medal-card reveal-on-scroll" data-reveal="card-pop" data-delay="220">
                    <div class="medal-icon-wrap">
                        <img src="assets/images/medal-bronze.png" alt="Bronze Medal" class="medal-3d-img">
                    </div>
                    <h3 class="medal-type medal-type-bronze">Bronze Medal</h3>
                    <p class="medal-tournament">Polish International</p>
                    <p class="medal-detail">Tournament</p>
                    <span class="medal-year">(2024)</span>
                </div>

                <!-- Card 3: Silver Medal - Kazakhstan International -->
                <div class="medal-card reveal-on-scroll" data-reveal="card-pop" data-delay="340">
                    <div class="medal-icon-wrap">
                        <img src="assets/images/medal-silver-2.png" alt="Silver Medal" class="medal-3d-img">
                    </div>
                    <h3 class="medal-type medal-type-silver">Silver Medal</h3>
                    <p class="medal-tournament">Kazakhstan</p>
                    <p class="medal-detail">International Series</p>
                    <span class="medal-year">(2023)</span>
                </div>

                <!-- Card 4: Gold Medal - Khelo India University Games -->
                <div class="medal-card reveal-on-scroll" data-reveal="card-pop" data-delay="460">
                    <div class="medal-icon-wrap">
                        <img src="assets/images/medal-gold.png" alt="Gold Medal" class="medal-3d-img">
                    </div>
                    <h3 class="medal-type medal-type-gold">Gold Medal</h3>
                    <p class="medal-tournament">Khelo India</p>
                    <p class="medal-detail">University Games</p>
                    <span class="medal-year">(2024)</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ================= MOMENTS ON COURT (GALLERY PREVIEW) ================= -->
<section class="court-moments-section" id="gallery">
    <!-- Atmospheric Background Image from Hero with Opacity & Gradient Blending -->
    <div class="moments-bg-media">
        <img src="assets/images/image7.jpg" alt="Badminton Court Backdrop" class="moments-bg-img">
        <div class="moments-bg-overlay"></div>
    </div>

    <!-- Geometric & Ambient Lighting Effects -->
    <div class="moments-bg-glow"></div>

    <!-- Right-side Diagonal Sports Accent Stripes from Mockup -->
    <div class="moments-diagonal-stripes" aria-hidden="true">
        <svg viewBox="0 0 350 400" preserveAspectRatio="none" class="moments-stripes-svg">
            <polygon points="120,400 170,400 350,140 350,60" fill="#1769FF" />
            <polygon points="210,400 275,400 350,290 350,190" fill="#C6F135" />
            <polygon points="310,400 350,400 350,340" fill="#FFFFFF" />
        </svg>
    </div>

    <div class="site-container">
        <div class="court-moments-layout">
            <!-- Left Info Column -->
            <div class="court-moments-intro reveal-on-scroll" data-reveal="slide-right">
                <div class="moments-tag-wrap">
                    <span class="moments-tag-bar"></span>
                    <span class="moments-tag-text">GALLERY</span>
                </div>

                <h2 class="moments-title">
                    Moments<br>
                    <span class="moments-title-lime">on Court</span>
                </h2>

                <p class="moments-description">
                    A glimpse of Lakshay's journey in badminton.
                </p>

                <div class="moments-cta-wrap">
                    <a href="gallery.php" class="btn-explore-gallery">
                        Explore Gallery
                    </a>
                </div>
            </div>

            <!-- Right 4-Photo Showcase Grid with Staggered Pop -->
            <div class="court-photos-grid">
                <!-- Photo 1 -->
                <a href="gallery.php" class="court-photo-card reveal-on-scroll" data-reveal="zoom-up" data-delay="100" aria-label="Lakshay Sharma on court">
                    <img src="assets/images/image2.jpg" alt="Lakshay Sharma India representation" loading="lazy">
                </a>

                <!-- Photo 2 -->
                <a href="gallery.php" class="court-photo-card reveal-on-scroll" data-reveal="zoom-up" data-delay="220" aria-label="Lakshay Sharma match action">
                    <img src="assets/images/image1.jpg" alt="Lakshay Sharma baseline court recovery" loading="lazy">
                </a>

                <!-- Photo 3 -->
                <a href="gallery.php" class="court-photo-card reveal-on-scroll" data-reveal="zoom-up" data-delay="340" aria-label="Lakshay Sharma match play">
                    <img src="assets/images/image3.jpg" alt="Lakshay Sharma match court focus" loading="lazy">
                </a>

                <!-- Photo 4 -->
                <a href="gallery.php" class="court-photo-card reveal-on-scroll" data-reveal="zoom-up" data-delay="460" aria-label="Lakshay Sharma international match">
                    <img src="assets/images/image8.jpg" alt="Lakshay Sharma European international challenge" loading="lazy">
                </a>
            </div>
        </div>
    </div>
</section>

<?php
include_once __DIR__ . '/includes/footer.php';
?>
