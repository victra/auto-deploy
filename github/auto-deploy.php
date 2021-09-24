<?php

// Use in the “Post-Receive URLs” section of your GitHub repo.
if ( isset($_POST) ) {
    $logs = shell_exec('./run-script.sh');
    echo "$logs \n";
    echo "success deploy";
}

?>
