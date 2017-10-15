<?php

function insertAsset($asset_tag, $model, $building, $room, $year) {
// Create a connection object using the acme connection function
    $db = byuiConnect();
// The SQL statement
    $sql = 'INSERT INTO computers (`asset_tag`, `model`, `building`, `room`, `year`, `last_update`)
           VALUES (:asset_tag, :model, :building, :room, :year, CURRENT_DATE())';
// Create the prepared statement using the acme connection
    $stmt = $db->prepare($sql);
// The next four lines replace the placeholders in the SQL
// statement with the actual values in the variables
// and tells the database the type of data it is
    $stmt->bindValue(':asset_tag', $asset_tag, PDO::PARAM_STR);
    $stmt->bindValue(':model', $model, PDO::PARAM_STR);
    $stmt->bindValue(':building', $building, PDO::PARAM_STR);
    $stmt->bindValue(':room', $room, PDO::PARAM_STR);
    $stmt->bindValue(':year', $year, PDO::PARAM_STR);
// Insert the data
    $stmt->execute();
// Ask how many rows changed as a result of our insert
    $rowsChanged = $stmt->rowCount();
// Close the database interaction
    $stmt->closeCursor();
// Return the indication of success (rows changed)
    return $rowsChanged;
}
function assetTag($asset_tag) {
// Create a connection object from the acme connection function
    $db = byuiConnect();
// The SQL statement
    $sql = 'SELECT asset_tag, model, building, room, year
            FROM computers
            WHERE asset_tag = :asset_tag';
// Create the prepared statement using the acme connection
    $stmt = $db->prepare($sql);
// The next line binds the vlaues
    $stmt->bindValue(':asset_tag', $asset_tag, PDO::PARAM_STR);
// The next line runs the prepared statement
    $stmt->execute();
// The next line gets the data from the database and
// stores it as an array in the $categories variable
    $computers = $stmt->fetchAll();
// The next line closes the interaction with the database
    $stmt->closeCursor();
// The next line sends the array of data back to where the function
// was called (this should be the controller)
    return $computers;
}

function model($model) {
// Create a connection object from the acme connection function
    $db = byuiConnect();
// The SQL statement
    $sql = 'SELECT asset_tag, model, building, room, year
            FROM computers
            WHERE model = :model';
// Create the prepared statement using the acme connection
    $stmt = $db->prepare($sql);
// The next line binds the vlaues
    $stmt->bindValue(':model', $model, PDO::PARAM_STR);
// The next line runs the prepared statement
    $stmt->execute();
// The next line gets the data from the database and
// stores it as an array in the $categories variable
    $computers = $stmt->fetchAll();
// The next line closes the interaction with the database
    $stmt->closeCursor();
// The next line sends the array of data back to where the function
// was called (this should be the controller)
    return $computers;
}

function building($building) {
// Create a connection object from the acme connection function
    $db = byuiConnect();
// The SQL statement
    $sql = 'SELECT asset_tag, model, building, room, year
            FROM computers
            WHERE building = :building';
// Create the prepared statement using the acme connection
    $stmt = $db->prepare($sql);
// The next line binds the vlaues
    $stmt->bindValue(':building', $building, PDO::PARAM_STR);
// The next line runs the prepared statement
    $stmt->execute();
// The next line gets the data from the database and
// stores it as an array in the $categories variable
    $computers = $stmt->fetchAll();
// The next line closes the interaction with the database
    $stmt->closeCursor();
// The next line sends the array of data back to where the function
// was called (this should be the controller)
    return $computers;
}