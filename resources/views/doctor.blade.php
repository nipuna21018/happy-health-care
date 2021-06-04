@extends('layouts.app')

@section('styles')
@endsection

@section('scripts')

@endsection

@section('content')

<div id="breadcrumb">
	<div class="container">
		<ul>
			<li><a href="{{ route('home') }}">Home</a></li>
			<li><a
					href="{{ route('search', ['specialization' => $doctor->doctorSpecialization->id])}}">{{$doctor->doctorSpecialization->name}}</a>
			</li>
			<li>Doctor Name</li>
		</ul>
	</div>
</div>
<!-- /breadcrumb -->

<!-- <div id="map_contact"></div> -->
<!-- /map -->

<div class="container margin_60">
	<div class="row">
		<div class="col-xl-8 col-lg-8">
			<nav id="secondary_nav">
				<div class="container">
					<ul class="clearfix">
						<li><a href="#section_1" class="active">General info</a></li>
						<li><a href="#sidebar">Inquiry</a></li>
					</ul>
				</div>
			</nav>
			<div id="section_1">
				<div class="box_general_3">
					<div class="profile">
						<div class="row">
							<div class="col-lg-5 col-md-4">
								<figure>
									<img src="http://www.ansonika.com/findoctor/img/doctor_listing_1.jpg" alt=""
										class="img-fluid">
								</figure>
							</div>
							<div class="col-lg-7 col-md-8">
								<small>{{$doctor->doctorSpecialization->name}}</small>
								<h1>{{$doctor->first_name}} {{$doctor->last_name}}</h1>

								<ul class="statistic">
									<li>{{$doctor->gender}}</li>
									<li>{{$doctor->registration_number??"-"}}</li>
								</ul>
								<ul class="contacts">
									<li>
										<h6>Institutional Address</h6>
										{{$doctor->institute_address}}
									</li>
									<li>
										<h6>Residential Address</h6>
										{{$doctor->residential_address}}
									</li>
									<li>
										<h6>Phone</h6> <a href="tel://{{$doctor->mobile}}">{{$doctor->mobile}}</a>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<hr>

					<!-- /profile -->
					<div class="indent_title_in">
						<i class="pe-7s-user"></i>
						<h3>Professional statement</h3>
						<p>Mussum ipsum cacilds, vidis litro abertis.</p>
					</div>
					<div class="wrapper_indent">
						<p>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit
							nunc tortor eu nibh. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus
							hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id,
							mattis vel, nisi. Nullam mollis. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In
							nisi neque, aliquet vel, dapi.</p>
						<h6>Specializations</h6>
						<div class="row">
							<div class="col-lg-6">
								<ul class="bullets">
									<li>Abdominal Radiology</li>
									<li>Addiction Psychiatry</li>
									<li>Adolescent Medicine</li>
									<li>Cardiothoracic Radiology </li>
								</ul>
							</div>
							<div class="col-lg-6">
								<ul class="bullets">
									<li>Abdominal Radiology</li>
									<li>Addiction Psychiatry</li>
									<li>Adolescent Medicine</li>
									<li>Cardiothoracic Radiology </li>
								</ul>
							</div>
						</div>
						<!-- /row-->
					</div>
					<!-- /wrapper indent -->

					<hr>

					<div class="indent_title_in">
						<i class="pe-7s-news-paper"></i>
						<h3>Education</h3>
						<p>Mussum ipsum cacilds, vidis litro abertis.</p>
					</div>
					<div class="wrapper_indent">
						<p>Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus
							id, mattis vel, nisi. Nullam mollis. Phasellus hendrerit. Pellentesque aliquet nibh nec
							urna. In nisi neque, aliquet vel, dapi.</p>
						<h6>Curriculum</h6>
						<ul class="list_edu">
							<li><strong>New York Medical College</strong> - Doctor of Medicine</li>
							<li><strong>Montefiore Medical Center</strong> - Residency in Internal Medicine</li>
							<li><strong>New York Medical College</strong> - Master Internal Medicine</li>
						</ul>
					</div>
					<!--  End wrapper indent -->

					<hr>

					<div class="indent_title_in">
						<i class="pe-7s-cash"></i>
						<h3>Prices &amp; Payments</h3>
						<p>Mussum ipsum cacilds, vidis litro abertis.</p>
					</div>
					<div class="wrapper_indent">
						<p>Zril causae ancillae sit ea. Dicam veritus mediocritatem sea ex, nec id agam eius. Te pri
							facete latine salutandi, scripta mediocrem et sed, cum ne mundi vulputate. Ne his sint
							graeco detraxit, posse exerci volutpat has in.</p>
						<div class="table-responsive">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>Service - Visit</th>
										<th>Price</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>New patient visit</td>
										<td>$34</td>
									</tr>
									<tr>
										<td>General consultation</td>
										<td>$60</td>
									</tr>
									<tr>
										<td>Back Pain</td>
										<td>$40</td>
									</tr>
									<tr>
										<td>Diabetes Consultation</td>
										<td>$55</td>
									</tr>
									<tr>
										<td>Eating disorder</td>
										<td>$60</td>
									</tr>
									<tr>
										<td>Foot Pain</td>
										<td>$35</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<!--  /wrapper_indent -->
				</div>
				<!-- /section_1 -->
			</div>
			<!-- /box_general -->
		</div>
		<!-- /col -->
		<aside class="col-xl-4 col-lg-4" id="sidebar">
			<div class="box_general_3 booking">
				<div class="title">
					<h3>Inquiry</h3>
					<small>Respond within one hour</small>
				</div>
				<div id="message-booking"></div>
				<form method="post" action="{{route('patient.inquiry.store')}}" id="booking">
					{{ csrf_field() }}
					<input type="hidden" value="Dr. Julia Jhones" name="doctor_name_booking" id="doctor_name_booking">
					<div class="row">
						<div class="col-md-6 ">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Name" name="name_booking"
									value="{{Auth::user()}}" id="name_booking">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Last Name" name="lastname_booking"
									id="lastname_booking">
							</div>
						</div>
					</div>
					<!-- /row -->
					<div class="row">
						<div class="col-lg-12">
							<div class="form-group">
								<input type="email" class="form-control" placeholder="Email Address"
									name="email_booking" id="email_booking">
							</div>
						</div>
					</div>
					<!-- /row -->
					<div class="row">
						<div class="col-6">
							<div class="form-group">
								<input class="form-control" type="text" id="booking_date" name="booking_date"
									data-lang="en" data-min-year="2017" data-max-year="2020"
									data-disabled-days="10/17/2017,11/18/2017">
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<input class="form-control" type="text" id="booking_time" name="booking_time">
							</div>
						</div>
					</div>
					<!-- /row -->
					<div class="row">
						<div class="col-lg-12">
							<div class="form-group">
								<select class="form-control" name="booking_visit" id="booking_visit">
									<option value="">Select visit</option>
									<option value="General visit">General visit</option>
									<option value="Cardiothoracic Radiology">Cardiothoracic Radiology</option>
									<option value="Abdominal Radiology">Abdominal Radiology</option>
								</select>
							</div>
						</div>
					</div>
					<!-- /row -->
					<div class="row">
						<div class="col-lg-12">
							<div class="form-group">
								<textarea rows="5" id="booking_message" name="booking_message" class="form-control"
									style="height:80px;" placeholder="Additional message"></textarea>
							</div>
						</div>
					</div>
					<!-- /row -->
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<input type="text" id="verify_booking" class="form-control"
									placeholder="Human verify: 3 + 1 =?">
							</div>
						</div>
					</div>
					<!-- /row -->
					<hr>
					<div style="position:relative;">
						<input type="submit" class="btn_1 full-width" value="Book Now" id="submit-booking">
					</div>
				</form>
			</div>
			<!-- /box_general -->
		</aside>
		<!-- /asdide -->
	</div>
	<!-- /row -->
</div>
<!-- /container -->

@endsection