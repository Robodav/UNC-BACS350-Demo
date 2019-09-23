<?php
    /*
        Superhero Project Workshop
    */
    // Get the render_page and render_card functions
    include '../views.php';
    // Set custom settings
    $site_title = 'UNC BACS 350';
    $page_title = 'Superhero Gallery';
    $content =
        render_card("Captain America", "Classic America hero archtype", "https://img3.wikia.nocookie.net/__cb20150312230447/disney/images/7/74/CaptainAmerica_AOU_character-art-poster_Textless.jpg") .
        render_card("Iron Man", "Billionaire Entrpreneur", "https://vignette2.wikia.nocookie.net/deathbattle/images/4/4c/SJPA_Iron_Man_1.png/revision/latest?cb=20150331234430");
    // Create HTML and output the page
    echo render_page($site_title, $page_title, $content);
?>