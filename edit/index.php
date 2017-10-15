<?php

// Get the database connection file
require_once '../library/connections.php';
// Get the acme model for use as needed
require_once '../model/queries.php';

$action = filter_input(INPUT_POST, 'action');
$asset_tag = filter_input(INPUT_POST, 'asset_tag');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'search';
    }
}

switch ($action) {
    case 'search':
        include '../view/home.php';
        break;
    case 'insert':
        include '../view/addPC.php';
        break;
    case 'query':
        $asset_tag = filter_input(INPUT_POST, 'asset_tag');
        if (empty($asset_tag)) {
            $message = '<h3>There was an error processing your request.</h3>';
            include '../view/home.php';
            exit;
        } else {
            $computer = assetTag($asset_tag);

            $message = "<form method = 'post' action = '/asset_tracking/'>";
            $message .= "<input type = 'text' value='$computer[asset_tag]' placeholder = 'Asset Tag' name = 'asset_tag' id = 'asset_tag'>";
            $message .= "$computer[model]";
            $message .= "<input type = 'text' value='$computer[building]' placeholder = 'Building' name = 'building' id = 'building'>";
            $message .= "<input type = 'text' value='$computer[room]' placeholder = 'Room' name = 'room' id = 'room'>";
            $message .= "<input type = 'text' value='$computer[year]' placeholder = 'Year' name = 'year' id = 'year'>";
            $message .= "<button type = 'submit'>Search</button>";
            $message .= "<input type = 'hidden' name = 'action' value = 'query'>";
            $message .= "</form>";
            $message .= '</table>';
            include '../view/query.php';
        }
    case 'insertAsset':
        $asset_tag = filter_input(INPUT_POST, 'asset_tag');
        $model = filter_input(INPUT_POST, 'model');
        $building = filter_input(INPUT_POST, 'building');
        $room = filter_input(INPUT_POST, 'room');
        $year = filter_input(INPUT_POST, 'year');
        if (empty($asset_tag) || empty($model) || empty($building) || empty($room) ||
                empty($year)) {
            $message = '<h3>Please provide information for all of the fields.</h3>';
            include '../view/addPC.php';
            exit;
// ------ ASSET search
        } else {
            $addOutcome = insertAsset($asset_tag, $model, $building, $room, $year);

            // Check and report the result
            if ($addOutcome === 1) {
                $message = "Asset $asset_tag was succesfully added.";
                include '../view/addPC.php';
            }
        }
        break;
    default :
        echo "action = $action<br>";
        include 'view/404.php';
}
    