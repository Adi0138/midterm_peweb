@extends('layout/main')
@section('title', 'Reservation Form')
@section('container')

<div class="container">
<div class="FormReservation"><h1>Form Reservation</h1></div>
<form method="POST" action="{{route('bookingform.store')}}" enctype="multipart/form-data">
  {{-- {{ csrf_field() }}   --}}
@csrf
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputID">ID Customer</label>
        <input type="number" class="form-control" id="inputID" name="ID">
        <input type="number" class="form-control" id="inputID" name="Room" hidden value="<?php echo $data ?>">
      </div>
      
      <div class="form-group col-md-6">
        <label for="inputName">Name</label>
        <input type="text" class="form-control" id="InputName" name="Name">
      </div>
    </div>
    
    
    <div class="form-group">
      <label for="inputEmail">E-mail</label>
      <input type="text" class="form-control" id="inputEmail" name="Email">
    </div>

    <div class="form-group">
      <label for="inputAddress">Address</label>
      <input type="text" class="form-control" id="inputAddress" name="Address">
    </div>



      <div class="form-group">
        <label for="inputPhoneNumber">Phone Number</label>
        <input type="number" class="form-control" id="inputPN" name="PhoneNumber">
      </div>


      {{-- <div class="form-group row">
        <label for="example-datetime-local-input" class="col-2 col-form-label">Payment Method</label>
      <div class="col-10">
        <select class="custom-select" name="PaymentMethod">
          <option value="1">Presidential Suite Room</option>
          <option value="2">Deluxe Kings Room</option>
        </select>
      </div>
       </div> --}}
    <div class="form-group row">
      <label for="example-datetime-local-input" class="col-2 col-form-label">CheckIn (Date/Time)</label>
      <div class="col-10">
        <input class="form-control" type="datetime-local" value="2020-10-19T13:45:00" id="example-datetime-local-input" name="CheckIn">
      </div>
    </div>

    <div class="form-group row">
      <label for="example-datetime-local-input" class="col-2 col-form-label">CheckOut (Date/Time)</label>
      <div class="col-10">
        <input class="form-control" type="datetime-local" value="2020-10-20T13:45:00" id="example-datetime-local-input" name="CheckOut">
      </div>
    </div>

    <div class="form-group row">
      <label for="example-datetime-local-input" class="col-2 col-form-label">Payment Method</label>
    <div class="col-10">
      <select class="custom-select" name="PaymentMethod">
        <option value="DebitCard">DebitCard</option>
        <option value="CreditCard">CreditCard</option>
      </select>
    </div>
     </div>
    
    <!-- <div class="form-group">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          I accept the Term of Use & Privacy Policy
        </label>
      </div>
    </div> -->

    <button type="submit" class="btn btn-success" >Reserve Now !</button>
    
  </form>


<!-- Modal
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Validation Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      Are you sure your data is valid ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <button type="button" class="btn btn-primary">Yes</button>
      </div>
    </div>
  </div>
</div> -->


</div>
@endsection