@extends('app')

@section('title', 'Edit Product')

@section('content')
    <h3 align="center" class="mt-5">Product</h3>

    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
            <div class="form-area">
                <form method="POST" action="{{ route('product.update', $product->id) }}">
                    {!! csrf_field() !!}
                    @method('PATCH')
                    <div class="row">
                        <div class="col-md-6">
                            <label>Product Name</label>
                            <input type="text" class="form-control" name="productname"
                                value="{{ $product->productname }}">
                        </div>

                        <div class="col-md-6">
                            <label>Category</label> <br>
                            <select class="form-control" name="cat_id" id="cat_id" value="{{ $product->catname }}">
                                @foreach ($categories as $id => $name)
                                    <option value="{{ $id }}">{{ $name }}</option>
                                @endforeach
                            </select>

                        </div>

                        <div class="col-md-6">
                            <label for="">Price</label>
                            <input type="text" class="form-control" name="price" value="{{ $product->price }}">
                        </div>
                        <div class="col-md-6">
                            <label>Apakah Jedor Tampan?</label> <br>
                            <input type="text" class="form-control" name="jedor" value="JEDOR Pro MobileLegend"
                                disabled>
                        </div>


                        <div class="row">
                            <div class="col-md-12 mt-3">
                                <input type="submit" class="btn btn-primary" value="Register">
                            </div>
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
