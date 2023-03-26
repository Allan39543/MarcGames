<?php


include 'game.model.php';

class gameView extends Games
{

    public function showGames()
    {
        $results = $this->getGames();

        header('Content-Type: application/json');
        echo json_encode($results);
    }
}

$gameView = new gameView;

$gameView->showGames();