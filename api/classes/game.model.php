<?php

include 'Dbh.class.php';

class Games extends Dbh
{

    protected function setGame($teamOne, $teamTwo, $league)
    {
        $date = date('Y-m-d');

        $sql = "INSERT INTO games(`team1_id`, `team2_id`, `league_id`, `status`,`time_date`) VALUES(?,?,?,?,?)";
        $stmt = $this->connect()->prepare($sql);

        $stmt->execute([$teamOne, $teamTwo, $league, 1, $date]);
    }


    protected function getGames()
    {

        $sql = "SELECT * FROM games";
        $stmt = $this->connect()->prepare($sql);

        $stmt->execute();

        $results = $stmt->fetchAll();

        return $results;
    }


}