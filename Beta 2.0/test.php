<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>test</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="navbar-brand" href="index.php">Logo</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="test.php">Take a Test</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="lab/daftar_lab.php" title="Detail Lab">Daftar Lab</a>
      </li>
    </ul>
  </nav>
  <br>

    <div id="page-wrap">
        <h1 class="transparent index-headline" style="text-align: center;">Lab TC Apa Kamu?</h1>
	<form action="grade.php" method="post" id="quiz">
            <ul id="test-questions">
                <li>
                    <div class="quiz-overlay"></div>
                    <h3>Nongkrong di TC suka dimana?</h3>
                    <div class="mtm">
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A" class="fwrd labela">a.  Gapernah</label>
                    </div>
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B" class="fwrd labelb">b.  Plasa</label>
                    </div>
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C" class="fwrd labelc">c.  Keliling Lab di TC pastinya</label>
                    </div>
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D" class="fwrd labeld">d.  Parkiran</label>
                    </div>
                    <p class="quiz-progress">1 of 5</p>
                </li>
                <li>
                    <div class="quiz-overlay"></div>
                    <h3>Pilih salah satu matkul favorit</h3>
                    <div class="mtm">
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                        <label for="question-2-answers-A" class="fwrd labela">a.  Dasar Pemrograman</label>
                    </div>
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B" class="fwrd labelb">b.  Matematika Diskrit</label>
                    </div>
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C" class="fwrd labelc">c.  Aljabar Linear</label>
                    </div>
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                        <label for="question-2-answers-D" class="fwrd labeld">d.  Sistem Digital</label>
                    </div>
                    <p class="quiz-progress">2 of 5</p>
                </li>
                <li>
                    <div class="quiz-overlay"></div>
                    <h3>Makanan kesukaan?</h3>
                    <div class="mtm">
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                        <label for="question-3-answers-A" class="fwrd labela">a.  Denger Musik</label>
                    </div>
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B" class="fwrd labelb">b.  Sambil diskusi</label>
                    </div>
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                        <label for="question-3-answers-C" class="fwrd labelc">c.  Baca sendiri</label>
                    </div>
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                        <label for="question-3-answers-D" class="fwrd labeld">d.  Sunyi</label>
                    </div>
                    <p class="quiz-progress">3 of 5</p>
                </li>
                <li>
                    <div class="quiz-overlay"></div>
                    <h3>Dosen favorit?</h3>
                    <div class="mtm">
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                        <label for="question-4-answers-A" class="fwrd labela">a.  1</label>
                    </div>
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B" class="fwrd labelb">b.  2</label>
                    </div>
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                        <label for="question-4-answers-C" class="fwrd labelc">c.  3</label>
                    </div>
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                        <label for="question-4-answers-D" class="fwrd labeld">d.  4</label>
                    </div>
                    <p class="quiz-progress">4 of 5</p>
                </li>
                <li>
                    <div class="quiz-overlay"></div>
                    <h3>Nongkrong di TC suka dimana?</h3>
                    <div class="mtm">
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                        <label for="question-5-answers-A" class="fwrd labela">a.  1</label>
                    </div>
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B" class="fwrd labelb">b.  2</label>
                    </div>
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                        <label for="question-5-answers-C" class="fwrd labelc">c.  3</label>
                    </div>
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                        <label for="question-5-answers-D" class="fwrd labeld">d.  4</label>
                    </div>
                    <p class="quiz-progress">5 of 5</p>
                </li>
                <li>
                    <div class="quiz-overlay"></div>
                    <h3 class="anticipate">Sekarang waktunya kamu tahu hasilnya...</h3>
                    <input type="submit" value="Submit Quiz" id="submit-quiz" />
                </li>
            </ul>
	</form>
        <div class="nomargin"></div>
    </div>
<!--
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" ></script>
    <script>
           (function($) {
              var timeout= null;
              var $mt = 0;
              $("#quiz .fwrd").click(function(){
                clearTimeout(timeout);
                timeout = setTimeout(function(){ 
                    $mt = $mt - 430;
                    $("#test-questions").css("margin-top", $mt); 
                }, 333);
              });
           }(jQuery))
    </script>
-->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

</body>
</html>
