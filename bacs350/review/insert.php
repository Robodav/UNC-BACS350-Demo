<?php

    // Code to define functions
    require_once 'review_views.php';
    require_once 'review_db.php';

    include '../log/log.php';
    add_log($log, 'Review insert loaded');


    // Pick out the inputs fields
    $id = filter_input(INPUT_GET, 'id');
    $designer = filter_input(INPUT_GET, 'designer');
    $url = filter_input(INPUT_GET, 'url');
    $report = filter_input(INPUT_GET, 'report');
    $score = filter_input(INPUT_GET, 'score');
    $date = filter_input(INPUT_GET, 'date');


    // Show form when vars not set
    if ($designer == '' || $url == '' || $report == '' || $score == '' || $date == '') {
        
        // Form view to add notes
        $add_form = add_review_form();

        
        // Display the HTML in the page
        echo render_page('dvandiver', "Add Review", $add_form);
    }
    else {
        
        // Add record and return to list
        if (add_review ($db, $designer, $url, $report, $score, $date))
        {
            header("Location: index.php");
        };
    }
 
?>
