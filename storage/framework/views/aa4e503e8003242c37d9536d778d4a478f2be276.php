<!DOCTYPE html>
<html>
    <head>
        <title>PF</title>
        
        <!-- Required meta tags -->
        <?php echo $__env->make('frontend.extra.style', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        
    </head>
    
    <body>
        <!--navbar part-->
            <div class="container-flude">
                <div class="own-nav-bg-color">
                    <?php echo $__env->make('frontend.extra.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div>
                <!--navbar part-->
                <!--conatin-->
                    <!--Slider-->
                       <?php echo $__env->yieldContent('content'); ?>                   
                   <!--Basic Information Part-->
                <!--contain-->
            </div>
            
        
            <!--footer-->
                <?php echo $__env->make('frontend.extra.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <!--foooter-->
            
        
       <?php echo $__env->make('frontend.extra.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </body>
</html>