@extends('layouts.app')

@section('content')

   <div class="container-fluid">
        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-12 col-md-12 col-12">

                <div class="card o-hidden border-0 my-2 h-97">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row h-100">
                            <!-- left side -->
                            <div class="col-lg-8 col-sm-7 col-12 bg-login-image pr-0 d-flex align-items-center">
                                <div class="w-100 text-center mobile-h" style="padding: 5em 2em;height: 60%;">
                                    <h1 class="text-white font-weight800 font-gothambold">HCP <br/> ENGAGEMENT PORTAL</h1>
                                    <h2 class="text-white font-weight800 font-gothambold mt-4"> Hello </h2>
                                    <p class="text-white fontsize21px maxwidth437px font-gothamlight m-auto"> It’s quick and easy </p>
                                </div>
                            </div>
                            <!-- left side -->
                            <div class="col-lg-4 col-sm-5 col-12 pl-lg-5 pr-lg-5 pb-lg-5 pt-lg-4 p-sm-4 pl-5 pb-5 pr-5 pt-4 h-100" style="overflow-y: scroll;">
                                <div class="mb-5 logo-cs" style="top: -7em;"><img src="{{asset('images/Asset3.png')}}" width="130"></div>
                                <div class="col-md-12 pt-1">
                                    <div class="text-center">
                                         <ul class="nav nav-tabs tabs-login border-0 justify-content-center" role="tablist">
                                                 <li class="nav-item">
                                                  <a class="nav-link font-gothamlight" href="{{url('/login')}}">Sign in</a>
                                                </li>
                                                <li class="nav-item">
                                                  <a class="nav-link active font-gothammedium" href="{{url('/register')}}">Sign up</a>
                                                </li>
                                                 <!-- <li class="nav-item">
                                                  <a class="nav-link" data-toggle="tab" href="#signup">Sign Up</a>
                                                </li> -->
                                         </ul>
                                    </div>

                                     <div class="tab-content mt-4">

                                              <form class="form" method="POST" id="userForm" action="">
                                                @csrf
                                                    <div class="form-group form-control border-radius25px bg-gray border-gray pt-2 pb-2 h-100 d-flex align-items-center">
                                                        <img src="{{asset('images/Asset4.png')}}" width="11">
                                                        <input type="text" id="name" class="border-0 outline-none bg-transparent pl-3 pr-2 font-gothamlight fontsize13px col-md-12 text-darkgray" name="name"
                                                            placeholder="Name" required>
                                                      </div>
                                                    <div class="form-group form-control border-radius25px bg-gray border-gray pt-2 pb-2 h-100 d-flex align-items-center">
                                                        <img src="{{asset('images/Asset14.png')}}" width="13">
                                                        <input type="email" id="email" name="email" class="border-0 outline-none bg-transparent pl-3 pr-2 font-gothamlight fontsize13px col-md-12 text-darkgray" placeholder="Email" required>
                                                       
                                                    </div>
                                                     <div class="form-group form-control border-radius25px bg-gray border-gray pt-2 pb-2 h-100 d-flex align-items-center">
                                                        <img src="{{asset('images/Asset9.png')}}" width="10">
                                                        <select name="speciality_id" id="speciality" class="border-0 outline-none bg-transparent pl-3 pr-2 font-gothamlight fontsize13px col-md-12 text-darkgray" required>
                                                        </select>
                                                       
                                                    </div>
                                                    <div class="form-group form-control border-radius25px bg-gray border-gray pt-2 pb-2 h-100 d-flex align-items-center">
                                                        <img src="{{asset('images/Asset8.png')}}" width="13">
                                                        <input type="tel" name="phone" id="phone" class="border-0 outline-none bg-transparent pl-3 pr-2 font-gothamlight fontsize13px col-md-12 text-darkgray" placeholder="Phone" required>
                                                    </div>
                                                    <div class="form-group form-control border-radius25px bg-gray border-gray pt-2 pb-2 h-100 d-flex align-items-center">
                                                        <img src="{{asset('images/Asset7.png')}}" width="11">
                                                        <select name="location_id" id="location" class="border-0 outline-none bg-transparent pl-3 pr-2 font-gothamlight fontsize13px col-md-12 text-darkgray" required>
                                                        </select>
                                                      </div>
                                                    
                                                    <div class="form-group form-control border-radius25px bg-gray border-gray pt-2 pb-2 h-100 d-flex align-items-center">
                                                        <img src="{{asset('images/Asset49.png')}}" width="10">
                                                        <input type="password" name="pmdc" class="border-0 outline-none bg-transparent pl-3 pr-2 font-gothamlight fontsize13px col-md-12 text-darkgray" id="pmdc"  placeholder="PMDC Code" required>
                                                         <button type="button" class="bg-transparent border-0 fontsize14px position-absolute show-pass" onclick="pmdcpass()"> <i class="fa fa-eye text-gray"></i></button>
                                                    </div>

                                                    <div class="form-group form-control border-radius25px bg-gray border-gray pt-2 pb-2 h-100 d-flex align-items-center">
                                                        <img src="{{asset('images/Asset48.png')}}" width="11" height="11">
                                                        <input type="password" name="password" id="password" class="border-0 outline-none bg-transparent pl-3 pr-2 font-gothamlight fontsize13px col-md-12 text-darkgray" placeholder="Password" required>
                                                         <button type="button" class="bg-transparent border-0 fontsize14px position-absolute show-pass" onclick="passwordnew()"> <i class="fa fa-eye text-gray"></i></button>
                                                         
                                                    </div>
                                                  
                                                    <button type="submit" class="btn bg-orange text-uppercase border-radius25px text-white btn-block outline-none fontsize15px letterspacing1px pt-2 pb-2 mt-4 hoverbtn1 border border-orange font-gothamlight" type="submit">
                                                        Sign Up
                                                    </button>
                                                 
                                                </form>
                                         </div>
                                        <!-- signUp -->
                                    
                
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

@endsection
@section('afterScript')
<script src="{{ asset('js/app.js')}}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="{{asset('app-assets/vendors/js/select2/select2.js')}}"></script>
<script src="{{asset('app-assets/js/toastr.js')}}"></script>
<script src="{{asset('app-assets/js/sweet-alerts.js')}}"></script>
<script src="{{asset('app-assets/js/toastr.min.js')}}"></script>
<script>
    $('#location').select2({
        placeholder: "Location",
        allowClear: true,
        ajax: {
            url: "{{ route('user.getLocation') }}",
            type: "GET",
            dataType: 'json',
            data: function (params) {
                return {
                    search: params.term
                };
            },
            processResults: function (response) {
                return {
                    results: response
                };
            },
            cache: true
        }
    });
    
    $('#speciality').select2({
        placeholder: "Specialty",
        allowClear: true,
        ajax: {
            url: "{{ route('user.getSpeciality') }}",
            type: "GET",
            dataType: 'json',
            data: function (params) {
                return {
                    search: params.term
                };
            },
            processResults: function (response) {
                return {
                    results: response
                };
            },
            cache: true
        }
    });



function pmdcpass() {
  var x = document.getElementById("pmdc");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
function passwordnew() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

@endsection
