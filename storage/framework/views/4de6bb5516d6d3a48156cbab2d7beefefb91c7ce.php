<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>PF Admin-Photos</title>
  <?php echo $__env->make('backend.css', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php echo $__env->make('backend.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Area Photos</h4>
                  <div class="table-responsive">
                    <?php echo $__env->make('backend.messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Photos Title</th>
                          <th>Photos Area</th>
                          <th>Photos</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <?php $__currentLoopData = $allphotos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $allphoto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tbody>
                        <tr>
                          <td>
                            <?php echo e($allphoto->photo_title); ?>

                          </td>
                          <td>
                            <?php echo e($allphoto->photo_division); ?>

                          </td>
                          <td>
                            <img src="<?php echo asset('images/allphotos/'.$allphoto->image); ?>" alt="<?php echo e($allphoto->photo_title); ?>">
                          </td>
                          <td>
                              <a href="<?php echo e(route('photo.edit', $allphoto->id)); ?>" class="btn btn-success">Edit</a>
                              <a href="#deleteModal<?php echo e($allphoto->id); ?>" data-toggle="modal" class="btn btn-danger">Delete</a>
                          </td>
                        </tr>
                      </tbody>
                       <!-- Delete Modal -->
                  <div class="modal fade" id="deleteModal<?php echo e($allphoto->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Are sure to delete?</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        
                        <div class="modal-body">
                          <form action="<?php echo route('photo.delete', $allphoto->id); ?>"  method="post">
                            <?php echo e(csrf_field()); ?>

                            <button type="submit" class="btn btn-danger">Permanent Delete</button>
                          </form>

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        </div>
                      </div>
                    </div>
                  </div>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

  <?php echo $__env->make('backend.js', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;
</body>

</html>