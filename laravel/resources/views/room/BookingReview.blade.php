@extends('layout/main')
@section('title', 'BookingReview')
@section('container')
     
<div class="container">
   <div class="row">
           <h1>Your Booking Review</h1>
           <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID Customer</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Addres</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Check In</th>
                    <th scope="col">Check Out</th>
                    <th scope="col">Payment Method</th>
                    <th scope="col">Action</th>

                </tr>
                @foreach($forms as $f)
                <tbody>
		        <tr>
                    <td>{{ $f->IDCustomer }}</td>
                    <td>{{ $f->Name }}</td>
                    <td>{{ $f->Email }}</td>
                    <td>{{ $f->PhoneNumber }}</td>
                    <td>{{ $f->CheckIn }}</td>
                    <td>{{ $f->CheckOut }}</td>
                    <td>{{ $f->PaymentMethod }}</td>
                        <td> 
                            <a href="" class="btn btn-success">Check Out</a>   
                            <a href="" class="btn btn-primary">Edit</a>   
                            <a href="" class="btn btn-danger">Cancel Booking</a>   
                        </td>
                </tr>
                </tbody>
		    @endforeach
            </thead>
            
           </table>

   </div>
</div>    
@endsection
