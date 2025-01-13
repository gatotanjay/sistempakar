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


      <!-- Subscribe section --> 
      <div class="subscribe">
         <div class="container">
            <div class="row">
               <div class="col-md-8 offset-md-2">
                  <div class="subscribe_main">
                  <h3>Gejala yang Dimasukkan Pengguna:</h3>
                    <ul>
                        <?php foreach ($inputPengguna as $gejala => $value): ?>
                            <li><?= htmlspecialchars($gejala); ?></li>
                        <?php endforeach; ?>
                    </ul><br><br>
                  <h3>Hasil Diagnosis</h3>
                    <ul>
                        <?php foreach ($hasil as $result): ?>
                            <li><?= $result['kasus'] ?>: <?= number_format($result['similarity'] * 100, 2) ?>%</li>
                        <?php endforeach; ?>
                    </ul><br><br>

                    <h3>Solusi Perawatan</h3>
                    <ul><?= $solusi ?></ul>
                    <form id="contac_form" class="contac_form">
                        <div class="col-md-12">
                           <button class="send_btn"><a href="/Gejala">Kembali</a></button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end Subscribe section -->



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