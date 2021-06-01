@extends('layouts.admin')
@section('title', 'Show categories')

@section('content')

    <div class="card-body">
        <ul class="list-group">
            @foreach ($categories as $category)
                <li class="list-group-item">
                    <div class="d-flex justify-content-between">
                        {{ $category->name }}

                        <div class="button-group d-flex">
                            <button type="button" class="btn btn-sm btn-primary mr-1 edit-category" data-toggle="modal"
                                    data-target="#editCategoryModal" data-id="{{ $category->id }}"
                                    data-name="{{ $category->name }}">Edit
                            </button>

                            <form action="{{ route('category.destroy', $category->id) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-sm btn-danger delete-btn">Delete</button>
                            </form>
                        </div>
                    </div>

                    @if ($category->children)
                        <ul class="list-group mt-2">
                            @foreach ($category->children as $child)
                                <li class="list-group-item">
                                    <div class="d-flex justify-content-between">
                                        {{ $child->name }}

                                        <div class="button-group d-flex">
                                            <button type="button" class="btn btn-sm btn-primary mr-1 edit-category"
                                                    data-toggle="modal" data-target="#editCategoryModal"
                                                    data-id="{{ $child->id }}" data-name="{{ $child->name }}">Edit
                                            </button>

                                            <form action="{{ route('category.destroy', $child->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-sm btn-danger delete-btn">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </li>
            @endforeach
        </ul>
    </div>
    </div>
    </div>


@endsection
