@extends('layouts.main')

@section('title')
Madoms Global Trade: Our Services
@stop

@section('content')
<div id="innerAbout">
	<div class="container-fluid">
		<div class="row">
            <div class="col-md-6">
			<h2>   Our Services </h2>
			  </div>
		
		<div class="col-md">
      <p class="text-right"> Trusted, Professional and Ambitious. <br>
      Have a tour about what we do.
			</p>
        </div>
        </div>
     </div>
</div>

<div id="innerContent">
	<div class="container-fluid">
		<div class="row">
    <div class="col-md-9">
      <h1> Our <span> Services </span> </h1>
      
      <p> Our main aim is to help our clients and partners whom we work with to succeed. We offer free advises to existing clients and partners we work with, so that the can take advantage of vast knowledge and experience in order to help them make informed decision about their financial business solution requirements and needs.
      <br>
      <br> The list of services we renders are included below:</p>
    
     <h3> Trade Consultancy </h3>
     <hr>
      <p> The responsibility for importing goods lies solely on the importer, and the potential pitfalls are many.The best protection against these risks is a robust Import Compliance Program, created with the help of the compliance experts at Madoms Global Trade Services. 
      <br> 
      Madoms Global Trade can help your company navigate the challenging Import regulations and identify risks that might expose your company to potential fines, or even forfeiture of goods. </p>
     
      <h3> Import and Export Finance </h3>
     <hr>
      <p> Finance Provides buyers more time to pay their imports and prepare time to pay their imports and prepare buyers' orders (Pre-shipment) in order to meet working capital requirements after cargo is shipped till buyer pays
      while Madoms Global Trade pays exporters on their behalf as per the due date and make options available to cover buyers' default risk with non-recourse variant.</p>
     
      <h3> Logistics </h3>
     <hr>
      <p> The on-time and cost-efficient movement of products to their final destination is the backbone of many organizational business models and a huge area for potential cost-savings. Madoms Global Trade can work as a trusted partner to maximize cost-savings while ensuring timely delivery of goods. 
      <br> We work with a number of Logistics Service Providers and can provide a service analysis based on your company needs to determine the best fit for your company.</p>
     
      <h3> End to End Trade Services </h3>
     <hr>
      <p> We provide effective and efficient Trade Services that support the day-to-day operation of your business. Working with clients across the country, through a mix of face-to-face meetings, tele-conferencing, and technological solutions, we deliver robust and compliant services that you can rely on. 
      <br>
      At MGT, we understand that each business is different, that’s why we ensure the service delivery you get is tailor-made to your requirements. Whether it is a temporary solution, full-time support, or specialist in-house training for your staff, we can assist in all of your compliance needs.  </p>
     
      <h3> Finance of Start-ups </h3>
      <hr> 
      <p> Do you need finance to start up your business and you dont know how to go about it? Don't worry. Madoms Global Trade offers simple digital trade finance solution to help you with your working capital needs. </p>
     
      <h3> Venture Capitalist </h3>
      <hr> 
      <p> We partner with high growth companies to accelerate their ideas to market. With many years of experience we can help you scale and build highly efficient commercialization engines to help your company grow faster. </p>
     
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

<div id="innerClient">
    <div class="text-center col-md">
			<h1> Our Valuable <span>Clients</span></h1>
			<p> People who have trusted us.</p>
    </div>
    
<marquee behavior="scroll" scrollamount="10">
   	<div class="row">
            <div class="col-mb-3">
                <div class="card one" style="width: 8rem;">
                <img src="images/cloudenergy.jpg" class="card-img-top" alt="Cloud Energy Photoelectric Ltd">
                </div>
		        </div>
		
            <div class="col-mb-3">
                <div class="card two" style="width: 8rem;">
                    <img src="images/ccetc.jpg" class="card-img-top" alt="CCETC Ossiomo Power">
                    </div>
            </div>

            <div class="col-mb-3">
                  <div class="card three" style="width: 8rem;">
                      <img src="images/winco.png" class="card-img-top" alt="Winco Foam">
                    </div>
            </div>

            <div class="col-mb-3">
                  <div class="card" style="width: 8rem;">
                      <img src="images/don.jpg" class="card-img-top" alt="Donasulu Brothers">
                    </div>
            </div>
     
            <div class="col-mb-3">
                <div class="card one" style="width: 8rem;">
                <img src="images/peenergy.png" class="card-img-top" alt="PE Energy">
                </div>
		        </div>
		
            <div class="col-mb-3">
                <div class="card two" style="width: 8rem;">
                    <img src="images/i.jpg" class="card-img-top" alt="Godwin Okafor and Sons">
                    </div>
            </div>

            <div class="col-mb-3">
                  <div class="card three" style="width: 8rem;">
                      <img src="images/b.jpg" class="card-img-top" alt="DMU Industries">
                    </div>
            </div>

            <div class="col-mb-3">
                  <div class="card" style="width: 8rem;">
                      <img src="images/d.png" class="card-img-top" alt="Nicol and Partners Nig. Ltd">
                     </div>
            </div>
            <div class="col-mb-3">
                  <div class="card" style="width: 8rem;">
                      <img src="images/d.png" class="card-img-top" alt="P. Dulus Enterprises">
                     </div>
            </div>
     </div>
    </marquee>



</div>

@stop