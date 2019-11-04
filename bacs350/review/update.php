<?php

    // Code to define functions
    require_once 'review_views.php';
    require_once 'review_db.php';

    include '../log/log.php';
    add_log($log, 'Review update loaded');


    // Pick out the inputs
    $id = filter_input(INPUT_POST, 'id');
    $designer = filter_input(INPUT_POST, 'designer');
    $url = filter_input(INPUT_POST, 'url');
    $report = filter_input(INPUT_POST, 'report');
    $score = filter_input(INPUT_POST, 'score');
    $date = filter_input(INPUT_POST, 'date');
        

    // Gather user input with a form
    if ($designer == '' || $url == '' || $report == '' || $score == '' || $date == '') {
        
        // Form view to add notes
        $id = filter_input(INPUT_GET, 'id');
        $note = get_review($db, $id);
        $edit_form = edit_review_form($note);

        // Display the HTML in the page
        echo render_page('dvandiver', "Edit Review", $edit_form);
    }
    else {
        
        // Add record and return to list
        if (update_review($db, $designer, $url, $report, $score, $date, $id))
        {
            header("Location: index.php");
        };
    }
 
?>
