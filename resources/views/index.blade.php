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
      <img src="images/banner2.jpg" class="w-100" alt="..."> <!--global -->
      <div class="carousel-caption d-block">
        <h1>Welcome to Madoms Global Trade </h1>
        <h4>The number one platform that serves you with the best expertise to understand your complex trade transaction.</h4>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/banner2.jpg" class="w-100" alt="..."> <!--istock -->
      <div class="carousel-caption d-block">
        <h1>Why work with us?</h1>
        <h4>We are professionally accurate, fast and reliable.</h4>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/banner2.jpg" class="w-100" alt="...">
      <div class="carousel-caption d-block">
        <h1>What we offer</h1>
        <h4>We have a dedicated Team to provide the best services at the lowest possible cost.</h4>
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
						<p> Our main aim is to assist both existing and prospective clients to be successful in the trade finance project. </p>
    </div>
    
   	<div class="row service">
            <div class="col-mb-3">
                <div class="card one" style="width: 18rem;">
                <img src="images/tradeconsult.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"> TRADE CONSULTANCY </h5>
                  <hr>
                  <p class="card-text"> The responsibility for importing goods lies solely on the importer, and the potential pitfalls are ...</p>
                  <a href="{{ URL::to('services') }}" class="btn btn-primary">Read More</a>
                </div>
              </div>
		        </div>
		
            <div class="col-mb-3">
                <div class="card two" style="width: 18rem;">
                    <img src="images/impandexp.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">IMPORT AND EXPORT SERVICES</h5>
                      <hr>
                      <p class="card-text">Finance provides buyers more time to pay their imports and prepare ...</p>
                      <a href="{{ URL::to('services') }}" class="btn btn-primary">Read More</a>
                    </div>
                  </div>
            </div>

            <div class="col-mb-3">
                  <div class="card three" style="width: 18rem;">
                      <img src="images/logisticsb.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">LOGISTICS</h5>
                        <hr>
                        <p class="card-text">The on-time and cost-efficient movement of products to their final destination is the ...</p>
                        <a href="{{ URL::to('services') }}" class="btn btn-primary">Read More</a>
                      </div>
                    </div>
            </div>

            <div class="col-mb-3">
                  <div class="card" style="width: 18rem;">
                      <img src="images/endtoend.png" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">END TO END TRADE SERVICES</h5>
                        <hr>
                        <p class="card-text"> We provide effective and efficient Trade Services that support the day-to-day operation of ..</p>
                        <a href="{{ URL::to('services') }}" class="btn btn-primary">Read More</a>
                      </div>
                    </div>
            </div>
    

        </div>
	</div>
</div>

<div id="indexCon">
	<div class="container-fluid">
  <img src="images/whyusc.png">
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

      <p> Welcome to Madoms Global Trade, your number one platform that serves you with the best expertise to understand your complex trade transaction, also ensures that you get timely and optimal solution for your business requirement.
      <br>
      Our Comprehensive range of trade finance solutions allows our client to gain access to cross-border opportunities.
     
    <p> The C.E.O of Madoms Global Trade, Mr Tokunbo Olowu is a seasoned entrepreneur and holds numerous certifications as an auditor. He has provided leaderships for numerous companies in finance management, import and export trade processes, project management and trade-finance consultation services. 
     <br>
     Madoms Global Trade was established in 2014 as a financing company and as now emerge as one of the leading names in Trade Finance Industry... 
     &nbsp; <a href="{{ URL::to('about') }}"> <i> Read More. </i></a></p>
    
    </div>
  </div>
  </div>
</div>

<div id="project">
	<div class="container-fluid ">
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

<hr>
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
      <div class="carousel-caption d-block">
      <h3 style="color: black;"> <i class="fas fa-quote-left"></i> I am really satisfied by MGT Team works, Their speedy delivery is second to none. Good job Madoms. <i class="fas fa-quote-right"></i></h3>
        <h5>Mr Adedeji Khaleel</h5>
        </div>
    </div>
    <div class="carousel-item">
      <div class="carousel-caption d-block">
      <h3 style="color: black;"> <i class="fas fa-quote-left"></i> Since I came in contact with MGT, I have been able to render good and quality services to my customers. <i class="fas fa-quote-right"></i></h3>
        <h5>Miss Osibote Omotayo</h5>
      </div>
    </div>
  </div>
</div>


		    </div>
		
		<div class="col-md client">
      	<div class="text-center col-md">
			<h1> OUR <span>CLIENTS</span></h1>
						<p> People who have trusted us.</p>
    </div>
    
   	<div class="row">
            <div class="col-mb-3">
                <div class="card one" style="width: 8rem;">
                <img src="images/cloudenergy.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"> Cloud Energy Photoelectric Ltd </h5>
                </div>
              </div>
		        </div>
		
            <div class="col-mb-3">
                <div class="card two" style="width: 8rem;">
                    <img src="images/ccetc.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">CCETC Ossiomo Power</h5>
                    </div>
                  </div>
            </div>

            <div class="col-mb-3">
                  <div class="card three" style="width: 8rem;">
                      <img src="images/winco.png" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Winco Foam</h5>
                       </div>
                    </div>
            </div>

            <div class="col-mb-3">
                  <div class="card" style="width: 8rem;">
                      <img src="images/don.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Donasulu Brothers</h5>
                       </div>
                    </div>
            </div>
     </div>
     
     <div class="row">
            <div class="col-mb-3">
                <div class="card one" style="width: 8rem;">
                <img src="images/.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"> Nicol and Partners Nig. Ltd </h5>
                </div>
              </div>
		        </div>
		
            <div class="col-mb-3">
                <div class="card two" style="width: 8rem;">
                    <img src="images/.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Godwin Okafor and Sons</h5>
                    </div>
                  </div>
            </div>

            <div class="col-mb-3">
                  <div class="card three" style="width: 8rem;">
                      <img src="images/.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">DMU Industries</h5>
                       </div>
                    </div>
            </div>

            <div class="col-mb-3">
                  <div class="card" style="width: 8rem;">
                      <img src="images/peenergy.png" class="card-img-top" alt="...">
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