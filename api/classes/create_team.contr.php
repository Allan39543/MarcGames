<?php
include 'create_team.model.php';
class FormProcessor extends Team {
    public function process() {
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Get the name and age values from the form data
        $name = $_POST['teamName'];
       
  
        // Do something with the name and age values
        $result = "Hello, $name! ";
  
        $this->setTeam($name);
        // Return the result as a response
        header('Content-Type: text/plain');
        echo $result;
        exit;
      }
    }
  }

$processor = new FormProcessor();
$processor->process();