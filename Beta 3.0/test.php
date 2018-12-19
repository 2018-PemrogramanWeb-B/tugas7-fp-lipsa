<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width = device-width, initial-scale = 1">
    <title>Personality Test</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style/test.css">
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="navbar-brand active" href="index.php"><img src="lab/logo/logo2.png"></a>
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
   <div id="container">
     <h1 class="transparent index-headline">Lab TC Apa Kamu?</h1>
     <form action="grade.php" method="post" id="quiz">
     <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#s1" role="tab">1</a>
      <a class="nav-link" data-toggle="pill" href="#s2" role="tab">2</a>
      <a class="nav-link" data-toggle="pill" href="#s3" role="tab">3</a>
      <a class="nav-link" data-toggle="pill" href="#s4" role="tab">4</a>
      <a class="nav-link" data-toggle="pill" href="#s5" role="tab">5</a>
      <a class="nav-link" data-toggle="pill" href="#s6" role="tab">6</a>
      <a class="nav-link" data-toggle="pill" href="#s7" role="tab">7</a>
      <a class="nav-link" data-toggle="pill" href="#s8" role="tab">8</a>
      <a class="nav-link" data-toggle="pill" href="#s9" role="tab">9</a>
      <a class="nav-link" data-toggle="pill" href="#s10" role="tab">10</a>
      <a class="nav-link" data-toggle="pill" href="#s11" role="tab">11</a>
      <a class="nav-link" data-toggle="pill" href="#s12" role="tab">12</a>
      <a class="nav-link" data-toggle="pill" href="#s13" role="tab">13</a>
      <a class="nav-link" data-toggle="pill" href="#s14" role="tab">14</a>
      <a class="nav-link" data-toggle="pill" href="#s15" role="tab">15</a>
      <a class="nav-link" data-toggle="pill" href="#s16" role="tab">16</a>
      <a class="nav-link" data-toggle="pill" href="#s17" role="tab">17</a>
      <a class="nav-link" data-toggle="pill" href="#s18" role="tab">18</a>
      <a class="nav-link" data-toggle="pill" href="#s19" role="tab">19</a>
      <a class="nav-link" data-toggle="pill" href="#s20" role="tab">20</a>
      <a class="nav-link" data-toggle="pill" href="#s21" role="tab">21</a>
      <a class="nav-link" data-toggle="pill" href="#s22" role="tab">22</a>
      <a class="nav-link" data-toggle="pill" href="#s23" role="tab">23</a>
      <a class="nav-link" data-toggle="pill" href="#s24" role="tab">24</a>
      <a class="nav-link" data-toggle="pill" href="#s25" role="tab">25</a>
      <a class="nav-link" data-toggle="pill" href="#s26" role="tab">26</a>
      <a class="nav-link" data-toggle="pill" href="#s27" role="tab">27</a>
      <a class="nav-link" data-toggle="pill" href="#s28" role="tab">28</a>
      <a class="nav-link" data-toggle="pill" href="#s29" role="tab">29</a>
      <a class="nav-link" data-toggle="pill" href="#s30" role="tab">30</a>
    </div>

    <div data-spy="scroll" data-target=".nav-pills" class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade show active jumbotron" id="s1" role="tabpanel">
          <form action="grade.php" method="post" id="quiz">
            <ul class="list-unstyled">
                <li>
                    <div class="quiz-overlay"></div>
                    <h3 class="pb-2 mt-4 mb-2 border-bottom">Nongkrong di TC suka dimana?</h3>
                    <div class="mtm">
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A" class="fwrd labela">Gapernah</label>
                    </div>
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B" class="fwrd labelb">Plasa</label>
                    </div>
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C" class="fwrd labelc">Lab di TC</label>
                    </div>
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D" class="fwrd labeld">RBTC</label>
                    </div>
                    <p class="quiz-progress">1 - 30</p>
                </li>
            </ul>
      </div>
      <div class="tab-pane fade jumbotron" id="s2" role="tabpanel">
            <ul class="list-unstyled">
                <li>
                    <div class="quiz-overlay"></div>
                    <h3 class="pb-2 mt-4 mb-2 border-bottom">Pilih salah satu matkul favorit</h3>
                    <div class="mtm">
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                        <label for="question-2-answers-A" class="fwrd labela">Dasar Pemrograman</label>
                    </div>
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B" class="fwrd labelb">Matematika Diskrit</label>
                    </div>
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C" class="fwrd labelc">Aljabar Linear</label>
                    </div>
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                        <label for="question-2-answers-D" class="fwrd labeld">Sistem Digital</label>
                    </div>
                    <p class="quiz-progress">2 - 30</p>
                </li>
            </ul>
      </div>
      <div class="tab-pane fade jumbotron" id="s3" role="tabpanel">
        <ul class="list-unstyled">
               <li>
                    <div class="quiz-overlay"></div>
                    <h3 class="pb-2 mt-4 mb-2 border-bottom">Belajar biasanya sambil ngapain?</h3>
                    <div class="mtm">
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                        <label for="question-3-answers-A" class="fwrd labela">Denger musik</label>
                    </div>
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B" class="fwrd labelb">Sambil diskusi</label>
                    </div>
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                        <label for="question-3-answers-C" class="fwrd labelc">Baca sendiri</label>
                    </div>
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                        <label for="question-3-answers-D" class="fwrd labeld">Sunyi</label>
                    </div>
                    <p class="quiz-progress">3 of 30</p>
                </li>
        </ul>
      </div>
      <div class="tab-pane fade jumbotron" id="s4" role="tabpanel">
        <ul class="list-unstyled">
                <li>
                    <div class="quiz-overlay"></div>
                    <h3 class="pb-2 mt-4 mb-2 border-bottom">Kalau lagi main game suka nya dimana?</h3>
                    <div class="mtm">
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                        <label for="question-4-answers-A" class="fwrd labela">Dimana saja</label>
                    </div>
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B" class="fwrd labelb">Di kosan/rumah</label>
                    </div>
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                        <label for="question-4-answers-C" class="fwrd labelc">Ga suka main game</label>
                    </div>
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                        <label for="question-4-answers-D" class="fwrd labeld">Di Lab IGS</label>
                    </div>
                    <p class="quiz-progress">4 of 30</p>
                </li>
        </ul>
      </div>
      <div class="tab-pane fade jumbotron" id="s5" role="tabpanel">
        <ul class="list-unstyled">
            <li>
                    <div class="quiz-overlay"></div>
                    <h3 class="pb-2 mt-4 mb-2 border-bottom">Lagi di TC pengen jajan biasanya beli dimana?</h3>
                    <div class="mtm">
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                        <label for="question-5-answers-A" class="fwrd labela">Keluar beli dulu</label>
                    </div>
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B" class="fwrd labelb">Di LP2</label>
                    </div>
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                        <label for="question-5-answers-C" class="fwrd labelc">Di NCC</label>
                    </div>
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                        <label for="question-5-answers-D" class="fwrd labeld">Wah saya gak tau kalau di TC ada yang jualan</label>
                    </div>
                    <p class="quiz-progress">5 of 30</p>
                </li>
        </ul>
      </div>
      <div class="tab-pane fade jumbotron" id="s6" role="tabpanel">
        <ul class="list-unstyled">
            <li>
                    <div class="quiz-overlay"></div>
                    <h3 class="pb-2 mt-4 mb-2 border-bottom">Kalau lagi jalan papasan sama kating ngapain?</h3>
                    <div class="mtm">
                        <input type="radio" name="question-6-answers" id="question-6-answers-A" value="A" />
                        <label for="question-5-answers-A" class="fwrd labela">Malu-malu terus cuekin</label>
                    </div>
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-B" value="B" />
                        <label for="question-5-answers-B" class="fwrd labelb">Nyapa akrab</label>
                    </div>
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-C" value="C" />
                        <label for="question-5-answers-C" class="fwrd labelc">Muter cari jalan lain</label>
                    </div>
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-D" value="D" />
                        <label for="question-5-answers-D" class="fwrd labeld">Ngumpet</label>
                    </div>
                    <p class="quiz-progress">6 of 30</p>
                </li>
        </ul>
      </div>
      <div class="tab-pane fade jumbotron" id="s7" role="tabpanel">
        <ul class="list-unstyled">
            <li>
                    <div class="quiz-overlay"></div>
                    <h3 class="pb-2 mt-4 mb-2 border-bottom">Kalau ada kelas dateng ke kampus pas kapan?</h3>
                    <div class="mtm">
                        <input type="radio" name="question-7-answers" id="question-7-answers-A" value="A" />
                        <label for="question-7-answers-A" class="fwrd labela">Tepat waktu dengan jadwal</label>
                    </div>
                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-B" value="B" />
                        <label for="question-7-answers-B" class="fwrd labelb">Sampai di kampus lebih awal</label>
                    </div>
                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-C" value="C" />
                        <label for="question-7-answers-C" class="fwrd labelc">Telat</label>
                    </div>
                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-D" value="D" />
                        <label for="question-7-answers-D" class="fwrd labeld">Skip kelas</label>
                    </div>
                    <p class="quiz-progress">7 of 30</p>
                </li>
        </ul>
      </div>
      <div class="tab-pane fade jumbotron" id="s8" role="tabpanel">
        <ul class="list-unstyled">
            <li>
                    <div class="quiz-overlay"></div>
                    <h3 class="pb-2 mt-4 mb-2 border-bottom">Kalau ngerjain tugas biasa dimana?</h3>
                    <div class="mtm">
                        <input type="radio" name="question-8-answers" id="question-8-answers-A" value="A" />
                        <label for="question-5-answers-A" class="fwrd labela">Kosan/Rumah</label>
                    </div>
                    <div>
                        <input type="radio" name="question-8-answers" id="question-8-answers-B" value="B" />
                        <label for="question-5-answers-B" class="fwrd labelb">Lab di TC pastinya</label>
                    </div>
                    <div>
                        <input type="radio" name="question-8-answers" id="question-8-answers-C" value="C" />
                        <label for="question-5-answers-C" class="fwrd labelc">Aula kampus</label>
                    </div>
                    <div>
                        <input type="radio" name="question-8-answers" id="question-8-answers-D" value="D" />
                        <label for="question-5-answers-D" class="fwrd labeld">Warkop</label>
                    </div>
                    <p class="quiz-progress">8 of 30</p>
                </li>
        </ul>
      </div>
      <div class="tab-pane fade jumbotron" id="s9" role="tabpanel">
        <ul class="list-unstyled">
            <li>
                    <div class="quiz-overlay"></div>
                    <h3 class="pb-2 mt-4 mb-2 border-bottom">Tiba-tiba sekarang ada quiz dadakan, apa reaksi kamu?</h3>
                    <div class="mtm">
                        <input type="radio" name="question-9-answers" id="question-9-answers-A" value="A" />
                        <label for="question-5-answers-A" class="fwrd labela">Santai (Udah pinter)</label>
                    </div>
                    <div>
                        <input type="radio" name="question-9-answers" id="question-9-answers-B" value="B" />
                        <label for="question-5-answers-B" class="fwrd labelb">Santai (Gak peduli)</label>
                    </div>
                    <div>
                        <input type="radio" name="question-9-answers" id="question-9-answers-C" value="C" />
                        <label for="question-5-answers-C" class="fwrd labelc">Panik</label>
                    </div>
                    <div>
                        <input type="radio" name="question-9-answers" id="question-9-answers-D" value="D" />
                        <label for="question-5-answers-D" class="fwrd labeld">Semangat banget buat ngerjain!</label>
                    </div>
                    <p class="quiz-progress">9 of 30</p>
                </li>
        </ul>
      </div>
      <div class="tab-pane fade jumbotron" id="s10" role="tabpanel">
        <ul class="list-unstyled">
            <li>
                    <div class="quiz-overlay"></div>
                    <h3 class="pb-2 mt-4 mb-2 border-bottom">Kamu dapet tugas buat keliling Lab di kampus, apa yang kamu lakuin?</h3>
                    <div class="mtm">
                        <input type="radio" name="question-10-answers" id="question-10-answers-A" value="A" />
                        <label for="question-5-answers-A" class="fwrd labela">Laksankan tugas dengan senang hati</label>
                    </div>
                    <div>
                        <input type="radio" name="question-10-answers" id="question-10-answers-B" value="B" />
                        <label for="question-5-answers-B" class="fwrd labelb">Malu jadi cari temen dulu</label>
                    </div>
                    <div>
                        <input type="radio" name="question-10-answers" id="question-10-answers-C" value="C" />
                        <label for="question-5-answers-C" class="fwrd labelc">Pergi ke Lab yang udah biasa datengin aja</label>
                    </div>
                    <div>
                        <input type="radio" name="question-10-answers" id="question-10-answers-D" value="D" />
                        <label for="question-5-answers-D" class="fwrd labeld">Semangat banget, jadi keliling seisi kampus</label>
                    </div>
                    <p class="quiz-progress">10 of 30</p>
                </li>
        </ul>
      </div>
      <div class="tab-pane fade jumbotron" id="s11" role="tabpanel">
        <ul class="list-unstyled">
            <li>
                    <div class="quiz-overlay"></div>
                    <h3 class="pb-2 mt-4 mb-2 border-bottom">Dapet tugas susah dan deadline 1 jam lagi, apa yang kamu lakukan?</h3>
                    <div class="mtm">
                        <input type="radio" name="question-11-answers" id="question-11-answers-A" value="A" />
                        <label for="question-5-answers-A" class="fwrd labela">Semangat ngerjain dengan segala usaha</label>
                    </div>
                    <div>
                        <input type="radio" name="question-11-answers" id="question-11-answers-B" value="B" />
                        <label for="question-5-answers-B" class="fwrd labelb">Santai, soalnya udah ngerti, gampang kok</label>
                    </div>
                    <div>
                        <input type="radio" name="question-11-answers" id="question-11-answers-C" value="C" />
                        <label for="question-5-answers-C" class="fwrd labelc">Panik banget jadinya ketiduran</label>
                    </div>
                    <div>
                        <input type="radio" name="question-11-answers" id="question-11-answers-D" value="D" />
                        <label for="question-5-answers-D" class="fwrd labeld">Santai minta ke temen yang udah</label>
                    </div>
                    <p class="quiz-progress">11 of 30</p>
                </li>
        </ul>
      </div>
      <div class="tab-pane fade jumbotron" id="s12" role="tabpanel">
        <ul class="list-unstyled">
            <li>
                    <div class="quiz-overlay"></div>
                    <h3 class="pb-2 mt-4 mb-2 border-bottom">Dompet kamu sekarang tinggal 50 ribu rupiah, apa yang kamu lakukan?</h3>
                    <div class="mtm">
                        <input type="radio" name="question-12-answers" id="question-12-answers-A" value="A" />
                        <label for="question-5-answers-A" class="fwrd labela">Nabung super hemat</label>
                    </div>
                    <div>
                        <input type="radio" name="question-12-answers" id="question-12-answers-B" value="B" />
                        <label for="question-5-answers-B" class="fwrd labelb">Jadiin modal bisnis biar nambah uang</label>
                    </div>
                    <div>
                        <input type="radio" name="question-12-answers" id="question-12-answers-C" value="C" />
                        <label for="question-5-answers-C" class="fwrd labelc">Santai</label>
                    </div>
                    <div>
                        <input type="radio" name="question-12-answers" id="question-12-answers-D" value="D" />
                        <label for="question-5-answers-D" class="fwrd labeld">Niatnya hemat tapi jadi boros</label>
                    </div>
                    <p class="quiz-progress">12 of 30</p>
                </li>
        </ul>
      </div>
      <div class="tab-pane fade jumbotron" id="s13" role="tabpanel">
        <ul class="list-unstyled">
            <li>
                    <div class="quiz-overlay"></div>
                    <h3 class="pb-2 mt-4 mb-2 border-bottom">Paket kuota kamu habis, apa yang kamu lakukan?</h3>
                    <div class="mtm">
                        <input type="radio" name="question-13-answers" id="question-13-answers-A" value="A" />
                        <label for="question-5-answers-A" class="fwrd labela">Langsung beli lagi</label>
                    </div>
                    <div>
                        <input type="radio" name="question-13-answers" id="question-13-answers-B" value="B" />
                        <label for="question-5-answers-B" class="fwrd labelb">Gak pernah beli kuota</label>
                    </div>
                    <div>
                        <input type="radio" name="question-13-answers" id="question-13-answers-C" value="C" />
                        <label for="question-5-answers-C" class="fwrd labelc">Santai aja</label>
                    </div>
                    <div>
                        <input type="radio" name="question-13-answers" id="question-13-answers-D" value="D" />
                        <label for="question-5-answers-D" class="fwrd labeld">Panik gak ada internet</label>
                    </div>
                    <p class="quiz-progress">13 of 30</p>
                </li>
        </ul>
      </div>
      <div class="tab-pane fade jumbotron" id="s14" role="tabpanel">
        <ul class="list-unstyled">
            <li>
                    <div class="quiz-overlay"></div>
                    <h3 class="pb-2 mt-4 mb-2 border-bottom">Kalau kamu dikasih hadiah, barang apa yang ingin kamu punya?</h3>
                    <div class="mtm">
                        <input type="radio" name="question-14-answers" id="question-14-answers-A" value="A" />
                        <label for="question-5-answers-A" class="fwrd labela">PC paling baru yang super canggih</label>
                    </div>
                    <div>
                        <input type="radio" name="question-14-answers" id="question-14-answers-B" value="B" />
                        <label for="question-5-answers-B" class="fwrd labelb">PlayStation 4</label>
                    </div>
                    <div>
                        <input type="radio" name="question-14-answers" id="question-14-answers-C" value="C" />
                        <label for="question-5-answers-C" class="fwrd labelc">Buku</label>
                    </div>
                    <div>
                        <input type="radio" name="question-14-answers" id="question-14-answers-D" value="D" />
                        <label for="question-5-answers-D" class="fwrd labeld">Alat musik</label>
                    </div>
                    <p class="quiz-progress">14 of 30</p>
                </li>
        </ul>
      </div>
      <div class="tab-pane fade jumbotron" id="s15" role="tabpanel">
        <ul class="list-unstyled">
            <li>
                    <div class="quiz-overlay"></div>
                    <h3 class="pb-2 mt-4 mb-2 border-bottom">Andaikan kamu sekarang seorang penyanyi, kamu bakal nyanyi lagu genre apa?</h3>
                    <div class="mtm">
                        <input type="radio" name="question-15-answers" id="question-15-answers-A" value="A" />
                        <label for="question-5-answers-A" class="fwrd labela">J-Pop</label>
                    </div>
                    <div>
                        <input type="radio" name="question-15-answers" id="question-15-answers-B" value="B" />
                        <label for="question-5-answers-B" class="fwrd labelb">K-Pop</label>
                    </div>
                    <div>
                        <input type="radio" name="question-15-answers" id="question-15-answers-C" value="C" />
                        <label for="question-5-answers-C" class="fwrd labelc">Rock</label>
                    </div>
                    <div>
                        <input type="radio" name="question-15-answers" id="question-15-answers-D" value="D" />
                        <label for="question-5-answers-D" class="fwrd labeld">Jazz</label>
                    </div>
                    <p class="quiz-progress">15 of 30</p>
                </li>
        </ul>
      </div>
      <div class="tab-pane fade jumbotron" id="s16" role="tabpanel">
        <ul class="list-unstyled">
            <li>
                    <div class="quiz-overlay"></div>
                    <h3 class="pb-2 mt-4 mb-2 border-bottom">Kamu tinggal sendirian di kos, beres-beres kamar tiap kapan aja?</h3>
                    <div class="mtm">
                        <input type="radio" name="question-16-answers" id="question-16-answers-A" value="A" />
                        <label for="question-5-answers-A" class="fwrd labela">Tiap hari</label>
                    </div>
                    <div>
                        <input type="radio" name="question-16-answers" id="question-16-answers-B" value="B" />
                        <label for="question-5-answers-B" class="fwrd labelb">2 hari sekali</label>
                    </div>
                    <div>
                        <input type="radio" name="question-16-answers" id="question-16-answers-C" value="C" />
                        <label for="question-5-answers-C" class="fwrd labelc">Sebulan sekali</label>
                    </div>
                    <div>
                        <input type="radio" name="question-16-answers" id="question-16-answers-D" value="D" />
                        <label for="question-5-answers-D" class="fwrd labeld">Gapernah beres-beres</label>
                    </div>
                    <p class="quiz-progress">16 of 30</p>
                </li>
        </ul>
      </div>
      <div class="tab-pane fade jumbotron" id="s17" role="tabpanel">
        <ul class="list-unstyled">
            <li>
                    <div class="quiz-overlay"></div>
                    <h3 class="pb-2 mt-4 mb-2 border-bottom">Kamu dikasih uang buat beli laptop baru, apa yang kamu beli?</h3>
                    <div class="mtm">
                        <input type="radio" name="question-17-answers" id="question-17-answers-A" value="A" />
                        <label for="question-5-answers-A" class="fwrd labela">Laptop berspesifikasi tinggi</label>
                    </div>
                    <div>
                        <input type="radio" name="question-17-answers" id="question-17-answers-B" value="B" />
                        <label for="question-5-answers-B" class="fwrd labelb">Laptop indah yang slim</label>
                    </div>
                    <div>
                        <input type="radio" name="question-17-answers" id="question-17-answers-C" value="C" />
                        <label for="question-5-answers-C" class="fwrd labelc">Nanya-nanya ke penjual yang bagus apa</label>
                    </div>
                    <div>
                        <input type="radio" name="question-17-answers" id="question-17-answers-D" value="D" />
                        <label for="question-5-answers-D" class="fwrd labeld">Gak jadi beli, udah punya laptop</label>
                    </div>
                    <p class="quiz-progress">17 of 30</p>
                </li>
        </ul>
      </div>
      <div class="tab-pane fade jumbotron" id="s18" role="tabpanel">
        <ul class="list-unstyled">
            <li>
                    <div class="quiz-overlay"></div>
                    <h3 class="pb-2 mt-4 mb-2 border-bottom">Di TC sekarang lagi hujan, apa yang kamu lakukan?</h3>
                    <div class="mtm">
                        <input type="radio" name="question-18-answers" id="question-18-answers-A" value="A" />
                        <label for="question-5-answers-A" class="fwrd labela">Neduh di Lab TC</label>
                    </div>
                    <div>
                        <input type="radio" name="question-18-answers" id="question-18-answers-B" value="B" />
                        <label for="question-5-answers-B" class="fwrd labelb">Nunggu di Plasa</label>
                    </div>
                    <div>
                        <input type="radio" name="question-18-answers" id="question-18-answers-C" value="C" />
                        <label for="question-5-answers-C" class="fwrd labelc">Langsung pulang</label>
                    </div>
                    <div>
                        <input type="radio" name="question-18-answers" id="question-18-answers-D" value="D" />
                        <label for="question-5-answers-D" class="fwrd labeld">Parkiran</label>
                    </div>
                    <p class="quiz-progress">18 of 30</p>
                </li>
        </ul>
      </div>
      <div class="tab-pane fade jumbotron" id="s19" role="tabpanel">
        <ul class="list-unstyled">
            <li>
                    <div class="quiz-overlay"></div>
                    <h3 class="pb-2 mt-4 mb-2 border-bottom">Kamu kalau ngerjain tugas lebih suka bareng atau sendiri?</h3>
                    <div class="mtm">
                        <input type="radio" name="question-19-answers" id="question-19-answers-A" value="A" />
                        <label for="question-5-answers-A" class="fwrd labela">Sendiri</label>
                    </div>
                    <div>
                        <input type="radio" name="question-19-answers" id="question-19-answers-B" value="B" />
                        <label for="question-5-answers-B" class="fwrd labelb">Rame-rame</label>
                    </div>
                    <div>
                        <input type="radio" name="question-19-answers" id="question-19-answers-C" value="C" />
                        <label for="question-5-answers-C" class="fwrd labelc">Dua-duanya</label>
                    </div>
                    <div>
                        <input type="radio" name="question-19-answers" id="question-19-answers-D" value="D" />
                        <label for="question-5-answers-D" class="fwrd labeld">Gak ngerjain</label>
                    </div>
                    <p class="quiz-progress">19 of 30</p>
                </li>
        </ul>
      </div>
      <div class="tab-pane fade jumbotron" id="s20" role="tabpanel">
        <ul class="list-unstyled">
            <li>
                    <div class="quiz-overlay"></div>
                    <h3 class="pb-2 mt-4 mb-2 border-bottom">Kamu dimarahi kating karena tidak memasukan motor ke parkiran di TC, apa yang kamu lakukan?</h3>
                    <div class="mtm">
                        <input type="radio" name="question-20-answers" id="question-20-answers-A" value="A" />
                        <label for="question-5-answers-A" class="fwrd labela">Diam</label>
                    </div>
                    <div>
                        <input type="radio" name="question-20-answers" id="question-20-answers-B" value="B" />
                        <label for="question-5-answers-B" class="fwrd labelb">Nurut sama kating</label>
                    </div>
                    <div>
                        <input type="radio" name="question-20-answers" id="question-20-answers-C" value="C" />
                        <label for="question-5-answers-C" class="fwrd labelc">Beralasan</label>
                    </div>
                    <div>
                        <input type="radio" name="question-20-answers" id="question-20-answers-D" value="D" />
                        <label for="question-5-answers-D" class="fwrd labeld">Kabur</label>
                    </div>
                    <p class="quiz-progress">20 of 30</p>
                </li>
        </ul>
      </div>
      <div class="tab-pane fade jumbotron" id="s21" role="tabpanel">
        <ul class="list-unstyled">
            <li>
                    <div class="quiz-overlay"></div>
                    <h3 class="pb-2 mt-4 mb-2 border-bottom">Ketika di TC kamu perlu tempat untuk mengerjakan tugasmu, dimana kamu akan mengerjakan?</h3>
                    <div class="mtm">
                        <input type="radio" name="question-21-answers" id="question-21-answers-A" value="A" />
                        <label for="question-5-answers-A" class="fwrd labela">Plasa</label>
                    </div>
                    <div>
                        <input type="radio" name="question-21-answers" id="question-21-answers-B" value="B" />
                        <label for="question-5-answers-B" class="fwrd labelb">di Lab KCV</label>
                    </div>
                    <div>
                        <input type="radio" name="question-21-answers" id="question-21-answers-C" value="C" />
                        <label for="question-5-answers-C" class="fwrd labelc">di Lab RPl</label>
                    </div>
                    <div>
                        <input type="radio" name="question-21-answers" id="question-21-answers-D" value="D" />
                        <label for="question-5-answers-D" class="fwrd labeld">di LP1/2</label>
                    </div>
                    <p class="quiz-progress">21 of 30</p>
                </li>
        </ul>
      </div>
      <div class="tab-pane fade jumbotron" id="s22" role="tabpanel">
        <ul class="list-unstyled">
            <li>
                    <div class="quiz-overlay"></div>
                    <h3 class="pb-2 mt-4 mb-2 border-bottom">Kamu sekarang seorang asisten dosen, dimana kamu akan mengadakan kelas tambahan untuk peserta kelas?</h3>
                    <div class="mtm">
                        <input type="radio" name="question-22-answers" id="question-22-answers-A" value="A" />
                        <label for="question-5-answers-A" class="fwrd labela">di Lab AJK</label>
                    </div>
                    <div>
                        <input type="radio" name="question-22-answers" id="question-22-answers-B" value="B" />
                        <label for="question-5-answers-B" class="fwrd labelb">di Lab MI</label>
                    </div>
                    <div>
                        <input type="radio" name="question-22-answers" id="question-22-answers-C" value="C" />
                        <label for="question-5-answers-C" class="fwrd labelc">Plasa</label>
                    </div>
                    <div>
                        <input type="radio" name="question-22-answers" id="question-22-answers-D" value="D" />
                        <label for="question-5-answers-D" class="fwrd labeld">di Lab LP</label>
                    </div>
                    <p class="quiz-progress">22 of 30</p>
                </li>
        </ul>
      </div>
      <div class="tab-pane fade jumbotron" id="s23" role="tabpanel">
        <ul class="list-unstyled">
            <li>
                    <div class="quiz-overlay"></div>
                    <h3 class="pb-2 mt-4 mb-2 border-bottom">Kamu dapat tugas menilai tugas dari dosen karena kamu seorang ketua kelas, dimana kamu akan menilai tuags-tugasnya?</h3>
                    <div class="mtm">
                        <input type="radio" name="question-23-answers" id="question-23-answers-A" value="A" />
                        <label for="question-5-answers-A" class="fwrd labela">di kosan</label>
                    </div>
                    <div>
                        <input type="radio" name="question-23-answers" id="question-23-answers-B" value="B" />
                        <label for="question-5-answers-B" class="fwrd labelb">Plasa TC</label>
                    </div>
                    <div>
                        <input type="radio" name="question-23-answers" id="question-23-answers-C" value="C" />
                        <label for="question-5-answers-C" class="fwrd labelc">Lab MI</label>
                    </div>
                    <div>
                        <input type="radio" name="question-23-answers" id="question-23-answers-D" value="D" />
                        <label for="question-5-answers-D" class="fwrd labeld">Warkop biasa</label>
                    </div>
                    <p class="quiz-progress">23 of 30</p>
                </li>
        </ul>
      </div>
      <div class="tab-pane fade jumbotron" id="s24" role="tabpanel">
        <ul class="list-unstyled">
            <li>
                    <div class="quiz-overlay"></div>
                    <h3 class="pb-2 mt-4 mb-2 border-bottom">Kamu seoarang pengawas ujian, apa yang kamu bawa saat mengawas?</h3>
                    <div class="mtm">
                        <input type="radio" name="question-24-answers" id="question-24-answers-A" value="A" />
                        <label for="question-5-answers-A" class="fwrd labela">Penggaris</label>
                    </div>
                    <div>
                        <input type="radio" name="question-24-answers" id="question-24-answers-B" value="B" />
                        <label for="question-5-answers-B" class="fwrd labelb">Kamera</label>
                    </div>
                    <div>
                        <input type="radio" name="question-24-answers" id="question-24-answers-C" value="C" />
                        <label for="question-5-answers-C" class="fwrd labelc">Laptop</label>
                    </div>
                    <div>
                        <input type="radio" name="question-24-answers" id="question-24-answers-D" value="D" />
                        <label for="question-5-answers-D" class="fwrd labeld">Botol air</label>
                    </div>
                    <p class="quiz-progress">24 of 30</p>
                </li>
        </ul>
      </div>
      <div class="tab-pane fade jumbotron" id="s25" role="tabpanel">
        <ul class="list-unstyled">
            <li>
                    <div class="quiz-overlay"></div>
                    <h3 class="pb-2 mt-4 mb-2 border-bottom">Kamu sedang menginap di TC, dimana kamu akan bermalam?</h3>
                    <div class="mtm">
                        <input type="radio" name="question-25-answers" id="question-25-answers-A" value="A" />
                        <label for="question-5-answers-A" class="fwrd labela">di Lab IGS</label>
                    </div>
                    <div>
                        <input type="radio" name="question-25-answers" id="question-25-answers-B" value="B" />
                        <label for="question-5-answers-B" class="fwrd labelb">di Lab KCV</label>
                    </div>
                    <div>
                        <input type="radio" name="question-25-answers" id="question-25-answers-C" value="C" />
                        <label for="question-5-answers-C" class="fwrd labelc">di Lab MI</label>
                    </div>
                    <div>
                        <input type="radio" name="question-25-answers" id="question-25-answers-D" value="D" />
                        <label for="question-5-answers-D" class="fwrd labeld">di Alpro</label>
                    </div>
                    <p class="quiz-progress">25 of 30</p>
                </li>
        </ul>
      </div>
      <div class="tab-pane fade jumbotron" id="s26" role="tabpanel">
        <ul class="list-unstyled">
            <li>
                    <div class="quiz-overlay"></div>
                    <h3 class="pb-2 mt-4 mb-2 border-bottom">Ketika sedang mengerjakan tugas, apakah kamu senang jika diganggu?</h3>
                    <div class="mtm">
                        <input type="radio" name="question-26-answers" id="question-26-answers-A" value="A" />
                        <label for="question-5-answers-A" class="fwrd labela">Biasa saja</label>
                    </div>
                    <div>
                        <input type="radio" name="question-26-answers" id="question-26-answers-B" value="B" />
                        <label for="question-5-answers-B" class="fwrd labelb">Senang, lalu mengganggu balik</label>
                    </div>
                    <div>
                        <input type="radio" name="question-26-answers" id="question-26-answers-C" value="C" />
                        <label for="question-5-answers-C" class="fwrd labelc">Kesal</label>
                    </div>
                    <div>
                        <input type="radio" name="question-26-answers" id="question-26-answers-D" value="D" />
                        <label for="question-5-answers-D" class="fwrd labeld">Gak peduli</label>
                    </div>
                    <p class="quiz-progress">26 of 30</p>
                </li>
        </ul>
      </div>
      <div class="tab-pane fade jumbotron" id="s27" role="tabpanel">
        <ul class="list-unstyled">
            <li>
                    <div class="quiz-overlay"></div>
                    <h3 class="pb-2 mt-4 mb-2 border-bottom">Ketika kamu sedang main game, apakah kamu senang jika diganggu?</h3>
                    <div class="mtm">
                        <input type="radio" name="question-27-answers" id="question-27-answers-A" value="A" />
                        <label for="question-5-answers-A" class="fwrd labela">Senang, lalu mengganggu balik</label>
                    </div>
                    <div>
                        <input type="radio" name="question-27-answers" id="question-27-answers-B" value="B" />
                        <label for="question-5-answers-B" class="fwrd labelb">Biasa saja</label>
                    </div>
                    <div>
                        <input type="radio" name="question-27-answers" id="question-27-answers-C" value="C" />
                        <label for="question-5-answers-C" class="fwrd labelc">Gak peduli</label>
                    </div>
                    <div>
                        <input type="radio" name="question-27-answers" id="question-27-answers-D" value="D" />
                        <label for="question-5-answers-D" class="fwrd labeld">Kesal banget</label>
                    </div>
                    <p class="quiz-progress">27 of 30</p>
                </li>
        </ul>
      </div>
      <div class="tab-pane fade jumbotron" id="s28" role="tabpanel">
        <ul class="list-unstyled">
            <li>
                    <div class="quiz-overlay"></div>
                    <h3 class="pb-2 mt-4 mb-2 border-bottom">Kamu senang bercanda hal yang serius?</h3>
                    <div class="mtm">
                        <input type="radio" name="question-28-answers" id="question-28-answers-A" value="A" />
                        <label for="question-5-answers-A" class="fwrd labela">Iya</label>
                    </div>
                    <div>
                        <input type="radio" name="question-28-answers" id="question-28-answers-B" value="B" />
                        <label for="question-5-answers-B" class="fwrd labelb">Mungkin iya</label>
                    </div>
                    <div>
                        <input type="radio" name="question-28-answers" id="question-28-answers-C" value="C" />
                        <label for="question-5-answers-C" class="fwrd labelc">Engga</label>
                    </div>
                    <div>
                        <input type="radio" name="question-28-answers" id="question-28-answers-D" value="D" />
                        <label for="question-5-answers-D" class="fwrd labeld">Biasa aja</label>
                    </div>
                    <p class="quiz-progress">28 of 30</p>
                </li>
        </ul>
      </div>
      <div class="tab-pane fade jumbotron" id="s29" role="tabpanel">
        <ul class="list-unstyled">
            <li>
                    <div class="quiz-overlay"></div>
                    <h3 class="pb-2 mt-4 mb-2 border-bottom">Kamu senang menjadi pintar?</h3>
                    <div class="mtm">
                        <input type="radio" name="question-29-answers" id="question-29-answers-A" value="A" />
                        <label for="question-5-answers-A" class="fwrd labela">Biasa saja</label>
                    </div>
                    <div>
                        <input type="radio" name="question-29-answers" id="question-29-answers-B" value="B" />
                        <label for="question-5-answers-B" class="fwrd labelb">Syukur</label>
                    </div>
                    <div>
                        <input type="radio" name="question-29-answers" id="question-29-answers-C" value="C" />
                        <label for="question-5-answers-C" class="fwrd labelc">Mungkin iya</label>
                    </div>
                    <div>
                        <input type="radio" name="question-29-answers" id="question-29-answers-D" value="D" />
                        <label for="question-5-answers-D" class="fwrd labeld">Iya</label>
                    </div>
                    <p class="quiz-progress">29 of 30</p>
                </li>
        </ul>
      </div>
      <div class="tab-pane fade jumbotron" id="s30" role="tabpanel">
        <ul class="list-unstyled">
            <li>
                    <div class="quiz-overlay"></div>
                    <h3 class="pb-2 mt-4 mb-2 border-bottom">Kamu senang dengan hal yang berbau budaya asia?</h3>
                    <div class="mtm">
                        <input type="radio" name="question-30-answers" id="question-30-answers-A" value="A" />
                        <label for="question-5-answers-A" class="fwrd labela">Bener banget</label>
                    </div>
                    <div>
                        <input type="radio" name="question-30-answers" id="question-30-answers-B" value="B" />
                        <label for="question-5-answers-B" class="fwrd labelb">Gak suka sama sekali</label>
                    </div>
                    <div>
                        <input type="radio" name="question-30-answers" id="question-30-answers-C" value="C" />
                        <label for="question-5-answers-C" class="fwrd labelc">Biasa aja</label>
                    </div>
                    <div>
                        <input type="radio" name="question-30-answers" id="question-30-answers-D" value="D" />
                        <label for="question-5-answers-D" class="fwrd labeld">Ga peduli</label>
                    </div>
                    <p class="quiz-progress">30 of 30</p>
                </li>
        </ul>
      </div>
    </div>
        <input class="btn btn-primary" type="submit" value="Submit Quiz" id="submit-quiz" />
        </form>
    </div>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-bottom" id="nav-bottom">
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
