<!DOCTYPE html>
<html>
<head>
@section('head') 
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Madoms Global Trade Nigeria Limited, info@mgtnigeria.com" />
<meta name="keywords" content="mgt, madoms, madoms global,madoms global trade, global trade, trade" />
<link href="css/fonts.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
 <link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
 <link href="css/myglyphicons2.css" rel="stylesheet" />
<link href="css/jquery-ui-1.8.18.custom.css" rel="stylesheet" type="text/css"/>
<link href=" {{ URL::asset('css/main.css') }}" rel="stylesheet" media="screen, projection">
@show

<title>@yield('title') </title>

</head>

<body>
@section('body')
<div id="padder">
	<div class="container-fluid">
		<div class="row">
            <div class="col-9">
			<p>  <span class="glyphicon glyphicon-phone-alt"> Call Us: </span> +2348023306616 &nbsp; &nbsp;
			 <span class="glyphicon glyphicon-envelope"> Mail Us: </span> enquiries@mgtnigeria.com </p> 
		    </div>
		
		<div class="col-3">
			<p class="text-right">Connect with us: 
				<a href="#" id="fb" target="_blank" title="Like Our Page on facebook"></a>
				<a href="#" id="tw" target="_blank" title="Follow us on twitter"></a>
				<a href="#" id="lin" target="_blank" title="Follow us on linkedin"></a>
            </p>
        </div>
        </div>

	</div>
</div>

<nav id="nav" class="navbar navbar-expand-lg">
<div class="row" style="width:100%;"> 
  <div class="col-md-6" style="width:100%;">
<a class="navbar-brand" href="{{ URL::to('index') }}" >
  <img alt="Madoms Global" class="img-responsive" src="images/index.png" title="Madoms Global Trade" /> 
   <h1> Madoms <span> Global </span> Trade </h1> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  </div>

 <div class="col-md-6">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ URL::to('index') }}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ URL::to('about') }}">About Us</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="{{ URL::to('services') }}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Services
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ URL::to('services') }}">Trade Consultancy</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{ URL::to('services') }}">Import and Export Finance</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{ URL::to('services') }}">Logistics</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{ URL::to('services') }}">End to End Trade Services</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{ URL::to('services') }}">Finance Of Start-ups</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{ URL::to('services') }}">Venture Capitalist</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ URL::to('news') }}">News</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ URL::to('contact') }}">Contact Us</a>
      </li>
    </ul>
    </div>
</div>
</nav>
@show

@yield('content')

@section('indexContact')
<div id="indexContact">
	<div class="container-fluid">	
  <div class="row">
		<div class="col-md-4">
  		<h3> For Other Information </h3>
      <hr>
      <form>
  <div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label-sm">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control form-control-sm" id="name">
    </div>
  </div>
  <div class="form-group row">
    <label for="phone" class="col-sm-2 col-form-label-sm">Telephone</label>
    <div class="col-sm-10">
      <input type="tel" class="form-control form-control-sm" id="phone">
    </div>
  </div>
   <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label-sm">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control form-control-sm" id="inputEmail3">
    </div>
  </div>
  <div class="form-group row">
    <label for="validationTextarea" class="col-sm-2 col-form-label-sm">Comments</label>
    <div class="col-sm-10">
    <textarea class="form-control form-control-sm is-invalid" id="validationTextarea" placeholder="Required textarea" required></textarea>
   
    </div>
  </div>
    <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Submit </button>
    </div>
  </div>
</form>
	</div>
		
		<div class="col-md-4 row2">
			<h3> CONTACT Address </h3>
      <hr>
     <label> Office Address <i class="fa fa-building" aria-hidden="true"></i> 
    <p> 6 Osaze Ediae Street, GRA Benin City, Edo State, Nigeria. </p> </label> 
    <br>
		<label> Email Address <i class="fa fa-envelope" aria-hidden="true"></i>
    <p> enquiries@mgtnigeria.com, customercare@mgtnigeria.com  </p> </label> 
    <br>
		<label> Telephone <i class="fa fa-phone-square" aria-hidden="true"></i>  
		<p> Hotline: +2348023306616 </p>
		<p> Whatsapp: +2348023306616 </p> </label>
		</div>
		
		<div class="col-md-3">
		<h3> Quick Links </h3>
			<hr>
		<li> <a href="{{ URL::to('index') }}"> Home </a></li>
		<li> <a href="{{ URL::to('about') }}"> About Us </a> </li>
		<li> <a href="{{ URL::to('services') }}"> Our Services </a></li>
		<li> <a href="{{ URL::to('news') }}"> News </a></li>
		<li> <a href="{{ URL::to('contact') }}"> Contact </a></li>			
		</div>
	</div>
  </div>
</div>

<footer>
<div class="container-fluid">
  <div class="row">
	<div class="col-md-8">
		<p>&copy; 2020. All rights reserved Madoms Global Trade</p>
	</div>

  <div class="col-md-4">
		<p class="text-right">Developed by: <a href="http://www.webmatterz.com.ng" target="_blank" title="Web Matterz Nigeria">Web Matterz Nigeria</a></p>
    </div>
</div>

</div>

</footer>
@show

</body>

@section('script')
<script type="text/javascript" src="js/jquery-1.10.1.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.8.18.custom.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
@show
</html>
