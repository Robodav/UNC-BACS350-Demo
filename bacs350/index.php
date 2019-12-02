<?php

    /*
        Create page content by rendering a template.
    */

    include 'log/log.php';
    add_log($log, 'Main page loaded');

    $site_title = 'dvandiver';
    
    $page_title = "Dav's Brain";
    
    $content = '
        <p>
            <a href="/">BACS 350 WordPress Blog</a>
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
        <p>
            The source code is available at <a href="https://github.com/Mark-Seaman/UNC-BACS350-Demo/tree/master/bacs350">BACS 350 Source Code</a>.
        </p>
        
        <ul>
            <li>
                <a href="team.php">Project Team</a>
            </li>
            <li>
                <a href="https://shrinking-world.com/unc/bacs350">Sensei Class Site</a>
            </li>
            <li>
                <a href="demo">Code Demos</a>
            </li>
            <li>
                <a href="pattern">Design Patterns</a>
            </li>
            <li>
                <a href="project">Projects</a>
            </li>
            <li>
                <a href="docman">Docman</a>
            </li>
            <li>
                <a href="superhero">Superheroes</a>
            </li>
            <li>
                <a href="subscriber">Subscriber</a>
            </li>
            <li>
                <a href="notes">Notes</a>
            </li>
            <li>
                <a href="review">Design Reviews</a>
            </li>
        </ul>
    ';
    // Import library code
    define ('LIB_DIR', $_SERVER['DOCUMENT_ROOT'] . '/bacs350/lib/');
    require_once LIB_DIR . 'views.php';
    require_once LIB_DIR . 'log.php';
    

    // Log the page load
    log_page();


    // Create main part of page content
    $content = render_template ("home.html", array());

    $settings = array(
        "site_title" => "UNC BACS 350 Demo",
        "page_title" => "Home Page", 
        'user'       => "",
        "content"    => $content);

    echo render_page($settings);

?>
