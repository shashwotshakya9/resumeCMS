
@extends('backend.index')

@section('aboutmecontent')
@if(Session::has('message'))
<div class="alert alert-success alert-dismissable">
  {{ Session::get('message') }}
</div>
@endif
<form method="post" action="{{url('addAboutme')}}" enctype="multipart/form-data">
    @csrf
    <h2> For About Me Portion</h2>   
    <div class="form-group">
    <label>Add Image</label>
    <input id="image" type="file" name="image" class="btn-success">
    </div>
    <div class="form-group">
        <label>Title</label>
        <input id="atitle" type="text" name="atitle" class="form-control">
    </div>
    <div class="form-group">
        <label>Description</label>
        <input id="adescription" type="text" name="adescription" class="form-control">
    </div>
    <div class="form-group">
        <label>Content Title 1</label>
        <input id="acontenttitle_one" type="text" name="acontenttitle_one" class="form-control">
    </div>
    <div class="form-group">
        <label>Content Description 1</label>
        <input id="acontentdescription_one" type="longtext" name="acontentdescription_one" class="form-control">
    </div>
    <div class="form-group">
        <label>Content Title 2</label>
        <input id="acontenttitle_two" type="text" name="acontenttitle_two" class="form-control">
    </div>
    <div class="form-group">
        <label>Content Description 2</label>
        <input id="acontentdescription_two" type="longtext" name="acontentdescription_two" class="form-control">
    </div>
    <div class="form-group">
        <label>Content Title 3</label>
        <input id="acontenttitle_three" type="text" name="acontenttitle_three" class="form-control">
    </div>
    <div class="form-group">
        <label>Content Description 3</label>
        <input id="acontentdescription_three" type="longtext" name="acontentdescription_three" class="form-control">
    </div>
    <div class="form-group">
        <button class="btn btn-success">Add</button>
      </div>
</form>
    @endsection