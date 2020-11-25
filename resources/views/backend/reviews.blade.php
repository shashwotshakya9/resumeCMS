
@extends('backend.index')

@section('reviewscontent')

@if(Session::has('message'))
<div class="alert alert-success alert-dismissable">
  {{ Session::get('message') }}
</div>
@endif
<form method="post" action="{{url('addReviews')}}" enctype="multipart/form-data">
    @csrf
    <h2> For Reviews Portion</h2>   
    <div class="form-group">
    <label>Reviewer Name</label>
    
    <input id="rname" type="text" name="rname" class="form-control">
    </div>
    <div class="form-group">
        <label>Reviewer Postion</label>
        <input id="rposition" type="text" name="rposition" class="form-control">
    </div>
    <div class="form-group">
        <label>Review</label>
        <input id="rreview" type="text" name="rreview" class="form-control">
    </div>
    <div class="form-group">
        <label>Reviewer's Image</label>
        <input id="image" type="file" name="image" class="btn-success">
    </div>
    
    <div class="form-group">
        <button class="btn btn-success">Add</button>
      </div>
</form>
    @endsection