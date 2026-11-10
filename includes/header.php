<?php
require_once __DIR__ . '/config.php';
$current = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Makeup Academy - Turn Your Passion Into a Profession</title>
    <meta name="description" content="Learn from industry experts & build your dream career in Makeup, Hair & Beauty.">
    <meta property="og:title" content="Makeup Academy - Turn Your Passion Into a Profession">
    <meta property="og:description" content="Bridal makeup, hair styling & beauty courses. 500+ students, 4.9 rated.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="assets/images/hero-bride.jpg">
    <link rel="icon" type="image/svg+xml" href="assets/images/favicon.svg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;0,700;1,500&family=Great+Vibes&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="assets/css/style.css?v=<?php echo filemtime(__DIR__ . '/../assets/css/style.css'); ?>">
</head>
<body>

<header class="site-header" id="siteHeader">
    <div class="topbar">
        <div class="container topbar-inner">
            <div class="topbar-left">
                <a href="tel:<?php echo SITE_PHONE_LINK; ?>"><i class="fa-solid fa-phone"></i> <?php echo SITE_PHONE; ?></a>
                <a href="mailto:<?php echo SITE_EMAIL; ?>"><i class="fa-regular fa-envelope"></i> <?php echo SITE_EMAIL; ?></a>
            </div>
            <div class="topbar-right">
                <span class="topbar-offer"><i class="fa-solid fa-star"></i> Admissions Open 2026</span>
                <a href="<?php echo FB_URL; ?>" target="_blank" rel="noopener" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="<?php echo INSTA_URL; ?>" target="_blank" rel="noopener" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                <a href="<?php echo YOUTUBE_URL; ?>" target="_blank" rel="noopener" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
            </div>
        </div>
    </div>
    <div class="container header-inner">
        <a href="index.php" class="logo">
            <span class="logo-crown"><i class="fa-solid fa-crown"></i></span>
            <span class="logo-text">
                <strong>Makeup <em>Academy</em></strong>
                <small>Learn &bull; Create &bull; Shine</small>
            </span>
        </a>

        <nav class="main-nav" id="mainNav">
            <a href="index.php"    class="nav-link <?php echo $current==='index.php'    ? 'active':''; ?>">Home</a>
            <a href="about.php"    class="nav-link <?php echo $current==='about.php'    ? 'active':''; ?>">About Us</a>
            <a href="courses.php"  class="nav-link <?php echo $current==='courses.php'  ? 'active':''; ?>">Courses</a>
            <a href="services.php" class="nav-link <?php echo $current==='services.php' ? 'active':''; ?>">Services</a>
            <a href="gallery.php"  class="nav-link <?php echo $current==='gallery.php'  ? 'active':''; ?>">Gallery</a>
            <a href="reviews.php"  class="nav-link <?php echo $current==='reviews.php'  ? 'active':''; ?>">Reviews</a>
            <a href="contact.php"  class="nav-link <?php echo $current==='contact.php'  ? 'active':''; ?>">Contact Us</a>

            <div class="nav-extra">
                <a class="btn btn-whatsapp" href="<?php echo wa_link('Hi! I have an enquiry.'); ?>" target="_blank" rel="noopener"><i class="fa-brands fa-whatsapp"></i> WhatsApp Us</a>
                <a class="nav-tel" href="tel:<?php echo SITE_PHONE_LINK; ?>"><i class="fa-solid fa-phone"></i> <?php echo SITE_PHONE; ?></a>
                <div class="social-links">
                    <a href="<?php echo FB_URL; ?>" target="_blank" rel="noopener" class="fb" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="<?php echo INSTA_URL; ?>" target="_blank" rel="noopener" class="ig" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                    <a href="<?php echo YOUTUBE_URL; ?>" target="_blank" rel="noopener" class="yt" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
        </nav>
        <div class="nav-overlay" id="navOverlay"></div>

        <div class="header-actions">
            <a class="btn btn-whatsapp btn-book" href="<?php echo wa_link('Hi! I want to book an appointment at Makeup Academy.'); ?>" target="_blank" rel="noopener"><i class="fa-brands fa-whatsapp"></i> WhatsApp Us</a>
            <button class="nav-toggle" id="navToggle" aria-label="Menu"><i class="fa-solid fa-bars"></i></button>
        </div>
    </div>
</header>
