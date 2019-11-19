<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">
                <img src="{{ URL::to('src/images/healthlife.png') }}" alt="Health Life is Possible" width="80"
                    height="80" title="Health Life is Possible"> Health Life
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/fees') }}">Fees</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
                </li>
                &nbsp;
                <li class="nav-item mr-4">
                    <a href="{{ route('getBooking') }}" class="nav-link btn btn-success btn-secondary btn-outline-danger my-2 my-sm-0 text-white">Make an appointment</a>
                </li>
                &nbsp;
                
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search.." aria-label="Search">
                    <button class="form-control btn btn-default btn-outline-danger" type="submit">Search</button>
                </form>

                

            </ul>

            <ul class="navbar-nav navbar-right">
                    @if (Auth::guest())
                    <li class="nav-item dropdown mr-2">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Join Health Life
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
    
                            <a class="dropdown-item" href="{{ url('/login') }}">Login</a>
                            <a class="dropdown-item" href="{{ url('/register') }}">Register</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('adminLogin') }}">Vacancies</a>
                        </div>
                    </li>
                    @else
    
                    <li class="nav-item dropdown mr-2">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Hello {{ Auth::user()->name }}, <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('userProfile')}}">User Profile</a>
                            <a class="dropdown-item" href="{{ route('getAppointment')}}">Appointment</a>
                            <a class="dropdown-item" href="{{ route('getUpdate')}}">Update Profile</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logoutUser') }}">Logout</a>
                        </div>
                    </li>
                    @endif
                    
                </ul>
            
        </div>  
    </nav>