@extends('layouts.admin')

@section('content')

@section('title', 'Create Post')
@if(session('success'))
    <div class="alert alert-success" role="alert">
        <button class="close" type="button" data-dismiss="alert" aria-hidden="true"></button>
        <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
    </div>
@endif

<div class="card card-primary container-fluid">
    <div class="card-header">
        <h3 class="card-title">Post</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="post" action="{{ route('post.store') }}">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="title">Post title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Title">
            </div>
            <div class="form-group">
                <label for="editor">Post text</label>
                <textarea name="text" id="editor" class="editor"></textarea>
            </div>

            <div class="form-group">

                <label for="checkbox" class="form-label">Category selection</label>
                <ul>
                    @foreach($categories as $category)
                        <div class="form-check">
                            <li><input name="category[]" class="form-check-input" type="checkbox"
                                       value="{{ $category->id }}" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    {{ $category->name }}
                                </label></li>
                            @if($category->children)
                                @foreach($category->children as $children)
                                    <ul>
                                        <li><input name="category[]" class="form-check-input"
                                                   type="checkbox"
                                                   value="{{ $children->id  }}" id="flexCheckDefault">
                                            <label class="form-check-label"
                                                   for="flexCheckDefault">{{ $children->name }}</label></li>
                                    </ul>
                                @endforeach
                            @endif
                        </div>
                    @endforeach
                </ul>
            </div>

            <div class="form-group">
                <label for="feature_image">Feature Image</label>
                <input type="text" id="feature_image" name="feature_image" class="form-control" value="">
                <a href="" class="popup_selector" data-inputid="feature_image">Select Image</a>

            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection
