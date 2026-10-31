<?php
$pageTitle = "Gallery & Media | Lakshay Sharma";
$currentPage = "gallery";
include_once __DIR__ . '/includes/header.php';

// Image data extracted from profile and court records
$galleryItems = [
    [
        'src' => 'assets/images/image1.jpg',
        'title' => 'Focused in Action',
        'category' => 'match',
        'caption' => 'High intensity on-court action during national championship'
    ],
    [
        'src' => 'assets/images/image2.jpg',
        'title' => 'Precision Return',
        'category' => 'match',
        'caption' => 'Deep backcourt recovery and smash setup'
    ],
    [
        'src' => 'assets/images/image3.jpg',
        'title' => 'Victory Celebration',
        'category' => 'podium',
        'caption' => 'Proud moment on the podium with gold and national colors'
    ],
    [
        'src' => 'assets/images/image4.jpg',
        'title' => 'Net Play Masterclass',
        'category' => 'match',
        'caption' => 'Dynamic net kill technique at high competitive pace'
    ],
    [
        'src' => 'assets/images/image5.jpg',
        'title' => 'International Court',
        'category' => 'international',
        'caption' => 'Representing India at international challenge series'
    ],
    [
        'src' => 'assets/images/image6.jpg',
        'title' => 'Medal Honor',
        'category' => 'podium',
        'caption' => 'Recognized by the Badminton Association of India'
    ],
    [
        'src' => 'assets/images/image7.jpg',
        'title' => 'Match Point Focus',
        'category' => 'match',
        'caption' => 'Total dedication and composure under crunch situations'
    ],
    [
        'src' => 'assets/images/image8.jpg',
        'title' => 'Court Dominance',
        'category' => 'international',
        'caption' => 'Competing against world-class contenders'
    ],
    [
        'src' => 'assets/images/image9.jpg',
        'title' => 'Training & Conditioning',
        'category' => 'training',
        'caption' => 'Rigorous training camp preparations'
    ],
    [
        'src' => 'assets/images/image10.jpg',
        'title' => 'Sub-Junior to Senior Journey',
        'category' => 'training',
        'caption' => 'Years of consistent excellence from age 7 to Senior rank #4'
    ],
];
?>

<!-- Section Header -->
<section class="gallery-hero-section">
    <div class="site-container">
        <span class="section-tag">MOMENTS ON COURT</span>
        <h1 class="page-title">Gallery &amp; <span class="text-lime">Media</span></h1>
        <p class="page-subtitle">A visual chronicle of Lakshay Sharma's journey, from national podiums to the global badminton arena.</p>

        <!-- Category Filters -->
        <div class="gallery-filter-tabs">
            <button class="filter-btn active" data-filter="all">All Media</button>
            <button class="filter-btn" data-filter="match">Match Action</button>
            <button class="filter-btn" data-filter="podium">Podium &amp; Medals</button>
            <button class="filter-btn" data-filter="international">International</button>
            <button class="filter-btn" data-filter="training">Training</button>
        </div>
    </div>
</section>

<!-- Gallery Grid -->
<section class="gallery-grid-section">
    <div class="site-container">
        <div class="gallery-grid" id="gallery-grid">
            <?php foreach ($galleryItems as $index => $item): ?>
                <div class="gallery-card" data-category="<?php echo htmlspecialchars($item['category']); ?>" data-index="<?php echo $index; ?>">
                    <div class="gallery-thumb-wrap">
                        <img src="<?php echo htmlspecialchars($item['src']); ?>" alt="<?php echo htmlspecialchars($item['title']); ?>" loading="lazy">
                        <div class="gallery-overlay">
                            <span class="gallery-category-badge"><?php echo ucfirst(htmlspecialchars($item['category'])); ?></span>
                            <h3 class="gallery-item-title"><?php echo htmlspecialchars($item['title']); ?></h3>
                            <p class="gallery-item-caption"><?php echo htmlspecialchars($item['caption']); ?></p>
                            <span class="gallery-zoom-icon">&#128269; View</span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Lightbox Modal -->
<div class="lightbox-modal" id="lightbox-modal" aria-hidden="true" role="dialog">
    <div class="lightbox-backdrop" id="lightbox-backdrop"></div>
    <div class="lightbox-dialog">
        <button class="lightbox-close" id="lightbox-close" aria-label="Close modal">&times;</button>
        <button class="lightbox-nav lightbox-prev" id="lightbox-prev" aria-label="Previous image">&#10094;</button>
        <button class="lightbox-nav lightbox-next" id="lightbox-next" aria-label="Next image">&#10095;</button>
        <div class="lightbox-img-wrapper">
            <img src="" id="lightbox-img" alt="Enlarged view">
        </div>
        <div class="lightbox-info">
            <h4 id="lightbox-title"></h4>
            <p id="lightbox-caption"></p>
        </div>
    </div>
</div>

<?php
include_once __DIR__ . '/includes/footer.php';
?>

