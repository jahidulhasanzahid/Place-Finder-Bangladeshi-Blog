<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="<?php echo e(route('welcome')); ?>">
          <img src="<?php echo e(asset('images/logo.PNG')); ?>" alt="logo" />
        </a>
        <a class="navbar-brand brand-logo-mini" href="">
          <img src="<?php echo e(asset('images/logo-mini.svg')); ?>" alt="logo" />
        </a>
      </div>
      <a class="nav-link"  href="#district-pages">
        <form class="" action="<?php echo e(route('admin.logout')); ?>" method="post">
          <?php echo csrf_field(); ?>
          <input type="submit" value="Logout Now" class="btn btn-danger">
        </form>
      </a>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="text-wrapper">
                  <p class="profile-name">Admin</p>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('welcome')); ?>">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <!--info option start -->
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basictwo" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title">Information</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basictwo">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(route('post')); ?>">Information post</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(route('managepost')); ?>">Manage Information</a>
                </li>
              </ul>
            </div>
          </li>
           <!--info option end -->

          <!--photos option start -->
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basicone" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title">Photos</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basicone">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(route('photos')); ?>">Post Photos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(route('managephotos')); ?>">Manage Photos</a>
                </li>
              </ul>
            </div>
          </li>
           <!--photos option end -->
        </ul>
      </nav>