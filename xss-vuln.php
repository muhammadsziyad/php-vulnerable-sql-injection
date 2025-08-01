<?php
// Vulnerable to XSS
if (isset($_GET['name'])) {
    $name = $_GET['name'];
    echo "Hello, " . $name;
}
?>
