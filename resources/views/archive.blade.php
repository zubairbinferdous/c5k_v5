@extends('layouts.master')
@section('title', 'Archive')
@section('content')

		<section class="post-fluid">
			<div class="container-fluid">
				<div class="row archive-banner">
					<h2>Search Results For: <span>@if(isset($search)) {{ $search }} @endif</span></h2>
					<p class="lead about-lead">Read all the articles we ever had to show you here on our web.</p>
					<form action="{{ URL('/search') }}" method="get">
						<div class="form-group archive-search">
							<input type="search" class="form-control" name="search" placeholder="In case you’re lost, just search...">
							<button type="submit" class="btn btn-link"><i class="fa fa-search"></i></button>
						</div>
					</form>
				</div>

				<div class="row author-article-list">
					<div class="article-list-box">
						<div class="article-type clearfix">
							<ul class="with-line">
								<li role="presentation" class="active">
									<a href="#lastest" id="lastest-tab" role="tab" data-toggle="tab" aria-controls="lastest" aria-expanded="true">SEARCH</a>
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

									@if(count($articles) <= 0)
									<p class="text-center">No Result Found</p>
									@endif
									
								</ul>
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
