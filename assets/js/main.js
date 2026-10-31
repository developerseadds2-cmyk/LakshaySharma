// High-Performance Smooth Scroll Animations & Live Counters
(function() {
    'use strict';

    // 1. Live Number Counters when Stats Bar enters view
    function initCounters() {
        var counters = document.querySelectorAll('.counter');
        if (!counters.length) return;
        var counted = false;

        function runCounters() {
            if (counted) return;
            counted = true;

            counters.forEach(function(counter) {
                var target = parseInt(counter.getAttribute('data-target'), 10) || 0;
                var duration = 1600; // ms smooth run
                var startTime = null;

                function easeOutQuart(x) {
                    return 1 - Math.pow(1 - x, 4);
                }

                function step(timestamp) {
                    if (!startTime) startTime = timestamp;
                    var progress = Math.min((timestamp - startTime) / duration, 1);
                    var current = Math.floor(easeOutQuart(progress) * target);
                    counter.textContent = current;

                    if (progress < 1) {
                        requestAnimationFrame(step);
                    } else {
                        counter.textContent = target;
                    }
                }
                requestAnimationFrame(step);
            });
        }

        var statsBar = document.querySelector('.hero-stats-bar');
        if (statsBar && 'IntersectionObserver' in window) {
            var statsObserver = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        runCounters();
                        statsObserver.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.2 });
            statsObserver.observe(statsBar);
        } else {
            runCounters();
        }
    }

    // 2. Smooth Scroll Reveal (Triggered fluidly as user scrolls down)
    function initSmoothScrollReveal() {
        var elements = document.querySelectorAll('.reveal-on-scroll');
        if (!elements.length) return;

        if ('IntersectionObserver' in window) {
            var revealObserver = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        var el = entry.target;
                        var delay = parseInt(el.getAttribute('data-delay'), 10) || 0;

                        setTimeout(function() {
                            el.classList.add('is-revealed');
                        }, delay);

                        revealObserver.unobserve(el);
                    }
                });
            }, {
                rootMargin: '0px 0px -70px 0px', // Triggers naturally when scrolled 70px into view
                threshold: 0.12
            });

            elements.forEach(function(el) {
                revealObserver.observe(el);
            });
        } else {
            elements.forEach(function(el) {
                el.classList.add('is-revealed');
            });
        }
    }

    // 3. Sibling Photo Dimming on Hover
    function initGalleryHover() {
        var galleryCards = document.querySelectorAll('.court-photos-grid .court-photo-card');
        if (!galleryCards.length) return;

        galleryCards.forEach(function(card) {
            card.addEventListener('mouseenter', function() {
                galleryCards.forEach(function(c) {
                    if (c !== card) c.style.opacity = '0.5';
                });
            });
            card.addEventListener('mouseleave', function() {
                galleryCards.forEach(function(c) {
                    c.style.opacity = '1';
                });
            });
        });
    }

    // 4. Mobile Menu Toggle
    function initMobileNav() {
        var toggleBtn = document.getElementById('mobile-toggle');
        var navMenu = document.getElementById('primary-navigation');

        if (toggleBtn && navMenu) {
            toggleBtn.addEventListener('click', function() {
                navMenu.classList.toggle('show');
            });
        }
    }

    // 5. Gallery Page Filtering & Lightbox (gallery.php)
    function initGalleryPage() {
        var filterButtons = document.querySelectorAll('.gallery-filter-tabs .filter-btn');
        var pageGalleryCards = document.querySelectorAll('.gallery-grid .gallery-card');

        if (filterButtons.length && pageGalleryCards.length) {
            filterButtons.forEach(function(btn) {
                btn.addEventListener('click', function() {
                    filterButtons.forEach(function(b) { b.classList.remove('active'); });
                    btn.classList.add('active');

                    var filterValue = btn.getAttribute('data-filter');
                    pageGalleryCards.forEach(function(card) {
                        var cardCat = card.getAttribute('data-category');
                        if (filterValue === 'all' || cardCat === filterValue) {
                            card.style.display = 'block';
                        } else {
                            card.style.display = 'none';
                        }
                    });
                });
            });
        }

        var modal = document.getElementById('lightbox-modal');
        var modalBackdrop = document.getElementById('lightbox-backdrop');
        var modalClose = document.getElementById('lightbox-close');
        var modalImg = document.getElementById('lightbox-img');
        var modalTitle = document.getElementById('lightbox-title');
        var modalCaption = document.getElementById('lightbox-caption');
        var prevBtn = document.getElementById('lightbox-prev');
        var nextBtn = document.getElementById('lightbox-next');

        if (modal && pageGalleryCards.length) {
            var cardsList = Array.from(pageGalleryCards);
            var currentIndex = 0;

            function openModal(index) {
                currentIndex = index;
                var targetCard = cardsList[currentIndex];
                var img = targetCard.querySelector('img');
                var title = targetCard.querySelector('.gallery-item-title');
                var cap = targetCard.querySelector('.gallery-item-caption');

                modalImg.src = img ? img.src : '';
                modalTitle.textContent = title ? title.textContent : '';
                modalCaption.textContent = cap ? cap.textContent : '';

                modal.classList.add('active');
                modal.setAttribute('aria-hidden', 'false');
                document.body.style.overflow = 'hidden';
            }

            function closeModal() {
                modal.classList.remove('active');
                modal.setAttribute('aria-hidden', 'true');
                document.body.style.overflow = '';
            }

            function showNext() {
                var nextIndex = (currentIndex + 1) % cardsList.length;
                while (cardsList[nextIndex].style.display === 'none' && nextIndex !== currentIndex) {
                    nextIndex = (nextIndex + 1) % cardsList.length;
                }
                openModal(nextIndex);
            }

            function showPrev() {
                var prevIndex = (currentIndex - 1 + cardsList.length) % cardsList.length;
                while (cardsList[prevIndex].style.display === 'none' && prevIndex !== currentIndex) {
                    prevIndex = (prevIndex - 1 + cardsList.length) % cardsList.length;
                }
                openModal(prevIndex);
            }

            cardsList.forEach(function(card, idx) {
                card.addEventListener('click', function() { openModal(idx); });
            });

            if (modalClose) modalClose.addEventListener('click', closeModal);
            if (modalBackdrop) modalBackdrop.addEventListener('click', closeModal);
            if (nextBtn) nextBtn.addEventListener('click', function(e) { e.stopPropagation(); showNext(); });
            if (prevBtn) prevBtn.addEventListener('click', function(e) { e.stopPropagation(); showPrev(); });

            document.addEventListener('keydown', function(e) {
                if (!modal.classList.contains('active')) return;
                if (e.key === 'Escape') closeModal();
                if (e.key === 'ArrowRight') showNext();
                if (e.key === 'ArrowLeft') showPrev();
            });
        }
    }

    // Initialize all
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', function() {
            initCounters();
            initSmoothScrollReveal();
            initGalleryHover();
            initMobileNav();
            initGalleryPage();
        });
    } else {
        initCounters();
        initSmoothScrollReveal();
        initGalleryHover();
        initMobileNav();
        initGalleryPage();
    }
})();
