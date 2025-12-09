<?php
$flag_file = '/tmp/flag.txt';
if (file_exists($flag_file)) {
    $content = file_get_contents($flag_file);
    echo htmlspecialchars($content, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
} else {
    echo "flag 文件不存在";
}
?>

