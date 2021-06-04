@extends('layouts.app')

@section('styles')
@endsection

@section('scripts')

@endsection

@section('content')

<div id="resultz">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h4><strong>Showing 10</strong> of 140 results</h4>
			</div>
			<div class="col-md-6">
				<div class="search_bar_list">
					<input type="text" class="form-control" placeholder="Ex. Specialist, Name, Doctor...">
					<input type="submit" value="Search">
				</div>
			</div>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /results -->



<div class="container margin_60_35">
	<div class="row">
		<div class="col-lg-8">
			<div class="row">
				@foreach ($doctors as $doctor)


				<div class="col-md-6">
					<div class="box_list wow fadeIn">
						<a href="#0" class="wish_bt"></a>
						<figure>
							<a href="{{route('doctor-profile','1')}}"><img
									src="http://www.ansonika.com/findoctor/img/doctor_listing_1.jpg" class="img-fluid"
									alt="">
								<div class="preview"><span>Read more</span></div>
							</a>
						</figure>
						<div class="wrapper">
							<small>{{$doctor->doctorSpecialization->name}}</small>
							<h3>Dr. {{$doctor->first_name}} {{$doctor->last_name}}</h3>

							<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti
								cuodo....</p>
						</div>
						<ul>
							<li>
								{{ucfirst($doctor->gender)}} </li>
							<li>
							</li>
							<li><a href="{{route('doctor-profile','1')}}">Inquiry</a></li>
						</ul>
					</div>
				</div>
				<!-- /box_list -->
				@endforeach
			</div>
			<!-- /row -->

			<nav aria-label="" class="add_top_20">
				<ul class="pagination pagination-sm">
					<li class="page-item disabled">
						<a class="page-link" href="#" tabindex="-1">Previous</a>
					</li>
					<li class="page-item active"><a class="page-link" href="#">1</a></li>
					<li class="page-item"><a class="page-link" href="#">2</a></li>
					<li class="page-item"><a class="page-link" href="#">3</a></li>
					<li class="page-item">
						<a class="page-link" href="#">Next</a>
					</li>
				</ul>
			</nav>
			<!-- /pagination -->
		</div>
		<!-- /col -->

		<aside class="col-lg-4" id="sidebar">
			<h2 class="mb-4">Specializations</h2>
			<div class="box_style_cat" id="faq_box">
				<ul id="cat_nav">
					@foreach ($specializations as $specialization)
					<li>
						<a href="{{ route('search', ['specialization' => $specialization->id])}}" class="active"><i
								class="icon_document_alt"></i>{{$specialization->name}}</a>
					</li>
					@endforeach

				</ul>
			</div>
		</aside>
		<!-- /aside -->

	</div>
	<!-- /row -->
</div>
<!-- /container -->

@endsection