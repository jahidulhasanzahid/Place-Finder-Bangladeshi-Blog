 <?php $__env->startSection('content'); ?>
                <!--conatin-->
                    <div class="col-md-12">
                      <div class="row">
                        <div class="col-md-3">
                          <?php echo $__env->make('frontend.division.extra.khulna-side-nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        </div>
                        <div class="col-md-9">

                          <div class="shadow p-3 mb-5 bg-white rounded">

                            <h3>Hotel Information of Khulna City</h3><hr>
                            <input type="text" name="search" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
                            <hr/>
                            <ul id="myUL">
                              <li>
                                <div class="card">
                                  <div class="card-body">
                                      <a href="#">Khulna Hotel</a>
                                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                  </div>
                                </div><hr>
                              </li>
                              <li>
                                <div class="card">
                                  <div class="card-body">
                                      <a href="#">Radisan</a>
                                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                  </div>
                                </div><hr>
                              </li>
                              <li>
                                <div class="card">
                                  <div class="card-body">
                                      <a href="#">Hotel Intercontinental</a>
                                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                  </div>
                                </div><hr>
                              </li>
                              <li>
                                <div class="card">
                                  <div class="card-body">
                                      <a href="#">Pan Pecific SOnargoan Hotel,Dhaka</a>
                                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                  </div>
                                </div><hr>
                              </li>
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