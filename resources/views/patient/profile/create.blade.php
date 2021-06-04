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
			<li>My Profile</li>
		</ul>
	</div>
</div>
<!-- /breadcrumb -->

<div class="container margin_60">
	<div class="row">
		<aside class="col-lg-3" id="sidebar">
			<div class="box_style_cat" id="faq_box">
				<ul id="cat_nav">
					<li><a href="{{route('patient.inquiries.index')}}"><i class="icon_document_alt"></i>My Inquiries</a>
					</li>
					<li><a href="{{route('patient.profile.create')}}" class="active"><i class="icon_document_alt"></i>My
							Profile</a></li>
				</ul>
			</div>
			<!--/sticky -->
		</aside>
		<!--/aside -->

		<div class="col-lg-9" id="faq">
			<div class="box_general">
				<h3>Profile</h3>
				<p>
					This is your patient profile
				</p>
				<div>
					<div id="message-contact"></div>
					<form method="post" action="assets/contact.php" id="contactform">
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<input type="text" class="form-control" id="name_contact" name="name_contact"
										placeholder="Name">
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<input type="text" class="form-control" id="lastname_contact"
										name="lastname_contact" placeholder="Last name">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<input type="email" id="email_contact" name="email_contact" class="form-control"
										placeholder="Email">
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<input type="text" id="phone_contact" name="phone_contact" class="form-control"
										placeholder="Phone number">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<textarea rows="5" id="message_contact" name="message_contact" class="form-control"
										style="height:100px;" placeholder="Hello world!"></textarea>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" id="verify_contact" class=" form-control" placeholder=" 3 + 1 =">
								</div>
							</div>
						</div>
						<input type="submit" value="Submit" class="btn_1 add_top_20" id="submit-contact">
					</form>
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