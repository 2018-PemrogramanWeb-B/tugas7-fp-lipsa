<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>PHP Quiz</title>
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>

	<div id="page-wrap">

		<h1>Yay kamu cocok di lab!</h1>
		
        <?php
            
            $answer1 = $_POST['pertanyaan1-jawab-A'];
            $answer2 = $_POST['pertanyaan2-jawab-A'];
            $answer3 = $_POST['pertanyaan3-jawab-A'];
            $answer4 = $_POST['pertanyaan4-jawab-A'];
            $answer5 = $_POST['pertanyaan5-jawab-A'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "A, B, C") { $totalCorrect++; }
            if ($answer2 == "A, B, C") { $totalCorrect++; }
            if ($answer3 == "A, B, C") { $totalCorrect++; }
            if ($answer4 == "A, B, C") { $totalCorrect++; }
            if ($answer5) { $totalCorrect++; }
            
            echo "<div id='results'>$totalCorrect / 5 correct</div>";
            
        ?>
	
	</div>
	
	<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	var pageTracker = _gat._getTracker("UA-68528-29");
	pageTracker._initData();
	pageTracker._trackPageview();
	</script>

</body>

</html>