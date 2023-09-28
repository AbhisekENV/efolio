<?php 
require('include/db.php');
$query = "SELECT * FROM home,section_control,social_media,about,article_auth,contact,site_background,seo";
$run = mysqli_query($db,$query);
$user_data = mysqli_fetch_array($run);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?=$user_data['page_title'] ?></title>
  <meta content="<?=$user_data['description'] ?>" name="description">
  <meta content="<?=$user_data['keywords'] ?>" name="keywords">

  <!-- Favicons -->
  <link href="./images/<?=$user_data['siteicon'] ?>" rel="icon">
  <link href="./images/<?=$user_data['siteicon'] ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i|Playfair+Display:400,400i,500,500i,600,600i,700,700i,900,900i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
<!-- Jquery and background move js-->
<script src="http://code.jquery.com/jquery.min.js"></script>
<script src="./assets/js/backgroundMove.js"></script>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
<style>
 body {
        background: #FFFAFA;
        margin:0;
        padding: 0;
    }

    /* scroll bar */
    /* width */
    ::-webkit-scrollbar {
        width: 5px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
        background: #FFFAFA;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
        background: #888;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
        background: #00001a;
    }
    .background{
      background-color: #d69907;
    }
  #hero {
  background: url("./images/<?=$user_data['background_img']?>");
  -webkit-filter: grayscale(100%); 
  filter: grayscale(100%);
  height: 100vh;
  width: 100%;
  background-size: cover;
  position: relative;
  background-position: center;
  background-repeat: no-repeat;
  background-attachment: fixed;
}

#hero .hero-content {
  height: 100vh;
  text-align: left;
  width: 100%;
  display: flex;
  justify-content: center;
  flex-direction: column;
}

.hero-content h1 {
  font-size: 40px;
  font-weight: 700;
  margin-bottom: 10px;
  text-transform: uppercase;
  color: #fff;
}
.hero-content h1:hover {
  font-size: 40px;
  font-weight: 700;
  margin-bottom: 10px;
  text-transform: uppercase;
  color: #000;
}
.hero-content p {
  font-size: 25px;
  letter-spacing: 3px;
  margin-top: 0;
  margin-bottom: 30px;
  text-transform: capitalize;
  color: #fff;
  font-weight: 500;
}
.hero-content p:hover {
  font-size: 25px;
  letter-spacing: 3px;
  margin-top: 0;
  margin-bottom: 30px;
  text-transform: capitalize;
  color: #000;
  font-weight: 500;
}
.hero-content .list-social li {
  float: left;
  margin-right: 20px;
}

.hero-content .list-social li i {
  color: #fff;
  font-size: 20px;
}
.hero-content .list-social li i:hover{
  color: #000;
  font-size: 20px;
} 
.services-slider{
  margin-top: 3rem;
}
.services-block{
  text-align: center;
  color: #d69907;
  font-weight: bold;
}
</style>
  <!-- =======================================================
  * Template Name: Folio
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/folio-bootstrap-portfolio-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

     <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
      <!-- Uncomment below if you prefer to use an text logo -->
       <h1 class="logo"><a href=""><?=$user_data['title']?></a></h1>

      <nav id="navbar" class="navbar">
        <ul>
        <?php
        if($user_data['home_section']=='on'){
        ?>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <?php } 
          if($user_data['about_section']=='on'){ ?>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <?php } 
          if($user_data['portfolio_section']=='on'){ ?>
          <li><a class="nav-link  scrollto" href="#portfolio">Portfolio</a></li>
          <?php } 
          if($user_data['article_section']=='on'){ ?>
          <li><a class="nav-link  scrollto" href="#journal">Blog</a></li>
          <?php } 
          if($user_data['contact_section']=='on'){ ?>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <?php } ?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <div class='background container-fluid'>
  <div id="hero" class="hero starlight">

    <div class="container">
      <div class="hero-content">
        <h1><?=$user_data['title']?></h1>
        <P><span class="typed" data-typed-items="<?=$user_data['subtitle']?>"></span></p>
      <?php 
      if($user_data['showicons']=='on'){
      ?>
        <ul class="list-unstyled list-social">
            <?php 
            if($user_data['facebook']!==''){
            ?>
          <li><a href="<?=$user_data['facebook']?>"><i class="bi bi-facebook"></i></a></li>
          <?php }
          if($user_data['twitter']!==''){ ?>
          <li><a href="<?=$user_data['twitter']?>"><i class="bi bi-twitter"></i></a></li>
          <?php }
          if($user_data['instagram']!==''){ ?>
          <li><a href="<?=$user_data['instagram']?>"><i class="bi bi-instagram"></i></a></li>
          <?php }
          if($user_data['linkedin']!==''){ ?>
          <li><a href="<?=$user_data['linkedin']?>"><i class="bi bi-linkedin"></i></a></li>
          <?php } ?>
        </ul>
        <?php 
      }
        ?>
      </div>
    </div>
  </div>
    </div><!-- End Hero -->

  <main id="main">
<?php 
if($user_data['about_section']=='on'){
?>
    <!-- ======= About Section ======= -->
    <div id="about" class="paddsection">
      <div class="container">
        <div class="row justify-content-between">

          <div class="col-lg-4 ">
            <div class="div-img-bg">
              <div class="about-img">
                <img src="./images/<?=$user_data['profile_pic']?>" class="img-responsive" alt="me">
              </div>
            </div>
          </div>

          <div class="col-lg-7">
            <div class="about-descr">

              <p class="p-heading"><?=$user_data['about_subtitle']?></p>
              <p class="separator"><?=$user_data['about_desc']?></p>

            </div>

          </div>
        </div>
      </div>
    </div><!-- End About Section -->
<?php }
if($user_data['services_section']=='on'){
?>
    <!-- ======= Services Section ======= -->
    <div id="services">
      <div class="container">

        <div class="services-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
            <?php
          $s="SELECT * FROM `services`";
$sq=mysqli_query($db,$s);
while($res=mysqli_fetch_assoc($sq)){ ?>
            <div class="swiper-slide">
            <a class="text-light" href="<?=$res['orgwebsite']?>">
              <div class="services-block text-center bg-dark rounded p-3">
                <h3 class='text-light h5'><?=$res['orgname']?></h3>
                <h6 class="separator text-light">Address| <?=$res['orgaddress']?></h6>
                <h6 class="separator">Phone| <a class="text-light" href="tel:<?=$res['orgphone']?>"> <?=$res['orgphone']?>
              </a></h6>
                <?=$res['daytime']?>
              </div></a>
            </div><!-- End testimonial item -->
<?php } ?>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </div><!-- End Services Section -->
<?php } 
if($user_data['portfolio_section']=='on'){
?>
    <!-- ======= Portfolio Section ======= -->
    <div id="portfolio" class="paddsection">

      <div class="container">
        <div class="section-title text-center">
          <h2>My Portfolio</h2>
        </div>
      </div>

      <div class="container">

        <div id="carouselExampleFade" class="carousel slide p-2" data-bs-ride="carousel">
  <div class="carousel-inner">
  <div class="carousel-item active" data-bs-interval="1000">
  <div class="col-12 col-md-10 col-sm-10 m-auto">
      <img src="./assets/img/portfolio/OIP.jpg" class="d-block w-100 rounded" loading="lazy" alt="..."> </div>
    </div>
<?php 
$s="SELECT * FROM `portfolio`";
$sq=mysqli_query($db,$s);
while($res=mysqli_fetch_assoc($sq)){
?>
    <div class="carousel-item" data-bs-interval="5000">
      <div class="col-12 col-md-10 col-sm-10 m-auto">
      <a href="./images/<?=$res['project_pic']?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link">
      <img src="./images/<?=$res['project_pic']?>" loading="lazy" class="d-block w-100 rounded" alt="..."></a>
      <div class="carousel-caption bg-dark rounded d-none d-md-block">
        <h5><?=$res['project_name']?></h5>
        <a href="<?=$res['project_link']?>" class="text-light details-link" title="More Details">View <i class='bx  bx-right-arrow bx-fade-right'></i></a>
      </div>
      </div>
    </div>      
       <?php } ?>
       </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div></div>

    </div><!-- End Portfolio Section -->
<?php } 
if($user_data['article_section']=='on'){
?>
    <!-- ======= Journal Section ======= -->
    <div id="journal" class="text-left paddsection">

      <div class="container">
        <div class="section-title text-center">
          <h2>Journal</h2>
        </div>
      </div>

      <div class="container">
        <div class="journal-block">
        <?php             
              // Fetch JSON data from the URL
              $url = "https://bonglib.in/display.php?m=".$user_data['gmail'];
              $jsonData = file_get_contents($url);
              
              // Check if data was successfully fetched
              if ($jsonData === FALSE) {
                  die("Failed to fetch data from the URL");
              }
              
              // Decode JSON data into an associative array
              $data = json_decode($jsonData, true);
              
              // Check if JSON decoding was successful
              if ($data === null) {
                  die("Failed to decode JSON data");
              }
              
              // Create an HTML table from the JSON data
              $htmlTable = "<div class='row'>";
              $n=100;
              foreach ($data['data'] as $item) {
                 $htmlTable = "<div class='col-10 col-sm-4 col-md-3 m-auto article' data-aos='fade-up' data-aos-delay='$n'>
                <a href='#'>";
                  $htmlTable .= "<p class='h4 fw-bold text-center'>" . $item['articleTitle'] . "</p>";
                  $htmlTable .= "<p class='text-secondary text-center'>" . $item['articleAuthor'] . "</p>";
                  $htmlTable .=  $item['articleDescrip'];               
                  $htmlTable .= "<p class='text-secondary text-center'>" . $item['articleDate'] . "</p>";
                  $htmlTable .= "</a></div>";
                  $n+100;
              }
              
              $htmlTable .= "</div>";
              
              // Output the HTML table
              echo $htmlTable;
             
              ?>
        </div>
      </div>

    </div><!-- End Journal Section -->
<?php } 
if($user_data['contact_section']=='on'){ 
?>
    <!-- ======= Contact Section ======= -->
    <div id="contact" class="paddsection">
      <div class="container">
        <div class="contact-block1">
          <div class="row">

            <div class="col-lg-6">
              <div class="contact-contact">

                <h2 class="mb-30">GET IN TOUCH</h2>

                <ul class="contact-details">
                  <?php
                  if($user_data['address']!=='0'){
                  ?>
                  <li><span><?=$user_data['address']?></span></li>
                  <?php }?>
                  <?php
                  if($user_data['mobile']!=='0'){
                  ?>
                  <li><span><?=$user_data['mobile']?></span></li>
                  <?php }?>
                  <?php
                  if($user_data['email']!=='0'){
                  ?>
                  <li><span><?=$user_data['email']?></span></li>
                  <?php }?>
                </ul>

              </div>
            </div>

            <div class="col-lg-6">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form" enctype="multipart/form-data">
                <div class="row gy-3">

                  <div class="col-lg-12">
                    <div class="form-group contact-block1">
                      <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" name="name" required>
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="form-group">
                      <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" name="email" required>
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="form-group">
                    <input type="tel" class="form-control" placeholder="Enter 10 digits Phone number" name="phone" pattern="[0-9]{10}" required>
                    </div>
                  </div>

                  <div class="col-lg-12">
                    <div class="form-group">
                      <textarea class="form-control" placeholder="Message" name="query" required></textarea>
                    </div>
                  </div>

                  <div class="mt-0">
                    <input type="submit" class="btn btn-defeault btn-send" name="send_message" value="Send message">
                  </div>

                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Contact Section -->
<?php } ?>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <div id="footer" class="text-center">
    <div class="container">
      <div class="socials-media text-center">

        <ul class="list-unstyled">
        <?php 
            if($user_data['facebook']!==''){
            ?>
          <li><a href="<?=$user_data['facebook']?>"><i class="bi bi-facebook"></i></a></li>
          <?php }
          if($user_data['twitter']!==''){ ?>
          <li><a href="<?=$user_data['twitter']?>"><i class="bi bi-twitter"></i></a></li>
          <?php }
          if($user_data['instagram']!==''){ ?>
          <li><a href="<?=$user_data['instagram']?>"><i class="bi bi-instagram"></i></a></li>
          <?php }
          if($user_data['linkedin']!==''){ ?>
          <li><a href="<?=$user_data['linkedin']?>"><i class="bi bi-linkedin"></i></a></li>
          <?php } ?>
        </ul>

      </div>

      <p>&copy; Copyrights. All rights reserved.</p>

      <div class="credits">
        <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
      -->
       
      </div>

    </div>
  </div><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
<script>
    $('#hero').backgroundMove({
  movementStrength:'50'
});
</script>
</body>

</html>