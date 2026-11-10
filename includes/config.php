<?php
// ============================================
//  Site contact details — yahan se sab change karo
// ============================================
define('SITE_PHONE',      '+91 98765 43210');
define('SITE_PHONE_LINK', '+919876543210');          // tel: link ke liye
define('WHATSAPP_NUMBER', '919876543210');           // country code ke saath, no + / spaces
define('SITE_EMAIL',      'info@makeupacademy.in');
define('MAP_URL',         'https://maps.google.com/?q=Makeup+Academy+Noida');

// ============================================
//  DEMO MODE — true = social icons koi link nahi kholte, sirf "Demo" message dikhate hain.
//  Client final ho jaaye toh false kar do, asli links apne aap chalu ho jayenge.
// ============================================
define('DEMO_MODE', true);

define('INSTA_URL',   DEMO_MODE ? '#demo' : 'https://www.instagram.com/the_neetoo');
define('FB_URL',      DEMO_MODE ? '#demo' : 'https://facebook.com/makeupacademy');
define('YOUTUBE_URL', DEMO_MODE ? '#demo' : 'https://www.youtube.com/@the_neetoo');

// Social icon wale WhatsApp / Email ke liye
function social_href($real) {
    return DEMO_MODE ? '#demo' : $real;
}

// WhatsApp chat link with pre-filled message
function wa_link($msg = '') {
    return 'https://wa.me/' . WHATSAPP_NUMBER . ($msg !== '' ? '?text=' . urlencode($msg) : '');
}
