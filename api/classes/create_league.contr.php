<?php
include 'league.model.php';
class FormProcessor extends League {
    public function process() {
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Get the name and age values from the form data
        
        if (isset($_POST['league'])) {
            $name = $_POST['league'];
        }
  
        // Do something with the name and age values
        $result = "League, $name! created Successfully";
  
        $this->setLeague($name);
        // Return the result as a response
        header('Content-Type: text/plain');
        echo $result;
        exit;
      }
    }
  }

$processor = new FormProcessor();
$processor->process();