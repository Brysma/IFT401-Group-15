<?php

$userid = Trim(stripslashes($_POST['userid']));

$q1 = Trim(stripslashes($_POST['q1']));

$q2 = Trim(stripslashes($_POST['q2']));

$q3 = Trim(stripslashes($_POST['q3']));

$q4 = Trim(stripslashes($_POST['q']));

$q5 = Trim(stripslashes($_POST['q']));

$q6 = Trim(stripslashes($_POST['q']));

$q7 = Trim(stripslashes($_POST['q']));

$q8 = Trim(stripslashes($_POST['q']));

$q9 = Trim(stripslashes($_POST['q']));

$q10 = Trim(stripslashes($_POST['q']));

$q11 = Trim(stripslashes($_POST['q']));

$q12 = Trim(stripslashes($_POST['q']));


echo "$userid <br> $q1 <br> $q2 <br> $q3 <br> $q4 <br> $q5 <br> $q6 <br> $q7 <br> $q8 <br> $q9 <br> $q10 <br> $q11 <br> $q12";

if (!empty($userid) || !empty($q1) || !empty($q2) || !empty($q3) || !empty($q4) || !empty($q5) || !empty($q6) || !empty($q7) || !empty($q8) || !empty($q9) || @empty($q10) || !empty($q11) || !empty($q12)){

	$csvData = $userid . "," . $q1 . "," . $q2 . "," . $q3 . "," . $q4 . "," . $q5 . "," . $q6 . "," . $q7 . "," . $q8 . "," . $q9 . "," . $q10 . "," . $q11 . "," . $q12 ;

	$fp = fopen("questionnaire.csv", "a"); // fp is filepointer to $filename

		if ($fp) {
			fwrite($fp,$csvData."\n"); 
			fclose($fp);
		}
}

?>