<?php require_once __DIR__ . '/config.php'; ?>
<footer class="site-footer" id="contact">
    <div class="container footer-grid">
        <div class="footer-col footer-brand">
            <a href="index.php" class="logo">
                <span class="logo-crown"><i class="fa-solid fa-crown"></i></span>
                <span class="logo-text">
                    <strong>Makeup <em>Academy</em></strong>
                    <small>Learn &bull; Create &bull; Shine</small>
                </span>
            </a>
            <p>India's most trusted beauty academy. We transform passionate learners into professional makeup artists, hair stylists &amp; beauty experts.</p>
            <div class="social-links">
                <a href="<?php echo FB_URL; ?>" target="_blank" rel="noopener" class="fb" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="<?php echo INSTA_URL; ?>" target="_blank" rel="noopener" class="ig" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                <a href="<?php echo YOUTUBE_URL; ?>" target="_blank" rel="noopener" class="yt" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
                <a href="<?php echo social_href(wa_link('Hi! I have an enquiry.')); ?>" target="_blank" rel="noopener" class="wa" aria-label="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
                <a href="<?php echo social_href('mailto:' . SITE_EMAIL); ?>" class="em" aria-label="Email"><i class="fa-regular fa-envelope"></i></a>
            </div>
        </div>

        <div class="footer-col">
            <h4>Quick Links</h4>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="courses.php">Courses</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="reviews.php">Reviews</a></li>
            </ul>
        </div>

        <div class="footer-col">
            <h4>Courses</h4>
            <ul>
                <li><a href="courses.php">Bridal Makeup</a></li>
                <li><a href="courses.php">Professional Makeup</a></li>
                <li><a href="courses.php">Hair Styling</a></li>
                <li><a href="courses.php">Beauty &amp; Skin Care</a></li>
                <li><a href="courses.php">Nail Art &amp; Extension</a></li>
                <li><a href="courses.php">Self Grooming</a></li>
            </ul>
        </div>

        <div class="footer-col footer-contact">
            <h4>Contact Us</h4>
            <ul>
                <li><i class="fa-solid fa-location-dot"></i> <a href="<?php echo MAP_URL; ?>" target="_blank" rel="noopener">123, Beauty Lane, Sector 18,<br>Noida, UP - 201301</a></li>
                <li><i class="fa-solid fa-phone"></i> <a href="tel:<?php echo SITE_PHONE_LINK; ?>"><?php echo SITE_PHONE; ?></a></li>
                <li><i class="fa-brands fa-whatsapp"></i> <a href="<?php echo wa_link('Hi! I have an enquiry.'); ?>" target="_blank" rel="noopener">Chat on WhatsApp</a></li>
                <li><i class="fa-solid fa-envelope"></i> <a href="mailto:<?php echo SITE_EMAIL; ?>"><?php echo SITE_EMAIL; ?></a></li>
                <li><i class="fa-solid fa-clock"></i> Mon - Sat: 10:00 AM - 7:00 PM</li>
            </ul>
            <a class="footer-map" href="<?php echo MAP_URL; ?>" target="_blank" rel="noopener">
                <i class="fa-solid fa-map-location-dot"></i>
                <span>Find us on Map</span>
            </a>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container footer-bottom-inner">
            <p>&copy; <?php echo date('Y'); ?> Makeup Academy. All Rights Reserved.</p>
            <div class="footer-bottom-links">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms &amp; Conditions</a>
                <a href="#">Sitemap</a>
            </div>
        </div>
    </div>
</footer>

<!-- Video Modal -->
<div class="modal" id="videoModal" aria-hidden="true">
    <div class="modal-overlay" data-close-modal></div>
    <div class="modal-box video-box">
        <button class="modal-close" data-close-modal>&times;</button>
        <div class="video-frame">
            <div class="video-placeholder">
                <i class="fa-solid fa-circle-play"></i>
                <p>Academy tour video</p>
            </div>
        </div>
    </div>
</div>

<!-- Lightbox -->
<div class="lightbox" id="lightbox" aria-hidden="true">
    <button class="lightbox-close" data-close-lightbox>&times;</button>
    <button class="lightbox-prev" id="lbPrev"><i class="fa-solid fa-chevron-left"></i></button>
    <img src="" alt="Gallery preview" id="lightboxImg">
    <button class="lightbox-next" id="lbNext"><i class="fa-solid fa-chevron-right"></i></button>
</div>

<div class="toast" id="toast"></div>

<!-- Floating WhatsApp button -->
<a href="<?php echo wa_link('Hi! I have an enquiry.'); ?>" class="wa-float" target="_blank" rel="noopener" aria-label="Chat on WhatsApp">
    <i class="fa-brands fa-whatsapp"></i>
</a>

<a href="#home" class="scroll-top" id="scrollTop" aria-label="Back to top"><i class="fa-solid fa-arrow-up"></i></a>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script src="assets/js/main.js?v=<?php echo filemtime(__DIR__ . '/../assets/js/main.js'); ?>"></script>
</body>
</html>
