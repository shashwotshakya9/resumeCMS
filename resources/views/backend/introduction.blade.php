{{-- @extends('layouts.app') --}}
@extends('backend.index')

@section('introcontent')
<div class="table-responsive">
    <h2> For Introduction Portion</h2>
   <form method="post" action="{{url('addIntro')}}" enctype="multipart/form-data">
     @csrf                                                                                        
     <div class="form-group">
       <label>Your Image</label>
       <input id="image" type="file" name="image" class="btn-success">
     </div>
     <div class="form-group">
       <label>Intro Message</label>
       <input id="intro" type="text" name="intro" class="form-control">
     </div>
     <div class="form-group">
       <label>Full Name</label>
       <input id="fullname" type="text" name="fullname" class="form-control">
     </div>
     <div class="form-group">
       <label>Date of Birth</label>
       <input id="dob" type="text" name="dob" class="form-control">
     </div>
     <div class="form-group">
       <label>Email</label>
       <input id="email" type="text" name="email" class="form-control">
     </div>
     <div class="form-group">
       <label>Website</label>
       <input id="website" type="text" name="website" class="form-control">
     </div>
     <div class="form-group">
       <button class="btn btn-success" id="saveBtn" value="create-entry">Add</button>
     </div>
    </form>

    </div>

<div class="flex-center position-ref full-height">    
    
    <table class="table table-bordered data-table">
      <thead class="thead-dark">
          <tr>
              <th>ID</th>
              <th>Intro Message</th>
              <th>DOB</th>
              <th>Email</th>
              <th>Website</th>
              <th width="300px">Action</th>
          </tr>
          {{-- @foreach($intro as $intros)
          <tr>
            <td>{{$intros->iid}}</td>
            <td>{{$intros->intro}}</td>
            <td>{{$intros->dob}}</td>
            <td>{{$intros->email}}</td>
            <td>{{$intros->website}}</td>
            <td>{{$intros->updated_at}}</td> --}}
{{--             
            <td><a href="">Delete</a><td>
            
          @endforeach --}}
      </thead>
      <tbody>
      </tbody>
  </table>
  </div>

  

  
@endsection