<?php
/**
 * Clean Minimal Full-Width Coming Soon Page
 * Lakshay Sharma Portfolio
 */

// Detect page name from query string or parent file
$requestedPage = isset($_GET['page']) ? trim($_GET['page']) : '';
if (!$requestedPage && isset($pageName)) {
    $requestedPage = $pageName;
}

$displayName = !empty($requestedPage) ? ucwords(str_replace(['-', '_'], ' ', htmlspecialchars($requestedPage))) : "Page";
$pageTitle = $displayName . " Coming Soon | Lakshay Sharma";
$currentPage = !empty($requestedPage) ? strtolower($requestedPage) : "coming-soon";

include_once __DIR__ . '/includes/header.php';
?>

<section class="coming-soon-section">
    <!-- Atmospheric Ambient Backgrounds -->
    <div class="coming-soon-bg-media">
        <img src="assets/images/image7.jpg" alt="Lakshay Sharma Court Background" class="coming-soon-bg-img">
        <div class="coming-soon-overlay"></div>
    </div>

    <!-- Glowing accents -->
    <div class="cs-glow-orb cs-glow-1"></div>
    <div class="cs-glow-orb cs-glow-2"></div>

    <div class="site-container coming-soon-container">
        <!-- Single-Line Minimal Coming Soon Heading -->
        <h1 class="cs-title cs-title-single-line anim-fade-up">
            <span class="cs-page-highlight"><?php echo htmlspecialchars($displayName); ?></span>
            <span class="cs-sub-title">Coming Soon</span>
        </h1>
    </div>
</section>

<?php
include_once __DIR__ . '/includes/footer.php';
?>
