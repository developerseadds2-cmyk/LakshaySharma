<?php
/**
 * 404 - Page Not Found
 * Lakshay Sharma Official Portfolio
 */
http_response_code(404);

// Detect page name from query string if available
$requestedPage = isset($_GET['page']) ? trim($_GET['page']) : '';
if (!$requestedPage && isset($pageName)) {
    $requestedPage = $pageName;
}

$pageTitle = "404 - Page Not Found | Lakshay Sharma";
$currentPage = "404";
$homeUrl = "index";

include_once __DIR__ . '/includes/header.php';
?>

<section class="error-404-section">
    <!-- Atmospheric Ambient Backgrounds -->
    <div class="coming-soon-bg-media">
        <img src="assets/images/image7.jpg" alt="Lakshay Sharma Court Background" class="coming-soon-bg-img">
        <div class="coming-soon-overlay"></div>
    </div>

    <!-- Glowing accents -->
    <div class="cs-glow-orb cs-glow-1"></div>
    <div class="cs-glow-orb cs-glow-2"></div>

    <div class="site-container error-404-container">
        <div class="error-404-content anim-fade-up">
            <!-- Badge / Kicker -->
            <div class="error-404-badge">
                <span class="badge-dot"></span>
                <span>OUT OF BOUNDS</span>
            </div>

            <!-- Big 404 Heading -->
            <h1 class="error-404-code">404</h1>

            <!-- Subtitle -->
            <h2 class="error-404-title">Shot Out Of Court!</h2>

            <p class="error-404-desc">
                The page you are looking for seems to have flown out of the court or does not exist. Let's get you back in the rally.
            </p>

            <!-- Actions -->
            <div class="error-404-actions">
                <a href="index" class="btn2-lime">
                    <i class="fa-solid fa-house"></i>
                    <span>Back To Home</span>
                </a>
                <a href="contact" class="btn-cs-secondary">
                    <i class="fa-regular fa-envelope"></i>
                    <span>Contact Us</span>
                </a>
            </div>
        </div>
    </div>
</section>

<?php
include_once __DIR__ . '/includes/footer.php';
?>
