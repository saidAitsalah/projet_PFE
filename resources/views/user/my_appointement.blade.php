<!DOCTYPE html>
<html lang="en">
<head>
  <style>
body{
        background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),
        url('images/istockphoto-1141330747-612x612.jpg'); 
        background-size: cover;
        color: #000; text-shadow: 1px 1px 0 #fff;
      }
      </style>
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

  <header style="background-color:white;">
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

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm" style="background-color:white;">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">E</span>-Docs</a>

        

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{url('home')}}">Acceuil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">à propos de nous</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="doctors.html">Doctors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.html">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
            @if (Route::has('login'))
            @auth

            <li class="nav-item">
              <a class="nav-link" style="background-color:#22F8BF;"  href="{{url('myappointement')}}">Mon rendez-vous</a>
            </li>


            <li class="nav-item">
              <a class="nav-link" style="width: 150px; background-color:white;"  href="{{url('monDossier')}}">Mon dossier</a>
            </li>

            <x-app-layout>
            </x-app-layout>
            @else
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Login </a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">Register</a>
            </li>
            @endauth
            @endif

          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>
  <div> 

  <table align="center" style="padding:70px;">
      <tr style="background-color:#E5E7E9 ;">
          <th style="padding:10px; font-size:20px; colore:#154360;">Medecin </th>
          <th style="padding:10px; font-size:20px; colore:#154360;"> Date</th>
          <th style="padding:10px; font-size:20px; colore:#154360;"> Etat_visite</th>
          <th style="padding:10px; font-size:20px; colore:#154360;"> Statut </th>
          <th style="padding:10px; font-size:20px; colore:#154360;"> Annuler le rendez-vous </th>
    
      </tr>
      
      @foreach ($appoint as $appoint)

      <tr style="background-color:#E5E7E9 ; " align="center">
          <td style="padding:10px;  colore:#154360;">{{$appoint->doctor}} </td>
          <td style="padding:10px;  colore:#154360;">{{$appoint->date}} </td>
          <td style="padding:10px;  colore:#154360;"> {{$appoint->message}}</td>
          <td style="padding:10px;  colore:#154360;">{{$appoint->status}} </td>
          <td ><a class="bt btn-danger" onclick="return confirm('vous etes sure de le supprimer')"  href="{{url('cancel_appoint',$appoint->id)}}"> Annuler</a> </td>
    
      </tr>

       @endforeach
      





   </table>








  </div>


<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>