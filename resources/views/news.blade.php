@extends('layouts.main')

@section('title')
Madoms Global Trade: News
@stop

@section('content')
<div id="innerAbout">
	<div class="container-fluid">
		<div class="row">
            <div class="col-md-6">
			<h2>  News </h2>
			  </div>
		
		<div class="col-md">
      <p class="text-right"> Get the latest news about MGT and trade finances. <br>
     Stay upated.
			</p>
        </div>
        </div>
     </div>
</div>

<div id="innerContent">
	<div class="container-fluid">
		<div class="row">
    <div class="col-md-9">
      <h1> News <span> Update </span> </h1>
    </div>
      
    <div id="client" class="col-md" style="margin-right: 2em; padding: 0em;">
          
          <h1 style="margin-bottom: 0em;"> CLIENTS <span> TESTIMONIALS </span></h1>
        
          <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
  <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
  <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
</ol>
<div class="carousel-inner" style="margin-top: 1em; min-height: 450px; padding: 0em;">
  <div class="carousel-item active">
    <div class="carousel-caption d-none d-md-block">
    <h3 style="color: black;"> <i class="fas fa-quote-left"></i> I am really satisfied by MGT Team works, Their speedy delivery is second to none. Good job Madoms. <i class="fas fa-quote-right"></i></h3>
        <h5>Mr Adedeji Khaleel</h5>
      </div>
  </div>
  <div class="carousel-item">
    <div class="carousel-caption d-none d-md-block">
    <h3 style="color: black;"> <i class="fas fa-quote-left"></i> Since I came in contact with MGT, I have been able to render good and quality services to my customers. <i class="fas fa-quote-right"></i></h3>
        <h5>Miss Osibote Omotayo</h5>
    </div>
  </div>
</div>


    </div>
      </div>
		
    </div>
    </div>
    </div>
</div>

<div id="innerClient">
    <div class="text-center col-md">
			<h1> Our Valuable <span>Clients</span></h1>
			<p> People who have trusted us.</p>
    </div>
    
<marquee behavior="scroll" scrollamount="10">
   	<div class="row">
            <div class="col-mb-3">
                <div class="card one" style="width: 8rem;">
                <img src="images/tradeconsult.jpg" class="card-img-top" alt="Cloud Energy Photoelectric Ltd">
                </div>
		        </div>
		
            <div class="col-mb-3">
                <div class="card two" style="width: 8rem;">
                    <img src="images/impandexp.jpg" class="card-img-top" alt="CCETC Ossiomo Power">
                    </div>
            </div>

            <div class="col-mb-3">
                  <div class="card three" style="width: 8rem;">
                      <img src="images/logisticsb.jpg" class="card-img-top" alt="Godwin Okafor and Sons">
                    </div>
            </div>

            <div class="col-mb-3">
                  <div class="card" style="width: 8rem;">
                      <img src="images/endtoend.png" class="card-img-top" alt="Nicol and Partners Nig. Ltd">
                    </div>
            </div>
     
            <div class="col-mb-3">
                <div class="card one" style="width: 8rem;">
                <img src="images/tradeconsult.jpg" class="card-img-top" alt="Donasulu Brothers">
                </div>
		        </div>
		
            <div class="col-mb-3">
                <div class="card two" style="width: 8rem;">
                    <img src="images/impandexp.jpg" class="card-img-top" alt="Winco Foam">
                    </div>
            </div>

            <div class="col-mb-3">
                  <div class="card three" style="width: 8rem;">
                      <img src="images/logisticsb.jpg" class="card-img-top" alt="DMU Industries">
                    </div>
            </div>

            <div class="col-mb-3">
                  <div class="card" style="width: 8rem;">
                      <img src="images/endtoend.png" class="card-img-top" alt="PE Energy">
                     </div>
            </div>
            <div class="col-mb-3">
                  <div class="card" style="width: 8rem;">
                      <img src="images/endtoend.png" class="card-img-top" alt="P. Dulus Enterprises">
                     </div>
            </div>
     </div>
    </marquee>



</div>

@stop