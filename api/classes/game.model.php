<?php

include 'Dbh.class.php';

class Games extends Dbh{

    protected function setGame($teamOne, $teamTwo , $league){

        $sql="INSERT INTO games(`team1_id`, `team2_id`, `league_id`, `status`) VALUES(?,?,?,?)";
        $stmt=$this->connect()->prepare($sql);
    
        $stmt->execute([$teamOne, $teamTwo , $league,1]);
    }


    protected function getGames(){

        $sql="SELECT * FROM games";
        $stmt=$this->connect()->prepare($sql);
    
        $stmt->execute();

        $results=$stmt->fetchAll();

        return $results;
    }


}