<?php

// Get the database connection file
require_once 'library/connections.php';
// Get the acme model for use as needed
require_once 'model/queries.php';

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'Home';
    }
}

switch ($action) {
    case 'Home':
        include 'view/home.php';
        break;
    case 'query':
        $asset_tag = filter_input(INPUT_POST, 'asset_tag');
        $model = filter_input(INPUT_POST, 'model');
        $building = filter_input(INPUT_POST, 'building');
        $room = filter_input(INPUT_POST, 'room');
        $year = filter_input(INPUT_POST, 'year');
        if (empty($asset_tag) && empty($model) && empty($building) && empty($room) &&
                empty($year)) {
            $message = '<h3>Please provide information for at least one field.</h3>';
            include 'view/home.php';
            exit;
// ------ ASSET search
        } elseif (empty($model) && empty($building) && empty($room) && empty($year)) {
            $computers = assetTag($asset_tag);

            // Check and report the result
            if (is_array($computers)) {
                $message = "<table><tr><th>Asset Tag</th><th>Model</th><th>Building</th><th>Room</th><th>Year</th></tr>";
                foreach ($computers as $computer) {
                    $message .= "<tr><th><a href='edit/?action=query'>";
                    $message .= "$computer[asset_tag]</a></th><th>$computer[model]</th><th>$computer[building]</th>";
                    $message .= "<th>$computer[room]</th><th>$computer[year]</th></tr>";
                }
                $message .= '</table>';
                include 'view/home.php';
            } else {
                $message = "<p>Sorry, but that item was not found.  Please try agian.</p>";
                include 'view/home.php';
                exit;
            }
// ------ BUILDING search
        } elseif (empty($model) && empty($asset_tag) && empty($room) && empty($year)) {
            $computers = building($building);

            // Check and report the result
            if (is_array($computers)) {
                $message = "<table><tr><th>Asset Tag</th><th>Model</th><th>Building</th><th>Room</th><th>Year</th></tr>";
                foreach ($computers as $computer) {
                    $message .= "<tr><th><a href='edit/?action=query'>";
                    $message .= "$computer[asset_tag]</a></th><th>$computer[model]</th><th>$computer[building]</th>";
                    $message .= "<th>$computer[room]</th><th>$computer[year]</th></tr>";
                }
                $message .= '</table>';
                include 'view/home.php';
            } else {
                $message = "<p>Sorry, but that item was not found.  Please try agian.</p>";
                include 'view/home.php';
                exit;
            }
// ------ MODEL search
        } elseif (empty($asset_tag) && empty($building) && empty($room) && empty($year)) {
            $computers = model($model);

            // Check and report the result
            if (empty($computers)) {
                $message = "<p>Sorry, but that item was not found.  Please try agian.</p>";
                include 'view/home.php';
                exit;
            } else {
                $message = "<table><tr><th>Asset Tag</th><th>Model</th><th>Building</th><th>Room</th><th>Year</th></tr>";
                foreach ($computers as $computer) {
                    $message .= "<tr><th><a href='edit/?action=query'>";
                    $message .= "$computer[asset_tag]</a></th><th>$computer[model]</th><th>$computer[building]</th>";
                    $message .= "<th>$computer[room]</th><th>$computer[year]</th></tr>";
                }
                $message .= '</table>';
                include 'view/home.php';
            }
        } else {
            $message = '<h3>Please provide one piece of info, for now.</h3>';
            include 'view/home.php';
        }
        break;
    default :
        echo "action = $action<br>";
        include 'view/404.php';
}
    