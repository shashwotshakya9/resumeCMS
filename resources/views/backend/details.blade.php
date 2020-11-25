@extends('backend.index')

@section('detailscontent')
    @if(Session::has('message'))
    <div class="alert alert-success alert-dismissable">
    {{ Session::get('message') }}
    </div>
    @endif
<form method="post" action="{{url('addDetails')}}" enctype="multipart/form-data">
    @csrf
    <h2> For Details Portion</h2>    
    <div class="form-group">
        <label>Footer Title</label>
        <input id="dtitle" type="text" name="dtitle" class="form-control">
    </div> 
    <div class="form-group">
        <label>Phone No.</label>
        <input id="phone" type="text" name="phone" class="form-control">
    </div> 
    <div class="form-group">
        <label>Facebook Link</label>
        <input id="fblink" type="text" name="fblink" class="form-control">
    </div> 
    <div class="form-group">
        <label>Twitter Link</label>
        <input id="twitterlink" type="text" name="twitterlink" class="form-control">
    </div> 
    <div class="form-group">
        <label>Instagram Link</label>
        <input id="instalink" type="text" name="instalink" class="form-control">
    </div> 
    <div class="form-group">
        <label>Linkedin Link</label>
        <input id="linkedinlink" type="text" name="linkedinlink" class="form-control">
    </div>
    <div class="form-group">
        <label>Youtube Link</label>
        <input id="ytlink" type="text" name="ytlink" class="form-control">
    </div>

    <div class="form-group">
        <button class="btn btn-success">Add</button>
    </div> 
</form>
    
   
@endsection