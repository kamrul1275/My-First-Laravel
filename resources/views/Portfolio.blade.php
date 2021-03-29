@extends('layout.app')
@section('titel,portfolio')

@section('content')


<div class="container">
    <div class="row">
       <div class="col-md-3 py-1">
         <div class="card" style="width:100%">
              <img src="{{asset('img/card4.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Web Design</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
             <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

       </div>
       <div class="col-md-3 py-1">


       <div class="card" style="width: 100%">
              <img src="{{asset('img/card4.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Web Design</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
             <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
       </div>
       </div>

       <div class="col-md-3 py-1">
       <div class="card" style="width: 100%">
              <img src="{{asset('img/card4.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Web Design</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
             <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
       </div>
       </div>
       <div class="col-md-3 py-1">
       <div class="card" style="width:100%">
              <img src="{{asset('img/card4.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Web Design</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
             <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
       </div>
    </div>
</div>

@endsection