@extends('layouts.master')
 @section('content')
                <!--conatin-->
                    <div class="col-md-12">
                      <div class="shadow p-3 mb-5 bg-white rounded">
                      @guest
                      Please Login for share your experience...
                      <a href="{{ route('login') }}"> LOGIN </a> or
                      <a href="{{ route('register') }}"> SIGN UP</a>
                      @else
                      {{ Auth::user()->name }}
                      @endguest
                      </div>
                      <div class="row">
                        @guest
                        <div class="col-md-3">
                          <div class="shadow p-3 mb-5 bg-white rounded">
                            <p> Regular User </p>
                          </div>
                        </div>
                        @else
                        <div class="col-md-3">
                          <div class="shadow p-3 mb-5 bg-white rounded">
                            <p>User Name : {{ Auth::user()->name }} </p>
                            <p>User Email : {{ Auth::user()->email }} </p>
                            <a class="" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                  Logout
                             </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
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
                        @endguest
                        <div class="col-md-9">
                          @guest
                          @else
                          <div class="shadow p-3 mb-5 bg-white rounded">
                            <p>Status</p>
                            <div class="form-group">
                              <form action="{{ route('status.store') }}" method="post" enctype="multipart/form-data">
                                @include('backend.messages')
                                @csrf
                                <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" placeholder="Write Here Something About Your Experiences!" name="post" required></textarea>
                                <input type="file" class="form-control" style="margin-top: 4px;" name="image" required>
                                <!-- <button type="button" class="btn btn-info" style="margin-top: 4px;" name="submit">POST</button> -->
                                <button type="submit" class="btn btn-success mr-2">Post</button>
                              </form>
                            </div>
                          </div>
                          @endguest

                          <div class="shadow p-3 mb-5 bg-white rounded">
                            <i><b>Scroll For More Status</b></i><hr>
                            @foreach($status as $statuses)
                            <div class="form-group">
                                <p><span>Post By:<b>{{ $statuses->user_id }}</b></span></p>
                                <p><span>Date:{{ $statuses->created_at }}</span></p>
                                <img class="d-block w-50" src="{!! asset('Images/status/'.$statuses->image) !!}" alt="{{ $statuses->post }}">

                                <a href="{{ route('post.comment',$statuses->id) }}" style="color: black; text-decoration: none;"><span>{{ $statuses->post}}</span></a>
                                <br>
                                <a href="{{ route('post.comment',$statuses->id) }}">Comment</a>

                                <!-- <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="1" placeholder="Write Here Something About This Status!"></textarea> -->
                                <!-- <button type="button" class="btn btn-info" style="margin-top: 4px;">POST</button>
                                <p><span>Comment By:</span></p>
                                <p><span>........................</span></p> -->
                            </div> <hr>
                            @endforeach
                          </div>

                        </div>
                      </div>
                    </div>
@endsection