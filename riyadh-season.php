<?php
 session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Riyadh Season</title>
<!-- 

Highway Template

https://templatemo.com/tm-520-highway

-->
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="../css/fontAwesome.css">
        <link rel="stylesheet" href="../css/light-box.css">
        <link rel="stylesheet" href="../css/templatemo-style.css">

        <link href="https://fonts.googleapis.com/css?family=Kanit:100,200,300,400,500,600,700,800,900" rel="stylesheet">

        <script src="../js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

<body>

    <nav>
        <div class="logo">
            <a href="https://riyadhseason.gea.gov.sa/ar">Riyadh<em> Season</em></a>
        </div>
      <div class="menu-icon">
        <span></span>
      </div>
    </nav>

    <div id="video-container">
        <div class="video-overlay"></div>
        <div class="video-content">
            <div class="inner">
              <h1><em>موسم الرياض</em></h1>
              <p>تخيل إذا كل شي حولك تعرفه تغيّر. تخيل عالمك مسرح فيه أكثر من 100 عرض وعرض. تخيل أغرب المعارض والفنون والحفلات من حول العالم. تخيل أصالة تراثنا وتاريخنا بعيون مستقبلنا. تخيل وبالغ بخيالك. الوعد الرياض</p>
              <p>من 11 أكتوبر إلى 15 ديسمبر</p>
                <div class="scroll-icon">
                    <a class="scrollTo" data-scrollTo="masonry" href="#"><img src="../img/scroll-icon.png" alt=""></a>
                </div>    
            </div>
        </div>
        <video autoplay="" loop="" muted>
        	<source src="../home/video.mp4" type="video/mp4" />
        </video>
    </div>

 <!---->
    <div class="masonry-portfolio" id="masonry">
        <div class="container-fluid">
            <div class="masonry">
                <div class="item first-item col-md-4 col-sm-6 col-xs-12">
                  <a href="../home/wonderlandd3.png" data-lightbox="image-1" onclick="fun1()"><div class="thumb">
                      <div class="hover-effect">
                          <div class="hover-content">
                              <h1>ونتر وندر لاند </h1>
                              <p>من الأجواء اللندنية إلى أجواء الرياض الشتوية</p>
                              <a href="single-post.php">المزيد من المعلومات</a>
                          </div>
                      </div>
                    
                      <div class="image">
                          <img src="../home/winter.jpg">
                      </div>
                  </div></a>
                </div>
                 <!---->
                <div class="item col-md-4 col-sm-6 col-xs-12">
                  <a href="../home/boulevard2.png" data-lightbox="image-1"><div class="thumb">
                      <div class="hover-effect">
                          <div class="hover-content">
                              <h1> <em>البوليفارد</em></h1>
                              <p>و تمتع بإطلالة على النافورة الراقصة</p>
                              <a href="single-post1.php">المزيد من المعلومات</a>
                          </div>
                      </div>
                      <div class="image">
                          <img src="../home/boulevard.jpg">
                      </div>
                  </div></a>
                </div>
                 <!---->
                <div class="item col-md-4 col-sm-6 col-xs-12">
                  <a href="../home/nabdh2.jpg" data-lightbox="image-1"><div class="thumb">
                      <div class="hover-effect">
                          <div class="hover-content">
                              <h1><em>نبض الرياض</em></h1>
                              <p>وعيشوا كل ليلة تجربة فلكلورية لكل منطقة من مناطق المملكة</p>
                               <a href="single-post2.php">المزيد من المعلومات</a>
                          </div>
                      </div>
                      <div class="image">
                          <img src="../home/nabdh.jpg">
                      </div>
                  </div></a>
                </div>
                 <!---->
                <div class="item col-md-4 col-sm-6 col-xs-12">
                  <a href="../home/safari2.jpg" data-lightbox="image-1"><div class="thumb">
                      <div class="hover-effect">
                          <div class="hover-content">
                              <h1> <em>سفاري الرياض</em></h1>
                              <p>بتشوف أندر الحيوانات وأجملها</p>
                              <a href="single-post3.php">المزيد من المعلومات</a>
                          </div>
                      </div>
                      <div class="image">
                          <img src="../home/safarii.jpg">
                      </div>
                  </div></a>
                </div>
                 <!---->
                <div class="item col-md-4 col-sm-6 col-xs-12">
                  <a href="../home/nightGarden2.jpg" data-lightbox="image-1"><div class="thumb">
                      <div class="hover-effect">
                          <div class="hover-content">
                              <h1><em>الحدائق الليلة</em></h1>
                              <p>أجواء خيالية راقية تمتع كل حواسك</p>
                              <a href="single-post4.php">المزيد من المعلومات</a>
                          </div>
                      </div>
                      <div class="image">
                          <img src="../home/nightGarden.jpg">
                      </div>
                  </div></a>
                </div>
                 <!---->
                <div class="item col-md-4 col-sm-6 col-xs-12">
                  <a href="../home/magicForest2.jpg" data-lightbox="image-1"><div class="thumb">
                      <div class="hover-effect">
                          <div class="hover-content">
                              <h1> <em>الحديقة الساحرة</em></h1>
                              <p>بتتحدى قدراتك بألعابها الحماسية</p>
                              <a href="single-post5.php">المزيد من المعلومات</a>
                          </div>
                      </div>
                      <div class="image">
                          <img src="../home/magicForest.jpg">
                      </div>
                  </div></a>
                </div>
                <!---->
                <div class="item col-md-4 col-sm-6 col-xs-12">
                  <a href="../home/fireworks2.jpg" data-lightbox="image-1"><div class="thumb">
                      <div class="hover-effect">
                          <div class="hover-content">
                              <h1><em>الألعاب النارية- ونتر وندر لاند</em></h1>
                              <p>سماء الرياض بتتزين بكل الألوان</p>
                              <a href="#">المزيد من المعلومات</a>
                          </div>
                      </div>
                      <div class="image">
                          <img src="../home/fireworks.png">
                      </div>
                  </div></a>
                </div>
                <div class="item col-md-4 col-sm-6 col-xs-12">
                  <a href="../home/luna2.jpg" data-lightbox="image-1"><div class="thumb">
                      <div class="hover-effect">
                          <div class="hover-content">
                              <h1> <em>لونا سينما </em></h1>
                              <p>شاشة كبيرة و بجلسات مفتوحة</p>
                              <a href="#">المزيد من المعلومات</a>
                          </div>
                      </div>
                      <div class="image">
                          <img src="../home/luna.jpg">
                      </div>
                  </div></a>
                </div>
                <div class="item col-md-4 col-sm-6 col-xs-12">
                  <a href="../home/egypt2.jpg" data-lightbox="image-1"><div class="thumb">
                      <div class="hover-effect">
                          <div class="hover-content">
                             <h1> <em>ليالي المحروسة  </em></h1> 
                          <p>عيش أجواء مصرية من الزمن الجميل</p>
                          <a href="#">المزيد من المعلومات</a>
                          </div>
                      </div>
                      <div class="image">
                          <img src="../home/egypt.png">
                      </div>
                  </div></a>
                </div>
                
            </div>
        </div>
    </div>

    <footer>
        <div class="container-fluid">
            <div class="col-md-12">
                <p> Web Application Programming Project</p>
            </div>
        </div>
    </footer>

    <section class="overlay-menu">
      <div class="container">
        <div class="row">
          <div class="main-menu">
              <ul>
              <?php if( isset($_SESSION['newSession']) && !empty($_SESSION['newSession']) )
                {
                ?>
                  <li>
                      <a href="../logout-page.php">Logout</a>
                  </li>

                <?php }else{ ?>
                  <li>
                      <a href="../login_page.php">Login</a>
                  </li>
           
            
                  <li>
                      <a href="../signup-page.php">Sign up</a>
                  </li>

                <?php } ?>
                  

                  
              </ul>
             
          </div>
        </div>
      </div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="../js/vendor/bootstrap.min.js"></script>
    
    <script src="../js/plugins.js"></script>
    <script src="../js/main.js"></script>

</body>
</html>