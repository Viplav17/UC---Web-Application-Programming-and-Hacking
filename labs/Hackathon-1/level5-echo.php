<?php
// Level 5 — rejects input containing "script" or "alert"

if (!isset($_REQUEST['input'])) {
    echo '{"error": "Please provide \'input\' field"}';
} else if (strpos($_REQUEST['input'], 'script') != false) {
    echo '{"error": "No \'script\' is allowed!"}';
} else if (strpos($_REQUEST['input'], 'alert') != false) {
    echo '{"error": "No \'alert\' is allowed!"}';
} else {
    echo $_REQUEST['input'];
}
