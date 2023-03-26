<?php
include 'league.model.php';
class FormProcessor extends League
{
  public function process()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      if (isset($_POST['league'])) {
        $name = $_POST['league'];
      }

      $result = "League, $name! created Successfully";

      $this->setLeague($name);
      header('Content-Type: text/plain');
      echo $result;
      exit;
    }
  }
}

$processor = new FormProcessor();
$processor->process();