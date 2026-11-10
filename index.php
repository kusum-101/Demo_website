<?php include 'includes/header.php'; ?>

<!-- ===================== HERO ===================== -->
<?php
// Hero slides — naya slide add karna ho toh bas ek aur array item jodo
$heroSlides = [
    [
        'welcome' => 'Welcome to Makeup Academy',
        'title'   => 'Turn Your Passion<br>Into a <em class="script-text">Profession</em>',
        'desc'    => 'Learn from industry experts &amp; build your dream career in Makeup, Hair &amp; Beauty.',
        'img'     => 'hero-bold.jpg',
        'alt'     => 'Model with bold winged eyeliner and deep berry lips',
    ],
    [
        'welcome' => 'Bridal Makeup Course',
        'title'   => 'Create Brides<br>Who <em class="script-text">Shine</em>',
        'desc'    => 'Master HD &amp; traditional bridal looks with hands-on practice on real models.',
        'img'     => 'service-main.jpg',
        'alt'     => 'Bride in traditional silk saree with gold jewellery',
    ],
    [
        'welcome' => 'Professional Makeup',
        'title'   => 'Become a<br>Certified <em class="script-text">Artist</em>',
        'desc'    => 'From flawless skin prep to bold glam &mdash; get certified and start working with real clients.',
        'img'     => 'why-mua.jpg',
        'alt'     => 'Model with glam makeup and red lips',
    ],
];
?>
<section class="hero hero-slider" id="home" data-hero-slider aria-roledescription="carousel" aria-label="Featured">
    <div class="hero-glow glow-1"></div>
    <div class="hero-glow glow-2"></div>
    <div class="container hero-inner">
        <div class="hero-content">
            <div class="hero-text-stack">
                <?php foreach ($heroSlides as $i => $s): $tag = $i === 0 ? 'h1' : 'h2'; ?>
                <div class="hero-slide-text<?php echo $i === 0 ? ' is-active' : ''; ?>" role="group" aria-roledescription="slide" aria-label="<?php echo ($i + 1) . ' of ' . count($heroSlides); ?>"<?php echo $i === 0 ? '' : ' aria-hidden="true"'; ?>>
                    <span class="hero-welcome script-text"><?php echo $s['welcome']; ?></span>
                    <<?php echo $tag; ?> class="hero-title"><?php echo $s['title']; ?></<?php echo $tag; ?>>
                    <p class="hero-desc"><?php echo $s['desc']; ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="hero-features">
                <div class="hero-feat">
                    <span class="feat-icon"><i class="fa-solid fa-user-graduate"></i></span>
                    <span>Expert<br>Trainers</span>
                </div>
                <div class="hero-feat">
                    <span class="feat-icon"><i class="fa-solid fa-spray-can-sparkles"></i></span>
                    <span>100% Practical<br>Training</span>
                </div>
                <div class="hero-feat">
                    <span class="feat-icon"><i class="fa-solid fa-certificate"></i></span>
                    <span>Certified<br>Courses</span>
                </div>
            </div>

            <div class="hero-mini">
                <span><i class="fa-solid fa-star"></i> 4.9/5 Rated</span>
                <span><i class="fa-solid fa-user-graduate"></i> 500+ Students</span>
                <span><i class="fa-solid fa-certificate"></i> Certified</span>
            </div>

            <div class="hero-btns">
                <a href="courses.php" class="btn btn-pink">Explore Our Courses <i class="fa-solid fa-arrow-right"></i></a>
                <button class="btn btn-ghost" data-open-video><span class="play-circle"><i class="fa-solid fa-play"></i></span> Watch Video</button>
            </div>

            <div class="hero-controls">
                <button class="hero-arrow" data-hero-prev aria-label="Previous slide"><i class="fa-solid fa-chevron-left"></i></button>
                <div class="hero-dots" role="tablist" aria-label="Choose slide">
                    <?php foreach ($heroSlides as $i => $s): ?>
                    <button class="hero-dot<?php echo $i === 0 ? ' is-active' : ''; ?>" data-hero-dot="<?php echo $i; ?>" aria-label="Slide <?php echo $i + 1; ?>"></button>
                    <?php endforeach; ?>
                </div>
                <button class="hero-arrow" data-hero-next aria-label="Next slide"><i class="fa-solid fa-chevron-right"></i></button>
            </div>
        </div>

        <div class="hero-media">
            <div class="hero-img-wrap">
                <div class="hero-img-stack">
                    <?php foreach ($heroSlides as $i => $s): ?>
                    <img class="hero-slide-img<?php echo $i === 0 ? ' is-active' : ''; ?>" src="assets/images/<?php echo $s['img']; ?>" alt="<?php echo $s['alt']; ?>"<?php echo $i === 0 ? ' fetchpriority="high"' : ' loading="lazy"'; ?> decoding="async">
                    <?php endforeach; ?>
                </div>
                <div class="hero-badge">
                    <i class="fa-solid fa-star"></i>
                    <div><strong>4.9</strong><span>Rated Academy</span></div>
                </div>
            </div>
            <div class="hero-side-text script-text">Makeup is not just Art,<br>It's a <span>Career</span></div>
        </div>
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

<!-- ===================== COURSES ===================== -->
<section class="courses" id="courses">
    <div class="container courses-inner">
        <div class="courses-left reveal">
            <div class="courses-txt">
                <span class="sec-label">Our Courses</span>
                <h2>Build Your Skills,<br><em class="script-text">Create Your Future</em></h2>
                <p>Choose from our industry-focused courses and step into a rewarding career in the beauty industry.</p>
            </div>
            <a href="courses.php" class="btn btn-pink">View All Courses <i class="fa-solid fa-arrow-right"></i></a>
        </div>

        <?php require_once __DIR__ . "/includes/courses-data.php"; ?>
        <div class="crs-slider reveal" data-card-slider>
            <button class="crs-arrow crs-prev" data-slider-prev aria-label="Previous courses"><i class="fa-solid fa-chevron-left"></i></button>
            <div class="crs-track" data-slider-track>
                <?php foreach ($courses as $c) course_card($c); ?>
            </div>
            <button class="crs-arrow crs-next" data-slider-next aria-label="More courses"><i class="fa-solid fa-chevron-right"></i></button>
            <div class="crs-dots" data-slider-dots></div>
        </div>
    </div>
</section>

<!-- ===================== SERVICES ===================== -->
<section class="services" id="services">
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

<!-- ===================== GALLERY ===================== -->
<section class="gallery" id="gallery">
    <div class="container gallery-inner">
        <div class="gallery-left reveal">
            <h2>Crafting Beauty,<br><em class="script-text">One Look at a Time</em></h2>
            <p>Explore our students' looks, bridal transformations and academy moments.</p>
            <a href="gallery.php" class="btn btn-pink">View Gallery <i class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="gallery-strip">
            <img src="assets/images/gal1.jpg" alt="Gallery 1" class="gal-img reveal" loading="lazy">
            <img src="assets/images/gal2.jpg" alt="Gallery 2" class="gal-img reveal" loading="lazy">
            <img src="assets/images/gal3.jpg" alt="Gallery 3" class="gal-img reveal" loading="lazy">
            <img src="assets/images/gal4.jpg" alt="Gallery 4" class="gal-img reveal" loading="lazy">
            <img src="assets/images/gal5.jpg" alt="Gallery 5" class="gal-img reveal" loading="lazy">
            <img src="assets/images/gal6.jpg" alt="Gallery 6" class="gal-img reveal" loading="lazy">
        </div>
    </div>
</section>

<!-- ===================== TESTIMONIALS ===================== -->
<section class="reviews" id="reviews">
    <div class="container">
        <div class="reviews-head reveal">
            <h2>What Our <em class="script-text">Students &amp; Clients</em> Say</h2>
            <a href="reviews.php" class="view-link">View All Reviews <i class="fa-solid fa-arrow-right"></i></a>
        </div>

        <div class="reviews-track" id="reviewsTrack">
            <article class="review-card reveal">
                <span class="quote-icon"><i class="fa-solid fa-quote-right"></i></span>
                <div class="review-head">
                    <img src="assets/images/av1.jpg" alt="Priya Sharma">
                    <div><strong>Priya Sharma</strong><span class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></span></div>
                </div>
                <p>"Best decision to join this academy! The trainers are so patient and helpful. I learned bridal makeup professionally and now run my own studio."</p>
            </article>
            <article class="review-card reveal">
                <span class="quote-icon"><i class="fa-solid fa-quote-right"></i></span>
                <div class="review-head">
                    <img src="assets/images/av2.jpg" alt="Neha Verma">
                    <div><strong>Neha Verma</strong><span class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></span></div>
                </div>
                <p>"Amazing experience! The practical classes and live models helped me gain real confidence. Got placed right after completing my course."</p>
            </article>
            <article class="review-card reveal">
                <span class="quote-icon"><i class="fa-solid fa-quote-right"></i></span>
                <div class="review-head">
                    <img src="assets/images/av3.jpg" alt="Ritika Singh">
                    <div><strong>Ritika Singh</strong><span class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></span></div>
                </div>
                <p>"Got my bridal makeup done here — flawless! The team is professional, friendly and the products used were top quality. Highly recommend!"</p>
            </article>
        </div>
        <div class="reviews-dots" id="reviewsDots"></div>
    </div>
</section>

<!-- ===================== CTA ===================== -->
<section class="cta-banner">
    <div class="cta-bg" style="background-image:url('assets/images/cta-bg.jpg')"></div>
    <div class="container cta-inner">
        <div class="cta-text reveal">
            <span class="script-text">Ready to Start</span>
            <h2>Your Journey?</h2>
            <p>Book your makeup appointment<br>or admission enquiry today!</p>
        </div>
        <div class="cta-btns reveal">
            <a class="btn btn-whatsapp" href="<?php echo wa_link('Hi! I want to book an appointment at Makeup Academy.'); ?>" target="_blank" rel="noopener"><i class="fa-brands fa-whatsapp"></i> Chat on WhatsApp</a>
            <a href="mailto:<?php echo SITE_EMAIL; ?>" class="btn btn-outline-light"><i class="fa-regular fa-envelope"></i> Email Us</a>
        </div>
        <div class="cta-script script-text">Dream<br>Believe<br>Achieve</div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
