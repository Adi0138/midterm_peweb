@extends('layout/main')
@section('title', 'Our Facilities')
@section('container')
     
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Jumbotron Template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/jumbotron/">

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

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
    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">
    
    <style>
     
     body {
  padding-top: 3.5rem;
}
    </style>


    <script src="https://kit.fontawesome.com/39ae92e9b8.js" crossorigin="anonymous"></script>
  </head>
  <body>

<main role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <div class="container">
      <h1 class="display-3">Facilities</h1>
      <p>ITS hotel provides several facilities for the comfort and needs of all of you who want to rent an ITS hotel, so here are the details of our facility There are Swimming Pool, SPA, Valet Parking, WI-FI, Ballroom, Restaurant, Sauna, Fittness Center</p>
    </div>
  </div>
  <div class="container">
    <!-- Example row of columns --> 
    <div class="row">
      <div class="col-md-4">
        <h2><i class="fas fa-swimming-pool"></i> Swimming Pool </h2>
      
        <p><a class="btn btn-secondary" href="/Details1" role="button">View details &raquo;</a></p>
      </div>
      <div class="col-md-4">
        <h2><i class="fas fa-spa"></i> SPA</h2>
        <p><a class="btn btn-secondary" href="/Details2" role="button">View details &raquo;</a></p>
      </div>
      <div class="col-md-4">
        <h2><i class="fas fa-parking"></i> Valet Parking</h2>
        <p><a class="btn btn-secondary" href="/Details3" role="button">View details &raquo;</a></p>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4">
        <h2><i class="fas fa-wifi"></i> WI-FI</h2>
        <p><a class="btn btn-secondary" href="/Details4" role="button">View details &raquo;</a></p>
      </div>
      <div class="col-md-4">
        <h2><i class="fas fa-city"></i> Ballroom</h2>
        <p><a class="btn btn-secondary" href="/Details5" role="button">View details &raquo;</a></p>
      </div>
      <div class="col-md-4">
        <h2><i class="fas fa-hot-tub"></i>Sauna</h2>
        <p><a class="btn btn-secondary" href="/Details6" role="button">View details &raquo;</a></p>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4">
        <h2><i class="fas fa-swimming-pool"></i> Fittness Center </h2>
        <p><a class="btn btn-secondary" href="/Details7" role="button">View details &raquo;</a></p>
      </div>
      <div class="col-md-4">
        <h2><i class="fas fa-swimming-pool"></i> Restaurant </h2>
        <p><a class="btn btn-secondary" href="/Details8" role="button">View details &raquo;</a></p>
      </div>
    </div>

    <hr>

  </div> <!-- /container -->

</main>

<footer class="container">
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</html>

</div>    
@endsection

  