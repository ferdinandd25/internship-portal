<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Internship Portal</title>

<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="{{ asset ('lte/plugins/fontawesome-free/css/all.min.css') }}">
<!-- icheck bootstrap -->
<link rel="stylesheet" href="{{ asset ('lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
<!-- Theme style -->
<link rel="stylesheet" href="{{ asset ('lte/dist/css/adminlte.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/footer.css') }}">

</head>
<body>
<style>
   /* CSS untuk header */
   .navbar {
      background-color: #04212e !important;
   }

   .navbar a {
      color: #000000 !important; /* Warna tautan navigasi di header */
   }

   .navbar h2 {
      color: #FFFFFF !important; /* Warna teks judul di header */
      position: ;
   } 

   .navbar h6 {
      color: #FFFFFF !important; /* Warna teks judul di header */
   }

   /* Add this CSS to your stylesheet */
   .navbar-nav {
      display: flex;
      align-items: center;
   }

   .nav-item {
      margin-right: 60px; /* Adjust the margin as needed */
   }

   /* Set the position of the dropdown to relative */
   .navbar-nav .nav-item.dropdown {
      position: relative;
   }

   /* Position the dropdown menu */
   .navbar-nav .nav-item.dropdown .dropdown-menu {
      position: absolute;
      right: 5;
   }

   .nav-link {
      color: #333; /* Adjust the color as needed */
   }

</style> 
<nav class="navbar navbar-expand-lg navbar-light bg-light">
   <div class="container">
      <h2><img src="{{ asset('img/default/logo-white.svg') }}" height="38" class="footer_logo"></h2>
      <a class="navbar-brand" href="{{ route('login') }}"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
               <!-- Dropdown menu -->
               <li class="nav-item dropdown">
                        <h6 class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Partnership
                        </h6>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="http://unprimdn.ac.id/">Universitas Prima Indonesia</a>
                        <a class="dropdown-item" href="https://binus.ac.id/">Universitas Bina Nusantara</a>
                  </div>
               </li>
               <!-- End of dropdown menu -->
            </ul>
      </div>
   </div>
</nav>
<!-- End of header section -->
@yield('content1')
<!-- Footer section -->
<footer>
   <div class="footer_wrapper">
   <div class="footer_container">
      <div class="footer_content-top">
         <div class="container clearfix">
         <img src="{{ asset('img/default/logo-white.svg') }}" height="38" class="footer_logo">
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
            <div class="float-right d-none d-sm-inline-block">
               <a href="https://www.facebook.com/di.CBN/" target="_blank" rel="noopener noreferrer" title="CBN Facebook" style="font-size: 20px; margin-right: 20px;">
                  <span class="ion-social-facebook"></span>
               <a href="https://www.instagram.com/di_cbn/" target="_blank" rel="noopener noreferrer" title="CBN Instagram" style=" font-size: 20px; margin-right: 20px;">
                  <span class="ion-social-instagram-outline"></span></a>
               <a href="https://www.youtube.com/channel/UC1XXn3GqPIqpBPPLMNLsPTg" target="_blank" rel="noopener noreferrer" title="CBN Youtube" style="font-size: 20px; margin-right: 20px;">
                  <span class="ion-social-youtube"></span></a>
               {{-- di<b>CBN</b>  --}}
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


<!-- Bootstrap 4 -->
<script src="{{ asset ('lte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Popper.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.4/umd/popper.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="{{ asset ('lte/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

</body>
</html>
