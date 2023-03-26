<?php

include 'Dbh.class.php';

class Scores extends Dbh{

    protected function setScore($gameId,$teamOneScore,$teamTwoScore){

        $sql="INSERT INTO scores(game_id,scope,teamOneScore,teamTwoScore) VALUES(?,?,?,?)";
        $stmt=$this->connect()->prepare($sql);
    
        $stmt->execute([$gameId,"ft",$teamOneScore,$teamTwoScore]);
    }

    protected function getScores(){

        $sql="SELECT teams.name AS team1, teams2.name AS team2, games.status, leagues.name AS league, games.time_date AS unix_time, scores.teamOneScore AS score1, scores.teamTwoScore AS score2,scores.scope FROM games JOIN teams ON games.team1_id=teams.id JOIN teams AS teams2 ON games.team2_id=teams2.id JOIN leagues ON games.league_id=leagues.id JOIN scores ON games.id=scores.game_id ORDER BY games.time_date DESC";
        $stmt=$this->connect()->prepare($sql);
    
        $stmt->execute();

        $results=$stmt->fetchAll();

        return $results;
    }
}