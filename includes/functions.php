<?php
/**
 * 
 * Main Functions
 * 
 */

function show_title($title = SITE_NAME) {
    $title = isset($title) ? $title : SITE_NAME;
    echo("<title>$title</title>");
}