@extends('layout/main')
@section('title', 'Hotel Review')
@section('container')
     
<div class="container">
   <div class="row">
    <h1>Hotel Review</h1>
    <table class="table">
     <thead class="thead-dark">
         <tr>
             <th scope="col">ID Customer</th>
             <th scope="col">Name</th>
             <th scope="col">Rating</th>
             <th scope="col">Experience</th>
         </tr>
         @foreach($feedback as $fe)
         <tbody>
         <tr>
             <td>{{ $fe->IDCustomer }}</td>
             <td>{{ $fe->Name }}</td>
             <td>{{ $fe->Ratings }}</td>
             <td>{{ $fe->WriteYourExperience }}</td>
         </tr>
         </tbody>
        @endforeach
     </thead>
    </table>
   </div>
</div>    
@endsection
