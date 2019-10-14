<?php
<<<<<<< HEAD
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
=======

    // Code to define functions
    require_once 'views.php';
    require_once 'superhero_views.php';
    require_once 'superhero_db.php';


    // List superhero records
    $list = render_superheroes(list_superheroes ($db));

    
    // Button to go to other views
    $add_button = '<p><a class="button" href="insert.php">Add Subscriber</a></p>';

    
    $intro = '
        <p>
            This email list gives you access to big ideas and deep thoughts.
        </p>
        <p>
            Visit the <a href="https://seamanslog.com">Seaman\'s Log</a> site now to start reading.
        </p>
    ';
    $content = "$intro $add_button $list";

    // Show the page
    echo render_page('UNC BACS 350', "Seaman's List Subscribers", $content);
?>
>>>>>>> upstream/master
