@extends('app')

@section('title', 'Edit Category')

@section('content')
    <h3 align="center" class="mt-5">Category</h3>

    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
            <div class="form-area">
                <form method="POST" action="{{ route('category.update', $category->id) }}">
                    {!! csrf_field() !!}
                    @method('PATCH')
                    <div class="row">
                        <div class="col-md-12">
                            <label>Category Name</label>
                            <input type="text" class="form-control" name="catname" value="{{ $category->catname }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <input type="submit" class="btn btn-primary" value="update">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('css')
    <style>
        .form-area {
            padding: 20px;
            margin-top: 20px;
            background-color: #b3e5fc;
        }
    </style>
@endpush
