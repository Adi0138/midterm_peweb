@extends('layout/main')
@section('title', 'Review')
@section('container')
     
<div class="container">

    <h1>Feedback Form</h1>
    
    <form method="POST" action="{{route('feedback.store')}}" enctype="multipart/form-data">
      @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">IDCustomer</label>
          <input type="number" class="form-control" id="inputID" name="ID">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Name</label>
          <input type="text" class="form-control" id="InputName" name="Name">
        </div>

        {{-- <div class="form-group">
          <label for="exampleFormControlSelect1">Ratings</label>
          <select class="form-control" id="Ratings">
            <option>Very Dissatisfied</option>
            <option>Dissatisfied</option>
            <option>Normal</option>
            <option>Satisfied</option>
            <option>Very Satisfied</option>
          </select>
        </div> --}}

        <div class="form-group row">
          <label for="example-datetime-local-input" class="col-2 col-form-label">Ratings</label>
        <div class="col-10">
          <select class="custom-select" name="Ratings">
            <option value="Dissatisfied">Dissatisfied</option>
            <option value="Normal">Normal</option>
            <option value="Satisfied">Satisfied</option>
            <option value="Very Satisfied">Very Satisfied</option>
          </select>
        </div>
         </div>
  

        <div class="form-group">
          <label for="exampleInputPassword1">Write Your Experience</label>
          <input type="text" class="form-control" id="WriteYourExperience" name="WriteYourExperience">
        </div>

          <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>   
</div>    
@endsection