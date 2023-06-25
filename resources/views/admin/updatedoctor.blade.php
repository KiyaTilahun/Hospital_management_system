
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
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
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <div class="container text-center pt-5">

            @if(session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong> {{session()->get('message')}}</strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>
</div>



            @endif

                <form action="{{url('editdoctor',$data->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-1 p-2 ">
                        <label class="form-label" for="doctor_name">Name</label>
                        <input style="color: black;"  type="text" id="form3Example1q"  name="name" value="{{$data->name}}" required/>

                    </div>
                    <div class="mb-1 p-2">
                        <label class="form-label" for="phone1">Phone</label>
                        <input  style="color: black;"  type="number" id="phone1"  name="phone" placeholder="phone  number" value="{{$data->phone}}" required/>

                    </div>
                    <div class="mb-1 p-2">
                        <label  class="form-label" for="speciallity">Speciallity</label>
                        <input  style="color: black;"   id="phone1"  name="spec_sele" value="{{$data->speciallity}}" required/>
                       

                    </div>
                  
                    <div class="mb-1 p-2">
                        <label class="form-label" for="roomnum">Room_Number</label>
                        <input style="color: black;" type="text" id="roomnum"  value="{{$data->room}}"  name="room"  required/>

                    </div>
                    <div  class="mb-1 p-2 text-center w-100 text-center d-flex justify-content-center">
                     <div>  <span><label for="old" class="form-label">old image</label></span>
                  <img class="text-center" src="doctorimage/{{$data->image}}" width="100" alt="" id="old"></div>
                    </div>
                    <div class="mb-1 p-2">
                        <label class="form-label" for="docimg">New Image</label>
                       <input type="file" name="file" id="" required> 

                    </div>
                    <div class="mb-1 p-2">
                        <input type="submit" class="btn btn-success"  value="Submit">
                    </div>

                </form>
            </div>
        <!-- partial -->
      
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>