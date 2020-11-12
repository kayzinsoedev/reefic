@extends('front-end.layouts.layout')

@section('main-container')

{{--<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav">
	      	<li class="nav-item active">
	        	<a class="nav-link" href="#">PRODUCT</a>
	      	</li>
		    <li class="nav-item">
		        <a class="nav-link" href="#">TOKEN SALE</a>
		    </li>
	      	<li class="nav-item">
	        	<a class="nav-link" href="#">TEAM</a>
	      	</li>
	      	<li class="nav-item">
	        	<a class="nav-link disabled" href="#">FAQ</a>
	      	</li>
	      	<li class="nav-item">
	        	<a class="nav-link disabled" href="#">CONTACT</a>
	      	</li>
	      	<li class="nav-item">
	        	<a class="nav-link disabled" href="#">FAQ</a>
	      	</li>
	      	<li class="nav-item">
	        	<a class="btn btn-outline-info nav-link disabled" href="#">WHITEPAPER</a>
	      	</li>
	      	<li class="nav-item">
	        	<a class="nav-link disabled" href="#">SIGN IN</a>
	      	</li>
	      	<li class="nav-item">
	        	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="	dropdown" aria-haspopup="true" aria-expanded="false">
	          		EN
        		</a>
	      	</li>
	    </ul>
  	</div>
</nav>

<div class="container-fluid">
	<div class="col-md-12">
		<h2 class="text-center">HAVE A REEFIC DAY!</h2>
		<p class="text-center">Reefic Protocol is a decentralised platform where customers can exchange reward <br>
		 points across multiple loyalty programs and selected cryptocurrencies.</p>
		<p class="text-center">Open for Token Sale in</p>
		<div class="container">
			<div class="row">
			    <div class="col-sm-4 offset-md-4">
			      	<button type="button" class="btn">28</button>
			      	<button type="button" class="btn">17</button>
			      	<button type="button" class="btn">48</button>
			      	<button type="button" class="btn">56</button>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-4 offset-md-4">
					<button type="button" class="btn btn-flat fist_page_button">WHITELIST</button>
					<button type="button" class="btn btn-flat fist_page_button">BOUNTY</button>
				</div>
			</div>
		</div>
	</div>

</div>
<div class="container-fluid">
	<div class="col-md-7">
		<h2>REEFIC PROTOCOL EXPLAINED</h2>

	</div>
</div>
<div class="container-fluid">
	<div class="col-md-7">
		<h2>ReefIc Press Releases</h2>
		<p class="text-center">Reefic Protocol is a decentralised platform where customers can exchange reward <br>
		 points across multiple loyalty programs and selected cryptocurrencies.</p>
	</div>
</div>
<div class="container-fluid">
	<div class="col-md-7">
		<h2>ReefIc Protocaol Updates</h2>
	</div>
</div>
<div class="container-fluid">
	<div class="col-md-7">
		<h2>Register</h2>

	</div>
</div>
--}}

<!-- Press Releases -->
@include('front-end.reefic-index')

<!-- Press Releases -->
@include('front-end.protocol-explained')

<!-- Press Releases -->
@include('front-end.press-releases')

<!-- Protocol Updates -->
@include('front-end.protocol-updates')

<!-- Benefits -->
@include('front-end.benefits')

<!-- Token Generation -->
@include('front-end.token-generation-event')

<!-- Implementataion roadmap -->
@include('front-end.implementation-roadmap')

<!-- Meet the cast -->
@include('front-end.meet-the-cast')

<!-- Partnerships -->
@include('front-end.partnerships')

<!-- Partnerships -->
@include('front-end.register')

<!-- Partnerships -->
@include('front-end.get-in-touch')

<!-- Partnerships -->
@include('front-end.footer')


@endsection



@section('scripts')

@endsection
