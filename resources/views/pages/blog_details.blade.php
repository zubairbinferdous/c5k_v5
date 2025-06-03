@extends('./layouts.master')

@push('add-css')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&display=swap" rel="stylesheet">

<style>

    
    .blog h1, .blog h2, .blog h3, .blog h4, .blog h5, .blog h6 {
        font-family: 'Merriweather', 'Times New Roman', Georgia, Garamond, serif;
        color: black !important;
    }

    .blog {
        font-family: 'Merriweather', 'Times New Roman', Georgia, Garamond, serif;
        color: black !important;
    }

    .blog p {
        font-family: 'Merriweather', 'Times New Roman', Georgia, Garamond, serif;
        text-align: justify;
        color: black !important;
    }

    .blog_sidebar{
        border: 1px solid #ccc;
        padding: 28px;
    }
    .blog_search{
        font-family: 'Merriweather', 'Times New Roman', Georgia, Garamond, serif;
        margin-bottom: 40px;
    }
    .blog_search h3{
        border-bottom: 3px solid #000000;
        padding-bottom: 6px;
        font-size: 20px;
        font-weight: 700;
    }
    .search_form{
        margin-top: 24px;
        position: relative;
    }
    .search_form input{
        width: 100%;
        border: 1px solid #ccc;
        padding: 7px 20px !important;
        border-radius: 4px;
    }
    .search_form .fa-magnifying-glass{
        position: absolute;
        top: 50%;
        right: 14px;
        transform: translateY(-50%);
        opacity: 0.5;
    }

    .blog_recent_post{
        /* margin-top: 40px; */
    }
    .blog_recent_post h3{
        border-bottom: 3px solid #000000;
        padding-bottom: 6px;
        font-size: 20px;
        font-weight: 700;
    }
    .all_blog_post{
       display: flex;
       gap: 24px;
    }
    .all_blog_post img{
        width: 90px;
    }
    .all_blog_post .blog_post_details{

    }
    .all_blog_post .blog_post_details h5{
        font-size: 14px;
        margin-bottom: 6px;
        color: #007aff !important;
    }
    .all_blog_post .blog_post_details p{
        font-size: 14px;
    }
</style>

@endpush

@section('userContent')

<div class="container mx-auto px-4 py-6 blog">
   <div class="flex flex-col lg:flex-row justify-between gap-6">
        <div class="w-full lg:w-2/3">
            <img src="{{ asset('public/backend/blog/' . $blogs->image) }}" alt="{{ $blogs->title }}"
                class="w-full h-auto rounded-lg shadow-sm">
            
            <h3 class="mt-6 text-2xl font-bold text-black font-serif">{{ $blogs->first()->title ?? '' }}</h3>
            
            <div class="mt-4 text-justify text-black space-y-4 leading-relaxed font-[Merriweather]">
                {!! $blogs->details !!}
            </div>
        </div>

        <div class="w-full lg:w-1/3">
            <div class="blog_sidebar">
                {{-- <div class="blog_search">
                    <h3>Search</h3>
                    <div class="search_form">
                        <input type="text" name="" id="" placeholder="Search...">
                        <i class="fas fa-search"></i>
                    </div>
                </div> --}}
    
                <div class="blog_recent_post">
                    <h3>Recent Posts</h3>
    
                    @foreach ($all_blogs as $row)
                        <div class="all_blog_post mt-6">
                            <img src="{{ asset('public/backend/blog/' . $row->image) }}" alt="{{ $row->title }}">
                            <div class="blog_post_details">
                                <a href="{{ route('blog.details', ['id' => $row->id]) }}" class="underline text-[#007aff]">
                                    <h5>{{ \Illuminate\Support\Str::limit($row->title, 56) }}...</h5>
                                </a>
                                <p>{{ $row->created_at->diffForHumans(); }} .....</p>
                            </div>
                        </div>
                    @endforeach

    
                    {{-- <div class="all_blog_post mt-6">
                        <img src="{{ asset('public/backend/blog/' . $blogs->image) }}" alt="{{ $blogs->title }}">
                        <div class="blog_post_details">
                            <a href="" class="underline text-[#007aff]">
                                <h5>Top Academic Publishing Trends You Need to Know in 2024</h5>
                            </a>
                            <p>05 Minute Ago .....</p>
                        </div>
                    </div> --}}
                </div>
            </div>

        </div>
   </div>
</div>

@endsection

@push('scripts')

@endpush