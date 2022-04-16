

<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
    <style type="text/css"> 
    label{
        display:inline-block;
        width: 200px;
        text-shadow: 2px 2px 5px blue;
        font-weight: bold;

    }
    body{
        background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),
        url('images/national-cancer-institute-NFvdKIhxYlU-unsplash.jpg'); 
        background-size: cover;
        color: #000; text-shadow: 1px 1px 0 #fff;
        font-family: monospace;
      }
    



      </style>
  </head>
  <body >
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
            <div class="container" align="center" style="padding-top:100px;">
            @if(session()->has('message'))

                 <div class="alert alert-success">
      
   
                 {{session()->get('message')}}
       <button type="button" class="close" data-dismiss="alert">
                                                                 X
    </button>

</div>

@endif
         <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data" style="background-color:rgb(0,0,0,0.5); font-family: monospace; opacity: 0.8; padding: 30px 25px; border radius: 5px; margin: auto;">
                  @csrf
             <div style=" color:white; padding:15px;"> 
                 <label> Nom du medecin </label>
                 <input type="text" style="width: 250px; color:black;;" name="name" style="color:black;" placeholder="son nom complet" required=""> 
             </div>

             <div style=" color:white; padding:15px;"> 
                 <label> Numero de telephone: </label>
                 <input type="number" style="width: 250px; color:black;" name="number" style="color:black;" placeholder="son numero " required=""> 
             </div>

             <div style=" color:black;padding:15px;"> 
                 <label style=" color:white;"> Votre specialité </label>
                 <select name="specialité" style="width: 250px; color:black;" style=" color:black; width:200px;" placeholder="sa specialité" required="">
                     <option>--Selectionner--</option> 
                     <option value" chirurgie">La chirurgie</option>
                     <option value" cardiologie">La cardiologie</option>
                     <option value" gynécologie">La gynécologie</option>
                     <option value" allergologie">L’allergologie ou l’immunologie</option>
                     <option value" psychiatrie">La psychiatrie</option>
                     <option value" radiologie">La radiologie</option>
                     <option value" pédiatrie">La pédiatrie</option>
                     <option value" neurologie">La neurologie</option>

                 </select> 
             </div>

             <div style=" color:white; padding:15px;"> 
                 <label > Nationnalité </label>
                 <input type="text" style="width: 250px; color:black;" name="nationnalité" style="color:black;" placeholder="sa nationnalité" required=""> 
             </div>

             <div style=" color:white; padding:15px;"> 
                 <label > Date de naissance </label>
                 <input type="date" style="width: 250px; color:black;" name="dateN" style="color:black;" placeholder="Sa date de naissance" required=""> 
             </div>

             <div style=" color:white; padding:15px;"> 
                 <label >Adresse </label>
                 <input type="text" style="width: 250px; color:black;" name="adresse" style="color:black;" placeholder="son adresse" required=""> 
             </div>

             <div style=" color:white; padding:15px;"> 
                 <label > Email </label>
                 <input type="email" style="width: 250px; color:black;" name="mail" style="color:black;" placeholder="son adresse mail" required=""> 
             </div>

             <div style="color:white; padding:15px;"> 
                 <label >  Photo </label>
                 <input type="file" style="width: 250px;" name="file" required="" > 
             </div>

             <div style="padding:15px;"> 
                 <input type="submit" class="btn btn-success" style="background-color:green;" > 
             </div>



         </form>

       </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
