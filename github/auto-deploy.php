<?php

// Use in the “Post-Receive URLs” section of your GitHub repo.

if ( $_POST['payload'] ) {
shell_exec('cd /Users/victra/Projek/office/ottodigital/scripts');
shell_exec('make run_local');
echo "success deploy";
}

?>
