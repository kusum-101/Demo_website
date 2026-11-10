<?php include 'includes/header.php'; ?>

<?php
$pageTitle = 'Contact Us';
$pageScript = 'Get in Touch';
$pageImg = 'svc-tools.jpg';
$pageDesc = 'Questions about courses, fees or makeup bookings? We usually reply within minutes on WhatsApp — or call & visit us directly.';
$pageMsg = 'Hi! I have a question about Makeup Academy.';
$pageBtnText = 'Call Us';
$pageBtnLink = 'tel:' . SITE_PHONE_LINK;
$pageBtnIcon = 'fa-solid fa-phone';
$pageBadgeTop = 'Fast';
$pageBadgeSub = 'Quick Replies';
include 'includes/page-hero.php';
?>

<!-- ===================== CONTACT ===================== -->
<section class="section-pad contact-page">
    <div class="container">
        <div class="page-head reveal">
            <h2>We'd Love to <em class="script-text">Hear From You</em></h2>
            <p>Reach us on WhatsApp for fastest reply, or call / email / visit us directly.</p>
        </div>

        <div class="contact-cards">
            <a class="contact-card reveal" href="tel:<?php echo SITE_PHONE_LINK; ?>">
                <span class="contact-icon"><i class="fa-solid fa-phone"></i></span>
                <h4>Call Us</h4>
                <p><?php echo SITE_PHONE; ?></p>
            </a>
            <a class="contact-card reveal" href="<?php echo wa_link('Hi! I have an enquiry.'); ?>" target="_blank" rel="noopener">
                <span class="contact-icon wa"><i class="fa-brands fa-whatsapp"></i></span>
                <h4>WhatsApp</h4>
                <p>Chat with us instantly</p>
            </a>
            <a class="contact-card reveal" href="mailto:<?php echo SITE_EMAIL; ?>">
                <span class="contact-icon"><i class="fa-regular fa-envelope"></i></span>
                <h4>Email Us</h4>
                <p><?php echo SITE_EMAIL; ?></p>
            </a>
            <a class="contact-card reveal" href="<?php echo MAP_URL; ?>" target="_blank" rel="noopener">
                <span class="contact-icon"><i class="fa-solid fa-location-dot"></i></span>
                <h4>Visit Us</h4>
                <p>123, Beauty Lane, Sector 18, Noida, UP - 201301</p>
            </a>
        </div>

        <div class="contact-bottom">
            <div class="contact-info-box reveal">
                <h3><i class="fa-solid fa-clock"></i> Academy Timings</h3>
                <ul>
                    <li><span>Monday - Friday</span><strong>10:00 AM - 7:00 PM</strong></li>
                    <li><span>Saturday</span><strong>10:00 AM - 7:00 PM</strong></li>
                    <li><span>Sunday</span><strong>Closed</strong></li>
                </ul>
                <h3><i class="fa-solid fa-share-nodes"></i> Follow Us</h3>
                <div class="social-links">
                    <a href="<?php echo FB_URL; ?>" target="_blank" rel="noopener" class="fb" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="<?php echo INSTA_URL; ?>" target="_blank" rel="noopener" class="ig" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                    <a href="<?php echo YOUTUBE_URL; ?>" target="_blank" rel="noopener" class="yt" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
                    <a href="<?php echo wa_link('Hi! I have an enquiry.'); ?>" target="_blank" rel="noopener" class="wa" aria-label="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
                </div>
            </div>

            <a class="contact-map reveal" href="<?php echo MAP_URL; ?>" target="_blank" rel="noopener">
                <i class="fa-solid fa-map-location-dot"></i>
                <strong>Open in Google Maps</strong>
                <span>123, Beauty Lane, Sector 18, Noida</span>
            </a>
        </div>
    </div>
</section>

<!-- ===================== CTA ===================== -->
<section class="cta-banner">
    <div class="cta-bg" style="background-image:url('assets/images/cta-bg.jpg')"></div>
    <div class="container cta-inner">
        <div class="cta-text reveal">
            <span class="script-text">Have a Question?</span>
            <h2>Just Ask Us</h2>
            <p>WhatsApp is the fastest way to reach us —<br>we usually reply within minutes!</p>
        </div>
        <div class="cta-btns reveal">
            <a class="btn btn-whatsapp" href="<?php echo wa_link('Hi! I have a question about Makeup Academy.'); ?>" target="_blank" rel="noopener"><i class="fa-brands fa-whatsapp"></i> Chat on WhatsApp</a>
            <a href="tel:<?php echo SITE_PHONE_LINK; ?>" class="btn btn-outline-light"><i class="fa-solid fa-phone"></i> Call Us</a>
        </div>
        <div class="cta-script script-text">Dream<br>Believe<br>Achieve</div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
