<?php
include 'top.php';

if (isset($_GET['id'])) {
  $contentid = filter_var($_GET['id']);
}
else {
  $contentid = 'our-branches';
}

$include_file = DOC_ROOT.'pages/contact_pages.php';
include DOC_ROOT.'template.php';
?>
