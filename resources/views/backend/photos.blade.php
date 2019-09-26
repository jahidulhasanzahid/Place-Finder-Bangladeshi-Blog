<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>PF Admin-Photos</title>
  @include('backend.css');
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
        @include('backend.nav')
          <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Post Area Photos</h4>
                      <form class="forms-sample" action="{{ route('photos.store') }}" method="post" enctype="multipart/form-data">
                        @include('backend.messages')
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Photos Title</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Title" name="photo_title" required>
                        </div>
                        <div class="form-group">
                          <label>Select Area</label>
                          <select class="form-control" name="photo_division" required>
                            <option value="">Select Area</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Dhaka">Dhaka</option>
                            <option value="Khulna">Khulna</option>
                            <option value="Chittagong">Chittagong</option>
                            <option value="Mymensingh">Mymensingh</option>
                            <option value="Rangpur">Rangpur</option>
                            <option value="Barishal">Barishal</option>
                            <option value="Sylhet">Sylhet</option>
                            <option value="Rajshahi">Rajshahi</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label>Photos Upload</label>
                          <input type="file" class="form-control" id="exampleInputEmail1" placeholder="Enter Title" name="image" required>
                        </div>
                        <button type="submit" class="btn btn-success mr-2">Submit</button>
                      </form>
                    </div>
                  </div>
                </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018
              <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with
              <i class="mdi mdi-heart text-danger"></i>
            </span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  @include('backend.js');
  
</body>

</html>