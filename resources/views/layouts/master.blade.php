<!DOCTYPE html>
<html>
    <head>
        <title>PF</title>
        
        <!-- Required meta tags -->
        @include('frontend.extra.style')
        
    </head>
    
    <body>
        <!--navbar part-->
            <div class="container-flude">
                <div class="own-nav-bg-color">
                    @include('frontend.extra.nav')
                </div>
                <!--navbar part-->
                <!--conatin-->
                    <!--Slider-->
                       @yield('content')                   
                   <!--Basic Information Part-->
                <!--contain-->
            </div>
            
        
            <!--footer-->
                @include('frontend.extra.footer')
            <!--foooter-->
            
        
       @include('frontend.extra.script')
    </body>
</html>