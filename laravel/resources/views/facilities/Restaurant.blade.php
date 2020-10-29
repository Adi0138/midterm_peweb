@extends('layout/main')
@section('title', 'Restaurant ITS')
@section('container')
     
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1>Restaurant</h1>
            <img src="{{ ('img/res1.jpg') }}" class="img-fluid" alt="Responsive image">
            <p>Kemang ITS Hotels is a five-star hotel located in the Keputih area and is one of the hotels with the best rooftop cafe & restaurant in Jakarta. In the Sukolilo and Keputih areas, you can relax at The Edge Bistro, which serves delicious culinary delights while relaxing.

                Not only that, in the same area, there is also an infinity pool with beautiful city views. Thanks to the romantic atmosphere built by The Edge Bistro at Kemang Icon Hotels, it has become a favorite date spot for couples.
                
                This hotel with a rooftop cafe and restaurant also offers various other facilities that will make your experience of staying at this five-star hotel even more perfect. Ranging from libraries, art galleries, airport shuttle services, and venues for meetings and events. It's really exciting to stay here, right?</h2>
             
             <p><img src="{{ ('img/res2.jpg ') }}" class="img-fluid" alt="Responsive image"></p>
            
             <p><img src="{{ ('img/res3.jpg ') }}" class="img-fluid" alt="Responsive image"></p>
             
             <p><img src="{{ ('img/res4.jpg ') }}" class="img-fluid" alt="Responsive image"></p>
             
             
           </div>
        </div>
    </div>
 </div>    
@endsection