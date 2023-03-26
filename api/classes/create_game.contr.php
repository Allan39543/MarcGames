<?php
include 'game.model.php';
class FormProcessor extends Games {
    public function process() {
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Get the name and age values from the form data
        
        if (isset($_POST['teamOneId']) && isset($_POST['teamTwoId']) && isset($_POST['leagueId']) ) {
            $teamOne = $_POST['teamOneId'];
            $teamTwo = $_POST['teamTwoId'];
            $league = $_POST['leagueId'];
        }


  
        // Do something with the name and age values
        $result = "Game, $teamOne $teamTwo $league";
  
        $this->setGame($teamOne, $teamTwo , $league);
        // Return the result as a response
        header('Content-Type: text/plain');
        echo $result;
        exit;
      }
    }
  }

$processor = new FormProcessor();
$processor->process();