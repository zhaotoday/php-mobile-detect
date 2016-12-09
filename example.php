<?php
require 'vendor/autoload.php';

$detect = new Mobile_Detect;

if ($detect->isMobile()) {
  header('Location: http://m.domain.com/');
}
?>