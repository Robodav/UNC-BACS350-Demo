<?php
    /*
        Superhero Project Workshop
    */
    // Get the render_page and render_card functions
    include '../views.php';
    require 'db.php';
<<<<<<< HEAD
    require_once 'superhero_views.php';
    require_once 'superhero_db.php';

=======
>>>>>>> a0fde8e360d26e4bb97c1785847fb0c40f73108b
    // Set custom settings
    $site_title = 'dvandiver';
    $page_title = 'Superhero Gallery';
<<<<<<< HEAD

    $add_button = '<p><a class="button" href="insert.php">Add Superhero</a></p>';

    // Get a list of subscribers records
    $superheroes = query_superheroes($db);
    $superslist = render_superhero_list($superheroes);


    // Build a list of subscribers in HTML
    $content = "$superslist $add_button";
=======
    // $content =
    //     render_card("Captain America", "Classic America hero archtype", "https://img3.wikia.nocookie.net/__cb20150312230447/disney/images/7/74/CaptainAmerica_AOU_character-art-poster_Textless.jpg") .
    //     render_card("Iron Man", "Billionaire Entrpreneur", "https://vignette2.wikia.nocookie.net/deathbattle/images/4/4c/SJPA_Iron_Man_1.png/revision/latest?cb=20150331234430");

    // Get a list of subscribers records
    $superheroes = query_superheroes($db);


    // Build a list of subscribers in HTML
    $content = render_superhero_list($superheroes);
>>>>>>> a0fde8e360d26e4bb97c1785847fb0c40f73108b

    echo $list;
    // Create HTML and output the page
    echo render_page($site_title, $page_title, $content);
?>