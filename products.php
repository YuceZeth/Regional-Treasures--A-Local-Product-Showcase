<!DOCTYPE html>
<html lang="en">
<?php include("baglan.php");?>
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Ürünler</title>
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
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
               <a class="logo" href="index.php"><font size="5" face="Arial" color="white">Yeşilada Yöresel Ürünler</font></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                     <li class="nav-item">
                        <a class="nav-link" href="index.php">Anasayfa</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="about.php">Hakkımızda</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="products.php">Ürünler</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="contact.php">İletişim</a>
                     </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                     <div class="search_icon">
                        <ul>
                           <li><a href="#"><img src="images/search-icon.png"></a></li>
                        </ul>
                     </div>
                  </form>
               </div>
         </nav>
         </div>
      </div>
      <!-- header section end -->
      <!--  design section start -->
      <div class="design_section layout_padding">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                           <?php
                              $sorgu = mysqli_query($conn,"select * from urunler ");
                              $s = 0;
                              echo "<div class='row'>";
                              while ($doldur = mysqli_fetch_array($sorgu)) {
                                 $s = $s + 1;
                                 $uid = $doldur["urun_id"]; 
                                 $kodid = hash('sha256', rand(1,1000)).$uid.hash('sha256', rand(1,1000));
                                 if ($s == 3 ) {
                                    echo "<div class='col-md-4'>";
                                       echo "<div class='box_main'>";
                                       
                                          $id = $doldur["urun_id"];
                                          $rsorgu = mysqli_query($conn,"select * from resim where urun_id='".$id."'");
                                          $rdoldur = mysqli_fetch_array($rsorgu);
                                          echo "<p class='chair_text'>".$doldur["urun_isim"]."</p>";
                                          echo "<div class='image_3'><a href='dproducts.php?id=".$kodid."'><img src='images/".$rdoldur["resim"]."'></a></div>";
                                          echo "<p class='chair_text'>Fiyat ".$doldur["urun_fiyat"]."₺</p>";
                                          
                                       echo "</div>";
                                    echo "</div>";

                                 } else {
                                    
                                    echo "<div class='col-md-4'>";
                                       echo "<div class='box_main'>";

                                          $id = $doldur["urun_id"];
                                          $rsorgu = mysqli_query($conn,"select * from resim where urun_id='".$id."'");
                                          $rdoldur = mysqli_fetch_array($rsorgu);
                                          echo "<p class='chair_text'>".$doldur["urun_isim"]."</p>";
                                          echo "<div class='image_3'><a href='dproducts.php?id=".$kodid."'><img src='images/".$rdoldur["resim"]."'></a></div>";
                                          echo "<p class='chair_text'>Fiyat ".$doldur["urun_fiyat"]."₺</p>";
                                          
                                       echo "</div>";
                                    echo "</div>";

                                 }
                                 
                              }
                              echo "</div>";
                           ?>



                        <!--<div class="row">
                           <div class="col-md-4">
                              <div class="box_main">
                                 <p class="chair_text">Chair 01</p>
                                 <div class="image_3" href="#"><img src="images/img-3.png"></div>
                                 <p class="chair_text">Price $100</p>
                                 <div class="buy_bt"><a href="#">Buy Now</a></div>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="box_main">
                                 <p class="chair_text">Chair 33</p>
                                 <div class="image_4" href="#"><img src="images/img-4.png"></div>
                                 <p class="chair_text">Price $100</p>
                                 <div class="buy_bt"><a href="#">Buy Now</a></div>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="box_main">
                                 <p class="chair_text">Table</p>
                                 <div class="image_4" href="#"><img src="images/img-5.png"></div>
                                 <p class="chair_text">Price $100</p>
                                 <div class="buy_bt"><a href="#">Buy Now</a></div>
                              </div>
                           </div>
                        </div>-->
                     



                  </div>
               </div>
            </div>
      </div>
      <!--  design section end -->
      <!-- footer section start -->
      <div class="footer_section">
         <div class="container"align="center">
           <div class="col-lg-3 col-sm-6">
                  <h2 class="useful_text">Sosyal Medya</h2>
                  <div id="social">
                     <a class="facebookBtn smGlobalBtn " href="#" ></a>
                     <a class="twitterBtn smGlobalBtn" href="#" ></a>
                     <a class="googleplusBtn smGlobalBtn" href="#" ></a>
                     <a class="linkedinBtn smGlobalBtn" href="#" ></a>
                  </div>
                  <p class="copyright_text" style="text-align: center; color: white;">Design by yzshownolove</p>
               </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
</html>