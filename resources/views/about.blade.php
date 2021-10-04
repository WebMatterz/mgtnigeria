@extends('layouts.main')

@section('title')
Madoms Global Trade: About MGT

@stop


@section('content')
<div id="innerAbout">
	<div class="container-fluid">
		<div class="row">
            <div class="col-md-3">
			<h2>   About   Us </h2>
			  </div>
		
		<div class="col-md">
      <p class="text-right"> Who we are <br>
      What you need to know about us.
			</p>
        </div>
        </div>
     </div>
</div>

<div id="innerContent">
	<div class="container-fluid">
		<div class="row">
    <div class="col-md-9">
      <h1> Company <span> Overview </span> </h1>
      
      <p> The C.E.O of Madoms Global Trade, Mr Tokunbo Olowu is a seasoned entrepreneur and holds numerous certifications as an auditor. He has provided leaderships for numerous companies
      in finance management, import and export trade processes, project management and trade-finance consultation services.
      <br>
      Madoms Global Trade was established in 2014 as a financing company and as now emerge as one of the leading names in Trade Finance Industry.
      <br>
     <p>Madoms Global Trade is a platform that serves you with the best expertise to understand your complex trade transactions and ensures you get timelyand optima solution for yuor business requirement. 
     <br>
     Our Comprehensive range of trade finance solutions allow our client to gain access to cross-border opportunities.  </p>
    
     <h3> Our Vision &amp; Mission </h3>
     <hr>
      
      <p>Our mission is to use expertise, technology and networks to become the centre of excellence in financial solutions and also provide our cliens with what they need to push their transactions with competitive charges.
      <br>
      Our vission is to be the most trusted and respected local and global source of financial guidance and solutions. To revolutionise the trade finance business. </p>
     
      <h3> Why Choose Us? </h3>
      <hr> 

    <div class="row ">
      <div class="col-md why"> 
        <span> <i class="fa fa-thumbs-up" aria-hidden="true"></i> </span> <br>
        <h4> We are Trusted </h4>
      </div>

      <div class="col-md why"> 
      <span> <i class="fa fa-phone-square" aria-hidden="true"></i> </span> <br>
      <h4> Support Service </h4>
      </div>

      <div class="col-md why"> 
      <span> <i class="fa fa-ambulance" aria-hidden="true"></i> </span> <br>
        <h4> Very Fast Delivery </h4>
      </div>

      <div class="col-md why"> 
      <span> <i class="fa fa-check-square" aria-hidden="true"></i> </span> <br>
        <h4> 100% Guarantee </h4>
      </div>
      </div>
		</div>
		
		<div class="col-md news">
      <h4> Latest News </h4>
      <hr>
      <div class="row">
            <div class="col-mb-3">
                <div class="card one" style="width: 15rem;">
                <div class="card-body">
                  <h5 class="card-title"> News Title </h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="{{ URL::to('news') }}" class="btn btn-primary">Read More</a>
                </div>
              </div>
		        </div>
		
            <div class="col-mb-3">
                <div class="card two" style="width: 15rem;">
                    <div class="card-body">
                      <h5 class="card-title">News Title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="{{ URL::to('news') }}" class="btn btn-primary">Read More</a>
                    </div>
                  </div>
            </div>
      </div>
		
    </div>
    </div>
    </div>
</div>
<hr>
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
<hr>
<div id="team"> 
  <div class="container-fluid">
        <div class="row">
          <div class="col-md-9">
          <h1> Meet <span> Our Team </span> </h1>
          <div class="row">
            <div class="col-mb-3">
                <div class="card one" style="width: 15rem;">
                <div class="card-body">
                  <h5 class="card-title"> Mr Tokunbo Olowu </h5>
                   <h6 class="card-text"> C.E.O</h6>
                   <p class="card-text"> A seasoned Enterpreneur with numerous certifications as an Auditor.</p>
                  </div>
              </div>
		        </div>
		
            <div class="col-mb-3">
                <div class="card two" style="width: 15rem;">
                    <div class="card-body">
                      <h5 class="card-title">Mrs Olowu ..</h5>
                      <h6 class="card-text"> Managing Director</h6>
                      <p class="card-text">  Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                    </div>
                  </div>
            </div>

            <div class="col-mb-3">
                  <div class="card three" style="width: 15rem;">
                      <div class="card-body">
                        <h5 class="card-title">Mr Khaleel Adedeji</h5>
                        <h6 class="card-text"> I.T Support Manager </h6>
                        <p class="card-text"> A young resourceful I.T personnel with more than 5 years of Web Development experience.</p>
                       </div>
                    </div>
            </div>

<!--
            <div class="col-mb-3">
                <div class="card one" style="width: 15rem;">
                <div class="card-body">
                  <h5 class="card-title"> Mr Tokunbo Olowu </h5>
                   <h6 class="card-text"> C.E.O</h6>
                   <p class="card-text">  Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                  </div>
              </div>
		        </div>
		
            <div class="col-mb-3">
                <div class="card two" style="width: 15rem;">
                    <div class="card-body">
                      <h5 class="card-title">Mrs Olowu ..</h5>
                      <h6 class="card-text"> Managing Director</h6>
                      <p class="card-text">  Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                    </div>
                  </div>
            </div>

            <div class="col-mb-3">
                  <div class="card three" style="width: 15rem;">
                      <div class="card-body">
                        <h5 class="card-title">Mr Khaleel Adedeji</h5>
                        <h6 class="card-text"> I.T Support Manager </h6>
                        <p class="card-text">  Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                       </div>
                    </div>
            </div>
-->
            
          </div>
          </div>
          <div id="client" class="col-md" style="margin-right: 1.5em;">
          
                <h1 style="margin-bottom: 0em;"> CLIENTS <span> TESTIMONIALS </span></h1>
              
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      </ol>
      <div class="carousel-inner" style="margin-top: 1em; min-height: 380px; padding: 0em;">
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
  </div>
</div>

@stop