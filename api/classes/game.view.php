<?php


include 'game.model.php';

class gameView extends Games {

    public function showGames() {
        // Get the data from the model
        $results = $this->getGames();

        // Return the data as a JSON response
        header('Content-Type: application/json');
        echo json_encode($results);
    }
}

// Create a new instance of the TeamView class
$gameView = new gameView;

// Call the showTeams() method to return the data as a JSON response
$gameView->showGames();
