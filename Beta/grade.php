<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Grade</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic' rel='stylesheet' type='text/css'>
</head>
<body>
    <div id="page-wrap">
        <h1 class="transparent index-headline" >Ini Hasil Lab Yang Paling Cocok Dengan Kamu</h1>
        
        <?php
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];

            $totalA = 0;
            $totalB = 0;
            $totalC = 0;
            $totalD = 0;

            if ($answer1 == "A") { $totalA = $totalA + 1.17; $totalD = $totalD + .06; }
            if ($answer1 == "B") { $totalB = $totalB + 1.15; $totalC = $totalC + .05; }
            if ($answer1 == "C") { $totalC = $totalC + 1.13; $totalA = $totalA + .05; }
            if ($answer1 == "D") { $totalD = $totalD + 1.16; $totalA = $totalA + .07; }

            if ($answer2 == "A") { $totalA = $totalA + 1.23; }
            if ($answer2 == "B") { $totalB = $totalB + 1.15; }
            if ($answer2 == "C") { $totalC = $totalC + 1.13; }
            if ($answer2 == "D") { $totalD = $totalD + 1.16; }

            if ($answer3 == "A") { $totalA = $totalA + 1.17; $totalC = $totalC + .05; }
            if ($answer3 == "B") { $totalB = $totalB + 1.15; $totalC = $totalC + .03; }
            if ($answer3 == "C") { $totalC = $totalC + 1.13; $totalB = $totalB + .07; }
            if ($answer3 == "D") { $totalD = $totalD + 1.16; }

            if ($answer4 == "A") { $totalA = $totalA + 1.17; }
            if ($answer4 == "B") { $totalB = $totalB + 1.15; }
            if ($answer4 == "C") { $totalC = $totalC + 1.13; $totalA = $totalA + .05; $totalB = $totalB + .06; $totalD = $totalD + .07; }
            if ($answer4 == "D") { $totalD = $totalD + 1.16; $totalB = $totalB + .04; $totalA = $totalA + .045; $totalC = $totalC + .034; }

            if ($answer5 == "A") { $totalA = $totalA + 1.17; $totalD = $totalD + .08; }
            if ($answer5 == "B") { $totalB = $totalB + 1.15; }
            if ($answer5 == "C") { $totalC = $totalC + 1.14; $totalA = $totalA + .06; $totalD = $totalD + .08; }
            if ($answer5 == "D") { $totalD = $totalD + 1.16; $totalC = $totalC + .04; }

            ?>
<div class="results-overlay">

            <?php
            if ($totalA > $totalB && $totalA > $totalC && $totalA > $totalD) {
                  echo '<div class="quiz-overlay result priest"></div>
                  <div class="results-text">
                  	<p class="you-chose">You Scored:</p>
                  	<div class="results test-results2">
                  		<p class="score">Rekayasa Perangkat Lunak (RPL)</p>
                  		<p class="score-details">RPL anaknya ganteng-ganteng dan cantik-cantik biasanya.</p>
                  		<a id="replay" class="take-quiz-btn" href="/test.php">Main Lagi?</a></div>';
            }
            elseif ($totalB > $totalA && $totalB > $totalC && $totalB > $totalD) {
                  echo '<div class="quiz-overlay result megadeth"></div>
                  <div class="results-text">
                  	<p class="you-chose">You Scored:</p>
                  	<div class="results test-results2">
                  		<p class="score">Mobile Inovation Studio (MIS)</p>
                  		<p class="score-details">Anak lab MIS itu ada yang soleh ada yang solehah.</p>
                  		<a id="replay" class="take-quiz-btn" href="/test.php">Main Lagi?</a></div>';
            }
            elseif ($totalC > $totalA && $totalC > $totalB && $totalC > $totalD) {
                  echo '<div class="quiz-overlay result maiden"></div>
                  <div class="results-text">
                  	<p class="you-chose">You Scored:</p>
                  	<div class="results test-results2">
                  		<p class="score">Lab Pemograman (LP)</p>
                  		<p class="score-details">Orang-orang pinter berkumpul disini.</p>
                  		<a id="replay" class="take-quiz-btn" href="/test.php">Main Lagi?</a></div>';
            }
            elseif ($totalD > $totalA && $totalD > $totalB && $totalD > $totalC) {
                  echo '<div class="quiz-overlay result dio"></div>
                  <div class="results-text">
                  	<p class="you-chose">You Scored:</p>
                  	<div class="results test-results2">
                  		<p class="score">Interaksi Grafika dan Seni (IGS)</p>
                  		<p class="score-details">Yang gaya-gaya fashionable mainnya kesini.</p>
                  		<a id="replay" class="take-quiz-btn" href="test.php">Main Lagi?</a></div>';
            }   
        ?>     
                </div>
            </div>
</body>
</html>