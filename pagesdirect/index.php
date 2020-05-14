<?php
require 'header.php';
$page = $_GET['page'] ?? 'default';
$page = strip_tags($page);
$page = addslashes($page);
require "pages/$page.php";
require 'footer.php';
?>