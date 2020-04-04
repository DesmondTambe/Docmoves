@extends('layouts.app')

@section('content')
    @include('../inc/search') 

    <!-- Clinic and Specialities -->
			<section class="section section-specialities">
				<div class="container-fluid">
					<div class="section-header text-center">
						<h2>Specialities</h2>
						<p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<div class="row justify-content-center">
						<div class="col-md-9">
							<!-- Slider -->
							<div class="row specialities-slider slider"> 
							
								<!-- Slider Item -->
								<div class="col-md-3 speicality-item text-center">
									<div class="speicality-img">
										<img src="{{asset('img/specialities/specialities-01.png')}}" class="img-fluid" alt="Speciality">
										<span><i class="fa fa-circle" aria-hidden="true"></i></span>
									</div>
									<p>Urology</p>
								</div>	
								<!-- /Slider Item -->
								
								<!-- Slider Item -->
								<div class="col-md-3 speicality-item text-center">
									<div class="speicality-img">
										{{-- <img src="{{asset('img/specialities/specialities-02.png')}}" class="img-fluid" alt="Speciality"> --}}
										<img src="{{asset('img/specialities/neurology.jpg')}}" class="img-fluid" alt="Speciality">
										<span><i class="fa fa-circle" aria-hidden="true"></i></span>
									</div>
									<p>Neurology</p>	
								</div>							
								<!-- /Slider Item -->
								
								<!-- Slider Item -->
								{{-- <div class="speicality-item text-center">
									<div class="speicality-img">
										<img src="{{asset('img/specialities/hepatology 1.jpg')}}" class="img-fluid" alt="Speciality">
										<span><i class="fa fa-circle" aria-hidden="true"></i></span>
									</div>	
									<p>Orthopedic</p>	
								</div>							 --}}
								<!-- /Slider Item -->
								
								<!-- Slider Item -->
								<div class="col-md-3 speicality-item text-center">
									<div class="speicality-img">
										<img src="{{asset('img/specialities/hepatology 1.jpg')}}" class="img-fluid" alt="Speciality">
										<span><i class="fa fa-circle" aria-hidden="true"></i></span>
									</div>	
									<p>Hepatology</p>	
								</div>							
								<!-- /Slider Item -->
								
								<!-- Slider Item -->
								<div class="col-md-3 speicality-item text-center">
									<div class="speicality-img">
										<img src="{{asset('img/specialities/specialities-05.png')}}" class="img-fluid" alt="Speciality">
										<span><i class="fa fa-circle" aria-hidden="true"></i></span>
									</div>	
									<p>Dentist</p>
								</div>							
								<!-- /Slider Item -->
								
							</div>
							<!-- /Slider -->
							
						</div>
					</div>
				</div>   
			</section>	 
			<!-- Clinic and Specialities -->
@endsection