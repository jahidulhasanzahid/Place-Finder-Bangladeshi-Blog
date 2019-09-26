<nav class="navbar navbar-expand-lg navbar-light">
                      <a class="navbar-brand" href="{{ route('index') }}"><img src="{{asset('images/logo.PNG')}}" style="height: 38px;"></a>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>

                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                          <li class="nav-item active">
                            <a class="nav-link" href="{{ route('index')}}">Home <span class="sr-only">(current)</span></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{ route('visitor') }}">Forum</a>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Division
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('dhaka') }}">Dhaka</a>
                                <a class="dropdown-item" href="{{ route('barishal') }}">Barishal</a>
                                <a class="dropdown-item" href="{{ route('chittagong') }}">Chittagong</a>
                                <a class="dropdown-item" href="{{ route('khulna') }}">Khulna</a>
                                <a class="dropdown-item" href="{{ route('mymensingh') }}">Mymensingh</a>
                                <a class="dropdown-item" href="{{ route('rajshahi') }}">Rajshahi</a>
                                <a class="dropdown-item" href="{{ route('rangpur') }}">Rangpur</a>
                                <a class="dropdown-item" href="{{ route('sylhet') }}">Sylhet</a>
                                
                            </div>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{ route('aboutus') }}">About Us</a>
                          </li>
                        </ul>

                        <form class="form-inline my-2 my-lg-0" action="{!! route('search') !!}" method="get">
                          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
                          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                          
                      </div>
                    </nav>