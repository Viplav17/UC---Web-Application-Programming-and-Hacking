<?php
// Level 4 — rejects input containing "script"

if (!isset($_REQUEST['input'])) {
    echo '{"error": "Please provide \'input\' field"}';
} else if (strpos($_REQUEST['input'], 'script') != false) {
    echo '{"error": "No \'script\' is allowed!"}';
} else {
    echo $_REQUEST['input'];
}
