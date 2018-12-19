<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width = device-width, initial-scale = 1">
    <title>Result</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style/grade.css" />
</head>

<body>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="navbar-brand active" href="index.php"><img src="lab/logo/logo2.png"></a>
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

            if ($answer1 == "A") { $totalA++; $totalE++; }
            if ($answer1 == "B") { $totalB++; $totalF++; }
            if ($answer1 == "C") { $totalC++; $totalG++; }
            if ($answer1 == "D") { $totalD++; $totalH++; }

            if ($answer2 == "A") { $totalE++; $totalF++; }
            if ($answer2 == "B") { $totalG++; $totalH++; }
            if ($answer2 == "C") { $totalB++; $totalA++; }
            if ($answer2 == "D") { $totalC++; $totalD++; }

            if ($answer3 == "A") { $totalD++; $totalH++; }
            if ($answer3 == "B") { $totalA++; $totalE++; }
            if ($answer3 == "C") { $totalC++; $totalG++; }
            if ($answer3 == "D") { $totalB++; $totalF++; }

            if ($answer4 == "A") { $totalH++; $totalG++; }
            if ($answer4 == "B") { $totalE++; $totalC++; }
            if ($answer4 == "C") { $totalF++; $totalD++; }
            if ($answer4 == "D") { $totalA++; $totalB++; }

            if ($answer5 == "A") { $totalA++; $totalH++; }
            if ($answer5 == "B") { $totalC++; $totalB++; }
            if ($answer5 == "C") { $totalD++; $totalE++; }
            if ($answer5 == "D") { $totalF++; $totalG++; }

            if ($answer6 == "A") { $totalC++; $totalA++; }
            if ($answer6 == "B") { $totalH++; $totalE++; }
            if ($answer6 == "C") { $totalF++; $totalB++; }
            if ($answer6 == "D") { $totalD++; $totalG++; }

            if ($answer7 == "A") { $totalA++; $totalH++; }
            if ($answer7 == "B") { $totalE++; $totalD++; }
            if ($answer7 == "C") { $totalF++; $totalC++; }
            if ($answer7 == "D") { $totalB++; $totalG++; }

            if ($answer8 == "A") { $totalE++; $totalH++; }
            if ($answer8 == "B") { $totalF++; $totalG++; }
            if ($answer8 == "C") { $totalD++; $totalC++; }
            if ($answer8 == "D") { $totalA++; $totalB++; }

            if ($answer9 == "A") { $totalG++; $totalH++; }
            if ($answer9 == "B") { $totalF++; $totalE++; }
            if ($answer9 == "C") { $totalC++; $totalA++; }
            if ($answer9 == "D") { $totalB++; $totalD++; }

            if ($answer10 == "A") { $totalC++; $totalB++; }
            if ($answer10 == "B") { $totalD++; $totalF++; }
            if ($answer10 == "C") { $totalE++; $totalG++; }
            if ($answer10 == "D") { $totalA++; $totalH++; }

            if ($answer11 == "A") { $totalF++; $totalH++; }
            if ($answer11 == "B") { $totalA++; $totalB++; }
            if ($answer11 == "C") { $totalE++; $totalG++; }
            if ($answer11 == "D") { $totalD++; $totalC++; }

            if ($answer12 == "A") { $totalF++; $totalG++; }
            if ($answer12 == "B") { $totalC++; $totalH++; }
            if ($answer12 == "C") { $totalD++; $totalB++; }
            if ($answer12 == "D") { $totalE++; $totalA++; }

            if ($answer13 == "A") { $totalA++; $totalF++; }
            if ($answer13 == "B") { $totalH++; $totalG++; }
            if ($answer13 == "C") { $totalD++; $totalC++; }
            if ($answer13 == "D") { $totalB++; $totalE++; }

            if ($answer14 == "A") { $totalB++; $totalA++; }
            if ($answer14 == "B") { $totalE++; $totalC++; }
            if ($answer14 == "C") { $totalD++; $totalF++; }
            if ($answer14 == "D") { $totalH++; $totalG++; }

            if ($answer15 == "A") { $totalD++; $totalA++; }
            if ($answer15 == "B") { $totalB++; $totalG++; }
            if ($answer15 == "C") { $totalC++; $totalF++; }
            if ($answer15 == "D") { $totalE++; $totalH++; }

            if ($answer16 == "A") { $totalD++; $totalE++; }
            if ($answer16 == "B") { $totalC++; $totalB++; }
            if ($answer16 == "C") { $totalF++; $totalH++; }
            if ($answer16 == "D") { $totalG++; $totalA++; }

            if ($answer17 == "A") { $totalD++; $totalH++; }
            if ($answer17 == "B") { $totalB++; $totalA++; }
            if ($answer17 == "C") { $totalC++; $totalF++; }
            if ($answer17 == "D") { $totalE++; $totalG++; }

            if ($answer18 == "A") { $totalD++; $totalG++; }
            if ($answer18 == "B") { $totalC++; $totalA++; }
            if ($answer18 == "C") { $totalE++; $totalB++; }
            if ($answer18 == "D") { $totalF++; $totalH++; }

            if ($answer19 == "A") { $totalD++; $totalB++; }
            if ($answer19 == "B") { $totalF++; $totalA++; }
            if ($answer19 == "C") { $totalC++; $totalG++; }
            if ($answer19 == "D") { $totalH++; $totalE++; }

            if ($answer20 == "A") { $totalA++; $totalE++; }
            if ($answer20 == "B") { $totalC++; $totalD++; }
            if ($answer20 == "C") { $totalF++; $totalG++; }
            if ($answer20 == "D") { $totalB++; $totalH++; }

            if ($answer21 == "A") { $totalA++; $totalE++; }
            if ($answer21 == "B") { $totalB++; $totalF++; }
            if ($answer21 == "C") { $totalC++; $totalG++; }
            if ($answer21 == "D") { $totalD++; $totalH++; }

            if ($answer22 == "A") { $totalD++; $totalE++; }
            if ($answer22 == "B") { $totalC++; $totalF++; }
            if ($answer22 == "C") { $totalB++; $totalG++; }
            if ($answer22 == "D") { $totalA++; $totalH++; }

            if ($answer23 == "A") { $totalD++; $totalE++; }
            if ($answer23 == "B") { $totalA++; $totalH++; }
            if ($answer23 == "C") { $totalB++; $totalG++; }
            if ($answer23 == "D") { $totalC++; $totalF++; }

            if ($answer24 == "A") { $totalB++; $totalH++; }
            if ($answer24 == "B") { $totalC++; $totalF++; }
            if ($answer24 == "C") { $totalD++; $totalE++; }
            if ($answer24 == "D") { $totalA++; $totalG++; }

            if ($answer25 == "A") { $totalC++; $totalE++; }
            if ($answer25 == "B") { $totalB++; $totalF++; }
            if ($answer25 == "C") { $totalA++; $totalG++; }
            if ($answer25 == "D") { $totalD++; $totalH++; }

            if ($answer26 == "A") { $totalC++; $totalE++; }
            if ($answer26 == "B") { $totalD++; $totalF++; }
            if ($answer26 == "C") { $totalA++; $totalG++; }
            if ($answer26 == "D") { $totalB++; $totalH++; }

            if ($answer27 == "A") { $totalB++; $totalH++; }
            if ($answer27 == "B") { $totalC++; $totalG++; }
            if ($answer27 == "C") { $totalD++; $totalE++; }
            if ($answer27 == "D") { $totalA++; $totalF++; }

            if ($answer28 == "A") { $totalC++; $totalE++; }
            if ($answer28 == "B") { $totalD++; $totalF++; }
            if ($answer28 == "C") { $totalB++; $totalH++; }
            if ($answer28 == "D") { $totalA++; $totalG++; }

            if ($answer29 == "A") { $totalA++; $totalF++; }
            if ($answer29 == "B") { $totalD++; $totalE++; }
            if ($answer29 == "C") { $totalB++; $totalH++; }
            if ($answer29 == "D") { $totalC++; $totalG++; }

            if ($answer30 == "A") { $totalD++; $totalH++; }
            if ($answer30 == "B") { $totalB++; $totalG++; }
            if ($answer30 == "C") { $totalC++; $totalE++; }
            if ($answer30 == "D") { $totalA++; $totalF++; }

            ?>
<div class="results-overlay">

            <?php
            if ($totalA >= $totalB && $totalA >= $totalC && $totalA >= $totalD && $totalA >= $totalE && $totalA >= $totalF && $totalA >= $totalG && $totalA >= $totalH ) {
                  echo '<div class="quiz-overlay result priest"></div>
                  <div class="results-text">
                    <div class="results test-results2">
                      <h1 class="score">Rekayasa Perangkat Lunak (RPL)</h1>
                      <p class="score-details">RPL anaknya ganteng-ganteng dan cantik-cantik biasanya.</p>
                      <p class="score-details">Kalem sih anak-anaknya, tapi kalau udah malem pasti rame.</p>
                      <div class="wrapper">
                      <a id="rpl" class="Link" href="lab/rpl.php"> yuk cari tahu RPL </a>
                      </div>
                      <br>
                      <div class="wrapper">  
                      <a id="replay" class="take-quiz-btn" href="test.php">Main Lagi?</a>
                      </div>
                      </div>';
            }
            elseif ($totalB >= $totalA && $totalB >= $totalC && $totalB >= $totalD && $totalB >= $totalE && $totalB >= $totalF && $totalB >= $totalG && $totalB >= $totalH ) {
                  echo '<div class="quiz-overlay result megadeth"></div>
                  <div class="results-text">
                    <div class="results test-results2">
                      <h1 class="score">Manajemen Informasi (MI)</h1>
                      <p class="score-details">Isinya orang-orang populer yang fashionable</p>
                      <p class="score-details">cantik sama ganteng gitu.</p>
                      <div class="wrapper">
                      <a id="mi" class="Link" href="lab/mi.php"> yuk cari tahu MI </a>
                      </div>
                      <br>
                      <div class="wrapper">
                      <a id="replay" class="take-quiz-btn" href="test.php">Main Lagi?</a>
                      </div>
                      </div>';
            }
            elseif ($totalC >= $totalA && $totalC >= $totalB && $totalC >= $totalD && $totalC >= $totalE && $totalC >= $totalF && $totalC >= $totalG && $totalC >= $totalH ) {
                  echo '<div class="quiz-overlay result maiden"></div>
                  <div class="results-text">
                    <div class="results test-results2">
                      <h1 class="score">Arsitektur & Jaringan Komputer (AJK)</h1>
                      <p class="score-details">Tempat orang-orang serius, pinter, sama rajin.</p>
                      <p class="score-details">Kalau kamu punya ciri-ciri tersebut berarti kamu cocok disini.</p>
                      <div class="wrapper">
                      <a id="ajk" class="Link" href="lab/ajk.php"> yuk cari tahu AJK </a>
                      </div>
                      <br>
                      <div class="wrapper">
                      <a id="replay" class="take-quiz-btn" href="test.php">Main Lagi?</a>
                      </div>
                      </div>';
            }
            elseif ($totalD >= $totalA && $totalD >= $totalB && $totalD >= $totalC && $totalD >= $totalE && $totalD >= $totalF && $totalD >= $totalG && $totalD >= $totalH ) {
                  echo '<div class="quiz-overlay result dio"></div>
                  <div class="results-text">
                    <div class="results test-results2">
                      <h1 class="score">Interaksi Grafika dan Seni (IGS)</h1>
                      <p class="score-details">Buat kamu yang hobi nya main game, maka di lab ini kamu</p>
                      <p class="score-details">bakal belajar membuat nya dan ahli dibidang nya.</p>
                      <div class="wrapper">
                      <a id="igs" class="Link" href="lab/igs.php"> yuk cari tahu IGS </a>
                      </div>
                      <br>
                      <div class="wrapper">
                      <a id="replay" class="take-quiz-btn" href="test.php">Main Lagi?</a>
                      </div>
                      </div>';
            }
            elseif ($totalE >= $totalA && $totalE >= $totalB && $totalE >= $totalD && $totalE >= $totalC && $totalE >= $totalF && $totalE >= $totalG && $totalE >= $totalH ) {
                  echo '<div class="quiz-overlay result maiden"></div>
                  <div class="results-text">
                    <div class="results test-results2">
                      <h1 class="score">Dasar Terapan Komputer (DTK)</h1>
                      <p class="score-details">Tempat orang-orang yang <i>high class plus pinter</i> gitu.</p>
                      <div class="wrapper">
                      <a id="dtk" class="Link" href="lab/dtk.php"> yuk cari tahu DTK </a>
                      </div>
                      <br>
                      <div class="wrapper">
                      <a id="replay" class="take-quiz-btn" href="test.php">Main Lagi?</a>
                      </div>
                      </div>';
            }
            elseif ($totalF >= $totalA && $totalF >= $totalB && $totalF >= $totalD && $totalF >= $totalE && $totalF >= $totalC && $totalF >= $totalG && $totalF >= $totalH ) {
                  echo '<div class="quiz-overlay result maiden"></div>
                  <div class="results-text">
                    <div class="results test-results2">
                      <h1 class="score">Komputasi Cerdas Visualisasi (KCV)</h1>
                      <p class="score-details">Rajin, ambis, selera humor <i>unik,</i></p>
                      <p class="score-details">suka debat humor. Kalau kamu tipe orang yang demikian</i></p>
                      <p class="score-details">maka kamu punya sifat yang <i>KCV banget.</i> juga suka saling membantu loh.</p>
                      <div class="wrapper">
                      <a id="kcv" class="Link" href="lab/kcv.php"> yuk cari tahu KCV </a>
                      </div>
                      <br>
                      <div class="wrapper">
                      <a id="replay" class="take-quiz-btn" href="test.php">Main Lagi?</a>
                      </div>
                      </div>';
            }
            elseif ($totalG >= $totalA && $totalG >= $totalB && $totalG >= $totalD && $totalG >= $totalE && $totalG >= $totalF && $totalG >= $totalC && $totalG >= $totalH ) {
                  echo '<div class="quiz-overlay result maiden"></div>
                  <div class="results-text">
                    <div class="results test-results2">
                      <h1 class="score">Komputasi Berbasis Jaringan (KBJ)</h1>
                      <p class="score-details">Ramah, baik, pinter, rajin beribadah adalah prinsip utama <i>NCC.</i></p>
                      <p class="score-details">p.s Lab Komputasi Berbasis Jaringan lebih sering disebut <i>NCC.</i></p>
                      <div class="wrapper">
                      <a id="kbj" class="Link" href="lab/kbj.php"> yuk cari tahu KBJ </a>
                      </div>
                      <br>
                      <div class="wrapper">
                      <a id="replay" class="take-quiz-btn" href="test.php">Main Lagi?</a>
                      </div>
                      </div>';
            }
            elseif ($totalH >= $totalA && $totalH >= $totalB && $totalH >= $totalD && $totalH >= $totalE && $totalH >= $totalF && $totalH >= $totalG && $totalH >= $totalC ) {
                  echo '<div class="quiz-overlay result maiden"></div>
                  <div class="results-text">
                    <div class="results test-results2">
                      <h1 class="score">Algoritma Pemrograman (ALPRO)</h1>
                      <p class="score-details">Mirip <i>MI</i> yang isi nya orang orang populer</p>
                      <p class="score-details">yang membedakan adalah pinternya anak-anak Alpro gak usah ditanya, <i>banget.</i></p>
                      <div class="wrapper">
                      <a id="alpro" class="Link" href="lab/ajk.php"> yuk cari tahu ALPRO </a>
                      </div>
                      <br>
                      <div class="wrapper">
                      <a id="replay" class="take-quiz-btn" href="test.php">Main Lagi?</a>
                      </div>
                      </div>';
            }
        ?>     
                </div>
            </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>