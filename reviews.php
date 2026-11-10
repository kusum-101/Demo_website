<?php include 'includes/header.php'; ?>

<?php
$pageTitle = 'Reviews';
$pageScript = 'Students & Clients';
$pageImg = 'gal2.jpg';
$pageDesc = 'Real feedback from 500+ students and happy clients — see why everyone loves learning and getting glammed up with us.';
$pageMsg = 'Hi! I read your reviews and want to join.';
$pageBadgeTop = '4.9★';
$pageBadgeSub = 'Average Rating';
include 'includes/page-hero.php';
?>

<!-- ===================== REVIEWS ===================== -->
<section class="section-pad reviews-page">
    <div class="container">
        <div class="page-head reveal">
            <h2>What Our <em class="script-text">Students &amp; Clients</em> Say</h2>
            <p>Real feedback from our students, brides and party-makeup clients.</p>
        </div>

        <div class="reviews-grid">
            <article class="review-card reveal">
                <span class="quote-icon"><i class="fa-solid fa-quote-right"></i></span>
                <div class="review-head">
                    <img src="assets/images/av1.jpg" alt="Priya Sharma">
                    <div><strong>Priya Sharma</strong><span class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></span><small>Bridal Makeup Student</small></div>
                </div>
                <p>"Best decision to join this academy! The trainers are so patient and helpful. I learned bridal makeup professionally and now run my own studio."</p>
            </article>
            <article class="review-card reveal">
                <span class="quote-icon"><i class="fa-solid fa-quote-right"></i></span>
                <div class="review-head">
                    <img src="assets/images/av2.jpg" alt="Neha Verma">
                    <div><strong>Neha Verma</strong><span class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></span><small>Professional Makeup Student</small></div>
                </div>
                <p>"Amazing experience! The practical classes and live models helped me gain real confidence. Got placed right after completing my course."</p>
            </article>
            <article class="review-card reveal">
                <span class="quote-icon"><i class="fa-solid fa-quote-right"></i></span>
                <div class="review-head">
                    <img src="assets/images/av3.jpg" alt="Ritika Singh">
                    <div><strong>Ritika Singh</strong><span class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></span><small>Bridal Client</small></div>
                </div>
                <p>"Got my bridal makeup done here — flawless! The team is professional, friendly and the products used were top quality. Highly recommend!"</p>
            </article>
            <article class="review-card reveal">
                <span class="quote-icon"><i class="fa-solid fa-quote-right"></i></span>
                <div class="review-head">
                    <img src="assets/images/av4.jpg" alt="Simran Kaur">
                    <div><strong>Simran Kaur</strong><span class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></span><small>Hair Styling Student</small></div>
                </div>
                <p>"The hair styling course was totally worth it. Learned bridal buns, curls and braids on real models. Trainers correct every small mistake."</p>
            </article>
            <article class="review-card reveal">
                <span class="quote-icon"><i class="fa-solid fa-quote-right"></i></span>
                <div class="review-head">
                    <img src="assets/images/av5.jpg" alt="Anjali Gupta">
                    <div><strong>Anjali Gupta</strong><span class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></span><small>Party Makeup Client</small></div>
                </div>
                <p>"Booked party makeup for my sister's engagement. The look stayed perfect all evening and photos came out gorgeous. Very punctual team!"</p>
            </article>
            <article class="review-card reveal">
                <span class="quote-icon"><i class="fa-solid fa-quote-right"></i></span>
                <div class="review-head">
                    <img src="assets/images/av6.jpg" alt="Pooja Mehta">
                    <div><strong>Pooja Mehta</strong><span class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i></span><small>Self Grooming Student</small></div>
                </div>
                <p>"Joined the 15-day self grooming course. Now I can do my own party makeup confidently. Best investment in myself this year!"</p>
            </article>
        </div>
    </div>
</section>

<!-- ===================== CTA ===================== -->
<section class="cta-banner">
    <div class="cta-bg" style="background-image:url('assets/images/cta-bg.jpg')"></div>
    <div class="container cta-inner">
        <div class="cta-text reveal">
            <span class="script-text">Want to be our next</span>
            <h2>Success Story?</h2>
            <p>Join the academy or book your makeover —<br>message us on WhatsApp!</p>
        </div>
        <div class="cta-btns reveal">
            <a class="btn btn-whatsapp" href="<?php echo wa_link('Hi! I read your reviews and want to join Makeup Academy.'); ?>" target="_blank" rel="noopener"><i class="fa-brands fa-whatsapp"></i> Chat on WhatsApp</a>
            <a href="courses.php" class="btn btn-outline-light"><i class="fa-solid fa-graduation-cap"></i> View Courses</a>
        </div>
        <div class="cta-script script-text">Dream<br>Believe<br>Achieve</div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
