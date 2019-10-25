<?php

function add_row($db, $text) {
    date_default_timezone_set("America/Denver");
    $date = date('Y-m-d g:i:s a');  
    // Add database row
    $query = "INSERT INTO log (date, text) VALUES (:date, :text);";
    $statement = $log->prepare($query);
    $statement->bindValue(':date', $date);
    $statement->bindValue(':text', $text);
    $statement->execute();
    $statement->closeCursor();
}

function add_log($db, $text) {
    // Show if insert is successful or not
    try {
        // Create a string for "now"
        date_default_timezone_set("America/Denver");
        $date = date('Y-m-d g:i:s a');

        // Add database row
        $query = "INSERT INTO log (date, text) VALUES (:date, :text);";
        $statement = $log->prepare($query);
        $statement->bindValue(':date', $date);
        $statement->bindValue(':text', $text);
        $statement->execute();
        $statement->closeCursor();
        return true;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        echo "<p>Error: $error_message</p>";
        die();
    }
}

// Delete all logs
function delete_logs($db) {
    $query = "DELETE FROM log";
    $statement = $log->prepare($query);
    $row_count = $statement->execute();
    return true;
}

// Query for all logs
function query_logs($db) {
    $query = "SELECT * FROM log";
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement->fetchAll();
}

// render_log_list -- Create a bullet list in HTML
function render_log_list($logs) {
    $s = '<ul>';
    foreach($logs as $row) {
        $date = "Date: <b>$row[date]</b>";
        $text = "$row[text]";
        $s .= "<li>$date : $text</li>";
    }
    $s .= '</ul>';
    return $s;
}

   /* -------------------------------
        DATABASE CONNECT
    ------------------------------- */

    // Connect to Bluehost database 
    function log_database($host, $dbname, $username, $password) {
        try {
            $db_connect = "mysql:host=$host;dbname=$dbname";
            return new PDO($db_connect, $username, $password);
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            echo "<p>Error: $error_message</p>";
            die();
        }
    }


    // Connect to the Bluehost database
    function bluehost_connect() {
        $dbname = 'dvandive_log';
        $username = 'dvandive_robodav';
        $password = 'BACS350';
        $port = '3306';
        $host = "localhost:$port";
        return log_database($host, $dbname, $username, $password);
    }


    // Create a database connection
    $db = bluehost_connect(); 

?>