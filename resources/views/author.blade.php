@extends('layouts.master')
@section('title', 'Author Details')
@section('content')

		<section class="post-fluid">
			<div class="container-fluid">

				@foreach( $authors as $author )
				<div class="row laread-author-detail">
					@if(is_file('uploads/profile/'.$author->image_path))
					<div class="author-picture">
						<img src="{{ asset('uploads/profile/'.$author->image_path) }}" alt="Author" />
					</div>
					@endif
					<div class="author-subdetail">
						<h2>{{ $author->name }}</h2>
						<p class="info-small">
							@if( $author->user_type == 'W' )
	                        Author
	                        @elseif( $author->user_type == 'R' )
	                        Reviewer
	                        @elseif( $author->user_type == 'A' )
	                        Admin
	                        @endif
						</p>
						<p class="author-bio">{!! $author->profile !!}</p>
						<p class="info-small">
							<span><i class="fa fa-map-marker"></i> {{ $author->address }}</span>
							<span><i class="fa fa-pencil-square-o"></i> {{ $author->articles->where('status', 1)->where('review_status', 2)->count() }}</span>
							<span><i class="fa fa-envelope"></i> {{ $author->email }}</span>
						</p>
					</div>
				</div>
				@endforeach

				<div class="row author-article-list">
					<div class="article-list-box">

						<div class="article-type clearfix" role="tablist">
							<ul>
								<li role="presentation" class="active">
									<a href="#lastest" id="lastest-tab" role="tab" data-toggle="tab" aria-controls="lastest" aria-expanded="true">LATEST</a>
								</li>
							</ul>
						</div>
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane fade in active" id="lastest" aria-labelledBy="lastest-tab">
								<ul class="article-list">

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
									<li>
										<div class="media clearfix">
											<div class="media-right"><a href="#" class="article-number hidden-xs">{{ date('d/m', strtotime($article->start_date)) }}</a></div>
											<div class="media-body">
												<h4 class="media-heading"><a href="{{ URL('/article/'.$article->id) }}">{{ $article->title }}</a></h4>
												<p>{!! textShorten(strip_tags($article->description)) !!}</p>
												<div class="article-info">
													<span class="visible-xs-inline">{{ date('d M', strtotime($article->start_date)) }}  •  </span>
													<a href="{{ URL('/article/category/'.$article->category->id ?? '') }}">{{ $article->category->title ?? '' }}</a>  •  
													<a href="{{ URL('/article/'.$article->id) }}">{{ $article->comments->where('status', 1)->count() }} comments</a>
												</div>
											</div>
										</div>
									</li>
									@endforeach
									
								</ul>

								@if(count($articles) <= 0)
								<p class="text-center">No Article Found</p>
								@endif

							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					{{ $articles->links() }}
				</div>
			</div>

		</div><!-- /.container -->

@endsection
