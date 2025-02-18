<!DOCTYPE html>
<html lang="en">
<?php include('baglan.php');?>
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Ürün</title>
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
                  <div class="container">
                        <div class="row">
                           <?php
                              $id_bilgi = @$_GET['id'];
                              $id_bilgi =  substr($id_bilgi, 64);   
                              $id =  substr($id_bilgi, 0, -64); 
                              $sorgu_bilgi = mysqli_query($conn,"select * from urunler where urun_id='".$id."'");
                              $bilgiler = mysqli_fetch_array($sorgu_bilgi);

                              $rsorgu = mysqli_query($conn, "select * from resim where urun_id='".$id."'");
                              echo "<p>";
                              while ($rbilgiler = mysqli_fetch_array($rsorgu)) {
                              echo "<img height='160' width='300' src='images/".$rbilgiler['resim']."'>";
                              }

                           ?>
                        <br><br>
                        <?php echo "<font size='5px' color='#802c0c'>Ürün İsim : </font> &nbsp;<font size='5px' color='black'>".$bilgiler['urun_isim']."</font>" ?>
                        <br><br>
                        <?php echo "<font size='5px' color='#802c0c'>Ürün Açıklama : </font> &nbsp;<font size='5px' color='black'>".nl2br($bilgiler['urun_aciklama'])."</font>" ?>
                        <br><br>
                        <?php echo "<font size='5px' color='#802c0c'>Ürün Fiyat: </font> &nbsp;<font size='5px' color='black'>".$bilgiler['urun_fiyat']."</font>" ?>
                        </p>

                           
                        </div>
                  </div>
            </div>
      </div>
      <!--  design section end -->
      <!-- footer section start -->
            <div class="footer_section">
         <div class="container"align="center">
           <div class="col-lg-3 col-sm-6">
                  <h2 class="useful_text"><?php echo "".$id.""; ?></h2>
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