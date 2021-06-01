@extends('layouts.admin')
@section('title', 'Create category and subcategory')
@section('content')

    @if(session('success'))
        <div class="alert alert-success" role="alert">
            <button class="close" type="button" data-dismiss="alert" aria-hidden="true"></button>
            <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
        </div>
    @endif
    <div class="container-fluid">
        <div class="card card-success">
            <div class="card-header">
                <h3 class="card-title">Create category</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('category.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="categoryName">Category name</label>
                        <input type="text" name="name" class="form-control" id="categoryName"
                               placeholder="Sport">
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>

        <div class="card card-success">
            <div class="card-header">
                <h3 class="card-title">Create subcategory</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('category.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="parentCategoryName">Parent category name</label>
                        <select class="form-control" id="parentCategoryName" name="category_id">
                            <option value="NULL" selected>Category</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="subcategoryName">Subcategory name</label>
                        <input name="name" class="form-control" id="subcategoryName" type="text"
                               placeholder="Motosport">
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
@endsection
