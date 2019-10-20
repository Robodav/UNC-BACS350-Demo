<?php

    // Code to define functions
    require_once 'views.php';
    require_once 'superhero_views.php';
    require_once 'superhero_db.php';


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

        echo render_page('dvandive', "Add Subscriber", $content);
    }
<<<<<<< HEAD


    // Add record and return to list
    if (add_superhero ($db, $name, $description, $image))
    {
        header("Location: index.php");
    };
=======
    else {
        // Add record and return to list
        if (add_superhero ($db, $name, $aka, $image, $description))
        {
            header("Location: index.php");
        };
    }
>>>>>>> upstream/master
 
?>
