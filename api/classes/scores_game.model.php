<?php

include 'Dbh.class.php';

class Scores extends Dbh{

    protected function setScore($gameId,$teamOneScore,$teamTwoScore){

        $sql="INSERT INTO scores(game_id,scope,teamOneScore,teamTwoScore) VALUES(?,?,?,?)";
        $stmt=$this->connect()->prepare($sql);
    
        $stmt->execute([$gameId,"ft",$teamOneScore,$teamTwoScore]);
    }

    // protected function getTeams(){

    //     $sql="SELECT * FROM teams ";
    //     $stmt=$this->connect()->prepare($sql);
    
    //     $stmt->execute();

    //     $results=$stmt->fetchAll();

    //     return $results;
    // }
}