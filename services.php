<?php include 'includes/header.php'; ?>

<?php
$pageTitle = 'Our Services';
$pageScript = 'Makeup Services';
$pageImg = 'hero-bride.jpg';
$pageDesc = 'Bridal, party, engagement & reception makeup by expert artists — premium products, customized packages & home service available.';
$pageMsg = 'Hi! I want to book a makeup service.';
$pageBtnText = 'Call Us';
$pageBtnLink = 'tel:' . SITE_PHONE_LINK;
$pageBtnIcon = 'fa-solid fa-phone';
$pageBadgeTop = '₹1k';
$pageBadgeSub = 'Packages from';
include 'includes/page-hero.php';
?>

<!-- ===================== SERVICES ===================== -->
<section class="services services-page">
    <div class="container services-inner">
        <div class="service-main-img reveal">
            <img src="assets/images/service-main.jpg" alt="Bridal makeup look" loading="lazy">
        </div>

        <div class="services-content">
            <span class="script-text services-script">Makeup Services</span>
            <p class="services-sub">Book professional makeup services for your special occasions. We offer customized packages for every event.</p>

            <div class="services-grid">
                <div class="service-item reveal">
                    <span class="svc-icon"><i class="fa-solid fa-ring"></i></span>
                    <h4>Bridal Makeup</h4>
                    <p>₹15,000+</p>
                </div>
                <div class="service-item reveal">
                    <span class="svc-icon"><i class="fa-solid fa-wand-magic-sparkles"></i></span>
                    <h4>Party Makeup</h4>
                    <p>₹3,500+</p>
                </div>
                <div class="service-item reveal">
                    <span class="svc-icon"><i class="fa-solid fa-gem"></i></span>
                    <h4>Engagement Makeup</h4>
                    <p>₹8,000+</p>
                </div>
                <div class="service-item reveal">
                    <span class="svc-icon"><i class="fa-solid fa-crown"></i></span>
                    <h4>Reception Makeup</h4>
                    <p>₹10,000+</p>
                </div>
                <div class="service-item reveal">
                    <span class="svc-icon"><i class="fa-solid fa-spa"></i></span>
                    <h4>Facial &amp; Skin Care</h4>
                    <p>₹1,500+</p>
                </div>
                <div class="service-item reveal">
                    <span class="svc-icon"><i class="fa-solid fa-scissors"></i></span>
                    <h4>Hair Styling</h4>
                    <p>₹1,000+</p>
                </div>
            </div>

            <a class="btn btn-whatsapp" href="<?php echo wa_link('Hi! I want to book a makeup service. Please share packages & availability.'); ?>" target="_blank" rel="noopener"><i class="fa-brands fa-whatsapp"></i> Book on WhatsApp</a>
        </div>

        <div class="services-collage">
            <div class="collage-grid">
                <img src="assets/images/svc-eye.jpg" alt="Eye makeup" class="reveal" loading="lazy">
                <img src="assets/images/svc-tools.jpg" alt="Makeup brushes" class="reveal" loading="lazy">
                <img src="assets/images/svc-lips.jpg" alt="Lipstick" class="reveal" loading="lazy">
                <img src="assets/images/svc-palette.jpg" alt="Makeup palette" class="reveal" loading="lazy">
            </div>
            <span class="collage-script script-text">Be Your Own<br>Beautiful</span>
        </div>
    </div>
</section>

<!-- ===================== SERVICE NOTES ===================== -->
<section class="section-pad">
    <div class="container">
        <div class="page-head reveal">
            <h2>Why Book <em class="script-text">With Us</em></h2>
            <p>Premium products, hygienic tools and artists who understand your skin and style.</p>
        </div>
        <div class="why-grid service-perks">
            <div class="why-item reveal">
                <span class="why-icon"><i class="fa-solid fa-pump-soap"></i></span>
                <h4>Premium<br>Products</h4>
            </div>
            <div class="why-item reveal">
                <span class="why-icon"><i class="fa-solid fa-house-chimney"></i></span>
                <h4>Home Service<br>Available</h4>
            </div>
            <div class="why-item reveal">
                <span class="why-icon"><i class="fa-solid fa-palette"></i></span>
                <h4>Customized<br>Packages</h4>
            </div>
            <div class="why-item reveal">
                <span class="why-icon"><i class="fa-solid fa-star"></i></span>
                <h4>4.9 Rated<br>Artists</h4>
            </div>
        </div>
    </div>
</section>

<!-- ===================== CTA ===================== -->
<section class="cta-banner">
    <div class="cta-bg" style="background-image:url('assets/images/cta-bg.jpg')"></div>
    <div class="container cta-inner">
        <div class="cta-text reveal">
            <span class="script-text">Special Occasion</span>
            <h2>Coming Up?</h2>
            <p>Book your makeup slot early —<br>wedding dates fill fast!</p>
        </div>
        <div class="cta-btns reveal">
            <a class="btn btn-whatsapp" href="<?php echo wa_link('Hi! I want to book a makeup service. Please share packages & availability.'); ?>" target="_blank" rel="noopener"><i class="fa-brands fa-whatsapp"></i> Chat on WhatsApp</a>
            <a href="tel:<?php echo SITE_PHONE_LINK; ?>" class="btn btn-outline-light"><i class="fa-solid fa-phone"></i> Call Us</a>
        </div>
        <div class="cta-script script-text">Dream<br>Believe<br>Achieve</div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
