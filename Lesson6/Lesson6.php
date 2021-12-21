<?php
class Lesson6{

  public static function getScore($scores){
  
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
          continue;
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
        } elseif($score[1] == 10) {
          $strike = 1;
        } else {
          continue;
        }
        
        if($strike == 1 || $spare == 1) {
          $maxScore += ($score[2] * 2);
        } else {
          $maxScore += $score[2];
        }
      }
      echo $maxScore."\n";
    }
  }
}
  ?>