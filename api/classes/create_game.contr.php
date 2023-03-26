<?php
include 'game.model.php';
class FormProcessor extends Games
{
  public function process()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      if (isset($_POST['teamOneId']) && isset($_POST['teamTwoId']) && isset($_POST['leagueId'])) {
        $teamOne = $_POST['teamOneId'];
        $teamTwo = $_POST['teamTwoId'];
        $league = $_POST['leagueId'];
      }

      $result = "Game, $teamOne $teamTwo $league";

      $this->setGame($teamOne, $teamTwo, $league);
      header('Content-Type: text/plain');
      echo $result;
      exit;
    }
  }
}

$processor = new FormProcessor();
$processor->process();