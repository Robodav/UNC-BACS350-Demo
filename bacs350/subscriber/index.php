<?php

    include 'views.php';

    // Connect to the subscribers database at Bluehost
    require 'subscriber.php';

    include '../log/log.php';
    add_log($log, 'Subscribers loaded');

    $site_title = 'dvandiver';
    $page_title = 'Subscribers Database';
    
    // Get a list of subscribers records
    $subscribers = query_subscribers($db);


    // Build a list of subscribers in HTML
    $content = render_subscriber_list($subscribers);

    echo render_page($site_title, $page_title, $content);
    
?>

<p><b>Success !!</b></p>
