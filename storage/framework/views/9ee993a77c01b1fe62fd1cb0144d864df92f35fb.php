 <?php $__env->startSection('content'); ?>
                <!--conatin-->
                    <div class="col-md-12">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="shadow p-3 mb-5 bg-white rounded">
                            <h2><?php echo e($info); ?></h2>

                            <ul id="myUL">
                              <?php $__currentLoopData = $info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $all_information): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <li>
                                <div class="card">
                                  <div class="card-body">
                                    <div class="col-md-12">
                                      <div class="row">
                                        <div class="col-md-6">
                                          <a href="#"><?php echo e($all_information->title); ?></a>
                                          <img class="d-block w-50" src="<?php echo asset('Images/informations/'.$all_information->image); ?>" alt="<?php echo e($all_information->title); ?>" style="">
                                          <p><?php echo e($all_information->description); ?></p>
                                        </div>
                                        <div class="col-md-6">
                                          <h4>Google Map</h4>
                                          <iframe src="<?php echo e($all_information->address); ?>" frameborder="0" style="border:0" allowfullscreen></iframe>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div><hr>
                              </li>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                <!--contain-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>