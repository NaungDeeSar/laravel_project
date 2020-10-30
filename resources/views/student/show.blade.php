@extends('master')

@section('content')
  <!-- Page Header -->
  <header class="masthead" style="background-image: url({{asset('mytemplateassets/img/about-bg.jpg')}})">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1> Student Form</h1>
            <span class="subheading"></span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
       
         Roll_No:<span>{{$student->rollno}}</span> <br>
        Name:<span>{{$student->name}}</span> <br>
          Email:<span>{{$student->email}}</span> <br>
            Phone:<span>{{$student->phone}}</span> <br>
              Address:<span>{{$student->address}}</span>
       
                               
        
      </div>
    </div>
  </div>
@endsection