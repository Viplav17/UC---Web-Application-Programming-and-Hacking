<?php
// Level 2 — POST only, no input sanitization

if (!isset($_POST['input'])) {
    echo '{"error": "Please provide \'input\' field in an HTTP POST Request"}';
} else {
    echo $_POST['input'];
}
