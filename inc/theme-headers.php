<?php

function alexandre_enablle_HSTS () {
    header('Strict-Transport-Security: max-age=0');
}

add_action('send_headers', 'alexandre_enablle_HSTS');