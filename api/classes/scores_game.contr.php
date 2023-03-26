<?php
include 'scores_game.model.php';
class FormProcessor extends Scores{
    public function process() {
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Get the name and age values from the form data
        
        if (isset($_POST['gameId']) && isset($_POST['teamOneScore']) && isset($_POST['teamTwoScore']) ) {
            $gameId = $_POST['gameId'];
            $teamOneScore = $_POST['teamOneScore'];
            $teamTwoScore = $_POST['teamTwoScore'];
        }
  
        // Do something with the name and age values
        $result = "Game Id : $gameId Team1 Score : $teamOneScore Team2 Score :  $teamTwoScore ";
  
        $this->setScore($gameId,$teamOneScore,$teamTwoScore);
        // Return the result as a response
        header('Content-Type: text/plain');
        echo $result;
        exit;
      }
    }
  }

$processor = new FormProcessor();
$processor->process();