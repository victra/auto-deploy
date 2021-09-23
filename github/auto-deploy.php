<?php

// Use in the “Post-Receive URLs” section of your GitHub repo.
if ( isset($_POST) ) {
    $logs = shell_exec('make run_deploy');
    echo "$logs \n";
    echo "success deploy";
}

?>
