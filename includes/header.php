<?php
// Default active page fallback if not defined by caller page
if (!isset($currentPage)) {
    $currentPage = 'home';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) : "Lakshay Sharma | Indian Badminton Player"; ?></title>
    <!-- Google Font: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Main Stylesheet (with cache-buster) -->
    <link rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>">
</head>
<body>
    <header class="site-header">
        <div class="site-container header-container">
            <!-- Brand Logo -->
            <a href="index.php" class="brand-logo" aria-label="Lakshay Sharma Home">
                <div class="logo-badge">LS</div>
                <div class="logo-text">
                    <span class="logo-name">Lakshay</span>
                    <span class="logo-sub">Sharma</span>
                </div>
            </a>

            <!-- Navigation Menu -->
            <nav>
                <ul class="nav-menu" id="primary-navigation">
                    <li><a href="index.php" class="nav-link <?php echo ($currentPage === 'home') ? 'active' : ''; ?>">Home</a></li>
                    <li><a href="about.php" class="nav-link <?php echo ($currentPage === 'about') ? 'active' : ''; ?>">About</a></li>
                    <li><a href="achievements.php" class="nav-link <?php echo ($currentPage === 'achievements') ? 'active' : ''; ?>">Achievements</a></li>
                    <li><a href="rankings.php" class="nav-link <?php echo ($currentPage === 'rankings') ? 'active' : ''; ?>">Rankings</a></li>
                    <li><a href="gallery.php" class="nav-link <?php echo in_array($currentPage, ['gallery', 'media']) ? 'active' : ''; ?>">Gallery / Media</a></li>
                    <li><a href="contact.php" class="nav-link <?php echo ($currentPage === 'contact') ? 'active' : ''; ?>">Contact</a></li>
                </ul>
            </nav>

            <!-- Social Media Follow Pill -->
            <div class="header-actions">
                <div class="follow-pill">
                    <span>Follow</span>
                    <div class="follow-icons">
                        <!-- Instagram Icon -->
                        <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" class="social-icon-btn" aria-label="Instagram">
                            <svg viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>
                        <!-- YouTube Icon -->
                        <a href="https://youtube.com" target="_blank" rel="noopener noreferrer" class="social-icon-btn" aria-label="YouTube">
                            <svg viewBox="0 0 24 24">
                                <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                            </svg>
                        </a>
                        <!-- X / Twitter Icon -->
                        <a href="https://twitter.com" target="_blank" rel="noopener noreferrer" class="social-icon-btn" aria-label="X (Twitter)">
                            <svg viewBox="0 0 24 24">
                                <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Mobile Menu Hamburger -->
            <button class="mobile-nav-toggle" id="mobile-toggle" aria-label="Toggle navigation">
                &#9776;
            </button>
        </div>
    </header>
    <main class="site-main">
