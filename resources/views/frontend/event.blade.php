@extends('layouts.front')
@extends('layouts.inc.frontnavbar')
@section('content-1')
<div class="cover">
    
</div>
@endsection
@section('content-2')
<div class="container">
   
   <h1 class="heading">Events</h1>
    <div class="row">
        <div class="col-lg-6 col-md-12 col-12 notice-img">
            <img src="{{asset('/img/23.jpg')}}" alt="image here">
        </div>
        <div class="col-lg-6 col-md-12 col-12 mt-5 ">
        <h4 class="ms-5">Events</h4>
        <div class="line-1 ms-5"></div>
        <div class="type d-flex">
        <div class="type-1 d-flex mt-3 ms-5">
        <i class="fa fa-user fs-5 "></i>
        <p class=" fs-6 ms-2">Events</hp>
        </div>
        <div class="type-2 d-flex mt-3 ms-5">
        <i class="fa fa-clock-o fs-5"></i>
        <p class=" fs-6 ms-2">22/9/2022</hp>
        </div>
        </div>

        <p class="ms-5">As people around the world are taking precautions to protect themselves, their families and their communities from coronavirus disease (COVID-19) it’s also important that children can continue to learn, and that they can do so in an environment that is welcoming, respectful, inclusive, and supportive to all.</p>
        
        
        
        </div>
    </div>
</div>
@endsection
@section('content-3')
<div class="kid-style">
<img src="{{asset('/img/22.png')}}" alt="image here"> 
</div>
@endsection
