<?php
include 'scores_game.model.php';
class FormProcessor extends Scores
{
  public function process()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      if (isset($_POST['gameId']) && isset($_POST['teamOneScore']) && isset($_POST['teamTwoScore'])) {
        $gameId = $_POST['gameId'];
        $teamOneScore = $_POST['teamOneScore'];
        $teamTwoScore = $_POST['teamTwoScore'];
      }
      $date = date('Y-m-d H:i:s');
      $result = "Game Id : $gameId Team1 Score : $teamOneScore Team2 Score :  $teamTwoScore : $date";

      $this->setScore($gameId, $teamOneScore, $teamTwoScore);
      header('Content-Type: text/plain');
      echo $result;
      exit;
    }
  }
}

$processor = new FormProcessor();
$processor->process();