
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
    
        <div class="table-responsive">
      <table class="table w-100" style="color: white !important">
        <tr>
            <th >Customer Name</th>
            <th >Email</th>
            <th >Phone</th>
            <th >Doctor Name</th>
            <th >Date</th>
            <th >Message</th>
            <th >Status</th>
            <th >Approved</th>
            <th >Success</th>
            <th >Send Mail</th>




        </tr>
        @foreach($data as $app)
        <tr style="background-color: lightskyblue;color:black;">
            <td>{{$app->name}}</td>
            <td>{{$app->email}}</td>
            <td>{{$app->phone}}</td>
            <td>{{$app->doctor}}</td>
            <td>{{$app->date}}</td>
            <td>{{$app->message}}</td>
            <td>{{$app->status}}</td>
            <td><a  href="{{url('approved',$app->id)}}"  role="button" class="btn btn-success ">Approved</a></td>
            <td><a  href="{{url('canceled',$app->id)}}" role="button" class="btn btn-danger ">Canceled</a></td>
            <td><a  href="{{url('emailview',$app->id)}}" role="button" class="btn btn-secondary ">Send Mail</a></td>

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