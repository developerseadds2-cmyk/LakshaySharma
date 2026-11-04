<?php
/**
 * LAKSHAY SHARMA - OFFICIAL CONTACT & COLLABORATION
 * Header in Dark Mode with Breadcrumb; Content Body in Light Mode
 */
$pageTitle = "Contact & Collaborations | Lakshay Sharma";
$currentPage = "contact";
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

.contact-main-section {
    padding: 4.5rem 0 5.5rem 0;
    background-color: #f8fafc;
}

.contact-layout-grid {
    display: grid;
    grid-template-columns: 1fr 1.35fr;
    gap: 4rem;
    align-items: start;
}

/* Left: Contact Info Cards */
.contact-info-col {
    display: flex;
    flex-direction: column;
    gap: 1.75rem;
}

.contact-intro-lead {
    font-size: 1.4rem;
    font-weight: 900;
    font-style: italic;
    color: #0b1528;
    line-height: 1.3;
}

.contact-intro-text {
    font-size: 0.98rem;
    color: #475569;
    line-height: 1.6;
}

.contact-detail-card {
    background: #ffffff;
    border: 1px solid rgba(11, 21, 40, 0.08);
    border-radius: 16px;
    padding: 1.5rem 1.6rem;
    display: flex;
    align-items: center;
    gap: 1.25rem;
    box-shadow: 0 4px 15px rgba(11, 21, 40, 0.04);
    transition: transform 0.25s ease, border-color 0.25s ease;
}

.contact-detail-card:hover {
    transform: translateY(-3px);
    border-color: #1769FF;
}

.contact-card-icon {
    width: 48px;
    height: 48px;
    border-radius: 12px;
    background: #f1f5f9;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #1769FF;
    font-size: 1.3rem;
    flex-shrink: 0;
}

.contact-card-label {
    font-size: 0.78rem;
    font-weight: 800;
    text-transform: uppercase;
    color: #64748b;
    letter-spacing: 1px;
    margin-bottom: 0.25rem;
}

.contact-card-val {
    font-size: 1.05rem;
    font-weight: 800;
    color: #0b1528;
}

/* Right: Modern Athletic Form */
.contact-form-card {
    background: #ffffff;
    border: 1px solid rgba(11, 21, 40, 0.08);
    border-radius: 20px;
    padding: 2.8rem 2.4rem;
    box-shadow: 0 8px 30px rgba(11, 21, 40, 0.06);
}

.form-group-row {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1.5rem;
    margin-bottom: 1.5rem;
}

.form-field {
    margin-bottom: 1.5rem;
}

.form-field label {
    display: block;
    font-size: 0.85rem;
    font-weight: 800;
    text-transform: uppercase;
    color: #0b1528;
    letter-spacing: 1px;
    margin-bottom: 0.5rem;
}

.form-field input,
.form-field select,
.form-field textarea {
    width: 100%;
    padding: 0.95rem 1.15rem;
    background: #f8fafc;
    border: 1px solid rgba(11, 21, 40, 0.12);
    border-radius: 10px;
    font-family: inherit;
    font-size: 0.95rem;
    color: #0b1528;
    transition: border-color 0.25s ease, background-color 0.25s ease, box-shadow 0.25s ease;
    box-sizing: border-box;
}

.form-field input:focus,
.form-field select:focus,
.form-field textarea:focus {
    outline: none;
    border-color: #1769FF;
    background-color: #ffffff;
    box-shadow: 0 0 0 3px rgba(23, 105, 255, 0.15);
}

.form-field .field-error {
    display: none;
    font-size: 0.8rem;
    color: #ef4444;
    font-weight: 600;
    margin-top: 0.4rem;
}

.form-field.has-error input,
.form-field.has-error textarea {
    border-color: #ef4444 !important;
    background-color: #fef2f2 !important;
}

.form-field.has-error .field-error {
    display: block;
}

.form-success-banner {
    display: none;
    padding: 1.1rem 1.4rem;
    background: #ecfdf5;
    border: 1px solid #10b981;
    border-radius: 12px;
    color: #065f46;
    font-weight: 700;
    font-size: 0.95rem;
    margin-bottom: 1.5rem;
    align-items: center;
    gap: 0.75rem;
}

.btn-submit-contact {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 0.75rem;
    padding: 1rem 2.2rem;
    background: var(--color-lime);
    color: #0b1528;
    font-weight: 900;
    font-size: 0.95rem;
    text-transform: uppercase;
    letter-spacing: 1px;
    border: none;
    border-radius: 10px;
    cursor: pointer;
    box-shadow: 0 4px 15px rgba(198, 241, 53, 0.4);
    transition: transform 0.25s ease, box-shadow 0.25s ease;
}

.btn-submit-contact:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(198, 241, 53, 0.6);
}

/* Responsive Rules */
@media (max-width: 1024px) {
    .contact-layout-grid {
        grid-template-columns: 1fr;
        gap: 2.5rem;
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

    .contact-main-section {
        padding: 2.5rem 0;
    }

    .contact-info-col {
        text-align: center;
    }

    .contact-detail-card {
        justify-content: center;
        text-align: left;
    }

    .contact-form-card {
        padding: 1.5rem 1.25rem;
        border-radius: 16px;
        width: 100%;
        box-sizing: border-box;
    }

    .contact-form-card form {
        width: 100%;
        text-align: left;
    }

    .form-group-row {
        grid-template-columns: 1fr;
        gap: 0;
        margin-bottom: 0;
    }

    .form-field {
        margin-bottom: 1.25rem;
        width: 100%;
        text-align: left;
    }

    .form-field label {
        text-align: left;
        margin-bottom: 0.4rem;
    }

    .form-field input,
    .form-field select,
    .form-field textarea {
        width: 100%;
        max-width: 100%;
        box-sizing: border-box;
        text-align: left;
    }

    .btn-submit-contact {
        width: 100%;
        box-sizing: border-box;
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
            <span class="crumb-current">Contact</span>
        </nav>

        <!-- Kicker Badge with /// -->
        <div>
            <div class="page-kicker-dark">
                <span class="page-kicker-slashes">///</span>
                <span>GET IN TOUCH</span>
            </div>
        </div>

        <!-- Main Title -->
        <h1 class="page-main-title-dark">
            Let's Connect &amp; Collaborate
        </h1>
    </div>
</section>

<!-- 2. CONTACT CONTENT & FORM (LIGHT MODE) -->
<section class="contact-main-section">
    <div class="site-container">
        <div class="contact-layout-grid">
            <!-- Left Column: Details & Collaborations -->
            <div class="contact-info-col">
                <div>
                    <h2 class="contact-intro-lead">
                        Interested in partnerships, sponsorships or media inquiries?
                    </h2>
                    <p class="contact-intro-text" style="margin-top: 0.75rem;">
                        Reach out for professional engagements, tournament updates, brand collaborations, or badminton training interactions.
                    </p>
                </div>

                <!-- Location Card -->
                <div class="contact-detail-card">
                    <div class="contact-card-icon"><i class="fa-solid fa-location-dot"></i></div>
                    <div>
                        <div class="contact-card-label">Training Base &amp; Hometown</div>
                        <div class="contact-card-val">Ludhiana, Punjab, India</div>
                    </div>
                </div>

                <!-- Sports Contract & Association Card -->
                <div class="contact-detail-card">
                    <div class="contact-card-icon"><i class="fa-solid fa-building-user"></i></div>
                    <div>
                        <div class="contact-card-label">Sports Contract Scheme</div>
                        <div class="contact-card-val">Airports Authority of India (AAI)</div>
                    </div>
                </div>

                <!-- Official Instagram Card -->
                <a href="https://www.instagram.com/lakshaysharma822/" target="_blank" rel="noopener noreferrer" class="contact-detail-card" style="text-decoration: none; color: inherit;">
                    <div class="contact-card-icon" style="color: #E1306C; background: rgba(225, 48, 108, 0.1);"><i class="fa-brands fa-instagram"></i></div>
                    <div>
                        <div class="contact-card-label">Official Instagram</div>
                        <div class="contact-card-val">@lakshaysharma822</div>
                    </div>
                </a>
            </div>

            <!-- Right Column: Interactive Contact Form -->
            <div class="contact-form-card">
                <div class="form-success-banner" id="form-success-msg" role="alert">
                    <i class="fa-solid fa-circle-check" style="font-size: 1.25rem; color: #10b981;"></i>
                    <span id="form-success-text">Thank you! Your message has been sent successfully. We will get back to you shortly.</span>
                </div>

                <div class="form-success-banner" id="form-error-msg" role="alert" style="background: #fef2f2; border-color: #ef4444; color: #991b1b; display: none;">
                    <i class="fa-solid fa-circle-exclamation" style="font-size: 1.25rem; color: #ef4444;"></i>
                    <span id="form-error-text">Unable to send message. Please try again.</span>
                </div>

                <form id="contact-form" novalidate>
                    <div class="form-group-row">
                        <div class="form-field" id="field-wrap-name">
                            <label for="contact-name">Your Full Name</label>
                            <input type="text" id="contact-name" name="name" placeholder="John Doe" minlength="2" maxlength="80" autocomplete="name" required>
                            <span class="field-error" id="error-name">Please enter your full name (minimum 2 characters).</span>
                        </div>
                        <div class="form-field" id="field-wrap-email">
                            <label for="contact-email">Email Address</label>
                            <input type="email" id="contact-email" name="email" placeholder="john@example.com" maxlength="120" autocomplete="email" required>
                            <span class="field-error" id="error-email">Please enter a valid email address.</span>
                        </div>
                    </div>

                    <div class="form-field" id="field-wrap-phone">
                        <label for="contact-phone">Phone Number</label>
                        <input type="tel" id="contact-phone" name="phone" placeholder="+91 98765 43210" pattern="[\+]?[0-9\s\-\(\)]{7,20}" maxlength="20" autocomplete="tel" required>
                        <span class="field-error" id="error-phone">Please enter a valid phone number (digits and optional country code, min 7 digits).</span>
                    </div>

                    <div class="form-field" id="field-wrap-message">
                        <label for="contact-message">Message</label>
                        <textarea id="contact-message" name="message" rows="5" placeholder="Share your message or proposal details..." minlength="10" maxlength="2000" required></textarea>
                        <span class="field-error" id="error-message">Please enter your message (minimum 10 characters).</span>
                    </div>

                    <button type="submit" class="btn-submit-contact" id="btn-submit-contact">
                        <span>Send Message</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('contact-form');
    if (!form) return;

    const nameInput = document.getElementById('contact-name');
    const emailInput = document.getElementById('contact-email');
    const phoneInput = document.getElementById('contact-phone');
    const messageInput = document.getElementById('contact-message');
    const successMsg = document.getElementById('form-success-msg');
    const successText = document.getElementById('form-success-text');
    const errorMsg = document.getElementById('form-error-msg');
    const errorText = document.getElementById('form-error-text');
    const submitBtn = document.getElementById('btn-submit-contact');

    function setFieldError(input, errorId, hasError) {
        const fieldWrap = input.closest('.form-field');
        if (!fieldWrap) return;
        if (hasError) {
            fieldWrap.classList.add('has-error');
        } else {
            fieldWrap.classList.remove('has-error');
        }
    }

    function validateName() {
        const val = nameInput.value.trim();
        const valid = val.length >= 2 && val.length <= 80;
        setFieldError(nameInput, 'error-name', !valid);
        return valid;
    }

    function validateEmail() {
        const val = emailInput.value.trim();
        // RFC 5322 compatible regex
        const emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)+$/;
        const valid = emailRegex.test(val);
        setFieldError(emailInput, 'error-email', !valid);
        return valid;
    }

    function validatePhone() {
        const val = phoneInput.value.trim();
        // Count total numeric digits
        const digits = val.replace(/\D/g, '');
        // Allow optional leading '+', digits, spaces, parentheses, dashes; must have 7 to 15 digits (ITU E.164)
        const formatValid = /^[\+]?[(]?[0-9]{1,4}[)]?[-\s\./0-9]*$/.test(val);
        const valid = formatValid && digits.length >= 7 && digits.length <= 15;
        setFieldError(phoneInput, 'error-phone', !valid);
        return valid;
    }

    function validateMessage() {
        const val = messageInput.value.trim();
        const valid = val.length >= 10 && val.length <= 2000;
        setFieldError(messageInput, 'error-message', !valid);
        return valid;
    }

    // Real-time validation on user blur & input
    nameInput.addEventListener('blur', validateName);
    nameInput.addEventListener('input', function () {
        if (nameInput.closest('.form-field').classList.contains('has-error')) validateName();
    });

    emailInput.addEventListener('blur', validateEmail);
    emailInput.addEventListener('input', function () {
        if (emailInput.closest('.form-field').classList.contains('has-error')) validateEmail();
    });

    phoneInput.addEventListener('blur', validatePhone);
    phoneInput.addEventListener('input', function () {
        if (phoneInput.closest('.form-field').classList.contains('has-error')) validatePhone();
    });

    messageInput.addEventListener('blur', validateMessage);
    messageInput.addEventListener('input', function () {
        if (messageInput.closest('.form-field').classList.contains('has-error')) validateMessage();
    });

    form.addEventListener('submit', function (e) {
        e.preventDefault();

        const isNameValid = validateName();
        const isEmailValid = validateEmail();
        const isPhoneValid = validatePhone();
        const isMessageValid = validateMessage();

        if (!isNameValid || !isEmailValid || !isPhoneValid || !isMessageValid) {
            // Focus on first invalid input
            const firstInvalid = form.querySelector('.has-error input, .has-error textarea');
            if (firstInvalid) firstInvalid.focus();
            return;
        }

        // Disable button while processing
        submitBtn.disabled = true;
        const originalBtnHtml = submitBtn.innerHTML;
        submitBtn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> <span>Sending...</span>';

        // Hide previous messages
        successMsg.style.display = 'none';
        errorMsg.style.display = 'none';

        // Send AJAX request to send-contact.php
        const formData = new FormData(form);

        fetch('send-contact.php', {
            method: 'POST',
            body: formData
        })
        .then(function (response) {
            return response.json();
        })
        .then(function (data) {
            submitBtn.disabled = false;
            submitBtn.innerHTML = originalBtnHtml;

            if (data.success) {
                form.reset();
                if (data.message && successText) successText.textContent = data.message;
                successMsg.style.display = 'flex';
                successMsg.scrollIntoView({ behavior: 'smooth', block: 'nearest' });

                setTimeout(function () {
                    successMsg.style.display = 'none';
                }, 8000);
            } else {
                if (data.message && errorText) errorText.textContent = data.message;
                errorMsg.style.display = 'flex';
                errorMsg.scrollIntoView({ behavior: 'smooth', block: 'nearest' });

                // If backend validation returned specific field errors
                if (data.errors) {
                    if (data.errors.name) setFieldError(nameInput, 'error-name', true);
                    if (data.errors.email) setFieldError(emailInput, 'error-email', true);
                    if (data.errors.phone) setFieldError(phoneInput, 'error-phone', true);
                    if (data.errors.message) setFieldError(messageInput, 'error-message', true);
                }
            }
        })
        .catch(function (err) {
            submitBtn.disabled = false;
            submitBtn.innerHTML = originalBtnHtml;

            if (errorText) errorText.textContent = 'Server connection error. Please try again later.';
            errorMsg.style.display = 'flex';
            errorMsg.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        });
    });
});
</script>

<?php
include_once __DIR__ . '/includes/footer.php';
?>
