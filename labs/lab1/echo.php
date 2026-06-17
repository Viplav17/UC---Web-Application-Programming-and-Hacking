<?php
header('Content-Type: text/plain; charset=utf-8');

if (!isset($_REQUEST['data'])) {
    http_response_code(400);
    die('Error: missing data parameter');
}

$input = trim($_REQUEST['data']);

if ($input === '') {
    http_response_code(400);
    die('Error: empty input');
}

if (strlen($input) > 200) {
    http_response_code(400);
    die('Error: input too long');
}

if (preg_match('/<|>|script|javascript:|on\w+\s*=/i', $input)) {
    http_response_code(400);
    die('Error: invalid input');
}

echo htmlspecialchars($input, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
?>
