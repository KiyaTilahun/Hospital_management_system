
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <base href="\public">
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
      <div class="container text-center pt-5">
      @if(session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong> {{session()->get('message')}}</strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>
</div>



            @endif
      <form action="{{url('sendemail',$data->id)}}" method="POST" >
                    @csrf
                    <div class="mb-1 p-2 ">
                        <label class="form-label" for="greeting">Greeting</label>
                        <input style="color: black;"  type="text" id="greeting"  name="greeting" placeholder="greeting" required/>

                    </div>
                    <div class="mb-1 p-2 ">
                        <label class="form-label" for="body">Body</label>
                        <input style="color: black;"  type="text" id="body"  name="body" placeholder="body" required/>

                    </div>
                    <div class="mb-1 p-2 ">
                        <label class="form-label" for="actiontext">Action Text</label>
                        <input style="color: black;"  type="text" id="actiontext"  name="actiontext" placeholder="actiontext" required/>

                    </div>
                    <div class="mb-1 p-2 ">
                        <label class="form-label" for="actionurl">Action Url</label>
                        <input style="color: black;"  type="text" id="actionurl"  name="actionurl" placeholder="actionurl" required/>

                    </div>
                    <div class="mb-1 p-2 ">
                        <label class="form-label" for="endpart">Name</label>
                        <input style="color: black;"  type="text" id="endpart"  name="endpart" placeholder="endpart" required/>

                    </div>
                    <div class="mb-1 p-2">
                        <input type="submit" class="btn btn-success"  value="Submit">
                    </div>

      </form>
      <!-- page-body-wrapper ends -->
    </div>
      </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>