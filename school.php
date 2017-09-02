<?php
$firstName = 'Who';
$lastName = 'Ever';
$currentGrade = 12;
$finalAverage = 60;
$messageBody = '';


if (!$firstName || !$lastName) {
  echo 'please enter a student name';
} elseif ($currentGrade < 9 || $currentGrade > 12) {
  echo 'this is only for high school. please enter a grade between 9 and 12';
} else {
  if ($finalAverage < 50) {
    $messageBody = "You epic fail. Summer school sucks... ha ha ha ";
  } else {
      switch ($currentGrade) {
          case 9:
              $messageBody = "Freshmen, ready for round two ";
              break;

          case 10:
              $messageBody = "Sophmore no more";
              break;

          case 11:
              $messageBody = "Junior, just lay low ";
              break;

          case 12:
              $messageBody = "Senior, time to blow this popsicle stand ";
              break;
            default:
              $messageBody = "Grade must be between 9-12";
              break;
      }
  }
  echo "Dear $firstName $lastName,\nAs a ";
  echo $messageBody;  
}
?>
