@extends('layout/main')
@section('title', 'About Us')
@section('container')
     
<style>
    .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    }

    @media (min-width: 768px) {
    .bd-placeholder-img-lg {
        font-size: 3.5rem;
    }
    }
</style>

<style>

a,
a:focus,
a:hover {
  color: #fff;
}

/* Custom default button */
.btn-secondary,
.btn-secondary:hover,
.btn-secondary:focus {
  color: #333;
  text-shadow: none; /* Prevent inheritance from `body` */
  background-color: #fff;
  border: .05rem solid #fff;

}


/*
 * Base structure
 */

html,
body {
  height: 100%;
  width: 100%;
  background-image: url("{{ asset('/img/hotel-hp.jpg')}}");
}


body {
  /* display: -ms-flexbox; */
  /* display: flex; */
  color: #fff;
  text-shadow: 0 .05rem .1rem rgba(0, 0, 0, .5);
  box-shadow: inset 0 0 5rem rgba(0, 0, 0, .5);
}

.cover-container {
  max-width: 42em;
}


/*
 * Header
 */
.masthead {
  margin-bottom: 2rem;
}

.masthead-brand {
  margin-bottom: 0;
}


@media (min-width: 48em) {
  .masthead-brand {
    float: left;
  }
  .nav-masthead {
    float: right;
  }
}


/*
 * Cover
 */
.cover {
  padding: 0 1.5rem;
}
.cover .btn-lg {
  padding: .75rem 1.25rem;
  font-weight: 700;
}


/*
 * Footer
 */
.mastfoot {
  color: rgba(255, 255, 255, .5);
}

</style>

<style>
    main { 
        margin-top: 130px !important;
        margin-left: 150px !important;

    }
</style>

<body class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-10">
        <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
          <main role="main" class="inner cover">
            <h1 class="cover-heading text-center">About Us</h1>
            <p class="lead">The ITS Hotel, a perfect blend of Indonesian culture, traditions, lifestyle and beauty. A warm smile and impeccable service of ITS Hotel always accompany you during your stay with us. The ITS Hotel is located in the most favorite tourist destination in East Java, a magnificent ambience combining natural, contemporary and ancient United Kingdom Design. Our premium facilities which combine with our service quality together with exotic view of the three biggest mountains in East Java forming a luxury rejuvenating escape in the first five stars resort in East Java.</p>
            <p class="lead">
              <a href="" class="btn btn-lg btn-secondary">Hotel Review</a>
            </main>
          </div>    
        </div>
      </div>
    </div>    
  </body>
    
@endsection

  