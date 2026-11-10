<?php include 'includes/header.php'; ?>

<?php
$pageTitle = 'Our Courses';
$pageScript = 'Build Your Skills';
$pageImg = 'course-pro.jpg';
$pageDesc = 'Industry-focused beauty courses with live model practice, expert trainers & certification — pick your path and start earning.';
$pageMsg = 'Hi! I want details about your courses.';
$pageBtnText = 'Call Us';
$pageBtnLink = 'tel:' . SITE_PHONE_LINK;
$pageBtnIcon = 'fa-solid fa-phone';
$pageBadgeTop = '6+';
$pageBadgeSub = 'Pro Courses';
include 'includes/page-hero.php';
?>

<!-- ===================== COURSES ===================== -->
<section class="section-pad courses-page">
    <div class="container">
        <div class="page-head reveal">
            <h2>Industry-Focused <em class="script-text">Beauty Courses</em></h2>
            <p>Choose your path — every course includes live practice, professional kits guidance and certification.</p>
        </div>

        <?php require_once __DIR__ . "/includes/courses-data.php"; ?>
        <div class="crs-grid">
            <?php foreach ($courses as $c): ?>
            <div class="reveal"><?php course_card($c); ?></div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ===================== CTA ===================== -->
<section class="cta-banner">
    <div class="cta-bg" style="background-image:url('assets/images/cta-bg.jpg')"></div>
    <div class="container cta-inner">
        <div class="cta-text reveal">
            <span class="script-text">Confused about</span>
            <h2>Which Course?</h2>
            <p>Message us on WhatsApp — our counsellor<br>will help you pick the right one!</p>
        </div>
        <div class="cta-btns reveal">
            <a class="btn btn-whatsapp" href="<?php echo wa_link('Hi! I need help choosing a course at Makeup Academy.'); ?>" target="_blank" rel="noopener"><i class="fa-brands fa-whatsapp"></i> Ask on WhatsApp</a>
            <a href="tel:<?php echo SITE_PHONE_LINK; ?>" class="btn btn-outline-light"><i class="fa-solid fa-phone"></i> Call Us</a>
        </div>
        <div class="cta-script script-text">Dream<br>Believe<br>Achieve</div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
