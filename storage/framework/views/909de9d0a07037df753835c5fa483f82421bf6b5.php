 <?php $__env->startSection('content'); ?>
                <!--conatin-->

                      <div class="container">
                          <div style="justify-content: center;">
                                <h2>Post Comment Section <small>"<?php echo e($status->user_id); ?>"</small></h2>
                                <img class="d-block" src="<?php echo asset('Images/status/'.$status->image); ?>" alt="<?php echo e($status->post); ?>" style="height: 120px; width: auto;">
                            <p><?php echo e($status->post); ?></p>

                            <div id="disqus_thread"></div>
                              <script>

                              /**
                              *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                              *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                              
                              var disqus_config = function () {
                              this.page.url = '<?php echo e(Request::url()); ?>';  // Replace PAGE_URL with your page's canonical URL variable
                              this.page.identifier = <?php echo e($status->id); ?>; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                              };
                              
                              (function() { // DON'T EDIT BELOW THIS LINE
                              var d = document, s = d.createElement('script');
                              s.src = 'https://disquscomment-2.disqus.com/embed.js';
                              s.setAttribute('data-timestamp', +new Date());
                              (d.head || d.body).appendChild(s);
                              })();
                              </script>
                              <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                              </div>
                            </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>