@extends('layouts.main')

@section('title')
Madoms Global Trade
@stop

@section('content')

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/banner2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-sm-block">
        <h5>First slide label</h5>
        <h1>Nulla vitae elit libero</h1>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/banner2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>  
        <h1>Nulla vitae elit libero</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/banner2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <h1>Nulla vitae elit libero</h1>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div id="indexWelcome">
	<div class="container-fluid">
		<div class="text-center col-md">
			<h1> OUR <span>SERVICES</span></h1>
						<p> Praesent commodo cursus magna, vel scelerisque nisl consectetur</p>
    </div>
    
   	<div class="row">
            <div class="col-mb-3">
                <div class="card one" style="width: 18rem;">
                <img src="images/tradeconsult.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"> TRADE CONSULTANCY </h5>
                  <hr>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Read More</a>
                </div>
              </div>
		        </div>
		
            <div class="col-mb-3">
                <div class="card two" style="width: 18rem;">
                    <img src="images/impandexp.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">IMPORT AND EXPORT SERVICES</h5>
                      <hr>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                  </div>
            </div>

            <div class="col-mb-3">
                  <div class="card three" style="width: 18rem;">
                      <img src="images/logisticsb.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">LOGISTICS</h5>
                        <hr>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                      </div>
                    </div>
            </div>

            <div class="col-mb-3">
                  <div class="card" style="width: 18rem;">
                      <img src="images/endtoend.png" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">END TO END TRADE SERVICES</h5>
                        <hr>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                      </div>
                    </div>
            </div>
    

        </div>
	</div>
</div>

<div id="indexCon">
	<div class="container-fluid">
  <img src="images/whyus.png">
  </div>
</div>

<div id="about">
	<div class="container-fluid">
  <div class="row">
            <div class="col-md-5 imgabout">
		    </div>
		
		<div class="col-md-7 aboutCon">
      <h5> Our Little Story </h5>
      <h1> About Madoms <span> Global </span> Trade </h1>

      <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna. Nunc viverra imperdiet enim. Fusce est.
      <br>
      Vivamus a tellus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin pharetra nonummy pede. Mauris et orci. Aenean nec lorem.
      <br>
     <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna. Nunc viverra imperdiet enim. Fusce est. </p>
    </div>
  </div>
  </div>
</div>

<div id="project">
	<div class="container-fluid">
    <div class="row">
    <div class="col-mb-4">
     <div class="card one" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title"> 50+ </h5>
                  <p class="card-text"> Initiated Projects </p>
                 </div>
              </div>
  </div>
  <div class="col-mb-4">
  <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title"> 50 </h5>
                  <p class="card-text"> Successful Projects </p>
                 </div>
              </div>
  </div>
  <div class="col-mb-4">
  <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title"> 30+ </h5>
                  <p class="card-text"> Happy Clients </p>
                 </div>
              </div>
  </div>
</div>
   </div>
</div>

<div id="client">
	<div class="container-fluid">
  <div class="row">
            <div class="col-md-5">
            <h1> CLIENTS <span> TESTIMONIALS </span></h1>
          
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
   </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="carousel-caption d-none d-md-block">
      <h3 style="color: black;"> <i class="fas fa-quote-left"></i>  Nulla vitae elit libero, a pharetra augue mollis interdum.
       Nulla vitae elit libero, a pharetra augue mollis interdum. <i class="fas fa-quote-right"></i></h3>
        <h5>Mr Adedeji Khaleel</h5>
        </div>
    </div>
    <div class="carousel-item">
      <div class="carousel-caption d-none d-md-block">
      <h3 style="color: black;"> <i class="fas fa-quote-left"></i>  Nulla vitae elit libero, a pharetra augue mollis interdum.
       Nulla vitae elit libero, a pharetra augue mollis interdum. <i class="fas fa-quote-right"></i></h3>
        <h5>Miss Osibote Omotayo</h5>
      </div>
    </div>
  </div>
</div>


		    </div>
		
		<div class="col-md client">
      	<div class="text-center col-md">
			<h1> OUR <span>CLIENTS</span></h1>
						<p> Praesent commodo cursus magna, vel scelerisque nisl consectetur</p>
    </div>
    
   	<div class="row">
            <div class="col-mb-3">
                <div class="card one" style="width: 8rem;">
                <img src="images/tradeconsult.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"> Cloud Energy Photoelectric Ltd </h5>
                </div>
              </div>
		        </div>
		
            <div class="col-mb-3">
                <div class="card two" style="width: 8rem;">
                    <img src="images/impandexp.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">CCETC Ossiomo Power</h5>
                    </div>
                  </div>
            </div>

            <div class="col-mb-3">
                  <div class="card three" style="width: 8rem;">
                      <img src="images/logisticsb.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Godwin Okafor and Sons</h5>
                       </div>
                    </div>
            </div>

            <div class="col-mb-3">
                  <div class="card" style="width: 8rem;">
                      <img src="images/endtoend.png" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Nicol and Partners Nig. Ltd</h5>
                       </div>
                    </div>
            </div>
     </div>
     
     <div class="row">
            <div class="col-mb-3">
                <div class="card one" style="width: 8rem;">
                <img src="images/tradeconsult.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"> Donasulu Brothers </h5>
                </div>
              </div>
		        </div>
		
            <div class="col-mb-3">
                <div class="card two" style="width: 8rem;">
                    <img src="images/impandexp.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Winco Foam</h5>
                    </div>
                  </div>
            </div>

            <div class="col-mb-3">
                  <div class="card three" style="width: 8rem;">
                      <img src="images/logisticsb.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">DMU Industries</h5>
                       </div>
                    </div>
            </div>

            <div class="col-mb-3">
                  <div class="card" style="width: 8rem;">
                      <img src="images/endtoend.png" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">PE Energy</h5>
                       </div>
                    </div>
            </div>
     </div>

    </div>
  </div>
  </div>
</div>

@stop