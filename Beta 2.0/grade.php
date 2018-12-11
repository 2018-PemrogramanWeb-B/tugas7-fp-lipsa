<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Grade</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>

<body>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="navbar-brand" href="../index.php">Logo</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="test.php">Take a Test</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="lab/daftar_lab.php" title="Detail Lab">Daftar Lab</a>
      </li>
    </ul>
  </nav>
  <br>
  
  <h1 class="transparent index-headline" >Ini Hasil Lab Yang Paling Cocok Dengan Kamu</h1>
        
        <?php
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
            $answer6 = $_POST['question-6-answers'];
            $answer7 = $_POST['question-7-answers'];
            $answer8 = $_POST['question-8-answers'];
            $answer9 = $_POST['question-9-answers'];
            $answer10 = $_POST['question-10-answers'];
            $answer11 = $_POST['question-11-answers'];
            $answer12 = $_POST['question-12-answers'];
            $answer13 = $_POST['question-13-answers'];
            $answer14 = $_POST['question-14-answers'];
            $answer15 = $_POST['question-15-answers'];
            $answer16 = $_POST['question-16-answers'];
            $answer17 = $_POST['question-17-answers'];
            $answer18 = $_POST['question-18-answers'];
            $answer19 = $_POST['question-19-answers'];
            $answer20 = $_POST['question-20-answers'];
            $answer21 = $_POST['question-21-answers'];
            $answer22 = $_POST['question-22-answers'];
            $answer23 = $_POST['question-23-answers'];
            $answer24 = $_POST['question-24-answers'];
            $answer25 = $_POST['question-25-answers'];
            $answer26 = $_POST['question-26-answers'];
            $answer27 = $_POST['question-27-answers'];
            $answer28 = $_POST['question-28-answers'];
            $answer29 = $_POST['question-29-answers'];
            $answer30 = $_POST['question-30-answers'];

            $totalA = 0;
            $totalB = 0;
            $totalC = 0;
            $totalD = 0;
            $totalE = 0;
            $totalF = 0;
            $totalG = 0;
            $totalH = 0;

            if ($answer1 == "A") { $totalA++; $totalD++; }
            if ($answer1 == "B") { $totalB++; $totalC++; }
            if ($answer1 == "C") { $totalC++; $totalA++; }
            if ($answer1 == "D") { $totalD++; $totalA++; }

            if ($answer2 == "A") { $totalD++; $totalA++; }
            if ($answer2 == "B") { $totalD++; $totalA++; }
            if ($answer2 == "C") { $totalD++; $totalA++; }
            if ($answer2 == "D") { $totalD++; $totalA++; }

            if ($answer3 == "A") { $totalD++; $totalA++; }
            if ($answer3 == "B") { $totalD++; $totalA++; }
            if ($answer3 == "C") { $totalD++; $totalA++; }
            if ($answer3 == "D") { $totalD++; $totalA++; }

            if ($answer4 == "A") { $totalD++; $totalA++; }
            if ($answer4 == "B") { $totalD++; $totalA++; }
            if ($answer4 == "C") { $totalD++; $totalA++; }
            if ($answer4 == "D") { $totalD++; $totalA++; }

            if ($answer5 == "A") { $totalD++; $totalA++; }
            if ($answer5 == "B") { $totalD++; $totalA++; }
            if ($answer5 == "C") { $totalD++; $totalA++; }
            if ($answer5 == "D") { $totalD++; $totalA++; }

            if ($answer6 == "A") { $totalD++; $totalA++; }
            if ($answer6 == "B") { $totalD++; $totalA++; }
            if ($answer6 == "C") { $totalD++; $totalA++; }
            if ($answer6 == "D") { $totalD++; $totalA++; }

            if ($answer7 == "A") { $totalD++; $totalA++; }
            if ($answer7 == "B") { $totalD++; $totalA++; }
            if ($answer7 == "C") { $totalD++; $totalA++; }
            if ($answer7 == "D") { $totalD++; $totalA++; }

            if ($answer8 == "A") { $totalD++; $totalA++; }
            if ($answer8 == "B") { $totalD++; $totalA++; }
            if ($answer8 == "C") { $totalD++; $totalA++; }
            if ($answer8 == "D") { $totalD++; $totalA++; }

            if ($answer9 == "A") { $totalD++; $totalA++; }
            if ($answer9 == "B") { $totalD++; $totalA++; }
            if ($answer9 == "C") { $totalD++; $totalA++; }
            if ($answer9 == "D") { $totalD++; $totalA++; }

            if ($answer10 == "A") { $totalD++; $totalA++; }
            if ($answer10 == "B") { $totalD++; $totalA++; }
            if ($answer10 == "C") { $totalD++; $totalA++; }
            if ($answer10 == "D") { $totalD++; $totalA++; }

            if ($answer11 == "A") { $totalD++; $totalA++; }
            if ($answer11 == "B") { $totalD++; $totalA++; }
            if ($answer11 == "C") { $totalD++; $totalA++; }
            if ($answer11 == "D") { $totalD++; $totalA++; }

            if ($answer12 == "A") { $totalD++; $totalA++; }
            if ($answer12 == "B") { $totalD++; $totalA++; }
            if ($answer12 == "C") { $totalD++; $totalA++; }
            if ($answer12 == "D") { $totalD++; $totalA++; }

            if ($answer13 == "A") { $totalD++; $totalA++; }
            if ($answer13 == "B") { $totalD++; $totalA++; }
            if ($answer13 == "C") { $totalD++; $totalA++; }
            if ($answer13 == "D") { $totalD++; $totalA++; }

            if ($answer14 == "A") { $totalD++; $totalA++; }
            if ($answer14 == "B") { $totalD++; $totalA++; }
            if ($answer14 == "C") { $totalD++; $totalA++; }
            if ($answer14 == "D") { $totalD++; $totalA++; }

            if ($answer15 == "A") { $totalD++; $totalA++; }
            if ($answer15 == "B") { $totalD++; $totalA++; }
            if ($answer15 == "C") { $totalD++; $totalA++; }
            if ($answer15 == "D") { $totalD++; $totalA++; }

            if ($answer16 == "A") { $totalD++; $totalA++; }
            if ($answer16 == "B") { $totalD++; $totalA++; }
            if ($answer16 == "C") { $totalD++; $totalA++; }
            if ($answer16 == "D") { $totalD++; $totalA++; }

            if ($answer17 == "A") { $totalD++; $totalA++; }
            if ($answer17 == "B") { $totalD++; $totalA++; }
            if ($answer17 == "C") { $totalD++; $totalA++; }
            if ($answer17 == "D") { $totalD++; $totalA++; }

            if ($answer18 == "A") { $totalD++; $totalA++; }
            if ($answer18 == "B") { $totalD++; $totalA++; }
            if ($answer18 == "C") { $totalD++; $totalA++; }
            if ($answer18 == "D") { $totalD++; $totalA++; }

            if ($answer19 == "A") { $totalD++; $totalA++; }
            if ($answer19 == "B") { $totalD++; $totalA++; }
            if ($answer19 == "C") { $totalD++; $totalA++; }
            if ($answer19 == "D") { $totalD++; $totalA++; }

            if ($answer20 == "A") { $totalD++; $totalA++; }
            if ($answer20 == "B") { $totalD++; $totalA++; }
            if ($answer20 == "C") { $totalD++; $totalA++; }
            if ($answer20 == "D") { $totalD++; $totalA++; }

            if ($answer21 == "A") { $totalD++; $totalA++; }
            if ($answer21 == "B") { $totalD++; $totalA++; }
            if ($answer21 == "C") { $totalD++; $totalA++; }
            if ($answer21 == "D") { $totalD++; $totalA++; }

            if ($answer22 == "A") { $totalD++; $totalA++; }
            if ($answer22 == "B") { $totalD++; $totalA++; }
            if ($answer22 == "C") { $totalD++; $totalA++; }
            if ($answer22 == "D") { $totalD++; $totalA++; }

            if ($answer23 == "A") { $totalD++; $totalA++; }
            if ($answer23 == "B") { $totalD++; $totalA++; }
            if ($answer23 == "C") { $totalD++; $totalA++; }
            if ($answer23 == "D") { $totalD++; $totalA++; }

            if ($answer24 == "A") { $totalD++; $totalA++; }
            if ($answer24 == "B") { $totalD++; $totalA++; }
            if ($answer24 == "C") { $totalD++; $totalA++; }
            if ($answer24 == "D") { $totalD++; $totalA++; }

            if ($answer25 == "A") { $totalD++; $totalA++; }
            if ($answer25 == "B") { $totalD++; $totalA++; }
            if ($answer25 == "C") { $totalD++; $totalA++; }
            if ($answer25 == "D") { $totalD++; $totalA++; }

            if ($answer26 == "A") { $totalD++; $totalA++; }
            if ($answer26 == "B") { $totalD++; $totalA++; }
            if ($answer26 == "C") { $totalD++; $totalA++; }
            if ($answer26 == "D") { $totalD++; $totalA++; }

            if ($answer27 == "A") { $totalD++; $totalA++; }
            if ($answer27 == "B") { $totalD++; $totalA++; }
            if ($answer27 == "C") { $totalD++; $totalA++; }
            if ($answer27 == "D") { $totalD++; $totalA++; }

            if ($answer28 == "A") { $totalD++; $totalA++; }
            if ($answer28 == "B") { $totalD++; $totalA++; }
            if ($answer28 == "C") { $totalD++; $totalA++; }
            if ($answer28 == "D") { $totalD++; $totalA++; }

            if ($answer29 == "A") { $totalD++; $totalA++; }
            if ($answer29 == "B") { $totalD++; $totalA++; }
            if ($answer29 == "C") { $totalD++; $totalA++; }
            if ($answer29 == "D") { $totalD++; $totalA++; }

            if ($answer30 == "A") { $totalD++; $totalA++; }
            if ($answer30 == "B") { $totalD++; $totalA++; }
            if ($answer30 == "C") { $totalD++; $totalA++; }
            if ($answer30 == "D") { $totalD++; $totalA++; }

            ?>
<div class="results-overlay">

            <?php
            if ($totalA >= $totalB && $totalA >= $totalC && $totalA >= $totalD && $totalA >= $totalE && $totalA >= $totalF && $totalA >= $totalG && $totalA >= $totalH ) {
                  echo '<div class="quiz-overlay result priest"></div>
                  <div class="results-text">
                  	<p class="you-chose">You Scored:</p>
                  	<div class="results test-results2">
                  		<p class="score">Rekayasa Perangkat Lunak (RPL)</p>
                  		<p class="score-details">RPL anaknya ganteng-ganteng dan cantik-cantik biasanya.</p>
                      <a id="rpl" class="LinkRPL" href="lab/rpl.php"> RPL </a>
                      <br>
                  		<a id="replay" class="take-quiz-btn" href="test.php">Main Lagi?</a></div>';
            }
            elseif ($totalB >= $totalA && $totalB >= $totalC && $totalB >= $totalD && $totalB >= $totalE && $totalB >= $totalF && $totalB >= $totalG && $totalB >= $totalH ) {
                  echo '<div class="quiz-overlay result megadeth"></div>
                  <div class="results-text">
                  	<p class="you-chose">You Scored:</p>
                  	<div class="results test-results2">
                  		<p class="score">Manajemen Informasi (MI)</p>
                  		<p class="score-details">Anak lab MI itu ada yang soleh ada yang solehah.</p>
                      <a id="mi" class="LinkMI" href="lab/mi.php"> MI </a>
                      <br>
                  		<a id="replay" class="take-quiz-btn" href="test.php">Main Lagi?</a></div>';
            }
            elseif ($totalC >= $totalA && $totalC >= $totalB && $totalC >= $totalD && $totalC >= $totalE && $totalC >= $totalF && $totalC >= $totalG && $totalC >= $totalH ) {
                  echo '<div class="quiz-overlay result maiden"></div>
                  <div class="results-text">
                  	<p class="you-chose">You Scored:</p>
                  	<div class="results test-results2">
                  		<p class="score">Arsitektur & Jaringan Komputer (AJK)</p>
                  		<p class="score-details">Orang-orang pinter berkumpul disini.</p>
                      <a id="ajk" class="LinkAJK" href="lab/ajk.php"> AJK </a>
                      <br>
                  		<a id="replay" class="take-quiz-btn" href="test.php">Main Lagi?</a></div>';
            }
            elseif ($totalD >= $totalA && $totalD >= $totalB && $totalD >= $totalC && $totalD >= $totalE && $totalD >= $totalF && $totalD >= $totalG && $totalD >= $totalH ) {
                  echo '<div class="quiz-overlay result dio"></div>
                  <div class="results-text">
                  	<p class="you-chose">You Scored:</p>
                  	<div class="results test-results2">
                  		<p class="score">Interaksi Grafika dan Seni (IGS)</p>
                  		<p class="score-details">Yang gaya-gaya fashionable mainnya kesini.</p>
                      <a id="igs" class="LinkIGS" href="lab/igs.php"> IGS </a>
                      <br>
                  		<a id="replay" class="take-quiz-btn" href="test.php">Main Lagi?</a></div>';
            }
            elseif ($totalE >= $totalA && $totalE >= $totalB && $totalE >= $totalD && $totalE >= $totalC && $totalE >= $totalF && $totalE >= $totalG && $totalE >= $totalH ) {
                  echo '<div class="quiz-overlay result maiden"></div>
                  <div class="results-text">
                    <p class="you-chose">You Scored:</p>
                    <div class="results test-results2">
                      <p class="score">Dasar Terapan Komputer (DTK)</p>
                      <p class="score-details">Orang-orang pinter berkumpul disini.</p>
                      <a id="dtk" class="LinkDTK" href="lab/dtk.php"> DTK </a>
                      <br>
                      <a id="replay" class="take-quiz-btn" href="test.php">Main Lagi?</a></div>';
            }
            elseif ($totalF >= $totalA && $totalF >= $totalB && $totalF >= $totalD && $totalF >= $totalE && $totalF >= $totalC && $totalF >= $totalG && $totalF >= $totalH ) {
                  echo '<div class="quiz-overlay result maiden"></div>
                  <div class="results-text">
                    <p class="you-chose">You Scored:</p>
                    <div class="results test-results2">
                      <p class="score">Komputasi Cerdas Visualisasi (KCV)</p>
                      <p class="score-details">Orang-orang pinter berkumpul disini.</p>
                      <a id="kcv" class="LinkKCV" href="lab/kcv.php"> KCV </a>
                      <br>
                      <a id="replay" class="take-quiz-btn" href="test.php">Main Lagi?</a></div>';
            }
            elseif ($totalG >= $totalA && $totalG >= $totalB && $totalG >= $totalD && $totalG >= $totalE && $totalG >= $totalF && $totalG >= $totalC && $totalG >= $totalH ) {
                  echo '<div class="quiz-overlay result maiden"></div>
                  <div class="results-text">
                    <p class="you-chose">You Scored:</p>
                    <div class="results test-results2">
                      <p class="score">Komputasi Berbasis Jaringan (KBJ)</p>
                      <p class="score-details">Orang-orang pinter berkumpul disini.</p>
                      <a id="kbj" class="LinkKBJ" href="lab/kbj.php"> KBJ </a>
                      <br>
                      <a id="replay" class="take-quiz-btn" href="test.php">Main Lagi?</a></div>';
            }
            elseif ($totalH >= $totalA && $totalH >= $totalB && $totalH >= $totalD && $totalH >= $totalE && $totalH >= $totalF && $totalH >= $totalG && $totalH >= $totalC ) {
                  echo '<div class="quiz-overlay result maiden"></div>
                  <div class="results-text">
                    <p class="you-chose">You Scored:</p>
                    <div class="results test-results2">
                      <p class="score">Algoritma Pemrograman (ALPRO)</p>
                      <p class="score-details">Orang-orang pinter berkumpul disini.</p>
                      <a id="alpro" class="LinkALPRO" href="lab/ajk.php"> ALPRO </a>
                      <br>
                      <a id="replay" class="take-quiz-btn" href="test.php">Main Lagi?</a></div>';
            }
        ?>     
                </div>
            </div>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

</body>
</html>