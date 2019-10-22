<?php

<<<<<<< HEAD
    /*
        Create page content by rendering a template.
    */

    $site_title = 'UNC BACS 350';
    
    $page_title = "Dav's Brain";
    
    $content = '
        <p>
            <a href="..">Home</a>
        </p>
        <p> 
            This page is the beginning of an ongoing project in BACS 350.
        </p>
        <p> 
            It is a custom information manager.
        </p>
        <p> 
            Different rooms within this PHP app will contain different types of info.
        </p>
        
        <ul>
            <li>
                <a href="demo">Code Demos</a>
            </li>
            <li>
                <a href="pattern">Design Patterns</a>
            </li>
            <li>
                <a href="project">Projects</a>
            </li>
        </ul>
    ';

    include '../views.php';
    
    echo render_page($site_title, $page_title, $content);

=======
    // Code to define functions
    require_once 'views.php';
    require_once 'notes_views.php';
    require_once 'notes_db.php';
//    require_once 'log.php';

    // Log this page hit
//    add_log($log, "notes/index.php page loaded");


    // List subscriber records
    $list = render_notes(list_notes ($db));

    
    // Button to go to other views
    $add_button = '<p><a class="button" href="insert.php">Add Note</a></p>';

    
    // Display the HTML in the page
    $intro = '
        <p>
            Visit the <a href="https://unco-bacs.org/bacs350">Seaman\'s Brain</a>
        </p>
         
    ';
    $content = "$intro $add_button $list";

    // Show the page
    echo render_page('Notes App', "Design notes application", $content);
>>>>>>> df30aa02dafcddf531e80363e65c51bd66101f6c
?>
