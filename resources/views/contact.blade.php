@extends('layouts.master')
@section('title', 'Contact')
@section('content')

		<section class="post-fluid">
			<div class="container-fluid">
				<div class="row laread-contact">
					<div class="contact-box">
						<span class="icon-contact"><i class="fa fa-paper-plane"></i></span>
					</div>
					<div class="contact-info">
						<h2>Contact</h2>
						@foreach( $settings as $setting )
						<p class="text-contact"><i class="fa fa-map-marker"></i>
							{{ $setting->contact_address }}
						</p>
						<p class="text-contact"><i class="fa fa-envelope"></i>  
							{{ $setting->email_one }}@if(isset($setting->email_two)), {{ $setting->email_two }}@endif
						</p>
						<p class="text-contact"><i class="fa fa-phone"></i>  
							{{ $setting->phone_one }}@if(isset($setting->phone_two)), {{ $setting->phone_two }}@endif
						</p>
						@endforeach



						<div class="contact-form">

							<!-- Message Display -->
				            @if(Session::has('success'))
				            <p class="bg-success">{{ Session::get('success') }}</p>
				            @endif

				            <!-- Message Display -->
				            @if(Session::has('error'))
				            <p class="bg-danger">{{ Session::get('error') }}</p>
				            @endif

				            <!-- Error Display -->
				            @if ($errors->any())
					            @foreach ($errors->all() as $error)
					            <p class="bg-danger">{{ $error }}</p>
					            @endforeach
				            @endif

			            
							<form  action="{{ URL('/contact') }}" method="post">
							@csrf
								<input class="contact-input" type="text" name="name" placeholder="Your name*" required>

								<input class="contact-input" type="email" name="email" placeholder="Your email*" required>

								<input class="contact-input" type="text" name="phone" placeholder="Your phone">

								<input class="contact-input" type="text" name="subject" placeholder="Subject*" required>

								<textarea class="contact-textarea" name="message" placeholder="Your message" required></textarea>

								<div class="clearfix">
									<div class="progress-button">
										<p>
										<button type="submit" class="btn btn-grey btn-outline"><span>SEND</span></button>
										</p>
									</div>
								</div>
							</form>
						</div>
					</div>

				</div>
			</div>

			<div class="container-fluid">
				<div class="row become-author">
					<h5>Become an author</h5>
					<p>If you are a journalist or scientist, And you want to share your articles with us? Please join here.</p>
					
					  @guest
			          <a href="#" data-toggle="modal" data-target="#login-form"><i class="fa fa-pencil-square-o"></i></a>
			          @else
			          <a href="{{ URL('/dashboard') }}" target="_blank"><i class="fa fa-pencil-square-o"></i></a>
			          @endguest
				</div>
			</div>

		</section>

@endsection