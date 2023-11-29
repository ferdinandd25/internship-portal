<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-aZ5t3cZj+gFZO+PJ7/7zOXpMQB/lZQI8AHL9PEJ7/b9IbbV3NoBhgZ2gRQ=="
    crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha2/dist/js/bootstrap.min.js">
    <link rel="stylesheet" href="https://code.jquery.com/jquery-3.6.0.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha2/dist/js/bootstrap.min.js">
<!-- Font Awesome -->
<link rel="stylesheet" href="{{ asset ('lte/plugins/fontawesome-free/css/all.min.css') }}">
<!-- icheck bootstrap -->
<link rel="stylesheet" href="{{ asset ('lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}"><!-- Theme style -->
<link rel="stylesheet" href="{{ asset ('lte/dist/css/adminlte.min.css') }}">
    



    <title>Dashboard</title>
      <!-- Custom styles -->
    <style>
      
      header {
         background-color: #04212e;
         position: relative;
        width: 100%; /* Lebarnya 100% agar tetap penuh */
        z-index: 30px; /* Change this to the desired color */
      }
      .nav-link {
      color: #ffffff !important; /* Ganti dengan warna teks yang Anda inginkan, dalam format kode warna atau nama warna */ 
      margin-right: 30px; /* Atur jarak kanan sesuai keinginan Anda */
      }

      .content {
      padding: 50px;
      }

      .content h2 {
      font-family: "Verdana", sans-serif;
      color: #ffffff;
      font-size: 60px;
      }
      
      footer {
      background-color: #04212e; /* Change this to the desired color */
      width: 100%; /* Lebarnya 100% agar tetap penuh */
      color: #fdfdfd;
      }
   </style>

</head>
<body>

<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom nav">

   <a href="/" class="d-flex align-items-center mb3 mb-md-0 me-md-auto text-white text-decoration-none" style="font-size: 30px;"><div class="footer_logo" style="height: 38px; width: 100px; background: url('{{ asset('img/default/logo-white.svg') }}') no-repeat center center; background-size: cover;"></div>

      <svg class="bi me-2" width="150" height="32" ><use xlink:href="#bootstrap"></use></svg>
      <span class="fs-4"></span>
   </a>

   <ul class="nav nav-pills">
      <li class="nav-item"><a href="{{ route('admin.dashboard') }}" class="nav-link" aria-current="page">Home</a></li>
      <li class="nav-item"><a href="{{ route('admin.intern') }}" class="nav-link">Intern Project</a></li>
      <li class="nav-item"><a href="{{ route('admin.administration') }}" class="nav-link">Adminitration</a></li>
      <li class="nav-item"><a href="{{ route('admin.activity') }}" class="nav-link">My Activity</a></li>
      <li class="nav-item"><a href="{{ route('admin.preferences') }}" class="nav-link">Preferences</a></li> 
      <li class="nav-item">
         <a href="{{ route('logout') }}" class="nav-link">
               <i class="fas fa-sign-out-alt"></i> Logout
         </a>
      </li>
   </ul>
</header>

@yield('content')
<!-- Footer section -->

<footer>
   <div class="footer_wrapper">
   <div class="footer_container">
      <div class="footer_content-top">
         <div class="container clearfix">
         <div class="footer_logo" style="height: 38px; width: 100px; background: url('{{ asset('img/default/logo-white.svg') }}') no-repeat center center; background-size: cover;"></div>
         <div class="footer_addr clearfix">
            <p>
               Cyber 2 Tower 33rd Floor<br> 
               Jl. HR Rasuna Said X5 No. 13<br>
               Jakarta Selatan, 12950<br>
               Indonesia
            </p>

         </div>
         <!-- /.footer_addr -->
         <div class="footer_callcenter">
            <p>
               Tel. <a href="tel:+6282162148822" title="CBN Phone">+62 21 62148822</a>
            </p>
         </div>

         <ul class="footer_menu clearfix">
            <li>
               <a href="./personal/fiber/cbn-fiber.html" title="CBN Personal Services">SERVICES</a>
            </li>
            <li>
               <a href="https://webmail.cbn.id/" target="_blank" rel="noopener noreferrer" title="CBN Webmail">WEBMAIL</a>
            </li>
            <li>
               <a href="./news/" title="CBN News">NEWS</a>
            </li>
         </ul>
         
         </div>
         <!-- /.container -->
      </div>
      <!-- /.footer_content-top -->
      <div class="footer_content-bottom">
         <div class="container">
         <div class="row">
            <div class="col-xs-12 col-md-4">
               <p class="footer_meta-copy">Copyright © 2023. Cyberindo Aditama. All Right Reserved.</p>
            </div>
            <!-- /.col -->
            <div class="col-xs-12 col-md-4">
               <ul class="footer_meta-link">
               <li>
                  <a href="./legal-disclaimer.html">Legal Disclaimer |</a>
               </li>
               <li>
                  <a href="./sitemap.html">Sitemap</a>
               </li>
               </ul>
            </div>
            <!-- /.col -->
            <div class="col-xs-12 col-md-4">
               <ul class="footer_meta-medsos">
               <li>
                  <a href="https://www.facebook.com/di.CBN/" target="_blank" rel="noopener noreferrer" title="CBN Facebook">
                     <span class="ion-social-facebook"></span></a>
               </li>
               <li>
                  <a href="https://twitter.com/di_cbn?lang=en" target="_blank" rel="noopener noreferrer" title="CBN Twitter">
                     <span class="ion-social-twitter"></span></a>
               </li>
               <li>
                  <a href="https://www.instagram.com/di_cbn/" target="_blank" rel="noopener noreferrer" title="CBN Instagram">
                     <span class="ion-social-instagram-outline"></span></a>
               </li>
               <li>
                  <a href="https://www.youtube.com/channel/UC1XXn3GqPIqpBPPLMNLsPTg" target="_blank" rel="noopener noreferrer" title="CBN Youtube">
                     <span class="ion-social-youtube"></span></a>
               </li>
               <li class="footer_meta-list footer_meta-list--yellow">
                  <a href="https://play.google.com/store/apps/details?id=cbn.dicbn" target="_blank" rel="noopener noreferrer" title="diCBN Google Play">
                     <span class="ion-social-android"></span></a>
               </li>
               <li class="footer_meta-list footer_meta-list--yellow">
                  <a href="https://itunes.apple.com/us/app/dicbn/id1200891990?mt=8" target="_blank" rel="noopener noreferrer" title="diCBN Apple Store">
                     <span class="ion-social-apple"></span></a>
               </li>
               </ul>
            </div>
            <!-- /.col -->
         </div>
         <!-- /.row -->
         </div>
         <!-- /.container -->
      </div>
      <!-- /.footer_content-bottom -->
   </div>
   <!-- /.footer_container -->
   </div>
   <!-- /.footer_wrapper -->
</footer>
<!-- End of footer section -->

    <!-- Tambahkan link ke Bootstrap JavaScript jika diperlukan -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha2/dist/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1/dist/js/bootstrap.min.js"></script>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>
</html>
