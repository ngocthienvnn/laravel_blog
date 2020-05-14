<?php

// Use in the “Post-Receive URLs” section of your GitHub repo.
    exec( 'cd /var/www/html/laravel_blog/ && git checkout . && git pull' );

?>
