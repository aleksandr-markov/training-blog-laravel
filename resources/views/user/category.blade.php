@extends('layouts.application')

@section('content')

    <div class="container-wrap">
        <aside id="fh5co-hero">
            <div class="flexslider">
                <ul class="slides">
                    <li style="background-image: url(/user/images/img_bg_3.jpg);">
                        <div class="overlay-gradient"></div>
                        <div class="container-fluids">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3 slider-text slider-text-bg">
                                    <div class="slider-text-inner text-center">
                                        <h1>{{ $category->name }}</h1>
                                        @foreach($category->children as $category)
                                            <a href="{{ route('category', $category->id) }}" class="badge badge-success">{{ $category->name }}</a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </aside>


        @foreach($category->children as $category)
            <span class="badge badge-success">{{ $category->name }}</span>
        @endforeach

        {{--{{ dd($category) }}--}}
        <div id="fh5co-blog">
            <div class="row">
                @foreach($posts as $post)
                    <div class="col-md-4">
                        <div class="fh5co-blog animate-box">
                            <a href="#" class="blog-bg" style="background-image: url(/{{ $post->image_path }});"></a>
                            <div class="blog-text">
                                <span class="posted_on">{{ date("d/M/Y", strtotime($post->created_at)) }}</span>
                                <h3><a href="{{ route('post', $post->id) }}">{{ $post->title }}</a></h3>
                                <ul class="stuff">
                                    <li><i class="icon-heart3"></i>{{  $post->getLikes($post->id) }}</li>
                                    <li><a href="{{ route('post', $post->id) }}">Read More<i class="icon-arrow-right22"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{--            {{ $posts->links() }}--}}
        </div>
    </div>
@endsection
