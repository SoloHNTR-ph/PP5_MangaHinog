<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'MangaHinogCreate');
define('DB_PASS', 'mangahinog');
define('DB_NAME', 'mangahinog');

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
