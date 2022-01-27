<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Phaisan Cookhouse  Website</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('Frontend/assets/img/p.png')}}" rel="icon">
  <link href="{{asset('Frontend/assets/img/P.png')}}" rel="P.png">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('Frontend/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('Frontend/assets/vendor/aos/aos.css" rel="stylesheet')}}">
  <link href="{{asset('Frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('Frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('Frontend/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('Frontend/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('Frontend/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('Frontend/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Restaurantly - v3.3.0
  * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  {{-- <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">

      <div class="contact-info d-flex align-items-center">
       
        
      </div>

      <div class="languages d-none d-md-flex align-items-center">
        
      </div>
    </div>
  </div> --}}

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a  href="#hero">Phaisan Cookhouse  Website</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#menu">Menu</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a href="{{route('login')}}" class="book-a-table-btn scrollto d-none d-lg-flex">สมัครสมาชิก</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <script src="{{asset('Frontend/assets/js/main.js')}}"></script>
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1><span>เว็บไซต์ร้านครัวไพศาล</span></h1>
          <h2>Phaisan Cookhouse  Website</h2>

          <div class="btns">
            <a href="#menu" class="btn-menu animated fadeInUp scrollto">เมนูแนะนำ</a>
          
          </div>
       

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="50">
            <div class="about-img">
              <img src="{{asset('Frontend/assets/img/j6/003.jpg')}}" alt="">
            </div>

                  </div>

      </div>-->
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h1><span>เมนูแนะนำ</span></h1>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-4">
              <div class="box" data-aos="zoom-in" data-aos-delay="200">

              <div class="gallery-item">
                <a href="{{asset('Frontend/assets/img/j6/009.jpg')}}" class="gallery-lightbox" data-gall="gallery-item">
                  <img src="{{asset('Frontend/assets/img/j6/009.jpg')}}" alt="" class="img-fluid">
                </a>
              </div>
            </div>
            
          </div>
     
          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="200">
              <div class="gallery-item">
                <a href="{{asset('Frontend/assets/img/j6/004.jpg')}}" class="gallery-lightbox" data-gall="gallery-item">
                  <img src="{{asset('Frontend/assets/img/j6/004.jpg')}}" alt="" class="img-fluid">
                </a>
              </div>
          </div>
          
        </div>
        <div class="col-lg-4 mt-4 mt-lg-0">
          <div class="box" data-aos="zoom-in" data-aos-delay="200">
            <div class="gallery-item">
              <a href="{{asset('Frontend/assets/img/j6/011.jpg')}}" class="gallery-lightbox" data-gall="gallery-item">
                <img src="{{asset('Frontend/assets/img/j6/011.jpg')}}" alt="" class="img-fluid">
              </a>
            </div>
        </div>
        
      </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Menu Section ======= -->
    <section id="product-content" id="menu" class="menu section-bg">
      <div  class="container" data-aos="fade-up">

        <div class="section-title">
          <p>Menu</p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <a href="/#product-content"><li data-filter="*" class="filter-active">All</li></a>
              @foreach($types as $type)
              <a href="/?type={{ $type->id }}#product-content"><li data-filter=".filter-{{ $type->id }}">{{ $type->name }}</li></a>
              @endforeach
            </ul>
          </div>
        </div>

        <div class="row menu-container">

          @foreach($products as $product)
          <div class="col-lg-6 menu-item filter-{{ $product->typeproduct_at }}">
            <a href="{{asset('admin/images/'.$product->image)}}" class="gallery-lightbox" data-gall="gallery-item">
            <img src="{{asset('admin/images/'.$product->image)}}" height="75px" class="menu-img" alt=""> 
          </a>
            <div class="menu-content">
              <a href="#">{{ $product->name }}</a><span>{{ $product->price }} บาท</span>
            </div>
          </div>
          @endforeach
        </div>

      </div>
    </section><!-- End Menu Section -->

    <!-- ======= Specials Section ======= -->
    <section id="specials" class="specials">
      <div class="container" data-aos="fade-up">

        <div class="section-title text-center">
          <p>อาหารไทย</p>
        </div>
  
        <div class="section-title text-center">
          <h3>ความเป็นมาของอาหารไทย</h3>
        </div>
          
        <section id="why-us" class="why-us">
          <div class="container" data-aos="fade-up">
    
            <div class="row">
                <div class="col-lg-4 col-md-4">
                  <div class="box" data-aos="zoom-in" data-aos-delay="200">
    
                  <div class="gallery-item">
                    <a href="{{asset('Frontend/assets/img/j6/007.jpg')}}" class="gallery-lightbox" data-gall="gallery-item">
                      <img src="{{asset('Frontend/assets/img/j6/007.jpg')}}" alt="" class="img-fluid">
                    </a>
                  </div>
                </div>
                
              </div>
         
              <div class="col-lg-4 mt-4 mt-lg-0">
                <div class="box" data-aos="zoom-in" data-aos-delay="200">
                  <div class="gallery-item">
                    <a href="{{asset('Frontend/assets/img/j6/014.jpg')}}" class="gallery-lightbox" data-gall="gallery-item">
                      <img src="{{asset('Frontend/assets/img/j6/014.jpg')}}" alt="" class="img-fluid">
                    </a>
                  </div>
              </div>
              
            </div>
            <div class="col-lg-4 mt-4 mt-lg-0">
              <div class="box" data-aos="zoom-in" data-aos-delay="200">
                <div class="gallery-item">
                  <a href="{{asset('Frontend/assets/img/j6/025.jpg')}}" class="gallery-lightbox" data-gall="gallery-item">
                    <img src="{{asset('Frontend/assets/img/j6/025.jpg')}}" alt="" class="img-fluid">
                  </a>
                </div>
            </div>
            
          </div>
    
            </div>
    
          </div>
        </section>

            <div class=" text-center">
                <div class="section-title text-center">
                <h4>อาหารไทย เป็นอาหารประจำของชนชาติไทย ที่มีการสั่งสมและถ่ายทอดมาอย่างต่อเนื่องตั้งแต่อดีต 
                  จนเป็นเอกลักษณ์ประจำชาติถือได้ว่าอาหารไทยเป็นวัฒนธรรมประจำชาติที่สำคัญของไทย ขณะที่อาหารพื้นบ้าน หมายถึง 
                  อาหารที่นิยมรับประทานกันเฉพาะท้องถิ่น ซึ่งเป็นอาหารที่ทำขึ้นได้ง่าย โดยอาศัยพืชผักหรือเครื่องประกอบอาหารที่มีอยู่ในท้องถิ่นมีการสืบทอดวิธีปรุงและการรับประทานต่อๆ กันมา
</h4></div>
                  <div class="col-lg-8 details order-2 order-lg-1 text-center">
                   </div>
              
                  </div>
              
                </div>
             

      </div>
    </section>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
  
        </div>
      </div>
    
     

     

      
          
            <div class="container" data-aos="fade-up">
              <div class="row mt-5">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="info-box mb-4">
                      <i class=""></i>
                      <h3>เจ้าของร้านครัวไพศาล</h3>
                      <img src="{{asset('Frontend/assets/img/j6/107.jpg')}}" width="300px" class="testimonial-img" alt="">
      
                     
                      <h3>คุณนกเอี้ยง ไชยวรรณ</h3>
                   
                    </div>
                  </div>

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4></h4>
                <p>47/1 หมู่ 6 ต.ไทรน้อย
                  อ.ไทรน้อย จ.นนทบุรี
                  บ่อทรายไทรน้อย</p>
              </div>

              <div class="open-hours">
                <i class="bi bi-clock"></i>
                <h4>Open Hours:</h4>
                <p>
                 Open every day :<br>
                  07:00 AM - 20:00 PM
                </p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>0869025005</p>
              </div>

            

            </div>

          </div>

          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3871.299200689382!2d100.33118451483327!3d14.000264990187025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTTCsDAwJzAxLjAiTiAxMDDCsDIwJzAwLjEiRQ!5e0!3m2!1sth!2sth!4v1630050634639!5m2!1sth!2sth" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

     

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
  <section id="chefs" class="chefs">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <div class="section-title text-center">
        <h1>ผู้จัดทำ</h1>

       
      </div>

      <div class="row">

        <div class="col-lg-4 col-md-6">
          <div class="member" data-aos="zoom-in" data-aos-delay="100">
            <img src="{{asset('Frontend/assets/img/j6/105.jpg')}}" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>นางสาวเพลินตา  ไชยวรรณ
                </h4>
                <span>Ms. Ploenta  chaiwan
                </span>
              </div>
              <div class="social">
               
                <a href="https://web.facebook.com/profile.php?id=100027417814942" target="_blank"><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
             
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="member" data-aos="zoom-in" data-aos-delay="200">
            <img src="{{asset('Frontend/assets/img/j6/101.jpg')}}" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>นางสาวมนทิราพร  อนุมาศ
                </h4>
                <span>Ms. Monthiraporn  Anumas
                </span>
              </div>
              <div class="social">
               
                <a href="https://web.facebook.com/profile.php?id=100011446845018"target="_blank"><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
           
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="member" data-aos="zoom-in" data-aos-delay="300">
            <img src="{{asset('Frontend/assets/img/j6/104.jpg')}}" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>นายธนศักดิ์  เขจรลาภ
                </h4>
                <span>Mr. Thanasak  Khejornlap
                </span>
              </div>
              <div class="social">
               
                <a href="https://web.facebook.com/profile.php?id=100014927537352s"target="_blank"><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
              
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Chefs Section -->
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Phaisan Cookhouse Websie</h3>
              <p>
                <strong>Phone:</strong> 
                086 902 5005<br>
                
         
              
        
        
          </div>

        

         
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        <strong><span>Phaisan Cookhouse Websie</span></strong>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/restaurantly-restaurant-template/ -->
       
    </div>
  </footer><!-- End Footer -->
{{-- 
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> --}}

  <!-- Vendor JS Files -->
  <script src="{{asset('Frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('Frontend/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('Frontend/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('Frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('Frontend/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('Frontend/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('Frontend/assets/js/main.js')}}"></script>

</body>

</html>