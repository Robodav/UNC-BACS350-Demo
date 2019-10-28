<?php

    /*
        Create page content by rendering a template.
    */

    include 'log/log.php';
    add_log($log, 'Main page loaded');

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
        </ul>
    ';

    include 'views.php';
    
    echo render_page($site_title, $page_title, $content);

?>
