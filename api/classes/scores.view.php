<?php
include 'scores_game.model.php';

class ScoresView extends Scores
{

    public function showScores()
    {

        $results = $this->getScores();

        $games = array();
        foreach ($results as $result) {
            $game = array();
            $game['team1'] = $result['team1'];
            $game['team2'] = $result['team2'];
            $game['status'] = $result['status'];
            $game['league'] = $result['league'];
            $game['unix_time'] = $result['unix_time'];
            $game['scores'] = array(
                array('scope' => 'ht', 'score' => $result['score1']),
                array('scope' => 'ft', 'score' => $result['score2'])
            );
            $games[] = $game;
        }

        $data = array('games' => $games);
        header('Content-Type: application/json');
        echo json_encode($data);
    }
}

$scoresView = new ScoresView();

$scoresView->showScores();