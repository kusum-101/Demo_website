<?php
// Usage: set $pageTitle, $pageScript, $pageImg, $pageDesc, $pageMsg,
//        $pageBtnText, $pageBtnLink, $pageBtnIcon, $pageBadgeTop, $pageBadgeSub
$pageTitle    = $pageTitle    ?? 'Page';
$pageScript   = $pageScript   ?? 'Makeup Academy';
$pageImg      = $pageImg      ?? 'hero-bride.jpg';
$pageDesc     = $pageDesc     ?? 'Learn from industry experts & build your dream career in Makeup, Hair & Beauty.';
$pageMsg      = $pageMsg      ?? 'Hi! I have an enquiry.';
$pageBtnText  = $pageBtnText  ?? 'View Courses';
$pageBtnLink  = $pageBtnLink  ?? 'courses.php';
$pageBtnIcon  = $pageBtnIcon  ?? 'fa-solid fa-graduation-cap';
$pageBadgeTop = $pageBadgeTop ?? '4.9';
$pageBadgeSub = $pageBadgeSub ?? 'Rated Academy';
?>
<section class="page-hero">
    <div class="hero-glow glow-1"></div>
    <div class="hero-glow glow-2"></div>
    <div class="container page-hero-inner">
        <div class="page-hero-text">
            <span class="script-text"><?php echo $pageScript; ?></span>
            <h1><?php echo $pageTitle; ?></h1>
            <p class="page-hero-desc"><?php echo $pageDesc; ?></p>
            <div class="page-hero-btns">
                <a class="btn btn-whatsapp" href="<?php echo wa_link($pageMsg); ?>" target="_blank" rel="noopener"><i class="fa-brands fa-whatsapp"></i> WhatsApp Us</a>
                <a class="btn btn-ghost" href="<?php echo $pageBtnLink; ?>"><i class="<?php echo $pageBtnIcon; ?>"></i> <?php echo $pageBtnText; ?></a>
            </div>
        </div>
        <div class="page-hero-img">
            <img src="assets/images/<?php echo $pageImg; ?>" alt="<?php echo $pageTitle; ?>">
            <div class="hero-badge">
                <i class="fa-solid fa-star"></i>
                <div><strong><?php echo $pageBadgeTop; ?></strong><span><?php echo $pageBadgeSub; ?></span></div>
            </div>
        </div>
    </div>
    <div class="page-hero-side script-text">Makeup is not just Art,<br>It's a <span>Career</span></div>
</section>
