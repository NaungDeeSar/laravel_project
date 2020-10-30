@extends('master')

@section('content')
  <!-- Page Header -->
  <header class="masthead" style="background-image: url({{asset('mytemplateassets/img/about-bg.jpg')}})">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1> Student Edit Form</h1>
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
        <form method="post" action="{{route('student.update',$student->id)}}">
           @csrf 
           @method('PUT')                        
           <div class="form-group row">
             <div class="col-md-6">
              <label>Rollno:</label>
              <input type="text" name="rollno" class="form-control @error('rollno') is-invalid @enderror" value="{{$student->rollno}}{{-- @error('rollno') {{old('rollno')}} @else {{$student->rollno}} @enderror --}}">
              @error('rollno')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="col-md-6">
              <label>Name:</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{$student->name}}">
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>
            
          </div>                         
         
          
            <div class="form-group row">
              <div class="col-md-6">
               <label>Email:</label>
               <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="@error('email') {{old('email')}} @else {{$student->email}} @enderror">
               @error('email')
               <div class="alert alert-danger">{{ $message }}</div>
               @enderror
                
              </div>
              <div class="col-md-6">
                 <label>Phone:</label>
            <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{$student->phone}}">
            @error('phone')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
              
                
              </div>
           
          </div>      
                
        
          <div class="form-group row">
            <div class="col-md-12">
              <label>Address:</label>
              <textarea class="form-control  @error('address') is-invalid @enderror" name="address">
                    {{$student->address}}
              </textarea>
              @error('address')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
              
            </div>
            
          </div>            
     <input type="submit" name="" value="Update" class="btn btn-primary">
    
        
        </form>
      </div>
    </div>
  </div>
@endsection