@extends('layouts.master')
 @section('content')
                      <div id="carouselExampleIndicators" class="carousel slide extra-slider-design" data-ride="carousel">
                          <ol class="carousel-indicators">
                            @php $i = 1; @endphp
                            @foreach ($slider as $image)
                            <li data-target="#carouselExampleIndicators" data-slide-to="{{ $i ? 'active':'' }}">
                              <img class="d-block w-100" src="{!! asset('Images/allphotos/'.$image->image) !!}" alt="">
                            </li>
                            @php $i++; @endphp
                            @endforeach
                          </ol>


                          <div class="carousel-inner">
                            @php $i = 1; @endphp
                            @foreach ($slider as $image)
                            <div class="carousel-item {{ $i == 1 ? 'active':'' }}">
                              <img class="d-block w-100" src="{!! asset('Images/allphotos/'.$image->image) !!}" alt="{!! $image->photo_title !!}" style="height: 611px;">
                            </div>
                            @php $i++; @endphp
                            @endforeach
                  
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
                    <!-- Basic Information Part--->
                        <div class="card text-center">
                          @guest
                          <div class="card-header">
                            About Our Servies...
                          </div>
                          <div class="card-body">
                            <h5 class="card-title">Information Provider all over Bangladesh!</h5>
                            <p class="card-text">Bangladesh, to the east of India on the Bay of Bengal, is a South Asian country marked by lush greenery and many waterways. Its Padma (Ganges), Meghna and Jamuna rivers create fertile plains, and travel by boat is common. On the southern coast, the Sundarbans, an enormous mangrove forest shared with Eastern India, is home to the royal Bengal tiger.</p>
                            <hr>
                            
                            <a href="{{ route('login') }}" class="btn btn-info">LOGIN</a>
                            <a href="{{ route('register') }}" class="btn btn-info">SIGN UP</a>
                            @else
                            <a href="" class="btn btn-info">User Name : {{ Auth::user()->name }} </a> <br>

                                    <a class="btn btn-danger" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            <hr>
                            @endguest
                          </div>
                        </div>
@endsection