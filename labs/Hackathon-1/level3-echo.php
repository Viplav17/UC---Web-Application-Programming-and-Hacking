<?php
// Level 3 — strips <script> and </script>, then echoes without encoding

if (!isset($_REQUEST['input'])) {
    echo '{"error": "Please provide \'input\' field"}';
} else {
    $input = $_REQUEST['input'];
    $input = str_replace('<script>', '', $input);
    $input = str_replace('</script>', '', $input);
    echo $input;
}
