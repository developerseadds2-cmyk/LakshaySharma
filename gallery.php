<?php
/**
 * LAKSHAY SHARMA - OFFICIAL GALLERY & MEDIA
 * Clean athletic structure matching other content pages:
 * - Header in Dark Mode with Breadcrumb (no subtitle)
 * - Gallery Body in Light Mode
 * - No category filter tabs
 * - Hover state reveals clean zoom icon without overlay text
 * - Interactive Lightbox for full-size viewing
 */
$pageTitle = "Gallery & Media | Lakshay Sharma";
$currentPage = "gallery";
include_once __DIR__ . '/includes/header.php';

// Collection of documented high-resolution match, action, and podium photos
$photos = [
    'assets/images/image1.jpg',
    'assets/images/image2.jpg',
    'assets/images/image3.jpg',
    'assets/images/image4.jpg',
    'assets/images/image5.jpg',
    'assets/images/image6.jpg',
    'assets/images/image7.jpg',
    'assets/images/image8.jpg',
    'assets/images/image9.jpg',
    'assets/images/image10.jpg',
    'assets/images/Focused Badminton Player at Yonex Championship.png',
    'assets/images/Midair Badminton Championship Rally.png',
    'assets/images/Intense Badminton Match in a Stadium.png',
    'assets/images/Award Winner with Certificate and Trophy.png',
];
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
   2. GALLERY GRID SECTION (LIGHT MODE)
   ========================================================================== */
.gallery-section-light {
    padding: 3.8rem 0 5.5rem 0;
    background-color: #f8fafc;
}

.clean-gallery-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 1.35rem;
}

.clean-gallery-card {
    position: relative;
    border-radius: 16px;
    overflow: hidden;
    background: #ffffff;
    border: 1px solid rgba(11, 21, 40, 0.08);
    box-shadow: 0 4px 15px rgba(11, 21, 40, 0.04);
    height: 250px;
    cursor: pointer;
    transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.3s ease, border-color 0.3s ease;
}

.clean-gallery-card:hover {
    transform: translateY(-5px);
    border-color: #1769FF;
    box-shadow: 0 16px 32px rgba(11, 21, 40, 0.12);
}

.clean-gallery-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center top;
    display: block;
    transition: transform 0.5s cubic-bezier(0.16, 1, 0.3, 1);
}

.clean-gallery-card.contain-fit .clean-gallery-img {
    object-fit: contain;
    background-color: #f1f5f9;
}

.clean-gallery-card:hover .clean-gallery-img {
    transform: scale(1.06);
}

/* Minimal Hover Overlay - Pure Clean Zoom Icon (NO TEXT) */
.clean-gallery-overlay {
    position: absolute;
    inset: 0;
    background: rgba(11, 21, 40, 0.45);
    backdrop-filter: blur(2px);
    -webkit-backdrop-filter: blur(2px);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.clean-gallery-card:hover .clean-gallery-overlay {
    opacity: 1;
}

.clean-zoom-circle {
    width: 52px;
    height: 52px;
    border-radius: 50%;
    background: var(--color-lime);
    color: #0b1528;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.25rem;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
    transform: scale(0.8);
    transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1);
}

.clean-gallery-card:hover .clean-zoom-circle {
    transform: scale(1);
}

/* ==========================================================================
   3. LIGHTBOX MODAL
   ========================================================================== */
.lightbox-modal {
    position: fixed;
    inset: 0;
    z-index: 9999;
    display: none;
    align-items: center;
    justify-content: center;
}

.lightbox-modal.is-active {
    display: flex;
}

.lightbox-backdrop {
    position: absolute;
    inset: 0;
    background: rgba(7, 13, 26, 0.94);
    backdrop-filter: blur(10px);
}

.lightbox-dialog {
    position: relative;
    z-index: 2;
    max-width: 90vw;
    max-height: 90vh;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.lightbox-dialog img {
    max-width: 100%;
    max-height: 82vh;
    border-radius: 12px;
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.6);
    object-fit: contain;
    display: block;
}

.lightbox-close-btn {
    position: absolute;
    top: -46px;
    right: 0;
    background: rgba(255, 255, 255, 0.1);
    color: #ffffff;
    border: none;
    width: 38px;
    height: 38px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    font-size: 1.1rem;
    transition: background 0.2s ease, transform 0.2s ease;
}

.lightbox-close-btn:hover {
    background: var(--color-lime);
    color: #0b1528;
    transform: scale(1.1);
}

.lightbox-nav-btn {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(255, 255, 255, 0.12);
    color: #ffffff;
    border: none;
    width: 44px;
    height: 44px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    font-size: 1.2rem;
    transition: background 0.2s ease, transform 0.2s ease;
    z-index: 3;
}

.lightbox-nav-btn:hover {
    background: var(--color-lime);
    color: #0b1528;
}

.lightbox-prev-btn { left: -60px; }
.lightbox-next-btn { right: -60px; }

/* Responsive Rules */
@media (max-width: 1200px) {
    .clean-gallery-grid {
        grid-template-columns: repeat(3, 1fr);
        gap: 1.25rem;
    }
}

@media (max-width: 900px) {
    .clean-gallery-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 1.15rem;
    }

    .lightbox-prev-btn { left: 10px; }
    .lightbox-next-btn { right: 10px; }
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

    .gallery-section-light {
        padding: 2.5rem 0 4rem 0;
    }

    .clean-gallery-grid {
        grid-template-columns: 1fr;
        gap: 1.15rem;
    }

    .clean-gallery-card {
        height: 230px;
    }

    .lightbox-dialog {
        max-width: 95vw;
    }

    .lightbox-close-btn {
        top: -42px;
        right: 4px;
    }
}
</style>

<!-- ==========================================================================
     1. HEADER BANNER (DARK MODE ONLY)
     ========================================================================== -->
<section class="page-header-dark">
    <div class="site-container">
        <!-- Breadcrumb Navigation -->
        <nav class="page-breadcrumb" aria-label="Breadcrumb">
            <a href="index"><i class="fa-solid fa-house"></i> Home</a>
            <span class="crumb-sep">/</span>
            <span class="crumb-current">Gallery &amp; Media</span>
        </nav>

        <!-- Kicker Badge with /// -->
        <div>
            <div class="page-kicker-dark">
                <span class="page-kicker-slashes">///</span>
                <span>MOMENTS ON COURT</span>
            </div>
        </div>

        <!-- Main Title -->
        <h1 class="page-main-title-dark">
            Gallery &amp; Action Media
        </h1>
    </div>
</section>

<!-- ==========================================================================
     2. GALLERY GRID (LIGHT MODE - CLEAN HOVER, NO CATEGORIES, NO HOVER TEXT)
     ========================================================================== -->
<section class="gallery-section-light">
    <div class="site-container">
        <div class="clean-gallery-grid">
            <?php foreach ($photos as $idx => $photo): 
                $isPortrait = strpos($photo, 'Award Winner') !== false;
            ?>
                <div class="clean-gallery-card <?php echo $isPortrait ? 'contain-fit' : ''; ?>" onclick="openLightbox(<?php echo $idx; ?>)">
                    <img src="<?php echo htmlspecialchars($photo); ?>" alt="Lakshay Sharma Match Moment" class="clean-gallery-img" loading="lazy">
                    <!-- Clean Hover Overlay with Pure Icon (NO TEXT) -->
                    <div class="clean-gallery-overlay">
                        <div class="clean-zoom-circle">
                            <i class="fa-solid fa-expand"></i>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Lightbox Modal -->
<div class="lightbox-modal" id="lightbox-modal" role="dialog" aria-modal="true" aria-label="Enlarged Image">
    <div class="lightbox-backdrop" onclick="closeLightbox()"></div>
    <div class="lightbox-dialog">
        <button class="lightbox-close-btn" onclick="closeLightbox()" aria-label="Close modal">
            <i class="fa-solid fa-xmark"></i>
        </button>
        <button class="lightbox-nav-btn lightbox-prev-btn" onclick="prevLightboxImage()" aria-label="Previous photo">
            <i class="fa-solid fa-chevron-left"></i>
        </button>
        <button class="lightbox-nav-btn lightbox-next-btn" onclick="nextLightboxImage()" aria-label="Next photo">
            <i class="fa-solid fa-chevron-right"></i>
        </button>
        <img id="lightbox-current-img" src="" alt="Enlarged view">
    </div>
</div>

<script>
const galleryPhotos = <?php echo json_encode($photos); ?>;
let currentIdx = 0;

function openLightbox(index) {
    currentIdx = index;
    const modal = document.getElementById('lightbox-modal');
    const img = document.getElementById('lightbox-current-img');
    img.src = galleryPhotos[currentIdx];
    modal.classList.add('is-active');
    document.body.style.overflow = 'hidden';
}

function closeLightbox() {
    const modal = document.getElementById('lightbox-modal');
    modal.classList.remove('is-active');
    document.body.style.overflow = '';
}

function nextLightboxImage() {
    currentIdx = (currentIdx + 1) % galleryPhotos.length;
    document.getElementById('lightbox-current-img').src = galleryPhotos[currentIdx];
}

function prevLightboxImage() {
    currentIdx = (currentIdx - 1 + galleryPhotos.length) % galleryPhotos.length;
    document.getElementById('lightbox-current-img').src = galleryPhotos[currentIdx];
}

// Keyboard shortcuts for lightbox
document.addEventListener('keydown', function(e) {
    const modal = document.getElementById('lightbox-modal');
    if (!modal.classList.contains('is-active')) return;
    if (e.key === 'Escape') closeLightbox();
    if (e.key === 'ArrowRight') nextLightboxImage();
    if (e.key === 'ArrowLeft') prevLightboxImage();
});
</script>

<?php
include_once __DIR__ . '/includes/footer.php';
?>
