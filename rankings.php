<?php
/**
 * LAKSHAY SHARMA - OFFICIAL RANKINGS & STANDINGS
 * Page Hero & Breadcrumbs in Dark Mode; Content Body in Light Mode
 */
$pageTitle = "Rankings & Career Progression | Lakshay Sharma";
$currentPage = "rankings";
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
.rankings-page-header-dark {
    position: relative;
    padding: 3.8rem 0 3.2rem 0;
    background: linear-gradient(180deg, rgba(16, 28, 53, 0.88) 0%, rgba(9, 16, 32, 0.94) 100%),
                url('assets/images/Intense Badminton Match in a Stadium.png') center center / cover no-repeat;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    overflow: hidden;
}

/* Subtle background court line accents */
.rankings-page-header-dark::before {
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

/* Breadcrumb Navigation */
.rankings-breadcrumb {
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

.rankings-breadcrumb a {
    color: #DCE3EC;
    transition: color 0.2s ease;
    display: inline-flex;
    align-items: center;
    gap: 0.35rem;
}

.rankings-breadcrumb a:hover {
    color: var(--color-lime);
}

.rankings-breadcrumb .crumb-sep {
    color: rgba(255, 255, 255, 0.3);
    font-size: 0.75rem;
}

.rankings-breadcrumb .crumb-current {
    color: var(--color-lime);
    font-weight: 700;
}

/* Kicker Badge with /// */
.rankings-kicker-dark {
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

.rankings-kicker-slashes {
    color: var(--color-lime);
    font-weight: 900;
    letter-spacing: 2px;
}

.rankings-main-title-dark {
    font-size: clamp(2.4rem, 4.5vw, 3.8rem);
    font-weight: 900;
    font-style: italic;
    color: #ffffff;
    line-height: 1.1;
    margin-bottom: 1rem;
    letter-spacing: -0.5px;
    position: relative;
    z-index: 2;
}

.rankings-subtitle-dark {
    font-size: 1.05rem;
    font-weight: 500;
    color: #DCE3EC;
    max-width: 720px;
    line-height: 1.6;
    opacity: 0.95;
    position: relative;
    z-index: 2;
}

/* ==========================================================================
   2. CONTENT BODY (CLEAN HIGH-CONTRAST LIGHT MODE)
   ========================================================================== */

/* 4 Key Metric Cards Row */
.rank-metrics-section-light {
    padding: 3.5rem 0 2.5rem 0;
    background-color: #f8fafc;
}

.rank-metrics-grid-light {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 1.5rem;
}

.rank-metric-card-light {
    background: #ffffff;
    border: 1px solid rgba(11, 21, 40, 0.08);
    border-radius: 16px;
    padding: 2rem 1.6rem;
    position: relative;
    overflow: hidden;
    box-shadow: 0 4px 15px rgba(11, 21, 40, 0.04);
    transition: transform 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease;
}

.rank-metric-card-light:hover {
    transform: translateY(-5px);
    border-color: #1769FF;
    box-shadow: 0 16px 30px rgba(11, 21, 40, 0.1);
}

.rank-metric-card-light::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 4px;
    background: #1769FF;
}

.rank-metric-card-light.accent-lime::after {
    background: #84cc16; /* Vibrant athletic green */
}

.rank-metric-top-light {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 1rem;
}

.rank-metric-icon-light {
    width: 46px;
    height: 46px;
    border-radius: 12px;
    background: #f1f5f9;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #1769FF;
    font-size: 1.25rem;
}

.rank-badge-light {
    font-size: 0.75rem;
    font-weight: 800;
    letter-spacing: 1px;
    padding: 0.28rem 0.75rem;
    border-radius: 20px;
    text-transform: uppercase;
}

.badge-light-green {
    background: rgba(132, 204, 22, 0.15);
    color: #4d7c0f;
    border: 1px solid rgba(132, 204, 22, 0.3);
}

.badge-light-blue {
    background: rgba(23, 105, 255, 0.1);
    color: #1769FF;
    border: 1px solid rgba(23, 105, 255, 0.25);
}

.rank-metric-value-light {
    font-size: 2.8rem;
    font-weight: 900;
    font-style: italic;
    color: #000000;
    line-height: 1;
    margin-bottom: 0.4rem;
}

.rank-metric-value-light.text-lime-contrast {
    color: #4d7c0f;
}

.rank-metric-label-light {
    font-size: 1.05rem;
    font-weight: 800;
    color: #0b1528;
    margin-bottom: 0.25rem;
}

.rank-metric-sub-light {
    font-size: 0.85rem;
    color: #64748b;
    font-weight: 500;
}

/* Detailed Content Split: Standings Table + Milestones */
.rankings-detail-section-light {
    padding: 2.5rem 0 5.5rem 0;
    background-color: #f8fafc;
}

.rankings-dual-grid-light {
    display: grid;
    grid-template-columns: 1.15fr 0.85fr;
    gap: 3.5rem;
    align-items: start;
}

.rankings-block-title-light {
    font-size: 1.8rem;
    font-weight: 900;
    font-style: italic;
    color: #000000;
    margin-bottom: 1.5rem;
    display: flex;
    align-items: center;
    gap: 0.65rem;
}

.rankings-block-title-light i {
    color: #1769FF;
    font-size: 1.4rem;
}

/* Table Design (Light Theme) */
.rankings-table-wrap-light {
    background: #ffffff;
    border: 1px solid rgba(11, 21, 40, 0.08);
    border-radius: 16px;
    overflow-x: auto;
    box-shadow: 0 4px 20px rgba(11, 21, 40, 0.04);
}

.rankings-table-light {
    width: 100%;
    border-collapse: collapse;
    text-align: left;
    min-width: 500px;
}

.rankings-table-light th {
    background: #f1f5f9;
    padding: 1.1rem 1.25rem;
    font-size: 0.82rem;
    font-weight: 800;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    color: #0b1528;
    border-bottom: 2px solid rgba(11, 21, 40, 0.08);
}

.rankings-table-light td {
    padding: 1.15rem 1.25rem;
    font-size: 0.95rem;
    border-bottom: 1px solid rgba(11, 21, 40, 0.06);
    color: #334155;
    font-weight: 500;
}

.rankings-table-light tr:last-child td {
    border-bottom: none;
}

.rankings-table-light tr:hover td {
    background: #f8fafc;
}

.td-rank-highlight-light {
    font-weight: 900;
    font-style: italic;
    color: #1769FF;
    font-size: 1.15rem;
}

.status-pill-light {
    display: inline-flex;
    align-items: center;
    gap: 0.4rem;
    padding: 0.28rem 0.7rem;
    border-radius: 14px;
    font-size: 0.8rem;
    font-weight: 700;
}

.status-live-light {
    background: rgba(132, 204, 22, 0.15);
    color: #4d7c0f;
    border: 1px solid rgba(132, 204, 22, 0.3);
}

.status-peak-light {
    background: rgba(23, 105, 255, 0.1);
    color: #1769FF;
    border: 1px solid rgba(23, 105, 255, 0.25);
}

/* Timeline Progression List (Light Theme) */
.milestones-list-light {
    display: flex;
    flex-direction: column;
    gap: 1.25rem;
}

.milestone-item-light {
    background: #ffffff;
    border: 1px solid rgba(11, 21, 40, 0.08);
    border-radius: 14px;
    padding: 1.35rem 1.5rem;
    display: flex;
    gap: 1.25rem;
    align-items: flex-start;
    box-shadow: 0 2px 10px rgba(11, 21, 40, 0.03);
    transition: transform 0.25s ease, border-color 0.25s ease, box-shadow 0.25s ease;
}

.milestone-item-light:hover {
    transform: translateX(4px);
    border-color: #1769FF;
    box-shadow: 0 8px 20px rgba(11, 21, 40, 0.08);
}

.milestone-year-light {
    background: #1769FF;
    color: #ffffff;
    font-weight: 900;
    font-style: italic;
    font-size: 1.1rem;
    padding: 0.4rem 0.8rem;
    border-radius: 8px;
    flex-shrink: 0;
}

.milestone-content-light h4 {
    font-size: 1.05rem;
    font-weight: 800;
    color: #0b1528;
    margin-bottom: 0.35rem;
}

.milestone-content-light p {
    font-size: 0.9rem;
    color: #64748b;
    line-height: 1.5;
}

/* Responsive Rules for Mobile */
@media (max-width: 1024px) {
    .rank-metrics-grid-light {
        grid-template-columns: repeat(2, 1fr);
    }

    .rankings-dual-grid-light {
        grid-template-columns: 1fr;
        gap: 2.5rem;
    }
}

@media (max-width: 768px) {
    .rankings-page-header-dark {
        padding: 2.8rem 0 2.4rem 0;
        text-align: center;
    }

    .rankings-breadcrumb {
        justify-content: center;
    }

    .rankings-kicker-dark {
        justify-content: center;
    }

    .rankings-main-title-dark {
        font-size: clamp(2rem, 7vw, 2.7rem);
        text-align: center;
    }

    .rankings-subtitle-dark {
        text-align: center;
        margin: 0 auto;
    }

    .rank-metrics-grid-light {
        grid-template-columns: repeat(2, 1fr);
        gap: 0.75rem;
    }

    .rank-metric-card-light {
        padding: 1.25rem 0.75rem;
        border-radius: 14px;
        text-align: center;
    }

    .rank-metric-top-light {
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 0.4rem;
        margin-bottom: 0.65rem;
    }

    .rank-metric-icon-light {
        width: 38px;
        height: 38px;
        font-size: 1.05rem;
        border-radius: 10px;
    }

    .rank-badge-light {
        font-size: 0.62rem;
        padding: 0.2rem 0.55rem;
        letter-spacing: 0.5px;
    }

    .rank-metric-value-light {
        font-size: 2rem;
        margin-bottom: 0.2rem;
    }

    .rank-metric-label-light {
        font-size: 0.92rem;
        margin-bottom: 0.2rem;
    }

    .rank-metric-sub-light {
        font-size: 0.75rem;
        line-height: 1.3;
    }

    .rankings-block-title-light {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        text-align: center;
        white-space: nowrap;
        gap: 0.5rem;
        font-size: clamp(0.95rem, 4.3vw, 1.3rem);
        line-height: 1.2;
        margin-bottom: 1.5rem;
        padding: 0 0.25rem;
        width: 100%;
    }

    .rankings-block-title-light i {
        font-size: 1.15rem;
        line-height: 1;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .milestone-item-light {
        flex-direction: column;
        align-items: center;
        text-align: center;
        padding: 1.25rem 1rem;
    }

    /* Transform table into beautiful mobile cards on phone screens */
    .rankings-table-wrap-light {
        background: transparent !important;
        border: none !important;
        box-shadow: none !important;
        overflow-x: visible !important;
    }

    .rankings-table-light {
        display: block !important;
        width: 100% !important;
        min-width: 0 !important;
        border: none !important;
    }

    .rankings-table-light thead {
        display: none !important; /* Hide desktop table headers on mobile */
    }

    .rankings-table-light tbody {
        display: flex !important;
        flex-direction: column !important;
        gap: 1.15rem !important;
        width: 100% !important;
    }

    .rankings-table-light tr {
        display: flex !important;
        flex-direction: column !important;
        background: #ffffff !important;
        border: 1px solid rgba(11, 21, 40, 0.08) !important;
        border-radius: 14px !important;
        padding: 1.25rem 1.4rem !important;
        box-shadow: 0 4px 15px rgba(11, 21, 40, 0.04) !important;
        gap: 0.45rem !important;
    }

    .rankings-table-light td {
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

    .rankings-table-light td strong {
        color: #0b1528 !important;
        font-size: 1.05rem !important;
    }

    .rankings-table-light td:last-child {
        border-bottom: none !important;
        padding-top: 0.75rem !important;
        align-items: center !important;
        justify-content: center !important;
        width: 100% !important;
        text-align: center !important;
    }

    /* Mobile labels for table cells */
    .rankings-table-light td:nth-child(1)::before {
        content: "Governing Body";
        font-size: 0.72rem;
        font-weight: 800;
        text-transform: uppercase;
        color: #64748b;
        letter-spacing: 0.75px;
        text-align: left !important;
    }

    .rankings-table-light td:nth-child(2)::before {
        content: "Category";
        font-size: 0.72rem;
        font-weight: 800;
        text-transform: uppercase;
        color: #64748b;
        letter-spacing: 0.75px;
        text-align: left !important;
    }

    .rankings-table-light td:nth-child(3)::before {
        content: "Standing";
        font-size: 0.72rem;
        font-weight: 800;
        text-transform: uppercase;
        color: #64748b;
        letter-spacing: 0.75px;
        text-align: left !important;
    }

    .td-rank-highlight-light {
        font-size: 1.15rem !important;
    }
}
</style>

<!-- ==========================================================================
     1. HEADER BANNER WITH BREADCRUMB (DARK MODE ONLY)
     ========================================================================== -->
<section class="rankings-page-header-dark">
    <div class="site-container">
        <!-- Breadcrumb Navigation -->
        <nav class="rankings-breadcrumb" aria-label="Breadcrumb">
            <a href="index"><i class="fa-solid fa-house"></i> Home</a>
            <span class="crumb-sep">/</span>
            <span class="crumb-current">Rankings &amp; Standings</span>
        </nav>

        <!-- Kicker Badge with /// -->
        <div>
            <div class="rankings-kicker-dark">
                <span class="rankings-kicker-slashes">///</span>
                <span>OFFICIAL STANDINGS</span>
            </div>
        </div>

        <!-- Main Title -->
        <h1 class="rankings-main-title-dark" style="margin-bottom: 0;">
            Rankings &amp; Performance
        </h1>
    </div>
</section>

<!-- ==========================================================================
     2. CONTENT SECTIONS (LIGHT MODE)
     ========================================================================== -->

<!-- High-Impact Metrics Grid (Light Mode) -->
<section class="rank-metrics-section-light">
    <div class="site-container">
        <div class="rank-metrics-grid-light">
            <!-- Metric 1: World Ranking -->
            <div class="rank-metric-card-light accent-lime">
                <div class="rank-metric-top-light">
                    <div class="rank-metric-icon-light" style="color: #4d7c0f;"><i class="fa-solid fa-globe"></i></div>
                    <span class="rank-badge-light badge-light-green">BWF Senior</span>
                </div>
                <div class="rank-metric-value-light text-lime-contrast">#105</div>
                <div class="rank-metric-label-light">Career-High World Rank</div>
                <div class="rank-metric-sub-light">Following Uganda International (Feb 2026)</div>
            </div>

            <!-- Metric 2: India Ranking -->
            <div class="rank-metric-card-light">
                <div class="rank-metric-top-light">
                    <div class="rank-metric-icon-light"><i class="fa-solid fa-medal"></i></div>
                    <span class="rank-badge-light badge-light-blue">BAI National</span>
                </div>
                <div class="rank-metric-value-light">#4</div>
                <div class="rank-metric-label-light">India Ranking (MS)</div>
                <div class="rank-metric-sub-light">All-India Senior Men's Singles</div>
            </div>

            <!-- Metric 3: National Senior Silver -->
            <div class="rank-metric-card-light accent-lime">
                <div class="rank-metric-top-light">
                    <div class="rank-metric-icon-light" style="color: #4d7c0f;"><i class="fa-solid fa-award"></i></div>
                    <span class="rank-badge-light badge-light-green">National</span>
                </div>
                <div class="rank-metric-value-light">2025</div>
                <div class="rank-metric-label-light">All-India Senior Silver</div>
                <div class="rank-metric-sub-light">Senior Ranking Finalist, Hyderabad</div>
            </div>

            <!-- Metric 4: Double Championship Gold -->
            <div class="rank-metric-card-light">
                <div class="rank-metric-top-light">
                    <div class="rank-metric-icon-light"><i class="fa-solid fa-trophy"></i></div>
                    <span class="rank-badge-light badge-light-blue">Champion</span>
                </div>
                <div class="rank-metric-value-light text-lime-contrast">2026</div>
                <div class="rank-metric-label-light">Double Gold Champion</div>
                <div class="rank-metric-sub-light">Inter-Institutional Singles & Team Gold</div>
            </div>
        </div>
    </div>
</section>

<!-- Detailed Standings Table & Milestone Journey (Light Mode) -->
<section class="rankings-detail-section-light">
    <div class="site-container">
        <div class="rankings-dual-grid-light">
            <!-- Left: Official Standings Breakdown Table -->
            <div>
                <h3 class="rankings-block-title-light">
                    <i class="fa-solid fa-chart-line"></i>
                    <span>Competitive Category Standings</span>
                </h3>

                <div class="rankings-table-wrap-light">
                    <table class="rankings-table-light">
                        <thead>
                            <tr>
                                <th>Governing Body</th>
                                <th>Category / Discipline</th>
                                <th>Standing</th>
                                <th>Achievement / Milestone</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>BWF</strong></td>
                                <td>Men's Singles (Senior)</td>
                                <td class="td-rank-highlight-light">World #106</td>
                                <td><span class="status-pill-light status-peak-light">Career High (2026)</span></td>
                            </tr>
                            <tr>
                                <td><strong>BAI (India)</strong></td>
                                <td>Men's Singles (Senior)</td>
                                <td class="td-rank-highlight-light">India #4</td>
                                <td><span class="status-pill-light status-live-light">National Top Tier</span></td>
                            </tr>
                            <tr>
                                <td><strong>Badminton Asia</strong></td>
                                <td>Junior Men's Team</td>
                                <td class="td-rank-highlight-light">Captain</td>
                                <td>Asia Junior Championships (Indonesia 2023)</td>
                            </tr>
                            <tr>
                                <td><strong>All-India Senior</strong></td>
                                <td>Senior Ranking Tournaments</td>
                                <td class="td-rank-highlight-light">Silver Medal</td>
                                <td>Hyderabad Senior Final (19–21, 21–17, 20–22)</td>
                            </tr>
                            <tr>
                                <td><strong>Inter-Institutional</strong></td>
                                <td>Men's Singles &amp; Team</td>
                                <td class="td-rank-highlight-light">2x Gold</td>
                                <td>Singles Champion &amp; Team Gold for AAI (Raipur 2026)</td>
                            </tr>
                            <tr>
                                <td><strong>Khelo India</strong></td>
                                <td>University Games</td>
                                <td class="td-rank-highlight-light">Gold Medal</td>
                                <td>Team Gold (2023)</td>
                            </tr>
                            <tr>
                                <td><strong>Punjab State</strong></td>
                                <td>State Championship</td>
                                <td class="td-rank-highlight-light">Multi Champion</td>
                                <td>Junior &amp; Sub-Junior Title Holder</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Right: Ranking Ascension Milestones -->
            <div>
                <h3 class="rankings-block-title-light">
                    <i class="fa-solid fa-route"></i>
                    <span>Ranking Breakthroughs</span>
                </h3>

                <div class="milestones-list-light">
                    <div class="milestone-item-light">
                        <div class="milestone-year-light">2026</div>
                        <div class="milestone-content-light">
                            <h4>Top 110 BWF World Breakthrough (#106)</h4>
                            <p>Bronze medal performance at the Uganda International Challenge in February propelled Lakshay from World #120 directly to #106.</p>
                        </div>
                    </div>

                    <div class="milestone-item-light">
                        <div class="milestone-year-light">2026</div>
                        <div class="milestone-content-light">
                            <h4>All-India Inter-Institutional Double Gold</h4>
                            <p>Captured Men's Singles Gold and Team Gold representing Airports Authority of India (AAI) at Raipur.</p>
                        </div>
                    </div>

                    <div class="milestone-item-light">
                        <div class="milestone-year-light">2025</div>
                        <div class="milestone-content-light">
                            <h4>All-India Senior Men's Singles Rank #4</h4>
                            <p>Reached the final of the All-India Senior Ranking Tournament in Hyderabad, earning Senior Silver and cementing top-4 national standing.</p>
                        </div>
                    </div>

                    <div class="milestone-item-light">
                        <div class="milestone-year-light">2024–25</div>
                        <div class="milestone-content-light">
                            <h4>European &amp; African Circuit Podiums</h4>
                            <p>Podium finishes at Polish International (Bronze), Czech Future Series (Bronze), and Cameroon International Challenge (Bronze).</p>
                        </div>
                    </div>

                    <div class="milestone-item-light">
                        <div class="milestone-year-light">2023</div>
                        <div class="milestone-content-light">
                            <h4>India Junior Team Captaincy &amp; Kazakhstan Silver</h4>
                            <p>Captained Team India at Badminton Asia Junior Championships in Indonesia and clinched Men's Singles Silver at Kazakhstan International Series.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include_once __DIR__ . '/includes/footer.php';
?>
