@extends('frontend.layout')
@section('content')

<!--====================  breadcrumb area ====================-->
<div class="page-breadcrumb bg-img space__bottom--r120" data-bg="assets/img/backgrounds/bc-bg.jpg">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="page-breadcrumb-content text-center">
					<h1>About Us</h1>
					<ul class="page-breadcrumb-links">
						<li><a href="index.html">Home</a></li>
						<li>About Us</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!--====================  End of breadcrumb area  ====================-->
<!--====================  about area ====================-->
<div class="about-area space__bottom--r120 ">
	<div class="container">
		<div class="row align-items-center row-25">
			<div class="col-md-6 order-2 order-md-1">
				<div class="about-content">
					<!-- section title -->
					<div class="section-title space__bottom--25">
						<h3 class="section-title__sub">Science 1982</h3>
						<h2 class="section-title__title">Provide the best quality service and construct</h2>
					</div>
					<p class="about-content__text space__bottom--40">Publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infance</p>
					<a href="contact.html" class="default-btn">Start now</a>
				</div>
			</div>
			<div class="col-md-6 order-1 order-md-2">
				<div class="about-image space__bottom__lm--30">
					<img src="assets/img/about/about-section-2.png" class="img-fluid" alt="">
				</div>
			</div>
		</div>
	</div>
</div>
<!--====================  End of about area  ====================-->

@endsection