 <?php $__env->startSection('content'); ?>
                <!--conatin-->
                    <div class="col-md-12">
                      <div class="shadow p-3 mb-5 bg-white rounded">
                      <?php if(auth()->guard()->guest()): ?>
                      Please Login for share your experience...
                      <a href="<?php echo e(route('login')); ?>"> LOGIN </a> or
                      <a href="<?php echo e(route('register')); ?>"> SIGN UP</a>
                      <?php else: ?>
                      <?php echo e(Auth::user()->name); ?>

                      <?php endif; ?>
                      </div>
                      <div class="row">
                        <?php if(auth()->guard()->guest()): ?>
                        <div class="col-md-3">
                          <div class="shadow p-3 mb-5 bg-white rounded">
                            <p> Regular User </p>
                          </div>
                        </div>
                        <?php else: ?>
                        <div class="col-md-3">
                          <div class="shadow p-3 mb-5 bg-white rounded">
                            <p>User Name : <?php echo e(Auth::user()->name); ?> </p>
                            <p>User Email : <?php echo e(Auth::user()->email); ?> </p>
                            <a class="" href="<?php echo e(route('logout')); ?>"
                               onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                  Logout
                             </a>

                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                              <?php echo csrf_field(); ?>
                            </form>
<!--                             <div class="card">
                              <img class="card-img-top" src="Images/p.png" alt="Card image">
                              <div class="card-body">
                                <h4 class="card-title">John Doe</h4>
                                <p class="card-text">Some example text.</p>
                                <a href="#" class="btn btn-primary">See Profile</a>
                              </div>
                            </div> -->
                          </div>
                        </div>
                        <?php endif; ?>
                        <div class="col-md-9">
                          <?php if(auth()->guard()->guest()): ?>
                          <?php else: ?>
                          <div class="shadow p-3 mb-5 bg-white rounded">
                            <p>Status</p>
                            <div class="form-group">
                              <form action="<?php echo e(route('status.store')); ?>" method="post" enctype="multipart/form-data">
                                <?php echo $__env->make('backend.messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                <?php echo csrf_field(); ?>
                                <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" placeholder="Write Here Something About Your Experiences!" name="post" required></textarea>
                                <input type="file" class="form-control" style="margin-top: 4px;" name="image" required>
                                <!-- <button type="button" class="btn btn-info" style="margin-top: 4px;" name="submit">POST</button> -->
                                <button type="submit" class="btn btn-success mr-2">Post</button>
                              </form>
                            </div>
                          </div>
                          <?php endif; ?>

                          <div class="shadow p-3 mb-5 bg-white rounded">
                            <i><b>Scroll For More Status</b></i><hr>
                            <?php $__currentLoopData = $status; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $statuses): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="form-group">
                                <p><span>Post By:<b><?php echo e($statuses->user_id); ?></b></span></p>
                                <p><span>Date:<?php echo e($statuses->created_at); ?></span></p>
                                <img class="d-block w-50" src="<?php echo asset('Images/status/'.$statuses->image); ?>" alt="<?php echo e($statuses->post); ?>">

                                <a href="<?php echo e(route('post.comment',$statuses->id)); ?>" style="color: black; text-decoration: none;"><span><?php echo e($statuses->post); ?></span></a>
                                <br>
                                <a href="<?php echo e(route('post.comment',$statuses->id)); ?>">Comment</a>

                                <!-- <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="1" placeholder="Write Here Something About This Status!"></textarea> -->
                                <!-- <button type="button" class="btn btn-info" style="margin-top: 4px;">POST</button>
                                <p><span>Comment By:</span></p>
                                <p><span>........................</span></p> -->
                            </div> <hr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </div>

                        </div>
                      </div>
                    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>