<?php

require("siteinfo.inc");

$derekSite = new DerekSite();

$derekSite->get_start_of_site();

$derekSite->get_title();

$derekSite->get_description();

$derekSite->get_keyworks();

$derekSite->get_author();

$derekSite->get_close_header();

$derekSite->get_content();

$derekSite->get_close_page();


?>