@extends('layout/main')
@section('title', 'Swimming Pool ITS')
@section('container')
     
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1>Swimming Pool</h1>
            <img src="{{ ('img/kolamhill.jpg') }}" class="img-fluid" alt="Responsive image">
            <p>You can take a long leisurely swim in our swimming pool which is available for both adults and children, or relax in our lounge by the pool 
                with your favorite drink. The swimming pool at the ITS Hotel is quite discussed on social media, especially Instagram. This swimming pool is 
                a hit because of its location on a hill or 500 meters above sea level. The swimming pool at ITS Hotel is quite crowded with tourists. Apart from 
                the unique skypool concept that you have, beautiful views and fresh air are also an attraction in this swimming pool.</p>
            <h2>there are also several swimming pools in this hotel its</h2>
             <h5 id="list-item-1">Main pool</h5>
             <p><img src="{{ ('img/kolamrenangutama.jpg ') }}" class="img-fluid" alt="Responsive image"></p>
             <h5 id="list-item-2">Swimming Pool For Family</h5>
             <p><img src="{{ ('img/kolamrenangumum.jpg ') }}" class="img-fluid" alt="Responsive image"></p>
             <h5 id="list-item-3">Private Swimming Pool Presidential Room</h5>
             <p><img src="{{ ('img/presiden4.jpg ') }}" class="img-fluid" alt="Responsive image"></p>
             <h5 id="list-item-4">Swimming Pool Outdoor</h5>
             <p><img src="{{ ('img/kolamrenanganak.jpg ') }}" class="img-fluid" alt="Responsive image"></p>
           </div>
        </div>
    </div>
 </div>    
@endsection