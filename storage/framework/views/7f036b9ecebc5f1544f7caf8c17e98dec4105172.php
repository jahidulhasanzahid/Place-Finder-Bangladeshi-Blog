<nav class="navbar navbar-expand-lg navbar-light">
                      <a class="navbar-brand" href="<?php echo e(route('index')); ?>"><img src="<?php echo e(asset('images/logo.PNG')); ?>" style="height: 38px;"></a>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>

                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                          <li class="nav-item active">
                            <a class="nav-link" href="<?php echo e(route('index')); ?>">Home <span class="sr-only">(current)</span></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('visitor')); ?>">Forum</a>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Division
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?php echo e(route('dhaka')); ?>">Dhaka</a>
                                <a class="dropdown-item" href="<?php echo e(route('barishal')); ?>">Barishal</a>
                                <a class="dropdown-item" href="<?php echo e(route('chittagong')); ?>">Chittagong</a>
                                <a class="dropdown-item" href="<?php echo e(route('khulna')); ?>">Khulna</a>
                                <a class="dropdown-item" href="<?php echo e(route('mymensingh')); ?>">Mymensingh</a>
                                <a class="dropdown-item" href="<?php echo e(route('rajshahi')); ?>">Rajshahi</a>
                                <a class="dropdown-item" href="<?php echo e(route('rangpur')); ?>">Rangpur</a>
                                <a class="dropdown-item" href="<?php echo e(route('sylhet')); ?>">Sylhet</a>
                                
                            </div>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('aboutus')); ?>">About Us</a>
                          </li>
                        </ul>

                        <form class="form-inline my-2 my-lg-0" action="<?php echo route('search'); ?>" method="get">
                          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
                          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                          
                      </div>
                    </nav>