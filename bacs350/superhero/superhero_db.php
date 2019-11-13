<?php

    /* -------------------------------
        CRUD OPERATIONS
    ------------------------------- */

    // Add a new record
    function add_superhero($db, $name, $description, $image) {
        try {
            $query = "INSERT INTO superheroes (name, description, image) 
                      VALUES (:name, :description, :image);";
            $statement = $db->prepare($query);
            $statement->bindValue(':name', $name);
            $statement->bindValue(':description', $description);
            $statement->bindValue(':image', $image);
            $statement->execute();
            $statement->closeCursor();
            return true;
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            echo "<p>Error: $error_message</p>";
            die();
        }
    }


     // Lookup Record using ID
    function get_superhero($db, $id) {
        try {
            $query = "SELECT * FROM superheroes WHERE id = :id";
            $statement = $db->prepare($query);
            $statement->bindValue(':id', $id);
            $statement->execute();
            $record = $statement->fetch();
            $statement->closeCursor();
            return $record;
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            echo "<p>Error: $error_message</p>";
            die();
        }
       
    }
       

    // Query for all superheros
    function list_superheroes ($db) {
       try {
            $query = "SELECT * FROM superheroes";
            $statement = $db->prepare($query);
            $statement->execute();
            return $statement->fetchAll();
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            echo "<p>Error: $error_message</p>";
            die();
        }
        
    }


    // Delete Database Record
    function delete_superhero($db, $id) {
        try {
            $query = "DELETE from superheroes WHERE id = :id";
            $statement = $db->prepare($query);
            $statement->bindValue(':id', $id);
            $statement->execute();
            $statement->closeCursor();
            return true;
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            echo "<p>Error: $error_message</p>";
            die();
        }
    }

    // Create a connection
    require_once '../db.php';
    $db = remote_connect('dvandive_superheroes'); 

?>
