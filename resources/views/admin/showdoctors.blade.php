
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
   @include('admin.css')
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
      <div class=" container-fluid page-body-wrapper">
    
        <div class="d-flex align-items-start justify-content-center w-100">
      <table class=" table w-50  " style="color: white !important">
        <tr>
            <th scope="col">Doctor Name</th>
            <th scope="col">Phone</th>
            <th scope="col">Speciallity</th>
            <th scope="col">RoomNo</th>
            <th scope="col">Image</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>

        </tr>
        @foreach($docdata as $app)
        <tr style="background-color: lightskyblue;color:black;">
            <td>{{$app->name}}</td>
            <td>{{$app->phone}}</td>
            <td>{{$app->speciallity}}</td>
            <td>{{$app->room}}</td>
            <td><img src="doctorimage/{{$app->image}}" style="border-radius:0px;"  width="100"></td>
            
            <td><a  href="{{url('updatedoctor',$app->id)}}"  role="button" class="btn btn-primary ">Edit</a></td>
            <td><a  onclick="return confirm('are you sure to delete doctor')" href="{{url('deletedoctor',$app->id)}}" role="button" class="btn btn-danger ">Delete</a></td>
        </tr>
        @endforeach
      </table>
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>