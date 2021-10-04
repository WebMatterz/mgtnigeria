@extends('layouts.main')

@section('title')
Madoms Global Trade: News
@stop

@section('content')
<div id="innerAbout">
	<div class="container-fluid">
		<div class="row">
            <div class="col-md-6">
			<h2>  Contact Us </h2>
			  </div>
		
		<div class="col-md">
      <p class="text-right"> We provide 24/7 support service. <br>
      Get in touch with us.
			</p>
        </div>
        </div>
     </div>
</div>

<div id="innerContent">
	<div class="container-fluid">
		<div class="row">
    <div class="col-md">
      <h1> Contact <span> Us </span> </h1>

      <div id="map" style="text-align:center;">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.6167286495206!2d5.58746281476961!3d6.313974295430471!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1040d24762072059%3A0xf2ee48883635be40!2sEdiae%20St%2C%20Ogogugbo%2C%20Benin%20City!5e0!3m2!1sen!2sng!4v1601305307267!5m2!1sen!2sng" width="80%" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>	</div>					
    
    </div>
    </div>
</div>
   
<div id="mainContact">
	<div class="container-fluid">	
  <div class="row">
		<div class="col-md-6">
  		<h3> Drop your <span>Message </span> Here </h3>
      <form>
  <div class="form-group row">
    <label for="name" class="col-md-2 col-form-label-md">Name</label>
    <div class="col-md-10">
      <input type="text" class="form-control form-control-md" id="name">
    </div>
  </div>
  <div class="form-group row">
    <label for="phone" class="col-md-2 col-form-label-md">Telephone</label>
    <div class="col-md-10">
      <input type="tel" class="form-control form-control-md" id="phone">
    </div>
  </div>
   <div class="form-group row">
    <label for="inputEmail3" class="col-md-2 col-form-label-md">Email</label>
    <div class="col-md-10">
      <input type="email" class="form-control form-control-md" id="inputEmail3">
    </div>
  </div>
  <div class="form-group row">
    <label for="validationTextarea" class="col-md-2 col-form-label-md">Comments</label>
    <div class="col-md-10">
    <textarea class="form-control form-control-sm is-invalid" id="validationTextarea" placeholder="Required textarea" required></textarea>
   
    </div>
  </div>
    <div class="form-group row">
    <div class="col-md-10">
      <button type="submit" class="btn btn-primary">Submit </button>
    </div>
  </div>
</form>
	</div>
		
		<div class="col-md row2">
            <h3> CONTACT <span>Address </span></h3>
            
     <label> Office Address <i class="fa fa-building" aria-hidden="true"></i>  </label>
    <p> 6 Osaze Ediae Street, GRA Benin City, Edo State, Nigeria. </p>  
    <br>
		<label> Email Address <i class="fa fa-envelope" aria-hidden="true"></i> </label> 
    <p> enquiries@mgtnigeria.com, customercare@mgtnigeria.com </p> 
    <br>
		<label> Telephone <i class="fa fa-phone-square" aria-hidden="true"></i>  </label> 
		<p> <span>Hotline:</span> +2348023306616 </p>
		<p> <span>Whatsapp:</span> +2348023306616 </p> 
		</div>
		
        </div>
  </div>
</div>


@stop