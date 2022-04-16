

<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
    <style type="text/css"> 
    
    body{
        background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),
        url('images/national-cancer-institute-NFvdKIhxYlU-unsplash.jpg'); 
        background-size: cover;
        color: #000; text-shadow: 1px 1px 0 #fff;
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
        <div class="container-fluid page-body-wrapper" >

          <div   align="center" style="padding-top:100px;">
              <table>
                  <tr style="background-color:white;"> 
                      <th style="padding:10px;"> Patient</th>
                      <th style="padding:10px;"> Email </th>
                      <th style="padding:10px;"> Telephone</th>
                      <th style="padding:10px;"> Medecin</th>
                      <th style="padding:10px;"> Date</th>
                      <th style="padding:10px;"> Etat_visite</th>
                      <th style="padding:10px;"> Statut</th>
                      <th style="padding:10px;"> Approuver</th>
                      <th style="padding:10px;"> Annuler</th>

                  </tr>
                  @foreach($data as $appoint)
                  <tr align="center" style="background-color:rgb(0,0,0,0.2);"> 
                      <th style=" color: white; padding:10px;"> {{$appoint->name}}  </th>
                      <th style="color: white; padding:10px;"> {{$appoint->email}}   </th>
                      <th style="color: white; padding:10px;"> {{$appoint->phone}}  </th>
                      <th style="color: white; padding:10px;"> {{$appoint->doctor}}  </th>
                      <th style="color: white; padding:10px;"> {{$appoint->date}}   </th>
                      <th style="color: white; padding:10px;"> {{$appoint->message}}  </th>
                      <th style="color: white; padding:10px;"> {{$appoint->status}}  </th>
                      <th style="padding:10px;"> 
                      <a class="btn btn-success" href="{{url('approved',$appoint->id)}}">Approuver </a>
                      </th>
                      <th style="padding:10px;"> 
                      <a class="btn btn-danger" href="{{url('canceled',$appoint->id)}}">Annuler</a>
                      </th>

                  </tr>
                  @endforeach
                  
            
            
            </table>
        
        
          </div>

          <div style="padding-top:150px;" >
              <table>
                  <tr style="background-color:blue;"> 
                      <th style="padding:10px;"> dates_occupés</th>
                      </tr> @foreach($dat as $res)
                  <tr align="center" style="background-color:white;"> 
                      <th style="padding:10px;"> {{$res->date}}  </th>
                      </tr>
                  @endforeach
                  
            
            
            </table>
         </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
