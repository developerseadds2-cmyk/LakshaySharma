<?php
/**
 * LAKSHAY SHARMA - OFFICIAL BIOGRAPHY & PROFILE
 * Built from documented career profile records
 * Header in Dark Mode with Breadcrumb; Content Body in Light Mode
 */
$pageTitle = "About Lakshay Sharma | Indian Badminton Player";
$currentPage = "about";
include_once __DIR__ . '/includes/header.php';
?>

<!-- Concept 2 Athletic Aesthetics / Responsive Support -->
<link rel="stylesheet" href="assets/css/style2.css?v=<?php echo time(); ?>">

<style>
/* Base page styling */
body {
    background-color: #f8fafc;
    color: #0b1528;
}

/* ==========================================================================
   1. HERO BANNER & BREADCRUMBS (DARK MODE ONLY)
   ========================================================================== */
.page-header-dark {
    position: relative;
    padding: 3.8rem 0 3.2rem 0;
    background: linear-gradient(180deg, rgba(16, 28, 53, 0.88) 0%, rgba(9, 16, 32, 0.94) 100%),
                url('assets/images/Intense Badminton Match in a Stadium.png') center center / cover no-repeat;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    overflow: hidden;
}

.page-header-dark::before {
    content: '';
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at 85% 15%, rgba(23, 105, 255, 0.35) 0%, transparent 60%),
                radial-gradient(circle at 10% 85%, rgba(198, 241, 53, 0.15) 0%, transparent 50%),
                linear-gradient(rgba(255, 255, 255, 0.02) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255, 255, 255, 0.02) 1px, transparent 1px);
    background-size: auto, auto, 50px 50px, 50px 50px;
    pointer-events: none;
}

.page-breadcrumb {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    font-size: 0.82rem;
    font-weight: 600;
    color: #8e9bb0;
    margin-bottom: 1.25rem;
    position: relative;
    z-index: 2;
}

.page-breadcrumb a {
    color: #DCE3EC;
    transition: color 0.2s ease;
    display: inline-flex;
    align-items: center;
    gap: 0.35rem;
}

.page-breadcrumb a:hover {
    color: var(--color-lime);
}

.page-breadcrumb .crumb-sep {
    color: rgba(255, 255, 255, 0.3);
    font-size: 0.75rem;
}

.page-breadcrumb .crumb-current {
    color: var(--color-lime);
    font-weight: 700;
}

.page-kicker-dark {
    display: inline-flex;
    align-items: center;
    gap: 0.65rem;
    font-size: 0.85rem;
    font-weight: 800;
    letter-spacing: 2.5px;
    color: var(--color-lime);
    text-transform: uppercase;
    margin-bottom: 0.85rem;
    position: relative;
    z-index: 2;
}

.page-kicker-slashes {
    color: var(--color-lime);
    font-weight: 900;
    letter-spacing: 2px;
}

.page-main-title-dark {
    font-size: clamp(2.4rem, 4.5vw, 3.8rem);
    font-weight: 900;
    font-style: italic;
    color: #ffffff;
    line-height: 1.1;
    margin-bottom: 0;
    letter-spacing: -0.5px;
    position: relative;
    z-index: 2;
}

.page-main-title-dark .mobile-only-br {
    display: none;
}

/* ==========================================================================
   2. CONTENT SECTIONS (LIGHT MODE)
   ========================================================================== */

.about-intro-section {
    padding: 4rem 0 3.5rem 0;
    background-color: #ffffff;
    border-bottom: 1px solid rgba(11, 21, 40, 0.08);
}

.about-intro-grid {
    display: grid;
    grid-template-columns: 1fr 1.25fr;
    gap: 4rem;
    align-items: center;
}

.about-photo-wrapper {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
}

.about-photo-card {
    position: relative;
    width: 100%;
    max-width: 420px;
    border-radius: 20px;
    overflow: hidden;
    background: #f1f5f9;
    box-shadow: 0 16px 36px rgba(11, 21, 40, 0.1);
    border: 1px solid rgba(11, 21, 40, 0.08);
}

.about-photo-card img {
    width: 100%;
    height: auto;
    display: block;
    object-fit: cover;
}

.about-bio-lead {
    font-size: 1.25rem;
    font-weight: 800;
    color: #0b1528;
    line-height: 1.5;
    margin-bottom: 1.25rem;
}

.about-bio-lead .bio-lead-br {
    display: none;
}

.about-bio-text {
    font-size: 1rem;
    color: #475569;
    line-height: 1.7;
    margin-bottom: 1.5rem;
}

/* Bio Quick Stats Grid */
.bio-facts-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1.25rem;
    margin-top: 2rem;
}

.bio-fact-item {
    background: #f8fafc;
    border: 1px solid rgba(11, 21, 40, 0.08);
    border-radius: 12px;
    padding: 1rem 1.25rem;
}

.bio-fact-label {
    font-size: 0.78rem;
    font-weight: 800;
    text-transform: uppercase;
    color: #64748b;
    letter-spacing: 1px;
    margin-bottom: 0.25rem;
}

.bio-fact-val {
    font-size: 1.05rem;
    font-weight: 800;
    color: #0b1528;
}

/* ==========================================================================
   NEW: CAREER JOURNEY & HIGHLIGHTS SECTION
   ========================================================================== */
.about-journey-section {
    padding: 4.5rem 0;
    background-color: #f8fafc;
    border-bottom: 1px solid rgba(11, 21, 40, 0.08);
}

.about-journey-grid {
    display: grid;
    grid-template-columns: 1.15fr 1fr;
    gap: 3.5rem;
    align-items: stretch;
}

.about-journey-card {
    background: #ffffff;
    border: 1px solid rgba(11, 21, 40, 0.08);
    border-radius: 18px;
    padding: 2.5rem 2.2rem;
    box-shadow: 0 6px 20px rgba(11, 21, 40, 0.04);
    display: flex;
    flex-direction: column;
    height: 100%;
    box-sizing: border-box;
}

.about-journey-title {
    font-size: 1.6rem;
    font-weight: 900;
    font-style: italic;
    color: #0b1528;
    margin-bottom: 1.25rem;
    display: flex;
    align-items: center;
    gap: 0.75rem;
}

.about-journey-title i {
    color: #1769FF;
}

.about-journey-text {
    font-size: 1rem;
    color: #475569;
    line-height: 1.75;
    margin-bottom: 1.2rem;
}

.about-journey-text:last-child {
    margin-bottom: 0;
}

.about-partner-box {
    background: linear-gradient(135deg, #101C35 0%, #0d172c 100%);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 18px;
    padding: 2.5rem 2.2rem;
    color: #ffffff;
    box-shadow: 0 12px 30px rgba(16, 28, 53, 0.15);
    display: flex;
    flex-direction: column;
    height: 100%;
    box-sizing: border-box;
}

.about-partner-desc:last-of-type {
    margin-bottom: auto !important;
    padding-bottom: 1.5rem;
}

.about-partner-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.35rem 0.9rem;
    background: rgba(198, 241, 53, 0.12);
    border: 1px solid rgba(198, 241, 53, 0.35);
    border-radius: 9999px;
    color: var(--color-lime);
    font-size: 0.78rem;
    font-weight: 800;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    margin-bottom: 1.25rem;
}

.about-partner-title {
    font-size: 1.6rem;
    font-weight: 900;
    font-style: italic;
    color: #ffffff;
    margin-bottom: 1rem;
    line-height: 1.25;
}

.about-partner-desc {
    font-size: 0.98rem;
    color: #DCE3EC;
    line-height: 1.7;
    margin-bottom: 1.8rem;
}

.about-partner-btn {
    display: inline-flex;
    align-items: center;
    gap: 0.65rem;
    background-color: var(--color-lime);
    color: #0b1528;
    font-weight: 800;
    font-size: 0.92rem;
    padding: 0.8rem 1.8rem;
    border-radius: 9999px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    transition: var(--transition);
}

.about-partner-btn:hover {
    background-color: #d7ff4d;
    box-shadow: 0 8px 24px rgba(198, 241, 53, 0.45);
    transform: translateY(-2px);
    color: #0b1528;
}

@media (max-width: 992px) {
    .about-journey-grid {
        grid-template-columns: 1fr;
        gap: 2rem;
    }
}

/* Pillars Section */
.about-pillars-section {
    padding: 4.5rem 0 5.5rem 0;
    background-color: #f8fafc;
}

.about-section-heading {
    text-align: center;
    margin-bottom: 3rem;
}

.about-section-title {
    font-size: clamp(2rem, 3.5vw, 2.8rem);
    font-weight: 900;
    font-style: italic;
    color: #0b1528;
    margin-bottom: 0.5rem;
}

.about-section-sub {
    font-size: 1rem;
    color: #64748b;
}

.pillars-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2rem;
}

.pillar-card {
    background: #ffffff;
    border: 1px solid rgba(11, 21, 40, 0.08);
    border-radius: 16px;
    padding: 2.2rem 1.8rem;
    box-shadow: 0 4px 15px rgba(11, 21, 40, 0.04);
    transition: transform 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease;
    display: flex;
    flex-direction: column;
}

.pillar-card:hover {
    transform: translateY(-5px);
    border-color: #1769FF;
    box-shadow: 0 16px 30px rgba(11, 21, 40, 0.09);
}

.pillar-icon {
    width: 52px;
    height: 52px;
    border-radius: 14px;
    background: #f1f5f9;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.4rem;
    color: #1769FF;
    margin-bottom: 1.5rem;
}

.pillar-title {
    font-size: 1.25rem;
    font-weight: 800;
    color: #0b1528;
    margin-bottom: 0.75rem;
}

.pillar-desc {
    font-size: 0.95rem;
    color: #64748b;
    line-height: 1.6;
}

/* Responsive Rules */
@media (max-width: 1024px) {
    .about-intro-grid {
        grid-template-columns: 1fr;
        gap: 1.25rem;
    }

    .pillars-grid {
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }
}

@media (max-width: 768px) {
    .page-header-dark {
        padding: 2.2rem 0 1.8rem 0;
        text-align: center;
    }

    .page-breadcrumb {
        justify-content: center;
        margin-bottom: 0.5rem;
    }

    .page-kicker-dark {
        justify-content: center;
        margin-bottom: 0.6rem;
    }

    .page-main-title-dark {
        font-size: clamp(1.8rem, 6.8vw, 2.3rem);
        line-height: 1.15;
        text-align: center;
        white-space: normal;
    }

    .page-main-title-dark .mobile-only-br {
        display: block;
    }

    .about-intro-section {
        padding: 2rem 0;
        text-align: center;
    }

    .about-intro-grid {
        gap: 1.25rem;
    }

    .about-photo-wrapper {
        margin-bottom: 0;
    }

    .about-bio-lead {
        text-align: center;
        width: 100%;
        max-width: 100%;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 0.9rem;
        line-height: 1.4;
        font-size: clamp(0.95rem, 3.8vw, 1.05rem);
    }

    .about-bio-text {
        text-align: left;
        font-size: 0.95rem;
        line-height: 1.6;
        color: #475569;
        margin-bottom: 1.25rem;
    }

    .bio-facts-grid {
        grid-template-columns: 1fr;
        text-align: center;
    }

    .about-subheading-wrap {
        white-space: normal !important;
        line-height: 1.25 !important;
        text-align: center !important;
        font-size: clamp(1.35rem, 5.2vw, 1.85rem) !important;
    }

    .about-journey-section {
        padding: 3rem 0;
    }

    .about-journey-card,
    .about-partner-box {
        padding: 1.8rem 1.4rem;
        border-radius: 16px;
    }

    .about-journey-title {
        font-size: clamp(0.85rem, 3.6vw, 1.25rem);
        white-space: nowrap !important;
        flex-wrap: nowrap !important;
        line-height: 1.2;
    }

    .about-partner-title {
        font-size: clamp(0.85rem, 3.6vw, 1.25rem);
        white-space: nowrap !important;
        line-height: 1.2;
    }

    .about-journey-text,
    .about-partner-desc {
        font-size: 0.95rem;
        line-height: 1.6;
    }

    .about-partner-btn {
        width: 100%;
        justify-content: center;
        text-align: center;
        padding: 0.85rem 1.2rem;
        font-size: 0.85rem;
    }

    .about-pillars-section {
        padding: 3rem 0;
    }

    .about-section-heading {
        margin-bottom: 2rem;
    }

    .about-section-title {
        font-size: clamp(1.45rem, 5.8vw, 1.95rem);
        white-space: normal !important;
        text-align: center;
        line-height: 1.2;
    }

    .about-section-sub {
        font-size: 0.92rem;
        line-height: 1.5;
        max-width: 90%;
        margin: 0 auto;
    }

    .pillar-card {
        align-items: center;
        text-align: center;
        padding: 1.6rem 1.25rem;
        border-radius: 16px;
    }

    .pillar-icon {
        margin-bottom: 1rem;
        width: 46px;
        height: 46px;
        font-size: 1.2rem;
    }

    .pillar-title {
        font-size: 1.12rem;
        margin-bottom: 0.5rem;
        line-height: 1.25;
    }

    .pillar-desc {
        font-size: 0.9rem;
        line-height: 1.55;
    }
}
</style>

<!-- 1. HEADER BANNER (DARK MODE ONLY) -->
<section class="page-header-dark">
    <div class="site-container">
        <!-- Breadcrumb Navigation -->
        <nav class="page-breadcrumb" aria-label="Breadcrumb">
            <a href="index"><i class="fa-solid fa-house"></i> Home</a>
            <span class="crumb-sep">/</span>
            <span class="crumb-current">About Lakshay</span>
        </nav>

        <!-- Kicker Badge with /// -->
        <div>
            <div class="page-kicker-dark">
                <span class="page-kicker-slashes">///</span>
                <span>BIOGRAPHY &amp; PROFILE</span>
            </div>
        </div>

        <!-- Main Title -->
        <h1 class="page-main-title-dark">
            Lakshay Sharma – Badminton<br class="mobile-only-br"> Player from India
        </h1>
    </div>
</section>

<!-- 2. BIOGRAPHY & CORE FACTS (LIGHT MODE) -->
<section class="about-intro-section">
    <div class="site-container">
        <div class="about-intro-grid">
            <!-- Left: Profile Portrait Photo -->
            <div class="about-photo-wrapper">
                <div class="about-photo-card">
                    <img src="assets/images/FACECOUTOUT.png" alt="Lakshay Sharma Focused Portrait" loading="lazy">
                </div>
            </div>

            <!-- Right: Biography & Journey Overview -->
            <div>
                <div class="kicker-slashes-wrap" style="margin-bottom: 0.6rem;">
                    <span class="kicker-slashes">///</span>
                    <span class="kicker-text-dark">ATHLETIC PROFILE</span>
                </div>

                <h2 class="sec2-title-dark about-subheading-wrap" style="margin-bottom: 1.25rem; font-size: clamp(1.4rem, 2.4vw, 2.15rem);">
                    Representing Punjab. Indian Badminton Player.
                </h2>
                
                <p class="about-bio-text">
                    Lakshay Sharma, born on 21 September 2005, is an Indian badminton player from Ludhiana, Punjab, who represents Punjab in Men’s Singles competitions. Through years of dedicated training, competitive experience and participation in national and international tournaments, he has established himself as a promising player in Indian badminton.
                </p>
                <p class="about-bio-text">
                    Lakshay’s badminton journey reflects discipline, determination and a strong commitment to the sport. He has competed in several international tournaments, gaining valuable experience against players from different countries and badminton circuits.
                </p>

                <!-- Quick Fact Cards -->
                <div class="bio-facts-grid">
                    <div class="bio-fact-item">
                        <div class="bio-fact-label">Hometown</div>
                        <div class="bio-fact-val">Ludhiana, Punjab, India</div>
                    </div>
                    <div class="bio-fact-item">
                        <div class="bio-fact-label">Discipline</div>
                        <div class="bio-fact-val">Men's Singles (Senior)</div>
                    </div>
                    <div class="bio-fact-item">
                        <div class="bio-fact-label">Coach</div>
                        <div class="bio-fact-val">Mangat Rai Sharma (NIS)</div>
                    </div>
                    <div class="bio-fact-item">
                        <div class="bio-fact-label">Sports Contract Scheme</div>
                        <div class="bio-fact-val">Airports Authority of India (AAI)</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3. CAREER JOURNEY & COMPETITIVE HIGHLIGHTS (NEW SECTION) -->
<section class="about-journey-section">
    <div class="site-container">
        <div class="about-journey-grid">
            <!-- Left Card: International & University Record -->
            <div class="about-journey-card">
                <h3 class="about-journey-title">
                    <i class="fa-solid fa-trophy"></i>
                    <span>Competitive Record &amp; Achievements</span>
                </h3>
                <p class="about-journey-text">
                    His international achievements include podium finishes at tournaments such as the Uganda International Challenge 2026, Cameroon International Challenge 2025, Czech International Future Series 2025 and Polish International 2024, where he secured bronze medals. He also achieved a silver medal at the Kazakhstan International Series 2023.
                </p>
                <p class="about-journey-text">
                    At the university level, Lakshay has delivered notable performances, winning silver in Men’s Singles at the All India Inter-University Championship 2026 and bronze in 2024. He was also part of the gold-medal-winning team at the Khelo India University Games 2024.
                </p>
                <p class="about-journey-text">
                    His profile records an India Senior Men’s Singles ranking of 4 and a World Men’s Singles ranking of 105. It also records a significant junior career, including a World U-19 ranking of 16 and an India U-19 Singles ranking of 1.
                </p>
            </div>

            <!-- Right Card: Mentorship, Future Ambitions & Brand Partnerships -->
            <div class="about-partner-box">
                <div class="about-partner-badge">
                    <i class="fa-solid fa-star"></i>
                    <span>Coaching &amp; Future Vision</span>
                </div>
                <h3 class="about-partner-title">Mentorship &amp; Partnership Opportunities</h3>
                <p class="about-partner-desc">
                    Lakshay’s training and development have been guided by his father, <strong style="color: #ffffff;">Mangat Rai Sharma</strong>, who is an NIS-qualified national badminton coach. His coaching background and guidance have been an important part of Lakshay’s sporting journey.
                </p>
                <p class="about-partner-desc">
                    As he continues to compete and develop his game, Lakshay aims to achieve greater success at national and international levels, improve his world ranking and represent India with distinction.
                </p>
                <p class="about-partner-desc" style="color: #ffffff; font-weight: 600;">
                    His journey presents an opportunity for sports organisations, brands and corporate partners to support a young Indian athlete with international exposure, competitive achievements and ambitions for the future.
                </p>
                <a href="contact" class="about-partner-btn">
                    <span>Connect For Sponsorships</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- 3. ATHLETIC PILLARS (LIGHT MODE) -->
<section class="about-pillars-section">
    <div class="site-container">
        <div class="about-section-heading">
            <h2 class="about-section-title">Core Principles &amp; Play Style</h2>
            <p class="about-section-sub">The foundation of Lakshay's continuous progression on national and world courts</p>
        </div>

        <div class="pillars-grid">
            <!-- Pillar 1 -->
            <div class="pillar-card">
                <div class="pillar-icon"><i class="fa-solid fa-feather-pointed"></i></div>
                <h3 class="pillar-title">Attacking Play Style</h3>
                <p class="pillar-desc">
                    Dynamic court coverage, sharp offensive smashes, and relentless pressure during net exchanges, commanding match rhythm under high-intensity international pace.
                </p>
            </div>

            <!-- Pillar 2 -->
            <div class="pillar-card">
                <div class="pillar-icon" style="color: #4d7c0f;"><i class="fa-solid fa-dumbbell"></i></div>
                <h3 class="pillar-title">Uncompromising Work Ethic</h3>
                <p class="pillar-desc">
                    Daily conditioning, tactical video analysis, and rigorous training sessions designed to compete and succeed against top-tier contenders globally.
                </p>
            </div>

            <!-- Pillar 3 -->
            <div class="pillar-card">
                <div class="pillar-icon" style="color: #eab308;"><i class="fa-solid fa-heart"></i></div>
                <h3 class="pillar-title">Humility &amp; National Pride</h3>
                <p class="pillar-desc">
                    Guided by family values and a deep commitment to representing India with honor, passion, and sportsmanship in every tournament worldwide.
                </p>
            </div>
        </div>
    </div>
</section>

<?php
include_once __DIR__ . '/includes/footer.php';
?>
