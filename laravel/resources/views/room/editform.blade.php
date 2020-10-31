@extends('layout/main')
@section('title', 'Reservation Form')
@section('container')

<div class="container">
	<h3>Edit Booking Form</h3>

 
	@foreach($forms as $f)
	<form action="/forms/update" method="post">
		{{ csrf_field() }}
		<div class="form-row">
			<div class="form-group col-md-6">
			  
			  <input  type="hidden" name="id" value="{{ $f->IDCustomer }}">
			
				<br><label for="inputName">Name</label>
				<input type="text" class="form-control" id="InputName" name="Name" value="{{ $f->Name }}">
		    			
			<div class="form-group">
				<label for="inputEmail">E-mail</label>
				<input type="text" class="form-control" id="inputEmail" name="Email" value="{{ $f->Email }}">
			</div>

			<div class="form-group">
				<label for="inputAddress">Address</label>
				<input type="text" class="form-control" id="inputAddress" name="Address" value="{{ $f->Address }}">
			</div>
		  
			<div class="form-group">
				<label for="inputPhoneNumber">Phone Number</label>
				<input type="number" class="form-control" id="inputPN" name="PhoneNumber">{{ $f->PhoneNumber }}
			</div>

			<div class="form-group row">
				<label for="example-datetime-local-input" class="col-2 col-form-label">CheckIn (Date/Time)</label>
				<div class="col-10">
					<input class="form-control" type="datetime-local" value="2020-10-19T13:45:00" id="example-datetime-local-input" name="CheckIn">{{ $f->CheckIn }}
				</div>
			</div>
			
			<div class="form-group row">
				<label for="example-datetime-local-input" class="col-2 col-form-label">CheckOut (Date/Time)</label>
				<div class="col-10">
					<input class="form-control" type="datetime-local" value="2020-10-20T13:45:00" id="example-datetime-local-input" name="CheckOut">{{ $f->CheckOut }}
				</div>
			</div>
			
			<div class="form-group row">
				<label for="example-datetime-local-input" class="col-2 col-form-label">Payment Method</label>
				<div class="col-10">
				<select class="custom-select" name="PaymentMethod">{{ $f->PaymentMethod }}
					<option value="DebitCard">DebitCard</option>
					<option value="CreditCard">CreditCard</option>
				</select>
				</div>
			</div>

				<input type="submit" class="btn btn-success" value="Save"> 
		</div>
			
		{{-- <input type="hidden" name="id" value="{{ $f->IDCustomer }}"> <br/>
		Name <input type="string" required="required" name="Name" value="{{ $f->Name }}"> <br/>
		Email <input type="string" required="required" name="Email" value="{{ $f->Email }}"> <br/>
		Address <input type="string" required="required" name="Address" value="{{ $f->Address }}"> <br/>
        PhoneNumber <input required="required" name="PhoneNumber">{{ $f->PhoneNumber }} <br/>
        CheckIn <input type="string" required="required" name="CheckIn">{{ $f->CheckIn }} <br/>
        CheckOut <input type="string" required="required" name="CheckOut">{{ $f->CheckOut }} <br/>
        PaymentMethod <input type="enum" required="required" name="PaymentMethod">{{ $f->PaymentMethod }} <br/>
		<input type="submit" value="Save"> --}}
	</form>
	@endforeach
</div>
@endsection
		
 



