<script src="https://cdn.tailwindcss.com"></script>
<script src="{{mix('./public/scripts/scripts.js') }}" type="module"></script>
@extends('layouts.app')
@section('title', 'Create')

@section('content')
<div class="row font-onest justify-content-center mt-60">
    <div class="col-md-8">
    @vite(['resources/js/app.js'])
        <div class="">
            <div class="card-header">
                <div class="float-start">
                    Add New Product
                </div>
                <div class="float-end">
                    <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3 row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start">Name</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start">Description</label>
                        <div class="col-md-6">
                            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{ old('description') }}</textarea>
                            @if ($errors->has('description'))
                                <span class="text-danger">{{ $errors->first('description') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <label for="WeiCost" class="col-md-4 col-form-label text-md-end text-start" type="string">WeiCost</label>
                        <div class="col-md-6">
                            <input type="string" class="form-control @error('WeiCost') is-invalid @enderror" id="WeiCost" name="WeiCost" value="{{ old('WeiCost') }}">
                            @if ($errors->has('WeiCost'))
                                <span class="text-danger">{{ $errors->first('WeiCost') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="image" class="col-md-4 col-form-label text-md-end text-start">Product Image</label>
                        <div class="col-md-6">
                            <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
                            @if ($errors->has('image'))
                                <span class="text-danger">{{ $errors->first('image') }}</span>
                            @endif
                        </div>
                        <div class="col-md-2 mr-8 mb-40">
                            <img id="previewImage" class="w-112 h-106" alt="Preview Image">
                        </div>


                    <div class="mb-3 row">
                        <label for="contractAddress" class="col-md-4 col-form-label text-md-end text-start">Contract Address</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('contractAddress') is-invalid @enderror" id="contractAddress" name="contractAddress" value="{{ old('contractAddress') }}" onpaste="this.readOnly = true;">
                            @if ($errors->has('contractAddress'))
                                <span class="text-danger">{{ $errors->first('contractAddress') }}</span>
                            @endif
                        </div>
                    </div>

                    </div>

                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Add Product">
                    </div>
                </form>
            </div>
        </div>
    </div>    
</div>

<script>
    document.getElementById('image').addEventListener('change', function (e) {
        const previewImage = document.getElementById('previewImage');
        const file = e.target.files[0];
        const reader = new FileReader();

        reader.onloadend = function () {
            previewImage.src = reader.result;
        };

        if (file) {
            reader.readAsDataURL(file);
        } else {
            previewImage.src = "";
        }
    });
</script>
    
@endsection
