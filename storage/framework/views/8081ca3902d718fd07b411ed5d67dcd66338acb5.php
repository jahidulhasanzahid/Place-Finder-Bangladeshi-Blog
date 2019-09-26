 <?php $__env->startSection('content'); ?>
                <!--conatin-->
                    <div class="col-md-12">
                      <div class="row">
                        <div class="col-md-3">
                          <?php echo $__env->make('frontend.division.extra.sylhet-side-nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        </div>
                        <div class="col-md-9">

                          <div class="shadow p-3 mb-5 bg-white rounded">

                            <h3>Police Station Information of Sylhet City</h3><hr>
                            <input type="text" name="search" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
                            <hr/>
                            <ul id="myUL">
                              <?php $__currentLoopData = $information_all; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $all_information): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <li>
                                <div class="card">
                                  <div class="card-body">
                                      <a href="#"><?php echo e($all_information->title); ?></a>
                                      <img class="d-block w-50" src="<?php echo asset('Images/informations/'.$all_information->image); ?>" alt="<?php echo e($all_information->title); ?>" style="">
                                      <p><?php echo e($all_information->description); ?></p>
                                      <a href="<?php echo e($all_information->address); ?>">Map</a>
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
            </div>
            
        
            <script>
                function myFunction() {
                    var input, filter, ul, li, a, i;
                    input = document.getElementById("myInput");
                    filter = input.value.toUpperCase();
                    ul = document.getElementById("myUL");
                    li = ul.getElementsByTagName("li");
                    for (i = 0; i < li.length; i++) {
                         a = li[i].getElementsByTagName("a")[0];
                     if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
                          li[i].style.display = "";
                        } else {
                          li[i].style.display = "none";
                        }
                      }
                    }
               </script>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>