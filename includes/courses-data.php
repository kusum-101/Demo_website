<?php
// ============================================
//  Saare courses yahan — Home slider aur Courses page dono yahi data use karte hain.
//  Naya course add karna ho toh bas ek aur item jodo.
// ============================================
$courses = [
    [
        'title'    => 'Bridal Makeup',
        'duration' => '3 Months',
        'fee'      => '₹25,000',
        'desc'     => 'HD, airbrush &amp; traditional bridal looks, draping, jewellery setting.',
        'img'      => 'crs-bridal.jpg',
        'alt'      => 'Indian bride with bold eye makeup and gold jewellery',
    ],
    [
        'title'    => 'Professional Makeup',
        'duration' => '6 Months',
        'fee'      => '₹30,000',
        'desc'     => 'Complete pro artistry — party, fashion, editorial &amp; bridal makeup.',
        'img'      => 'crs-pro.jpg',
        'alt'      => 'Model with purple smokey eyes and pink lips',
    ],
    [
        'title'    => 'Hair Styling',
        'duration' => '3 Months',
        'fee'      => '₹15,000',
        'desc'     => 'Bridal buns, curls, braids, blow-dry &amp; advanced styling techniques.',
        'img'      => 'crs-hair.jpg',
        'alt'      => 'Bridal hairstyle with red roses',
    ],
    [
        'title'    => 'Beauty &amp; Skin Care',
        'duration' => '2 Months',
        'fee'      => '₹10,000',
        'desc'     => 'Facials, skin analysis, clean-ups, bleach &amp; advanced treatments.',
        'img'      => 'crs-skin.jpg',
        'alt'      => 'Models with glowing dewy skin and bold colour',
    ],
    [
        'title'    => 'Nail Art &amp; Extension',
        'duration' => '1 Month',
        'fee'      => '₹8,000',
        'desc'     => 'Gel extensions, nail art designs, French tips &amp; nail care.',
        'img'      => 'crs-nails.jpg',
        'alt'      => 'Long stiletto nail extensions with chrome art',
    ],
    [
        'title'    => 'Self Grooming',
        'duration' => '15 Days',
        'fee'      => '₹5,000',
        'desc'     => 'Everyday makeup, party looks, saree draping &amp; personality tips.',
        'img'      => 'crs-grooming.jpg',
        'alt'      => 'Glam party makeup look with statement earrings',
    ],
];

// Ek course card ka HTML
function course_card($c) {
    $plain = html_entity_decode($c['title']);
    $msg = "Hi! I am interested in the {$plain} course ({$c['duration']}, {$c['fee']}). Please share details.";
    ?>
    <article class="crs-card">
        <div class="crs-img">
            <img src="assets/images/<?php echo $c['img']; ?>" alt="<?php echo $c['alt']; ?>" loading="lazy" decoding="async">
            <span class="crs-tag"><i class="fa-regular fa-clock"></i> <?php echo $c['duration']; ?></span>
        </div>
        <div class="crs-body">
            <h3><?php echo $c['title']; ?></h3>
            <p class="crs-desc"><?php echo $c['desc']; ?></p>
            <div class="crs-foot">
                <span class="crs-fee"><small>Fee</small><?php echo $c['fee']; ?></span>
                <a href="<?php echo wa_link($msg); ?>" class="crs-enquire" target="_blank" rel="noopener"><i class="fa-brands fa-whatsapp"></i> Enquire</a>
            </div>
        </div>
    </article>
    <?php
}
