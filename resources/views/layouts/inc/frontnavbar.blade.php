
<nav class="navbar navbar-expand-lg navbar-success  fixed-top nav-count">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
          <img height="50px" class="nav-imgs" src="{{asset('/img/0.png')}}" alt="image here">
          </a>
          <button class="navbar-toggler navbar-size border-3 border-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  mb-2 nav-ul mb-lg-0">
              
            <li class="nav-item">
          <a class="nav-link text-white active" aria-current="page" href="/">HOME</a>
        </li>
        
       
        <li class="nav-item  dropdown">
          <a class="nav-link text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" >
            ACADEMIC
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item  link-bg" href="{{url('notice')}}">Notice</a></li>
            <li><a class="dropdown-item  link-bg" href="{{url('event')}}">Events</a></li>
            <li><a class="dropdown-item  link-bg" href="{{url('classroutine')}}">Class Routine</a></li>
            
            <li><a class="dropdown-item  link-bg" href="{{url('syllabus')}}">Syllabus</a></li>
            
            
            
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            ADMINISTRATION
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item link-bg" href="{{url('message')}}">Chairman Message</a></li>
            <li><a class="dropdown-item link-bg" href="{{url('governing')}}">Governing Body</a></li>
            
            <li><a class="dropdown-item link-bg" href="{{url('teacher')}}">Teacher List</a></li>
            <li><a class="dropdown-item link-bg" href="{{url('staf')}}">Staff List</a></li>
            
            
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            GALLERY
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item link-bg" href="{{url('photogallery')}}">Photo Gallery</a></li>
            <li><a class="dropdown-item link-bg" href="{{url('tour')}}">Tour</a></li>
            
            
            
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            LOGIN
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item link-bg" href="{{url('adminlogin')}}">Admin Login</a></li>
            <li><a class="dropdown-item link-bg" href="{{url('teacherlogin')}}">Teacher Login</a></li>
            <li><a class="dropdown-item link-bg" href="{{url('studentlogin')}}">Student Login</a></li>
            
            
          </ul>
        </li>
        
       
        <li class="nav-item">
          <a class="nav-link text-white active" aria-current="page" href="{{url('about')}}">ABOUT</a>
        </li>
              
            </ul>
           
          </div>
        </div>
      </nav>