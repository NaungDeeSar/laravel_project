@extends('master')

@section('content')
  <!-- Page Header -->
  <header class="masthead" style="background-image: url({{asset('mytemplateassets/img/about-bg.jpg')}})">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1>All Students</h1>
            <span class="subheading"></span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <a href="{{route('student.create')}}" class="btn btn-info">Add Student</a>
      </div>
      <div class="col-lg-8 col-md-10 mx-auto">
    
       
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Rollno</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
     @php 
         $i=1;
      @endphp     
   @foreach($students as $row)
      
  <tbody>
   
    <tr>
      <th scope="row"> {{$i++}}</th>
      <td>{{$row->name}} </td>
      <td>{{$row->email}}</td>
      <td>{{$row->phone}}</td>
      <td>{{$row->address}}</td>
      <td>
        <a href="{{route('student.edit',$row->id)}}"><i class="fa fa-edit text-primary"></i></a>
        
        <form method="post" action="{{route('student.destroy',$row->id)}}" onsubmit="return confirm('are your sure?')" class="d-inline-block">
            @csrf
            @method('DELETE')
            
            <button type="submit" name="onsubmit" >
              <i class="fa fa-trash text-danger"></i>
              
            </button>
        </form>
          <a href="{{route('student.show',$row->id)}}" class="btn btn-primary">Detail</a>
        
      </td>
    </tr>
    
  </tbody>
     @endforeach
</table>

        
     
      </div>
    </div>
  </div>
@endsection
@section('testing')
 <hr>
@endsection