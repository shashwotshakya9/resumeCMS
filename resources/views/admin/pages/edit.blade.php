@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Page</h1> 
    <form action="{{ route('pages.update',['page'=> $model]) }}" method="post">
        
    </form>
</div>


@endsection
