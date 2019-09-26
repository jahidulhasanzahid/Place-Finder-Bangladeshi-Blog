@extends('layouts.master')
 @section('content')
                <!--conatin-->
                    <div class="col-md-12">
                      <div class="row">
                        <div class="col-md-3">
                         @include('frontend.division.extra.dhaka-side-nav')
                        </div>
                        <div class="col-md-9">

                          <div class="shadow p-3 mb-5 bg-white rounded">
                            
                      <!--Slider-->
                        <div id="carouselExampleIndicators" class="carousel slide extra-slider-design" data-ride="carousel">
                          <ol class="carousel-indicators">
                            @php $i = 1; @endphp
                            @foreach ($dhaka_photo as $image)
                            <li data-target="#carouselExampleIndicators" data-slide-to="{{ $i ? 'active':'' }}">
                              <img class="d-block w-100" src="{!! asset('Images/allphotos/'.$image->image) !!}" alt="">
                            </li>
                            @php $i++; @endphp
                            @endforeach
                          </ol>

                          <div class="carousel-inner">
                            @php $i = 1; @endphp
                            @foreach ($dhaka_photo as $image)
                            <div class="carousel-item {{ $i == 1 ? 'active':'' }}">
                              <img class="d-block w-100" src="{!! asset('Images/allphotos/'.$image->image) !!}" alt="First slide" style="height: 430px;">
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

                          <div class="col-md-12">
                            <div class="row">
                              <div class="col-md-2">
                                <div class="card">
                                  <div class="card-body">
                                      <img class="card-img-top" src="{{asset('Images/fivepic/1.jpg')}}">
                                  </div>
                                </div>
                              </div>

                              <div class="col-md-2">
                                <div class="card">
                                  <div class="card-body">
                                      <img class="card-img-top" src="{{asset('Images/fivepic/2.jpg')}}">
                                  </div>
                                </div>
                              </div>

                              <div class="col-md-2">
                                <div class="card">
                                  <div class="card-body">
                                      <img class="card-img-top" src="{{asset('Images/fivepic/3.jpg')}}">
                                  </div>
                                </div>
                              </div>

                              <div class="col-md-2">
                                <div class="card">
                                  <div class="card-body">
                                      <img class="card-img-top" src="{{asset('Images/fivepic/4.jpg')}}">
                                  </div>
                                </div>
                              </div>

                              <div class="col-md-2">
                                <div class="card">
                                  <div class="card-body">
                                      <img class="card-img-top" src="{{asset('Images/fivepic/5.jpg')}}">
                                  </div>
                                </div>
                              </div>

                              <div class="col-md-2">
                                <div class="card">
                                  <div class="card-body">
                                      <img class="card-img-top" src="{{asset('Images/fivepic/1.jpg')}}">
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
            
            @endsection