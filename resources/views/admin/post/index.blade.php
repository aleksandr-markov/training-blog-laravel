@extends('layouts.admin')
@section('title', 'Show posts')
@section('content')
    {{--    {!! $posts !!}--}}

    {{--    {{ html_entity_decode("&lt;&gt;") }}--}}
    <div class="container row">
        @foreach($posts as $post)
            <div class="col-md-4 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3>{{ $post->title }}</h3>
                        @if(count($post->categories) == 0)
                            <span class="badge badge-danger">Uncategorized</span>
                        @else
                            @foreach($post->categories as $category)
                                <span class="badge badge-primary">{{ $category->name }}</span>
                            @endforeach
                        @endif
                    </div>
                    <div class="card-body">

                        <p>{{ strip_tags(substr($post->text, 0, 50)) }}</p>
                        <a href="{{ route('post.show', $post->id) }}" class="btn btn-sm btn-primary">Read More</a>
                        <a href="{{ route('post.edit', $post->id) }}" class="btn btn-sm  btn-success">Edit</a>
                        <form action="{{ route('post.destroy', $post->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger delete-btn">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
