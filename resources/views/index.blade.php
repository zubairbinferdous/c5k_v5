@extends('layouts.master')
@section('title', 'Home')
@section('content')

		<div class="container">
			<div class="head-text">
	            <h1 class="head-text-highlight">Let's Gather Your Knowledge</h1>
				
				<p class="lead-text">Welcome to our journal and research publication. You can post your own articles for approval. If you are writer feel free to join our community or read those articles that written by our authors.</p>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="post-mediums">

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
						<div class="row post-medium">
							<div class="col-md-5">
								<div class="row">

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

								</div>
							</div>
							<div class="col-md-7">
								<div class="post-item">
									<div class="medium-post-box clearfix">
										<div class="pm-top-info clearfix">
											<div class="pull-left">
												<a href="{{ URL('/article/category/'.$article->category->id ?? '') }}">{{ $article->category->title ?? '' }}</a>
											</div>
										</div>
										<div class="post-item-paragraph">
											<h2><a href="{{ URL('/article/'.$article->id) }}">{{ $article->title }}</a></h2>
											<div class="ellipsis-readmore">
												{!! textShorten(strip_tags($article->description)) !!}
											 <a class="more" href="{{ URL('/article/'.$article->id) }}">Read More »</a>
											</div>
										</div>
										<div class="pm-bottom-info clearfix">
											<div class="pull-left">
												{{ date('d-M-Y', strtotime($article->start_date)) }}   •   By <a href="{{ URL('/author/'.$article->user->id ?? '') }}">{{ $article->user->name ?? '' }}</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						@endforeach


						@if(count($articles) <= 0)
						<p class="text-center">No Article Found</p>
						@endif

					</div>
				</div>
			</div>
		</div>


		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 text-center">
					{{ $articles->links() }}
				</div>
			</div>
		</div><!-- /.container -->


		<div class="container">
			<div class="head-text">
				<h1 class="head-text-highlight">Articles Gallery</h1>
				<p id="filters" class="tags">
					@foreach( $article_categories as $article_category )
					<a data-filter=".{{ $article_category->id }}" href="#">{{ $article_category->title }}</a>
					@endforeach
					<a data-filter="*" href="#" class="unfilter hide">all</a>
				</p>
			</div>
		</div>


		<div class="container">
			<div class="row">
				<div class="masonry isotopeContainer">

					@foreach( $grid_articles as $grid_article )
					<div class="col-md-4 masonry-row col-sm-6 {{ $grid_article->category->id ?? '' }}">

						@if(!empty($grid_article->video_id))
	                    <div class="embed-responsive embed-responsive-16by9">
	                      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{ $grid_article->video_id }}?rel=0" allowfullscreen></iframe>
	                    </div>
	                    @elseif(is_file('uploads/article/'.$grid_article->image_path))
	                    <img src="{{ asset('uploads/article/'.$grid_article->image_path) }}" class="img-fluid" alt="Article">
	                    @else
	                    <div class="medium-date">
							<div class="medium-date-day">{{ date('d', strtotime($grid_article->start_date)) }}</div>
							<div class="medium-date-month">{{ date('M Y', strtotime($grid_article->start_date)) }}</div>
						</div>
						@endif

						<div class="masonry-content">
							<a href="{{ URL('/article/'.$grid_article->id) }}">{{ $grid_article->title }}</a>
							<div class="spot ellipsis-readmore">
								{!! textShorten(strip_tags($article->description)) !!}
							 <a href="{{ URL('/article/'.$grid_article->id) }}" class="more">Read More »</a>
							</div>
							<div class="links">
								<span>{{ date('d M', strtotime($grid_article->start_date)) }}</span>   •   <a href="{{ URL('/article/category/'.$grid_article->category->id ?? '') }}">#{{ $grid_article->category->title ?? '' }}</a>
							</div>
						</div>
					</div>
					@endforeach

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

@endsection