@extends('layouts.master')
 @section('content')
                <!--conatin-->

                      <div class="container">
                        <div style="justify-content: center;">
                                
                        <div class="col-md-3">

                        </div>
                        <div class="col-md-9">

                          <div class="shadow p-3 mb-5 bg-white rounded">

                            <h3>Information</h3><hr>
                            <hr/>

                                <div class="card">
                                  <div class="card-body">
                                    <div class="col-md-12">
                                      <div class="row">
                                        <div class="col-md-6">
                                          <h4><a href="">{{ $info->title }}</a></h4>
                                        <img class="d-block w-50" src="{!! asset('Images/informations/'.$info->image) !!}" alt="{{ $info->title }}" style="">
                                        <p>{{ $info->description }}</p>
                                        
                                        </div>
                                        <div class="col-md-6">
                                            
                                          <h4>Google Map</h4>
                                          <iframe src="{{ $info->address }}" frameborder="0" style="border:0" allowfullscreen></iframe>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <hr>

                          </div>

                        </div>

                            <div id="disqus_thread"></div>
                              <script>

                              /**
                              *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                              *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                              
                              var disqus_config = function () {
                              this.page.url = '{{ Request::url() }}';  // Replace PAGE_URL with your page's canonical URL variable
                              this.page.identifier = {{$info->id}}; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
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
@endsection