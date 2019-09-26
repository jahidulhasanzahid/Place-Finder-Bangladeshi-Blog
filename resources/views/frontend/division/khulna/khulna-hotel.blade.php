@extends('layouts.master')
 @section('content')
                <!--conatin-->
                    <div class="col-md-12">
                      <div class="row">
                        <div class="col-md-3">
                          @include('frontend.division.extra.khulna-side-nav')
                        </div>
                        <div class="col-md-9">

                          <div class="shadow p-3 mb-5 bg-white rounded">

                            <h3>Hotel Information of Khulna City</h3><hr>
                            <input type="text" name="search" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
                            <hr/>

                           <ul id="myUL">
                              @foreach($information_all as $all_information)
                              <li>
                                <div class="card">
                                  <div class="card-body">
                                    <div class="col-md-12">
                                      <div class="row">
                                        <div class="col-md-6">
                                          <h4><a href="">{{ $all_information->title }}</a></h4>
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
                                </div>
                                <hr>
                              </li>
                              @endforeach
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
    @endsection