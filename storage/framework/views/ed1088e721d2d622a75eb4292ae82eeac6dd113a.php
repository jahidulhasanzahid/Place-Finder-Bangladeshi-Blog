 <?php $__env->startSection('content'); ?>
                <!--conatin-->
                    <div class="col-md-12">
                      <div class="row">
                        <div class="col-md-3">
                         <?php echo $__env->make('frontend.division.extra.sylhet-side-nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        </div>
                        <div class="col-md-9">

                          <div class="shadow p-3 mb-5 bg-white rounded">
                            
                             <!--Slider-->
                        <div id="carouselExampleIndicators" class="carousel slide extra-slider-design" data-ride="carousel">
                          <ol class="carousel-indicators">
                            <?php $i = 1; ?>
                            <?php $__currentLoopData = $sylhet_photo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo e($i ? 'active':''); ?>">
                              <img class="d-block w-100" src="<?php echo asset('Images/allphotos/'.$image->image); ?>" alt="">
                            </li>
                            <?php $i++; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </ol>

                          <div class="carousel-inner">
                            <?php $i = 1; ?>
                            <?php $__currentLoopData = $sylhet_photo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="carousel-item <?php echo e($i == 1 ? 'active':''); ?>">
                              <img class="d-block w-100" src="<?php echo asset('Images/allphotos/'.$image->image); ?>" alt="First slide" style="height: 430px;">
                            </div>
                            <?php $i++; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </div>

                          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                        </div>
                    <!--slider-->
                    <hr>

                          <div class="col-md-12">
                            <div class="row">
                              <div class="col-md-2">
                                <div class="card">
                                  <div class="card-body">
                                      <img class="card-img-top" src="<?php echo e(asset('Images/fivepic/1.jpg')); ?>">
                                  </div>
                                </div>
                              </div>

                              <div class="col-md-2">
                                <div class="card">
                                  <div class="card-body">
                                      <img class="card-img-top" src="<?php echo e(asset('Images/fivepic/2.jpg')); ?>">
                                  </div>
                                </div>
                              </div>

                              <div class="col-md-2">
                                <div class="card">
                                  <div class="card-body">
                                      <img class="card-img-top" src="<?php echo e(asset('Images/fivepic/3.jpg')); ?>">
                                  </div>
                                </div>
                              </div>

                              <div class="col-md-2">
                                <div class="card">
                                  <div class="card-body">
                                      <img class="card-img-top" src="<?php echo e(asset('Images/fivepic/4.jpg')); ?>">
                                  </div>
                                </div>
                              </div>

                              <div class="col-md-2">
                                <div class="card">
                                  <div class="card-body">
                                      <img class="card-img-top" src="<?php echo e(asset('Images/fivepic/5.jpg')); ?>">
                                  </div>
                                </div>
                              </div>

                              <div class="col-md-2">
                                <div class="card">
                                  <div class="card-body">
                                      <img class="card-img-top" src="<?php echo e(asset('Images/fivepic/1.jpg')); ?>">
                                  </div>
                                </div>
                              </div>

                            </div>
                          </div>

                          </div>

                        </div>
                      </div>
                    </div>
                <!--contain-->
            </div>
            
            <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>