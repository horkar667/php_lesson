<?php

  $scores = array(
    [1, 5],
    [2, 5],
    [3, 2],
    [5, 5],
    [10, 0],
    [2, 7],
    [5, 0],
    [3, 5],
    [4, 5],
    [10, 10, 1]
  );
  $strike = 0;
  $spare = 0;
  $maxScore = 0;
  foreach($scores as $score){
    if(!(count($score) == 3)){
      if($strike == 1 || $spare == 1) {
        $maxScore += ($score[0] * 2);
      } else {
        $maxScore += $score[0];
      }
      if($score[0] == 10){
        $strike = 1;
        $spare = 0;
        break;
      }

      if($score[1] == 10 - $score[0]) {
        $spare = 1;
      }
      if($strike == 1){
        $maxScore += ($score[1] * 2);
      } else {
        $maxScore += $score[1];
      }
      $strike = 0;
    } else {
      if($strike == 1 || $spare == 1) {
        $maxScore += ($score[0] * 2);
      } else {
        $maxScore += $score[0];
      }
      if($score[0] == 10) {
        $strike = 1;
        $spare = 0;
      }

      if($strike == 1) {
        $maxScore += ($score[1] * 2);
      } else {
        $maxScore += $score[1];
      }
      if($score[1] == 10 - $score[0]) {
        $spare = 1;
      } else {
        break;
      }

      if($strike == 1 || $spare == 1) {
        $maxScore += ($score[2] * 2);
      } else {
        $maxScore += $score[2];
      }




    }
  }

?>