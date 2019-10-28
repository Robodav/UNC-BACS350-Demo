<?php
    /*
        Superhero Project Workshop
    */
    // Get the render_page and render_card functions
    // require_once '../views.php';
    require 'db.php';
    require_once 'superhero_views.php';
    require_once 'superhero_db.php';

    include '../log/log.php';
    add_log($log, 'Superheroes loaded');

    // Set custom settings
    $site_title = 'dvandiver';
    $page_title = 'Superhero Gallery';

    $add_button = '<p><a class="button" href="insert.php">Add Superhero</a></p>';

    // Get a list of subscribers records
    $superheroes = query_superheroes($db);
    $superslist = render_superheroes($superheroes);


    // Build a list of subscribers in HTML
    $content = "$superslist $add_button";

    echo $list;
    // Create HTML and output the page
    echo render_page($site_title, $page_title, $content);
?>