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