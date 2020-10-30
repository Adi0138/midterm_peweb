<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<h3>Edit Booking Form</h3>
 
	<a href="/forms"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($forms as $f)
	<form action="/forms/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $f->IDCustomer }}"> <br/>
		Name <input type="string" required="required" name="Name" value="{{ $f->Name }}"> <br/>
		Email <input type="string" required="required" name="Email" value="{{ $f->Email }}"> <br/>
		Address <input type="string" required="required" name="Address" value="{{ $f->Address }}"> <br/>
        PhoneNumber <input required="required" name="PhoneNumber">{{ $f->PhoneNumber }} <br/>
        CheckIn <input type="string" required="required" name="CheckIn">{{ $f->CheckIn }} <br/>
        CheckOut <input type="string" required="required" name="CheckOut">{{ $f->CheckOut }} <br/>
        PaymentMethod <input type="enum" required="required" name="PaymentMethod">{{ $f->PaymentMethod }} <br/>
		<input type="submit" value="Save">
	</form>
	@endforeach
		
 
</body>
</html>


