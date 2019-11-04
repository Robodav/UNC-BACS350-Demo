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

    include 'views.php';
    
    echo render_page($site_title, $page_title, $content);

?>
