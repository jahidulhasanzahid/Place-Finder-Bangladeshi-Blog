@extends('layouts.master')
 @section('content')
                <!--conatin-->
                    <div class="col-md-12">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="shadow p-3 mb-5 bg-white rounded">
                            <h2>{{ $info }}</h2>

                            <ul id="myUL">
                              @foreach($info as $all_information)
                              <li>
                                <div class="card">
                                  <div class="card-body">
                                    <div class="col-md-12">
                                      <div class="row">
                                        <div class="col-md-6">
                                          <a href="#">{{ $all_information->title }}</a>
                                          <img class="d-block w-50" src="{!! asset('Images/informations/'.$all_information->image) !!}" alt="{{ $all_information->title }}" style="">
                                          <p>{{ $all_information->description }}</p>
                                        </div>
                                        <div class="col-md-6">
                                          <h4>Google Map</h4>
                                          <iframe src="{{ $all_information->address }}" frameborder="0" style="border:0" allowfullscreen></iframe>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div><hr>
                              </li>
                              @endforeach
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                <!--contain-->
@endsection