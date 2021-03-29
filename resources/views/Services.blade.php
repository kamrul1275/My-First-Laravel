@extends('layout.app')
@section('titel,services')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-4">
         
            <div class="card" style="width:100%">
              <img src="{{asset('img/card4.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Web Design</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
             <a href="#" class="btn btn-info">Service Name</a>
       </div>
       </div>
       </div>
         <div class="col-md-4">

         <div class="card" style="width:100%">
              <img src="{{asset('img/card4.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Web Design</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
             <a href="#" class="btn btn-info">Service Name</a>
           </div>
         </div>
         </div>



         <div class="col-md-4">


         <div class="card" style="width:100%">
              <img src="{{asset('img/card4.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Web Design</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
             <a href="#" class="btn btn-info">Service Name</a>
  </div>
</div>

         </div>
    </div>
</div>




<div class="container mt-5 mb-4">

<div class="row">
<div class="col-md-6">
<form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Your Name</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Your Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> 
    </div>

    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Phone Number</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

 
  <button type="submit" class="btn  btn-primary">Submit</button>
</form>


</div>
<div class="col-md-6">
    <h4>Address</h4>
    <p>Dakhinpara, Block-A, Dhamrai, Dhaka-1350</p>
    <P>01981337121</P>
    <P>kamrulhassan5343@gmail.com</P>
</div>

</div>
</div>




@endsection
