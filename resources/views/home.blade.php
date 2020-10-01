<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	
	<link rel="shortcut icon" href="images/{{ $setting['0']->favicon }}" type="image/x-icon">
	<!-- Font -->
	<title>{{ $seo['0']->title }}</title>

	<meta aria-describedat="{{ $seo['0']->meta_title }}">
	<meta title="{{ $seo['0']->desc }}">
	
	@include('header')

	<style>
		.section .heading:before { 
			background-color: {{ $setting['0']->color }}
		 }

		 .education-wrapper .education:after { 
			background-color: {{ $setting['0']->color }}
		  }
		  path { 
			stroke: {{ $setting['0']->color }}
		  }

		  .intro .social-icons > li > a:after {
			background-color: {{ $setting['0']->color }}
		  }

		  .portfolio-section .portfolioFilter a.current {
			  color: {{ $setting['0']->color }}
			  }

			  .portfolioFilter a:hover{  
				color: {{ $setting['0']->color }}
			}
	</style>
	
</head>
<body>
	
	<header>
		<div class="container">
		<div class="heading-wrapper" style="background-color: {{ $setting['0']->color }}">
				<div class="row">

					<div class="col-sm-6 col-md-6 col-lg-4">
						<div class="info">
							<i class="icon ion-ios-location-outline"></i>
							<div class="right-area">
                            <h5>{{ $setting['0']->location }}</h5>
							</div><!-- right-area -->
						</div><!-- info -->
					</div><!-- col-sm-4 -->
					
					<div class="col-sm-6 col-md-6 col-lg-4">
						<div class="info">
							<i class="icon ion-ios-telephone-outline"></i>
							<div class="right-area">
                                <h5>{{ $setting['0']->contact }}</h5>
							</div><!-- right-area -->
						</div><!-- info -->
					</div><!-- col-sm-4 -->
					
					<div class="col-sm-6 col-md-6 col-lg-4">
						<div class="info">
							<i class="icon ion-ios-chatboxes-outline"></i>
							<div class="right-area">
                                <h5>{{ $setting['0']->email }}</h5>
							</div><!-- right-area -->
						</div><!-- info -->
                    </div><!-- col-sm-4 -->
            
				</div><!-- row -->
			</div><!-- heading-wrapper -->
			
        <a class="downlad-btn" style="background-color: {{ $setting['0']->color }}" href="images/{{ $profile['0']->cv }}" download="{{ $profile['0']->cv }}">Download CV</a>
		</div><!-- container -->
	</header>
	
	<section class="intro-section">
		<div class="container">
			<div class="row">
				<div class="col-md-1 col-lg-2"></div>
				<div class="col-md-10 col-lg-8">

					<div class="intro">
						<div class="profile-img"><img src="images/{{ $profile['0']->profile }}" alt=""></div>
						<h2><b>{{ $profile['0']->name }}</b></h2>
						<h4 class="font-yellow" style="color: {{ $setting['0']->color }}">{{ $profile['0']->posts }}</h4>
						<ul class="information margin-tb-30">
							<li><b>BORN : </b>{{ $profile['0']->dob }}</li>
							<li><b>EMAIL : </b>{{ $profile['0']->email }}</li>
							<li><b>MARITAL STATUS : </b>{{ $profile['0']->status }}</li>
						</ul>
						<ul class="social-icons">
							<li><a href="{{ $profile['0']->lin }}"><i class="ion-social-linkedin"></i></a></li>
							<li><a href="{{ $profile['0']->ins }}"><i class="ion-social-instagram"></i></a></li>
							<li><a href="{{ $profile['0']->fb }}"><i class="ion-social-facebook"></i></a></li>
							<li><a href="{{ $profile['0']->twi }}"><i class="ion-social-twitter"></i></a></li>
						</ul>
					</div><!-- intro -->
					
				</div><!-- col-sm-8 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- intro-section -->
	
	<section class="portfolio-section section">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="heading">
						<h3><b>Portfolio</b></h3>
						<h6 class="font-lite-black"><b>MY WORK</b></h6>
					</div>
				</div><!-- col-sm-4 -->
				<div class="col-sm-8">
					<div class="portfolioFilter clearfix margin-b-80">
						<a href="#" data-filter="*" class="current"><b>ALL</b></a>
						@php foreach ($category as $show9) { @endphp
						<a href="#" data-filter=".{{ $show9->category_tag }}"><b>{{ $show9->category }}</b></a>
						@php }  @endphp
					</div><!-- portfolioFilter -->
				</div><!-- col-sm-8 -->
			</div><!-- row -->
		</div><!-- container -->
		
		<div class="portfolioContainer">

			@php foreach ($portfolio as $show10) { @endphp
			<div class="p-item {{ $show10->category_tag }}">
				<a href="images/{{ $show10->image }}" data-fluidbox>
					<img src="images/{{ $show10->image }}" alt=""></a>
			</div><!-- p-item -->
			@php }  @endphp
			
		</div><!-- portfolioContainer -->
		
	</section><!-- portfolio-section -->
	
	
	<section class="about-section section">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="heading">
						<h3><b>About me</b></h3>
						<h6 class="font-lite-black"><b>PROFESSIONAL PATH</b></h6>
					</div>
				</div><!-- col-sm-4 -->
				<div class="col-sm-8">

					<p class="margin-b-50">{{ $about['0']->content }}</p>

					<div class="row">

						<div class="col-sm-6 col-md-6 col-lg-3">
							<div class="radial-prog-area margin-b-30">
								<div class="radial-progress" data-prog-percent=".{{ $about['0']->no0 }}">
									<div></div>
									<h6 class="progress-title">{{ $about['0']->lang0 }}</h6>
								</div>
							</div><!-- radial-prog-area-->
						</div><!-- col-sm-6-->

						<div class="col-sm-6 col-md-6 col-lg-3">
							<div class="radial-prog-area margin-b-30">
								<div class="radial-progress" data-prog-percent=".{{ $about['0']->no1 }}">
									<div></div>
									<h6 class="progress-title">{{ $about['0']->lang1 }}</h6>
								</div>
							</div><!-- radial-prog-area-->
						</div><!-- col-sm-6-->

						<div class="col-sm-6 col-md-6 col-lg-3">
							<div class="radial-prog-area margin-b-30">
								<div class="radial-progress" data-prog-percent=".{{ $about['0']->no2 }}">
									<div></div>
									<h6 class="progress-title">{{ $about['0']->lang2 }}</h6>
								</div>
							</div><!-- radial-prog-area-->
						</div><!-- col-sm-6-->

						<div class="col-sm-6 col-md-6 col-lg-3">
							<div class="radial-prog-area margin-b-30">
								<div class="radial-progress" data-prog-percent=".{{ $about['0']->no3 }}">
									<div></div>
									<h6 class="progress-title">{{ $about['0']->lang3 }}</h6>
								</div>
							</div><!-- radial-prog-area-->
						</div><!-- col-sm-6-->

					</div><!-- row -->
				</div><!-- col-sm-8 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- about-section -->
	
	<section class="experience-section section " style="background-color: {{ $setting['0']->color }}">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="heading">
						<h3><b>Work Experience</b></h3>
						<h6 class="font-lite-black"><b>PREVIOUS JOBS</b></h6>
					</div>
				</div><!-- col-sm-4 -->
				<div class="col-sm-8">

					@php 

					foreach ($work as $show4) {  
						
					@endphp

					<div class="experience margin-b-50">
						<h4><b>{{ $show4->project }}</b></h4>
						<h5><b>{{ $show4->title }}</b></h5>
						<h6 class="margin-t-10">{{ $show4->year }}</h6>
						<p class="font-semi-white margin-tb-30">{{ $show4->content }} </p>
						<ul class="list margin-b-30">
							<li>{{ $show4->work1 }}</li>
							<li>{{ $show4->work2 }}.</li>
							<li>{{ $show4->work3 }}</li>
						</ul>
					</div><!-- experience -->

					@php }  @endphp
					
				</div><!-- col-sm-8 -->
			</div><!-- row -->
		</div><!-- container -->
		
	</section><!-- experience-section -->
	
	<section class="education-section section">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="heading">
						<h3><b>Education</b></h3>
						<h6 class="font-lite-black"><b>ACADEMIC CAREER</b></h6>
					</div>
				</div><!-- col-sm-4 -->
				<div class="col-sm-8">
					<div class="education-wrapper">

						@php 

					foreach ($education as $show5) {  
						
					@endphp

						<div class="education margin-b-50">
							<h4><b>{{ $show5->degree }}</b></h4>
							<h5 class="font-yellow" style="color: {{ $setting['0']->color }}"><b>{{ $show5->college }}</b></h5>
							<h6 class="font-lite-black margin-t-10">{{ $show5->year }}</h6>
							<p class="margin-tb-30">{{ $show5->content }} </p>
						</div><!-- education -->
						
						@php }  @endphp

					</div><!-- education-wrapper -->
				</div><!-- col-sm-8 -->
			</div><!-- row -->
		</div><!-- container -->
		
	</section><!-- about-section -->
	
	<section class="counter-section" id="counter">
		<div class="container">
			<div class="row">

				@php 

					foreach ($project as $show6) {  
						
					@endphp
			
				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="counter margin-b-30">
						<h1 class="title"><b><span class="counter-value" data-duration="400" data-count="{{ $show6->no1 }}">0</span></b></h1>
						<h5 class="desc"><b>{{ $show6->title1 }}</b></h5>
					</div><!-- counter -->
				</div><!-- col-md-3-->
				
				@php }  @endphp

			</div><!-- row-->
		</div><!-- container-->
    </section><!-- counter-section-->
	
@include('footer')
	
</body>
</html>