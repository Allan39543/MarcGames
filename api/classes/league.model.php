<?php

include 'Dbh.class.php';

class League extends Dbh
{

    protected function setLeague($leagueName)
    {

        $sql = "INSERT INTO leagues(name) VALUES(?)";
        $stmt = $this->connect()->prepare($sql);

        $stmt->execute([$leagueName]);
    }

    protected function getLeagues()
    {

        $sql = "SELECT * FROM leagues";
        $stmt = $this->connect()->prepare($sql);

        $stmt->execute();

        $results = $stmt->fetchAll();

        return $results;
    }
}