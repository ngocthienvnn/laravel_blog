<?php

// Use in the “Post-Receive URLs” section of your GitHub repo.
shell_exec( 'cd /var/www/html/laravel_blog/ && git reset –hard HEAD && git pull' );

?>
