<?php
include_once('packages/mobiledetect/mobiledetectlib/Mobile_Detect.php');

$detect = new Mobile_Detect;

if ($detect->isMobile()) {
  header('Location: http://m.domain.com/');
}
?>