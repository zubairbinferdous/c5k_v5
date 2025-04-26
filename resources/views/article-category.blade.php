@extends('layouts.master')
@section('title', 'Article Category')
@section('content')

		<div class="container">
			@if(isset($article_category))
			<div class="head-text">
				<h1>{{ $article_category->title }}</h1>
				<p class="lead-text">{!! $article_category->description !!}</p>
			</div>
			@endif
		</div>

		<div class="container">
			<div class="row">
				<div class="col-md-8">

					<div class="post-fluid post-medium-vertical">

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

						@foreach( $articles as $article )
						<div class="container-fluid post-default">
							<div class="container-medium">
								<div class="row post-items">
									<div class="post-item-banner">
										@if(!empty($article->video_id))
					                    <div class="embed-responsive embed-responsive-16by9">
					                      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{ $article->video_id }}?rel=0" allowfullscreen></iframe>
					                    </div>
					                    @elseif(is_file('uploads/article/'.$article->image_path))
					                    <img src="{{ asset('uploads/article/'.$article->image_path) }}" class="img-fluid" alt="Article">
					                    @endif
									</div>
									<div class="col-md-12">
										<div class="post-item">
											<div class="post-item-paragraph">
												<div>
													<a href="{{ URL('/article/category/'.$article->category->id ?? '') }}" class="mute-text">{{ $article->category->title ?? '' }}</a>
												</div>
												<h3><a href="{{ URL('/article/'.$article->id) }}">{{ $article->title }}</a></h3>

												<div>
													{!! textShorten(strip_tags($article->description)) !!}
													<a href="{{ URL('/article/'.$article->id) }}" class="more">[...]</a>
												</div>
											</div>
											<div class="post-item-info clearfix">
												<div class="pull-left">
													<span>{{ date('d-M-Y', strtotime($article->start_date)) }}</span>   •   By <a href="{{ URL('/author/'.$article->user->id ?? '') }}">{{ $article->user->name ?? '' }}</a>
												</div>
												<div class="pull-right post-item-social">
													<a href="#" class="quick-read qr-not-phone"><i class="fa fa-eye"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						@endforeach

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
							<li class="@if( $category->id == $article_category->id ) active @endif"><a href="{{ URL('/article/category/'.$category->id) }}">{{ $category->title }} ({{ $category->articles->where('status', 1)->where('review_status', 2)->count() }})</a><i class="line"></i></li>
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

@endsection