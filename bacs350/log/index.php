<?php

    require 'log.php';
    require_once 'log_views.php';

    $site_title = 'dvandiver';
    $page_title = 'Logs';

    $logs = query_logs($log);

    // Build a list of logs in HTML
    $content = render_log($logs);

    echo render_page($site_title, $page_title, $content);

?>