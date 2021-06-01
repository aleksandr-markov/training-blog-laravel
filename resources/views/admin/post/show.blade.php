@extends('layouts.admin')
@section('title', "Post show")
@section('content')

    <div class="container">
        @foreach($post->categories as $category)
            <span class="badge badge-primary">{{ $category->name }}</span>
        @endforeach
        <h1 class="display-5 fw-bold">{{ $post->title }}</h1>
          {{  "<p>asdasdas</p>" }}
        <div class="connte">{{ htmlspecialchars_decode('&lt;h1&gt;asddsadsadas&lt;/h1&gt;
&lt;p&gt;&lt;span style=&quot;text-decoration: underline;&quot;&gt;asdasddasads&lt;/span&gt;&lt;/p&gt;') }}</div>

        {{--            <button class="btn btn-primary btn-lg" type="button">Example button</button>--}}
    </div>

@endsection
