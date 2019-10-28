<?php

    // Code to define functions
    include '../views.php';
    require_once 'superhero_views.php';
    require_once 'superhero_db.php';

    include '../log/log.php';
    add_log($log, 'Superheroes loaded');


    // Pick out the inputs
    $name = filter_input(INPUT_GET, 'name');
    $description = filter_input(INPUT_GET, 'description');
    $image = filter_input(INPUT_GET, 'image');
    

    if ($name == '' || $description == '' || $image == '') {
        
        // Form view to add superhero
        $add_form = add_superhero_form();


        // Button to clear
        $clear_button = '<a href="delete.php">Reset Subscribers</a>';


        // Display the HTML in the page
        $intro = 'This form collects data to create a superhero record in the database.';
        $content = "$intro $list $add_form $clear_button";

        echo render_page('dvandive', "Add Superhero", $content);
    }
 
?>
