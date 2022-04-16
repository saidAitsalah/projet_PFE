<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>One Health - Medical Center HTML5 Template</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> +212.6.22.86.22.60</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> e-docs@contact.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-dribbble"></span></a>
              <a href="#"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
      <img src="{{asset('/images/e.jpg')}}" alt="" style="width:130px; border-radius: 50%; ">
    
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{url('home')}}">Acceuil</a>
            </li>
            @if (Route::has('login'))
            @auth
            <li class="nav-item">
              <a class="nav-link" href="#page-vous">Programmer/rendez-vous</a>
            </li>
            @endauth
            @endif
            <li class="nav-item">
              <a class="nav-link" href="#page-doctor">Doctors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#page-propos">A propos de nous</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#page-footer">Contact</a>
            </li>
            @if (Route::has('login'))
            @auth

            <li class="nav-item">
              <a class="nav-link" style="margin: 3px; width: 160px; background-color:#22F8BF;"  href="{{url('myappointement')}}">Mes rendez-vous</a>
            </li>
 
            <li class="nav-item">
              <a class="nav-link" style=" width: 120px; background-color:#22F8BF;"  href="{{url('monDossier')}}">Mon dossier</a>
            </li>


            <x-app-layout>
            </x-app-layout>
            @else
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" style=" width: 120px;" href="{{route('login')}}">S'authentifier </a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" style=" width: 90px;" href="{{route('register')}}">S'inscrire</a>
            </li>
            @endauth
            @endif

          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>
  @if(session()->has('message'))

<div class="alert alert-success">
      
   
       {{session()->get('message')}}
       <button type="button" class="close" data-dismiss="alert">
                                                                 X
    </button>

</div>

@endif

  <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="subhead">prenons soin de notre santé</span>
        <h1 class="display-4">E-DOCS</h1>
        @if (Route::has('login'))
            @auth
        <a href="{{url('monDossier')}}" class="btn btn-primary">Consultant notre dossier médicale en toute confidentialité</a>
        @else
        <a href="#" class="btn btn-primary">Consultant notre dossier médicale en toute confidentialité</a>
        @endauth
         @endif
      </div>
    </div>
  </div>


  <div class="bg-light">
    <div class="page-section py-3 mt-md-n5 custom-index">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-secondary text-white">
                <span class="mai-chatbubbles-outline"></span>
              </div>
              <p>efficacité</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-primary text-white">
                <span class="mai-shield-checkmark"></span>
              </div>
              <p>Sécurité</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-accent text-white">
                <span class="mai-basket"></span>
              </div>
              <p>Confidentialité</p>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .page-section -->

    <div class="page-section pb-0" id="page-propos">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp">
          <strong>Bienvenue à notre platforme <br> E-Docs</strong>
            <p class="text-grey mb-4">Le dossier du patient assure la traçabilité de toutes les actions effectuées. Il est un outil de communication, de coordination et d'information entre les acteurs de soins et avec les patients. Et permet de suivre et de comprendre le parcours hospitalier du patient.</p>
            <a href="about.html" class="btn btn-primary">Learn More</a>
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1">
              <img src="../assets/img/bg-doctor.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .bg-light -->
  </div> <!-- .bg-light -->

  <div class="page-section" id="page-doctor">
    <div class="container">
      <h1 style="font-size:3vw; font-family:monospace;" class="text-center mb-5 wow fadeInUp">Nos Medecins</h1>

      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
        @foreach($doctor as $doctors)
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img height="300px"src="doctorimage/{{$doctors->image}}" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">{{$doctors->name}}</p>
              
              <span class="text-sm text-grey">{{$doctors->speciality}}</span>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>

  <!-- .page-section -->
  @if (Route::has('login'))
            @auth
  <div class="page-section" id="page-vous" >
    <div class="container">
    <h1 style="font-size:3vw; font-family:monospace;" class="text-center wow fadeInUp">Prendre un rendez-vous</h1> 

      <form class="main-form" action="{{url('appointement')}}" method="POST">
          @csrf
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" name="name" class="form-control" placeholder="nom complet">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text"  name="email" class="form-control" placeholder="adresse mail">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="date"  name="date" class="form-control">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="doctor" id="departement" class="custom-select">
            <option value=""> --selectionnez votre medecin--</option>
                @foreach($doctor as $doctor)
              <option value="{{$doctor->name}}"> {{$doctor->name}} : {{$doctor->specialité}}</option>
               @endforeach
            </select>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text"  name="number" class="form-control" placeholder="numero de telephone">
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="message" class="form-control" rows="6" placeholder="état de visite"></textarea>
          </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3 wow zoomIn">envoyer demande</button>
      </form>
    </div>
  </div> <!-- .page-section -->
  @endauth
         @endif
  <!-- .banner-home -->

  <footer class="page-footer" id="page-footer">
    <div class="container">
      <div class="row px-md-3">
        <div  class="col-sm-6 col-lg-3 py-3">
          <h5>Services</h5>
          <ul class="footer-menu">
            <li><a href="#">Consulter vos informations de santé</a></li>
            <li><a href="#">Visualiser les actions réalisées sur votre DMP</a></li>
            <li><a href="#">Prenez des rendez vous avec votre medecin préféré</a></li>
            <li><a href="#">Proteger vos données</a></li>
          </ul>
        </div >
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>More</h5>
          <ul class="footer-menu">
            <li><a href="#">Terms & Condition</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Advertise</a></li>
            <li><a href="#">Join as Doctors</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Contact</h5>
          <p class="footer-link mt-2">115 hay alaouin Temara, Maroc</p>
          <a href="#" class="footer-link">0622862260</a>
          <a href="#" class="footer-link">E-doc@contact.com</a>

          <h5 class="mt-3">Social Media</h5>
          <div class="footer-sosmed mt-3">
            <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
          </div>
        </div>
      </div>

      <hr>

      <p id="copyright">Copyright &copy; 2020 <a href="https://macodeid.com/" target="_blank">MACode ID</a>. All right reserved</p>
    </div>
  </footer>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>