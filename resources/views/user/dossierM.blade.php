<!DOCTYPE html>
<html lang="en">
<head>
<base href="/public">
  <style type="text/css"> 
    label{
        display:inline-block;
        width: 200px;
        text-shadow: 2px 2px 5px blue;
        font-weight: bold;
        border-radius: 10px;
    

    }
    input{
     
      padding:10px;
      
    }

    body{
        background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),
        url('images/martha-dominguez-de-gouveia-g0PTp89dumc-unsplash.jpg'); 
        background-size: cover;
        color: #000; text-shadow: 1px 1px 0 #fff;
      }
     
      fieldset {
  margin-bottom: 15px;
  padding: 10px;
  border-color:black;
}
img {
    height:"200";
     width:"300";
  border: 2px solid blue;
  float: right;
}
 
legend {
  padding: 0px 3px;
  font-weight: bold;
  font-variant: small-caps;
  background-color:#ddd;
  color:black;
  font-family: monospace;
  
}
.name{
    position:relative;
}
.number{
    position:relative;
}
.custom{
    display:flex;
    justify-content:space-between;
}
.vertical { 
border-left: 4px solid grey; 
height: 600px; 
display: inline-block;
} 
textarea{
    height:"900";
     width:"900";

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
  <div  class="back-to-top"></div>

  <header>
    <div style="background-color:white;" class="topbar">
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

    <nav  style="background-color:white;" class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">E</span>-Docs</a>

        

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{url('user.home')}}">Acceuil</a>
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
              <a class="nav-link" style=" width: 180px; background-color:#22F8BF;"  href="{{url('myappointement')}}">mes rendez-vous</a>
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
  <div class="container-fluid page-body-wrapper" >
        @foreach($dossier as $out)
        <div class="container" align="center"  style="padding:100px;">
      
                  <legend> informations administratives </legende>
                  <div  style="background-color:rgb(0,0,0,0.5);   display:flex;  padding:15px; "> 
                  <label style="color:white; ">  Photo du patient</label>
                  <img  style="border: 2px solid blue;float: none;"   src="patientimage/{{$out->photo}}"   >       
                  </div>  
                  <div class="custom" style=" background-color:rgb(0,0,0,0.5);" >
                  
                 
                  
                  
                  <div style="color:black;" >
                     
                 
                  
             <div style="padding:15px;"> 
                 <label style="color:white;"> Nom-complet </label>
                 <input type="text" style="width: 250px;" name="name" value="{{$out->nom}}" style="  color:black;" placeholder="Ecrire le nom" required=""> 
             </div>

             <div style="padding:15px;"> 
                 <label style="color:white;">telephone: </label>
                 <input type="number" style="width: 250px;" name="number" value="{{$out->telephone}}" style="  color:black;" placeholder="Ecrire votre numero" required=""> 
             </div>

             <div style="padding:15px;"> 
                 <label style="color:white;"> Profession </label>
                 <select name="profession" style="width: 250px;"  style=" color:black; width:200px;" required="">
                     <option style="color:black;" value="informatique">informatique</option> 
                     <option style="color:black;" value=" Industrie">Industrie</option>
                     <option  style="color:black;"value=" Tourisme et Loisirs">Tourisme et Loisirs</option>
                     <option  style="color:black;"value=" Commerce">Commerce</option>
                     <option style="color:black;" value=" Formation">Formation</option>
                     <option style="color:black;" value=" psychiatrie">Finance</option>
                     <option  style="color:black;"value=" radiologie">Développement durable</option>
                     <option style="color:black;" value=" pédiatrie">Agriculture et Agroalimentaire</option>
                     <option  style="color:black;"value=" neurologie">Art et services</option>

                 </select> 
             </div>

             <div style="padding:15px;"> 
                 <label style="color:white;"> Nationnalité </label>
                 <input type="text" style="width: 250px;" value="{{$out->nationnalité}}" name="nationnalité" style="  color:black;" placeholder="Votre nationnalité" required=""> 
             </div>

             <div style="padding:15px;"> 
                 <label style="color:white;"> Date de naissance </label>
                 <input type="date" style="width: 250px;" value="{{$out->dateNa}}" name="dateN" style="color:black;" placeholder="Votre date de naissance" required=""> 
                </div>
</div>
              
<div>
             <div style="padding:15px;"> 
                 <label style="color:white;"> Lieu de naissance </label>
                 <input type="lieuN" style="width: 250px;" value="{{$out->lieuN}}" name="mail" style="color:black;" placeholder="lieu de naissance" required=""> 
                
                </div>

             <div style="padding:15px;"> 
                 <label style="color:white; width:250px;"> Sexe </label>
                 <label style="color:white; background-color:#00FFC6;"> {{$out->sexe}}</label> 
             </div>

             <div style="padding:15px;"> 
                 <label style="color:white;">Adresse </label>
                 <input type="text" style="width: 250px;" value="{{$out->adresse}}" name="adresse" style="color:black;" placeholder="Ecrire votre adresse" required=""> 
             </div>

             <div style="padding:15px;"> 
                 <label style="color:white;"> Email </label>
                 <input type="email" style="width: 250px;" name="mail" value="{{$out->email}}" style="color:black;" placeholder="Ecrire votre mail" required=""> 
             </div>


             
             
</div>
</div>

<legend> informations medicales </legende>
               

                  <div  style="  padding:15px; background-color:rgb(0,0,0,0.5); " >
                      <div  style="  color:black;" >
                     
                      <div style="padding:15px;"> 
                 <label style="color:white; margin: 3px;"> nom-medecin </label>
                 <input type="text" style="width: 250px;" value="{{$out->nomMedecin}}" name="medcin" style="color:black;" placeholder="le nom du medecin" required=""> 
             </div>

             <div style="padding:15px;"> 
                 <label style="color:white;"> groupe-sanguin</label>
                 <input type="text" style="width: 250px;" value="{{$out->groupeSanguin}}" name="groupe_sanguin" style="color:black;" placeholder="le groupe-sanguin" required=""> 
             </div>
            
             <div style="padding:15px;"> 
                 <label style="color:white;">couverture-sociale </label>
                 <label style="color:white; background-color:#00FFC6;"> {{$out->couvS}}</label> 
                 
             </div>
            
             </div>
              
              <div>
           

            

             <div style="padding:15px;"> 
                 <label style="color:white; width: 200px;"> préscription-médicaments </label>
                 <input type="text" name="medicament" value="{{$out->medicament}}" style="width: 250px;" placeholder="nom des medicaments" style=" color:black; width:200px;" required="">
                    
                 </select> 
             </div>
             <div style="padding:15px;"> 
                 <label style="color:white;"> maladies-chroniques</label>
                 <input type="text" style="width: 250px;" value="{{$out->maladie}}" name="maladies" style="color:black;" placeholder="type de maladies" required=""> 
             </div>
             <div style="padding:15px;"> 
                 <label style="color:white;"> Rapport-état </label>
                 <textarea type="text"  name="rapport" value="{{$out->rapport}}" style="color:black;" required="">rapport de santé-physique</textarea>
             
                </div>
                <div style="background-color:rgb(0,0,0,0.5);   "> 
                 <label style="padding:15px; color:white;"> analyse-radios </label>
                
                 <img  style="border: 2px solid blue; height:100px; width:130px; float: right;"   src="analyseimage/{{$out->analyse}}"   > 
                </div>
</div>

   @endforeach         

</div>


</div>
</div>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>