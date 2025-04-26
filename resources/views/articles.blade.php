@extends('layouts.master')
@section('title', 'Articles')
@section('content')

		<div class="container">
			<div class="head-text">
				<h1>All Articles</h1>
				<p class="lead-text"></p>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-md-8">

					<div class="container-fluid">
						<div class="row">

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

							<div class="masonry isotopeContainer">

								@foreach( $articles as $article )
								<div class="col-md-6 masonry-row col-sm-6">

									@if(!empty($article->video_id))
				                    <div class="embed-responsive embed-responsive-16by9">
				                      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{ $article->video_id }}?rel=0" allowfullscreen></iframe>
				                    </div>
				                    @elseif(is_file('uploads/article/'.$article->image_path))
				                    <img src="{{ asset('uploads/article/'.$article->image_path) }}" class="img-fluid" alt="Article">
				                    @else
				                    <div class="medium-date">
										<div class="medium-date-day">{{ date('d', strtotime($article->start_date)) }}</div>
										<div class="medium-date-month">{{ date('M Y', strtotime($article->start_date)) }}</div>
									</div>
									@endif

									<div class="masonry-content">
										<a href="{{ URL('/article/'.$article->id) }}">{{ $article->title }}</a>
										<div class="spot ellipsis-readmore">
											{!! textShorten(strip_tags($article->description)) !!}
										 <a href="{{ URL('/article/'.$article->id) }}" class="more">Read More »</a>
										</div>
										<div class="links">
											<span>{{ date('d M', strtotime($article->start_date)) }}</span>   •   <a href="{{ URL('/article/category/'.$article->category->id ?? '') }}">#{{ $article->category->title ?? '' }}</a>
										</div>
									</div>
								</div>
								@endforeach

							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								{{ $articles->links() }}
							</div>
						</div>


						@if(count($articles) <= 0)
						<p class="text-center">No Article Found</p>
						@endif
						
					</div>

				</div>

				<aside class="col-md-4">

					<div class="laread-right">

						<form action="{{ URL('/search') }}" method="get" class="laread-form search-form">
							<div class="input"><input type="text" name="search" class="form-control" placeholder="Search..."></div>
							<button type="submit" class="btn btn-link"><i class="fa fa-search"></i></button>
						</form>

						<ul class="laread-list">
							<li class="title">CATEGORY</li>

							@foreach( $categories as $category )
							<li><a href="{{ URL('/article/category/'.$category->id) }}">{{ $category->title }} ({{ $category->articles->where('status', 1)->where('review_status', 2)->count() }})</a><i class="line"></i></li>
							@endforeach
						</ul>

						<ul class="laread-list">
							<li class="title">RECENT ARTICLES</li>

							@foreach( $recent_articles as $recent_article )
							<li><a href="{{ URL('/article/'.$recent_article->id) }}">{{ $recent_article->title }}</a><i class="date">{{ date('d M', strtotime($recent_article->start_date)) }}</i></li>
							@endforeach
						</ul>

						<ul class="laread-list social-bar">
							<li class="title">FOLLOW US</li>
							<li class="social-icons">
							@if(isset($socials))
					          @foreach( $socials as $social )
					            @if(isset($social->facebook))
					            <a href="{{ $social->facebook }}" target="_blank"><i class="fa fa-facebook"></i></a>
					            @endif
					            @if(isset($social->twitter))
					            <a href="{{ $social->twitter }}" target="_blank"><i class="fa fa-twitter"></i></a>
					            @endif
					            @if(isset($social->linkedin))
					            <a href="{{ $social->linkedin }}" target="_blank"><i class="fa fa-linkedin"></i></a>
					            @endif
					            @if(isset($social->instagram))
					            <a href="{{ $social->instagram }}" target="_blank"><i class="fa fa-instagram"></i></a>
					            @endif
					            @if(isset($social->pinterest))
					            <a href="{{ $social->pinterest }}" target="_blank"><i class="fa fa-pinterest"></i></a>
					            @endif
					            @if(isset($social->youtube))
					            <a href="{{ $social->youtube }}" target="_blank"><i class="fa fa-youtube-play"></i></a>
					            @endif
					          @endforeach
					        @endif
							</li>
						</ul>

					</div>

				</aside>
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

@endsection