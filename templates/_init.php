<?php
include ("./_func.php");

$pg= $pages->get("/site-settings/");

$hdr_logo= "<img src='{$pg->site_header_logo->url}' class='img-responsive' alt='{$pg->site_header_logo->description}'> ";
$foot_logo= "<img src='{$pg->site_footer_logo->url}' class='img-responsive' alt='{$pg->site_footer_logo->description}'> ";

?>