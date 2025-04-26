@extends('layouts.master')
@section('title', 'Requirements')
@section('content')

		
		<div class="container">
			<div class="head-text text-highlight">
				<h1>Article Submission Requirements</h1>
			</div>
		</div>

		@foreach( $requirements as $requirement )
		<section class="post-fluid">
			<div class="container-fluid">
				<div class="container">
					<div class="row post-items">
						<div class="col-md-10 col-md-offset-1 col-sm-12">
							<div class="post-item">

								<div class="post-item-paragraph">
									<h2>{{ $requirement->title }}</h2>

									<div>{!! $requirement->description !!}</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</section>
		@endforeach

@endsection