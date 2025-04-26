@extends('layouts.master')
@section('title', 'Authors')
@section('content')

		<div class="container">

			<div class="head-author">
				<h1 class="author-h1">Our Authors</h1>
				<p class="lead about-lead">Welcome to author panel.</p>
			</div>

		</div>


		<div class="post-fluid">
			<div class="container-fluid">

				<!-- ===  Text Shorten Code  ====  -->
				<?php
					// code for shortening the big content fetched from database
					 function textShorten($text, $limit = 200){
							$text = $text." ";
							$text = substr($text, 0, $limit);
							$text = substr($text, 0, strrpos($text, " "));
							$text = $text;
							return $text;
					}
				?> 
				<!-- ===  Text Shorten Code  ====  -->

				@foreach( $authors as $author )
				<div class="row laread-authors">
					<div class="author-item">
						<div class="author-picture">
							<img src="{{ asset('uploads/profile/'.$author->image_path) }}" onerror="this.onerror=null;this.src='/frontend/img/author.png';" alt="Author" />
						</div>
						<div class="author-subdetail">
							<h2><a href="{{ URL('/author/'.$author->id) }}">{{ $author->name }}</a></h2>
							<p class="info-small">
								<span><i class="fa fa-pencil-square-o"></i> 
								@if( $author->user_type == 'W' )
		                        Author
		                        @elseif( $author->user_type == 'R' )
		                        Reviewer
		                        @elseif( $author->user_type == 'A' )
		                        Admin
		                        @endif
		                    	</span>
								
								<span><i class="fa fa-envelope"></i> {{ $author->email }}</span>
								<span><i class="fa fa-map-marker"></i> {{ $author->address }}</span>
								<span><i class="fa fa-pencil-square-o"></i> {{ $author->articles->where('status', 1)->where('review_status', 2)->count() }}</span>
							</p>
							<p class="author-bio">
								{!! textShorten(strip_tags($author->profile)) !!}
								<a href="{{ URL('/author/'.$author->id) }}" class="more">See More »</a>
							</p>
						</div>
					</div>
				</div>
				@endforeach

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
		</div>

@endsection