<?php

echo "<div><h2><center>Thank you for participating<br>Please consult your guide!<br>Have a nice Day! Cheers Julian<br></center></h2></div>";
$action = $_POST["action"];
$temparray = array(
  'mouseevents-events'=>$_POST['mouseevents-events'],
  'demographics-turk_id'=>$_POST['demographics-turk_id'],
  'demographics-assignment_id'=>$_POST['demographics-assignment_id'],
  'demographics-age'=>$_POST['demographics-age'],
  'demographics-gender'=>$_POST['demographics-gender'],
  'demographics-computer_experience'=>$_POST['demographics-computer_experience'],
  'demographics-investment_experience'=>$_POST['demographics-investment_experience'],
  'demographics-interfaceName'=>$_POST['demographics-interfaceName'],
  'pretest-pretest'=>$_POST['pretest-pretest'],
  'pretest-turk_id'=>$_POST['pretest-turk_id'],
  'pretest-step'=>$_POST['pretest-step'],
  'pretest-exp_return'=>$_POST['pretest-exp_return'],
  'pretest-exp_risk'=>$_POST['pretest-exp_risk'],
  'pretest-starting_cash'=>$_POST['pretest-starting_cash'],
  'pretest-a1'=>$_POST['pretest-a1'],
  'pretest-a2'=>$_POST['pretest-a2'],
  'pretest-a3'=>$_POST['pretest-a3'],
  'pretest-a4'=>$_POST['pretest-a4'],
  'pretest-a5'=>$_POST['pretest-a5'],
  'pretest-remaining_cash'=>$_POST['pretest-remaining_cash'],
  'timing-1-turkId'=>$_POST['timing-1-turkId'],
  'timing-1-step'=>$_POST['timing-1-step'],
  'timing-1-totalTime'=>$_POST['timing-1-totalTime'],
  'portfolio-1-turk_id'=>$_POST['portfolio-1-turk_id'],
  'portfolio-1-step'=>$_POST['portfolio-1-step'],
  'portfolio-1-exp_return'=>$_POST['portfolio-1-exp_return'],
  'portfolio-1-exp_risk'=>$_POST['portfolio-1-exp_risk'],
  'portfolio-1-starting_cash'=>$_POST['portfolio-1-starting_cash'],
  'portfolio-1-a1'=>$_POST['portfolio-1-a1'],
  'portfolio-1-a2'=>$_POST['portfolio-1-a2'],
  'portfolio-1-a3'=>$_POST['portfolio-1-a3'],
  'portfolio-1-a4'=>$_POST['portfolio-1-a4'],
  'portfolio-1-a5'=>$_POST['portfolio-1-a5'],
  'portfolio-1-remaining_cash'=>$_POST['portfolio-1-remaining_cash'],
  'portfolio-1-stockReturns'=>$_POST['portfolio-1-stockReturns'],
  'portfolio-1-startingCash'=>$_POST['portfolio-1-startingCash'],
  'portfolio-1-remainingCash'=>$_POST['portfolio-1-remainingCash'],
  'timing-2-turkId'=>$_POST['timing-2-turkId'],
  'timing-2-step'=>$_POST['timing-2-step'],
  'timing-2-totalTime'=>$_POST['timing-2-totalTime'],
  'portfolio-2-turk_id'=>$_POST['portfolio-2-turk_id'],
  'portfolio-2-step'=>$_POST['portfolio-2-step'],
  'portfolio-2-exp_return'=>$_POST['portfolio-2-exp_return'],
  'portfolio-2-exp_risk'=>$_POST['portfolio-2-exp_risk'],
  'portfolio-2-starting_cash'=>$_POST['portfolio-2-starting_cash'],
  'portfolio-2-a1'=>$_POST['portfolio-2-a1'],
  'portfolio-2-a2'=>$_POST['portfolio-2-a2'],
  'portfolio-2-a3'=>$_POST['portfolio-2-a3'],
  'portfolio-2-a4'=>$_POST['portfolio-2-a4'],
  'portfolio-2-a5'=>$_POST['portfolio-2-a5'],
  'portfolio-2-remaining_cash'=>$_POST['portfolio-2-remaining_cash'],
  'portfolio-2-stockReturns'=>$_POST['portfolio-2-stockReturns'],
  'portfolio-2-startingCash'=>$_POST['portfolio-2-startingCash'],
  'portfolio-2-remainingCash'=>$_POST['portfolio-2-remainingCash'],
  'timing-3-turkId'=>$_POST['timing-3-turkId'],
  'timing-3-step'=>$_POST['timing-3-step'],
  'timing-3-totalTime'=>$_POST['timing-3-totalTime'],
  'portfolio-3-turk_id'=>$_POST['portfolio-3-turk_id'],
  'portfolio-3-step'=>$_POST['portfolio-3-step'],
  'portfolio-3-exp_return'=>$_POST['portfolio-3-exp_return'],
  'portfolio-3-exp_risk'=>$_POST['portfolio-3-exp_risk'],
  'portfolio-3-starting_cash'=>$_POST['portfolio-3-starting_cash'],
  'portfolio-3-a1'=>$_POST['portfolio-3-a1'],
  'portfolio-3-a2'=>$_POST['portfolio-3-a2'],
  'portfolio-3-a3'=>$_POST['portfolio-3-a3'],
  'portfolio-3-a4'=>$_POST['portfolio-3-a4'],
  'portfolio-3-a5'=>$_POST['portfolio-3-a5'],
  'portfolio-3-remaining_cash'=>$_POST['portfolio-3-remaining_cash'],
  'portfolio-3-stockReturns'=>$_POST['portfolio-3-stockReturns'],
  'portfolio-3-startingCash'=>$_POST['portfolio-3-startingCash'],
  'portfolio-3-remainingCash'=>$_POST['portfolio-3-remainingCash'],
  'timing-4-turkId'=>$_POST['timing-4-turkId'],
  'timing-4-step'=>$_POST['timing-4-step'],
  'timing-4-totalTime'=>$_POST['timing-4-totalTime'],
  'portfolio-4-turk_id'=>$_POST['portfolio-4-turk_id'],
  'portfolio-4-step'=>$_POST['portfolio-4-step'],
  'portfolio-4-exp_return'=>$_POST['portfolio-4-exp_return'],
  'portfolio-4-exp_risk'=>$_POST['portfolio-4-exp_risk'],
  'portfolio-4-starting_cash'=>$_POST['portfolio-4-starting_cash'],
  'portfolio-4-a1'=>$_POST['portfolio-4-a1'],
  'portfolio-4-a2'=>$_POST['portfolio-4-a2'],
  'portfolio-4-a3'=>$_POST['portfolio-4-a3'],
  'portfolio-4-a4'=>$_POST['portfolio-4-a4'],
  'portfolio-4-a5'=>$_POST['portfolio-4-a5'],
  'portfolio-4-remaining_cash'=>$_POST['portfolio-4-remaining_cash'],
  'portfolio-4-stockReturns'=>$_POST['portfolio-4-stockReturns'],
  'portfolio-4-startingCash'=>$_POST['portfolio-4-startingCash'],
  'portfolio-4-remainingCash'=>$_POST['portfolio-4-remainingCash'],
  'timing-5-turkId'=>$_POST['timing-5-turkId'],
  'timing-5-step'=>$_POST['timing-5-step'],
  'timing-5-totalTime'=>$_POST['timing-5-totalTime'],
  'portfolio-5-turk_id'=>$_POST['portfolio-5-turk_id'],
  'portfolio-5-step'=>$_POST['portfolio-5-step'],
  'portfolio-5-exp_return'=>$_POST['portfolio-5-exp_return'],
  'portfolio-5-exp_risk'=>$_POST['portfolio-5-exp_risk'],
  'portfolio-5-starting_cash'=>$_POST['portfolio-5-starting_cash'],
  'portfolio-5-a1'=>$_POST['portfolio-5-a1'],
  'portfolio-5-a2'=>$_POST['portfolio-5-a2'],
  'portfolio-5-a3'=>$_POST['portfolio-5-a3'],
  'portfolio-5-a4'=>$_POST['portfolio-5-a4'],
  'portfolio-5-a5'=>$_POST['portfolio-5-a5'],
  'portfolio-5-remaining_cash'=>$_POST['portfolio-5-remaining_cash'],
  'portfolio-5-stockReturns'=>$_POST['portfolio-5-stockReturns'],
  'portfolio-5-startingCash'=>$_POST['portfolio-5-startingCash'],
  'portfolio-5-remainingCash'=>$_POST['portfolio-5-remainingCash'],
  'qualification-turk_id'=>$_POST['qualification-turk_id'],
  'qualification-q1'=>$_POST['qualification-q1'],
  'qualification-q3'=>$_POST['qualification-q3'],
  'qualification-q4'=>$_POST['qualification-q4'],
  'confidence-turk_id'=>$_POST['confidence-turk_id'],
  'confidence-q1'=>$_POST['confidence-q1'],
  'confidence-q2'=>$_POST['confidence-q2'],
  'confidence-q3'=>$_POST['confidence-q3'],
  'confidence-q4'=>$_POST['confidence-q4'],
  'confidence-q5'=>$_POST['confidence-q5'],
  'financial_literacy-turk_id'=>$_POST['financial_literacy-turk_id'],
  'financial_literacy-q1'=>$_POST['financial_literacy-q1'],
  'financial_literacy-q2'=>$_POST['financial_literacy-q2'],
  'financial_literacy-q3'=>$_POST['financial_literacy-q3'],
  'financial_literacy-q4'=>$_POST['financial_literacy-q4'],
  'financial_literacy-q5'=>$_POST['financial_literacy-q5'],
  'financial_literacy-q6'=>$_POST['financial_literacy-q6'],
  'financial_literacy-q7'=>$_POST['financial_literacy-q7'],
  'financial_literacy-q8'=>$_POST['financial_literacy-q8'],
  'financial_literacy-q9'=>$_POST['financial_literacy-q9'],
  'financial_literacy-q10'=>$_POST['financial_literacy-q10'],
  'need_for_cognition-turk_id'=>$_POST['need_for_cognition-turk_id'],
  'need_for_cognition-q1'=>$_POST['need_for_cognition-q1'],
  'need_for_cognition-q2'=>$_POST['need_for_cognition-q2'],
  'need_for_cognition-q3'=>$_POST['need_for_cognition-q3'],
  'need_for_cognition-q4'=>$_POST['need_for_cognition-q4'],
  'need_for_cognition-q5'=>$_POST['need_for_cognition-q5'],
  'need_for_cognition-q6'=>$_POST['need_for_cognition-q6'],
  'need_for_cognition-q7'=>$_POST['need_for_cognition-q7'],
  'need_for_cognition-q8'=>$_POST['need_for_cognition-q8'],
  'need_for_cognition-q9'=>$_POST['need_for_cognition-q9'],
  'need_for_cognition-q10'=>$_POST['need_for_cognition-q10'],
  'need_for_cognition-q11'=>$_POST['need_for_cognition-q11'],
  'need_for_cognition-q12'=>$_POST['need_for_cognition-q12'],
  'need_for_cognition-q13'=>$_POST['need_for_cognition-q13'],
  'need_for_cognition-q14'=>$_POST['need_for_cognition-q14'],
  'need_for_cognition-q15'=>$_POST['need_for_cognition-q15'],
  'need_for_cognition-q16'=>$_POST['need_for_cognition-q16'],
  'need_for_cognition-q17'=>$_POST['need_for_cognition-q17'],
  'need_for_cognition-q18'=>$_POST['need_for_cognition-q18'],
  'feedback-turk_id'=>$_POST['feedback-turk_id'],
  'feedback-comments'=>$_POST['feedback-comments'],
  'workerId'=>$_POST['workerId'],
  'assignmentId'=>$_POST['assignmentId']
);

// echo json_encode($temparray);
 
$json  =json_encode($temparray, JSON_PRETTY_PRINT);

// if($action = "save") {
  $time = date("Y-m-d H:i:s");
 // $time = time();
  $ret = file_put_contents('saves/global_sa_sl_both_'.$time.'.json', json_encode($temparray, JSON_PRETTY_PRINT), FILE_APPEND | LOCK_EX);
  if ($ret != null){
    echo "$ret saved";
  }
// }
?>   