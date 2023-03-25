<?php

include 'team.model.php';

class TeamView extends Team {

    public function showTeams() {
        // Get the data from the model
        $results = $this->getTeams();

        // Return the data as a JSON response
        header('Content-Type: application/json');
        echo json_encode($results);
    }
}

// Create a new instance of the TeamView class
$teamView = new TeamView();

// Call the showTeams() method to return the data as a JSON response
$teamView->showTeams();
