<?php

    require '../views.php';

    // Connect to the Bluehost database for subscribers
    function superhero_db() {
        $port = '3306';
        $dbname = 'dvandive_superheroes';
        $db_connect = "mysql:host=localhost:$port;dbname=$dbname";
        $username = 'dvandive_robodav';
        $password = 'BACS350';
        return new PDO($db_connect, $username, $password);
    }

    
    // Query for all subscribers
    function query_superheroes ($db) {
        $query = "SELECT * FROM superheroes";
        $statement = $db->prepare($query);
        $statement->execute();
        return $statement->fetchAll();
    }


    // render_subscriber_list -- Create a bullet list in HTML
    function render_superhero_list($superheroes) {
        $s = "";
        foreach($superheroes as $row) {
            $name = "$row[name]";
            $description = "$row[description]";
            $image = "$row[image]";
            $s .= render_card($name, $description, $image);
        }
        return $s;
    }


    // Create a connection
    $db = superhero_db();
   
?>
