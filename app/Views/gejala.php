<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Burung Murai</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/murailogo.jpg" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="white_bg">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                           <div class="center-desk">
                              <div class="logo">
                                 <a href="index.html"><img src="images/logo12.png" alt="#" /></a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <nav class="navigation navbar navbar-expand-md navbar-dark ">
                           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                           <span class="navbar-toggler-icon"></span>
                           </button>
                           <div class="collapse navbar-collapse" id="navbarsExample04">
                              <ul class="navbar-nav mr-auto">
                                 <li class="nav-item">
                                    <a class="nav-link" href="/Dashboard"> Home  </a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="/About">About</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="/Petunjuk">Petunjuk </a>
                                 </li>
                                 <li class="nav-item active">
                                    <a class="nav-link" href="/Gejala">Gejala & Solusi</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="/Jenis">Jenis</a>
                                 </li>
                                 <li class="nav-item d_none le_co">
                                    <a class="nav-link" href="/"><i  class="fa fa-user" aria-hidden="true"></i> Logout</a>
                                 </li>
                              </ul>
                           </div>
                        </nav>
                     </div>
                  </div>
               </div>
               <!-- end header inner -->
               <!-- end header -->
               <!-- banner -->
               <section class="banner_main">
                  <div id="banner1" class="carousel slide" data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#banner1" data-slide-to="0" class="active"></li>
                        <li data-target="#banner1" data-slide-to="1"></li>
                        <li data-target="#banner1" data-slide-to="2"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container-fluid">
                              <div class="carousel-caption">
                                 <div class="row">
                                    <div class="col-md-12 col-lg-7">
                                       <div class="text-bg">
                                          <span>GEJALA &</span>
                                          <h1>solusi</h1>
                                          <p>Halaman tentang Tabel representasi untuk gejala dan solusi perawatan burung murai</p>
                                       </div>
                                    </div>
                                    <div class="col-md-12 col-lg-5">
                                       <div class="text_img">
                                          <figure><img src="images/burung1.png" alt="#"/></figure>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
            </div>
         </div>
      </header>
      <!-- end banner -->
      <!-- bitcoins section --> 
      <div class="bitcoins">
         <div class="container">
            <div class="row">
               <div class="col-md-8 offset-md-2">
                  <div class="titlepage">
                     <h2>Gejala & Solusi</h2>
                  </div>
               </div>
               <div class="col-md-8 offset-md-2">
               <span class="yellow">Centang Jika Sesuai Dengan Gejala</span>
               <form id="gejalaForm">
                  <span class="black">Burung terlihat stres dan giras</span>
                  <div class="form-check">
                     <input class="form-check-input" type="radio" name="G01" value="ya" />
                     <label class="form-check-label">Ya</label><br>
                     <input class="form-check-input" type="radio" name="G01" value="tidak"/>
                     <label class="form-check-label">Tidak</label>
                  </div>
                  <span class="black">Bulu kusam dan tidak mengkilap</span>
                  <div class="form-check">
                     <input class="form-check-input" type="radio" name="G02" value="ya" />
                     <label class="form-check-label">Ya</label><br>
                     <input class="form-check-input" type="radio" name="G02" value="tidak"/>
                     <label class="form-check-label">Tidak</label>
                  </div>
                  <span class="black">Burung malas berkicau</span>
                  <div class="form-check">
                     <input class="form-check-input" type="radio" name="G03" value="ya" />
                     <label class="form-check-label">Ya</label><br>
                     <input class="form-check-input" type="radio" name="G03" value="tidak"/>
                     <label class="form-check-label">Tidak</label>
                  </div>
                  <span class="black">Burung sering menggaruk tubuh</span>
                  <div class="form-check">
                     <input class="form-check-input" type="radio" name="G04" value="ya" />
                     <label class="form-check-label">Ya</label><br>
                     <input class="form-check-input" type="radio" name="G04" value="tidak"/>
                     <label class="form-check-label">Tidak</label>
                  </div>
                  <span class="black">Nafsu makan burung berkuran</span>
                  <div class="form-check">
                     <input class="form-check-input" type="radio" name="G05" value="ya" />
                     <label class="form-check-label">Ya</label><br>
                     <input class="form-check-input" type="radio" name="G05" value="tidak"/>
                     <label class="form-check-label">Tidak</label>
                  </div>
                  <span class="black">Burung tidak aktif dan lesu</span>
                  <div class="form-check">
                     <input class="form-check-input" type="radio" name="G06" value="ya" />
                     <label class="form-check-label">Ya</label><br>
                     <input class="form-check-input" type="radio" name="G06" value="tidak"/>
                     <label class="form-check-label">Tidak</label>
                  </div>
                  <span class="black">Burung mencabut bulunya sendiri</span>
                  <div class="form-check">
                     <input class="form-check-input" type="radio" name="G07" value="ya" />
                     <label class="form-check-label">Ya</label><br>
                     <input class="form-check-input" type="radio" name="G07" value="tidak"/>
                     <label class="form-check-label">Tidak</label>
                  </div>
                  <span class="black">Burung terlalu gemuk dan malas berkicau</span>
                  <div class="form-check">
                     <input class="form-check-input" type="radio" name="G08" value="ya" />
                     <label class="form-check-label">Ya</label><br>
                     <input class="form-check-input" type="radio" name="G08" value="tidak"/>
                     <label class="form-check-label">Tidak</label>
                  </div>
                  <span class="black">Mata terlihat sayu dan berair</span>
                  <div class="form-check">
                     <input class="form-check-input" type="radio" name="G09" value="ya" />
                     <label class="form-check-label">Ya</label><br>
                     <input class="form-check-input" type="radio" name="G09" value="tidak"/>
                     <label class="form-check-label">Tidak</label>
                  </div>
                  <span class="black">Burung giras ketika berada di keramaian</span>
                  <div class="form-check">
                     <input class="form-check-input" type="radio" name="G10" value="ya" />
                     <label class="form-check-label">Ya</label><br>
                     <input class="form-check-input" type="radio" name="G10" value="tidak"/>
                     <label class="form-check-label">Tidak</label>
                  </div>
                  <span class="black">Burung tidak mau bunyi di keramaian</span>
                  <div class="form-check">
                     <input class="form-check-input" type="radio" name="G11" value="ya" />
                     <label class="form-check-label">Ya</label><br>
                     <input class="form-check-input" type="radio" name="G11" value="tidak"/>
                     <label class="form-check-label">Tidak</label>
                  </div>
                  <span class="black">Variasi kicauan burung monoton</span>
                  <div class="form-check">
                     <input class="form-check-input" type="radio" name="G12" value="ya" />
                     <label class="form-check-label">Ya</label><br>
                     <input class="form-check-input" type="radio" name="G12" value="tidak"/>
                     <label class="form-check-label">Tidak</label>
                  </div>
                  <span class="black">Burung terlalu aktif dan agresif apabila melihat burung sejenis</span>
                  <div class="form-check">
                     <input class="form-check-input" type="radio" name="G13" value="ya" />
                     <label class="form-check-label">Ya</label><br>
                     <input class="form-check-input" type="radio" name="G13" value="tidak"/>
                     <label class="form-check-label">Tidak</label>
                  </div>

                  <button type="button" class="read_more" onclick="hitungKemiripan()">Solusi</button>
               </form>
               </div>
            </div>
         </div>
      </div>

      <div class="services">
         <div class="container">
            <div class="row">
               <div class="col-md-8 offset-md-2">
                  <span class="yellow">Solusi Perawatan</span>
                  <h2>Hasil:</h2>
                  <div id="output"></div><br>
                  <h2>Solusi:</h2>
                  <div id="solution"></div>
               </div>
                  

                  <!-- JavaScript -->
                  <script>

                     function hitungKemiripan() {
                        // Data kasus lama
                        const kasus = {
                           "Burung terkena snot": ["G03", "G05", "G06", "G09"],
                           "Burung sedang mabung / ganti bulu": ["G02", "G03", "G06"],
                           "Burung stress": ["G01", "G03", "G10", "G11"],
                           "Burung cacingan": ["G03", "G05", "G06"],
                           "Burung terkena kutu atau jamur": ["G02", "G04"],
                           "Burung tidak memiliki mental": ["G03", "G10", "G11"],
                           "Burung obesitas": ["G03", "G06", "G08", "G12"],
                           "Burung over birahi": ["G07", "G13"]
                        };

                        // Solusi untuk setiap kasus
                        const solusi = {
                           "Burung terkena snot": "Jaga kebersihan kandang dan pakan, berikan obat tetes mata",
                           "Burung sedang mabung / ganti bulu": "Istirahatkan burung dan beri pakan yang berkualitas",
                           "Burung stress": "Tempatkan burung di lokasi yang tenang dan batasi interaksi dengan burung",
                           "Burung cacingan": "Beri obat cacing dan vitamin untuk burung, berikan pakan yang berkualitas dan jaga kebersihan",
                           "Burung terkena kutu atau jamur": "Rajin memandikan burung dan jaga kebersihan sangkar",
                           "Burung tidak memiliki mental": "Tempatkan burung di keramaian dan lakukan pemasteran",
                           "Burung obesitas": "Sering jemur burung dan lakukan pengumbaran di sangkar umbar",
                           "Burung over birahi": "Lakukan terapi mandi malam dan kurangi ekstra fooding",
                        };

                        // Bobot gejala
                        const bobotGejala = {
                           G01: 5,
                           G02: 3,
                           G03: 3,
                           G04: 1,
                           G05: 3,
                           G06: 5,
                           G07: 1,
                           G08: 3,
                           G09: 3,
                           G10: 3,
                           G11: 3,
                           G12: 3,
                           G13: 3,
                        };

                        // Input gejala dari pengguna
                        const kasusBaru = [];
                        for (let i = 1; i <= 13; i++) {
                           const input = document.querySelector(
                              `input[name=G${i.toString().padStart(2, "0")}]:checked`
                           );
                           if (input && input.value === "ya") {
                              kasusBaru.push(`G${i.toString().padStart(2, "0")}`);
                           }
                        }

                        // Fungsi menghitung kemiripan
                        function calculateSimilarity(kasusBaru, kasusLama) {
                           let kemiripan = 0;
                           let totalBobot = kasusLama.reduce(
                              (sum, g) => sum + (bobotGejala[g] || 0),
                              0
                           );

                           for (let gejala of kasusBaru) {
                              if (kasusLama.includes(gejala)) {
                              kemiripan += bobotGejala[gejala] || 0;
                              }
                           }

                           return totalBobot > 0 ? kemiripan / totalBobot : 0;
                        }

                        // Hitung kemiripan untuk semua kasus
                        let hasilKemiripan = Object.entries(kasus).map(([key, gejala]) => {
                           return {
                              kasus: key,
                              similarity: calculateSimilarity(kasusBaru, gejala),
                           };
                        });

                        // Urutkan berdasarkan nilai kemiripan (descending)
                        hasilKemiripan.sort((a, b) => b.similarity - a.similarity);

                        // Ambil dua nilai tertinggi dan solusi
                        let topResults = hasilKemiripan.slice(0, 2);
                        let topResultss = hasilKemiripan.slice(0, 1);

                        let output = topResults
                           .map(
                              (result) =>
                              `${result.kasus}: ${(result.similarity * 100).toFixed(2)}%`
                           )
                           .join("<br>");
                        let solutions = topResultss
                           .map(
                              (result) => `Solusi untuk ${result.kasus}: ${solusi[result.kasus]}`
                           )
                           .join("<br>");

                        // Tampilkan hasil dan solusi
                        document.getElementById("output").innerHTML = output;
                        document.getElementById("solution").innerHTML = solutions;
                        }
                     </script>
               
               </div>
            </div>
         </div>
      </div>

      <!-- end bitcoins section -->
      <!--  footer -->
      <footer >
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-lg-3 col-md-6 col-sm-6">
                     <a class="logo2" href="index.html"><img src="images/logo12.png" alt="#"/></a>
                     <div class="follow">
                        <p>Sistem Pakar Perawatan Harian Burung Murai Batu</p>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                     <h3>Quick link</h3>
                     <ul class="link_icon">
                        <li> <a href="#"> <i class="fa fa-chevron-right" aria-hidden="index.html"></i>Home</a></li>
                        <li> <a href="#"> <i class="fa fa-chevron-right" aria-hidden="blog"></i>About </a></li>
                        <li> <a href="#"> <i class="fa fa-chevron-right" aria-hidden="contact"></i>Petunjuk</a></li>
                        <li class="active"> <a href="#"> <i class="fa fa-chevron-right" aria-hidden="blog"></i>Gejala & Solusi</a></li>
                        <li> <a href="/Jenis"> <i class="fa fa-chevron-right" aria-hidden="blog"></i>Jenis</a></li>
                     </ul>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                     <h3>Instagram </h3>
                     <div class="follow">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do </p>
                        <ul class="social_icon">
                           <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                           <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                           <li> <a href="#">   <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                           <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                     <h3>Contact us</h3>
                     <ul class="location_icon">
                        <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a>Reader will be dis<br>
                           tracted by the reada
                        </li>
                        <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>demo@gmail.com</li>
                        <li><a href="#"><i class="fa fa-volume-control-phone" aria-hidden="true"></i></a>+01 102586954775</li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>