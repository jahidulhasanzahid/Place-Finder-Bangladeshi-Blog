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
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">All of Post</h4>
                  
                  <div class="table-responsive">
                    @include('backend.messages')
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Division</th>
                          <th>Area</th>
                          <th>Title</th>
                          <th>Description</th>
                          <th>Image</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      @foreach ($information_all as $all_information)
                      <tbody>
                        <tr>
                          <td>
                            {{ $all_information->division }}
                          </td>
                          <td>
                            {{ $all_information->area }}
                          </td>
                          <td>
                            {{ $all_information->title }}
                          </td>
                          <td>
                            {{ $all_information->description }}
                          </td>
                          <td>
                            <img src="{!! asset('images/informations/'.$all_information->image) !!}" alt="{{ $all_information->title }}">
                          </td>
                          <td>
                              <a href="{{ route('information.edit', $all_information->id) }}" class="btn btn-success">Edit</a>
                              <a href="#deleteModal{{$all_information->id}}" data-toggle="modal" class="btn btn-danger">Delete</a>
                          </td>
                        </tr>
                      </tbody>
                      <!-- Delete Modal -->
                  <div class="modal fade" id="deleteModal{{$all_information->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Are sure to delete?</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="{!! route('information.delete', $all_information->id) !!}"  method="post">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger">Permanent Delete</button>
                          </form>

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        </div>
                      </div>
                    </div>
                  </div>
                      @endforeach
                    </table>
                  </div>

                  

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