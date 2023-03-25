<?php

include 'league.model.php';

class LeagueView extends League {

    public function showLeagues() {
        // Get the data from the model
        $results = $this->getLeagues();

        // Return the data as a JSON response
        header('Content-Type: application/json');
        echo json_encode($results);
    }
}

// Create a new instance of the TeamView class
$teamView = new LeagueView;

// Call the showTeams() method to return the data as a JSON response
$teamView->showLeagues();
