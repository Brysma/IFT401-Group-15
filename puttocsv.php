<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Form Submitted, Thank You!</title>
		<link rel="stylesheet" href="css/reg.css">
		<link rel="stylesheet" href="css/main.css">
  		<link rel="icon" href="images/favicon.ico">
	</head>
	<body>
		<?php
			$userid = $_POST['userid'];
			$q1 = $_POST['q1'];
			$q2 = $_POST['q2'];
			$q3 = $_POST['q3'];
			$q4 = $_POST['q4'];
			$q5 = $_POST['q5'];
			$q6 = $_POST['q6'];
			$q7 = $_POST['q7'];
			$q8 = $_POST['q8'];
			$q9 = $_POST['q9'];
			$q10 = $_POST['q10'];
			$q11 = $_POST['q11'];
			$q12 = $_POST['q12'];
			$data = [$userid, $q1, $q2, $q3, $q4, $q5, $q6, $q7, $q8, $q9, $q10, $q11, $q12, "\n"];

			$fp = fopen("questionnaire.csv", "a");
			fputcsv($fp, $data);
			fclose($fp);
		?>
		<?php echo "Thank you for submitting your questionnaire, results will be available shortly!"; ?>

</body>
</html>
