<?php

    // Code to define functions
    require_once 'views.php';
    require_once 'notes_views.php';
    require_once 'notes_db.php';


    // Pick out the inputs
    $title = filter_input(INPUT_GET, 'title');
    $body = filter_input(INPUT_GET, 'body');
    $date = filter_input(INPUT_GET, 'date');

    if ($title == '' || $body == '' || $date == '') {
        
        // Form view to add notes
        $add_form = add_note_form();


        // Button to clear
        $clear_button = '<a class="button" href="delete.php">Reset Notes</a>';


        // Display the HTML in the page
        $content = "$add_form $clear_button";
        echo render_page('dvandiver', "Add Note", $content);
    }
    else {
        
        // Add record and return to list
        if (add_note ($db, $title, $body, $date))
        {
            header("Location: index.php");
        };
    }
 
?>
