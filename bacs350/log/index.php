<?php

    require_once 'log.php';
    require_once 'log_views.php';

    $site_title = 'dvandiver';
    $page_title = 'Subscribers Database';

    $logs = query_logs($db);

    add_log($log, "This page loaded");





?>