<!DOCTYPE html>
<html lang="en, id, in">
<meta charset="UTF-8">
<head>
	<meta http-equiv="Content-Type" content="text/html"; charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width = device-width, initial-scale = 1">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style/index.css">
    <link rel="shortcut icon" href="lab/logo/fav.png">
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
	<div id="page-wrap">
		<div id="fotolab" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#fotolab" data-slide-to="0" class="active"></li>
                <li data-target="#fotolab" data-slide-to="1"></li>
                <li data-target="#fotolab" data-slide-to="2"></li>
                <li data-target="#fotolab" data-slide-to="3"></li>
                <li data-target="#fotolab" data-slide-to="4"></li>
                <li data-target="#fotolab" data-slide-to="5"></li>
                <li data-target="#fotolab" data-slide-to="6"></li>
                <li data-target="#fotolab" data-slide-to="7"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="lab/foto/ajk/ajk-1.jpg" alt="ajk1">
                    <div class="carousel-caption">
                        <h3>Lab AJK</h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="lab/foto/rpl/rpl-1.jpg" alt="ajk2">
                    <div class="carousel-caption">
                        <h3>Lab RPL</h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="lab/foto/mi/mi-1.jpg" alt="ajk3">
                    <div class="carousel-caption">
                        <h3>Lab MI</h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="lab/foto/igs/igs-3.jpg" alt="ajk4">
                    <div class="carousel-caption">
                        <h3>Lab IGS</h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="lab/foto/ncc/ncc-2.jpg" alt="ajk4">
                    <div class="carousel-caption">
                        <h3>Lab KBJ</h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="lab/foto/kcv/kcv-4.jpg" alt="ajk4">
                    <div class="carousel-caption">
                        <h3>Lab KCV</h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="lab/foto/alpro/alpro-3.jpg" alt="ajk4">
                    <div class="carousel-caption">
                        <h3>Lab ALPRO</h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="lab/foto/dtk/dtk-3.jpg" alt="ajk4">
                    <div class="carousel-caption">
                        <h3>Lab DTK</h3>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#fotolab" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#fotolab" role="button" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
		<form id="mulai-quiz" method="post" action="test.php">
			<div class="overlay-index">
				<div class="quiz-overlay"></div>
				<h1 class="head-index">Lab TC Apa Yang Paling Cocok Dengan Kamu?</h1>
				<p class="desc-index">Quiz ini akan menguji seberapa cocok kamu dengan lab-lab yang ada di TC.</p>
				<br></br>
				<div class="wrapper">
				    <button class="button">Mulai Quiz</button>
				</div>
				<p>Berani untuk memulai test?</p>
			</div>
		</form>
	</div>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-bottom">
		<ul class="navbar-nav">
	    <li class="nav-item">
	      <a class="nav-link" href="#">Contact US</a>
	    </li>
	  </ul>
  	</nav>
  	
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>