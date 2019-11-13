<?php

function add_row($log, $text) {
    date_default_timezone_set("America/Denver");
    $date = date('Y-m-d g:i:s a');  
    // Add database row
    $query = "INSERT INTO logs (date, text) VALUES (:date, :text);";
    $statement = $log->prepare($query);
    $statement->bindValue(':date', $date);
    $statement->bindValue(':text', $text);
    $statement->execute();
    $statement->closeCursor();
}

function add_log($log, $text) {
    // Show if insert is successful or not
    try {
        // Create a string for "now"
        date_default_timezone_set("America/Denver");
        $date = date('Y-m-d g:i:s a');

        // Add database row
        $query = "INSERT INTO logs (date, text) VALUES (:date, :text);";
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
function clear_log($log) {
    $query = "DELETE FROM logs";
    $statement = $log->prepare($query);
    $row_count = $statement->execute();
    return true;
}

// Query for all logs
function query_logs($log) {
    try {
        $query = "SELECT * FROM logs";
        $statement = $log->prepare($query);
        $statement->execute();
        return $statement->fetchAll();
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        echo "<p>Error: $error_message</p>";
        die();
    }
    
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
    function bluehost_logs_connect() {
        require_once '../secret_settings.php'
        $dbname = 'dvandive_logs';
        return log_database($host, $dbname, $username, $password);
    }


    // Create a database connection
    $log = bluehost_logs_connect(); 

?>