<?php
include 'team.model.php';
class FormProcessor extends Team
{
  public function process()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      if (isset($_POST['teamName'])) {
        $name = $_POST['teamName'];
      }

      $result = "Hello, $name! ";

      $this->setTeam($name);
      header('Content-Type: text/plain');
      echo $result;
      exit;
    }
  }
}

$processor = new FormProcessor();
$processor->process();