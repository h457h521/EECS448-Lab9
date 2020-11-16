<?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);

  $choice1 = $_POST["Q1option"];
  $choice2 = $_POST["Q2option"];
  $choice3 = $_POST["Q3option"];
  $choice4 = $_POST["Q4option"];
  $choice5 = $_POST["Q5option"];

  $ansArr = array("Q1A3" => "Kansas" , "Q2A2" => "David O. Johnson", "Q3A4" => "Haoshen Huang", "Q4A2" => "October 1", "Q5A1" => "February 14");
  $Q1choices = array("Q1A1" => "New York", "Q1A2" => "California", "Q1A3" => "Kansas", "Q1A4" => "Missouri");
  $Q2choices = array("Q2A1" => "Michael", "Q2A2" => "David O. Johnson", "Q2A3" => "Andrew Gill", "Q2A4" => "Bo Luo");
  $Q3choices = array("Q3A1" => "David", "Q3A2" => "Felix", "Q3A3" => "Zitong Zhang", "Q3A4" => "Haoshen Huang");
  $Q4choices = array("Q4A1" => "November 1", "Q4A2" => "October 1", "Q4A3" => "October 2", "Q4A4" => "October 4");
  $Q5choices = array("Q5A1" => "February 14", "Q5A2" => "February 24", "Q5A3" => "January 14", "Q5A4" => "October 14");


  $numCorrect = 0;

  echo "Question1:<br> ";
  echo "You Answered:", $Q1choices[$choice1], "<br>";
  echo "Correct Answer: ", $ansArr["Q1A3"], "<br>";
  if($choice1 == "Q1A3") {
    $numCorrect += 1;
    echo "Correct";
  }
  else {
    echo "Wrong";
  }
  echo "<br><br>";


  echo "Question2:<br> ";
  echo "You Answered:", $Q2choices[$choice2], "<br>";
  echo "Correct Answer: ", $ansArr["Q2A2"], "<br>";
  if($choice2 == "Q2A2") {
    $numCorrect += 1;
    echo "Correct";
  }
  else {
    echo "Wrong";
  }
  echo "<br><br>";


  echo "Question3:<br> ";
  echo "You Answered:", $Q3choices[$choice3], "<br>";
  echo "Correct Answer: ", $ansArr["Q3A4"], "<br>";
  if($choice3 == "Q3A4") {
    $numCorrect += 1;
    echo "Correct";
  }
  else {
    echo "Wrong";
  }
  echo "<br><br>";


  echo "Question4:<br> ";
  echo "You Answered:", $Q4choices[$choice4], "<br>";
  echo "Correct Answer: ", $ansArr["Q4A2"], "<br>";
  if($choice4 == "Q4A2") {
    $numCorrect += 1;
    echo "Correct";
  }
  else {
    echo "Wrong";
  }
  echo "<br><br>";


  echo "Question5:<br> ";
  echo "You Answered:", $Q5choices[$choice5], "<br>";
  echo "Correct Answer: ", $ansArr["Q5A1"], "<br>";
  if($choice5 == "Q5A1") {
    $numCorrect += 1;
    echo "Correct";
  }
  else {
    echo "Wrong";
  }
  echo "<br><br>";

  echo $numCorrect, "/5", "<br>";
  $numCorrect = ($numCorrect/5)*100;
  echo "Score: ", $numCorrect, "%";

?>
