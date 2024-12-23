<?php
if (isset($_GET['budget'])) {
    $budget = $_GET['budget'];
    // Redirect to the thank you page with path parameters
    header("Location: /thankyou.html/" . urlencode($budget));
    exit();
} else {
    echo 'error'; // Indicate error
}
?>
