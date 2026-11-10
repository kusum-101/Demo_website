<?php include 'includes/header.php'; ?>

<?php
$pageTitle = 'Gallery';
$pageScript = 'Crafting Beauty';
$pageImg = 'gal1.jpg';
$pageDesc = 'Bridal transformations, student work & academy moments — see the stunning looks our artists create every day.';
$pageMsg = 'Hi! I saw your gallery and want to book a session.';
$pageBtnText = 'Instagram';
$pageBtnLink = INSTA_URL;
$pageBtnIcon = 'fa-brands fa-instagram';
$pageBadgeTop = '500+';
$pageBadgeSub = 'Looks Created';
include 'includes/page-hero.php';
?>

<!-- ===================== GALLERY ===================== -->
<section class="section-pad gallery-page">
    <div class="container">
        <div class="page-head reveal">
            <h2>Crafting Beauty, <em class="script-text">One Look at a Time</em></h2>
            <p>Bridal transformations, student work and academy moments. Click any image to view.</p>
        </div>

        <div class="gallery-page-grid">
            <img src="assets/images/service-main.jpg" alt="Bridal look" class="gal-img reveal" loading="lazy">
            <img src="assets/images/hero-bride.jpg" alt="Traditional look" class="gal-img reveal" loading="lazy">
            <img src="assets/images/gal1.jpg" alt="Beauty portrait" class="gal-img reveal" loading="lazy">
            <img src="assets/images/svc-eye.jpg" alt="Eye makeup" class="gal-img reveal" loading="lazy">
            <img src="assets/images/gal2.jpg" alt="Makeup look" class="gal-img reveal" loading="lazy">
            <img src="assets/images/gal3.jpg" alt="Makeup products" class="gal-img reveal" loading="lazy">
            <img src="assets/images/course-bridal.jpg" alt="Wedding moment" class="gal-img reveal" loading="lazy">
            <img src="assets/images/why-mua.jpg" alt="Glamour look" class="gal-img reveal" loading="lazy">
            <img src="assets/images/svc-lips.jpg" alt="Lipstick" class="gal-img reveal" loading="lazy">
            <img src="assets/images/gal4.jpg" alt="Beauty shot" class="gal-img reveal" loading="lazy">
            <img src="assets/images/svc-palette.jpg" alt="Palette" class="gal-img reveal" loading="lazy">
            <img src="assets/images/gal6.jpg" alt="Nail art" class="gal-img reveal" loading="lazy">
        </div>
    </div>
</section>

<!-- ===================== CTA ===================== -->
<section class="cta-banner">
    <div class="cta-bg" style="background-image:url('assets/images/cta-bg.jpg')"></div>
    <div class="container cta-inner">
        <div class="cta-text reveal">
            <span class="script-text">Want a Look</span>
            <h2>Like These?</h2>
            <p>Book your makeover or join our academy —<br>message us on WhatsApp!</p>
        </div>
        <div class="cta-btns reveal">
            <a class="btn btn-whatsapp" href="<?php echo wa_link('Hi! I saw your gallery and want to book a makeup session.'); ?>" target="_blank" rel="noopener"><i class="fa-brands fa-whatsapp"></i> Chat on WhatsApp</a>
            <a href="<?php echo INSTA_URL; ?>" target="_blank" rel="noopener" class="btn btn-outline-light"><i class="fa-brands fa-instagram"></i> Follow on Instagram</a>
        </div>
        <div class="cta-script script-text">Dream<br>Believe<br>Achieve</div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
