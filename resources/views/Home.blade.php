@extends('layout.app')
@section('titel,home')


@section('content')

<div class="container-fluid parallax mb-5">
<div class="row">
   <div class="bannar-text">
       <h1>Web Design & Development</h1>
       <h4>it software</h4>
       <button class="btn btn-warning">Hire me</button>
   </div>

   
  </div>
</div>
</div>
</div>




<div class="container-fluid ">
<h3 class="text-center mb-5 bg-dark py-4" >Our Servies</h3>
          <div class="row">
         
          
          <div class="col-md-3">
         
         <div class="card" style="width:100%">
           <img src="{{asset('img/card2.jpg')}}" class="card-img-top" alt="...">
             <div class="card-body">
               <h5 class="card-title">Web Design</h5>
               <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-info">Service Name</a>
    </div>
    </div>
    </div>



    <div class="col-md-3">
         
         <div class="card" style="width:100%">
           <img src="{{asset('img/card2.jpg')}}" class="card-img-top" alt="...">
             <div class="card-body">
               <h5 class="card-title">Web Design</h5>
               <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-info">Service Name</a>
    </div>
    </div>
    </div>
      <div class="col-md-3">

      <div class="card" style="width:100%">
           <img src="{{asset('img/card2.jpg')}}" class="card-img-top" alt="...">
             <div class="card-body">
               <h5 class="card-title">Web Design</h5>
               <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-info">Service Name</a>
        </div>
      </div>
      </div>



      <div class="col-md-3">


      <div class="card" style="width:100%">
           <img src="{{asset('img/card2.jpg')}}" class="card-img-top" alt="...">
             <div class="card-body">
               <h5 class="card-title">Web Design</h5>
               <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-info">Service Name</a>
                    </div>       
               </div>

             </div>
        
          </div>
       </div>




<div class="container-fluid mt-5">
<h3 class=" text-center">contact Us</h3>
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

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3647.2483818896253!2d90.20966561405301!3d23.916257184507906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755ef24ea1c2a91%3A0xfdfd9d8a2b422b5b!2sDhamrai%20Bus%20Station!5e0!3m2!1sen!2sbd!4v1616954258451!5m2!1sen!2sbd" width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>


        </div>
    </div>
</div>








@endsection
