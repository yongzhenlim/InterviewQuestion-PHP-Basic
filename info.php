<?php

// Make sure the username was received through POST
if (isset($_POST['username'])) {

    $username = trim($_POST['username']);

    // Verify the username
    if ($username === 'abc') {
        echo 'Verified';
    } else {
        echo 'Error';
    }

} else {
    echo 'Error';
}
?>