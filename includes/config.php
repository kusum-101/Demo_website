<?php
// ============================================
//  Site contact details — yahan se sab change karo
// ============================================
define('SITE_PHONE',      '+91 98765 43210');
define('SITE_PHONE_LINK', '+919876543210');          // tel: link ke liye
define('WHATSAPP_NUMBER', '919876543210');           // country code ke saath, no + / spaces
define('SITE_EMAIL',      'info@makeupacademy.in');
define('INSTA_URL',       'https://www.instagram.com/the_neetoo');
define('FB_URL',          'https://facebook.com/makeupacademy');
define('YOUTUBE_URL',     'https://www.youtube.com/@the_neetoo');
define('MAP_URL',         'https://maps.google.com/?q=Makeup+Academy+Noida');

// WhatsApp chat link with pre-filled message
function wa_link($msg = '') {
    return 'https://wa.me/' . WHATSAPP_NUMBER . ($msg !== '' ? '?text=' . urlencode($msg) : '');
}
