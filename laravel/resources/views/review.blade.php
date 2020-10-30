@extends('layout/main')
@section('title', 'Review')
@section('container')
     
<div class="container">

    <h1>Feedback Form</h1>
    
    <form>
        <div class="form-group">
          <label for="exampleInputEmail1">Customer ID</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Customer Name</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>



         <div class="form-group">
    <label for="exampleFormControlSelect1">Ratings</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Very Dissatisfied</option>
      <option>Dissatisfied</option>
      <option>Normal</option>
      <option>Satisfied</option>
      <option>Very Satisfied</option>
    </select>
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Write Your Experience</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
           <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>   
</div>    
@endsection