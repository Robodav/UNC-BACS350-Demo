<?php

    // Code to define functions
    require_once 'review_views.php';
    require_once 'review_db.php';

    include '../log/log.php';
    add_log($log, 'Reviews loaded');


    // List review records
    $list = render_reviews(list_reviews ($db));

    
    // Button to go to other views
    $add_button = '<p><a class="button" href="insert.php">Add Review</a></p>';


    // Show the page
    $content = "$add_button $list";
    echo render_page('dvandiver', "Demo 24 - Design Reviews", $content);
?>
