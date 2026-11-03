<?php
/**
 * LAKSHAY SHARMA - OFFICIAL ACHIEVEMENTS & MEDALS
 * Built from documented tournament records (assets/comtent/medals.md)
 * Header in Dark Mode with Breadcrumb; Content Body in Light Mode
 */
$pageTitle = "Achievements & Medals | Lakshay Sharma";
$currentPage = "achievements";
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

/* ==========================================================================
   2. CONTENT SECTIONS (LIGHT MODE)
   ========================================================================== */

/* Medal Summary Cards (Light Mode) */
.achieve-summary-section {
    padding: 3.5rem 0 2.5rem 0;
    background-color: #f8fafc;
}

.achieve-summary-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 1.5rem;
}

.achieve-card-light {
    background: #ffffff;
    border: 1px solid rgba(11, 21, 40, 0.08);
    border-radius: 16px;
    padding: 2.2rem 1.6rem;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    position: relative;
    overflow: hidden;
    box-shadow: 0 4px 15px rgba(11, 21, 40, 0.04);
    transition: transform 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease;
}

.achieve-card-light:hover {
    transform: translateY(-5px);
    box-shadow: 0 16px 30px rgba(11, 21, 40, 0.1);
}

.achieve-card-light::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 4px;
}

.achieve-card-gold::after { background: #eab308; }
.achieve-card-silver::after { background: #94a3b8; }
.achieve-card-bronze::after { background: #d97706; }
.achieve-card-trophy::after { background: #1769FF; }

.achieve-img-wrap {
    width: 90px;
    height: 90px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1.25rem;
}

.achieve-img-wrap img {
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
    filter: drop-shadow(0 8px 16px rgba(0, 0, 0, 0.12));
}

.achieve-count-num {
    font-size: 2.8rem;
    font-weight: 900;
    font-style: italic;
    color: #0b1528;
    line-height: 1;
    margin-bottom: 0.35rem;
}

.achieve-count-label {
    font-size: 1.1rem;
    font-weight: 800;
    color: #0b1528;
    margin-bottom: 0.25rem;
}

.achieve-count-sub {
    font-size: 0.85rem;
    color: #64748b;
    font-weight: 500;
}

/* Detailed Tables & Categories */
.achieve-detail-section {
    padding: 2.5rem 0 5.5rem 0;
    background-color: #f8fafc;
}

.achieve-category-block {
    margin-bottom: 3.5rem;
}

.achieve-block-title {
    font-size: 1.8rem;
    font-weight: 900;
    font-style: italic;
    color: #000000;
    margin-bottom: 1.35rem;
    display: flex;
    align-items: center;
    gap: 0.75rem;
}

.achieve-table-wrap {
    background: #ffffff;
    border: 1px solid rgba(11, 21, 40, 0.08);
    border-radius: 16px;
    overflow-x: auto;
    box-shadow: 0 4px 20px rgba(11, 21, 40, 0.04);
}

.achieve-table {
    width: 100%;
    border-collapse: collapse;
    text-align: left;
    min-width: 600px;
}

.achieve-table th {
    background: #f1f5f9;
    padding: 1.1rem 1.4rem;
    font-size: 0.82rem;
    font-weight: 800;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    color: #0b1528;
    border-bottom: 2px solid rgba(11, 21, 40, 0.08);
}

.achieve-table td {
    padding: 1.15rem 1.4rem;
    font-size: 0.95rem;
    border-bottom: 1px solid rgba(11, 21, 40, 0.06);
    color: #334155;
    font-weight: 500;
}

.achieve-table tr:last-child td {
    border-bottom: none;
}

.achieve-table tr:hover td {
    background: #f8fafc;
}

.badge-gold {
    display: inline-flex;
    align-items: center;
    gap: 0.4rem;
    padding: 0.3rem 0.75rem;
    border-radius: 14px;
    font-size: 0.8rem;
    font-weight: 800;
    background: rgba(234, 179, 8, 0.15);
    color: #a16207;
    border: 1px solid rgba(234, 179, 8, 0.3);
}

.badge-silver {
    display: inline-flex;
    align-items: center;
    gap: 0.4rem;
    padding: 0.3rem 0.75rem;
    border-radius: 14px;
    font-size: 0.8rem;
    font-weight: 800;
    background: rgba(148, 163, 184, 0.15);
    color: #475569;
    border: 1px solid rgba(148, 163, 184, 0.3);
}

.badge-bronze {
    display: inline-flex;
    align-items: center;
    gap: 0.4rem;
    padding: 0.3rem 0.75rem;
    border-radius: 14px;
    font-size: 0.8rem;
    font-weight: 800;
    background: rgba(217, 119, 6, 0.15);
    color: #b45309;
    border: 1px solid rgba(217, 119, 6, 0.3);
}

/* Responsive Rules */
@media (max-width: 1024px) {
    .achieve-summary-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 768px) {
    .page-header-dark {
        padding: 2.8rem 0 2.4rem 0;
        text-align: center;
    }

    .page-breadcrumb,
    .page-kicker-dark {
        justify-content: center;
    }

    .page-main-title-dark {
        font-size: clamp(2rem, 7vw, 2.7rem);
        text-align: center;
    }

    .achieve-summary-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 0.75rem;
    }

    .achieve-card-light {
        padding: 1.25rem 0.75rem;
        border-radius: 14px;
    }

    .achieve-img-wrap {
        width: 60px;
        height: 60px;
        margin-bottom: 0.75rem;
    }

    .achieve-count-num {
        font-size: 2rem;
        margin-bottom: 0.2rem;
    }

    .achieve-count-label {
        font-size: 0.92rem;
        margin-bottom: 0.2rem;
    }

    .achieve-count-sub {
        font-size: 0.75rem;
        line-height: 1.3;
    }

    .achieve-block-title {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        gap: 0.4rem;
        font-size: clamp(1.3rem, 5.2vw, 1.6rem);
        line-height: 1.25;
        margin-bottom: 1.5rem;
        padding: 0 0.5rem;
    }

    .achieve-block-title span:first-child {
        font-size: 1.85rem;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        line-height: 1;
    }

    /* Transform achievement tables into responsive mobile cards */
    .achieve-table-wrap {
        background: transparent !important;
        border: none !important;
        box-shadow: none !important;
        overflow-x: visible !important;
    }

    .achieve-table {
        display: block !important;
        width: 100% !important;
        min-width: 0 !important;
        border: none !important;
    }

    .achieve-table thead {
        display: none !important;
    }

    .achieve-table tbody {
        display: flex !important;
        flex-direction: column !important;
        gap: 1.15rem !important;
        width: 100% !important;
    }

    .achieve-table tr {
        display: flex !important;
        flex-direction: column !important;
        background: #ffffff !important;
        border: 1px solid rgba(11, 21, 40, 0.08) !important;
        border-radius: 14px !important;
        padding: 1.25rem 1.4rem !important;
        box-shadow: 0 4px 15px rgba(11, 21, 40, 0.04) !important;
        gap: 0.45rem !important;
    }

    .achieve-table td {
        display: flex !important;
        flex-direction: column !important;
        align-items: flex-start !important;
        justify-content: flex-start !important;
        padding: 0.65rem 0 !important;
        border-bottom: 1px dashed rgba(11, 21, 40, 0.1) !important;
        font-size: 0.95rem !important;
        line-height: 1.45 !important;
        text-align: left !important;
        gap: 0.25rem !important;
        color: #0f172a !important;
    }

    .achieve-table td strong {
        color: #0b1528 !important;
        font-size: 1.05rem !important;
    }

    .achieve-table td:last-child {
        border-bottom: none !important;
        padding-top: 0.75rem !important;
        align-items: center !important;
        justify-content: center !important;
        width: 100% !important;
        text-align: center !important;
    }

    .achieve-table td:nth-child(1)::before {
        content: "Year";
        font-size: 0.72rem;
        font-weight: 800;
        text-transform: uppercase;
        color: #64748b;
        letter-spacing: 0.75px;
        text-align: left !important;
    }

    .achieve-table td:nth-child(2)::before {
        content: "Tournament";
        font-size: 0.72rem;
        font-weight: 800;
        text-transform: uppercase;
        color: #64748b;
        letter-spacing: 0.75px;
        text-align: left !important;
    }

    .achieve-table td:nth-child(3)::before {
        content: "Category";
        font-size: 0.72rem;
        font-weight: 800;
        text-transform: uppercase;
        color: #64748b;
        letter-spacing: 0.75px;
        text-align: left !important;
    }
        font-weight: 800;
        text-transform: uppercase;
        color: #64748b;
        letter-spacing: 0.5px;
        text-align: left !important;
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
            <span class="crumb-current">Achievements</span>
        </nav>

        <!-- Kicker Badge with /// -->
        <div>
            <div class="page-kicker-dark">
                <span class="page-kicker-slashes">///</span>
                <span>TOURNAMENT HONORS</span>
            </div>
        </div>

        <!-- Main Title -->
        <h1 class="page-main-title-dark">
            Medals &amp; Championship Honors
        </h1>
    </div>
</section>

<!-- 2. MEDAL SUMMARY CARDS (LIGHT MODE) -->
<section class="achieve-summary-section">
    <div class="site-container">
        <div class="achieve-summary-grid">
            <!-- Gold Medals -->
            <div class="achieve-card-light achieve-card-gold">
                <div class="achieve-img-wrap">
                    <img src="assets/images/Shiny Gold Star Medal with Red Ribbon.png" alt="Gold Medal">
                </div>
                <div class="achieve-count-num">9+</div>
                <div class="achieve-count-label">Gold Medals</div>
                <div class="achieve-count-sub">National &amp; International Titles</div>
            </div>

            <!-- Silver Medals -->
            <div class="achieve-card-light achieve-card-silver">
                <div class="achieve-img-wrap">
                    <img src="assets/images/Silver Star Medal with Red Ribbon.png" alt="Silver Medal">
                </div>
                <div class="achieve-count-num">6+</div>
                <div class="achieve-count-label">Silver Medals</div>
                <div class="achieve-count-sub">Senior &amp; International Podiums</div>
            </div>

            <!-- Bronze Medals -->
            <div class="achieve-card-light achieve-card-bronze">
                <div class="achieve-img-wrap">
                    <img src="assets/images/Bronze Star Medal with Red Ribbon.png" alt="Bronze Medal">
                </div>
                <div class="achieve-count-num">9+</div>
                <div class="achieve-count-label">Bronze Medals</div>
                <div class="achieve-count-sub">European &amp; African Circuit Podiums</div>
            </div>

            <!-- Championship Titles -->
            <div class="achieve-card-light achieve-card-trophy">
                <div class="achieve-img-wrap">
                    <img src="assets/images/Golden Badminton Championship Trophy.png" alt="Trophy">
                </div>
                <div class="achieve-count-num">2026</div>
                <div class="achieve-count-label">Double Gold Title</div>
                <div class="achieve-count-sub">Inter-Institutional Championship, Raipur</div>
            </div>
        </div>
    </div>
</section>

<!-- 3. DETAILED DOCUMENTED TOURNAMENT TABLES (LIGHT MODE) -->
<section class="achieve-detail-section">
    <div class="site-container">

        <!-- GOLD MEDALS & CHAMPIONSHIPS TABLE -->
        <div class="achieve-category-block" id="gold-medals">
            <h3 class="achieve-block-title">
                <span style="color: #eab308;"><i class="fa-solid fa-medal"></i></span>
                <span>Gold Medals &amp; Championship Titles</span>
            </h3>

            <div class="achieve-table-wrap">
                <table class="achieve-table">
                    <thead>
                        <tr>
                            <th>Year</th>
                            <th>Tournament</th>
                            <th>Category / Discipline</th>
                            <th>Result</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>2026</strong></td>
                            <td>All India Inter-Institutional Championship, Raipur</td>
                            <td>Men's Singles</td>
                            <td><span class="badge-gold"><i class="fa-solid fa-trophy"></i> Gold Champion</span></td>
                        </tr>
                        <tr>
                            <td><strong>2026</strong></td>
                            <td>All India Inter-Institutional Championship, Raipur</td>
                            <td>Team Championship (AAI)</td>
                            <td><span class="badge-gold"><i class="fa-solid fa-trophy"></i> Team Gold</span></td>
                        </tr>
                        <tr>
                            <td><strong>2023</strong></td>
                            <td>Khelo India University Games</td>
                            <td>Team Championship</td>
                            <td><span class="badge-gold"><i class="fa-solid fa-medal"></i> Team Gold</span></td>
                        </tr>
                        <tr>
                            <td><strong>2021</strong></td>
                            <td>Junior International Series, Hungary</td>
                            <td>U-19 Singles</td>
                            <td><span class="badge-gold"><i class="fa-solid fa-medal"></i> U-19 Champion</span></td>
                        </tr>
                        <tr>
                            <td><strong>2018</strong></td>
                            <td>Punjab Sub-Junior Open Championship</td>
                            <td>U-15 Singles</td>
                            <td><span class="badge-gold"><i class="fa-solid fa-medal"></i> Gold Medal</span></td>
                        </tr>
                        <tr>
                            <td><strong>2018</strong></td>
                            <td>Punjab Sub-Junior Open Championship</td>
                            <td>U-15 Doubles</td>
                            <td><span class="badge-gold"><i class="fa-solid fa-medal"></i> Gold Medal</span></td>
                        </tr>
                        <tr>
                            <td><strong>2017</strong></td>
                            <td>International Youth Tournament, Glasgow</td>
                            <td>U-13 Singles</td>
                            <td><span class="badge-gold"><i class="fa-solid fa-medal"></i> U-13 Champion</span></td>
                        </tr>
                        <tr>
                            <td><strong>2017</strong></td>
                            <td>All India Sub-Junior Ranking, Coimbatore</td>
                            <td>U-13 Doubles (with Ankit Mondal)</td>
                            <td><span class="badge-gold"><i class="fa-solid fa-medal"></i> Gold Medal</span></td>
                        </tr>
                        <tr>
                            <td><strong>2017</strong></td>
                            <td>National Ranking Tournament, Jaipur</td>
                            <td>Doubles</td>
                            <td><span class="badge-gold"><i class="fa-solid fa-medal"></i> Gold Medal</span></td>
                        </tr>
                        <tr>
                            <td><strong>2015</strong></td>
                            <td>Swiss Youth Open, Switzerland</td>
                            <td>U-11 Singles</td>
                            <td><span class="badge-gold"><i class="fa-solid fa-medal"></i> International Champion</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- SILVER MEDALS TABLE -->
        <div class="achieve-category-block" id="silver-medals">
            <h3 class="achieve-block-title">
                <span style="color: #64748b;"><i class="fa-solid fa-medal"></i></span>
                <span>Silver Medals &amp; Runner-Up Podiums</span>
            </h3>

            <div class="achieve-table-wrap">
                <table class="achieve-table">
                    <thead>
                        <tr>
                            <th>Year</th>
                            <th>Tournament</th>
                            <th>Category / Discipline</th>
                            <th>Result</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>2025</strong></td>
                            <td>All India Senior Ranking Tournament, Hyderabad</td>
                            <td>Men's Singles (Senior)</td>
                            <td><span class="badge-silver"><i class="fa-solid fa-medal"></i> Senior Silver (19–21, 21–17, 20–22)</span></td>
                        </tr>
                        <tr>
                            <td><strong>2023</strong></td>
                            <td>Kazakhstan International Series</td>
                            <td>Men's Singles</td>
                            <td><span class="badge-silver"><i class="fa-solid fa-medal"></i> International Silver</span></td>
                        </tr>
                        <tr>
                            <td><strong>2023</strong></td>
                            <td>North Zone Inter-State Championship</td>
                            <td>Men's Singles</td>
                            <td><span class="badge-silver"><i class="fa-solid fa-medal"></i> Silver Medal</span></td>
                        </tr>
                        <tr>
                            <td><strong>2017</strong></td>
                            <td>International Youth Tournament, Glasgow</td>
                            <td>U-13 Doubles</td>
                            <td><span class="badge-silver"><i class="fa-solid fa-medal"></i> Silver Medal</span></td>
                        </tr>
                        <tr>
                            <td><strong>2017</strong></td>
                            <td>Jaipur All-India Sub-Junior Ranking Tournament</td>
                            <td>U-13 Doubles (with Ankit Mondal)</td>
                            <td><span class="badge-silver"><i class="fa-solid fa-medal"></i> Silver Medal</span></td>
                        </tr>
                        <tr>
                            <td><strong>2018</strong></td>
                            <td>Punjab State Championship</td>
                            <td>U-17 Singles</td>
                            <td><span class="badge-silver"><i class="fa-solid fa-medal"></i> Silver Medal</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- BRONZE MEDALS TABLE -->
        <div class="achieve-category-block" id="bronze-medals">
            <h3 class="achieve-block-title">
                <span style="color: #d97706;"><i class="fa-solid fa-medal"></i></span>
                <span>Bronze Medals &amp; International Podium Finishes</span>
            </h3>

            <div class="achieve-table-wrap">
                <table class="achieve-table">
                    <thead>
                        <tr>
                            <th>Year</th>
                            <th>Tournament</th>
                            <th>Category / Discipline</th>
                            <th>Result</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>2026</strong></td>
                            <td>Uganda International Challenge</td>
                            <td>Men's Singles (Propelled to World #106)</td>
                            <td><span class="badge-bronze"><i class="fa-solid fa-medal"></i> Bronze Medal</span></td>
                        </tr>
                        <tr>
                            <td><strong>2025</strong></td>
                            <td>Cameroon International Challenge</td>
                            <td>Men's Singles</td>
                            <td><span class="badge-bronze"><i class="fa-solid fa-medal"></i> Bronze Medal</span></td>
                        </tr>
                        <tr>
                            <td><strong>2025</strong></td>
                            <td>Czech International Future Series</td>
                            <td>Men's Singles</td>
                            <td><span class="badge-bronze"><i class="fa-solid fa-medal"></i> Bronze Medal</span></td>
                        </tr>
                        <tr>
                            <td><strong>2024</strong></td>
                            <td>Polish International</td>
                            <td>Men's Singles</td>
                            <td><span class="badge-bronze"><i class="fa-solid fa-medal"></i> Bronze Medal</span></td>
                        </tr>
                        <tr>
                            <td><strong>2024</strong></td>
                            <td>All India Inter-University Championship</td>
                            <td>Singles</td>
                            <td><span class="badge-bronze"><i class="fa-solid fa-medal"></i> Bronze Medal</span></td>
                        </tr>
                        <tr>
                            <td><strong>2022</strong></td>
                            <td>All India Junior Ranking Championship, Bengaluru</td>
                            <td>Junior Singles</td>
                            <td><span class="badge-bronze"><i class="fa-solid fa-medal"></i> Bronze Medal</span></td>
                        </tr>
                        <tr>
                            <td><strong>2017</strong></td>
                            <td>International Youth Tournament, Glasgow</td>
                            <td>U-13 Mixed Doubles</td>
                            <td><span class="badge-bronze"><i class="fa-solid fa-medal"></i> Bronze Medal</span></td>
                        </tr>
                        <tr>
                            <td><strong>2015</strong></td>
                            <td>Swiss Youth Open, Switzerland</td>
                            <td>Doubles</td>
                            <td><span class="badge-bronze"><i class="fa-solid fa-medal"></i> Bronze Medal</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</section>

<?php
include_once __DIR__ . '/includes/footer.php';
?>
