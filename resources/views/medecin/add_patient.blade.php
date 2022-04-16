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

    body{
        background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),
        url('images/markus-winkler-LZv4oi-Y8eA-unsplash.jpg'); 
        background-size: cover;
        color: #000; text-shadow: 1px 1px 0 #fff;
      }
      fieldset {
  margin-bottom: 15px;
  padding: 10px;
  border-color:black;
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




      </style>
    
  
    
<!-- Required meta tags -->
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="admin/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
<div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" style="width: 700px; height:30px;" href="index.html"><img src="images/Capture.png" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="images/Capture.png" alt="logo" /></a>
        </div>
        <ul class="nav">
          
          
             
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('add_patient_view')}}">
            <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Ajouter un dossier</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('showpatient')}}">
            <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">les dossiers</span>
            </a>
          </li>
         
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="admin/assets/images/logo-mini.svg" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav w-100">
              <li class="nav-item w-100">
                <form action="{{url('patient_search')}}" class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                  <input type="text" style="  color:white;" name="name" class="form-control" placeholder="chercher un membre">
                </form>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown d-none d-lg-block">
                <a class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" data-bs-toggle="dropdown" aria-expanded="false" href="{{url('add_doctor_view')}}">+ actions</a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="createbuttonDropdown">
                  <h6 class="p-3 mb-0">voulez-vous?</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item" href="{{url('add_patient_view')}}">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-file-outline text-primary"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Ajouter</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item" href="{{url('showpatient')}}">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-web text-info"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Consulter</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item" href="{{url('showpatient')}}">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-layers text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Modifier/Archiver</p>
                    </div>
              </li>
              <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="mdi mdi-email"></i>
                  <span class="count bg-success"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                  <h6 class="p-3 mb-0">Messages</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="admin/assets/images/faces/face4.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Mark send you a message</p>
                      <p class="text-muted mb-0"> 1 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="admin/assets/images/faces/face2.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Cregh send you a message</p>
                      <p class="text-muted mb-0"> 15 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="admin/assets/images/faces/face3.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Profile picture updated</p>
                      <p class="text-muted mb-0"> 18 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">4 new messages</p>
                </div>
              </li>
              <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                  <i class="mdi mdi-bell"></i>
                  <span class="count bg-danger"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                  <h6 class="p-3 mb-0">Notifications</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-calendar text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Event today</p>
                      <p class="text-muted ellipsis mb-0"> Just a reminder that you have an event today </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Settings</p>
                      <p class="text-muted ellipsis mb-0"> Update dashboard </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-link-variant text-warning"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Launch Admin</p>
                      <p class="text-muted ellipsis mb-0"> New admin wow! </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">See all notifications</p>
                </div>
              </li>
              <x-app-layout>
              </x-app-layout>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <!-- partial --> 
        <div class="container-fluid page-body-wrapper" >
        <div class="container" align="center" style="padding:100px;">
        @if(session()->has('message'))

<div class="alert alert-success">


{{session()->get('message')}}
<button type="button" class="close" data-dismiss="alert">X</button>
</div>

@endif
      
        <form action="{{url('upload_patient')}}" method="POST" enctype="multipart/form-data" style="opacity: 0.8; padding: 30px 25px; border radius: 5px; margin: auto;">
                  @csrf
                  <legend> informations administratives </legende>
                  <div class="custom" style=" background-color:rgb(0,0,0,0.5);" >
                      <div style="color:black;" >
                  
             <div style="padding:15px;"> 
                 <label style="color:white;"> Nom-complet: </label>
                 <input type="text" style="width: 250px;" name="name" style="  color:black;" placeholder="Ecrire le nom" required=""> 
             </div>

             <div style="padding:15px;"> 
                 <label style="color:white;">telephone: </label>
                 <input type="number" style="width: 250px;" name="number" style="  color:black;" placeholder="Ecrire votre numero" required=""> 
             </div>

             <div style="padding:15px;"> 
                 <label style="color:white;"> Profession: </label>
                 <select name="profession" style="width: 250px;" style=" color:black; width:200px;" required="">
                     <option>--Secteur:--</option> 
                     <option style="color:black;" value" Industrie">Industrie</option>
                     <option  style="color:black;"value" Tourisme et Loisirs">Tourisme et Loisirs</option>
                     <option  style="color:black;"value" Commerce">Commerce</option>
                     <option style="color:black;" value" Formation">Formation</option>
                     <option style="color:black;" value" psychiatrie">Finance</option>
                     <option  style="color:black;"value" radiologie">Développement durable</option>
                     <option style="color:black;" value" pédiatrie">Agriculture et Agroalimentaire</option>
                     <option  style="color:black;"value" neurologie">Art et services</option>

                 </select> 
             </div>

             <div style="padding:15px;"> 
                 <label style="color:white;"> Nationnalité: </label>
                 <input type="text" style="width: 250px;" name="nationnalité" style="  color:black;" placeholder="Votre nationnalité" required=""> 
             </div>

             <div style="padding:15px;"> 
                 <label style="color:white;"> Date de naissance: </label>
                 <input type="date" style="width: 250px;" name="dateN" style="color:black;" placeholder="Votre date de naissance" required=""> 
             </div>
</div>
           
<div>
             <div style="padding:15px;"> 
                 <label style="color:white;"> Lieu de naissance:</label>
                 <input type="lieuN" style="width: 250px;" name="mail" style="color:black;" placeholder="lieu de naissance" required=""> 
             </div>

             <div style="padding:15px;"> 
                 <label style="color:white;">  Photo: </label>
                 <input type="file" style="width: 250px;" name="file" required="" > 
             </div>

             

             <div style="padding:15px;"> 
                 <label style="color:white;">Adresse:</label>
                 <input type="text" style="width: 250px;" name="adresse" style="color:black;" placeholder="Ecrire votre adresse" required=""> 
             </div>

             <div style="padding:15px;"> 
                 <label style="color:white;"> Email: </label>
                 <input type="email" style="width: 250px;" name="mail" style="color:black;" placeholder="Ecrire votre mail" required=""> 
             </div>

             <div style="padding:15px;"> 
                 <label style="color:white;"> Sexe: </label>
                 <div>
  <input type="radio" id="homme" name="sexe" value="homme"
         checked>
  <label for="homme">Homme</label>
</div>

<div>
  <input type="radio" id="femme" name="sexe" value="femme">
  <label for="femme">Femme</label>
</div>

<div>
  <input type="radio" id="autre" name="sexe" value="autre">
  <label for="autre">Autre</label>
</div>

             </div>

            
</div>

            

</div>
<legend> informations medicales </legende>
                  <div class="custom" style="background-color:rgb(0,0,0,0.5);" >
                      <div style=" color:black;" >
                  
             <div style="padding:15px;"> 
                 <label style="color:white;"> nom-medecin: </label>
                 <input type="text" style="width: 250px;" name="medcin" style="color:black;" placeholder="le nom du medecin" required=""> 
             </div>

             <div style="padding:15px;"> 
                 <label style="color:white;"> groupe-sanguin:</label>
                 <input type="text" style="width: 250px;" name="groupe_sanguin" style="color:black;" placeholder="le groupe-sanguin" required=""> 
             </div>

             <div style="padding:15px;"> 
                 <label style="color:white;">couverture-sociale: </label>
                 <select name="couvertureS" style="width: 250px;" style=" color:black; width:200px;" required="">
                     <option>--Selectionner:--</option> 
                     <option style="color:black;" value" cnss">CNSS</option>
                     <option  style="color:black;"value" cnops">CNOPS</option>
                 </select> 
             </div>

             <div style="padding:15px;"> 
                 <label style="color:white;"> analyse-radios: </label>
                 <input type="file" style="width: 250px;" name="radio"  placeholder="uploader"style="color:black;" required=""> 
             </div>

             <div style="padding:15px;"> 
                 <label style="color:white;"> maladies-chroniques</label>
                 <input type="text" style="width: 250px;" name="maladies" style="color:black;" placeholder="type de maladies" required=""> 
             </div>
</div>
            
<div style="color:black;">
             <div style="padding:15px;"> 
                 <label style="color:white;"> Rapport-état: </label>
                 <textarea type="text"  name="rapport" style="color:black;" required="">rapport de santé-physique</textarea>
             
                </div>

             <div style="padding:15px;"> 
                 <label style="color:white;"> préscription-médicaments: </label>
                 <input type="text" name="medicament" style="width: 250px;" placeholder="nom des medicaments" style=" color:black; width:200px;" required="">
                    
                 </select> 
             </div>

</div>

            

</div>




             <div style="padding:15px;"> 
                 <input type="submit" class="btn btn-success" style="background-color:green;" > 
             </div>

    </form>
     
   
   
   
        </div>

        </div>
    
    
      
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="admin/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src="admin/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="admin/assets/js/off-canvas.js"></script>
    <script src="admin/assets/js/hoverable-collapse.js"></script>
    <script src="admin/assets/js/misc.js"></script>
    <script src="admin/assets/js/settings.js"></script>
    <script src="admin/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="admin/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>
