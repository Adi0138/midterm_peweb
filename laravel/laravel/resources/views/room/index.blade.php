@extends('layout/main')
@section('title', 'Rooms')
@section('container')
     
<div class="container">
   <div class="row">
       <div class="col-10">
           <h1>Room List</h1>

            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">Room Type</th>
                        <th scope="col">Price</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Kings Room</td>
                        <td>Rp 2.000.000/night</td>
                        <td> 
                            <a href="" class="btn btn-primary">View</a>   
                            <a href="/form" class="btn btn-success">Book</a>   
                        </td>
                    </tr>
                </tbody>
            </table>
       </div>
   </div>
</div>    
@endsection

  