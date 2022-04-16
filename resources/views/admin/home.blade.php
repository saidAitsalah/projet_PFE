

<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
    <style>
    body{
        background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),
        url('images/istockphoto-1205548238-612x612.jpg'); 
        background-size: cover;
        color: #000; text-shadow: 1px 1px 0 #fff;
        font-family: monospace;
      }
      .heading {
  font-family: "Playfair Display", serif;
  font-size: 5vw;
}

.subheading {
  font-family: "Open Sans", sans-serif;
  font-size: 1em;
  line-height: 1.5;
}



      </style>
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
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper" style=" max-width: 700px;  padding: 30px 25px;">
            <div class="container" align="center" style=" padding-top:100px;">
            <h1 style="color:white;" class="heading">Bienvenue <span class="underline--magical">A Votre</span> Espace Assisstant</h1>

        
       </div>
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
