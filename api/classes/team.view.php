<?php

include 'team.model.php';

class TeamView extends Team
{
    public function showTeams()
    {

        $results = $this->getTeams();
        header('Content-Type: application/json');
        echo json_encode($results);
    }
}

$teamView = new TeamView();

$teamView->showTeams();