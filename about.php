<?php include 'includes/header.php'; ?>

<?php
$pageTitle = 'About Us';
$pageScript = 'Know Our Story';
$pageImg = 'gal4.jpg';
$pageDesc = 'India\'s most trusted beauty academy — turning passionate learners into professional makeup artists, hair stylists & beauty experts since 2020.';
$pageMsg = 'Hi! I want to know more about Makeup Academy.';
$pageBadgeTop = '5+';
$pageBadgeSub = 'Years of Excellence';
include 'includes/page-hero.php';
?>

<!-- ===================== STORY ===================== -->
<section class="section-pad about-story">
    <div class="container story-grid">
        <div class="why-img reveal">
            <img src="assets/images/service-main.jpg" alt="Makeup Academy work" loading="lazy">
            <div class="why-img-badge"><i class="fa-solid fa-award"></i> Since 2020</div>
        </div>
        <div class="story-text reveal">
            <span class="sec-label">Our Story</span>
            <h2>Where Passion Meets <em class="script-text">Profession</em></h2>
            <p>Makeup Academy started with one simple belief — every artist deserves expert guidance and real hands-on practice. Today, we are one of the most trusted beauty academies with hundreds of successful students.</p>
            <p>Our trainers are working industry professionals who bring real salon, bridal and fashion experience into every classroom. From your first brush stroke to your first paid client, we walk with you at every step.</p>
            <div class="story-points">
                <div><i class="fa-solid fa-circle-check"></i> Govt. recognized certification</div>
                <div><i class="fa-solid fa-circle-check"></i> Small batches, personal attention</div>
                <div><i class="fa-solid fa-circle-check"></i> Live models for practice</div>
                <div><i class="fa-solid fa-circle-check"></i> Post-course career support</div>
            </div>
            <a class="btn btn-whatsapp" href="<?php echo wa_link('Hi! I want to know more about Makeup Academy.'); ?>" target="_blank" rel="noopener"><i class="fa-brands fa-whatsapp"></i> Talk to Us</a>
        </div>
    </div>
</section>

<!-- ===================== WHY US ===================== -->
<section class="why-us" id="about">
    <div class="container why-inner">
        <div class="why-img reveal">
            <img src="assets/images/why-mua.jpg" alt="Makeup artistry" loading="lazy">
            <div class="why-img-badge"><i class="fa-solid fa-award"></i> Certified</div>
        </div>

        <div class="why-content">
            <h2>Your Success is <em class="script-text">Our Priority</em></h2>
            <p>We provide hands-on training, expert mentorship and complete support to help you grow.</p>

            <div class="why-grid">
                <div class="why-item reveal">
                    <span class="why-icon"><i class="fa-solid fa-certificate"></i></span>
                    <h4>Certified<br>Courses</h4>
                </div>
                <div class="why-item reveal">
                    <span class="why-icon"><i class="fa-solid fa-user-tie"></i></span>
                    <h4>Industry<br>Experts</h4>
                </div>
                <div class="why-item reveal">
                    <span class="why-icon"><i class="fa-solid fa-hand-sparkles"></i></span>
                    <h4>Hands-on<br>Practice</h4>
                </div>
                <div class="why-item reveal">
                    <span class="why-icon"><i class="fa-solid fa-briefcase"></i></span>
                    <h4>Career Support<br>&amp; Placement</h4>
                </div>
            </div>
        </div>

        <div class="why-script script-text">Learn<br>Practice<br>Grow</div>
    </div>
</section>

<!-- ===================== STATS ===================== -->
<section class="stats-strip">
    <div class="container stats-grid">
        <div class="stat reveal">
            <span class="stat-icon"><i class="fa-solid fa-graduation-cap"></i></span>
            <div><strong><span class="counter" data-target="500">0</span>+</strong><small>Happy Students</small></div>
        </div>
        <div class="stat reveal">
            <span class="stat-icon"><i class="fa-solid fa-star"></i></span>
            <div><strong>4.9/5</strong><small>Average Rating</small></div>
        </div>
        <div class="stat reveal">
            <span class="stat-icon"><i class="fa-solid fa-users"></i></span>
            <div><strong><span class="counter" data-target="10">0</span>+</strong><small>Expert Trainers</small></div>
        </div>
        <div class="stat reveal">
            <span class="stat-icon"><i class="fa-solid fa-briefcase"></i></span>
            <div><strong><span class="counter" data-target="100">0</span>%</strong><small>Placement Support</small></div>
        </div>
        <div class="stat reveal">
            <span class="stat-icon"><i class="fa-regular fa-heart"></i></span>
            <div><strong><span class="counter" data-target="5">0</span>+ Years</strong><small>Of Excellence</small></div>
        </div>
    </div>
</section>

<!-- ===================== CTA ===================== -->
<section class="cta-banner">
    <div class="cta-bg" style="background-image:url('assets/images/cta-bg.jpg')"></div>
    <div class="container cta-inner">
        <div class="cta-text reveal">
            <span class="script-text">Ready to Start</span>
            <h2>Your Journey?</h2>
            <p>Message us on WhatsApp for admission<br>or any enquiry today!</p>
        </div>
        <div class="cta-btns reveal">
            <a class="btn btn-whatsapp" href="<?php echo wa_link('Hi! I want to book an appointment at Makeup Academy.'); ?>" target="_blank" rel="noopener"><i class="fa-brands fa-whatsapp"></i> Chat on WhatsApp</a>
            <a href="courses.php" class="btn btn-outline-light"><i class="fa-solid fa-graduation-cap"></i> View Courses</a>
        </div>
        <div class="cta-script script-text">Dream<br>Believe<br>Achieve</div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
