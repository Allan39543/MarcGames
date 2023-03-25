<?php

include 'Dbh.class.php';

class Team extends Dbh{

    protected function setTeam($teamName){

        $sql="INSERT INTO teams(name) VALUES(?)";
        $stmt=$this->connect()->prepare($sql);
    
        $stmt->execute([$teamName]);
    }
}