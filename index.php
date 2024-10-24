<?php
$root = str_replace('index.php', '', __FILE__);
$mysqli = new mysqli("localhost", "root", "", "APUSTORE");
require_once("functions.php");
require_once("router.php");