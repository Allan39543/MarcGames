<?php

include 'league.model.php';

class LeagueView extends League
{

    public function showLeagues()
    {
        $results = $this->getLeagues();
        header('Content-Type: application/json');
        echo json_encode($results);
    }
}

$leagueView = new LeagueView;

$leagueView->showLeagues();