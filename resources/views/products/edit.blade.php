@extends('layout.app')
@section('content')
<div class="row">
    <div class="col-12">
        <h2 class="float-left">Edit Product</h2>
        <a class="btn btn-primary float-right" href="{{ route('products.index') }}">Back</a>
    </div>
</div>
<form action="{{ route('products.update',$product->id) }}" method="POST">
    @csrf
    @method('PUT')
     <div class="row">
        <div class="col-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Name" value="{{ $product->name }}">
                @error('name')
                <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <strong>Price (RM):</strong>
                <input type="number" step="0.01" name="price" class="form-control @error('price') is-invalid @enderror" placeholder="99.90" value="{{ $product->price }}">
                @error('price')
                <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <strong>Detail:</strong>
                <textarea class="form-control @error('detail') is-invalid @enderror" rows="6" name="detail" placeholder="Detail">{{ $product->detail }}</textarea>
                @error('detail')
                <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <strong>Publish:</strong>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="publish" id="publish_yes" value="1" {{ $product->publish ? 'checked' : '' }}>
                    <label class="form-check-label" for="publish_yes">Yes</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="publish" id="publish_no" value="0" {{ $product->publish ? '' : 'checked' }}>
                    <label class="form-check-label" for="publish_no">No</label>
                </div>
            </div>
        </div>
        <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection
