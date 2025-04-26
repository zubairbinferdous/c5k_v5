@extends('layouts.master')
@section('title', 'Article Details')
@section('content')

		@foreach( $articles as $article )
		<div class="container">
			<div class="head-text text-highlight">
				<h1>{{ $article->category->title ?? '' }}</h1>
			</div>
		</div>

		<section class="post-fluid">
			<div class="container-fluid">
				<div class="container">
					<div class="row post-items">
						<div class="post-item-banner">
							@if(is_file('uploads/article/'.$article->image_path))
		                    <img src="{{ asset('uploads/article/'.$article->image_path) }}" class="img-fluid" alt="Article">
		                    @endif
						</div>
						<div class="col-md-2">
							<div class="post-item-short">
								<span class="big-text">{{ date('d', strtotime($article->start_date)) }}</span>
								<span class="small-text">{{ date('M Y', strtotime($article->start_date)) }}</span>
							</div>
						</div>
						<div class="col-md-10">
							<div class="post-item">

								<div class="post-item-paragraph">
									<h2>{{ $article->title }}</h2>

									<?php 

									$articleFirstPart = substr($article->description, 0, 400);
									$articleLastPart = substr($article->description, 400);

									?>

									<p>{!! $articleFirstPart !!}</p>

									@if(!empty($article->video_id))
				                    <div class="embed-responsive embed-responsive-16by9">
				                      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{ $article->video_id }}?rel=0" allowfullscreen></iframe>
				                    </div>
				                    @endif

				                    <p>{!! $articleLastPart !!}</p>

								</div>
							</div>

							<div class="author-box">
								<div class="author">
									<a class="author-photo" href="{{ URL('/author/'.$article->user->id ?? '') }}"><img src="{{ asset('uploads/profile/'.$article->user->image_path ?? '') }}" onerror="this.onerror=null;this.src='/frontend/img/author.png';" alt="Author"></a>
									<div class="author-body">
										<h4 class="author-name">{{ $article->user->name ?? '' }}</h4>
										<a href="{{ URL('/author/'.$article->user->id ?? '') }}">view all post</a>
									</div>
								</div>
							</div>

							<div class="comment-box">
								<a class="btn btn-golden" href="#comment-form">Leave a comment</a>
								<div class="comment-tab">
									<a href="#comment-form" class="comment-info">Comments ({{ $article->comments->where('status', 1)->count() }})</a>
								</div>

								<div class="comment-block">

									@foreach( $comments as $comment )
									<div class="comment-item">
										<a class="comment-photo" href="#">
											<img src="{{ asset('frontend/img/user.png') }}" alt="" />
										</a>
										<div class="comment-body">
											<h6 class="comment-heading">{{ $comment->name }}   •   <span class="comment-date">{{ date('d M Y', strtotime($comment->created_at)) }}</span></h6>
											<p class="comment-text">{{ $comment->comment }}</p>
										</div>
									</div>
									@endforeach


									<div class="comment-form main-comment-form" id="comment-form">
										<form action="{{ URL::route('user.comment.store') }}" method="post">
											@csrf
											<input name="article_id" type="hidden" value="{{ $article->id }}">

											<textarea class="comment-textarea" name="comment" placeholder="Leave a comment..." required></textarea>
											<div class="at-focus">
												<input class="comment-input" name="name" placeholder="Name" type="text" required>
												<input class="comment-input" name="email" placeholder="Email" type="email" required>
												<button type="submit" class="comment-submit">Post Comment</button>
											</div>
										</form>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		@endforeach

@endsection