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
			<li>Inquiries</li>
		</ul>
	</div>
</div>
<!-- /breadcrumb -->

<div class="container margin_60">
	<div class="row">
		<aside class="col-lg-3" id="sidebar">
			<div class="box_style_cat" id="faq_box">
				<ul id="cat_nav">
					<li><a href="{{route('patient.inquiries.index')}}" class="active"><i
								class="icon_document_alt"></i>My Inquiries</a></li>
					<li><a href="{{route('patient.profile.create')}}"><i class="icon_document_alt"></i>My Profile</a>
					</li>
				</ul>
			</div>
			<!--/sticky -->
		</aside>
		<!--/aside -->

		<div class="col-lg-9" id="faq">
			<div class="box_general">
				<h3>My Inquiries</h3>
				<p>
					Doctor inquiries </p>
				<div>
					@if (count($prescriptions)>0)


					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th>#</th>
									<th>Date</th>
									<th>Doctor Name</th>
									<th>Status</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
								@foreach($prescriptions as $item)
								<tr>
									<td>{{ $loop->iteration }}</td>
									<td>{{ $item->created_at }}</td>
									<td>{{ $item->doctor->first_name }} {{ $item->doctor->last_name }}</td>
									<td>{{ $item->status}}</td>
									<td>
										<a href="#" title="View Prescription"><button class="btn btn-info btn-sm"><i
													class="fa fa-eye" aria-hidden="true"></i>
												View</button></a>
										<a href="#" title="Edit Prescription"><button class="btn btn-primary btn-sm"><i
													class="fa fa-pencil-square-o" aria-hidden="true"></i>
												Edit</button></a>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
						<div class="pagination-wrapper"> {!! $prescriptions->appends(['search' =>
							Request::get('search')])->render()
							!!} </div>
					</div>
					@else
					<div class="alert alert-info text-center">
						<strong>There are no inquiries yet</strong>
						<br>

						<a class="btn btn-primary btn-sm mt-3" href="{{route('search')}}">Create Now</a>
					</div>
					@endif
				</div>
				<!-- /col -->
			</div>
		</div>
		<!-- /col -->
	</div>
	<!-- /row -->
</div>
<!-- /container -->

@endsection