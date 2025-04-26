@extends('layouts.master')
@section('title', 'Error 404')
@section('content')

		<section class="post-fluid">
			<div class="container-fluid">
				<div class="row laread-404">
					<div class="icon-box">
						<span class="icon-404"><i class="fa fa-unlink"></i></span>
					</div>
					<div class="info-404">
						<h2>Ooopps.!</h2>
						<p class="text-404">That page can’t be found. It looks like nothing was found at this location. Try the search below to find matching pages:</p>
						<form action="{{ URL('/search') }}" method="get">
							<div class="form-group archive-search">
								<input type="search" class="form-control" name="search" placeholder="Search...">
								<button type="submit" class="btn btn-link"><i class="fa fa-search"></i></button>
							</div>
						</form>
						<a href="{{ URL('/') }}" class="btn btn-golden">HOME PAGE</a>
					</div>
				</div>
			</div>
		</section>

@endsection