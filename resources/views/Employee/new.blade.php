@extends('_layouts.app')

@section('content')

<section class="dashboard-counts no-padding-bottom">
  <div class="container-fluid">
    <div class="card">
    <!-- <div class="card-header">Panel heading without title</div>-->
    <div class="card-body">
        <!-- employee table -->
        <div class="row">
            <!-- could hide for small screens -->
            <div class="col-md-12 col-md-12">
                <!-- photo, emp id | name, post, section, contact, email some fields are
                based on employee rights *** each record a row. load time :( *** -->
                <div class="row">
                    <div class="col-md-2 emp-list-pic">
                        
                        <img src="{{ asset('img/avatar-3.jpg') }}" />
                    </div>
                    <div class="col-md-4">
                        <h5>Hussain Ahmed Falah Manik / <small>112</small></h5>
                        <p>Assistance Director General</p>
                        <p>Human Resource Dept.</p>
                        <p>Email: hussain@domain.com</p>
                        <p>Personal Email: hidden</p>
                    </div>
                    <div class="col-md-3">
                        <p>Office: +960 7774546, ext. 132</p>
                        <p>Home: +960 3324394</p>
                        <p>Mob: +960 9994999</p>
                        <p>Facebook: hidden</p>
                        <p>twitter: hidden</p>
                    </div>
                    <div class="col-md-3">
                        <p>In Office: Yes,</p>
                        <p>Supervisor for: 10 Staff</p>
                        <p>Year of Service: 5</p>
                    </div>
                </div>
                <hr/>

                <div class="row">
                    <div class="col-md-2 emp-list-pic">

                        <img src="{{ asset('img/avatar-2.jpg') }}" />
                    </div>
                    <div class="col-md-4">
                        <h5>Hussain Ahmed Falah Manik / <small>112</small></h5>
                        <p>Assistance Director General</p>
                        <p>Human Resource Dept.</p>
                        <p>Email: hussain@domain.com</p>
                        <p>Personal Email: hidden</p>
                    </div>
                    <div class="col-md-3">
                        <p>Office: +960 7774546, ext. 132</p>
                        <p>Home: +960 3324394</p>
                        <p>Mob: +960 9994999</p>
                        <p>Facebook: hidden</p>
                        <p>twitter: hidden</p>
                    </div>
                    <div class="col-md-3">
                        <p>In Office: Yes,</p>
                        <p>Supervisor for: 10 Staff</p>
                        <p>Year of Service: 5</p>
                    </div>
                </div>
                <hr/>

                <div class="row">
                    <div class="col-md-2 emp-list-pic">

                        <img src="{{ asset('img/avatar-3.jpg') }}" />
                    </div>
                    <div class="col-md-4">
                        <h5>Hussain Ahmed Falah Manik / <small>112</small></h5>
                        <p>Assistance Director General</p>
                        <p>Human Resource Dept.</p>
                        <p>Email: hussain@domain.com</p>
                        <p>Personal Email: hidden</p>
                    </div>
                    <div class="col-md-3">
                        <p>Office: +960 7774546, ext. 132</p>
                        <p>Home: +960 3324394</p>
                        <p>Mob: +960 9994999</p>
                        <p>Facebook: hidden</p>
                        <p>twitter: hidden</p>
                    </div>
                    <div class="col-md-3">
                        <p>In Office: Yes,</p>
                        <p>Supervisor for: 10 Staff</p>
                        <p>Year of Service: 5</p>
                    </div>
                </div>
                <hr/>
                <div class="row">
                    <div class="col-md-2 emp-list-pic">

                        <img src="{{ asset('img/avatar-1.jpg') }}" />
                    </div>
                    <div class="col-md-4">
                        <h5>Hussain Ahmed Falah Manik / <small>112</small></h5>
                        <p>Assistance Director General</p>
                        <p>Human Resource Dept.</p>
                        <p>Email: hussain@domain.com</p>
                        <p>Personal Email: hidden</p>
                    </div>
                    <div class="col-md-3">
                        <p>Office: +960 7774546, ext. 132</p>
                        <p>Home: +960 3324394</p>
                        <p>Mob: +960 9994999</p>
                        <p>Facebook: hidden</p>
                        <p>twitter: hidden</p>
                    </div>
                    <div class="col-md-3">
                        <p>In Office: Yes,</p>
                        <p>Supervisor for: 10 Staff</p>
                        <p>Year of Service: 5</p>
                    </div>
                </div>
                <hr/>

                <div class="row">
                    <div class="col-md-2 emp-list-pic">
                        <!-- <img src="{{ asset('public/img/avatar-3.jpg') }}"> -->
                        <img src="{{ asset('img/avatar-3.jpg') }}" />
                    </div>
                    <div class="col-md-4">
                        <h5>Hussain Ahmed Falah Manik / <small>112</small></h5>
                        <p>Assistance Director General</p>
                        <p>Human Resource Dept.</p>
                        <p>Email: hussain@domain.com</p>
                        <p>Personal Email: hidden</p>
                    </div>
                    <div class="col-md-3">
                        <p>Office: +960 7774546, ext. 132</p>
                        <p>Home: +960 3324394</p>
                        <p>Mob: +960 9994999</p>
                        <p>Facebook: hidden</p>
                        <p>twitter: hidden</p>
                    </div>
                    <div class="col-md-3">
                        <p>In Office: Yes,</p>
                        <p>Supervisor for: 10 Staff</p>
                        <p>Year of Service: 5</p>
                    </div>
                </div>
                <hr/>

                <div class="row">
                    <div class="col-md-2 emp-list-pic">
                        <!-- <img src="{{ asset('public/img/avatar-3.jpg') }}"> -->
                        <img src="{{ asset('img/avatar-3.jpg') }}" />
                    </div>
                    <div class="col-md-4">
                        <h5>Hussain Ahmed Falah Manik / <small>112</small></h5>
                        <p>Assistance Director General</p>
                        <p>Human Resource Dept.</p>
                        <p>Email: hussain@domain.com</p>
                        <p>Personal Email: hidden</p>
                    </div>
                    <div class="col-md-3">
                        <p>Office: +960 7774546, ext. 132</p>
                        <p>Home: +960 3324394</p>
                        <p>Mob: +960 9994999</p>
                        <p>Facebook: hidden</p>
                        <p>twitter: hidden</p>
                    </div>
                    <div class="col-md-3">
                        <p>In Office: Yes,</p>
                        <p>Supervisor for: 10 Staff</p>
                        <p>Year of Service: 5</p>
                    </div>
                </div>
                <hr/>

                <div class="row">
                    <div class="col-md-2 emp-list-pic">
                        <!-- <img src="{{ asset('public/img/avatar-3.jpg') }}"> -->
                        <img src="{{ asset('img/avatar-3.jpg') }}" />
                    </div>
                    <div class="col-md-4">
                        <h5>Hussain Ahmed Falah Manik / <small>112</small></h5>
                        <p>Assistance Director General</p>
                        <p>Human Resource Dept.</p>
                        <p>Email: hussain@domain.com</p>
                        <p>Personal Email: hidden</p>
                    </div>
                    <div class="col-md-3">
                        <p>Office: +960 7774546, ext. 132</p>
                        <p>Home: +960 3324394</p>
                        <p>Mob: +960 9994999</p>
                        <p>Facebook: hidden</p>
                        <p>twitter: hidden</p>
                    </div>
                    <div class="col-md-3">
                        <p>In Office: Yes,</p>
                        <p>Supervisor for: 10 Staff</p>
                        <p>Year of Service: 5</p>
                    </div>
                </div>
                <hr/>

                <div class="row">
                    <div class="col-md-2 emp-list-pic">
                        <!-- <img src="{{ asset('public/img/avatar-3.jpg') }}"> -->
                        <img src="{{ asset('img/avatar-3.jpg') }}" />
                    </div>
                    <div class="col-md-4">
                        <h5>Hussain Ahmed Falah Manik / <small>112</small></h5>
                        <p>Assistance Director General</p>
                        <p>Human Resource Dept.</p>
                        <p>Email: hussain@domain.com</p>
                        <p>Personal Email: hidden</p>
                    </div>
                    <div class="col-md-3">
                        <p>Office: +960 7774546, ext. 132</p>
                        <p>Home: +960 3324394</p>
                        <p>Mob: +960 9994999</p>
                        <p>Facebook: hidden</p>
                        <p>twitter: hidden</p>
                    </div>
                    <div class="col-md-3">
                        <p>In Office: Yes,</p>
                        <p>Supervisor for: 10 Staff</p>
                        <p>Year of Service: 5</p>
                    </div>
                </div>
                <hr/>


                <div class="row">
                    <div class="col-md-2 emp-list-pic">
                        <!-- <img src="{{ asset('public/img/avatar-3.jpg') }}"> -->
                        <img src="{{ asset('img/avatar-3.jpg') }}" />
                    </div>
                    <div class="col-md-4">
                        <h5>Hussain Ahmed Falah Manik / <small>112</small></h5>
                        <p>Assistance Director General</p>
                        <p>Human Resource Dept.</p>
                        <p>Email: hussain@domain.com</p>
                        <p>Personal Email: hidden</p>
                    </div>
                    <div class="col-md-3">
                        <p>Office: +960 7774546, ext. 132</p>
                        <p>Home: +960 3324394</p>
                        <p>Mob: +960 9994999</p>
                        <p>Facebook: hidden</p>
                        <p>twitter: hidden</p>
                    </div>
                    <div class="col-md-3">
                        <p>In Office: Yes,</p>
                        <p>Supervisor for: 10 Staff</p>
                        <p>Year of Service: 5</p>
                    </div>
                </div>
                <hr/>

                <div class="row">
                    <div class="col-md-2 emp-list-pic">
                        <!-- <img src="{{ asset('public/img/avatar-3.jpg') }}"> -->
                        <img src="{{ asset('img/avatar-3.jpg') }}" />
                    </div>
                    <div class="col-md-4">
                        <h5>Hussain Ahmed Falah Manik / <small>112</small></h5>
                        <p>Assistance Director General</p>
                        <p>Human Resource Dept.</p>
                        <p>Email: hussain@domain.com</p>
                        <p>Personal Email: hidden</p>
                    </div>
                    <div class="col-md-3">
                        <p>Office: +960 7774546, ext. 132</p>
                        <p>Home: +960 3324394</p>
                        <p>Mob: +960 9994999</p>
                        <p>Facebook: hidden</p>
                        <p>twitter: hidden</p>
                    </div>
                    <div class="col-md-3">
                        <p>In Office: Yes,</p>
                        <p>Supervisor for: 10 Staff</p>
                        <p>Year of Service: 5</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- panel body end -->
</div>
<!-- panel end -->
  </div>
</section>

@endsection
