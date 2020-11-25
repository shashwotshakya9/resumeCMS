    
    @extends('backend.index')

    @section('faqcontent')
    @if(Session::has('message'))
    <div class="alert alert-success alert-dismissable">
      {{ Session::get('message') }}
    </div>
    @endif
    <form method="post" action="{{url('addFaq')}}" enctype="multipart/form-data">
        @csrf
    <h2> For FAQ Portion</h2>                                     
    <div class="form-group">
        <label>Question 1</label>
        <input id="question_one" type="longtext" name="question_one" class="form-control">
    </div>
    <div class="form-group">
        <label>Answer 1</label>
        <input id="answer_one" type="longtext" name="answer_one" class="form-control">
    </div>
    <div class="form-group">
        <label>Question 2</label>
        <input id="question_two" type="longtext" name="question_two" class="form-control">
    </div>
    <div class="form-group">
        <label>Answer 2</label>
        <input id="answer_two" type="longtext" name="answer_two" class="form-control">
    </div>
    <div class="form-group">
        <label>Question 3</label>
        <input id="question_three" type="longtext" name="question_three" class="form-control">
    </div>
    <div class="form-group">
        <label>Answer 3</label>
        <input id="answer_three" type="longtext" name="answer_three" class="form-control">
    </div>
    <div class="form-group">
        <label>Question 4</label>
        <input id="question_four" type="longtext" name="question_four" class="form-control">
    </div>
    <div class="form-group">
        <label>Answer 4</label>
        <input id="answer_four" type="longtext" name="answer_four" class="form-control">
    </div>
    <div class="form-group">
        <label>Question 5</label>
        <input id="question_five" type="longtext" name="question_five" class="form-control">
    </div>
    <div class="form-group">
        <label>Answer 5</label>
        <input id="answer_five" type="longtext" name="answer_five" class="form-control">
    </div>     
    <div class="form-group">
        <button class="btn btn-success">Add</button>
      </div>
    </form>
    @endsection